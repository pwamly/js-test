<?php
header("Content-Type: application/json; charset=UTF-8");

$users=[
    ["id"=>1,"name"=>"pwamly"],
    ["id"=>2,"name"=>"joe"],
    ["id"=>3,"name"=>"pius"],
    ];

$places=[
    ["id"=>101,"name"=>"njombe"],
    ["id"=>102,"name"=>"ruvuma"],
    ["id"=>103,"name"=>"pwani"],
    ];


    if($_SERVER['REQUEST_METHOD']==='GET'){
        if ($_SERVER['REQUEST_URI']==='/js-test/api/index.php/places'){
            echo json_encode($places);
        }elseif ($_SERVER['REQUEST_URI']==='/js-test/api/index.php/users'){
            echo json_encode($users);   
        }else{
            echo 'wrong url';
            
        }
    }