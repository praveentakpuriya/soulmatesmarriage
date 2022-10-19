<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Update Password
                        <span></span> <span></span>
                    </h1>
                </div>
            </div>

        </div>
    </div>
</div>
<div class="section-alt logbody">


    <div class="container">

        <form class="login100-form validate-form" action="<?php echo base_url('ForgetPassword/update_password'); ?>" method="post">

            <?php
            echo validation_errors('<p class="error">');
            ?>

            <div class="row">

                <div class=" mx-auto">
                    <div class="card card-signin my-2 mb-5 card-border shadow">
                        <div class="card-body">
                            <h2 class="card-title text-center p-4">Update your Password</h2>
                            <div class="text-center m-2">change your password below</div>


                            <?php if (isset($email_hash, $email_code)) { ?>
                                <input type="hidden" value="<?php echo $email_hash ?>" name="email_hash" />
                                <input type="hidden" value="<?php echo $email_code ?>" name="email_code" />
                            <?php } ?>


                            <form class="form-signin">
                                <label for="inputEmaillogin" class="sr-only">Email address</label>
                                <input type="email" name="email" id="inputEmaillogin" class="form-control my-2" readonly="" value="<?php echo (isset($email)) ? $email : ''; ?>" placeholder="Email address" required="" autofocus="">

                                <label for="inputPassword">New Password</label>
                                <input type="password" name="password" id="inputPassword" class="form-control" placeholder="Password" required="">
                                <label for="password_conf">Confirm Password</label>
                                <input type="password" name="password_conf" id="password_conf" class="form-control" placeholder="Password" required="">

                                <button class="btn btn-lg btn-primary mt-3 btn-block" type="submit">Update my password</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>





    </div>







    <!-- 

    <h2> Update your password </h2>
    <div id="update_password_forum">
        <form action="<?php echo base_url('Auth/update_password'); ?>" method="POST">

            <div>
                <label for="email"> Email:</label>
                <?php if (isset($email_hash, $email_code)) { ?>
                    <input type="hidden" value="<?php echo $email_hash ?>" name="email_hash" />
                    <input type="hidden" value="<?php echo $email_code ?>" name="email_code" />
                <?php } ?>
                <input type="email" value="<?php echo (isset($email)) ? $email : ''; ?>" name="email" />
            </div>

            <div>
                <label for="password">New Password: </label>
                <input type="password" value="" name="password" />
            </div>

            <div>
                <label for="password_conf">New Password Again: </label>
                <input type="password" value="" name="password_conf" />
            </div>

            <div>
                <input type="submit" name="submit" value="Update My Password" />
            </div>
            <?php
            echo validation_errors('<p class="error">');
            ?>
    </div> -->