<!DOCTYPE html>
<!DOCTYPE html>
<?php session_start(); ?>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <title>TRAINO</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Fonts -->
        <link href="../../https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Raleway:300,400,500,700,800" rel="stylesheet">

        <!-- Bootstrap CSS File -->
        <link href="../../lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <!-- Libraries CSS Files -->
        <link href="../../lib/font-awesome/css/font-awesome.min.css" rel="stylesheet">
        <link href="../../lib/animate-css/animate.min.css" rel="stylesheet">

        <!-- Main Stylesheet File -->
        <link href="../../css/style.css" rel="stylesheet">
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="60">
        <header id="header">
            <div class="container">
                <nav id="nav-menu-container"> 
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                           
                        </button>
                        <?php
                        if (isset($_SESSION["email"],$_SESSION["id_student"])) {
                            $con = new mysqli("localhost", "root", "", "traino");
                            $st = $con->prepare('select image from student where id_student="'. $_SESSION["id_student"].'"');
                        
                            $st->execute();
                            $rs = $st->get_result();
                            $row = $rs->fetch_assoc();

                              echo ' <a class="navbar-brand" href="../signout.php">Sign Out</a>
                             <br/>
                             <a href="../edit_photo.php">
                             <img src="../images/' . $row["image"] . '" 
                              style="width:64px; height: 64px" class="img-circle"/></a>';
                        }
                        ?>
                    </div>
                    <div class="container" id="myNavbar">


                        <ul class="nav-menu">
                             <?php
                                          if(isset($_SESSION["id_student"]))
                echo '<li><a href="../changepw.php">CHANGE PASSWORD</a></li>';
            else
                echo '<li><a href="../signup.php">SIGN UP</a></li>
                      <li><a href="../login.php">LOGIN</a></li>';
                                               ?>
                            <li class="menu-has-Reports"><a href="#">Reports</a>
                               
                                <ul>
                                    <li><a href="Training inside Jordan">Training inside Jordan</a></li>
                                    <li><a href="Training outside Jordan">Training outside Jordan</a></li>
                                    <li><a href="weeklyreport.php">weekly report</a></li>
                                    <li><a href="finalreport.php">final report</a></li>
                                 </ul> 
                              
                               
                            </li>
                            <li><a href="../CahtWeb/chat.php">Chat</a> </li>
                            <li><a href="../StudentPage.php">Home</a> </li>
                        </ul>

                    </div>
                </nav>
            </div>
        </header>




<html>
    
    <head>
        
        <meta charset="UTF-8">
        <title></title>
        <script src="jquery-3.3.1.min.js" type="text/javascript"></script>
        <script>
        $(document).ready(function(){
            $("#img1").hide();
            $("#btn").click(function(){
                $("#img1").show();
                $.post("save.php",{n:$("#name").val(),
                m:$("#msg").val(),r:$("#replay")},function(data,status){
                $("#img1").hide();
                $("#msg").val("");
                $("#msg").focus();
                 $("#replay").val("");
                $("#replay").focus();
                
                });
            });
        });
        
        function show_chat()
        {
            $.get("show.php",function(data,status){
                $("#chat").html(data);
            });
        }
        setInterval(show_chat,1000);
        
        </script>
    </head>
    <body>
         
    <center>
        
          
        
       
        <div style=".shadow-textarea textarea.form-control::placeholder {
    font-weight: 300;
}
.shadow-textarea textarea.form-control {
    padding-left: 0.8rem;
}
"class="form-group shadow-textarea">
            <?php
                        if (isset($_SESSION["id_student"])) {
                            $con = new mysqli("localhost", "root", "", "traino");
                            $st = $con->prepare("select name from student where id_student=?");
                            $st->bind_param("s", $_SESSION["id_student"]);
                            $st->execute();
                            $rs = $st->get_result();
                            $row = $rs->fetch_assoc();

                         echo'<i>'.'<b>'.$row["name"].'</i>.<br/><hr/>' ;
                              
                        }
                        ?>
  <label for="exampleFormControlTextarea6">MSG</label>
  <textarea class="form-control z-depth-1" id="msg" rows="3" placeholder="Write something here..."></textarea>

</div>

        <input type="button" value="Add" id="btn"/><br/>
        <br/>
        
        <img src="pleasewait.gif" id="img1" style="height: 64px;width: 64px"/>
        <div id="chat"style="background-color:#eee;width: 80%">
            
           
        </div>
            </center>
 
    </body>
</html>
