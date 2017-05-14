<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Medic!</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- BlueImp gallery CSS -->
    <link rel="stylesheet" href="css/blueimp-gallery.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/myCSS.css">

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Crete+Round|Indie+Flower|Signika" rel="stylesheet">

  </head>

  <body>
    <nav class="navbar navbar-inverse navbar-static-top">
      <div class="container">
        <!-- Header -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navHeaderCollapse"> 
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="About.html"><span>BRAND</span></a>
        </div>
        <!--collapsible part below-->
        <div class="collapse navbar-collapse" id="navHeaderCollapse">
          <!-- Navbar menu right -->
          <ul class="nav navbar-nav navbar-right">
            <li class="active"><a href="Home.html"><span class="glyphicon glyphicon-home"><span> Home</span></span></a></li>
            <li><a href="About.html"><span class="glyphicon glyphicon-book"><span> About</span></span></a></li>
            <li><a href="Contact.html"><span class="glyphicon glyphicon-envelope"><span> Contact</span></span></a></li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-plus">
                <span class="menuText"> Medic!</span><span class="caret"></span>
              </a>
              <!-- Section for design specification -->
              <ul class="dropdown-menu">
                <li><a class="subDrop" href="01_What-is-medic.html"><span>What is it?</span></a></li>
                <li><a href="01_What-is-medic.html#1-Overview"><span>Design overview</span></a></li>
                <li><a href="01_What-is-medic.html#1-Definition"><span>Product definition</span></a></li>
                <li><a href="01_What-is-medic.html#1-Video"><span>Video pitch</span></a></li>
                <li class="divider"></li>
                <li><a href="02_Who-will-use-medic.html"><span>Who will use it?</span></a></li>
                <li><a href="02_Who-will-use-medic.html#2-Personas"><span>User personas</span></a></li>
                <li><a href="02_Who-will-use-medic.html#2-Scenario"><span>User scenario</span></a></li>
                <li class="divider"></li>
                <li><a href="03_How-will-medic-be-used.html"><span>How will it be used?</span></a></li>
                <li><a href="03_How-will-medic-be-used.html#3-UseCases"><span>Product use cases</span></a></li>
                <li><a href="03_How-will-medic-be-used.html#3-UseCaseDiagrams"><span>Use case diagrams</span></a></li>
                <li class="divider"></li>
                <li><a href="04_Medic-product-design.html"><span>Product design</span></a></li>
                <li><a href="04_Medic-product-design.html#4-StructureMap"><span>Structure map</span></a></li>
                <li><a href="04_Medic-product-design.html#4-Wireframes"><span>Wireframes</span></a></li>
                <li><a href="04_Medic-product-design.html#4-TaskDiagram"><span>Task diagram</span></a></li>
                <li><a href="04_Medic-product-design.html#4-Storyboards"><span>Storyboards</span></a></li>
                <li><a href="04_Medic-product-design.html#4-StateTransition"><span>State transition diagram</span></a></li>
                <li class="divider"></li>
                <li><a href="05_Appendices.html"><span>Appendices</span></a></li>
                <li><a href="05_Appendices.html#5-Appendix1"><span>Appendix 1: example 1</span></a></li>
                <li><a href="05_Appendices.html#5-Appendix2"><span>Appendix 2: example 2</span></a></li>
                <li class="divider"></li>
                <li><a href="06_References.html"><span>References</span></a></li>
                <li class="divider"></li>
              </ul>
            </li>
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                <span class="glyphicon glyphicon-thumbs-up">
                <span class="menuText"> Follow</span><span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="http://www.facebook.com/" target="_blank"><span>Facebook</span></a></li>
                <li><a href="http://www.twitter.com/" target="_blank"><span>Twitter</span></a></li>
                <li><a href="http://www.instagram.com/" target="_blank"><span>Instagram</span></a></li>
                <li><a href="http://www.linkedin.com/" target="_blank"><span>LinkedIn</span></a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container -->
    </nav>
    
    <!-- main page content -->
    <div class="col-xs-8 col-xs-offset-2 pageContent">
      <img src="img/medic-04.png" class="img-responsive center-block bannerImage">
<?php
// code re-use: https://www.w3schools.com/php/php_form_url_email.asp
$name = test_input($_POST["InputName"]);
if (!preg_match("/^[a-zA-Z ]*$/",$name)) {
  $nameErr = "Only letters and white space allowed"; 
}
$subject = test_input($_POST["InputSubject"]);
if (!preg_match("/^[a-zA-Z ]*$/",$subject)) {
  $nameErr = "Only letters and white space allowed"; 
}
$email = test_input($_POST["InputEmail"]);
if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
  $emailErr = "Invalid email format"; 
}
$message = test_input($_POST["InputMessage"]);
if (strlen($message < 2)) {
  $emailErr = "Please enter a full message"; 
}
//code re-use: http://myphpform.com/final-form.php
/* Let's prepare the message for the e-mail */
$emailNotify = "Hello!

Your contact form has been submitted by:

Name: $yourname
E-mail: $email

Message:
$message

End of message
";

/* Send the message using mail() function */
mail($myemail, $subject, $message);

/* Redirect visitor to the thank you page */
header('Location: Thanks.html');
exit();
?>