<?php 
if (isset($_GET['id'])) {
  $id = $_GET['id'];
  $sql = "SELECT * FROM documents WHERE id = $id";
  $result = mysqli_query($connect, $sql);
}

while ($documents = mysqli_fetch_assoc($result)) {

?>

<div class="row">
            <!-- Hujjatlar-section -->
            <div class="col-12" data-toggle="collapse" data-target="#documents">
                <div class="content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Hujjatlar</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->
            <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="documents" class="collapse m-0">
                    <div class="col-12 px-0 m-0 p-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12">
                            <div class="content-border">
                                <div class="content-border my-2">
                                    <p class="mb-2 color-add-doc">Egalik huquqi</p>
                                </div>




                                <!-- Egalik huquqi contenti -->
                                <div class="row">
                                    <div class="col-6 px-0">
                                    <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Egalik huquqi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $documents['owner_name'], ' ', $documents['owner_surname'], $documents['owner_fathername']; ?>
                                   </h5>
                                    <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Egalik huquqi sanasi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $documents['owner_date']; ?>
                                   </h5>
                                    </div>
                                    <div class="col-6 px-0 mt-3">
                                        <div class="flex">
                                            <div class="photo-flex">
                                <?php if ($documents['foto_1']) { ?>
                                                <div class="file-input mx-2">
                                                    <hr class="hr-add">
                                                    <hr class="vl">
                                                       <a href="<?php echo $documents['foto_1'];?>" download>
                                                       <img src="<?php echo $documents['foto_1'];?>" width="64" height="64" class="img-show1 left-7" id="img-show10" alt="">
                                                       <span class="img-download">
                                                       <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                       </span>
                                                       </a>
                                                </div>
                                <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                <?php if ($documents['foto_2']) { ?>
                                                <div class="file-input mx-2">
                                                    <hr class="hr-add">
                                                    <hr class="vl">
                                                    <a href="<?php echo $documents['foto_2'];?>" download>
                                                    <img src="<?php echo $documents['foto_2'];?>" width="64" height="64" class="img-show2 left-85" id="img-show11" alt="">
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
                        <!-- end collapse show-->
                        <!-- Tex.Pasport -->
                        <div class="col-12 mb-2">
                          <div class="content-border mt-2">  
                          	<div class="content-border mb-2">
                          	    <p class="my-2 color-add-doc">Tex.Pasport</p>
                          	</div>
                          	<!-- Tex.Pasport contenti -->
                          	<div class="row mb-2">
                          	    <div class="col-6 px-0">

                                   <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Tex. Pas. muddati</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $documents['tex_pass_date']; ?>
                                   </h5>
                                    
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex">
                          	            <div class="photo-flex">
                                <?php if ($documents['foto_3']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <a href="<?php echo $documents['foto_3'];?>" download>
                                                <img src="<?php echo $documents['foto_3'];?>" class="img-show1 left-7" id="img-show12" width="64" height="64" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                          	                </div>
                                <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                <?php if ($documents['foto_4']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <a href="<?php echo $documents['foto_4'];?>" download>
                                                <img src="<?php echo $documents['foto_4'];?>" width="64" height="64" class="img-show2 left-85" id="img-show13" alt="">
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
                          <!-- end tex.pasport -->
                        </div>

                        <!-- Sug`urta -->
                        <div class="col-12 mb-2">
                          <div class="content-border mt-2">  
                          	<div class="content-border mb-2">
                          	    <p class="my-2 color-add-doc">Sug`urta</p>
                          	</div>
                          	<!-- Sug`urta contenti -->
                          	<div class="row mb-2">
                          	    <div class="col-6 px-0">
                                    <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Sug`urta turi</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $documents['insurance_type']; ?>
                                   </h5>
                          	    	
                                    <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Sug`urta muddati</p>
                                   <h5 class="view-user ml-3">
                                    <?php echo $documents['ins_date']; ?>
                                   </h5>
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex mt-4">
                          	            <div class="photo-flex">
                                    <?php if ($documents['foto_5']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                                                <a href="<?php echo $documents['foto_5'];?>" download>
                                                <img src="<?php echo $documents['foto_5'];?>" width="64" height="64" class="img-show1 left-7" id="img-show14" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                          	                </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                    <?php if ($documents['foto_6']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                                                <a href="<?php echo $documents['foto_6'];?>" download>
                                                <img src="<?php echo $documents['foto_6'];?>" width="64" height="64" class="img-show2 left-85" id="img-show15" alt="">
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
                          <!-- end sug`urta -->
                        </div>

						
						<!-- Gaz akti -->
                        <div class="col-12 mb-2">
                          <div class="content-border mt-2">  
                          	<div class="content-border mb-2">
                          	    <p class="my-2 color-add-doc">Gaz akti</p>
                          	</div>
                          	<!-- Gaz akti contenti -->
                          	<div class="row mb-2">
                          	    <div class="col-6 px-0">
                                  <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Gaz akti</p>
                                  <h5 class="view-user ml-3">
                                    <?php echo $documents['gas_akt']; ?>
                                  </h5>
                                  <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Qayta tekshiruv muddati</p>
                                  <h5 class="view-user ml-3">
                                    <?php echo $documents['gas_date']; ?>
                                  </h5>
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex mt-4">
                          	            <div class="photo-flex">
                                    <?php if ($documents['foto_7']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <a href="<?php echo $documents['foto_7'];?>" download>
                                                <img src="<?php echo $documents['foto_7'];?>" width="64" height="64" class="img-show1 left-7 top-21" id="img-show16" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                          	                </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                    <?php if ($documents['foto_8']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                                                <a href="<?php echo $documents['foto_8'];?>" download>
                                                <img src="<?php echo $documents['foto_8'];?>" width="64" height="64" class="img-show2 left-85" id="img-show17" alt="">
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
                          <!-- end Gaz akti -->
                        </div>
						

						<!-- Ijara shartnomasi -->
                        <div class="col-12 mb-2">
                          <div class="content-border mt-2">  
                          	<div class="content-border mb-2">
                          	    <p class="my-2 color-add-doc">Ijara shartnomasi</p>
                          	</div>
                          	<!-- Ijara shartnomasi contenti -->
                          	<div class="row mb-2">
                          	    <div class="col-6 px-0">
                                      <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Ijara shartnomasi raqami</p>
                                      <h5 class="view-user ml-3">
                                    <?php echo $documents['renta']; ?>
                                      </h5>
                                      <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Ijara shartnomasi muddati</p>
                                      <h5 class="view-user ml-3">
                                    <?php echo $documents['renta_date']; ?>
                                      </h5>
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex mt-4">
                          	            <div class="photo-flex">
                                    <?php if ($documents['foto_9']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                                                <a href="<?php echo $documents['foto_9'];?>" download>
                                                <img src="<?php echo $documents['foto_9'];?>" width="64" height="64" class="img-show1 left-7" id="img-show18" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                          	                </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                    <?php if ($documents['foto_10']) { ?>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                                                <a href="<?php echo $documents['foto_10'];?>" download>
                                                <img src="<?php echo $documents['foto_10'];?>" width="64" height="64" class="img-show2 left-85" id="img-show19" alt="">
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
                          <!-- end Ijara shartnomasi -->
                        </div>


                        <!-- Ishonchnoma -->
                        <div class="col-12 mb-2">
                          	<div class="content-border mb-2">
                          	    <p class="my-2 color-add-doc">Ishonchnoma</p>
                          	</div>
                          	<!-- Ishonchnoma contenti -->
                          	<div class="row mb-2">
                          	    <div class="col-6 px-0">
                                      <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3">Ishonchnoma oluvchi</p>
                                      <h5 class="view-user ml-3">
                                    <?php echo $documents['trust_name'], ' ', $documents['trust_surname'], ' ', $documents['trust_fathername']; ?>
                                      </h5>
                                      <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Ishonchnoma turi</p>
                                      <h5 class="view-user ml-3">
                                    <?php echo $documents['trust_type']; ?>
                                      </h5>
                                      <p class="user-info-titles wd78 content-border m-0 p-0 pb-2 ml-3 mt-3">Ishonchnoma muddati</p>
                                      <h5 class="view-user ml-3">
                                    <?php echo $documents['trust_date']; ?>
                                      </h5>
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex mt-5">
                          	            <div class="photo-flex">
                                    <?php if ($documents['foto_11']) { ?>
                          	                <div class="file-input m-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <a href="<?php echo $documents['foto_11'];?>" download>
                                                <img src="<?php echo $documents['foto_11'];?>" width="64" height="64" class="img-show3 left-7 top-77" id="img-show20" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                          	                </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                                    <?php if ($documents['foto_12']) { ?>
                          	                <div class="file-input m-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <a href="<?php echo $documents['foto_12'];?>" download>
                                                <img src="<?php echo $documents['foto_12'];?>" width="64" height="64" class="img-show4 left-85 top-77" id="img-show21" alt="">
                                                <span class="img-download">
                                                <img class="img-down-icon" src="../../styles/icons/download.svg" alt="">
                                                </span>
                                                </a>
                          	                </div>
                                    <?php } else { echo '<div class="pl-3">Rasm yo`q</div>'; }  ?>
                          	            </div>
                          	        </div>
                          	</div>

                            <div class="col-12 mb-2 px-2 mt-3 bg-history">
                            <div class="content-border">
                              <div class="content-border-top content-border">
                                <button class="btn-nav user-info-titles m-0 py-1" data-toggle="collapse" data-target="#documents-history">Hujjatlar tarixi</button>
                                <i class="fas fa-caret-down float-right mt-2 colorrgba59"></i>
                              </div>
                            

                                <div id="documents-history" class="collapse m-0">
                                  
                                <div class="row pl-3">
                                    <div class="col-4 pl-0">
                                    <p class="user-info-titles wd78 m-0 p-0 py-1">Hujjat turi</p>
                                    <h5 class="view-user">Ijara shartnomasi</h5>
                                    <h5 class="view-user">Ijara shartnomasi</h5>
                                    <h5 class="view-user">Ijara shartnomasi</h5>
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
                                    <h5 class="view-user">Aziz Qurbonov</h5>
                                    <h5 class="view-user">Bekzot Begimov</h5>
                                  </div>
                                </div>
                          <!-- end Ishonchnoma -->
                        </div></div>

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