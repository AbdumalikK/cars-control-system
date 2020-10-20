<?php 
include '../includes/config.php';
?>

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
    <link rel="stylesheet" href="../styles/css/dark-mode.css">
    <link rel="stylesheet" href="../styles/js/dropzonejs/dropzone.css">
    <!-- Fonts -->
    <link rel="stylesheet" href="../styles/fonts/18VAGROUNDEDMBOLD_0.TTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-BOLD.OTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-REGULAR.OTF">
    <link rel="stylesheet" href="../styles/fonts/TITILLIUM-THIN.OTF">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <!-- JS Files -->
    <script src="../styles/js/darkmode-js.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script type="text/javascript" src="../styles/js/search-edit.js"></script>
</head>

<body>
    <!-- Reminder and made tasks -->
    <div class="container-lg mx-lg-auto text-center mt-4 bg-yellow fixed-top">
        <div class="row">
            <div class="col-5 mr-auto">
                <a class="text-decoration-none" href="edit.php">
                    <div class="tasks-border-top reminder-top ml-4">
                        <h2 class="m-0 pt-2"><img src="../styles/icons/edit.svg" alt=""></h2>
                        <p class="m-0">Tuzatish</p>
                    </div>
                </a>
            </div>
            <div class="col-1 add-border-left p-0 m-0 my-2"></div>
            <div class="col-5">
                <a class="text-decoration-none" href="add.php">
                    <div class="tasks-border-top ml-4">
                        <h2 class="m-0 pt-2"><img src="../styles/icons/car-add.svg" alt=""></h2>
                        <p class="m-0">Qo`shish</p>
                    </div>
                </a>
            </div>
        </div>
    </div>
    <!-- end -->


    <div class="container mx-lg-auto my-4 nav-fixed-margin">


    <div class="row">
        <div class="col-12 px-4 pt-4">
			<form action="../ajax.php">
				<div class="search-input">
					<input type="text" name="search" id="search" class="search-control" placeholder="Qidirish" autofocus><a href=""><img class="search-img" src="styles/icons/search icon.svg" alt=""></a>
				</div>
			</form>
	        <div id="display2"></div>
		</div>
    </div>


    <form action="search-general.php">
                            <div class="row p-2">

                                            <div class="col-4 p-0 pl-2">
                                                <label class="mt-4 ml-3 search-option-title" for="marka">marka</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>
                                                
                                                <label class="mt-4 ml-3 search-option-title" for="marka">i.ch.yili</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>

                                                <label class="mt-4 ml-3 search-option-title" for="marka">region</label>     
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>

                                                <label class="mt-4 ml-3 search-option-title" for="marka">egalik huquqi</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>
                                            </div>

                                            <div class="col-4 p-0 px-2">
                                                <label class="mt-4 ml-3 search-option-title" for="marka">model</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>
                                                
                                                <label class="mt-4 ml-3 search-option-title" for="marka">olingan yili</label>       
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>

                                                <label class="mt-4 ml-3 search-option-title" for="marka">rayon</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>

                                                <label class="mt-4 ml-3 search-option-title" for="marka">haydovchi</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>
                                            </div>

                                            <div class="col-4 p-0 pr-2">
                                                <label class="mt-4 ml-3 search-option-title" for="marka">kuzov turi</label>     
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>
                                                
                                                <label class="mt-4 ml-3 search-option-title" for="marka">sotilgan yili</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>

                                                <label class="mt-4 ml-3 search-option-title" for="marka">javobgar shaxs</label>     
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>

                                                <label class="mt-4 ml-3 search-option-title" for="marka">yoqilg`i turi</label>      
                                                <select class="search-option" name="marka" id="marka">
                                                    <option value="hammasi" selected>Hammasi</option>
                                                    <option value="kaptiva">Kaptiva</option>
                                                    <option value="kaptiva">Toyota</option>
                                                </select>
                                            </div>
            
                            </div>
        <div class="row">
            <div class="col-12 text-center mt-4">
                <a href="search-result.php"><img src="../styles/icons/search-icon.svg" alt="qidiruv"></a>
            </div>
        </div>
        </form>


        <!-- Content data showing -->
    <div class="content mt-4">
            <div class="content-bordered">
            <a class="unlink" href="update.php">
                <div class="row">
                        <div class="col-5 pr-1">
                            <div class="info">
                                <h5 class="d-inline-block content-border ml-0 mb-0">Nexia 3</h5>
                                <p class="content-who text-dark ml-0">haydovchi</p>
                                <h5 class="content-p mb-0 ml-0">Imronov Muhammad</h5>
                        
                                
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="info-2 mt-2">
                                
                                <div class="row">
                                    <div class="col-5 px-0 pr-2">
                                <div class="d-inline-block br-3"></div>
                                <p class="mb-0 font-8">telefon</p>
                                <h5 class="mb-0 font-12">90 900 90 90</h5>
                                    </div>
                                <!-- </div>
                
                                <div class="row"> -->
                
                                <div class="col-5 d-inline px-0">
                                <div class="d-inline-block"></div>
                                <p class="mb-0 font-8">dav.raqami</p>
                                <h5 class="mb-0 font-12">40 A 100 GB</h5>
                                </div>
                                    
                                    <div class="col-1 py-4 pl-2">
                                        <img class="mb-3 mr-lg-4" src="../styles/icons/call-notif.svg" alt="call">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>


            <div class="content-bordered">
            <a class="unlink" href="update.php">
                <div class="row">
                        <div class="col-5 pr-1">
                            <div class="info">
                                <h5 class="d-inline-block content-border ml-0 mb-0">Nexia 3</h5>
                                <p class="content-who text-dark ml-0">haydovchi</p>
                                <h5 class="content-p mb-0 ml-0">Imronov Muhammad</h5>
                        
                                
                            </div>
                        </div>
                        
                        <div class="col-6">
                            <div class="info-2 mt-2">
                                
                                <div class="row">
                                    <div class="col-5 px-0 pr-2">
                                <div class="d-inline-block br-3"></div>
                                <p class="mb-0 font-8">telefon</p>
                                <h5 class="mb-0 font-12">90 900 90 90</h5>
                                    </div>
                                <!-- </div>
                
                                <div class="row"> -->
                
                                <div class="col-5 d-inline px-0">
                                <div class="d-inline-block"></div>
                                <p class="mb-0 font-8">dav.raqami</p>
                                <h5 class="mb-0 font-12">40 A 100 GB</h5>
                                </div>
                                    
                                    <div class="col-1 py-4 pl-2">
                                        <img class="mb-3 mr-lg-4" src="../styles/icons/call-notif.svg" alt="call">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            </div>
</div></div>



    </div>







        <!-- end add information section -->
    <?php include '../includes/footer.php'; ?>