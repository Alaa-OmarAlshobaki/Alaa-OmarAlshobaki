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
                <th>id_student</th>
                <th>Action</th>
             
            
            </tr>
        </thead>
       
        <?php
        


        $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare("SELECT * FROM weekly_report 
                                               
                                               ");

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                                    extract($row);
 
?>
            <tr>
                <td><?php echo $row['Week_number']  ?></td>
                <td><?php echo $row['date']  ?></td>
                <td><?php echo $row['trainee_Name']  ?></td>
                <td><?php echo $row['description']  ?></td>
                <td> <?php echo $row['info']  ?></td>
                <td><?php echo $row['Supervisor_Name']  ?></td>
                <td> <?php echo $row['id_student']  ?></td>
                <td><a href="WeekReport1.php?Week_number=<?php echo $Week_number  ?>">
                    <i class="fas fa-eye" data-toggle="tooltip" title="Show" style="font-size:15px ;padding:0px">
                    </i></a>
                </td>
                
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

