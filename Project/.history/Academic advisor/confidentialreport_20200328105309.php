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
          
  <?php
   if (isset($_GET["id_confidentialreport"])) {
        $con = new mysqli("localhost", "root", "", "traino");
        $st = $con->prepare("select*from confidentialreport where studentname=?");
        $st->bind_param("s", $_POST["studentname"]);
        $st->execute();
        $rs = $st->get_result();
        while ($row = $rs->fetch_assoc()) {
            ?>
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
            <input class="b1" type="text"name="studentname"value="<?php echo $row['studentname'] ?>"/><br><br>
            <label for="Major">2.Major :</label>
            <input class="b1" type="text"name="major"value="<?php echo $row['major'] ?>"/><br><br>
            <label for="The college">3.The college :</label>
            <input class="b1" type="text"name="college"value="<?php echo $row['college'] ?>"/><br><br>
            <label for="Date of training">4.Date of training, from :</label>
             <input class="b2" type="date" name="date"value="<?php echo $row['date'] ?>"/>, to :<input class="b2" type="date" name="date2"value="<?php echo $row['date2'] ?>"/><br><br>
           
            
            5.Student commitment to instructions :<input class="b1" type="text" name="commitment"value="<?php echo $row['commitment'] ?>"><br><br>
            6.Any Notes About student commitment :<br><br>
            <textarea style="width:750px" class="b1" rows="8" cols="30" name="notes"><?php echo $row['notes'] ?></textarea><br><br>
            
            
            
            
            
            7. The main areas of training the student practised :<br><br>
            -the first field :<input class="b2" type="text"name="firstf"value="<?php echo $row['firstf'] ?>"/>from :<input class="b2" type="date"name="datef"value="<?php echo $row['datef'] ?>"/>, to :<input class="b2" type="date"name="date2f"value="<?php echo $row['date2f'] ?>"/><br><br>
            -the second field :<input class="b2" type="text"name="secondf"value="<?php echo $row['secondf'] ?>"/>from :<input  class="b2" type="date"name="dates"value="<?php echo $row['dates'] ?>"/>, to :<input class="b2" type="date"name="date2s"value="<?php echo $row['date2s'] ?>"/><br><br>
            -the third field :<input class="b2" type="text"name="thirdf"value="<?php echo $row['thirdf'] ?>"/>from :<input class="b2" type="date"name="dateth"value="<?php echo $row['dateth'] ?>"/>, to :<input class="b2" type="date"name="date2th"value="<?php echo $row['date2th'] ?>"/><br><br><br>

            8.the student commitment during training :<input class="b1" type="text" name="duringtraining"value="<?php echo $row['duringtraining'] ?>"/><br><br>
            9.your rate to student :<input class="b1"  type="text" name="rate"value="<?php echo $row['rate'] ?>"/><br><br>
            10.any suggestions that can evolve the training field :<input class="b1" type="text" name="suggestion"value="<?php echo $row['suggestion'] ?>"/><br><br>
            11.any desire to attend the intervie test for the student:<input class="b1" type="text"name="desire"value="<?php echo $row['desire'] ?>"/><br><br>
            12.Grade: Number :<input class="b2" type="number"name="grade"value="<?php echo $row['grade'] ?>"/>, write :<input class="b2" type="text"name="gradetext"value="<?php echo $row['gradetext'] ?>"/><br><br>

            Name of orgnization :<input class="b1" type="text"name="organizationName"value="<?php echo $row['organizationName'] ?>"/><br><br>
            Name of supervisor :<input class="b1" type="text"name="supervisorName"value="<?php echo $row['supervisorName'] ?>"/><br><br><br><br><br>
            signture : 


            <br><br><br>
        </section>                

         </form>
       <?php
        }
    }
    ?>
    </body>

</html>
