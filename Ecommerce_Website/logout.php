<?php   

include("connection.php");

session_destroy(); //destroy the session
header("location:home.php"); //to redirect back to "index.php" after logging out
exit();
?>
