<?php

namespace config;

class Config
{
    public const SERVER = "http://ezequiel.local/backend/";
    public const DEP_IMG = self::SERVER . "public/img/";
    public const DEP_CSS = self::SERVER . "public/css/";
    public const DEP_JS = self::SERVER . "public/js/";

    public const DIRECTORIO = array(
        'home' => 'view/home',
        'login' => 'view/login/login',
        'sigin' => 'view/sigin/sigin',
        'productos' => 'view/productos',
        'logout' => 'view/logout/logout',
        'validarRegistro' => 'view/sigin/validarRegistro',
        'validarLogin' => 'view/login/validarLogin',
        'error' => 'view/error'
    );

    public static function iniciarSesion()
    {
        if (session_status() == PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function cerrarSesion()
    {
        self::iniciarSesion();
        $_SESSION = array();
        session_destroy();
        Config::redirigir('login');
    }

    public static function verificarSesion()
    {
        self::iniciarSesion();
        if (!isset($_SESSION['usuario'])) {
            self::redirigir('login');
            exit;
        }
    }

    public static function sesionIniciada()
    {
        self::iniciarSesion();
        if (isset($_SESSION['usuario'])) {
            self::redirigir('home');
            exit;
        }
    }

    public static function vista()
    {
        self::iniciarSesion();

        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'login';

        if ($vista === 'home') {
            self::verificarSesion();
        } elseif ($vista === 'login' || $vista === 'sigin') {
            self::sesionIniciada();
        }

        if (array_key_exists($vista, self::DIRECTORIO)) {
            require_once self::DIRECTORIO[$vista] . '.view.php';
        } else {
            require_once self::DIRECTORIO['error'] . '.view.php';
        }
    }

    public static function dep_css($archivo)
    {
        return self::DEP_CSS . $archivo . '.css';
    }

    public static function dep_png($png)
    {
        return self::DEP_IMG . $png . '.png';
    }

    public static function dep_js($archivo)
    {
        return self::DEP_JS . $archivo . '.js';
    }

    public static function redirigir($ruta)
    {
        echo '
        <script>
            window.location="' . self::SERVER . $ruta . '";
        </script>
        ';
    }
}
