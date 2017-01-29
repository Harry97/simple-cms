<?php
    require '../../functions/db_connect.php';
        
        if(!empty($_POST))
        {   
            
            $id = $_POST["id"];
            $title = $_POST["title"];
            $body = $_POST["body"];
            $sql = "UPDATE pages SET title = '$title' , body = '$body', updated = NOW() WHERE id = '$id'";
            $conn->query($sql);
            header('Location: http://localhost/simplecms/admin/');
            die();
        }

         
        ?>