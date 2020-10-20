<div class="row">
            <!-- Mintaqa-Tashkilot-section -->
            <div class="col-12" data-toggle="collapse" data-target="#companies">
                <div class="content-border content-border-top">
                    <button class="btn-nav font-titillium-bd p-2">Mintaqa / Tashkilot</button>
                    <img class="float-right mt-3" src="../styles/icons/arrow.svg"></button>
                </div>
            </div>
            <!-- end -->


            <div class="col-12 m-0">
                <!-- start collapse -->
                <div id="companies" class="collapse m-0">
                    <div class="col-12 px-0 m-0">
                        <div class="col-10 offset-1 mt-2 mb-3">
                        </div>
                        <!-- collapse show -->
                        <div class="col-12">
                               
                                <!-- row contenti -->
                                <div class="row">
                                    <div class="col-6 px-0">
                                        <select class="choose-option-add" name="prov_company" id="marka" required>
                                            <option value="Tanlanmadi" selected>Tashkilot</option>
                                           <?php
                                        $sql = "SELECT * FROM companies";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['company'].'>'.$rows['company'].'</option>';
                                        }
                                        ?>
                                        </select>
                                        <span class="add-date mb-2">DD/MM/YYYY</span>
                                    	<input type="date" name="prov_given_date" class="choose-option-add mt-3" placeholder="Berilgan sanasi" required>
                                    </div>
                                    <div class="col-6 px-0">
                                        <select class="choose-option-add mx-3" name="prov_region" id="marka" required>
                                            <option value="Tanlanmadi" selected>Viloyat</option>
                                            <?php
                                        $sql = "SELECT * FROM provinces";
                                        $results = mysqli_query($connect, $sql);

                                        while ($rows = $results->fetch_assoc())
                                        {
                                            echo '<option value='.$rows['province'].'>'.$rows['province'].'</option>';
                                        }
                                        ?>
                                        </select>
                                        <input type="text" name="prov_city" class="choose-option-add mt-3 mb-2 mx-3" placeholder="Shahar / Tuman" required>
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

