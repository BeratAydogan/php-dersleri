<?php


    $db_username = "berataydogan";
    $db_password = "1234";

    // if($db_username=="berataydogan" and $db_password =="1234") {
    //     echo "username ve parola doğru";
    // }else {
    //     echo "username ve parola yanlıs";
    // }



    //  if($db_username=="berataydogan" ) {
    //     if($db_password =="1234"){
    //         echo "giriş başarılı";
    //     }else{
    //         echo "şifre yanlış";
    //     }
        
    // }else {
    //     echo "username yanlıs";
    // }



    if($db_username !="berataydogan"){
        echo "username yanlış";
    }elseif($db_password!="1234"){
        echo "parola yanlış";
    }else{
        echo "giriş başarılı";
    }


?>