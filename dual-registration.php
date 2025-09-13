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
.topic_title{
    font-size: 20px;
    font-family: "Roboto",sans-serif;
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
                <h2 class="mb-5">Dual Registration</h2>
            </div>
            <div class="row p-2 bg_color">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-12">
                     <p class="intro">
                        <p>A Dual registration allows a vessel to operate under two different categories of vessel type, i.e. private yacht and commercial yacht.</p>
                       
                        <strong class="topic-title">Registration Requirements for Commercial Yachts</strong>
                        <p>The applicant shall indicate on the application form for registration their desire to hold dual registration; alternatively an email to the DR / FM indicating the same desire will suffice.</p>
                        <p>Step 1: Please download the Cook Islands Declaration For Vessel Registration Form <a href="./pdf/Cook-Islands-Declaration-For-Vessel-Registration-v35.pdf">here</a></p>
                        <p>Step 2: Print, sign and scan the Cook Islands Declaration For Vessel Registration Form (Step 1) and upload to the supporting documentation section in the Online Application Form (Step 3).</p>
                        <p>Step 3: Complete the Online Application Form <a href="https://s2.upvise.com/form.htm?db=213158&tid=A570E832EB3ADA61CF0CBA7D57F5AC">click here</a></p>
<strong>Standards to be maintained</strong>
<p>While operating under Private registration (type that has the lowest safety standards), the vessel must maintain all safety standards that apply to Commercial registration (the type that requires the highest safety standards), except where minimum safe manning is concerned.</p>
<strong>Survey and Certification requirements</strong>
<p>The vessel shall be surveyed and inspected at scheduled intervals, according to the anniversary/renewal date of the vessel, for commercial safety standards. A complete suit of certificates for private operation and for commercial operation shall be issued to the vessel. This enables the skipper to swap a complete book of complete certificates with ease. While operating privately the yacht MUST maintain all convention standards that are applicable while operating commercially. If the vessel is Classed during commercial operation, Class must be maintained during private operation</p>
<strong>Notification and alternation requirements</strong>
<p>Notification: The vessel representative (owner/skipper) must notify the Deputy Registrar and or Fleet Manager in advance of the intention to alternate the operation type to commercial/private, specifying the intended dates of operation.</p>
<strong>Alternate Certificates</strong>
<p>Registration and safety certificates for the elected operation type shall be displayed, while the previous operation type certificates shall be considered inactive and removed from display. The vessel may operate to the limits specified in the certificates on display. Log book entry: the operation alternation must be recorded in the yacht’s official logbook.</p>

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
                        There is no legal or other impediment to any P&I Club / Insurer offering cover to Cook Islands flagged vessels.

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
    </div>
</div>

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>