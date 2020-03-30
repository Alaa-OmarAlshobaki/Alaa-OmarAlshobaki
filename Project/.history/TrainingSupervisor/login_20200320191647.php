<?php
session_start();

  

 include (".php");
  $pageTitle="Login";
 
 
//check user comin from http request
   if($_SERVER["REQUEST_METHOD"] == "POST"){

      //تشييك ع التيكست فيلد فارغ او في داخله محتوى
       if(empty($_POST['user'])||empty($_POST['pas'])){
           
           echo "<div class='alert alert-light' role='alert'>
                 All fields are required
                </div>";
       }else{
              $userName=htmlspecialchars(strip_tags($_POST['user']));
              $password=htmlspecialchars(strip_tags($_POST['pas']));
               // تشفير الباس
              $hashPass=sha1($password);
      
                $stmLogin=$con->prepare("SELECT
                                                  user_id,
                                                  user_name ,
                                                  password 
                                          FROM    users 
                                          WHERE   user_name=:userName
                                          AND     password =:hashPass
                                          AND     group_id = 1
                                          
                                        ");

                $stmLogin->bindParam(':userName' ,$userName);
                $stmLogin->bindParam(':hashPass',$hashPass);
                $stmLogin->execute();
               
                      if($stmLogin->rowCount()>0){
                          $rowLogin= $stmLogin->fetch(PDO::FETCH_ASSOC);
                          $_SESSION["userName"]= $userName;
                          $_SESSION["userId"]= $rowLogin['user_id'];
                          
                          header("location:dachboard.php");
                         }else{
                           echo "<div class='alert alert-danger' role='alert'>
                           <strong>اسم المستخدم الذي أدخلته لا يطابق أي حساب</strong>
                           </div>";
                          }
             }   
   }
  
?>
<!-- Image and text -->


<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="margin-top:15%" >
<div class="shadow-lg p-3 bg-white rounded m-10">
    <h3 class="text-center ">ADMIN LOGIN</h3>
     <input class="form-control" type="text" name="user" placeholder="UserName" autocomplete="off" required/>
     <input class="form-control " type="password" name="pas" placeholder="password" autocomplete="off" required/>
     <input class="btn btn-primary btn-block shadow-lg  rounded" type="submit" value="login"/>
</form>
  </div>
  <?php
  include $pathtemp."footer.php";
 ?>
  <!-- </body>
  </html> -->





