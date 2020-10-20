<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM fine WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($fine = mysqli_fetch_assoc($result)) {

?>
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
                            <div class="col-12">
                                    <!-- row contenti -->
                                    <div class="row">
                                        <div class="col-12 px-0">
                                           <p class="user-info-titles wd89 content-border m-0 p-0 pb-2 ml-3">Jarima turi</p>
                                           <h5 class="view-user ml-3">
                                             <?php echo $fine['fine_type']; ?>
                                           </h5>
                                        </div>


                                        <div class="col-6 p-0">
                                           <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Qachondan</p>
                                           <h5 class="view-user ml-3">
                                             <?php echo $fine['fine_start']; ?>
                                           </h5>
                                        </div>
                                           <div class="col-6 p-0">
                                                <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Qachongacha</p>
                                           <h5 class="view-user ml-3">
                                             <?php echo $fine['fine_stop']; ?>
                                           </h5>
                                           </div>

                                           <div class="col-12 p-0">
                                               <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Summasi</p>
                                           <h5 class="view-user ml-3 mb-0">
                                              <?php echo $fine['fine_price']; ?>
                                           </h5>
                                           </div>
                            
                                        <div class="col-12 mt-3 mb-2 px-0">
                                           <p class="user-info-titles wd89 content-border m-0 p-0 pb-2 ml-3">Komment</p>
                                           <h5 class="view-user ml-3 mt-1">
                                             <?php echo $fine['fine_comment']; ?>
                                           </h5>
                                        </div>
                                    </div>
                                    <!-- end row -->
                            </div>
                                          <div class="col-12 mb-3 px-2 bg-history">
                            <div class="content-border">
                              <div class="content-border-top content-border">
                                <button class="btn-nav user-info-titles m-0 py-1" data-toggle="collapse" data-target="#fine-history">Jarimalar tarixi</button>
                                <i class="fas fa-caret-down float-right mt-2 colorrgba59"></i>
                              </div>
                            

                                <div id="fine-history" class="collapse m-0">
                                  
                                <div class="row pl-3">
                                    <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Jarima turi</p>
                                    <h5 class="view-user">Qizil chiziq</h5>
                                    <h5 class="view-user">Qizil chiziq</h5>
                                    <h5 class="view-user">Qizil chiziq</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Sana</p>
                                    <h5 class="view-user">03/01/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Summasi</p>
                                    <h5 class="view-user">780 000 so`m</h5>
                                    <h5 class="view-user">780 000 so`m</h5>
                                    <h5 class="view-user">780 000 so`m</h5>
                                  </div>
                                </div>
                          <!-- end Ishonchnoma -->
                        </div></div>

                        </div>


                        </div>
                         <!-- end col-12 -->
                            
                                                  <!-- <div class="row">
                                                    <div class="col-3">
                                                      <button class="btn btn-docs" onclick="getPDF()" id=""><img src="../../styles/icons/pdf.svg" alt=""></button>
                                                    </div>
                                                    <div class="col-3">
                                                      <button class="btn btn-docs" onclick="downloadimage()"><img src="../../styles/icons/doc.svg" alt=""></button>
                                                    </div>
                                                    <div class="col-3">
                                                      <button class="btn btn-docs" id=""><img src="../../styles/icons/exl.svg" alt=""></button>
                                                    </div>
                                                    <div class="col-3">
                                                      <button class="btn btn-docs" id=""><img src="../../styles/icons/jpg.svg" alt=""></button>
                                                    </div>
                                                  </div> -->


                                               <div class="col-12 p-0">
                                                   <button class="btn btn-save mt-3">Tuzatish</button>
                                               </div>
                            
                                            </div>
                                            <!-- end collapse-->
                                          </div>
            </div>
            <!-- end col-12 -->


        </div>
        <!-- end row -->

    </div>

</div>


</div>
<?php } ?>
