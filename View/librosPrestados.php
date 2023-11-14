<?php
use Controller\RegistroController;

if(!empty($_SESSION['id']) && ($_SESSION['rol']=='e') || ($_SESSION['rol']=='a') || ($_SESSION['rol']=='s') ){
  echo "<h4>Estudiante-Libros Prestados</h4>";
  $registros = new RegistroController;
$listado = $registros->mostrarPrestamos();

echo "   
<table class='table table-hover'>
<tr>
  <th class='col-1'>No</th>
  <th class='col-1'>Usuario</th>
  <th class='col-1'>Libro</th>
  <th class='col-1'>Autor</th>
  <th class='col-1'>Editorial</th>
  <th class='col-1'>Año</th>
</tr>
</table>

";
foreach ($listado as $row  =>  $item) {
  echo "   
  <table class='table table-hover'>
      <tr class='table-active row'>
        <th class='col'>{$item['idprestamo']}</th>
        <th class='col'>{$item['nombreP']}</th>
        <th class='col'>{$item['nombre']}</th>
        <th class='col'>{$item['autor']}</th>
        <th class='col'>{$item['editorial']}</th>
        <th class='col'>{$item['año']}</th>
      </tr>
  </table>
  ";

}
}

?>