<style>
  .sub_list {
    padding-left: 5px;
    padding-top: 5px;
  }

  .sub_list li {
    display: inline-block;
    padding: 4px 30px;
    background: #ca5b61;
    color: white;
    background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    border-radius: 13px;
    margin-top: 1rem;
  }

  .iconmm {
    color: #ca5b61;
    padding-right: 10px;
  }

  @media screen and (max-width:480px) {
    .sub_list li {
      width: 100%;
      margin-bottom: 1px;
    }

    .nav-btn {
      width: 100%;
      text-align: left !important;
    }

    .connected-blocks .icon {
      left: 5px;
    }

    .connected-blocks {
      padding: 0 0 30px 54px;
    }

    #nav ul {
      padding-left: 5px;
    }
  }

  .blurImg {
    -webkit-filter: blur(4px);
    filter: blur(4px);
  }

  .iconmm {
    color: #ffffff;
    padding-right: 10px;
    /* background: red; */
    background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    width: 30px;
    height: 30px;
    display: inline-block;
    display: inline-flex;
    justify-content: center;
    border-radius: 31px;
  }
</style>
<div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

  <div class="container">
    <div class="row no-gutters slider-text justify-content-start align-items-center">
      <div class="col-lg-6 col-md-6  d-flex align-items-end">
        <div class="text">
          <h1 class="mb-4">Search Result Detail<span></span> <span></span></h1>
        </div>
      </div>

    </div>
  </div>
</div>

<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;background: #fcf6f6;">
  <div class="container">
    <div class="row no-gutters">
      <div class="col-md-12">
        <div class="mem_profile">
          <div class="row">
            <div class="col-md-12">
              <div class="mem_box">
                <div class="row">

                  <div class="col-md-3 col-sm-12 col-xs-12">

                    <div class="mem_img">
                      <?php if ($data[0]->photo_privacy == 'No') { ?>
                        <img id="photo" onclick="show_image('photo','no','<?= $data[0]->u_id ?>')" src="<?php if (isset($data[0]->main_photo)) echo base_url('Documents/document/' . $data[0]->main_photo);
                                                                                                        else echo 'assets/img/user.webp'; ?>">
                        <?php } else {
                        if (isset($photo_request[0]->photo_status)) {
                          if ($photo_request[0]->photo_status == 'Approved') {
                        ?><img id="photo" onclick="show_image('photo','no','<?= $data[0]->u_id ?>')" src="<?php if (isset($data[0]->main_photo)) echo base_url('Documents/document/' . $data[0]->main_photo);
                                                                                                          else echo 'assets/img/user.webp'; ?>">
                          <?php }
                        } else { ?>
                          <img id="photo" class="blurImg" onclick="show_image('photo','<?= $data[0]->photo_privacy ?>','<?= $data[0]->u_id ?>')" src="<?php if (isset($data[0]->main_photo)) echo base_url('Documents/document/' . $data[0]->main_photo);
                                                                                                                                                      else echo 'assets/img/user.webp'; ?>">
                      <?php }
                      } ?> <span class="frame">Soulmates Marraige</span>


                    </div>
                  </div>
                  <div class="col-md-5 col-sm-12 col-xs-12">
                    <div class="head" style="">
                      <h4><?php if (isset($data[0]->name)) echo $data[0]->name; ?></h4>
                      <p class="para"><span><?php if (isset($data[0]->u_id)) echo $data[0]->u_id; ?> &nbsp; | &nbsp; Created for Self</span></p>
                    </div>
                    <div class="det_box prof_det">

                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <p><span class="icon icon-user iconmm" title="Age/Height"></span> &nbsp; <?php if (isset($data[0]->age)) echo $data[0]->age; ?> Years / <?php if (isset($data[0]->height)) echo $data[0]->height; ?></p>

                        </div>

                      </div>
                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <p><span class="icon icon-empire iconmm" title="Religion/Caste"></span> &nbsp; <?php if (isset($data[0]->reliion_name)) echo $data[0]->religion_name; ?> / <?php if (isset($data[0]->caste_name)) echo $data[0]->caste_name; ?></p>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <p><span class="icon icon-heart iconmm" title="Marital Status"></span> &nbsp; <?php if (isset($data[0]->marital_status)) echo $data[0]->marital_status; ?></p>
                        </div>

                      </div>
                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <p><span class="icon icon-graduation-cap iconmm" title="Education"></span> &nbsp; <?php if (isset($data[0]->education)) echo $data[0]->education; ?> </p>
                        </div>

                      </div>

                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <p><span class="icon icon-street-view iconmm" title="Occupation"></span> &nbsp; <?php if (isset($data[0]->occupation)) echo $data[0]->occupation; ?></p>
                        </div>

                      </div>
                      <div class="row">

                        <div class="col-md-12 col-sm-12 col-xs-12">
                          <p><span class="icon icon-map-marker iconmm" title="Location"></span> &nbsp; <?php if (isset($data[0]->state_name)) echo $data[0]->state_name; ?> (<?php if (isset($data[0]->city_name)) echo $data[0]->city_name; ?>) </p>
                        </div>

                      </div>

                    </div>
                  </div>
                  <div class="col-md-4 col-sm-12 col-xs-12">
                  </div>
                </div>

              </div>
            </div>
            <div class="col-md-12">
              <ul class="sub_list">
                <a onclick="return btnclickView('<?php echo $data[0]->u_id; ?>');">
                  <li><i class="icon icon-phone"></i> View Contact</li>
                </a>
                <a href='Send_Impression/index?id=<?php echo $data[0]->u_id; ?>'>
                  <li><i class="icon icon-heart"></i> Send Interest</li>
                </a>
                <a href='Send_Message/index?id=<?php echo $data[0]->u_id; ?>'>
                  <li><i class="icon icon-envelope"></i> Send Message</li>
                </a>
                <a href="#"></a>

                <a href="Print_profile/index?id=<?php echo $data[0]->u_id; ?>">
                  <li><i class=" icon icon-print"></i> Print Profile</li>
                </a>

              </ul>
            </div>
            <div class="col-md-12">
              <div class="col-md-12" style="padding: 0;">
                <div class="back1" style="box-shadow: 0px 1px 2px #9b8989; color: #4b4b4b;">

                  <div id="nav-wrap">
                    <div id="scroller-anchor"></div>
                    <div id="nav" class="navclass">
                      <ul class="clearfix">
                        <a href="#about">
                          <li class="nav-btn" data-row-id="row1">
                            About
                          </li>
                        </a>
                        <a href="#professional">
                          <li class="nav-btn">Professional Details</li>
                        </a>
                        <a href="#astro">
                          <li class="nav-btn">Astro Details</li>
                        </a>


                        <a href="#family">
                          <li class="nav-btn">Family Details</li>
                        </a>
                        <!--                <li class="nav-btn" data-row-id="row4">Desired Partner</li>-->
                        <a href="#partner">
                          <li class="nav-btn">Partner Preference </li>
                        </a>
                        <!--  <li class="nav-btn" data-row-id="row6">Link#6</li>-->


                        <div id="nav-indicator"></div>
                      </ul>
                    </div>
                  </div>

                  <div id="content-wrap">

                    <p id="about"></p>

                    <div class="connected-blocks"> <span class="icon"><i class=" icon-quote-left"></i></span>
                      <h5>About Me</h5>
                      <p> <?php if (isset($data[0]->bio)) echo $data[0]->bio; ?></p>
                    </div>



                    <div class="connected-blocks"> <span class="icon"><i class=" icon-user"></i></span>
                      <h5>Basic Detail</h5>
                      <p>
                      </p>
                      <div class="row">
                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Marital Status :</span>
                              <span class="pro_head col-md-7"> <strong> <?php if (isset($data[0]->u_m_s)) echo $data[0]->u_m_s;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder  row">
                              <span class="pro_head col-md-5">Age :</span>
                              <span class="pro_head col-md-7"> <strong> <?php if (isset($data[0]->age)) echo $data[0]->age;
                                                                        else echo "----"; ?> Years</strong> </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Food Preference :</span>
                              <span class="pro_head col-md-7"> <strong> <?php if (isset($data[0]->food_preference)) echo $data[0]->food_preference;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Height :</span>
                              <span class="pro_head col-md-7"><strong><?php if (isset($data[0]->height)) echo $data[0]->height;
                                                                      else echo "----"; ?></strong></span>


                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Physical status :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->physical_status)) echo $data[0]->physical_status;
                                                                        else echo "----"; ?> </strong></span>


                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Body Type :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->body_type)) echo $data[0]->body_type;
                                                                        else echo "----"; ?> </strong></span>


                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Mother Tongue :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->mother_tongue)) echo $data[0]->mother_tongue;
                                                                        else echo "----"; ?> </strong></span>


                            </div>


                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">


                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Blood Group :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->blood_group)) echo $data[0]->blood_group;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Complexion :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->complexion)) echo $data[0]->complexion;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Weight :</span>
                              <span class="pro_head col-md-7"><strong><?php if (isset($data[0]->weight)) echo $data[0]->weight;
                                                                      else echo "----"; ?> Kg</strong></span>

                            </div>


                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Religion:</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->religion_name)) echo $data[0]->religion_name;
                                                                        else echo "----"; ?></strong></span>
                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Caste:</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->caste_name)) echo $data[0]->caste_name;
                                                                        else echo "----"; ?> </strong></span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Subcaste:</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->sub_cast)) echo $data[0]->sub_cast;
                                                                        else echo "----"; ?></strong></span>

                            </div>


                          </div>
                        </div>

                      </div>


                      <p id="professional"></p>
                    </div>
                    <div class="connected-blocks"> <span class="icon"><i class=" icon-user"></i></span>
                      <h5>Professional Detail</h5>
                      <p>
                      </p>
                      <div class="row">
                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Education :</span>
                              <span class="pro_head col-md-7"><strong><?php if (isset($data[0]->education)) echo $data[0]->education;
                                                                      else echo "----"; ?> </strong></span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Occupation :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->occupation)) echo $data[0]->occupation;
                                                                        else echo "----"; ?> </strong></span>


                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Education Detail :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->education_details)) echo $data[0]->education_details;
                                                                        else echo "----"; ?> </strong></span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Occupation Detail :</span>
                              <span class="pro_head col-md-7"><strong><?php if (isset($data[0]->occupation_details)) echo $data[0]->occupation_details;
                                                                      else echo "----"; ?></strong></span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Employed in :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->employed_in)) echo $data[0]->employed_in;
                                                                        else echo "----"; ?> </strong></span>


                            </div>




                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Education Detail :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->education_details)) echo $data[0]->education_details;
                                                                        else echo "----"; ?> </strong></span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Occupation Detail :</span>
                              <span class="pro_head col-md-7"><strong><?php if (isset($data[0]->occupation_details)) echo $data[0]->occupation_details;
                                                                      else echo "----"; ?> </strong></span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Annual Income :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->salary)) echo $data[0]->salary;
                                                                        else echo "----"; ?> </strong></span>

                            </div>



                          </div>
                        </div>

                      </div>


                      <p id="astro"></p>
                    </div>

                    <div class="connected-blocks"> <span class="icon"><i class=" icon-book"></i></span>
                      <h5>Astro Detail</h5>
                      <div class="row">
                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Place of Birth :</span>
                              <span class="pro_head col-md-7"> <strong><?php if (isset($data[0]->birth_place)) echo $data[0]->birth_place;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder  row">
                              <span class="pro_head col-md-5">Date of Birth :</span>
                              <span class="pro_head col-md-7"> <strong> <?php if (isset($data[0]->dob)) echo $data[0]->dob;
                                                                        else echo "----"; ?></strong> </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Time of Birth :</span>
                              <span class="pro_head col-md-7"> <strong> <?php if (isset($data[0]->birth_time_hh)) echo $data[0]->birth_time_hh;
                                                                        else echo "----"; ?>:<?php if (isset($data[0]->birth_time_mm)) echo $data[0]->birth_time_mm;
                                                                                              else echo "----"; ?> <?php if (isset($data[0]->birth_time_am)) echo $data[0]->birth_time_am;
                                                                                                                    else echo "----"; ?> </strong></span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Manglik :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->manglik)) echo $data[0]->manglik;
                                                                        else echo "----"; ?> </strong></span>


                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Gotra :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->gotra)) echo $data[0]->gotra;
                                                                        else echo "----"; ?> </strong></span>


                            </div>



                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">





                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Horoscope Match:</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->horoscope_match)) echo $data[0]->horoscope_match;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Rashi :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->rashi)) echo $data[0]->rashi;
                                                                        else echo "----"; ?></strong></span>


                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Gan :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->gan)) echo $data[0]->gan;
                                                                        else echo "----"; ?></strong></span>


                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Nadi :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->nadi)) echo $data[0]->nadi;
                                                                        else echo "----"; ?></strong></span>


                            </div>


                          </div>
                        </div>

                      </div>
                      <p id="family"></p>
                    </div>

                    <div class="connected-blocks" id="family"> <span class="icon"><i class=" icon-users"></i></span>
                      <h5>About Family</h5>
                      <div class="row">
                        <div class="col-md-12" style="margin-bottom:15px;"> <?php if (isset($data[0]->family_bio)) echo $data[0]->family_bio;
                                                                            else echo "----"; ?></div>
                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Family Values :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->family_values)) echo $data[0]->family_values;
                                  else echo "----"; ?> </strong>
                              </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Family Status :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->family_status)) echo $data[0]->family_status;
                                  else echo "----"; ?></strong>
                              </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Family Type :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->family_type)) echo $data[0]->family_type;
                                  else echo "----"; ?> </strong>
                              </span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Father's Occupation :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->father_occupation)) echo $data[0]->father_occupation;
                                  else echo "----"; ?> </strong>
                              </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Mother's Occupation :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->mother_occupation)) echo $data[0]->mother_occupation;
                                  else echo "----"; ?> </strong>
                              </span>

                            </div>


                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">



                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Brother :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->no_of_brother)) echo $data[0]->no_of_brother;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Brother Married :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->no_of_married_brother)) echo $data[0]->no_of_married_brother;
                                                                        else echo "----"; ?> </strong></span>

                            </div>

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Sister :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->no_of_sister)) echo $data[0]->no_of_sister;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Sister Married :</span>
                              <span class="pro_head col-md-7"><strong><?php if (isset($data[0]->no_of_married_sister)) echo $data[0]->no_of_married_sister;
                                                                      else echo "----"; ?> </strong></span>

                            </div>

                          </div>
                        </div>

                      </div>

                      <p id="partner"></p>
                    </div>
                    <div class="connected-blocks"> <span class="icon"><i class=" icon-users"></i></span>
                      <h5>Partner Preference</h5>
                      <p>

                      </p>
                      <div class="row">
                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Age between :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->age_from)) echo $data[0]->age_from;
                                  else echo "----"; ?> &nbsp;<small> To&nbsp;</small> <?php if (isset($data[0]->age_to)) echo $data[0]->age_to;
                                                                                      else echo "----"; ?> <small> Years </small> </strong>
                              </span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Marital Status :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->marital_status)) echo $data[0]->marital_status;
                                  else echo "----"; ?> </strong>
                              </span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Have Children :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->no_of_children)) echo $data[0]->no_of_children;
                                  else echo "----"; ?> </strong>
                              </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Height between :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php if (isset($data[0]->height_from)) echo $data[0]->height_from;
                                  else echo "----"; ?> &nbsp;&nbsp; <small>To</small>&nbsp;&nbsp;<?php if (isset($data[0]->height_to)) echo $data[0]->height_to;
                                                                                                  else echo "----"; ?></strong>
                              </span>

                            </div>
                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5">Manglik :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->manglik)) echo $data[0]->manglik;
                                                                        else echo "----"; ?> </strong></span>

                            </div>

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5">Physical Status :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->physical_status)) echo $data[0]->physical_status;
                                                                        else echo "----"; ?></strong></span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5">Religion :</span>
                              <span class="pro_head col-md-7">
                                <strong> <?php foreach ($r_preference as $rr) if (isset($rr->name)) echo $rr->name; ?>
                                </strong>
                              </span>

                            </div>
                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Caste :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php foreach ($c_preference as $cc) if (isset($cc->name)) echo $cc->name . " "; ?> </strong>
                              </span>

                            </div>

                            <div class="pro_boder row">
                              <span class="pro_head col-md-5"> Mother tongue :</span>
                              <span class="pro_head col-md-7">
                                <strong>
                                  <?php foreach ($mt_preference as $mt) if (isset($mt->mother_tongue)) echo $mt->mother_tongue . " "; ?> </strong>
                              </span>

                            </div>

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Education :</span>
                              <span class="pro_head col-md-7"><strong> <?php foreach ($e_preference as $mt) if (isset($mt->education)) echo $mt->education . " "; ?> </strong></span>

                            </div>
                          </div>
                        </div>

                        <div class="col-md-6" style="margin-bottom:15px;">

                          <div class="sec-bx " style="">

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> State :</span>
                              <span class="pro_head col-md-7"><strong><?php foreach ($rs_preference as $st) if (isset($st->name)) echo $st->name . " "; ?> </strong></span>

                            </div>
                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5">Citizenship :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($citizenship[0]->name)) echo $citizenship[0]->name;
                                                                        else echo "----"; ?></strong></span>

                            </div>
                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Country :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($rcitizenship[0]->name)) echo $rcitizenship[0]->name;
                                                                        else echo "----"; ?> </strong></span>

                            </div>
                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Residing Status :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->residing_status)) echo $data[0]->residing_status;
                                                                        else echo "----"; ?></strong></span>

                            </div>

                            <div class="pro_boder row" style="padding-left: 0px;">
                              <span class="pro_head col-md-5"> Eating habits :</span>
                              <span class="pro_head col-md-7"><strong> <?php if (isset($data[0]->eating_habit)) echo $data[0]->eating_habit;
                                                                        else echo "----"; ?></strong></span>

                            </div>


                          </div>
                        </div>

                      </div>

                      <p></p>
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
<script>
  function btnclickView(x) {
    //showload("#loaddata");
    // alert(x);
    $("#id").val(x);
    $("#divb").show();
    $("#divs").show();
    return false;
  }

  function btnclickCancel(x) {
    $('#loader').hide();
    $("#divb").hide();
    $("#divs").hide();
    return false;
  }
</script>
<script>
  function checkmembership(x) {
    $("#loadcontactdetail").empty();
    var txt = "<br/><div style='margin-left: 0px;margin-top: 10px;margin-right: 0px;text-align: left'>\n\
              <b><img src='images/ajax-loader.gif' style='width:16px;height:16px;' id='loadcontact'/> Please wait while loading.......</b></div><br/>";
    $(txt).appendTo("#loadcontactdetail");
    $.ajax({
      type: 'POST',
      url: "View_Profile/check_contact_left",
      data: {
        id: x,
      },
      success: function(data1) {
        // alert(data1)
        $("#loadcontactdetail").empty();
        $("#loadcontactdetail").html(data1);
      }
    });
    return false;
  }
</script>
<div style="opacity:0.5;filter:alpha(opacity=50);background-color:#000;width:2000px;height:2000px;position:fixed;top:0px;left:0px;display:none;" id="divb">
</div>
<div class="widget papular-post .popup_1" style="position:fixed;margin-left:0;top:50%;left:50%;display:none;width:651px; z-index:9999;background-color: #F0F0F0;transform: translate(-50%, -50%);" id="divs">
  <div style="margin: 0px 50px 0px 50px;">
    <form id="form2" name="form2" method="post" action="" enctype="multipart/form-data">
      <fieldset>
        <div class="col-sm-12  col-md-12">
          <p>&nbsp;</p>
          <div class="form-group col-sm-12  col-md-12">
            <div class="col-sm-12  col-md-12">


              <p> If contact not viewed already, one contact will be reduced from your allotted (<?php if (isset($membership[0]->contact_left)) echo $membership[0]->contact_left; ?>) contact!!. Available Contacts (<?php if (isset($membership[0]->contact_left)) echo $membership[0]->contact_left; ?>).</p>
            </div>
          </div>
          <div class="form-group col-sm-12  col-md-12">
            <div class="col-sm-12  col-md-12">
              <a href="#" onclick="return checkmembership('<?= $data[0]->u_id ?>');"><button class="btn btn-success width-full"><span><i class="fa fa-phone"></i> View Contact Details </span></button></a>
              <input type="submit" name="btncancel" onclick="return btnclickCancel();" id="btncancel" value="Cancel" class="btn btn-success" />
            </div>

          </div>
          <div class="form-group col-sm-12  col-md-12">
            <div class="col-sm-12  col-md-12">
              <div id='loadcontactdetail' style="color: #000;margin-top: 20px;"></div>
            </div>
          </div>
        </div>
        <p>&nbsp;</p>
      </fieldset>
    </form>
  </div>
</div>

<style>
  .center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
  }
</style>
<div id="myModal" class="modal" style=" z-index: 9999999999999;">
  <span class="close">&times;</span>
  <img class="modal-content center" style="height: 90%;width:40%;alie" id="img01">
  <div id="caption"></div>
</div>

<div style="opacity:0.5;filter:alpha(opacity=50);background-color:#000;width:2000px;height:2000px;position:fixed;top:0px;left:0px;display:none;" id="photodiva">
</div>
<div class="widget papular-post .popup_1" style="position:fixed;margin-left:0;top:50%;left:50%;display:none;width:500px; z-index:9999;background-color: #F0F0F0;transform: translate(-50%, -50%);" id="photodivb">
  <div style="margin: 0px 50px 0px 50px;">

    <fieldset>
      <div class="col-sm-12  col-md-12">
        <p>&nbsp;</p>
        <div class="form-group col-sm-12  col-md-12" id="pass_message">


        </div>
        <div class="form-group col-sm-12  col-md-12">
          <div class="col-sm-12  col-md-12">

            <button class="btn btn-success" onclick="$('#photodiva,#photodivb').hide();">OK</button>

          </div>
        </div>
        <p>&nbsp;</p>
      </div>
    </fieldset>
  </div>
</div>
<script>
  // Get the modal
  function show_image(xx, yy, uid) {
    if (yy == "Yes") {
      var aa = confirm("This photo is protected.Would you like to request for photo?");
      if (aa) {

        var pass_message = "<p><img scr='<?php echo base_url('') ?>'> Sending request. Pleae wait...</p>";
        $("#pass_message").html(pass_message);
        $.ajax({
          url: "UpdateProfile/photoRequest",
          type: "post",
          data: {
            uid: uid
          },
          success: function(data) {
            if (data == "1") {
              var pass_message = "<p>Dear Member, after approval for your request by this member. You can see his/her photo. </p>";
              // "<p><b>Note: </b>Password will be sent after approval.</p>";
            } else {
              var pass_message = "<p>Invalid Data! Please try again later.</p>"
            }
            $("#pass_message").empty();
            $("#pass_message").html(pass_message);
            $("#photodiva").show();
            $("#photodivb").show();
          }
        });


      }
      return false;
    }
    if (yy == "not_app") {
      var pass_message = "<p>This Member doesn't approved your request yet.</p>"
      $("#pass_message").html(pass_message);
      $("#photodiva").show();
      $("#photodivb").show();
      return false;
    }
    if (yy == "No") {
      var id = document.getElementById(xx + "_path");
      var src = id.value;
      var alt = id.className;
      var modal = document.getElementById("myModal");
      var modalImg = document.getElementById("img01");
      var captionText = document.getElementById("caption");
      modal.style.display = "block";
      modalImg.src = src;
      captionText.innerHTML = alt;

      return false;
    }
    var modal = document.getElementById("myModal");
    var img = document.getElementById(xx);
    var modalImg = document.getElementById("img01");
    var captionText = document.getElementById("caption");
    modal.style.display = "block";
    modalImg.src = img.src;
    captionText.innerHTML = img.alt;
  }

  var modal = document.getElementById("myModal");
  var span = document.getElementsByClassName("close")[0];
  span.onclick = function() {
    modal.style.display = "none";
  }
</script>