<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM region WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($region = mysqli_fetch_assoc($result)) {

?>
<input type="hidden" name="id" value="<?php echo $id; ?>">

<div class="row">
            <!-- Mintaqa-Tashkilot-section -->
            <div class="col-12" data-toggle="collapse" data-target="#companies">
                <div class="content-border content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Mintaqa / Tashkilot</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->


            <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="companies" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12">
                               
                                <!-- row contenti -->
                                <div class="row">
                                    <div class="col-6 px-0">
                                        <p class="user-info-titles m-0 p-0 pb-2 ml-3">Tashkilot</p>
                                        <select class="choose-option-add" name="prov_company" id="marka" required>
                                            <option value="<?php echo $region['corp'] ?>" selected><?php echo $region['corp'] ?></option>
                                           <?php
                                        $sql = "SELECT * FROM companies";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['company'].'>'.$rows['company'].'</option>';
                                        }
                                        ?>
                                        </select>
                                        <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Berilgan sanasi</p>
                                        <span class="add-date mb-2">DD/MM/YYYY</span>
                                    	<input type="text" value="<?php echo $region['given_date'] ?>" class="choose-option-add" placeholder="Berilgan sanasi">
                                    </div>
                                    <div class="col-6 px-0">
                                        <p class="user-info-titles m-0 p-0 pb-2 ml-4">Viloyat</p>
                                        <select class="choose-option-add mx-3" name="prov_region" id="marka" required>
                                            <option value="<?php echo $region['province'] ?>" selected><?php echo $region['province'] ?></option>
                                            <?php
                                        $sql = "SELECT * FROM provinces";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['province'].'>'.$rows['province'].'</option>';
                                        }
                                        ?>
                                        </select>
                                        <p class="user-info-titles m-0 p-0 pb-2 ml-4 mt-2">Shahar / Tuman</p>
                                        <input type="text" value="<?php echo $region['city'] ?>" class="choose-option-add mb-2 mx-3" placeholder="Shahar / Tuman">
                                    </div>
                                </div>
                                <!-- end row -->
                        </div>
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end collapse-->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->

<?php } ?>
