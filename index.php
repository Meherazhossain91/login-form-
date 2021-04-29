<?php 

$host="localhost";
$user="root";
$password="";
$db="demo";

mysql_connect($host,$user,$password);
mysql_select_db($db);

if(isset($_POST['username'])){
    
    $uname=$_POST['username'];
    $password=$_POST['password'];
    
    $sql="select * from loginform where user='".$uname."'AND Pass='".$password."' limit 1";
    
    $result=mysql_query($sql);
    
    if(mysql_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>






<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="loginbox">
        <img src="img/avater.jpg" class="avater">
        <h1>Login Here</h1>
        <form method="POST" action="#">

            <p>User Name</p>
            <input type="text" name="" placeholder="Enter username">
            <p>Password</p>
            <input type="password" name="" placeholder="Enter password">
            <input type="submit" name="" value="Login">
            <a href="#">Lost your password ?</a><br>
            <a href="#">don't have any account ?</a>
        </form>

    </div>
     
</body>
</html>