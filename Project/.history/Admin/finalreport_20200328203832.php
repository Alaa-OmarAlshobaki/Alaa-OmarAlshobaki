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
                <th>size</th>
                <th> download</th>
                <th>name student</th>
                <th>Action</th>
               
            
            </tr>
        </thead>
       
        <?php
        


        $con = new mysqli("localhost","root","","traino");
    $st=$con->prepare("SELECT * FROM files INNER JOIN student ON files.id_student = student.id_student
                                               
                                               ");

                                               
                               
                               $st->execute();
                               $rs=$st->get_result();
                               if ($rs->num_rows >0)
                              {
                                  while( $row=$rs->fetch_assoc()){
                              
 
?>
            <tr>
                <td><?php echo $row['id']  ?></td>
                <td><?php echo $row['name_file']  ?></td>
                <td><?php echo $row['size']  ?></td>
                <td><?php echo $row['downloads']  ?></td>
                <td> <?php echo $row['name']  ?></td>
              
                <td><span style="color:green; font-size:50px"><i class="fas fa-file-download"></i></span></td>
                
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

