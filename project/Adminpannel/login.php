<html>
<head>
	<title>login</title>
    
</head>
<body>
<?php
  // Connect to the database
include_once("config.php");
if(isset($_POST['submit'])) 
{
  // Get the submitted username and password
  $username = $_POST['username'];
  $password = $_POST['password'];

  // Check if the username and password match an admin account
    $result = mysqli_query($mysqli,"SELECT * FROM admin WHERE username = '$username' AND password = '$password'");
  //$result = mysqli_query($mysqli, $sql);
    echo "Incorrect username or password";
  if (mysqli_num_rows($result) > 0) 
  {
    // Start a new session and set the logged_in variable to true
    session_start();
    $_SESSION['logged_in'] = true;

    // Redirect to the admin view
    header("Location:admin-view.php");
    exit();
  } else 
  {
    // Redirect back to the login page with an error message
    header("Location: index.php?error=1");
    exit();
  }
}
?>
    </body>
</html>