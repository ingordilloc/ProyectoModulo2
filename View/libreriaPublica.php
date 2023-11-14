<?php 
use Controller\RegistroController;
echo "<h4>Libros Disponibles</h4>";
  $registros = new RegistroController;
  $listado = $registros->mostrar();

echo "   
<table class='table table-hover'>
<tr>
  <th class='col-1'>No</th>
  <th class='col-1'>Libro</th>
  <th class='col-1'>Autor</th>
  <th class='col-1'>Editorial</th>
</tr>
</table>

";

foreach($listado as $row => $item) {    
echo "   
<table class='table table-hover'>
    <tr class='table-active row'>
      <th class='col'>{$item['idlibreria']}</th>
      <th class='col'>{$item['nombreL']}</th>
      <th class='col'>{$item['autorL']}</th>
      <th class='col'>{$item['editoriaL']}</th>
    </tr>
</table>
";
 }
?>