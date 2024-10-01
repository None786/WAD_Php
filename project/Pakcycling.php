<!DOCTYPE html>
<html>
    <head>
            <title>Cycling-World Men Women Kids Bike - Cycling World Pakistan</title>
            <link rel="icon" href="logo.png" type="image/gif">
            <link rel="stylesheet" href="styles.css">
            <script type="text/javascript" src="script.js" defer></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    </head>
    <script>
  function redAlert(message) {
    var alertBox = document.createElement('div');
    alertBox.style.backgroundColor = 'red';
    alertBox.style.color = 'white';
    alertBox.style.padding = '10px';
    alertBox.style.width = '600px';
    alertBox.innerHTML = message;
    document.body.appendChild(alertBox);
      
      setTimeout(function() {
      alertBox.style.display = 'none';
    }, 4000);
  }
  
  // Get the message from the URL
  var message = new URL(window.location.href).searchParams.get('message');
  if (message === 'error') {
    redAlert('You have already submitted your form 2 times today, try again tomorrow!!');
  }
    </script>
    <body>
        <?php include 'adminoptions.php'; ?>
        <?php include 'header.php'; ?>
        <!--header ends here-->
        <div class="conatiner">
            <div class="row">
                <div class="col-sm-12">
                    <div class="slideshow-container">
                        <div class="mySlides fade">
                            <img src="slider/slider-1.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="slider/slider-2.jpg" style="width:100%">
                        </div>

                        <div class="mySlides fade">
                            <img src="slider/slider-3.jpg" style="width:100%">
                        </div>
                        <div class="mySlides fade">
                            <img src="slider/slider-4.jpg" style="width:100%">
                        </div>
                    </div>
                        <br>
                    <div style="text-align:center">
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                        <span class="dot"></span> 
                    </div>
                </div>
            </div>
        </div>
        <div class="conatiner">
            <div class="row r4">
                <div class="col-sm-4">
                    <center>
                        <img src="1/1.png">
                        <h3 class="h3">VARIETY</h3>
                        <p>We loves you biking and racing. Find the ones from our ultimate range of Branded Bike.</p>
                    </center>
                </div>
                <div class="col-sm-4">
                    <center>
                        <img src="1/2.png">
                        <h3 class="h3">SHIP BY AIR</h3>
                        <p>We can get your special orders ship BY AIR. All orders are subject to local / global availability. Additional charges apply.</p>
                    </center>
                </div>
                <div class="col-sm-4">
                    <center>
                        <img src="1/3.png">
                        <h3 class="h3">BACKORDERS</h3>
                        <p>Back-orders are subject to local/global availability. Prices are subject to change.</p>
                    </center>
                </div>
            </div>
        </div>
        <div class="conatiner">
            <div class="row r5">
                <div class="col-sm-12"><iframe width="100%" height="550"  src="https://www.youtube.com/embed/fCUDmleIlhI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div>
            </div>
        </div>
        <br>
        <div class="conatiner">
            <div class="row r6">
                <div class="col-sm-12"><center><h2>Latest Products</h2></center></div>
            </div>
        </div>
        <div class="conatiner">
            <div class="row r7">
                <div class="col-sm-1"></div>
                <div class="col-sm-2"><center><button class ="button1" onclick="newLocation('products/1.html')"><img src="featurepics/1.png" height="200px" width="200px"></button><h4>USB Rechargeable Tail Light – BS-216</h4><p>RS:660</p></center></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"><center><button class ="button1" onclick="newLocation('products/2.html')"><img src="featurepics/2.png" height="200px" width="200px"></button><h4>Mini Foot Operated Inflator Floor Air Pump for, Car Bike & Bicycle</h4><p>RS:1,320</p></center></div>
                <div class="col-sm-2"></div>
                <div class="col-sm-2"><center><button class ="button1" onclick="newLocation('products/3.html')"><img src="featurepics/3.jpg" height="200px" width="200px"></button><h4>Cobalt Mountain Bike Alutec 6061 Small</h4><p>RS:26000</p></center></div>
                <div class="col-sm-1"></div>
            </div>
        </div>
        <!--Footer start here-->
         <?php include 'footer.php'; ?>
        
    </body>
</html>
<!--https://cycling-world.pk/-->

