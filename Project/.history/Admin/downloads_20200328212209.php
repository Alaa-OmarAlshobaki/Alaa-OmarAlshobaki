<!DOCTYPE html>
<?php include "header.php"; ?>

<body>
<?php
 if (isset($_GET["id"])) {
     echo "ertyuhiop[oiuytretfgyhuijop[poiuygtfrdtgyhuiopoiuytrtyuio";
   
        $con = new mysqli("localhost", "root", "", "traino");
        $id = $_GET['id'];

        // fetch file to download from database
        $sql = "SELECT * FROM files WHERE id=$id";
        $result = mysqli_query($con, $sql);
    
        $file = mysqli_fetch_assoc($result);
        $filepath = 'uploads/' . $file['name'];
    
        if (file_exists($filepath)) {
            header('Content-Description: File Transfer');
            header('Content-Type: application/octet-stream');
            header('Content-Disposition: attachment; filename=' . basename($filepath));
            header('Expires: 0');
            header('Cache-Control: must-revalidate');
            header('Pragma: public');
            header('Content-Length: ' . filesize('uploads/' . $file['name_file']));
            readfile('uploads/' . $file['name_file']);
    
            // Now update downloads count
            $newCount = $file['downloads'] + 1;
            $updateQuery = "UPDATE files SET downloads=$newCount WHERE id=$id";
            mysqli_query($con, $updateQuery);
            exit;
        }
    }?>
    </script>
</body>