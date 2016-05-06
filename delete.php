<?php

include 'includes/dbconnection.php';
        
        $delete = $_GET['del'];
        
        $query2 = "delete from ads where id='$delete'";
        
        if(mysqli_query($link, $query2)){
            echo "<script>window.open('administrator.php?deleted=Data Has been deleted','_self')</script>";
        }
        
?>

