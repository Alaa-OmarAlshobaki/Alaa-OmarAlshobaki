<!DOCTYPE html>
<?php include "header.php"; ?>
<style>
    .pad {
        font-family:sans-serif;
        margin-left:400px;
    }
    .b{
        border-style: inset;
        border-width: 4px;
        border-color: darckgray;
    }
    .b1
    {
        border-style:solid;
        border-width:1px;
        width:200;
        border-radius: 3px;	
        border-color:white;
        font-size:110%;
        border-bottom-color: black
    }
    .hh
    {
        font-size:130%;
    }
    .aa
    {
        border-style:solid;
        border-width:2px;
        border-radius:7px;
        padding-left:40px;
        margin-right:206px
    }
</style>
<body>
<?php
 if (isset($_GET["id"])) {
        $con = new mysqli("localhost", "root", "", "traino");