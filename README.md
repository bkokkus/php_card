# php ile sepet uygulaması

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

    #shopping-cart.php 
        -> Sepet sayfası
     Bu sayfa da bootstrap ve custom.css dosyasına yazdığımız css kodları ile
    sepet sayfasının front-end tasarımını oluşturduk. 
      -Bir tablo oluşturarak sepete eklenecek ürünlerin listeleneceği tabloyu tasarladık.
      -Sepet işlemlerinde oluşacak adet ve fiyat toplamlarının belirtileceği summary (özet)
    alanlarını oluşturduk.  