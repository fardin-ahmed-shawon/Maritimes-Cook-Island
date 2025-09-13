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

    /* accordion */
    .accordion-button {
        position: relative;
        display: flex;
        align-items: center;
        width: 100%;
        padding: 1rem 1.25rem;
        font-size: 1rem;
        color: #797672;
        text-align: left;
        background-color: #F7F7F7;
        border: 0;
        border-radius: 0;
        overflow-anchor: none;
        transition: color .15s ease-in-out, background-color .15s ease-in-out, border-color .15s ease-in-out, box-shadow .15s ease-in-out, border-radius .15s ease;
    }

    /* Default (closed) → show plus */
    .accordion-button::after {
        flex-shrink: 0;
        width: 1.5rem;
        height: 1.5rem;
        position: absolute;
        left: -0;
        top: 16px;
        content: "";
        background-image: url("./img/folder.png");

        transition: all .2s ease-in-out;
    }

    /* Open (not collapsed) → show minus */
    .accordion-button:not(.collapsed)::after {
        content: "";
        background-image: url("./img/open-folder.png");
        font-size: 25px;
        transform: rotate(0deg);
    }

    .accordion-button:not(.collapsed) {
        color: #797672;
        background-color: #F7F7F7;
        box-shadow: rgba(0, 0, 0, 0.125) 0px -1px 0px inset;
    }

    .accordion-body {
        background-color: #F7F7F7 !important;
    }

    .legislation-icon {
        width: 30px;
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
            <div class="col-lg-8">
                <h1 class="display-4 text-white fw-bold mb-3 py-5">Ownership Structure</h1>
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
                <h2 class="mb-5">Ownership Structure</h2>
            </div>
                <div class="row p-2 bg_color">
                    <div class="col-md-12 py-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="intro">
                                    <p>Registration of a vessel upon the Cook Islands Ships Registry is governed by the Ship Registration Act 2007; The Act requires that a vessel be owned by or on a demise charter to a “qualified person.”</p>
                                    <p>There are four ways in which an owner can become a Qualified Person.</p>
                                    <p>
                                        <strong>1. Cook Islands Ship Owners Association</strong>
                                        The Cook Islands Ship Owners Association (CISOA) was established in 2015 to create a fast and efficient way for ship owners to fulfil ownership requirements. Members of the Cook Islands Ship Owners Association (CISOA) are eligible to have their vessel registered in the Cook Islands without having to register a company. The definition of person includes companies and trusts as well as individuals or partnerships of individuals. In this way, foreign corporations can become a member of CISOA without having to register that corporation in the Cook Islands.
                                    </p>
                                    <!-- Accordion One -->
                                    <div class="accordion accordion-flush" id="innerAccordionOne">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed "
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseTwo"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseTwo">
                                                    <span class="ps-2">CISOA</span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseTwo"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#innerAccordionOne">
                                                <div class="accordion-body">
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">CISOA Form 8A Company – 08A E F CISOA CO v7</p>
                                                        <a href="./pdf/08A-E-F-CISOA-CO-v7.docx">
                                                            <img src="./img/doc.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">CISOA Form 8B Individual – 08B E F CISOA IND v7</p>
                                                        <a href="./pdf/08B-E-F-CISOA-IND-v7.docx">
                                                            <img src="./img/doc.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <strong>2. Cook Islands Yacht Squadron</strong>
                                        The Cook Islands Yacht Squadron (CIYS) was established in 2006 to create a fast and efficient way for yacht owners to fulfil ownership requirements. Members of the Cook Islands Yacht Squadron (CIYS) are eligible to have their yacht registered in the Cook Islands without having to register a company. The definition of person includes companies and trusts as well as individuals or partnerships of individuals. In this way, foreign corporations can become a member of CIYS without having to register that corporation in the Cook Islands.
                                    </p>
                                    <div class="accordion accordion-flush" id="AccordionThree">
                                        <div class="accordion-item">
                                            <h2 class="accordion-header">
                                                <button class="accordion-button collapsed "
                                                    type="button"
                                                    data-bs-toggle="collapse"
                                                    data-bs-target="#flush-collapseThree"
                                                    aria-expanded="false"
                                                    aria-controls="flush-collapseThree">
                                                    <span class="ps-2">CIYS</span>
                                                </button>
                                            </h2>
                                            <div id="flush-collapseThree"
                                                class="accordion-collapse collapse"
                                                data-bs-parent="#AccordionThree">
                                                <div class="accordion-body">
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">CIYS Form 7A Company – 07A E F CIYS CO v5</p>
                                                        <a href="./pdf/07A-E-F-CIYS-CO-v5.docx">
                                                            <img src="./img/doc.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>
                                                    <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                        <p class="text-bg p-2">CISOA Form 8B Individual – 08B E F CISOA IND v7</p>
                                                        <a href="./pdf/07B-E-F-CIYS-IND-v5.docx">
                                                            <img src="./img/doc.png" alt="" class="legislation-icon">
                                                        </a>
                                                    </div>

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <p>
                                        <strong>3. International Company Incorporation</strong>
                                    </p>
                                    <p>
                                        The Cook Islands International Companies Act 1981-82 governs the formation and activities of international companies. The structure of the International Companies Act allows companies to be formed and operated with both flexibility and administrative ease. An International Company must be incorporated through a licensed trustee company, which will handle the registration process and administrative duties.
                                    </p>
                                    <p>
                                        <strong>4. Foreign Company Registration</strong>
                                    </p>
                                    <p>Foreign Companies are incorporated outside of Cook Islands and are registered as foreign companies under the International Companies Act. Registered foreign companies may establish a branch with a place of business in the Cook Islands. A Cook Islands Trust company will handle the registration process and administrative duties for those wishing to register a Cook Islands Foreign Company.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ps-4 d-none d-lg-block">
                            <!-- Right Title -->
            <div class="col-md-4 text-start mt-3 mt-md-0 ps-4 popular_title">
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
                <div class="popular-services position-relative mt-3">
                    <img src="./img/popular services img 2.jpg" alt="" class="image-fluid w-100">

                    <div class="popular-ser-desc position-absolute">
                        <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                    </div>
                    <div class="content_hover position-absolute">
                        <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>
                        <a href="">
                            <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                        </a>
                        <p class="text-p">
                            There is no legal or other impediment to any P&I Club / Insurer offering cover to Cook Islands flagged vessels
                        </p>
                    </div>
                </div>
                <div class="popular-services position-relative mt-3">
                    <img src="./img/popular services img 3.jpg" alt="" class="image-fluid w-100">

                    <div class="popular-ser-desc position-absolute">
                        <h3 class="text-white fs-4">
                            Seafarer Training & Certification</h3>
                    </div>
                    <div class="content_hover position-absolute">
                        <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>
                        <a href="">
                            <h3 class="text-white fs-4">Seafarer Training & Certification</h3>
                        </a>
                        <p class="text-p">
                         Learn more about our application processes and seafarer services, take the first steps towards Cook Islands STCW certification, and verify the validity of Cook Islands certificates.
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