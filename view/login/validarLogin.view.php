<?php

use controller\Usuarios;
use config\Config;

require_once realpath('./vendor/autoload.php');

Config::vista();
Usuarios::iniciarSesion();
