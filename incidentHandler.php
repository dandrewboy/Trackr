<?php
include "Data.php";
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

$iCustomer = null;
$iErrorType = null;
$iSystem = null;

foreach($customers as $c) {
    if($c->getName() == $customer) {
        $iCustomer = $c;
    }
}

foreach($systems as $s) {
    if($s->getName() == $system) {
        $iSystem = $s;
    }
}

foreach($errorTypes as $e) {
    if($e->getName() == $errorType) {
        $iErrorType = $e;
    }
}

$inc = new Incident($id, $date, $details,
                    $iCustomer,
                    $iSystem,
                    $iErrorType,
                    $misfire, $release, $shortCircuit);
array_push($incidents, $inc);
$_SESSION["incidents"] = $incidents;
include "_application.php";


