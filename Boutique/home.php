


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    
<script src="./js/jquery.min.js"></script>   
 <title>Produit </title>
</head>

<style>
.mainNav {
    
    background-color: #2EBBF3 !important;
    
}

</style>



<body>



<!-- Button trigger modal -->
<!-- <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
<i class="fas fa-shopping-cart">
</button> -->





<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Cart</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
      <span id="cart_detail"></span>
 
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <a href="checkout.php" class="btn btn-primary" >Check out</a>
      </div>
    </div>
  </div>
</div>
</div>






<nav class="navbar navbar-expand-lg navbar-light bg-light mainNav" >
  <a class="navbar-brand" href="#" ><i class="fas fa-store" ></i></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
      </li>


     
      <li class="nav-item">
      <a  class="btn" data-toggle="modal" data-target="#exampleModal" style="margin-left:900px !important;>
         <span class="glyphicon glyphicon-shopping-cart"><i class="fas fa-shopping-cart"></i></span>
         <span class="badge"></span>
         <span id="cart_number" class="total_price">0</span>
</a>

      </li>


          <?php session_start();
          if (!isset($_SESSION['Auth']) || empty($_SESSION['Auth'])){?>
              <li class="nav-item">
                <a class="nav-link" href="Auth_form.php">connexion</a>
              </li>
         <?php }else {?>

          <li class="nav-item">
                <a class="nav-link" href="logout.php">Deconnexion</a>
              </li>
          <?php }?>
    </ul>
  </div>
</nav>






    <div id="produit">
    </div>


    <nav aria-label="Page navigation example" style="margin-left:40%; margin-top:30px;">
  <ul class="pagination">
    <li class="page-item"><a class="page-link" value ="<?php $num=1; echo $num; ?>" href="#">1</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=2; echo $num; ?>" href="#">2</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=3; echo $num; ?>" href="#">3</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=4; echo $num; ?>" href="#">4</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=5; echo $num; ?>" href="#">5</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=6; echo $num; ?>" href="#">6</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=7; echo $num; ?>" href="#">7</a></li>
    <li class="page-item"><a class="page-link" value ="<?php $num=8; echo $num; ?>" href="#">8</a></li>

  </ul>
</nav>





<script>
     $(document).ready(function(){

      $(document).on('click', '.delete', function(){
    var product_id = $(this).attr("id");
    var action = 'remove';

    $.ajax({
      url:"action.php",
      method:"POST",
      data:{product_id:product_id, action:action},
      success:function()
      {
      loadCart();
      alert("Item has been removed from Cart");
      }
    })

  });





      $(document).on('click', '.add_to_cart', function(){
        var product_id = $(this).attr("id");
        var product_name = $('#name'+product_id+'').val();
        var product_price = $('#price'+product_id+'').val();
        var product_quantity=1;
        var action = "add";
        $.ajax({
          url:"action.php",
          method:"POST",
          data:{product_id:product_id, product_name:product_name, product_price:product_price,product_quantity:product_quantity, action:action},
          success:function(data)
          {
            loadCart();
            alert("Item has been Added into Cart");
            
            
          }
        });
        
      });


$(document).on('click', '#category',function loadCategorie (){

   $.ajax({
      url :"category.php",
      method: "POST",
      success:function (data){
        $('#category').html(data.output);
      }

   })

})










        loadPage();
            function loadPage()
            {
                $.ajax({
                    url:"fetchProducts.php",
                    method:"POST",
                    dataType:"json",
                    success:function(data)
                    
                    {
                        $('#produit').html(data.output);
                        $('#cart_number').html(data.cartNumber);
                    }
                })

            }
            loadCart();
            function loadCart()
            {
                $.ajax({
                    url:"fetchCart.php",
                    method:"POST",
                    dataType:"json",
                    success:function(data)
                    {
                     
                        $('#cart_detail').html(data.cart_detail);
                        $('#cart_number').html(data.cartNumber);
                        $('.totalPrice').text(data.total_price);
                    }
                })

            }
       });









</script>

<script>
  $(document).on('click','.page-link',function(){
            var numPage=$(this).attr("value");
            if(numPage=="previous" ||numPage=="next"){
               
                numPage=$('#num').attr("value");
                console.log(numPage);
            }
          $.ajax({
                    url:"fetchPage.php",
                    method:"POST",
                    
                    data:{num:numPage},
                    success:function(data)
                    {
                        $('#produit').html(data);
                        $('#num').html(data.num);
                        
                    }
                })

            
           
   })

</script>





</body>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>