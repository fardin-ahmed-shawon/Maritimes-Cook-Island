<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/slider5.jpg');
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

    .choose_content p {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 25px;
        color: #363636;
    }

    .choose_content strong {
        font-weight: 600;
        font-family: "Roboto", sans-serif;
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

    .hover-icon-position {
        color: white;
        position: absolute;
        top: 16px;
        right: 20px;
        color: #6E72B7;
        font-size: 40px;
    }

    a img {
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

    .text-bg {
        background-color: rgba(128, 128, 128, 0.1);
        ;
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
                <h1 class="display-4 text-white fw-bold mb-3">Cook Islands Maritime Jurisdiction</h1>
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
                <h2 class="mb-0">Cook Islands Maritime Jurisdiction</h2>
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
                                <div class="choose_content">
                                    <p>
                                        <strong>Financial Regulatory Standards in the Cook Islands.</strong>
                                    </p>
                                    <p>The Cook Islands is rated as one of the most compliant countries in the world for anti-money laundering (AML). That rating is from the objective and comprehensive Organization for Economic Cooperation and Development (OECD) & Financial Action Task Force (FATF) Mutual Evaluation Report September 2018.</p>
                                    <p>The Cook Islands is rated higher for AML than Jersey, Guernsey and the British Overseas Territories. See the official statement from the Cook Islands FSC Commissioner, who oversees the regulation and application of AML laws in the Cook Islands.</p>
                                    <p>No documents found.</p>
                                    <p>
                                        <strong>Legal Opinion from Norton Rose Fulbright – Cook Islands Ships Registry</strong>
                                    </p>
                                    <p>Maritime Cook Islands requested an opinion from Norton Rose Fulbright on the laws and the procedures of registration of ship and mortgages on the Cook Islands register. Download full report below.</p>

                                    <br>
                                    <br>
                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                        <p class="text-bg p-2">Legal Opinion from Norton Rose Fulbright – Cook Islands Ships Registry</p>
                                        <a href="./pdf/Legal-Opinion-from-Norton-Rose-Fulbright-Cook-Islands-Ships-Registry">
                                            <img src="./img/pdf icon.png" alt="" class="">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ps-4">
                <div class="popular-services position-relative">
                    <img src="./img/popular services img 2.jpg" alt="" class="image-fluid w-100">

                    <div class="popular-ser-desc position-absolute">
                        <h3 class="text-white fs-4">Merchant Ships</h3>
                    </div>

                    <div class="content_hover position-absolute">
                        <a href="">
                            <a href=""> <span class="ms-5"><i class="fa-solid fa-arrow-right hover-icon-position"></i></a>
                            <h3 class="text-white fs-4">Merchant Ships</h3>
                        </a>
                        <p class="text-p">
                            Maritime Cook Islands Administrator of the Cook Islands ships registry, operates as an open registry with its main office in Rarotonga, Cook Islands, with additional offices in Italy and Monaco.
                        </p>
                    </div>
                </div>
                <div class="popular-services position-relative mt-5">
                    <img src="./img/popular services img 1.jpg" alt="" class="image-fluid w-100">

                    <div class="popular-ser-desc position-absolute">
                        <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                    </div>

                    <div class="content_hover position-absolute">
                        <a href=""> <span class="ms-5"><i class="fa-solid fa-arrow-right hover-icon-position"></i></a>
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