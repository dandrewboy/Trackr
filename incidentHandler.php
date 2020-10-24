<?php
include "Incident.php";
session_start();
$incidents = $_SESSION["incidents"];

$id = $_POST['id'];
$date = $_POST['date'];
$details = $_POST['details'];
$customer = $_POST['customer'];
$system = $_POST['system'];
$errorType = $_POST['errorType'];
$misfire = isset($_POST['misfire']);
$release = isset($_POST['release']);
$shortCircuit = isset($_POST['short']);

$inc = new Incident($id, $date, $details, $customer, $system, $errorType, $misfire, $release, $shortCircuit);
array_push($incidents, $inc);
$_SESSION["incidents"] = $incidents;
include "_application.php";


