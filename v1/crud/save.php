<!DOCTYPE html>
<html>
    <meta chartset="UTF-8"></meta>

    <body>
        <span>Enter data</span>
<form method="POST">
<input type='txt' placeholder="name" name="name" required/>
<input type='email' placeholder="Emial" name="email" required/>
<input type="submit" name="btn" value="save"/>

</form>
    
<?php 
require_once('db.php');
if($_SERVER['REQUEST_METHOD']==='POST'){

    $name = $_POST['name'];
    $email = $_POST['email'];

$sql = "INSERT INTO users  (name,email) VALUES ('$name','$email')";

$result = mysqli_query($con,$sql);
if($result){
    header('location:read.php');
    exit();
}else{
    echo 'not saved';
}
}

?>
    </body>
</html>