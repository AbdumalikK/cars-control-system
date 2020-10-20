<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM purchase WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($purchase = mysqli_fetch_assoc($result)) {

?>

<div class="row">
            <!-- Harid-section -->
            <div class="col-12" data-toggle="collapse" data-target="#purchase">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Harid</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->

            <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="purchase" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12 mb-2">
                                <!-- row contenti -->
                                <div class="row">
                                    <div class="col-6 px-0">
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Sotib olgan shaxs</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $purchase['buyer_name'], ' ', $purchase['buyer_surname'], ' ', $purchase['buyer_fathername']; ?>
                                        </h5>
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Harid qilingan sana</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $purchase['buy_date']; ?>
                                        </h5>
                                    </div>
                                    <div class="col-6 px-0">
                                       <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Telefon 1</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $purchase['phone']; ?>
                                        </h5>
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Narx</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $purchase['price']; ?>
                                        </h5>
                                    </div>

                                    <div class="col-12 mt-3 px-0">
                                        <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Komment</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $purchase['comment']; ?>
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
        