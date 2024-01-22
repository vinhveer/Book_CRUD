<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Book Details</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Book Details</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <div class="book-details my-4">
            <?php
                if(isset($_GET["id"]))
                {
                    $id = $_GET["id"];
                    include "connect.php";
                    $sql = "SELECT * FROM book WHERE id=$id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                ?>
                <h2>Title</h2>
                <p><?php echo $row["title"]; ?></p>
                <h2>Description</h2>
                <p><?php echo $row["description"]; ?></p>
                <h2>Type</h2>
                <p><?php echo $row["type"]; ?></p>
                <h2>Author</h2>
                <p><?php echo $row["author"]; ?></p>
                <?php
                }
            ?>
            
        </div>
    </div>
</body>
</html>