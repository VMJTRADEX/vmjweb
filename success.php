<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>VMJ Tradex - Exporting Best Moringa</title>

  <!-- Bootstrap Core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom Fonts -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
  <link href="vendor/simple-line-icons/css/simple-line-icons.css" rel="stylesheet">
  <link rel="stylesheet" href="node_modules/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="css/styles.css">

  <!-- Custom CSS -->
  <link href="css/stylish-portfolio.min.css" rel="stylesheet">

</head>


<body id="page-top">

  <!-- Navigation -->
  <nav class="navbar navbar-dark navbar-expand-sm  new-sec2 fixed-top">
    <div class='container'>
        <button class='navbar-toggler' type='button' data-toggle='collapse' data-target='#Navbar'>
            <span class="navbar-toggler-icon"></span>
        </button>
        <a class="navbar-brand" href='#'>
        <img src="img/3 (1).png" height="120" width='120'>
        </img>
        </a>
        <div class='collapse navbar-collapse' id='Navbar'>
            <ul class='navbar-nav mr-auto'>
                <li class='nav-item '><a class="nav-link mr-5" href="index.html"><span class=''> Home</span></a></li>
                <li class='nav-item '><a class="nav-link mr-5" href='./aboutus.html'>About</a></li>
                <li class='nav-item '><a class="nav-link mr-5" href='#'>Products</a></li>
                <li class='nav-item '><a class="nav-link mr-5" href='./cntc/contact.html'>ContactUs(Inquiry)  </a></li>
                <li class='nav-item '><a class="nav-link mr-5" href='#'>Services  </a></li>
            </ul>
           
        </div>
        


    </div>
</nav>
  

  <!-- Header -->
  <header class="masthead d-flex">
    <div class="container text-center my-auto">
      <div class="col-12  col-sm-12">
      <h1 class="mb-1">  <span class="vmj"> VMJ Tradex </span> </h1>
      <h3 class="mb-5">
        <em class="vmj2">Exporting best moringa and it's products in the world</em>
      </h3>
      <a class="btn btn-dark btn-xl js-scroll-trigger" href="#about">Find Out More</a>
    </div>
  </div>
    <div class="overlay"></div>
  </header>

  
  <?php

#Receive user input
$email_address = $_POST['email'];
$feedback = "Name :" .$_POST["name"] ."\n" . " Email is ".$_POST["email"]."\n". "Message is ".$_POST["message"];




#Send email
$headers = "From: $email_address";
$sent = mail('viralkhant3012@gmail.com', 'someone asking about the deal', $feedback, $headers);
?>

  <section class="content-section color-light  text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h2 class="mb-5">Thank you <?php
         $s=( $_POST['name'] );
        echo $s;
        
        ?>. We will Get back to you soon.  </h2>
      </div>
      
    </div>
  </section>
  <!-- Call to Action -->
  <section class="content-section new-sec text-white">
    <div class="container text-center">
      <h2 class="mb-5 mt-5 new-sec">Our Working Process Explained Below...</h2>
      <div class="row row-content justify-content-center">
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto color-icon  mb-3">
            <i class="fa fa-list"></i>
          </span>
          <h4>
            <strong>Go to Inquiry Page</strong>
          </h4>
          <p class="text-faded mb-0 inner-text">The very first setp is to go to
            our Inquiry page where you have to fill up the given form.
          </p>
        </div>
        
        <div class="col-lg-3 col-md-6 mb-5 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-user-circle"></i>
          </span>
          <h4>
            <strong>Examine the Inquiry</strong>
          </h4>
          <p class="text-faded inner-text mb-0">After Evaluating your Inquiry, we will get back to you within one day.</p>
        </div>
        <div class="col-lg-3 col-md-6">
          <span class="service-icon rounded-circle mx-auto mb-3">
            <i class="fa fa-road"></i>
          </span>
          <h4>
            <strong>Confirmation of Deal</strong>
          </h4>
          <p class="text-faded  inner-text mb-0">Now you have already figured out business with us, so let's get the deal done</p>
        </div>
      </div>
      
    </div>
  </section>

  <!-- Map -->
  <section class="content-section mt-4  new-sec2 text-center" id="services">
    <div class="container">
      <div class="content-section-heading">
        <h2 class="mb-5">Address &  Direct Contact Details </h2>
      </div>
      <div class="row  row-content justify-content-center">
        <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
          <span class="service-icon rounded-circle mx-auto color-icon  mb-3">
            <i class="fa fa-home"></i>
          </span>
          <h4>
            <strong> 230, Maruti nandan appartment, Krushnagar Main Road, Rajkot -360004 </strong>
          </h4>
          <p class="text-faded mb-0 color-innner-text"></p>
        </div>
        <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto color-icon  mb-3">
              <i class="fa fa-phone"></i>
            </span>
            <h4>
              <strong> +91 9998484902</strong></br>
              

            </h4>
            <p class="text-faded mb-0 color-innner-text"></p>
          </div>
          <div class="col-lg-4 col-md-4 mb-4 mb-lg-0">
            <span class="service-icon rounded-circle mx-auto color-icon  mb-3">
              <i class="fa fa-envelope"></i>
            </span>
            <h4>
              <strong> <a > vmjtradex@outlook.com</a></strong></br>
              <strong> <a> info@vmjtradex.com</a></strong>

            </h4>
            <p class="text-faded mb-0 color-innner-text"></p>
          </div>
       
       
      </div>
      <div class="row  row-content justify-content-center mt-5">
        
       
      </div>
    </div>
  </section>

  <!-- Footer -->
  <footer class="footer text-center">
    <div class="container">
      <ul class="list-inline mb-5">
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#!">
            <i class="icon-social-facebook"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white mr-3" href="#!">
            <i class="icon-social-twitter"></i>
          </a>
        </li>
        <li class="list-inline-item">
          <a class="social-link rounded-circle text-white" href="#!">
            <i class="icon-social-instagram"></i>
          </a>
        </li>
      </ul>
      <p class="text-muted small mb-0">Copyright &copy; VMJ Tradex 2020</p>
    </div>
  </footer>

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded js-scroll-trigger" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for this template -->
  <script src="js/stylish-portfolio.min.js"></script>

</body>

</html>
