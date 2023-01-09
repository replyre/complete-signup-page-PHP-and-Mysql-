<?php

$server='localhost';
$user='root';
$pass='';
$data='signupform';

$con=mysqli_connect($server,$user,$pass,$data);

if(!$con){
    die(mysqli_error($con)); 
}
?>