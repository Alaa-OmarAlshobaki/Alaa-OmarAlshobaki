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
              
                <td><span style="color:green; font-size:30px"><i class="fas fa-download"></i></span></td>
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

