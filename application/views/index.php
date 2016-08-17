<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Elearning System</title>
    <!-- Bootstrap core CSS -->
    <link href="<?php echo base_url(); ?>assets/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="<?php echo base_url(); ?>assets/css/custom.css" rel="stylesheet">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.js"></script>
  </head>
<body>
       

      <div class="header-container">
         <nav>
            <ul class="fancyNav">
                <li id="home"><a href="<? echo base_url(); ?>" class="homeIcon">Home</a></li>
                <li id="news"><a href="#news">Sign In</a></li>
                <li id="about"><a href="#about">Sign Up</a></li>
                <li id="about"><a href="#about">Contact Us</a></li>
                <li id="about"><a href="#about">About</a></li>
                   <li id="search"><input name="search" id="search"></li>
                  <li id="home"><a href="<? echo base_url(); ?>">Search</a></li>

            </ul>
        </nav>
            <div class="video-container">
                <div class="header-content"><h1>Welcome UWIN Elearning System</h1></div>
                  <video preload="true" autoplay="autoplay" loop="loop" volume="0" poster="<? echo base_url();?>assets/img/kid.jepg">
                  <source src="<? echo base_url(); ?>assets/video/landing2.mp4" type="video/mp4"></source>
                  </video>   

            </div>
         
      </div>
  
</body>


  </html>