<?php
$faqs= [
	[
    "id" => "1",
		"question" => "What is RERA?",
		"answer" => "The Real Estate (Regulation and Development) Act, 2016 (the Act, from here on) is an initiative by the Government of India to bring about transparency and order to the real estate transactions by creating a systematic & a uniform regulatory environment, thereby safeguarding consumer interests and making real estate developers accountable for timely completion of projects. The Act makes way for setting up of Real Estate Regulatory Authority for regulation and promotion of real estate sector while promoting transparency and equity in real estate transactions."
	],
  [
    "id" => "2",
		"question" => "What Are The Objectives Of RERA, 2016?",
		"answer" => "These are the five major objectives of RERA, 2016.<br><br>
                  a.To establish the Real Estate Regulatory Authority (RERA)<br>
                  b.To promote transparency and efficiency in the sale of real estate projects<br>
                  c.To protect the interest of consumers in the real estate sector<br>
                  d.To establish an adjudging mechanism for speedy dispute settlement<br>
                  e.To set up an Appellate Tribunal to hear appeals from the decisions, directions or orders of the RERA<br>"
	],
  [
    "id" => "3",
		"question" => "What is Carpet Area?",
		"answer" => "As per Real Estate (Regulation and Development) Act, 2016, “Carpet Area” means the net usable floor area of an apartment, excluding the area covered by the external walls, areas under service shafts, exclusive balcony or veranda area and exclusive open terrace area, but includes the area covered by the internal partition walls of the apartment."
	],
  [
    "id" => "4",
		"question" => "Do you offer home loan services?",
		"answer" => "All our projects are approved and tied up with leading banks."
	],
  [
    "id" => "5",
		"question" => "What is stamp duty?",
		"answer" => "Stamp duty refers to the tax paid to the government just like sales tax or income tax and should be paid on time and in full. A stamp duty paid document is an important and legal instrument to be taken care of."
	],
]
?>

<section class="faq">
  <div class="container">
    <div class="section-title" data-aos="zoom-out">
      <p>Frequently Asked Questions</p>
      <h2>F.A.Q</h2>
    </div>
    <ul class="faq-list">
    <?php foreach ($faqs as $faq) {?>
      <li>
        <div data-bs-toggle="collapse" href="#faq<?php echo $faq["id"] ?>" class="collapsed question">
          <?php echo $faq["question"] ?> 
          <i class="fa fa-sort-desc icon-show"></i><i class="fa fa-sort-asc icon-close"></i>
        </div>
        <div id="faq<?php echo $faq["id"] ?>" class="collapse" data-bs-parent=".faq-list">
          <p>
            <?php echo $faq["answer"] ?>
          </p>
        </div>
      </li> 
      <?php }?>
    </ul>
  </div>
</section>