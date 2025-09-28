<div class="container">
    <div class="row">
        <div class="col-8">
        <h1 class="heading">Question</h1>
        <?php
            include("./common/db.php");
            $query = "select * from questions where id=$qid";
            $result = $conn->query($query);
            $row = $result->fetch_assoc();

            $cid = $row['category_id'];

            echo "<h5 class='margin-bottom-15 question-title'>Question: ".$row['title']."</h5>
            <p class='margin-bottom-15'>".$row['description']."</p>";
            include('answers.php');
        ?>
        <form action="./server/request.php" method="post">
            <input type="hidden" name="question_id" value="<?php echo $qid ?>">
            <textarea class="form-control margin-bottom-15" name="answer" placeholder="Your answer..."></textarea>
            <button class="btn btn-primary">Write your answer</button>
        </form>
    </div>
    <div class="col-4">
        <h1 class="heading">Related Questions</h1>
        <?php
        // echo $cid;
        $query = "select * from questions where category_id=$cid and id!=$qid" ;
        $result = $conn->query($query);
        foreach($result as $row){
            $id = $row['id'];
            $title = $row['title'];
            echo "<div class='question-list'>
                <h5><a href='?q-id=$id'>$title</a></h5>
            </div>";
        }
        ?>
    </div>
    </div>
</div>