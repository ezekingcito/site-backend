<?php

namespace controller;

use config\Config;

require_once realpath('./vendor/autoload.php');
class Vista
{
    public static function vista()
    {
        $vista = isset($_REQUEST['view']) ? $_REQUEST['view'] : 'home';

        if (array_key_exists($vista, Config::DIRECTORIO)) {
            require_once Config::DIRECTORIO[$vista] . '.view.php';
        } else {
            require_once Config::DIRECTORIO['error'] . '.view.php';
        }
    }
}
?>