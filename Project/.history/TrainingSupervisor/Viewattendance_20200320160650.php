<?php session_start(); ?>
<!DOCTYPE html>


<?php 


if(isset( $_SESSION["email"] )){
   
    include "header.php"; 

?>




<html>



    <style>
      
    </style>
 
   
        <div class="container border-border-info" style="margin-top:170px">
            <div class="panel panel-default">
                <section>
                    <h1 style="margin-left:480px;margin-top: 30px">Attendance</h1><br>
                    <table class="table table-dark table-hover text-center" style="padding:8px;text-align:center;">
                        <thead style="background-color: gray">
                            <tr class="text-muted">
                               
                                <th style="color:white;">ID</th>

                                <th style="color:white;">Name</th>
                                <th style="color:white;">Weekly state</th>
                                <th style="color:white;">Hours</th>
                                <th style="color:white;">Date</th>

                            </tr>
                        </thead>               
                </section>
            </div>
        </div>  		
  
                        <?php
                     
                            $con = new mysqli("localhost", "root", "", "traino");
                            $st = $con->prepare("select*from attendance where id=?");
                            $st->bind_param("i",$_POST["id"]);
                            $st->execute();
      $rs=$st->get_result();
      if ($rs-> num_rows==0)
          echo "passport-Number not found";
      else {
      $row=$rs->fetch_assoc();
      echo "<tr>";
         echo "<td>".$row["id"]."</td>"."<br/>";
         echo "<td>".$row["name"]."</td>"."<br/>";
         echo "<td>".$row["present"]."</td>"."<br/>";
         echo"<td>". $row["hours"]."</td>"."<br/>";
         echo"<td>". $row["date"]."</td>"."<br/>";
     }
                   
                        ?>

                        </tr>
                        </tbody>
                    </table>
                </section>
            </div>
        </div>  		

    </form> 


<?php
}else{
    @header("location:login.php");
   die();
  }
  ?>
