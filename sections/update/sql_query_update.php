<?php
if (isset($_POST['update'])) { 
$id = $_POST['id'];
// car
$car_mark = $_POST['car-mark'];
$car_carcase = $_POST['car-carcase'];
$car_fuel = $_POST['car-fuel'];
$car_number = $_POST['car-number'];
$car_model = $_POST['car-model'];
$car_manufacture_year = $_POST['car-manufacture'];
$car_engine = $_POST['car-engine'];
// $car_number = $_POST['car-number'];
$car_gps = $_POST['car-gps'];
$car_photo1 = $_POST['car-photo1'];
$car_photo2 = $_POST['car-photo2'];
$car_photo3 = $_POST['car-photo3'];
$car_photo4 = $_POST['car-photo4'];
$car_video1 = $_POST['car-video1'];


// documents
$doc_owner_name = $_POST['doc-owner-name'];
$doc_owner_surname = $_POST['doc-owner-surname'];
$doc_owner_fathername = $_POST['doc-owner-fathername'];
$doc_date = $_POST['doc-date'];
$doc_photo1 = $_POST['doc-photo1'];
$doc_photo2 = $_POST['doc-photo2'];
$tex_passport = $_POST['tex_passport'];
$tex_date = $_POST['tex_date'];
$tex_photo1 = $_POST['tex_photo1'];
$tex_photo2 = $_POST['tex_photo2'];
$insurance_type = $_POST['insurance_type'];
$insurance_expire_date = $_POST['insurance_expire_date'];
$insurance_photo1 = $_POST['insurance_photo1'];
$insurance_photo2 = $_POST['insurance_photo2'];
$gas_akt = $_POST['gas_akt'];
$gas_check_date = $_POST['gas_check_date'];
$gas_photo1 = $_POST['gas_photo1'];
$gas_photo2 = $_POST['gas_photo2'];
$rental_deal_number = $_POST['rental_deal_number'];
$rental_expire_date = $_POST['rental_expire_date'];
$rent_photo1 = $_POST['rent_photo1'];
$rent_photo2 = $_POST['rent_photo2'];
$warrant_name = $_POST['warrant_name'];
$warrant_surname = $_POST['warrant_surname'];
$warrant_fathername = $_POST['warrant_fathername'];
$warrant_type = $_POST['warrant_type'];
$warrant_expire_date = $_POST['warrant_expire_date'];
$warrant_photo1 = $_POST['warrant_photo1'];
$warrant_photo2 = $_POST['warrant_photo2'];

// province
$prov_company = $_POST['prov_company'];
$prov_given_date = $_POST['prov_given_date'];
$prov_region = $_POST['prov_region'];
$prov_city = $_POST['prov_city'];

// persons
$person_name = $_POST['person_name'];
$person_surname = $_POST['person_surname'];
$person_fathername = $_POST['person_fathername'];
$person_given_date = $_POST['person_given_date'];
$person_tel1 = $_POST['person_tel1'];
$person_tel2 = $_POST['person_tel2'];
$person_photo = $_POST['person_photo'];

$respons_name = $_POST['respons_name'];
$respons_surname = $_POST['respons_surname'];
$respons_father = $_POST['respons_fathername'];
$respons_given_date = $_POST['respons_given_date'];
$respons_tel1 = $_POST['respons_tel1'];
$respons_tel2 = $_POST['respons_tel2'];
$respons_photo = $_POST['respons_photo'];

// purchase
$purchase_name = $_POST['purchase_name'];
$purchase_surname = $_POST['purchase_surname'];
$purchase_fathername = $_POST['purchase_fathername'];
$purchase_date = $_POST['purchase_date'];
$purchase_tel = $_POST['purchase_tel'];
$purchase_price = $_POST['purchase_price'];
$purchase_comment = $_POST['purchase_comment'];

// sale
$sale_respons_name = $_POST['sale_respons_name'];
$sale_respons_surname = $_POST['sale_respons_surname'];
$sale_respons_fathername = $_POST['sale_respons_fathername'];
$sale_phone = $_POST['sale_phone'];
$sale_price = $_POST['sale_price'];
$sold_price = $_POST['sold_price'];
$sale_date = $_POST['sale_date'];
$sold_date = $_POST['sold_date'];
$sale_comment = $_POST['sale_comment'];

// Status
$status = $_POST['status'];
$status_start_date = $_POST['status_start_date'];
$status_stop_date = $_POST['status_stop_date'];
$status_price = $_POST['status_price'];
$status_comment = $_POST['status_comment'];

// fine
$fine = $_POST['fine'];
$fine_start = $_POST['fine_start'];
$fine_stop = $_POST['fine_stop'];
$fine_price = $_POST['fine_price'];
$fine_comment = $_POST['fine_comment'];
$sts_sell = $_POST['sts_sell'];
?>

<?php //include ('../upload-manager.php'); ?>

<!-- Car insert to database -->
<?php
$send = "UPDATE car SET 
mark = '$car_mark', 
model = '$car_model', 
carcase = '$car_carcase', 
manuf_year = '$car_manufacture_year', 
fuel = '$car_fuel', 
engine = '$car_engine',
d_number = '$car_number', 
gps = '$car_gps',
foto_1 = '$res1',
foto_2 = '$res2',
foto_3 = '$res3',
foto_4 = '$res4',
video_1 = '$resVideo',
sts_sell = '$sts_sell' WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "Car updated successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>

<!-- Documents insert to database -->
<?php
$sendDoc = "UPDATE documents SET
owner_name = '$doc_owner_name',
owner_surname = '$doc_owner_surname',
owner_fathername = '$doc_owner_fathername',
owner_date = '$doc_date',
foto_1 = '$res5',
foto_2 = '$res6',
tex_passport = '$tex_passport',
tex_pass_date = '$tex_date',
foto_3 = '$res7',
foto_4 = '$res8',
insurance_type = '$insurance_type',
ins_date = '$insurance_expire_date',
foto_5 = '$insurance_photo1',
foto_6 = '$insurance_photo2',
gas_akt = '$gas_akt',
gas_date = '$gas_check_date',
foto_7 = '$res9',
foto_8 = '$res10',
renta = '$rental_deal_number',
renta_date = '$rental_expire_date',
foto_9 = '$res11',
foto_10 = '$res12',
trust_name = '$warrant_name',
trust_surname = '$warrant_surname',
trust_fathername = '$warrant_fathername',
trust_type = '$warrant_type',
trust_date = '$warrant_expire_date',
foto_11 = '$res13',
foto_12 = '$res14'
WHERE id='$id'";

if ($connect->query($sendDoc) === TRUE) {
    echo "Documents updated successfully";
} else {
    echo "Error: " .$sendDoc. "<br>" . $connect->error;
}
?>

<?php
$send = "UPDATE region SET 
corp = '$prov_company',
province = '$prov_region',
city = '$prov_city',
given_date = '$prov_given_date'
WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "Region updated successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>


<?php
$send = "UPDATE persons SET
driver_name =  '$person_name',
driver_surname =  '$person_surname',
driver_fathername =  '$person_fathername',
d_given_date =  '$person_given_date',
d_phone_1 =  '$person_tel1',
d_phone_2 =  '$person_tel2',
foto_1 =  '$res15',
foto_2 =  '$res16',
respons_name =  '$respons_name',
respons_surname =  '$respons_surname',
respons_fathername =  '$respons_father',
r_given_date =  '$respons_given_date',
r_phone_1 = '$respons_tel1',
r_phone_2 = '$respons_tel2'
WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "persons update successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>


<?php
$send = "UPDATE purchase SET 
buyer_name =  '$purchase_name',
buyer_surname = '$purchase_surname',
buyer_fathername = '$purchase_fathername',
buy_date = '$purchase_date',
phone = '$purchase_tel',
price = '$purchase_price',
comment = '$purchase_comment'
WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "purchase updated successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>


<?php
$send = "UPDATE sale SET
respons_name = '$sale_respons_name',
respons_surname = '$sale_respons_surname',
respons_fathername = '$sale_respons_fathername',
phone = '$sale_phone',
start_price = '$sale_price',
sold_price = '$sold_price',
start_date = '$sale_date',
sold_date = '$sold_date',
comment = '$sale_comment'
WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "sale updated successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>

<?php
$send = "UPDATE status SET
status = '$status',
start_date = '$status_start_date',
stop_date = '$status_stop_date',
price = '$status_price',
comment = '$status_comment'
WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "status updated successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>

<?php
$send = "UPDATE fine SET
fine_type = '$fine',
fine_start = '$fine_start',
fine_stop = '$fine_stop',
fine_price = '$fine_price',
fine_comment = '$fine_comment'
WHERE id='$id'";

if ($connect->query($send) === TRUE) {
    echo "fine updated successfully";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}

}
