<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM purchase WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($purchase = mysqli_fetch_assoc($result)) {

?>
<input type="hidden" name="id" value="<?php echo $id; ?>">

<div class="row">
            <!-- Harid-section -->
            <div class="col-12" data-toggle="collapse" data-target="#purchase">
                <div class="content-border content-border-top">
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
                                        <input type="text" value="<?php echo $purchase['buyer_name'] ?>" name="purchase_name" class="choose-option-add mx-1" placeholder="Sotib oluvchi ismi">
                                        <input type="text" value="<?php echo $purchase['buyer_fathername'] ?>" name="purchase_fathername" class="choose-option-add mx-1 mt-3" placeholder="Sotib oluvchi otasining ismi">
                                        <span class="add-date">DD/MM/YYYY</span>
                                        <input type="text" value="<?php echo $purchase['buy_date'] ?>" name="purchase_date" class="choose-option-add mt-3 mx-1" placeholder="Harid qilingan sana">
                                    </div>
                                    <div class="col-6 px-0">
                                        <input type="text" value="<?php echo $purchase['buyer_surname'] ?>" name="purchase_surname" class="choose-option-add mx-3" placeholder="Sotib oluvchi familiyasi">
                                        <input type="text" value="<?php echo $purchase['phone'] ?>" name="purchase_tel" class="choose-option-add mx-3 mt-3" placeholder="Telefon">
                                        <input type="text" value="<?php echo $purchase['price'] ?>" name="purchase_price" class="choose-option-add mt-3 mx-3" placeholder="Narx">
                                    </div>

                                    <div class="col-12 mt-3 px-0">
                                        <input class="choose-option-add-textarea" name="purchase_comment" value="<?php echo $purchase['comment'] ?>" type="textarea" placeholder="Komment">
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