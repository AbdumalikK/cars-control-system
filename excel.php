<?php 
include 'includes/config.php';

if (isset($_POST['export_excel'])) {

	$sql = "SELECT * FROM car, document, region, categories, persons, buy, sale, status, fine";
	$result = mysqli_query($connect,$sql);
	if (mysqli_num_rows($result) > 0) {
		$output .= '  
				<table class="table" bordered="1">
				<tr>
					<th>Id</th>
					<th>Markasi</th>
					<th>Modeli</th>
					<th>Kuzov turi</th>
					<th>Ishlab chiqarilgan yili</th>
					<th>Yoqilg`i turi</th>
					<th>Dvigatel hajmi</th>
					<th>Davlat raqami</th>
					<th>GPS raqami</th>
					<th>Surati</th>
					<th>Videosi</th>
					
					<th></th>
					<th></th>
					<th></th>
					<th></th>
					<th></th>
				</tr>
		'
	}
}

?>