<?php 
session_start();
if(isset( $_SESSION["email"] )){
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
                <th>First name</th>
                <th>Last name</th>
                <th>Position</th>
                <th>Office</th>
                <th>Start date</th>
                <th>Salary</th>
            </tr>
        </thead>
       
        <?php
//select all receipt voucher 

    $stmMangRecVou=$con->prepare("SELECT * FROM attendance
                                           INNER JOIN student
                                            ON attendance.id_student = student.id_student
                                 ");
                               
    $stmMangRecVou->execute();
    echo $stmMangRecVou;
    if($stmMangRecVou->num_rows()>0){
   
        while($rowMangRecVou=$stmMangRecVou->fetch(PDO::FETCH_ASSOC)){
                 extract($rowMangRecVou);
                 $id=$rowMangRecVou['id'] ;
              
                 
      


?>
            <tr>
                <td><?php echo $rowMangRecVou['id_student']  ?></td>
                <td><?php echo $rowMangRecVou['attendance_date']  ?></td>
                <td><?php echo $rowMangRecVou['sunday']  ?></td>
                <td><?php echo $rowMangRecVou['monday']  ?></td>
                <td> <?php echo $rowMangRecVou['Thursday']  ?></td>
                <td><?php echo $rowMangRecVou['numHours']  ?></td>
            </tr>

            <?php
               }

        }
?>
      
    </table>

</div>
</div>

<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>