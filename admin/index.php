<?php
require '../functions/db_connect.php';

$sql = "SELECT title,id FROM pages ORDER BY id DESC";

$result = $conn->query($sql);


 ?>
<!DOCTYPE html>
<html>

<head>
    <?php include '../includes/header.php' ?>
        <link rel="stylesheet" href="../css/main.css" >

    <title>Admin</title>
</head>

<body>
<div class="container-fluid">
<div class="row">
<div class="col-xs-12 col-sm-8 col-sm-offset-2">
<h2>Admin Panel</h2>
    <table class="table table-hover">
        <thead>
            <tr>
                <td>Articles</td>
                <td>Actions</td>
            </tr>
        </thead>
        <tbody>
            <?php 
if ($result->num_rows > 0) {
while ($row = $result->fetch_assoc()) {
    echo "<tr><td><a href=../page.php?id=". $row["id"] .">". $row["title"]."</a>"."</td><td><a href=edit.php?id=". $row["id"] .">Edit</a></td>
 <td><a href=delete.php?id=". $row["id"] .">Delete</a></td></tr>" ;
}

}
 ?>
        </tbody>
    </table>
    <p><a href="create.php">Create an article</a></p>
    </div>
    </div>
    </div>
    <?php include '../includes/footer.php'; ?>
    <?php $conn->close(); ?>