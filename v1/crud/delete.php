<?php 

require_once('db.php');


if(isset($_GET['id'])){

    $id = $_GET['id'];
    $sql = "DELETE FROM users WHERE id=$id";
    $result = mysqli_query($con,$sql);

    if($result){
        header("location:http://localhost/js-test/v1/crud/read.php");
        exit();
    }
}