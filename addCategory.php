<?php
include "adminheader.php";
$Categoryname = urlencode($_POST['Categoryname']);
$description = urlencode($_POST['description']);

$s = "select * from categoryname where='$Categoryname'";
$result = mysqli_query($conn, $s);
if (mysqli_num_rows($result) > 0) {
    header("Location:category.php?er=0");
}
else{
    $sql="INSERT INTO `category`(`categoryname`, `description`) VALUES ('$Categoryname','$description')";
    mysqli_query($conn,$sql);
    header("Location:category.php?er=1");
}