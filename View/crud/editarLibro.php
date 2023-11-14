<?php

use Controller\RegistroController;
use Controller\LibroController;

$inscripcion = new RegistroController(); 

$registro = $inscripcion->editar();
$inscripcion->actualizar(); 
$libro = new LibroController();
?>

<form method="POST">


    <div class="form-group">
        <div class="row mb-3">
            <div class="col-2"><label>Nombre</label>
            </div>
            <h3><?php echo $_SESSION['nombres']. " ". $_SESSION['apellidos']?></h3>
            
        </div>

    </div>
    <div class="form-group">
        <div class="row">
            <div class="col-2"><label>Libro Anteriorr</label>
            </div>
            <div class="col-10"><input type="text" name="libro" class="form-control" value="<?php echo $registro['nombre']; ?>" readonly></div>
        </div>
    </div>

    <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Nuevo Libro</label>
                </div>
                <div class="col-10">
                <select name="idlibro">
                        <?php
                        
                        foreach($libro->mostrar() as $row => $item){
                            {$item['idLibros'];}
                            echo  "<option value='{$item['idLibros']}'>{$item['nombre']}</option>";
                        }
                        ?>
                    </select>
                </div>
            </div>
        </div>



    <input type="hidden" name="idRegistro" value="<?php echo $registro['idlibreria']; ?>">

    <div class="form-group">
        <div class="row mt-3">
            <button type="submit" class="btn btn-dark">Actualizar</button>
        </div>
    </div>

</form>