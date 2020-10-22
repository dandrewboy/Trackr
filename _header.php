<?php
    session_start();
    $user = $_SESSION['user'];
?>

<nav class="navbar navbar-expand-lg navbar-dark navbarColor fixed-top">
    <a class="navbar-brand" href="index.php">TRACKR</a>
    <div style="padding-top: 4px; margin-left: auto;">
        <div class="row">
        <label class="navbar-brand spaceAfter"><?php echo $user->getUsername() ?></label>

		<a class="btn btn-primary largeButton center largeLabel" style="color: white; border-color: #134466;" href="_IncedentForm.php">Add Incedent</a>
        <a class="btn btn-primary largeButton center largeLabel" href="logoutHandler.php" style=" margin-top: 5px; margin-right: 15px; height: 38px;">Logout</a>
        </div>
    </div>
</nav>