<?php $currentPage = 'about'; include('header.php');?>
<style>
 
   .count_total {
        margin-left: 200px;
    margin-right: 200px;
    padding-bottom: 50px;
    }
    .bg_box{
        background: #dae2f1 !important;
    }
    .a{
        text-align: justify;
    padding: 20px;
    }
    .img-fluid {
    max-width: 100%;
    height: auto;
    padding: 10px;
    /* margin-left: 20%; */
    margin-top: -39px;
    }

    .flex-33 {
        position: relative;
        height: 80%;
    }

    .flex-33::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        width: 1px;
        height: 100%;
        /* background-color: #a7a7a7; */
    }

    .flex-33:nth-child(2)::before,
    .flex-33:nth-child(3)::before {
        background-color: #a7a7a7; 
    }

    .flex-33 p {
        margin-top: -32px !important;
        padding-left: 10px;
    }
    @media (max-width: 767px) {
        .flex2 {
            flex-direction: column;
        }

        .flex-33 {
            width: 100%;
             margin-bottom: 30px;
         padding: 0px;
        }

        .flex-33::before {
            display: none;
        }
        #conutt_0{
            margin-top: -72px;
        }
    }
</style>
    <!-- Page Header Start -->
    <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">About</h1>
          
        </div>
    </div>
    <!-- Page Header End -->

    
       <!-- About Start -->
       <div class="container-fluid py-5" style="padding-bottom:0px !important;">
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
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s" style="margin-top: 10px;">
                    <h3 class="display-6_1 mb-4">B-Safe Facilities India Pvt. Ltd. : Your Trusted ISO Certified Facility Management Partner</h3>
                    <p class="mb-4" style="text-align:justify">At B-Safe Facilities India Pvt. Ltd., excellence is not just a goal; it's our standard. As an ISO certified company, we take pride in assembling a team of talented Facility Management professionals dedicated to providing unparalleled services. </p>
                    <p class="mb-4" style="text-align:justify"> <b style="color: #031b4e;"> Our Journey:</b> <br> Established in 2013, B-Safe Facilities India Pvt. Ltd. has been a beacon of reliability and innovation in the realm of facility solutions. Formerly known as Job Corner Management Services, our journey began in 2013, and since then, our unwavering commitment to excellence has only strengthened.</p>
                </div>
   <div class="d-flex flex2 justify-content-between">
    <div class="flex-33 a">
        <p>
            <b style="color: #031b4e;">Guiding Principles:</b> <br>
            Our success is rooted in a set of guiding principles that define who we are. From our inception, our active, private ownership has remained steadfast in upholding these principles. They serve as the bedrock of our growth, ensuring that we evolve to meet the dynamic support service needs of our clients.
        </p>
    </div>
    <div class="flex-33 a">
        <p>
            <b style="color: #031b4e;">Facility Solutions:</b> <br>
            B-Safe Facilities India Pvt. Ltd. is not just a service provider; we are your strategic partner in achieving operational efficiency. Our professionally managed organization is geared towards offering comprehensive facility solutions tailored to meet the diverse needs of the corporate industry.
        </p>
    </div>
    <div class="flex-33 a">
        <p>
            <b style="color: #031b4e;">Client-Centric Approach:</b> <br>
            Understanding the specific requirements of each industry, we empower our clients to concentrate on their core competence. By seamlessly integrating our services, we contribute to the success of businesses across various sectors.
        </p>
    </div>
</div>
            </div>
        </div>
    </div>
    <!-- About End -->
   <section id="conutt_0">
      <?php include('count.php');?>
   </section>
   
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
<section style="padding:40px">
<div class="container-fluid">
    <div class="row">
        <!-- Image Part -->
        <div class="col-md-6">
            <img src="img/client.png" alt="Image Description" class="img-fluid">
        </div>

        <!-- Text Part -->
        <div class="col-md-6">
           <h3 class="display-6_1" style="font-weight: 600;text-transform: uppercase;">Clients</h3>
           <div style="position:relative;width:50px;background: #031b4e;height: 2px;"></div><br>
           <h4>Partners in Progress, Partners for Life</h4>
            <p style="margin-top: 0px;">Embark on a Journey of Unparalleled Success with B-Safe Facilities: Your Trusted Partner in Tailored Excellence. Our ISO-certified team of Facility Management professionals stands as the cornerstone of unwavering commitment and profound understanding, ensuring your experience is nothing short of extraordinary.
            </p>

            <p style="margin-top: 0px;">At B-Safe, we don't just manage facilities; we cultivate enduring relationships that empower you to focus on your core competencies. Our journey through diverse industries is marked by the forging of strategic partnerships, demonstrating our steadfast dedication to ensuring your triumph.
            </p>
            <p style="margin-top: 0px;">Since our inception in 2013, B-Safe Facilities has consistently set new standards for top-notch facility solutions in the corporate landscape. Guided by unwavering principles and propelled by active private ownership, we continually evolve to meet the dynamic support service needs of our clients.
            </p>

            <p style="margin-top: 0px;">Choose B-Safe for an experience defined by unparalleled excellence, unwavering reliability, and a bespoke approach to total facility solutions. Your path to enduring success is meticulously crafted by a team committed to elevating the beauty of your journey.
            </p>
            
        </div>
    </div>
</div>


</section>

    <?php include('footer.php');?>