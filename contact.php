<?php  include_once('header.php') ?>
    <!-- Start  Page hero-->
    <section class="page-hero-sub  d-flex align-items-center " id="page-hero">
        <div class="overlay-photo-image-bg" data-bg-img="assets/images/sections-bg-images/pattern-bg-1-1.jpg" data-bg-opacity=".7"></div>
        <div class="particles-js  dots" id="particles-js"></div>
        <div class="container">
            <div class="row align-items-center">
            <div class="col-12 col-lg-12 ">
                <!--Start of .hero-text-area-->
                <div class="hero-text-area">
                <div class="row">
                    <div class="col-12">
                    <h1 class="hero-title  ">Contact Us <span class="design-element rounded-shape stripes"></span></h1>
                    <span class="design-element-banner-1 rounded-shape stripes"></span>
                    <span class="design-element-banner-2 rounded-shape stripes"></span>
                    <span class="design-element-banner-3 rounded-shape stripes"></span>
                    <span class="design-element-banner-4 rounded-shape stripes"></span>
                    <span class="design-element-banner-5 rounded-shape stripes"></span>
                    <span class="design-element-banner-6 rounded-shape stripes"></span>
                    
                    </div>
                </div>
                </div>
                <!--End of .hero-text-area-->
            </div>
            </div>
        </div>
    </section>
    <!-- End  Page hero-->
    <!-- Start  contact Section-->
    <section class="contact-us  mega-section  pb-0" id="contact-us">
      <div class="container">
        <section class="locations-section  mega-section ">
          <div class="sec-heading centered  ">
            <div class="content-area">
              <h2 class="title    wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Our Contact Information</h2>
            </div>
          </div>
          <div class=" contact-info-panel ">
            <div class="info-section ">
              <div class="row d-flex align-items-center justify-content-center">
                <div class="col-12 col-lg-7">     
                  <div class="info-panel  wow fadeInUp" data-wow-delay=".4s " style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">
                    <h4 class="location-title">Qatar</h4>
                    <div class="line-on-side "> </div>
                    <p class="location-address">Office No. 1, Floor No. 9, QFC Tower 1, Doha, Qatar</p>
                    <div class="location-card  "><i class="flaticon-email icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">email:</h6><a class="email link" href="mailto:info@hinology.com.qa">info@hinology.com.qa</a>
                      </div>
                    </div>
                    <div class="location-card  "><i class="flaticon-phone-call icon"></i>
                      <div class="card-content">
                        <h6 class="content-title">phone:</h6><a class="tel link" href="tel:0123456789">+974 5591 2112</a>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
        <section class="map-section  elf-section">
          <div class="sec-heading  centered   ">
            <div class="content-area">
              <h2 class="title    wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">find us on google maps</h2>
            </div>
          </div>
          <div class="map-box  wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
            <div class="mapouter">
              <div class="gmap_canvas">
                <iframe class="map-iframe" id="gmap_canvas" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Hinology, Qatar Financial Centre ,Office No. 1, Floor No. 9, QFC Tower 1, Doha, Qatar&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe>
                <!-- <iframe class="map-iframe" id="gmap_canvas" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Office No. 1, Floor No. 9, QFC Tower 1, Doha, Qatar&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe> -->
                <!-- <iframe class="map-iframe" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2seg!4v1613762954590!5m2!1sen!2seg"></iframe> -->
              </div>
            </div>
          </div>
        </section>
        <section class="contact-us-form-section  mega-section">
          <div class="row">
            <div class="col-12 ">
              <div class="contact-form-panel">
                <div class="sec-heading centered    ">
                  <div class="content-area">
                    <h2 class="title    wow fadeInUp" data-wow-delay=".4s" style="visibility: visible; animation-delay: 0.4s; animation-name: fadeInUp;">Have any questions? Let's answer them</h2>
                  </div>
                </div>
                <div class="contact-form-inputs wow fadeInUp" data-wow-delay=".6s" style="visibility: visible; animation-delay: 0.6s; animation-name: fadeInUp;">
                  <div class="custom-form-area input-boxed"> 
                    <!--Form To have user messages-->
                    <form class="main-form" id="contact-us-form" action="php/send-mail.php" method="post"><span class="done-msg"></span>
                      <div class="row ">
                        <div class="col-12 col-lg-6">
                          <div class="input-wrapper">
                            <input class="text-input" id="user-name" name="UserName" type="text">
                            <label class="input-label" for="user-name"> Name <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 col-lg-6">
                          <div class="input-wrapper">
                            <input class="text-input" id="user-email" name="UserEmail" type="email">
                            <label class="input-label" for="user-email"> E-mail <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 ">
                          <div class="input-wrapper">
                            <input class="text-input" id="msg-subject" name="subject" type="text">
                            <label class="input-label" for="msg-subject"> Subject <span class="req">*</span></label><span class="b-border"></span><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 ">
                          <div class="input-wrapper">
                            <textarea class=" text-input" id="msg-text" name="message"></textarea>
                            <label class="input-label" for="msg-text"> your message <span class="req">*</span></label><span class="b-border"></span><i></i><span class="error-msg"></span>
                          </div>
                        </div>
                        <div class="col-12 submit-wrapper">
                          <button class=" btn-solid" id="submit-btn" type="submit" name="UserSubmit">Send your message</button>
                        </div>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </section>
      </div>
    </section>
    <!-- End  contact Section-->
<?php  include_once('footer.php') ?>