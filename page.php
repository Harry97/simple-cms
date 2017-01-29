<?php

    require 'functions/db_connect.php';

if (isset($_GET["id"]) && !empty($_GET["id"])) {
    
    $id = $_GET["id"];
    
$sql="SELECT title, body, created, updated FROM pages WHERE id = $id";

$result = $conn->query($sql);

}
?>
<!DOCTYPE html>
<html>

<head>
    <?php include 'includes/header.php'; ?>
    <title> Article
    </title>
    <link rel="stylesheet" href="css/main.css" >

</head>

<body>
<?php include 'includes/navbar.php' ?>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 text-center">
    <?php 
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    echo "<h2>" . $row['title']."</h2><br><p>". $row['body']."<p><br>Created: ". $row['created']."<br>Updated: ". $row['updated']."<br>";
    
  }

}
?>
</div>
</div>
</div>
        <?php $conn->close(); ?>
        <?php include 'includes/footer.php'; ?>