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
                <th>Serial Number</th>
                <th>name</th>
                <th>Student ID</th>
                <th>Phone Number</th>
                <th>Email</th>
                <th>image</th>
                <th>attendance_date</th>
                <th>numHours</th>
            
            </tr>
        </thead>
       
        <?php
        



    $st=$con->prepare("SELECT * FROM attendance INNER JOIN student ON attendance.id_student = student.id_student
                                               
                                               ");

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                              
 
?>
            <tr>
                <td><?php echo $row['serialNumber']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['studentid']  ?></td>
                <td><?php echo $row['personalnumber']  ?></td>
                <td> <?php echo $row['email']  ?></td>
                <td><?php echo $row['image']  ?></td>
                <td> <?php echo $row['attendance_date']  ?></td>
                <td><?php echo if( $row['numHours']){}  ?></td>
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

