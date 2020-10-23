<?php
require 'Data';

$id = $_POST['id'];
$date = $_POST['date'];
$details = $_POST['details'];
$customer = $_POST['customer'];
$system = $_POST['system'];
$errorType = $_POST['errorType'];
$misfire =$_POST['misfore'];
$release = $_POST['release'];
$shortCircuit = $_POST['shortCircuit'];


if($id == null || $date == null || $details == null || $customer == null || $system == null || $errorType == null || $misfire == null || $release == null || $shortCircuit == null)
{
    $_SESSION['message'] = 'Please fill out all feilds correctly';
    include '_IncedentForm';
}
else {
$inc = new Incident($id, $date, $details, $customer, $system, $errorType, $misfire, $release, $shortCircuit);
array_push($_SESSION['incidents'], $inc);
include '_application';
}

