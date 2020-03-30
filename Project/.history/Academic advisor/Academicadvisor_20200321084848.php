<?php
include "../conn.php";
 include "header.php";
 $email = $_SESSION['email'];
 $stmt = $db->prepare("UPDATE users SET lastlogindate = NOW() WHERE email = ?");
 $stmt->bindParam(1, $email['email']);
 $stmt->execute(); ?>

