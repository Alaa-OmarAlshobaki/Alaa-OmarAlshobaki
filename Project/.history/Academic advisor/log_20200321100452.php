<?php
include('/conn.php');
session_start();  

   
     if(isset($_POST["submit"]))  
     {  

          if(empty($_POST["email"]) || empty($_POST["password"]))  
          {  
               $message = '<label>All fields are required</label>';  
          }  
          else  
          {  

               $query = "SELECT * FROM register WHERE email = :email AND password = :password" ;  
               $statement = $connect->prepare($query);  
               $statement->execute(  
                    array(  
                         'email'     =>     $_POST["email"],  
                         'password'     =>     $_POST["password"]  
                    )  
               );  
               $count = $statement->rowCount();  
               if($count > 0)  
               {  
                    // $_SESSION["email"] = $_POST["email"];
                    $row = $statement->fetch(PDO::FETCH_ASSOC) ;
                    $_SESSION["fname"] = $row["fname"];
                    header("location:login_success.php");  
               }  	
               else  
               {  
                    $message = '<label>Wrong Data</label>';  
               }  
          }  
     }  




?>