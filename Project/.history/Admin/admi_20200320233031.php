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
                    <th>AcademicSupervisor</th>
                    <th>State</th> 
            
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
            <td><?php echo $row['increment'] ; ?></td>
                        <td><?php echo $row['studentName'] ; ?></td>
                        <td><?php echo $row['ID'] ; ?></td>
                        <td><?php echo $row['major'] ; ?></td>
                        <td><?php echo $row['email'] ; ?></td>
                        <td><?php echo $row['companyName'] ; ?></td>
                        <td><?php echo $row['supervisorEmail'] ; ?></td>
                        <td><?php echo $row['Trainingfield'] ; ?></td>
                        <td><?php echo $row['AcademicSupervisor'] ; ?></td>
                        <td>
                            
                        <a href="addStudent.php?increment=<?php echo $increment  ?>"><i class="fas fa-edit btn" data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a> 
                            
                        </td>
            </tr>

            <?php
               }

            
        
?>
 <td><?php echo $row['increment'] ; ?></td>
                        <td><?php echo $row['studentName'] ; ?></td>
                        <td><?php echo $row['ID'] ; ?></td>
                        <td><?php echo $row['major'] ; ?></td>
                        <td><?php echo $row['email'] ; ?></td>
                        <td><?php echo $row['companyName'] ; ?></td>
                        <td><?php echo $row['supervisorEmail'] ; ?></td>
                        <td><?php echo $row['Trainingfield'] ; ?></td>
                        <td><?php echo $row['AcademicSupervisor'] ; ?></td>
                        <td>
                            
                        <a href="addStudent.php?increment=<?php echo $increment  ?>"><i class="fas fa-edit btn" data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a> 
                            
                        </td>
      
    </table>

</div>
</div>
</html>


