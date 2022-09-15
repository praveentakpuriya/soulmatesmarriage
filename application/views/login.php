<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Login<span></span> <span></span></h1>
                </div>
            </div>

        </div>
    </div>
</div>



<section class="ftco-section ftco-no-pt ftco-no-pb pt-5 " style="background: #f9f9f9;">
    <div class="container">
        <div class="row no-gutters ">
            <div class="col-md-12 mb-5">
                <div class="row justify-content-center align-items-center">

                    <div class="col-md-6 offset-md-1">
                        <div class="login_sec ">
                            <div class="row">

                                <h4 class="titlelg text-center mb-4">Welcome back! <br /> Please Login </h4>
                                <?php $error = $this->session->flashdata('error');
                                if (isset($error)) { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <p><?php echo $error ?>!!</p>
                                    </div>
                                <?php } ?>
                                <?php $msg = $this->session->flashdata('msg');
                                if (isset($msg)) { ?>
                                    <div class="alert alert-success" role="alert">
                                        <p><?php echo $msg; ?>!!</p>
                                    </div>
                                <?php } ?>
                                <!-- <p class="mb-4">Please login below to contact and message members.</p> -->
                                <div class="col-md-12">
                                    <form id="form-login1" action="<?php echo base_url('Login/checkLogin')  ?>" class="form-horizontal" method="post">

                                        <div class="form-floating mb-3">
                                            <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                            <label for="floatingInput">Email address</label>
                                        </div>
                                        <div class="form-floating">
                                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password">
                                            <label for="floatingPassword">Password</label>
                                        </div>
                                        <div class=" col-md-11 mb-4">
                                        </div>

                                        <div class="col-md-12 p-0 mt-4 mb-3">
                                            <div class="container-login100-form-btn mt-4">
                                                <button type="submit" class="btn btn-primary btn-pdd w-100">Login</button>
                                            </div>
                                        </div>

                                        <div class="col-md-12">
                                            <p class="forgot">
                                                <a class="txt2" href="#"><span>Forgot Password ?</span></a>
                                                Not a member yet, <a href="<?php echo base_url("Registration") ?>"><span style="color: #ca5b61; font-weight: 600;">register
                                                        here!</span></a>
                                            </p>
                                        </div>


                                    </form>
                                </div>
                            </div>
                        </div>




                    </div>

                    <!--  <div class="col-md-5">
                            <div class="">
                      
                                <img src="assets/img/register.png" class="img-fluid">


                            </div>
                        </div> -->

                </div>
            </div>
        </div>
    </div>
</section>


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
                        <li><a href="registration.html" class="py-2 d-block">Registration</a></li>
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
                            <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mail@soulmatesmarraige.com </span></a></li>

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
                    <script>
                        document.write(new Date().getFullYear());
                    </script> All rights reserved
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