<h1>Occupancy Rates </h1>

<table id='dataTable'>
    <tr>
        <th>Fila</th>
        <th>Piso</th>
        <th>Estatus</th>
        <th>Fecha</th>
        <th>Hora</th>
    </tr>
    <?php while($busqueda = $buscar->fetch_object()) : ?>

    <tr>
        <td><?=$busqueda->fila;?></td>
        <td><?=$busqueda->piso;?></td>
        <td><?=$busqueda->estatus;?></td>
        <td><?=$busqueda->fecha;?></td>
        <td><?=$busqueda->hora;?></td>
    </tr>

    <?php endwhile; ?>

    </table>




<div class='chart'>
    <canvas id='myChart'></canvas>
</div>

<hr />

<script>

function BuildChart(labels, values, chartTitle) {
    var myCanvas = document.getElementById("myChart");
    var ctx = myCanvas.getContext("2d");
    var myChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: labels, // Our labels
            datasets: [{
                label: chartTitle, // Name the series
                data: values, // Our values
                backgroundColor: [ // Specify custom colors
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)',
                    'rgba(153, 102, 255, 0.2)',
                    'rgba(255, 159, 64, 0.2)'
                ],
                borderColor: [ // Add custom color borders
                    'rgba(255,99,132,1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)',
                    'rgba(153, 102, 255, 1)',
                    'rgba(255, 159, 64, 1)'
                ],
                borderWidth: 1 // Specify bar border width
            }]
        },
        options: {
            responsive: true, // Instruct chart js to respond nicely.
            maintainAspectRatio: false, // Add to prevent default behavior of full-width/height 
        }
    });
    return myChart;
}

var table = document.getElementById('dataTable');
var json = []; // First row needs to be headers 
var headers = [];
for (var i = 0; i < table.rows[0].cells.length; i++) {
    headers[i] = table.rows[0].cells[i].innerHTML.toLowerCase().replace(/ /gi, '');
}

// Go through cells 
for (var i = table.rows.length-4; i < table.rows.length; i++) {
    var tableRow = table.rows[i];
    var rowData = {};
    for (var j = 0; j < tableRow.cells.length; j++) {
        rowData[headers[j]] = tableRow.cells[j].innerHTML;
    }

    json.push(rowData);
}

console.log(json);

// Map JSON values back to label array
var labels = json.map(function(e) {
    return e.hora;
});
console.log(labels); // ["2016", "2017", "2018", "2019"]

// Map JSON values back to values array
var values = json.map(function(e) {
    return e.estatus;
});
console.log(values); // ["10", "25", "55", "120"]

var chart = BuildChart(labels, values, "Historial de ocupacion");
</script>

