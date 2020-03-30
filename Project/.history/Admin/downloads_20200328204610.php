<!DOCTYPE html>
<?php include "header.php"; ?>

<body>
<?php
 if (isset($_GET["id"])) {
        $con = new mysqli("localhost", "root", "", "traino");
        