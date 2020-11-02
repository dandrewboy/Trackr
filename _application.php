<?php
session_start();
$incidents = $_SESSION["incidents"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="application.css"/>
    <title>TRACKR</title>

    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages': ['corechart']});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var lineData = google.visualization.arrayToDataTable([
          ['Day', 'Incidents'],
            <?php
            for($i = 1; $i <= 30; $i++) {
                $day = "10/" . $i;
                echo "['10/{$i}', " . count(array_filter($incidents, function($n) use ($day) {
                        return $n->getDate() == $day;
                    })) . "],";
            }
            ?>
        ]);

        var pieData = google.visualization.arrayToDataTable([
          ['Type', 'Amount'],
          ['Quality', <?php echo count(array_filter($incidents, function($n) {
              return $n->getErrorType()->getName() == "Quality";
          })); ?>],
          ['Human Error', <?php echo count(array_filter($incidents, function($n) {
              return $n->getErrorType()->getName() == "Human Error";
          })); ?>]
        ]);

        var stratxData = google.visualization.arrayToDataTable([
          ["Error", "Amount", {role: "style"}],
          ["Misfire", <?php echo count(array_filter($incidents, function($n) {
              return $n->getSystem()->getName() == "STRATX" && $n->getMisfire() == true;
          })); ?>, "color: #78BE43"],
          ["Release", <?php echo count(array_filter($incidents, function($n) {
              return $n->getSystem()->getName() == "STRATX" && $n->getRelease() == true;
          })); ?>, "color: #78BE43"],
          ["Short Circuit", <?php echo count(array_filter($incidents, function($n) {
              return $n->getSystem()->getName() == "STRATX" && $n->getShortCircuit() == true;
          })); ?>, "color: #78BE43"],
        ]);

        var vaporData = google.visualization.arrayToDataTable([
          ["Error", "Amount", {role: "style"}],
          ["Misfire", <?php echo count(array_filter($incidents, function($n) {
              return $n->getSystem()->getName() == "VaporGun" && $n->getMisfire() == true;
          })); ?>, "color: #78BE43"],
          ["Release", <?php echo count(array_filter($incidents, function($n) {
              return $n->getSystem()->getName() == "VaporGun" && $n->getRelease() == true;
          })); ?>, "color: #78BE43"],
          ["Short Circuit", <?php echo count(array_filter($incidents, function($n) {
              return $n->getSystem()->getName() == "VaporGun" && $n->getShortCircuit() == true;
          })); ?>, "color: #78BE43"],
        ]);

        var lineOptions = {
          title: 'Total Incidents for October 2020 - <?php echo count($incidents); ?>',
          curveType: 'function',
          legend: 'none',
          colors: ['#78BE43']
        };

        var pieOptions = {
          title: 'Error Types',
          pieHole: 0.2,
          colors: ['#78BE43', 'black']
        };

        var stratxOptions = {
          title: "STRATX",
          bar: {groupWidth: "95%"},
          legend: {position: "none"},
        };

        var vaporOptions = {
          title: "VaporGun",
          bar: {groupWidth: "95%"},
          legend: {position: "none"},
        };

        var lineChart = new google.visualization.LineChart(document.getElementById('curve_chart'));
        var pieChart = new google.visualization.PieChart(document.getElementById('donutchart'));
        var stratxChart = new google.visualization.ColumnChart(document.getElementById("columnchart_stratx"));
        var vaporChart = new google.visualization.ColumnChart(document.getElementById("columnchart_vapor"));

        lineChart.draw(lineData, lineOptions);
        pieChart.draw(pieData, pieOptions);
        stratxChart.draw(stratxData, stratxOptions);
        vaporChart.draw(vaporData, vaporOptions);
      }
    </script>
</head>
<body class="container">
<nav class="navbar navbar-expand-lg navbar-dark navbarColor fixed-top">
    <a class="navbar-brand" href="index.php">TRACKR</a>
    <div style="padding-top: 4px; margin-left: auto;">
        <div class="row">
            <a class="btn btn-dark largeButton center largeLabel" href="logoutHandler.php"
               style=" margin-top: 5px; margin-right: 15px; height: 38px;">Logout</a>
        </div>
    </div>
</nav>

<a class="btn btn-dark largeButton center largeLabel" style="color: white; border-color: #134466; width: 150px;"
   href="_IncidentForm.php">Add Incident</a>
<div class="chartContainer">
    <div id="columnchart_stratx" style="width: 30%; height: 200px; margin: 10px;"></div>
    <div id="columnchart_vapor" style="width: 30%; height: 200px; margin: 10px;"></div>
    <div id="donutchart" style="width: 40%; height: 200px; margin: 10px;"></div>
</div>
<div class="chartContainer">
    <div id="curve_chart" style="height: 200px; width: 100%; margin: 10px;"></div>
</div>
</body>
</html>