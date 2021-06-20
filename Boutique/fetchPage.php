<?php
$connect = new PDO ("mysql:host = localhost ;dbname=boutique", "root","");
$num=($_POST['num']-1)*8;
$query="SELECT * FROM products  Limit 8 offset $num";

$img=200+$num;
$smt =$connect->prepare($query);
$output="";
if($smt->execute()){
    $result=$smt->fetchAll();
    $output.='<div class="row">';
    foreach($result as $row ){
      $img=intval($img+1);
     $output.='
     <div class="col-md-3" style="margin-top:20px;">
        <div class="card" style="width: 18rem;">
        <img class="card-img-top" src="http://lorempixel.com/400/'.$img.'" alt="Card image cap">
        <div class="card-body">
          <h5 class="card-title">'.$row["description"].'</h5>
          <p class="card-text">'.$row["name"].'</p>
             <input type="hidden" name="hidden_name" id="name'.$row["sku"].'" value="'.$row["name"].'" />
             <input type="hidden" name="hidden_price" id="price'.$row["sku"].'" value="'.$row["price"].'" />
             <input type="button" name="add_to_cart" id="'.$row["sku"].'" style="margin-top:5px;" class="btn btn-success form-control add_to_cart" value="Add to Cart" />

        </div>
      </div>
      </div>';
    }
    $output.='</div>';
 echo $output;
    // $data = array(
    //     'product'  => $output,
        
    //     'num'  => $num
    //    ); 
    //    echo $data;
}else{

    echo "test";
}