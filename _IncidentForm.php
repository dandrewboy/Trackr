<?php
include "Incident.php";
session_start();
$incidents = $_SESSION["incidents"];

$id = count($incidents) + 1;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="application.css"/>
    <title>TRACKR</title>
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

<a class="btn btn-dark largeButton center largeLabel"
   style="color: white; border-color: #134466; margin-bottom: 10px;" href="_application.php">Back</a>
<form id="incidentForm" method="post" action="incidentHandler.php" style="width: 60%;">
    <div class="row spaceAfter center">
            <label for="id" class="spaceRight largeLabel">Id: </label>
            <input type="text" id="id" name="id" class="spaceRight form-control" value="<?php echo "#" . $id ?>" readonly/>
            <label for="date" class="spaceRight largeLabel" style="margin-top: 5px;">Date: </label>
            <input type="text" id="date" name="date" class="spaceRight form-control"/>
    </div>
    <div class="row spaceAfter center">
        <label for="details" class="spaceRight largeLabel">Details: </label>
        <textarea id="details" rows="5" name="details" class="form-control spaceRight"></textarea>
    </div>
    <div class="row spaceAfter center">
        <label for="customer" class="spaceRight largeLabel">Customer: </label>
        <input type="text" id="customer" name="customer" class="form-control spaceRight"/>
    </div>
    <div class="row spaceAfter center">
        <label for="system" class="spaceRight largeLabel">System: </label>
        <input type="text" id="system" name="system" class="form-control spaceRight"/>
    </div>
    <div class="row spaceAfter center">
        <label for="errorType" class="spaceRight largeLabel">Error Type: </label>
        <input type="text" id="errorType" name="errorType" class="form-control spaceRight"/>
    </div>
    <div class="row spaceAfter center">
        <label class="checkmarkContainer">Release
            <input type="checkbox" name="release" id="release">
            <span class="checkmark"></span>
        </label>
        <label class="checkmarkContainer">Misfire
            <input type="checkbox" name="misfire" id="misfire">
            <span class="checkmark"></span>
        </label>
        <label class="checkmarkContainer">Short Circuit
            <input type="checkbox" name="short" id="short">
            <span class="checkmark"></span>
        </label>
    </div>
    <div class="row">
        <input type="submit" value="Submit" class="btn btn-dark largeButton largeLabel" style="margin-top: 5px; margin-left: 15px;"/>
    </div>
</form>
</body>
</html>
