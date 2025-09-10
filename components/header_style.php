    <style>
        .bg-primary {
            background-color: #22255B !important;
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

        .about-mci-hero {
        background-image: linear-gradient(rgba(0,0,0,0.5), rgba(0,0,0,0.5)), url('img/slider5.jpg');
        background-repeat: no-repeat;
        background-size: cover;
        background-position: center;
    }
    .text-p{
        font-size: 14px;
        font-weight: 300;
        line-height: 25px;
        margin-top: 15px;
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
        padding: 20px 20px 0px 20px;
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

        @media only screen and (max-width: 991px) {
            .logo {
                width: 160px;
            }
        }

    </style>