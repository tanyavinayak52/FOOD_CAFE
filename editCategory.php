<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <?php
    include_once "headerfiles.php";
    ?>
</head>
<body>
<?php
include_once "adminheader.php";
$categoryname=urldecode($_REQUEST['q']);
$s="select * from category where categoryname='".urlencode($categoryname)."'";
$result=mysqli_query($conn,$s);
$row=mysqli_fetch_array($result);
?>
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <h1 class="text-center">Category</h1>
        </div>
    </div>
    <form action="updateCategory.php" method="post">
        <div class="form-group row">
            <label for="username" class="col-md-2">Category name</label>
            <div class="col-md-10">
                <input type="text" name="Categoryname" class="form-control" data-rule-required="true"
                       id="catname" readonly value="<?php echo urldecode($row[0]) ?>"
                       placeholder="name of category">
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-2">Description</label>
            <div class="col-md-10">
                <textarea name="description" class="form-control" data-rule-required="true"
                          id="desc"
                          placeholder="enter text here"><?php echo urldecode($row[1])    ?></textarea>
            </div>
        </div>

        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <input type="submit" class="btn btn-primary">
            </div>
        </div>
        <div class="form-group row">
            <label for="username" class="col-md-2"></label>
            <div class="col-md-10">
                <?php
                if (isset($_REQUEST['er'])) {
                    $val = $_REQUEST['er'];
                    if ($val == 0) {
                        ?>
                        <div class="alert alert-danger"><b>Fail! </b> Categoryname already Exist
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    } elseif ($val == 1) {
                        ?>
                        <div class="alert alert-success"><b>Success! </b> Category added Successfully
                            <button type="button" class="close" data-dismiss="alert">&times;</button>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>


    </form>
</div>
</body>
</html>
