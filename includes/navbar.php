
<!-- <?php session_start(); ?> -->
  <body>
    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
      <div class="d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
          <img src="assets/img/logo-dark.png" alt="" />
        </a>
        <i class="bi bi-list toggle-sidebar-btn"></i>
      </div>

      <nav class="header-nav ms-auto">
        <ul class="d-flex align-items-center">
          <li class="nav-item dropdown">
            <a class="nav-link nav-icon" href="#" data-bs-toggle="dropdown">
              <i class="bi bi-bell"></i>
              <span class="badge bg-primary badge-number">4</span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow notifications">
              <li class="dropdown-header">
                You have 4 new notifications
              </li>
            </ul>
          </li>
    
          <li class="nav-item dropdown pe-3">
            <a class="nav-link nav-profile d-flex align-items-center pe-0" href="#" data-bs-toggle="dropdown">
              <img src="assets/img/shubhamdesigner.jpg" alt="Profile" class="rounded-circle" />
              <span class="d-none d-md-block dropdown-toggle ps-2"><?= $_SESSION['user']['user_fname']." ".$_SESSION['user']['user_lname']; ?></span>
            </a>

            <ul class="dropdown-menu dropdown-menu-end dropdown-menu-arrow profile">
              <li class="dropdown-header text-center">
                <h6><?= $_SESSION['user']['user_fname']." ".$_SESSION['user']['user_lname']; ?></h6>
                <span><?= $_SESSION['user']['user_skills']; ?></span>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="#">
                  <i class="bi bi-person"></i>
                  <span>My Profile</span>
                </a>
              </li>
              <li>
                <hr class="dropdown-divider" />
              </li>

              <li>
                <a class="dropdown-item d-flex align-items-center" href="./signout.php">
                  <i class="bi bi-box-arrow-right"></i>
                  <span>Sign Out</span>
                </a>
              </li>
            </ul>
          </li>
        </ul>
      </nav>
    </header>