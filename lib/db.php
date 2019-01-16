<?php

try {
    $db = new PDO("mysql:hostname=localhost;dbname=php_cart;charset=utf8","bekir","Test.123");
} catch (Exception $e) {
    echo $e->getMessage();
}
