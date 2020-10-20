<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM car WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($car = mysqli_fetch_assoc($result)) {

?>

<input type="hidden" name="id" value="<?php echo $id; ?>">

<div class="row">
            <!-- Avtomobil-section -->
            <div class="col-12" data-toggle="collapse" data-target="#car">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Avtomobil</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->
            <div class="col-12">
                <!-- start collapse -->
                <div id="car" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <!-- <div class="col-12"> -->
                            <div class="row text-center">
                                <div class="col-6 px-0">
                                    <select class="choose-option-add" name="car-mark" id="car-marka" required>
                                        <option value="<?php echo $car['mark'] ?>"><?php echo $car['mark'] ?></option>
                                        <?php
                                        $sql = "SELECT * FROM categories";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['mark'].'>'.$rows['mark'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <select class="choose-option-add mt-3" name="car-carcase" id="car-carcase">
                                        <option value="<?php echo $car['carcase'] ?>" selected><?php echo $car['carcase'] ?></option>
                                        <?php
                                        $sql = "SELECT * FROM carcase_type";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['carcase'].'>'.$rows['carcase'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <select class="choose-option-add mt-3" name="car-fuel" id="marka" required>
                                        <option value="<?php echo $car['fuel'] ?>" selected><?php echo $car['fuel'] ?></option>
                                        <?php
                                        $sql = "SELECT * FROM fuel_type";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['fuel'].'>'.$rows['fuel'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <input type="text" value="<?php echo $car['d_number'] ?>" name="car-number" class="choose-option-add mt-3 mb-4" placeholder="Davlat raqami" required>
                                </div>
                                <div class="col-6 px-0">
                                    <select class="choose-option-add" name="car-model" required>
                                        <option value="<?php echo $car['model'] ?>" selected><?php echo $car['model'] ?></option>
                                        <?php
                                        $sql = "SELECT * FROM car_models";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['model'].'>'.$rows['model'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <select class="choose-option-add mt-3" name="car-manufacture" required>
                                        <option value="<?php echo $car['manuf_year'] ?>" selected><?php echo $car['manuf_-year'] ?></option>
                                        <?php
                                        $sql = "SELECT * FROM car_manufactured_year";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['year'].'>'.$rows['year'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <select class="choose-option-add mt-3" name="car-engine" id="marka">
                                        <option value="<?php echo $car['engine'] ?>" selected><?php echo $car['engine'] ?></option>
                                        <?php
                                        $sql = "SELECT * FROM car_engine_types";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['engine'].'>'.$rows['engine'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    <input type="text" value="<?php echo $car['gps'] ?>" name="car-gps" class="choose-option-add mt-3 mb-4" placeholder="GPS raqami" required>
                                </div>
                            </div>
                            <!-- end row -->
                        </div>
                        <!-- end collapse show-->
                    <!-- </div> -->
                    <!-- end col-12 -->

                    <!-- Photo and Video -->
                    <div class="row">
                            <div class="col-6">
                               <p class="color59 content-border">Surat</p>
                           </div>
                           <div class="col-6">
                               <p class="color59 content-border">Video</p>
                           </div>
                    </div>
                    <div class="row mb-3">
                        <div class="col-6 pl-1">
                            <div class="flex">
                                <div class="photo-flex">
                                    <div class="file-input mx-2">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <input class="custom-file-input" name="car-photo1" type="file" onchange="readURL2(this);">
                                        <img src="<?php echo $car['foto_1'] ?>" width="64" height="64" class="img-show1" id="img-show2" alt="">
                                    </div>
                                    <div class="file-input mx-2">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <input class="custom-file-input" name="car-photo2" type="file" onchange="readURL3(this);">
                                        <img src="<?php echo $car['foto_2'] ?>" width="64" height="64" class="img-show2" id="img-show3" alt="">
                                    </div>
                                </div>
                            </div>
                            <div class="flex">
                                <div class="photo-flex">
                                    <div class="file-input mx-2 mt-4">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <input class="custom-file-input" name="car-photo3" type="file" onchange="readURL4(this);">
                                        <img src="<?php echo $car['foto_3'] ?>" width="64" height="64" class="img-show3" id="img-show4" alt="">
                                    </div>
                                    <div class="file-input mx-2 mt-4">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <input class="custom-file-input" name="car-photo4" type="file" onchange="readURL5(this);">
                                        <img src="<?php echo $car['foto_4'] ?>" width="64" height="64" class="img-show4" id="img-show5" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-6 pl-1">
                            <div class="flex">
                                <div class="photo-flex">
                                    <div class="file-input mx-2">
                                        <img src="" class="img-show4" id="img-show5" alt="">
                                        <hr class="hr-add">
                                        <hr class="vl">
                                        <input class="custom-file-input" name="car-video1" type="file" onchange="readURL6(this);">

                                        <video width="92%" height="100%" id="img-show6" class="img-show1" controls>
                                            <source src="<?php echo $car['video_1'] ?>" type="video/mp4">
                                            Sizning browseringiz videoni qo`llab quvvatlamaydi.
                                        </video>
                                       <!--  <img src="" class="img-show1" id="img-show6" alt=""> -->
                                    </div>
                                </div>
                            </div>
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