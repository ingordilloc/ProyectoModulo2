<?php

namespace Controller;

use Model\UsuarioModel;

class UsuarioController{   

public function login(){
    $token = filter_input(INPUT_POST, 'token', FILTER_SANITIZE_FULL_SPECIAL_CHARS);
    if(!empty($_POST['usuario']) && !empty($_POST['password']) ){
        $usuario = strClean(($_POST['usuario']));
        $password = strClean(($_POST['password']));
        $datos = array(
            'usuario' => $usuario
        );
        $respuesta = UsuarioModel::logeado($datos);
        $resultado = password_verify($password, $respuesta['clave']);

        if ($resultado == true){
            $_SESSION['id'] = $respuesta['id'];
            $_SESSION['nombres'] = $respuesta['nombres'];
            $_SESSION['apellidos'] = $respuesta['apellidos'];
            $_SESSION['usuario'] = $respuesta['usuario'];
            $_SESSION['clave'] = $respuesta['clave'];
            $_SESSION['rol'] = $respuesta['rol'];
            header("location: index.php?action=inicio&id={$respuesta['id']}");

        } else {
            return "ERROR";
        }
    }
}

public function logout(){
    session_destroy();
    header("location: index.php?action=inicio");
}

public function crearUsuario(){
    if(!empty($_POST['usuario']) && !empty($_POST['password']) && !empty($_POST['nombres'])){

        $usuario = strClean($_POST['usuario']);
        $password = strClean($_POST['password']);
        $password = password_hash($password, PASSWORD_ARGON2ID);
        $nombres = strClean($_POST['nombres']);
        $apellidos = strClean($_POST['apellidos']);
        $rol = strClean($_POST['rol']);

        $datos=array(
            'usuario' => $usuario,
            'password' => $password,
            'nombres' => $nombres,
            'apellidos' => $apellidos,
            'rol' => $rol,
        );
        $respuesta = UsuarioModel::guardarUsuario($datos);
        return $respuesta;
    }
}





}


?>