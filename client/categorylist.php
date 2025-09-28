<div>
    <h1 class="heading">Categories</h1>
    <?php
    include('./common/db.php');

        $query = "select * from category";
        $result = $conn->query($query);    
        foreach($result as $row){
            $name = ucfirst($row['name']);
            $id = $row['id'];

            echo "<div class='row question-list' style='margin: 7px 0;'>
            <h5 class='m-0'><a href='?c-id=$id'>$name</a></h5>
            </div>";
        }

    ?>
</div>