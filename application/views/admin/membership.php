<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="theme-color" content="#000000" />

    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link rel="stylesheet" href="https://site-assets.fontawesome.com/releases/v5.15.4/css/all.css" />

    <link href="assets/assets/plugins/bootstrap/css/bootstrap.min.css" rel="stylesheet" />

    <link href="assets/assets/plugins/web-fonts/font-awesome/font-awesome.min.css" rel="stylesheet">
    <link href="assets/assets/plugins/web-fonts/plugin.css" rel="stylesheet" />

    <link href="assets/assets/css/style/style.css" rel="stylesheet" />
    <link href="assets/assets/css/skins.css" rel="stylesheet" />
    <link href="assets/assets/css/dark-style.css" rel="stylesheet" />
    <link href="assets/assets/css/colors/default.css" rel="stylesheet" />

    <!-- Color css-->
    <link id="theme" rel="stylesheet" type="text/css" media="all" href="assets/css/colors/color.css" />

    <!-- Select2 css-->
    <link href="assets/assets/plugins/select2/css/select2.min.css" rel="stylesheet" />

    <!-- Mutipleselect css-->
    <link rel="stylesheet" href="assets/plugins/multipleselect/multiple-select.css" />

    <!-- Sidemenu css-->
    <link href="assets/assets/css/sidemenu/sidemenu.css" rel="stylesheet" />

    <!-- Switcher css-->
    <link href="assets/assets/switcher/css/switcher.css" rel="stylesheet" />
    <link href="assets/assets/switcher/demo.css" rel="stylesheet" />

    <title>Soulmate</title>
</head>

<body class="main-body">

    <div class="main-sidebar main-sidebar-sticky side-menu">
        <div class="sidemenu-logo" style="z-index:10000;">
            <a href="#" class="main-logo">
                <h2 class="mb-0 text-white text-uppercase">Soulmate</h2>
            </a>

        </div>

        <div class="main-sidebar-body">
            <ul class="nav">
                <li class="nav-header"><span class="nav-label">Dashboard</span></li>
                <li class="nav-item ">
                    <a href="Admin_Dashboard" class="nav-link "><span class="shape1"></span><span class="shape2"></span>
                        <i class="fad fa-home-lg sidemenu-icon"></i>
                        <span class="sidemenu-label">Dashboard</span></a>
                </li>

                <li class="nav-item">
                    <a href="Ad_User_Management" class="nav-link " href="userlist.html"><span class="shape1"></span><span class="shape2"></span>
                        <i class="fad fa-users-cog  sidemenu-icon menu-icon"></i>
                        <span class="sidemenu-label">User Management</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Ad_User_Membership" class="nav-link active" href="userlist.html"><span class="shape1"></span><span class="shape2"></span>
                        <i class="fas fa-user-shield  sidemenu-icon menu-icon"></i>
                        <span class="sidemenu-label">Membership</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Ad_Contact_List " class="nav-link" href="userlist.html"><span class="shape1"></span><span class="shape2"></span>
                        <i class="fas fa-phone-volume sidemenu-icon menu-icon"></i>
                        <span class="sidemenu-label">Conatact List</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="Ad_Success_Story" class="nav-link" href="userlist.html"><span class="shape1"></span><span class="shape2"></span>
                        <i class="fad fa-badge-check sidemenu-icon menu-icon"></i>
                        <span class="sidemenu-label">Success Story</span>
                    </a>
                </li>

            </ul>

        </div>
    </div>

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



                <div class="main-profile-menu" }>
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
                        <a class="dropdown-item border-top" href="Admin_Login/logout">
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



    <div class="main-content side-content pt-0 mt-4">
        <div class="container-fluid">
            <div class="inner-body">

                <div class="page-header">
                    <div>
                        <h2 class="main-content-title tx-24 mg-b-5">Membership</h2>
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item">
                                <a href="dashboard.html">Home</a>
                            </li>

                            <li class="breadcrumb-item active" aria-current="page">&nbsp;&nbsp;Membership Management</li>
                        </ol>
                    </div>



                </div>
                <div class="row justify-content-center">
                    <div class="col-lg-12 table-responsive border border-bottom-0">
                        <div class="card custom-card">
                            <div class="card-body">
                                <div class="row justify-content-center">
                                    <div class="col-lg-10">
                                        <form class="mt-3">

                                            <div class='row'>

                                                <div class='mb-4 col-lg-6'>
                                                    <label class="title-col">Select Plan</label>

                                                    <select class="form-control">
                                                        <option>CLASSIC</option>
                                                        <option>CLASSIC GOLD</option>
                                                        <option>CLASSIC PLUS</option>
                                                        <option>CLASSIC DIAMOND</option>
                                                        <option>PLATINUM PLAN</option>
                                                        <option>CLASSIC PLATINUM</option>
                                                    </select>

                                                </div>
                                                <div class='mb-4 col-lg-3'>
                                                    <label class="title-col">User Id</label>

                                                    <input id="categor" class="form-control filter-input" name="name" autoComplete="off" type="text" required />
                                                </div>
                                                <div class='mb-4 col-lg-3'>
                                                    <label class="title-col">Number Of Contacts</label>

                                                    <input id="categor" class="form-control filter-input" name="name" autoComplete="off" type="text" required />
                                                </div>

                                                <div class="mt-0 col-lg-12">
                                                    <Button type='submit' class="mr-3 btn-pd btnBg">Submit</Button>
                                                    <Button type='reset' variant="contained" class="btn btn-dark btn-pd">Reset</Button>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer mb-1">

                            </div>
                        </div>


                    </div>
                </div>
            </div>

        </div>
    </div>


    <script src="assets/assets/plugins/jquery/jquery.min.js"></script>
    <script src="assets/assets/plugins/bootstrap/js/popper.min.js"></script>
    <script src="assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script src="assets/assets/plugins/select2/js/select2.min.js"></script>
    <script src="assets/assets/plugins/sidemenu/sidemenu.js"></script>
    <script src="assets/assets/plugins/sidebar/sidebar.js"></script>
    <script src="assets/assets/js/custom.js"></script>

    <!-- Sticky js -->
    <script src="assets/assets/js/sticky.js"></script>
    <script>
        $(".main-profile-menu").click(function() {
            $(".dropdown-menu").toggle();
        });
    </script>

    <!-- Custom js -->
    <script src="assets/assets/js/custom.js"></script>

</body>

</html>