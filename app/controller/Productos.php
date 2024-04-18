<?php

namespace controller;

use model\TablaProducto;

require_once realpath('./vendor/autoload.php');
class Productos
{
    public static function obtener_datos()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->consulta()-> all());
    }

    public static function obtener_datos_filtro()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->consulta()->where('nombre','Cubre Puños','OR')->all());
    }

    public static function obtener_dato_unico()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->consulta()->first());
    }


    public static function limite()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->consulta()->limit(3)->all());
    }

    public static function contar_datos()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->count(['id_producto'])->all());
    }


    public static function insercion()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->insercion(["nombre" => "Cubre Puños", "marca" => "Unica", "precio" => "$400.00", "cantidad" => "70"]));
    }

    public static function eliminar()
    {
        $persona = new TablaProducto();
        echo json_encode($persona->eliminar()->where('id_producto', '4')->get());
    }

}
