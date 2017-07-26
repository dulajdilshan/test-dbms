<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$host = 'localhost' ;
$user = 'root' ;
$password = NULL ;
$database = 'login-test' ;

$conn = mysqli_connect($host, $user, $password, $database);

if($conn){
    
}else{
    die($conn);
}

$uname =$_POST['uname'];
$fname = $_POST['fname'];
$lname = $_POST['lname'];
$country = $_POST['country'];
$pswd = $_POST['pswd'];

$sql = "INSERT INTO signup(user_name,first_name,last_name,country,password
        ) VALUES ('$uname','$fname','$lname','$country','$pswd')";
$sqlquery = mysqli_query($conn,$sql);

if($sqlquery){
    echo 'Data is successfully added';
}else{
    echo 'data sending failed';
}

?>