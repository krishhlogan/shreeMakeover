<!DOCTYPE html>
<html>
<title>Admin Login</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<body>

<div  class="w3-card-16 w3-center" style="margin-left:23%;margin-top:13%;width:50%">
  <div class="w3-container w3-teal" style="width:100%">
    <h2>Appointments Admin Login</h2>
  </div>
  <form class="w3-container" method="post" action="<?php  $_SERVER['PHP_SELF'] ?>">
    <p>      
    <label class="w3-label w3-text-brown"><b>Login ID</b></label>
    <input class="w3-input w3-border w3-sand" name="login" type="text"></p>
    <p>      
    <label class="w3-label w3-text-brown"><b>Password</b></label>
    <input class="w3-input w3-border w3-sand" name="pwd" type="password"></p>
    <p>
    <button class="w3-btn w3-brown">login</button></p>
  </form>
</div>
<?php 
session_start(); 

// Username and password
$ID = "shreemakeover";
$pass = "helloworld";

if (isset($_POST["login"]) && isset($_POST["pwd"])) { 

    if ($_POST["login"] === $ID && $_POST["pwd"] === $pass) { 
    
    $_SESSION["inloggedin"] = true; 

    header("Location: appointments.php"); 
    exit; 
    } 
        // Wrong login - message
        else {
		echo "<div class='w3-center w3-panel w3-red w3-padding-32' style='margin-left:10%;margin-top:10%;width:80%'>Bad ID and password, the system could not log you in</div>";}
}


?>

</body>
</html> 
