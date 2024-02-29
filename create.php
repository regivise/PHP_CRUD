<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Add New Book</title>
</head>
<body>
    <div class="container">
        <header class="d-flex justify-content-between my-4">
            <h1>Add New Book</h1>
              <div>

                <a href="index.php" class="btn btn-primary" >Back</a>
              </div>
            
        </header>
        <form action="process.php" method="post">
            <div class="form-element my-4">
                <input type="text" class="form-control" name="title" placeholder="Book Title:"> 
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="author" placeholder="Author Name:"> 
            </div>
            <div class="form-element my-4">
                <select name="type" class="form-control" >
                    <option value="">Select book type</option>
                    <option value="adventure">Adventure</option>
                    <option value="nonfiction">Non-fiction</option>
                    <option value="fiction">Fiction</option>
                    <option value="technical">Technical</option>
                </select>
            </div>
            <div class="form-element my-4">
                <input type="text" class="form-control" name="description" placeholder="Book Description:"> 
            </div>
            <div class="form-element">
                <input type="submit" class="btn btn-success" name="create" value="Add Book" >
            </div>
        </form>
    </div>
</body>
</html>