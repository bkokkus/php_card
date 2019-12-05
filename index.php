<!DOCTYPE html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Ürün Listesi</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="assets/css/custom.css">
    


</head>
<body>

    <?php require_once("lib/db.php"); ?>

    <?php
        //verileri çekme bölümü
        $products = $db->query("SELECT * FROM cart order by id DESC", PDO::FETCH_OBJ)->fetchAll();
    ?>

    <!------------- HEADER ------------------------------>
    <?php include "lib/navbar.php"; ?>

    <!------------- HEADER ------------------------------>

    <!------------- MAIN CONTENT ------------------------------>

    <div class="container">
        <h2 class="text-center"> Ürün Listesi</h2>
        <hr>

        <div class="row">

          <?php foreach ($products as $product) { ?> 
        
            <div class="col-sm-6 col-md-3">
                    <div class="thumbnail">
                        <img class="img img-responsive img-custom" src="assets/img/<?php echo $product->product_img_url; ?>" alt="<?php echo $product->product_name; ?>">
                            <div class="caption">
                                <h3><?php echo $product->product_name; ?></h3>
                                <p><?php echo $product->product_detail; ?></p>
                                <p class="text-right price-container"><?php echo $product->product_price; ?> TL</p>
                                <p>
                                    <button product-id="<?php echo $product->id; ?>" class="btn btn-primary btn-block addToCartBtn" role="block">
                                        <span class="glyphicon glyphicon-shopping-cart">
                                        </span>
                                        Sepete Ekle
                                    </button>
                                </p>
                            </div>
                    </div>
            </div>

            <?php } ?>     


        </div>
    </div>

    <!------------- MAIN CONTENT ------------------------------>

    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/custom.js"></script>
</body>
</html>

