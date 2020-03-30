<!DOCTYPE html>
<?php session_start();
$dsn='mysql:host=localhost;dbname=traino';
$user='root';
$pass='';
$option= array(
    PDO::MYSQL_ATTR_INIT_COMMAND  => 'SET NAMES utf8',

              );
              try{
                  $con=new PDO($dsn,$user,$pass,$option);
                  $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                 
                  
              }
              catch(PDOException $e){
                  echo 'failed to connect' . $e->getMessage();

              } ?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TRAINO</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Fonts -->
        <link href="../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link href="../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../lib/animate-css/animate.min.css" rel="stylesheet">
        <link href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css" rel="stylesheet"type="text/css">

        <!-- Main Stylesheet File -->
        <link href="../css/style.css" rel="stylesheet">
        <script src="//code.jquery.com/jquery-3.3.1.js" type="text/javascript"></script>
        <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    </head>

    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <header id="header">
            <div class="container">
                <nav id="nav-menu-container"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                           
                        </button>
                        <?php
                        if (isset($_SESSION["email"],$_SESSION["id"])) {
                           $email= $_SESSION["email"];
                           $id= $_SESSION["id"];
                          

                            $st = $con->prepare("SELECT image FROM academicadvisor 
                                                 WHERE email=:email
                                                 AND   id=:id");
                            $st->bind_param("s", $_SESSION["email"]);
                            $st->execute();
                            $rs = $st->get_result();
                            $row = $rs->fetch_assoc();

                              echo ' <a class="navbar-brand" href="signout.php">Sign Out</a>
                             <br/>
                             <a href="edit_photo.php">
                             <img src="images/' . $row["image"] . '" 
                              style="width:64px; height: 64px" class="img-circle"/></a>';
                        }
                        ?>
                    </div>
                    <div class="container" id="myNavbar">


                        <ul class="nav-menu">
                             <?php
                                          if(isset($_SESSION["email"],$_SESSION["id"]))
                echo '<li><a href="changepw.php">CHANGE PASSWORD</a></li>';
            else
                echo '<li><a href="signup.php">SIGN UP</a></li>
                      <li><a href="login.php">LOGIN</a></li>';
                                               ?>
                            <li class="menu-has-Reports"><a href="#">Reports</a>
                                <a href=""></a>
                                <ul>
                                    <li><a href="TraininginsideJordan.php">Training inside Jordan</a></li>
                                    <li><a href="TrainingoutsideJordan.php">Training outside Jordan</a></li>
                                    <li><a href="WeekReport.php">weekly report</a></li>
                                    <li><a href="finalreport.php">final report</a></li>
                                    <li><a href="confidentialreport.php">confidential report</a></li>
                                 
                                    
                                 </ul> 
                              
                               
                            </li>
                            <li><a href="CahtWeb/chat.php">Chat</a> </li>
                             <li><a href="Academicadvisor.php">Home</a> </li>
                             <li><a href="view.php">view</a></li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>


