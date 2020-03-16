<?php
error_reporting(0);
$con=mysqli_connect("localhost","root",NULL,"food_cafe");
if(!$con)
    /*{
        echo"connection created";
    }
    else{
        echo"connection failed due to".mysqli_connect_error();
    }*/
{
    die("connection failed due to".mysqli_connect_error());
}
//$insertCategory="insert into category(categoryname,supercategory)values('clothes','men')";
/*$result=mysqli_query($con,$insertCategory);
if($result)
{
    echo"data inserted";
}
else{
    echo"insertion failed";
}*/


error_reporting(0);
$conn = mysqli_connect("localhost", "root", NULL, "food_cafe");
if (!$conn) {
    die("connection failed due to " . mysqli_connect_error());
}
/*$categoryname = $_POST["categoryname"];
$supercategory = $_POST["supercategory"];
$insertCategory="insert into categories(categoryname,supercategory) values('toys','kids')";
//$insertCategory = "insert into categories ('$categoryname','$supercategory') values ('clothes','men')";
$result = mysqli_query($con, $insertCategory);
echo $insertCategory;
if ($result) {
    echo "data saved";
} else {
    echo "insert failed";
}*/
