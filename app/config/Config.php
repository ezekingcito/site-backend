<?php

namespace config;

class Config
{
    public const SERVER = "http://ezequiel.local/backend/";
    public const DEP_IMG = self::SERVER . "public/img";
    public const DEP_CSS = self::SERVER . "public/css";
    public const DEP_JS = self::SERVER . "public/js";

    public const DIRECTORIO = array(
        'home' => 'view/home',
        'login' => 'view/login/login',
        'error' => 'view/error'
    );
}
?>