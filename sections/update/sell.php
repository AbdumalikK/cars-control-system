 <?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM sale WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($sale = mysqli_fetch_assoc($result)) {

?>
<input type="hidden" name="id" value="<?php echo $id; ?>">

 <div class="row">
            <!-- Sotuv-section -->
            <div class="col-12" data-toggle="collapse" data-target="#sell">
                <div class="content-border content-border-top">
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
                                        <input type="text" value="<?php echo $sale['respons_name'] ?>" name="sale_respons_name" class="choose-option-add mx-1" placeholder="Javobgar ismi">
                                        <input type="text" value="<?php echo $sale['respons_fathername'] ?>" name="sale_respons_fathername" class="choose-option-add mt-3 mx-1" placeholder="Javobgar otasining ismi">
                                        <input type="text" value="<?php echo $sale['start_price'] ?>" name="sale_price" class="choose-option-add mt-3 mx-1" placeholder="Qo`yilgan narx">

                                        <span class="add-date">DD/MM/YYYY</span>
                                        <input type="text" value="<?php echo $sale['start_date'] ?>" name="sale_date" class="choose-option-add mt-3 mx-1" placeholder="Savdoga qo`yilgan sana">
                                    </div>
                                    <div class="col-6 px-0">
                                        <input type="text" value="<?php echo $sale['respons_surname'] ?>" name="sale_respons_surname" class="choose-option-add mx-3" placeholder="Javobgar familiyasi">
                                        <input type="text" value="<?php echo $sale['phone'] ?>" name="sale_phone" class="choose-option-add mt-3 mx-3" placeholder="Telefon 1">
                                        <input type="text" value="<?php echo $sale['sold_price'] ?>" name="sold_price" class="choose-option-add mt-3 mx-3" placeholder="Sotilgan narx">
                                        <span class="add-date">DD/MM/YYYY</span>
                                        <input type="text" value="<?php echo $sale['sold_date'] ?>" name="sold_date" class="choose-option-add mt-3 mx-3" placeholder="Sotilgan sana">
                                    </div>

                                    <div class="col-12 mt-3 px-0">
                                        <input class="choose-option-add-textarea" value="<?php echo $sale['comment'] ?>" type="textarea" name="sale_comment" placeholder="Komment">
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