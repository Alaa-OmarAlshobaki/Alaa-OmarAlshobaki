<!DOCTYPE html>
<?php include "header.php"; ?>




<html>



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
    <form method="Post">
        <div class="container border-border-info" style="margin-top:170px">
            <div class="panel panel-default">
                <section>
                    <h1 style="margin-left:480px;margin-top: 30px">Attendance</h1><br>
                    <div class="row">
                        <div class="form-group" style="margin-left:430px;margin-bottom: 20px">
                           
                            <button class="btn btn-info btn-lg">View Attendance</button>
                           <button class="btn btn-info btn-lg">Enter</button>
                        </div>
                    </div>  
                    <table class="table table-dark table-hover text-center" style="padding:8px;text-align:center;">
                        <thead style="background-color: gray">
                            <tr class="text-muted">
                               
                                <th style="color:white;">ID</th>

                                <th style="color:white;">Name</th>
                                <th style="color:white;">Weekly state</th>
                                <th style="color:white;">Hours</th>
                                <th style="color:white;">Date</th>

                            </tr>
                        </thead>

                        <tbody>


                            <tr>



                                <td><center>
                            <div class="align-center"  style="padding-top: 50px ;padding-left:40px">
                                <input type="number" style="width:200px" name="id" class="form-control has-warning" placeholder="ID">
                            </div></center></td>
                            
                            <td><center><div class="align-center"  style="padding-top: 50px ;padding-left:40px">
                                <input type="text" style="width:200px" name="name" class="form-control has-warning" placeholder="Name">
                            </div></center></td>

                                <td style="padding-top: 25px;padding-left:40px">
                                    <div class="form-group">   
                                        <input type="radio" value="present" name="present" id="check" hidden>
                                        <label  for="check" class="checkmark"><span style="padding-left:25px">Present</span></label>
                                    </div>
                                    <div class="form-group">
                                        <input type="radio" value="absent" name="present" id="check2" hidden>
                                        <label for="check2" class="checkmark"><span style="padding-left:25px">Absent</span></label>
                                    </div>
                                </td>
                                <td>
                        <center>
                            <div class="align-center"  style="padding-top: 50px ;padding-left:40px">
                                <input type="number" style="width:200px" name="hours" class="form-control has-warning" placeholder="Hours">
                            </div></center>
                        </td>
                        <td style="padding-top: 58px"><input style="font-size: 120%" type="date" class="form-control"  autocomplete="on"  name="date" autocomplete="off" required /> </td>
                        </tr>


                        <button style="width:100;margin-left:195px" type="submit" name="s"class="btn btn-success btn-lg">take attendance</button>



                        <?php
                        if (isset($_POST["s"])) {
                            $con = new mysqli("localhost", "root", "", "traino");
                            $st = $con->prepare("insert into attendance values(?,?,?,?,?)");
                            $st->bind_param("issis",
                                    $_POST["id"],
                                    $_POST["name"],
                                    $_POST["present"],
                                    $_POST["hours"],
                                    $_POST["date"]);
                            $st->execute();
                            echo "<script>window.location='Attendance.php';</script>";
                        }
                        ?>

                        </tr>
                        </tbody>
                    </table>
                   
                </section>
            </div>
        </div>  		
    </form> 




