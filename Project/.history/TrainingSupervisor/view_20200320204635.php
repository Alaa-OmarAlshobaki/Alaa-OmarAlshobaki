<?php 
session_start();
if(isset( $_SESSION["email"] )){
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
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
       
        <?php


    $stmMang=$con->prepare("SELECT * FROM attendance
                                           INNER JOIN student
                                            ON attendance.id_student = student.id_student
                                 ");
                               
    $stmMang->execute();
    $rowMang=$st->get_result();
  
    if($stmMang->num_rows()>0){
   
        while($rowMang=$stmMang->fetch(PDO::FETCH_ASSOC)){
                 extract($rowMang);
                 $id=$rowMang['id'] ;
              
                 
      


?>
            <tr>
                <td><?php echo $rowMang['id_student']  ?></td>
                <td><?php echo $rowMang['attendance_date']  ?></td>
                <td><?php echo $rowMang['sunday']  ?></td>
                <td><?php echo $rowMang['monday']  ?></td>
                <td> <?php echo $rowMang['Thursday']  ?></td>
                <td><?php echo $rowMang['numHours']  ?></td>
            </tr>

            <?php
               }

        }
?>
      
    </table>

</div>
</div>

<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>