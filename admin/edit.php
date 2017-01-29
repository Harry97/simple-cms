<?php
require '../functions/db_connect.php';

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $id = $_GET["id"];
    
$sql="SELECT title, body FROM pages WHERE id = '$id'";

$result = $conn->query($sql);

$row = $result->fetch_assoc();

}
?>

<!DOCTYPE html>
<html>

<head>
    <?php include '../includes/header.php'; ?>
    <title>Editing...</title>
        <link rel="stylesheet" href="../css/main.css" >
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
    <form action="actions/update.php"  method="post">
        <div class="form-group">
            <label for="title">Title:</label>
            <input name="title" class="form-control" value="<?php echo $row["title"] ?>" autofocus required>
        </div>
        </br>
        <div class="form-group">
            <label for="body">Body:</label>
            <textarea class="form-control" rows="8" cols="50" name="body" required><?php echo $row["body"] ?></textarea>
            
        </div>
        <input type="hidden" name="id" value="<?php echo $id ?>">
        <button type="submit" name="submit" class="btn btn-default">Submit</button>
    </form>
    </div>
</div>
</div>        

    <?php include '../includes/footer.php'; ?>
    <?php $conn->close(); ?>

