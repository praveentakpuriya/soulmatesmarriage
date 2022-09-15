  <style>
    .card {
      width: 100%;
      height: auto;
      margin-left: 0px;
    }

    .form-group label {
      color: #6b6b6b !important;
    }

    .slider-text h1 {
      font-size: 40px;
      color: #fff;
      line-height: 1.1;
      font-weight: 200;
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

    .card-body {
      padding: 1rem !important;
    }

    .circle {
      width: 100%;
      margin: 0 auto;
      margin-top: 10px;
      display: inline-block;
      position: relative;
      text-align: center;
      top: -10px;
      left: 20px;
    }
  </style>

  <style>
    div {
      box-sizing: border-box;
      transition: all ease-in-out .5s;
      -moz-transition: all ease-in-out .5s;
      -webkit-transition: all ease-in-out .5s;
    }
  </style>



  <div class="hero-wrap" style="background-image: url('assets/img/bg_3.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center">
        <div class="col-lg-6 col-md-6  d-flex align-items-end">
          <div class="text">
            <h1 class="mb-4">Personal Detail<span></span> <span></span></h1>
          </div>
        </div>

      </div>
    </div>
  </div>

  <!--===== ABOUT US =====-->
  <section id="about_us" class="about-us padding" style="background: #f3f8fa; padding-top: 2rem;">
    <div class="container">
      <div class="row">
        <div class="history-section">
          <div class="row">


          </div>


          <div class="row">
            <div class="col-md-12" style="background: #f3f8fa;padding: 10px;border-bottom: 1px solid #bf0b5f;    box-shadow: 0px 1px 1px 1px #d2bfbf;">
              <div class="row">
                <div class="col-md-3">
                  <div class="bbox" style="">
                    <div class="single-staff">
                      <div class="sraff-inner" style="height: 300px;">
                        <img src="assets/img/user.webp" style="width: 100%;height: -webkit-fill-available;" alt="">

                        <div class="staff-title plus"> <span class="plus"></span>
                          <h4>
                            <a class="popup-with-zoom-anim btn btn-danger " onclick=" alert('Please Upload Photos First')">Protect
                              Photo</a>
                          </h4>
                          <h6></h6>
                        </div>

                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-9" style="">
                  <!--Accordion wrapper-->

                  <div class="accordion md-accordion accordion-blocks" id="accordionEx83" role="tablist" aria-multiselectable="true" style="padding: 10px;">
                    <div class="card">

                      <!-- Card header -->
                      <div class="card-header" role="tab" id="headingUnfiled4">

                        <a data-toggle="collapse" data-parent="#accordionEx83" href="#collapseUnfiled4" aria-expanded="true" aria-controls="collapseUnfiled4" onclick="$('#imagehide').toggleClass('imagehide');">
                          <h4 class="mt-1 mb-0" style="color: #8a6d3b; padding: 8px; border-bottom: 1px solid #8a6d3b;">
                            <i class="fa fa-users"></i> <span>Upload Photo</span><span style="float: right;">Edit</span>

                          </h4><br>


                        </a>

                        <div class="col-sm-12 col-md-12" id="imagehide">
                          <div class="row">
                          </div>
                        </div>

                      </div>


                      <div class="col-md-12">

                        <!-- Card body -->
                        <div id="collapseUnfiled4" class="collapse show" role="tabpanel" aria-labelledby="headingUnfiled4" data-parent="#accordionEx83">
                          <div class="card-body">
                            <p align="right" class="text-danger" style="margin-right: 18px;position: relative; top: -10px;">
                              Photo size must be less than 400 kb, and for best view size
                              360 X 400 px.</p>
                            <!--Top Table UI-->
                            <div class="table-ui ">

                              <div class="row">
                                <div class="col-md-12">









                                  <form id="msform2" class="bookatable-form1">

                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5">
                                          <label class="control-label">Select
                                            Photo Type<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-7 col-md-7">
                                          <select name="ddlphototype" id="ddlphototype" class="required form-control combo">
                                            <option value="0">--- Select
                                              Photo Type ---</option>
                                            <option value="mainphoto">Main
                                              Photo</option>
                                            <option value="photo1">Photo 1
                                            </option>
                                            <option value="photo2">Photo 2
                                            </option>
                                            <option value="photo3">Photo 3
                                            </option>
                                            <option value="photo4">Photo 4
                                            </option>
                                          </select>
                                          <span class="err_msg" id="errddlphototype"></span>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5 mt-10">
                                          <label class="control-label">Select
                                            Photo<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-7 col-md-7 mt-10">
                                          <input type="file" name="fileupload" id="fileupload" class="required form-control image" accept="image/jpg, image/jpeg" />
                                          <span class="err_msg" id="errfileupload"></span>
                                          <p style="color:#ac0940">Select only
                                            jpg/jpeg file.</p>
                                        </div>
                                      </div>
                                    </div>
                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5">
                                          <label class="control-label"></label>
                                        </div>
                                        <div class="col-sm-7 col-md-7 mt-10" align="left">
                                          <button class="btn btn-default btn-mrg btn-default" name="btnsubmit" id="btnsubmit47" type="submit" onClick="return validateFields47()">Preview
                                            Photo</button>
                                        </div>
                                      </div>
                                    </div>


                                  </form>






                                </div>

                              </div>

                            </div>
                            <!--Grid row-->

                          </div>
                          <!--Top Table UI-->

                          <!-- Table responsive wrapper -->

                        </div>
                      </div>
                    </div>
                  </div>

                  <!-- Accordion card -->
                </div>
              </div>
            </div>
          </div>








          <div class="row pt-4">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx85" role="tablist" aria-multiselectable="true" style="">

                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled5">

                    <a data-toggle="collapse" data-parent="#accordionEx85" href="#collapseUnfiled5" aria-expanded="true" aria-controls="collapseUnfiled5">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b; padding: 8px; border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-user"></i> <span>Personal Details</span><span style="float: right;">Edit</span>

                      </h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Name :</b> <span><?php echo $data[0]->name; ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>DOB / age :</b>
                                <span><?php echo $data[0]->dob; ?>&nbsp;/&nbsp;<?php echo $data[0]->age; ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Gender :</b> <span><?php echo $data[0]->gender; ?></span> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Height :</b> <span><?php echo $data[0]->height; ?></span>
                              </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Marital Status :</b> <span><?php echo $data[0]->marital_status; ?></span> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Sub Caste :</b> <span><?php echo $data[0]->sub_cast; ?></span> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Mother Tongue :</b> <span><?php echo $data[0]->mother_tongue; ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Nri :</b> <span><?php echo $data[0]->nri; ?></span></p>
                            </div>
                          </div>
                        </div>
                      </div>



                    </a>

                  </div>


                  <div class="col-md-12">

                    <!-- Card body -->
                    <div id="collapseUnfiled5" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled5" data-parent="#accordionEx85">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">

                          <!--Grid row-->


                          <!--Grid column-->
                          <form action="<?php echo base_url('UpdateProfile/editpersonaldetails') ?>" name="form-editpersonaldetails" id="form-editpersonaldetails" class="bookatable-form1" method="post" style="height:auto;">

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Name <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">


                                  <input name="name" type="text" id="txtname" class="required name_valid textbox1 form-control name" size="28" maxlength="100" value="<?php echo $data[0]->name; ?>" />
                                  <input name="userid" type="hidden" class="" size="28" maxlength="100" value="<?php echo $data[0]->user_id; ?>" />


                                  <span class="err_msg" id="errtxtname"></span>
                                </div>
                              </div>
                            </div>

                            <!-- <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Age </label>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                  <select name="day" id="day" onchange="getage()" class="form-control required combo">
                                    <option value="0" selected="selected">Day
                                    </option>
                                    <option value="01">01</option>
                                    <option value="02">02</option>
                                    <option value="03">03</option>
                                    <option value="04">04</option>
                                    <option value="05">05</option>
                                    <option value="06">06</option>
                                    <option value="07">07</option>
                                    <option value="08">08</option>
                                    <option value="09">09</option>
                                    <option value="10">10</option>
                                    <option value="11">11</option>
                                    <option value="12">12</option>
                                    <option value="13">13</option>
                                    <option value="14">14</option>
                                    <option value="15">15</option>
                                    <option value="16">16</option>
                                    <option value="17">17</option>
                                    <option value="18">18</option>
                                    <option value="19">19</option>
                                    <option value="20">20</option>
                                    <option value="21">21</option>
                                    <option value="22">22</option>
                                    <option value="23">23</option>
                                    <option value="24">24</option>
                                    <option value="25">25</option>
                                    <option value="26">26</option>
                                    <option value="27">27</option>
                                    <option value="28">28</option>
                                    <option value="29">29</option>
                                    <option value="30">30</option>
                                    <option value="31">31</option>
                                  </select>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                  <select name="month" id="month" class="form-control required combo" onchange="getage()">
                                    <option value="0">Month</option>
                                    <option value="01">Jan</option>
                                    <option value="02">Feb</option>
                                    <option value="03">Mar</option>
                                    <option value="04">Apr</option>
                                    <option value="05">May</option>
                                    <option value="06">Jun</option>
                                    <option value="07">Jul</option>
                                    <option value="08">Aug</option>
                                    <option value="09">Sep</option>
                                    <option value="10">Oct</option>
                                    <option value="11">Nov</option>
                                    <option value="12">Dec</option>
                                  </select>
                                </div>
                                <div class="col-sm-2 col-md-2">
                                  <select name="year" id="year" class="form-control required combo " onchange="getage()">
                                    <option value='' selected='selected'>Year
                                    </option>
                                    <option value='2003'>2003</option>
                                    <option value='2002'>2002</option>
                                    <option value='2001'>2001</option>
                                    <option value='2000'>2000</option>
                                    <option value='1999'>1999</option>
                                    <option value='1998'>1998</option>
                                    <option value='1997'>1997</option>
                                    <option value='1996'>1996</option>
                                    <option value='1995'>1995</option>
                                    <option value='1994'>1994</option>
                                    <option value='1993'>1993</option>
                                    <option value='1992'>1992</option>
                                    <option value='1991'>1991</option>
                                    <option value='1990'>1990</option>
                                    <option value='1989'>1989</option>
                                    <option value='1988'>1988</option>
                                    <option value='1987'>1987</option>
                                    <option value='1986'>1986</option>
                                    <option value='1985'>1985</option>
                                    <option value='1984'>1984</option>
                                    <option value='1983'>1983</option>
                                    <option value='1982'>1982</option>
                                    <option value='1981'>1981</option>
                                    <option value='1980'>1980</option>
                                    <option value='1979'>1979</option>
                                    <option value='1978'>1978</option>
                                    <option value='1977'>1977</option>
                                    <option value='1976'>1976</option>
                                    <option value='1975'>1975</option>
                                    <option value='1974'>1974</option>
                                    <option value='1973'>1973</option>
                                    <option value='1972'>1972</option>
                                    <option value='1971'>1971</option>
                                    <option value='1970'>1970</option>
                                    <option value='1969'>1969</option>
                                    <option value='1968'>1968</option>
                                    <option value='1967'>1967</option>
                                    <option value='1966'>1966</option>
                                    <option value='1965'>1965</option>
                                    <option value='1964'>1964</option>
                                    <option value='1963'>1963</option>
                                    <option value='1962'>1962</option>
                                    <option value='1961'>1961</option>
                                    <option value='1960'>1960</option>
                                    <option value='1959'>1959</option>
                                    <option value='1958'>1958</option>
                                    <option value='1957'>1957</option>
                                    <option value='1956'>1956</option>
                                    <option value='1955'>1955</option>
                                    <option value='1954'>1954</option>
                                    <option value='1953'>1953</option>
                                    <option value='1952'>1952</option>
                                    <option value='1951'>1951</option>
                                    <option value='1950'>1950</option>
                                    <option value='1949'>1949</option>
                                    <option value='1948'>1948</option>
                                    <option value='1947'>1947</option>
                                    <option value='1946'>1946</option>
                                    <option value='1945'>1945</option>
                                    <option value='1944'>1944</option>
                                    <option value='1943'>1943</option>
                                    <option value='1942'>1942</option>
                                    <option value='1941'>1941</option>
                                    <option value='1940'>1940</option>
                                    <option value='1939'>1939</option>
                                    <option value='1938'>1938</option>
                                    <option value='1937'>1937</option>
                                    <option value='1936'>1936</option>
                                    <option value='1935'>1935</option>
                                    <option value='1934'>1934</option>
                                    <option value='1933'>1933</option>
                                    <option value='1932'>1932</option>
                                    <option value='1931'>1931</option>
                                    <option value='1930'>1930</option>
                                    <option value='1929'>1929</option>
                                    <option value='1928'>1928</option>
                                    <option value='1927'>1927</option>
                                    <option value='1926'>1926</option>
                                    <option value='1925'>1925</option>
                                    <option value='1924'>1924</option>
                                    <option value='1923'>1923</option>
                                    <option value='1922'>1922</option>
                                  </select>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                  <input name="txtage" id="txtage" class="form-control" disabled="disable" readonly="true" onKeyPress="return isNumberKey(event); " value="21" size="6" maxlength="2" onBlur="checkage();">



                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label"> </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <small>Date of birth will not be shown to others,
                                    its only for calculating your age.</small>
                                </div>
                              </div>
                            </div> -->

                            <div class="col-lg-6">
                              <label for="dob">Date of Birth:</label>
                              <input type="date" id="dob" class="form-control" name="dob" value="<?php echo $data[0]->dob ?>" required>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Gender </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder ">
                                    <label style="text-align:left;padding-bottom:20px"><input name="gender" type="radio" value="Male" <?php if ($data[0]->gender != "female") echo "checked"; ?> id="male" />Male
                                      &nbsp;
                                      <input name="gender" type="radio" value="Female" <?php if ($data[0]->gender != "male") echo "checked"; ?> id="female" />Female</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Height <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select id="ddlheightno" name="height" class=" combo form-control">
                                    <option value="0">Please Select</option>
                                    <option value='3ft.5in-105cm' <?php if ($data[0]->height == "3ft.5in-105cm") echo "selected"; ?>>3ft.5in-105cm</option>
                                    <option value='3ft.6in-107cm' <?php if ($data[0]->height == "3ft.6in-107cm") echo "selected"; ?>>3ft.6in-107cm</option>
                                    <option value='3ft.7in-110cm' <?php if ($data[0]->height == "3ft.6in-107cm") echo "selected"; ?>>3ft.7in-110cm</option>
                                    <option value='3ft.8in-112cm' <?php if ($data[0]->height == "3ft.8in-112cm") echo "selected"; ?>>3ft.8in-112cm</option>
                                    <option value='3ft.9in-115cm' <?php if ($data[0]->height == "3ft.9in-115cm") echo "selected"; ?>>3ft.9in-115cm</option>
                                    <option value='3ft.10in-117cm' <?php if ($data[0]->height == "3ft.10in-117cm") echo "selected"; ?>>3ft.10in-117cm</option>
                                    <option value='3ft.11in-120cm' <?php if ($data[0]->height == "3ft.11in-120cm") echo "selected"; ?>>3ft.11in-120cm</option>
                                    <option value='4ft-122cm' <?php if ($data[0]->height == "4ft-122cm") echo "selected"; ?>>4ft-122cm</option>
                                    <option value='4ft.1in-125cm' <?php if ($data[0]->height == "4ft.1in-125cm") echo "selected"; ?>>4ft.1in-125cm</option>
                                    <option value='4ft.2in-127cm' <?php if ($data[0]->height == "4ft.2in-127cm") echo "selected"; ?>>4ft.2in-127cm</option>
                                    <option value='4ft.3in-130cm' <?php if ($data[0]->height == "4ft.3in-130cm") echo "selected"; ?>>4ft.3in-130cm</option>
                                    <option value='4ft.4in-132cm' <?php if ($data[0]->height == "4ft.4in-132cm") echo "selected"; ?>>4ft.4in-132cm</option>
                                    <option value='4ft.5in-135cm' <?php if ($data[0]->height == "4ft.5in-135cm") echo "selected"; ?>>4ft.5in-135cm</option>
                                    <option value='4ft.6in-137cm' <?php if ($data[0]->height == "4ft.6in-137cm") echo "selected"; ?>>4ft.6in-137cm</option>
                                    <option value='4ft.7in-140cm' <?php if ($data[0]->height == "4ft.7in-140cm") echo "selected"; ?>>4ft.7in-140cm</option>
                                    <option value='4ft.8in-142cm' <?php if ($data[0]->height == "4ft.8in-142cm") echo "selected"; ?>>4ft.8in-142cm</option>
                                    <option value='4ft.9in-145cm' <?php if ($data[0]->height == "4ft.9in-145cm") echo "selected"; ?>>4ft.9in-145cm</option>
                                    <option value='4ft.10in-147cm' <?php if ($data[0]->height == "4ft.10in-147cm") echo "selected"; ?>>4ft.10in-147cm</option>
                                    <option value='4ft.11in-150cm' <?php if ($data[0]->height == "4ft.11in-150cm") echo "selected"; ?>>4ft.11in-150cm</option>
                                    <option value='5ft-152cm' <?php if ($data[0]->height == "5ft-152cm") echo "selected"; ?>>5ft-152cm</option>
                                    <option value='5ft.1in-155cm' <?php if ($data[0]->height == "5ft.1in-155cm") echo "selected"; ?>>5ft.1in-155cm</option>
                                    <option value='5ft.2in-157cm' <?php if ($data[0]->height == "5ft.2in-157cm") echo "selected"; ?>>5ft.2in-157cm</option>
                                    <option value='5ft.3in-160cm' <?php if ($data[0]->height == "5ft.3in-160cm") echo "selected"; ?>>5ft.3in-160cm</option>
                                    <option value='5ft.4in-162cm' <?php if ($data[0]->height == "5ft.4in-162cm") echo "selected"; ?>>5ft.4in-162cm</option>
                                    <option value='5ft.5in-165cm' <?php if ($data[0]->height == "5ft.5in-165cm") echo "selected"; ?>>5ft.5in-165cm</option>
                                    <option value='5ft.6in-167cm' <?php if ($data[0]->height == "5ft.6in-167cm") echo "selected"; ?>>5ft.6in-167cm</option>
                                    <option value='5ft.7in-170cm' <?php if ($data[0]->height == "5ft.7in-170cm") echo "selected"; ?>>5ft.7in-170cm</option>
                                    <option value='5ft.8in-172cm' <?php if ($data[0]->height == "5ft.8in-172cm") echo "selected"; ?>>5ft.8in-172cm</option>
                                    <option value='5ft.9in-175cm' <?php if ($data[0]->height == "5ft.9in-175cm") echo "selected"; ?>>5ft.9in-175cm</option>
                                    <option value='5ft.10in-177cm' <?php if ($data[0]->height == "5ft.10in-177cm") echo "selected"; ?>>5ft.10in-177cm</option>
                                    <option value='5ft.11in-180cm' <?php if ($data[0]->height == "5ft.11in-180cm") echo "selected"; ?>>5ft.11in-180cm</option>
                                    <option value='6ft-182cm' <?php if ($data[0]->height == "6ft-182cm") echo "selected"; ?>>6ft-182cm</option>
                                    <option value='6ft.1in-185cm' <?php if ($data[0]->height == "6ft.1in-185cm") echo "selected"; ?>>6ft.1in-185cm</option>
                                    <option value='6ft.2in-187cm' <?php if ($data[0]->height == "6ft.2in-187cm") echo "selected"; ?>>6ft.2in-187cm</option>
                                    <option value='6ft.3in-190cm' <?php if ($data[0]->height == "6ft.3in-190cm") echo "selected"; ?>>6ft.3in-190cm</option>
                                    <option value='6ft.4in-192cm' <?php if ($data[0]->height == "6ft.4in-192cm") echo "selected"; ?>>6ft.4in-192cm</option>
                                    <option value='6ft.5in-195cm' <?php if ($data[0]->height == "6ft.5in-195cm") echo "selected"; ?>>6ft.5in-195cm</option>
                                    <option value='6ft.6in-197cm' <?php if ($data[0]->height == "6ft.6in-197cm") echo "selected"; ?>>6ft.6in-197cm</option>
                                    <option value='6ft.7in-200cm' <?php if ($data[0]->height == "6ft.7in-200cm") echo "selected"; ?>>6ft.7in-200cm</option>
                                    <option value='6ft.8in-202cm' <?php if ($data[0]->height == "6ft.8in-202cm") echo "selected"; ?>>6ft.8in-202cm</option>
                                    <option value='6ft.9in-205cm' <?php if ($data[0]->height == "6ft.9in-205cm") echo "selected"; ?>>6ft.9in-205cm</option>
                                    <option value='6ft.10in-207cm' <?php if ($data[0]->height == "6ft.10in-207cm") echo "selected"; ?>>6ft.10in-207cm</option>
                                    <option value='6ft.11in-210cm' <?php if ($data[0]->height == "6ft.11in-210cm") echo "selected"; ?>>6ft.11in-210cm</option>
                                  </select>
                                  <input type="hidden" name="txtheight" id="txtheight" class="form-control" />
                                  <span class="err_msg" id="errddlheightno"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Marital Status</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder ">
                                    <label><input name="marital_status" type="radio" value="Never Married" <?php if ($data[0]->marital_status == "never married") echo "checked"; ?> id="chknemar" onclick="$('#ddlchild,#rdchliv,#rdchnotliv').attr('disabled','disabled')" checked="checked" /> Never Married
                                      &nbsp;</label>
                                    <label><input name="marital_status" type="radio" value="Divorced" id="Divorced" <?php if ($data[0]->marital_status == "divorced") echo "checked"; ?> onclick="$('#ddlchild,#rdchliv,#rdchnotliv').removeAttr('disabled','disabled')">Divorced
                                      &nbsp;</label>
                                    <label><input name="marital_status" type="radio" value="Widowed" id="Widowed" <?php if ($data[0]->marital_status == "widowed") echo "checked"; ?> onclick="$('#ddlchild,#rdchliv,#rdchnotliv').removeAttr('disabled','disabled')" />Widowed
                                      &nbsp;</label>
                                    <label><input name="marital_status" type="radio" value="Separated" id="Separated" <?php if ($data[0]->marital_status == "separated") echo "checked"; ?> onclick="$('#ddlchild,#rdchliv,#rdchnotliv').removeAttr('disabled','disabled')" />Separated</label>

                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">No. of Children:
                                  </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder ">
                                    <select name="no_of_children" id="ddlchild" class="nocommondropdown form-control" onchange="clcheck(this.value)">
                                      <option value="None" <?php if ($data[0]->no_of_children == "None") echo "selected"; ?>>No
                                        Children</option>
                                      <option value="1" <?php if ($data[0]->no_of_children == 1) echo "selected"; ?>>1</option>
                                      <option value="2" <?php if ($data[0]->no_of_children == 2) echo "selected"; ?>>2</option>
                                      <option value="3" <?php if ($data[0]->no_of_children == 3) echo "selected"; ?>>3</option>
                                      <option value="4" <?php if ($data[0]->no_of_children == 4) echo "selected"; ?>>4</option>
                                      <option value="5" <?php if ($data[0]->no_of_children == 5) echo "selected"; ?>>5</option>
                                      <option value="More Than 5" <?php if ($data[0]->no_of_children == "More Than 5") echo "selected"; ?>>More Than 5
                                      </option>
                                    </select>&nbsp;&nbsp;&nbsp;
                                    <label><input name="relationship" type="radio" <?php if ($data[0]->relationship == "Living with me") echo "checked"; ?> value="Living with me" id="rdchliv"> Live With Me
                                      &nbsp;</label>
                                    <label><input name="relationship" type="radio" <?php if ($data[0]->relationship == "Not living with me") echo "checked"; ?> value="Not living with me" id="rdchnotliv"> Not
                                      Live With Me</label>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Religion <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name='religion_id' onchange='ddchange(this.value);newddchange(this);' id='religion-dropdown' class='required combo form-control' style=''>
                                    <option value='0' selected='selected'>Select Religion</option>
                                    <?php foreach ($religion as $list) { ?>
                                      <option value="<?php echo $list->id; ?>" <?php if ($list->id == $data[0]->religion_id) echo "selected"; ?>><?php echo $list->name; ?></option>
                                    <?php } ?>
                                  </select> <span class="err_msg" id="errddlreligion"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label for="inputPassword3" class="control-label">Select Caste <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9 ">
                                  <select class="form-control form-select form-select-lg mb-3" name="caste_id" aria-label=".form-select-lg example" id="caste-dropdown">
                                    <option value=""><?php echo $caste[0]->name; ?></option>
                                  </select>
                                  <span class="err_msg" id="errddlcaste"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Subcaste </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <input name="sub_cast" type="text" class="form-control description" value="<?php echo $data[0]->sub_cast; ?>" maxlength="50" onkeypress="javascript:return chkspecialchars()">
                                  <input name="subcaste2" type="hidden" class="form-control" value="" maxlength="50">

                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label for="inputPassword3" class="control-label">Caste no bar</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder ">
                                    <label><input type="checkbox" name="cast_barrier" id="castenobar" value="" /> Caste No
                                      Bar</label>
                                  </div>

                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Manglik</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder ">
                                    <label><input name="manglik" type="radio" value="No" <?php if ($data[0]->manglik == "No") echo "checked"; ?>> No </label>
                                    <label><input name="manglik" type="radio" value="Yes" <?php if ($data[0]->manglik == "Yes") echo "checked"; ?>> Yes </label>
                                    <label><input name="manglik" type="radio" value="Anshik" <?php if ($data[0]->manglik == "Anshik") echo "checked"; ?>> Anshik </label>
                                    <label><input name="manglik" type="radio" value="Do not Know" <?php if ($data[0]->manglik == "Do not Know") echo "checked"; ?>> Don't know</label>

                                  </div>
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Mother Tongue <span style="color:red">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name='mother_tongue' onchange='ddchange(this.value);newddchange(this);' id='ddlmothertongue' class='required form-control combo ' style=''>
                                    <option value='0' selected='selected'>--- Select
                                      mothertongue---</option>
                                    <option value='Arabic' <?php if ($data[0]->mother_tongue == "Arabic") echo "selected"; ?>>Arabic</option>
                                    <option value='Assamese' <?php if ($data[0]->mother_tongue == "Assamese") echo "selected"; ?>>Assamese</option>
                                    <option value='Awadhi' <?php if ($data[0]->mother_tongue == "Awadhi") echo "selected"; ?>>Awadhi</option>
                                    <option value='Bengali' <?php if ($data[0]->mother_tongue == "Bengali") echo "selected"; ?>>Bengali</option>
                                    <option value='Bhojpuri' <?php if ($data[0]->mother_tongue == "Bhojpuri") echo "selected"; ?>>Bhojpuri</option>
                                    <option value='Bhutia' <?php if ($data[0]->mother_tongue == "Bhutia") echo "selected"; ?>>Bhutia</option>
                                    <option value='Bihari' <?php if ($data[0]->mother_tongue == "Bihari") echo "selected"; ?>>Bihari</option>
                                    <option value='Chattisgarhi' <?php if ($data[0]->mother_tongue == "Chattisgarhi") echo "selected"; ?>>Chattisgarhi
                                    </option>
                                    <option value='Chinese' <?php if ($data[0]->mother_tongue == "Chinese") echo "selected"; ?>>Chinese</option>
                                    <option value='Dogri' <?php if ($data[0]->mother_tongue == "Dogri") echo "selected"; ?>>Dogri</option>
                                    <option value='English' <?php if ($data[0]->mother_tongue == "English") echo "selected"; ?>>English</option>
                                    <option value='French' <?php if ($data[0]->mother_tongue == "French") echo "selected"; ?>>French</option>
                                    <option value='Garhwali' <?php if ($data[0]->mother_tongue == "Garhwali") echo "selected"; ?>>Garhwali</option>
                                    <option value='Garo' <?php if ($data[0]->mother_tongue == "Garo") echo "selected"; ?>>Garo</option>
                                    <option value='Gujarati' <?php if ($data[0]->mother_tongue == "Gujarati") echo "selected"; ?>>Gujarati</option>
                                    <option value='Haryanvi' <?php if ($data[0]->mother_tongue == "Haryanvi") echo "selected"; ?>>Haryanvi</option>
                                    <option value='Hindi' <?php if ($data[0]->mother_tongue == "Hindi") echo "selected"; ?>>Hindi
                                    </option>
                                    <option value='Kakbarak' <?php if ($data[0]->mother_tongue == "Kakbarak") echo "selected"; ?>>Kakbarak</option>
                                    <option value='Kanauji' <?php if ($data[0]->mother_tongue == "Kanauji") echo "selected"; ?>>Kanauji</option>
                                    <option value='Kannada' <?php if ($data[0]->mother_tongue == "Kannada") echo "selected"; ?>>Kannada</option>
                                    <option value='Kashmiri' <?php if ($data[0]->mother_tongue == "Kashmiri") echo "selected"; ?>>Kashmiri</option>
                                    <option value='Khandesi' <?php if ($data[0]->mother_tongue == "Khandesi") echo "selected"; ?>>Khandesi</option>
                                    <option value='Khasi' <?php if ($data[0]->mother_tongue == "Khasi") echo "selected"; ?>>Khasi</option>
                                    <option value='Konkani' <?php if ($data[0]->mother_tongue == "Konkani") echo "selected"; ?>>Konkani</option>
                                    <option value='Koshali' <?php if ($data[0]->mother_tongue == "Koshali") echo "selected"; ?>>Koshali</option>
                                    <option value='Kumoani' <?php if ($data[0]->mother_tongue == "Kumoani") echo "selected"; ?>>Kumoani</option>
                                    <option value='Kutchi' <?php if ($data[0]->mother_tongue == "Kutchi") echo "selected"; ?>>Kutchi</option>
                                    <option value='Lepcha' <?php if ($data[0]->mother_tongue == "Lepcha") echo "selected"; ?>>Lepcha</option>
                                    <option value='Magahi' <?php if ($data[0]->mother_tongue == "Magahi") echo "selected"; ?>>Magahi</option>
                                    <option value='Maithili' <?php if ($data[0]->mother_tongue == "Maithili") echo "selected"; ?>>Maithili</option>
                                    <option value='Malay' <?php if ($data[0]->mother_tongue == "Malay") echo "selected"; ?>>Malay</option>
                                    <option value='Malayalam' <?php if ($data[0]->mother_tongue == "Malayalam") echo "selected"; ?>>Malayalam</option>
                                    <option value='Manipuri' <?php if ($data[0]->mother_tongue == "Manipuri") echo "selected"; ?>>Manipuri</option>
                                    <option value='Marathi' <?php if ($data[0]->mother_tongue == "Marathi") echo "selected"; ?>>Marathi</option>
                                    <option value='Marwari' <?php if ($data[0]->mother_tongue == "Marwari") echo "selected"; ?>>Marwari</option>
                                    <option value='Miji' <?php if ($data[0]->mother_tongue == "Miji") echo "selected"; ?>>Miji</option>
                                    <option value='Mizo' <?php if ($data[0]->mother_tongue == "Mizo") echo "selected"; ?>>Mizo</option>
                                    <option value='Monpa' <?php if ($data[0]->mother_tongue == "Monpa") echo "selected"; ?>>Monpa</option>
                                    <option value='Nepali' <?php if ($data[0]->mother_tongue == "Nepali") echo "selected"; ?>>Nepali</option>
                                    <option value='Oriya' <?php if ($data[0]->mother_tongue == "Oriya") echo "selected"; ?>>Oriya</option>
                                    <option value='Other' <?php if ($data[0]->mother_tongue == "Other") echo "selected"; ?>>Other</option>
                                    <option value='Persian' <?php if ($data[0]->mother_tongue == "Persian") echo "selected"; ?>>Persian</option>
                                    <option value='Punjabi' <?php if ($data[0]->mother_tongue == "Punjabi") echo "selected"; ?>>Punjabi</option>
                                    <option value='Rajasthani' <?php if ($data[0]->mother_tongue == "Rajasthani") echo "selected"; ?>>Rajasthani</option>
                                    <option value='Russian' <?php if ($data[0]->mother_tongue == "Russian") echo "selected"; ?>>Russian</option>
                                    <option value='Sanskrit' <?php if ($data[0]->mother_tongue == "Sanskrit") echo "selected"; ?>>Sanskrit</option>
                                    <option value='Santhali' <?php if ($data[0]->mother_tongue == "Santhali") echo "selected"; ?>>Santhali</option>
                                    <option value='Sindhi' <?php if ($data[0]->mother_tongue == "Sindhi") echo "selected"; ?>>Sindhi</option>
                                    <option value='Spanish' <?php if ($data[0]->mother_tongue == "Spanish") echo "selected"; ?>>Spanish</option>
                                    <option value='Swedish' <?php if ($data[0]->mother_tongue == "Swedish") echo "selected"; ?>>Swedish</option>
                                    <option value='Tagalog' <?php if ($data[0]->mother_tongue == "Tagalog") echo "selected"; ?>>Tagalog</option>
                                    <option value='Tamil' <?php if ($data[0]->mother_tongue == "Tamil") echo "selected"; ?>>Tamil</option>
                                    <option value='Telugu' <?php if ($data[0]->mother_tongue == "Telugu") echo "selected"; ?>>Telugu</option>
                                    <option value='Tulu' <?php if ($data[0]->mother_tongue == "Tulu") echo "selected"; ?>>Tulu</option>
                                    <option value='Urdu' <?php if ($data[0]->mother_tongue == "Urdu") echo "selected"; ?>>Urdu</option>
                                  </select> <span class="err_msg" id="errddlmothertongue"></span>
                                </div>
                              </div>
                            </div>


                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">NRI</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder ">
                                    <label><input type="radio" name="nri" id="nriY" value="Yes" <?php if ($data[0]->nri == "Yes") echo "checked"; ?> /> Yes NRI </label>
                                    <label><input type="radio" name="nri" id="nriN" value="No" <?php if ($data[0]->nri == "No") echo "checked"; ?> /> Not NRI </label>

                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">About Myself <span style="color:red;">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <textarea name="txtaboutme" cols="53" rows="5" class="required form-control description" id="txtaboutme" onkeypress="javascript:return chkspecialcharsother()">I m good person...</textarea>
                                  <input type="hidden" name="bio" value="I m good person...">
                                  <span class="err_msg" id="errtxtaboutme"></span>
                                  <p align="left"><strong>About Myself:</strong>
                                    <small>This is the most important part of your
                                      profile everyone will be interested in. So,
                                      be honest and don't be shy! A good profile
                                      description will invite good response. <br>
                                      Min. 50 characters.</small>
                                  </p>
                                  <span class="err_msg" id="errtxtaboutme"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label"></label>
                                </div>
                                <div class="col-sm-12 col-md-9" align="left">

                                  <button type="submit" class="btn btn-default btn-style-two" name="submit" id="btnsubmit_prsonal">
                                    Update</button>

                                </div>
                              </div>
                            </div>
                          </form>
                          <!--Grid column-->

                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Top Table UI-->

                      <!-- Table responsive wrapper -->

                    </div>
                  </div>
                </div>
              </div>

              <!-- Accordion card -->
            </div>
          </div>


          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx866" role="tablist" aria-multiselectable="true" style="">

                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled6">

                    <!--Options-->

                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx866" href="#collapseUnfiled16" aria-expanded="true" aria-controls="collapseUnfiled16">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b; padding: 8px; border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-phone"></i> <span>Professional Details</span><span style="float: right;">Edit</span>
                      </h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Education* :</b> <span>LLB</span> </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1">
                              <b>Educational Details :</b> <span>LLB</span>
                            </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Occupation* :</b> <span>Lawyer</span> </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Occupation detail :</b> <span>Lawyer</span>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Employed in :</b> <span>Defence</span>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Salary/Income Per Year* :</b> <span>Rs.
                                5,00,001 - 7,00,000</span> </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Actual Income* :</b> <span>7Lakh</span> </p>
                          </div>

                        </div>
                      </div>

                    </a>

                  </div>



                  <div class="col-md-12">

                    <!-- Card body -->
                    <div id="collapseUnfiled16" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled16" data-parent="#accordionEx866">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">


                          <form id="form-editcontactdetails" name="form-editcontactdetails" action="#" method="post" class="bookatable-form1" style="height:auto">
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label class="control-label">Education<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <select name='cmbedu' onchange='ddchange(this.value);newddchange(this);' id='cmbedu' class='required form-control combo ' style='0'>
                                  <option value='0' selected='selected'>--- Select
                                    Education ---</option>
                                  <option value='10+2/Senior Secondary School'>
                                    10+2/Senior Secondary School</option>
                                  <option value='B.A.'>B.A.</option>
                                  <option value='B.Arch'>B.Arch</option>
                                  <option value='B.Com'>B.Com</option>
                                  <option value='B.Ed'>B.Ed</option>
                                  <option value='B.Pharm'>B.Pharm</option>
                                  <option value='B.Sc'>B.Sc</option>
                                  <option value='B.V.Sc.'>B.V.Sc.</option>
                                  <option value='BA LLB'>BA LLB</option>
                                  <option value='Bachelor'>Bachelor</option>
                                  <option value='Bachelor of Physiotherapy'>Bachelor
                                    of Physiotherapy</option>
                                  <option value='BAMS'>BAMS</option>
                                  <option value='BBA'>BBA</option>
                                  <option value='BCA'>BCA</option>
                                  <option value='BDS'>BDS</option>
                                  <option value='BE B.Tech'>BE B.Tech</option>
                                  <option value='BHM'>BHM</option>
                                  <option value='BHMS'>BHMS</option>
                                  <option value='CA'>CA</option>
                                  <option value='CS'>CS</option>
                                  <option value='Diploma'>Diploma</option>
                                  <option value='High school'>High school</option>
                                  <option value='ICWA'>ICWA</option>
                                  <option value='Integrated PG'>Integrated PG</option>
                                  <option value='Intermediate'>Intermediate</option>
                                  <option value='LLB' selected='true'>LLB</option>
                                  <option value='M.Arch'>M.Arch</option>
                                  <option value='M.Com'>M.Com</option>
                                  <option value='M.Ed'>M.Ed</option>
                                  <option value='M.Pharm'>M.Pharm</option>
                                  <option value='M.Phil'>M.Phil</option>
                                  <option value='M.Sc'>M.Sc</option>
                                  <option value='M.Tech'>M.Tech</option>
                                  <option value='M.V.Sc.'>M.V.Sc.</option>
                                  <option value='MA'>MA</option>
                                  <option value='Master of Fine Arts'>Master of Fine
                                    Arts</option>
                                  <option value='Master of Physiotherapy'>Master of
                                    Physiotherapy</option>
                                  <option value='Masters'>Masters</option>
                                  <option value='MBA PGDM'>MBA PGDM</option>
                                  <option value='MBA PGDM part time'>MBA PGDM part
                                    time</option>
                                  <option value='MBBS'>MBBS</option>
                                  <option value='MCA PGDCA'>MCA PGDCA</option>
                                  <option value='MCA PGDCA part time'>MCA PGDCA part
                                    time</option>
                                  <option value='MD'>MD</option>
                                  <option value='MD MS'>MD MS</option>
                                  <option value='MDS'>MDS</option>
                                  <option value='ME M.Tech'>ME M.Tech</option>
                                  <option value='ML LLM'>ML LLM</option>
                                  <option value='MS'>MS</option>
                                  <option value='MS'>MS</option>
                                  <option value='Others'>Others</option>
                                  <option value='PGDBM'>PGDBM</option>
                                  <option value='PhD doctorate'>PhD doctorate</option>
                                  <option value='Post graduation'>Post graduation
                                  </option>
                                  <option value='Undergraduate'>Undergraduate</option>
                                </select> <span class="err_msg" id="errcmbedu"></span>
                              </div>

                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputreligion" class="control-label">Educational Details</label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <input class="form-control forminput description" type="text" size="23" name="txtedu" value="LLB">
                                <span class="err_msg" id="errtxtedu"></span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputCaste" class="control-label">Occupation<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <select name='cmboccu' onchange='ddchange(this.value);newddchange(this);' id='cmboccu' class='required form-control combo' style='0'>
                                  <option value='0' selected='selected'>--- Select
                                    Occupation ---</option>
                                  <option value='Accounts'>Accounts</option>
                                  <option value='Administrative Professional'>
                                    Administrative Professional</option>
                                  <option value='Advertising'>Advertising</option>
                                  <option value='Agriculture'>Agriculture</option>
                                  <option value='Air Hostess'>Air Hostess</option>
                                  <option value='Airline Professional'>Airline
                                    Professional</option>
                                  <option value='Architect'>Architect</option>
                                  <option value='Arts & Craftsman'>Arts &amp;
                                    Craftsman</option>
                                  <option value='Auditor'>Auditor</option>
                                  <option value='Banking Service Professional'>Banking
                                    Service Professional</option>
                                  <option value='Beautician'>Beautician</option>
                                  <option value='Business'>Business</option>
                                  <option value='CEO / President/Director/Chairman'>
                                    CEO / President/Director/Chairman</option>
                                  <option value='Chartered Accountant'>Chartered
                                    Accountant</option>
                                  <option value='Clerk'>Clerk</option>
                                  <option value='Company Secretary'>Company Secretary
                                  </option>
                                  <option value='Consultant'>Consultant</option>
                                  <option value='Cost Accountant'>Cost Accountant
                                  </option>
                                  <option value='Customer Care Professional'>Customer
                                    Care Professional</option>
                                  <option value='Doctor'>Doctor</option>
                                  <option value='Education Professional'>Education
                                    Professional</option>
                                  <option value='Engineer - IT'>Engineer - IT</option>
                                  <option value='Engineer - Non IT'>Engineer - Non IT
                                  </option>
                                  <option value='Entertainment Professional'>
                                    Entertainment Professional</option>
                                  <option value='Executive'>Executive</option>
                                  <option value='Farming Professional'>Farming
                                    Professional</option>
                                  <option value='Fashion Designer'>Fashion Designer
                                  </option>
                                  <option value='Finance Professional'>Finance
                                    Professional</option>
                                  <option value='Hardware Professional'>Hardware
                                    Professional</option>
                                  <option value='Health Care Professional'>Health Care
                                    Professional</option>
                                  <option value='Hotel / Hospitality Professional'>
                                    Hotel / Hospitality Professional</option>
                                  <option value='Interior Designer'>Interior Designer
                                  </option>
                                  <option value='Journalist'>Journalist</option>
                                  <option value='Lawyer' selected='true'>Lawyer
                                  </option>
                                  <option value='Lecturer'>Lecturer</option>
                                  <option value='Legal Professional'>Legal
                                    Professional</option>
                                  <option value='Manager'>Manager</option>
                                  <option value='Mariner / Merchant Navy'>Mariner /
                                    Merchant Navy</option>
                                  <option value='Marketing Professional'>Marketing
                                    Professional</option>
                                  <option value='Media Professional'>Media
                                    Professional</option>
                                  <option value='Not Working'>Not Working</option>
                                  <option value='Nurse'>Nurse</option>
                                  <option value='Officer'>Officer</option>
                                  <option value='Others'>Others</option>
                                  <option value='Paramedical Professional'>Paramedical
                                    Professional</option>
                                  <option value='Pilot'>Pilot</option>
                                  <option value='PR Professional'>PR Professional
                                  </option>
                                  <option value='Professor'>Professor</option>
                                  <option value='Researcher'>Researcher</option>
                                  <option value='Sales Professional'>Sales
                                    Professional</option>
                                  <option value='Scientist'>Scientist</option>
                                  <option value='Social Worker'>Social Worker</option>
                                  <option value='Software Professional'>Software
                                    Professional</option>
                                  <option value='Sportsman'>Sportsman</option>
                                  <option value='Supervisors'>Supervisors</option>
                                  <option value='Teaching / Academician'>Teaching /
                                    Academician</option>
                                  <option value='Technician'>Technician</option>
                                </select> <span class="err_msg" id="errcmboccu"></span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputcastenobar" class="control-label">Occupation detail</label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <div class="controls_holder space ">
                                  <input class="form-control forminput description" type="text" size="30" name="txtoccu" value="Lawyer">
                                  <span class="err_msg" id="errtxtoccu"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputPassword3" class="control-label">Employed in</label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <label style="text-align:left;padding-bottom:20px">
                                  <input name="employedin" type="radio" value="Government" />Government</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Private" />Private</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Business" />Business</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" checked=checked value="Defence" />Defence</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Not working" />Not working </label>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label class="control-label">Salary/Income Per Year<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <div class="controls_holder space">
                                  <select name='ddlincome' onchange='ddchange(this.value);newddchange(this);' id='ddlincome' class='required combo form-control' style=''>
                                    <option value='0' selected='selected'>--- Select
                                      Income ---</option>
                                    <option value='Nill'>Nill</option>
                                    <option value='Rs. 0 - 50,000'>Rs. 0 - 50,000
                                    </option>
                                    <option value='Rs. 50,001 - 1,00,000'>Rs. 50,001
                                      - 1,00,000</option>
                                    <option value='Rs. 1,00,001 - 2,00,000'>Rs.
                                      1,00,001 - 2,00,000</option>
                                    <option value='Rs. 2,00,001 - 3,00,000'>Rs.
                                      2,00,001 - 3,00,000</option>
                                    <option value='Rs. 3,00,001 - 4,00,000'>Rs.
                                      3,00,001 - 4,00,000</option>
                                    <option value='Rs. 4,00,001 - 5,00,000'>Rs.
                                      4,00,001 - 5,00,000</option>
                                    <option value='Rs. 5,00,001 - 7,00,000' selected='true'>Rs. 5,00,001 - 7,00,000
                                    </option>
                                    <option value='Rs. 7,00,001 - 10,00,000'>Rs.
                                      7,00,001 - 10,00,000</option>
                                    <option value='Rs. 10,00,001 - 15,00,000'>Rs.
                                      10,00,001 - 15,00,000</option>
                                    <option value='Rs. 15,00,001 - 20,00,000'>Rs.
                                      15,00,001 - 20,00,000</option>
                                    <option value='Rs. 20,00,001 - 30,00,000'>Rs.
                                      20,00,001 - 30,00,000</option>
                                    <option value='Rs. 30,00,001 - 40,00,000'>Rs.
                                      30,00,001 - 40,00,000</option>
                                    <option value='Rs. 40,00,001 - 50,00,000'>Rs.
                                      40,00,001 - 50,00,000</option>
                                    <option value='Rs. 50,00,001 - 75,00,000'>Rs.
                                      50,00,001 - 75,00,000</option>
                                    <option value='Rs. 75,00,001 - 1,00,00,000'>Rs.
                                      75,00,001 - 1,00,00,000</option>
                                    <option value='Rs. 1,00,00,001 Above'>Rs.
                                      1,00,00,001 Above</option>
                                    <option value='under $ 25,000'>under $ 25,000
                                    </option>
                                    <option value='$ 25,001 - 50,000'>$ 25,001 -
                                      50,000</option>
                                    <option value='$ 50,001 - 75,000'>$ 50,001 -
                                      75,000</option>
                                    <option value='$ 75,001 - 1,00,000'>$ 75,001 -
                                      1,00,000</option>
                                    <option value='$ 1,00,001 - 1,50,000'>$ 1,00,001
                                      - 1,50,000</option>
                                    <option value='$ 1,50,001 - 2,00,000'>$ 1,50,001
                                      - 2,00,000</option>
                                    <option value='200001 $ or Above'>200001 $ or
                                      Above</option>
                                  </select> <input name="income" type="hidden" id="income" class="form-control">
                                  <span class="err_msg" id="errddlincome"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label class="control-label">Actual Income
                                  Package</label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <div class="controls_holder ">
                                  <input class="form-control forminput description" type="text" size="30" name="txtacincome" value="7Lakh">
                                  <span class="err_msg" id="errtxtoccu"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3">
                                <label class="control-label"></label>
                              </div>
                              <div class="col-sm-12 col-md-9" align="left">

                                <button type="submit" class="btn btn-default btn-style-two" name="submit" id="btnsubmit1"> Update</button>
                              </div>
                            </div>





                          </form>

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Top Table UI-->

                      <!-- Table responsive wrapper -->

                    </div>
                  </div>
                </div> <!-- Accordion card -->

              </div>

              <!-- Accordion card -->
            </div>
          </div>




          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx86" role="tablist" aria-multiselectable="true" style="">


                <script>
                  function checkcontact() {

                    var xx = validation("#form-editcontactdetailss");

                    if (!xx) {
                      return false;
                    } else {

                    }

                  }
                </script>
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled6">

                    <!--Options-->

                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx86" href="#collapseUnfiled6" aria-expanded="true" aria-controls="collapseUnfiled6">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b;
   padding: 8px;
    border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-phone"></i> <span>Contact Details</span><span style="float: right;">Edit</span>

                      </h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Country :</b> <span><?php echo $country_name[0]->name; ?></span> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1">
                                <b>Email Id :</b> <span><?php echo $data[0]->email; ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>State :</b> <span><?php echo $state[0]->name; ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>City :</b> <span><?php echo $city[0]->name; ?></span> </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Contact Address :</b> <span><?php echo $data[0]->address; ?></span>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Phone No :</b> <span><?php echo $data[0]->phone; ?></span> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"> <b>Mobile No :</b> <span><?php echo $data[0]->number; ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"> <b>Residing Status :</b> <span><?php echo $data[0]->residency_status; ?></span></p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>

                  </div>



                  <div class="col-md-12">

                    <!-- Card body -->
                    <div id="collapseUnfiled6" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled6" data-parent="#accordionEx86">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">
                          <form id="form-editcontactdetailss" action="UpdateProfile/updateContactDetails" name="form-editcontactdetailss" method="post" class="bookatable-form1" style="height:auto">
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Email ID<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <input name="email" type="text" class="required email form-control " id="txtemailid" onblur="myfunction()" tabindex="0" maxlength="60" size="20" readonly="" value="<?php echo $data[0]->email; ?>" />
                                  <input type="hidden" name="userid" id="preemail" value="<?php echo $data[0]->user_id; ?>" />
                                  <input type="hidden" name="uid" id="uid" value="SH418134" />
                                  <span class="err_msg" id="errtxtemailid"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Country<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name='country_id' onchange='ddchange(this.value);newddchange(this);' id='country-dropdown' class='required combo form-control' style=''>
                                    <option value='0' selected='selected'>Select Country</option>
                                    <?php foreach ($country as $list) { ?>
                                      <option value="<?php echo $list->id; ?>" <?php if ($data[0]->country_id == $list->id) echo "selected" ?>><?php echo $list->name; ?></option>
                                    <?php } ?>
                                  </select> <input type="hidden" name="txtcountry" id="txtcountry" class="form-control" />
                                  <span class="err_msg" id="errddlcountryliving"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Select State<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name='state_id' onchange='ddchange(this.value);newddchange(this);' id='state-dropdown' class='required combo form-control' style=''>
                                    <option value="<?php echo $data[0]->state_id ?>"><?php echo $state[0]->name; ?></option>
                                  </select> <span class="err_msg" id="errddlstate"></span>

                                  <input type="hidden" name="txtstate" id="txtstate" class="form-control" />
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">City<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name='city_id' id='city-dropdown' class='required combo form-control' style=''>
                                    <option value="<?php echo $data[0]->city_id ?>"><?php echo $city[0]->name; ?></option>
                                  </select> <input type="text" name="txtcity" id="txtcity" value="Indore" size="26" class="form-control" placeholder="Enter City Name" style="display:none">
                                  <span class="err_msg" id="errddlcity"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Contact Address<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <input type="text" name="address" id="txtaddress" value="<?php echo $data[0]->address ?>" placeholder="Address" maxlength="200" class="form-control description" />
                                  <span class="err_msg" id="errtxtaddress"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Contact Phone</label>
                                </div>
                                <div class="col-sm-3 col-md-3">
                                  <input type="text" maxlength="4" name="country_code" id="txtccode" value="<?php echo $data[0]->country_code ?>" placeholder="Country Code" class="form-control" />
                                </div>
                                <div class="col-sm-3 col-md-3">
                                  <input maxlength="6" size="5" name="std" id="txtareacode" type="text" placeholder="STD Code" class="form-control" value="<?php echo $data[0]->std ?>" />
                                </div>
                                <div class="col-sm-3 col-md-3">
                                  <input maxlength="15" size="10" name="phone" type="text" placeholder="Phone Number" class="form-control" value="<?php echo $data[0]->phone ?>" />
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Mobile<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <input type="text" maxlength="10" name="number" id="txtmobile" placeholder="Mobile" class="required number_valid form-control" value="<?php echo $data[0]->number ?>" />
                                  <input type="hidden" name="preemob" id="preemob" value="7880124211" />
                                  <span class="err_msg" id="errtxtmobile"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Citizenship<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name='ddlcitizenship' id='ddlcitizenship' class='required form-control combo' style=''>
                                    <?php foreach ($country as $list) { ?>
                                      <option value="<?php echo $list->id; ?>" <?php if ($data[0]->citizenship == $list->id) echo "selected" ?>><?php echo $list->name; ?></option>
                                    <?php } ?>
                                  </select> <span class="err_msg" id="errddlcitizenship"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Residing Status</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder">
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Permanent resident" <?php if($data[0]->residency_status == "Permanent resident") echo "checked" ?> class="">Permanent
                                      resident &nbsp;</label>
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Work Permit" <?php if($data[0]->residency_status == "Work Permit") echo "checked" ?> class="">Work Permit
                                      &nbsp;</label>
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Student Visa" <?php if($data[0]->residency_status == "Student Visa") echo "checked" ?> class="">Student
                                      Visa &nbsp;</label>
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Temperory Visa" <?php if($data[0]->residency_status == "Temperory Visa") echo "checked" ?> class="">Temperory Visa</label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label"></label>
                                </div>
                                <div class="col-sm-12 col-md-9" align="left">

                                  <button type="submit" class="btn btn-default btn-style-two" onclick="return checkcontact();" name="submit" id="btnsubmit1"> Update</button>
                                </div>
                              </div>
                            </div>





                          </form>

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Top Table UI-->

                      <!-- Table responsive wrapper -->

                    </div>
                  </div>
                </div> <!-- Accordion card -->

              </div>

              <!-- Accordion card -->
            </div>
          </div>





          <div class="row">
            <div class="col-md-12" style="    margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx78" role="tablist" aria-multiselectable="true" style="">
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled">

                    <!--Options-->

                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx78" href="#collapseUnfiled" aria-expanded="true" aria-controls="collapseUnfiled">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b;padding: 8px;border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-users"></i> <span>Family Details</span><span style="float: right;">Edit</span>

                      </h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Family Values :</b>Liberal </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Family Type :</b>Nuclear </p>
                            </div>

                            <div class="col-md-6 col-sm-8 col-xs-6">
                              <p class="para1"><b>Family Status :</b>Middle Class </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Family origin :</b>--- </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Father's Occupation :</b>Retired </p>
                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Mather's Occupation:</b> House Wife</p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Brothers :</b></b>1 </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Sisters :</b>1 </p>
                            </div>
                          </div>
                        </div>
                      </div>

                    </a>

                  </div>
                  <div class="col-md-12">
                    <!-- Card body -->
                    <div id="collapseUnfiled" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled" data-parent="#accordionEx78">
                      <div class="card-body">

                        <!--Top Table UI-->


                        <!--Grid row-->

                        <form name="form-editfamilydetails" id="form-editfamilydetails" action="#" method="post" class="bookatable-form1" style="height: auto;">
                          <div class="col-md-12">


                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Family Values </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder " style="margin-bottom:10px;">
                                    <label> <input name="f_values" id="f1" type="radio" value="Orthodox"> Orthodox
                                      &nbsp;</label>
                                    <label> <input name="f_values" id="f2" type="radio" value="Traditional">
                                      Traditional &nbsp;</label>
                                    <label> <input name="f_values" id="f3" type="radio" value="Moderate"> Moderate
                                      &nbsp;</label>
                                    <label> <input name="f_values" id="f4" type="radio" value="Liberal" checked=checked>Liberal</label>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Family Type</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder " style="margin-bottom:10px;">
                                    <label> <input name="f_type" type="radio" value="Joint">Joint &nbsp;</label>
                                    <label><input name="f_type" type="radio" value="Nuclear" checked=checked>Nuclear
                                      &nbsp;</label>
                                    <label><input name="f_type" type="radio" value="Other">Other </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Family Status</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder " style="margin-bottom:10px;">
                                    <label> <input name="f_status" type="radio" value="Middle Class" checked=checked>Middle Class
                                      &nbsp;</label>
                                    <label> <input name="f_status" type="radio" value="Upper Middle Class">Upper Middle
                                      Class &nbsp;</label>
                                    <label> <input name="f_status" type="radio" value="Rich / Affulent">Rich /
                                      Affulent</label>
                                  </div>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">No. of Brother </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name="brothers" id="brothers" class="form-control">
                                    <option>None</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">No. of Brothers
                                    Married</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name="married_br" id="married_br" class="form-control">
                                    <option>None</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">No. of Sisters </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name="sisters" id="sisters" class="form-control">
                                    <option>None</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">No. of Sisters
                                    Married</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name="married_sr" id="married_sr" class="form-control">
                                    <option>None</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                    <option>4</option>
                                    <option>5+</option>
                                  </select>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Father's
                                    Occupation<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name="f_occupation" id="f_occupation" class="required combo form-control">
                                    <option value="">----Please Select---- </option>
                                    <option value="Employed">Employed</option>
                                    <option value="Business man">Business man
                                    </option>
                                    <option value="Retired">Retired</option>
                                    <option value="Not employed">Not employed
                                    </option>
                                    <option value="Expired">Expired</option>
                                  </select>
                                  <!--              <input name="f_occupation" class="required form-control" type="text" id="f_occupation" size="40" maxlength="100">-->
                                  <span class="err_msg" id="errf_occupation"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Mother's
                                    Occupation<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <select name="m_occupation" id="m_occupation" class="required combo form-control">

                                    <option value="0">----Please Select----
                                    </option>
                                    <option value="Employed">Employed</option>
                                    <option value="Business Woman">Business Woman
                                    </option>
                                    <option value="Retired">Retired</option>
                                    <option value="Not employed">Not employed
                                    </option>
                                    <option value="House Wife">House Wife</option>
                                    <option value="Expired">Expired</option>
                                  </select>
                                  <!--              <input name="m_occupation" class="required form-control" type="text" id="m_occupation" size="40" maxlength="100">-->
                                  <span class="err_msg" id="errm_occupation"></span>
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Ancestral / Family
                                    origin </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <input name="txtforigin" type="text" id="txtforigin" class="form-control description" value="" size="40" maxlength="100">
                                  <input name="txtforigin2" type="hidden" id="txtforigin2" class="form-control " value="" size="40" maxlength="100">
                                </div>
                              </div>
                            </div>
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">About My Family<span class="text-danger">*</span></label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <textarea name="txtaboutf" class="required form-control description" cols="40" rows="6" id="txtaboutf" onkeypress="javascript: return chkspecialcharsother()">GOOD</textarea>
                                  <input type="hidden" name="txtaboutf2" class="required form-control " cols="40" rows="6" id="txtaboutf2" value="GOOD">
                                  <span class="err_msg" id="errtxtaboutf"></span>
                                </div>
                              </div>
                            </div>

                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label"></label>
                                </div>
                                <div class="col-sm-9 col-md-9" align="left">
                                  <button type="submit" class="btn btn-default" name="submit" id="btnsubmit_family"> Save my
                                    family detail</button>
                                </div>
                              </div>
                            </div>


                            <!--Grid column-->

                          </div>
                        </form>

                        <!--Grid column-->

                        <!--Grid column-->

                        <!--Grid column-->

                      </div>
                      <!--Grid row-->

                    </div>
                    <!--Top Table UI-->

                    <!-- Table responsive wrapper -->

                  </div>
                </div>


              </div>

              <!-- Accordion card -->
            </div>
          </div>



          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx79" role="tablist" aria-multiselectable="true" style="">



                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled1">

                    <!--Options-->

                    <!-- Heading -->
                    <div class="col-md-12">
                      <a data-toggle="collapse" data-parent="#accordionEx79" href="#collapseUnfiled1" aria-expanded="true" aria-controls="collapseUnfiled">
                        <h4 class="mt-1 mb-0" style="color: #8a6d3b; padding: 8px border-bottom: 1px solid #8a6d3b;">
                          <i class="fa fa-user-plus"></i> <span>Partner Preference</span><span style="float: right;">Edit</span>

                        </h4>
                    </div>
                    <br>
                    <div class="row">

                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Age : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2">----- To ----- </p>
                          </div>
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Marital Status : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2">----- </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Mother Tongue : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2">----- </p>
                          </div>
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Religion : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2">----- </p>
                          </div>
                        </div>
                      </div>

                    </div>
                    <br><br>
                    </a>

                  </div>
                  <div class="col-md-12">
                    <!-- Card body -->
                    <div id="collapseUnfiled1" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled1" data-parent="#accordionEx79">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">

                          <!--Grid row-->
                          <div class="row">
                            <div class="col-md-12">
                              <form id="form1" class="bookatable-form1" name="form1" action="#" method="post" style="height:auto">


                                <div class="panel-body">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Age
                                        </label>
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select name="agefrom" size="1" id="agefrom" class="form-control">
                                          <option value="18" selected="selected">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30">30</option>
                                          <option value="31">31</option>
                                          <option value="32">32</option>
                                          <option value="33">33</option>
                                          <option value="34">34</option>
                                          <option value="35">35</option>
                                          <option value="36">36</option>
                                          <option value="37">37</option>
                                          <option value="38">38</option>
                                          <option value="39">39</option>
                                          <option value="40">40</option>
                                          <option value="41">41</option>
                                          <option value="42">42</option>
                                          <option value="43">43</option>
                                          <option value="44">44</option>
                                          <option value="45">45</option>
                                          <option value="46">46</option>
                                          <option value="47">47</option>
                                          <option value="48">48</option>
                                          <option value="49">49</option>
                                          <option value="50">50</option>
                                          <option value="51">51</option>
                                          <option value="52">52</option>
                                          <option value="53">53</option>
                                          <option value="54">54</option>
                                          <option value="55">55</option>
                                          <option value="56">56</option>
                                          <option value="57">57</option>
                                          <option value="58">58</option>
                                          <option value="59">59</option>
                                          <option value="60">60</option>
                                          <option value="61">61</option>
                                          <option value="62">62</option>
                                          <option value="63">63</option>
                                          <option value="64">64</option>
                                          <option value="65">65</option>
                                          <option value="66">66</option>
                                          <option value="67">67</option>
                                          <option value="68">68</option>
                                          <option value="69">69</option>
                                          <option value="70">70</option>
                                        </select>
                                      </div>
                                      <div class="col-sm-2 col-md-2">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select name="ageto" size="1" id="ageto" class="form-control">
                                          <option value="18">18</option>
                                          <option value="19">19</option>
                                          <option value="20">20</option>
                                          <option value="21">21</option>
                                          <option value="22">22</option>
                                          <option value="23">23</option>
                                          <option value="24">24</option>
                                          <option value="25">25</option>
                                          <option value="26">26</option>
                                          <option value="27">27</option>
                                          <option value="28">28</option>
                                          <option value="29">29</option>
                                          <option value="30" selected="selected">30</option>
                                          <option value="31">31</option>
                                          <option value="32">32</option>
                                          <option value="33">33</option>
                                          <option value="34">34</option>
                                          <option value="35">35</option>
                                          <option value="36">36</option>
                                          <option value="37">37</option>
                                          <option value="38">38</option>
                                          <option value="39">39</option>
                                          <option value="40">40</option>
                                          <option value="41">41</option>
                                          <option value="42">42</option>
                                          <option value="43">43</option>
                                          <option value="44">44</option>
                                          <option value="45">45</option>
                                          <option value="46">46</option>
                                          <option value="47">47</option>
                                          <option value="48">48</option>
                                          <option value="49">49</option>
                                          <option value="50">50</option>
                                          <option value="51">51</option>
                                          <option value="52">52</option>
                                          <option value="53">53</option>
                                          <option value="54">54</option>
                                          <option value="55">55</option>
                                          <option value="56">56</option>
                                          <option value="57">57</option>
                                          <option value="58">58</option>
                                          <option value="59">59</option>
                                          <option value="60">60</option>
                                          <option value="61">61</option>
                                          <option value="62">62</option>
                                          <option value="63">63</option>
                                          <option value="64">64</option>
                                          <option value="65">65</option>
                                          <option value="66">66</option>
                                          <option value="67">67</option>
                                          <option value="68">68</option>
                                          <option value="69">69</option>
                                          <option value="70">70</option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Marital
                                          Status</label>
                                      </div>
                                      <div class="col-sm-10 col-md-10">
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus22" name="mstatus1[]" type="checkbox" id="Unmarried" onClick="isCheckMstatus()" value="Never Married" />
                                          Never Married &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus1 mstatus22" name="mstatus1[]" type="checkbox" id="Widowed" onClick="isCheckMstatus()" value="Widowed" />
                                          Widowed &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus1 mstatus22" name="mstatus1[]" type="checkbox" id="Divorced" onClick="isCheckMstatus()" value="Divorced" />
                                          Divorced &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus1 mstatus22" name="mstatus1[]" type="checkbox" id="Separated" onClick="isCheckMstatus()" value="Separated" />
                                          Separated &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus22" name="mstatus1[]" type="checkbox" onClick="if(this.checked){chenable();$('.mstatus').prop('checked',true);}else{chdisable();$('.mstatus').prop('checked',false);}" value="Any" id="mstatusany1" />
                                          Any
                                        </label>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Have
                                          Children</label>
                                      </div>
                                      <div class="col-sm-10 col-md-10">
                                        <div align="left" class="">
                                          <label style="text-align:left;padding-bottom:20px"><input name="childliving" id="childlivingno" type="radio" value="No"> No
                                            &nbsp; </label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="childliving" id="childlivingyes" value="Yes"> Yes &nbsp;
                                          </label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="childliving" id="childlivingdm" value="Does not Matter">
                                            Doesn't Matter </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Height
                                        </label>
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select id="htx" name="htx" class="form-control">
                                          <option value='1'>3ft.5in-105cm
                                          </option>
                                          <option value='2'>3ft.6in-107cm
                                          </option>
                                          <option value='3'>3ft.7in-110cm
                                          </option>
                                          <option value='4'>3ft.8in-112cm
                                          </option>
                                          <option value='5'>3ft.9in-115cm
                                          </option>
                                          <option value='6'>3ft.10in-117cm
                                          </option>
                                          <option value='7'>3ft.11in-120cm
                                          </option>
                                          <option value='8'>4ft-122cm</option>
                                          <option value='9'>4ft.1in-125cm
                                          </option>
                                          <option value='10'>4ft.2in-127cm
                                          </option>
                                          <option value='11'>4ft.3in-130cm
                                          </option>
                                          <option value='12'>4ft.4in-132cm
                                          </option>
                                          <option value='13'>4ft.5in-135cm
                                          </option>
                                          <option value='14'>4ft.6in-137cm
                                          </option>
                                          <option value='15'>4ft.7in-140cm
                                          </option>
                                          <option value='16'>4ft.8in-142cm
                                          </option>
                                          <option value='17'>4ft.9in-145cm
                                          </option>
                                          <option value='18'>4ft.10in-147cm
                                          </option>
                                          <option value='19'>4ft.11in-150cm
                                          </option>
                                          <option value='20'>5ft-152cm
                                          </option>
                                          <option value='21'>5ft.1in-155cm
                                          </option>
                                          <option value='22'>5ft.2in-157cm
                                          </option>
                                          <option value='23'>5ft.3in-160cm
                                          </option>
                                          <option value='24'>5ft.4in-162cm
                                          </option>
                                          <option value='25'>5ft.5in-165cm
                                          </option>
                                          <option value='26'>5ft.6in-167cm
                                          </option>
                                          <option value='27'>5ft.7in-170cm
                                          </option>
                                          <option value='28'>5ft.8in-172cm
                                          </option>
                                          <option value='29'>5ft.9in-175cm
                                          </option>
                                          <option value='30'>5ft.10in-177cm
                                          </option>
                                          <option value='31'>5ft.11in-180cm
                                          </option>
                                          <option value='32'>6ft-182cm
                                          </option>
                                          <option value='33'>6ft.1in-185cm
                                          </option>
                                          <option value='34'>6ft.2in-187cm
                                          </option>
                                          <option value='35'>6ft.3in-190cm
                                          </option>
                                          <option value='36'>6ft.4in-192cm
                                          </option>
                                          <option value='37'>6ft.5in-195cm
                                          </option>
                                          <option value='38'>6ft.6in-197cm
                                          </option>
                                          <option value='39'>6ft.7in-200cm
                                          </option>
                                          <option value='40'>6ft.8in-202cm
                                          </option>
                                          <option value='41'>6ft.9in-205cm
                                          </option>
                                          <option value='42'>6ft.10in-207cm
                                          </option>
                                          <option value='43'>6ft.11in-210cm
                                          </option>
                                        </select>
                                      </div>
                                      <div class="col-sm-2 col-md-2">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select id="hty" class="form-control" name="hty">
                                          <option value='1'>3ft.5in-105cm
                                          </option>
                                          <option value='2'>3ft.6in-107cm
                                          </option>
                                          <option value='3'>3ft.7in-110cm
                                          </option>
                                          <option value='4'>3ft.8in-112cm
                                          </option>
                                          <option value='5'>3ft.9in-115cm
                                          </option>
                                          <option value='6'>3ft.10in-117cm
                                          </option>
                                          <option value='7'>3ft.11in-120cm
                                          </option>
                                          <option value='8'>4ft-122cm</option>
                                          <option value='9'>4ft.1in-125cm
                                          </option>
                                          <option value='10'>4ft.2in-127cm
                                          </option>
                                          <option value='11'>4ft.3in-130cm
                                          </option>
                                          <option value='12'>4ft.4in-132cm
                                          </option>
                                          <option value='13'>4ft.5in-135cm
                                          </option>
                                          <option value='14'>4ft.6in-137cm
                                          </option>
                                          <option value='15'>4ft.7in-140cm
                                          </option>
                                          <option value='16'>4ft.8in-142cm
                                          </option>
                                          <option value='17'>4ft.9in-145cm
                                          </option>
                                          <option value='18'>4ft.10in-147cm
                                          </option>
                                          <option value='19'>4ft.11in-150cm
                                          </option>
                                          <option value='20'>5ft-152cm
                                          </option>
                                          <option value='21'>5ft.1in-155cm
                                          </option>
                                          <option value='22'>5ft.2in-157cm
                                          </option>
                                          <option value='23'>5ft.3in-160cm
                                          </option>
                                          <option value='24'>5ft.4in-162cm
                                          </option>
                                          <option value='25'>5ft.5in-165cm
                                          </option>
                                          <option value='26'>5ft.6in-167cm
                                          </option>
                                          <option value='27'>5ft.7in-170cm
                                          </option>
                                          <option value='28'>5ft.8in-172cm
                                          </option>
                                          <option value='29'>5ft.9in-175cm
                                          </option>
                                          <option value='30'>5ft.10in-177cm
                                          </option>
                                          <option value='31'>5ft.11in-180cm
                                          </option>
                                          <option value='32'>6ft-182cm
                                          </option>
                                          <option value='33'>6ft.1in-185cm
                                          </option>
                                          <option value='34'>6ft.2in-187cm
                                          </option>
                                          <option value='35'>6ft.3in-190cm
                                          </option>
                                          <option value='36'>6ft.4in-192cm
                                          </option>
                                          <option value='37'>6ft.5in-195cm
                                          </option>
                                          <option value='38'>6ft.6in-197cm
                                          </option>
                                          <option value='39'>6ft.7in-200cm
                                          </option>
                                          <option value='40'>6ft.8in-202cm
                                          </option>
                                          <option value='41'>6ft.9in-205cm
                                          </option>
                                          <option value='42'>6ft.10in-207cm
                                          </option>
                                          <option value='43'>6ft.11in-210cm
                                          </option>
                                          <option value="44" selected="">
                                            6ft.11in-211cm</option>
                                        </select>
                                        <input name="heightx" type="hidden" id="heightx">
                                        <input name="heighty" type="hidden" id="heighty">
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Physical
                                          Status</label>
                                      </div>
                                      <div class="col-sm-10 col-md-10">
                                        <div align="left" class="">
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="physical" value="Normal"> Normal
                                            &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="physical" value="Physically challenged">
                                            Disabled &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="physical" value="Does not Matter">
                                            Doesn't Matter</label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Mother
                                          Tongue </label>
                                      </div>
                                      <div class="col-sm-10 col-md-10">
                                        <div class="row">
                                          <div class="col-sm-5 col-md-5 no-padding">
                                            <select name="mtongue1" style="height:81px!important;" class="form-control" multiple="multiple" id="mtongue1">
                                              <option selected="selected">
                                                Any</option>
                                              <option>Arabic</option>
                                              <option>Assamese</option>
                                              <option>Awadhi</option>
                                              <option>Bengali</option>
                                              <option>Bhojpuri</option>
                                              <option>Bhutia</option>
                                              <option>Bihari</option>
                                              <option>Chattisgarhi
                                              </option>
                                              <option>Chinese</option>
                                              <option>Dogri</option>
                                              <option>English</option>
                                              <option>French</option>
                                              <option>Garhwali</option>
                                              <option>Garo</option>
                                              <option>Gujarati</option>
                                              <option>Haryanvi</option>
                                              <option>Hindi</option>
                                              <option>Kakbarak</option>
                                              <option>Kanauji</option>
                                              <option>Kannada</option>
                                              <option>Kashmiri</option>
                                              <option>Khandesi</option>
                                              <option>Khasi</option>
                                              <option>Konkani</option>
                                              <option>Koshali</option>
                                              <option>Kumoani</option>
                                              <option>Kutchi</option>
                                              <option>Lepcha</option>
                                              <option>Magahi</option>
                                              <option>Maithili</option>
                                              <option>Malay</option>
                                              <option>Malayalam</option>
                                              <option>Manipuri</option>
                                              <option>Marathi</option>
                                              <option>Marwari</option>
                                              <option>Miji</option>
                                              <option>Mizo</option>
                                              <option>Monpa</option>
                                              <option>Nepali</option>
                                              <option>Oriya</option>
                                              <option>Other</option>
                                              <option>Persian</option>
                                              <option>Punjabi</option>
                                              <option>Rajasthani</option>
                                              <option>Russian</option>
                                              <option>Sanskrit</option>
                                              <option>Santhali</option>
                                              <option>Sindhi</option>
                                              <option>Spanish</option>
                                              <option>Swedish</option>
                                              <option>Tagalog</option>
                                              <option>Tamil</option>
                                              <option>Telugu</option>
                                              <option>Tulu</option>
                                              <option>Urdu</option>
                                            </select>
                                          </div>
                                          <div class="col-sm-2 col-md-2 mt-35">
                                            <input name="button1" class="btn-2 btn-default" type="button" id="button1" onClick="addSrcToDestListM()" value="Add" style="width:100%">
                                            <br>
                                            <input name="button11" class="btn-2 btn-default" type="button" id="button11" onClick="deleteFromDestListM()" value="Remove" style="width:100%">
                                          </div>
                                          <div class="col-sm-5 col-md-5 no-padding">
                                            <select name="mtongue" style="height:81px!important;" multiple="MULTIPLE" id="select3" class="form-control">
                                              <option>Any</option>
                                            </select>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Religion</label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="lstreligion1" style="height:81px!important;" multiple="multiple" id="lstreligion1" class="form-control">
                                            <option selected="selected">Any
                                            </option>
                                            <option>Buddhist</option>
                                            <option>Christian</option>
                                            <option>Christian - Catholic
                                            </option>
                                            <option>Christian - Orthodox
                                            </option>
                                            <option>Christian - Protestant
                                            </option>
                                            <option>Hindu</option>
                                            <option>Jain</option>
                                            <option>Jain - Digambar</option>
                                            <option>Jain - Shwetambar
                                            </option>
                                            <option>Muslim</option>
                                            <option>Muslim Shiya</option>
                                            <option>Muslim Sunni</option>
                                            <option>Parsi</option>
                                            <option>Sikh</option>
                                            <option>No Religion</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button2" type="button" id="button2" onClick="javascript:addSrcToDestListR()" value="Add" class="btn-2 btn-default" style="width:100%">
                                          <br>
                                          <input name="button22" type="button" id="button22" onClick="javascript:deleteFromDestListR()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="lstreligion" style="height:81px!important;" multiple="multiple" id="lstreligion" class="form-control">
                                            <option>Any</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Caste /
                                        Division </label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="caste1" style="height:81px!important;" multiple="multiple" id="caste1" class="form-control">
                                            <option selected="selected">Any
                                            </option>
                                            <option>Agarwal</option>
                                            <option>Agnikula Kshatriya
                                            </option>
                                            <option>Agri</option>
                                            <option>Ahom</option>
                                            <option>aloki</option>
                                            <option>Arora</option>
                                            <option>Arya Vysya</option>
                                            <option>Baidya</option>
                                            <option>Baishnab</option>
                                            <option>Baishya</option>
                                            <option>Banik</option>
                                            <option>Baniya</option>
                                            <option>Bhandari</option>
                                            <option>Bhatia</option>
                                            <option>bhatnagar</option>
                                            <option>Bhavasar Kshatriya
                                            </option>
                                            <option>Bhovi</option>
                                            <option>Billava</option>
                                            <option>Brahmbatt</option>
                                            <option>Brahmin</option>
                                            <option>Brahmin - Anavil
                                            </option>
                                            <option>Brahmin - Audichya
                                            </option>
                                            <option>Brahmin - Barendra
                                            </option>
                                            <option>Brahmin - Bhargava
                                            </option>
                                            <option>Brahmin - Bhatt</option>
                                            <option>Brahmin - Bhumihar
                                            </option>
                                            <option>Brahmin - Daivadnya
                                            </option>
                                            <option>Brahmin - Danua</option>
                                            <option>Brahmin - Deshastha
                                            </option>
                                            <option>Brahmin - Dhiman
                                            </option>
                                            <option>Brahmin - Dravida
                                            </option>
                                            <option>Brahmin - Garhwali
                                            </option>
                                            <option>Brahmin - Gaur</option>
                                            <option>Brahmin - Goswami
                                            </option>
                                            <option>Brahmin - Gurukkal
                                            </option>
                                            <option>Brahmin - Iyengar
                                            </option>
                                            <option>Brahmin - Iyer</option>
                                            <option>Brahmin - Jangid
                                            </option>
                                            <option>Brahmin - Jijhotia
                                            </option>
                                            <option>Brahmin - Kanyakubj
                                            </option>
                                            <option>Brahmin - Kokanastha
                                            </option>
                                            <option>Brahmin - Kota</option>
                                            <option>Brahmin - Kulin</option>
                                            <option>Brahmin - Kumoani
                                            </option>
                                            <option>Brahmin - Madhwa
                                            </option>
                                            <option>Brahmin - Maithil
                                            </option>
                                            <option>Brahmin - Modh</option>
                                            <option>Brahmin - Mohyal
                                            </option>
                                            <option>Brahmin - Nagar</option>
                                            <option>Brahmin - Niyogi
                                            </option>
                                            <option>Brahmin - Others
                                            </option>
                                            <option>Brahmin - Panda</option>
                                            <option>Brahmin - Pandit
                                            </option>
                                            <option>Brahmin - Rarhi</option>
                                            <option>Brahmin - Rigvedi
                                            </option>
                                            <option>Brahmin - Rudraj
                                            </option>
                                            <option>Brahmin - Sakaldwipi
                                            </option>
                                            <option>Brahmin - Sanadya
                                            </option>
                                            <option>Brahmin - Sanketi
                                            </option>
                                            <option>Brahmin - Saraswat
                                            </option>
                                            <option>Brahmin - Saryuparin
                                            </option>
                                            <option>Brahmin - Shivhalli
                                            </option>
                                            <option>Brahmin - Shrimali
                                            </option>
                                            <option>Brahmin - Smartha
                                            </option>
                                            <option>Brahmin - Sri Gaur
                                            </option>
                                            <option>Brahmin - Sri Vishnava
                                            </option>
                                            <option>Brahmin - Stanika
                                            </option>
                                            <option>Brahmin - Tyagi</option>
                                            <option>Brahmin - Vaidiki
                                            </option>
                                            <option>Brahmin - Vyas</option>
                                            <option>Brahmin-Gurjargaur
                                            </option>
                                            <option>Brahmin-Pareek</option>
                                            <option>Chamar</option>
                                            <option>Chambhar</option>
                                            <option>Chandravanshi Kahar
                                            </option>
                                            <option>Chasa</option>
                                            <option>Chaudary</option>
                                            <option>Chaukse</option>
                                            <option>Chaurasia</option>
                                            <option>Chettiar</option>
                                            <option>Chhetri</option>
                                            <option>Devadiga</option>
                                            <option>Devandra Kula Vellalar
                                            </option>
                                            <option>Devang Koshthi</option>
                                            <option>Devanga</option>
                                            <option>Dhakad</option>
                                            <option>Dhangar</option>
                                            <option>Dheevara</option>
                                            <option>Dhiman</option>
                                            <option>Dhoba</option>
                                            <option>Dhobi</option>
                                            <option>Ediga</option>
                                            <option>Ezhava</option>
                                            <option>Ezhuthachan</option>
                                            <option>Gabit</option>
                                            <option>Gandla</option>
                                            <option>Ganiga</option>
                                            <option>Garhwali</option>
                                            <option>Gaur Brahmin</option>
                                            <option>Gehlot</option>
                                            <option>Ghumar</option>
                                            <option>Goala</option>
                                            <option>Goan</option>
                                            <option>Gond</option>
                                            <option>Goud</option>
                                            <option>Gounder</option>
                                            <option>Gowda</option>
                                            <option>Gudia</option>
                                            <option>Gujjar</option>
                                            <option>Gupta</option>
                                            <option>Gurjar</option>
                                            <option>Gurjar Gaud</option>
                                            <option>Intercaste</option>
                                            <option>Irani</option>
                                            <option>Jaiswal</option>
                                            <option>Jangam</option>
                                            <option>Jat</option>
                                            <option>Jatav</option>
                                            <option>Kacchwaha</option>
                                            <option>Kadava Patel</option>
                                            <option>Kadva Patel</option>
                                            <option>Kaibarta</option>
                                            <option>Kalar</option>
                                            <option>Kalinga</option>
                                            <option>Kalita</option>
                                            <option>Kalwar</option>
                                            <option>Kamboj</option>
                                            <option>Kamma</option>
                                            <option>Kansari</option>
                                            <option>Kapu</option>
                                            <option>Karana</option>
                                            <option>Karmakar</option>
                                            <option>Karuneegar</option>
                                            <option>Kasar</option>
                                            <option>Kashyap</option>
                                            <option>Kayastha</option>
                                            <option>Khandayat</option>
                                            <option>Khandelwal</option>
                                            <option>Khanwar</option>
                                            <option>khatik</option>
                                            <option>Khatri</option>
                                            <option>Kirar</option>
                                            <option>Koli</option>
                                            <option>Kongu Vellala Gounder
                                            </option>
                                            <option>Konkanastha Maratha
                                            </option>
                                            <option>Konkani</option>
                                            <option>Kori</option>
                                            <option>Kshatriya</option>
                                            <option>Kudumbi</option>
                                            <option>Kulal</option>
                                            <option>Kulalar</option>
                                            <option>Kulita</option>
                                            <option>Kumbhakar</option>
                                            <option>Kumbhar</option>
                                            <option>Kumhar</option>
                                            <option>Kummari</option>
                                            <option>Kunbi</option>
                                            <option>Kurmi Kshatriya</option>
                                            <option>Kuruba</option>
                                            <option>Kuruhina Shetty</option>
                                            <option>Kurumbar</option>
                                            <option>Kushwaha</option>
                                            <option>Kushwaha Koiri</option>
                                            <option>Kutchi</option>
                                            <option>Lambadi</option>
                                            <option>Leva patel</option>
                                            <option>Leva patil</option>
                                            <option>Lingayath</option>
                                            <option>Lohana</option>
                                            <option>Lubana</option>
                                            <option>Madiga</option>
                                            <option>Mahajan</option>
                                            <option>Mahar</option>
                                            <option>Mahendra</option>
                                            <option>Maheshwari</option>
                                            <option>Mahishya</option>
                                            <option>Majabi</option>
                                            <option>Mala</option>
                                            <option>Mali</option>
                                            <option>Malla</option>
                                            <option>Malviya</option>
                                            <option>Mangalorean</option>
                                            <option>Manipuri</option>
                                            <option>Mapila</option>
                                            <option>Maratha</option>
                                            <option>Maruthuvar</option>
                                            <option>Matang</option>
                                            <option>Maurya</option>
                                            <option>Meena</option>
                                            <option>Meenavar</option>
                                            <option>Mehra</option>
                                            <option>Meru Darji</option>
                                            <option>Mochi</option>
                                            <option>Modak</option>
                                            <option>Mogaveera</option>
                                            <option>Mudaliyar</option>
                                            <option>Mudiraj</option>
                                            <option>Mukkulathor</option>
                                            <option>Munnuru Kapu</option>
                                            <option>Muthuraja</option>
                                            <option>Nadar</option>
                                            <option>Nai</option>
                                            <option>Naicker</option>
                                            <option>Naidu</option>
                                            <option>Naik</option>
                                            <option>Nair</option>
                                            <option>Namosudra</option>
                                            <option>Napit</option>
                                            <option>Nayaka</option>
                                            <option>Nepali</option>
                                            <option>Nhavi</option>
                                            <option>Oswal</option>
                                            <option>Padmasali</option>
                                            <option>Pal</option>
                                            <option>Panchal</option>
                                            <option>Panicker</option>
                                            <option>Parkava Kulam</option>
                                            <option>Parsi</option>
                                            <option>Pasi</option>
                                            <option>Paswan</option>
                                            <option>Patel</option>
                                            <option>Patnaick</option>
                                            <option>Patra</option>
                                            <option>Pillai</option>
                                            <option>Porwal</option>
                                            <option>Prajapati</option>
                                            <option>Punjabi</option>
                                            <option>Rai</option>
                                            <option>Rajaka</option>
                                            <option>Rajastani</option>
                                            <option>Rajbonshi</option>
                                            <option>Rajput</option>
                                            <option>ramalingam</option>
                                            <option>Ramdasia</option>
                                            <option>Ramgariah</option>
                                            <option>Rathore</option>
                                            <option>Ravidasia</option>
                                            <option>Rawat</option>
                                            <option>Reddy</option>
                                            <option>Sadgope</option>
                                            <option>Saha</option>
                                            <option>Sahu</option>
                                            <option>Saini</option>
                                            <option>Saliya</option>
                                            <option>SC</option>
                                            <option>Senai Thalaivar</option>
                                            <option>Settibalija</option>
                                            <option>Shetty</option>
                                            <option>Shimpi</option>
                                            <option>Shivhare</option>
                                            <option>Sindhi</option>
                                            <option>Sindhi-Amil</option>
                                            <option>Sindhi-Baibhand</option>
                                            <option>Sindhi-Bhanusali
                                            </option>
                                            <option>Sindhi-Bhatia</option>
                                            <option>Sindhi-Chhapru</option>
                                            <option>Sindhi-Dadu</option>
                                            <option>Sindhi-Hyderabadi
                                            </option>
                                            <option>Sindhi-Larai</option>
                                            <option>Sindhi-Larkana</option>
                                            <option>Sindhi-Lohana</option>
                                            <option>Sindhi-Rohiri</option>
                                            <option>Sindhi-Sahiti</option>
                                            <option>Sindhi-Sakkhar</option>
                                            <option>Sindhi-Sehwani</option>
                                            <option>Sindhi-Shikarpuri
                                            </option>
                                            <option>Sindhi-Thatai</option>
                                            <option>SKP</option>
                                            <option>Sonar</option>
                                            <option>Soni</option>
                                            <option>Sourashtra</option>
                                            <option>ST</option>
                                            <option>Sundhi</option>
                                            <option>Suthar</option>
                                            <option>Swakula Sali</option>
                                            <option>Tamboli</option>
                                            <option>Tanti</option>
                                            <option>Tantubai</option>
                                            <option>Telaga</option>
                                            <option>Teli</option>
                                            <option>Thakkar</option>
                                            <option>Thakur</option>
                                            <option>Thigala</option>
                                            <option>Thiyya</option>
                                            <option>Tili</option>
                                            <option>Uppara</option>
                                            <option>Vaddera</option>
                                            <option>Vaish</option>
                                            <option>Vaishnav</option>
                                            <option>Vaishnava</option>
                                            <option>Vaishya</option>
                                            <option>Vaishya Vani</option>
                                            <option>Valmiki</option>
                                            <option>Vania</option>
                                            <option>Vaniya</option>
                                            <option>Vanjara</option>
                                            <option>Vanjari</option>
                                            <option>Vankar</option>
                                            <option>Vannar</option>
                                            <option>Vannia Kula Kshatriyar
                                            </option>
                                            <option>Veera Saivam</option>
                                            <option>Velama</option>
                                            <option>Vellalar</option>
                                            <option>Veluthedathu Nair
                                            </option>
                                            <option>Verma</option>
                                            <option>Vilakkithala Nair
                                            </option>
                                            <option>Vishwabrahmin</option>
                                            <option>Vishwakarma</option>
                                            <option>Vokkaliga</option>
                                            <option>Vysya</option>
                                            <option>Yadav</option>
                                            <option>Caste no bar</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button3" type="button" id="button3" onClick="javascript:addSrcToDestListC()" value="Add" class="btn-2 btn-default" style="width:100%">
                                          <br>
                                          <input name="button33" type="button" id="button33" onClick="javascript:deleteFromDestListC()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="caste" style="height:81px!important;" multiple="multiple" id="select4" class="form-control">
                                            <option>Any</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Horoscope match
                                      </label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div class="row">
                                        <div align="left" class="">
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="horo" value="Required"> Required
                                            &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="horo" type="radio" value="Does not Matter">
                                            Doesn't matter
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Manglik</label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div class="row">
                                        <div align="left" class="">
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="manglik" type="radio" value="No"> No
                                            &nbsp;</label>
                                          <input name="manglik" type="radio" value="Yes"> Yes &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="manglik" type="radio" value="Anshik">
                                            Anshik &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="manglik" type="radio" value="Do not Know"> Any
                                          </label>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Eating
                                        Habits</label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div align="left" class="">
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="foodPref" type="radio" value="Vegetarian"> Vegetarian
                                          &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="foodPref" type="radio" value="Non-Vegetarian">
                                          Non-Vegetarian &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="foodPref" type="radio" value="Eggetarian"> Eggetarian
                                          &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="foodPref" type="radio" value="Does not matter"> Doesn't
                                          matter</label>

                                      </div>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="col-sm-12 col-md-12">
                                    <div class="txt-cent">
                                      <h4 class="col-whit" style="color: #971256;">Educational
                                        Preferences</h4>
                                    </div>
                                  </div>
                                </div>


                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Education</label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="cmbedu1" style="height:81px!important;" multiple="" id="cmbedu1" class="form-control">
                                            <option selected="">Any</option>
                                            <option>10+2/Senior Secondary
                                              School</option>
                                            <option>B.A.</option>
                                            <option>B.Arch</option>
                                            <option>B.Com</option>
                                            <option>B.Ed</option>
                                            <option>B.Pharm</option>
                                            <option>B.Sc</option>
                                            <option>B.V.Sc.</option>
                                            <option>BA LLB</option>
                                            <option>Bachelor</option>
                                            <option>Bachelor of
                                              Physiotherapy</option>
                                            <option>BAMS</option>
                                            <option>BBA</option>
                                            <option>BCA</option>
                                            <option>BDS</option>
                                            <option>BE B.Tech</option>
                                            <option>BHM</option>
                                            <option>BHMS</option>
                                            <option>CA</option>
                                            <option>CS</option>
                                            <option>Diploma</option>
                                            <option>High school</option>
                                            <option>ICWA</option>
                                            <option>Integrated PG</option>
                                            <option>Intermediate</option>
                                            <option>LLB</option>
                                            <option>M.Arch</option>
                                            <option>M.Com</option>
                                            <option>M.Ed</option>
                                            <option>M.Pharm</option>
                                            <option>M.Phil</option>
                                            <option>M.Sc</option>
                                            <option>M.Tech</option>
                                            <option>M.V.Sc.</option>
                                            <option>MA</option>
                                            <option>Master of Fine Arts
                                            </option>
                                            <option>Master of Physiotherapy
                                            </option>
                                            <option>Masters</option>
                                            <option>MBA PGDM</option>
                                            <option>MBA PGDM part time
                                            </option>
                                            <option>MBBS</option>
                                            <option>MCA PGDCA</option>
                                            <option>MCA PGDCA part time
                                            </option>
                                            <option>MD</option>
                                            <option>MD MS</option>
                                            <option>MDS</option>
                                            <option>ME M.Tech</option>
                                            <option>ML LLM</option>
                                            <option>MS</option>
                                            <option>MS</option>
                                            <option>Others</option>
                                            <option>PGDBM</option>
                                            <option>PhD doctorate</option>
                                            <option>Post graduation</option>
                                            <option>Undergraduate</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button666" type="button" id="button666" onClick="javascript:addSrcToDestListE()" value="Add" class="btn-2 btn-default" style="width:100%">
                                          <br>
                                          <input name="button6666" type="button" id="button6666" onClick="javascript:deleteFromDestListE()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="cmbedu" style="height:81px!important;" multiple="" id="cmbedu" class="form-control" style="width:100%">
                                            <option>Any</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>





                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-2 col-md-2">
                                      <label class="control-label">Occupation</label>
                                    </div>
                                    <div class="col-sm-10 col-md-10">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="cmboccu1" style="height:81px!important;" id="cmboccu1" multiple="multiple" class="form-control" style="width:100%">
                                            <option selected="">Any</option>
                                            <option>Accounts</option>
                                            <option>Administrative
                                              Professional</option>
                                            <option>Advertising</option>
                                            <option>Agriculture</option>
                                            <option>Air Hostess</option>
                                            <option>Airline Professional
                                            </option>
                                            <option>Architect</option>
                                            <option>Arts & Craftsman
                                            </option>
                                            <option>Auditor</option>
                                            <option>Banking Service
                                              Professional</option>
                                            <option>Beautician</option>
                                            <option>Business</option>
                                            <option>CEO /
                                              President/Director/Chairman
                                            </option>
                                            <option>Chartered Accountant
                                            </option>
                                            <option>Clerk</option>
                                            <option>Company Secretary
                                            </option>
                                            <option>Consultant</option>
                                            <option>Cost Accountant</option>
                                            <option>Customer Care
                                              Professional</option>
                                            <option>Doctor</option>
                                            <option>Education Professional
                                            </option>
                                            <option>Engineer - IT</option>
                                            <option>Engineer - Non IT
                                            </option>
                                            <option>Entertainment
                                              Professional</option>
                                            <option>Executive</option>
                                            <option>Farming Professional
                                            </option>
                                            <option>Fashion Designer
                                            </option>
                                            <option>Finance Professional
                                            </option>
                                            <option>Hardware Professional
                                            </option>
                                            <option>Health Care Professional
                                            </option>
                                            <option>Hotel / Hospitality
                                              Professional</option>
                                            <option>Interior Designer
                                            </option>
                                            <option>Journalist</option>
                                            <option>Lawyer</option>
                                            <option>Lecturer</option>
                                            <option>Legal Professional
                                            </option>
                                            <option>Manager</option>
                                            <option>Mariner / Merchant Navy
                                            </option>
                                            <option>Marketing Professional
                                            </option>
                                            <option>Media Professional
                                            </option>
                                            <option>Not Working</option>
                                            <option>Nurse</option>
                                            <option>Officer</option>
                                            <option>Others</option>
                                            <option>Paramedical Professional
                                            </option>
                                            <option>Pilot</option>
                                            <option>PR Professional</option>
                                            <option>Professor</option>
                                            <option>Researcher</option>
                                            <option>Sales Professional
                                            </option>
                                            <option>Scientist</option>
                                            <option>Social Worker</option>
                                            <option>Software Professional
                                            </option>
                                            <option>Sportsman</option>
                                            <option>Supervisors</option>
                                            <option>Teaching / Academician
                                            </option>
                                            <option>Technician</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button6" class="btn-2 btn-default" type="button" id="button6" onClick="javascript:addSrcToDestListO()" value="Add" style="width:100%">
                                          <br>
                                          <input name="button66" class="btn-2 btn-default" type="button" id="button66" onClick="javascript:deleteFromDestListO()" value="Remove" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="cmboccu" style="height:81px!important;" multiple="multiple" id="cmboccu" class="form-control" style="width:100%">
                                            <option>Any</option>
                                          </select>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                            </div>
                            <div class="form-group" style="margin-left: 16px; ">
                              <div class="row">
                                <div class="col-sm-2 col-md-2 mt-35">
                                  <label class="control-label">Employed in</label>
                                </div>
                                <div class="col-sm-10 col-md-10">
                                  <div align="left" class="">
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Government" onClick="chemp(this, this.value)" class="t1 chemp" />Government </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Private" onClick="chemp(this, this.value)" class="t1 chemp" />
                                      Private&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Business" onClick="chemp(this, this.value)" class="t1 chemp" />
                                      Business&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Defence" onClick="chemp(this, this.value)" class="t1 chemp" />
                                      Defence&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Public Sector" onClick="chemp(this, this.value)" class="t1 chemp" />
                                      Public Sector &nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Not working" onClick="chemp(this, this.value)" class="t1 chemp" />
                                      Not working&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Others" onClick="chemp(this, this.value)" class="t1 chemp" />
                                      Others&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employedin1[]" value="Any" onClick="chemp(this, this.value)" class="t1 chemp" id="Anyemp" />
                                      Any&nbsp;
                                      <script>
                                        function chemp(x, y) {
                                          if (y == "Any" && $(x).attr("checked")) {
                                            $(".chemp").attr("checked", false);
                                            $(x).attr("checked", true);
                                          } else if ($(x).attr("checked")) {
                                            $("#Anyemp").attr("checked", false);
                                          }
                                        }
                                      </script>
                                    </label>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="col-md-12">
                              <div class="form-group">
                                <div class="row">
                                  <div class="col-sm-2 col-md-2">
                                    <label class="control-label">Annual
                                      Income</label>
                                  </div>
                                  <div class="col-md-10">
                                    <div class="row">
                                      <div class="col-sm-5 col-md-5">
                                        <select name='incomefrom' onchange='ddchange(this.value);newddchange(this);' id='incomefrom' class='form-control' style='background-color:#fff;color: #000;
       border-color: rgb(169, 169, 169);'>
                                          <option value='0' selected='selected'>Min</option>
                                          <option value='0'>0</option>
                                          <option value='0'>0</option>
                                          <option value='25000'>25000</option>
                                          <option value='50001'>50001</option>
                                          <option value='50001'>50001</option>
                                          <option value='75001'>75001</option>
                                          <option value='100001'>100001
                                          </option>
                                          <option value='100001'>100001
                                          </option>
                                          <option value='150001'>150001
                                          </option>
                                          <option value='200001'>200001
                                          </option>
                                          <option value='200001'>200001
                                          </option>
                                          <option value='300001'>300001
                                          </option>
                                          <option value='400001'>400001
                                          </option>
                                          <option value='500001'>500001
                                          </option>
                                          <option value='700001'>700001
                                          </option>
                                          <option value='1000001'>1000001
                                          </option>
                                          <option value='1500001'>1500001
                                          </option>
                                          <option value='2000001'>2000001
                                          </option>
                                          <option value='3000001'>3000001
                                          </option>
                                          <option value='4000001'>4000001
                                          </option>
                                          <option value='5000001'>5000001
                                          </option>
                                          <option value='7500001'>7500001
                                          </option>
                                          <option value='10000001'>10000001
                                          </option>
                                        </select>
                                      </div>
                                      <div class="col-sm-2 col-md-2" style="text-align:center">
                                        <p> To </p>
                                      </div>

                                      <div class="col-sm-5 col-md-5">
                                        <select name='incometo' onchange='ddchange(this.value);newddchange(this);' id='incometo' class='form-control' style='background-color:#fff;color: #000;
    border-color: rgb(169, 169, 169);'>
                                          <option value='0' selected='selected'>Max</option>
                                          <option value='25000'>25000</option>
                                          <option value='50000'>50000</option>
                                          <option value='50000'>50000</option>
                                          <option value='75000'>75000</option>
                                          <option value='100000'>100000
                                          </option>
                                          <option value='100000'>100000
                                          </option>
                                          <option value='150000'>150000
                                          </option>
                                          <option value='200000'>200000
                                          </option>
                                          <option value='200000'>200000
                                          </option>
                                          <option value='300000'>300000
                                          </option>
                                          <option value='400000'>400000
                                          </option>
                                          <option value='500000'>500000
                                          </option>
                                          <option value='700000'>700000
                                          </option>
                                          <option value='1000000'>1000000
                                          </option>
                                          <option value='1500000'>1500000
                                          </option>
                                          <option value='2000000'>2000000
                                          </option>
                                          <option value='3000000'>3000000
                                          </option>
                                          <option value='4000000'>4000000
                                          </option>
                                          <option value='5000000'>5000000
                                          </option>
                                          <option value='7500000'>7500000
                                          </option>
                                          <option value='10000000'>10000000
                                          </option>
                                        </select>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>





                            <div class="form-group col-md-12">
                              <div class="row">
                                <div class="col-sm-2 col-md-2">
                                  <label class="control-label">Citizenship</label>
                                </div>
                                <div class="col-sm-10 col-md-10">
                                  <select name='citizenship' onchange='ddchange(this.value);newddchange(this);' id='citizenship' class='form-control' style=''>
                                    <option value='0' selected='selected'>Any
                                    </option>
                                    <option value='Afghanistan'>Afghanistan</option>
                                    <option value='Albania'>Albania</option>
                                    <option value='Algeria'>Algeria</option>
                                    <option value='American Samoa'>American Samoa
                                    </option>
                                    <option value='Andorra'>Andorra</option>
                                    <option value='Angola'>Angola</option>
                                    <option value='Anguilla'>Anguilla</option>
                                    <option value='Antarctica'>Antarctica</option>
                                    <option value='Antigua And Barbuda'>Antigua And
                                      Barbuda</option>
                                    <option value='Argentina'>Argentina</option>
                                    <option value='Armenia'>Armenia</option>
                                    <option value='Aruba'>Aruba</option>
                                    <option value='Australia'>Australia</option>
                                    <option value='Austria'>Austria</option>
                                    <option value='Azerbaijan'>Azerbaijan</option>
                                    <option value='Bahamas The'>Bahamas The</option>
                                    <option value='Bahrain'>Bahrain</option>
                                    <option value='Bangladesh'>Bangladesh</option>
                                    <option value='Barbados'>Barbados</option>
                                    <option value='Belarus'>Belarus</option>
                                    <option value='Belgium'>Belgium</option>
                                    <option value='Belize'>Belize</option>
                                    <option value='Benin'>Benin</option>
                                    <option value='Bermuda'>Bermuda</option>
                                    <option value='Bhutan'>Bhutan</option>
                                    <option value='Bolivia'>Bolivia</option>
                                    <option value='Bosnia and Herzegovina'>Bosnia
                                      and Herzegovina</option>
                                    <option value='Botswana'>Botswana</option>
                                    <option value='Bouvet Island'>Bouvet Island
                                    </option>
                                    <option value='Brazil'>Brazil</option>
                                    <option value='British Indian Ocean Territory'>
                                      British Indian Ocean Territory</option>
                                    <option value='Brunei'>Brunei</option>
                                    <option value='Bulgaria'>Bulgaria</option>
                                    <option value='Burkina Faso'>Burkina Faso
                                    </option>
                                    <option value='Burundi'>Burundi</option>
                                    <option value='Cambodia'>Cambodia</option>
                                    <option value='Cameroon'>Cameroon</option>
                                    <option value='Canada'>Canada</option>
                                    <option value='Cape Verde'>Cape Verde</option>
                                    <option value='Cayman Islands'>Cayman Islands
                                    </option>
                                    <option value='Central African Republic'>Central
                                      African Republic</option>
                                    <option value='Chad'>Chad</option>
                                    <option value='Chile'>Chile</option>
                                    <option value='China'>China</option>
                                    <option value='Christmas Island'>Christmas
                                      Island</option>
                                    <option value='Cocos (Keeling) Islands'>Cocos
                                      (Keeling) Islands</option>
                                    <option value='Colombia'>Colombia</option>
                                    <option value='Comoros'>Comoros</option>
                                    <option value='Congo'>Congo</option>
                                    <option value='Congo The Democratic Republic Of The'>
                                      Congo The Democratic Republic Of The
                                    </option>
                                    <option value='Cook Islands'>Cook Islands
                                    </option>
                                    <option value='Costa Rica'>Costa Rica</option>
                                    <option value='Cote DIvoire (Ivory Coast)'>Cote
                                      DIvoire (Ivory Coast)</option>
                                    <option value='Croatia (Hrvatska)'>Croatia
                                      (Hrvatska)</option>
                                    <option value='Cuba'>Cuba</option>
                                    <option value='Cyprus'>Cyprus</option>
                                    <option value='Czech Republic'>Czech Republic
                                    </option>
                                    <option value='Denmark'>Denmark</option>
                                    <option value='Djibouti'>Djibouti</option>
                                    <option value='Dominica'>Dominica</option>
                                    <option value='Dominican Republic'>Dominican
                                      Republic</option>
                                    <option value='East Timor'>East Timor</option>
                                    <option value='Ecuador'>Ecuador</option>
                                    <option value='Egypt'>Egypt</option>
                                    <option value='El Salvador'>El Salvador</option>
                                    <option value='Equatorial Guinea'>Equatorial
                                      Guinea</option>
                                    <option value='Eritrea'>Eritrea</option>
                                    <option value='Estonia'>Estonia</option>
                                    <option value='Ethiopia'>Ethiopia</option>
                                    <option value='External Territories of Australia'>
                                      External Territories of Australia</option>
                                    <option value='Falkland Islands'>Falkland
                                      Islands</option>
                                    <option value='Faroe Islands'>Faroe Islands
                                    </option>
                                    <option value='Fiji Islands'>Fiji Islands
                                    </option>
                                    <option value='Finland'>Finland</option>
                                    <option value='France'>France</option>
                                    <option value='French Guiana'>French Guiana
                                    </option>
                                    <option value='French Polynesia'>French
                                      Polynesia</option>
                                    <option value='French Southern Territories'>
                                      French Southern Territories</option>
                                    <option value='Gabon'>Gabon</option>
                                    <option value='Gambia The'>Gambia The</option>
                                    <option value='Georgia'>Georgia</option>
                                    <option value='Germany'>Germany</option>
                                    <option value='Ghana'>Ghana</option>
                                    <option value='Gibraltar'>Gibraltar</option>
                                    <option value='Greece'>Greece</option>
                                    <option value='Greenland'>Greenland</option>
                                    <option value='Grenada'>Grenada</option>
                                    <option value='Guadeloupe'>Guadeloupe</option>
                                    <option value='Guam'>Guam</option>
                                    <option value='Guatemala'>Guatemala</option>
                                    <option value='Guernsey and Alderney'>Guernsey
                                      and Alderney</option>
                                    <option value='Guinea'>Guinea</option>
                                    <option value='Guinea-Bissau'>Guinea-Bissau
                                    </option>
                                    <option value='Guyana'>Guyana</option>
                                    <option value='Haiti'>Haiti</option>
                                    <option value='Heard and McDonald Islands'>Heard
                                      and McDonald Islands</option>
                                    <option value='Honduras'>Honduras</option>
                                    <option value='Hong Kong S.A.R.'>Hong Kong
                                      S.A.R.</option>
                                    <option value='Hungary'>Hungary</option>
                                    <option value='Iceland'>Iceland</option>
                                    <option value='India'>India</option>
                                    <option value='Indonesia'>Indonesia</option>
                                    <option value='Iran'>Iran</option>
                                    <option value='Iraq'>Iraq</option>
                                    <option value='Ireland'>Ireland</option>
                                    <option value='Israel'>Israel</option>
                                    <option value='Italy'>Italy</option>
                                    <option value='Jamaica'>Jamaica</option>
                                    <option value='Japan'>Japan</option>
                                    <option value='Jersey'>Jersey</option>
                                    <option value='Jordan'>Jordan</option>
                                    <option value='Kazakhstan'>Kazakhstan</option>
                                    <option value='Kenya'>Kenya</option>
                                    <option value='Kiribati'>Kiribati</option>
                                    <option value='Korea North'>Korea North</option>
                                    <option value='Korea South'>Korea South</option>
                                    <option value='Kuwait'>Kuwait</option>
                                    <option value='Kyrgyzstan'>Kyrgyzstan</option>
                                    <option value='Laos'>Laos</option>
                                    <option value='Latvia'>Latvia</option>
                                    <option value='Lebanon'>Lebanon</option>
                                    <option value='Lesotho'>Lesotho</option>
                                    <option value='Liberia'>Liberia</option>
                                    <option value='Libya'>Libya</option>
                                    <option value='Liechtenstein'>Liechtenstein
                                    </option>
                                    <option value='Lithuania'>Lithuania</option>
                                    <option value='Luxembourg'>Luxembourg</option>
                                    <option value='Macau S.A.R.'>Macau S.A.R.
                                    </option>
                                    <option value='Macedonia'>Macedonia</option>
                                    <option value='Madagascar'>Madagascar</option>
                                    <option value='Malawi'>Malawi</option>
                                    <option value='Malaysia'>Malaysia</option>
                                    <option value='Maldives'>Maldives</option>
                                    <option value='Mali'>Mali</option>
                                    <option value='Malta'>Malta</option>
                                    <option value='Man (Isle of)'>Man (Isle of)
                                    </option>
                                    <option value='Marshall Islands'>Marshall
                                      Islands</option>
                                    <option value='Martinique'>Martinique</option>
                                    <option value='Mauritania'>Mauritania</option>
                                    <option value='Mauritius'>Mauritius</option>
                                    <option value='Mayotte'>Mayotte</option>
                                    <option value='Mexico'>Mexico</option>
                                    <option value='Micronesia'>Micronesia</option>
                                    <option value='Moldova'>Moldova</option>
                                    <option value='Monaco'>Monaco</option>
                                    <option value='Mongolia'>Mongolia</option>
                                    <option value='Montserrat'>Montserrat</option>
                                    <option value='Morocco'>Morocco</option>
                                    <option value='Mozambique'>Mozambique</option>
                                    <option value='Myanmar'>Myanmar</option>
                                    <option value='Namibia'>Namibia</option>
                                    <option value='Nauru'>Nauru</option>
                                    <option value='Nepal'>Nepal</option>
                                    <option value='Netherlands Antilles'>Netherlands
                                      Antilles</option>
                                    <option value='Netherlands The'>Netherlands The
                                    </option>
                                    <option value='New Caledonia'>New Caledonia
                                    </option>
                                    <option value='New Zealand'>New Zealand</option>
                                    <option value='Nicaragua'>Nicaragua</option>
                                    <option value='Niger'>Niger</option>
                                    <option value='Nigeria'>Nigeria</option>
                                    <option value='Niue'>Niue</option>
                                    <option value='Norfolk Island'>Norfolk Island
                                    </option>
                                    <option value='Northern Mariana Islands'>
                                      Northern Mariana Islands</option>
                                    <option value='Norway'>Norway</option>
                                    <option value='Oman'>Oman</option>
                                    <option value='Pakistan'>Pakistan</option>
                                    <option value='Palau'>Palau</option>
                                    <option value='Palestinian Territory Occupied'>
                                      Palestinian Territory Occupied</option>
                                    <option value='Panama'>Panama</option>
                                    <option value='Papua new Guinea'>Papua new
                                      Guinea</option>
                                    <option value='Paraguay'>Paraguay</option>
                                    <option value='Peru'>Peru</option>
                                    <option value='Philippines'>Philippines</option>
                                    <option value='Pitcairn Island'>Pitcairn Island
                                    </option>
                                    <option value='Poland'>Poland</option>
                                    <option value='Portugal'>Portugal</option>
                                    <option value='Puerto Rico'>Puerto Rico</option>
                                    <option value='Qatar'>Qatar</option>
                                    <option value='Reunion'>Reunion</option>
                                    <option value='Romania'>Romania</option>
                                    <option value='Russia'>Russia</option>
                                    <option value='Rwanda'>Rwanda</option>
                                    <option value='Saint Helena'>Saint Helena
                                    </option>
                                    <option value='Saint Kitts And Nevis'>Saint
                                      Kitts And Nevis</option>
                                    <option value='Saint Lucia'>Saint Lucia</option>
                                    <option value='Saint Pierre and Miquelon'>Saint
                                      Pierre and Miquelon</option>
                                    <option value='Saint Vincent And The Grenadines'>
                                      Saint Vincent And The Grenadines</option>
                                    <option value='Samoa'>Samoa</option>
                                    <option value='San Marino'>San Marino</option>
                                    <option value='Sao Tome and Principe'>Sao Tome
                                      and Principe</option>
                                    <option value='Saudi Arabia'>Saudi Arabia
                                    </option>
                                    <option value='Senegal'>Senegal</option>
                                    <option value='Serbia'>Serbia</option>
                                    <option value='Seychelles'>Seychelles</option>
                                    <option value='Sierra Leone'>Sierra Leone
                                    </option>
                                    <option value='Singapore'>Singapore</option>
                                    <option value='Slovakia'>Slovakia</option>
                                    <option value='Slovenia'>Slovenia</option>
                                    <option value='Smaller Territories of the UK'>
                                      Smaller Territories of the UK</option>
                                    <option value='Solomon Islands'>Solomon Islands
                                    </option>
                                    <option value='Somalia'>Somalia</option>
                                    <option value='South Africa'>South Africa
                                    </option>
                                    <option value='South Georgia'>South Georgia
                                    </option>
                                    <option value='South Sudan'>South Sudan</option>
                                    <option value='Spain'>Spain</option>
                                    <option value='Sri Lanka'>Sri Lanka</option>
                                    <option value='Sudan'>Sudan</option>
                                    <option value='Suriname'>Suriname</option>
                                    <option value='Svalbard And Jan Mayen Islands'>
                                      Svalbard And Jan Mayen Islands</option>
                                    <option value='Swaziland'>Swaziland</option>
                                    <option value='Sweden'>Sweden</option>
                                    <option value='Switzerland'>Switzerland</option>
                                    <option value='Syria'>Syria</option>
                                    <option value='Taiwan'>Taiwan</option>
                                    <option value='Tajikistan'>Tajikistan</option>
                                    <option value='Tanzania'>Tanzania</option>
                                    <option value='Thailand'>Thailand</option>
                                    <option value='Togo'>Togo</option>
                                    <option value='Tokelau'>Tokelau</option>
                                    <option value='Tonga'>Tonga</option>
                                    <option value='Trinidad And Tobago'>Trinidad And
                                      Tobago</option>
                                    <option value='Tunisia'>Tunisia</option>
                                    <option value='Turkey'>Turkey</option>
                                    <option value='Turkmenistan'>Turkmenistan
                                    </option>
                                    <option value='Turks And Caicos Islands'>Turks
                                      And Caicos Islands</option>
                                    <option value='Tuvalu'>Tuvalu</option>
                                    <option value='Uganda'>Uganda</option>
                                    <option value='Ukraine'>Ukraine</option>
                                    <option value='United Arab Emirates'>United Arab
                                      Emirates</option>
                                    <option value='United Kingdom'>United Kingdom
                                    </option>
                                    <option value='United States Minor Outlying Islands'>
                                      United States Minor Outlying Islands
                                    </option>
                                    <option value='Uruguay'>Uruguay</option>
                                    <option value='USA'>USA</option>
                                    <option value='Uzbekistan'>Uzbekistan</option>
                                    <option value='Vanuatu'>Vanuatu</option>
                                    <option value='Vatican City State (Holy See)'>
                                      Vatican City State (Holy See)</option>
                                    <option value='Venezuela'>Venezuela</option>
                                    <option value='Vietnam'>Vietnam</option>
                                    <option value='Virgin Islands (British)'>Virgin
                                      Islands (British)</option>
                                    <option value='Virgin Islands (US)'>Virgin
                                      Islands (US)</option>
                                    <option value='Wallis And Futuna Islands'>Wallis
                                      And Futuna Islands</option>
                                    <option value='Western Sahara'>Western Sahara
                                    </option>
                                    <option value='Yemen'>Yemen</option>
                                    <option value='Yugoslavia'>Yugoslavia</option>
                                    <option value='Zambia'>Zambia</option>
                                    <option value='Zimbabwe'>Zimbabwe</option>
                                  </select>
                                </div>
                              </div>
                            </div>


                            <div class="form-group  col-md-12">
                              <div class="row">
                                <div class="col-sm-2 col-md-2">
                                  <label class="control-label">Country Living</label>
                                </div>
                                <div class="col-sm-10 col-md-10">
                                  <select name='ddlcountryliving11' onchange='ddchange(this.value);newddchange(this);' id='ddlcountryliving11' class='form-control' style=''>
                                    <option value='Any' selected='selected'>Any
                                    </option>
                                    <option value='1'>Afghanistan</option>
                                    <option value='2'>Albania</option>
                                    <option value='3'>Algeria</option>
                                    <option value='4'>American Samoa</option>
                                    <option value='5'>Andorra</option>
                                    <option value='6'>Angola</option>
                                    <option value='7'>Anguilla</option>
                                    <option value='8'>Antarctica</option>
                                    <option value='9'>Antigua And Barbuda</option>
                                    <option value='10'>Argentina</option>
                                    <option value='11'>Armenia</option>
                                    <option value='12'>Aruba</option>
                                    <option value='13'>Australia</option>
                                    <option value='14'>Austria</option>
                                    <option value='15'>Azerbaijan</option>
                                    <option value='16'>Bahamas The</option>
                                    <option value='17'>Bahrain</option>
                                    <option value='18'>Bangladesh</option>
                                    <option value='19'>Barbados</option>
                                    <option value='20'>Belarus</option>
                                    <option value='21'>Belgium</option>
                                    <option value='22'>Belize</option>
                                    <option value='23'>Benin</option>
                                    <option value='24'>Bermuda</option>
                                    <option value='25'>Bhutan</option>
                                    <option value='26'>Bolivia</option>
                                    <option value='27'>Bosnia and Herzegovina
                                    </option>
                                    <option value='28'>Botswana</option>
                                    <option value='29'>Bouvet Island</option>
                                    <option value='30'>Brazil</option>
                                    <option value='31'>British Indian Ocean
                                      Territory</option>
                                    <option value='32'>Brunei</option>
                                    <option value='33'>Bulgaria</option>
                                    <option value='34'>Burkina Faso</option>
                                    <option value='35'>Burundi</option>
                                    <option value='36'>Cambodia</option>
                                    <option value='37'>Cameroon</option>
                                    <option value='38'>Canada</option>
                                    <option value='39'>Cape Verde</option>
                                    <option value='40'>Cayman Islands</option>
                                    <option value='41'>Central African Republic
                                    </option>
                                    <option value='42'>Chad</option>
                                    <option value='43'>Chile</option>
                                    <option value='44'>China</option>
                                    <option value='45'>Christmas Island</option>
                                    <option value='46'>Cocos (Keeling) Islands
                                    </option>
                                    <option value='47'>Colombia</option>
                                    <option value='48'>Comoros</option>
                                    <option value='49'>Congo</option>
                                    <option value='50'>Congo The Democratic Republic
                                      Of The</option>
                                    <option value='51'>Cook Islands</option>
                                    <option value='52'>Costa Rica</option>
                                    <option value='53'>Cote DIvoire (Ivory Coast)
                                    </option>
                                    <option value='54'>Croatia (Hrvatska)</option>
                                    <option value='55'>Cuba</option>
                                    <option value='56'>Cyprus</option>
                                    <option value='57'>Czech Republic</option>
                                    <option value='58'>Denmark</option>
                                    <option value='59'>Djibouti</option>
                                    <option value='60'>Dominica</option>
                                    <option value='61'>Dominican Republic</option>
                                    <option value='62'>East Timor</option>
                                    <option value='63'>Ecuador</option>
                                    <option value='64'>Egypt</option>
                                    <option value='65'>El Salvador</option>
                                    <option value='66'>Equatorial Guinea</option>
                                    <option value='67'>Eritrea</option>
                                    <option value='68'>Estonia</option>
                                    <option value='69'>Ethiopia</option>
                                    <option value='70'>External Territories of
                                      Australia</option>
                                    <option value='71'>Falkland Islands</option>
                                    <option value='72'>Faroe Islands</option>
                                    <option value='73'>Fiji Islands</option>
                                    <option value='74'>Finland</option>
                                    <option value='75'>France</option>
                                    <option value='76'>French Guiana</option>
                                    <option value='77'>French Polynesia</option>
                                    <option value='78'>French Southern Territories
                                    </option>
                                    <option value='79'>Gabon</option>
                                    <option value='80'>Gambia The</option>
                                    <option value='81'>Georgia</option>
                                    <option value='82'>Germany</option>
                                    <option value='83'>Ghana</option>
                                    <option value='84'>Gibraltar</option>
                                    <option value='85'>Greece</option>
                                    <option value='86'>Greenland</option>
                                    <option value='87'>Grenada</option>
                                    <option value='88'>Guadeloupe</option>
                                    <option value='89'>Guam</option>
                                    <option value='90'>Guatemala</option>
                                    <option value='91'>Guernsey and Alderney
                                    </option>
                                    <option value='92'>Guinea</option>
                                    <option value='93'>Guinea-Bissau</option>
                                    <option value='94'>Guyana</option>
                                    <option value='95'>Haiti</option>
                                    <option value='96'>Heard and McDonald Islands
                                    </option>
                                    <option value='97'>Honduras</option>
                                    <option value='98'>Hong Kong S.A.R.</option>
                                    <option value='99'>Hungary</option>
                                    <option value='100'>Iceland</option>
                                    <option value='101'>India</option>
                                    <option value='102'>Indonesia</option>
                                    <option value='103'>Iran</option>
                                    <option value='104'>Iraq</option>
                                    <option value='105'>Ireland</option>
                                    <option value='106'>Israel</option>
                                    <option value='107'>Italy</option>
                                    <option value='108'>Jamaica</option>
                                    <option value='109'>Japan</option>
                                    <option value='110'>Jersey</option>
                                    <option value='111'>Jordan</option>
                                    <option value='112'>Kazakhstan</option>
                                    <option value='113'>Kenya</option>
                                    <option value='114'>Kiribati</option>
                                    <option value='115'>Korea North</option>
                                    <option value='116'>Korea South</option>
                                    <option value='117'>Kuwait</option>
                                    <option value='118'>Kyrgyzstan</option>
                                    <option value='119'>Laos</option>
                                    <option value='120'>Latvia</option>
                                    <option value='121'>Lebanon</option>
                                    <option value='122'>Lesotho</option>
                                    <option value='123'>Liberia</option>
                                    <option value='124'>Libya</option>
                                    <option value='125'>Liechtenstein</option>
                                    <option value='126'>Lithuania</option>
                                    <option value='127'>Luxembourg</option>
                                    <option value='128'>Macau S.A.R.</option>
                                    <option value='129'>Macedonia</option>
                                    <option value='130'>Madagascar</option>
                                    <option value='131'>Malawi</option>
                                    <option value='132'>Malaysia</option>
                                    <option value='133'>Maldives</option>
                                    <option value='134'>Mali</option>
                                    <option value='135'>Malta</option>
                                    <option value='136'>Man (Isle of)</option>
                                    <option value='137'>Marshall Islands</option>
                                    <option value='138'>Martinique</option>
                                    <option value='139'>Mauritania</option>
                                    <option value='140'>Mauritius</option>
                                    <option value='141'>Mayotte</option>
                                    <option value='142'>Mexico</option>
                                    <option value='143'>Micronesia</option>
                                    <option value='144'>Moldova</option>
                                    <option value='145'>Monaco</option>
                                    <option value='146'>Mongolia</option>
                                    <option value='147'>Montserrat</option>
                                    <option value='148'>Morocco</option>
                                    <option value='149'>Mozambique</option>
                                    <option value='150'>Myanmar</option>
                                    <option value='151'>Namibia</option>
                                    <option value='152'>Nauru</option>
                                    <option value='153'>Nepal</option>
                                    <option value='154'>Netherlands Antilles
                                    </option>
                                    <option value='155'>Netherlands The</option>
                                    <option value='156'>New Caledonia</option>
                                    <option value='157'>New Zealand</option>
                                    <option value='158'>Nicaragua</option>
                                    <option value='159'>Niger</option>
                                    <option value='160'>Nigeria</option>
                                    <option value='161'>Niue</option>
                                    <option value='162'>Norfolk Island</option>
                                    <option value='163'>Northern Mariana Islands
                                    </option>
                                    <option value='164'>Norway</option>
                                    <option value='165'>Oman</option>
                                    <option value='166'>Pakistan</option>
                                    <option value='167'>Palau</option>
                                    <option value='168'>Palestinian Territory
                                      Occupied</option>
                                    <option value='169'>Panama</option>
                                    <option value='170'>Papua new Guinea</option>
                                    <option value='171'>Paraguay</option>
                                    <option value='172'>Peru</option>
                                    <option value='173'>Philippines</option>
                                    <option value='174'>Pitcairn Island</option>
                                    <option value='175'>Poland</option>
                                    <option value='176'>Portugal</option>
                                    <option value='177'>Puerto Rico</option>
                                    <option value='178'>Qatar</option>
                                    <option value='179'>Reunion</option>
                                    <option value='180'>Romania</option>
                                    <option value='181'>Russia</option>
                                    <option value='182'>Rwanda</option>
                                    <option value='183'>Saint Helena</option>
                                    <option value='184'>Saint Kitts And Nevis
                                    </option>
                                    <option value='185'>Saint Lucia</option>
                                    <option value='186'>Saint Pierre and Miquelon
                                    </option>
                                    <option value='187'>Saint Vincent And The
                                      Grenadines</option>
                                    <option value='188'>Samoa</option>
                                    <option value='189'>San Marino</option>
                                    <option value='190'>Sao Tome and Principe
                                    </option>
                                    <option value='191'>Saudi Arabia</option>
                                    <option value='192'>Senegal</option>
                                    <option value='193'>Serbia</option>
                                    <option value='194'>Seychelles</option>
                                    <option value='195'>Sierra Leone</option>
                                    <option value='196'>Singapore</option>
                                    <option value='197'>Slovakia</option>
                                    <option value='198'>Slovenia</option>
                                    <option value='199'>Smaller Territories of the
                                      UK</option>
                                    <option value='200'>Solomon Islands</option>
                                    <option value='201'>Somalia</option>
                                    <option value='202'>South Africa</option>
                                    <option value='203'>South Georgia</option>
                                    <option value='204'>South Sudan</option>
                                    <option value='205'>Spain</option>
                                    <option value='206'>Sri Lanka</option>
                                    <option value='207'>Sudan</option>
                                    <option value='208'>Suriname</option>
                                    <option value='209'>Svalbard And Jan Mayen
                                      Islands</option>
                                    <option value='210'>Swaziland</option>
                                    <option value='211'>Sweden</option>
                                    <option value='212'>Switzerland</option>
                                    <option value='213'>Syria</option>
                                    <option value='214'>Taiwan</option>
                                    <option value='215'>Tajikistan</option>
                                    <option value='216'>Tanzania</option>
                                    <option value='217'>Thailand</option>
                                    <option value='218'>Togo</option>
                                    <option value='219'>Tokelau</option>
                                    <option value='220'>Tonga</option>
                                    <option value='221'>Trinidad And Tobago</option>
                                    <option value='222'>Tunisia</option>
                                    <option value='223'>Turkey</option>
                                    <option value='224'>Turkmenistan</option>
                                    <option value='225'>Turks And Caicos Islands
                                    </option>
                                    <option value='226'>Tuvalu</option>
                                    <option value='227'>Uganda</option>
                                    <option value='228'>Ukraine</option>
                                    <option value='229'>United Arab Emirates
                                    </option>
                                    <option value='230'>United Kingdom</option>
                                    <option value='232'>United States Minor Outlying
                                      Islands</option>
                                    <option value='233'>Uruguay</option>
                                    <option value='231'>USA</option>
                                    <option value='234'>Uzbekistan</option>
                                    <option value='235'>Vanuatu</option>
                                    <option value='236'>Vatican City State (Holy
                                      See)</option>
                                    <option value='237'>Venezuela</option>
                                    <option value='238'>Vietnam</option>
                                    <option value='239'>Virgin Islands (British)
                                    </option>
                                    <option value='240'>Virgin Islands (US)</option>
                                    <option value='241'>Wallis And Futuna Islands
                                    </option>
                                    <option value='242'>Western Sahara</option>
                                    <option value='243'>Yemen</option>
                                    <option value='244'>Yugoslavia</option>
                                    <option value='245'>Zambia</option>
                                    <option value='246'>Zimbabwe</option>
                                  </select> <input type="hidden" name="countryliving" id="countryliving" class="form-control" />
                                </div>


                              </div>
                            </div>



                            <div class="form-group  col-md-12">
                              <div class="row">
                                <div class="col-sm-2 col-md-2">
                                  <label class="control-label">Residing State</label>
                                </div>
                                <div class="col-sm-10 col-md-10">
                                  <div class="row">
                                    <div class="col-sm-5 col-md-5 no-padding">
                                      <select name="lststate1" style="height:81px!important;" multiple="multiple" id="select5" class="form-control" style="width:100%">
                                        <option selected="selected">Any</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-2 col-md-2 mt-35">
                                      <input name="button42" type="button" id="button42" onClick="javascript:addSrcToDestListS()" value="Add" class="btn-2 btn-default" style="width:100%"><br>
                                      <input name="button442" type="button" id="button442" onClick="javascript:deleteFromDestListS()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                    </div>
                                    <div class="col-sm-5 col-md-5 no-padding">
                                      <select name="lststate" id="lststate" style="height:81px!important;" multiple="multiple" id="select6" class="form-control" style="width:100%">
                                        <option>Any</option>
                                      </select>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group  col-md-12">
                            <div class="row">
                              <div class="col-sm-2 col-md-2">
                                <label class="control-label">Residing status</label>
                              </div>
                              <div class="col-sm-10 col-md-10">
                                <div align="left" class="">
                                  <label> <input name="rstatus" type="radio" value="Permanent resident"> Permanent
                                    resident </label>
                                  <label> <input name="rstatus" type="radio" value="Work Permit"> Work Permit </label>
                                  <label> <input name="rstatus" type="radio" value="Student Visa"> Student Visa </label>
                                  <label> <input name="rstatus" type="radio" value="Temperory Visa"> Temporary Visa
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 hidden-xs">
                                <label class="control-label"></label>
                              </div>
                              <div class="col-sm-9 col-md-9" align="left">

                                <input id="txtmstatus" name="txtmstatus" type="hidden" />
                                <input id="txtempin1" name="txtempin" type="hidden" />
                                <input id="txtmtongue" name="txtmtongue" type="hidden" />
                                <input id="txtreligion" name="txtreligion" type="hidden" />
                                <input id="txtcaste" name="txtcaste" type="hidden" />
                                <input id="txteducation" name="txteducation" type="hidden" />
                                <input id="txtstate1" name="txtstate1" type="hidden" />
                                <input id="txtsubcaste" name="txtsubcaste" type="hidden" />
                                <input id="txtcity" name="txtcity" type="hidden" />
                                <input id="txtoccupation" name="txtoccupation" type="hidden" />
                              </div>
                            </div>
                          </div>
                          <div class=" form-group row">
                            <div class="col-sm-3 col-md-3 hidden-xs">
                              &nbsp;
                            </div>
                            <div class="col-sm-9 col-md-9 " align="left">
                              <button type="submit" style="width:50%;float: left;margin-top: 14px;" class="btn btn-default" name="submit" id="btnsubmit_part" onClick="return validateFields_part()"> Set My Partner
                                Preference</button>
                            </div>

                          </div>






                        </div>



                      </div>
                      </form>
                    </div>
                  </div>
                  <!--Grid column-->

                  <!--Grid column-->

                  <!--Grid column-->

                </div>


              </div>
            </div>

            <!-- Accordion card -->
          </div>



          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx80" role="tablist" aria-multiselectable="true" style="">

                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled2">

                    <!--Options-->

                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx80" href="#collapseUnfiled2" aria-expanded="true" aria-controls="collapseUnfiled2">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b; padding: 8px; border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-star-half-empty"></i> <span>Astrological
                          Details</span><span style="float: right;">Edit</span>

                      </h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Birth Time :</b> <span> </span></p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Birth Place :</b> <span>------</span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Gan :</b> <span>------</span> </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">

                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Raasi / Moon sign :</b> <span></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Nadi :</b> <span>------</span></h6>
                              </p>
                            </div>


                          </div>
                        </div>
                      </div>

                    </a>

                  </div>


                  <div class="col-md-12">
                    <!-- Card body -->
                    <div id="collapseUnfiled2" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled2" data-parent="#accordionEx80">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">
                          <!--Grid row-->
                          <div class="row">
                            <div class="col-md-12">
                              <form name="form-editastro" class="bookatable-form1" id="form-editastro">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <label class="control-label">Birth
                                        Time</label>
                                    </div>
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <select name="hh" size="1" id="hh" class="required form-control">
                                        <option selected="selected">HH</option>
                                        <option value='00'>00</option>
                                        <option value='01'>01</option>
                                        <option value='02'>02</option>
                                        <option value='03'>03</option>
                                        <option value='04'>04</option>
                                        <option value='05'>05</option>
                                        <option value='06'>06</option>
                                        <option value='07'>07</option>
                                        <option value='08'>08</option>
                                        <option value='09'>09</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <select name="mm" size="1" id="mm" class="required form-control">
                                        <option selected="selected">MM</option>
                                        <option value='00'>00</option>
                                        <option value='01'>01</option>
                                        <option value='02'>02</option>
                                        <option value='03'>03</option>
                                        <option value='04'>04</option>
                                        <option value='05'>05</option>
                                        <option value='06'>06</option>
                                        <option value='07'>07</option>
                                        <option value='08'>08</option>
                                        <option value='09'>09</option>
                                        <option value='10'>10</option>
                                        <option value='11'>11</option>
                                        <option value='12'>12</option>
                                        <option value='13'>13</option>
                                        <option value='14'>14</option>
                                        <option value='15'>15</option>
                                        <option value='16'>16</option>
                                        <option value='17'>17</option>
                                        <option value='18'>18</option>
                                        <option value='19'>19</option>
                                        <option value='20'>20</option>
                                        <option value='21'>21</option>
                                        <option value='22'>22</option>
                                        <option value='23'>23</option>
                                        <option value='24'>24</option>
                                        <option value='25'>25</option>
                                        <option value='26'>26</option>
                                        <option value='27'>27</option>
                                        <option value='28'>28</option>
                                        <option value='29'>29</option>
                                        <option value='30'>30</option>
                                        <option value='31'>31</option>
                                        <option value='32'>32</option>
                                        <option value='33'>33</option>
                                        <option value='34'>34</option>
                                        <option value='35'>35</option>
                                        <option value='36'>36</option>
                                        <option value='37'>37</option>
                                        <option value='38'>38</option>
                                        <option value='39'>39</option>
                                        <option value='40'>40</option>
                                        <option value='41'>41</option>
                                        <option value='42'>42</option>
                                        <option value='43'>43</option>
                                        <option value='44'>44</option>
                                        <option value='45'>45</option>
                                        <option value='46'>46</option>
                                        <option value='47'>47</option>
                                        <option value='48'>48</option>
                                        <option value='49'>49</option>
                                        <option value='50'>50</option>
                                        <option value='51'>51</option>
                                        <option value='52'>52</option>
                                        <option value='53'>53</option>
                                        <option value='54'>54</option>
                                        <option value='55'>55</option>
                                        <option value='56'>56</option>
                                        <option value='57'>57</option>
                                        <option value='58'>58</option>
                                        <option value='59'>59</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <select name="ampm" size="1" id="ampm" class="required combo form-control">
                                        <option value="am">AM</option>
                                        <option value="pm">PM</option>
                                      </select>
                                      <span class="err_msg" id="errampm"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Birth
                                        Place</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <input name="txtbirthplace" type="text" id="txtbirthplace" class=" form-control description" value="" maxlength="130">
                                      <input name="txtbirthplace2" type="hidden" id="txtbirthplace2" class="form-control" value="" maxlength="130">
                                      <!--                                                    <span class="err_msg" id="errtxtbirthplace"></span>-->
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Gan</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <input name="gan" type="text" class="form-control description" id="gan" value="" maxlength="120">
                                      <input name="gan2" type="hidden" class="form-control" id="gan2" value="" maxlength="120">

                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Nadi</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <input name="nadi" type="text" class="form-control description" value="" id="nadi" size="15" maxlength="20">
                                      <input name="nadi2" type="hidden" class="form-control" value="" id="nadi2" size="15" maxlength="20">
                                      <span class="err_msg" id="errnadi"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Gotra</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <input name="txtgotra" type="text" class="form-control description" value="" maxlength="50">
                                      <input name="txtgotra2" type="hidden" class="form-control" value="" maxlength="50">
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Star</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <select name="star" id="star" class=" form-control">
                                        <option selected="selected" value="">-
                                          Optional - </option>
                                        <option>Anuradha / Anusham / Anizham
                                        </option>
                                        <option>Ardra / Thiruvathira </option>
                                        <option>Ashlesha / Ayilyam </option>
                                        <option>Ashwini / Ashwathi </option>
                                        <option>Bharani </option>
                                        <option>Chitra / Chitha </option>
                                        <option>Dhanista / Avittam </option>
                                        <option>Hastha / Atham </option>
                                        <option>Jyesta / Kettai </option>
                                        <option>Krithika / Karthika </option>
                                        <option>Makha / Magam </option>
                                        <option>Moolam / Moola </option>
                                        <option>Mrigasira / Makayiram </option>
                                        <option>Poorvabadrapada / Puratathi
                                        </option>
                                        <option>Poorvapalguni / Puram / Pubbhe
                                        </option>
                                        <option>Poorvashada / Pooradam </option>

                                        <option>Punarvasu / Punarpusam </option>
                                        <option>Pushya / Poosam / Pooyam
                                        </option>
                                        <option>Revathi </option>
                                        <option>Rohini </option>
                                        <option>Shatataraka / Sadayam /
                                          Satabishek </option>
                                        <option>Shravan / Thiruvonam </option>
                                        <option>Swati / Chothi </option>
                                        <option>Uttarabadrapada / Uthratadhi
                                        </option>
                                        <option>Uttarapalguni / Uthram </option>
                                        <option>Uttarashada / Uthradam </option>
                                        <option>Vishaka / Vishakam </option>
                                      </select>
                                      <span class="err_msg" id="errstar"></span>
                                    </div>
                                  </div>
                                </div>



                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Raasi / Moon
                                        sign</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <select name="rasi" id="rasi_dd" class=" form-control">
                                        <option value="">- Optional -</option>
                                        <option>Dhanu (Sagittarius)</option>
                                        <option>Kanya (Virgo)</option>
                                        <option>Kark (Cancer)</option>
                                        <option>Kumbh (Aquarius)</option>
                                        <option>Makar (Capricorn)</option>
                                        <option>Meen (Pisces)</option>
                                        <option>Mesh (Aries)</option>
                                        <option>Mithun (Gemini)</option>
                                        <option>Simha (Leo)</option>
                                        <option>Tula (Libra)</option>
                                        <option>Vrishabh (Taurus)</option>
                                        <option>Vrishchik (Scorpio)</option>
                                      </select>
                                      <span class="err_msg" id="errrasi"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Horoscope
                                        match</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <label style="text-align:left;padding-bottom:20px">
                                        <input type="radio" class='required' name="horo" value="Required">
                                        Required
                                        <input type="radio" class='required' name="horo" value="Does not Matter">
                                        Doesn't matter</label>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                    </div>
                                    <div class="col-sm-9 col-md-9" align="left" style="margin-bottom: 1%;">
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Horoscope file
                                        :</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <input type="file" name="fileimg" id="fileimg" class="form-control" accept="application/pdf, image/*" />
                                      <p align="left"> ( only pdf or jpg format)
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label"></label>
                                    </div>
                                    <div class="col-sm-12 col-md-9" align="left">

                                      <button type="submit" class="btn btn-default btn-style-two" name="submit" id="btnsubmit5">
                                        Update</button>

                                    </div>
                                  </div>
                                </div>





                              </form>
                            </div>
                          </div>

                        </div>
                        <!--Grid row-->

                      </div>

                    </div>
                  </div>
                </div>
              </div>

              <!-- Accordion card -->
            </div>
          </div>



          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx81" role="tablist" aria-multiselectable="true" style="">
                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled3">

                    <!--Options-->

                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx81" href="#collapseUnfiled3" aria-expanded="true" aria-controls="collapseUnfiled3">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b; padding: 8px;border-bottom: 1px solid #dcd2d7;">
                        <i class="fa fa-file-pdf-o"></i> <span>Upload Document</span><span style="float: right;">Edit</span>

                      </h4><br>


                    </a>

                  </div>


                  <div class="col-md-12">

                    <!-- Card body -->
                    <div id="collapseUnfiled3" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled3" data-parent="#accordionEx81">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui">

                          <!--Grid row-->
                          <div class="row">
                            <div class="col-md-12">


                              <p align="right" class="text-danger" style="margin-right: 18px;"> Document size must be less
                                than 1 Mb.</p>
                              <form id="msform99" name="msform99" enctype="multipart/form-data">

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Select Document
                                        Type<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <select name="ddldoctype" id="ddlphototype1" class="required form-control combo">
                                        <option value="">--- Select Document
                                          Type ---</option>
                                        <option value="Certificate 1">
                                          Certificate 1</option>
                                        <option value="Certificate 2">
                                          Certificate 2</option>
                                        <option value="Certificate 3">
                                          Certificate 3</option>
                                        <option value="ID Proof">ID Proof
                                        </option>
                                        <option value="Address Proof">Address
                                          Proof</option>
                                      </select>
                                      <span class="err_msg" id="errddlphototype1"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Select
                                        File<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <input type="file" name="fileupload" id="fileupload1" class="required form-control combo" accept="application/pdf, image/*" required />
                                      <span class="err_msg" id="errfileupload1"></span>
                                      <p>Select only image/pdf file and size less
                                        then 1 MB.</p>
                                    </div>
                                  </div>
                                </div>


                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label"></label>
                                    </div>
                                    <div class="col-sm-12 col-md-9" align="left">


                                      <button class="btn-default btn btn-style-two " name="btnsubmit" id="btnsubmit99" type="submit" onClick="return validateFields99()">Upload
                                        Document</button>
                                    </div>
                                  </div>
                                </div>





                              </form>

                            </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->

                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Top Table UI-->

                      <!-- Table responsive wrapper -->

                    </div>
                  </div>
                </div>
              </div>

              <!-- Accordion card -->
            </div>

          </div>



          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx93" role="tablist" aria-multiselectable="true" style="">

                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled93">

                    <!--Options-->

                    <!-- Heading -->
                    <a data-toggle="collapse" data-parent="#accordionEx93" href="#collapseUnfiled93" aria-expanded="true" aria-controls="collapseUnfiled93">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b;padding: 8px; border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-users"></i> <span>References</span><span style="float: right;">Edit</span>

                      </h4><br>
                      <div class="row">
                        <div class="col-md-6">
                          <p style=" text-align: center;"><b>Reference 1</b></p><br>
                          <p> </p>
                        </div>
                        <div class="col-md-6">
                          <p style=" text-align: center;"><b>Reference 2</b></p><br>
                          <p> </p>
                        </div>
                      </div>



                    </a>

                  </div>


                  <div class="col-md-12">

                    <!-- Card body -->
                    <div id="collapseUnfiled93" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled93" data-parent="#accordionEx93">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">

                          <!--Grid row-->
                          <div class="row">
                            <div class="col-md-12">
                              <form action="#" method="post" style="height:auto" name="form-reference" class="bookatable-form1" id="form-reference">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Reference
                                        1<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <textarea name="ref1" id="ref1" class="required form-control description"></textarea>
                                      <input name="ref12" type="hidden" id="ref12" class="form-control" value="">
                                      <span class="err_msg" id="errref1"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Reference
                                        2</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <textarea name="ref2" id="ref2" class=" form-control description"></textarea>
                                      <input name="ref22" type="hidden" id="ref22" class="form-control" value="">
                                      <span class="err_msg" id="errref2"></span>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label"></label>
                                    </div>
                                    <div class="col-sm-12 col-md-9" align="left">

                                      <button type="submit" class="btn btn-default btn-style-two" name="submit" id="btnsubmit13">
                                        Update</button>

                                    </div>
                                  </div>
                                </div>

                              </form>
                            </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->

                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Top Table UI-->

                      <!-- Table responsive wrapper -->

                    </div>
                  </div>
                </div>
              </div>

              <!-- Accordion card -->
            </div>
          </div>



          <div class="row">
            <div class="col-md-12" style="margin-bottom : 1rem;">
              <!--Accordion wrapper-->
              <div class="accordion md-accordion accordion-blocks" id="accordionEx97" role="tablist" aria-multiselectable="true" style="">

                <div class="card">

                  <!-- Card header -->
                  <div class="card-header" role="tab" id="headingUnfiled97">
                    <a data-toggle="collapse" data-parent="#accordionEx97" href="#collapseUnfiled97" aria-expanded="true" aria-controls="collapseUnfiled97">
                      <h4 class="mt-1 mb-0" style="color: #8a6d3b;padding: 8px;border-bottom: 1px solid #8a6d3b;">
                        <i class="fa fa-gears"></i> <span>Change Password</span><span style="float: right;">Edit</span>

                      </h4><br>
                    </a>

                  </div>


                  <div class="col-md-12">

                    <!-- Card body -->
                    <div id="collapseUnfiled97" class="collapse" role="tabpanel" aria-labelledby="headingUnfiled97" data-parent="#accordionEx97">
                      <div class="card-body">

                        <!--Top Table UI-->
                        <div class="table-ui ">

                          <!--Grid row-->
                          <div class="row">
                            <div class="col-md-12">


                              <form id="form-changepassword" class="bookatable-form1" method="post" style="height:auto">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <label class="control-label">Old Password
                                        <span class="text-danger">*</span>
                                      </label>
                                    </div>
                                    <div class="col-sm-9 col-md-9 mb-15">
                                      <input type="password" name="txtoldpass" id="txtoldpass" maxlength="25" class="required pass form-control password" />
                                      <span class="err_msg" id="errtxtoldpass"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <label class="control-label">New Password
                                        <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9 mb-15">
                                      <input type="password" name="txtpass" id="txtpass" maxlength="25" class="required password pass space form-control password" />
                                      <span class="err_msg" id="errtxtpass"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15 mb-15">
                                      <label class="control-label">Confirm New
                                        Password <span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9 mb-15">
                                      <input type="password" name="txtcpass" id="txtcpass" maxlength="25" class="required password pass space form-control password" />
                                      <span class="err_msg" id="errtxtcpass"></span>
                                    </div>
                                  </div>
                                </div>
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15">
                                    </div>
                                    <div class="col-sm-5 col-md-5 mb-15">
                                      <input type="submit" class="btn btn-default" onclick="return passcheck()" name="submit" id="btnsubmit33" style="float:left" value="Update">
                                    </div>
                                  </div>
                                </div>
                              </form>
                            </div>
                          </div>
                          <!--Grid column-->

                          <!--Grid column-->

                          <!--Grid column-->

                        </div>
                        <!--Grid row-->

                      </div>
                      <!--Top Table UI-->

                      <!-- Table responsive wrapper -->

                    </div>

                  </div>
                </div>
              </div>

              <!-- Accordion card -->
            </div>
          </div>
        </div>
      </div>

  </section>
  <div class="modal fade" id="myModal" tabindex=-1 role=dialog aria-labelledby=myLargeModalLabel aria-hidden=true>
    <div class="modal-dialog ">
      <div class=modal-content>
        <div class=modal-header>

          <h3 class="modal-title package-title" id=myModalLabel>Photo Protected(100% Secure )</h3>
          <button type=button class=close data-dismiss=modal aria-hidden=true> &times;</button>
        </div>
        <div class="modal-body" style=" background-color: #fff">

          <div class="col-sm-12  col-md-12 ">
            <form class="form-horizontal" id="protectphoto" name="protectphoto" method="post">
              <p>&nbsp;</p>
              <p>&nbsp;</p>
              <div class=form-group>
                <div class="row">
                  <label for="inputPassword3" class="col-sm-3 control-label">Password <span class=form-required title="This field is required.">*</span></label>
                  <div class=col-sm-9>
                    <input type="text" class="form-control spacerequired password" id="txtphotopass" name="txtphotopass" placeholder="Password" value="" maxlength="30">
                    <span class=err_msg id=errtxtphotopass></span>
                  </div>
                </div>
              </div>
              <div class=form-group>
                <div class="row">
                  <div class="form-actions col-sm-offset-3 col-sm-3">&nbsp;</div>
                  <div class="form-actions col-sm-offset-3 col-sm-3">
                    <input type="submit" id="btnsubmit" onClick="return validate();" name="submit" value="Submit" class="btn btn-success">
                  </div>

                  <div class="form-actions  col-sm-3">
                    <input type="submit" id="btndel" name="btndel" value="Delete Password" class="btn btn-danger">
                  </div>
                </div>
              </div>
              <p>&nbsp;</p>
              <p>&nbsp;</p>
            </form>
          </div>

        </div>
        <div class=modal-footer style=" text-align: center;">
          <p id="sc" style=" color: green;"></p>
          <p id="er" style=" color: green;"></p>
        </div>
      </div>
    </div>
  </div>
  <footer class="ftco-footer ftco-bg-dark ftco-section">

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

              Copyright &copy;
              <script>
                document.write(new Date().getFullYear());
              </script> All rights reserved
            </p>
          </div>
        </div>
      </div>
    </footer>

    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-migrate-3.0.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/tabs.js"></script>
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



    </body>

    </html>