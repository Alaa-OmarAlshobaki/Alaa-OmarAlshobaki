<?php
$con=new mysqli("localhost","root","","traino");
$st=$con->prepare("insert into chat(msg) values(?)");
$st->bind_param("ss",$_POST["m"],$_POST["r"]);
$st->execute();
?>

