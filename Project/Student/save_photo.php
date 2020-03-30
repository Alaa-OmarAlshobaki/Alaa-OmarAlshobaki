<?php

session_start();

$name =$_FILES["photo"]["name"];
move_uploaded_file($_FILES["photo"]["tmp_name"],"images/".$name);

       $con=new mysqli("localhost","root","","traino");
       $st=$con->prepare("update student set image=? where email=?");
       $st->bind_param("ss", $name,$_SESSION["email"]);
       $st->execute();
 echo "<script>window.location='studentPage.php';</script>"; 