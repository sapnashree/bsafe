<?php $currentPage = 'team'; include('header.php');?>
<style>
    .footer .btn.btn-link {
        font-size: 1.3rem;
    }

    .container-team {
        display: flex;
        justify-content: center;
        align-items: center;
        min-height: 100vh;
    }

    .team-member {
        text-align: center;
    }

    .team-member img {
        max-width: 50%;
        height: auto;
        padding: 10px;
    }

    .team-member h1,
    .team-member p {
        margin: 0;
    }

    .team-member .d-flex {
        justify-content: center;
    }

    .team-member .btn {
        margin-right: 2px;
    }
</style>

<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s" style="background:url(img/team.jpg);background-size:cover;background-repeat:no-repeat">
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
<!-- Page Header End -->

<!-- Team Start -->
<div class="container-fluid container-team py-5">
    <div class="container pb-5">
        <div class="row g-5 align-items-center mb-5">
            <div class="col-md-6 wow fadeIn team-member" data-wow-delay="0.5s">
                <img class="img-fluid" src="img/male.jpg" alt="">
                <h1 class="display-6 mb-3">Vaibhav Khade</h1>
                <p class="mb-1">Director</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                    iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                    quis, fringilla risus. Pellentesque eu consequat augue.</p>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>

            <div class="col-md-6 wow fadeIn team-member" data-wow-delay="0.5s">
                <img class="img-fluid w-100" src="img/male.jpg" alt="">
                <h1 class="display-6 mb-3">Sourabh Desai</h1>
                <p class="mb-1">Director</p>
                <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur tellus augue,
                    iaculis id elit eget, ultrices pulvinar tortor. Quisque vel lorem porttitor, malesuada arcu
                    quis, fringilla risus. Pellentesque eu consequat augue.</p>

                <div class="d-flex justify-content-center">
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-lg-square btn-primary me-2" href="#"><i class="fab fa-youtube"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Team End -->

<?php include('gallery.php');?>
<?php include('contact_form.php');?>
<?php include('footer.php');?>
