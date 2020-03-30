 <?php include "header.php"; ?>
<html lang="en">
 
        <meta charset="UTF-8">
        <title></title>
        <link href="CssforPassport.css" rel="stylesheet" type="text/css"/>
        <link href="https://cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css?fbclid=IwAR0GZcoEJqdMCwfd-xsN6uKfLw42UsAIY67W5UodwWWJHzMmj1ruRjv1PvY" rel="stylesheet" type="text/css"/>
        <head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    $("#accept").button().click(function(){
        insertStudant();
    });    
});
</script>
</head>
    <body>
       
         <table border =1 width=70% class="table table-striped">
            <thead>
                <tr>
                <th scope="col">num</th>
                    <th scope="col">studentName</th>
                    <th scope="col">ID</th>
                    <th scope="col">major</th>
                    <th scope="col">email</th>
                    <th scope="col">companyName</th>
                    <th scope="col">supervisorEmail</th>
                    <th scope="col">Trainingfield</th>
                    <th scope="col">AcademicSupervisor</th>
                    <th scope="col">State</th>    
                    </tr>
             </thead>
            <tr scope="row">
                    <?php
                        $con = new mysqli("localhost","root","","traino");
                        $st=$con->prepare("select*from insidejordan where status ='inprocess'");
                        $st->execute();
                        $rs=$st->get_result();
                        echo $rs->num_rows."<br/>";
                        

                        while ($row=$rs->fetch_assoc())
                        {
                            echo"<tr>";
                            $increment=$row["increment"];
                            echo"<td>". $row["increment"]."</td>";
                            $studentName=$row["studentName"];
                            echo"<td>". $row["studentName"]."</td>";
                            $id=$row["ID"];
                            echo"<td>". $row["ID"]."</td>";
                            echo"<td>". $row["major"]."</td>";
                            $email=$row["email"];
                            echo"<td>". $row["email"]."</td>";
                            echo"<td>". $row["companyName"]."</td>";
                            echo"<td>". $row["supervisorEmail"]."</td>";
                            echo"<td>". $row["Trainingfield"]."</td>";
                            echo"<td>". $row["AcademicSupervisor"]."</td>";
                            <td>
                            <a href="receipt_Voucher.php?devid=edit&&comId=<?php echo $id  ?>"><i class="fas fa-edit btn" data-toggle="tooltip" title="Edit" style="font-size:15px ;padding:0px"></i></a>
                            <a href="/company/admin/pdf/export.php?comId=<?php echo  $idCom ?>"><i class="fas fa-file-export btn" data-toggle="tooltip" title="Export English"  style="font-size:15px ;padding:0px "></i></a>
                            <a href="/company/admin/pdfArabic/exportArabic.php?comId=<?php echo  $idCom ?>"><i class="fas fa-file-export btn" data-toggle="tooltip" title="Export Arabic"  style="font-size:15px ;padding:0px "></i></a>
                       </td>
                              echo '<td><a href="/PROJECT/Admin/addStudent.php"><i class="fas fa-user-plus btn" data-toggle="tooltip" title="Add student"  style="font-size:15px ;padding:0px "></i></a> </td>';
                        }
                       
                       
                        ?>
                        <?php 
                            if(isset($_POST["accept"]))
                            { 
                                insertStudant();
                            } 
                            ?>
                   <?php
                   function insertStudant(){
                    $userPassword=randomPassword();
                    echo "aaaa"+$userPassword;
                        $con = new mysqli("localhost", "root", "", "traino");
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
               
     
            </tr>
      
        </table>      
    </body>
</html>
<?php
function randomPassword() {
    $alphabet = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $pass = array(); //remember to declare $pass as an array
    $alphaLength = strlen($alphabet) - 1; //put the length -1 in cache
    for ($i = 0; $i < 8; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); //turn the array into a string
}
?>
      <?php
         function sendEmail( $to,$message) {
                            require_once "Mail.php";
                            
                            $from = "Sandra Sender <walaaalshobaki956@gmail.com>";
                            //$to = "Ramona Recipient <recipient@example.com>";
                            $subject = "Faculty of Information Technology";
                            $body = "Hi,\n\n"+$message;
                            $host = "ssl://mail.gdom.net";
                            $port = "465";
                            $username = "walaaalshobaki956@gmail.com";
                            $password = "1471996walaa";
                            
                            $headers = array ('From' => $from,
                            'To' => $to,
                            'Subject' => $subject);
                            $smtp = Mail::factory('smtp',
                            array ('host' => $host,
                                'port' => $port,
                                'auth' => true,
                                'username' => $username,
                                'password' => $password));
                            
                            $mail = $smtp->send($to, $headers, $body);
                            
                            if (PEAR::isError($mail)) {
                            echo("<p>" . $mail->getMessage() . "</p>");
                            } else {
                            echo("<p>Message successfully sent!</p>");
                            }
             }
          ?>
