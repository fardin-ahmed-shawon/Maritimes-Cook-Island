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
    font-family: "Roboto", sans-serif;
    color: #363636;
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
    .choose_us_title h2, .popular_title h2 {
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
        padding: 60px 20px 0px 20px;
        background: #181A40; /* overlay bg */
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
        .program-details p, .consequences p, .commitment p, .links p {
        font-family: "Roboto", sans-serif;
        color: #000000a8;
        font-weight: 400;
    }

    .program-details ul li {
        font-size: 16px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 15px;
        font-family: "Roboto", sans-serif;
        color: #363636;
    }
    .links ul li a {
    font-weight: 300;
    font-family: "Roboto", sans-serif;
    }

    .contact p {
        font-family: "Roboto", sans-serif;
        font-weight: 300;
        color: #363636;
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
                <h1 class="display-4 text-white fw-bold mb-3">Sanctions Monitoring Program</h1>
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
            <div class="col-md-12 col-lg-8">
                            <!-- Left Title -->
            <div class="col-md-8 choose_us_title">
                <h2 class="mb-0">Sanctions Monitoring Program</h2>
            </div>
            <div class="row p-2 bg_color">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-12">
                     <div class="intro">
                        <p class="text-p">Maritime Cook Islands (MCI) as the Cook Islands Ship Registry Administrator, ensures that its operations align with government policies on enforcing and monitoring sanction compliance.</p>
                        <p class="text-p">Consistent with the Cook Islands government policy MCI insists that flagged vessels comply with UN, OFAC, UK and EU sanctions.</p>
                        <p class="text-p">MCI enforces recognised sanctions and regulatory requirements by de-registering designated vessels and through a comprehensive monitoring and compliance program.</p>
                     </div>
                     <div class="program-details">
                        <p>
                            <strong>The program includes:</strong>
                        </p>
                        <p>
                            <strong>Insurers</strong>
                        </p>
                        <ul>
                            <li>
                                All insurers undergo onboarding and annual vetting in accordance with IMO guidelines on accepting insurance providers. Insurers that are unable to comply will not be authorised service providers to Cook Island flagged vessels.
                            </li>
                        </ul>
                        <p>
                            <strong>Pre-registration</strong>

                        </p>
                        <ul>
                            <li>Comprehensive customer due diligence of owners, commercial operators, ISM managers and other persons of interest</li>
                            <li>A detailed vessel vetting that includes ownership, previous flagging, ISM manager’s history and performance, statutory certification, detentions, abandonment and incidents history.</li>
                        </ul>
                        <p>
                            <strong>During registration</strong>
                        </p>
                        <ul>
                            <li>Ongoing compliance screening is carried out for companies and individuals</li>
                            <li>Shipping activities are monitored daily through the newly established Monitoring Division, responsible for real time vessel tracking with intelligence software that identifies and alerts suspicious and illicit activity; i.e. going dark by disabling or manipulating the Automatic Identification System (“AIS”) spoofing; ship-to-ship transfers (“STS”); voyage irregularities.</li>
                        </ul>
                        <p>
                            <strong>
                                Consequences of suspicious and illicit activity
                            </strong>
                        </p>
                     </div>
                     <div class="consequences">
                        <p>Alerts are treated seriously with immediate action and if required an investigation will be conducted.</p>
                        <p>Vessels found to be engaged or complicit in suspicious or illicit activity will be de-registered.</p>
                     </div>
                     <div class="commitment">
                        <p>Maritime Cook Islands is committed to create awareness and assist in combatting bad actors by reporting necessary information to relevant Cook Islands government agencies and other external sanction monitoring bodies.</p>
                        <p>Maritime Cook Islands is committed to continuously adapting and refining its approach to the complex and dynamic landscape of sanction risk monitoring and compliance.</p>
                     </div>
                     <div class="links">
                        <p>
                            <strong>Link below MCI circulars</strong>
                        </p>
                        <ul>
                            <li><a href="./pdf/MCI-Circular-298-Automatic-Identification-Systems.pdf">AIS</a></li>
                            <li><a href="./pdf/MCI-Circular-297-2024-STS-Transfer.pdf">STS</a></li>
                            <li><a href="./pdf/MCI-Circular-302-2024-Oil-Cap-Attestation.pdf">OPC Attestations</a></li>
                        </ul>
                     </div>
                     <div class="contact">
                        <p>
                            <span>For further details please contact</span>
                            <a href="">monitoring@maritimecookislands.com</a>
                        </p>
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