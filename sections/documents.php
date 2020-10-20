<div class="row">
            <!-- Hujjatlar-section -->
            <div class="col-12" data-toggle="collapse" data-target="#documents">
                <div class="content-border content-border-top">
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
                                        <input type="text" name="doc-owner-name" class="choose-option-add mt-4 mb-2" placeholder="Ismi" required>
                                        <input type="text" name="doc-owner-fathername" class="choose-option-add mt-2 mb-2" placeholder="Otasining ismi" required>

                                    	<span class="add-date mb-2">DD/MM/YYYY</span>
                                        <input type="date" name="doc-date" class="choose-option-add mt-2 mb-2" placeholder="Egalik huquqi sanasi" required>
                                    </div>
                                    <div class="col-6 px-0">
                                        <input type="text" name="doc-owner-surname" class="choose-option-add mt-4 mb-2" placeholder="familiyasi" required>


                                        <div class="flex">
                                            <div class="photo-flex mt-2">
                                                <div class="file-input mx-2">
                                                    <hr class="hr-add">
                                                    <hr class="vl">
                                                     <input class="custom-file-input" name="doc-photo1" type="file" onchange="readURL10(this);">
                                                     <img src="" class="img-show1 left-7 top-80" id="img-show10" alt="">
                                                </div>
                                                <div class="file-input mx-2">
                                                    <hr class="hr-add">
                                                    <hr class="vl">
                                                    <input class="custom-file-input" name="doc-photo2" type="file" onchange="readURL11(this);">
                                                    <img src="" class="img-show2 left-85 top-80" id="img-show11" alt="">
                                                </div>
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
                          	    	 <input type="text" name="tex_passport" class="choose-option-add" placeholder="Tex passporti" required>
                                    <span class="add-date">DD/MM/YYYY</span>
                          	        <input type="date" name="tex_date" class="choose-option-add mt-4" placeholder="Egalik huquqi sanasi" required>
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex">
                          	            <div class="photo-flex">
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="tex_photo1" type="file" onchange="readURL12(this);">
                                                <img src="" class="img-show1 left-7" id="img-show12" alt="">
                          	                </div>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="tex_photo2" type="file" onchange="readURL13(this);">
                                                <img src="" class="img-show2 left-85" id="img-show13" alt="">
                          	                </div>
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
                          	    	<select class="choose-option-add" name="insurance_type" id="marka" required>
                                            <option value="Tanlanmadi" name="insurance_type" selected>Sug`urta turi</option>
                                             <?php
                                              $sql = "SELECT * FROM documents";
                                              $results = mysqli_query($connect, $sql);

                                              while ($rows = $results->fetch_assoc())
                                              {
                                                  echo '<option value='.$rows['insurance_type'].'>'.$rows['insurance_type'].'</option>';
                                              }
                                              ?>
                                    </select>
                                    	<span class="add-date pt-1">DD/MM/YYYY</span>
                                    	<input type="date" name="insurance_expire_date" class="choose-option-add mt-4" placeholder="Sug`urta muddati" required>
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex">
                          	            <div class="photo-flex">
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="insurance_photo1" type="file" onchange="readURL14(this);">
                                                <img src="" class="img-show1 left-7" id="img-show14" alt="">
                          	                </div>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="insurance_photo2" type="file" onchange="readURL15(this);">
                                                <img src="" class="img-show2 left-85" id="img-show15" alt="">
                          	                </div>
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
                          	    	<select class="choose-option-add" name="gas_akt" id="marka">
                                            <option value="Tanlanmadi" selected>Gaz akti</option>
                                              <?php
                                        $sql = "SELECT * FROM documents";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['gas_akt'].'>'.$rows['gas_akt'].'</option>';
                                        }
                                        ?>
                                    </select>
                                    	<span class="add-date pt-1">DD/MM/YYYY</span>
                                    	<input type="date" name="gas_check_date" class="choose-option-add mt-4" placeholder="Qayta tekshiruv muddati">
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex">
                          	            <div class="photo-flex">
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="gas_photo1" type="file" onchange="readURL16(this);">
                                                <img src="" class="img-show1 left-7" id="img-show16" alt="">
                          	                </div>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="gas_photo2" type="file" onchange="readURL17(this);">
                                                <img src="" class="img-show2 left-85" id="img-show17" alt="">
                          	                </div>
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
                          	    		<input type="text" name="rental_deal_number" class="choose-option-add mt-4" placeholder="Ijara shartnomasi raqami">
                                    	<span class="add-date pt-1">DD/MM/YYYY</span>
                                    	<input type="date" name="rental_expire_date" class="choose-option-add mt-4" placeholder="Ijara shartnomasi muddati">
                          	    </div>
                          	    <div class="col-6 px-0">
                          	        <div class="flex">
                          	            <div class="photo-flex">
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="rent_photo1" type="file" onchange="readURL18(this);">
                                                <img src="" class="img-show1 left-7" id="img-show18" alt="">
                          	                </div>
                          	                <div class="file-input mx-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="rent_photo2" type="file" onchange="readURL19(this);">
                                                <img src="" class="img-show2 left-85" id="img-show19" alt="">
                          	                </div>
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
                                    	<input type="text" name="warrant_name" class="choose-option-add" placeholder="Ismi">
                                      <input type="text" name="warrant_fathername" class="choose-option-add mt-3" placeholder="Otasining ismi">
                          	    	      <select class="choose-option-add mt-3" name="warrant_type" id="marka">
                                            <option value="Tanlanmadi" selected>Ishonchnoma turi</option>
                                                 <?php
                                        $sql = "SELECT * FROM documents";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['trust_type'].'>'.$rows['trust_type'].'</option>';
                                        }
                                        ?>
                                          </select>
                                    	<span class="add-date">DD/MM/YYYY</span>
                                    	<input type="date" name="warrant_expire_date" class="choose-option-add mt-3" placeholder="Ishonchnoma muddati">
                          	    </div>
                          	    <div class="col-6 px-0 mt-1">
                                  <input type="text" name="warrant_surname" class="choose-option-add" placeholder="Familiyasi"><br>
                  								<div class="col-6 p-0 m-0 mt-2">
                                      <button class="btn btn-add-red">x</button>
                                    <button class="btn btn-add-green">+</button>
                                  </div>

                          	        <div class="flex mt-2">
                          	            <div class="photo-flex">
                          	                <div class="file-input m-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="warrant_photo1" type="file" onchange="readURL20(this);">
                                                <img src="" class="img-show3 left-7 top-77" id="img-show20" alt="">
                          	                </div>
                          	                <div class="file-input m-2">
                          	                    <hr class="hr-add">
                          	                    <hr class="vl">
                          	                    <input class="custom-file-input" name="warrant_photo2" type="file" onchange="readURL21(this);">
                                                <img src="" class="img-show4 left-85 top-77" id="img-show21" alt="">
                          	                </div>
                          	            </div>
                          	        </div>
                          	</div>
                          	<!-- end row -->
                          </div>
                          <!-- end Ishonchnoma -->
                        </div>
					
                    </div>
                    <!-- end col-12 -->
                </div>
                <!-- end collapse-->
            </div>
            <!-- end col-12 -->
        </div>
        <!-- end row -->