<div class="hero-wrap" style="background-image: url(<?php echo base_url('assets/img/bg_3.jpg')?>);height: 300px;background-size: cover;background-position: bottom;">
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
<?php if ($message_left > 0 && $duration_left > 0) { ?>
  <section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;background: #fcf6f6;">
    <div class="container">
      <div class="row no-gutters">
        <div class="col-md-12">
          <div class="mem_profile">
            <div class="row">
              <div class="col-md-12">
                <div class="mem_box">
                  <div class="row justify-content-center">
                    <div class="col-md-6 col-sm-12 col-xs-12">
                      <form class="w-100" action="Send_Message/send_message" method="post">
                        <?php $msg = $this->session->flashdata('msg');
                        if (isset($msg)) { ?>
                          <div class="alert alert-success" role="alert">
                            <p><?php echo $msg; ?>!!</p>
                          </div>
                        <?php } else { ?>
                          <label class="mb-0">Send Message To <?= $name; ?></label>
                        <?php } ?>
                        <textarea rows="5" class="form-control" name="message" placeholder="Enter message.."></textarea>
                        <input type="hidden" name="message_from" value="<?php $user_id = $this->session->userdata('user_id');
                                                                        echo $user_id; ?>">
                        <input type="hidden" name="message_to" value="<?= $id  ?>">
                        <input type="hidden" name="message_left" value="<?= $message_left; ?>">
                        <div class="text-center mt-3 mb-3">
                          <button type="submit" class="btn btn-primary btn-pdd w-30">Send Message</button>
                        </div>
                      </form>
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
            <h4 class="text-uppercase"><span class="color_red">Send Message to <?php $name = $this->session->userdata('user_name');
                                                        echo $name; ?></span></h4>
          </div>
          <br />
          <p style="text-align: center"><b>
              Get your membership for send personalized messages.
            </b></p><br />

        </div>

      </div>
  </section>
<?php } ?>