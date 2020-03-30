<?php

include 'class/user.php';
session_start();
if(!isset($_SESSION['academicid']))
{
 header('location:../login.php');
}
$user = new user();
$user_id=$_SESSION['academicid'];

if($_POST['to_user_id']){
  echo $user->chat_history($user_id,$_POST['to_user_id']);
}

?>