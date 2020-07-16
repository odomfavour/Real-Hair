<?php
include 'includes/dbh.inc.php';
$email = "";
$emailErr = "";
$emailsuc = "";
if(isset($_POST['submit'])){


    $email = $_POST['email'];

    if (empty($_POST['email'])){
        $emailErr = "Email is required";
    }else{
        if(!filter_var($email, FILTER_VALIDATE_EMAIL)){
        $emailErr = "Invalid Email";
    }elseif(!empty($_POST['email']) && filter_var($email, FILTER_VALIDATE_EMAIL)){
         $sql = "INSERT INTO email (`email`) VALUES ('$email')";
if (mysqli_query($conn, $sql)){
    // echo "New record created successfully";
    $emailsuc = "You'll be notified shortly :)";
}else{
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
    }
    else{
        $emailsuc = "Valid Email";
    }
    }
   
}

?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Realhair</title>
    <!-- Bootstrap core CSS -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/css/owl.theme.default.min.css">
    <link href="assets/css/font-awesome.css" rel="stylesheet">
    <link href="assets/css/animate.css" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat&family=Raleway&display=swap"
        rel="stylesheet">

  </head>

  <body  data-target="#navbarResponsive">
      <!-- start home section -->
    <div id="home">
        <!-- nav -->
    <nav class="navbar navbar-expand-md navbar-light bg-light fixed-top">
      <div class="container">
        <a href="#" class="navbar-brand"><img src="assets/img/rh.svg" alt="" class="img-fluid"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
          <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse " id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
        
            <li class="nav-item">
              <a href="#how" class="nav-link">how it works</a>
            </li>
          </ul>
        </div>

      </div>
        
    </nav>    
    <!-- end of nav -->
    
    <!-- landing page section -->
    <main>
        <div class="hero">
            
            <div class="container">
                <!-- <section id="section08" class="demo">
                    <h1>Scroll Down Button #8</h1>
                    <a href="#section09"><span></span>Scroll</a>
                </section> -->

                <a href="#prototype" class="scroll-down" style="cursor:pointer;">
                        <div class="mouse">
                            <span></span>
                        </div>
                        <div class="arrow">
                            <span></span>
                        </div>
                        scroll
                    </a>
                
                <div class="row intro-section">
                    <div class="col-md-7">
                        <div class="intro">
                            <h1 class="hero-title"><span class="typed-text"></span><span class="cursor typing">&nbsp;</span></h1>
                            <p>Get ready to detect counterfeit hair with the swipe of your phone</p>
                        </div>
                        <div class="subscribe">
                            <p>Be the first to know when we launch!</p>
                            <form action="index.php" method="POST">
                                <div class="d-flex email-capture">
                                    <div class="form-group mr-2 wow fadeInLeft">
                                        <input type="email" class="form-control" name="email" placeholder="Enter your email">
                                    </div>
                                    <div class="text-center wow fadeInRight">
                                        <button name="submit" type="submit" class="btn btn-sub">Submit</button>
                                    </div>
                                    
                                </div>
                                <div style="color:red;" class="message">
                                    <?php echo $emailErr;?>
                                </div>
                                <div style="color:green;" class="message">
                                    <?php echo $emailsuc; ?>
                                </div>
            
                            </form>
                        </div>
            
                    </div>
                    <div class="col-md-5">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="hair-display text-center wow fadeInLeft">
                                            <img src="assets/img/girl1.png" alt="hair one" class="img-fluid">
                                        </div>
            
                                    </div>
                                    <div class="col-md-12">
                                        <div class="hair-display text-center wow fadeInLeft">
                                            <img src="assets/img/girl2.png" alt="hair one" class="img-fluid">
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row m-50">
                                    <div class="col-md-12">
                                        <div class="hair-display text-center wow fadeInRight">
                                            <img src="assets/img/girl3.png" alt="hair one" class="img-fluid">
                                        </div>
                                    </div>
                                    <div class="col-md-12">
                                        <div class="hair-display text-center wow fadeInRight">
                                            <img src="assets/img/girl4.png" alt="hair one" class="img-fluid">
                                        </div>
            
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <section id="intro">
            <div class="container">
                <div class="section-title">
                    <h3>The prototype</h3>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <div class="importance text-right" data-aos="fade-up">
                            <p>It is dependable and fast</p>
                        </div>
                        <div class="importance text-right wow fadeInUp" >
                            <p>It's ideal for every woman.</p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="product wow fadeInDownBig" id="prototype">
                            <img src="./assets/img/screen3.png" alt="" class="img-fluid wow bounce animated phone-bounce">
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="importance wow fadeInRight">
                            <p>It is handy and easy to use.</p>
                        </div>
                        <div class="importance wow fadeInUp">
                            <p>No quirks or delays during scanning</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="how-section">
            <div class="container">
                <div class="section-title">
                    <h3 class="text-center">how it works</h3>
                    <p>The app makes use of your camera feature to scan the products and produces a result to show if the scanned product (hair) is
                    real or counterfeit</p>
                </div>
                <div class="wrapper">
                    <div class="owl-carousel owl-theme">
                        <div class="item">
                            <div class="screen-container">
                                <img src="assets/img/screen1.png" alt="" class="img-fluid">
                            </div>
                            <div class="screen-desc">
                                <p>Install the application on your mobile device</p>
                            </div>
                        </div>
                        <div class="item">
                            <div class="screen-container text-center">
                                <img src="assets/img/screen2.png" alt="" class="img-fluid">
                            </div>

                            <div class="screen-desc">
                                <p>using your camera, place it over the hair product and scan.</p>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="screen-container">
                                <img src="assets/img/screen3.png" alt="" class="img-fluid">
                            </div>

                            <div class="screen-desc">
                                <p>The result of the search shows the details of the product</p>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="screen-container">
                                <img src="assets/img/screen4.png" alt="" class="img-fluid">
                            </div>
                            <div class="screen-desc">
                                <p>If it is a fake product, it crosses it.</p>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="screen-container">
                                <img src="assets/img/screen5.png" alt="" class="img-fluid">
                            </div>

                            <div class="screen-desc">
                                <p>You can adjust the settings to your taste</p>
                            </div>
                            
                        </div>
                        <div class="item">
                            <div class="screen-container">
                                <img src="assets/img/screen5.png" alt="" class="img-fluid">
                            </div>
                            <div class="screen-desc">
                                <p>The app keeps a collection of each scan you make.</p>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <footer>
            <div class="container">
                <div class="text-center">
                    <p>Copyright &copy; 2020</p>
                </div>
            </div>
        </footer>
        
    </main>
  
    

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/bootstrap.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/js/main.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.js"></script>
    <script src="assets/js/owl.carousel.min.js"></script>
    <script src="assets/js/owl.js"></script>
    <script>
        new WOW().init();
    </script>
  </body>
</html>
