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
.heading-title {
    font-size: 44px;
    line-height: 78px;
    font-family: "Roboto",sans-serif;
}
.islands-title{
    font-size: 20px;
    line-height: 25px;

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
.islands-team-item{
    height: 338px;
    background-color: #F7F7F7;
    padding: 29px 64px 31px 21px;
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
    .icon{
        color: #e9732a;
    }
.team_name{
font-size: 16px;
line-height: 25px;
color: #22255B;
font-family: "Roboto",sans-serif;
    }
    @media only screen and (max-width: 991px) {
.logo {
width: 160px;
}
.team_name{
font-size: 16px;

    }
}
    @media only screen and (max-width: 450px) {
.team_name{
font-size: 12px;

    }

}
</style>
<!--=======================================================================-->
<!------------------------ Your Content Start From Here --------------------->
<!--=======================================================================-->

<!-- Hero Banner Start -->
<div class="container-fluid bg-primary py-5 mb-5 hero-banner about-mci-hero">
    <div class="container  py-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 text-center">
                <h1 class="display-4 text-white fw-bold mb-3">Cook Islands Agents</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<!-- Cook Islands Agents Start -->
 <section class="cook-islands-agents">
    <div class="container">
        <div class="row">
            <div class="heading-title text-center">
                <h3>Cook Islands Agents</h3>
            </div>
            <div class="islands-title">
             <p class="text-center">Maritime Cook Islands operates a global network of international agents, appointed by the administration, to promote maritime services including seafarer training and certification, registration, survey and certification. </p>
            </div>
        </div>
    </div>
 </section>

 <section class="islands-the-team mt-5">
    <div class="container mx-auto">
        <div class="row">
            <div class="col-md-12 col-lg-6">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/duthie-lidgard-1.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">NEW ZEALAND</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Duthie Lidgard</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">14 – 26 Hamer St, Auckland 1010 , New Zealand</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+64 9 303 3474</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+64 9 303 3474</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">duthie@catalanoshipping.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/peter-redford.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">AUSTRALIA</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Peter Redford</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">Sydney Superyacht Marina 2 Maritime Court, Rozelle, Sydney NSW 2039, Australia</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+61 2 9518 7777</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+61 2 9518 7777</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">peter@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/james-humphreys.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">AUSTRALIA</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">James Humphreys</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+64 9 303 3474</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">w.jameshumphreys@gmail.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/frank-tourneur.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">PHILIPPINES</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Capt. Frank Tourneur</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">1235 Makati City, Metro Manila, Philippines</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+63 917 650 1577</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">frank@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/jenserik-olsen.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">CHINA </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Jens-Erik Olsen</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">8th Floor 168 Queen’s Road Central Hong Kong</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+852 94661727</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">jeo@eightships.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/msayuki-kawase.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">JAPAN</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Capt. Masayuki Kawase</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">Tokyo, Japan</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">080-7704-3519</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">masayuki@maritimecookislands.com </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/dongsob-kim.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">SOUTH KOREA</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Dong Sob Kim </span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+82 51 986 6998</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">eship@esbureau.co.kr</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/faust-pinto.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">INDIA</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Faust Pinto</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">India, Singapore, UAE, Vietnam</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+91 22 22187363</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+919821116086</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">faust@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/hamada-halomou.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">UNITED ARAB EMIRATES</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Hamada Halomou</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">P. O. Box 237951 805 Al Saheel 1, Al Nahda, Dubai-U.A.E </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+97152 9712880</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">dubai@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/grant-hobart.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">MONACO & ITALY </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Grant Hobart </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">Prime Offices, 1 Rue du Gabian #15, 7 etage, Le Thales, Fontvielle, Monaco, 98000</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">grant@maritimecookislands.com </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/levent-baktir.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">TURKEY </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Levent Baktir</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">İnönü Bulvarı No:35 Göcek – Fethiye – Muğla</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+90 216 410 61 74</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+90 532 365 55 41</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">levent@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/rahmi-aykac.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">TURKEY </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Captain Rahmi Aykac – Seafarer Training </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">14 – 26 Hamer St, Auckland 1010 , New Zealand</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+90 533 3632621</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+90 532 49635 69</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">rahmi@maritimecookislands.com </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/mary-tsoi.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">MONACO</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Mary Tsoi</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">1 Rue du Gabian, 7 etage, Le Thales</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+33 6 86 96 14 10</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">mary@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/anton-dyachkov.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">RUSSIA </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Anton Dyachkov </span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+7 9162528047</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">diachkovss@yandex.ru </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/victoria-getman.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">CYPRUS </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Victoria Getman</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+35725350355</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+35799418338</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">georgianshipregistry@cytanet.com.cy</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/koula-louca.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">CYPRUS </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Koula Louca </span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+357 25800707</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">k.louca@emco.org</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/gary-miller.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">SPAIN </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Gary Miller </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">Costa de Santa Creu, 20, Palma de Mallorca 07012, Illes Baleares, Spain</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+34 672043882</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">Registry.ES@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/luisperez-salamero.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">PANAMA </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">Capt. Luis Perez Salamero</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">lsalamero@balboashipssuppliers.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/diego-corrado.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">URUGUAY </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Dr. Diego Corrado</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+598 3710333</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+598 4364033</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">diegocorrado@pescalegal.org</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/paul-coxon.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">SOUTH AFRICA </h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Paul Coxon </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">21 Mont Blanc, Boschendal Street, Van Riebeeckshof, Bellville, 7530, Cape Town, South Africa</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+27 21 4613630</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">paulcoxon@maritimecookislands.com </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/hilda-loe.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">SINGAPORE</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Hilda Loe </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">141 Middle Road #05-06 GSM Building Singapore 188976</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+65 68343323</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">hilda@maritimecookislands.com </span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/andriy-petrenko.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">UKRAINE</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Andriy Petrenko </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">7 off., entrance 5, 10, Zhukovskogo Str, Odessa, Ukraine, 65014</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+38 048 735 57 72(3)</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+38 063 735 57 72(3)</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">info@marinevoyage.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/maxwellapaiau-cumming.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">COOK ISLANDS</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Capt. Maxwell Apaiau Cumming</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">1st Floor Browne's Building, Avarua, Rarotonga, </span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-phone-alt"></i></span>
                                    <span class="team_name">+682 73031</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-mobile-alt"></i></span>
                                    <span class="team_name">+64 21550251 (NZ mobile & WhatsApp)</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">maxwell@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/szabina-dinya.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">ITALY</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Szabina Dinya</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">Genoa, Italy</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">szabina@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>
            <div class="col-md-12 col-lg-6 mt-4">
                <div class="islands-team-item">
                <div class="row">
                    <div class="col-4 team-img">
                        <img src="./img/daria-fedorenko.jpg" alt="" class="img-fluid">
                    </div>
                    <div class="col-8">
                        <h3 class="fs-5 team-res">DENMARK</h3>
                        <div class="team-inner ">
                            <ul class="mt-4">
                                <li>
                                    <span class="icon pe-2"><i class="far fa-user"></i></span>
                                    <span class="team_name">Daria Fedorenko</span>
                                </li>
                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="fas fa-map-marker-alt"></i></span>
                                    <span class="team_name">14 – 26 Hamer St, Auckland 1010 , New Zealand</span>
                                </li>

                                <li class="mt-1">
                                    <span class="icon pe-2"><i class="far fa-envelope"></i></span>
                                    <span class="team_name">daria@maritimecookislands.com</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                </div>
            </div>

        </div>
    </div>
 </section>
<!-- Cook Islands Agents End -->

<!--========================================================================-->
<!---------------------------- Your Content End Here ------------------------->
<!--========================================================================-->
<?php require 'footer.php'; ?>