<?php error_reporting(0);
require_once "db.php"; 
?>
<?php require_once "settings.php"; ?>

<!DOCTYPE html>
<html lang="en">
    <head>
  <meta charset="UTF-8">
  <meta name="description" content="we are all about 2011, 2013 block gaem">
  <meta name="keywords" content="Roblox, Old Roblox, Old Roblox Revival, Novetus">
  <meta name="author" content="Project Vapor">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<title>Project Vapor</title>
<link rel="icon" type="image/png" href="<?php echo SMALLLOGOPATH;?>" />

<style>
@media screen and (min-width: 500px) 
         {
			html { height:100%; }
			body{
				background-image: url(<?php echo SITEDOMAIN;?>/img/background.png);
				background-repeat: no-repeat;
				background-size: cover;
			}
</style>
			
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css" integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js" integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2" crossorigin="anonymous"></script>
<link href="<?php echo SITEDOMAIN;?>/fontawesomelib/css/all.css" rel="stylesheet">

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <img src="<?php echo FULLLOGOPATH;?>" width="100"  alt="Vapor">
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item">
        <a class="nav-link" href="<?php echo SITEDOMAIN;?>">Home</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Games</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Browse</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Groups</a>
      </li>
            <li class="nav-item">
        <a class="nav-link" href="#">Forum</a>
      </li>
          <?php
if ($_SESSION['loggedin'] == true) {
?>
<li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
          <i class="far align-middle fa-user mr-1"></i> <?php echo htmlspecialchars($_SESSION["username"]); ?>
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Messages</a>
          <a class="dropdown-item" href="#">Friends</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Develop</a>
        </div>
<?php
} else {
?>
<?php
}
?>
    </ul>
<?php
if ($_SESSION['loggedin'] == true) {
?>
<a href="<?php echo SITEDOMAIN;?>/logout.php" class="btn btn-danger" role="button">Logout</a>
<?php
} else {
?>
    <a href="<?php echo SITEDOMAIN;?>/register" class="btn btn-success" role="button">Register</a>
    |
    <a href="<?php echo SITEDOMAIN;?>/login" class="btn btn-danger" role="button">Login</a>
<?php
}
?>
  </div>
</nav>
</body>
</html>