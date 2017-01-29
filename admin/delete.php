<?php
    require '../functions/db_connect.php';
        
        if(!empty($_GET))
        {   
            $id = $_GET["id"];
            $sql = "DELETE FROM pages WHERE id = '$id'";
            $conn->query($sql);
            header('Location: http://localhost/simplecms/admin/');
            die();
        }

         
        ?>