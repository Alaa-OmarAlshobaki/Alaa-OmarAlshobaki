<!DOCTYPE html>
<?php include "header.php" ; ?>

if(isset($_POST["submit"]))
{

    if(!empty($_FILES["file"]["type"])){
        $upload_dir_img='img/';
        $img_title=time().'_'.$_FILES["file"]["name"];
        $vaild_exe=array("png", "jpg","jpeg");
        $temporary=explode(".",$_FILES["file"]["name"]);
        $file_extension=end($temporary);
        if(($_FILES["file"]["type"]=="image/png")||($_FILES["file"]["type"]=="image/jpeg") ||($_FILES["file"]["type"]=="image/jpg") && in_array($file_extension,$valid_extensions))
         {
             $sourcePath=$_FILES["file"]['tmp_name'];
            move_uploaded_file($sourcePath,$upload_dir_img.$img_title);
            $hostImg='img/'.$img_title;
           
            $stm=$connect->prepare("INSERT INTO images (img) VALUES (:hostImg)");
            $stm->bindParam(':hostImg',$hostImg);
           if($stm->execute())
           {
             echo "done";
           }else{
             echo "error";
           }

         }


    }

    


}


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



 

 
