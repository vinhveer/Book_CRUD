<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Create New Book</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
            <div>
                <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Tittle: ">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name: ">
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control">
                    <option value="">Select Book Type</option>
                    <option value="Novel">Novel</option>
                    <option value="Science">Science</option>
                    <option value="Angry">Angry</option>
                    <option value="Deobiet">Deobiet</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="descriptions" placeholder="Book Descriptions: ">
            </div>
            <div class="form-element">
                <input type="Submit" class="btn btn-success" name="create" value="Add Book">
            </div>
        </form>
    </div>
</body>
</html>