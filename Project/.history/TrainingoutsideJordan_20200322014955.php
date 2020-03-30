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
<form method="post">
<section class="borderpage" style="margin-left:400px;">

            <img src="img/ttt.png"alt="my form" text-align="Center"/>
            <div style="width:728px">
                <p class="b">  Training Outside Jordan</p>
            </div>
            
                <label for="1-Serial Number "> 1-Serial Number :</label>
                <input class="b1" type="number" name="serialNumber"/><br><br>

                <label for="2-Student Name">2-Student Name :</label>
                <input class="b1" type="text" name="studentName"/><br><br>
                
                <label for="3-ID">3-ID :</label>
                <input class="b1" type="number" name="ID"/><br><br>

                <label for="Major">4-Major :</label>
                <input class="b1" type="text" name="major"/><br><br>

                <label for="">5-Personal Number :</label>
                <input class="b1" type="number" name="personalnumber"/><br><br>

                <label for="6-Home Number">6-Home Number :</label>
                <input class="b1" type="number"name="homenumber"/><br><br>

                <label for="Email">7-Email :</label>
                <input class="b1" type="email" name="email"/><br><br><br>

                <label for="slide">Information about Company and supervisor :</label><br><br>

                <label for="8-Company Address">Company Address :</label>
                <input class="b1" type="text" name="companyAddress"/><br><br>
                
                <label for="Country">Country :</label>
                <input class="b1" type="text" name="country"/><br><br>

                <label for="City">City :</label>
                <input class="b1" type="text"name="city"/><br><br>
                
                <label for="Company Name">Company Name :</label>
                <input class="b1" type="text" name="companyName"/><br><br>

                <label for="Area">Area :</label>
                <input class="b1" type="text" name="Area"/><br><br>
                
                <label for="Company Email">Company Email :</label>
                <input class="b1" type="email"name="companyEmail"/><br><br>

                <label for="Company Location">Company Location :</label>
                <input class="b1" type="text" name="companyLocation"/><br><br>

                <label for="Fax">Fax :</label>
                <input class="b1" type="number"name="fax"/><br><br>

                <label for="Phone">Phone :</label>
                <input class="b1" type="number"name="phone"/><br><br>

                <label for="Personal phone for supervisor">Personal phone for supervisor :</label>
                <input class="b1" type="number"name="supervisorPhone"/><br><br>

                <label for="Email of supervisor">Email of supervisor :</label>
                <input class="b1" type="email" name="supervisorEmail"/><br><br>

                <label for="Training field">8-Training field :</label>
                <input class="b1" type="text" name="Trainingfield"/><br><br>

                <label for="Academic Supervisor">9-Academic Supervisor :</label>
                <input class="b1" type="text" name="AcademicSupervisor"/><br><br>

                I, the student, pledge:<input class="b1" type="text" name="pledge"/><br><br>


                all of the above mentioned data Correct. In the event of any error or lack of data, the Field Training Committee has the right to consider the training void
                Student signature:<br><br><input style="width:200px;" class="b1" type="text"name="Studentsignature"/><br><br>
                <label for="Academic Supervisor">9-Academic Supervisor :</label>
                <select style="width:200px; height:35px" class="custom-select" style="width:50% ; float:right!important"autocomplete="on"  id="inlineFormCustomSelect" name="id_academicadvisor" required="required">
                                <option selected> select from ...</option>
                                           <?php


    
                                            $con = new mysqli("localhost", "root", "", "traino");
                                            $stm = $con->prepare("select*from academicadvisor");
                                            $stm->execute();
                                            $rs = $stm->get_result();
                                            while ($row = $rs->fetch_assoc()){
                                    
                                           
                                             extract($row);
                                             $idStu=$row['id'];
                                             $StuNum=$row['name'];
                                        

                                             ?>
                                           
                                <option  value="<?php echo $idStu;?>" ><?php echo $StuNum;?></option>

                                                         <?php
                                                    }
                                               
                                            
                                                

                                             ?>
    
                            </select>


                <br><br>
</section><div style="text-align:center;margin-left: 175px">
    <input type="submit" name="s" value="save"
           class="btn-danger"/><br></div>     
            <?php
            if (isset($_POST["s"])) {
                
                    $con = new mysqli("localhost", "root", "", "traino");
                    if ($con->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                        }
                        
                        $sql = "INSERT INTO insidejordan (serialNumber, studentName, ID,major,personalnumber,homenumber,email,companyAddress,country,city
                        ,companyName,Area,companyEmail,companyLocation,fax,phone,supervisorPhone,supervisorEmail,Trainingfield,AcademicSupervisor,pledge,Studentsignature,location,id_academicadvisor)
                        VALUES ('".$_POST["serialNumber"]."'
                        ,'".$_POST["studentName"]."'
                        ,'".$_POST["ID"]."'
                        ,'".$_POST["major"]."'
                        ,'".$_POST["personalnumber"]."'
                        ,'".$_POST["homenumber"]."'
                        ,'".$_POST["stdEmail"]."'
                        ,'".$_POST["companyAddress"]."'
                        ,'".$_POST["country"]."'
                        ,'".$_POST["city"]."'
                        ,'".$_POST["companyName"]."'
                        ,'".$_POST["Area"]."'
                        ,'".$_POST["companyEmail"]."'
                        ,'".$_POST["companyLocation"]."'
                        ,'".$_POST["fax"]."'
                        ,'".$_POST["phone"]."'
                        ,'".$_POST["supervisorPhone"]."'
                        ,'".$_POST["supervisorEmail"]."'
                        ,'".$_POST["Trainingfield"]."'
                        ,'".$_POST["AcademicSupervisor"]."'
                        ,'".$_POST["pledge"]."'
                        ,'".$_POST["Studentsignature"]."'
                        ,'outsaideJordan'
                        ,'".$_POST["id_academicadvisor"]."'
                        )";
                        
                        if ($con->query($sql) === TRUE) {
                        echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
                        } else {
                        echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
                        }
    
                        $con->close();
    
             // //echo "<script>window.location='TraininginsideJordan.php';</script>";
                echo "<script>window.location='StudentPage.php';</script>";
            }
            ?>
        </form>
    </body>
</html>