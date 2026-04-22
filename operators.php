<?php

    // //aritmetik
    // //atama
    // //karşılaştırma
    // //mantıksal

    // $a = 10;
    // $b = 5;

    // //aritmetik
    // echo "aritmetik <br>";

    // echo $a + $b."<br>";
    // echo $a - $b."<br>";
    // echo $a * $b."<br>";
    // echo $a / $b."<br>";
    // echo $a % $b."<br>";
    // echo $a ** $b."<br>";
    // echo $a++."<br>";
    // echo $a."<br>";
    // echo ++$a."<br><br>";


    // //atama
    // echo "atama <br>";

    // $a += $b;
    // echo $a."<br><br>";

    // //karşılaştırma
    // echo "karşılaştırma <br>";
    // $sonuc = ($a!=$b); //sadece 1 döndürdüğünde ekrana yazıyor. var_dump lazım.
    // echo var_dump($sonuc)."<br>";

    
    //mantıksal
    $age =20;
    $graduate = "lise";

    $sonuc = ($age >=18);
    $sonuc = ($graduate == "lise");

    $sonuc = ($age>=18 and ($graduate =="lise" or $graduate == "üniversite"));

    echo var_dump($sonuc);









?> 