<?php
include "adminheader.php";
$categoryname=$_REQUEST['q'];
$sql="delete from category where categoryname='$categoryname'";
mysqli_query($conn,$sql);
header("Location:viewCategory.php");