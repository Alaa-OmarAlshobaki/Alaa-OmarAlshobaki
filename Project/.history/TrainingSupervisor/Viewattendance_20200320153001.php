<?php session_start(); ?>
<!DOCTYPE html>


<?php 


if(isset( $_SESSION["email"] )){
    include "header.php"; 

?>




<html>



    <style>
      
    </style>
   

<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>
