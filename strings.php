<?php

    $productName = "Iphone 14";
    $productPrice =30000;
    $kdvRate = 0.18;
    $kdvPrice = $productPrice + ($kdvRate*$productPrice);

    $summary = "{$productName} isimli ürün fiyatı {$productPrice} TL.<br>";

    echo $summary;

    $summary = $productName." isimli ürün fiyatı vergilerden sonra ".$kdvPrice." TL.<br>";
    echo $summary;
    echo $summary[1]."<br>"; //cümlenin 2. karakteri

    //string fonksiyon
    echo strlen($summary)."<br>";
    echo str_word_count($summary)."<br>";
    echo strtolower($summary)."<br>";



?>