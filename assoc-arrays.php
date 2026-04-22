<?php
    //dictionary gibi
    //key - value

    //44=>malatya

    $plates = array("41","44","34");
    $citys = array("kocaeli","MALATYA","istanbul");
    //yerine
    $plate_infos = array(
        "41"=>"kocaeli",
        "44"=>"MALATYA",
        "34"=>"Istanbul",
    );


    echo $plate_infos["44"]."<br>";


    $product =[
    "name" =>"Iphone",
    "price"=>20000,
    "isSelled"=>true
    ];

    $products = [
        [
        "name" =>"Iphone 10",
        "price"=>20000,
        "isSelled"=>true
        ],

        [
        "name" =>"Iphone 11",
        "price"=>30000,
        "isSelled"=>true
        ],

        [
        "name" =>"Iphone 12",
        "price"=>40000,
        "isSelled"=>true
        ],
        
    ];

    echo $products[0]["name"]."<br>";
    echo $products[1]["name"]."<br>";


?>