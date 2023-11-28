<?php
require_once "model/productes.php";
require_once "model/ModelBase.php";

class productesController
{
    public function mostrar_Productes(){
        $productes = new productes();
        $productes = $productes->mostrar_tot("productes");

        require_once "view/mostrarProductes.php";
        
    }
}