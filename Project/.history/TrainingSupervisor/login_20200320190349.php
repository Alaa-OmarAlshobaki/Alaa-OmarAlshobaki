<?php 
include "../conn.php";
session_start(); ?>

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
                <li><a href="login.php">Login</a></li>
                <li><a href="signup.php">Signup</a></li>
            </ul>
        </nav>

    </div>
</header>
<!-- #header -->

<center>

    <div class="container wow fadeInUp">

      
                <form action="login.php" method="post"  action="<?php echo $_SERVER['PHP_SELF'] ?>">

                    <input type="email" name="email" placeholder="E-Mail"
                           class="form-control" style="width:50%" /><br/>
                    <input type="password" name="password" placeholder="Password"
                           class="form-control" style="width:50%"/><br/>

                    <input type="submit" name="s" value="Login"
                           class="btn btn-danger"/>
                  

                </form>
                
    </div>

</center>
<?php
// if (isset($_POST["s"])) {
//     $con = new mysqli("localhost", "root", "", "traino");
//     $st = $con->prepare("select email ,id from trainingadvisor where email=? and password=?");
//     $st->bind_param("ss", $_POST["email"], $_POST["password"]);
//     $st->execute();
//     $rs = $st->get_result();
//     if ($rs->num_rows == 0)
//         echo "<script>alert('Login Fail');</script>";
//     else {
//         $_SESSION["email"] = $_POST["email"];
//         $_SESSION["id"] = $_POST["id"];
//         echo "<script>window.location='Trainingadvisor.php';</script>";
//     }
// }


if($_SERVER["REQUEST_METHOD"] == "POST"){
    if (isset($_POST["s"])) {

    //تشييك ع التيكست فيلد فارغ او في داخله محتوى
     if(empty($_POST['email'])||empty($_POST['password'])){
         
         echo "<div class='alert alert-light' role='alert'>
               All fields are required
              </div>";
     }else{
            $email=htmlspecialchars(strip_tags($_POST['email']));
            $password=htmlspecialchars(strip_tags($_POST['password']));
             // تشفير الباس
            $hashPass=sha1($password);
    
              $stmLogin=$con->prepare("SELECT
                                                id,
                                                email ,
                                                password 
                                        FROM    trainingadvisor 
                                        WHERE   email=:email
                                        AND     password =:hashPass
                                        AND     group_id = 1
                                        
                                      ");

              $stmLogin->bindParam(':email' ,$email);
              $stmLogin->bindParam(':hashPass',$hashPass);
              $stmLogin->execute();
             
                    if($stmLogin->rowCount()>0){
                        $rowLogin= $stmLogin->fetch(PDO::FETCH_ASSOC);
                        $_SESSION["email"]= $email;
                        $_SESSION["id"]= $rowLogin['id'];
                        
                        header("location:Trainingadvisor.php");
                       }else{
                         echo "<div class='alert alert-danger' role='alert'>
                         <strong>اسم المستخدم الذي أدخلته لا يطابق أي حساب</strong>
                         </div>";
                        }
           }   
 }
}

?>

