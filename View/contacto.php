<?php 
use Controller\FormularioController;
$formulario = new FormularioController();
$formulario -> procesarFormulario();
?>
<h1>Contacto</h1>
<h3>¿Dudas?</h3>
<span>Ponte en contacto con nosotros, sera un gusto atenderté</span>

<div class="container">
    <form method="POST">
        <!-- T-Lux-->
        <div class="form-group">
            <label for="exampleInputEmail1" class="form-label mt-4">Correo Electronico</label>
            <input type="email" class="form-control w-50" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="correo" name="correo">
            <small id="emailHelp" class="form-text text-muted">Nunca compartiremos tu correo.</small>
        </div>

        <div class="form-group">
            <fieldset>
                <div class="col-2"><label class="form-label mt-4" for="readOnlyInput">Nombre:</label>
                </div>
                <div class="col-8"><input class="form-control w-50" id="readOnlyInput" type="text" placeholder="su nombre" name="nombre">
                </div>
            </fieldset>
        </div>


        <div class="form-group">
            <label for="exampleTextarea" class="form-label mt-4">Comentario:</label>
            <textarea class="form-control w-50" id="exampleTextarea" rows="3" name="comentario"></textarea>
        </div>

        <div class="form-group"> 
            <div class="row mt-3">
               <button type="submit" class="btn btn-dark w-25">Enviar</button> 
            </div>
        </div>
        
        
    </form>
</div>