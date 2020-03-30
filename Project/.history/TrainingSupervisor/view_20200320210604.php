<?php 
session_start();
if(isset( $_SESSION["email"] )){
    include "../conn.php";
    include "header.php"; 
    include "../functions.php"; 
?>
<html>
<script type="text/javascript" src="<?=homepage('js/java.js');?>"></script>


<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
       
        <?php


    $st=$con->prepare("SELECT * FROM attendance INNER JOIN student ON attendance.id_student = student.id_student");
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                $row=$rs->fetch_assoc();
                                while(){
                             
 
?>
            <tr>
                <td><?php echo $row['id_student']  ?></td>
                <td><?php echo $row['attendance_date']  ?></td>
                <td><?php echo $row['sunday']  ?></td>
                <td><?php echo $row['monday']  ?></td>
                <td> <?php echo $row['name']  ?></td>
                <td><?php echo $row['numHours']  ?></td>
            </tr>

            <?php
               }
            }


        
?>
      
    </table>




<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>