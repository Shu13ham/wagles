<?php
$projects = [
	[
		"id" => "one",
		"soldOut" => "SOLD OUT",
		"image" => "/_assets/img/projects/oasis/33.jpg",
		"title" => "URBAN OASIS",
		"address" => "Donapaula Taleigao Goa",
		"features" => [
			"Year" => "2019",
			"2 BHK" => "3 BHK",
			"Status" => "SOLD OUT",
		]
	],
	[
		"id" => "two",
		"soldOut" => "SOLD OUT",
		"image" => "/_assets/img/projects/abode/11.jpg",
		"title" => "URBAN ABODE",
		"address" => "Merces-Chimbel Goa",
		"features" => [
			"Year" => "2020",
			"1 BHK" => "2 BHK",
			"Status" => "Ready To Move In",
		]
	],
	[
		"id" => "three",
		"soldOut" => "SOLD OUT",
		"image" => "/_assets/img/projects/supreme/11.jpg",
		"title" => "SUPREME",
		"address" => "Caranzalem Panjim Goa",
		"features" => [
			"Year" => "2021",
			"2 BHK" => "3 BHK",
			"Status" => "SOLD OUT",
		]
	],
	[
		"id" => "four",
		"soldOut" => "BOOKINGS OPEN",
		"image" => "/_assets/img/projects/elite/12.jpg",
		"title" => "URBAN ELITE",
		"address" => "Caranzalem Panjim Goa",
		"features" => [
			"Year" => "2025",
			"2 & 3 BHK" => "5 BHK",
			"Status" => "Ready to move in",
		]
	]
]
?>

<section class="property-grid our-projects" style="padding-top: 180px">
	<div class="container"  style="padding:0 15px">
	<div class="section-title" data-aos="zoom-out">
          <h2>Our Projects</h2>
          <p>Everything you need to know</p>
        </div>
		<div class="row" data-aos="fade-up">
			<?php foreach ($projects as $project) { ?>
				<div class="col-md-4" >
					<div class="gallery-card-box card-shadow" >
						<div class="img-box">
							<img src="<?php echo $BASE_URL . $project["image"] ?>" alt="Wagles Goa Real Estate Builder & Developer" class="img-a img-fluid" width="100%">
							
						</div>
						
						<div class="card-overlay"><h3 class="soldOut"><?php echo $project["soldOut"] ?></h3>
							<div class="card-overlay-a-content" style="position: relative;">
							
								<a href="#<?php echo $project["id"] ?>" style="position:absolute;width: 100%;height:100%;top:0px;left:0px;"></a>
								<div class="project-card-header">
									<a href="#<?php echo $project["id"] ?>" style="position:absolute;width: 100%;height:100%;top:0px;left:0px;"></a>
									<h2 class="project-card-title"><a><?php echo $project["title"] ?></a><br /> <a><span><?php echo $project["address"] ?></span></a></h2>
								</div>
								<div class="card-footer-text">
									<a href="#<?php echo $project["id"] ?>" style="position:absolute;width: 100%;height:100%;top:0px;left:0px;"></a>
									<ul class="card-info d-flex justify-content-around">
										<?php foreach ($project["features"] as $project_label => $project_value) { ?>
											<li style="background-color:#efbd24;border:1px solid white;padding:5px">
												<h4 class="card-info-title" style="color:#080e3b"><?php echo $project_label ?></h4><span style="color:#080e3b"><?php echo $project_value ?></span>
											</li>
										<?php } ?>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			<?php } ?>
		</div>
	</div>
</section>