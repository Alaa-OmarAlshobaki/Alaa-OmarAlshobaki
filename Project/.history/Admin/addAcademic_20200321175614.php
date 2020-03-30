<?php

include "../conn.php";
include "header.php";
include "../functions.php";



?>
<body>

<div class="container">
  <h2>Add Academic Advisor</h2>
  
  <form class="form-horizontal" action="" method="post">
  <div class="form-group">
      <label for="text">Name:</label>
      <div class="col-sm-10">  
      <input type="text" class="form-control" id="name" placeholder="Enter name" name="name">
      </div>
    </div>
    <div class="form-group">
      <label for="num">Academic ID:</label>
      <div class="col-sm-10">  
      <input type="number" class="form-control" id="academicid" placeholder="Enter academic id" name="academicid">
      </div>
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