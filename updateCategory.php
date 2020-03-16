<?php
include "adminheader.php";
$Categoryname = urlencode($_POST['Categoryname']);
$description = urlencode($_POST['description']);

$sql="UPDATE `category` SET `description`='$description' WHERE `categoryname`='$Categoryname'";
mysqli_query($conn,$sql);
header("Location:viewCategory.php");