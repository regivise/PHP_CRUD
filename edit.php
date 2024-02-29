<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Edit Book</title>
</head>
<body>
    <div class="container my-5">
    <header class="d-flex justify-content-between my-4">
            <h1>Edit Book</h1>
            <div>
            <a href="index.php" class="btn btn-primary">Back</a>
            </div>
        </header>
        <form action="process.php" method="post">
            <?php 
            
            if (isset($_GET['id'])) {
                include("connect.php");
                $id = $_GET['id'];
                $sql = "SELECT * FROM books WHERE id=$id";
                $result = mysqli_query($conn,$sql);
                $row = mysqli_fetch_array($result);
                ?>
                     <div class="form-elemnt my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:" value="<?php echo $row["title"]; ?>">
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:" value="<?php echo $row["author"]; ?>">
            </div>
            <div class="form-element my-4">
                <select name="type" id="" class="form-control">
                    <option value="">Select Book Type:</option>
                    <option value="Adventure" <?php if($row["type"]=="Adventure"){echo "selected";} ?>>Adventure</option>
                    <option value="NonFiction" <?php if($row["type"]=="NonFiction"){echo "selected";} ?>>NonFiction</option>
                    <option value="Fantasy" <?php if($row["type"]=="Fantasy"){echo "selected";} ?>>Fantasy</option>
                    <option value="Technical" <?php if($row["type"]=="Technical"){echo "selected";} ?>>Technical</option>
                </select>
            </div>
            <div class="form-element my-4">
                <textarea name="description" id="" class="form-control" placeholder="Book Description:"><?php echo $row["description"]; ?></textarea>
            </div>
            <input type="hidden" value="<?php echo $id; ?>" name="id">
            <div class="form-element my-4">
                <input type="submit" name="edit" value="Update Book" class="btn btn-primary">
            </div>
                <?php
            }else{
                echo "<h3>Book Does Not Exist</h3>";
            }
            ?>
           
        </form>
        
        
    </div>
</body>
</html>