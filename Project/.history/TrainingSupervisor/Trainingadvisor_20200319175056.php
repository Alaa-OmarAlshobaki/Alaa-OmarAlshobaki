<!DOCTYPE html>
<?php 
    include "header.php";
    include "../functions.php"; 
?>




<html>
<script type="text/javascript" src="<?=homepage('js/jquery.js');?>"></script>

<script type="text/javascript">

      $("document").ready(function(){
      
 
      

        var sum = 0;
  
      $("#Sun").blur(function(){
    
  
      result= parseInt($("#Sun").val());
   
      sum +=result;
 
      $("#numHours").html(sum);
      });

     $("#Mon").blur(function(){
   
    result=parseInt($("#Mon").val());
  
     sum +=result;
  
     $("#numHours").html(sum);
 
  });

  $("#Tues").blur(function(){
   
   result= parseInt($("#Tues").val());
   
    sum +=result;
  
    $("#numHours").html(sum);

 });

 $("#Wed").blur(function(){
   
   result= parseInt($("#Wed").val());
   
    sum +=result;
   
    $("#numHours").html(sum);

 });
 $("#Thurs").blur(function(){
   
   result= parseInt($("#Thurs").val());
   
    sum +=result;

    $("#numHours").html(sum);

 });


      });
      </script>


    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color:white;
        }

        .a1{ padding-top:100px;
             border-width:10px;
             border-radius: 10px;
             background-color: #eee; 
             padding: 25px 25px 25px 25px ;
             color:white;
             background: linear-gradient(rgba(0, 0, 0, 0.1), rgba(0, 0, 0, 0.1)),url(images/img12.jpeg);

             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             box-shadow: 5px 5px 5px #999
        }



        .a2{ padding-top:100px;
             border-width:10px;
             border-radius: 7px;
             background-color: #eee; 
             padding: 25px 25px 25px 25px ;
             color:white;
             background: linear-gradient(rgba(0, 0, 0, .6), rgba(0, 0, 0, .7));
             background-position: center;
             background-repeat: no-repeat;
             background-size: cover;
             box-shadow: 5px 5px 5px #999
        }

        .button2
        { padding: 10px 22px;
          text-align: center;
          font-size: 17px;
          width:200px}
        /*for form and label css*/
        .form{
            width: 50%;
            height: 50px;
            position: relative;
        }
        .form input{
            width: 100%;
            height: 100%;
            font-size: 170%;
            padding-top: 20px;
            padding-bottom: 14px;
            color:#595f6e;
            border:none;
            outline: none;
        }
        .form label
        {
            position: absolute;
            bottom: 0px;
            left: 0;
            width: 100%;
            height:100%;
            pointer-events: none;
            border-bottom: 1px solid black;
        }
        .form label::after{
            content:"";
            position: absolute;
            left:0px;
            bottom: -1px;
            height: 100%;
            width: 100%;
            border-bottom: 3px solid #5fa8d3;
            transform: translateX(-100&);
            transition: transform 0.3s ease;
        }
        .content-name {
            position: absolute;
            bottom: 5px;
            left: 0px;
            transition: all 0.3s ease;
        }
        .form input:focus + .label-name .content-name,
        .form input:valid + .label-name .content-name
        {
            transform:  translateY(-150%);
            font-size: 14px;
            color:#5fa8d3;
        }

        .form input:focus .label-name::after,
        .form input:valid + .label-name::after{

            transform: translateX(0%);

        }
        .checkmark
        {
            display: block;
            width: 20px;
            height: 20px;
            background-color:#595f6e ;
            border-radius:3px;
            position: relative;
        }
        #check:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check2:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check3:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check4:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        #check5:checked ~ .checkmark { 
            background-color: #5fa8d3; 
        }
        .checkmark::after
        {
            content: "";
            position: absolute;
            width: 9px;
            height: 14px;
            border-right: 2px solid white;
            border-bottom: 2px solid white;
            top:40;
            left:50;
            transform: translate(-50%, -90%) rotateZ(40deg) scale(1.1);
            opacity: 0;
            transition: all 0.6s;
        }
        #check:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check2:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check3:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check4:checked ~ .checkmark::after { 
            opacity: 1;
        }
        #check5:checked ~ .checkmark::after { 
            opacity: 1;
        }
    </style>
    <form method="post">
        <div class="container border-border-info" style="margin-top:170px">
            <div class="panel panel-default">
                <section>
                    <h1 style="margin-left:480px;margin-top: 30px">Attendance</h1><br>
                    <div class="row">
                        <div class="form-group" style="margin-left:430px;margin-bottom: 20px">
                            <button class="btn btn-info btn-lg">View Attendance</button>
                            <button class="btn btn-info btn-lg">View Attendance</button>
                        </div>
                    </div>  
                    <table class="table table-dark table-hover text-center" style="padding:8px;text-align:center;">
                        <thead style="background-color: gray">
                            <tr class="text-muted">
                                <th style="color:white;">Date</th>
                                <th style="color:white;">ID</th>
                                <th style="color:white;">Sun</th>
                                <th style="color:white;">Mon</th>
                                <th style="color:white;">Tues</th>
                                <th style="color:white;">Wed</th>
                                <th style="color:white;">Thurs</th>
                                <th style="color:white;">#Hours</th>
                                <th style="color:white;">Action</th>
                            </tr>
                        </thead>

                        <tbody>


                            <tr>



                                <td style="padding-top: 60px"><input style="font-size: 130%" type="date" class="form-control"  autocomplete="on"  name="date" autocomplete="off" required /> </td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" name="id" placeholder="Student ID"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Sun" name="Sun" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Mon" name="Mon" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Tues" name="Tues" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Wed" name="Wed" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><input type="number"class="form-control has-warning" id="Thurs" name="Thurs" placeholder="number of hours"></td>
                                <td style="padding-top: 60px"><label id="numHours" name="numHours" style="width:100px">num of hours</label></td>
                                <td style="padding-top: 60px"><center><button style="width:100px" type="button" name="s"class="btn btn-info ">Submit</button></center>
                                </td>






                        <?php
                        if (isset($_POST["s"])) {
                            $con = new mysqli("localhost", "root", "", "traino");
                            $date=htmlspecialchars(strip_tags($_POST['date']));
                            $id=htmlspecialchars(strip_tags($_POST['id']));
                            $Sun=htmlspecialchars(strip_tags($_POST['Sun']));
                            $Mon=htmlspecialchars(strip_tags($_POST['Mon']));
                            $Tues=htmlspecialchars(strip_tags($_POST['Tues']));
                            $Wed=htmlspecialchars(strip_tags($_POST['Wed']));
                            $Thurs=htmlspecialchars(strip_tags($_POST['Thurs']));
                            $id=htmlspecialchars(strip_tags($_POST['numHours']));
                            $st = $con->prepare("INSERT into attendance values(?,?,?,?,?,?,?,?)");
                            $st->bind_param(
                                    $_POST["date"],
                                    $_POST["id"],
                                    $_POST["Sun"],
                                    $_POST["Mon"],
                                    $_POST["Tues"],
                                    $_POST["Wed"],
                                    $_POST["Thurs"],
                                    $_POST["numHours"]);
                            $st->execute();
                            echo "<script>window.location='Trainingadvisor.php';</script>";
                        }
                        ?>

                        </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>  		

    </form> 




