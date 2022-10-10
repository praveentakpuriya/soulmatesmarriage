<div class="hero-wrap" style="background-image: url(<?php echo base_url('assets/img/bg_3.jpg') ?>);height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
        <div class="row no-gutters slider-text justify-content-start align-items-center">
            <div class="col-lg-6 col-md-6  d-flex align-items-end">
                <div class="text">
                    <h1 class="mb-4">Send Message<span></span> <span></span></h1>
                </div>
            </div>

        </div>
    </div>

</div>
<?php if ($interest_left > 0 && $duration_left > 0) { ?>
    <section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;background: #fcf6f6;">
        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-12">
                    <div class="mem_profile">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="mem_box">
                                    <div class="row justify-content-center">
                                        <div class="col-md-12 col-sm-12 col-xs-12">
                                            <?php $msg = $this->session->flashdata('msg');
                                            if (isset($msg)) { ?>
                                                <div class="alert alert-success" role="alert">
                                                    <p><?php echo $msg; ?>!!</p>
                                                </div>
                                            <?php } else { ?>
                                                <div class="header-title-massge">
                                                    Express Interest To
                                                    <?= $name; ?>

                                                    <br>
                                                    My Profile Id Is : <b><?= $id; ?>
                                                    <?php } ?>
                                                </div>
                                                <div align="center">
                                                    <table width="100%" style="max-width: 831px;" align="center" border="0" cellspacing="0" cellpadding="0">
                                                        <tbody>
                                                            <tr>
                                                                <td height="300">
                                                                    <table width="100%">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td width="100%">
                                                                                    <h5 id="cRs_282"></h5>
                                                                                </td>
                                                                            </tr>
                                                                            <tr>
                                                                                <td>
                                                                                    <form action="Send_Impression/send_impression" method="post">
                                                                                        <table width="100%">
                                                                                            <tbody>
                                                                                                <tr>
                                                                                                    <td colspan="2" align="center">
                                                                                                        <p>
                                                                                                        </p>
                                                                                                        <h3></h3>
                                                                                                        <p></p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td width="74%" colspan="2"> <strong>"You can send free Interest message to members. You will be intemated through SMS and E-mail if they accept or decline your interest."</strong></td>
                                                                                                </tr>
                                                                                                <tr>
                                                                                                    <td><br>
                                                                                                        I am interested in <b><?= $id; ?></b>
                                                                                                        <!-- <input type="hidden" name="pid" id="pid" value="SH421782"> -->
                                                                                                        <br>
                                                                                                        <br>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="pull-left">
                                                                                                    <td>
                                                                                                        <p>
                                                                                                            <input type="radio" name="ioption" id="ioption" value="I am searching for person like you. Please send me your contact details.">
                                                                                                            i am searching for person like you. Please send me your contact details.
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="pull-left">
                                                                                                    <td>
                                                                                                        <p>
                                                                                                            <input type="radio" name="ioption" id="ioption" checked="checked" value="I am interested in your profile. If you are interested in my profile, then please contact me.">
                                                                                                            I am interested in your profile. If you are interested in my profile, then please contact me.
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="pull-left">
                                                                                                    <td>
                                                                                                        <p>
                                                                                                            <input type="radio" name="ioption" id="ioption" value="I have viewed your profile details and found your profile to be a good match. Please contact me to proceed further.">
                                                                                                            I have viewed your profile details and found your profile to be a good match. Please contact me to proceed further.
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="pull-left">
                                                                                                    <td>
                                                                                                        <p>
                                                                                                            <input type="radio" name="ioption" id="ioption" value="You are very special for me. I want to know more about you. Please contact me at the earliest.">
                                                                                                            You are very special for me. I want to know more about you. Please contact me at the earliest.
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="pull-left">
                                                                                                    <td>
                                                                                                        <p>
                                                                                                            <input type="radio" name="ioption" id="ioption" value="We found your profile to be a good match. Please contact us to proceed further.">
                                                                                                            We found your profile to be a good match. Please contact us to proceed further.
                                                                                                        </p>
                                                                                                    </td>
                                                                                                </tr>
                                                                                                <tr class="pull-left">
                                                                                                    <input type="hidden" name="message_from" value="<?php $user_id = $this->session->userdata('user_id');
                                                                                                                                                    echo $user_id; ?>">
                                                                                                    <input type="hidden" name="message_to" value="<?= $id  ?>">
                                                                                                    <input type="hidden" name="interest_left" value="<?= $interest_left; ?>">

                                                                                                </tr>
                                                                                                <tr valign="top">
                                                                                                    <td style="text-align:center">
                                                                                                        <div class="modal-footer">
                                                                                                            <center> <input type="submit" id="" name="btnsubmit" value="Send My Interest" class="btn btn-primary"> </center>
                                                                                                        </div>
                                                                                                    </td>
                                                                                                </tr>
                                                                                            </tbody>
                                                                                        </table>
                                                                                    </form>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
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
    </section>
<?php } else { ?>

    <section id="about_us" class="about-us padding">
        <div class="container">
            <div class="row" style="background: white;padding: 15px;box-shadow: 0px 0px 5px #d75353;border-left: 2px solid #d75353;
    border-right: 2px solid #d75353;">

                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <h4 class="text-uppercase"><span class="color_red">Send Interest to <?php $name = $this->session->userdata('user_name');
                                                                                            echo $name; ?></span></h4>
                    </div>
                    <br />
                    <p style="text-align: center"><b>
                            Get your membership for send personalized interest.
                        </b></p><br />

                </div>

            </div>
    </section>
<?php } ?>