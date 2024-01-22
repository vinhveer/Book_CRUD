<?php
    if (isset($_GET['id']))
    {
        $id = $_GET['id'];
        include("connect.php");
        $sql= "DELETE FROM book WHERE id = $id";
        if (mysqli_query($conn, $sql)) {
            echo "Deleted!";
            header("Location: index.php");
            exit();
        } else {
            echo "Error deleting record: " . mysqli_error($conn);
        }
    }
?>