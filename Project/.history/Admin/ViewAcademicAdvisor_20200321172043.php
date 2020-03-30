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
<a href="addAcademic.php" class="btn btn-primary m active" role="button" aria-pressed="true"><i class="fas fa-plus-square"></i>ADD RECEIPT CASH</a>
        <thead>
            <tr>
                <th>#</th>
                <th>name</th>
                <th>Academic ID</th>
                <th>Email</th>
                <th>image</th>
               
            
            </tr>
        </thead>
       
        <?php
        


    $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare("SELECT * FROM academicadvisor");

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                              
 
?>
            <tr>
                <td><?php echo $row['id']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['academicid']  ?></td>
                <td> <?php echo $row['email']  ?></td>
                <td><?php echo $row['image']  ?></td>
               
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

