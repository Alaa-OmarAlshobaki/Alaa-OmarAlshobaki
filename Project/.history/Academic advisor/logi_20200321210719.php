<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login AcadimicAdvisor</title>
</head>
<body>
<form class="login" action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post" style="margin-top:15%" >
<div class="shadow-lg p-3 bg-white rounded m-10">
    <h3 class="text-center ">AcadimicAdvisor LOGIN</h3>
     <input class="form-control" type="email" name="user" placeholder="UserName" autocomplete="off" required/>
     <input class="form-control " type="password" name="pass" placeholder="password" autocomplete="off" required/>
     <input class="btn btn-primary btn-block shadow-lg  rounded" type="submit" value="login"/>
</form>
    
</body>
</html>