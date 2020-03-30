 <!DOCTYPE html>
<?php include "header.php" ; ?>

<html>

    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            
            font-size:120%
        }

        p.test{

            width:300px;
            margin:auto;
            border:1px solid black;
            text-align:center;
            padding:5px;
            margin-left:255px}



        /* border for all page*/
        .borderpage
        {
            border-style:solid;
            border-width:2px;
            border-radius:7px;
            padding-left:40px;
            margin-right:360px
        }


        .b1
        {
            border-style:solid;
            border-width:1px;
            width:380px;
            border-radius: 3px;	
            border-color:white;
            font-size:100%;
            border-bottom-color:black
        }
        .b2
        {
            border-style:solid;
            border-width:1px;
            width:210px;
            border-radius: 3px;	
            border-color:white;
            font-size:100%;
            border-bottom-color:black
        }
    </style>
    <body>
        <form method="post">
            <section style="margin-left:300px;" class="borderpage">	
            <img src="../img/ttt.png">
            <p class="test">Model (7)<br>
                (confidential report)<br>
                Evaluating the field supervisor at
                the training site</p>
            <br><br>

            Dear respected field supervisor, After greeting,<br>

            In the name of the University of Applied Sciences,<br> we would like to extend our sincere thanks to you for your good cooperation and for real efforts to train our students.<br> We also ask you to evaluate the students who have trained you according to the following,after the end of the training period :<br><br> 
            <label for="Student Name">1.Student Name :</label>
            <option selected> select from ...</option>
                                           <?php

                                          $phone=$_SESSION['phone'];

                                            $con = new mysqli("localhost", "root", "", "traino");
                                            $stm = $con->prepare('select*from student where id_trainingadvisor = "'.$phone.'"');
                                            $stm->execute();
                                            $rs = $stm->get_result();
                                            while ($row = $rs->fetch_assoc()){
                                    
                                           
                                             extract($row);
                                             $idStu=$row['id_student'];
                                             $StuNam=$row['name'];
                                       
                                        

                                             ?>
                                           
                                <option  value="<?php echo $idStu;?>" ><?php echo $StuNam;?></option>

                                                         <?php
                                                    }
                                               
                                            
                                                

                                             ?>
    
                            </select>            
            <input class="b1" type="text"name="studentname"/><br><br>
            <label for="Major">2.Major :</label>
            <input class="b1" type="text"name="major"/><br><br>
            <label for="The college">3.The college :</label>
            <input class="b1" type="text"name="college"/><br><br>
            <label for="Date of training">4.Date of training, from :</label>
             <input class="b2" type="date" name="date"/>, to :<input class="b2" type="date" name="date2"/><br><br>
           
            
            5.Student commitment to instructions :<input class="b1" type="text" name="commitment"><br><br>
            6.Any Notes About student commitment :<br><br>
            <textarea style="width:750px" class="b1" rows="8" cols="30" name="notes"></textarea><br><br>
            
            
            
            
            
            7. The main areas of training the student practised :<br><br>
            -the first field :<input class="b2" type="text"name="firstf"/>from :<input class="b2" type="date"name="datef"/>, to :<input class="b2" type="date"name="date2f"/><br><br>
            -the second field :<input class="b2" type="text"name="secondf"/>from :<input  class="b2" type="date"name="dates"/>, to :<input class="b2" type="date"name="date2s"/><br><br>
            -the third field :<input class="b2" type="text"name="thirdf"/>from :<input class="b2" type="date"name="dateth"/>, to :<input class="b2" type="date"name="date2th"/><br><br><br>

            8.the student commitment during training :<input class="b1" type="text" name="duringtraining"/><br><br>
            9.your rate to student :<input class="b1"  type="text" name="rate"/><br><br>
            10.any suggestions that can evolve the training field :<input class="b1" type="text" name="suggestion"/><br><br>
            11.any desire to attend the intervie test for the student:<input class="b1" type="text"name="desire"/><br><br>
            12.Grade: Number :<input class="b2" type="number"name="grade"/>, write :<input class="b2" type="text"name="gradetext"/><br><br>

            Name of orgnization :<input class="b1" type="text"name="organizationName"/><br><br>
            <?php
$phone=$_SESSION['phone'];

$stm=$con->prepare("SELECT name,phone FROM trainingadvisor
                   WHERE phone= :phone
                  ");
$stm->bindParam(':phone' ,$phone);
$stm->execute();
if($stm->rowCount()>0){
while($row=$stm->fetch(PDO::FETCH_ASSOC)){
extract($row);

             ?>
            Name of supervisor :<input class="b1" type="text"name="supervisorName" value="<?php echo $row["name"] ?>"/><?php }} ?><br><br><br><br><br>
            signture : 


            <br><br><br>
        </section>
        <div style="text-align:center;margin-left: 175px">
    <input type="submit" name="s" value="save"
           class="btn-danger"/><br></div>                   
                           
                                <?php
                                if (isset($_POST["s"])) {
                                    $con = new mysqli("localhost", "root", "", "traino");
                                    $st = $con->prepare("insert into confidentialreport values(?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?,?)");
                                    $st->bind_param("ssssssssssssssssssssisss",
                                            $_POST["studentname"],
                                            $_POST["major"],
                                            $_POST["college"],
                                            $_POST["date"],
                                            $_POST["date2"],
                                            $_POST["commitment"],
                                            $_POST["notes"],
                                            $_POST["firstf"],
                                            $_POST["datef"],
                                            $_POST["date2f"],
                                            $_POST["secondf"],
                                            $_POST["dates"],
                                            $_POST["date2s"],
                                            $_POST["thirdf"],
                                            $_POST["dateth"],                    
                                            $_POST["date2th"],
                                            $_POST["duringtraining"],
                                            $_POST["rate"],
                                            $_POST["suggestion"],
                                            $_POST["desire"],
                                            $_POST["grade"],
                                            $_POST["gradetext"],
                                            $_POST["organizationName"],
                                            $_POST["supervisorName"]);
                                    $st->execute();
                                    echo "<script>window.location='confidentialreport.php';</script>";
                                }
                                ?>
         </form>

    </body>

</html>
