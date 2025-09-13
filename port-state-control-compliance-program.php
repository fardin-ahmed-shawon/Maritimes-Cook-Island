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
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">Port State Control Compliance Support</h1>
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
            <div class="col-md-12 col-lg-8 ">
                <!-- Left Title -->
                <div class=" choose_us_title">
                    <h2 class="mb-5">Port State Control Compliance Support</h2>
                </div>
                <div class="row p-2 bg_color">
                    <div class="col-md-12 py-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro">
                                    <p>The Port State Control (PSC) Program is tailored for Cook Islands registered vessels. The program aims to minimise the risk of PSC deficiencies and detentions through a systematic analysis of the PSC inspection schedule based on Paris and Tokyo MoUs procedures. Additionally, it incorporates preventive Flag State implementation inspections for a proactive approach to compliance.</p>
                                    <h2 class="text-center mt-2 mb-4">How does it work?</h2>
                                </div>
                                <div class="row">
                                    <div class="col-md-6 py-3">
                                        <div class="row">
                                            <div class="col-3 flex flex-column gap-3">
                                                <img class="img-fluid" src="./img/risk.png" alt="">
                                                <h2 class="text-center fs-2">01</h2>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="fs-6">
                                                    01
                                                    Risk Assessment</h5>
                                                <p class="text-p">MCI evaluates the risk level of each Cook Islands registered vessel in Tokyo & Paris MoUs, considering parameters like inspection results and manager performance.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <div class="row">
                                            <div class="col-3 flex flex-column gap-3">
                                                <img class="img-fluid" src="./img/monitor-mag.webp" alt="">
                                                <h2 class="text-center fs-2">02</h2>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="fs-6">Inspection Planning</h5>
                                                <p class="text-p">Based on risk level and last PSC Inspection, MCI calculates the PSC inspection window for each vessel.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <div class="row">
                                            <div class="col-3 flex flex-column gap-3">
                                                <img class="img-fluid" src="./img/Vessel-Monitoring.webp" alt="">
                                                <h2 class="text-center fs-2">03</h2>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="fs-6">Vessel Monitoring</h5>
                                                <p class="text-p">MCI uses AIS and LRIT Systems to track the positions of all registered vessels in Paris and Tokyo MoUs.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <div class="row">
                                            <div class="col-3 flex flex-column gap-3">
                                                <img class="img-fluid" src="./img/Timely-Coordination.webp" alt="">
                                                <h2 class="text-center fs-2">04</h2>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="fs-6">Timely Coordination
                                                </h5>
                                                <p class="text-p">Factoring in the PSC inspection window and vessel data. MCI contacts the vessel’s managers in advance to arrange and FSI inspection at a convenient port.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <div class="row">
                                            <div class="col-3 flex flex-column gap-3">
                                                <img class="img-fluid" src="./img/FSI-Inspection.png" alt="">
                                                <h2 class="text-center fs-2">05</h2>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="fs-6">NFSI Inspection</h5>
                                                <p class="text-p">Conducted by an approved Flag State surveyor, the FSI inspection ensures compliance with standards and prepares the vessel for the upcoming PSC inspection.</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-6 py-3">
                                        <div class="row">
                                            <div class="col-3 flex flex-column gap-3">
                                                <img class="img-fluid" src="./img/Results-and-Actions.png" alt="">
                                                <h2 class="text-center fs-2">06</h2>
                                            </div>
                                            <div class="col-9">
                                                <h5 class="fs-6">Results & Actions</h5>
                                                <p class="text-p">After FSI Inspection, the manager receives a report with identified deficiencies. MCI collaborates with managers to address and rectify deficiencies, ensuring compliance with applicable standards.</p>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="content">
                                    <h5>Technical Assistance</h5>
                                    <p>For PSC Inspections, MCI offers technical assistance through its European and Asia Pacific offices, including liaising with local Port State Control authorities and arranging Cook Islands Approved Surveyors.</p>
                                </div>
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


<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>