<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero-two {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img/sub-header-imo.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

        .choose_us_title h2::before, .popular_title h2::before {
        content: "";
        position: absolute;
        width: 55px;
        height: 2px;
        background: #e9732a;
        bottom: -15px;
        top: 60px;
    }
        .text-p{
    font-size: 14px;
    font-weight: 300;
    line-height: 25px;
    margin-top: 15px;
    font-family: "Roboto", sans-serif;
    color: #363636;
    }
    .choose_us_title, .popular_title {
        position: relative;
    }
    .choose_us_title h2, .popular_title h2 {
    font-family: "Roboto", Sans-serif;
    font-size: 30px;
    font-weight: 600;
    }
    .choose_us_title h2, .popular_title h2 {
    font-family: "Roboto", Sans-serif;
    font-size: 30px;
    font-weight: 600;
}
     .bg-primary {
            background-color: #22255B !important;
        }
    .bg_color{
        background-color: #F7F7F7;
    }
    .heading-imo h4 {
    font-family: "Roboto", Sans-serif;
    font-size: 24px;
    font-weight: 600;
    line-height: 78px;
    }

    .head-details p, .conventions ul li {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 300;
        line-height: 25px;
        color: #363636;
    }

    .head-details p img {
        border: 1px solid #191b4a;
    }
      .popular-services {
        overflow: hidden;
        cursor: pointer;
        width: 300px;
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
        .popular-services:before {
        background: #00000075;
        width: 100%;
        content: "";
        height: 100%;
        position: absolute;
    }
    
        .content_hover p {
        color: #D9D9E0;
        font-weight: 300;
        font-size: 16px;
        }
        .islands-img img{
            border: 1px solid #111;
        }
        .conventions p {
        font-family: "Roboto", Sans-serif;
        font-size: 16px;
        font-weight: 600;
        line-height: 25px;
    }
        .hover-icon-position {
        color: white;
        position: absolute;
        top: 16px;
        right: 20px;
        color: #6E72B7;
        font-size: 40px;
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
<div class="container-fluid bg-primary py-5 mb-5 hero-banner about-mci-hero-two">
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">International Maritime Organization</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center mb-4">


        </div>

        <div class="row choose_us mt-5">
            <div class="col-md-12 col-lg-8  mt-4">
                            <!-- Left Title -->
            <div class="col-md-8 choose_us_title">
                <h2 class="mb-5">International Maritime Organization (IMO)</h2>
            </div>
            <div class="row p-2 bg_color">
            <div class="col-md-12 py-3">
                <div class="row">
                    <div class="col-md-12">
                     <div class="heading-imo">
                       <h4>IMO Representation</h4>
                     </div>
                     <div class="head-details">
                        <div class="row">
                            <div class="col-md-5">

                            <img src="./img/ian-finley.jpg" alt="">
                           
                    
                            </div>
                            <div class="col-md-7">
                        <p>
                            In 2006, the Government of The Cook Islands appointed Captain Ian Finley as Ambassador and Permanent Representative to the International Maritime Organization (IMO).
                        </p>
                        <p>Captain Finley’s impressive career as a Master Mariner has earned him respect for his pragmatic approach and substantial contributions to international legislation debates and decision-making processes. Over the years, he has played a crucial role in shaping the global maritime landscape.</p>
                                
                    </div>
                        </div>
                     </div>
                     <div class="head-details">
                        <p>It is worth noting that Captain Finley holds the esteemed position of being one of the longest serving permanent representatives at IMO, a clear testament to his dedication and commitment to advancing the interests of The Cook Islands on the international stage.</p>
                        <p>
                            For further information about the International Maritime Organization (IMO) and its essential work, we invite you to visit their official website: 
                            <a href="#">www.imo.org</a>
                        </p>
                     </div>
                     <h4>The Cook Islands Delegation to the IMO</h4>
                     <div class="row mt-5">
                        <div class="col-md-4">
                            <div class="islands-img">
                                <img src="./img/paolo-favili.jpg" alt="" class="img-fluid">
                                <p class="text-center">Paolo Favilli</p>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="islands-img">
                                <img src="./img/giovanni-fantoni.jpg" alt="" class="img-fluid">
                                <p class="text-center">Giovanni Fantoni</p>
                            </div>
                        </div>
                            <div class="col-md-4">
                            <div class="islands-img">
                                <img src="./img/rachele-andreani-1.jpg" alt="" class="img-fluid">
                                <p class="text-center">Rachele Andreani</p>
                            </div>
                        </div>
                            <div class="col-md-4 mt-3">
                            <div class="islands-img">
                                <img src="./img/eleanor-roi.jpg" alt="" class="img-fluid">
                                <p class="text-center">Eleanor Roi</p>
                            </div>
                        </div>
                            <div class="col-md-4 mt-3">
                            <div class="islands-img">
                                <img src="./img/michael-vredenburg-1.jpg" alt="" class="img-fluid">
                                <p class="text-center">Michael Vredenburg</p>
                            </div>
                        </div>
                     </div>
                     <div class="conventions mt-3">
                        <p>
                            <strong>The Cook Islands is an IMO member state and party to the following Conventions:</strong>
                        </p>
                        <ul>
                            <li>Convention on the International Maritime Organization, 1984</li>
                            <li>International Convention for the Control and Management of Ships’ Ballast Water and Sediments, 2004</li>
                            <li>International Convention on Civil Liability for Bunker Oil Pollution Damage, 2001</li>
                            <li>International Convention for the Safety of Life at Sea, 1974 (SOLAS 1974)</li>
                            <li>Protocol of 1988 relating to the International Convention for the Safety of Life at Sea, 1974 (SOLAS PROT 88)</li>
                            <li>International Convention for the Prevention of Pollution from Ships, 1973, modified by Protocol of 1978 (MARPOL 73/78 – Annex I/II)</li>
                            <li>Protocol of 1997 to Amend the International Convention for the Prevention of Pollution from Ships, 1973, modified by Protocol of 1978 (MARPOL PROT 1997)</li>
                            <li>International Convention on Load Lines, 1966, 1966 (LL 66)</li>
                            <li>Protocol of 1988 relating to the International Convention on Load Lines, 1966 (LL PROT 1988)</li>
                            <li>International Convention on Tonnage Measurement of Ships, 1969 (TONNAGE 1969)</li>
                            <li>Convention on the International Regulations for Preventing Collisions at Sea, 1972 (COLREG 1972)</li>
                            <li>Protocol of 1992 to amend the International Convention on Civil Liability for Oil Pollution Damage, 1969 (CLC PROT 1992)</li>
                            <li>Protocol of 1992 to amend the International Convention on the Establishment of an International Fund for Compensation for Oil Pollution Damage, 1971 (FUND PROT 1992)</li>
                            <li>Convention on Limitation of Liability for Maritime Claims, 1976 (LLMC 1976)</li>
                            <li>Protocol of 1996 to amend the Convention on Limitation of Liability for Maritime Claims, 1976 (LLMC PROT 1996)</li>
                            <li>Convention for the Suppression of Unlawful Acts against the Safety of Maritime Navigation, 1988 (SUA 1988)</li>
                            <li>Protocol of 2005 to the Convention for the Suppression of Unlawful Acts against the Safety of Maritime Navigation (SUA 2005)</li>
                            <li>International Convention on the Control of Harmful Anti Fouling Systems on Ships, 2001 (AFS 2001)</li>
                            <li>Convention on the International Mobile Satellite Organization (INMARSAT C 76)</li>
                            <li>International Convention on Maritime Search and Rescue, 1979 (SAR 1979)</li>
                            <li>Nairobi International Convention on the Removal of Wrecks, 2007</li>
                            <li>Protocol of 1992 to amend the International Convention on the Establishment of an International Fund for Compensation for Oil Pollution Damage, 1971 (FUND PROT 1992)</li>
                            <li>Convention on Limitation of Liability for Maritime Claims, 1976 (LLMC 1976)</li>
                            <li>Protocol of 1996 to amend the Convention on Limitation of Liability for Maritime Claims, 1976 (LLMC PROT 1996)</li>
                            <li>Convention for the Suppression of Unlawful Acts against the Safety of Maritime Navigation, 1988 (SUA 1988)</li>
                            <li>Protocol of 2005 to the Convention for the Suppression of Unlawful Acts against the Safety of Maritime Navigation (SUA 2005)</li>
                            <li>International Convention on the Control of Harmful Anti Fouling Systems on Ships, 2001 (AFS 2001)</li>
                            <li>Convention on the International Mobile Satellite Organization (INMARSAT C 76)</li>
                            <li>International Convention on Maritime Search and Rescue, 1979 (SAR 1979)</li>
                        <li>International Convention on Standards of Training, Certification and Watchkeeping for Seafarers, 1978 (STCW 1978) MSC.1/Circ.1163/Rev.13</li>
                        </ul>
                     </div>
                    </div>
                </div>
            </div>
            </div>
            </div>
            <div class="col-md-4 ps-4 mt-4 d-none d-lg-block">
                            <!-- Right Title -->
            <div class=" text-start mt-3 mt-md-0 ps-4 popular_title">
                <h2 class="mb-5">Popular Services</h2>
            </div>
        <div class="popular-services position-relative">
            <img src="./img/popular services img 2.jpg" alt="" class="image-fluid w-100">
            
            <div class="popular-ser-desc position-absolute">
                <h3 class="text-white fs-4">Merchant Ships</h3>
            </div>

            <div class="content_hover position-absolute">
                    <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
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
                    <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services</h3>
                </a>
                <p class="text-p">
                    There is no legal or other impediment to any P&I Club / Insurer 
                    offering cover to Cook Islands flagged vessels.
                </p>
            </div>
        </div>
        <div class="popular-services position-relative mt-5">
            <img src="./img/popular services img 3.jpg" alt="" class="image-fluid w-100">
            
            <div class="popular-ser-desc position-absolute">
                <h3 class="text-white fs-4">Seafarer Training & Certification</h3>
            </div>

            <div class="content_hover position-absolute">
                    <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Seafarer Training & Certification</h3>
                </a>
                <p class="text-p">
            Learn more about our application processes and seafarer services, take the first steps towards Cook Islands STCW certification, and verify the validity of Cook Islands certificates.
                </p>
            </div>
        </div>
                <div class="popular-services position-relative mt-5">
            <img src="./img/popular services img 4.jpg" alt="" class="image-fluid w-100">
            
            <div class="popular-ser-desc position-absolute">
                <h3 class="text-white fs-4">Yacht Registration</h3>
            </div>

            <div class="content_hover position-absolute">
                    <span class="icon pe-2"><i class="fa-solid fa-arrow-right hover-icon-position"></i></span>
                <a href="">
                    <h3 class="text-white fs-4">Yacht Registration</h3>
                </a>
                <p class="text-p">
            Learn more about our yacht registration process, ownership structures, mortgages and depending on length, Gross Tonnage and operation area.
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