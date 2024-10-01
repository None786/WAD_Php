<?php
include_once"config.php";
// Check connection
if(isset($_POST['submit'])) {
    // Get the email from the form
    $email = $_POST['email'];

    // Check if the email exists in the database
    $sql = "SELECT * FROM admin WHERE email='$email'";
    $result = mysqli_query($mysqli, $sql);

    if (mysqli_num_rows($result) > 0) 
    {
        // Email exists, reset password to 987654
        $sql = "UPDATE admin SET password='987654' WHERE email='$email'";
        $result = mysqli_query($mysqli, $sql);
        header("location:index.php");
    } 
    else 
    {
        // Email does not exist
        echo "Error: Email not found.";
    }
}

// Close connection
mysqli_close($mysqli);
?>

<!-- Forget password form -->
<form action="" method="post">
  <label for="email">Email:</label>
  <input type="email" id="email" name="email">
  <input type="submit" value="Submit" name="submit">
</form>
