<!DOCTYPE html>
<?php
session_start();
require_once 'C:\xampp\htdocs\Project\Student\chat\class\user.php';
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

              }




 if($_SERVER["REQUEST_METHOD"] == "POST"){

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
                                            id_student,
                                            email ,
                                            password 
                                    FROM    student 
                                    WHERE   email=:email
                                    AND     password =:password
                                    -- AND     group_id = 1
                                    
                                  ");

          $stmLogin->bindParam(':email' ,$email);
          $stmLogin->bindParam(':password',$password);
          $stmLogin->execute();
        
         
                if($stmLogin->rowCount()>0){
                    $rowLogin= $stmLogin->fetch(PDO::FETCH_ASSOC);
                    $_SESSION["email"]= $email;
                    $_SESSION["id_student"]= $rowLogin['id_student'];
                    

                  
                        $user->insert_login_details($_SESSION["id_student"]);
                  
                    header("location:StudentPage.php");
                   }else{
                     echo "<div class='alert alert-danger' role='alert'>
                     <strong>اسم المستخدم الذي أدخلته لا يطابق أي حساب</strong>
                     </div>";
                    }
       }   
}

?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login AcadimicAdvisor</title>
</head>
<body>
<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="margin-top:15%" >
<div class="shadow-lg p-3 bg-white rounded m-10">
    <h3 class="text-center ">Student LOGIN</h3>
     <input class="form-control" type="email" name="email" placeholder="email" required/>
     <input class="form-control " type="password" name="password" placeholder="password" autocomplete="off" required/>
     <input class="btn btn-primary btn-block shadow-lg  rounded" type="submit" value="login"/>
</form>
    
</body>
</html>