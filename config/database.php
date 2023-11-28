<?php
class database{
    public static function conectar(){
        $db = new mysqli("troups.ftp.tb-hosting.com","troupscat@troupscat","Troup37$","troups_loginphp");
        //$conexio->query("SET NAMES 'utf8'");
        if ($db->connect_error) {
            die("La conexión ha fallado, error número " . $db->connect_errno . ": " . $db->connect_error);
        }

        return $db;
    }
}