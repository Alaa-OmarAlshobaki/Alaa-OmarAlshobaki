<?php 
session_start();
if(isset( $_SESSION["email"] )){
  
    include "header.php"; 
    include "../functions.php"; 
?>
<html>
<script type="text/javascript" src="<?=homepage('js/jquery.js');?>"></script>


<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>