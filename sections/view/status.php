<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM status WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($status = mysqli_fetch_assoc($result)) {

?>
<div class="row">
            <!-- Holati-section -->
            <div class="col-12" data-toggle="collapse" data-target="#status">
                <div class="content-border-top">
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
                                             <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Statusi</p>
                                             <h5 class="view-user ml-3">
                                               <?php echo $status['status']; ?>
                                             </h5>
                                          </div>
                                          <div class="col-6 p-0">
                                              <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Qachondan</p>
                                             <h5 class="view-user ml-3">
                                               <?php echo $status['start_date']; ?>
                                             </h5>
                                          </div>
                                          <div class="col-6 p-0">
                                              <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Qachongacha</p>
                                             <h5 class="view-user ml-3">
                                               <?php echo $status['stop_date']; ?>
                                             </h5>
                                          </div>
                                          <div class="col-12 p-0">
                                              <p class="user-info-titles wd39 content-border m-0 p-0 pb-2 ml-3">Summasi</p>
                                             <h5 class="view-user ml-3 mt-2">
                                               <?php echo $status['price']; ?>
                                             </h5>
                                          </div>
                                          <div class="col-12 mt-2 mb-3 px-0">
                                              <p class="user-info-titles wd89 content-border m-0 p-0 pb-2 ml-3">Komment</p>
                                             <h5 class="view-user ml-3 mt-1">
                                               <?php echo $status['comment']; ?>
                                             </h5>
                                          </div>
                                           
                               
                               
                               
                                      </div>
                                      <!-- end row -->
                                          </div>
                                      <!-- end col-12 -->

                                               </div>


                                               <div class="col-12 mb-2 px-2 mt-3 bg-history">
                            <div class="content-border">
                              <div class="content-border-top content-border">
                                <button class="btn-nav user-info-titles m-0 py-1" data-toggle="collapse" data-target="#persons-history">Statuslar tarixi</button>
                                <i class="fas fa-caret-down float-right mt-2 colorrgba59"></i>
                              </div>
                            

                                <div id="persons-history" class="collapse m-0">
                                  
                                <div class="row pl-3">
                                    <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Status</p>
                                    <h5 class="view-user">Motor</h5>
                                    <h5 class="view-user">Xodovoy</h5>
                                    <h5 class="view-user">Kuzov</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Sana</p>
                                    <h5 class="view-user">03/01/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Summasi</p>
                                    <h5 class="view-user">15 780 000 so`m</h5>
                                    <h5 class="view-user">5 780 000 so`m</h5>
                                    <h5 class="view-user">7 780 000 so`m</h5>
                                  </div>
                                </div>
                          <!-- end Ishonchnoma -->
                        </div></div>

                        </div>

                                               <!-- end collapse-->
                                           </div>
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->
<?php } ?>
