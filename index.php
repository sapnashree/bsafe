<?php $currentPage = 'index'; include('header.php');?>
<style>
    .textt{
        color:#031b4e;
    }
    .btn3{
       background:#031b4e; 
    }
</style>
    <!-- Carousel Start -->
    <div class="container-fluid header-carousel px-0 mb-5">
        <div id="header-carousel" class="carousel slide carousel-fade" data-bs-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="img/carousel-1.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-start">
                                <div class="col-lg-7 text-start">
                                    <h3 class="display-1_1 text-white animated slideInRight mb-3">Navigating Careers with Simplicity and Security</h3>
                                    <p class="mb-5 animated slideInRight">Our placement services are dedicated to simplifying your career choices while prioritizing the security of your professional endeavors.</p>
                                    <a href="about.php" class="btn  btnn py-3 px-5 animated slideInRight">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img class="w-100" src="img/carousel-2.jpg" alt="Image">
                    <div class="carousel-caption">
                        <div class="container">
                            <div class="row justify-content-end">
                                <div class="col-lg-7 text-end">
                                    <h2 class="display-1_1 text-white animated slideInLeft mb-3">Simplified Paths <br> to Career Security</h2>
                                    <p class="mb-5 animated slideInLeft">Our dedicated services simplify your path, providing guidance for a secure and successful professional trajectory. Trust us to streamline your choices, ensuring a steadfast route to career success.</p>
                                    <a href="about.php" class="btn btnn py-3 px-5 animated slideInLeft">Explore More</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#header-carousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#header-carousel" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
    <!-- Carousel End -->


    <!-- About Start -->
    <div class="container-fluid py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="row g-0">
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-1.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-2.jpg">
                        </div>
                        <div class="col-6">
                            <img class="img-fluid" src="img/about-3.jpg">
                        </div>
                        <div class="col-6">
                            <div class="bg-primary w-100 h-100 mt-n5 ms-n5 d-flex flex-column align-items-center justify-content-center exp">
                                <div class="icon-box-light">
                                    <i class="bi bi-award text-white"></i>
                                </div>
                                <h1 class="display-1 text-white mb-0" data-toggle="counter-up">10</h1>
                                <small class="fs-5 text-white">Years Experience</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="display-6 mb-4">Safeguarding Success, Nurturing Facilities —<br> B-Safe, Your Trusted <br> Facility Management Partner.</h1>
                    <p class="mb-4" style="text-align: justify;">B-Safe Facilities India Pvt. Ltd., an ISO-certified company, brings together a skilled team of Facility Management professionals. Backed by extensive experience, our commitment and in-depth understanding have fostered long-term partnerships with clients. We specialize in tailoring our services to the unique needs of various industries, enabling them to focus on their core competencies with confidence.</p>
                    
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <?php include('count.php');?>
   <!-- mission & vision -->
<section class="vision pt-0 container-fluid bg-primary feature pt-5" id="vision">
    <div class="container_msion">
        <div class="flex-container">
          <!-- Vision Section -->
          <div class="vision-section">
              <div class="section-header">
                  <i class="fa fa-eye" style="font-size:45px;color:white"></i>
                  <h2 style="color:white;">Vision</h2>
              </div>
              <div class="section-content">
                 <p style="color:white;">To stand out as premier service providers in facility management. Our vision is to lead as a professional team in facility management, renowned for creating and sustaining outstanding and innovative learning environments.</p>
               </div>
          </div>
               <div class="vertical-line"></div>
               <!-- Mission Section -->
       <div class="mission-section">
           <div class="section-header_mission"> 
               <h2 style="color:white;">Mission</h2>  &nbsp;   &nbsp; <i class="fa fa-bullseye"       style="font-size:45px;color:white"></i>
            </div>
         <div class="section-content2">
            <p style="color:white;">Dedicated to delivering optimal and budget-friendly Facility Services in Maharashtra. Committed to respecting individual and professional needs while striving for excellence.</p>
         </div>
      </div>

   </div>
</section>
<!-- mission & vision -->
<!-- mission End -->

    <!-- Service Start -->
    <div class="container-fluid container-service py-5">
        <div class="container ">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Excellence in Every Service</h1>

            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <!-- <i class="bi bi-heart-pulse text-dark"></i> -->
                            <i class="fas fa-user-tie text-dark"></i>
                        </div>
                        <h5 class="mb-3">Recruitment Services</h4>
                            <p class="mb-4 textt"> Your Guide to Informed Recruitment and HR Excellence with B-SAFE Consultancy.</p>
                        <a class="btn btn3 btn-light px-3" href="service.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.3s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="fas fa-briefcase text-dark"></i> 
                        </div>
                        <h5 class="mb-3">Third Party Staffing</h4>
                            <p class="mb-4 textt">Unlocking Potential, Empowering Businesses: Your Trusted Third-Party Staffing Partner.</p>
                        <a class="btn btn3 btn-light px-3" href="service.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="fas fa-shield-alt text-dark"></i>

                        </div>
                        <h5 class="mb-3">Security Services</h4>
                            <p class="mb-4 textt">Securing Your Tomorrow, Today: Unmatched Excellence in Security Services.</p>
                        <a class="btn btn3 btn-light px-3" href="service.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6 wow fadeInUp" data-wow-delay="0.7s">
                    <div class="service-item">
                        <div class="icon-box-primary mb-4">
                            <i class="fas fa-balance-scale text-dark"></i>
                        </div>
                        <h5 class="mb-3">Legal</h4>
                            <p class="mb-4 textt">Navigating Legal Complexities with Expertise and Integrity.</p>
                        <a class="btn  btn3 btn-light px-3" href="service.php">Read More<i class="bi bi-chevron-double-right ms-1"></i></a>
                    </div>
                </div>
            
             
            </div>
        </div>
    </div>
    <!-- Service End -->
   
    <?php include('contact_form.php');?>
    <?php include('clients.php');?>
    <?php include('footer.php');?>
 