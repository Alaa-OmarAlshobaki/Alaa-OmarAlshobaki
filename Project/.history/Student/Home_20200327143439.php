<?php
include "header.php";

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
          echo (intval((600-(600-$row['numHours']))/100));
           }

      }
   
     
      ?>
<link rel="stylesheet" type="text/css" href="../dist/loading-bar.css"/>
<script type="text/javascript" src="../dist/loading-bar.js"></script>
<style type="text/css">
  .ldBar-label {
    color: #09f;
    font-family: 'varela round';
    font-size: 2.5em;
    font-weight: 900;
  }
  
</style>
<body>

<div
  data-preset="fan"
  class="ldBar label-center"
  data-value="50"
></div>

<div
  class="ldBar label-center"
  data-value="<?php progress().'%' ?>"
  data-preset="circle"
></div>
    
</body>
</html>