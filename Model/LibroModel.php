<?php
namespace Model;

use Model\ConexionModel;

class LibroModel {
    public static function mostrarLibro(){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM libros");
        $stmt->execute();
        return $stmt->fetchAll();
    }
}
?>