<!doctype html>
<html lang="tr">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;30;400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="assets/css/bootstrap.min.css">
   <link rel="stylesheet" href="mystyle2.css">
   
    
    <title>Sepet</title>
  </head>
  <body>
  <?php
  session_start();
 
   if(isset($_SESSION["shoppingCart"])){

    $shoppingCart = $_SESSION["shoppingCart"];
     
    $total_count = $shoppingCart["summary"] ["total_count"];
    $total_price = $shoppingCart["summary"] ["total_price"];
    $shopping_products = $shoppingCart["products"];
   
   }else{
    $total_count = 0;
    $total_price = 0.0;
   }

?>

 
<div class="container">
<div>
        <a href="shopping-cart.php">
            <img src="images/shopping-basket.png" alt="">
            <i class="bi bi-2-circle-fill"><?php echo $total_count; ?></i> </a>
    </div>

<?php if($total_count > 0) { ?>

    <h2 class="text-center" id="basliksepet">Sepetinizde <strong class="color-danger"><?php echo $total_count; ?></strong> adet ürün bulunmaktadır</h2>

<hr>
 <div class="row">
    <div class="col md-8">
        <table class="table table-hover table-bordered tabled-stripped">
<thead>
    <th class="text-center">Ürün Resmi</th>
    <th class="text-center">Ürün Adı</th>
    <th class="text-center">Fiyatı</th>
    <th class="text-center">Adeti</th>
    <th class="text-center">Toplam</th>
    <th class="text-center">Sepetten Çık</th>
</thead>

<tbody>
 <?php foreach ($shopping_products as $product) { ?>

    <tr>
        <td  class="text-center" width="110">
            <img id="img" src="images/<?php echo $product->img_url; ?>" alt="" width="50">
        </td>
        <td id ="name" class="text-center text-white" width="100"><?php echo $product->product_name; ?></td>
        <td id="price" class="text-center text-white" width="100"><strong><?php echo $product->price; ?>₺</strong></td>
        <td class="text-center" width="100">
            <a href="lib/cart_db.php?p=incCount&product_id=<?php echo $product->id; ?>" class="btn btn-xs btn-success">
                <span class="glyphicon glyphicon-plus"></span>
            </a>
            <input type="text" class="item-count-input" width="100" value="<?php echo $product->count; ?>">
            <a href="lib/cart_db.php?p=decCount&product_id=<?php echo $product->id; ?>" class="btn btn-xs btn-danger">
             <span class="glyphicon glyphicon-minus"></span>   
            </a>
        </td>
        <td id="total" class="text-center text-white" width="100"><?php echo $product->total_price; ?></td>
        <td class="text-center" width="100">
            <button product-id="<?php echo $product->id;  ?>"   id="getoffbasket" class="btn btn-danger btn-sm removeFromCartBtn">
                <span class="glyphicon glyphicon-remove" ></span>
                Sepetten Çıkar
 </button>
        </td>
    </tr>

    <?php } ?>
    


</tbody>
<tfoot>
    <th colspan="3" class="text-right" ">
        Toplam Ürün : <span class="text-danger" id="totalpcs"><?php echo $total_count; ?></span>
    </th>
<th colspan="3" class="text-right">
    Toplam Tutar : <span class="text-danger" id="totalprice"><?php echo $total_price; ?>₺</span>
</th>
</tfoot>
        </table>
        <a id="goon" class="text-white continueshopping" href="menu.php">Alışverişe devam et...</a>
    </div>

 </div>


 <?php } else{ ?>

   <div class="alert alert-info">
    <strong>Sepetinizde Henüz Bir Ürün Bulunmamaktadır. Eklemek için <a href="menu.php">tıklayınız</a> </strong>
   </div>
   
    <?php } ?>
 </div>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="main.js"></script>   
    <script src="assets/js/jquery-3.6.1.min.js"></script> 
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>