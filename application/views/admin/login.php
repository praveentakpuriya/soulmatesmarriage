
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

<div class="page main-signin-wrapper ">
            <div class="main-signin-wrapper">
                <div class="row signpages text-center">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="row row-sm">
                                <div class="col-lg-6 col-xl-5 d-none d-lg-block text-center bg-primary details">
                                    <div class="mt-5 pt-4 p-2 pos-absolute" style="width: 100%;    margin-left: -8px;">
                                       
                                        <h3 class="text-white mb-4">Soulmate</h3>
                                        <div class="clearfix"></div>
                                        <img src="assets/assets/images/user.svg" class="ht-100 mb-0" alt="user" />
                                        <h5 class="mt-4 text-white">Signin Your Account</h5>
                                       <!--  <span class="tx-white-6 tx-13 mb-5 mt-xl-0">Signup to create, discover and connect with the global community</span> -->
                                    </div>
                                </div>
                                <div class="col-lg-6 col-xl-7 col-xs-12 col-sm-12 login_form ">
                                    <div class="container-fluid">
                                        <div class="row row-sm">
                                            <div class="card-body mt-2 mb-2">
                                                
                                                <form action="Admin_Login/checkLogin" method="post"> 
                                                    <h5 class="text-left mb-2">Signin to Your Account</h5>
                                                    <!-- <p class="mb-4 text-muted tx-13 ml-0 text-left">Signin to create, discover and connect with the global community</p> -->
                                                    <div class="form-group text-left">
                                                        <label>Email Address</label>
                                                        <input class="form-control" name="email" placeholder="Enter your email"  type="email" 
                                                         >
                                                    </div>
                                                    <div class="form-group text-left">
                                                        <label>Password</label>
                                                        <input class="form-control" name="password" placeholder="Enter your password" type="password"
                                                        >
                                                    </div>
                                                    <button type="submit" class="mt-5 btn ripple btn-main-primary btn-block ht50">Sign In
                                                    </button>
                                                </form>
                                               <!--  <div class="text-left mt-5 ml-0">
                                                    <div class="mb-1"><a href="#">Forgot password?</a></div>
                                                    {/* <div>Don't have an account? <a href="#">Register Here</a></div> */}
                                                </div> -->
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


      <script src="assets/assets/plugins/jquery/jquery.min.js"></script>
      <script src="assets/assets/plugins/bootstrap/js/popper.min.js"></script>
      <script src="assets/assets/plugins/bootstrap/js/bootstrap.min.js"></script>
      <script src="assets/assets/plugins/select2/js/select2.min.js"></script>
      <script src="assets/assets/plugins/sidemenu/sidemenu.js"></script>
      <script src="assets/assets/plugins/sidebar/sidebar.js"></script>
      <script src="assets/assets/js/custom.js"></script>
      <script>
        $(".main-profile-menu").click(function(){
        $(".dropdown-menu").toggle();
      });
      </script>
  </body>
