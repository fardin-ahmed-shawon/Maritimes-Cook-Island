<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'About MCI'; // Set the page title
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
                <h1 class="display-4 text-white fw-bold mb-3">Why Choose the Cook Islands?</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <h2>Why choose the Cook Islands?</h2>
        <br />

        <div class="row">
            <div class="col-md-12 col-lg-8 p-5">
                <div class="row bg_color">
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c1.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5 class="grid_title">
                                    IMO STCW White List State</h5>
                                <p class="grid_text">The Cook Islands is on the IMO STCW White List, confirming compliance with international standards for seafarer training and certification</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c2.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5 class="grid_title">Cook Islands Government & Stakeholder Relationship</h5>
                                <p class="grid_text">MCI maintains a strong relationship with the Cook Islands Government and stakeholders, enabling higher level support when required.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c3.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>

                                    Innovative Technology</h5>
                                <p>Online application process for Registration and Seafarer Training & Certification providing for electronic, simple, and user-friendly application submission. MCI Certification is in electronic form and may be verified using Quick Response (QR) Code technology.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid w-50" src="img/c4.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5 class="grid_title">ISO 9001:2015 Certified</h5>
                                <p class="grid-text">MCIs quality management systems is certified to AS/NZS ISO 9001:2015 by Telarc. MCI customers can have confidence that MCI has effective management systems in place that work, further that MCI is committed to quality, productivity, customer satisfaction and the process of continual improvement.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c5.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>Commercial Support</h5>
                                <p>MCI recognises the importance of its customers’ commercial interests and works with customers to provide working solutions and support, every step of the way</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c6.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>
                                    No restrictions on the nationality of Crew</h5>
                                <p>No restrictions to the nationality of seafarers employed on Cook Islands flagged vessels.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c7.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>Survey & Certification</h5>
                                <p>MCI provides technical support for Surveys and Certification through our network of internationally approved Surveyors. MCI has established formal agreements with all major IACS Members.

                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c8.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>Service Delivery</h5>
                                <p>MCI strives to deliver fast and efficient service with 24-hour support.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c9.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>
International Maritime Organization (IMO) Representation.</h5>
                                <p>The Cook Islands has International Maritime Organization representation which allows for the Cook Islands to partake in discussions and decisions at an international level.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c10.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>
Legislation</h5>
                                <p>The Cook Islands is an English Common Law jurisdiction. As such, Cook Islands Maritime Law is based on English law, providing uniformity with International rules and regulations.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c11.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>
Cook Islands Company Formation</h5>
                                <p>A new product enabling the facilitation of Cook Islands Company incorporation for the purpose of vessel ownership. Such companies are currently tax-exempt in the Cook Islands jurisdiction</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 py-3">
                        <div class="row">
                            <div class="col-4">
                                <img class="img-fluid" src="img/c12.webp" alt="">
                            </div>
                            <div class="col-8">
                                <h5>Mortgage Registration</h5>
                                <p>MCI provides in-house legal support to assist with mortgage registration and registration advice</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ps-4 ">
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

                </div6
                    </div>

            </div>
        </div>


        <!--========================================================================-->
        <!---------------------------- Your Content End Here ------------------------->
        <!--========================================================================-->
        <?php require 'footer.php'; ?>