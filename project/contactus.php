<!DOCTYPE html>
<html>
    <head>
            <title>Contact us page</title>
            <link rel="icon" href="content/logo.png" type="image/gif">
            <link rel="stylesheet" href="contactus.css">
            <link rel="stylesheet" href="styles.css">
            <script type="text/javascript" src="script.js" defer></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
            <script src="//netdna.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>
            <script src="http://code.jquery.com/jquery-1.11.1.min.js"></script>
            <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css">
        <link rel="stylesheet" href="css/jquery.bootstrap.message.css">
        <script src="js/libs/jquery.bootstrap.message.js"></script>
    </head>
    <body>
        <!--header start here-->
        <?php include 'adminoptions.php'; ?>
        <?php include 'contactusphp.php'; ?>
        <?php include 'header.php'; ?>
        <!--header ends here-->
        
        <div class="row">
        <div class="col-lg-7 right"><br>
            <u><b><h1 class="h1">Contact Us</h1></b></u>
            <div class="first_div">
            <form action="contactusphp.php" method="post">
              Name: <input id="name" type="text" name="text" class="form"placeholder="Enter your Name here"><br><br>
              
               Phone: <input id="phone" type="text" name="text"class="form" placeholder="+92XXXXXXXXXX"><br><br>
               Email:   <input id="email" type="text" name="text"class="form" placeholder="XYZ@gmail.com"><br><br>Role:
               <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio1" value="option1" checked="checked">
                <label class="form-check-label" for="inlineRadio1" >Student</label>
               </div>
              <div class="form-check form-check-inline">
                <input class="form-check-input" type="radio" name="inlineRadioOptions" id="inlineRadio2" value="option2">
                <label class="form-check-label" for="inlineRadio2">Teacher</label>
              </div><br><br>City:
              <select class="form-select select1" aria-label="Default select example">
                <option selected>Lahore</option>
                <option value="1">Karachi</option>
                <option value="2">Faislabad</option>
                <option value="3">Multan</option>
              </select><br>
              Message:<br>
              <textarea class="texterea" placeholder="Enter your Description here"></textarea><br><br>
              <button type="button" name="submit" class="btn btn-outline-success" onclick="myFunction()">Submit</button>
                </form>
            </div>
        </div>
        <div class="col-lg-5 left">
            <div class="row Second_div">
                <h2>Address Info</h2>
                <hr class="line">
                <div class="col-lg-6">
                    <p>T: +92-345-2244470<br>E:XYZ@gmail.com<br>W:www.cyclinghub.com</p>
                </div>
                <div class="col-lg-6">
                    <p>Monday__Sunday<br>10am__10pm</p>
                </div>
            </div>
            <div class="row Second_div">
                <div class="col-lg-6">
                    <p>Karachi: <br>SA-S4, 2nd Floor, Shahnaz<br>Arcade, Noor Naheed Super<br>Store, Shaheed-e-Millat Rd,<br>BYJCHS, Karachi.</p>
                </div>
                <div class="col-lg-6">
                    <p>Multan:<br>Opening Soon</p>
                </div>
            </div>
            <!--Google map-->
            
            <div id="map-container-google-2" class="z-depth-1-half map-container" style="height: 500px">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d13615.23964550655!2d74.26823160000001!3d31.44689969999999!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xe396992a5b05891c!2sUniversity%20of%20Central%20Punjab!5e0!3m2!1sen!2s!4v1670502740937!5m2!1sen!2s" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <!--Google Maps-->
            <!--Javascript for form-->
            <script>
                
            </script>
        </div>
      </div>
        
        <!--Footer start here-->
         <?php include 'footer.php'; ?>
    </body>
</html>
<!--https://cycling-world.pk/-->