 <?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM fine WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($fine = mysqli_fetch_assoc($result)) {

?>
<input type="hidden" name="id" value="<?php echo $id; ?>">

 <div class="row">
            <!-- Sotuv-section -->
            <div class="col-12" data-toggle="collapse" data-target="#fine">
                <div class="content-border content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Jarima</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->



             <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="fine" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <div class="content-border">
                            <!-- collapse show -->
                            <div class="col-12 mb-2">
                                    <!-- row contenti -->
                                    <div class="row">
                                        <div class="col-10 px-0">
                                            <p class="user-info-titles m-0 p-0 pb-2 ml-3">Jarima turi</p>
                                            <input class="choose-option-add wd100" value="<?php echo $fine['fine_type'] ?>" name="marka" id="marka">
                                        </div>
                                        <div class="col-2 px-2">
                                            <button class="btn btn-add-green mt-4" data-toggle="collapse" data-target="#fine-add">+</button>
                                        </div>

                                        

                                              <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="fine-add" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <div class="content-border">
                            <!-- collapse show -->
                            <div class="col-12 mb-2">
                                    <!-- row contenti -->
                                    <div class="row">
                                        <div class="col-10 px-0">
                                            <h5>Jarima 2</h5>
                                            <select class="choose-option-add wd100" name="marka" id="marka">
                                               <p class="user-info-titles m-0 p-0 pb-2 ml-3">Jarima turi</p>
                                                <option value="hammasi" selected>Qizil chiroq</option>
                                                <option value="kaptiva">Kaptiva</option>
                                                <option value="kaptiva">Toyota</option>
                                            </select>
                                        </div>
                                        <div class="col-2 px-2">
                                            <button class="btn btn-add-green fine-top mb-date" data-toggle="collapse" data-target="#fine-add">+</button>
                                        </div>

                                        



                                        <div class="col-6 p-0">
                                            <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Qachondan</p>
                                            <!-- <span class="add-date">DD/MM/YYYY</span> -->
                                            <input type="text" class="choose-option-add" placeholder="Qachondan">
                                        </div>
                                           <div class="col-6 p-0">
                                                <p class="user-info-titles m-0 p-0 pb-2 ml-5 mt-2">Qachongacha</p>
                                                <!-- <span class="add-date">DD/MM/YYYY</span> -->
                                               <input type="text" class="choose-option-add mx-5" placeholder="Qachongacha">
                                           </div>

                                           <div class="col-12 p-0">
                                                <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Summasi</p>
                                               <input type="text" class="choose-option-add wd100" placeholder="Summasi">
                                           </div>
                            
                                        <div class="col-12 mt-3 mb-3 px-0">
                                            <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-0">Komment</p>
                                            <input class="choose-option-add-textarea" type="textarea" placeholder="Komment">
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                        </div>
                         <!-- end col-12 -->
                            
                                            </div>
                                            <!-- end collapse--></div>

            </div>
            <!-- end col-12 -->



                                        <div class="col-6 p-0">
                                            <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Qachondan</p>
                                            <!-- <span class="add-date">DD/MM/YYYY</span> -->
                                            <input type="text" value="<?php echo $fine['fine_start'] ?>" class="choose-option-add" placeholder="Qachondan">
                                        </div>
                                           <div class="col-6 p-0">
                                                <p class="user-info-titles m-0 p-0 pb-2 ml-5 mt-2">Qachongacha</p>
                                                <!-- <span class="add-date">DD/MM/YYYY</span> -->
                                               <input type="text" value="<?php echo $fine['fine_stop'] ?>" class="choose-option-add mx-5" placeholder="Qachongacha">
                                           </div>

                                           <div class="col-12 p-0">
                                                <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Summasi</p>
                                               <input type="text" value="<?php echo $fine['fine_price'] ?>" class="choose-option-add wd100" placeholder="Summasi">
                                           </div>
                            
                                        <div class="col-12 mt-3 mb-3 px-0">
                                            <p class="user-info-titles m-0 p-0 pb-2 ml-3">Komment</p>
                                            <input class="choose-option-add-textarea" value="<?php echo $fine['fine_comment'] ?>" type="textarea" placeholder="Komment">
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                        </div>
                         <!-- end col-12 -->
                            
                                                   <!-- Sell and Purchase -->
                                                   <div class="col-12 p-0 text-center">
                                                    <div class="row">
                                                       <div class="col-6 mt-3">
                                                           <label class="switch btn-sell">
                                                            <input type="radio" name="sts_sell" value="Sotuv">
                                                              <p class="btn-sell-title">Sotuv</p>
                                                              <span class="btn-sell-img">
                                                                <img id="bg-sell" src="../styles/icons/sell-icon-blue.svg" alt="">
                                                                <!-- <div id="bg-sell-bg"></div> -->
                                                              </span>
                                                            </label>
                                                       </div>
                                                       <div class="col-6 mt-3">
                                                           <label class="switch btn-purchase">
                                                            <input type="radio" name="sts_sell" value="Harid" class="d-blo">
                                                            <p class="btn-purchase-title">Harid</p>
                                                            <span class="btn-purchase-img">
                                                              <img id="bg-purchase" src="../styles/icons/purchase-icon-blue.svg" alt="">
                                                            </span>
                                                           </label>
                                                       </div>
                                                   </div>
                                               </div>
                            
                                                    <!-- end sell and purchase -->
                            
                                            </div>
                                            <!-- end collapse--></div>

            </div>
            <!-- end col-12 -->


        </div>
        <!-- end row -->

    </div>
                                               
    <?php } ?>