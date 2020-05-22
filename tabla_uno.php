<?php
include("php/conexion.php");
?>
<!DOCTYPE HTML>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/highcharts.css">
        <title>Pagina 1 - Gráficos</title>
    </head>

    <body>
    <?php include("templates/headers.html") ?>
    <?php include("templates/nav_bar_top.html") ?>

        <figure class="highcharts-figure" style="margin-top:150px; margin-bottom:120px;">
            <h1>Nombre de la pagina</h1>
            <table id="datatable" class="table table-bordered table-striped table-hover" cellspacing="0" width="100%">
                <hr>
                <caption> MI EMPRESA<sup>&reg</sup> | Descripción breve del contenido de la tabla.</caption>
                <thead class="thead-dark">
                    <tr>
                        <th>MES</th>
                        <th>Promedio Trabajadores Atendidos</th>
                        <th>Promedio Agua Despachada(LTS)</th>
                    </tr>
                </thead>
                <?php include("php/tablas/tabla_1.php"); ?>
            </table>
            <hr>
            <!--p class="h1 lead">Nombre del Gráfico</p><br-->

            <div id="container_chart" ></div>
            <hr>
        <p class="highcharts-description lead mt-4">
            Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum laborum quibusdam reiciendis aut nisi tempore corporis est harum in ad fuga, consequatur, esse rerum! Cum eveniet voluptates esse enim molestiae maxime eum quisquam accusamus excepturi veritatis voluptatum dolorum pariatur dolor hic dolores iusto odit, fugiat adipisci? Ad quo eos dicta, quis ipsum soluta assumenda. Quod, rerum. Sit excepturi rerum error?</p>
        </figure>
    </body>

    <?php include("templates/scripts_src.html") ?>

    <script type="text/javascript">
    Highcharts.chart('container_chart', {
        data: {
            table: 'datatable'
            },
        chart: {
            type: 'column'
        },
        title: {
            text: 'MI TITULO YVAN'
        },
        yAxis: {
            allowDecimals: true,
            title: {
                text: 'Cantidad promedio'
            }
        },
        tooltip: {
            formatter: function () {
                return '<b>' + this.series.name + ' </b><br/>' +
                    this.point.y + ' en el mes de:' + this.point.name.toLowerCase();
            }
        }
    });
    </script>

    <?php include("templates/footers.html") ?>
</html>
