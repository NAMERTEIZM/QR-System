<!doctype html>
<html lang="en">
  <head>
  <link href="//netdna.bootstrapcdn.com/bootstrap/3.0.0/css/bootstrap-glyphicons.css" rel="stylesheet">

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel="preconnect" href="https://fonts.googleapis.com">
   <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
   <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700&display=swap" rel="stylesheet">
   <link rel="stylesheet" href="mystyle.css">
    <link rel="stylesheet" href="assets/css">
    <title>Menu - Anasayfa</title>
  </head>
  <body>
  
  <?php require_once "lib/db.php"; ?>

  
   <?php
 $products = $db->query("SELECT * from `products` ", PDO::FETCH_OBJ)->fetchAll();
 $total_count = 0;
 $total_price = 0.0;
 $total_count = $total_count;
   ?>

  <main>


<section class="text-center black blackish">

<div class="container-fluid">
    

<div>
        <a href="shopping-cart.php">
            <img src="images/shopping-basket.png" alt="">
            <i class="bi bi-2-circle-fill cart-count"><?php echo $total_count; ?></i>        </a>
    </div>
    <div class="py-5 blackish">
        <div class="container blackish">
           
        <h2 class="text-yellow text-capitalize mb-4">Menümüzü Keşfedin</h2>
        


            <ul class="middle nav-fill nav nav-tabs" id="nav-tab" role="tablist">
                <li class="text-yellow active px-md-4">
                    <a data-toggle="tab" class="nav-link tab-link text-yellow px-md-4" id="#mainmenu"
                        href="#mainmenu" role="tab">Ana Kahveler</a></li>
                <li class="text-white px-md-4">
                    <a data-toggle="tab" class="nav-link tab-link text-yellow px-md-4" id="#desserts"
                        href="#desserts" role="tab">Tatlılar</a></li>
                <li class="text-white px-md-4">
                    <a data-toggle="tab" class="nav-link tab-link text-yellow px-md-4" id="#specials"
                        href="#specials" role="tab">Spesiyaller</a> </li>
            </ul>
        </div>
  

        <div class="tab-content">
            <div class="tab-pane active" id="mainmenu">
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    
                   <?php foreach($products as $product){ ?>
               
                   <div id="firstproduct" class="px-3 py-sm-3">
                        <img  src="./images/<?php echo $product->img_url; ?>" class="img-fluid" alt="">
                        <h3 class="text-yellow text-capitalize"><?php echo $product->product_name; ?> <span class="text-white"> <?php echo $product->price; ?>₺</span> </h3>
                        
                        <button product-id="<?php echo $product->id;  ?>" class="btn btn-primary btn-block addToCartBtn" role="button">
                       <span class="glyphicon glyphicon-shopping-cart"></span> Sepete Ekle
                        </button>
                        <br>
                      
                    </div>
                    
                  <?php } ?>
                   
                   
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/caffeamericano.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">5₺</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/filtercoffee.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">12₺</h3> -->
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/green.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/redamericano.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/blackcoffee.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3> -->
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/Rectangle 69.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/Rectangle 62.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/Rectangle 65.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3> -->
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/Rectangle 69.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/Rectangle 62.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3> -->
                    </div>
                    <div class="px-3 py-sm-3">
                        <!-- <img src="./images/Rectangle 65.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3> -->
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="desserts">
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 53.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 64.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 52.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 55.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 56.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 57.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 68.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 64.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 66.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 66.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 66 (1).png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 66 (2).png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
            </div>

            <div class="tab-pane" id="specials">
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/irishcoffee.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/caffeamericano.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/filtercoffee.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/green.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/redamericano.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/blackcoffee.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
                <div class="d-flex flex-lg-row flex-column justify-content-center">
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 69.png" class="img-fluid" alt="irish coffee">
                        <h3 class="text-yellow text-capitalize">irish coffee</h3>
                        <h3 class="text-white">4</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 62.png" class="img-fluid" alt="caffe americano">
                        <h3 class="text-yellow text-capitalize">caffe americano</h3>
                        <h3 class="text-white">2</h3>
                    </div>
                    <div class="px-3 py-sm-3">
                        <img src="./images/Rectangle 65.png" class="img-fluid" alt="filter-coffee">
                        <h3 class="text-yellow text-capitalize">Filtre Kahve</h3>
                        <h3 class="text-white">4.5</h3>
                    </div>
                </div>
            </div>
        </div>
      
    </div>
    
</div>

</section>


</main>









    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.14.7/dist/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="assets/js/jquery-3.6.1.min.js"></script> 
    <script src="assets/js/bootstrap.min.js"></script> 
    <script src="main.js"></script>   
</body>
</html>