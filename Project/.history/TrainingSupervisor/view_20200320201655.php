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
    if($stmMangRecVou->rowCount()>0){
        while($rowMangRecVou=$stmMangRecVou->fetch(PDO::FETCH_ASSOC)){
                 extract($rowMangRecVou);
                 $=$rowMangRecVou['id'] 
      


?>
            <tr>
                <td>First name</td>
                <td>Last name</td>
                <td>Position</td>
                <td>Office</td>
                <td>Start date</td>
                <td>Salary</td>
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