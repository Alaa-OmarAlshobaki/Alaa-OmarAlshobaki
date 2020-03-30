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
                <th>states</th>
                <th>numHours</th>
            
            </tr>
        </thead>
       
        <?php
        
//  $id=$_SESSION['id'];

//         $con = new mysqli("localhost", "root", "", "traino");
//     $st=$con->prepare("SELECT * FROM attendance 
//                                 INNER JOIN student
//                                  ON attendance.id_student = student.id_student
                               
                                               
//                                                ");
                                               

                                               
                               
//                                $st->execute();
//                                $rs=$st->get_result();
//                                if ($rs->num_rows >0)
//                               {
//                                   while( $row=$rs->fetch_assoc()){
                              
 
?>

<?php


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
$id=$_SESSION['id'];
 $stm=$con->prepare("SELECT * FROM attendance
 INNER JOIN student
  ON attendance.id_student= student.id_student
  WHERE id_academicadvisor = :id
");
$stm->bindParam(':id' ,$id);
$stm->execute();
if($stm->rowCount()>0){
while($row=$stm->fetch(PDO::FETCH_ASSOC)){
extract($row);
// $idCom=$rowMangRecVou['id'] 

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

