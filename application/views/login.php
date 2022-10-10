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
                                            <input type="text" class="form-control" name="email" id="floatingInput" placeholder="name@example.com">
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

