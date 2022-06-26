<?php session_start();?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="icon" type="image/png" sizes="32x32" href="../images/favicon-32x32.png">
<link rel="stylesheet" href="../SCSS/dist/css/styles.css">
<link rel="stylesheet" href="../css/reservation.css">
<link rel="icon" href="../asset/logo/logo.jpg">
<script language="javascript" src="../js/index.js" defer></script>
<title>Cartel Travel Services</title>

<link rel="stylesheet" href="./SCSS/dist/css/css/bootstrap.min.css"><!-- bootstrap-CSS -->
<link rel="stylesheet" href="./SCSS/dist/css/css/bootstrap-select.css"><!-- bootstrap-select-CSS -->
<link href="../SCSS/dist/css/css/style.css" rel="stylesheet" type="text/css" media="all" />
<!--style.css -->
<link rel="stylesheet" href="../SCSS/dist/css/css/flexslider.css" type="text/css" media="screen" />
<!-- flexslider-CSS -->
<!-- <link rel="stylesheet" href="./SCSS/dist/css/css/font-awesome.min.css" /> -->
<link rel="stylesheet" href="/fontawesome-free-6.0.0-web/css/all.min.css">
<!-- fontawesome-CSS -->
<link rel="stylesheet" href="../SCSS/dist/css/css/menu_sideslide.css" type="text/css" media="all">
<!-- Navigation-CSS -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.css" />
<script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
</head>
<body>
    <header>
        <div class="container">
            <nav class="navbar">
                <img src="../asset/logo/logo.jpg" class="logo">
                <ul class="menu">
                    <li><a href="../index.html">Home</a></li>
                    <li><a href="../pages/Reservation.html">Reservation</a></li>
                    <li><a href="#">About US</a></li>
                    <li class="lien-deroulant"><a href="#"><i class="fa fa-user-circle fa-2x i_contact"></i></a></li>                                       
                </ul>
            </nav>
        </div>
    </header>
    <section>
        <div id="agileits-sign-in-page" class="sign-in-wrapper">
            <div class="agileinfo_signin">
                <h3>Sign In</h3>
                <?php
                  if(isset($_GET['req_err'])){
                      $err= htmlspecialchars($_GET['req_err']);
                      switch($err){
                         case 'msg':
                            ?>
                            <p class="error"><strong>Enter your email and password !</strong></p>
                            <?php
                            break;

                          case 'msg1':
                            ?>
                            <p class="error"><strong>Enter your email and password !</strong></p>
                            <?php
                            break;  
                          
                          case 'already':
                            ?>
                            <p class="error"><strong>Error your account don't exit !</strong></p>
                            <?php
                            break;

                          case  'email_length':
                            ?>
                            <p class="error"><strong>The lenght of your email is grater than 30 Characteres !</strong></p>
                            <?php
                            break;

                          case 'email':
                            ?>
                            <p class="error"><strong>Your Email is incorrect !</strong></p>
                            <?php
                            break;  

                          case 'password':
                            ?>
                            <p class="error"><strong>Your password aren't the same !</strong></p>
                            <?php
                            break;
                            
                          case 'success':
                            ?>
                            <p class="success"><strong>Your Account has been Create Succesfully !</strong></p>
                            <?php
                            break;  
                    }
                  } 
                ?>
                <p class="get-pw">Enter your email address below and we'll send you an email
                    with instructions.</p>
                <form action="config.php" method="post">
                    <input type="email" name="email" placeholder="Your Email" >
                    <input type="password" name="mdp" placeholder="Password" >
                    <input type="password" name="cmdp" placeholder="Confirm Password" >
                    <input type="submit"  name="Sign_In" class="btn">
                    <div class="forgot-grid">
                        <label class="checkbox"><input type="checkbox" name="checkbox">Remember me</label>
                        <div class="forgot">
                            <a href="#" data-toggle="modal" data-target="#myModal2">Forgot Password?</a>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </form>
                <h6> Not a Member Yet? <a href="signup.html">Sign Up Now</a> </h6>
            </div>
        </div>
    </section>
    <!-- //sign in form -->
</body>
</html>
