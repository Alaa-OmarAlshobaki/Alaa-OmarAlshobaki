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
                <th>num</th>
                <th>studentName</th>
                <th>ID</th>
                <th>major</th>
                <th>email</th>
                <th>companyName</th>
                <th>supervisorEmail</th>
                <th>Trainingfield</th>
                <th>AcademicSupervisor</th>
                <th>State</th>
            
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
                <td><?php echo $row['Trainingfield'] ?></td>
                 <td><?php echo $row['AcademicSupervisor'] ?></td>
                 <td>  <a href="addStudent.php?increment=<?php echo $increment  ?>"><i class="fas fa-edit btn" data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a> </td>
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

