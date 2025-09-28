<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css" integrity="sha512-2SwdPD6INVrV/lHTZbO2nodKhrnDdJK9/kg2XD1r9uGqPo1cUbujc+IYdlYdEErWNu69gVcYgdxlmVmzTWnetw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>Document</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="./">
                <h2 style="color: #000;">
                    <i class="fa-solid fa-people-arrows" style="color: #0051b4ff;"></i>AskHive
                </h2>
            </a>
            <!-- <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button> -->
            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" href="./">Home</a>
                    </li>

                    <!-- if session is set the show the LogOut option -->
                    <?php
                    if(isset($_SESSION['user-details']['username'])){?>

                        <li class="nav-item">
                            <a class="nav-link" href="./server/request.php?logout=true">Logout</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?ask=true">Ask A Question</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?u-id=<?php echo $_SESSION['user-details']['user_id']?>">My Questions</a>
                        </li>

                    <?php }?>
                    

                    <!-- if session is not set "!" then show signup & login option -->
                    <?php
                    if(!isset($_SESSION['user-details']['username'])){?>

                        <li class="nav-item">
                            <a class="nav-link" href="?login=true">Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="?signup=true">Signup</a>
                        </li>

                    <?php }?>
                        

                    <!-- <li class="nav-item">
                        <a class="nav-link" href="#">Category</a>
                    </li> -->
                    <li class="nav-item">
                        <a class="nav-link" href="?latest=true">Latest Questions</a>
                    </li>
                </ul>
                <form class="d-flex mx-2" action="" >
                <input class="form-control me-2" name="search" type="search" placeholder="Search questions.."/>
                <button class="btn btn-outline-success" type="submit">Search</button>
                </form>
            </div>
        </div>
    </nav>
</body>
</html>