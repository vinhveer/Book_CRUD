<?php
include("connect.php");

if (isset($_POST["create"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $descriptions = mysqli_real_escape_string($conn, $_POST["descriptions"]);

    $sql = "INSERT INTO book (title, author, type, description) VALUES ('$title', '$author', '$type', '$descriptions')";
    
    if (mysqli_query($conn, $sql)) {
        echo "Successfully";
    } else {
        die("Something went wrong. Error: " . mysqli_error($conn));
    }
}
?>
