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

    <?php 
        session_start();
        echo "<pre>";
        print_r($_SESSION["shoppingCart"]);
        die();
    
    ?>

    <!---------MAIN CONTENT--------------->
    <div class="container">
        <h2 class="text-center"> 
        Sepetinizde <strong class="color-danger">5</strong> adet ürün bulunmaktadır.
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
                    <th class="text-center">Sepetten Çıkar</th>
                </thead>

                <tbody>
                    <tr>
                        <td class="text-center">
                            <img width="50px" src="assets/img/kedi.png" alt="">
                        </td>
                        <td class="text-center">bbk Kedi Maması</td>
                        <td class="text-center"><strong>100 ₺ </strong></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-xs btn-success">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text" value="3" class="item-count-input">
                            <a href="#" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>
                        </td>
                        <td class="text-center">300 ₺</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove"></span> Sepetten Çıkar
                            </a>
                        </td>
                    </tr> 

                    
                    <tr>
                        <td class="text-center">
                            <img width="50px" src="assets/img/kedi.png" alt="">
                        </td>
                        <td class="text-center">bbk Kedi Maması</td>
                        <td class="text-center"><strong>100 ₺ </strong></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-xs btn-success">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text" value="3" class="item-count-input">
                            <a href="#" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>
                        </td>
                        <td class="text-center">300 ₺</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove"></span> Sepetten Çıkar
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img width="50px" src="assets/img/kedi.png" alt="">
                        </td>
                        <td class="text-center">bbk Kedi Maması</td>
                        <td class="text-center"><strong>100 ₺ </strong></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-xs btn-success">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text" value="3" class="item-count-input">
                            <a href="#" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>
                        </td>
                        <td class="text-center">300 ₺</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove"></span> Sepetten Çıkar
                            </a>
                        </td>
                    </tr>
                    <tr>
                        <td class="text-center">
                            <img width="50px" src="assets/img/kedi.png" alt="">
                        </td>
                        <td class="text-center">bbk Kedi Maması</td>
                        <td class="text-center"><strong>100 ₺ </strong></td>
                        <td class="text-center">
                            <a href="#" class="btn btn-xs btn-success">
                                <span class="glyphicon glyphicon-plus"></span>
                            </a>
                            <input type="text" value="3" class="item-count-input">
                            <a href="#" class="btn btn-xs btn-danger">
                                <span class="glyphicon glyphicon-minus"></span>
                            </a>
                        </td>
                        <td class="text-center">300 ₺</td>
                        <td class="text-center">
                            <a href="#" class="btn btn-danger btn-sm">
                            <span class="glyphicon glyphicon-remove"></span> Sepetten Çıkar
                            </a>
                        </td>
                    </tr>
                  
                    
                </tbody>

                <tfoot>
                    <th colspan="2" class="text-right">
                        Toplam Ürün : <span class="color-danger">4 adet</span>
                    </th>            
                    <th colspan="4" class="text-right">
                        Toplam Tutar : <span class="color-danger">1200 TL</span>
                    </th>            
                </tfoot>
            </table>
        </div>
    </div>

    
    </div>
    <!---------MAIN CONTENT--------------->

</body>
</html>