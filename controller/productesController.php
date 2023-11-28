<?php
require_once "model/productes.php";
require_once "model/ModelBase.php";

class productesController
{
    public function mostrar_Productes(){
        $producte = new productes();
        $productes = $producte->mostrar_tot("productes");

        require_once "view/mostrarProductes.php";
        
    }
}