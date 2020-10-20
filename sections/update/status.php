 <?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM status WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($status = mysqli_fetch_assoc($result)) {

?>

  <div class="row">
            <!-- Holati-section -->
            <div class="col-12" data-toggle="collapse" data-target="#status">
                <div class="content-border content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Holati</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->

             <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="status" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                            <!-- collapse show -->
                                  <div class="col-12 mb-2">
                                      <!-- row contenti -->
                                      <div class="row">
                                          <div class="col-12 p-0">
                                              <p class="user-info-titles m-0 p-0 pb-2 ml-3">Holati</p>
                                              <input value="<?php echo $status['status'] ?>" class="choose-option-add wd100 mb-2" name="marka" id="marka">
                                          </div>
                                          <div class="col-6 p-0">
                                              <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Qachondan</p>
                                              <!-- <span class="add-date">DD/MM/YYYY</span> -->
                                              <input type="text" value="<?php echo $status['start_date'] ?>" class="choose-option-add" placeholder="Qachondan">
                                          </div>
                                          <div class="col-6 p-0">
                                              <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Qachongacha</p>
                                             <!-- <span class="add-date">DD/MM/YYYY</span> -->
                                              <input type="text" value="<?php echo $status['stop_date'] ?>" class="choose-option-add" placeholder="Qachongacha">
                                          </div>
                                          <div class="col-12 p-0">
                                              <p class="user-info-titles m-0 p-0 pb-2 ml-3 mt-2">Summasi</p>
                                              <input type="text" value="<?php echo $status['price'] ?>" class="choose-option-add mt-2 wd100" placeholder="Summasi">
                                          </div>
                                          <div class="col-12 mt-2 mb-3 px-0">
                                              <p class="user-info-titles m-0 p-0 pb-2 ml-3">Komment</p>
                                              <input class="choose-option-add-textarea content-border" type="textarea" value="<?php echo $status['comment'] ?>" placeholder="Komment">
                                          </div>
                                           
                               
                               
                               
                                      </div>
                                      <!-- end row -->
                                          </div>
                                      <!-- end col-12 -->

                                               </div>
                                               <!-- end collapse-->
                                           </div>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
    <?php } ?>