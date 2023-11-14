<?php 
use Controller\RegistroController;
use Controller\LibroController;
$libro = new LibroController();
$registro= new RegistroController();
if (!empty($_SESSION['id']) && !empty($_SESSION['rol']== 'a') || !empty($_SESSION['rol']== 's') ) {  
?>


<h1>¿Desea Registrar un Nuevo Libro?</h1>

<div class="container">

    <form method="POST">
       
    <div class="alert alert-light" role="alert">
        <h1><?php echo $_SESSION['nombres'] ."  " .$_SESSION['apellidos'];   ?></h1>
    </div>

        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Libro</label>
                </div>
                <div class="col-10">
                <select name="idlibro">
                        <?php
                        
                        foreach($libro->mostrar() as $row => $item){
                            {$item['id'];}
                            echo  "<option value='{$item['idLibros']}'>{$item['nombre']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>

        <div class="form-group">
            <div class="row mt-3">
                <button class="btn btn-dark">Enviar</button>
            </div>
        </div>
        
    </form>
     
<?php 

$resultado=$registro->ingresar();

if($resultado == "guardado"){
    echo "<div class='alert alert-success mt-3' role=alert'>
    Libro registrado</div>";
}
elseif($resultado =="error"){
    echo "<div class='alert alert-success mt-3' role=alert'>
    error</div>";
}
}
?>
</div>