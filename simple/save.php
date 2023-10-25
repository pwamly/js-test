<?php
require_once('db.php');

if($_SERVER['REQUEST_METHOD']==='POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

    // $name = mysqli_real_escape_string($connection,$name);
    // $email = mysqli_real_escape_string($connection,$email);

    $query = "INSERT INTO users (name,email) VALUES ('$name','$email')";

    $result = mysqli_query($connection,$query);

    if($result){
        header('location:index.php');
        exit();
    }else{
        echo 'not saved';
    }
}

?>