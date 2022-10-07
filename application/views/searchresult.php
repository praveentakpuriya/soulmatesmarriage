<style>
    .slider-text h1 {
        font-size: 30px;
        color: #fff;
        line-height: 1.1;
        font-weight: 200;
    }

    .form-group label {
        color: #4c4a4a !important;
    }

    .slider-text {
        height: 480px;
    }


    .ftco-navbar-light {
        background: #2a2929ba !important;
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        z-index: 3;
        height: 110px;
    }

    .msgg {
        border-bottom: 1px solid #ece1e1;
        text-align: center;
    }

    label.control-label.labell {
        font-size: 15px;
    }

    .dropdown-menu li {
        background: #ca5b61;
        margin-bottom: 0px;
        padding: 8px;
        color: #ffffff;
        border-bottom: 1px solid;
    }
</style>



<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Search Results<span></span> <span></span></h1>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;     background: #f3f8fa;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="col-md-12 " id="advsrch" align="center"> </div>

                <?php
                if (isset($data['0'])) {
                    $i = 1;
                    foreach ($data as $list) { ?>
                        <div class="m-b">
                            <div class="row">
                                <div class="col-md-4 col-sm-4 col-xs-12">

                                    <a href="#">
                                        <img src="<?php echo base_url('Documents/document/' . $list->main_photo); ?>" class="img-responsive placeholder-img">
                                    </a>

                                </div>
                                <div class="col-md-8 col-sm-8 col-xs-12">
                                    <div class="row">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <p class="p-search OpenSans-Bold" style="margin-bottom:0px;">
                                                <?php echo $list->name ?> </p>
                                            <span class="p-search2"><i class="icon icon-user"></i>&nbsp;<a href="profile.php?id=SH421210" target="_blank"><?php echo $list->user_id ?></a> &nbsp; |
                                                &nbsp; Free Member</span>
                                        </div>

                                    </div>
                                    <hr class="search-r-hr">
                                    <div class="row">
                                        <div class="col-md-8 col-sm-8 col-xs-12 margin-top-10 right-hr new-p row">
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold">
                                                    Age :
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->age ?> </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold Roboto-Bold">
                                                    Religion:
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->religion_name ?> </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold Roboto-Bold">
                                                    Caste:
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->caste_name ?> </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold Roboto-Bold">
                                                    Mother Tongue:
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->mother_tongue ?> </p>
                                            </div>

                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold Roboto-Bold">
                                                    Education:
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->education ?> </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold Roboto-Bold">
                                                    Occupation:
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->occupation ?> </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr1 Roboto-Bold Roboto-Bold">
                                                    Location:
                                                </p>
                                            </div>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <p class="sr2 Roboto-Bold">
                                                    <?php echo $list->city_name ?> <?php echo $list->state_name ?> </p>
                                            </div>



                                        </div>

                                        <div class="col-md-4 col-sm-12 col-xs-12">

                                            <p>&nbsp;</p>
                                            <hr>
                                            <p class="sr4 OpenSans-Light ">
                                                <span id="shorted_or_not_LLY1329">Shortlist</span> or <span>
                                                    Like/Unlike </span> profile
                                            </p>


                                            <div class="row">

                                                <div class="main-short row">
                                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                                        <div class="tooltip" style="display:block">
                                                        <form id="GFG" method="post" action="<?php echo base_url('Searching/view_profile')  ?>">
                                                            <input type="hidden" name="id" value="<?php echo $list->user_id ?>">                                                           
                                                        
                                                            <a href="#" onclick="myFunction()" ><i class="sr-i1 sr-icon fa fa-user" aria-hidden="true"></i></i>
                                                                <span class="tooltiptext">View Profile</span>
                                                            </a></form>
                                                        </div>

                                                    </div>

                                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                                        <a class="tooltip" style="display:inline-block;" href="#" target="_blank">
                                                            <i class="fa fa-heart sr-i2 sr-icon" aria-hidden="true"></i>
                                                            <span class="tooltiptext">Express Interest</span>
                                                        </a>

                                                    </div>
                                                    <div class="col-md-4 col-xs-4 col-sm-4">
                                                        <a class="tooltip" style="display:inline-block;" href="#" target="_blank">
                                                            <i class="fa fa-envelope-o sr-i2 sr-icon" aria-hidden="true"></i>
                                                            <span class="tooltiptext">Send Message</span>
                                                        </a>

                                                    </div>
                                                </div>

                                            </div>


                                            <hr>

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php }
                } else { ?>
                    <p style="text-align:center">Profile not found</p>
                <?php } ?>

            </div>
            <nav aria-label="..." class="d-flex justify-content-end">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                    <li class="page-item " aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
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
<script>
            function myFunction() {
                // alert("hh")
                document.getElementById("GFG").submit();
            }
        </script>
</body>

</html>