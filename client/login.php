<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1 class="heading margin-bottom-15">Login</h1>
        <form method="post" action="./server/request.php">

            <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
                <label for="email" class="form-label">User Email</label>
                <input type="text" name="email" class="form-control" id="email" placeholder="Enter E-mail">
            </div>

            <div class="sm-3 col-6 offset-sm-3 margin-bottom-15">
                <label for="password" class="form-label">User Password</label>
                <input type="password" name="password" class="form-control" id="password" placeholder="Enter Password">
            </div>

            <button type="submit" name="login" class="btn btn-primary offset-sm-3 margin-bottom-15">Login</button>
        </form>
    </div>
</body>
</html>