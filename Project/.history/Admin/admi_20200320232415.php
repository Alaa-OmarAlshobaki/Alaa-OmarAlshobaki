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
                    <th>studentName</th>
                    <th>ID</th>
                    <th>major</th>
                    <th>email</th>
                    <th>companyName</th>
                    <th>supervisorEmail</th>
                    <th>Trainingfield</th>
                    <th scope="col">AcademicSupervisor</th>
                    <th scope="col">State</th> 
            
            </tr>
        </thead>
       
        <?php
                        $con = new mysqli("localhost","root","","traino");
                        $st=$con->prepare("select*from insidejordan where status ='inprocess'");
                        $st->execute();
                        $rs=$st->get_result();
                        echo $rs->num_rows."<br/>";
                        

                        while ($row=$rs->fetch_assoc())
                        { extract($row);
                            ?>
            <tr>
                <td><?php echo $row['serialNumber']  ?></td>
                <td><?php echo $row['name']  ?></td>
                <td><?php echo $row['studentid']  ?></td>
                <td><?php echo $row['personalnumber']  ?></td>
                <td> <?php echo $row['email']  ?></td>
                <td><?php echo $row['image']  ?></td>
                <td> <?php echo $row['attendance_date']  ?></td>
                <td><?php if( $row['numHours']>=40){
                  
                    echo "<span><i style='color:green' class='fas fa-user-check'></i></span>";
                }
                else{
                    echo "<span><i style='color:red' class='fas fa-user-times'></i></span>";
                   
                }  ?></td>
                 <td> <?php echo $row['numHours']  ?></td>
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

