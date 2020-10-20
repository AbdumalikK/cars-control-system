
<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM sale WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($sale = mysqli_fetch_assoc($result)) {

?>
 <div class="row">
            <!-- Sotuv-section -->
            <div class="col-12" data-toggle="collapse" data-target="#sell">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Sotuv</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->



             <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="sell" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12 mb-2">
                                <!-- row contenti -->
                                <div class="row">
                                    <div class="col-6 px-0">
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Javobgar</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $sale['response_name'], ' ', $sale['response_surname'], ' ', $sale['response_fathername']; ?>
                                        </h5>

                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Qo`yilgan narx</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $sale['start_price']; ?>
                                        </h5>
                                        
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Savdoga qo`yilgan sana</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $sale['start_date']; ?>
                                        </h5>
                                    </div>
                                    <div class="col-6 px-0">
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Telefon 1</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $sale['phone']; ?>
                                        </h5>
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Sotilgan narx</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $sale['sold_price']; ?>
                                        </h5>
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Sotilgan sana</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $sale['sold_date']; ?>
                                        </h5>
                                    </div>

                                    <div class="col-12 mt-3 px-0">
                                        <p class="user-info-titles wd89 content-border m-0 p-0 pb-2 ml-3 mt-3">Komment</p>
                                        <h5 class="view-user ml-3 mt-1">
                                    <?php echo $sale['comment']; ?>
                                        </h5>
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
