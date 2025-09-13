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
                <h1 class="display-4 text-white fw-bold mb-3">Vessel Registration Requirements</h1>
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
                <h2 class="mb-5">Vessel Registration Requirements</h2>
            </div>
            <div class="row p-2 bg_color">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-12">
                     <div class="ship-intro">
                       <h4>Ship Registration</h4>
                       <p>All vessels being considered for registration (except for unmanned barges and Fishing Vessels) will be assessed through Risk Analysis and Vetting. Any tankers that deliver fuel for fishing vessels at sea are deemed to be “fishing vessels” under the Marine Resources Act and therefore will be required to apply for a fishing licence.</p>
                        <br/> 
                       <p>The risk analysis inter alia considers the vessels performance and the proposed ISM management company’s performance. Fleet Managers and Deputy Registrars are authorised to vet vessels using the risk analysis template. Each variable in the template is to be scored and comments justifying each score are written in the comments section. Depending on the Risk Factor for the vessel, it will be rejected or may be accepted for registration by the Deputy Registrar (low risk), the Fleet Manager (medium risk) or CEO/ Technical Director (high risk).</p>
                        <h4>Provisional Registration</h4>
                    <p>The vessel registration process is commenced by completing an ‘Application for Registration’ available through a Deputy Registrar (specific to the region), who will lead you through the process.</p>
                      <p>The Application Form is to be accompanied by:
                        <br> <br>
                        <strong>Owners Details</strong>
                      </p>
                      <ul>
                        <li>Bill of Sale / Builders Certificate</li>
                        <li>Evidence of Shareholding of Owners ( if more than one owner)</li>
                        <li>Completed CISOA membership application <a href="ownership-structure.php">here</a></li>
                      </ul>  
                      <p>
                        <br>
                        <strong>Other</strong>
                      </p>
                      <ul>
                        <li>Signed Cook Islands Declaration for Vessel Registration form.</li>
                        <li>Copy of Charter agreement ( if charter registration)</li>
                        <li>Written consent from the underlying flag to charter to Cook Islands flag ( if charter registration)</li>
                    </ul>
                    <br> <br>
                    <p>Subject to approval by the Registrar of Ships, and upon payment of the registration fee, a Provisional Certificate of Registry will be issued. This certificate is effective from the date of issue and valid for a period of 3 months. During this time the requirements for permanent registration are to be completed. The Registrar may extend the period of provisional registration in special circumstances.</p>
                    <h4>Permanent Registration</h4>
                    <p>
                        <strong>Owners Details</strong>
                    </p>
                    <ul>
                        <li>Company Certificate / CISOA membership letter</li>
                    </ul>
                    <br>
                    <p>
                        <strong>Other</strong>
                    </p>
                    <ul>
                        <li>Carving and Markings Note, including current photo of vessel</li>
                        <li>Pre-Registration Inspection ( if applicable)</li>
                        <li>Proof of Deletion from previous flag ( if charter registration)</li>
                        <li>Proof of suspension from previous flag (if charter registration)</li>
                        <li>Completed copies of all previous closed CR ( as per SOLAS Chapter XI-1 Regulation 5-8) ( all vessels over 500GT)</li>
                        <li>Copy of P&I policy evidencing financial security for MLC regulation 2.5 and 4.2 ( applicable to all commercial vessels; MCI requires that the MLC financial security is maintained, and will require evidence that it is maintained) ( for commercially operated vessels, excluding unmanned barges)</li>
                    </ul>
                    <br>
                    <p>Note: The Registrar has the discretion to require, if deemed necessary, additional surveys to be conducted before issuance of a Permanent Certificate of Registry. Failure to submit required documents may delay the registration process.</p>
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