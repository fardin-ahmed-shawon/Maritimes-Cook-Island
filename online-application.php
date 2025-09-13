<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/slider3.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .text-p {
        font-size: 14px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 15px;
    }

    .bg-primary {
        background-color: #22255B !important;
    }

    .bg_color {
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

    .popular-ser-desc {
        bottom: 15px;
        left: 25px;
    }

    .choose_us_title h2::before,
    .popular_title h2::before {
        content: "";
        position: absolute;
        width: 55px;
        height: 2px;
        background: #e9732a;
        bottom: -15px;
        top: 60px;
    }

    .choose_us_title,
    .popular_title {
        position: relative;
    }

    .choose_us_title h2,
    .popular_title h2 {
        font-family: "Roboto", Sans-serif;
        font-size: 30px;
        font-weight: 600;
    }

    .choose_us {
        margin-top: 70px;
    }

    .content_hover p {
        color: #D9D9E0;
        font-weight: 300;
        font-size: 14px;
    }

    .popular-services {
        overflow: hidden;
        cursor: pointer;
        position: relative;
    }

    .choose_us_title h2,
    .popular_title h2 {
        font-family: "Roboto", Sans-serif;
        font-size: 30px;
        font-weight: 600;
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
        background: #181A40;
        /* overlay bg */
        display: flex;
        flex-direction: column;
        justify-content: center;
        opacity: 0;
        visibility: hidden;
        transition: 0.3s ease;
        z-index: 2;
    }

    .popular-services:hover .content_hover {
        opacity: 1;
        visibility: visible;
    }

    .program-details p {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 25px;
    }

    .program-details strong {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 25px;
    }

    .program-details a {
        color: #DD5C1B;
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 25px;
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
    .hover-icon-position {
        color: white;
        position: absolute;
        top: 16px;
        right: 20px;
        color: #6E72B7;
        font-size: 40px;
    }

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
        <div class="row ">
            <div class="col-lg-8 ">
                <h1 class="display-4 text-white fw-bold mb-3 py-5">Online Application</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center mb-4">


        </div>

        <div class="row choose_us">
            <div class="col-md-8 mt-4">
                <!-- Left Title -->
                <div class=" choose_us_title">
                    <h2 class="mb-5">Online Registration</h2>
                </div>
                <div class="row px-2 py-5 bg_color">
                    <div class="col-md-12 py-3">
                        <div class="row">

                            <div class="col-md-12">
                                <div class="program-details py-2">
                                    <p>
                                        <strong>Step 1:</strong>
                                        Please download the
                                        <strong>Cook Islands Declaration For Vessel Registration Form</strong>
                                        <a href="./pdf/Cook-Islands-Declaration-For-Vessel-Registration-v35.pdf">here</a>
                                    </p>
                                    <p>
                                        <strong>Step 2:</strong>
                                        Print, sign and scan the
                                        <strong>Cook Islands Declaration For Vessel Registration Form</strong>
                                        (Step 1) and upload to the supporting documentation section in the Online Application Form (Step 3).
                                    </p>
                                    <p>
                                        <strong>Step 3:</strong>
                                        Complete the Online Application Form
                                        <a href="https://s2.upvise.com/form.htm?db=213158&tid=A570E832EB3ADA61CF0CBA7D57F5AC">click here</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ps-4 d-none d-lg-block">
                \ <!-- Right Title -->
                <div class="text-start mb-5  mt-md-0 ps-4 popular_title">
                    <h2 class="mb-0">Popular Services</h2>
                </div>
                <div class="popular-services position-relative">
                    <img src="./img/popular services img 1.jpg" alt="" class="image-fluid w-100">

                    <div class="popular-ser-desc position-absolute">
                        <h3 class="text-white fs-4">Merchant Ships</h3>
                    </div>

                    <div class="content_hover position-absolute">
                        <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>
                        <a href="">
                            <h3 class="text-white fs-4">Merchant Ships</h3>
                        </a>
                        <p class="text-p">
                            Maritime Cook Islands Administrator of the Cook Islands ships registry, operates as an open registry with its main office in Rarotonga, Cook Islands, with additional offices in Italy and Monaco.
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