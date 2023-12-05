<?php
require_once "model/prestecs.php";
require_once "model/ModelBase.php";

class prestecsController
{
    public function mostrar_Prestecs(){
        $prestecs = new prestecs();
        $prestec = $prestecs->mostrar_tot("prestecs");

        require_once "views/prestecs/mostrarPrestecs.php";
    }


}