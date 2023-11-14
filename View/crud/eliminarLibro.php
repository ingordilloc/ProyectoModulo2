<?php
use Controller\RegistroController;

$inscripcion = new RegistroController();
$registro = $inscripcion->borrar();
$inscripcion->confirmarBorrar();
?>

<form method="post">
    <?php echo $_SESSION['nombres']. " " . $_SESSION['apellidos'];?>
    <br>
    <table class='table table-hover'>
    <tr class='table-active row'>
      <th class='col'><?php echo $registro['nombre'];?></th>
      <th class='col'><?php echo $registro['autor'];?></th>
      <th class='col'><?php echo $registro['editorial'];?></th>
    </tr>
    </table>
    <p>¿Desea Eliminar Libro?</p>
    <input type="hidden" name="idRegistro" value="<?php echo $registro['idregistro']?>">
    <button type="submit" class="btn btn-dark">Borrar</button>
</form>