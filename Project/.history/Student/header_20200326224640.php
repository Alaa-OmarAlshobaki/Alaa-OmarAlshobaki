<!DOCTYPE html>
<?php session_start(); ?>

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

        <!-- Main Stylesheet File -->
        <link href="../css/style.css" rel="stylesheet">
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
                       if (isset($_SESSION["email"],$_SESSION["academicid"])) {
                        $email= $_SESSION["email"];
                        $academicid= $_SESSION["academicid"];
                       $st = $con->prepare("SELECT image FROM academicadvisor 
                                              WHERE email=:email
                                              AND   id_student=:id_student");
                         $st->bindParam(':email' ,$email);
                         $st->bindParam(':id_student' ,$id_student);
                         $st->execute();
                          if($st->rowCount()>0){
                           $row= $st->fetch(PDO::FETCH_ASSOC);

                              echo ' <a class="navbar-brand" href="signout.php">Sign Out</a>
                             <br/>
                             <a href="edit_photo.php">
                             <img src="images/' . $row["image"] . '" 
                              style="width:64px; height: 64px" class="img-circle"/></a>';
                        }}
                        ?>
                    </div>
                    <div class="container" id="myNavbar">


                        <ul class="nav-menu">
                             <?php
                                          if(isset($_SESSION["email"]))
                echo '<li><a href="changepw.php">CHANGE PASSWORD</a></li>';
            else
                echo '<li><a href="signup.php">SIGN UP</a></li>
                      <li><a href="login.php">LOGIN</a></li>';
                                               ?>
                            <li class="menu-has-Reports"><a href="#">Reports</a>
                               
                                <ul>
                                    <li><a href="TraininginsideJordan.php">Training inside Jordan</a></li>
                                    <li><a href="TrainingoutsideJordan.php">Training outside Jordan</a></li>
                                    <li><a href="WeekReport.php">weekly report</a></li>
                                    <li><a href="finalreport.php">final report</a></li>
                                 </ul> 
                              
                                
                            </li>
                            <li><a href="ajax_web2/chat.php">Chat</a> </li>
                             <li><a href="StudentPage.php">Home</a> </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>


