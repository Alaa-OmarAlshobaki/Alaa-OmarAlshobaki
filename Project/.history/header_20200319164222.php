<?php
  function homepage($slug)
  {
    return 'http://localhost/Project/'.$slug
  }
?>
 <header id="header">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="#hero"><img src="img/TRAINO.png" alt=""/></img></a>
        <!-- Uncomment below if you prefer to use a text image -->
        <!--<h1><a href="#hero">Header 1</a></h1>-->
      </div>

      <nav id="nav-menu-container">
        <ul class="nav-menu">
            <li class="menu-active"><a href="index.php">Home</a></li>
            <li><a href="index.php/#about">About Us</a></li>
          <li><a href="#services">Services</a></li>
          <li><a href="#portfolio">Portfolio</a></li>
          <i><a href="TraininginsideJordan_1.php">Inside Jordan</a></i>
          <i><a href="TrainingoutsideJordan.php">outside Jordan</a></i>
                 
          <li><a href="#testimonials">Testimonials</a></li>
          <li><a href="#team">Team</a></li>
          <li class="menu-has-children"><a href="">Drop Down</a>
            <ul>
              <li><a href="#">Drop Down 1</a></li>
              <li class="menu-has-children"><a href="#">Drop Down 2</a>
                <ul>
                  <li><a href="#">Deep Drop Down 1</a></li>
                  <li><a href="#">Deep Drop Down 2</a></li>
                  <li><a href="#">Deep Drop Down 3</a></li>
                  <li><a href="#">Deep Drop Down 4</a></li>
                  <li><a href="#">Deep Drop Down 5</a></li>
                </ul>
              </li>
              <li><a href="#">Drop Down 3</a></li>
              <li><a href="#">Drop Down 4</a></li>
              <li><a href="#">Drop Down 5</a></li>
            </ul>
          </li>
          <li><a href="#contact">Contact Us</a></li>
        </ul>
      </nav>
      
    </div>
  </header>
  <!-- #header -->
  <head>
  <meta charset="utf-8">
  <title>TRAINO</title>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <meta content="" name="keywords">
  <meta content="" name="description">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

  <!-- Bootstrap CSS File -->
  <link href="lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <!-- Libraries CSS Files -->
  <link href="lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="lib/animate-css/animate.min.css" rel="stylesheet">

  <!-- Main Stylesheet File -->
  <link href="css/style.css" rel="stylesheet">
  <script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

      $("document").ready(function(){
      
      console.log('fdddddddddddddf');
      

        var sum = 0;
  
      $("#Sun").blur(function(){
    
   
      result= parseInteger($("#Sun").val());
      console.log(result);
      sum +=result;
      console.log(sum);
      $("#numHours").html(sum);
      });

     $("#Mon").blur(function(){
   
    result= parseInteger($("#Mon").val());
  
     sum +=result;
     console.log(sum);
     $("#numHours").html(sum);
 
  });

  $("#Tues").blur(function(){
   
   result= parseInteger($("#Tues").val());
   
    sum +=result;
    console.log(sum);
    $("#numHours").html(sum);

 });

 $("#Wed").blur(function(){
   
   result= parseInteger($("#Wed").val());
   
    sum +=result;
    console.log(sum);
    $("#numHours").html(sum);

 });
 $("#Thurs").blur(function(){
   
   result= parseInteger($("#Thurs").val());
   
    sum +=result;
    console.log(sum);
    $("#numHours").html(sum);

 });


      });
      </script>
</head>