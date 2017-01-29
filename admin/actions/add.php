<?php
    require '../../functions/db_connect.php';
        
        if(!empty($_POST))
        {   
            $title = $_POST["title"];
            $body = $_POST["body"];
            $sql = "INSERT INTO pages (title, body) VALUES ('$title','$body')";
            $conn->query($sql);
            header('Location: http://localhost/simplecms/admin/');
            die();
        }

         
        ?>