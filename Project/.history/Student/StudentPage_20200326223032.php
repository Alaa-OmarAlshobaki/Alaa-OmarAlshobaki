<?php include "header.php" ; ?>

function insertStudant(){
       $userPassword=randomPassword();
       echo "aaaa"+$userPassword;
       $con = new mysqli("localhost","root","","traino");
           $st=$con->prepare("select*from insidejordan where status ='inprocess'");
           $st->execute();
           $rs=$st->get_result();
           echo $rs->num_rows."<br/>";
           

           while ($row=$rs->fetch_assoc())
           {
               echo"<tr>";
               $studentName=$row["studentName"];
               echo"<td>". $row["studentName"]."</td>";
               $id=$row["ID"];
               echo"<td>". $row["ID"]."</td>";
               echo"<td>". $row["major"]."</td>";
               $email=$row["email"];
           }
           $sql = "INSERT INTO student (name, studentid, email,password,image)
           VALUES ('".$studentName."'
           ,'".$id."'
           ,'".$email."'
           ,'".$userPassword."'
           ,'null'
           )";
           
           if ($con->query($sql) === TRUE) {
           echo "<script type= 'text/javascript'>alert('New record created successfully');</script>";
           } else {
           echo "<script type= 'text/javascript'>alert('Error: " . $sql . "<br>" . $con->error."');</script>";
           }

      }
      ?>
<style>
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
.progress.yellow .progress-bar{
    border-color: #fdba04;
}
.progress.yellow .progress-left .progress-bar{
    animation: loading-3 1s linear forwards 1.8s;
}
.progress.pink .progress-bar{
    border-color: #ed687c;
}
.progress.pink .progress-left .progress-bar{
    animation: loading-4 0.4s linear forwards 1.8s;
}
.progress.green .progress-bar{
    border-color: #1abc9c;
}
.progress.green .progress-left .progress-bar{
    animation: loading-5 1.2s linear forwards 1.8s;
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
@keyframes loading-3{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(90deg);
        transform: rotate(90deg);
    }
}
@keyframes loading-4{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(36deg);
        transform: rotate(36deg);
    }
}
@keyframes loading-5{
    0%{
        -webkit-transform: rotate(0deg);
        transform: rotate(0deg);
    }
    100%{
        -webkit-transform: rotate(126deg);
        transform: rotate(126deg);
    }
}
@media only screen and (max-width: 990px){
    .progress{ margin-bottom: 20px; }
}

</style>


  <div class="container my-5 py-5 z-depth-1">


    <!--Section: Content-->
    <section class="px-md-5 mx-md-5 text-center dark-grey-text">

      <!--Grid row-->
      <div class="row">

        <!--Grid column-->
        <div class="col-md-6 mb-4 mb-md-0">

          <h3 class="font-weight-bold">Material Design Blocks</h3>

          <p class="text-muted">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Id quam sapiente
            molestiae
            numquam quas, voluptates omnis nulla ea odio quia similique corrupti magnam, doloremque laborum.</p>

          <a class="btn btn-purple btn-md ml-0" href="#" role="button">Start now<i class="fa fa-gem ml-2"></i></a>

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
                    <span class="progress-bar sr-only"></span>
                </span>
                <div class="progress-value" aria-valuemin="0"aria-valuemax="100">90%</div>
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
    







