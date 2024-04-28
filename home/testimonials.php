<?php
$testimonials = [
	[
    "id" => "1",
    "msg" => "We bought our home just a few months ago and have been impressed by the professionalism 
    and service of Wagle's. Urban Oasis is a unique building, quite an architectural feat, 
    and it's nice to have Sammit around to answer all our questions.",
    "name" => "Ms. Madhuri Dass",
    "img" => "/_assets/img/testimonials/1.png"
	],
  [
    "id" => "2",
    "msg" => "It's been a great pleasure to be a part of Urban Oasis. Every thing is planned and executed 
    as promised by the builder Sammit Wagle's. It has a serene surrounding with a beautiful pool 
    and a view from the terrace. It also has a gym and all other amenities required for a society 
    in today's scenario. I wish Sammit Wagle's all the best in his future projects.",
    "name" => "Mr. Ralph Viegas",
    "img" => "/_assets/img/testimonials/3.png",
	],[
    "id" => "3",
    "msg" => "4 walls doesn't make a house, but when you have a professional with an eye for finesse it 
    makes your dream come true. That's why I invested in Wagle's.",
    "name" => "Mr. Gaurish Keni",
    "img" => "/_assets/img/testimonials/7.PNG",
	],[
    "id" => "4",
    "msg" => "We just bought our apartment at Urban Abode situated at Merces - Goa and the whole process was
    very convenient right from day 1. Mr. Sammit Wagle's and his team are very professional and 
    the entire construction of Urban Abode is amazing and our apartment is very spacious.",
    "name" => "Yogesh Khatav",
    "img" => "/_assets/img/testimonials/3.png",
	],[
    "id" => "5",
    "msg" => " Urban Oasis is well built in exceptional style and elegance with amazing attention to detail. 
    The whole ambience of the building is clean, refreshing and spacious. The most important 
    aspect is the excellent coordination and response of Mr. Sammit Wagle's, with whom our experience 
    has been seamless and hassle free.",
    "name" => "Mr. Remy and Dr. Veronica Fernandes",
    "img" => "/_assets/img/testimonials/8.PNG",
	],
]
?>
<section id="testimonials" class="testimonials">
  <div class="container">
    <div class="section-title" data-aos="zoom-out">
      <p>What they are saying about us</p>
      <h2>Testimonials</h2>
    </div>
    <div class="testimonials-slider swiper" data-aos="fade-up" data-aos-delay="100">
      <div class="swiper-wrapper">
      <?php foreach ($testimonials as $testimonial) {?>
        <div class="swiper-slide">
          <div class="testimonial-item">
            <p>
              <i class="fa fa-quote-left"></i> 
                <?php echo $testimonial["msg"] ?> 
              <i class="fa fa-quote-right"></i>
            </p>
            <img src="<?php echo $testimonial["img"] ?>" class="testimonial-img" alt="Wagle's Goa Real Estate Builder & Developer" loading="lazy">
            <p><?php echo $testimonial["name"] ?></p>
          </div>
        </div>
      <?php }?>
      </div>
      <div class="swiper-pagination"></div>
    </div>
  </div>
</section>