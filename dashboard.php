<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: /login");
    exit;
}
?>
 
<!DOCTYPE html>
<html lang="en">
    <?php include 'global.php';?>
<head>
</head>
<body>
    
    <h1 class="my-5 mx-auto">Hi, <b><?php echo htmlspecialchars($_SESSION["username"]); ?></b>.</h1>
    <p>
        <a href="reset-password.php" class="btn btn-warning">Reset Your Password</a>
    </p>
</body>
<?php include 'footer.php';?>
</html>