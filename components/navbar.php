
  <style>
    body{
      margin:0;
      font-family:system-ui,-apple-system,Segoe UI,Roboto,"Helvetica Neue",Arial;
      background:#f5f7fb;
   
    }

    /* NAV */
    nav.site-nav{
      background: #22255bf6;
      color:#fff;
      width:100%;
    }

    nav.site-nav .nav-container{
      max-width:1401px;
      margin:0 auto;
      padding:10px 20px;
      display:flex;
      align-items:center;
      gap:16px;
    }

    /* brand */
    nav.site-nav .brand{
      display:flex;
      align-items:center;
      gap:10px;
      text-decoration:none;
      color:#fff;
      white-space:nowrap;
      font-weight:700;
      font-size:18px;
    }
    nav.site-nav .brand .mark{
      width:34px;height:34px;border-radius:6px;
      display:inline-flex;align-items:center;justify-content:center;
      border:2px solid rgba(255,255,255,0.12);
      font-size:16px;
    }

    /* main nav list */
    nav.site-nav .nav-list{
      display:flex;
      list-style:none;
      gap:4px;
      align-items:center;
    }
    nav.site-nav .nav-list > li{ position:relative; }

    nav.site-nav .nav-list a.top-link{
      display:flex;align-items:center;gap:8px;
      padding:14px 12px;
      color:#fff;
      text-decoration:none;
      font-size:15px;
    }
    nav.site-nav .nav-list a.top-link:hover{ color:#e9732a; }
    nav.site-nav .caret{ color:#cbd3e0; font-size:11px; margin-left:6px; }

    /* actions */
    nav.site-nav .nav-actions{ margin-left:auto; display:flex; align-items:center; gap:12px }
    nav.site-nav .search-icon{ color:#cbd3e0; font-size:16px; cursor:pointer }
    nav.site-nav .quote-btn{
      background:#e9732a;
      color:#fff;
      padding:9px 14px;
      border-radius:4px;
      text-decoration:none;
      font-weight:600;
    }

    /* dropdown base */
    nav.site-nav .dropdown,
    nav.site-nav .submenu{
      position:absolute;
      min-width:220px;
      background:#4c4f88cc;
      border-radius:4px;
      box-shadow:0 8px 20px rgba(0,0,0,0.35);
      padding:6px 0;
      opacity:0;
      visibility:hidden;
      transition:opacity .2s ease,visibility .2s ease;
      z-index:1200;
    }

    /* first-level dropdown */
    nav.site-nav .dropdown{ top:100%; left:0; }

    /* submenu (flyout) */
    nav.site-nav .submenu{ top:0; left:100%; z-index:1300; }

    /* list inside dropdown */
    nav.site-nav .dropdown ul,
    nav.site-nav .submenu ul{ list-style:none;margin:0;padding:0; }
    nav.site-nav .dropdown li,
    nav.site-nav .submenu li{ position:relative; }
    nav.site-nav .dropdown a,
    nav.site-nav .submenu a{
      display:block;
      padding:10px 14px;
      color:#fff;
      text-decoration:none;
      white-space:nowrap;
      font-size:14px;
    }
    nav.site-nav .dropdown a:hover,
    nav.site-nav .submenu a:hover{
      background:rgba(255,255,255,0.05);
      color:#e9732a;
    }

    /* hover activation */
    nav.site-nav .nav-list > li:hover > .dropdown{
      opacity:1; visibility:visible;
    }
    nav.site-nav .dropdown li:hover > .submenu,
    nav.site-nav .submenu:hover{
      opacity:1; visibility:visible;
    }

    /* mobile */
    nav.site-nav .menu-toggle{ display:none; font-size:22px; cursor:pointer; color:#fff }

@media (max-width: 991px){
  nav.site-nav{
    position: relative; /* create context */
  }

  nav.site-nav .menu-toggle{ 
    display:block; 
    order:1; 
  }

  nav.site-nav .brand{ 
    order:2; 
    margin:0 auto; 
    text-align:center; 
  }

  nav.site-nav .nav-actions{ 
    order:3; 
  }

  nav.site-nav .nav-container{ 
    padding:12px 16px; 
    gap:10px; 
    display:flex; 
    align-items:center; 
    width:100%;
    position: relative; 
    z-index: 1001;
  }

  /* main dropdown panel (absolute below navbar) */
  nav.site-nav .nav-list{ 
    display:none; 
    flex-direction:column; 
    gap:0; 
    background:#22255bf6;
    position:absolute; 
    top:100%;   /* directly under nav bar */
    left:0; 
    width:100%; 
    z-index:1000;
  }
  nav.site-nav .nav-list.open{ display:flex; }

  /* override dropdowns to stack like accordions */
  nav.site-nav .dropdown,
  nav.site-nav .submenu{
    position:static;
    opacity:1;
    visibility:visible;
    display:none;
    background:none;
    box-shadow:none;
    padding:0;
  }

  nav.site-nav .nav-list li.active > .dropdown{ 
    display:flex; 
    flex-direction:column; 
  }

  nav.site-nav .dropdown li.active > .submenu{ 
    display:flex; 
    flex-direction:column; 
  }

  nav.site-nav .dropdown a{ 
    padding-left:20px; 
    color:#cbd3e0; 
    font-size:14px; 
  }

  nav.site-nav .submenu a{ 
    padding-left:34px; 
    color:#cbd3e0; 
    font-size:14px; 
  }

  nav.site-nav .caret{ 
    float:right; 
  }
}


      nav.site-nav .nav-list li.active > .dropdown{ display:flex; flex-direction:column; }
      nav.site-nav .dropdown li.active > .submenu{ display:flex; flex-direction:column; }

      nav.site-nav .dropdown a{ padding-left:20px; color:#cbd3e0; font-size:14px }
      nav.site-nav .submenu a{ padding-left:34px; color:#cbd3e0; font-size:14px }
      nav.site-nav .caret{ float:right; }
   

    a:focus{ outline:2px solid rgba(233,115,42,0.18); outline-offset:2px; border-radius:4px; }
  </style>


<nav class="site-nav" aria-label="Main navigation">
  <div class="nav-container">

    <!-- Brand -->
    <a href="#" class="brand" aria-label="Maritime Cook Islands home">
  <img src="./img/logo.svg" alt="">
    </a>

    <!-- hamburger -->
    <div class="menu-toggle" aria-hidden="true" title="Toggle menu">
      <i class="fas fa-bars"></i>
    </div>

    <!-- NAV LIST (starts immediately after logo) -->
    <ul class="nav-list" role="menubar">

      <!-- About Us -->
      <li class="has-sub" role="none">
        <a class="top-link" href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
          About Us <i class="fas fa-caret-down caret" aria-hidden="true"></i>
        </a>

        <div class="dropdown" role="menu" aria-label="About Us submenu">
          <ul>
            <li><a href="about-mci.php" role="menuitem">About MCI</a></li>
            <li><a href="why-choose-the-cook-islands.php" role="menuitem">Why Choose The Cook Islands</a></li>
            <li><a href="meet-the-team.php" role="menuitem">Meet The Team</a></li>
            <li><a href="deputy-registars.php" role="menuitem">Cook Islands Agents</a></li>
            <li><a href="ministry-of-transport.php" role="menuitem">Ministry of support</a></li>
          </ul>
        </div>
      </li>

      <!-- Cook Islands -->
      <li class="has-sub" role="none">
        <a class="top-link" href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
          Cook Islands <i class="fas fa-caret-down caret" aria-hidden="true"></i>
        </a>

        <div class="dropdown" role="menu" aria-label="Cook Islands submenu">
          <ul>
            <li><a href="sanctions-monitoring-program.php">Sanctions Monitoring Program</a></li>
            <li><a href="cook-islands-maritime-legislation.php">Cook Islands Maritime Legislation</a></li>
            <li><a href="cook-islands-maritime-jurisdiction.php">Cook Islands Maritime Jurisdiction</a></li>
            <li><a href="international-maritime-organization.php">International Maritime Organizaiton</a></li>
            <li><a href="cook-islands-lawyers">CookIslands Lawyers</a></li>
            <li><a href="cook-islands-approved-surveyors.php">Approved Fule Suppliers</a></li>
          </ul>
        </div>
      </li>

      <!-- Registration -->
      <li class="has-sub" role="none">
        <a class="top-link" href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
          Registration <i class="fas fa-caret-down caret" aria-hidden="true"></i>
        </a>

        <div class="dropdown" role="menu" aria-label="Registration submenu">
          <ul>
            <li><a href="online-application.php">Online Registration</a></li>
            <li><a href="vessel-registration-requirements.php">Vessel Registration Requirements</a></li>

            <!-- Yacht Registration (submenu flyout to right) -->
            <li class="has-sub">
              <a href="yachts.php">Yacht Registration <i class="fas fa-caret-right caret" aria-hidden="true"></i></a>
              <div class="submenu" role="menu" aria-label="Yacht Registration submenu">
                <ul>
                  <li><a href="commercial-yachts.php">Commercial Yachts</a></li>
                  <li><a href="private-yachts.php">Private Yachts</a></li>
                  <li><a href="dual-registration.php">Dual Registration</a></li>
                </ul>
              </div>
            </li>

            <li><a href="ownership-structure.php">Ownership Structure</a></li>
            <li><a href="mortgage-registration.php">Mortgage Registration</a></li>

            <!-- Civil Liability Certificates (submenu flyout to right) -->
            <li class="has-sub">
              <a href="#">Civil Liability Certificates <i class="fas fa-caret-right caret" aria-hidden="true"></i></a>
              <div class="submenu" role="menu" aria-label="Civil Liability Certificates submenu">
                <ul>
                  <li><a href="insurance-pi-insurers.php">P&amp;I Insurance</a></li>
                  <li><a href="insurance-bunkers.php">Bunkers</a></li>
                  <li><a href="insurance-clc.php">CLC</a></li>
                  <li><a href="insurance-wrecks.php">Wrecks</a></li>
                </ul>
              </div>
            </li>

          </ul>
        </div>
      </li>

      <!-- Survey and Certification -->
      <li class="has-sub" role="none">
        <a class="top-link" href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
          Survey and Certification <i class="fas fa-caret-down caret" aria-hidden="true"></i>
        </a>

        <div class="dropdown" role="menu" aria-label="Survey submenu">
          <ul>
            <li><a href="classification-socities">Classification Societies</a></li>
            <li><a href="recognised-security-organisations.php">Recognised Security Organizations</a></li>
            <li><a href="cook-islands-approved-surveyors.php">Cook Islands Approved Surveyors</a></li>
            <li><a href="port-state-control=-compliance-program.php">Port and State Control Compliance Support</a></li>
            <li><a href="electronic-certificate-verification.php">Electronic Certification Verification</a></li>
            <li><a href="ship-to-ship transfers.php">Ship to Ship Transfers</a></li>
            <li><a href="safe-manning-guidlines.php">Safe Manning Guidlines</a></li>
          </ul>
        </div>
      </li>

      <!-- Seafarers -->
      <li class="has-sub" role="none">
        <a class="top-link" href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
          Seafarers <i class="fas fa-caret-down caret" aria-hidden="true"></i>
        </a>

        <div class="dropdown" role="menu" aria-label="Seafarers submenu">
          <ul>
            <li><a href="seafarer-training-certification.php">Seafarers Training &amp; Certifications</a></li>
            <li><a href="certificate-of-endorsement.php">Certificate of Endorsement</a></li>
            <li><a href="approved-training-centres.php">Approved Training Centers</a></li>
            <li><a href="fit-and-proper-person.php">Fit & Proper Person</a></li>
            <li><a href="seafarer-discharge-book.php">Seafarer Discharge Book</a></li>
            <li><a href="stcw-dispensations.php">STCW Dispensations</a></li>
            <li><a href="certificate-of-medical-fitness.php">Certificate of Medical Fitness</a></li>
            <li><a href="seafarer-certificate-verification.php">Seafarer Certificate Verification</a></li>
            <li><a href="appeals.php">Appeals</a></li>
            <li><a href="sefarers-faq.php">Seafarer FAQ</a></li>
          </ul>
        </div>
      </li>

      <!-- Info Center -->
      <li class="has-sub" role="none">
        <a class="top-link" href="#" role="menuitem" aria-haspopup="true" aria-expanded="false">
          Info Center <i class="fas fa-caret-down caret" aria-hidden="true"></i>
        </a>

        <div class="dropdown" role="menu" aria-label="Info Center submenu">
          <ul>
            <li><a href="#">Document Library</a></li>
            <li><a href="#">Calendar of Events</a></li>
          </ul>
        </div>
      </li>

    </ul>

    <!-- right actions -->
    <div class="nav-actions" aria-hidden="false">
      <a class="search-icon" href="#" title="Search"><i class="fas fa-search"></i></a>

    </div>

  </div>
</nav>




