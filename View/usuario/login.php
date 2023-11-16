<?php
use Controller\UsuarioController;

$usuario = new UsuarioController();

$resultado = $usuario->login();
if($resultado === false){
    echo "<div class='alert alert-success mt-3' role=alert'>
    Error de en los datos</div>";
}



?>
<h1>Iniciar</h1>
<div class="container">

    <form method="POST" id="formulario" data-intro='Formulario del Usuario'>
       

        <div class="form-group">
            <div class="row mb-3">
                <div class="col-2"><label>Usuario</label>
                </div>
                <div class="col-10"><input class="form-control" type="text" name="usuario" data-intro='Ingresar su Usuario' required></div>
            </div>

        </div>
        
        <div class="form-group">
            <div class="row">
                <div class="col-2"><label>Contraseña</label>
                </div>
                <div class="col-10"><input type="password" name="password" class="form-control" data-intro='Ingresar su Password' id="password"></div>
            </div>
        </div>
        

        <input type="hidden" name="token" value="<?php echo $_SESSION['token'] ?? '' ?>">

        <div class="form-group">
            <div class="row mt-3">
                <button type="submit" class="btn btn-dark">Iniciar</button>
            </div>
        </div>

        <div id="passwordError" title="Error en Password" hidden>
        <p>La contraseña es muy corta.</p>
    </div>
        
    </form>
     

</div>

<script>
     introJs().setOptions({
           showProgress: true,
        }).start()

     document.addEventListener("DOMContentLoaded", function() {
  document.getElementById("formulario").addEventListener('submit', validarFormulario); 
});

function validarFormulario(evento) {
    evento.preventDefault();
    let password = document.getElementById('password').value;
    if (password.length < 2) { 
        $.passwordError(); 
    return; 
  }
  this.submit(); 
}

$.passwordError =  function() {
    let element = document.getElementById("passwordError");
    element.removeAttribute("hidden");
    $( "#passwordError" ).dialog();
    //$("#passwordError").show();
  };
</script>