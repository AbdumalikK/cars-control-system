<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM car WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($car = mysqli_fetch_assoc($result)) {

?>


<div class="row">
            <!-- Avtomobil-section -->
            <div class="col-12" data-toggle="collapse" data-target="#car">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Avtomobil</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg">
                </div>
            </div>
            <!-- end -->
            <div class="col-12 mx-3 m-0 p-0">
                <!-- start collapse -->
                <div id="car" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12">
                            <div class="row">
                                <div class="col-6 px-0">
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3">Markasi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['mark']; ?>
                                   </h5>
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3 mt-2">Kuzov turi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['carcase']; ?>
                                    </h5>
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3 mt-2">Yoqilg`i turi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['fuel']; ?>
                                   </h5>
                                    
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3 mt-2">Davlat raqami</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['d_number']; ?>
                                   </h5>
                                </div>
                                <div class="col-6 px-0">
                                    <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Modeli</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['model']; ?>
                                   </h5>
                                    
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3 mt-2">Ishlab chiqarilgan yili</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['manuf_year']; ?>
                                   </h5>
                                    
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3 mt-2">Dvigatel hajmi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['engine']; ?>
                                   </h5>
                                    
                                    <p class="user-info-titles wd78 m-0 p-0 pb-2 ml-3 mt-2">GPS raqami</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $car['gps']; ?>
                                   </h5>
                                    
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end collapse show-->
                    </div>
                    
                    <!-- end col-12 -->
                    <!-- Photo and Video -->
                    <div class="row mt-2">
                        <div class="col-6">
                            <p class="color59 wd78 ml-15">Surat</p>
                        </div>
                        <div class="col-6">
                            <p class="color59 wd78 ml-15">Video</p>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6">
                            <div class="flex">
                                <div class="photo-flex">
                                <?php if ($car['foto_1']) { ?>
                                    <div class="file-input mx-2">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                       <a href="<?php echo $car['foto_1'];?>" download>
                                        <img src="<?php echo $car['foto_1'];?>" width="64" height="64" class="img-show1 left-22" id="img-show2" alt="">
                                        <span class="img-download">
                                            <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                        </span>
                                       </a>
                                    </div>
                                <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                <?php if ($car['foto_2']) { ?>
                                    <div class="file-input mx-2">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <a href="<?php echo $car['foto_2'];?>" download>
                                            <img src="<?php echo $car['foto_2'];?>" width="64" height="64" class="img-show2 left-100" id="img-show3" alt="">
                                            <span class="img-download">
                                            <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                            </span>
                                        </a>
                                    </div>
                                <?php } else { echo '<div class="text-center pl-4">Rasm yo`q</div>'; }  ?>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="photo-flex">
                                <?php if ($car['foto_3']) { ?>
                                    <div class="file-input mx-2 mt-4">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <a href="<?php echo $car['foto_3'];?>" download>
                                            <img src="<?php echo $car['foto_3'];?>" width="64" height="64" class="img-show3 left-22" id="img-show4" alt="">
                                            <span class="img-download">
                                            <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                            </span>
                                        </a>
                                    </div>
                                <?php } else { echo '<div class="pt-3 pl-3">Rasm yo`q</div>'; }  ?>
                                <?php if ($car['foto_4']) { ?>
                                    <div class="file-input mx-2 mt-4">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <a href="<?php echo $car['foto_4'];?>" download>
                                            <img src="<?php echo $car['foto_4'];?>" width="64" height="64" class="img-show4 left-100" id="img-show5" alt="">
                                            <span class="img-download">
                                            <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                            </span>
                                        </a>
                                    </div>
                                <?php } else { echo '<div class="pl-4 pt-3">Rasm yo`q</div>'; }  ?>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pl-2">
                                <?php if ($car['video_1']) { ?>
                                    <video width="100%" height="100%" class="pr-4" controls>
                                            <source src="
                                            <?php
                                            echo $car['video_1'];
                                             ?>
                                            " type="video/mp4">
                                            Your browser does not support the video tag.
                                    </video>
                                <?php } else {
                                    echo "<div class='text-center mt-4'>Video yo`q</div>";
                                } ?>
                        </div>
                    </div>
                    <!-- end photo and video -->
                </div>
                <!-- end collapse-->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
<?php } ?>