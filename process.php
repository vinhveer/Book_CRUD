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
        header("Location: index.php");
        exit();
    } else {
        die("Something went wrong. Error: " . mysqli_error($conn));
    }
}

if (isset($_POST["edit"])) {
    $title = mysqli_real_escape_string($conn, $_POST["title"]);
    $author = mysqli_real_escape_string($conn, $_POST["author"]);
    $type = mysqli_real_escape_string($conn, $_POST["type"]);
    $descriptions = mysqli_real_escape_string($conn, $_POST["descriptions"]);
    $id = mysqli_real_escape_string($conn, $_POST["id"]);

    $sql = "UPDATE book SET title='$title', author='$author', type='$type', description='$descriptions' WHERE id=$id";
    
    if (mysqli_query($conn, $sql)) {
        echo "Successfully";
        header("Location: index.php");
        exit();
    } else {
        die("Something went wrong. Error: " . mysqli_error($conn));
    }
}
?>
