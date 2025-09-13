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
    .icon-hover-position {
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
                <h1 class="display-4 text-white fw-bold mb-3">Survey and Certification</h1>
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

            <div class="col-md-8 ">
            <div class=" choose_us_title">
                 <!-- Left Title -->
                <h2 class="mb-5">Classification Societies</h2>
            </div>
                <div class="row p-2 bg_color">
                   

                    <div class="col-md-12 py-3">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="choose_content">
                                    <p>
                                        Maritime Cook Islands has entered into formal agreements with members of the International Association of Classification Societies (IACS). The following class societies act on behalf of Maritime Cook Islands:
                                    </p>
                                    <h5>IACS</h5>
                                    <p>
                                        <a href="">American Bureau of Shipping (ABS)</a>
                                    </p>
                                    <p>
                                        <a href="">Bureau Veritas (BV)</a>
                                    </p>
                                    <p>
                                        <a href="">China Classification Society (CCS)</a>
                                    </p>
                                    <p>
                                        <a href="">Croatian Register of Shipping (CRS)</a>
                                    </p>
                                    <p>
                                        <a href="">Det Norske Veritas (DNV)</a>
                                    </p>
                                    <p>
                                        <a href="">Indian Register of Shipping (IRClass)</a>
                                    </p>
                                    <p>
                                        <a href="">Korean Register of Shipping (KR)</a>
                                    </p>
                                    <p>
                                        <a href="">Lloyd’s Register (LR)</a>
                                    </p>
                                    <p>
                                        <a href="">Nippon Kaiji Kyokai (ClassNK)</a>
                                    </p>
                                    <p>
                                        <a href="">RINA Services S.p.A (RINA)</a>
                                    </p>
                                    <p>
                                        <a href="">Russian Maritime Register of Shipping (RMRS)</a>
                                    </p>
                                    <p>
                                        <a href="">Polski Rejestr Statkow (PRS)</a>
                                    </p>
                                    <p>
                                        <a href="">TÜRK LOYDU</a>
                                    </p>
                                    <p>
                                        If you require further information about the RO’s authority under the Cook Islands flag go to:
                                        <a href="">Global Integrated Shipping Information System (GISIS)</a>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 ps-4 d-none d-lg-block">
                <!-- Right Title -->
                <div class="text-start mt-3 mt-md-0 ps-4 mb-5 popular_title">
                    <h2 class="mb-0">Popular Services</h2>
                </div>
                <div class="popular-services position-relative">
                    <img src="./img/popular services img 2.jpg" alt="" class="image-fluid w-100">

                    <div class="popular-ser-desc position-absolute">

                        <h3 class="text-white fs-4">Merchant Ships</h3>
                    </div>

                    <div class="content_hover position-absolute">
                        <a href=""> <span class="ms-5"><i class="fa-solid fa-arrow-right icon-hover-position"></i></a>
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
                        <a href=""> <span class="ms-5"><i class="fa-solid fa-arrow-right icon-hover-position"></i></a>
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

<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->

<?php require 'footer.php'; ?>