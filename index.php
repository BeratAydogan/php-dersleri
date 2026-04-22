<?php

    $kategoriler = ["Programlara","Web Geliştirme","Mobil Ugulamalar","Ofis Ugulamalar"];
    $kurslar = [
        [
            "id" => 1,
            "baslik"=>"Web geliştirme kursu",
            "aciklama"=>"güzel bir kurs",
            
        ],
         [
            "id" => 2,
            "baslik"=>"Python kursu",
            "aciklama"=>"güzel bir kurs",
            
        ],
         [
            "id" => 3,
            "baslik"=>"Javascript kursu",
            "aciklama"=>"güzel bir kurs",
            
        ],

    ];
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.8/css/bootstrap.min.css" />
    <title>Document</title>
</head>

<body>
    <nav class="navbar navbar-lg bg-primary navbar-dark">
        <div class="container">
            <a href="/" class="navbar-brand">CourseApp</a>
            <ul class="navbar-nav me-auto">
                <li class="nav-item">
                    <a href="#" class="nav-link">Anasayfa</a>
                </li>
                <li class="nav-item">
                    <a href="#" class="nav-link">Kurslar</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="container my-3">
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <?php foreach($kategoriler as $kategori): ?>                    
                    <a href="#" class="list-group-item list-group-item-action">
                        <?php echo $kategori;?>
                    </a>
                    <?php endforeach; ?>
                </div>
            </div>


            <div class="col-9">
                <?php foreach ($kurslar as $kurs):?>
                <div class="card mb-3">
                    <div class="row">
                        <div class="col-md-3">
                            <img src="https://cdn-imgix.headout.com/tour/19364/TOUR-IMAGE/a0f87f7e-434d-4c3c-9584-f7ee351d5f64-10432-dubai-img-worlds-of-adventure---uae-resident-offer-01.jpg" alt="" class="img-fluid rounded-start">
                        </div>
                        <div class="col-md-9">
                            <div class="card-body">
                                <h5 class="card-title"> <?php echo $kurs["baslik"];?></h5>
                                <p>
                                    <?php echo $kurs["aciklama"];?>
                                </p>
                            </div>

                        </div>
                    </div>
                </div>
               <?php endforeach;?>
            </div>

        </div>
    </div>
</body>

</html>