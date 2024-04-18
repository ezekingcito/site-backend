<?php

namespace controller;

use model\TablaUsuario;
use config\Config;

require_once realpath('./vendor/autoload.php');

class Usuarios
{
    public static function registro()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $nombre = $_POST['nombre'];
            $apellido = $_POST['apellido'];
            $sexo = $_POST['sexo'];
            $fecha_nacimiento = $_POST['fecha_nacimiento'];
            $correo_electronico = $_POST['correo_electronico'];
            $usuario = $_POST['usuario'];
            $password = $_POST['password'];
            $passhash = password_hash($password, PASSWORD_DEFAULT);
            $personaModel = new TablaUsuario();

            $personaData = [
                'nombre' => $nombre,
                'apellido' => $apellido,
                'sexo' => $sexo,
                'fecha_nacimiento' => $fecha_nacimiento,
                'correo_electronico' => $correo_electronico,
                'usuario' => $usuario,
                'password' => $passhash
            ];

            $result = $personaModel->insercion($personaData);

            if ($result[0] == 1) {
                Config::redirigir('login');
            } else {
                echo "Error al registrar el Usuario. Por favor, inténtalo de nuevo.";
            }
        } else {
            Config::redirigir('login');
            exit;
        }
    }


    public static function iniciarSesion()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $correo_electronico = $_POST['correo_electronico'];
            $password = $_POST['password'];

            $personaModel = new TablaUsuario();

            $usuarioEncontrado = $personaModel->consulta()->where('correo_electronico', $correo_electronico)->first();

            if ($usuarioEncontrado) {
                if (password_verify($password, $usuarioEncontrado['password'])) {
                    session_start();
                    $_SESSION['usuario'] = $usuarioEncontrado['usuario'];
                    $_SESSION['usuario_id'] = $usuarioEncontrado['id_usuario'];
                    Config::redirigir('home');
                } else {
                    Config::redirigir('login');
                }
            } else {
                echo "Usuario no encontrado o contraseña incorrecta. Por favor, inténtalo de nuevo.";
            }
        } else {
            Config::redirigir('login');
            exit;
        }
    }
}
