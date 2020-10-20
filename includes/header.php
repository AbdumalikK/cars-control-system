<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>LaLaKoo Cars</title>
    <!-- Styles css-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="../styles/css/style.css">
    <link rel="stylesheet" href="../styles/css/search.css">
    <link rel="stylesheet" href="../styles/css/image.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <link rel="stylesheet" href="../styles/css/dark-mode.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="../styles/fonts/18VAGROUNDEDMBOLD_0.TTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-BOLD.OTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-REGULAR.OTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-THIN.OTF">
    <link rel="icon" href="/favicon.ico" type="image/x-icon">
    <!-- JS Files -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="styles/js/search.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
    <script src="../styles/js/darkmode-js.min.js"></script>
    
    <script src="../styles/js/doc-js/FileSaver.js"></script>
    <script src="../styles/js/doc-js/jquery.wordexport.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jspdf/1.3.3/jspdf.min.js"></script>
    <script src="https://html2canvas.hertzen.com/dist/html2canvas.js"></script>
	<script src="../styles/js/loader.js"></script>
    <script src="../styles/js/app.js"></script>
</head>
<body onload="loader()">


<!-- Container -->
<div id="loader">
<p id="loadText">LaLaKu <img src="../styles/loader-logo.svg" width="50" height="50" alt=""></p>
</div>

<div class="container-fluid container-lg mx-lg-auto m-0">

   <!-- logo -->
        <div class="row m-0 p-0">
            <div class="col-md p-0">

                <div class="logo">
                  <img class="logo-press" src="./styles/logo-background.svg">
                    

                    <a href="./index.php"><img class="pos-top" src="./styles/logo.svg" alt="logo"></a>
                <div class="text-center custom-control custom-switch dayNight">
                    <input type="checkbox" class="custom-control-input ml-5" id="darkSwitch" />
                    <label class="custom-control-label" for="darkSwitch">Tungi rejim</label>
                 </div>
                <script src="./styles/js/dark-mode-switch.min.js"></script>
<?php 
if(isset($_SESSION["loggedin"])) {
    echo '<a class="notification" href="./notification.php">
        <img src="styles/icons/notification.svg" alt="Bildirishnoma"><span class="badge badge-pill badge-danger ntf">10</span>
    </a>';
} else {

}
 ?>


                <a href="./search.php">
                    <img class="search" src="styles/icons/search.svg" alt="Qidirish">
                </a>

                </div>

               
            </div>
        </div>
    <!-- Logo end -->

        <!-- section navbar -->
        <section class="container">
            <div class="row minus m-min">
                <!-- Modellar -->
                <div class="col-6 mb-lg-3 mb-2">
                    <button class="btn-nav font-titillium-bd" onclick="toggle('models')">Modellar <img src="./styles/icons/arrow.svg">
                    </button>
                </div>
                <!-- end -->
                <!-- Mintaqalar -->
                <div class="col-6 mb-lg-3 mb-2 text-right">
                    <button class="btn-nav font-titillium-bd" onclick="toggle('provinces')">Mintaqalar <img src="./styles/icons/arrow.svg"></button> 
                </div>
                <!-- end -->
            </div>
        </section>
        <!-- end -->

        <!-- Modellar, Mintaqalar -->
                        <!-- Models -->
                        <div class="col-12 px-2 m-0">
                                     <div id="models" class="toggle m-0">
                                    <div class="col-12 px-0 m-0">
                                <div class="col-10 offset-1 content-border mt-2 mb-3">
                                </div>
                                    <div class="col-12">
                                        <div class="row">
                                        
                                            <div class="col-4 pl-0 pr-2 pt-0">
                                                <button onclick="toggle('matiz')" class="province-btn d-block">Matiz <div class="province-number">
                                                 <?php 
                                                    $matiz = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) = 'matiz'");

                                                    if (!$matiz)
                                                        die(mysqli_error($matizError));

                                                    $matizAmount = $matiz->fetch_row()[0];
                                                    echo '('.$matizAmount.')';
                                                    ?>   
                                                </div></button>
                                                <button onclick="toggle('matizBest')" class="province-btn d-block mt-3">Matiz Best <div class="province-number">
                                                    <?php 
                                                    $matizBest = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'matiz (be%'");

                                                    if (!$matizBest)
                                                        die(mysqli_error($matizBestError));

                                                    $matizBestAmount = $matizBest->fetch_row()[0];
                                                    echo '('.$matizBestAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('damas')" class="province-btn d-block mt-3">Damas <div class="province-number">
                                                    <?php 
                                                    $damas = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'damas'");

                                                    if (!$damas)
                                                        die(mysqli_error($damasError));

                                                    $damasAmount = $damas->fetch_row()[0];
                                                    echo '('.$damasAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('labo')" class="province-btn d-block mt-3">D.Labo <div class="province-number">
                                                    <?php 
                                                    $labo = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'damas%labo%'");
                                                    if (!$labo) 
                                                        die(mysqli_error($laboError));

                                                    $laboAmount = $labo->fetch_row()[0];
                                                    echo '('.$laboAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('van')" class="province-btn d-block mt-3">D.Van <div class="province-number">
                                                    <?php 
                                                    $van = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'damas%van%'");
                                                    if (!$van) 
                                                        die(mysqli_error($vanError));

                                                    $vanAmount = $van->fetch_row()[0];
                                                    echo '('.$vanAmount.')';
                                                    ?> 
                                                </div></button>
                                                
                                            </div>
                                            <div class="col-4 px-2 pt-0">
                                                <button onclick="toggle('spark')" class="province-btn d-block">Spark <div class="province-number">
                                                    <?php 
                                                    $spark = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'spark%'");
                                                    if (!$spark) 
                                                        die(mysqli_error($sparkError));

                                                    $sparkAmount = $spark->fetch_row()[0];
                                                    echo '('.$sparkAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('nexia')" class="province-btn d-block mt-3">Nexia 1 <div class="province-number">
                                                     <?php 
                                                    $nexia = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'nexia%1%'");
                                                    if (!$nexia) 
                                                        die(mysqli_error($nexiaError));

                                                    $nexiaAmount = $nexia->fetch_row()[0];
                                                    echo '('.$nexiaAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('nexia2')" class="province-btn d-block mt-3">Nexia 2 <div class="province-number">
                                                    <?php 
                                                    $nexia2 = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'nexia%2%'");
                                                    if (!$nexia2) 
                                                        die(mysqli_error($nexia2Error));

                                                    $nexia2Amount = $nexia2->fetch_row()[0];
                                                    echo '('.$nexia2Amount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('nexia3')" class="province-btn d-block mt-3">Nexia 3 <div class="province-number">
                                                    <?php 
                                                    $nexia3 = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'nexia%3%'");
                                                    if (!$nexia3) 
                                                        die(mysqli_error($nexia3Error));

                                                    $nexia3Amount = $nexia3->fetch_row()[0];
                                                    echo '('.$nexia3Amount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('cobalt')" class="province-btn d-block mt-3">Cobalt <div class="province-number">
                                                    <?php 
                                                    $cobalt = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'cobalt%'");
                                                    if (!$cobalt) 
                                                        die(mysqli_error($cobaltError));

                                                    $cobaltAmount = $cobalt->fetch_row()[0];
                                                    echo '('.$cobaltAmount.')';
                                                    ?> 
                                                </div></button>
                                            </div>
                                            <div class="col-4 pl-2 pr-0 pt-0">
                                                <button onclick="toggle('lacetti')" class="province-btn d-block">Lacetti <div class="province-number">
                                                    <?php 
                                                    $lacetti = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'lacetti%'");
                                                    if (!$lacetti) 
                                                        die(mysqli_error($lacettiError));

                                                    $lacettiAmount = $lacetti->fetch_row()[0];
                                                    echo '('.$lacettiAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('gentra')" class="province-btn d-block mt-3">Gentra <div class="province-number">
                                                     <?php 
                                                    $gentra = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'gentra%'");
                                                    if (!$gentra) 
                                                        die(mysqli_error($gentraError));

                                                    $gentraAmount = $gentra->fetch_row()[0];
                                                    echo '('.$gentraAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('malibu')" class="province-btn d-block mt-3">Malibu 1 <div class="province-number">
                                                     <?php 
                                                    $malibu = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'malibu%1%'");
                                                    if (!$malibu) 
                                                        die(mysqli_error($malibuError));

                                                    $malibuAmount = $malibu->fetch_row()[0];
                                                    echo '('.$malibuAmount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('malibu2')" class="province-btn d-block mt-3">Malibu 2 <div class="province-number">
                                                     <?php 
                                                    $malibu2 = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'malibu%2%'");
                                                    if (!$malibu2) 
                                                        die(mysqli_error($malibu2Error));

                                                    $malibu2Amount = $malibu2->fetch_row()[0];
                                                    echo '('.$malibu2Amount.')';
                                                    ?> 
                                                </div></button>
                                                <button onclick="toggle('captiva')" class="province-btn d-block mt-3">Captiva <div class="province-number">
                                                     <?php 
                                                    $captiva = mysqli_query($connect, "SELECT count(*) FROM car WHERE lower(model) like 'captiva%'");
                                                    if (!$captiva) 
                                                        die(mysqli_error($captivaError));

                                                    $captivaAmount = $captiva->fetch_row()[0];
                                                    echo '('.$captivaAmount.')';
                                                    ?> 
                                                </div></button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end -->

                                    <!-- Models border-bottom-->
                                    <div class="col-12 px-2">
                                     <div class="col-10 offset-1 content-border mt-3"></div>
                                    </div>
                                    <!-- end -->
                         </div>
                                    <!-- Models shadow -->
                                    <div class="col-12 p-0">
                                        <img class="province-shadow" src="./styles/icons/province-shadow.svg" alt="province-shadow">
                                    </div>
                                    <!-- end -->
                            <!-- end -->
                                     </div>
                        </div>
                        <!-- end -->


                                    <!-- Provinces -->
                                     <div id="provinces" class="toggle m-0">
                                <div class="col-12 px-2 m-0">
                                <div class="col-10 offset-1 content-border mt-2 mb-3">
                                </div>
                                    <div class="col-12">
                                        <div class="row">
                                        
                                            <div class="col-4 pl-0 pr-2 pt-0">
                                                <button class="province-btn d-block" onclick="toggle('andijon')">Andijon <div class="province-number">
                                                    <?php 
                                                    $andijonCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Andijon'");

                                                    if (!$andijonCount)
                                                        die(mysqli_error($andijon));
                                                    $andijonAmountCars = $andijonCount->fetch_row()[0];
                                                    echo '('.$andijonAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('buxoro')">Buxoro <div class="province-number">
                                                    <?php 
                                                    $BuxoroCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Buxoro'");

                                                    if (!$BuxoroCount)
                                                        die(mysqli_error($Buxoro));
                                                    $BuxoroAmountCars = $BuxoroCount->fetch_row()[0];
                                                    echo '('.$BuxoroAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('jizzax')">Jizzax <div class="province-number">
                                                     <?php 
                                                    $JizzaxCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Jizzax'");

                                                    if (!$JizzaxCount)
                                                        die(mysqli_error($Jizzax));
                                                    $JizzaxAmountCars = $JizzaxCount->fetch_row()[0];
                                                    echo '('.$JizzaxAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('qashqadaryo')">Qashqadaryo <div class="province-number">
                                                     <?php 
                                                    $QashqadaryoCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Qashqadaryo'");

                                                    if (!$QashqadaryoCount)
                                                        die(mysqli_error($Qashqadaryo));
                                                    $QashqadaryoAmountCars = $QashqadaryoCount->fetch_row()[0];
                                                    echo '('.$QashqadaryoAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('toshkentv')">Toshkent v. <div class="province-number">
                                                     <?php 
                                                    $ToshkentCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Toshkent v.'");

                                                    if (!$ToshkentCount)
                                                        die(mysqli_error($Toshkent));
                                                    $ToshkentAmountCars = $ToshkentCount->fetch_row()[0];
                                                    echo '('.$ToshkentAmountCars.')';
                                                    ?>
                                                </div></button>
                                                
                                            </div>
                                            <div class="col-4 px-2 pt-0">
                                                <button class="province-btn d-block" onclick="toggle('namangan')">Namangan <div class="province-number">
                                                     <?php 
                                                    $NamanganCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Namangan'");

                                                    if (!$NamanganCount)
                                                        die(mysqli_error($Namangan));
                                                    $NamanganAmountCars = $NamanganCount->fetch_row()[0];
                                                    echo '('.$NamanganAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('samarqand')">Samarqand <div class="province-number">
                                                     <?php 
                                                    $SamarqandCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Samarqand'");

                                                    if (!$SamarqandCount)
                                                        die(mysqli_error($Samarqand));
                                                    $SamarqandAmountCars = $SamarqandCount->fetch_row()[0];
                                                    echo '('.$SamarqandAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('surxondaryo')">Surxondaryo <div class="province-number">
                                                     <?php 
                                                    $SurxondaryoCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Surxondaryo'");

                                                    if (!$SurxondaryoCount)
                                                        die(mysqli_error($Surxondaryo));
                                                    $SurxondaryoAmountCars = $SurxondaryoCount->fetch_row()[0];
                                                    echo '('.$SurxondaryoAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('sirdaryo')">Sirdaryo <div class="province-number">
                                                     <?php 
                                                    $SirdaryoCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Sirdaryo'");

                                                    if (!$SirdaryoCount)
                                                        die(mysqli_error($Sirdaryo));
                                                    $SirdaryoAmountCars = $SirdaryoCount->fetch_row()[0];
                                                    echo '('.$SirdaryoAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('toshkentsh')">Toshkent sh. <div class="province-number">
                                                     <?php 
                                                    $ToshkentShCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Toshkent sh.'");

                                                    if (!$ToshkentShCount)
                                                        die(mysqli_error($ToshkentSh));
                                                    $ToshkentShAmountCars = $ToshkentShCount->fetch_row()[0];
                                                    echo '('.$ToshkentShAmountCars.')';
                                                    ?>
                                                </div></button>
                                            </div>
                                            <div class="col-4 pl-2 pr-0 pt-0">
                                                <button class="province-btn d-block" onclick="toggle('fargona')">Farg'ona <div class="province-number">
                                                     <?php 
                                                    $FargonaCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Farg`ona'");

                                                    if (!$FargonaCount)
                                                        die(mysqli_error($Fargona));
                                                    $FargonaAmountCars = $FargonaCount->fetch_row()[0];
                                                    echo '('.$FargonaAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('xorazm')">Xorazm <div class="province-number">
                                                     <?php 
                                                    $XorazmCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Xorazm'");

                                                    if (!$XorazmCount)
                                                        die(mysqli_error($Xorazm));
                                                    $XorazmAmountCars = $XorazmCount->fetch_row()[0];
                                                    echo '('.$XorazmAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('navoiy')">Navoiy <div class="province-number">
                                                     <?php 
                                                    $NavoiyCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Navoiy'");

                                                    if (!$NavoiyCount)
                                                        die(mysqli_error($Navoiy));
                                                    $NavoiyAmountCars = $NavoiyCount->fetch_row()[0];
                                                    echo '('.$NavoiyAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('qoraqalpoq')">Qoraqalpoq <div class="province-number">
                                                     <?php 
                                                    $QoraqalpoqCount = mysqli_query($connect, "SELECT count(*) FROM car WHERE region = 'Qoraqalpoq'");

                                                    if (!$QoraqalpoqCount)
                                                        die(mysqli_error($Qoraqalpoq));
                                                    $QoraqalpoqAmountCars = $QoraqalpoqCount->fetch_row()[0];
                                                    echo '('.$QoraqalpoqAmountCars.')';
                                                    ?>
                                                </div></button>
                                                <button class="province-btn d-block mt-3" onclick="toggle('ozbekiston')">O`zbekiston <div class="province-number">
                                                     <?php 
                                                    $OzbekistonCount = mysqli_query($connect, "SELECT count(*) FROM car");

                                                    if (!$OzbekistonCount)
                                                        die(mysqli_error($Ozbekiston));
                                                    $OzbekistonAmountCars = $OzbekistonCount->fetch_row()[0];
                                                    echo '('.$OzbekistonAmountCars.')';
                                                    ?>
                                                </div></button>
                                            </div>

                                        </div>
                                    </div>
                                    <!-- end -->

                                    <!-- Province border-bottom-->
                                    <div class="col-12 px-2">
                                     <div class="col-10 offset-1 content-border mt-3"></div>
                                    </div>
                                    <!-- end -->
                         </div>
                                    <!-- Province shadow -->
                                    <div class="col-12 p-0">
                                        <img class="province-shadow" src="./styles/icons/province-shadow.svg" alt="province-shadow">
                                    </div>
                                    <!-- end -->
                            <!-- end -->

                        </div>
                    <!-- end -->

            <!-- Categories -->
            <div class="container-fluid bg-yellow mb-4">
                <div class="row mx-1">
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('year')"><img class="img-fluid" src="./styles/icons/yili.svg" alt="yili"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('owner')"><img class="img-fluid" src="./styles/icons/egalik.svg" alt="egalik"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('gps')"><img class="img-fluid" src="./styles/icons/gps.svg" alt="gps"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('bought')"><img class="img-fluid" src="./styles/icons/harid.svg" alt="harid"></button></div>
                    <div class="col-2 px2 br-blue text-center"><button class="btn-nav font-titillium-bd" onclick="toggle('sold')"><img class="img-fluid" src="./styles/icons/sotuv.svg" alt="sotuv"></button></div>
                    <div class="col-2 px2 text-center px12"><button class="btn-nav font-titillium-bd" onclick="toggle('fine')"><img class="img-fluid" src="./styles/icons/jarima.svg" alt="jarima"></button></div>
                </div>
            </div>
            <!-- end -->

                <!-- Modellar toggle -->
                <div class="row">
                    <div class="col-12">
                <div id="year" class="toggle m-0">
                Hozircha bo`sh...
                </div>
                    </div>
                </div>
                <!-- end -->

                <!-- Mintaqalar toggle -->
                 <div class="row">
                    <div class="col-12">
                <div id="owner" class="toggle m-0">
               Hozircha bo`sh...
                </div>
                </div>
             </div>
             <!-- end -->


             <!-- Categories toggles showing here -->
                 <div class="toggle-categories">
                    <!-- Categories -->
                     <div class="row">
                        <div class="col-12">
                                     <div id="gps" class="toggle m-0">
                                    Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                     
                     
                     <div class="row">
                        <div class="col-12">
                                     <div id="bought" class="toggle m-0">
                                     Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                     
                     
                     <div class="row">
                        <div class="col-12">
                                     <div id="sold" class="toggle m-0">
                                     Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                     
                     
                     <div class="row">
                        <div class="col-12">
                                     <div id="fine" class="toggle m-0">
                                    Hozircha bo`sh...
                                     </div>
                        </div>
                                     </div>
                 </div>
                <!-- end categories -->
            <!-- end -->

</div>
   <!--  <script>
        new Darkmode().showWidget();
    </script> -->

