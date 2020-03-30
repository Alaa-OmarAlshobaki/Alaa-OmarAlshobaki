<?php 
session_start();
if(isset( $_SESSION["email"] )){
  
    include "header.php"; 
    include "../functions.php"; 
?>
<html>
<script type="text/javascript" src="<?=homepage('js/java.js');?>"></script>
<div class="container">
<div class="row">

</div>
</div>

<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>