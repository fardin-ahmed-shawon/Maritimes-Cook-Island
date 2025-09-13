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

    button {
        background-color: #E9732A;
        font-size: 15px;
        padding: 8px 12px;
        border: 0;
        color: white;
        font-weight: 600;
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
                            <h2 class="mb-5">Certificate of Endorsement</h2>
                        </div>
                        <div class="row p-2 bg_color">
                            <div class="col-md-12 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <p>Deck and engineering Officers and radio operators intending to serve aboard a Cook Islands vessel must apply for Flag Endorsement prior to embarkation.</p>
                                        <p>In addition, all deck and engineering officers and radio operators intending to serve aboard Tankers or Passenger vessels must apply for Flag Endorsement of specialised training in accordance with Chapter V of the STCW, as amended.</p>
                                        <strong>Letter of Acknowledgement (LOA)</strong>
                                        <p>Following submission of an application for Cook Islands Certificate of Endorsement, a Letter of Acknowledgement (LOA) will be issued electronically within 24 hours.</p>
                                        <p>The LoA serves as documentary evidence and allows the Seafarer to fill the intending capacity aboard the vessel immediately following issuance.</p>
                                        <p>The LOA is valid for a 3-month period from the date of issuance, in which time the Administration will carry out authentication, verification and validation processes.</p>
                                        <strong>Cook Islands Certificate of Endorsement</strong>
                                        <p>The Cook Islands Certificate of Endorsement will be issued electronically within 3 months from the date of application and will be valid for the duration of the underlying qualification being endorsed.</p>
                                        <p>Verification of Letters of Acknowledgement & Cook Islands Certificates of Endorsement</p>
                                        <h4>STCW</h4>
                                        <p>For Endorsement of Certificates of Competency (CoC) and Certificates of Proficiency (CoP) issued in accordance with the STCW, as amended</p>
                                        <a href="https://s2.upvise.com/form.htm?db=213158&tid=5298BD02DE091930824154B081B0B3"> <button class=".btn-style">Apply here</button></a>
                                        <br>
                                        <br>
<h4>Non-STCW</h4>
<p>For Endorsement of qualifications (Non-STCW) issued in accordance with National legislation, recognised International Maritime Institutions (RYA) or similar</p>
                                        <a href="https://s2.upvise.com/form.htm?db=213158&tid=E8DF430EE66646CFB31C2DD6F4F68C"> <button class=".btn-style">Apply here</button></a>
                                        <br><br>
                                        <p>For further information or assistance, please contact <a>seafarers@maritimecookislands.com</a></p>
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
        </div>

        <!--========================================================================-->
        <!---------------------------- Your Content End Here ------------------------->
        <!--========================================================================-->
        <?php require 'footer.php'; ?>