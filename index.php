<?php
 // Initialize the session
session_start();
 
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    header("location: /dashboard.php");
    exit;
}

include 'global.php';
?>

<div class="container mx-auto">
<div class="jumbotron">
<h1 class="text-light"><b>Project Vapor</b></h1>
<p class="text-light">we are all about 2011, 2013 block gaem</p></div>
<div class="row">
<div class="col-sm-4">
<h3>Completly Public And Open Source!</h3>
<p>Vapor is a free to join and public revival without bullshit.</p>
<p>In order for everyone to enjoy the game just do not do dumb stuff please</p></div>
<iframe src="<?php echo YOUTUBETRAILERLINK;?>" width="560" height="315" frameborder="0"></iframe>
</div>
<style>
.jumbotron {
    background-color: #008000;
    margin-bottom: 0;
    min-height: 5%;
    background-repeat: no-repeat;
    background-position: center;
    -webkit-background-size: cover;
    background-size: cover;
}
</style>
</div>

<?php include 'footer.php';?>