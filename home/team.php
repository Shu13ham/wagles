<?php
$team= [
// 	[
//     "id" => "1",
//     "name" => "SAMMIT WAGLE",
//     "profile" => "DIRECTOR",
//     "image" => "/_assets/img/team/1.png",
//     "gmail" => "sammitwagle@yahoo.in",
// 		"phone" => "+91-7875447474"
// 	],
    [
    "id" => "2",
    "name" => "DATTAPRASAD WAGLE",
    "profile" => "ARCHITECT",
    "image" => "/_assets/img/team/5.png",
    "gmail" => "dattaprasadwagle@rediffmail.com",
		"phone" => "+91-9422638883"
	],
    [
    "id" => "3",
    "name" => "VIBHA WAGLE",
    "profile" => "ASSOCIATE ARCHITECT",
    "image" => "/_assets/img/team/5.png",
    "gmail" => "vibhavaglo@rediffmail.com",
		"phone" => "+91-9421241606"
	],
    [
    "id" => "4",
    "name" => "SANJAY KAMAT",
    "profile" => "STRUCTURAL CONSULTANT",
    "image" => "/_assets/img/team/5.png",
    "gmail" => "-",
		"phone" => "-"
	],
    [
    "id" => "5",
    "name" => "U. P. Timble & Associates",
    "profile" => "LEGAL ADVISOR",
    "image" => "/_assets/img/team/5.png",
    "gmail" => "-",
		"phone" => "-"
	],
]
?>

<section id="team" class="team">
  <div class="container">
    <div class="section-title" data-aos="zoom-out">
      <h2>Team</h2>
      <p>Our Hardworking Team</p>
    </div>
    <div class="row">
        <div class="col-lg-12 col-md-12 d-flex justify-content-center">
        <div class="member owner" data-aos="fade-up" data-aos-delay="200">
          <div class="member-img">
            <img src="/_assets/img/team/1.png" width="390" height="290" class="img-fluid" alt="Wagles Goa Real Estate Builder & Developer" style="" loading="lazy">
          </div>
          <div class="member-info">
            <p><b>SAMMIT WAGLE</b></p>
            <span>DIRECTOR</span><br>
            <div class="social-links" style="background-color:#2a2c39">
              <a href="mailto:sammitwagle@yahoo.in" class="facebook"><i class="fa fa-envelope">  sammitwagle@yahoo.in</i></a><br>
              <a href="https://api.WhatsApp.com/send?phone=+91-7875447474" class="instagram"><i class="fa fa-whatsapp"> +91-7875447474</i></a>
            </div>
          </div>
        </div>
      </div>
    <?php foreach ($team as $single) { ?>
      <div class="col-lg-3 col-md-6 d-flex align-items-stretch staff-wrapper">
        <div class="member staff" data-aos="fade-up" data-aos-delay="200">
          <div class="member-info">
            <p><b><?php echo $single["name"] ?></b></p>
            <span><?php echo $single["profile"] ?></span><br>
            <div class="social-links" style="background-color:#2a2c39">
              <a href="mailto:<?php echo $single["gmail"] ?>" class="facebook"><i class="fa fa-envelope">  <?php echo $single["gmail"] ?></i></a><br>
              <a href="https://api.WhatsApp.com/send?phone=<?php echo $single["phone"] ?>" class="instagram"><i class="fa fa-whatsapp"> <?php echo $single["phone"] ?></i></a>
            </div>
          </div>
        </div>
      </div>
      <?php } ?>
    </div>
  </div>
</section>