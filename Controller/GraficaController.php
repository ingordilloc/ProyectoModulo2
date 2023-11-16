<?php
namespace Controller;
use Model\GraficaModel;

class GraficaController{
    public function mostrar(){
        $registros = GraficaModel::mostrarDatos();
        return $registros;
    }
}


?>