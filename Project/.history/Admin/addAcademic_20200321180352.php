<?php

include "../conn.php";
include "header.php";
include "../functions.php";
use PHPMailer\PHPMailer\PHPMailer;
    require 'C:\xampp\htdocs\Project\vendor\phpmailer\phpmailer\src\PHPMailer.php';
//    use \Project\vendor\phpmailer\phpmailer\src\SMTP;
//    use \Project\vendor\phpmailer\phpmailer\src\Exception;
  
//  require '\Project\vendor\phpmailer\phpmailer\src\Exception.php';
//  require '\Project\vendor\phpmailer\phpmailer\src\PHPMailer.php';
//  require '\Project\vendor\phpmailer\phpmailer\src\SMTP.php';
require 'C:\xampp\htdocs\Project\vendor/autoload.php';



?>
<body>
<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
        ?>

        <?phpMailer
        

        

<div class="container">
  <h2>Add Academic Advisor</h2>
  
  <form class="form-horizontal" action="" method="post">
  <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
    </div>
    <div class="form-group">
      <label for="num">Academic ID:</label>
      <input type="number" class="form-control" id="academicid" placeholder="Enter academic id" name="academicid">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pwd">
    </div>
  
    <button type="submit" class="btn btn-default">Submit</button>
  </form>
</div>

</body>
</html>