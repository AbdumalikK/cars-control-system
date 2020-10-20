<?php
if (isset($_POST['submit'])) { 
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

<?php //include '../sections/upload-manager.php'; ?>

<!-- Car insert to database -->
<?php
$send = "INSERT INTO car (
mark, 
model, 
carcase, 
manuf_year, 
fuel, engine, 
d_number, gps, 
foto_1, 
foto_2, 
foto_3, 
foto_4, 
video_1, 
sts_sell
) VALUES (
'$car_mark', 
'$car_model', 
'$car_carcase', 
'$car_manufacture_year', 
'$car_fuel', 
'$car_engine', 
'$car_number', 
'$car_gps', 
'$res1', 
'$res2', 
'$res3', 
'$res4', 
'$resVideo', 
'$sts_sell')";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>

<!-- Documents insert to database -->
<?php
$sendDoc = "INSERT INTO documents (
owner_name,
owner_surname,
owner_fathername,
owner_date, 
foto_1, 
foto_2,
tex_passport,
tex_pass_date,
foto_3,
foto_4,
insurance_type,
ins_date,
foto_5,
foto_6,
gas_akt,
gas_date,
foto_7,
foto_8,
renta,
renta_date,
foto_9,
foto_10,
trust_name,
trust_surname,
trust_fathername,
trust_type,
trust_date,
foto_11,
foto_12
) VALUES (
'$doc_owner_name',
'$doc_owner_surname',
'$doc_owner_fathername',
'$doc_date',
'$res5',
'$res6',
'$tex_passport',
'$tex_date',
'$res7',
'$res8',
'$insurance_type',
'$insurance_expire_date',
'$insurance_photo1',
'$insurance_photo2',
'$gas_akt',
'$gas_check_date',
'$res9',
'$res10',
'$rental_deal_number',
'$rental_expire_date',
'$res11',
'$res12',
'$warrant_name',
'$warrant_surname',
'$warrant_fathername',
'$warrant_type',
'$warrant_expire_date',
'$res13',
'$res14')";

if ($connect->query($sendDoc) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$sendDoc. "<br>" . $connect->error;
}
?>

<?php
$send = "INSERT INTO region (corp, province, city, given_date
) VALUES (
'$prov_company',
'$prov_region',
'$prov_city',
'$prov_given_date'
)";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>


<?php
$send = "INSERT INTO persons (
driver_name, 
driver_surname, 
driver_fathername, 
d_given_date, 
d_phone_1, 
d_phone_2, 
foto_1, 
foto_2, 
respons_name, 
respons_surname, 
respons_fathername, 
r_given_date, 
r_phone_1, 
r_phone_2
) VALUES (
'$person_name',
'$person_surname',
'$person_fathername',
'$person_given_date',
'$person_tel1',
'$person_tel2',
'$res15',
'$res16',
'$respons_name',
'$respons_surname',
'$respons_father',
'$respons_given_date',
'$respons_tel1',
'$respons_tel2'
)";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>


<?php
$send = "INSERT INTO purchase (
buyer_name, 
buyer_surname,
buyer_fathername,
buy_date,
phone,
price,
comment
) VALUES (
'$purchase_name',
'$purchase_surname',
'$purchase_fathername',
'$purchase_date',
'$purchase_tel',
'$purchase_price',
'$purchase_comment'
)";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>


<?php
$send = "INSERT INTO sale (
respons_name,
respons_surname,
respons_fathername,
phone,
start_price,
sold_price,
start_date,
sold_date,
comment
) VALUES (
'$sale_respons_name',
'$sale_respons_surname',
'$sale_respons_fathername',
'$sale_phone',
'$sale_price',
'$sold_price',
'$sale_date',
'$sold_date',
'$sale_comment'
)";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>

<?php
$send = "INSERT INTO status (
status,
start_date,
stop_date,
price,
comment
) VALUES (
'$status',
'$status_start_date',
'$status_stop_date',
'$status_price',
'$status_comment'
)";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}
?>

<?php
$send = "INSERT INTO fine (
fine_type,
fine_start,
fine_stop,
fine_price,
fine_comment
) VALUES (
'$fine',
'$fine_start',
'$fine_stop',
'$fine_price',
'$fine_comment'
)";

if ($connect->query($send) === TRUE) {
    echo "1";
} else {
    echo "Error: " .$send. "<br>" . $connect->error;
}

}
