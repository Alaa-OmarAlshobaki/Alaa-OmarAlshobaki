<?php session_start(); ?>

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
<!--==========================
Header Section
============================-->

<header id="header">
    <div class="container">

        <div id="logo" class="pull-left">
            <a href="#hero"><img src="../img/TRAINO.png" alt=""/></img></a>
        </div>


        <nav id="nav-menu-container">
            <ul class="nav-menu">
                <li class="menu-active"><a href="../index.php">Home</a></li>
                <li><a href="../Student/login.php">Login</a></li>
                <li><a href="../Student/signup.php">Signup</a></li>
            </ul>

        </nav>

    </div>
</header>
<!-- #header -->
<body> 
<center>
    <form action="signup.php" method="post">
        <div class="container wow fadeInUp">
            <div class="col-md-6 col-md-push-3">
                <div class="form-signup">
                    <input type="text" name="name" placeholder="Name"
                           class="form-control" style="width:100%" required/><br/>
                    
                    <input type="number" name="studentid" placeholder="studentID"
                           class="form-control" style="width:100%" required/><br/>
                    
                    <input type="email" name="email" placeholder="E-Mail"
                           class="form-control" style="width:100%" required /><br/>
                    
                    <input type="password" name="password" placeholder="Password"
                           class="form-control" style="width:100%" required /><br/>
                    
                    <input type="password" name="confirm" placeholder="Confirm"
                           class="form-control" style="width:100%" required /><br/>
                    
                    <input type="submit" name="s" value="Sign Up"
                           class="btn btn-danger"/>
                </div>
            </div>
        </div>
    </form>
</center>
</body>

<?php 

    if(isset($_POST["s"]))
    {
        if($_POST["password"]==$_POST["confirm"])
        {
            $con=new mysqli("localhost","root","","traino");
            $st=$con->prepare("select email from student where email=?");
            $st->bind_param("s", $_POST["email"]);
            $st->execute();
            $rs=$st->get_result();
            if($rs->num_rows>0)
                echo "<script>alert('E-Mail Exist');</script>";
            else {
                
            $st=$con->prepare("insert into student(name,studentid,email,password) values(?,?,?,?)");
            $st->bind_param("siss", $_POST["name"],$_POST["studentid"],
                    $_POST["email"],$_POST["password"]);
            $st->execute();
            $_SESSION["email"]=$_POST["email"];
            echo "<script>window.location='StudentPage.php';</script>"; 
            }
            
        }
        else
           echo "<script>alert('Password Not Match');</script>"; 
    }
?>







