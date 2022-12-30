<?php get_header(); ?>

<?php get_sidebar(); ?> 

      <!-- Content Wrapper -->
      <div id="content-wrapper" class="d-flex flex-column">
        <!-- Main Content -->
        <div id="content">
          <!-- Topbar -->
          <nav
            class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow"
          >
            <!-- Sidebar Toggle (Topbar) -->
            <button
              id="sidebarToggleTop"
              class="btn btn-link d-md-none rounded-circle mr-3"
            >
              <i class="fa fa-bars"></i>
            </button>

            <!-- Topbar Navbar -->
            <ul class="navbar-nav ml-auto">
              <!-- Nav Item - Search Dropdown (Visible Only XS) -->
              <li class="nav-item dropdown no-arrow d-sm-none">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="searchDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-search fa-fw"></i>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                  aria-labelledby="searchDropdown"
                >
                  <form class="form-inline mr-auto w-100 navbar-search">
                    <div class="input-group">
                      <input
                        type="text"
                        class="form-control bg-light border-0 small"
                        placeholder="Search for..."
                        aria-label="Search"
                        aria-describedby="basic-addon2"
                      />
                      <div class="input-group-append">
                        <button class="btn btn-primary" type="button">
                          <i class="fas fa-search fa-sm"></i>
                        </button>
                      </div>
                    </div>
                  </form>
                </div>
              </li>

              <!-- Nav Item - Alerts -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="alertsDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-bell fa-fw"></i>
                  <!-- Counter - Alerts -->
                  <span class="badge badge-danger badge-counter">0</span>
                </a>
                <!-- Dropdown - Alerts -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="alertsDropdown"
                >
                  <h6 class="dropdown-header">Notification Center</h6>

                  <a
                    class="dropdown-item text-center medium text-gray-900"
                    href="#"
                    >Show All Notification</a
                  >
                </div>
              </li>

              <!-- Nav Item - Messages -->
              <li class="nav-item dropdown no-arrow mx-1">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="messagesDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <i class="fas fa-shopping-cart"></i>
                  <!-- Counter - Messages -->
                  <span class="badge badge-danger badge-counter">0</span>
                </a>
                <!-- Dropdown - Messages -->
                <div
                  class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="messagesDropdown"
                >
                  <h6 class="dropdown-header">Cart Center</h6>
                  <a
                    class="dropdown-item text-center medium text-gray-900"
                    href="#"
                    >No cart added</a
                  >
                </div>
              </li>

              <div class="topbar-divider d-none d-sm-block"></div>

              <!-- Nav Item - User Information -->
              <li class="nav-item dropdown no-arrow">
                <a
                  class="nav-link dropdown-toggle"
                  href="#"
                  id="userDropdown"
                  role="button"
                  data-toggle="dropdown"
                  aria-haspopup="true"
                  aria-expanded="false"
                >
                  <span
                    class="mr-2 d-none d-lg-inline text-gray-800 fw-600 small"
                    >Bipin Murphys
                  </span>
                  <img
                    class="img-profile rounded-circle"
                    src= "<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/undraw_profile.svg"
                  />
                </a>
                <!-- Dropdown - User Information -->
                <div
                  class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                  aria-labelledby="userDropdown"
                >
                  <a class="dropdown-item" href="#">
                    <i
                      class="fas fa-info-circle fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    My Details
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                    Settings
                  </a>
                  <a class="dropdown-item" href="#">
                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                    Activity Log
                  </a>
                  <div class="dropdown-divider"></div>
                  <a
                    class="dropdown-item"
                    href="#"
                    data-toggle="modal"
                    data-target="#logoutModal"
                  >
                    <i
                      class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"
                    ></i>
                    Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <!-- End of Topbar -->

          <!-- /.container-fluid -->
          <div class="container">
            <div class="mb-4 mt-5">
              <h1 class="h2 fw-700 mb-1 text-gray-900">My Dashboard</h1>
              <span class="fs-13">Client Area</span>
            </div>
          </div>
          <div class="container">
            <div class="row mt-5">
              <div class="col-xl-4 col-lg-5 pr-4">
                <div class="client-infos">
                  <h5 class="fw-700 fs-17 mb-3 text-gray-900">
                    Other Information
                  </h5>

                  <p>Status: <b class="text-success">Active</b></p>
                  <p>Registered: <span>30/11/2022</span></p>
                  <p>Client for: <span>2 Days</span></p>
                  <p>Email Verified: <span>Yes</span></p>
                </div>
                <div class="mt-4 pb-2">
                  <button
                    type="button"
                    class="btn fs-14 text-success btn-login"
                  >
                    Last Login: 02/12/2022 14:22
                  </button>
                </div>
                <div class="card profile-details-card mt-4 shadow mb-4">
                  <!-- Card Body -->
                  <div class="card-body">
                    <img
                      class="img-profile rounded-circle"
                      src= "<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/undraw_profile.svg"
                    />
                    <div class="user-profile-details">
                      <h5 class="fw-700 fs-17 mb-3 mt-3 text-gray-900">
                        Bipin Murphys
                      </h5>
                      <p>New South Wales, North Pole 2140</p>
                      <p>Australia</p>
                    </div>
                    <div class="mt-4">
                      <a
                        href="update"
                        class="btn text-primary fs-14 px-4 btn-update"
                        >Update</a
                      >
                      <a
                        href="login.html"
                        class="btn fs-14 px-4 btn-outline-logout"
                        >Logout</a
                      >
                    </div>
                  </div>
                </div>
                <div class="shortcuts-links mb-5 pt-2">
                  <h5 class="fw-700 fs-17 mb-3 text-gray-900">Shortcuts</h5>
                  <div class="shortcut-lists">
                    <div class="d-flex flex-column">
                      <a
                        class="text-decoration-none fw-600 mb-2 text-primary"
                        href="#"
                      >
                        <i class="fas fa-plus fa-sm fa-fw mr-1"></i>
                        Order New Services
                      </a>
                      <a
                        href="https://www.hosting.murphystechnology.com.au/"
                        target="_blank"
                        class="text-decoration-none fw-600 mb-2 text-primary"
                      >
                        <i class="fas fa-tag fa-sm fa-fw mr-1"></i>
                        Domain Registration
                      </a>
                      <a
                        href="login.html"
                        class="text-decoration-none fw-600 mb-2 text-primary"
                      >
                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-1"></i>
                        Logout
                      </a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-xl-8 col-lg-7">
                <div class="service-slider row mb-4">
                  <div class="col-12">
                    <div
                      id="serviceSliderFade"
                      class="carousel slide carousel-fade"
                      data-ride="carousel"
                    >
                      <ol class="carousel-indicators">
                        <li
                          data-target="#serviceSliderFade"
                          data-slide-to="0"
                          class="active"
                        ></li>
                        <li
                          data-target="#serviceSliderFade"
                          data-slide-to="1"
                        ></li>
                      </ol>
                      <div class="carousel-inner">
                        <div class="carousel-item active">
                          <div class="carousel-service-img">
                            <img
                              src= "<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/slider1.jpg"
                              class="d-block w-100"
                              alt="..."
                            />
                          </div>
                        </div>
                        <div class="carousel-item">
                          <div class="carousel-service-img">
                            <img
                              src= "<?php echo esc_url(get_template_directory_uri('/')); ?>/assets/images/slider2.jpg"
                              class="d-block w-100"
                              alt="..."
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row pt-2">
                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card service-card shadow h-100">
                      <a href="services" class="text-decoration-none">
                        <div class="card-body">
                          <div class="row no-gutters">
                            <div class="col mr-2">
                              <div
                                class="font-weight-bold text-success text-uppercase mb-1"
                              >
                                Services
                              </div>
                              <div
                                class="h2 mb-0 font-weight-bold text-gray-800"
                              >
                                0
                              </div>
                            </div>
                            <div class="col-auto">
                              <i
                                class="fas fa-clipboard-list fa-2x text-gray-300"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <!-- Earnings (Monthly) Card Example -->
                  <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card service-card shadow h-100">
                      <a href="unpaid-invoice" class="text-decoration-none">
                        <div class="card-body">
                          <div class="row no-gutters">
                            <div class="col mr-2">
                              <div
                                class="font-weight-bold text-info text-uppercase mb-1"
                              >
                                Unpaid <br />
                                Invoices
                              </div>
                              <div class="row no-gutters align-items-center">
                                <div class="col-auto">
                                  <div
                                    class="h2 mb-0 mr-3 font-weight-bold text-gray-800"
                                  >
                                    0
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="col-auto">
                              <i
                                class="fas fa-dollar-sign fa-2x text-gray-300"
                              ></i>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>

                  <!-- Pending Requests Card Example -->
                  <div class="col-xl-4 col-md-6 mb-4">
                    <div class="card service-card shadow h-100">
                      <a href="tickets" class="text-decoration-none">
                        <div class="card-body">
                          <div class="row no-gutters">
                            <div class="col mr-2">
                              <div
                                class="font-weight-bold text-warning text-uppercase mb-1"
                              >
                                Tickets
                              </div>
                              <div
                                class="h2 mb-0 font-weight-bold text-gray-800"
                              >
                                0
                              </div>
                            </div>
                            <div class="col-auto">
                              <i class="fas fa-tag fa-2x text-gray-300"></i>
                            </div>
                          </div>
                        </div>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- End of Main Content -->

        <?php get_footer(); ?>