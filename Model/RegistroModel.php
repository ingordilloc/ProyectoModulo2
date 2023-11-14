<?php
namespace Model;

use Model\ConexionModel;

class RegistroModel{
    public static function guardarLibro($datos){
        try {  
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO libreria (fecha, fkUsuario, fkLibros) VALUES (:fecha, :usuario, :libros) ");                                                                                            
            $stmt->bindParam(":libros", $datos['idlibro'], \PDO::PARAM_STR);      
            $stmt->bindParam(":usuario", $_SESSION['id'], \PDO::PARAM_STR);
            $stmt->bindParam(":fecha", $datos['fecha'], \PDO::PARAM_STR);
            return $stmt->execute() ? true: false;
        }catch( \Throwable $th ){
            return false;
        }
    }
    public static function mostrarRegistros(){
        $stmt = ConexionModel::conectar()->prepare("SELECT libreria.id as idlibreria, libros.nombre as nombreL, libros.autor as autorL, libros.editorial as editoriaL, usuario.nombres as nombre FROM libreria INNER JOIN libros on libros.idLibros=fkLibros INNER JOIN usuario on usuario.id = fkUsuario");
        $stmt->execute();
        return $stmt->fetchAll();

    }
    public static function mostrarRegistroOtros(){
        $stmt = ConexionModel::conectar()->prepare("SELECT libreria.id as idlibreria, nombre, autor, editorial FROM libreria INNER JOIN libros on libros.idLibros=fkLibros INNER JOIN usuario on usuario.id = fkUsuario ");
        //$stmt->bindParam(':id',$idrole,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();

    }
    public static function editarRegistro($idRegistro){
        $stmt = ConexionModel::conectar()->prepare("SELECT nombre, libreria.id as idlibreria FROM libreria INNER JOIN libros on fkLibros=libros.idLibros where libreria.id =:id ");
        $stmt->bindParam(':id',$idRegistro,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();
    }
    
    public static function actualizarLibro($datos){
        $stmt = ConexionModel::conectar()->prepare("UPDATE libreria SET fkLibros = :libros WHERE  libreria.id = :id ");
        $stmt->bindParam(':libros',$datos['idlibro'],\PDO::PARAM_STR);
        $stmt->bindParam(':id',$datos['idregistro'],\PDO::PARAM_INT);
        return $stmt->execute() ? true : false;

    }
    public static function borrarLibro($idRegistro){
        $stmt = ConexionModel::conectar()->prepare("SELECT libreria.id as idregistro, nombre, autor, editorial FROM libreria INNER JOIN libros on fkLibros = libros.idLibros WHERE  libreria.id = :id ");
        $stmt->bindParam(':id',$idRegistro,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetch();

    }
    public static function borrarConfirmadoLibro($id){
        if(!empty($_POST['idRegistro'])){
            $stmt = ConexionModel::conectar()->prepare("DELETE FROM libreria WHERE id =:id");
            $stmt->bindParam(':id', $id,\PDO::PARAM_STR);
            return $stmt->execute() ? true : false;
    
        }
     }

     public static function guardarPrestamo($datos){
        try {  
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO prestamos (fecha, fkUsuario, fkLibros) VALUES (:fecha, :usuario, :libros) ");                                                                                            
            $stmt->bindParam(":libros", $datos['libro'], \PDO::PARAM_STR);      
            $stmt->bindParam(":usuario", $_SESSION['id'], \PDO::PARAM_STR);
            $stmt->bindParam(":fecha", $datos['fecha'], \PDO::PARAM_STR);
            return $stmt->execute() ? true: false;
        }catch( \Throwable $th ){
            return false;
        }
    }
    public static function mostrarPrestamosOtros(){
        $stmt = ConexionModel::conectar()->prepare("SELECT prestamos.id as idprestamo, usuario.nombres as nombreP, nombre, autor, editorial, año FROM prestamos INNER JOIN libros on libros.idLibros=fkLibros INNER JOIN usuario on usuario.id = fkUsuario ");
        //$stmt->bindParam(':id',$idrole,\PDO::PARAM_INT);
        $stmt->execute();
        return $stmt->fetchAll();

    }


}
?>