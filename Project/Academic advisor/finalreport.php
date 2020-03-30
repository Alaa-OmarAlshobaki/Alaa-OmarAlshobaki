<!DOCTYPE html>
<?php include "header.php" ; ?>
<html>

<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="shhets.css">
    <title>Weekly Report</title>
</head>
<body>

<section>
<div class="container">
<div class="col-xl-10 col-lg-9 col-md-8 ml-auto pr-auto pl-auto">

<img src="../img/traning.png"
 alt="my form" text-align="Center"> 

 <form style="width:728px">
   <p class="b">  Weekly Report</p>
 </form>
 
 
 
 <form action="/action_page.php" style="width:500px">
	<label for="Week no.">Week no. </label>
       <input class="form-control" type="text" name="Week no."/>
        <label for="Date" >Date </label>
          <input class="form-control" type="date"/>
        <label for="Trainee name" >Trainee Name </label>
      <input class="form-control" type="text"/><br>
     <label for="Description">Description of Tasks/Assignments :</label> 
 <br><br>
 </form>
 
 
 
 
 <form action="/action_page.php" style="width:728px">
     <textarea class="form-control " rows="15" cols="30"></textarea><br><br>
 </form>
  
 
<form action="/action_page.php" style="width:728px">
   <label for="Training Supervisor Remarks" >Training Supervisor Remarks : </label>  
   <textarea class="form-control" rows="10" cols="30"></textarea>
</form><br><br>




<form action="/action_page.php" style="width:400px">
   <label for="Training Supervisor">Training Supervisor Name </label>
     <input class="form-control" type="text" name="Week no."/><br>
      <label for="Signature" >Training Supervisor Signature :</label>
</form>

 
 </div>
 </div>
 </section>
 
 
 
 
 </body>
 </html>