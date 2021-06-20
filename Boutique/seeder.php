<?php 

$bdd = new PDO("mysql:host=localhost;dbname=boutique;charset=utf8", "root", "");

$json = file_get_contents('./products.json');
$initt = json_decode($json);
foreach($initt as $row){
    $array=$row->category;
        // $insert = $bdd->prepare('INSERT INTO products  (sku,name,description,price,image,categorieID)VALUES(?,?,?,?,?,?)');
        // $insert->execute(array($row->sku,$row->name,$row->type,$row->price,$row->image,$array[0]->id));
        $insertCat = $bdd->prepare("INSERT INTO category (id, name)VALUES (?,?)");
        $insertCat->execute(array($array[0]->id,$array[0]->name));
}


