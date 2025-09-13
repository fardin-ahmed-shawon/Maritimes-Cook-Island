<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/slider6.jpg');
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
        background: #181A40;
        /* overlay bg */
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
    .image-icon {
        width: 30px;
    }

    .hover-icon-position {
        color: white;
        position: absolute;
        top: 16px;
        right: 20px;
        color: #6E72B7;
        font-size: 40px;
    }

    .grid_title {
        font-size: 16px;
        line-height: 19px;
        font-family: "Roboto", sans-serif;
    }

    .grid_text {
        font-size: 14px;
        line-height: 25px;
        font-family: "Roboto", sans-serif;
    }

    .topic_title {
        font-size: 20px;
        font-family: "Roboto", sans-serif;
    }

    .image-icon {
        width: 30px;
    }

    .btn-style {
        padding: 8px 12px;
        background-color: #E9732A;
        color: #fff;
        font-weight: 600;
        border: 0;

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
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">Yachts</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="">
                <div class="row choose_us">
                    <div class="col-md-12 col-lg-8 ">
                        <!-- Left Title -->
                        <div class="choose_us_title">
                            <h2 class="mb-5">STCW Dispensations</h2>
                        </div>
                        <div class="row p-2 bg_color">
                            <div class="col-md-12 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>For verification of any seafarer certification issued by the Cook Islands: <i class=>Cook Islands Certificates of Endorsement, Cook Islands Certificates of Competency and Cook Islands Certificates of Proficiency</i> , you may use any of the following three methods:</p>
                                        <strong>1. QR Code Verification</strong>
                                        <p>Each electronic certificate issued by Maritime Cook Islands includes a unique QR Code for instant verification.</p>
                                        <strong>How Our E-Certificates Work: QR Code Verification</strong>
                                        <p>Each electronic certificate issued by Maritime Cook Islands is equipped with a secure Quick Response (QR) Code. This QR code is the primary method for instant verification of the certificate’s authenticity.</p>
                                        <p>When verifying certificates, always confirm the URL in your browser’s address bar. Our official verification portal is located at <a href="s2.upvise.com">s2.upvise.com</a>. Please be advised that any deviation, no matter how slight, indicates an unofficial site.</p>
                                        <p>Examples of Unofficial URLs:</p>
                                        <div class="d-flex flex-column">
                                            <a href="s2upvise.com">s2upvise.com</a>
                                            <a href="s2upvise.com">s2upvise.com</a>
                                            <a href="s2upvise.net">s2upvise.net</a>
                                            <a href="s2upvis.com">s2upvis.com</a>
                                        </div>
                                        <strong>The QR Code Verification Process:</strong>
                                        <ul class="list-group-numbered">
                                            <li><strong>Locate the QR Code:</strong> You will find a unique QR code printed directly on your electronic certificate</li>
                                            <li><strong>Scan the QR Code:</strong> Use a smartphone or tablet with a QR code scanning application. Most modern mobile devices have this capability built into their camera apps.</li>
                                            <li><strong>Access Certificate Information:</strong> Upon scanning, the QR code will typically link you directly to a secure digital copy (PDF) of your certificate. This allows for immediate visual confirmation of the certificate’s details.</li>

                                        </ul>
                                        <strong>What to Expect When You Scan:
                                        </strong>
                                        <p>Currently, the QR code embedded in our certificates links directly to a PDF copy of the certificate itself. This provides an immediate way for Port State Control, employers, and other relevant authorities to view the certificate’s content and verify its appearance against officially issued Maritime Cook Islands documents</p>
                                        <p><strong>2. Online Verification Form</strong>
                                            You can also verify a certificate using our online verification form. Simply enter the relevant certificate number and seafarer details to confirm authenticity.</p>
                                        <a href="https://s2.upvise.com/form.htm?db=213158&tid=CB78E28DDBA9908BFF0C6B62E86FEC">
                                            <button class="btn-style">Verify your Cook Islands certification here</button>

                                        </a>
                                        <br>
                                        <br>
<p><strong>3. Email Verification</strong>
If needed, verification can be requested directly by emailing the Seafarer Training & Certification Department: seafarers@maritimecookislands.com</p>

                                    </div>
                                </div>

                            </div>

                        </div>


                    </div>
                    <div class="col-md-4 ps-4 d-none d-lg-block">
                        <!-- Right Title -->
                        <div class=" text-start mt-3 mt-md-0 ps-4 popular_title">
                            <h2 class="mb-5">Popular Services</h2>
                        </div>
                        <div class="popular-services position-relative">
                            <img src="./img/popular services img 1.jpg" alt="" class="image-fluid w-100">

                            <div class="popular-ser-desc position-absolute">
                                <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                            </div>

                            <div class="content_hover position-absolute">
                                <a href="">
                                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                                </a>
                                <p class="text-p">
                                    There is no legal or other impediment to any P&I Club / Insurer
                                    offering cover to Cook Islands flagged vessels.
                                </p>
                            </div>
                            <div class="content_hover position-absolute">
                                <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>

                                <a href="">
                                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                                </a>
                                <p class="text-p">
                                    There is no legal or other impediment to any P&I Club Insurer offering cover to Cook Islands flagged vessels.

                                </p>
                            </div>
                        </div>

                        <div class="popular-services position-relative mt-5">
                            <img src="./img/popular services img 2.jpg" alt="" class="image-fluid w-100">
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
                        <div class="popular-services position-relative mt-5">
                            <img src="./img/popular services img 3.jpg" alt="" class="image-fluid w-100">
                            <div class="popular-ser-desc position-absolute">
                                <h3 class="text-white fs-4">Seafarer Training & Certification</h3>
                            </div>
                            <div class="content_hover position-absolute">
                                <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>

                                <a href="">
                                    <h3 class="text-white fs-4">
                                        Seafarer Training & Certification</h3>
                                </a>
                                <p class="text-p">
                                    There is no legal or other impediment to any P&I Club / Insurer offering cover to Cook Islands flagged vessel
                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!--========================================================================-->
            <!---------------------------- Your Content End Here ------------------------->
            <!--========================================================================-->
            <?php require 'footer.php'; ?>