<?php
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        include("connect.php");
        $sql= "DELETE FROM book WHERE id = $id";
        if (mysqli_query($conn,$sql)) {
            echo "Deleted!";
        }
    }
?>