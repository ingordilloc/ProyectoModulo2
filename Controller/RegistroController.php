<?php
namespace Controller;

use Model\RegistroModel;

class RegistroController {
    public function ingresar(){
        if (!empty($_POST['idlibro'])){
            $datos = array(
                "idlibro" => $_POST['idlibro'],
                "fecha"=> date("y/m/d")
            );
            $respuesta = RegistroModel::guardarLibro($datos);
            return $respuesta ? "guardado" : "error";
        }
    }
    public static function mostrar()
    { 
        $registro = RegistroModel::mostrarRegistros();
        return $registro;
    
    }
    public static function mostrarOtros()
    { 
          //$idrole=$_SESSION['id'];
        $inscripcion = RegistroModel::mostrarRegistroOtros();
        return $inscripcion;
    
    }

    public function editar()
    { 
        $idRegistro = $_GET['idRegistro'];
        $inscripcion = RegistroModel::editarRegistro($idRegistro);
        return $inscripcion;
    }
    public function actualizar()
    {  
        if (!empty($_POST['idRegistro']) && !empty($_POST['idlibro'])) {
            $datos = array(
                "idregistro" => $_POST['idRegistro'],
                "idlibro" => $_POST['idlibro'],
                "idusuario" => $_SESSION['id']
            );
            $respuesta = RegistroModel::actualizarLibro($datos);

            if($respuesta){
                header("Location: index.php?action=libros");
            }

        }
    }

    public function borrar(){
        if (!empty($_GET['idRegistro'])){
            $inscripcion = RegistroModel::borrarLibro($_GET['idRegistro']);
            return $inscripcion;
        }
    }
    public function confirmarBorrar(){
        if(!empty($_POST['idRegistro'])){
            $inscripcion = RegistroModel::borrarConfirmadoLibro($_POST['idRegistro']);
            if($inscripcion)
            { 
                header("Location: index.php?action=libros"); 
            }
        }
    }
    public function prestamo(){
        if (!empty($_POST['idlibro'])){
            $datos = array(
                "libro" => $_POST['idlibro'],
                "fecha"=> date("y/m/d")
            );
            $respuesta = RegistroModel::guardarPrestamo($datos);
            return $respuesta ? "guardado" : "error";
        }
    }

    public static function mostrarPrestamos()
    { 
          //$idrole=$_SESSION['id'];
        $inscripcion = RegistroModel::mostrarPrestamosOtros();
        return $inscripcion;
    
    }


}
?>