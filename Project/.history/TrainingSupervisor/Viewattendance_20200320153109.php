<?php session_start(); ?>
<!DOCTYPE html>


<?php 


if(isset( $_SESSION["email"] )){
    include "header.php"; 

?>




<html>



    <style>
      
    </style>
    <h2><b>Student inf</b></h2>
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
}else{
    @header("location:login.php");
   die();
  }
  ?>
