<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/css/bootstrap.min.css"/>
    <link rel="stylesheet" href="application.css"/>

    <title>TRACKR</title>
</head>
<body class="container">
<div class="login center largeMarginTop spaceAfter">
    <div>
        <h1 class="lightText">TRACKR</h1>
    </div>
    <form id="loginForm" method="post" action="loginHandler.php">
        <div>
            <?php
            if(isset($_SESSION['message'])) {
                echo $_SESSION['message'];
                unset($_SESSION['message']);
            }
            ?>
            <div class="row spaceAfter center">
                <label for="username" class="spaceRight lightText largeLabel">Username: </label>
                <input type="text" id="username" name="username" class="form-control spaceRight loginFormControl"/>
            </div>
            <div class="row spaceAfter center">
                <label for="password" class="spaceRight lightText largeLabel">Password: </label>
                <input type="password" id="password" name="password" class="form-control spaceRight loginFormControl"/>
            </div>
            <div class="row">
                <input type="submit" value="Submit" class="btn btn-dark largeButton center"/>
            </div>
        </div>
    </form>
</div>
</body>
</html>