<!-- <link rel="stylesheet" href="./public/style.css"> -->
<div class="container">
    
    <div class="row">
        
        <div class="col-8">
            <h1 class="heading">Questions</h1>
        <?php
            include("./common/db.php");
            if(isset($_GET['u-id'])){
            $uid = $_GET['u-id'];
            }else{
                $uid = NULL;
            }

            if(isset($_GET["c-id"])){
                $query = "select * from questions where category_id=$cid";

            }else if(isset($_GET["u-id"])){
                $query = "select * from questions where user_id= $uid";

            }else if(isset($_GET["latest"])){
                $query = "select * from questions order by id desc";

            }else if(isset($_GET["search"])){
                $query = "select * from questions where `title` LIKE '%$search%'";

            }else{
                $query = "select * from questions";
            }
            $result = $conn->query($query);    
            foreach($result as $row){
                $title = $row['title'];
                $id = $row['id'];   

               echo "<div class='row question-list'>
                <h5 class='d-flex justify-content-between'><a href='?q-id=$id'>$title</a>";
                echo $uid?"<a href='./server/request.php?delete=$id'>Delete</a>":NULL;   
                echo "</h5>  </div>";   
            }
        ?>
        </div>
        <div class="col-4">
            <?php
            include('categorylist.php')
            ?>
        </div>

    </div>
</div>