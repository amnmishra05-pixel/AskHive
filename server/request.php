<?php

include('../common/db.php');

session_start();

if(isset($_POST['signup'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $address = $_POST['address'];

    $user = $conn->prepare("insert into `user-details`
    (`id`, `username`, `email`, `password`, `address`)
    values(NULL, '$username', '$email', '$password', '$address');
    ");

    $result = $user->execute();
    $user->insert_id;
    
    if ($result){
        // echo "New user registered";
        $_SESSION["user-details"] = ["username"=>$username, "email"=>$email, "user_id"=>$user->insert_id];
        header("location: /AskHive");
    }else{
        echo "User unable to registered";
    }

    
}else if (isset($_POST['login'])){
    // print_r($_POST);
    $email = $_POST['email'];
    $password = $_POST['password'];
    $username = "";
    $user_id = 0;

    $query = "select * from `user-details` where email='$email' and password='$password'";
    $result = $conn->query($query);
    if($result->num_rows==1){
        foreach( $result as $row){
            $username = $row['username'];
            $user_id = $row['id'];
        }
        $_SESSION["user-details"] = ["username" => $username, "email"=>$email, "user_id"=>$user_id];
        header("location: /askhive");
    }else{
        echo $result->num_rows;
    }

}
else if(isset($_GET['logout'])){
        session_unset();
        header("location: /askhive");
    

}
else if (isset($_POST['ask'])){
        $title = $_POST['title'];
        $description = $_POST['description'];
        $category = $_POST['category'];
        $user_id = $_SESSION['user-details']['user_id'];

        $question = $conn->prepare("insert into `questions`
        (`id`, `title`, `description`, `category_id`, `user_id`)
        values(NULL, '$title', '$description', '$category', '$user_id');
        ");

        $result = $question->execute();
        $question->insert_id;
        
        if ($result){
            // echo "New user registered";
            // $_SESSION["user-details"] = ["username"=>$username, "email"=>$email, "user_id"=>$user->insert_id];
            header("location: /AskHive");
        }else{
            echo "Question is not added on the DB";
        }
        
    }else if(isset($_POST["answer"])){
    // print_r ($_POST);

    $answer = $_POST['answer'];
    $question_id = $_POST['question_id'];
    $user_id = $_SESSION['user-details']['user_id'];

    $query = $conn->prepare("insert into `answers`
    (`id`, `answer`, `question_id`, `user_id`)
    values(NULL, '$answer', '$question_id', '$user_id');
    ");

    $result = $query->execute();    
    if ($result){
        header("location: /AskHive?q-id=$question_id");
    }else{
        echo "Answer is not submitted";
    }

}else if(isset($_GET['delete'])){
    echo $qid = $_GET['delete'];
    $query = $conn->prepare("delete from questions where id=$qid");
    $result = $query->execute();
    if($result){
        header("location: /AskHive");
    }else{
        echo "This Question not deleted";
    }
}



?>