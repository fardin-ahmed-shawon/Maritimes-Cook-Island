<?php
$current_page = basename($_SERVER['PHP_SELF']); // Get the current page name
$page_title = 'Blank'; // Set the page title
?>
<?php require 'header.php'; ?>
<style>
    .about-mci-hero {
        background-image: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), url('img/slider4.jpg');
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
        background-color: #f7f7f7;
        font-size: 15px;
        font-weight: 600;
        border-radius: 10px;
        border: 1px solid gray;
    }

    .angle-icon-size {
        font-size: 24px;
    }

    .inline-calendar .today-btn,
    .inline-calendar .toggle-btn {
        background-color: #f7f7f7;
        font-size: 15px;
        font-weight: 600;
        border-radius: 10px;
        border: 1px solid gray;
        margin-left: 5px;
        padding: 6px 12px;
        cursor: pointer;
    }

    /* Position dropdown under the calendar icon */
    .inline-calendar .calendar-wrapper {
        position: relative;
        display: inline-block;
    }

    .inline-calendar .calendar-dropdown {
        position: absolute;
        top: 110%;
        left: 0;
        background: #fff;
        border: 1px solid #ccc;
        border-radius: 6px;
        box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        padding: 5px;
        display: none;
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
                <h1 class="display-4 text-white fw-bold mb-3">Calendar of Events</h1>
            </div>
        </div>
    </div>
</div>
<!-- Hero Banner End -->

<div class="container-fluid">
    <div class="container">
        <div class="row align-items-center mb-4">
            <div class="">
                <div class="row">
                    <!-- Left Title -->
                    <div class="choose_us_title">
                        <h2 class="mb-5">Calendar of Events</h2>
                    </div>
                    <div class="d-flex justify-content-between">
                        <div class="d-flex">
                            <div class="d-flex">
                                <i class="fa-solid fa-angle-left angle-icon-size"></i>
                                <i class="fa-solid fa-angle-right angle-icon-size"></i>
                            </div>
                            <!-- Today + Calendar -->
                            <div class="inline-calendar ms-2 d-flex">
                                <button class="today-btn">Today</button>

                                <div class="calendar-wrapper">
                                    <button class="toggle-btn">Upcomming 📅</button>
                                    <div class="calendar-dropdown">
                                        <input type="date" class="real-date">
                                    </div>
                                </div>
                            </div>


                        </div>
                        <div class="col-md-12 col-lg-8">



                        </div>
                        <div class="div">
                            <label for="month"></label>
                            <select id="months" name="cars">
                                <option value="list">list 📅</option>
                                <option value="month">Month 📅</option>
                                <option value="photo">Photo 📷 </option>
                                >
                            </select>
                        </div>
                    </div>
                </div>
                <div class="row choose_us">
                    <div class="col-md-12  ">

                        <div class="row p-2 bg_color">
                            <div class="col-md-12 py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <!-- blog 1 -->
                                        <div class="row">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>Sat</p>
                                                        <h2>13</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>September 9 @ 8:00 am - September 14 @ 5:00 pm</p>
                                                        <h3> Cannes Yachting Festival </h3>
                                                        <h6>Vieux Port & Port Canto, Cannes , France</h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">The Cannes Yachting Festival showcases nearly 700 boats, ranging from 5 to 50 metres, with smaller vessels displayed on land and larger ones on the water. From sailing yachts to motorboats, monohulls to multihulls, the event features a diverse selection. Discover the latest innovations and connect with leading figures in the boating industry.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4">
                                                <img src="./img/blog1.jpg" alt="" class="img-fluid">
                                            </div>


                                        </div>
                                        <!-- blog 2       -->
                                        <div class="row mt-3">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>THU</p>
                                                        <h2>18</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>September 18 @ 8:00 am - September 23 @ 5:00 pm</p>
                                                        <h3> 65th Genoa Boat Show 2025
                                                        </h3>
                                                        <h6>Italy , Italy
                                                        </h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">The Genoa International Boat Show is an essential for both the international yachting market and the sea enthusiasts. Additionally, it serves as a comprehensive platform for the comparison and benchmarking of institutional, technology, and market trends across the entire sector on a global scale.</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4">
                                                <img src="./img/blog2.webp" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <!-- blog 3 -->
                                        <div class="row mt-3">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>WED</p>
                                                        <h2>24</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>September 24 @ 8:00 am - September 27 @ 5:00 pm</p>
                                                        <h3> Monaco Yacht Show 2025
                                                        </h3>
                                                        <h6>Port Hercule , Monaco
                                                        </h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">Join the Monaco Yacht Show; immerse yourself in the excellence, innovation, and refinement that define superyachting. In the idyllic setting of Port Hercule in Monaco, the world's premier destination for […]</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4 ">
                                                <img src="./img/blog3.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <!-- blog 4 -->
                                        <div class="row mt-3">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>TUE</p>
                                                        <h2>21</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>October 21 @ 8:00 am - October 24 @ 5:00 pm
                                                        </p>
                                                        <h3> Kormarine
                                                        </h3>
                                                        <h6>BEXCO Exhibition Center I & II , Korea, Democratic People's Republic of
                                                        </h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">Since its first event in 1980, this biennial exhibition has been constantly developing itself to become the best show in today’s marine industry. KORMARINE will bring the best exhibition experience […]</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4 ">
                                                <img src="./img/blog4.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <!-- blog 5 -->
                                        <div class="row mt-3">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>WED</p>
                                                        <h2>29</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>
                                                            29

                                                            October 29 @ 8:00 am - November 2 @ 5:00 pm
                                                        </p>
                                                        <h3>

                                                          Europort 2025 Maritime Exhibition
                                                        </h3>
                                                        <h6>Rotterdam Ahoy
                                                        </h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">Europort, held in Rotterdam, is a leading international maritime event focused on advanced technology and complex shipbuilding. Attracting over 24,000 professionals and 1,000 exhibitors, it is one of the largest […]</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4 ">
                                                <img src="./img/blog5.webp" alt="" class="img-fluid">
                                            </div>
                                        </div>
                                        <br>
                                        <hr>
                                        <br>
                                                                      <!-- blog 6 -->
                                        <div class="row mt-3">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>TUE</p>
                                                        <h2>29</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>
                                                            29

                                                            October 29 @ 8:00 am - November 2 @ 5:00 pm
                                                        </p>
                                                        <h3>

                                                            Metstrade
                                                        </h3>
                                                        <h6>RAI Amsterdam Convention Centre Amsterdam, Netherlands
                                                        </h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">Metstrade 2025 dives into cutting-edge technologies, connects with industry leaders, and inspires in the 13 halls at RAI Amsterdam. More dynamic than ever with focus on the key themes emerging […]</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4 ">
                                                <img src="./img/blog4.jpg" alt="" class="img-fluid">
                                            </div>
                                        </div>          
                                                                      <!-- blog 7 -->
                                        <div class="row mt-3">
                                            <div class="col-md-12 col-lg-8">
                                                <div class="d-flex gap-lg-5">
                                                    <div class="d-flex flex-column me-2">
                                                        <p>THU</p>
                                                        <h2>20</h2>
                                                    </div>
                                                    <div class="">
                                                        <p>
November 20 @ 8:00 am - November 23 @ 5:00 pm
                                                        </p>
                                                        <h3>

                                                    Abu Dhabi International Boat Show
                                                        </h3>
                                                        <h6>Marina Hall, ADNEC Centre Abu Dhabi Abu Dhabi, United Arab Emirates
                                                        </h6>
                                                        <br>
                                                        <p class="d-none d-lg-block">The Abu Dhabi International Boat Show 2024 hosted its largest and most impressive edition yet at Marina Hall, ADNEC Centre Abu Dhabi. Showcasing the latest in marine technology, luxury yachts, […]</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="col-md-12 col-lg-4 ">
                                                <img src="./img/blog6.png" alt="" class="img-fluid">
                                            </div>
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