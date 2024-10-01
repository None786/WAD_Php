<?php
session_start();

if(isset($_SESSION['logged_in'])) {
  // Destroy the session
  session_destroy();

  // Redirect the user to the login page
  header("Location:index.php");
}
?>
