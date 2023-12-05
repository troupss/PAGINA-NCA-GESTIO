<?php
require_once 'model/productes.php';
require_once 'model/ModelBase.php';

class productesController
{
    public function mostrar_Productes(){
        $productes = new productes();
        echo "hola1";
        $producte = $productes->mostrar_tot("productes");
        echo "hola2";
        require_once "views/productes/mostrarProductes.php";
    }
}