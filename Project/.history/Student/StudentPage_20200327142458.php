<?php include "header.php" ;
?>
<?php
function progress(){
  $id=$_SESSION["id_student"];
      
       $con = new mysqli("localhost","root","","traino");
           $st=$con->prepare("select 	numHours from attendance where id_student ='$id'");
           $st->execute();
           $rs=$st->get_result();
           while ($row=$rs->fetch_assoc())
           {
          echo (intval((600-(600-$row['numHours']))/100)."%");
           }

      }
   
     
      ?>

<?php
 $id=$_SESSION["id_student"];

      
 $con = new mysqli("localhost","root","","traino");
     $st=$con->prepare("SELECT* FROM student
                         INNER JOIN academicadvisor
                         ON student.id_academicadvisor= academicadvisor.academicid
                         INNER JOIN trainingadvisor
                         ON student.id_trainingadvisor= trainingadvisor.phone
                         WHERE id_student ='$id'");
     $st->execute();
     $rs=$st->get_result();
     while ($row=$rs->fetch_assoc())
     {
     

?>


  <div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center dark-grey-text">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">


        <h3 class="font-weight-bold"><?php echo $row['serialNumber']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['name']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['studentid']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['major']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['personalnumber']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['homenumber']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['email']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['password']  ?></h3>
          <h3 class="font-weight-bold"><?php echo $row['academicid']  ?></h3>
   

          <a class="btn btn-purple btn-md ml-0" href="#" role="button">Start now<i class="fa fa-gem ml-2"></i></a>
     <?php } ?>

          <hr class="my-5">

          <p class="font-weight-bold">Follow us on:</p>

          <!--Facebook-->
          <a href="#" class="mx-1" role="button"><i class="fab fa-facebook-f"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-twitter"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-linkedin-in"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-instagram"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-pinterest"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-youtube"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-github"></i></a>
          <a href="#" class="mx-1" role="button"><i class="fab fa-stack-overflow"></i></a>

        </div>
        <!--Grid column-->

        <!--Grid column-->
        <div class="col-md-5 mb-4 mb-md-0">

        

        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <div class="progress blue">
                        <span class="progress-left">
                            <span class="progress-bar"></span>
                        </span>
                        <span class="progress-right">
                            <span class="progress-bar   " ></span>
                        </span>
                        <div class="progress-value"aria-valuenow="<?php progress(); ?>" aria-valuemin="0"aria-valuemax="100"><?php    progress(); ?></div>
                    </div>
                </div>
            
            </div>
</div> 


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>

    







