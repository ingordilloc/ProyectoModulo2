<?php
use Controller\GraficaController;


if (!empty($_SESSION['id'])){        
    $grafica = new GraficaController();
?>

<script src="https://cdn.jsdelivr.net/npm/chart.js@latest/dist/Chart.min.js"></script>

<h1>libros</h1>

<div class="container">

<canvas id="grafica"></canvas>

</div>

<script type="text/javascript">
    var contenido = <?php echo json_encode($grafica->mostrar()); ?>;
    
    const $grafica = document.querySelector("#grafica");
    let etiquetas= [];
    let data = [];
    contenido.forEach((element)=>etiquetas.push(element.autor));
    contenido.forEach((element)=>data.push(element.cantidad));

const datosVentas2020 = {
    label: "No. Libros x Autor",
    data: data, 
    backgroundColor: 'rgba(96, 113, 252, 99)',
    borderColor: 'rgba(96, 162, 252, 10)', 
    borderWidth: 3,
};
new Chart($grafica, {
    type: 'line',
    data: {
        labels: etiquetas,
        datasets: [
            datosVentas2020,
        ]
    },
    options: {
        scales: {
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }],
        },
    }
});
</script>

<?php

}
?>