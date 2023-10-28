<?php

$host = 'localhost';
$username= 'root';
$pass = '';
$db='demo';

$con = mysqli_connect($host,$username,$pass,$db);

if(!$con){
die('connection failed'.mysqli_error());
}