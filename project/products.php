<?php
include_once("Adminpannel/config.php");
$result = mysqli_query($mysqli, "SELECT * FROM post ORDER BY id DESC"); 
// using mysqli_query instead
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Register/signin page</title>
            <link rel="icon" href="content/logo.png" type="image/gif">
            <link rel="stylesheet" href="styles.css">
            <script type="text/javascript" src="script.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <!--header start here-->
        <?php include 'adminoptions.php'; ?>
        <?php include 'header.php'; ?>
        <!--header ends here-->
        <br>
        <div class="conatiner">
            <div class="row">
                <div class="col-sm-12 col2"><center><h1>Our Products</h1></center></div>
            </div>
        </div>
        <br>
        <br>
        <div class="conatiner">
            <div class="row">
        <br>
        <?php 
        $i=1;
	    while($res= mysqli_fetch_assoc($result)) { 
          echo "<div class='col-sm-4'>"."<center>".'<button class ="button1" onclick="window.location=\'products/7.php?id=' . $res['id'] . '\'">'."<img src='data:image/jpeg;base64," . base64_encode($res['image_data']) . "' style='width: 200px; height: 200px;' />"."<h4>".$res['title']."</h4>"."</button>"."</center>"."</div>"; 
            $i++;
            if ($i > 1) {
                echo "<br>"."<br>";
            }
        }
	   ?>
        </div>
        </div>
                <!--
                <div class="col-sm-4"><center><button class ="button1" onclick="newLocation('products/1.html')"><img src="featurepics/1.png" height="200px" width="200px"><h4>USB Rechargeable Tail<br> Light – BS-216</h4></button></center></div>
                <div class="col-sm-4"><center><button class ="button1" onclick="newLocation('products/2.html')"><img src="featurepics/2.png" height="200px" width="200px"><h4>Mini Foot Operated Inflator<br> Floor Air Pump for, Car Bike & Bicycle</h4></button></center></div>
                <div class="col-sm-4"><center><button class ="button1" onclick="newLocation('products/3.html')"><img src="featurepics/3.jpg" height="200px" width="200px"><h4>Cobalt Hybrid</h4></button></center></div>-->
            
        <br>
        <br>
        
        <!--Footer start here-->
         <?php include 'footer.php'; ?>
    </body>
</html>
<!--https://cycling-world.pk/-->