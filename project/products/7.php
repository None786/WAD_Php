<?php
include_once("../Adminpannel/config.php");
$id = $_GET['id'];
$result = mysqli_query($mysqli, "SELECT * FROM post where id=$id"); 
// using mysqli_query instead
?>
<!DOCTYPE html>
<html>
    <head>
            <title>Product detail page</title>
            <link rel="icon" href="../content/logo.png" type="image/gif">
            <link rel="stylesheet" href="../styles.css">
            <link rel="stylesheet" href="products.css">
            <script type="text/javascript" src="../script.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <body>
        <?php include 'adminoptions.php'; ?>
        <?php include 'productheader.php'; ?>
        <!--header ends here-->
        <br>
        <center><h1 class="col4"><i>Product detail:</i></h1></center>
        
        <br>
        <div class="container">
            <div class="row">
            <?php 
            $i=1;
	           $res= mysqli_fetch_assoc($result);  
                echo "<div class='col-sm-5'>"."<center>"."<img src='data:image/jpeg;base64,".base64_encode($res['image_data']) . "' style='width: 300px; height: 400px;' />"."</center>"."</div>"; 
                echo "<div class='col-sm-1'></div>";
                echo "<div class='col-sm-6 col3'>"."<h1>".$res['title']."</h1>"."<br>"."<pre>"."<h4>".$res['content']."</h4>"."</pre>"."</div>";
                    $i++;
                    if ($i > 1) {
                    echo "<br>"."<br>";
                    }
                
	               ?>
            </div>
        </div>
        <br>
        <hr>
        <br>
        <center><h2>More details:</h2></center>
        <div class="container">
            <div class="row">
                <div class="col-sm-1"></div>
                <div class="col-sm-10"><center><p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p></center></div>
                <div class="col-sm-1"></div>
            </div>
        </div> 
        
        
        <!--Footer start here-->
         <?php include 'productfooter.php'; ?>
    </body>
</html>
<!--https://cycling-world.pk/-->