<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img/slider5.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .text-p{
        font-size: 14px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 15px;
    }
     .bg-primary {
            background-color: #22255B !important;
        }
    .bg_color{
        background-color: #F7F7F7;
    }
    .popular-services {
        width: 300px;
        position: relative;
    }

    .popular-services:before {
        background: #00000075;
        width: 100%;
        content: "";
        height: 100%;
        position: absolute;
    }
    .popular-ser-desc {bottom: 15px;left: 25px;}
    .choose_us_title h2::before, .popular_title h2::before {
        content: "";
        position: absolute;
        width: 55px;
        height: 2px;
        background: #e9732a;
        bottom: -15px;
        top: 60px;
    }

    .choose_us_title, .popular_title {
        position: relative;
    }
    .choose_us {
        margin-top: 70px;
    }
    .content_hover p {
        color: #D9D9E0;
        font-weight: 300;
        font-size: 16px;
    }
        .popular-services {
        overflow: hidden;
        cursor: pointer;
        position: relative;
        }

        .popular-services img {
        transition: 0.3s ease;
        display: block;
        width: 100%;
        }

        .popular-ser-desc {
        position: absolute;
        bottom: 15px;  
        left: 20px;
        z-index: 1;
        }

        .popular-ser-desc h3 {
        margin: 0;
        }

        .content_hover {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        padding: 20px 20px 0px 20px;
        background: #181A40; /* overlay bg */
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;

        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
        z-index: 2; 
        }

        .popular-services:hover .content_hover {
        opacity: 1;
        visibility: visible;
        }
        
        .hover-icon-position{
        color: white;
        position: absolute;
        top: 16px;
        right: 20px;
        color: #6E72B7;
        font-size: 40px;
    }

       .legislation-icon {
        width: 30px;
    }
        /* .navbar-nav, .navbar {
            background-color: #22255B !important;
        }
        .navbar .navbar-nav .nav-link {
            color: #fff !important;
        }
        .dropdown-item {
            padding: 0px;
            color: #fff !important;
            background-color: #22255B !important;
        } */


        @media only screen and (max-width: 991px) {
            .logo {
                width: 160px;
            }
        }
</style>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->

<!-- Hero Banner Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-banner about-mci-hero">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">Electronic Certificate Verification</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center mb-4">
            <!-- Left Title -->
            <div class="col-md-8 choose_us_title">
                <h2 class="mb-0">Electronic Certificate Verification</h2>
            </div>
            <!-- Right Title -->
            <div class="col-md-4 text-start mt-3 mt-md-0 ps-4 popular_title">
                <h2 class="mb-0">Popular Services</h2>
            </div>
        </div>

        <div class="row choose_us">
            <div class="col-md-8 bg_color">
            <div class="row p-2">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-12">
                     <div class="intro">
                    <p>
                        At Maritime Cook Islands, we are committed to embracing modern solutions that enhance efficiency, security, and accessibility for our valued seafarers, shipowners, and operators. As part of this commitment, we have transitioned to issuing internationally recognized electronic certificates (e-certificates).
                    </p>
                    <p>This page provides you with essential information about our e-certificates, how they work, and the current methods for verification.</p>
                    <p>
                        <strong>What are Electronic Certificates?</strong>
                        Electronic certificates are official documents issued in a digital format rather than traditional paper. They serve the same purpose as their paper counterparts, verifying qualifications, vessel status, and compliance with maritime regulations. Our e-certificates are designed to meet the standards set forth by the International Maritime Organization (IMO).
                    </p> 
                    <br>
                    <p>
                        <strong>Benefits of E-Certificates:</strong>
                    </p>
                    <ul>
                        <li>
                            <strong>Instant Access:</strong>
                             Receive and access your certificates anytime, anywhere in the world.
                        </li>
                        <li>
                            <strong>Enhanced Security:</strong>
                            Digital features reduce the risk of fraud and tampering.
                        </li>
                        <li>
                            <strong>Environmentally Friendly:</strong>
                             Reduces paper consumption and supports sustainable practices.
                        </li>
                        <li>
                            <strong>Streamlined Processes:</strong>
                             Simplifies the application, issuance, and verification processes for authorities.
                        </li>
                        <li>
                            <strong>Cost-Effective:</strong>
                             Lowers costs associated with printing, handling, and postage.
                        </li>
                    </ul>
                    <br>
                    <p>
                        <strong>How Our E-Certificates Work: QR Code Verification</strong>
                    </p>
                    <p>
                        Each electronic certificate issued by Maritime Cook Islands is equipped with a secure <strong>Quick Response (QR) Code.</strong>  This QR code is the primary method for instant verification of the certificate’s authenticity.
                    </p>
                    <p>
                        When verifying certificates, <b> always confirm the URL in your browser’s address bar. </b>
                             Our official verification portal is located at <a href="">s2.upvise.com</a>Please be advised that any deviation, no matter how slight, indicates an unofficial site.
                         <br>
                         Examples of Unofficial URLs:   
                    </p>

                    </div>

                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-md-4 ps-4">
<div class="popular-services position-relative">
            <img src="./img/popular services img 1.jpg" alt="" class="image-fluid w-100">
            
            <div class="popular-ser-desc position-absolute">
          
                <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
            </div>

            <div class="content_hover position-absolute">
                       <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                </a>
                <p class="text-p">
                    There is no legal or other impediment to any P&I Club / Insurer 
                    offering cover to Cook Islands flagged vessels.
                </p>
            </div>
        </div>

            <div class="popular-services position-relative mt-5">
                <img src="./img/popular services img 2.jpg" alt="" class="image-fluid w-100">
                <div class="popular-ser-desc position-absolute">
                    <h3 class="text-white fs-4">Merchant Ships</h3>
                </div>
                            <div class="content_hover position-absolute">
                           
                       <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                </a>
                <p class="text-p">
                    There is no legal or other impediment to any P&I Club / Insurer 
                    offering cover to Cook Islands flagged vessels.
                </p>
            </div>
             </div>
                 <div class="popular-services position-relative mt-5">
                <img src="./img/popular services img 3.jpg" alt="" class="image-fluid w-100">
                <div class="popular-ser-desc position-absolute">
                    <h3 class="text-white fs-4">Seafarer Training & Certification</h3>
                </div>
                            <div class="content_hover position-absolute">
                       <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                </a>
                <p class="text-p">
                    There is no legal or other impediment to any P&I Club / Insurer 
                    offering cover to Cook Islands flagged vessels.
                </p>
            </div>
        
             </div>
              <div class="popular-services position-relative mt-5">
                <img src="./img/popular services img 4.jpg" alt="" class="image-fluid w-100">
                <div class="popular-ser-desc position-absolute">
                    <h3 class="text-white fs-4">Yacht Registration</h3>
                </div>
                            <div class="content_hover position-absolute">
                       <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                </a>
                <p class="text-p">
                    There is no legal or other impediment to any P&I Club / Insurer 
                    offering cover to Cook Islands flagged vessels.
                </p>
            </div>
             </div>
            </div>
        </div>
    </div>
</div>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>