<?php
include 'includes/config.php';
include 'includes/header.php'; 


// $expire_date = date("d-m-Y",strtotime("-10 days"));

// $result = mysqli_query($connect, "SELECT * FROM documents WHERE tex_pass_date <= '".$expire_date."'");

// while ($row = mysqli_fetch_array($result, MYSQLI_NUM)) {
// 	printf("ID: %s Name: %s Date: %s", $row[0], $row[1], $row[6]);
// }

?>

<!-- Reminder and made tasks -->
<div class="container-lg mx-lg-auto text-center mt-4 bg-yellow">
	<div class="row">
		<div class="col-6">
			<a class="text-decoration-none" href="notification.php"><div class="reminder tasks-border ml-4">
					<h2 class="m-0 pt-2">35</h2>
					<p class="m-0">Eslatma</p>
				</div></a>
		</div>
		<div class="col-6">
			<a class="text-decoration-none" href="notification2.php"><div class="finished ml-4">
					<h2 class="m-0 pt-2">40</h2>
					<p class="m-0">Qilinganlari</p>
				</div></a>
		</div>
	</div>
</div>
<!-- end -->

<div class="container-lg mx-lg-auto">
	<div class="row">
		<div class="col-12">
			
	<img class="content-shadow" src="styles/icons/shadow-of-reminder.svg" alt="">
		</div>
	</div>
</div>


<!-- Content data showing -->
<div class="container-lg mx-lg-auto py-3 mb-4 bg-white content-minus">
	<div class="content">

			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill badge-content-img d-inline-block content-img-size">D</span>
							<h5 class="d-inline-block content-border ml-1 mb-0">Ishonchnoma</h5>
							<p class="content-who text-dark">haydovchi</p>
							<h5 class="content-p mb-2">Imronov Muhammad</h5>
					
							
						</div>
					</div>
					
					<div class="col-6">
						<div class="info-2 mt-2">
							
							<div class="row">
								<div class="col-6 px-0">
							<div class="d-inline-block br-3"></div>
							<p class="mb-0 font-8">telefon</p>
							<h5 class="mb-0 font-12">90 900 90 90</h5>
								</div>

								<div class="col-6 px-0 align-self-lg-end text-align-end">
							<h4 class="content-day">-25</h4><p class="d-inline mr-3 content-day-color">k</p>

								<img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>


			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill badge-content-img d-inline-block content-img-size">D</span>
							<h5 class="d-inline-block content-border ml-1 mb-0">Ishonchnoma</h5>
							<p class="content-who text-dark">haydovchi</p>
							<h5 class="content-p mb-2">Zubayirov Ali</h5>
					
							
						</div>
					</div>
					
					<div class="col-6">
						<div class="info-2 mt-2">
							
							<div class="row">
								<div class="col-6 px-0">
							<div class="d-inline-block br-3"></div>
							<p class="mb-0 font-8">telefon</p>
							<h5 class="mb-0 font-12">98 800 80 80</h5>
								</div>

								<div class="col-6 px-0 align-self-lg-end text-align-end">
							<h4 class="content-day">10</h4><p class="d-inline mr-3 content-day-color">k</p>

								<img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill badge-content-img d-inline-block content-img-size">D</span>
							<h5 class="d-inline-block content-border ml-1 mb-0">Ishonchnoma</h5>
							<p class="content-who text-dark">haydovchi</p>
							<h5 class="content-p mb-2">Zubayirov Ali</h5>
					
							
						</div>
					</div>
					
					<div class="col-6">
						<div class="info-2 mt-2">
							
							<div class="row">
								<div class="col-6 px-0">
							<div class="d-inline-block br-3"></div>
							<p class="mb-0 font-8">telefon</p>
							<h5 class="mb-0 font-12">98 800 80 80</h5>
								</div>

								<div class="col-6 px-0 align-self-lg-end text-align-end">
							<h4 class="content-day">10</h4><p class="d-inline mr-3 content-day-color">k</p>

								<img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>

			<div class="content-bordered">
			<div class="row">
					<div class="col-6">
						<div class="info">
							<span class="badge badge-pill badge-content-img d-inline-block content-img-size">D</span>
							<h5 class="d-inline-block content-border ml-1 mb-0">Ishonchnoma</h5>
							<p class="content-who text-dark">haydovchi</p>
							<h5 class="content-p mb-2">Zubayirov Ali</h5>
					
							
						</div>
					</div>
					
					<div class="col-6">
						<div class="info-2 mt-2">
							
							<div class="row">
								<div class="col-6 px-0">
							<div class="d-inline-block br-3"></div>
							<p class="mb-0 font-8">telefon</p>
							<h5 class="mb-0 font-12">98 800 80 80</h5>
								</div>

								<div class="col-6 px-0 align-self-lg-end text-align-end">
							<h4 class="content-day">10</h4><p class="d-inline mr-3 content-day-color">k</p>

								<img class="mb-3 mr-lg-4" src="styles/icons/call-notif.svg" alt="call">	
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
	</div>
</div>
<!-- end -->


<?php include 'includes/footer.php'; ?>