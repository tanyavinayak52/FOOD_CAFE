<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include "headerfiles.php";
    ?>>
</head>
<body>
<?php
include_once "adminheader.php";
?>
<div class="container">
<div class="row">
<div class="col-md-12">
    <h1 class="text-center">View Category</h1>
</div>
</div>
    <table class="table table-bordered table-hover">
        <thead>
        <tr>
            <th>Srno</th>
            <th>CategoryName</th>
            <th>Description</th>
            <th colspan="2">Controls</th>
        </tr>
        </thead>
        <?php
        $k=1;
        $Query="select * from category";
        $result=mysqli_query($con,$Query);

        while($row=mysqli_fetch_array($result)) {
            ?>
            <tr>
                <td><?php echo $k++; ?></td>
                <td><?php echo urldecode($row['categoryname']); ?></td>
                <td><?php echo urldecode($row['description']); ?></td>

                <td><a href="editCategory.php?q=<?php echo $row[0] ?>"><!--<i class="fa fa-edit"></i>-->Edit</a> </td>
                <td><a href="deleteCategory.php?q=<?php echo $row[0] ?>"><!--<i class="fa fa-edit"></i>-->Delete</a> </td>
            </tr>

            <?php
        }
        ?>
    </table>
</div>
</body>
</html