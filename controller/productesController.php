<?php
require_once 'model/productes.php';
require_once 'model/ModelBase.php';

class productesController
{
    public function mostrar_Productes(){
        $productes = new productes();
        $producte = $productes->mostrar_tot("NCA_productes");

        require_once "views/productes/mostrarProductes.php";
    }

    public function afegir_Producte(){
        require_once "views/productes/afegirProductes.php";
    }
}