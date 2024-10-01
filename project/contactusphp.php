<?php
/*session_start();*/
if(isset($_COOKIE['submission_count']) && $_COOKIE['submission_count'] >= 2){
  echo "<script>
  alert('You have already submitted your form 2 times today, try again tomorrow');
  </script>";
    //header("location:Pakcycling.php?message=error");
    //exit();
}else{
    include_once"Adminpannel/config.php";
  $name = $_POST['name'];
  $phone = $_POST['phone'];
  $email = $_POST['email'];
  $role = $_POST['role'];
  $city = $_POST['city'];
  $message = $_POST['message'];

  

  $sql = "INSERT INTO submissions (name, phone, email, role, city, message)
  VALUES ('$name', '$phone', '$email', '$role', '$city', '$message')";

  if ($mysqli->query($sql) === TRUE) {
      echo "<script>
      alert('Form Submitted Successfully');
      </script>";
       header("Location: contactus.php");
      if(!isset($_COOKIE['submission_count'])){
        setcookie('submission_count', 1, time() + 86400);
      }else{
        setcookie('submission_count', $_COOKIE['submission_count'] + 1, time() + 86400);
      }
  } else {
      echo "Error: " . $sql . "<br>" . $mysqli->error;
  }

  $mysqli->close();
}
?>
<?php

function myFunction() {
    $nameRegex = "/[a-z|A-Z]+[^0-9]/";
    $phoneRegex ="/^[+92][0-9]{10,}/";
    $emailRegex ="/[A-Z a-z 0-9 _ \-\.]+[@][a-z]+[\.][a-z]{2,3}/";
    $name = $_POST["name"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    if (!preg_match($nameRegex, $name)) {
        echo "Error! name is not found! or format is not accordingly";        
    } else if (!preg_match($phoneRegex, $phone)) {
        echo "Error! phone no is not found! or format is not accordingly";
    } else if (!preg_match($emailRegex, $email)) {
        echo "Error! email is not found! or format is not accordingly";
    } else {
        echo "Name, Phone Number and Email is found!";
    }
}

?>