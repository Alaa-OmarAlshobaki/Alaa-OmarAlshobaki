<?php session_start(); ?>
<!DOCTYPE html>


<?php 


if(isset( $_SESSION["email"] )){
    include "header.php"; 

?>




<html>



    <style>
      
    </style>
    <h2><b>Student information</b></h2>
              <table id="dt-basic-checkbox" class=" table table-hover table-striped table-bordered" style="width:100%">

                   <a href="receipt_Voucher.php?devid=insert" class="btn btn-success float-right btn-lg active" role="button" aria-pressed="true"><i class="fas fa-plus-square"></i>ADD RECEIPT CASH</a>
    
                     <thead  class="thead-dark">
                             <tr>
                                 <th>Num</th>
                                 <th>date</th>
                                 <th>amount_receiv</th>
                                 <th>Resiv-From</th>
                                 <th>out_of</th>
                                 <th>payment_aginest</th>
                                 <th>action</th>
                             </tr>
                     </thead>
                     <tbody>
                     <?php
//select all receipt voucher 

    $stmMangRecVou=$con->prepare("SELECT * FROM cash_received
                                           INNER JOIN company
                                            ON cash_received.id_com = company.company_id
                                 ");
    $stmMangRecVou->execute();
    if($stmMangRecVou->rowCount()>0){
        while($rowMangRecVou=$stmMangRecVou->fetch(PDO::FETCH_ASSOC)){
                 extract($rowMangRecVou);
                 $idCom=$rowMangRecVou['id'] 
      


?>
                              <tr>
                                 <td><?php echo $rowMangRecVou['id']  ?></td>
                                 <td><?php echo $rowMangRecVou['date']  ?></td>
                                 <td><?php echo $rowMangRecVou['amount_received']  ?></td>
                                 <td><?php echo $rowMangRecVou['company_name']  ?></td>
                                 <td><?php echo $rowMangRecVou['out_of']  ?></td>
                                 <td><?php echo $rowMangRecVou['payment_aginest']  ?></td>
                                
                                 <td>
                                     <a href="receipt_Voucher.php?devid=edit&&comId=<?php echo $id  ?>"><i class="fas fa-edit btn" data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a>
                                     <a href="/company/admin/pdf/export.php?comId=<?php echo  $idCom ?>"><i class="fas fa-file-export btn" data-toggle="tooltip" title="Export English"  style="font-size:15px ;padding:0px "></i></a>
                                     <a href="/company/admin/pdfArabic/exportArabic.php?comId=<?php echo  $idCom ?>"><i class="fas fa-file-export btn" data-toggle="tooltip" title="Export Arabic"  style="font-size:15px ;padding:0px "></i></a>
                                </td>
                
                              </tr>
              <?php
               }

        }
?>
                       </tbody>

                </table>

<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>
