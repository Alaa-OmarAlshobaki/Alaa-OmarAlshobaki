<?php
include "../conn.php";
 include "header.php";
 $email = $_SESSION['email'];
 $stmt = $con->prepare("UPDATE  SET lastlogindate = NOW() WHERE email = ?");
 $stmt->bindParam(1, $email['email']);
 $stmt->execute();
  ?>

