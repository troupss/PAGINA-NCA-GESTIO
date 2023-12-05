<?php
class database{
    public static function conectar(){
        $conexio = new mysqli("troups-loginphp.db.tb-hosting.com","troups_troups","Troup37$","troups_loginphp");
        $conexio->query("SET NAMES 'utf8'");

        return $conexio;
    }
}