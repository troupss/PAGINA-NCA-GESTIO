<?php
class database{
    public static function conectar(){
        $conexio = new mysqli("localhost","root","","biblioteca");//falte afegir server nominalia
        $conexio->query("SET NAMES 'utf8'");

        return $conexio;
    }
}