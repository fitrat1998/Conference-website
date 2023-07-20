<?php
include'../config.php';

if(isset($_POST['submit'])){  
     $username = trim($_POST['username']);
     $email = trim($_POST['email']);
     $password = md5($_POST['password']);

     $sql = "INSERT INTO signup(username,password,email) VALUES ('$username','$email','$password')";
     $res = mysqli_query($con,$sql);

     if($res){
     	echo 1;
     	header("Location:../accounts/login/index.php");
     }
}

?>