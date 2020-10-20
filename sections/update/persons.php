<?php 
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM persons WHERE id = $id";
    $result = mysqli_query($connect, $sql);

    // if(count($result) == 1){
    //     $n = mysqli_fetch_array($result);
    //     $
    // }
}

while ($person = mysqli_fetch_assoc($result)) {

?>
<input type="hidden" name="id" value="<?php echo $id; ?>">

       <div class="row">
            <!-- Shaxslar-section -->
            <div class="col-12" data-toggle="collapse" data-target="#person">
                <div class="content-border content-border-top">
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
                                             <input class="choose-option-add" value="<?php echo $person['driver_name'] ?>" name="person_name" placeholder="Haydovchi ismi" id="marka" required>
                                             <input class="choose-option-add mt-3" value="<?php echo $person['driver_surname'] ?>" name="person_fathername " placeholder="Otasining ismi" id="marka" required>
                                             <div class="wrap">
                                                 <span class="add-date-second bottom30">DD/MM/YYYY</span>
                                                 <input type="text" value="<?php echo $person['d_given_date'] ?>" name="person_given_date" class="choose-option-add mt-3" placeholder="Berilgan sanasi" required>
                                             </div>
                                                 
                                             </div>
                                             
                                             <div class="col-4">
                                              <input class="choose-option-add" value="<?php echo $person['driver_surname'] ?>" name="person_surname" placeholder="Familiya" id="marka" required>
                                             <input type="text" value="<?php echo $person['d_phone_1'] ?>" name="person_tel1" class="choose-option-add mt-3" placeholder="Telefon 1" required>
                                             <input type="text" value="<?php echo $person['d_phone_2'] ?>" name="person_tel2" class="choose-option-add mt-3" placeholder="Telefon 2">
                                             </div>
                                             
                                             <div class="col-2">
                                                 <div class="file-input">
                                                   <hr class="hr-add">
                                                   <hr class="vl">
                                                   <input class="custom-file-input" name="person_photo" type="file" onchange="readURL(this);">
                                                   <img src="<?php echo $person['foto_1'] ?>" class="top-0" id="img-show" alt="">
                                             </div>
                                                 
                                             </div>
                                         </div>
                                     </div>

                                          <div class="row">
                                            <div class="col-6">
                                        <input class="choose-option-add" value="<?php echo $person['response_name'] ?>" name="respons_name" placeholder="Javobgar shaxs ismi" id="marka" required>
                                         <input class="choose-option-add mt-3" <?php echo $person['response_fathername'] ?> name="respons_fathername" placeholder="Otasining ismi" id="marka" required>
                                          <div class="wrap">
                                              <span class="add-date-second bottom30">DD/MM/YYYY</span>
                                              <input type="text" <?php echo $person['r_given_date'] ?> name="respons_given_date" class="choose-option-add mt-3" placeholder="Berilgan sanasi" required>
                                          </div>
                                              
                                          </div>
                                          
                                          <div class="col-4">
                                          <input class="choose-option-add" <?php echo $person['response_surname'] ?> name="respons_surname" placeholder="Familiya" id="marka" required>
                                          <input type="text" <?php echo $person['r_phone_1'] ?> name="respons_tel1" class="choose-option-add mt-3" placeholder="Telefon 1" required>
                                          <input type="text" <?php echo $person['r_phone_2'] ?> name="respons_tel2" class="choose-option-add mt-3" placeholder="Telefon 2">
                                          </div>
                                          
                                          <div class="col-2">
                                              <div class="file-input mt-1">
                                                <hr class="hr-add">
                                                <hr class="vl">
                                                <input class="custom-file-input" name="respons_photo" type="file" onchange="readURL1(this);">
                                                <img src="<?php echo $person['foto_2'] ?>" class="top-0" id="img-show1" alt="">
                                          </div>
                                              
                                          </div>
                                      </div>
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