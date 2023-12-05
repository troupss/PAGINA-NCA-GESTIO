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
    public function guardar_Producte(){
        if(isset($_POST)){
            $producte = new productes();
            $producte->setProducte_nom($_POST['producte_nom']);
            $producte->setProducte_armari_id($_POST['armari_id']);
            $producte->setProducte_quantitat($_POST['quantitat']);
            //FALTE LA FOTO
            $guardar = $producte->insertar_Producte("NCA_productes");

            header("Location: index.php?controller=productes&action=mostrar_Productes");
        }
    }
}