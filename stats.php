<?php
    header("Content-Type: text/html;charset=UTF-8");
    require "connect.php";
    $conn = new mysqli($host, $db_user, $db_password, $db_name);
    $conn->set_charset("utf8");
    $sql = "SELECT * FROM zwroty ORDER BY kategoria ASC;";
	$result = $conn->query($sql);
    $site = "zwroty";
    ?>
<!DOCTYPE html>
<html lang="en">

<head>
<title>Zwroty Klienci</title>
    <?php
    require "addons/head.php"
    ?>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.0/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/morris.js/0.5.1/morris.min.js"></script>
</head>

<body>
<?php
    require 'addons/title.php'
?>
<div class="row">
<?php
    require 'addons/navbar.php'
    ?>
    <div class="col-11">
        <h2>2020</h2>
        <div class"row">
            <div class="col-sm-6 text-center">
            <label class="label label-success">Area Chart</label>
            <div id="area-chart" ></div>
            </div>
            <div class="col-sm-6 text-center">
            <label class="label label-success">Line Chart</label>
            <div id="line-chart"></div>
            </div>
            <div  class="col-sm-6 text-center">
            <label class="label label-success">Bar Chart</label>
            <div id="bar-chart" ></div>
            </div>
            <div class="col-sm-6 text-center">
            <label class="label label-success">Bar stacked</label>
            <div id="stacked" ></div>
            </div>
            <div class="col-sm-6 col-sm-offset-3 text-center">
            <label class="label label-success">Pie Chart</label>
            <div id="pie-chart" ></div>
            </div>
            
        </div>
            <script>
                    var data = [
                { y: '2014', a: 50, b: 90},
                { y: '2015', a: 65,  b: 75},
                { y: '2016', a: 50,  b: 50},
                { y: '2017', a: 75,  b: 60},
                { y: '2018', a: 80,  b: 65},
                { y: '2019', a: 90,  b: 70},
                { y: '2020', a: 100, b: 75},
                { y: '2021', a: 115, b: 75},
                { y: '2022', a: 120, b: 85},
                { y: '2023', a: 145, b: 85},
                { y: '2024', a: 160, b: 95}
                ],
                config = {
                data: data,
                xkey: 'y',
                ykeys: ['a', 'b'],
                labels: ['Total Income', 'Total Outcome'],
                fillOpacity: 0.6,
                hideHover: 'auto',
                behaveLikeLine: true,
                resize: true,
                pointFillColors:['#ffffff'],
                pointStrokeColors: ['black'],
                lineColors:['gray','red']
            };
            config.element = 'area-chart';
            Morris.Area(config);
            config.element = 'line-chart';
            Morris.Line(config);
            config.element = 'bar-chart';
            Morris.Bar(config);
            config.element = 'stacked';
            config.stacked = true;
            Morris.Bar(config);
            Morris.Donut({
            element: 'pie-chart',
            data: [
                {label: "Friends", value: 30},
                {label: "Allies", value: 15},
                {label: "Enemies", value: 45},
                {label: "Neutral", value: 10}
            ]
            });
            </script>
    </div>
</div>
</body>

</html>