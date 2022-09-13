<!DOCTYPE html>
<html lang="en">

<head>
    <title>Soulmates Marraige
</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<style>
    .dropdown-menu li {
        background: #ca5b61;
        margin-bottom: 0px;
        padding: 8px;
        color: #ffffff;
        border-bottom: 1px solid;
    }
</style>

<body>
      <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

        <div class="container">
             <h5 class="logotext">Soulmates Marraige</h5>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav"
                aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="oi oi-menu"></span>
            </button>
          <div class="collapse navbar-collapse" id="ftco-nav">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
                    <li class="nav-item"><a href="about.html" class="nav-link">About</a></li>

                    <li class="nav-item"><a href="#" class="nav-link dropdown-toggle"
                            data-toggle="dropdown">Search</a>
                        <ul class="dropdown-menu">
                            <li><a href="search.html">Quick Search</a></li>
                            <li><a href="search.html">Advance Search</a></li>
                            <li><a href="search.html">Keyword Search</a></li>
                            <li><a href="search.html">Search by ID</a></li>
                        </ul>
                    </li>
                   
                    <li class="nav-item"><a href="membership.html" class="nav-link">Membership</a></li>
                    <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                </ul>
            </div>
             <div style="position: relative; width: 208px;">
            <a href="<?php echo base_url('Registration'); ?>" id="registration" class="button" style="margin-right: 10px;">Register</a>
            <a href="<?php echo base_url('Login'); ?>" id="registration" class="button">Login</a>
        </div>

        </div>
    </nav> <!-- END nav -->

    <!-- END nav -->

    <div class="hero-wrap" style="background-image: url('assets/img/bg_2.jpg');">
        <div class="overlay"></div>
        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-end">

                <div style="display: none;" class="col-lg-4 col-md-6 mt-0 mt-md-0 d-flex">
                    <div class="carousel_wrapper" style="display: none;">
                        <div class="carousel">
                            <div class="slide one">
                                <img src="assets/img/3.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide two">
                                <img src="assets/img/2.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide three">
                                <img src="assets/img/3.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide four">
                                <img src="assets/img/4.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide five">
                                <img src="assets/img/2.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide six">
                                <img src="assets/img/3.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide seven">
                                <img src="assets/img/4.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide eight">
                                <img src="assets/img/3.jpg" style="width: 150px; height: 100px;" />
                            </div>
                            <div class="slide nine">
                                <img src="assets/img/2.jpg" style="width: 150px; height: 100px;" />
                            </div>
                        </div>
                    </div>
                </div>

             <div class="col-lg-2 col" style=" "></div>
                 <div class="col-lg-6 col-md-6  d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Your search for the perfect match ends here!</h1>
                        <p style="font-size: 18px;">Register Free to see your matching profiles</p>
                        <a href="#"
                            class="icon-wrap popup-vimeo d-flex align-items-center mt-4">

                            <div class="heading-title ml-5">
                                <span> Find the Love of Your Life?</span>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <section class="ftco-section ftco-no-pb ftco-no-pt">
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="quicksearch">
                    <div class="search-wrap-1 mb-5" id="rotate"
                        style="margin-top: -234px;
                        background: linear-gradient(45deg, #bf5e5a, #a39c9cf0);
                        padding: 22px;
                        border-radius: 10px;">
                        <form class="search-property-1"
                            action="#" method=post>
                            <div class="row">
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Looking for</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name="sex" class="form-control" style="#">
                                                    <option class="active" disabled>Looking For </option>
                                                    <option value="Female" selected="true">Bride</option>
                                                    <option value="Male">Groom</option>

                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Age</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select class="form-control" name="agefrom" id="agefrom"
                                                    style="#">
                                                    <option class="active">Age From</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20" selected="selected">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Age</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select class="form-control" name="ageto" id="ageto"
                                                    style="#">
                                                    <option class="active">Age To</option>
                                                    <option value="18">18</option>
                                                    <option value="19">19</option>
                                                    <option value="20" selected="selected">20</option>
                                                    <option value="21">21</option>
                                                    <option value="22">22</option>
                                                  
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Religion</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name='lstreligion'
                                                    onchange='ddchange(this.value);newddchange(this);' id='lstreligion'
                                                    class='required form-control selectpicker'
                                                    style='#'>
                                                    <option value='Any' selected='selected'>Any religion</option>
                                                    <option value='Buddhist'>Buddhist</option>
                                                    <option value='Christian'>Christian</option>
                                                    
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg align-items-end">
                                    <div class="form-group">
                                        <label for="#">Mother Tongue</label>
                                        <div class="form-field">
                                            <div class="select-wrap">
                                                <div class="icon"><span class="ion-ios-arrow-down"></span></div>
                                                <select name='mtongue'
                                                    onchange='ddchange(this.value);newddchange(this);' id='mtongue'
                                                    class='required form-control selectpicker'
                                                    style='#'>
                                                    <option value='Any' selected='selected'>Mother Tongue</option>
                                                    <option value='Arabic'>Arabic</option>
                                                    <option value='Assamese'>Assamese</option>
                                                   
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg align-self-end">
                                    <div class="form-group">
                                        <div class="form-field">
                                            <input type="submit" value="Search" class="button">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section><br>


    <section class="ftco-section ftco-no-pt ftco-no-pb">
        <div class="container">
            <div class="row no-gutters">

                <div class="col-md-7 p-md-5 img-fluid img img-2 d-flex justify-content-center align-items-center"
                    style="background-image: url(assets/img/choose1.jpg);">
                </div>
                <div class="col-md-5 wrap-about py-md-5 ">
                    <div class="heading-section mb-5 pl-md-5"
                        style="background-image: url('assets/img/blur.jpg'); background-size: cover; padding: 12px; position: relative; right: 215px; width: 693px;">
                        <span class="subheading">Choose us</span>
                        <h2 class="mb-4 text-pop-up-top" id="h1">We help at every stage</h2>

                        <p>Marriage, we learned is an institution with unlimited variables, that cannot simply be
                            formulated into a software application. A successful marriage requires a mix of
                            Compatibility, Chemistry, Commitment, Community, Communication and Compassion.

                        </p>
                        <p><a href="#" class="btn btn-primary">Register Free</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section><br><br>


    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center mb-5">
                <div class="col-md-7 heading-section text-center ">
                    <span class="subheading">Featured</span>
                    <h2>Featured Brides & Grooms</h2>
                </div>
            </div>
            <div class="row d-flex">

                <div class="col-md-3 d-flex ">
                    <div class="blog-entry justify-content-end">
                        <figure class="swing" style="    height: 250px;overflow: hidden;">
                           <img src="assets/img/img2.jpg" style="width: 260px;">
                        </figure>
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">2 years,</a></div>
                                <div><a href="#"></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"></a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex ">
                    <div class="blog-entry justify-content-end">
                        <figure class="swing" style="    height: 250px;overflow: hidden;">
                            <img src="assets/img/img3.jpg" style="width: 260px;">
                        </figure>
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">6 years,</a></div>
                                <div><a href="#"></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"></a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex ">
                    <div class="blog-entry justify-content-end">
                        <figure class="swing" style="height: 250px;overflow: hidden;">
                            <img src="assets/img/img4.jpg" style="width: 260px;">
                        </figure>
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">1 years,</a></div>
                                <div><a href="#"></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"></a></h3>

                        </div>
                    </div>
                </div>

                <div class="col-md-3 d-flex ">
                    <div class="blog-entry justify-content-end">
                        <figure class="swing" style="    height: 250px;overflow: hidden;">
                           <img src="assets/img/img1.jpg" style="width: 260px;">
                        </figure>
                        </a>
                        <div class="text pt-4">
                            <div class="meta mb-3">
                                <div><a href="#">2 years,</a></div>
                                <div><a href="#"></a></div>
                            </div>
                            <h3 class="heading mt-2"><a href="#"></a></h3>

                        </div>
                    </div>
                </div>

              

               
                </div>
            </div>
        </div>
    </section>


<section class="slice--offset parallax-section parallax-section-lg" style="background-image: url(assets/img/parallax_image_1594499147.jpg);">
    <span class="mask mask-dark--style-2"></span>
    <div class="container" style="    padding: 32px 1px;">
        <div class="row py-3 justify-content-center">
            <div class="col-lg-8 col-md-8 text-center">
                <h1 class="heading heading-inverse heading-1 strong-400 text-normal text-white">
               Soulmates Marraige</h1>
                <span class="clearfix"></span>
                <div class="fluid-paragraph fluid-paragraph-sm mt-3 mb-3 c-white text-white">
                    No. 1 Matrimonial Site. Easy, Safe &amp; Secure Way To Find The Perfect One For You! Most Trusted Marriage Portal. View &amp; Contact Millions Of Profiles. Register Now! Strict Privacy Controls. Search by Community                </div>
                <div class="btn-container mt-5">
                                            <a href="#" class="button btn btn-styled btn-md btn-base-1 z-depth-2-bottom">Register Now</a>
                                    </div>
            </div>
        </div>
    </div>
</section>

    <div class="container-fluid" id="mobilelay" style="margin-top: 43px;">
        <section class="ftco-section services-section img">

            <div class="row">
                <div class="col-md-12">

                    <div class="row justify-content-center">
                        <div class="col-md-12 heading-section text-center  mb-5">
                            <span class="subheading">Member</span>
                            <h2 class="mb-2">Membership Features</h2>
                        </div>
                    </div><br>

                    <div class="container2">
                        <div class="card">
                            <h3 class="title">Edit Profile</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <div class="circle">
                                <img src="assets/img/newedit1.png">
                                <circle class="stroke" cx="60" cy="60" r="50" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <h3 class="title">Upload Photos</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <div class="circle">
                                <img src="assets/img/newupload.png">
                                <circle class="stroke" cx="60" cy="60" r="50" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <h3 class="title">Search Profiles</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <div class="circle">
                                <img src="assets/img/newsearch.png">
                                <circle class="stroke" cx="60" cy="60" r="50" />
                                </svg>
                            </div>
                        </div>
                        <div class="card">
                            <h3 class="title">Send Message</h3>
                            <div class="bar">
                                <div class="emptybar"></div>
                                <div class="filledbar"></div>
                            </div>
                            <div class="circle">
                                <img src="assets/img/newmessage1.png">
                                <circle class="stroke" cx="60" cy="60" r="50" />
                                </svg>
                            </div>
                        </div>
                    </div>
                </div>

             
            </div>

    </div>
    </section>








    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-12 heading-section text-center  mb-5">
                    <span class="subheading">What we Success</span>
                    <h2 class="mb-2">Our Success Stories</h2>
                </div>
            </div>
            <div class="row">


            </div>
        </div>
        </div>
        </div>
    </section>


    <!--  <section class="ftco-section testimony-section">
      <div class="container">
        <div class="row justify-content-center mb-5">
          <div class="col-md-7 text-center heading-section ">
            <span class="subheading">Testimonial</span>
            <h2 class="mb-3">Happy Clients</h2>
          </div>
        </div>
        <div class="row ">
          <div class="col-md-12">
            <div class="carousel-testimony owl-carousel ftco-owl">
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/img/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Marketing Manager</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/img/person_2.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Interface Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/img/person_3.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">UI Designer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/img/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">Web Developer</span>
                  </div>
                </div>
              </div>
              <div class="item">
                <div class="testimony-wrap text-center py-4 pb-5">
                  <div class="user-img mb-4" style="background-image: url(assets/img/person_1.jpg)">
                  </div>
                  <div class="text pt-4">
                    <p class="mb-4">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
                    <p class="name">Roger Scott</p>
                    <span class="position">System Analyst</span>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> -->




    <footer class="ftco-footer ftco-bg-dark ftco-section">
        <div class="container"><br><br>
            <div class="row mb-5">
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4" style="margin-top: 7px;">
                        <h5 style=" font-size: 20px;  color: #e15757; margin-bottom: 57px;">Soulmates Marraige</h5>
                        <p style="margin-top: -43px;">soulmatesmarraige.com is for people who are single, who are
                            married,
                            and anyone who wants to make new friends or help their friends meet new people.</p>
                        <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

                            <li class=""><a href="#"><span class="icon-facebook"></span></a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4 ml-md-5">
                        <h2 class="ftco-heading-2">Useful Links</h2>
                        <ul class="list-unstyled">
                            <li><a href="index.html" class="py-2 d-block">Home</a></li>
                            <li><a href="search.html" class="py-2 d-block">Search</a></li>
                            <li><a href="membership.html" class="py-2 d-block">Membership</a></li>
                            <li><a href="privacy.html" class="py-2 d-block">Privacy Policy</a></li>

                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Links</h2>
                        <ul class="list-unstyled">

                            <li><a href="#" class="py-2 d-block">Payment</a></li>
                            <li><a href="<?php echo base_url('Registration'); ?>" class="py-2 d-block">Registration</a></li>
                            <li><a href="contact.html" class="py-2 d-block">Contact Us</a></li>

                            <li><a href="terms.html" class="py-2 d-block">Terms & Condition</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-md">
                    <div class="ftco-footer-widget mb-4">
                        <h2 class="ftco-heading-2">Address</h2>
                        <div class="block-23 mb-3">
                            <ul>
                                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">Registered
                                            Office: demo address</span></a></li>
                                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91
                                            0123456789</span></a></li>
                                <li><a href="#"><span class="icon icon-envelope"></span><span
                                            class="text">mail@soulmatesmarraige.com </span></a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 text-center">

                    <p>
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        Copyright &copy;
                        <script>document.write(new Date().getFullYear());</script> All rights reserved
                        <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                    </p>
                </div>
            </div>
        </div>
    </footer>


      <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

</body>

</html>