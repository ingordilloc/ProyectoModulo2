<?php
namespace Model;

use Model\ConexionModel;

class GraficaModel{

    public static function mostrarDatos(){
        $stmt = ConexionModel::conectar()->prepare("SELECT autor, count(autor) as cantidad FROM libreria INNER JOIN libros on fkLibros = libros.idLibros GROUP BY autor");
        $stmt->execute();
        return $stmt->fetchAll(\PDO::FETCH_ASSOC);
    }
}

?>