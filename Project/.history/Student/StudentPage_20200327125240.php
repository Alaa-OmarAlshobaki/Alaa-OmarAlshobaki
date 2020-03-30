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
            //  echo $row['numHours'];
            //  echo "<br>";
          //  echo (((600 - $row['numHours'])/100) ."%");
          echo (intval((600-(600-$row['numHours']))/100)."%");
           }

      }
   
     
      ?>
  
<style>


	
/* ---------------------------------
8. PROGRESSIONS SECTION
--------------------------------- */

 .progress{
    width: 150px;
    height: 150px;
    line-height: 150px;
    background: none;
    margin: 0 auto;
    box-shadow: none;
    position: relative;
}
.progress:after{
    content: "";
    width: 100%;
    height: 100%;
    border-radius: 50%;
    border: 12px solid #fff;
    position: absolute;
    top: 0;
    left: 0;
}
.progress > span{
    width: 50%;
    height: 100%;
    overflow: hidden;
    position: absolute;
    top: 0;
    z-index: 1;
}
.progress .progress-left{
    left: 0;
}
.progress .progress-bar{
    width: 100%;
    height: 100%;
    background: none;
    border-width: 12px;
    border-style: solid;
    position: absolute;
    top: 0;
}
.progress .progress-left .progress-bar{
    left: 100%;
    border-top-right-radius: 80px;
    border-bottom-right-radius: 80px;
    border-left: 0;
    -webkit-transform-origin: center left;
    transform-origin: center left;
}
.progress .progress-right{
    right: 0;
}
.progress .progress-right .progress-bar{
    left: -100%;
    border-top-left-radius: 80px;
    border-bottom-left-radius: 80px;
    border-right: 0;
    -webkit-transform-origin: center right;
    transform-origin: center right;
    animation: loading-1 1.8s linear forwards;
}
.progress .progress-value{
    width: 90%;
    height: 90%;
    border-radius: 50%;
    background: #44484b;
    font-size: 24px;
    color: #fff;
    line-height: 135px;
    text-align: center;
    position: absolute;
    top: 5%;
    left: 5%;
}
.progress.blue .progress-bar{
    border-color: #049dff;
}
.progress.blue .progress-left .progress-bar{
    animation: loading-2 1.5s linear forwards 1.8s;
}
@keyframes loading-1{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(180deg);
        transform: rotate(180deg);
    }
}
@keyframes loading-2{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(144deg);
        transform: rotate(144deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
} 

</style>
<?php
 $id=$_SESSION["id_student"];
 echo $id;
      
 $con = new mysqli("localhost","root","","traino");
     $st=$con->prepare("select * from student where id_student ='$id'");
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


        <h3 class="font-weight-bold"><?php $row['serialNumber']  ?></h3>
          <h3 ><?php $row['name']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['studentid']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['major']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['personalnumber']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['homenumber']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['email']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['password']  ?></h3>
          <h3 class="font-weight-bold"><?php $row['homenumber']  ?></h3>

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

    







