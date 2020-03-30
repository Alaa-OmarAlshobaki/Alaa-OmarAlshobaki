<?php 


    include "../conn.php";
    include "header.php"; 
    include "../functions.php"; 
  

?>
<html>
<script type="text/javascript" src="<?=homepage('js/java.js');?>"></script>
<div class="container">
<div class="row">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Week Number</th>
                <th>Date</th>
                <th>Trainee Name</th>
                <th>Description</th>
                <th>Info</th>
                <th>Supervisor Name</th>
                <th>Student Name</th>
                <th>Student Name</th>
             
            
            </tr>
        </thead>
       
        <?php
        

     $id=$_SESSION["academicid"];
        $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare('SELECT * FROM weekly_report 
                       INNER JOIN    student
                        ON           weekly_report.id_student = student.id_student
                        WHERE        student.id_academicadvisor= "'.$id .'"    
                                               
                                               ');

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                              
 
?>
            <tr>
                <td><?php echo $row['Week_number']  ?></td>
                <td><?php echo $row['date']  ?></td>
                <td><?php echo $row['trainee_Name']  ?></td>
                <td><?php echo $row['description']  ?></td>
                <td> <?php echo $row['info']  ?></td>
                <td><?php echo $row['Supervisor_Name']  ?></td>
                <td> <?php echo $row['name']  ?></td>
                
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

