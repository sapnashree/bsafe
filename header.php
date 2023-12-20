
<head>
    <meta charset="utf-8">
    <title>B-Safe</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">


    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&family=Red+Rose:wght@600;700&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
    <style>
        #topBar {
    position: relative;
    top: 0;
    width: 100%;
    background-color: #333; /* Set your desired background color */
    z-index: 1000; /* Set a higher z-index to make sure it's above other elements */
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Optional: Add a box shadow */
}
@media (min-width: 992px){
.navbar {
    height: 68px;
    margin-top: 140px;
}
}
    </style>
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" role="status" style="width: 3rem; height: 3rem;"></div>
    </div>
    <!-- Spinner End -->
    <!-- Brand Start -->
    <div id="topbar" class="container-fluid bgggg text-white pt-4_1 pb-5_1 d-none d-lg-flex">
        <div class="container pb-2">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex ">
                    <i class="bi bi-telephone-inbound fs-4"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Call Now</h5>
                        <span>+91 9881422423</span>
                    </div>
                </div>
                <a href="index.php"><img src="img/logo.png" alt="logo" class="logo"></a>
                <div class="d-flex">
                    <i class="bi bi-envelope fs-4"></i>
                    <div class="ms-3">
                        <h5 class="text-white mb-0">Mail Now</h5>
                        <span>bsafefacilities@gmail.com</span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Brand End -->


    <!-- Navbar Start -->
    <div class="container-fluid sticky-top">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light bg-white py-lg-0 px-lg-3">
                <a href="index.php" class="navbar-brand d-lg-none">
                <img src="img/logo.png" alt="logo" class="logo">
                </a>
                <button type="button" class="navbar-toggler me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-expanded="true">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav">
                   <a href="index.php" class="nav-item nav-link <?php echo ($currentPage == 'index') ? 'active' : ''; ?>">Home</a>
                   <a href="about.php" class="nav-item nav-link <?php echo ($currentPage == 'about') ? 'active' : ''; ?>">About</a>
                   <a href="service.php" class="nav-item nav-link <?php echo ($currentPage == 'service') ? 'active' : ''; ?>">Services</a>
                   <a href="team.php" class="nav-item nav-link <?php echo ($currentPage == 'team') ? 'active' : ''; ?>">Team</a>
                   <a href="contact.php" class="nav-item nav-link <?php echo ($currentPage == 'contact') ? 'active' : ''; ?>">Contact</a>
               </div>
                    <div class="ms-auto d-none d-lg-flex">
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-linkedin-in"></i></a>
                        <a class="btn btn-sm-square btn-primary ms-2" href=""><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var logoContainer = document.createElement('div');
        logoContainer.innerHTML = '<img src="img/logo.png" alt="logo" class="logo" style="width:70px; opacity:0; transition: opacity 0.3s ease;">';
        document.getElementById('navbarCollapse').insertBefore(logoContainer, document.getElementById('navbarCollapse').firstChild);

        function handleScroll() {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;
            var scrollThreshold = 200;

            if (scrollPosition > scrollThreshold) {
                logoContainer.querySelector('.logo').style.opacity = 1;
            } else {
                logoContainer.querySelector('.logo').style.opacity = 0;
            }
        }

        window.addEventListener('scroll', handleScroll);

        window.addEventListener('load', function () {
            handleScroll();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script> -->





<!-- <script>
    document.addEventListener('DOMContentLoaded', function () {
        var navbarCollapse = document.getElementById('navbarCollapse');
        var logoAdded = false; // Flag to track whether the logo container has been added

        function createLogoContainer() {
            var logoContainer = document.createElement('div');
            logoContainer.classList.add('logo-container');
            logoContainer.innerHTML = '<img src="img/logo.png" alt="logo" class="logo" style="width:70px; opacity:1; transition: opacity 0.3s ease;">';
            navbarCollapse.insertBefore(logoContainer, navbarCollapse.firstChild);
            return logoContainer;
        }

        function handleScroll() {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;
            var scrollThreshold = 200;

            if (scrollPosition > scrollThreshold && !logoAdded) {
                // Add logo container if it doesn't exist
                createLogoContainer();
                logoAdded = true; // Set the flag to true after adding the logo container
            } else if (scrollPosition <= scrollThreshold && logoAdded) {
                // Remove logo container if scroll position is less than or equal to the threshold
                var logoContainer = document.querySelector('.logo-container');
                if (logoContainer) {
                    logoContainer.remove();
                    logoAdded = false; // Reset the flag after removing the logo container
                }
            }
        }

        window.addEventListener('scroll', handleScroll);

        window.addEventListener('load', function () {
            handleScroll();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script> -->


<script>
    document.addEventListener('DOMContentLoaded', function () {
        var navbarCollapse = document.getElementById('navbarCollapse');
        var logoAdded = false; // Flag to track whether the logo container has been added

        function createLogoContainer() {
            var logoContainer = document.createElement('div');
            logoContainer.classList.add('logo-container');
            logoContainer.innerHTML = '<img src="img/logo.png" alt="logo" class="logo" style="width:70px; opacity:1; transition: opacity 0.3s ease;">';
            navbarCollapse.insertBefore(logoContainer, navbarCollapse.firstChild);
            return logoContainer;
        }

        function handleScroll() {
            var scrollPosition = window.scrollY || document.documentElement.scrollTop;
            var scrollThreshold = 200;

            if (window.innerWidth >= 992) {
                // For desktop view
                if (scrollPosition > scrollThreshold && !logoAdded) {
                    // Add logo container if it doesn't exist
                    createLogoContainer();
                    logoAdded = true; // Set the flag to true after adding the logo container
                } else if (scrollPosition <= scrollThreshold && logoAdded) {
                    // Remove logo container if scroll position is less than or equal to the threshold
                    var logoContainer = document.querySelector('.logo-container');
                    if (logoContainer) {
                        logoContainer.remove();
                        logoAdded = false; // Reset the flag after removing the logo container
                    }
                }
            } else {
                // For mobile view, always remove the logo container
                var logoContainer = document.querySelector('.logo-container');
                if (logoContainer) {
                    logoContainer.remove();
                    logoAdded = false; // Reset the flag after removing the logo container
                }
            }
        }

        window.addEventListener('scroll', handleScroll);
        window.addEventListener('resize', handleScroll); // Handle scroll on window resize

        window.addEventListener('load', function () {
            handleScroll();
        });

        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function (e) {
                e.preventDefault();
                document.querySelector(this.getAttribute('href')).scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });
    });
</script>
