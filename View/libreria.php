<?php
use Controller\RegistroController;


if (!empty($_SESSION['id'] && ($_SESSION['rol']== 'a') || ($_SESSION['rol']== 's'))){  
  echo "<h4>Administrador-Libros Disponibles</h4>";
  $registros = new RegistroController;
  $listado = $registros->mostrar();

echo "   
<table class='table table-hover'>
<tr>
  <th class='col-1'>No</th>
  <th class='col'>Usuario</th>
  <th class='col'>Libro</th>
  <th class='col'>Autor</th>
  <th class='col'>Editorial</th>
  <th class='col'>Editar</th>
  <th class='col'>Eliminar</th>
</tr>
</table>

";

foreach($listado as $row => $item) {    
echo "   
<table class='table table-hover'>
    <tr class='table-active row'>
      <th class='col-1'>{$item['idlibreria']}</th>
      <th class='col'>{$item['nombre']}</th>
      <th class='col'>{$item['nombreL']}</th>
      <th class='col'>{$item['autorL']}</th>
      <th class='col'>{$item['editoriaL']}</th>
      <th class='col'><a href='index.php?action=editarLibro&idRegistro={$item['idlibreria']}'>Editar</a></th>
      <th class='col'><a href='index.php?action=eliminarLibro&idRegistro={$item['idlibreria']}'>Eliminar</a></th>
    </tr>
</table>
";
 }
}
elseif(!empty($_SESSION['id']) && !empty($_SESSION['rol']=='e')){
  echo "<h4>Estudiante-Libros Disponibles</h4>";
  $registros = new RegistroController;
$listado = $registros->mostrarOtros();

echo "   
<table class='table table-hover'>
<tr>
  <th class='col-1'>No</th>
  <th class='col'>Libro</th>
  <th class='col'>Autor</th>
  <th class='col'>Editorial</th>
  <th class='col'>Prestar</th>
</tr>
</table>

";

foreach ($listado as $row  =>  $item) {
  echo "   
  <table class='table table-hover'>
      <tr class='table-active row'>
        <th class='col-1'>{$item['idlibreria']}</th>
        <th class='col'>{$item['nombre']}</th>
        <th class='col'>{$item['autor']}</th>
        <th class='col'>{$item['editorial']}</th>
        <th class='col'><a href='index.php?action=prestarLibro&idRegistro={$item['idlibreria']}'>Prestar</a></th>
      </tr>
  </table>
  ";

}

}

echo "<li class='nav-item'>
<a class='nav-link' href='index.php?action=grafico'>Grafica de Libros</a>
</li>"

?>