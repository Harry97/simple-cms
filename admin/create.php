<!DOCTYPE html>
<html>
<head>
<?php include '../includes/header.php' ?>
<title>Create Article</title>

        <link rel="stylesheet" href="../css/main.css" >
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-xs-12 col-sm-8 col-sm-offset-2 ">
<form  action="actions/add.php" method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input name="title" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" rows="8" col="50" name="body" required></textarea>
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
    </div>
    </div>
<?php include '../includes/footer.php' ?>
