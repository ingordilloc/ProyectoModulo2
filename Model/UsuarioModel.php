<?php
namespace Model;

use Model\ConexionModel;

class UsuarioModel{
    public static function logeado($datos){
        $stmt = ConexionModel::conectar()->prepare("SELECT * FROM usuario where usuario = :usuario");
        $stmt ->bindParam(":usuario", $datos['usuario'], \PDO::PARAM_STR);
        $stmt->execute();
        return $stmt->fetch();
    }

    public static function guardarUsuario($datos){
        try {  
            $stmt = ConexionModel::conectar()->prepare("INSERT INTO usuario (nombres, apellidos, usuario, clave, rol) VALUES (:nombres, :apellidos, :usuario, :clave, :rol) ");
            $stmt->bindParam(":nombres", $datos['nombres'], \PDO::PARAM_STR);
            $stmt->bindParam(":apellidos", $datos['apellidos'], \PDO::PARAM_STR);
            $stmt->bindParam(":usuario", $datos['usuario'], \PDO::PARAM_STR);
            $stmt->bindParam(":clave", $datos['password'], \PDO::PARAM_STR);
            $stmt->bindParam(":rol", $datos['rol'], \PDO::PARAM_STR);
            return $stmt->execute() ? true: false;//Ejecucion de la consulta.
        }
        catch( \Throwable $th ){
                return false;
        }
    }
}
?>