<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/fusioncharts.js"></script>
    <script src="https://cdn.fusioncharts.com/fusioncharts/latest/themes/fusioncharts.theme.fusion.js"></script>

    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-6" id="chart1"></div>
            <div class="col-6" id="chart2"></div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-6" id="chart3"></div>
            <div class="col-6" id="chart4"></div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

    <script>
        var result_data


        document.addEventListener('DOMContentLoaded', function() {
            graficolinear();
            graficobarra();
            graficomscolumn();
            graficomscolumn2()
        });

        function graficolinear() {

            fetch('https://38.25.76.156:2000/rest/src/caminata.php')
                .then(response => response.json())
                .then(data => {

            FusionCharts.ready(function() {
                var chartConfig = {
                    type: 'column2d',
                    renderAt: 'chart1',
                    width: '500',
                    height: '300',
                    dataFormat: 'json',
                    dataSource: {
                        chart: {
                            caption: 'Promedio de pasos por dìa',
                            subCaption: 'Ultimos 7 dìas ',
                            xAxisName: 'Dia',
                            yAxisName: 'Cantidad (Km)',
                            theme: 'fusion'
                        },
                        data: data
                    }
                };

                var chart = new FusionCharts(chartConfig);
                chart.render();
            });

            })
        }

        function graficobarra() {

            fetch('https://38.25.76.156:2000/rest/src/CalidadSueño.php')
                .then(response => response.json())
                .then(data => {

            FusionCharts.ready(function() {
                var chartConfig2 = {
                    type: 'doughnut2d',
                    renderAt: 'chart2',
                    width: '500',
                    height: '300',
                    dataFormat: 'json',
                    dataSource: {
                        "chart": {
                            "caption": "Calidad de sueño",
                            "subCaption": "Ultimos 7 dìas",
                            "numberPrefix": "$",
                            "defaultCenterLabel": "Zzz",
                            "decimals": "0",
                            "theme": "fusion"
                        },
                        "data": data
                    }
                };

                var chart2 = new FusionCharts(chartConfig2);
                chart2.render();
            });
        });
        }

        function graficomscolumn() {

            fetch('https://38.25.76.156:2000/rest/src/calorias.php')
                .then(response => response.json())
                .then(data => {

                    FusionCharts.ready(function() {
                        var chartConfig3 = {
                            type: 'bar2d',
                            renderAt: 'chart3',
                            width: '500',
                            height: '300',
                            dataFormat: 'json',
                            dataSource: {
                                "chart": {
                                    "caption": "Calorias por dia",
                                    "subCaption": "Ultimos 7 dias",
                                    "yAxisName": "calorias",
                                    "numberPrefix": "",
                                    "theme": "fusion"
                                },
                                "data": data
                            }
                        };

                        var chart3 = new FusionCharts(chartConfig3);
                        chart3.render();
                    });



                });
        }



        function graficomscolumn2() {



            fetch('https://38.25.76.156:2000/rest/src/calorias.php')
                .then(response => response.json())
                .then(data => {


            FusionCharts.ready(function() {
                var chartConfig3 = {
                    type: 'line',
                    renderAt: 'chart4',
                    width: '500',
                    height: '300',
                    dataFormat: 'json',
                    dataSource: {
                        "chart": {
                            "caption": "Ritmo Cardiaco",
                            "subCaption": "Ultimos 7 dìas",
                            "xAxisName": "Dia",
                            "yAxisName": "Latidos",
                            "lineThickness": "2",
                            "theme": "fusion"
                        },
                        "data": data
                    }
                };

                var chart3 = new FusionCharts(chartConfig3);
                chart3.render();
            });
        });
        }


        
    </script>
</body>

</html>