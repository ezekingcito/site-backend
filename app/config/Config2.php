<?php

namespace config;
use controller\Usuarios;

class Config
{
    public const SERVER = "http://ezequiel.local/backend/";
    public const DEP_IMG = self::SERVER . "public/img/";
    public const DEP_CSS = self::SERVER . "public/css/";
    public const DEP_JS = self::SERVER . "public/js/";

    public function __construct()
    {
        define('DIRECTORIO', array(
            'home' => 'view/home',
            'login' => 'view/login/login',
            'sigin' => 'view/sigin/sigin',
            'logout' => 'view/logout/logout',
            'validarRegistro' => 'view/sigin/validarRegistro',
            'validarLogin' => ['controller' => 'Usuarios', 'method' => 'iniciarSesion'],
            'error' => 'view/error'
        ));
    }

    public function iniciarSesion()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public function cerrarSesion()
    {
        self::iniciarSesion();
        $_SESSION = array();
        session_destroy();
        Config::redirigir('login');
    }

    public function verificarSesion()
    {
        self::iniciarSesion();
        if (!isset($_SESSION['usuario'])) {
            self::redirigir('login');
            exit;
        }
    }

    public function sesionIniciada()
    {
        self::iniciarSesion();
        if (isset($_SESSION['usuario'])) {
            self::redirigir('home');
            exit;
        }
    }

    public function vista()
    {
        self::iniciarSesion();

        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'login';

        if ($vista === 'home') {
            self::verificarSesion();
        } elseif ($vista === 'login' || $vista === 'sigin') {
            self::sesionIniciada();
        }

        if (array_key_exists($vista, DIRECTORIO)) {
            if (!is_array(DIRECTORIO[$vista])) {
                require_once DIRECTORIO[$vista] . '.view.php';
            }else {
                $controlador = DIRECTORIO[$vista];
                $controlador = new $controlador['controller']();
                DIRECTORIO[$vista]['method']();
            }
        } else {
            require_once DIRECTORIO['error'] . '.view.php';
        }
    }

    public function dep_css($archivo)
    {
        return self::DEP_CSS . $archivo . '.css';
    }

    public function dep_png($png)
    {
        return self::DEP_IMG . $png . '.png';
    }

    public function dep_js($archivo)
    {
        return self::DEP_JS . $archivo . '.js';
    }

    public function redirigir($ruta)
    {
        echo '
        <script>
            window.location="' . self::SERVER . $ruta . '";
        </script>
        ';
    }
}
