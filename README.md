# php ile sepet uygulaması
    # demo inceleme
    http://beta.bekirkokkus.com/sepet/

    #sql dosyası

    NOT : Projeye çalıştırmadan database bağlantı bilgilerini ;
         "lib/db.php" dosyasından konrol etmeyi ya da oluşturmayı unutmayın!

    card.sql adındaki veritabanı dosyası değiştirildi.
        ->hem ismini dalgınlıkla yanlış yazmışım.
        ->hem de veritabanı yerine sadece tabloyu kopyalamışım.
    Yenilenen sql dosyası php_cart.sql

    # Front-End Öncesi

    Bootstrap
    jQuery 
    Kendi kodlamalarımız için custom css ve custom js dosyaları eklendi.
    "lib" klasörü eklendi 
        -> db.php ile sql bağlantısı yapılacak.
        -> card_db.php dosyası ile logic ve fonksiyonel işlemler burada olacak.
    
    sepet ve ürünlerimizin listeleneceği iki sayfa :
        -> index.php
        -> shopping-card.php

    # index.php 
        -> Ürün listeleme sayfası
    Bu sayfa da bootstrap yardımı ile oluşturduğumuz nav barımız var.
    Altında da yine bootstrap components olan thumbnails ile ürünlerimizi listeledik.
    Bağlandığımız veritabanımızdan ürünler (products) tablosunu çektik. 
    Döngü ile ürünleri oluşturduğumuz bootstrap thumbnailleri içine ürün özellikleri ekledik.
    Bütün ürünlerimizi anasayfa da listelemiş olduk.
    
    #shopping-cart.php 
        -> Sepet sayfası
     Bu sayfa da bootstrap ve custom.css dosyasına yazdığımız css kodları ile
    sepet sayfasının front-end tasarımını oluşturduk. 
      -Bir tablo oluşturarak sepete eklenecek ürünlerin listeleneceği tabloyu tasarladık.
      -Sepet işlemlerinde oluşacak adet ve fiyat toplamlarının belirtileceği summary (özet)
    alanlarını oluşturduk.  

    # lib/db.php
    dosya ile veritabanımıza bağlandık.

    # assets/js/custom.js
    Kendi js , jquery kodlarımızın olduğu dosya.
    Burada jquery ile sepete ekle butonuna tıklandığı durumda post işlemi yaptık.
    Dönen veriyi ekrana bastık.

    # lib/php_cart.php
    Daha sonra kodlayacağımız 4 adet fonksiyon oluşturduk.
    custom.js dosyasından gelen post parametreleri ile ;
      ->veri tabanından verileri çektik.
      ->verileri ekrana bastık

    # reset.php
        Geçici olarak session boşaltıp. liste sayfamıza (index.php) ye yönlendiriyor.



