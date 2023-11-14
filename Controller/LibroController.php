<?php
namespace Controller;

use Model\LibroModel;

class LibroController {

    public function mostrar() {
        $libro = LibroModel::mostrarLibro();
        return $libro;
    }
}

?>