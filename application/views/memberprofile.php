
<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">My Home<span></span> <span></span></h1>
                </div>
            </div>

        </div>
    </div>
</div>


<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;">
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-12">
                <div class="mem_profile">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="mem_box">
                                <div class="row">

                                    <div class="col-md-3 col-sm-12 col-xs-12">

                                        <div class="mem_img grid">

                                            <figure class="effect-lexi">

                                                <a href="<?php echo base_url("UpdateProfile") ?>"><img src="<?php if (isset($documents[0]->main_photo)) echo base_url('Documents/document/' . $documents[0]->main_photo); ?>" style="width: 100%;height: 300px;" alt="">
                                                </a>
                                                <figcaption>
                                                    <a href="<?php echo base_url("UpdateProfile") ?>">
                                                        <p><i class="fa fa-pencil-square-o" style="font-size: 22px;"></i>
                                                            <br> Edit Profile
                                                        </p>
                                                    </a>
                                                </figcaption></a>
                                            </figure>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-sm-12 col-xs-12">
                                        <div class="head" style="">
                                            <h4><?php echo $data[0]->name ?></h4>
                                            <p class="para"><span><?php echo $data[0]->user_id ?> &nbsp; | &nbsp; Last Login :
                                                    xx-xx-xx</span></p>
                                        </div>
                                        <div class="det_box">
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <h6>Account Type :</h6>
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <p><span style="padding: 0px 15px;background: #a83232;color: white;border-radius: 20px;">
                                                            <?php if (isset($membership[0]->plan_type)) echo $membership[0]->plan_type;
                                                            else echo 'free'; ?> </span> </p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <h6>Age :</h6>
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <p><?php echo $data[0]->age ?></p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <h6>Religion / Caste :</h6>
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <p> <?php if (isset($religion[0]->name)) echo $religion[0]->name; ?> / <?php if (isset($caste[0]->name)) echo $caste[0]->name; ?></p>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-4 col-sm-12 col-xs-12">
                                                    <h6> Member Since :</h6>
                                                </div>
                                                <div class="col-md-8 col-sm-12 col-xs-12">
                                                    <p> <?php echo $data[0]->date ?></p>
                                                </div>

                                            </div>


                                        </div>
                                    </div>
                                    <div class="col-md-3 col-sm-12 col-xs-12">
                                        <div class="verify">
                                            <ul class="verify_list">
                                                <li style="background: url(images/verifyy.png); background-size: contain;width: 65px;height: 60px; background-repeat: no-repeat;position: relative;top: -10px;">
                                                    <img src="assets/img/right3.png" style="width: 40px;height: 40px;"><span>Mobile</span>
                                                </li>
                                                <li style="background: url(images/verifyy.png); background-size: contain;width: 65px;height: 60px; background-repeat: no-repeat;position: relative;top: -10px;">
                                                    <img src="assets/img/right3.png" style="width: 40px;height: 40px;"><span>Email</span>
                                                </li>


                                                <li style="background: url(images/verifyy.png); background-size: contain;width: 65px;height: 60px; background-repeat: no-repeat;position: relative;top: -10px;">
                                                    <img src="assets/img/right3.png" style="width: 40px;height: 40px;">
                                                    <span>Profile</span>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="circle-wrap">
                                            <div class="circle">
                                                <div class="mask full">
                                                    <div class="fill"></div>
                                                </div>
                                                <div class="mask half">
                                                    <div class="fill"></div>
                                                </div>
                                                <div class="inside-circle"> 75% </div>
                                            </div>
                                        </div>

                                        <div style="width:100%;"></div>

                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>


                    <div class="col-md-12 p-0">
                        <div class="codepen-container">
                            <div id="icetab-container">
                                <div class="icetab   current-tab">Interest Received</div>
                                <div class="icetab ">Message Received</div>
                                <div class="icetab ">Interest Sent</div>
                                <div class="icetab ">Message Sent</div>
                                <div class="icetab ">Photo Request</div>
                                <div class="icetab ">Viewed Contact</div>
                            </div>

                            <div id="icetab-content">
                                <div class="tabcontent tab-active">
                                    <ul class="int_list">
                                        <a href="#" onclick="showInterest('<?= $data[0]->user_id ?>')">
                                            <li><?php if (isset($interest[0]->no_of_interest)) echo $interest[0]->no_of_interest;
                                                else echo '0'; ?> <br> Pending</li>
                                        </a>
                                        <a href="#?mode=viewed">
                                            <li>0 <br> Viewed</li>
                                        </a>
                                        <a href="#?mode=accepted">
                                            <li>0 <br> Accepted</li>
                                        </a>
                                        <a href="#?mode=declined">
                                            <li>0 <br> Declined</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="tabcontent ">
                                    <ul class="int_list">
                                        <a href="recmessage.php?mode=pending">
                                            <li><?php if (isset($message[0]->no_of_message)) echo $message[0]->no_of_message;
                                                else echo '0'; ?> <br> Pending</li>
                                        </a>
                                        <a href="recmessage.php?mode=viewed">
                                            <li>0 <br> Viewed</li>
                                        </a>
                                        <a href="recmessage.php?mode=replied">
                                            <li>0 <br> Accepted</li>
                                        </a>
                                        <a href="recmessage.php?mode=declined">
                                            <li>0 <br> Declined</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="tabcontent ">
                                    <ul class="int_list">
                                        <a href="#" onclick="showInterest_to('<?= $data[0]->user_id ?>')">
                                            <li><?php if (isset($interest_to[0]->no_of_interest)) echo $interest_to[0]->no_of_interest;
                                                else echo '0'; ?><br> Pending</li>
                                        </a>
                                        <a href="viewinterest.php?mode=viewed">
                                            <li> 0 <br> Viewed</li>
                                        </a>
                                        <a href="viewinterest.php?mode=accepted">
                                            <li>0 <br> Accepted</li>
                                        </a>
                                        <a href="viewinterest.php?mode=declined">
                                            <li>0 <br> Declined</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="tabcontent ">
                                    <ul class="int_list">
                                        <a href="viewmessage.php?mode=pending">
                                            <li><?php if (isset($message_to[0]->no_of_message)) echo $message_to[0]->no_of_message;
                                                else echo '0'; ?> <br> Pending</li>
                                        </a>
                                        <a href="viewmessage.php?mode=viewed">
                                            <li>0 <br> Viewed</li>
                                        </a>
                                        <a href="viewmessage.php?mode=replied">
                                            <li>0 <br> Accepted</li>
                                        </a>
                                        <a href="viewmessage.php?mode=declined">
                                            <li>0 <br> Declined</li>
                                        </a>
                                    </ul>
                                </div>
                                <div class="tabcontent ">
                                    <ul class="int_list">
                                        <a href="requestsent.php?mode=photo">
                                            <li>0 <br> Sent Request</li>
                                        </a>
                                        <a href="requestreceived.php?mode=photo">
                                            <li>0 <br> Received Request</li>
                                        </a>

                                    </ul>
                                </div>
                                <div class="tabcontent ">
                                    <ul class="int_list">
                                        <a href="viewcontacts.php?byme">
                                            <li>Contact Viewed By Me</li>
                                        </a>
                                        <a href="#">
                                            <li>Who Viewed My Contact</li>
                                        </a>

                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="interest_got"></div>
                </div>
            </div>
        </div>
    </div>
</section>

<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/tabs.js"></script>
<script>
    function showInterest(id) {
        // alert(id)
        $.ajax({
            type: 'POST',
            url: "UserProfile/get_interest_list",
            data: {
                id: id,
            },
            success: function(data1) {
                // alert("hey")
                $("#interest_got").empty();
                $("#interest_got").html(data1);
            }
        });
    }
    function showInterest_to(id){
        $.ajax({
            type: 'POST',
            url: "UserProfile/get_interest_list_to",
            data: {
                id: id,
            },
            success: function(data1) {
                // alert("hey")
                $("#interest_got").empty();
                $("#interest_got").html(data1);
            }
        });
    }
</script>