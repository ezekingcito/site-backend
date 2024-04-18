<?php

namespace controller;

use model\TablaPersona;

require_once realpath('./vendor/autoload.php');
class Personas
{
    public static function obtener_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->where('nombre', 'Conta pesos')->all());
    }

    public static function limite()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->limit(14,2)->all());
    }

    public static function actualizar_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->actualizar(['nombre' => "aaaaaaaaaa", 'apellido' => 'aaaaaaa', 'email' => 'nunigunao@gmaail.com'])->where('id_persona', '1'));
    }

    public static function contar_datos()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->count(['nombre'])->where('nombre','test','OR')->all());
    }

    public static function insercion()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->insercion(["nombre" => "aaaaaaaaa", "apellido" => "aaaaaaaaa", "email" => "ehemplo@gmail.com"]));
    }

    public static function eliminar()
    {
        $persona = new TablaPersona();
        echo json_encode($persona->eliminar()->where('id_persona', '9')->get());
    }

    //Tarea
    public static function like(){
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->like('nombre', 'Ca', 'os')->all());
    }

    public static function max(){
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->max('edad')->all());
    }

    public static function min(){
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->min('edad')->all());
    }

    public static function sum(){
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->sum('id_persona')->all());
    }

    public static function avg(){
        $persona = new TablaPersona();
        echo json_encode($persona->consulta()->avg('edad')->all());
    }
}
