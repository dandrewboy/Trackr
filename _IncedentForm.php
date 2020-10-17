<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="application.css"/>
    <title>TRACKR</title>
</head>
<form id="loginForm" method="post" action="loginHandler.php">
    <div>
      <body class="container">
	    <div class="row spaceAfter center">
           <label for="date" class="spaceRight lightText largeLabel">Date: </label>
           <input type="text" id="date" name="date" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="details" class="spaceRight lightText largeLabel">Details: </label>
           <input type="text" id="details" name="details" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="customer" class="spaceRight lightText largeLabel">Customer: </label>
           <input type="text" id="customer" name="customer" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="system" class="spaceRight lightText largeLabel">System: </label>
           <input type="text" id="system" name="system" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="errorType" class="spaceRight lightText largeLabel">Error Type: </label>
           <input type="text" id="errorType" name="errorType" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="misfire" class="spaceRight lightText largeLabel">Misfire: </label>
           <input type="text" id="misfire" name="misfire" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="release" class="spaceRight lightText largeLabel">Release: </label>
           <input type="text" id="release" name="release" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row spaceAfter center">
           <label for="shortCircuit" class="spaceRight lightText largeLabel">Short Circuit: </label>
           <input type="text" id="shortCircuit" name="shortCircuit" class="form-control spaceRight IncedentFormControl"/>
        </div>
        <div class="row">
           <input type="submit" value="Submit" class="btn btn-primary largeButton center"/>
         </div>
        </form>
        </body>
    </div>
</html>
<?php
