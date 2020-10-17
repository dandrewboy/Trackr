<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="application.css"/>
    <title>TRACKR</title>
</head>
<body class="container">
    <?php
        session_start();
        include "_header.php";
        $incidents = $_SESSION["incidents"];
    ?>

    <div class="chartContainer">
        <div class="barChart">
            <h6 style="color: white;">BAR CHART</h6>
        </div>
        <div class="barChart">
            <h6 style="color: white;">BAR CHART</h6>
        </div>
    </div>
    <div class="chartContainer">
        <div class="lineChart">
            <h6 style="color: white;">LINE CHART with <?php echo count($incidents);?> incidents</h6>
        </div>
        <div class="pieChart">
            <h6 style="color: white;">PIE CHART</h6>
        </div>
    </div>

    <a class="btn btn-primary largeButton center largeLabel" style="color: white; border-color: #134466;">ADD</a>
</body>
</html>