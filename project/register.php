<!DOCTYPE html>
<html>
    <head>
            <title>Register/signin page</title>
            <link rel="icon" href="content/logo.png" type="image/gif">
            <link rel="stylesheet" href="register.css">
            <link rel="stylesheet" href="styles.css">
            <script type="text/javascript" src="script.js"></script>
            <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous"><script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script><script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    </head>
    <body>
        <!--header start here-->
        <?php include 'adminoptions.php'; ?>
        <?php include 'header.php'; ?>
        <!--header ends here-->
        
        
        <div class="row">
        <div class="col-lg-7 fst_div">
            <ul class="nav nav-tabs" id="myTab" role="tablist">
                <li class="nav-item" role="presentation">
                  <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Login</button>
                </li>
                <li class="nav-item" role="presentation">
                  <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Register</button>
                </li>
              </ul>
              <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
                    <div class="login_div">
                        <h2>Login</h2>
                        <p>Username or Email*</p>
                        <input type="text" placeholder="Name or Email" class="Inputs">
                        <br><br>
                        <p>password*</p>
                        <input type="password" placeholder="********"class="Inputs"><br><br>
                        <button class="btn_1">Login</button><br><br>
                        <a href="Adminpannel/index.php"><b>login as admin</b></a>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                            <label class="form-check-label" for="defaultCheck1">
                              Remember Me
                            </label>
                          </div>
                    </div>
                </div>

                <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                    <div class="login_div">
                        <h2>Register</h2> 
                        <p>Email Address*</p>
                        <input type="text" placeholder="XYZ@gmail.com" class="Inputs"><br><br>
                        <p>A password will be sent to your email address.<br><br>
                            Your personal data will be used to support your experience throughout this website, to manage access to your account, 
                            and for other purposes described in our privacy policy.</p><br><br>
                            <button class="btn_1">Register</button><br><br>
                    </div>
                </div>
              </div>
        </div>

        <div class="col-lg-5 Sec_div">
            <div class="Reg_div">
                <h1 style="text-align: center;">Register</h1>
                <p>Registering for www.cycling-world.pk allows you to access your   order status, 
                order history and your contact details. Just fill in the fields below,
                and we'll get a new account set up for you in no time.</p>
            </div>
            <img src="cycle.png" class="cycle">
        </div>
    </div>
        
        
        <!--Footer start here-->
         <?php include 'footer.php'; ?>
    </body>
</html>
<!--https://cycling-world.pk/-->