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
        font-size: 16px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 15px;
        font-family: "Roboto", sans-serif;
        color: #363636;
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
.hover-icon-position{
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
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">Cook Islands Maritime Legislation</h1>
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

            <div class="col-md-12 bg_color">
                <div class="row p-2">

                    <div class="col-md-8 py-3">
                        <div class="row">
                            <!-- Left Title -->
                            <div class="col-md-8 choose_us_title">
                                <h2 class="pb-1 mb-">Cook Islands Maritime Legislation</h2>
                            </div>
                            <div class="col-md-12">
                                <p class="text-p mt-2">The Cook Islands has a modern suite of Maritime Legislation which is designed to protect the interests of ship owners, Mortgagees, and Charterers. It also makes it simple for the Administration to keep up to date with changes to International Maritime conventions and to ensure that ships flying the Cook Islands flag are in compliance.</p>
                                <!-- files  -->
                                <div class="accordion accordion-flush" id="accordionFlushExample">
                                    <div class="accordion-item">
                                        <h2 class="accordion-header ">
                                            <button class="accordion-button collapsed ms-3"
                                                type="button"
                                                data-bs-toggle="collapse"
                                                data-bs-target="#flush-collapseOne"
                                                aria-expanded="false"
                                                aria-controls="flush-collapseOne">
                                                <span class="ps-2"> Maritime Legislation</span>
                                            </button>
                                        </h2>
                                        <div id="flush-collapseOne"
                                            class="accordion-collapse collapse"
                                            data-bs-parent="#accordionFlushExample">
                                            <div class="accordion-body">
                                                <!-- ✅ Inner Accordion Starts -->
                                                <!-- Accordion One -->
                                                <div class="accordion accordion-flush" id="innerAccordionOne">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed ms-3"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseTwo"
                                                                aria-expanded="false"
                                                                aria-controls="flush-collapseTwo">
                                                                <span class="ps-2">Acts</span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseTwo"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#innerAccordionOne">
                                                            <div class="accordion-body">
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">Prevention Of Marine Pollution Amendment Act 1998 No.5</p>
                                                                    <a href="./html/Prevention-of-Marine-Pollution.html">
                                                                        <img src="./img/html icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">Maritime Transport Act 2008</p>
                                                                    <a href="./html/Maritime-Transport-Act.html">
                                                                        <img src="./img/html icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">Ship Registration Act 2007</p>
                                                                    <a href="./html/Ship-Registration-Act.html">
                                                                        <img src="./img/html icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">Admiralty Act 2004</p>
                                                                    <a href="./html/Admiralty-Act.html">
                                                                        <img src="./img/html icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- ✅ Additional Inner Accordions -->

                                                <!-- Accordion Two - Codes -->
                                                <div class="accordion accordion-flush" id="innerAccordionTwo">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed ms-3"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseRegulations"
                                                                aria-expanded="false"
                                                                aria-controls="flush-collapseRegulations">
                                                                <span class="ps-2">Codes</span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseRegulations"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#innerAccordionTwo">
                                                            <div class="accordion-body">
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Cook Islands Small Yacht Code Ver5</p>
                                                                    <a href="./pdf/cook-islands-small-yacht-code-ver5.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Cook Islands Large Yacht Code Ver4</p>
                                                                    <a href="./pdf/Cook-Islands-Large-Yacht-Code-Ver4.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Accordion Three - Conventions -->
                                                <div class="accordion accordion-flush" id="innerAccordionThree">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed ms-3"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseConventions"
                                                                aria-expanded="false"
                                                                aria-controls="flush-collapseConventions">
                                                                <span class="ps-2">Regulations </span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseConventions"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#innerAccordionThree">
                                                            <div class="accordion-body">
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">

                                                                        Maritime Rules Offences Regulations 2014</p>
                                                                    <a href="./pdf/Maritime-Rules-Offences-Regulations-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">

                                                                        Shipping Infringement Deficiency Regulations 2014</p>
                                                                    <a href="./pdf/Shipping-Infringement-Deficiency-Regulations-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">

                                                                        Financial Transactions Reporting Maritime Cook Islands Regulations 2017</p>
                                                                    <a href="./pdf/Financial-Transactions-Reporting-Maritime-Cook-Islands-Regulations-2017.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">

                                                                        Maritime Transport Small Motorised Vessels Regulations 2014</p>
                                                                    <a href="./pdf/Maritime-Transport-Small-Motorised-Vessels-Regulations-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>

                                                <!-- Accordion Four - Codes -->
                                                <div class="accordion accordion-flush" id="innerAccordionFour">
                                                    <div class="accordion-item">
                                                        <h2 class="accordion-header">
                                                            <button class="accordion-button collapsed ms-3"
                                                                type="button"
                                                                data-bs-toggle="collapse"
                                                                data-bs-target="#flush-collapseCodes"
                                                                aria-expanded="false"
                                                                aria-controls="flush-collapseCodes">
                                                                <span class="ps-2">Rules</span>
                                                            </button>
                                                        </h2>
                                                        <div id="flush-collapseCodes"
                                                            class="accordion-collapse collapse"
                                                            data-bs-parent="#innerAccordionFour">
                                                            <div class="accordion-body">
                                                                <!-- CKI Maritime STCW Rules 2020 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">


                                                                        CKI Maritime STCW Rules 2020</p>
                                                                    <a href="./pdf/CKI-Maritime-STCW-Rules-2020.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime tonnage rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime tonnage rules 2014</p>
                                                                    <a href="./pdf/Maritime-tonnage-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime sail training rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime sail training rules 2014</p>
                                                                    <a href="./pdf/Maritime-sail-training-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime anti fouling rules 2014no1 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime anti fouling rules 2014no1</p>
                                                                    <a href="./pdf/Maritime-anti-fouling-rules-2014no1.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime fund prot 1992 rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime fund prot 1992 rules 2014</p>
                                                                    <a href="./pdf/Maritime-fund-prot-1992-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime clc prot 1992 rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime clc prot 1992 rules 2014</p>
                                                                    <a href="./pdf/Maritime-clc-prot-1992-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Gazette rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Gazette rules 2014</p>
                                                                    <a href="./pdf/Gazette-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime load line rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime load line rules 2014</p>
                                                                    <a href="./pdf/Maritime-load-line-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime dcs rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime dcs rules 2014</p>
                                                                    <a href="./pdf/Maritime-dcs-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime solas rules 2014</p>
                                                                    <a href="./pdf/Maritime-solas-rules-2014">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime solas rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime solas rules 2014</p>
                                                                    <a href="./pdf/Maritime-solas-rules-2014">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime bunkers rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime bunkers rules 2014</p>
                                                                    <a href="./pdf/Maritime-bunkers-rules-2014.pdf"></a>
                                                                       <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                </div>
                                                                <!-- Maritime mlc rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime mlc rules 2014</p>
                                                                    <a href="./pdf/Maritime-mlc-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime large yacht rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime large yacht rules 2014</p>
                                                                    <a href="./pdf/Maritime-large-yacht-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime mci qmsm rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime mci qmsm rules 2014</p>
                                                                    <a href="./pdf/Maritime-mci-qmsm-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime revocation rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime revocation rules 2014</p>
                                                                    <a href="./pdf/Maritime-revocation-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime casualty investigation rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime casualty investigation rules 2014</p>
                                                                    <a href="./pdf/Maritime-casualty-investigation-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime wreck removal rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime wreck removal rules 2014</p>
                                                                    <a href="./pdf/Maritime-wreck-removal-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime ballast water rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime ballast water rules 2014</p>
                                                                    <a href="./pdf/Maritime-ballast-water-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime marpol rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime marpol rules 2014</p>
                                                                    <a href="./pdf/Maritime-marpol-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime colregs rules 2014 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime colregs rules 2014</p>
                                                                    <a href="./pdf/Maritime-colregs-rules-2014.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>
                                                                <!-- Maritime STCW IGF and Polar Code Amendment Rules 2021 -->
                                                                <div class="d-flex justify-content-between border border-top-0 border-start-0 border-end-0">
                                                                    <p class="text-bg p-2">
                                                                        Maritime STCW IGF and Polar Code Amendment Rules 2021</p>
                                                                    <a href="./pdf/Maritime-STCW-IGF-and-Polar-Code-Amendment-Rules-2021.pdf">
                                                                        <img src="./img/pdf icon.png" alt="" class="legislation-icon">
                                                                    </a>
                                                                </div>

                                                            </div>
                                                        </div>
                                                    </div>
                                                    <!-- ✅ Inner Accordion Ends -->

                                                </div>
                                            </div>
                                        </div>
                                    </div>




                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 ps-4">
                        <!-- Right Title -->
                        <div class=" text-start mt-3 mt-md-0 ps-4 popular_title">
                            <h2 class="mb-3">Popular Services</h2>
                        </div>
                        <div class="popular-services position-relative">
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
                            <img src="./img/popular services img 1.jpg" alt="" class="image-fluid w-100">

                            <div class="popular-ser-desc position-absolute">
                                <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                            </div>

                            <div class="content_hover position-absolute">
                                <a href=""> <span class="ms-5"><i class="fa-solid fa-arrow-right"></i></a>
                                <a href="">
                                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                                </a>
                                <p class="text-p">
                                    There is no legal or other impediment to any P&I Club / Insurer offering cover to Cook Islands flagged vessels.
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