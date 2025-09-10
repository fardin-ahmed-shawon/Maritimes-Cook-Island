<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Approved Fuel Suppliers'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
a i{
    color: white;
  position: absolute;
  top: 20px;
  right: 20px;
  color: #6E72B7;
  font-size: 40px;
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
                <h1 class="display-4 text-white fw-bold mb-3">Approved Fuel Suppliers</h1>
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
                <h2 class="mb-0">Register of Fuel Suppliers in the Cook Islands</h2>
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
                       <div class="content">
                        <h4>Cook Islands Approved Fuel Suppliers</h4>
                        <p>Below are the Cook Islands Approved Fuel Suppliers as required by MARPOL Annex VI</p>
                        <br>
                        <h5>TOA Petroleum LTD</h5>
                        <p>
                            <strong>Phone:</strong>
                             +682 27001
                             <br>
                             <strong>Email:</strong>
                              manager@toapetroleum.co.ck
                        </p>
                        <br>
                        <h5>Triad Pacific Petroleum Ltd</h5>
                        <p>
                            <strong>Phone:</strong>
                             +682 20437
                             <br>
                             <strong>Email:</strong>
                              petrol@triad.co.ck
                        </p>
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
                    <a href=""> <i class="fa-solid fa-arrow-right"></i></a>
                <a href="">
              
                    <h3 class="text-white fs-4">Merchant Ships </h3>
                </a>
                <p class="text-p">
                   Maritime Cook Islands Administrator of the Cook Islands ships registry, operates as an open registry with its main office in Rarotonga, Cook Islands, with additional offices in Italy and Monaco.
                </p>
            </div>
        </div>
        <div class="popular-services position-relative mt-5">
            <img src="./img/popular services img 1.jpg" alt="" class="image-fluid w-100">
            
            <div class="popular-ser-desc position-absolute">
                <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services </h3>
            </div>

            <div class="content_hover position-absolute">
                <a href="">
                    <h3 class="text-white fs-4">Bunker/Wrecks/CLC Services <span class="ms-5"><i class="fa-solid fa-arrow-right"></i></span></h3>
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