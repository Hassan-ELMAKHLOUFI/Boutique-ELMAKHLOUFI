<?php

$pdo = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8',"root","");
$username=$_POST["username"];
$password=$_POST["password"];
session_start();
 $stm = $pdo->prepare("SELECT * FROM users WHERE username=? AND password=?");
 $stm->execute(array($username,$password));
 $user=$stm->fetch();
if($user){
    $_SESSION["Auth"]=$user;
    header("Location: http://localhost/Boutique/home.php");
}else{
    header("Location: http://localhost/Boutique/Auth_form.php");
}


 
    

//    //header("Location: http://localhost/Boutique/Auth_form.php");
//   //  exit();


var_dump($_SERVER);



