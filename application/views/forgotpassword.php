

    <div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

        <div class="container">
            <div class="row no-gutters slider-text justify-content-start align-items-center">
                <div class="col-lg-6 col-md-6  d-flex align-items-end">
                    <div class="text">
                        <h1 class="mb-4">Forget Password
                            <span></span> <span></span>
                        </h1>
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

                                    <?php $messege = $this->session->flashdata('msg');
                                    if ($messege) { ?>
                                        <div class="alert alert-success" role="alert">
                                            <p><?php echo $messege; ?>!!</p>
                                        </div>
                                    <?php } ?>
                                    <?php $error = $this->session->flashdata('error');
                                    if ($error) { ?>
                                        <div class="alert alert-danger" role="alert">
                                            <p><?php echo $error; ?>!!</p>
                                        </div>
                                    <?php } ?>

                                    <h4 class="titlelg text-center mb-4">Forget Password</h4>
                                    <!-- <p class="mb-4">Please login below to contact and message members.</p> -->
                                    <div class="col-md-12">
                                        <form id="form-login1" action="ForgetPassword/reset_password" class="form-horizontal" method="post">

                                            <div class="form-floating mb-3">
                                                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
                                                <label for="floatingInput">Email address</label>
                                            </div>

                                            <div class=" col-md-11 mb-4">
                                            </div>

                                            <div class="col-md-12 p-0 mt-4 mb-3">
                                                <div class="container-login100-form-btn mt-4">
                                                    <button type="submit" class="btn btn-primary btn-pdd w-100">Send my Password</button>
                                                </div>
                                            </div>

                                            <div class="col-md-12">
                                                <p class="forgot">


                                                    <span style="color: black !important;">Receive your password at your E-mail ID </span><br>
                                                    <span style="color: black;">Not a member yet? <a href="registration.html"><span style="color: #ca5b61; font-weight: 600;"> Register now <span></a></span>

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