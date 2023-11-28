<?php
require_once "model/productes.php";
require_once "model/ModelBase.php";

class productesController
{
    public function mostrar_Productes(){
        echo "hola1";
        $producte = new productes();
        echo "hola2";

        $productes = $producte->mostrar_tot("NCA_productes");

        require_once "views/productes/mostrarProductes.php";
    }
}