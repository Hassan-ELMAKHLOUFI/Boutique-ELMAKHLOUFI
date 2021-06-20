<?php
 
session_start();
if (!isset($_SESSION['Auth']) || empty($_SESSION['Auth'])){
  header('Location: Auth_form.php');
  echo "test ";

}else { 



$pdo = new PDO('mysql:host=localhost;dbname=boutique;charset=utf8',"root","");
 $total =0;
 foreach($_SESSION["shopping_cart"] as $key => $values ){

$total =($total)+($values["product_price"] * $values["product_quantity"]);

 }
$query = "INSERT INTO orders VALUES(NULL,?,?)";
$stm= $pdo->prepare($query);
$stm->execute(array($total,$_SESSION['Auth']['id']));
$orderId = $pdo->lastInsertId();

foreach($_SESSION["shopping_cart"] as $key => $values ){
$id=$values["product_id"];
$query="INSERT INTO product_order values (?,?)";
$stm=$pdo->prepare($query);
$stm->execute(array($orderId,$id));
unset($_SESSION["shopping_cart"][$key]);
    
     }

 header("Location: http://localhost/Boutique/home.php");
}