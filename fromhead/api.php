<?php
require_once('./db.php');
header("Content-Type:application/json; charset:UTF-8");

$users = [
    ['name'=>'pwamly','age'=>34],
    ['name'=>'joe','age'=>54],
    ['name'=>'zuna','age'=>74]
];




// routes or endpoints 

    if($_SERVER['REQUEST_METHOD']==='GET'){

        if($_SERVER['REQUEST_URI']==='/js-test/fromhead/api.php/users'){
            echo json_encode($users);

        }elseif($_SERVER['REQUEST_URI']==='/js-test/fromhead/api.php/places'){
            echo 'places';
        }elseif($_SERVER['REQUEST_URI']==='/js-test/fromhead/api.php/db'){
            $arrdata=[];
            $sql="SELECT * FROM users";
            $result = mysqli_query($con,$sql);

            while($item = $result->fetch_assoc()){
                $arrdata = $item;
            }
            echo json_encode($arrdata);

        }
    }