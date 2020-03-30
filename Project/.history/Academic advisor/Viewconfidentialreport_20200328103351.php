<?php 


   
    include "header.php"; 
    include "../functions.php"; 
    
    $dsn='mysql:host=localhost;dbname=traino';
$user='root';
$pass='';
$option= array(
    PDO::MYSQL_ATTR_INIT_COMMAND  => 'SET NAMES utf8',

              );
              try{
                  $con=new PDO($dsn,$user,$pass,$option);
                  $con->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);
                 
                  
              }
              catch(PDOException $e){
                  echo 'failed to connect' . $e->getMessage();

              }
  

?>
<html>
<script type="text/javascript" src="<?=homepage('js/java.js');?>"></script>
<div class="container">
<div class="row">
<table id="example" class="display" style="width:100%">
        <thead>
            <tr>
                <th>Student Name</th>
                <th>Major</th>
                <th>College</th>
                <th>date</th>
                <th>Organization Name</th>
                <th>supervisorName</th>
                <th>action</th>
            
            </tr>
        </thead>
       
      
        




<?php



$academicid=$_SESSION['academicid'];

 $stm=$con->prepare("SELECT * FROM confidentialreport
 INNER JOIN student
  ON attendance.id_student= student.id_student
  WHERE student.id_academicadvisor = :academicid
");
$stm->bindParam(':academicid' ,$academicid);
$stm->execute();
if($stm->rowCount()>0){
while($row=$stm->fetch(PDO::FETCH_ASSOC)){
extract($row);
// $idCom=$rowMangRecVou['id'] 

?>
            <tr>
                <td><?php echo $row['studentname']  ?></td>
                <td><?php echo $row['major']  ?></td>
                <td><?php echo $row['college']  ?></td>
                <td><?php echo $row['date']  ?></td>
                <td> <?php echo $row['organizationName']  ?></td>
                <td><?php echo $row['supervisorName']  ?></td>
                 <td></td>
            </tr>

            <?php
               }

            }
        
?>
      
    </table>

</div>
</div>

