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
        font-size: 14px;
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
                <h1 class="display-4 text-white fw-bold mb-3">Ministry of Transport</h1>
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
                <h2 class="mb-0">Cook Islands Ministry of Transport</h2>
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
                        <p class="text-p">The Cook Islands Ministry of Transport is a government entity with policy and primary oversight of the maritime administration; it is responsible for both domestic and international shipping services, including port and coastal state activities. Ship registration and flag State operational responsibilities of the Administration have been delegated via Cook Islands’ law to Maritime Cook Islands (MCI), a corporate entity, through a statutory instrument of delegation between the Ministry of Transport and MCI. MCI has established its head Office in Rarotonga, Cook Islands</p>
                        <p class="text-p">The National Maritime Transport Policy establishes policies that will guide the planning, actions and strategies necessary to ensure that local port and harbour safety infrastructure and all shipping services operating to, from or within the Cook Islands, or operating internationally under the Cook Islands flag, are compliant, safe and secure, and pose no threat to the marine environment.</p>
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
                  <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>
                <a href=""></a>
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
                             <a href=""> <span class="ms-5 hover-icon-position"><i class="fa-solid fa-arrow-right"></i></a>
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