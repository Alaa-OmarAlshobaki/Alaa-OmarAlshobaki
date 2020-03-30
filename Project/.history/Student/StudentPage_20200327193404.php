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
          echo (intval((600-(600-$row['numHours']))/100));
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

<link rel="stylesheet" type="text/css" href="../dist/loading-bar.css"/>
<script type="text/javascript" src="../dist/loading-bar.js"></script>
<style type="text/css">
  .ldBar-label {
    color: #09f;
    font-family: 'varela round';
    font-size: 1.5em;
    font-weight: 500;
  }
  .ldBar path.mainline {
    stroke-width: 10;
    stroke: #09f;
    stroke-linecap: round;
  }
  .ldBar path.baseline {
    stroke-width: 14;
    stroke: #f1f2f3;
    stroke-linecap: round;
    filter:url(#custom-shadow);
    }
    
</style>

  <div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center dark-grey-text">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6">
        <div class="card" >
  <ul class="list-group list-group-flush">
    <li class="list-group-item"> <h3 class="font-weight-bold text-secondary"><i class="far fa-id-badge text-secondary"></i>	Serial Number : <?php echo $row['serialNumber']  ?></h3></li>
    <li class="list-group-item"> <h3 class="font-weight-bold  text-secondary"><i class="fas fa-user-graduate  text-secondary"></i> Name : <?php echo $row['name']  ?></h3></li>
    <li class="list-group-item"> <h3 class="font-weight-bold  text-secondary"><i class="fas fa-id-card-alt  text-secondary"></i> Student Id : <?php echo $row['studentid']  ?></h3></li>
    <li class="list-group-item"> <h3 class="font-weight-bold  text-secondary"> <h3 class="font-weight-bold text-secondary"><i class="fas fa-certificate text-secondary"></i> Major : <?php echo $row['major']  ?></h3></li>
    <li class="list-group-item"> <h3 class="font-weight-bold  text-secondary"> <h3 class="font-weight-bold text-secondary"><i class="fas fa-mobile-alt text-secondary"></i> Personal Number : <?php echo $row['personalnumber']  ?></h3></li>
    <li class="list-group-item"> <h3 class="font-weight-bold  text-secondary"> <h3 class="font-weight-bold"><i class="fas fa-phone"></i> Home Phone : <?php echo $row['homenumber']  ?></h3></li>
    <li class="list-group-item"> <h3 class="font-weight-bold  text-secondary">  <h3 class="font-weight-bold">  Email : <?php echo $row['email']  ?></h3></li>
   
  </ul>
</div>

   

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
      
        <div
  data-preset="fan"
  class="ldBar label-center"
  data-value="<?php progress().'%' ?>"
></div>
<div
  data-preset="fan"
  class="ldBar label-center"
  data-value="90"
></div>


<div
  class="ldBar label-center"
  data-value="<?php progress().'%' ?>"
  data-preset="circle"
></div>
<div
  class="ldBar label-center"
  data-value="90"
  data-preset="circle"
></div>


        </div>
        <!--Grid column-->

      </div>
      <!--Grid row-->


    </section>
    <!--Section: Content-->


  </div>

    







