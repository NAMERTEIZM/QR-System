<?php
try{
    $db = new PDO ("mysql:hostname=localhost;dbname=cart;charset=utf8", "root","");
    } catch(PDOException $e){
     
    echo $e->getMessage();
    }
    
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Blog Ekle | Panel </title>

    <!-- Bootstrap Core CSS -->
    <link href="../bower_components/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <link href="../bower_components/metisMenu/dist/metisMenu.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="../dist/css/sb-admin-2.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="../bower_components/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

<?php

if(@$_POST["submit"]){
    $product_name = htmlspecialchars($_POST["product_name"], ENT_QUOTES, 'UTF-8');
    $img_url = htmlspecialchars($_POST["img_url"], ENT_QUOTES, 'UTF-8');
    $price = htmlspecialchars($_POST["price"], ENT_QUOTES, 'UTF-8');
    $aktif = htmlspecialchars($_POST["aktif"], ENT_QUOTES, 'UTF-8');

    $ekle = $db->prepare("INSERT INTO `products` (`product_name` , `img_url` , `price` , `aktif`) VALUES (:product_name, :img_url, :price, :aktif) ");
    $ekle->bindValue(":product_name",$product_name, PDO::PARAM_STR);
    $ekle->bindValue(":img_url",$img_url, PDO::PARAM_STR);
    $ekle->bindValue(":price",$price, PDO::PARAM_STR);
    $ekle->bindValue(":aktif",$aktif, PDO::PARAM_INT);
   
    if($ekle->execute()){
        header("Location: blog.php?i=ekle");

    }else{
       // print_r($ekle->errorInfo());
        header("Location: blog.php?i=hata");
    }

}

?>
    <div id="wrapper">
        <?php require_once'inc-menu.php' ; ?>

     

        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Yeni Ürün Ekle</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <a href="blog.php">< Geri Dön</a>
                    </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form"action="" method ="POST" enctype ="multipart/form-data">
                                       
                                        <div class="form-group">
                                            <label>Ürün İsmi</label>
                                            <input class="form-control" name="product_name" placeholder="Ürün ismi Giriniz">
                                        </div>
                                        <div class="form-group">
                                            <label>Fiyat</label>
                                            <input class="form-control" name ="price" placeholder="Fiyat Giriniz">
                                        </div>
                                        
                                        <div class="form-group">
                                            <label> Ürün Fotoğrafı</label>
                                            <input class="form-control" name ="img_url" placeholder="Url Giriniz">
                                        </div>
                                     
                                     
                                        <div class="form-group">
                                            <label>Durum</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="1" checked>Aktif
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="aktif"  value="0">Pasif
                                                </label>
                                            </div>
                                            
                                        </div>
                                       <input type="submit" name ="submit" value="Kaydet" class="btn btn-default">
                                        <!-- <button type="submit" class="btn btn-default">Kaydet</button> -->
                                        <button type="reset" class="btn btn-default">Temizle</button>
                                    </form>
                                </div>
                              
                            </div>
                            <!-- /.row (nested) -->
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>
    <script src ="../js/tinymce.min.js"></script>
    <script>
        tinymce.init({
selector: "#mytextarea"
        });
        </script>
</body>

</html>
