<?php

include "db.php";
session_start();

function addToCart($product_item){

        //SESSION
        /**
         * 
         *  products
        *       kedi maması ... adeti(2) ... fiyatı (100) .. 
        *       kopek maması ... adeti(2) ... fiyatı (100) .. 
        * 
         *  summary
         *         ürün adeti ve fiyat toplamı
         */


      if(isset($_SESSION["shoppingCart"])){
        
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart['products'];
      } else {
          $products = array();
      }

      //ADET KONTROL
      if(array_key_exists($product_item->id, $products)){
          $products[$product_item->id]->count++;
      } else {
        $products[$product_item->id] = $product_item;
      }

      //Sepetin Hesaplanması

      $total_price = 0.0;
      $total_count = 0;

      foreach ($products as $product){
          $product->total_price = $product->count * $product->product_price;
          $total_price = $total_price + $product->total_price;
          $total_count += $product->count;
      }

      //echo $total_count . "=>" . $total_price;
      
      $summary["total_price"] = $total_price;
      $summary["total_count"] = $total_count;


      $_SESSION["shoppingCart"]["products"] = $products;
      $_SESSION["shoppingCart"]["summary"] = $summary;
      
      return $total_count;
}

function removeFromCart($product_id){
    if(isset($_SESSION["shoppingCart"])){
        
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart['products'];
      
        //ürünü listeden çıkar
        if(array_key_exists($product_id, $products)){
            unset($products[$product_id]);
        }

        //tekrardan sepeti hesapla
        $total_price = 0.0;
        $total_count = 0;

        foreach ($products as $product){
            $product->total_price = $product->count * $product->product_price;
            $total_price = $total_price + $product->total_price;
            $total_count += $product->count;
        }

        //echo $total_count . "=>" . $total_price;
        
        $summary["total_price"] = $total_price;
        $summary["total_count"] = $total_count;


        $_SESSION["shoppingCart"]["products"] = $products;
        $_SESSION["shoppingCart"]["summary"] = $summary;
        
        return true;
    }
}

function incCount($product_id){
    
    if(isset($_SESSION["shoppingCart"])){
        
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart['products'];
    }

    //ADET KONTROL
    if(array_key_exists($product_id, $products)){
        $products[$product_id]->count++;
    } else {
      $products[$product_item->id] = $product_item;
    }

    //Sepetin Hesaplanması

    $total_price = 0.0;
    $total_count = 0;

    foreach ($products as $product){
        $product->total_price = $product->count * $product->product_price;
        $total_price = $total_price + $product->total_price;
        $total_count += $product->count;
    }

    //echo $total_count . "=>" . $total_price;
    
    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;


    $_SESSION["shoppingCart"]["products"] = $products;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return true;
    
}

function decCount($product_id){
    if(isset($_SESSION["shoppingCart"])){
        
        $shoppingCart = $_SESSION["shoppingCart"];
        $products = $shoppingCart['products'];
    }

    //ADET KONTROL
    if(array_key_exists($product_id, $products)){
        if($products[$product_id]->count > 1){
        $products[$product_id]->count--;
        }else {
            unset($products[$product_id]);
        }

    } else {
      $products[$product_item->id] = $product_item;
    }

    //Sepetin Hesaplanması

    $total_price = 0.0;
    $total_count = 0;

    foreach ($products as $product){
        $product->total_price = $product->count * $product->product_price;
        $total_price = $total_price + $product->total_price;
        $total_count += $product->count;
    }

    //echo $total_count . "=>" . $total_price;
    
    $summary["total_price"] = $total_price;
    $summary["total_count"] = $total_count;


    $_SESSION["shoppingCart"]["products"] = $products;
    $_SESSION["shoppingCart"]["summary"] = $summary;

    return true;
    
}

if(isset($_POST["p"])){
    $islem = $_POST['p'];

    if($islem == "addToCart"){
        $id = $_POST["product_id"];
        
        $product = $db->query("SELECT * FROM cart WHERE id ={$id}", PDO::FETCH_OBJ)->fetch();
        $product->count = 1;
        echo addToCart($product);

    } else if ($islem == "removeFromCart"){
        $id = $_POST["product_id"];
        echo removeFromCart($id);

    }

}

if(isset($_GET["p"])){
    $islem = $_GET['p'];

    if($islem == "incCount"){
        $id = $_GET["product_id"];

        if(incCount($id)){
            header("location:../shopping-cart.php");
        }

    } else if ($islem == "decCount"){
        
        $id = $_GET["product_id"];

        if(decCount($id)){
            header("location:../shopping-cart.php");
        }
        

    }

}

//addToCart
/**
 * ürün id al
 * cart_db.php dosyasına post et
 * veritabanından ürünün bilgisini al
 * SESSION daki sepete ekle
 * Sepeti tekrar hesapla
 */