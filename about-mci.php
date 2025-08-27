<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'About MCI'; // Set the page title
?>
<?php require 'header.php'; ?>

<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img/about-mci.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }

    .timeline {
      position: relative;
      margin: 50px 0;
      padding-left: 40px;
      border-left: 3px solid #fd5e14;
    }

    .timeline::before {
      content: '';
      position: absolute;
      top: 0;
      left: -7px;
      height: 100%;
      width: 14px;
      background: white;
      z-index: 1;
    }

    .timeline-event {
      position: relative;
      margin-bottom: 40px;
    }

    .timeline-event::before {
      content: '';
      position: absolute;
      left: -25px;
      top: 0;
      width: 15px;
      height: 15px;
      border-radius: 50%;
      background-color: #fd5e14;
      z-index: 2;
    }

    .timeline-event .card {
      margin-left: 20px;
    }

    h2 {
      text-align: center;
      margin-bottom: 50px;
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
                <h1 class="display-4 text-white fw-bold mb-3"><?php echo $page_title; ?></h1>
                <h5 class="text-white">A world class registry for quality classed tonnage</h5>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">

        <div class="row py-2">
            <h1 class="text-center">About Us</h1>
            <p class="text-center">Maritime Cook Islands (MCI) is a renowned registry for ships, providing exceptional products and service to an international clientele. As one of the leading and rapidly growing registries worldwide, we prioritize safe and secure shipping practices for cleaner oceans.</p>
        </div>

        <div class="row py-5">
            <div class="col-md-6">
                <img class="img-fluid" src="img/slider5.jpg" alt="">
            </div>
            <div class="col-md-6">
                <p>Based in Rarotonga, the Cook Islands, with established offices in Italy and Monaco, MCI is supported by a vast network of Deputy Registrars and Agents, working collaboratively to administer an open registry for ships and yachts.</p>
                <br/>
                <p>Operating under a delegation of authority from the Cook Islands Ministry of Transport, MCI is responsible for the administration of all Flag State responsibilities for and on behalf of, the Cook Islands Government.</p>
            </div>
        </div>

        <div class="row py-5">
            <div class="col-md-6">
                <p>Our dedicated team of professionals is committed to ensuring client satisfaction and take pride in the certification of our quality management system to ISO 9001:2015 standards.</p>
                <br/>
                <p>All vessels flying the Cook Islands flag are required to comply with the relevant International Maritime Conventions, emphasizing our commitment to upholding global maritime standards. The Cook Islands actively participates as a party to significant International Maritime Conventions and holds membership in the International Maritime Organization (IMO), a specialized agency of the United Nations entrusted with regulating shipping activities worldwide.</p>
            </div>
            <div class="col-md-6">
                <img class="img-fluid" src="img/ab2.jpg" alt="">
            </div>
        </div>

        <div class="row py-5">
            <h2>A Brief History Of Maritime Cook Islands</h2>
            <div class="timeline">
                <div class="timeline-event">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">1990</h5>
                    <p class="card-text">The Ministry of Transport assumed all flag state duties.</p>
                    </div>
                </div>
                </div>

                <div class="timeline-event">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">2000</h5>
                    <p class="card-text">MCI became the Corporate Administrator of the Ship Registry under a contract with the Ministry of Transport on 1st May 2000.</p>
                    </div>
                </div>
                </div>

                <div class="timeline-event">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">2008</h5>
                    <p class="card-text">Cook Islands became a member state of the International Maritime Organization.</p>
                    </div>
                </div>
                </div>

                <div class="timeline-event">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">2015</h5>
                    <p class="card-text">The Cook Islands completed the IMO Member State Audit Scheme (IMSAS).</p>
                    </div>
                </div>
                </div>

                <div class="timeline-event">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">2021</h5>
                    <p class="card-text">IMO/STCW Regulation I/8 Audit.</p>
                    </div>
                </div>
                </div>

                <div class="timeline-event">
                <div class="card">
                    <div class="card-body">
                    <h5 class="card-title">2022</h5>
                    <p class="card-text">Cook Islands white-listed by STCW in November. MCI restructured into a new management board of 3 executives.</p>
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