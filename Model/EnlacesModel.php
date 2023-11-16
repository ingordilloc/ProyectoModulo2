<?php
namespace Model;

class EnlacesModel{
    public static function enlacesPagina($enlace){
        $modulo = match($enlace){
            "inicio"=> "View/inicio.php",
            "nosotros"=> "View/nosotros.php",
            "contacto"=> "View/contacto.php",
            "libros"=> "View/libreria.php",
            "libreria"=> "View/libreriaPublica.php",
            "registrar"=> "View/crud/registrarLibro.php",
            "editarLibro"=> "View/crud/editarLibro.php",
            "eliminarLibro"=> "View/crud/eliminarLibro.php",
            "prestarLibro"=> "View/prestarLibro.php",
            "libroPrestado"=> "View/librosPrestados.php",
            "login" => "View/usuario/login.php",
            "logout" => "View/usuario/logout.php",
            "crearUsuario" => "View/usuario/nuevoUsuario.php",
            "grafico" => "View/grafica.php",
            default => "View/error.php"

        };
        return $modulo;
    }
}
?>