<?php

    //for while foreach

    // echo "1"."<br>";
    // echo "2"."<br>";
    // echo "3"."<br>";
    // echo "4"."<br>";

    // for ($i=0; $i <= 100; $i++) { 
    //         echo $i."<br>";
       
    // }




//    $names = ["berat", "sena", "balici","bal"];

//    for($i=0;$i<count($names);$i++){
//     echo $names[$i]."<br>";
//    }




    
   $products = [
        ["Iphone 1",10000],
        ["Iphone 2",20000],
        ["Iphone 3",30000],
        ["Iphone 4",40000],
   ];


    for($i=0; $i<count($products) ; $i++) { 
        
            echo $products[$i][0]." ".$products[$i][1]."<br>";
    }

   
    foreach ($products as $product) {
        echo $product[0]." ".$product[1]."<br>";
    }







?>