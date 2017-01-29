<!DOCTYPE html>
<html>
    <head>
        <title>Contact</title>
<?php include 'includes/header.php'; ?>
        
<link rel="stylesheet" href="css/main.css" >
        
        </head>
        <body>
<?php include 'includes/navbar.php' ?>

<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
    <form method="post" action="parser.php">
        <div class="form-group">
            <label for="name">Name:</label>
            <input name="name" class="form-control" autofocus required>
        </div>
        <div class="form-group">
            <label for="title">Email:</label>
            <input name="email" class="form-control" required>
        </div>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" rows="8" cols="50" name="body" required></textarea>
            
        </div>
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
</div>
</div>        
    <?php include 'includes/footer.php'; ?>

            