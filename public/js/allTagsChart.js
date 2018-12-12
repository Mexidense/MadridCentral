    // Load google charts
google.charts.load('current', {packages: ['corechart', 'bar']});
google.charts.setOnLoadCallback(drawChart);

// Draw the chart and set the chart values
function drawChart() {
    var data = google.visualization.arrayToDataTable([
        ['Tipo de etiqueta', 'Cantidad de vehículos', { role: 'style' }, { role: 'annotation' }],
        ['Etiqueta 0 - Azul', 50203, 'color: blue', '0'],
        ['Etiqueta ECO - Verde/Azul', 274752, 'color: green', 'ECO'],
        ['Etiqueta C - Verde', 8519700, 'color: green', 'C'],
        ['Etiqueta B - Amarilla', 11336460, 'color: yellow', 'B'],
        ['Sin etiqueta', 12441842, 'color: black', 'Sin etiqueta']
    ]);

    // Optional; add a title and set the width and height of the chart
    var options = {
        chart: {
            title:'Vehículos con distintivos medioambientales',
            subtitle: 'Fuente: Portal Estadístico de la DGT - Diciembre 2018'
        },
        vAxis: {
            title: 'Tipo de etiqueta'
        },
        hAxis: {
            title: 'Total de vehículos',
            minValue: 0,
        },
        bars: 'horizontal',
        chartArea: {
            'width': '100%',
            'height': '80%'
        },
        height: 600,
    };

    var view = new google.visualization.DataView(data);
    view.setColumns([0, 1,
        { calc: "stringify",
            sourceColumn: 1,
            type: "string",
            role: "annotation" },
        2]);

    var chart = new google.charts.Bar(document.getElementById('allTagsChart'));
    chart.draw(view, options);
}
