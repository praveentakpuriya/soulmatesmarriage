<div class="main-header side-header sticky">
  <div class="container-fluid">
    <div class="main-header-left">
      <a class="main-header-menu-icon" href="#" id="mainSidebarToggle"><span></span></a>
    </div>

    <div class="main-header-right">
      <div class="dropdown header-search">
        <a class="nav-link icon header-search">
          <i class="fe fe-search header-icons"></i>
        </a>
      </div>



      <div class="main-profile-menu">
        <a class="d-flex" href="#">
          <span class="main-img-user"><img alt="avatar" src="assets/assets/img/admin.png" /></span>
        </a>
        <div class="dropdown-menu">
          <div class="header-navheading">
            <h6 class="main-notification-title">Admin</h6>
            <p class="main-notification-text">admin@gmail.com</p>
          </div>
          <!--  <a class="dropdown-item border-top" href="#">
                  <i class="fe fe-user"></i> My Profile
                </a>  -->
          <a class="dropdown-item border-top" href="<?php echo base_url('Admin_Login/logout') ?>">
            <i class="fe fe-power"></i> Log Out
          </a>

        </div>
      </div>


    </div>
  </div>
</div>



<div class="mobile-main-header">
  <div class="mb-1 navbar navbar-expand-lg  nav nav-item  navbar-nav-right responsive-navbar navbar-dark  ">
    <div class="collapse navbar-collapse" id="navbarSupportedContent-4">
      <div class="d-flex order-lg-2 ml-auto">
        <div class="dropdown header-search">
          <a class="nav-link icon header-search">
            <i class="fe fe-search header-icons"></i>
          </a>
          <div class="dropdown-menu">
            <div class="main-form-search p-2">
              <div class="input-group">
                <div class="input-group-btn search-panel">
                  <select class="form-control select2-no-search">
                    <option label="All categories">
                    </option>
                    <option value="IT Projects">
                      IT Projects
                    </option>
                    <option value="Business Case">
                      Business Case
                    </option>
                    <option value="Microsoft Project">
                      Microsoft Project
                    </option>
                    <option value="Risk Management">
                      Risk Management
                    </option>
                    <option value="Team Building">
                      Team Building
                    </option>
                  </select>
                </div>
                <input type="search" class="form-control" placeholder="Search for anything..." />
                <button class="btn search-btn"><svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" strokeWidth="2" strokeLinecap="round" strokeLinejoin="round" class="feather feather-search">
                    <circle cx="11" cy="11" r="8"></circle>
                    <line x1="21" y1="21" x2="16.65" y2="16.65"></line>
                  </svg></button>
              </div>
            </div>
          </div>
        </div>

        <div class="dropdown ">
          <a class="nav-link icon full-screen-link">
            <i class="fe fe-maximize fullscreen-button fullscreen header-icons"></i>
            <i class="fe fe-minimize fullscreen-button exit-fullscreen header-icons"></i>
          </a>
        </div>
        <div class="dropdown main-header-notification">
          <a class="nav-link icon" href="#">
            <i class="fe fe-bell header-icons"></i>
            <span class="badge badge-danger nav-link-badge">4</span>
          </a>
          <div class="dropdown-menu">
            <div class="header-navheading">
              <p class="main-notification-text">You have 1 unread notification<span class="badge badge-pill badge-primary ml-3">View all</span></p>
            </div>
            <div class="main-notification-list">
              <div class="media new">
                <div class="main-img-user online"><img alt="avatar" src="assets/img/users/5.jpg" /></div>
                <div class="media-body">
                  <p>Congratulate <strong>Olivia James</strong> for New template start</p><span>Oct 15 12:32pm</span>
                </div>
              </div>
              <div class="media">
                <div class="main-img-user"><img alt="avatar" src="assets/img/users/2.jpg" /></div>
                <div class="media-body">
                  <p><strong>Joshua Gray</strong> New Message Received</p><span>Oct 13 02:56am</span>
                </div>
              </div>
              <div class="media">
                <div class="main-img-user online"><img alt="avatar" src="assets/img/users/3.jpg" /></div>
                <div class="media-body">
                  <p><strong>Elizabeth Lewis</strong> added new schedule realease</p><span>Oct 12 10:40pm</span>
                </div>
              </div>
            </div>
            <div class="dropdown-footer">
              <a href="#">View All Notifications</a>
            </div>
          </div>
        </div>
        <div class="main-header-notification mt-2">
          <a class="nav-link icon" href="chat.html">
            <i class="fe fe-message-square header-icons"></i>
            <span class="badge badge-success nav-link-badge">6</span>
          </a>
        </div>
        <div class="dropdown main-profile-menu">
          <a class="d-flex" href="#">
            <span class="main-img-user">
              {/* <img alt="avatar" src="/assets/images/users/1.jpg" /> */}
            </span>
          </a>
          <div class="dropdown-menu">
            <div class="header-navheading">
              <h6 class="main-notification-title">Admin</h6>
              <p class="main-notification-text">admin@gmail.com</p>
            </div>
            <a class="dropdown-item border-top" href="#">
              <i class="fe fe-user"></i> My Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fe fe-edit"></i> Edit Profile
            </a>
            <a class="dropdown-item" href="#">
              <i class="fe fe-settings"></i> Account Settings
            </a>
            <a class="dropdown-item" href="#">
              <i class="fe fe-settings"></i> Support
            </a>
            <a class="dropdown-item" href="#">
              <i class="fe fe-compass"></i> Activity
            </a>
            <a class="dropdown-item" href="signin.html">
              <i class="fe fe-power"></i> Sign Out
            </a>
          </div>
        </div>

      </div>
    </div>
  </div>
</div>



<div class="main-content side-content pt-0">
  <div class="container-fluid">
    <div class="inner-body">

      <div class="page-header">
        <div>
          <h2 class="main-content-title tx-24 mg-b-5">Welcome To Dashboard</h2>
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Soulmate</a></li>
            <li class="breadcrumb-item active" aria-current="page">&nbsp;&nbsp;Dashboard</li>
          </ol>
        </div>

      </div>

      <div class="row row-sm">
        <div class="col-sm-12 col-lg-12 col-xl-12">
          <div class="row row-sm">
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
              <div class="card custom-card annimestion blueBg">
                <div class="card-body">
                  <div class="card-item">
                    <div class="card-item-icon card-icon">
                      <i class="fad fa-users"></i>
                    </div>
                    <div class="card-item-title mb-2">
                      <label class="main-content-label tx-13 font-weight-bold mb-1">Total Customers</label>
                      <span class="d-block tx-12 mb-0 text-muted">Total Customers</span>
                    </div>
                    <div class="card-item-body">
                      <div class="card-item-stat">
                        <h4 class="font-weight-bold">400</h4>
                        <small><b class="text-success">55%</b> higher</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-6 col-lg-6 col-xl-4">
              <div class="card custom-card annimestion darkBlue">
                <div class="card-body">
                  <div class="card-item">
                    <div class="card-item-icon card-icon">
                      <i class="fad fa-users"></i>
                    </div>
                    <div class="card-item-title mb-2">
                      <label class="main-content-label tx-13 font-weight-bold mb-1">Free Customers</label>
                      <span class="d-block tx-12 mb-0 text-muted">Free Customers</span>
                    </div>
                    <div class="card-item-body">
                      <div class="card-item-stat">
                        <h4 class="font-weight-bold">100</h4>
                        <small><b class="text-success">5%</b> Increased</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-sm-12 col-md-12 col-lg-12 col-xl-4">
              <div class="card custom-card annimestion lightRed">
                <div class="card-body">
                  <div class="card-item">
                    <div class="card-item-icon card-icon">
                      <i class="fad fa-users"></i>
                    </div>
                    <div class="card-item-title  mb-2">
                      <label class="main-content-label tx-13 font-weight-bold mb-1">Membership Customers</label>
                      <span class="d-block tx-12 mb-0 text-muted">Membership Customers</span>
                    </div>
                    <div class="card-item-body">
                      <div class="card-item-stat">
                        <h4 class="font-weight-bold">300</h4>
                        <small><b class="text-success">12%</b> increased</small>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

          </div>


        </div>

      </div>




    </div>
  </div>
</div>