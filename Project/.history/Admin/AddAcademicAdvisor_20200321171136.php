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
                <th>#</th>
                <th>name</th>
                <th>Academic ID</th>
                <th>Email</th>
                <th>Email</th>
                <th>image</th>
               
            
            </tr>
        </thead>
       
        <?php
        



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
                <td><?php echo $row['personalnumber']  ?></td>
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

