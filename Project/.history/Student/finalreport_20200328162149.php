<!DOCTYPE html>
<?php include "header.php" ;



$connection = mysqli_connect('localhost','root','','files') or die("فشل الإتصال بقاعدة البيانات");
if ( !isset($_FILES['File']) )
{
    echo"<script>location.href='upload.html'</script>";
}
else
{
    $file_name = $_FILES['File']['name'];
    $file_name = str_replace(" " , "_" , $file_name);
    $file_size = $_FILES['File']['size'];
    $file_type = $_FILES['File']['type'];
    $file_cnt  = $_FILES['File']['tmp_name'];
    $file      = fopen($file_cnt,'r');
    $content   = fread($file,$file_size);
    fclose($file);
    
    $file_insert = mysqli_query($connection,"
    INSERT INTO `files` (id,filename,content,filesize,filetype)
    VALUES('NULL','".addslashes($file_name)."','".addslashes($content)."','".$file_size."','".$file_type."')
    ");
    
    if ( $file_insert )
    {
        $file_id = mysqli_insert_id($connection);
        echo 'تم رفع الملف بنجاح ,
        <br />
        <a href="download.php?id='.$file_id.'" class="text-decoration: blink;">للتحميل اضغط هنا</a>
        <br />
        <input type="submit" onclick="location.href=\'upload.html\'" value="رفع ملف آخر" />';
    }
    else
    {
        echo'فشل رفع الملف ,<br /><input type="submit" onclick="location.href=\'upload.html\'" value="رفع ملف آخر" />';
    }
    
} 



?>




<head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="title icon" href="images/title-img.png">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/all.js" integrity="sha384-xymdQtn1n3lH2wcu0qhcdaOpQwyoarkgLVxC/wZ5q7h9gHtxICrpcaSUfygqZGOe" crossorigin="anonymous"></script>
    <link href="https://fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
    <link rel="stylesheet" href="shhets.css">
    <title>Final Report</title>
</head>
<center>
    <form action="finalreport.php" method="post"
    enctype="multipart/form-data">
         
    Select a file
    
    
    <input type="file"name="file"/>
    <input type="submit" value="Upload"
           class="btn-danger"/>
</form>
</center>



 

 
