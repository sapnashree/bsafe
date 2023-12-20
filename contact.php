<?php $currentPage = 'contact'; include('header.php');?>
<style>
    .call_no{
            font-size:1.5rem;
    }
    @media (max-width: 767px) {
        .call_no {
        font-size: 1rem;
    }
}
</style>
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background:url(img/contact.jpg);background-size:cover;background-repeat:no-repeat">
        <!-- <div class="container text-center py-5 mt-4">
            <h1 class="display-2 text-white mb-3 animated slideInDown">Our Team</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb justify-content-center mb-0">
                    <li class="breadcrumb-item"><a href="#">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">Pages</a></li>
                    <li class="breadcrumb-item" aria-current="page">Our Team</li>
                </ol>
            </nav>
        </div> -->
    </div>


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container " style="padding-top: 3rem !important;">
            <div class="text-center mx-auto wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="display-6 mb-3">Have Any Query? Feel Free To Contact Us</h1>
                <p class="mb-5">Your questions matter. Reach out to us anytime for assistance or information. We're here to make sure your experience is seamless and your inquiries are promptly addressed. Feel free to contact us—your satisfaction is our commitment.</p>
            </div>
         
           
        </div>
    </div>
    <!-- Contact End -->


    <?php include('contact_form.php');?>
    <?php include('clients.php');?>
    <?php include('footer.php');?>
 