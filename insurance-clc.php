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
                            <h2 class="mb-5">CLC</h2>
                        </div>
                        <div class="row p-2 bg_color">
                            <div class="col-md-12 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>The Cook Islands is a party to the International Convention on Civil Liability for Oil Pollution Damage, protocol 1992. It was first established to guarantee sufficient compensation for individuals who experienced oil pollution damage due to maritime incidents involving oil pollution damage due to maritime incidents involving ships transporting oil. This convention applies to all seagoing vessels actively transporting oil in bulk as cargo. However, ships carrying more than 2000 tons of oil are mandated to hold insurance cover for potential oil pollution damage.</p>
                                        <h4>CLC Online Application Process</h4>
                                        <p>Step 1: Apply online</p>
                                        <p><a href="https://s2.upvise.com/form.htm?db=213158&tid=12366280B2DF258F2AE58A8A3241E6">Click</a> here to apply for one (1) vessel.</p>
                                        <p>Step 2: Upload the blue card from your P&I club</p>
                                        <p>Part of the online application requests for the blue card to be uploaded. You can obtain the blue card from your P&I club and upload it in the application.</p>
                                        <p>Step 3: Make your payment and attach it to the application.</p>
                                        <p>The CLC Certificate is USD300 per certificate.</p>
                                        <p>At the end of the online application, there is a section where you can upload your payment confirmation (this is optional). Note – this will speed up the application process.</p>
                                        <p>For more information on our list of Approved P&I Insurers, please <a href="insurance-pi-insurers.php">click here.</a></p>
                                        <p>Please make sure the blue cards are addressed to:</p>
                                        <strong>Maritime Cook Islands, P.O. Box 882,
Rarotonga, Cook Islands.</strong>
<p>For further information please contact:</p>
<p>Maritime Cook Islands</p>
<p>Phone: +682 23 848</p>
<p>Email: <a>wrecks@maritimecookislands.com</a></p>
<h3>Renewal of CLC Certificate</h3>
<p>Vessel(s) that are up for renewal will receive an email from the Maritime Cook Islands system containing instructions on how to renew and we will request for owners/applicants to review the vessel details and update if needed, send us the blue card, and make payment before we can process the new certificate.</p>
<p>If a certificate is cancelled due to change of name of vessel or owner etc, please <a href="https://s2.upvise.com/form.htm?db=213158&tid=12366280B2DF258F2AE58A8A3241E6">apply as a new application here</a> and follow the instructions in “How to Apply”.</p>

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