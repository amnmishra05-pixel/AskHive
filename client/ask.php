<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="heading margin-bottom-15 mt-4">Ask a Question</h1>
        <form method="post" action="./server/request.php">

            <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" id="title" placeholder="Enter Title">
            </div>  

            <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
                <label for="discription" class="form-label">Discription</label>
                <textarea name="description" class="form-control" id="discription" placeholder="Enter Question in Depth"></textarea>
            </div>

            <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
                <label for="category" class="form-label">Category</label>
                <?php 
                    include("category.php")
                ?>
            </div>

            <button type="submit" name="ask" class="btn btn-primary offset-sm-3 margin-bottom-15">Ask Question</button>
        </form>
    </div>
</body>
</html>