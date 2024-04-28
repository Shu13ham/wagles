<?php 
  $BASE_URL = "http://localhost/wagles";
?>

<?php $page="home";?>

<!DOCTYPE html>
<html lang="en">
<head>
  <?php include './_common/pre_header.php'; ?>
</head>
<body>

  <?php include  './_common/header.php' ?>

  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">
      
      <div class="carousel-inner" role="listbox">

        <div class="carousel-item active" role="option" style="background: linear-gradient(rgba(20, 20, 20, 0.5), rgba(20, 20, 20, 0.5)), url(<?php echo $BASE_URL ?>/_assets/img/projects/elite-banner.jpg);background-repeat:no-repeat;background-size: cover;background-position-x: 20%; ">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">WELCOME TO <span>WAGLE'S</span></h2>
              <p class="animate__animated animate__fadeInUp">Client satisfaction is our goal; we strive to understand their needs and secure their ideal home.</p>
              <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read More</a>
            </div>
          </div>
        </div>

        <div class="carousel-item" role="option" style="background: linear-gradient(rgba(20, 20, 20, 0.5), rgba(20, 20, 20, 0.5)), url(<?php echo $BASE_URL ?>/_assets/img/projects/supreme-banner.jpg);background-repeat:no-repeat;background-size: cover;background-position-x: 55%;" loading="lazy">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">A PREMIER REAL ESTATE PROFESSIONAL</h2>
              <p class="animate__animated animate__fadeInUp">We lead in real estate by crafting feature-rich projects for comfortable living, embracing Goan culture.</p>
            </div>
          </div>
        </div>

        <div class="carousel-item" role="option" style="background: linear-gradient(rgba(20, 20, 20, 0.5), rgba(20, 20, 20, 0.5)), url(<?php echo $BASE_URL ?>/_assets/img/projects/abode-banner.jpg);background-repeat:no-repeat;background-size: cover;background-position-x: 50%;" loading="lazy">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animate__animated animate__fadeInDown">A Track Record That Speaks For Itself.</h2>
              <p class="animate__animated animate__fadeInUp">Understanding Goan homes, we provide top-notch infrastructure, amenities, and construction quality.</p>
            </div>
          </div>
        </div>

      </div>

      <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev" aria-label="WAGLES Carousel">
        <span class="carousel-control-prev-icon fa fa-chevron-left" aria-hidden="true"></span>
      </a>

      <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next" aria-label="WAGLES Carousel">
        <span class="carousel-control-next-icon fa fa-chevron-right" aria-hidden="true"></span>
      </a>

      <svg class="hero-waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="0 24 150 28 " preserveAspectRatio="none">
        <defs><path id="wave-path" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z"></defs>
        <g class="wave1"><use xlink:href="#wave-path" x="50" y="3" fill="#1c203d"></g>
        <g class="wave2"><use xlink:href="#wave-path" x="50" y="0" fill="rgba(255,255,255, .2)"></g>
        <g class="wave3"><use xlink:href="#wave-path" x="50" y="9" fill="#fff"></g>
      </svg>

    </div>
  </section>

  <main id="main">
    
    <section id="about" class="about">
      <div class="container">
        <div class="section-title" data-aos="zoom-out">
          <h2>BEST VALUE REALTOR IN GOA</h2>
          <p>Who we are</p>
        </div>

        <div class="row content" data-aos="fade-up">
          <div class="col-lg-6">
            <p>
            Wagle's is a real estate development company in Goa. we are committed to providing spectacular 
            projects that deliver the best value for customers money. Our main aim is to transform the 
            property dreams of the customers into reality. We believe in client satisfaction. We strive to understand 
            their needs and ensure they find the best place. At WAGLE’s, we provide nothing but the best.
            </p>
            <ul>
              <li><i class="fa fa-check-square-o"></i> BEST VALUE REALTOR IN GOA</li>
              <li><i class="fa fa-check-square-o"></i> MASTERS OF CONSISTENCY AND QUALITY</li>
              <li><i class="fa fa-check-square-o"></i> EXTRAORDINARY REACH< EXTRAORDINARY RESULTS</li>
              <li><i class="fa fa-check-square-o"></i> FULL-SERVICE AGENTS, MODERN TECHNOLOGY</li>
              <li><i class="fa fa-check-square-o"></i> EXCEPTIONAL PROPERTIES, EXCEPTIONAL CLIENTS</li>
              <li><i class="fa fa-check-square-o"></i> HOMES THAT MATCH</li>
            </ul>
            <a href="./projects/" class="btn-learn-more">Our Projects</a>
          </div>
          <div class="col-lg-6 pt-4 pt-lg-0">
              <!-- <img src="<?php echo $BASE_URL ?>/_assets/img/projects/oasis/2.jpg" alt="Wagles Goa Real Estate Builder & Developer" class="img-fluid"> -->
              <!--<iframe title="youtube" width="100%" height="100%" src="https://www.youtube.com/embed/wEpzzNQKQOg" ></iframe>-->
              <div id="iframeFacade"></div>
              <script>
                    document.addEventListener("DOMContentLoaded", function() {
                        // Function to load the iframe content
                        const loadIframeContent = function() {
                            // Replace the facade with the actual iframe
                            const iframe = document.createElement("iframe");
                            iframe.src = "https://www.youtube.com/embed/wEpzzNQKQOg";
                            iframe.width = "100%";
                            iframe.height = "100%"; // Example height
                            document.getElementById("iframeFacade").replaceWith(iframe);
                        };
                        
                        // Check if the iframe should be loaded (e.g., when the user scrolls near the facade)
                        const lazyLoadIframe = function() {
                            // Example: Load the iframe content when the facade is clicked
                            document.getElementById("iframeFacade").addEventListener("click", function() {
                                loadIframeContent();
                                // Optional: Remove the event listener to prevent multiple clicks
                                this.removeEventListener("click", arguments.callee);
                            });
                        };
                    
                        // Example: Load the iframe content when the facade is visible in the viewport
                        const observer = new IntersectionObserver(entries => {
                            entries.forEach(entry => {
                                if (entry.isIntersecting) {
                                    loadIframeContent();
                                    observer.disconnect(); // Stop observing once the content is loaded
                                }
                            });
                        });
                        observer.observe(document.getElementById("iframeFacade"));
                        
                        // Example: Load the iframe content after a delay (e.g., after a certain time period)
                        // setTimeout(loadIframeContent, 5000); // Load after 5 seconds
                    });
              </script>
          </div>
        </div>

      </div>
    </section>

    <section id="cta" class="cta">
      <div class="container">

        <div class="row" data-aos="zoom-out">
          <div class="col-lg-9 text-center text-lg-start">
            <h3>WE PROVIDE NOTHING BUT THE BEST</h3>
            <p> We Believe in Client Satisfaction and Strive to Understand Client Needs to Ensure They Find The Best Place.</p>
          </div>
          <div class="col-lg-3 cta-btn-container text-center">
            <a class="cta-btn align-middle" target="_blank" href="https://api.WhatsApp.com/send?phone=+91-7875447474">Contact Us</a>
          </div>
        </div>

      </div>
    </section>

    <?php include './home/services.php'; ?>
    
    <section id="features" class="features">
      <div class="container">

        <ul class="nav nav-tabs row d-flex">
          <li class="nav-item col-3" data-aos="zoom-in">
            <div class="nav-link active show">
              <i class="fa fa-sitemap"></i>
              <p class="d-none d-lg-block">Making Realty a Reality</p>
            </div>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="100">
            <div class="nav-link active show">
              <i class="fa fa-tasks"></i>
              <p class="d-none d-lg-block">Perfect Business</p>
            </div>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="200">
            <div class="nav-link active show">
              <i class="fa fa-line-chart"></i>
              <p class="d-none d-lg-block">Perfect Investment</p>
            </div>
          </li>
          <li class="nav-item col-3" data-aos="zoom-in" data-aos-delay="300">
            <div class="nav-link active show">
              <i class="fa fa-briefcase"></i>
              <p class="d-none d-lg-block">Professional Approach</p>
            </div>
          </li>
        </ul>

        <div class="tab-content" data-aos="fade-up">
          <div class="tab-pane active show" id="tab-1">
            <div class="row">
              <div class="col-lg-6 order-2 order-lg-1 mt-3 mt-lg-0">
                <h3>“Real estate cannot be lost or stolen, nor can it be carried away. Purchased with 
                  common sense, paid for in full, and managed with reasonable care, it is about the safest 
                  investment in the world.” </h3>
                <p class="fst-italic">
                - Franklin D. Roosevelt, U.S. president
                </p>
                <ul>
                  <li><i class="fa fa-check-square-o"></i> “I still think buying a home is the best investment any individual can make.” - John Paulson, billionaire</li>
                  <li><i class="fa fa-check-square-o"></i> “Owning a home is a keystone of wealth…both financial affluence and emotional security.” - Suze Orman </li>
                </ul>
              </div>
              <div class="col-lg-6 order-1 order-lg-2 text-center">
                <img src="/_assets/img/projects/oasis/1.jpg" alt="Wagles Goa Real Estate Builder & Developer" class="img-fluid" loading="lazy">
              </div>
            </div>
          </div>
        </div>

      </div>
    </section>

    <?php include './home/team.php'; ?>
    <?php include './home/testimonials.php'; ?>
    <?php include './home/faq.php'; ?>

  </main>

  <?php include  './_common/footer.php' ?>
  <?php include './_common/post_footer.php'; ?>

</body>
</html>