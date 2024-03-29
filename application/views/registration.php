<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Register Now<span></span> <span></span></h1>
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

                    <div class="col-md- offset-md-1">
                        <div class="login_sec ">
                            <div class="row">
                                <div class="text-center mb-3">
                                    <h3 class="titlelg">Register Now</h3>
                                    <h5 class="mb-2 titlelg">JOIN FOR FREE AND FIND YOUR LIFE PARTNER </h5>
                                    <p class="mb-4">You are just two steps away from contacting and messaging 1000's of profiles for FREE!!</p>
                                </div>
                                <?php $error = $this->session->flashdata('error');
                                if (isset($error)) { ?>
                                    <div class="alert alert-warning" role="alert">
                                        <p><?php echo $error; ?></p>
                                    </div>
                                <?php } ?>
                                <div class="col-md-12">
                                    <form id="basic-form" action="<?php echo base_url('Registration/submitUserData'); ?>" class="form-horizontal" method="post">

                                        <div class="row">

                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="email" class="form-control" name="email" id="floatingInput" placeholder="name@example.com" required="">
                                                    <label for="floatingInput">Email address</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <div class="row">
                                                    <div class="col-lg-6">
                                                        <div class="form-floating">
                                                            <input type="password" name="password" class="form-control" id="floatingPassword" placeholder="Password" required="">
                                                            <label for="floatingPassword">Password</label>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6">
                                                        <div class="form-floating">
                                                            <input type="password" name="re_password" class="form-control" id="floatingcPassword" placeholder="Password" required="">
                                                            <label for="floatingcPassword">Confirm Password</label>
                                                        </div>

                                                    </div>
                                                </div>

                                            </div>

                                            <div class="col-lg-6">
                                                <div class="form-floating mb-3">
                                                    <input type="text" class="form-control" name="name" id="error1" placeholder="" required="">
                                                    <label for="error1">Name of Bride / Groom*</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 d-flex">
                                                <label class="w-30">Gender : </label>
                                                <div class="form-check w-30">
                                                    <input class="form-check-input" value="male" checked="" type="radio" name="gender" id="flexRadioDefault1">
                                                    <label class="form-check-label" for="flexRadioDefault1">
                                                        Male
                                                    </label>
                                                </div>
                                                <div class="form-check w-30">
                                                    <input class="form-check-input" value="female" type="radio" name="gender" id="flexRadioDefault2">
                                                    <label class="form-check-label" for="flexRadioDefault2">
                                                        female
                                                    </label>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6 d-flex">
                                                    <label for="dob">Date of Birth:</label>
                                                    <input type="date" id="dob" class="form-control" name="dob" required>
                                                </div>

                                                <div class="col-lg-6 d-flex">
                                                    <label id="heigt" class="p-0">Select Height</label>
                                                    <select required="required" class="form-select form-select-lg mb-3" name="height" aria-label=".form-select-lg example">
                                                        <option value="0">Please Select</option>
                                                        <option value='3ft.5in-105cm'>3ft.5in-105cm</option>
                                                        <option value='3ft.6in-107cm'>3ft.6in-107cm</option>
                                                        <option value='3ft.7in-110cm'>3ft.7in-110cm</option>
                                                        <option value='3ft.8in-112cm'>3ft.8in-112cm</option>
                                                        <option value='3ft.9in-115cm'>3ft.9in-115cm</option>
                                                        <option value='3ft.10in-117cm'>3ft.10in-117cm</option>
                                                        <option value='3ft.11in-120cm'>3ft.11in-120cm</option>
                                                        <option value='4ft-122cm'>4ft-122cm</option>
                                                        <option value='4ft.1in-125cm'>4ft.1in-125cm</option>
                                                        <option value='4ft.2in-127cm'>4ft.2in-127cm</option>
                                                        <option value='4ft.3in-130cm'>4ft.3in-130cm</option>
                                                        <option value='4ft.4in-132cm'>4ft.4in-132cm</option>
                                                        <option value='4ft.5in-135cm'>4ft.5in-135cm</option>
                                                        <option value='4ft.6in-137cm'>4ft.6in-137cm</option>
                                                        <option value='4ft.7in-140cm'>4ft.7in-140cm</option>
                                                        <option value='4ft.8in-142cm'>4ft.8in-142cm</option>
                                                        <option value='4ft.9in-145cm'>4ft.9in-145cm</option>
                                                        <option value='4ft.10in-147cm'>4ft.10in-147cm</option>
                                                        <option value='4ft.11in-150cm'>4ft.11in-150cm</option>
                                                        <option value='5ft-152cm'>5ft-152cm</option>
                                                        <option value='5ft.1in-155cm'>5ft.1in-155cm</option>
                                                        <option value='5ft.2in-157cm'>5ft.2in-157cm</option>
                                                        <option value='5ft.3in-160cm'>5ft.3in-160cm</option>
                                                        <option value='5ft.4in-162cm'>5ft.4in-162cm</option>
                                                        <option value='5ft.5in-165cm'>5ft.5in-165cm</option>
                                                        <option value='5ft.6in-167cm'>5ft.6in-167cm</option>
                                                        <option value='5ft.7in-170cm'>5ft.7in-170cm</option>
                                                        <option value='5ft.8in-172cm'>5ft.8in-172cm</option>
                                                        <option value='5ft.9in-175cm'>5ft.9in-175cm</option>
                                                        <option value='5ft.10in-177cm'>5ft.10in-177cm</option>
                                                        <option value='5ft.11in-180cm'>5ft.11in-180cm</option>
                                                        <option value='6ft-182cm'>6ft-182cm</option>
                                                        <option value='6ft.1in-185cm'>6ft.1in-185cm</option>
                                                        <option value='6ft.2in-187cm'>6ft.2in-187cm</option>
                                                        <option value='6ft.3in-190cm'>6ft.3in-190cm</option>
                                                        <option value='6ft.4in-192cm'>6ft.4in-192cm</option>
                                                        <option value='6ft.5in-195cm'>6ft.5in-195cm</option>
                                                        <option value='6ft.6in-197cm'>6ft.6in-197cm</option>
                                                        <option value='6ft.7in-200cm'>6ft.7in-200cm</option>
                                                        <option value='6ft.8in-202cm'>6ft.8in-202cm</option>
                                                        <option value='6ft.9in-205cm'>6ft.9in-205cm</option>
                                                        <option value='6ft.10in-207cm'>6ft.10in-207cm</option>
                                                        <option value='6ft.11in-210cm'>6ft.11in-210cm</option>
                                                    </select>


                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <label id="heigt" class="p-0">Select Motehr Tongue</label>
                                                    <select required="required" class="form-select form-select-lg mb-3" name="mother_tongue" aria-label=".form-select-lg example">
                                                        <option value='0' selected='selected'>Select Mother Tongue </option>
                                                        <option value='Arabic'>Arabic</option>
                                                        <option value='Assamese'>Assamese</option>
                                                        <option value='Awadhi'>Awadhi</option>
                                                        <option value='Bengali'>Bengali</option>
                                                        <option value='Bhojpuri'>Bhojpuri</option>
                                                        <option value='Bhutia'>Bhutia</option>
                                                        <option value='Bihari'>Bihari</option>
                                                        <option value='Chattisgarhi'>Chattisgarhi</option>
                                                        <option value='Chinese'>Chinese</option>
                                                        <option value='Dogri'>Dogri</option>
                                                        <option value='English'>English</option>
                                                        <option value='French'>French</option>
                                                        <option value='Garhwali'>Garhwali</option>
                                                        <option value='Garo'>Garo</option>
                                                        <option value='Gujarati'>Gujarati</option>
                                                        <option value='Haryanvi'>Haryanvi</option>
                                                        <option value='Hindi'>Hindi</option>
                                                        <option value='Kakbarak'>Kakbarak</option>
                                                        <option value='Kanauji'>Kanauji</option>
                                                        <option value='Kannada'>Kannada</option>
                                                        <option value='Kashmiri'>Kashmiri</option>
                                                        <option value='Khandesi'>Khandesi</option>
                                                        <option value='Khasi'>Khasi</option>
                                                        <option value='Konkani'>Konkani</option>
                                                        <option value='Koshali'>Koshali</option>
                                                        <option value='Kumoani'>Kumoani</option>
                                                        <option value='Kutchi'>Kutchi</option>
                                                        <option value='Lepcha'>Lepcha</option>
                                                        <option value='Magahi'>Magahi</option>
                                                        <option value='Maithili'>Maithili</option>
                                                        <option value='Malay'>Malay</option>
                                                        <option value='Malayalam'>Malayalam</option>
                                                        <option value='Manipuri'>Manipuri</option>
                                                        <option value='Marathi'>Marathi</option>
                                                        <option value='Marwari'>Marwari</option>
                                                        <option value='Miji'>Miji</option>
                                                        <option value='Mizo'>Mizo</option>
                                                        <option value='Monpa'>Monpa</option>
                                                        <option value='Nepali'>Nepali</option>
                                                        <option value='Oriya'>Oriya</option>
                                                        <option value='Other'>Other</option>
                                                        <option value='Persian'>Persian</option>
                                                        <option value='Punjabi'>Punjabi</option>
                                                        <option value='Rajasthani'>Rajasthani</option>
                                                        <option value='Russian'>Russian</option>
                                                        <option value='Sanskrit'>Sanskrit</option>
                                                        <option value='Santhali'>Santhali</option>
                                                        <option value='Sindhi'>Sindhi</option>
                                                        <option value='Spanish'>Spanish</option>
                                                        <option value='Swedish'>Swedish</option>
                                                        <option value='Tagalog'>Tagalog</option>
                                                        <option value='Tamil'>Tamil</option>
                                                        <option value='Telugu'>Telugu</option>
                                                        <option value='Tulu'>Tulu</option>
                                                        <option value='Urdu'>Urdu</option>
                                                    </select> <span class="err_msg" id="errddlmothertongue"></span>
                                                    </select>




                                                </div>
                                                <div class="col-lg-4">
                                                    <label id="heigt" class="p-0">Select Religion</label>
                                                    <select required="required" id="religion-dropdown" name="religion_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        <option value='0' selected='selected'>Select Religion</option>
                                                        <?php foreach ($religion as $list) { ?>
                                                            <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                                        <?php } ?>

                                                    </select>

                                                </div>

                                                <div class="col-lg-4 ">
                                                    <label id="heigt" class="p-0">Select Caste</label>
                                                    <select class=" form-select form-select-lg mb-3" name="caste_id" aria-label=".form-select-lg example" id="caste-dropdown" required="required">
                                                        <option value="">Select Caste</option>
                                                    </select>


                                                </div>
                                            </div>

                                            <div class="col-lg-12 text-start">
                                                <div class="form-check ml-1 mb-2">
                                                    <input class="form-check-input" name="cast_barrier" type="checkbox" value="1" id="flexCheckDefault">
                                                    <label class="form-check-label" for="flexCheckDefault">
                                                        Caste No Bar
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 mb-3">
                                                <div class="form-floating">
                                                    <input type="text" name="sub_cast" class="form-control" id="subcuste" placeholder="">
                                                    <label for="subcuste">Sub Caste</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-10 d-flex">
                                                <label class="w-30 pl-0">Marital Status : </label>
                                                <div class="form-check w-25">
                                                    <input class="form-check-input" value="never married" type="radio" name="marital_status" id="Married">
                                                    <label class="form-check-label" for="Married">
                                                        Never Married
                                                    </label>
                                                </div>
                                                <div class="form-check w-25">
                                                    <input class="form-check-input" value="divorced" type="radio" name="marital_status" id="Divorced">
                                                    <label class="form-check-label" for="Divorced">
                                                        Divorced
                                                    </label>
                                                </div>
                                                <div class="form-check w-25">
                                                    <input class="form-check-input" value="widowed" type="radio" name="marital_status" id="Widowed">
                                                    <label class="form-check-label" for="Widowed">
                                                        Widowed
                                                    </label>
                                                </div>
                                                <div class="form-check w-25">
                                                    <input class="form-check-input" value="separated" type="radio" name="marital_status" id="Separated">
                                                    <label class="form-check-label" for="Separated">
                                                        Separated
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6">
                                                <label id="heigt" class="p-0">No. of Children</label>
                                                <select required="required" name="no_of_children" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                    <option value="None" selected="selected">No Children</option>
                                                    <option value="1">1</option>
                                                    <option value="2">2</option>
                                                    <option value="3">3</option>
                                                    <option value="4">4</option>
                                                    <option value="5">5</option>
                                                    <option value="More Than 5">More Than 5</option>
                                                </select>
                                                <div class="d-flex mt-0">

                                                    <div class="form-check w-50">
                                                        <input class="form-check-input" type="radio" value="Living with me" name="relationship" id="Living">
                                                        <label class="form-check-label" for="Living">
                                                            Living with me
                                                        </label>
                                                    </div>
                                                    <div class="form-check w-50">
                                                        <input class="form-check-input" type="radio" value="Not living with me" name="relationship" id="notliving">
                                                        <label class="form-check-label" for="notliving">
                                                            Not living with me
                                                        </label>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">

                                                <div class="col-lg-4">
                                                    <label id="heigt" class="p-0">Select Country</label>
                                                    <select required="required" id="country-dropdown" name="country_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                        <option value='0' selected='selected'>Select Country</option>
                                                        <?php foreach ($data as $list) { ?>
                                                            <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                                        <?php } ?>

                                                    </select>

                                                </div>

                                                <div class="col-lg-4 ">
                                                    <label id="heigt" class="p-0">Select State</label>
                                                    <select class=" form-select form-select-lg mb-3" name="state_id" aria-label=".form-select-lg example" id="state-dropdown" required="required">
                                                        <option value="">Select State</option>
                                                    </select>


                                                </div>
                                                <div class="col-lg-4">
                                                    <label id="heigt" class="p-0">Select City</label>
                                                    <select class=" form-select form-select-lg mb-3" name="city_id" aria-label=".form-select-lg example" id="city-dropdown" required="required">
                                                        <option value="">Select City</option>
                                                    </select>
                                                </div>

                                            </div>

                                            <div class="row">
                                            <div class="col-lg-6">
                                                <div class="form-floating">
                                                    <input type="text" name="address" class="form-control" id="address" placeholder="" required="">
                                                    <label for="address">Contact Address</label>
                                                </div>
                                            </div>

                                            <div class="col-lg-6 ">
                                                <div class="form-floating">
                                                    <input type="number" name="number" class="form-control" id="phone" placeholder="Number" required="">
                                                    <label for="phone">Phone No.</label>
                                                </div>

                                                </div>
                                            </div>


                                            <div class="col-lg-6 d-flex mt-2">
                                                <label id="heigt" class="p-0">Citizenship</label>
                                                <select required="required" name="citizenship" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                                    <option value='0' selected='selected'>Select Country</option>
                                                    <?php foreach ($data as $list) { ?>
                                                        <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                                    <?php } ?>

                                                </select>

                                            </div>
                                            <div class="col-lg-6 d-flex"></div>
                                            <div class="col-lg-6 d-flex">
                                                <label class="w-25">NRI : </label>
                                                <div class="form-check w-30">
                                                    <input class="form-check-input" checked="" value="Yes" type="radio" name="nri" id="nriyes">
                                                    <label class="form-check-label" for="nriyes">
                                                        Yes
                                                    </label>
                                                </div>
                                                <div class="form-check w-30">
                                                    <input class="form-check-input" type="radio" value="Not" name="nri" id="nrino">
                                                    <label class="form-check-label" for="nrino">
                                                        Not
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="col-lg-12 text-start">
                                                <div class="form-check ml-1 mb-2">
                                                    <input class="form-check-input" required="" name="" type="checkbox" value="" id="privacy">
                                                    <label class="form-check-label" for="privacy">
                                                        Please tick this box to indicate that you have read and agree to the Terms & Conditions of Service
                                                    </label>
                                                </div>
                                            </div>


                                            <div class="col-md-12 p-0 mt-4 mb-3">
                                                <div class="container-login100-form-btn mt-4">
                                                    <button type="submit" class="btn btn-primary btn-pdd ">Register Now</button>
                                                </div>
                                            </div>

                                            <!--  <div class="col-md-12">
                                                <p class="forgot">
                                                    <a class="txt2" href="#"><span>Forgot Password ?</span></a>
                                                    Not a member yet, <a href="#"><span
                                                            style="color: #ca5b61; font-weight: 600;">register
                                                            here!</span></a>
                                                </p>
                                            </div> -->


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

<section class="footer-section">
    <div class="container">

        <div class="row">

            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Quick Links</h2>
                    <ul>
                        <li><a href="<?php echo base_url() ?>" class="">Home</a></li>
                        <li><a href="About" class="">About Us</a></li>
                        <li><a href="Searching" class="">Search</a></li>
                        <li><a href="Membership" class="">Membership</a></li>

                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget about-widget">
                    <h2>Questions</h2>
                    <ul>
                        <li><a href="#" class="">Payment</a></li>
                        <li><a href="Registration" class="">Registration</a></li>
                        <li><a href="Contact" class="">Contact Us</a></li>
                        <li><a href="Privacy" class="">Privacy Policy</a></li>
                        <li><a href="Term" class="">Terms & Condition</a></li>
                    </ul>

                </div>
            </div>
            <div class="col-lg-4 col-sm-6">
                <div class="footer-widget contact-widget">
                    <h2>Contact Us</h2>

                    <div class="con-info">
                        <span><i class="fa fa-phone"></i></span>
                        <a href="tel:+91 98272 12943">
                            <p>+91 98272 12943 </p>
                        </a>
                    </div>
                    <div class="con-info">
                        <span><i class="fa fa-envelope"></i></span>
                        <!-- <a href=":Info@soulmatesmarriage.com"> -->
                        <p>Info@soulmatesmarriage.com</p>
                        </a>
                    </div>
                    <div class="con-info">
                        <span><i class="fas fa-map-marker-alt"></i></span>
                        <p style="line-height: 21px;"> kalani nager near bank of baroda bank 452005 indore madhya pradesh
                        </p>
                    </div>
                    <div class="con-info">

                        <p style="color: #cfc360;font-weight: 600!important;"></p>
                        <p></p>
                    </div>

                </div>
            </div>


        </div>
    </div>
    <div class="social-links-warp">
        <div class="container">


            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            <p class="text-white text-center">Copyright ©2022 All rights reserved </p>

        </div>
    </div>
</section>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>

<script type="text/javascript">
    //  $(document).ready(function() {
    //   $("#basic-form").validate();
    // });
    $(document).ready(function() {
        $('#country-dropdown').on('change', function() {
            var country_id = this.value;
            // alert(country_id);
            $.ajax({
                url: "<?php echo base_url()  ?>Registration/fetch_state",
                type: "POST",
                data: {
                    country_id: country_id
                },
                cache: false,
                success: function(result) {
                    $("#state-dropdown").html(result);
                    // $('#city-dropdown').html('<option value="">Select State First</option>'); 
                }
            });
        });
    });
    $('#state-dropdown').on('change', function() {
        var state_id = this.value;
        $.ajax({
            url: "<?php echo base_url()  ?>Registration/fetch_city",
            type: "POST",
            data: {
                state_id: state_id
            },
            cache: false,
            success: function(result) {
                $("#city-dropdown").html(result);
            }
        });
    });

    $('#religion-dropdown').on('change', function() {
        var religion_id = this.value;
        // alert(religion_id);
        $.ajax({
            url: "<?php echo base_url()  ?>Registration/fetch_caste",
            type: "POST",
            data: {
                religion_id: religion_id
            },
            cache: false,
            success: function(result) {
                $("#caste-dropdown").html(result);
            }
        });
    });
</script>


<script src="<?php echo base_url('assets/js/jquery.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/jquery-migrate-3.0.1.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
<script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
</body>

</html>