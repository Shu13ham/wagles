<?php 
  $BASE_URL = "https://localhost/wagles";
?>

<?php $page="contact";?>

<!DOCTYPE html>
<html lang="en">
<head>
    <?php include '../_common/pre_header.php'; ?>
</head>
<body>

    <?php include  '../_common/header.php' ?>

    <section class="contact" style="padding-top: 180px">       
        <div class="container">
            <div class="section-title" data-aos="zoom-out">
                <h2>Contact Us</h2>
                <p>We've got you</p>
            </div>
            <div class="row">
                <div class="col-sm-12" data-aos="fade-up">
                    <div class="contact-map box ">
                        <div id="map" class="contact-map ">
                            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d808.2628266421216!2d73.82635182245319!3d15.49692700353389!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bbfc08ee49ea94f%3A0xcaced802ba2e4daf!2sWagles!5e0!3m2!1sen!2sin!4v1636188715347!5m2!1sen!2sin" width="100%" height="400" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
                        </div>
                    </div>
                </div>
            </div>  
            <div class="row">   
                <div class="col-md-5 contact-us-section" data-aos="fade-up">
                    <div class="icon-box margin">
                        <div class="icon-box-icon"><span class="ion-ios-paper-plane"></span>
                        </div>
                        <div class="icon-box-content table-cell">
                            <div class="icon-box-title"><h4 class="icon-title">Say Hello</h4>
                            </div>
                            <div class="icon-box-content">
                                <p class="contact-content-p">Email: <span class=" "><a href="mailto:waglesinfo@gmail.com">waglesinfo@gmail.com</a></span><br>
                                Phone: <span class=" ">+91-7875447474</span></p>
                            </div>
                        </div>
                    </div>
                    <div class="icon-box margin">
                        <div class="icon-box-icon"><span class="ion-ios-pin"></span>
                        </div>
                        <div class="icon-box-content table-cell">
                            <div class="icon-box-title"><h4 class="icon-title">Our Headquarters</h4>
                            </div>
                            <div class="icon-box-content">
                                <p class="contact-content-p"> 
                                Om Datta Building, 1st Floor,<br> 
                                Opposite Nova Goa Hotel.<br> 
                                Panjim, Goa, India - 403001<br></p>
                            </div>
                        </div>
                    </div>
                </div> 
                <div class="col-md-7" data-aos="fade-up">
                    
                    <form action="<?php echo $BASE_URL ?>/contact/sendMail.php" method="post" role="form" class="contactForm">
                        <h3 class="text-center"><b>Contact Us</b></h3>
                        <div class="row">
                            <div class="col-md-6 form-group">
                                <input type="text" name="name" class="form-control form-control-lg form-control-a" placeholder="Your Name" required data-rule="minlen:4" data-msg="Please enter at least 4 chars">
                            </div>
                            <div class="col-md-6 form-group mt-3 mt-md-0">
                                <input type="email" class="form-control form-control-lg form-control-a" name="email" placeholder="Your Email" required data-rule="email" data-msg="Please enter a valid email">
                            </div>
                            </div>
                            <div class="form-group mt-3">
                                <input type="text" class="form-control form-control-lg form-control-a" name="subject" placeholder="Subject" required data-rule="minlen:4" data-msg="Please enter at least 8 chars of subject">
                            </div>
                            <div class="form-group mt-3">
                                <textarea class="form-control" name="message" rows="5" placeholder="Message" required data-rule="required" data-msg="Please write something for us"></textarea>
                            </div>
                            <!-- <div class="my-3">
                                <div class="loading">Loading</div>
                                <div class="error-message"></div>
                                <div class="sent-message">Your message has been sent. Thank you!</div>
                            </div> -->
                            <div class="text-center"><button class="btn btn-a" type="submit">Send Message</button>
                            </div>
                    </form>
                </div>
                
            </div>          
        </div>
    </section>

    <?php include  '../_common/footer.php' ?>
    <?php include '../_common/post_footer.php'; ?>

</body>
</html>