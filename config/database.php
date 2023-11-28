<?php
class database{
    public static function conectar(){
        $conexio = new mysqli("troups.ftp.tb-hosting.com","troupscat@troupscat","","troups_loginphp");
        $conexio->query("SET NAMES 'utf8'");

        return $conexio;
    }
}