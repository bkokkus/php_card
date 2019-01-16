<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sepet Sayfası</title>
    <link rel="stylesheet" href="assets/css/bootstrap.min.css"> 
    <link rel="stylesheet" href="assets/css/custom.css">
   
</head>
<body>
      <?php include "lib/navbar.php"; ?>

    <!---------MAIN CONTENT--------------->
    <div class="container">
        <?php if($total_count > 0) { ?> 
        <h2 class="text-center"> 
        Sepetinizde <strong class="color-danger"><?php echo $total_count; ?></strong> adet ürün bulunmaktadır.
        </h2>    
        <hr>

        <div class="row">
            <div class="col-md-8 col-md-offset-2">
                <table class="table table-hover table-bordered table-striped">
                    <thead>
                        <th class="text-center">Ürün Resmi</th>
                        <th class="text-center">Ürün Adı</th>
                        <th class="text-center">Ürün Fiyatı</th>
                        <th class="text-center">Adeti</th>
                        <th class="text-center">Toplam</th>
                        <th class="text-center">Sepet İşlemleri</th>
                    </thead>

                    <tbody>
                        
                        <?php foreach($shopping_products as $product) { ?> 
                        <tr>
                            <td class="text-center">
                                <img width="50px" src="assets/img/<?php echo $product->product_img_url; ?>" alt="<?php echo $product->product_name; ?>">
                            </td>
                            <td class="text-center"><?php echo $product->product_name; ?></td>
                            <td class="text-center"><strong> <?php echo $product->product_price; ?> TL </strong></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-xs btn-success">
                                    <span class="glyphicon glyphicon-plus"></span>
                                </a>
                                <input type="text" value="<?php echo $product->count; ?>" class="item-count-input">
                                <a href="#" class="btn btn-xs btn-danger">
                                    <span class="glyphicon glyphicon-minus"></span>
                                </a>
                            </td>
                            <td class="text-center"><?php echo $product->total_price; ?></td>
                            <td class="text-center">
                                <a href="#" class="btn btn-danger btn-sm">
                                <span class="glyphicon glyphicon-remove"></span> Sepetten Çıkar
                                </a>
                            </td>
                        </tr> 

                        <?php } ?>
                        
                        
                        
                    </tbody>

                    <tfoot>
                        <th colspan="2" class="text-right">
                            Toplam Ürün : <span class="color-danger"><?php echo $total_count; ?> adet</span>
                        </th>            
                        <th colspan="4" class="text-right">
                            Toplam Tutar : <span class="color-danger"><?php echo $total_price; ?> TL</span>
                        </th>            
                    </tfoot>
                </table>
            </div>
        </div>
        <?php } else { ?>
            <div class="alert alert-info">
                <strong>Sepetinizde henüz ürün bulunmamaktadır! Eklemek için <a href="index.php"> tıklayınız.</a></strong>
            </div>
        <?php  } ?>
    
    </div>
    <!---------MAIN CONTENT--------------->

</body>
</html>