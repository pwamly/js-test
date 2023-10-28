<?php

$host = 'localhost';
$username= 'root';
$pass = '';
$dbname = 'demo';

$con = mysqli_connect($host,$username,$pass,$dbname);

if(!$con){
    die('connection failed'.mysqli_error());
}