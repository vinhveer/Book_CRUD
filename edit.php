<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Edit Book Information</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Edit Book Information</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <?php
                if(isset($_GET["id"]))
                {
                    $id = $_GET["id"];
                    include "connect.php";
                    $sql = "SELECT * FROM book WHERE id=$id";
                    $result = mysqli_query($conn, $sql);
                    $row = mysqli_fetch_array($result);
                ?>
                <form action="process.php" method="post">
                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="title" value="<?php echo $row["title"]; ?>" placeholder="Book Tittle: ">
                    </div>
                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="author" value="<?php echo $row["author"]; ?>" placeholder="Author Name: ">
                    </div>
                    <div class="form-element my-4">
                        <select name="type" class="form-control">
                            <option value="">Select Book Type</option>
                            <option value="Novel" <?php if($row['type'] == "Novel") {echo "selected!";} ?> >Novel</option>
                            <option value="Science" <?php if($row['type'] == "Science") {echo "selected!";} ?> >Science</option>
                            <option value="Angry" <?php if($row['type'] == "Angry") {echo "selected!";} ?> >Angry</option>
                            <option value="Deobiet" <?php if($row['type'] == "Deobiet") {echo "selected!";} ?> >Deobiet</option>
                        </select>
                    </div>
                    <div class="form-element my-4">
                        <input type="text" class="form-control" name="descriptions" value="<?php echo $row["description"]; ?>" placeholder="Book Descriptions: ">
                    </div>
                    <input type="hidden" name="id" value='<?php echo $row['id']; ?>'>
                    <div class="form-element">
                        <input type="Submit" class="btn btn-success" name="edit" value="Save">
                    </div>
                </form>
                <?php
                }
        ?>
    </div>
</body>
</html>