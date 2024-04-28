<?php
$services = [
	[
    "id" => "1",
		"icon" => "square_foot",
    "title" => "DESIGNING",
		"desc" => "We are known for our exceptional designs which we build with the help of the architectures and the whole team at Wagle's."
	],
  [
    "id" => "2",
		"icon" => "foundation",
    "title" => "CIVIL WORK",
		"desc" => "Our team consists of best civil workers which makes us the best in this field. We are well known for the quality of materials we use."
	],[
    "id" => "3",
		"icon" => "engineering",
    "title" => "CONSTRUCTION",
		"desc" => "We also undertake many construction work for our clients and help them build their dream home. We are well known for the quality of materials we use."
	]
]
?>

<section id="services" class="services">
  <div class="container">
    <div class="section-title" data-aos="zoom-out">
      <h2>Services</h2>
      <p>What we do offer</p>
    </div>
    <div class="row">
    <?php foreach ($services as $service) {?>      
      <div class="col-lg-4 col-md-6">
        <div class="icon-box" data-aos="zoom-in-left">
          <div class="icon"><i class="material-icons" style="color:#efbd24"><?php echo $service["icon"] ?></i></div>
          <p class="title"><a href=""><?php echo $service["title"] ?></a></p>
          <p class="description"><?php echo $service["desc"] ?></p>
        </div>
      </div>
    <?php }?>
  </div>
</section>