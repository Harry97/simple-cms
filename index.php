<?php require_once 'functions/db_connect.php';

$sql = "SELECT id, title FROM pages ORDER BY id DESC";
$result = $conn->query($sql);


 ?>
    <!DOCTYPE html>
    <html>

    <head>
        <title>Home</title>
<?php include 'includes/header.php'; ?>
        
<link rel="stylesheet" href="css/main.css" >
        
    </head>

    <body>
    <?php include 'includes/navbar.php' ?>

        <div class="container-fluid">
            <div class="row">
                <div class="col-xs-12 col-sm-3 text-center">
                <h3>Articles</h3>
                    <ul>
                        <?php 
        if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo  "<li><a href=page.php?id=". $row["id"] .">" .$row["title"]. "</li></a>";
    }
} else {
    echo "No articles!";
}
        ?>
                    </ul>
                    
                </div>
                <div class="col-xs-12 col-sm-9 text-center">
                <h2>Lorem ipsum</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam vel finibus elit, quis maximus magna. Nunc nec nulla lorem. Ut neque orci, pulvinar a augue sed, pellentesque sollicitudin erat. Suspendisse vitae urna velit. Mauris ullamcorper vitae enim vitae pulvinar. Morbi rutrum est sit amet pretium faucibus. Etiam pretium, purus sit amet dictum vestibulum, tortor purus commodo massa, non hendrerit velit turpis id mi. Morbi et volutpat velit. Mauris vehicula consequat mattis. Morbi consequat et nibh sed scelerisque. In gravida nulla ante, et pellentesque tellus pulvinar ac. Donec tortor felis, aliquam nec ultricies eget, finibus vitae odio.

Donec in nunc gravida, bibendum nunc eu, pulvinar ligula. In hendrerit vitae nisl a euismod. Nunc felis arcu, feugiat at elit quis, tempus aliquam mauris. Cras maximus ipsum vitae suscipit mattis. Phasellus consectetur augue metus, sed rutrum ipsum vehicula consectetur. Quisque scelerisque nunc non purus pellentesque vestibulum. Praesent blandit, orci at pellentesque hendrerit, massa leo mattis eros, eu elementum quam nibh id lorem. Suspendisse potenti. Donec tincidunt felis faucibus, suscipit justo at, consectetur elit. Etiam hendrerit nibh non iaculis placerat.</p>
                </div>
            </div>
        </div>
        <?php include 'includes/footer.php'; ?>
        <?php $conn->close(); ?>