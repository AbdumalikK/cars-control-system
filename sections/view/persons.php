   <?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM persons WHERE id = $id";
    $result = mysqli_query($connect, $sql);
}

while ($persons = mysqli_fetch_assoc($result)) {

?>
    <div class="row">
            <!-- Shaxslar-section -->
            <div class="col-12" data-toggle="collapse" data-target="#person">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Shaxslar</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->
		
            <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="person" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12 mb-2">
                               
                                <!-- row contenti -->
                                <div class="row">
                                    <div class="col-12 px-0">

                                     <div class="content-border mb-2">
                                          <div class="row mb-2">
                                               <div class="col-6">
                                            <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Haydovchi</p>
                                            <h5 class="view-user ml-3">
                                    <?php echo $persons['driver_name'], ' ', $persons['driver_surname'], ' ', $persons['driver_fathername']; ?>
                                            </h5>
                                             <div class="wrap">
                                                <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Berilgan sanasi</p>
                                                <h5 class="view-user ml-3">
                                    <?php echo $persons['d_given_date']; ?>
                                                </h5>
                                             </div>
                                                 
                                             </div>
                                             
                                             <div class="col-3 px-0">
                                             <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Telefon 1</p>
                                             <h5 class="view-user ml-3">
                                    <?php echo $persons['d_phone_1']; ?>
                                             </h5>
                                             <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Telefon 2</p>
                                             <h5 class="view-user ml-3">
                                    <?php echo $persons['d_phone_2']; ?>
                                             </h5>
                                             </div>
                                             
                                             <div class="col-3">
                                    <?php if ($persons['foto_1']) { ?>
                                                 <div class="file-input mt-4">
                                                   <hr class="hr-add">
                                                   <hr class="vl">
                                                   <a href="<?php echo $persons['foto_1'];?>" download>
                                                   <img src="<?php echo $persons['foto_1'];?>" width="64" height="64" class="img-person1 top-21" id="img-show" alt="">
                                                   <span class="img-download">
                                                   <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                   </span>
                                                   </a>
                                             </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                             </div>
                                         </div>
                                     </div>

                                          <div class="row">
                                            <div class="col-6">
                                         <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Javobgar shaxs</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $persons['respons_name'], ' ', $persons['respons_surname'], ' ', $persons['respons_fathername']; ?>
                                        </h5>
                                          <div class="wrap">
                                             <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Berilgan sanasi</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $persons['r_given_date']; ?>
                                        </h5>
                                          </div>
                                              
                                          </div>
                                          
                                          <div class="col-3 px-0">
                                          <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Telefon 1</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $persons['r_phone_1']; ?>
                                        </h5>
                                          <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Telefon 2</p>
                                        <h5 class="view-user ml-3">
                                    <?php echo $persons['r_phone_2']; ?>
                                        </h5>
                                          </div>
                                          
                                          <div class="col-3">
                                    <?php if ($persons['foto_2']) { ?>
                                              <div class="file-input mt-4">
                                                <hr class="hr-add">
                                                <hr class="vl">
                                                <a href="<?php echo $persons['foto_2'];?>" download>
                                                <img src="<?php echo $persons['foto_2'];?>" width="64" height="64" class="img-person2" id="img-show1" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                                          </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>

                                          </div>
                                      </div>
                                </div>

                                   
                                </div>
                                <!-- end row -->
                        </div>
                    </div>
                    <!-- end col-12 -->

                        <div class="col-12 mb-2 px-2 mt-3 bg-history">
                            <div class="content-border">
                              <div class="content-border-top content-border">
                                <button class="btn-nav user-info-titles m-0 py-1" data-toggle="collapse" data-target="#persons-history">Shaxslar tarixi</button>
                                <i class="fas fa-caret-down float-right mt-2 colorrgba59"></i>
                              </div>
                            

                                <div id="persons-history" class="collapse m-0">
                                  
                                <div class="row pl-3">
                                    <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">F.I.SH.</p>
                                    <h5 class="view-user">Marat Muminov</h5>
                                    <h5 class="view-user">Azamat Ochilov</h5>
                                    <h5 class="view-user">Behruz Shamsiddinov</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Sana</p>
                                    <h5 class="view-user">03/01/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                    <h5 class="view-user">02/02/2020</h5>
                                  </div>
                                  <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Lavozimi</p>
                                    <h5 class="view-user">Haydovchi</h5>
                                    <h5 class="view-user">Javobgar</h5>
                                    <h5 class="view-user">Haydovchi</h5>
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
