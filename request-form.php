<?php

if($_POST["submit"]) {
    $recipient="your@email.address";
    $subject="Form to email message";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\nEmail: $senderEmail\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="<p>Thank you! Your message has been sent.</p>";
}

?><!DOCTYPE html>

<html>
<head>
    <meta charset="utf-8">
    <title>Contact form to email</title>
</head>

<body>


</body>

</html><!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->

<html class="no-js" lang="en"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>FAQ</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">


        <link rel="stylesheet" href="css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <script src="js/vendor/bootstrap.min.js"></script>
        <link rel="stylesheet" href="css/main.css">


        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    </head>
    <body >
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <?=$thankYou ?>    

    <div class="container-fluid" >

      <div class="row">

        <div class="col-lg-12" >
          <img  class="img-responsive" src="img/2011banner.jpg" alt="United Martial Arts Self Defense Academy"  />
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12" id="nav">
          <nav>
  <?php include 'nav.php' ?>
</nav>
        </div>

      </div>

      <div class="row">

        <div class="col-lg-12" >
          <h1>Request Form</h1>
        </div>

      </div>

      <div class="row">


        <div class="col-lg-12" >


          <form method="post" action="contact.php">
              <label>Name:</label>
              <input name="sender">

              <label>Email address:</label>
              <input name="senderEmail">

              <label>Message:</label>
              <textarea rows="5" cols="20" name="message"></textarea>

              <input type="submit" name="submit">
          </form>


       </div>




      <div class="row">

        <div class="col-lg-12" >

          <?php include 'footer.php' ?>
        </div>


      </div>


    </div> <!-- /container-fluid -->



    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

        <script src="js/vendor/bootstrap.min.js"></script>

        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <?php include "Google_Analytics_Code.php" ?>
    </body>
</html>