<!DOCTYPE html>
<?php include "header.php"; ?>
<html>



    <title>Training Inside Jordan</title>


    <style>
        body {
            font-family: Arial, Helvetica, sans-serif;

            font-size:120%
        }
        
        

        .b{
            border-style: inset;
            border-width: 4px;
            border-color:darck;
            padding:5px

        }

        .borderpage
        {
            border-style:solid;
            border-width:2px;
            border-radius:7px;
            padding-left:40px;
            margin-right:260px

        }

        .b1
        {
            border-style:solid;
            border-width:1px;
            width:380px;
            border-radius: 3px;	
            border-color:white;
            font-size:85%;
            border-bottom-color:black
        }
        .b2
        {
            border-style:solid;
            border-width:1px;
            width:180px;
            border-radius: 3px;	
            border-color:white;
            font-size:85%;
            border-bottom-color:black
        }
    </style>


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
      
    <?php

//    $id= isset($_GET['increment']) && is_numeric($_GET['increment'])?intval($_GET['increment']): 0;
//    $con = new mysqli("localhost","root","","traino");
//    $stm=$con->prepare("SELECT * FROM insidejordan  WHERE increment= ?");
//    $stm->bind_param('increment', $id);

//    $stm->execute();
  
//        $rs = $stm->get_result();
//        while ($row = $rs->fetch_assoc()) {
    if (isset($_GET["increment"])) {
        $con = new mysqli("localhost", "root", "", "traino");
        $st = $con->prepare("select*from insidejordan where increment=?");
        $st->bind_param("i", $_GET["increment"]);
        $st->execute();
        $rs = $st->get_result();
        while ($row = $rs->fetch_assoc()) {
    
            ?>
<form method="post">
<section class="borderpage" style="margin-left:400px;">

            <img src="../img/ttt.png"alt="my form" text-align="Center"/>
            <div style="width:728px">
                <p class="b">  Training Inside Jordan</p>
            </div>
            
                <label for="1-Serial Number "> 1-Serial Number :</label>
                <input class="b1" type="number" name="serialNumber" value="<?php echo $row['serialNumber'] ?>"/><br><br>

                <label for="2-Student Name">2-Student Name :</label>
                <input class="b1" type="text" name="studentName"value="<?php echo $row['studentName'] ?>"/><br><br>
                
                <label for="3-ID">3-ID :</label>
                <input class="b1" type="number" name="ID"value="<?php echo $row['number'] ?>"/><br><br>

                <label for="Major">4-Major :</label>
                <input class="b1" type="text" name="major"value="<?php echo $row['major'] ?>"/><br><br>

                <label for="">5-Personal Number :</label>
                <input class="b1" type="number" name="personalnumber"value="<?php echo $row['personalnumber'] ?>"/><br><br>

                <label for="6-Home Number">6-Home Number :</label>
                <input class="b1" type="number"name="homenumber"value="<?php echo $row['homenumber'] ?>"/><br><br>

                <label for="Email">7-Email :</label>
                <input class="b1" type="email" name="email"value="<?php echo $row['email'] ?>"/><br><br><br>

                <label for="slide">Information about Company and supervisor :</label><br><br>

                <label for="8-Company Address">Company Address :</label>
                <input class="b1" type="text" name="companyAddress"value="<?php echo $row['companyAddress'] ?>"/><br><br>
                
                <label for="Country">Country :</label>
                <input class="b1" type="text" name="country"value="<?php echo $row['country'] ?>"/><br><br>

                <label for="City">City :</label>
                <input class="b1" type="text"name="city"value="<?php echo $row['city'] ?>"/><br><br>
                
                <label for="Company Name">Company Name :</label>
                <input class="b1" type="text" name="companyName"value="<?php echo $row['companyName'] ?>"/><br><br>

                <label for="Area">Area :</label>
                <input class="b1" type="text" name="Area"value="<?php echo $row['Area'] ?>"/><br><br>
                
                <label for="Company Email">Company Email :</label>
                <input class="b1" type="email"name="companyEmail"value="<?php echo $row['companyEmail'] ?>"/><br><br>

                <label for="Company Location">Company Location :</label>
                <input class="b1" type="text" name="companyLocation"value="<?php echo $row['companyLocation'] ?>"/><br><br>

                <label for="Fax">Fax :</label>
                <input class="b1" type="number"name="fax"value="<?php echo $row['fax'] ?>"/><br><br>

                <label for="Phone">Phone :</label>
                <input class="b1" type="number"name="phone"value="<?php echo $row['phone'] ?>"/><br><br>

                <label for="Personal phone for supervisor">Personal phone for supervisor :</label>
                <input class="b1" type="number"name="supervisorPhone"value="<?php echo $row['supervisorPhone'] ?>"/><br><br>

                <label for="Email of supervisor">Email of supervisor :</label>
                <input class="b1" type="email" name="supervisorEmail"value="<?php echo $row['supervisorEmail'] ?>"/><br><br>

                <label for="Training field">8-Training field :</label>
                <input class="b1" type="text" name="Trainingfield"value="<?php echo $row['Trainingfield'] ?>"/><br><br>

                <label for="Academic Supervisor">9-Academic Supervisor :</label>
                <input class="b1" type="text" name="AcademicSupervisor"value="<?php echo $row['AcademicSupervisor'] ?>"/><br><br>

                I, the student, pledge:<input class="b1" type="text" name="pledge" value="<?php echo $row['pledge'] ?>"/><br><br>


                all of the above mentioned data Correct. In the event of any error or lack of data, the Field Training Committee has the right to consider the training void
                Student signature:<br><br><input style="width:200px;" class="b1" type="text"name="Studentsignature"/><br><br>


                <br><br>
</section>
<?php
        }
    }
    
    ?>

<div style="text-align:center;margin-left: 175px">
    <input type="submit" name="save" value="save"
           class="btn-danger"/><br></div>     
            <?php
            if (isset($_POST["save"])) {
                $con = new mysqli("localhost", "root", "", "traino");
                if ($con->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                    }
                    
                    $sql = "INSERT INTO student (serialNumber,name,studentid,major,personalnumber,homenumber,email)
                    VALUES ('".$_POST["serialNumber"]."'
                    ,'".$_POST["studentName"]."'
                    ,'".$_POST["ID"]."'
                    ,'".$_POST["major"]."'
                    ,'".$_POST["personalnumber"]."'
                    ,'".$_POST["homenumber"]."'
                    ,'".$_POST["email"]."',
                   
                    )";
                  
                    if ($con->query($sql) === TRUE) {
                    echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
                    } else {
                    echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
                    }

                    $con->close();
    
             // //echo "<script>window.location='TraininginsideJordan.php';</script>";
            }
            ?>

   
        </form>
   
   
 </body>