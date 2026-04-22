<?php

    //Diziler
        //Numeric Ddiziler
        //Associative Diziler 50.58

    //$students = "ali,ahmet,hasan"; YANLIS

    //$students = array("ali","ahmet","hasan");
    $students = ["ali","ahmet","hasan"];

    echo $students[0]."<br>";
    echo $students[1]."<br>";
    echo $students[2]."<br>";
    echo gettype($students)."<br>";

    $numbers = [100,200,300];
    echo $students[0]." ".$numbers[0]."<br>";
    echo $students[1]." ".$numbers[1]."<br>";
    echo $students[2]." ".$numbers[2]."<br>";



?>