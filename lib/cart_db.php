<?php

include "db.php";

function addToCart($product_item){

}

function removeFromCart($product_id){

}

function incCount($product_id){

}

function decCount($product_id){

}

if(isset($_POST["p"])){
    $islem = $_POST['p'];

    if($islem == "addToCart"){
        $id = $_POST["product_id"];
        
        $product = $db->query("SELECT * FROM cart WHERE id ={$id}", PDO::FETCH_OBJ)->fetch();

        print_r($product);

    } else if ($islem == "removeFromCart"){

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