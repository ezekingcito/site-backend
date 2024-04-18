<?php
use controller\Productos;
require_once realpath('./vendor/autoload.php');
/* 
use controller\Personas;
use config\Config;


Config::vista(); */




echo "Muestra el total de productos existentes";
echo "<br>";
Productos::contar_datos();

echo "<br>";
echo "<br>";
echo "<br>";
echo "Mustra como maximo 3 productos";
echo "<br>";
Productos::limite();


echo "<br>";
echo "<br>";
echo "<br>";
echo "Muestra los productos usando un filtro de tu eleccion";
echo "<br>";
Productos::obtener_datos_filtro();

echo "<br>";
echo "<br>";
echo "<br>";
echo "Muestra todos los registro de la tabla productos";
echo "<br>";
Productos::obtener_datos();

echo "<br>";
echo "<br>";
echo "<br>";
echo "Muestra un solo producto";
echo "<br>";
Productos::obtener_dato_unico();

echo "<br>";
echo "<br>";
echo "<br>";
echo "Elimina 1 producto con base a su id";
echo "<br>";
Productos::eliminar();