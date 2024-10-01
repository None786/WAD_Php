<!DOCTYPE html>
<html>
<head>
  <title>Admin Login</title>
    <link rel="icon" href="../content/logo.png" type="image/gif">
    <script type="text/javascript" src="../script.js" defer></script>
    <link rel="stylesheet" href="style.css" defer>
    <style>
    h1
    {
        margin-top: 20px;
    }
    #username {
    font-size: 18px bold;
    padding: 10px;
    width: 80%;
    border: none;
    border-bottom: 2px solid grey;
    margin-bottom: 20px;
    border-radius: 20px;
  }

  /* Style for the content input */
  #password {
    font-size: 16px;
    padding: 10px;
    width: 80%;
    border: 1px solid #ddd;
    margin-bottom: 20px;
    border-radius: 20px;
  }
  #login{
    background-color: #333;
    border: none;
    color: #fff;
    padding: 10px 20px;
    font-size: 16px;
    cursor: pointer;
    margin-top: 20px;
    border-radius: 20px;
  }  
  .container
  {
      /*background-image: linear-gradient(to left, #553c9a, #b393d3);*/
      background-color: black;
      border: 1px solid black; 
      color:white;
      width: 350px;
      margin-top: 100px;
      padding-bottom: 10px;
      border-radius: 20px;
  }
  .button
  {
      border: none;
      color:grey;
      background-color: black;
      
      margin-top: 20px;
  }
 body
        {
            background-image: linear-gradient(to left, #553c9a, #b393d3);
        }
        /*Start here!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
        
        /*Ends here!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!*/
    </style>
</head>
    

<body>
  <?php
    // Check if the user is already logged in
    session_start();
    if (isset($_SESSION['logged_in']) && $_SESSION['logged_in'] == true) {
      header("Location:admin-view.php");
      exit();
    }
  ?>
    <center>
        <div class="container">
            <button class ="button" onclick="newLocation('../Pakcycling.php')"><img class="ig1" src="../content/footer-logo.png" height="40px" width="60px"></button>
            
  <h1>Admin Login</h1>
  <form action="login.php" method="post">
    <label>Username or Email Address</label><br>
    <input type="text" name="username" id="username">
    <br>
    <label>Password</label><br>
    <input type="password" name="password" id="password">
    <br>
      <a href="forgetpassword.php">forget your password?</a><br>
    <input type="submit" name="submit" value="Login" id="login">
  </form>
            </div>
        </center>
    
    <script>
  function redAlert(message) {
    var alertBox = document.createElement('div');
    alertBox.style.backgroundColor = 'red';
    alertBox.style.color = 'white';
    alertBox.style.padding = '10px';
    alertBox.style.width = '100px';
    alertBox.innerHTML = message;
    document.body.appendChild(alertBox);
      
      setTimeout(function() {
      alertBox.style.display = 'none';
    }, 4000);
  }
  
  // Get the message from the URL
  var message = new URL(window.location.href).searchParams.get('message');
  if (message === 'error') {
    redAlert('Please login first!!');
  }
</script>
</body>
</html>
