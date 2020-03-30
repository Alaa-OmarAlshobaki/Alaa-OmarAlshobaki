<?php

include'class/user.php';
session_start();
if(!isset($_SESSION['id_student'],$_SESSION["email"]))
{
 header('location:login.php');
}
$user_id=$_SESSION['id_student'];
$user = new USER();

$sql = "SELECT `id_academicadvisor` FROM student WHERE id_student =:user_id";
$query= $user->runQuery($sql);
$query->bindParam(':user_id',$user_id,PDO::PARAM_STR);
$query->execute();
$results=$query->fetchAll(PDO::FETCH_OBJ);
foreach ($results as $row) {  

if($_POST['to_user_id']){
	$to_user_id = $_POST['to_user_id'];
	echo $to_user_id;
	$chat_message = $_POST['chat_message'];
	$status = 1;
}

$sql = 'INSERT INTO chat_message(to_user_id,from_user_id,chat_message,status) VALUES (:to_user_id,:from_user_id,:chat_message,:status)';
$query= $user->runQuery($sql);

$query->bindParam(':to_user_id',$to_user_id,PDO::PARAM_STR);
$query->bindParam(':from_user_id',$user_id,PDO::PARAM_STR);
$query->bindParam(':chat_message',$chat_message,PDO::PARAM_STR);
$query->bindParam(':status',$status,PDO::PARAM_STR);

if($query->execute()){
	$p = $user->chat_history($user_id,$to_user_id);
	echo $p;
}




?>