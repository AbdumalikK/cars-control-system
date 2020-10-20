<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM region WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($region = mysqli_fetch_assoc($result)) {

?>

<div class="row">
            <!-- Mintaqa-Tashkilot-section -->
            <div class="col-12" data-toggle="collapse" data-target="#companies">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Mintaqa / Tashkilot</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg">
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
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Tashkilot</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $region['corp']; ?>
                                        </h5>
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Berilgan sanasi</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $region['given_date']; ?>
                                        </h5>
                                    </div>
                                    <div class="col-6 px-0">
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Viloyat</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $region['province']; ?>
                                        </h5>
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Shahar / Tuman</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $region['city']; ?>
                                        </h5>
                                    </div>
                                </div>
                                <!-- end row -->
                        </div>
                    </div>
                    <!-- end col-12 -->

            <div class="col-12 mb-2 px-2 mt-3 bg-history">
                            <div class="content-border">
                              <div class="content-border-top content-border">
                                <button class="btn-nav user-info-titles m-0 py-1" data-toggle="collapse" data-target="#companies-history">Mintaqa / Tashkilot tarixi</button>
                                <i class="fas fa-caret-down float-right mt-2 colorrgba59"></i>
                              </div>
                            

                                <div id="companies-history" class="collapse m-0">
                                  
                                <div class="row pl-3">
                                    <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Viloyat</p>
                                    <h5 class="view-user">Toshkent sh.</h5>
                                    <h5 class="view-user">Samarqand</h5>
                                    <h5 class="view-user">Farg`ona</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Sana</p>
                                    <h5 class="view-user">03/01/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Shaxs / Tashkilot</p>
                                    <h5 class="view-user">SofGigienik</h5>
                                    <h5 class="view-user">Dielux</h5>
                                    <h5 class="view-user">Marketing</h5>
                                  </div>
                                </div>
                          <!-- end Ishonchnoma -->
                        </div></div>

                        </div>

                </div>
                <!-- end collapse-->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
<?php } ?>
