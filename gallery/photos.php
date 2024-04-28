<?php 
$photos = [
  [
    "id"=>"1",
    "image" => "/_assets/img/projects/abode/4.jpg",
    "caption" => "Urban Abode View"
  ],
  [
    "id"=>"2",
    "image" => "/_assets/img/projects/abode/3.jpeg",
    "caption" => "Urban Abode Drone View"
  ],[
    "id"=>"3",
    "image" => "/_assets/img/projects/abode/6.jpg",
    "caption" => "Urban Abode"
  ],[
    "id"=>"4",
    "image" => "/_assets/img/projects/abode/5.jpg",
    "caption" => "Urban Abode Parking"
  ],[
    "id"=>"5",
    "image" => "/_assets/img/projects/oasis/1.jpg",
    "caption" => "Urban Oasis Terrace Pool"
  ],[
    "id"=>"6",
    "image" => "/_assets/img/projects/oasis/2.jpg",
    "caption" => "Urban Oasis Terrace"
  ],[
    "id"=>"7",
    "image" => "/_assets/img/projects/oasis/3.jpg",
    "caption" => "Urban Oasis Terrace"
  ],[
    "id"=>"8",
    "image" => "/_assets/img/projects/oasis/5.jpg",
    "caption" => "Urban Oasis Drone View"
  ],[
    "id"=>"9",
    "image" => "/_assets/img/projects/oasis/6.jpg",
    "caption" => "Urban Oasis Hall"
  ],[
    "id"=>"10",
    "image" => "/_assets/img/projects/oasis/8.jpg",
    "caption" => "Urban Oasis Gym"
  ],[
    "id"=>"11",
    "image" => "/_assets/img/projects/supreme/1.jpg",
    "caption" => "Urban supreme"
  ],[
    "id"=>"12",
    "image" => "/_assets/img/projects/supreme/2.jpg",
    "caption" => "Urban supreme"
  ],
  [
    "id"=>"13",
    "image" => "/_assets/img/projects/elite/12.jpg",
    "caption" => "Urban Elite"
  ],
  [
    "id"=>"14",
    "image" => "/_assets/img/projects/elite/18.jpg",
    "caption" => "Urban Elite"
  ]
]
?>
<section id="portfolio" class="portfolio" style="padding-top: 180px">
    <div class="container">
      <div class="section-title" data-aos="zoom-out">
        <h2>Gallery</h2>
        <p>What we've done</p>
      </div>
      <div class="row portfolio-container" data-aos="fade-up">
      <?php foreach ($photos as $photo) {?> 
        <div class="col-lg-4 col-md-6 portfolio-item filter-app">
          <div class="portfolio-img"><img src="<?php echo $BASE_URL . $photo["image"]?>" class="img-fluid" alt="Wagles Goa Real Estate Builder & Developer"></div>
          <div class="portfolio-info">
            <h4><?php echo $photo["caption"] ?></h4><p></p>
          </div>
        </div>
      <?php }?>
      </div>
    </div>
  </section>