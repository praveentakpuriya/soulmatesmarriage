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
                        <img src="<?php if (isset($documents[0]->main_photo)) echo base_url('Documents/document/' . $documents[0]->main_photo);
                                  else echo 'assets/img/user.webp'; ?>" style="width: 100%;height: -webkit-fill-available;" alt="">

                        <div class="staff-title plus"> <span class="plus"></span>
                          <h4>
                            <a class="popup-with-zoom-anim btn btn-danger " onclick="protectPicture('<?= $data[0]->user_id ?>')">Protect
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

                                  <form name="form-editastro" action="UpdateProfile/uploadDocument" method="POST" enctype="multipart/form-data" class="bookatable-form1" id="form-editastro">

                                    <div class="form-group">
                                      <div class="row">
                                        <div class="col-sm-5 col-md-5">
                                          <label class="control-label">Select
                                            Photo Type<span class="text-danger">*</span></label>
                                        </div>
                                        <div class="col-sm-7 col-md-7">
                                          <select name="document_name" id="ddlphototype" require class="form-control combo">
                                            <option value="0">--- Select
                                              Photo Type ---</option>
                                            <option value="main_photo">Main
                                              Photo</option>
                                            <option value="pic1">Photo 1
                                            </option>
                                            <option value="pic2">Photo 2
                                            </option>
                                            <option value="pic3">Photo 3
                                            </option>
                                            <option value="pic4">Photo 4
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
                                          <input type="file" name="document" id="fileupload" class="required form-control image" required='true' accept="image/jpg, image/jpeg" />
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
                                          <button class="btn btn-default btn-mrg btn-default" name="btnsubmit" id="btnsubmit47" type="submit" onClick="return validateFields47()">Upload
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
                                    <option value="<?php if (isset($caste[0]->id)) echo $caste[0]->id; ?>"><?php if (isset($caste[0]->name)) echo $caste[0]->name; ?></option>
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
                            <p class="para1"><b>Education* :</b> <span><?php if (isset($professional[0]->education)) echo $professional[0]->education;
                                                                        else echo "-----" ?></span> </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1">
                              <b>Educational Details :</b> <span><?php if (isset($professional[0]->education_details)) echo $professional[0]->education_details;
                                                                  else echo "-----" ?></span>
                            </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Occupation* :</b> <span><?php if (isset($professional[0]->occupation)) echo $professional[0]->occupation;
                                                                        else echo "-----" ?></span> </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Occupation detail :</b> <span><?php if (isset($professional[0]->occupation_details)) echo $professional[0]->occupation_details;
                                                                              else echo "-----" ?></span>
                            </p>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Employed in :</b> <span><?php if (isset($professional[0]->employed_in)) echo $professional[0]->employed_in;
                                                                        else echo "-----" ?></span>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Salary/Income Per Year* :</b> <span><?php if (isset($professional[0]->salary)) echo $professional[0]->salary;
                                                                                    else echo "-----" ?></span> </p>
                          </div>
                          <div class="col-md-12 col-sm-4 col-xs-6">
                            <p class="para1"><b>Actual Income* :</b> <span><?php if (isset($professional[0]->total_income)) echo $professional[0]->total_income;
                                                                            else echo "-----" ?></span> </p>
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


                          <form id="form-editcontactdetails" name="form-editcontactdetails" action="UpdateProfile/editProfessionalDetails" method="post" class="bookatable-form1" style="height:auto">
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label class="control-label">Education<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <select name='education' onchange='ddchange(this.value);newddchange(this);' id='cmbedu' class='required form-control combo ' style='0'>
                                  <option value='0' selected='selected'>--- Select
                                    Education ---</option>
                                  <option value='10+2/Senior Secondary School' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "10+2/Senior Secondary School") echo "selected" ?>>
                                    10+2/Senior Secondary School</option>
                                  <option value='B.A.' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.A.") echo "selected" ?>>B.A.</option>
                                  <option value='B.Arch' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.Arch") echo "selected" ?>>B.Arch</option>
                                  <option value='B.Com' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.Com") echo "selected" ?>>B.Com</option>
                                  <option value='B.Ed' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.Ed") echo "selected" ?>>B.Ed</option>
                                  <option value='B.Pharm' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.Pharm") echo "selected" ?>>B.Pharm</option>
                                  <option value='B.Sc' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.Sc") echo "selected" ?>>B.Sc</option>
                                  <option value='B.V.Sc.' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "B.V.Sc.") echo "selected" ?>>B.V.Sc.</option>
                                  <option value='BA LLB' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BA LLB") echo "selected" ?>>BA LLB</option>
                                  <option value='Bachelor' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Bachelor") echo "selected" ?>>Bachelor</option>
                                  <option value='Bachelor of Physiotherapy' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Bachelor of Physiotherapy") echo "selected" ?>>Bachelor
                                    of Physiotherapy</option>
                                  <option value='BAMS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BAMS") echo "selected" ?>>BAMS</option>
                                  <option value='BBA' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BBA") echo "selected" ?>>BBA</option>
                                  <option value='BCA' <?php if (isset($professional[0]->education)) if ($professional[0]->education == 'BCA') echo "selected" ?>>BCA</option>
                                  <option value='BDS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BDS") echo "selected" ?>>BDS</option>
                                  <option value='BE B.Tech' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BE B.Tech") echo "selected" ?>>BE B.Tech</option>
                                  <option value='BHM' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BHM") echo "selected" ?>>BHM</option>
                                  <option value='BHMS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "BHMS") echo "selected" ?>>BHMS</option>
                                  <option value='CA' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "CA") echo "selected" ?>>CA</option>
                                  <option value='CS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "CS") echo "selected" ?>>CS</option>
                                  <option value='Diploma' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Diploma") echo "selected" ?>>Diploma</option>
                                  <option value='High school' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "High school") echo "selected" ?>>High school</option>
                                  <option value='ICWA' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "ICWA") echo "selected" ?>>ICWA</option>
                                  <option value='Integrated PG' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Integrated PG") echo "selected" ?>>Integrated PG</option>
                                  <option value='Intermediate' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Intermediate") echo "selected" ?>>Intermediate</option>
                                  <option value='LLB' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "LLB") echo "selected" ?>>LLB</option>
                                  <option value='M.Arch' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Arch") echo "selected" ?>>M.Arch</option>
                                  <option value='M.Com' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Com") echo "selected" ?>>M.Com</option>
                                  <option value='M.Ed' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Ed") echo "selected" ?>>M.Ed</option>
                                  <option value='M.Pharm' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Pharm") echo "selected" ?>>M.Pharm</option>
                                  <option value='M.Phil' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Phil") echo "selected" ?>>M.Phil</option>
                                  <option value='M.Sc<?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Sc") echo "selected" ?>'>M.Sc</option>
                                  <option value='M.Tech' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.Tech") echo "selected" ?>>M.Tech</option>
                                  <option value='M.V.Sc.' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "M.V.Sc.") echo "selected" ?>>M.V.Sc.</option>
                                  <option value='MA' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MA") echo "selected" ?>>MA</option>
                                  <option value='Master of Fine Arts' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Master of Fine Arts") echo "selected" ?>>Master of Fine
                                    Arts</option>
                                  <option value='Master of Physiotherapy' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Master of Physiotherapy") echo "selected" ?>>Master of
                                    Physiotherapy</option>
                                  <option value='Masters' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Masters") echo "selected" ?>>Masters</option>
                                  <option value='MBA PGDM' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MBA PGDM") echo "selected" ?>>MBA PGDM</option>
                                  <option value='MBA PGDM part time' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MBA PGDM part time") echo "selected" ?>>MBA PGDM part
                                    time</option>
                                  <option value='MBBS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MBBS") echo "selected" ?>>MBBS</option>
                                  <option value='MCA PGDCA' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MCA PGDCA") echo "selected" ?>>MCA PGDCA</option>
                                  <option value='MCA PGDCA part time' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MCA PGDCA part time") echo "selected" ?>>MCA PGDCA part
                                    time</option>
                                  <option value='MD' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MD") echo "selected" ?>>MD</option>
                                  <option value='MD MS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MD MS") echo "selected" ?>>MD MS</option>
                                  <option value='MDS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MDS") echo "selected" ?>>MDS</option>
                                  <option value='ME M.Tech' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "ME M.Tech") echo "selected" ?>>ME M.Tech</option>
                                  <option value='ML LLM' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "ML LLM") echo "selected" ?>>ML LLM</option>
                                  <option value='MS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MS") echo "selected" ?>>MS</option>
                                  <option value='MS' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "MS") echo "selected" ?>>MS</option>
                                  <option value='Others' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Others") echo "selected" ?>>Others</option>
                                  <option value='PGDBM' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "PGDBM") echo "selected" ?>>PGDBM</option>
                                  <option value='PhD doctorate' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "PhD doctorate") echo "selected" ?>>PhD doctorate</option>
                                  <option value='Post graduation' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Post graduation") echo "selected" ?>>Post graduation
                                  </option>
                                  <option value='Undergraduate' <?php if (isset($professional[0]->education)) if ($professional[0]->education == "Undergraduate") echo "selected" ?>>Undergraduate</option>
                                </select> <span class="err_msg" id="errcmbedu"></span>
                              </div>

                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputreligion" class="control-label">Educational Details</label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <input class="form-control forminput description" type="text" size="23" name="education_details" value="<?php if (isset($professional[0]->education_details)) echo $professional[0]->education_details;
                                                                                                                                        else echo "-----" ?>">
                                <span class="err_msg" id="errtxtedu"></span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputCaste" class="control-label">Occupation<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <select name='occupation' onchange='ddchange(this.value);newddchange(this);' id='cmboccu' class='required form-control combo' style='0'>
                                  <option value='0' selected='selected'>--- Select
                                    Occupation ---</option>
                                  <option value='Accounts' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Accounts") echo "selected" ?>>Accounts</option>
                                  <option value='Administrative Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Administrative Professional") echo "selected" ?>>
                                    Administrative Professional</option>
                                  <option value='Advertising' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Advertising") echo "selected" ?>>Advertising</option>
                                  <option value='Agriculture' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Agriculture") echo "selected" ?>>Agriculture</option>
                                  <option value='Air Hostess' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Air Hostess") echo "selected" ?>>Air Hostess</option>
                                  <option value='Airline Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Airline Professional") echo "selected" ?>>Airline
                                    Professional</option>
                                  <option value='Architect' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Architect") echo "selected" ?>>Architect</option>
                                  <option value='Arts & Craftsman' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Arts & Craftsman") echo "selected" ?>>Arts &amp;
                                    Craftsman</option>
                                  <option value='Auditor' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Auditor") echo "selected" ?>>Auditor</option>
                                  <option value='Banking Service Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Banking Service Professional") echo "selected" ?>>Banking
                                    Service Professional</option>
                                  <option value='Beautician' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Beautician") echo "selected" ?>>Beautician</option>
                                  <option value='Business' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Business") echo "selected" ?>>Business</option>
                                  <option value='CEO / President/Director/Chairman' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "CEO / President/Director/Chairman") echo "selected" ?>>
                                    CEO / President/Director/Chairman</option>
                                  <option value='Chartered Accountant' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Chartered Accountant") echo "selected" ?>>Chartered
                                    Accountant</option>
                                  <option value='Clerk' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Clerk") echo "selected" ?>>Clerk</option>
                                  <option value='Company Secretary' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Company Secretary") echo "selected" ?>>Company Secretary
                                  </option>
                                  <option value='Consultant' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Consultant") echo "selected" ?>>Consultant</option>
                                  <option value='Cost Accountant' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Cost Accountant") echo "selected" ?>>Cost Accountant
                                  </option>
                                  <option value='Customer Care Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Customer Care Professional") echo "selected" ?>>Customer
                                    Care Professional</option>
                                  <option value='Doctor' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Doctor") echo "selected" ?>>Doctor</option>
                                  <option value='Education Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Education Professional") echo "selected" ?>>Education
                                    Professional</option>
                                  <option value='Engineer - IT' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Engineer - IT") echo "selected" ?>>Engineer - IT</option>
                                  <option value='Engineer - Non IT' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Engineer - Non IT") echo "selected" ?>>Engineer - Non IT
                                  </option>
                                  <option value='Entertainment Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Entertainment Professional") echo "selected" ?>>
                                    Entertainment Professional</option>
                                  <option value='Executive' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Executive") echo "selected" ?>>Executive</option>
                                  <option value='Farming Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Farming Professional") echo "selected" ?>>Farming
                                    Professional</option>
                                  <option value='Fashion Designer' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Fashion Designer") echo "selected" ?>>Fashion Designer
                                  </option>
                                  <option value='Finance Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Finance Professional") echo "selected" ?>>Finance
                                    Professional</option>
                                  <option value='Hardware Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Hardware Professional") echo "selected" ?>>Hardware
                                    Professional</option>
                                  <option value='Health Care Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Health Care Professional") echo "selected" ?>>Health Care
                                    Professional</option>
                                  <option value='Hotel / Hospitality Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Hotel / Hospitality Professional") echo "selected" ?>>
                                    Hotel / Hospitality Professional</option>
                                  <option value='Interior Designer' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Interior Designer") echo "selected" ?>>Interior Designer
                                  </option>
                                  <option value='Journalist' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Journalist") echo "selected" ?>>Journalist</option>
                                  <option value='Lawyer' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Lawyer") echo "selected" ?>>Lawyer
                                  </option>
                                  <option value='Lecturer' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Lecturer") echo "selected" ?>>Lecturer</option>
                                  <option value='Legal Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Legal Professional") echo "selected" ?>>Legal
                                    Professional</option>
                                  <option value='Manager' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Manager") echo "selected" ?>>Manager</option>
                                  <option value='Mariner / Merchant Navy' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "") echo "selected" ?>>Mariner /
                                    Merchant Navy</option>
                                  <option value='Marketing Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Marketing Professional") echo "selected" ?>>Marketing
                                    Professional</option>
                                  <option value='Media Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Media Professional") echo "selected" ?>>Media
                                    Professional</option>
                                  <option value='Not Working' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Not Working") echo "selected" ?>>Not Working</option>
                                  <option value='Nurse' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Nurse") echo "selected" ?>>Nurse</option>
                                  <option value='Officer' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Officer") echo "selected" ?>>Officer</option>
                                  <option value='Others' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Others") echo "selected" ?>>Others</option>
                                  <option value='Paramedical Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Paramedical Professional") echo "selected" ?>>Paramedical
                                    Professional</option>
                                  <option value='Pilot' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Pilot") echo "selected" ?>>Pilot</option>
                                  <option value='PR Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "PR Professional") echo "selected" ?>>PR Professional
                                  </option>
                                  <option value='Professor' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Professor") echo "selected" ?>>Professor</option>
                                  <option value='Researcher' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Researcher") echo "selected" ?>>Researcher</option>
                                  <option value='Sales Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Sales Professional") echo "selected" ?>>Sales
                                    Professional</option>
                                  <option value='Scientist' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Scientist") echo "selected" ?>>Scientist</option>
                                  <option value='Social Worker' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "") echo "selected" ?>>Social Worker</option>
                                  <option value='Software Professional' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Software Professional") echo "selected" ?>>Software
                                    Professional</option>
                                  <option value='Sportsman' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Sportsman") echo "selected" ?>>Sportsman</option>
                                  <option value='Supervisors' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Supervisors") echo "selected" ?>>Supervisors</option>
                                  <option value='Teaching / Academician' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Teaching / Academician") echo "selected" ?>>Teaching /
                                    Academician</option>
                                  <option value='Technician' <?php if (isset($professional[0]->occupation)) if ($professional[0]->occupation == "Technician") echo "selected" ?>>Technician</option>
                                </select> <span class="err_msg" id="errcmboccu"></span>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label for="inputcastenobar" class="control-label">Occupation detail</label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <div class="controls_holder space ">
                                  <input class="form-control forminput description" type="text" size="30" name="occupation_details" value="<?php if (isset($professional[0]->occupation_details)) echo $professional[0]->occupation_details;
                                                                                                                                            else echo "-----" ?>">
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
                                  <input name="employedin" type="radio" value="Government" <?php if (isset($professional[0]->employed_in)) if ($professional[0]->employed_in == "Government") echo "checked" ?> />Government</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Private" <?php if (isset($professional[0]->employed_in)) if ($professional[0]->employed_in == "Private") echo "checked" ?> />Private</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Business" <?php if (isset($professional[0]->employed_in)) if ($professional[0]->employed_in == "Business") echo "checked" ?> />Business</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Defence" <?php if (isset($professional[0]->employed_in)) if ($professional[0]->employed_in == "Defence") echo "checked" ?> />Defence</label>
                                <label style="text-align:left;padding-bottom:20px">
                                  <input type="radio" name="employedin" value="Not working" <?php if (isset($professional[0]->employed_in)) if ($professional[0]->employed_in == "Not working") echo "checked" ?> />Not working </label>
                              </div>
                            </div>
                            <div class="form-group row">
                              <div class="col-sm-3 col-md-3 mb-15">
                                <label class="control-label">Salary/Income Per Year<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 mb-15">
                                <div class="controls_holder space">
                                  <select name='salary' onchange='ddchange(this.value);newddchange(this);' id='ddlincome' class='required combo form-control' style=''>
                                    <option value='0' selected='selected'>--- Select
                                      Income ---</option>
                                    <option value='Nill'>Nill</option>
                                    <option value='Rs. 0 - 50,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 0 - 50,000") echo "selected" ?>>Rs. 0 - 50,000
                                    </option>
                                    <option value='Rs. 50,001 - 1,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 50,001 - 1,00,000") echo "selected" ?>>Rs. 50,001
                                      - 1,00,000</option>
                                    <option value='Rs. 1,00,001 - 2,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 1,00,001 - 2,00,000") echo "selected" ?>>Rs.
                                      1,00,001 - 2,00,000</option>
                                    <option value='Rs. 2,00,001 - 3,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 2,00,001 - 3,00,000") echo "selected" ?>>Rs.
                                      2,00,001 - 3,00,000</option>
                                    <option value='Rs. 3,00,001 - 4,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 3,00,001 - 4,00,000") echo "selected" ?>>Rs.
                                      3,00,001 - 4,00,000</option>
                                    <option value='Rs. 4,00,001 - 5,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 4,00,001 - 5,00,000") echo "selected" ?>>Rs.
                                      4,00,001 - 5,00,000</option>
                                    <option value='Rs. 5,00,001 - 7,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 5,00,001 - 7,00,000") echo "selected" ?>>Rs. 5,00,001 - 7,00,000
                                    </option>
                                    <option value='Rs. 7,00,001 - 10,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 7,00,001 - 10,00,000") echo "selected" ?>>Rs.
                                      7,00,001 - 10,00,000</option>
                                    <option value='Rs. 10,00,001 - 15,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 10,00,001 - 15,00,000") echo "selected" ?>>Rs.
                                      10,00,001 - 15,00,000</option>
                                    <option value='Rs. 15,00,001 - 20,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 15,00,001 - 20,00,000") echo "selected" ?>>Rs.
                                      15,00,001 - 20,00,000</option>
                                    <option value='Rs. 20,00,001 - 30,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 20,00,001 - 30,00,000") echo "selected" ?>>Rs.
                                      20,00,001 - 30,00,000</option>
                                    <option value='Rs. 30,00,001 - 40,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 30,00,001 - 40,00,000") echo "selected" ?>>Rs.
                                      30,00,001 - 40,00,000</option>
                                    <option value='Rs. 40,00,001 - 50,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 40,00,001 - 50,00,000") echo "selected" ?>>Rs.
                                      40,00,001 - 50,00,000</option>
                                    <option value='Rs. 50,00,001 - 75,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 50,00,001 - 75,00,000") echo "selected" ?>>Rs.
                                      50,00,001 - 75,00,000</option>
                                    <option value='Rs. 75,00,001 - 1,00,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 75,00,001 - 1,00,00,000") echo "selected" ?>>Rs.
                                      75,00,001 - 1,00,00,000</option>
                                    <option value='Rs. 1,00,00,001 Above' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Rs. 1,00,00,001 Above") echo "selected" ?>>Rs.
                                      1,00,00,001 Above</option>
                                    <option value='under $ 25,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "under $ 25,000") echo "selected" ?>>under $ 25,000
                                    </option>
                                    <option value='$ 25,001 - 50,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "$ 25,001 - 50,000") echo "selected" ?>>$ 25,001 -
                                      50,000</option>
                                    <option value='$ 50,001 - 75,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "$ 50,001 - 75,000") echo "selected" ?>>$ 50,001 -
                                      75,000</option>
                                    <option value='$ 75,001 - 1,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "$ 75,001 - 1,00,000") echo "selected" ?>>$ 75,001 -
                                      1,00,000</option>
                                    <option value='$ 1,00,001 - 1,50,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "$ 1,00,001 - 1,50,000") echo "selected" ?>>$ 1,00,001
                                      - 1,50,000</option>
                                    <option value='$ 1,50,001 - 2,00,000' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "Technician") echo "selected" ?>>$ 1,50,001
                                      - 2,00,000</option>
                                    <option value='200001 $ or Above' <?php if (isset($professional[0]->salary)) if ($professional[0]->salary == "200001 $ or Above") echo "selected" ?>>200001 $ or
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
                                  <input class="form-control forminput description" type="text" size="30" name="total_income" value="<?php if (isset($professional[0]->total_income)) echo $professional[0]->total_income;
                                                                                                                                      else echo "-----" ?>">
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
                                      <option value="<?php echo $list->id; ?>" <?php if (isset($data[0]->citizenship)) if ($data[0]->citizenship == $list->id) echo "selected" ?>><?php echo $list->name; ?></option>
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
                                      <input name="residency_status" type="radio" value="Permanent resident" <?php if ($data[0]->residency_status == "Permanent resident") echo "checked" ?> class="">Permanent
                                      resident &nbsp;</label>
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Work Permit" <?php if ($data[0]->residency_status == "Work Permit") echo "checked" ?> class="">Work Permit
                                      &nbsp;</label>
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Student Visa" <?php if ($data[0]->residency_status == "Student Visa") echo "checked" ?> class="">Student
                                      Visa &nbsp;</label>
                                    <label style="text-align:left;padding-bottom:20px">
                                      <input name="residency_status" type="radio" value="Temperory Visa" <?php if ($data[0]->residency_status == "Temperory Visa") echo "checked" ?> class="">Temperory Visa</label>
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
                              <p class="para1"><b>Family Values :</b><?php if (isset($family[0]->family_values)) echo $family[0]->family_values;
                                                                      else echo "-----" ?> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Family Type :</b><?php if (isset($family[0]->family_type)) echo $family[0]->family_type;
                                                                    else echo "-----" ?> </p>
                            </div>

                            <div class="col-md-6 col-sm-8 col-xs-6">
                              <p class="para1"><b>Family Status :</b><?php if (isset($family[0]->family_status)) echo $family[0]->family_status;
                                                                      else echo "-----" ?></p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Family origin :</b><?php if (isset($family[0]->family_origin)) echo $family[0]->family_origin;
                                                                      else echo "-----" ?></p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Father's Occupation :</b><?php if (isset($family[0]->father_occupation)) echo $family[0]->father_occupation;
                                                                            else echo "-----" ?> </p>
                            </div>

                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Mather's Occupation:</b> <?php if (isset($family[0]->mother_occupation)) echo $family[0]->mother_occupation;
                                                                            else echo "-----" ?></p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Brothers :</b></b> <?php if (isset($family[0]->no_of_brother)) echo $family[0]->no_of_brother;
                                                                      else echo "-----" ?> </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Sisters :</b><?php if (isset($family[0]->no_of_sister)) echo $family[0]->no_of_sister;
                                                                else echo "-----" ?> </p>
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

                        <form name="form-editfamilydetails" id="form-editfamilydetails" action="UpdateProfile/editfamilydetails" method="post" class="bookatable-form1" style="height: auto;">
                          <div class="col-md-12">


                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Family Values </label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder " style="margin-bottom:10px;">
                                    <label> <input name="family_values" id="f1" type="radio" value="Orthodox" <?php if (isset($family[0]->family_values)) if ($family[0]->family_values == "Orthodox") echo "checked" ?>> Orthodox
                                      &nbsp;</label>
                                    <label> <input name="family_values" id="f2" type="radio" value="Traditional" <?php if (isset($family[0]->family_values)) if ($family[0]->family_values == "Traditional") echo "checked" ?>>
                                      Traditional &nbsp;</label>
                                    <label> <input name="family_values" id="f3" type="radio" value="Moderate" <?php if (isset($family[0]->family_values)) if ($family[0]->family_values == "Moderate") echo "checked" ?>> Moderate
                                      &nbsp;</label>
                                    <label> <input name="family_values" id="f4" type="radio" value="Liberal" <?php if (isset($family[0]->family_values)) if ($family[0]->family_values == "Liberal") echo "checked" ?>>Liberal</label>
                                  </div>

                                </div>
                              </div>
                            </div>
                            <!-- <input type="hidden" name="user_id" value=""> -->
                            <div class="form-group">
                              <div class="row">
                                <div class="col-sm-3 col-md-3">
                                  <label class="control-label">Family Type</label>
                                </div>
                                <div class="col-sm-9 col-md-9">
                                  <div class="controls_holder " style="margin-bottom:10px;">
                                    <label> <input name="family_type" type="radio" value="Joint" <?php if (isset($family[0]->family_type)) if ($family[0]->family_type == "Joint") echo "checked" ?>>Joint &nbsp;</label>
                                    <label><input name="family_type" type="radio" value="Nuclear" <?php if (isset($family[0]->family_type)) if ($family[0]->family_type == "Nuclear") echo "checked" ?>>Nuclear
                                      &nbsp;</label>
                                    <label><input name="family_type" type="radio" value="Other" <?php if (isset($family[0]->family_type)) if ($family[0]->family_type == "Other") echo "checked" ?>>Other </label>
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
                                    <label> <input name="family_status" type="radio" value="Middle Class" <?php if (isset($family[0]->family_status)) if ($family[0]->family_status == "Middle Class") echo "checked" ?>>Middle Class
                                      &nbsp;</label>
                                    <label> <input name="family_status" type="radio" value="Upper Middle Class" <?php if (isset($family[0]->family_status)) if ($family[0]->family_status == "Upper Middle Class") echo "checked" ?>>Upper Middle
                                      Class &nbsp;</label>
                                    <label> <input name="family_status" type="radio" value="Rich / Affulent" <?php if (isset($family[0]->family_status)) if ($family[0]->family_status == "Rich / Affulent") echo "checked" ?>>Rich /
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
                                  <select name="no_of_brother" id="brothers" class="form-control">
                                    <option value="None" <?php if (isset($family[0]->no_of_brother)) if ($family[0]->no_of_brother == "None") echo "selected" ?>>None</option>
                                    <option value="1" <?php if (isset($family[0]->no_of_brother)) if ($family[0]->no_of_brother == 1) echo "selected" ?>>1</option>
                                    <option value="2" <?php if (isset($family[0]->no_of_brother)) if ($family[0]->no_of_brother == 2) echo "selected" ?>>2</option>
                                    <option value="3" <?php if (isset($family[0]->no_of_brother)) if ($family[0]->no_of_brother == 3) echo "selected" ?>>3</option>
                                    <option value="4" <?php if (isset($family[0]->no_of_brother)) if ($family[0]->no_of_brother == 4) echo "selected" ?>>4</option>
                                    <option value="5+" <?php if (isset($family[0]->no_of_brother)) if ($family[0]->no_of_brother == "5+") echo "selected" ?>>5+</option>
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
                                  <select name="number_of_married_brother" id="married_br" class="form-control">
                                    <option value="None" <?php if (isset($family[0]->number_of_married_brother)) if ($family[0]->number_of_married_brother == "None") echo "selected" ?>>None</option>
                                    <option value="1" <?php if (isset($family[0]->number_of_married_brother)) if ($family[0]->number_of_married_brother == 1) echo "selected" ?>>1</option>
                                    <option value="2" <?php if (isset($family[0]->number_of_married_brother)) if ($family[0]->number_of_married_brother == 2) echo "selected" ?>>2</option>
                                    <option value="3" <?php if (isset($family[0]->number_of_married_brother)) if ($family[0]->number_of_married_brother == 3) echo "selected" ?>>3</option>
                                    <option value="4" <?php if (isset($family[0]->number_of_married_brother)) if ($family[0]->number_of_married_brother == 4) echo "selected" ?>>4</option>
                                    <option value="5+" <?php if (isset($family[0]->number_of_married_brother)) if ($family[0]->number_of_married_brother == "5+") echo "selected" ?>>5+</option>
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
                                  <select name="no_of_sister" id="sisters" class="form-control">
                                    <option value="None" <?php if (isset($family[0]->no_of_sister)) if ($family[0]->no_of_sister == "None") echo "selected" ?>>None</option>
                                    <option value="1" <?php if (isset($family[0]->no_of_sister)) if ($family[0]->no_of_sister == 1) echo "selected" ?>>1</option>
                                    <option value="2" <?php if (isset($family[0]->no_of_sister)) if ($family[0]->no_of_sister == 2) echo "selected" ?>>2</option>
                                    <option value="3" <?php if (isset($family[0]->no_of_sister)) if ($family[0]->no_of_sister == 3) echo "selected" ?>>3</option>
                                    <option value="4" <?php if (isset($family[0]->no_of_sister)) if ($family[0]->no_of_sister == 4) echo "selected" ?>>4</option>
                                    <option value="5+" <?php if (isset($family[0]->no_of_sister)) if ($family[0]->no_of_sister == "5+") echo "selected" ?>>5+</option>
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
                                  <select name="no_of_married_sister" id="married_sr" class="form-control">
                                    <option value="None" <?php if (isset($family[0]->no_of_married_sister)) if ($family[0]->no_of_married_sister == "None") echo "selected" ?>>None</option>
                                    <option value="1" <?php if (isset($family[0]->no_of_married_sister)) if ($family[0]->no_of_married_sister == 1) echo "selected" ?>>1</option>
                                    <option value="2" <?php if (isset($family[0]->no_of_married_sister)) if ($family[0]->no_of_married_sister == 2) echo "selected" ?>>2</option>
                                    <option value="3" <?php if (isset($family[0]->no_of_married_sister)) if ($family[0]->no_of_married_sister == 3) echo "selected" ?>>3</option>
                                    <option value="4" <?php if (isset($family[0]->no_of_married_sister)) if ($family[0]->no_of_married_sister == 4) echo "selected" ?>>4</option>
                                    <option value="5+" <?php if (isset($family[0]->no_of_married_sister)) if ($family[0]->no_of_married_sister == "5+") echo "selected" ?>>5+</option>
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
                                  <select name="father_occupation" id="f_occupation" class="required combo form-control">
                                    <option value="">----Please Select---- </option>
                                    <option value="Employed" <?php if (isset($family[0]->father_occupation)) if ($family[0]->father_occupation == "Govt Employee") echo "selected" ?>>Govt Employed</option>
                                    <option value="Business man" <?php if (isset($family[0]->father_occupation)) if ($family[0]->father_occupation == "Business man") echo "selected" ?>>Business man
                                    </option>
                                    <option value="Retired" <?php if (isset($family[0]->father_occupation)) if ($family[0]->father_occupation == "Private Employee") echo "selected" ?>>Private Employee</option>
                                    <option value="Not employed" <?php if (isset($family[0]->father_occupation)) if ($family[0]->father_occupation == "Retired") echo "selected" ?>>Retired
                                    </option>
                                    <option value="Expired" <?php if (isset($family[0]->father_occupation)) if ($family[0]->father_occupation == "Late") echo "selected" ?>>Late</option>
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
                                  <select name="mother_occupation" id="m_occupation" class="required combo form-control">

                                    <option value="0">----Please Select----
                                    </option>
                                    <option value="Employed" <?php if (isset($family[0]->mother_occupation)) if ($family[0]->mother_occupation == "Employed") echo "selected" ?>>Employed</option>
                                    <option value="Business Woman" <?php if (isset($family[0]->mother_occupation)) if ($family[0]->mother_occupation == "Business Woman") echo "selected" ?>>Business Woman
                                    </option>
                                    <option value="Retired" <?php if (isset($family[0]->mother_occupation)) if ($family[0]->mother_occupation == "Retired") echo "selected" ?>>Retired</option>
                                    <option value="Not employed" <?php if (isset($family[0]->mother_occupation)) if ($family[0]->mother_occupation == "Not employed") echo "selected" ?>>Not employed
                                    </option>
                                    <option value="House Wife" <?php if (isset($family[0]->mother_occupation)) if ($family[0]->mother_occupation == "House Wife") echo "selected" ?>>Home Maker</option>
                                    <option value="Expired" <?php if (isset($family[0]->mother_occupation)) if ($family[0]->mother_occupation == "Late") echo "selected" ?>>Late</option>
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
                                  <input name="family_origin" type="text" id="txtforigin" class="form-control description" value="<?php if (isset($family[0]->family_origin)) echo $family[0]->family_origin; ?>" size="40" maxlength="100">
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
                                  <textarea name="family_bio" class="required form-control description" cols="40" rows="6" id="txtaboutf" onkeypress="javascript: return chkspecialcharsother()"><?php if (isset($family[0]->family_bio)) echo $family[0]->family_bio; ?></textarea>
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
                            <p class="para2"><?php if (isset($preference[0]->age_from)) echo $preference[0]->age_from;
                                              else echo "-----" ?> To <?php if (isset($preference[0]->age_to)) echo $preference[0]->age_to;
                                                                      else echo "-----" ?> </p>
                          </div>
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Marital Status : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2"><?php if (isset($preference[0]->marital_status)) echo $preference[0]->marital_status;
                                              else echo "-----" ?> </p>
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="row">
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Mother Tongue : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2"><?php if (isset($preference[0]->mother_tongue)) echo $preference[0]->mother_tongue;
                                              else echo "-----" ?> </p>
                          </div>
                          <div class="col-md-5 col-sm-4 col-xs-6">
                            <p class="para1">Religion : </p>
                          </div>
                          <div class="col-md-7 col-sm-8 col-xs-6">
                            <p class="para2"><?php if (isset($preference[0]->religion)) echo $preference[0]->religion;
                                              else echo "-----" ?> </p>
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
                              <form id="form1" class="bookatable-form1" name="form1" action="UpdateProfile/editPartnerP" method="post" style="height:auto">


                                <div class="panel-body">
                                  <div class="form-group">
                                    <div class="row">
                                      <div class="col-sm-2 col-md-2">
                                        <label class="control-label">Age
                                        </label>
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select name="age_from" size="1" id="agefrom" class="form-control">
                                          <option value="18" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "18") echo "selected" ?>>18</option>
                                          <option value="19" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "19") echo "selected" ?>>19</option>
                                          <option value="20" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "20") echo "selected" ?>>20</option>
                                          <option value="21" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "21") echo "selected" ?>>21</option>
                                          <option value="22" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "22") echo "selected" ?>>22</option>
                                          <option value="23" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "23") echo "selected" ?>>23</option>
                                          <option value="24" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "24") echo "selected" ?>>24</option>
                                          <option value="25" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "25") echo "selected" ?>>25</option>
                                          <option value="26" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "26") echo "selected" ?>>26</option>
                                          <option value="27" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "27") echo "selected" ?>>27</option>
                                          <option value="28" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "28") echo "selected" ?>>28</option>
                                          <option value="29" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "29") echo "selected" ?>>29</option>
                                          <option value="30" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "30") echo "selected" ?>>30</option>
                                          <option value="31" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "31") echo "selected" ?>>31</option>
                                          <option value="32" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "32") echo "selected" ?>>32</option>
                                          <option value="33" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "33") echo "selected" ?>>33</option>
                                          <option value="34" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "34") echo "selected" ?>>34</option>
                                          <option value="35" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "35") echo "selected" ?>>35</option>
                                          <option value="36" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "36") echo "selected" ?>>36</option>
                                          <option value="37" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "37") echo "selected" ?>>37</option>
                                          <option value="38" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "38") echo "selected" ?>>38</option>
                                          <option value="39" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "39") echo "selected" ?>>39</option>
                                          <option value="40" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "40") echo "selected" ?>>40</option>
                                          <option value="41" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "41") echo "selected" ?>>41</option>
                                          <option value="42" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "42") echo "selected" ?>>42</option>
                                          <option value="43" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "43") echo "selected" ?>>43</option>
                                          <option value="44" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "44") echo "selected" ?>>44</option>
                                          <option value="45" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "45") echo "selected" ?>>45</option>
                                          <option value="46" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "46") echo "selected" ?>>46</option>
                                          <option value="47" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "47") echo "selected" ?>>47</option>
                                          <option value="48" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "48") echo "selected" ?>>48</option>
                                          <option value="49" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "49") echo "selected" ?>>49</option>
                                          <option value="50" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "50") echo "selected" ?>>50</option>
                                          <option value="51" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "51") echo "selected" ?>>51</option>
                                          <option value="52" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "52") echo "selected" ?>>52</option>
                                          <option value="53" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "53") echo "selected" ?>>53</option>
                                          <option value="54" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "53") echo "selected" ?>>54</option>
                                          <option value="55" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "55") echo "selected" ?>>55</option>
                                          <option value="56" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "56") echo "selected" ?>>56</option>
                                          <option value="57" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "57") echo "selected" ?>>57</option>
                                          <option value="58" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "58") echo "selected" ?>>58</option>
                                          <option value="59" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "59") echo "selected" ?>>59</option>
                                          <option value="60" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "60") echo "selected" ?>>60</option>
                                          <option value="61" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "61") echo "selected" ?>>61</option>
                                          <option value="62" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "62") echo "selected" ?>>62</option>
                                          <option value="63" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "63") echo "selected" ?>>63</option>
                                          <option value="64" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "64") echo "selected" ?>>64</option>
                                          <option value="65" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "65") echo "selected" ?>>65</option>
                                          <option value="66" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "66") echo "selected" ?>>66</option>
                                          <option value="67" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "67") echo "selected" ?>>67</option>
                                          <option value="68" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "68") echo "selected" ?>>68</option>
                                          <option value="69" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "69") echo "selected" ?>>69</option>
                                          <option value="70" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "70") echo "selected" ?>>70</option>
                                          <option value="71" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "71") echo "selected" ?>>71</option>
                                          <option value="72" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "72") echo "selected" ?>>72</option>
                                          <option value="73" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "73") echo "selected" ?>>73</option>
                                          <option value="74" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "74") echo "selected" ?>>74</option>
                                          <option value="75" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "75") echo "selected" ?>>75</option>

                                          <option value="76" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "76") echo "selected" ?>>76</option>
                                          <option value="77" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "77") echo "selected" ?>>77</option>
                                          <option value="78" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "78") echo "selected" ?>>78</option>
                                          <option value="79" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "79") echo "selected" ?>>79</option>
                                          <option value="80" <?php if (isset($preference[0]->age_from)) if ($preference[0]->age_from == "80") echo "selected" ?>>80</option>

                                        </select>
                                      </div>
                                      <div class="col-sm-2 col-md-2">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select name="age_to" size="1" id="agefrom" class="form-control">
                                          <option value="18" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "18") echo "selected" ?>>18</option>
                                          <option value="19" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "19") echo "selected" ?>>19</option>
                                          <option value="20" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "20") echo "selected" ?>>20</option>
                                          <option value="21" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "21") echo "selected" ?>>21</option>
                                          <option value="22" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "22") echo "selected" ?>>22</option>
                                          <option value="23" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "23") echo "selected" ?>>23</option>
                                          <option value="24" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "24") echo "selected" ?>>24</option>
                                          <option value="25" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "25") echo "selected" ?>>25</option>
                                          <option value="26" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "26") echo "selected" ?>>26</option>
                                          <option value="27" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "27") echo "selected" ?>>27</option>
                                          <option value="28" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "28") echo "selected" ?>>28</option>
                                          <option value="29" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "29") echo "selected" ?>>29</option>
                                          <option value="30" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "30") echo "selected" ?>>30</option>
                                          <option value="31" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "31") echo "selected" ?>>31</option>
                                          <option value="32" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "32") echo "selected" ?>>32</option>
                                          <option value="33" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "33") echo "selected" ?>>33</option>
                                          <option value="34" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "34") echo "selected" ?>>34</option>
                                          <option value="35" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "35") echo "selected" ?>>35</option>
                                          <option value="36" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "36") echo "selected" ?>>36</option>
                                          <option value="37" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "37") echo "selected" ?>>37</option>
                                          <option value="38" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "38") echo "selected" ?>>38</option>
                                          <option value="39" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "39") echo "selected" ?>>39</option>
                                          <option value="40" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "40") echo "selected" ?>>40</option>
                                          <option value="41" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "41") echo "selected" ?>>41</option>
                                          <option value="42" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "42") echo "selected" ?>>42</option>
                                          <option value="43" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "43") echo "selected" ?>>43</option>
                                          <option value="44" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "44") echo "selected" ?>>44</option>
                                          <option value="45" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "45") echo "selected" ?>>45</option>
                                          <option value="46" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "46") echo "selected" ?>>46</option>
                                          <option value="47" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "47") echo "selected" ?>>47</option>
                                          <option value="48" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "48") echo "selected" ?>>48</option>
                                          <option value="49" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "49") echo "selected" ?>>49</option>
                                          <option value="50" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "50") echo "selected" ?>>50</option>
                                          <option value="51" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "51") echo "selected" ?>>51</option>
                                          <option value="52" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "52") echo "selected" ?>>52</option>
                                          <option value="53" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "53") echo "selected" ?>>53</option>
                                          <option value="54" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "53") echo "selected" ?>>54</option>
                                          <option value="55" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "55") echo "selected" ?>>55</option>
                                          <option value="56" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "56") echo "selected" ?>>56</option>
                                          <option value="57" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "57") echo "selected" ?>>57</option>
                                          <option value="58" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "58") echo "selected" ?>>58</option>
                                          <option value="59" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "59") echo "selected" ?>>59</option>
                                          <option value="60" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "60") echo "selected" ?>>60</option>
                                          <option value="61" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "61") echo "selected" ?>>61</option>
                                          <option value="62" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "62") echo "selected" ?>>62</option>
                                          <option value="63" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "63") echo "selected" ?>>63</option>
                                          <option value="64" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "64") echo "selected" ?>>64</option>
                                          <option value="65" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "65") echo "selected" ?>>65</option>
                                          <option value="66" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "66") echo "selected" ?>>66</option>
                                          <option value="67" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "67") echo "selected" ?>>67</option>
                                          <option value="68" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "68") echo "selected" ?>>68</option>
                                          <option value="69" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "69") echo "selected" ?>>69</option>
                                          <option value="70" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "70") echo "selected" ?>>70</option>
                                          <option value="71" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "71") echo "selected" ?>>71</option>
                                          <option value="72" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "72") echo "selected" ?>>72</option>
                                          <option value="73" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "73") echo "selected" ?>>73</option>
                                          <option value="74" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "74") echo "selected" ?>>74</option>
                                          <option value="75" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "75") echo "selected" ?>>75</option>
                                          <option value="76" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "76") echo "selected" ?>>76</option>
                                          <option value="77" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "77") echo "selected" ?>>77</option>
                                          <option value="78" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "78") echo "selected" ?>>78</option>
                                          <option value="79" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "79") echo "selected" ?>>79</option>
                                          <option value="80" <?php if (isset($preference[0]->age_to)) if ($preference[0]->age_to == "80") echo "selected" ?>>80</option>
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
                                          <input class="mstatus mstatus22" name="marital_status" type="checkbox" id="Unmarried" onClick="isCheckMstatus()" value="Never Married" <?php if (isset($preference[0]->marital_status)) if ($preference[0]->marital_status == "Never Married") echo "checked" ?> />
                                          Never Married &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus1 mstatus22" name="marital_status" type="checkbox" id="Widowed" onClick="isCheckMstatus()" value="Widowed" <?php if (isset($preference[0]->marital_status)) if ($preference[0]->marital_status == "Widowed") echo "checked" ?> />
                                          Widowed &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus1 mstatus22" name="marital_status" type="checkbox" id="Divorced" onClick="isCheckMstatus()" value="Divorced" <?php if (isset($preference[0]->marital_status)) if ($preference[0]->marital_status == "Divorced") echo "checked" ?> />
                                          Divorced &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus mstatus1 mstatus22" name="marital_status" type="checkbox" id="Separated" onClick="isCheckMstatus()" value="Separated" <?php if (isset($preference[0]->marital_status)) if ($preference[0]->marital_status == "Separated") echo "checked" ?> />
                                          Separated &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input class="mstatus22" name="marital_status" type="checkbox" onClick="if(this.checked){chenable();$('.mstatus').prop('checked',true);}else{chdisable();$('.mstatus').prop('checked',false);}" value="Any" <?php if (isset($preference[0]->marital_status)) if ($preference[0]->marital_status == "Any") echo "checked" ?> id="mstatusany1" />
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
                                          <label style="text-align:left;padding-bottom:20px"><input name="have_children" id="childlivingno" type="radio" value="No" <?php if (isset($preference[0]->have_children)) if ($preference[0]->have_children == "No") echo "checked" ?>> No
                                            &nbsp; </label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="have_children" id="childlivingyes" value="Yes" <?php if (isset($preference[0]->have_children)) if ($preference[0]->have_children == "Yes") echo "checked" ?>> Yes &nbsp;
                                          </label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="have_children" id="childlivingdm" value="Does not Matter" <?php if (isset($preference[0]->have_children)) if ($preference[0]->have_children == "Does not Matter") echo "checked" ?>>
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
                                        <select id="htx" name="height_from" class="form-control">
                                          <option value='3ft.5in-105cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.5in-105cm") echo "selected" ?>>3ft.5in-105cm
                                          </option>
                                          <option value='3ft.6in-107cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.6in-107cm") echo "selected" ?>>3ft.6in-107cm
                                          </option>
                                          <option value='3ft.7in-110cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.7in-110cm") echo "selected" ?>>3ft.7in-110cm
                                          </option>
                                          <option value='3ft.8in-112cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.8in-112cm") echo "selected" ?>>3ft.8in-112cm
                                          </option>
                                          <option value='3ft.9in-115cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.9in-115cm") echo "selected" ?>>3ft.9in-115cm
                                          </option>
                                          <option value='3ft.10in-117cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.10in-117cm") echo "selected" ?>>3ft.10in-117cm
                                          </option>
                                          <option value='3ft.11in-120cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "3ft.11in-120cm") echo "selected" ?>>3ft.11in-120cm
                                          </option>
                                          <option value='4ft-122cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft-122cm") echo "selected" ?>>4ft-122cm</option>
                                          <option value='4ft.1in-125cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.1in-125cm") echo "selected" ?>>4ft.1in-125cm
                                          </option>
                                          <option value='4ft.2in-127cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.2in-127cm") echo "selected" ?>>4ft.2in-127cm
                                          </option>
                                          <option value='4ft.3in-130cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.3in-130cm") echo "selected" ?>>4ft.3in-130cm
                                          </option>
                                          <option value='4ft.4in-132cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.4in-132cm") echo "selected" ?>>4ft.4in-132cm
                                          </option>
                                          <option value='4ft.5in-135cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.5in-135cm") echo "selected" ?>>4ft.5in-135cm
                                          </option>
                                          <option value='4ft.6in-137cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.6in-137cm") echo "selected" ?>>4ft.6in-137cm
                                          </option>
                                          <option value='4ft.7in-140cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.7in-140cm") echo "selected" ?>>4ft.7in-140cm
                                          </option>
                                          <option value='4ft.8in-142cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.8in-142cm") echo "selected" ?>>4ft.8in-142cm
                                          </option>
                                          <option value='4ft.9in-145cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.9in-145cm") echo "selected" ?>>4ft.9in-145cm
                                          </option>
                                          <option value='4ft.10in-147cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.10in-147cm") echo "selected" ?>>4ft.10in-147cm
                                          </option>
                                          <option value='4ft.11in-150cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "4ft.11in-150cm") echo "selected" ?>>4ft.11in-150cm
                                          </option>
                                          <option value='5ft-152cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft-152cm") echo "selected" ?>>5ft-152cm
                                          </option>
                                          <option value='5ft.1in-155cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.1in-155cm") echo "selected" ?>>5ft.1in-155cm
                                          </option>
                                          <option value='5ft.2in-157cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.2in-157cm") echo "selected" ?>>5ft.2in-157cm
                                          </option>
                                          <option value='5ft.3in-160cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.3in-160cm") echo "selected" ?>>5ft.3in-160cm
                                          </option>
                                          <option value='5ft.4in-162cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.4in-162cm") echo "selected" ?>>5ft.4in-162cm
                                          </option>
                                          <option value='5ft.5in-165cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.5in-165cm") echo "selected" ?>>5ft.5in-165cm
                                          </option>
                                          <option value='5ft.6in-167cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.6in-167cm") echo "selected" ?>>5ft.6in-167cm
                                          </option>
                                          <option value='5ft.7in-170cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.7in-170cm") echo "selected" ?>>5ft.7in-170cm
                                          </option>
                                          <option value='5ft.8in-172cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.8in-172cm") echo "selected" ?>>5ft.8in-172cm
                                          </option>
                                          <option value='5ft.9in-175cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.9in-175cm") echo "selected" ?>>5ft.9in-175cm
                                          </option>
                                          <option value='5ft.10in-177cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.10in-177cm") echo "selected" ?>>5ft.10in-177cm
                                          </option>
                                          <option value='5ft.11in-180cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "5ft.11in-180cm") echo "selected" ?>>5ft.11in-180cm
                                          </option>
                                          <option value='6ft-182cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft-182cm") echo "selected" ?>>6ft-182cm
                                          </option>
                                          <option value='6ft.1in-185cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.1in-185cm") echo "selected" ?>>6ft.1in-185cm
                                          </option>
                                          <option value='6ft.2in-187cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.2in-187cm") echo "selected" ?>>6ft.2in-187cm
                                          </option>
                                          <option value='6ft.3in-190cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.3in-190cm") echo "selected" ?>>6ft.3in-190cm
                                          </option>
                                          <option value='6ft.4in-192cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.4in-192cm") echo "selected" ?>>6ft.4in-192cm
                                          </option>
                                          <option value='6ft.5in-195cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.5in-195cm") echo "selected" ?>>6ft.5in-195cm
                                          </option>
                                          <option value='6ft.6in-197cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.6in-197cm") echo "selected" ?>>6ft.6in-197cm
                                          </option>
                                          <option value='6ft.7in-200cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.7in-200cm") echo "selected" ?>>6ft.7in-200cm
                                          </option>
                                          <option value='6ft.8in-202cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.8in-202cm") echo "selected" ?>>6ft.8in-202cm
                                          </option>
                                          <option value='6ft.9in-205cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.9in-205cm") echo "selected" ?>>6ft.9in-205cm
                                          </option>
                                          <option value='6ft.10in-207cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.10in-207cm") echo "selected" ?>>6ft.10in-207cm
                                          </option>
                                          <option value='6ft.11in-210cm' <?php if (isset($preference[0]->height_from)) if ($preference[0]->height_from == "6ft.11in-210cm") echo "selected" ?>>6ft.11in-210cm
                                          </option>
                                        </select>
                                      </div>
                                      <div class="col-sm-2 col-md-2">
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; to
                                      </div>
                                      <div class="col-sm-4 col-md-4">
                                        <select id="htx" name="height_to" class="form-control">
                                          <option value='3ft.5in-105cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.5in-105cm") echo "selected" ?>>3ft.5in-105cm
                                          </option>
                                          <option value='3ft.6in-107cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.6in-107cm") echo "selected" ?>>3ft.6in-107cm
                                          </option>
                                          <option value='3ft.7in-110cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.7in-110cm") echo "selected" ?>>3ft.7in-110cm
                                          </option>
                                          <option value='3ft.8in-112cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.8in-112cm") echo "selected" ?>>3ft.8in-112cm
                                          </option>
                                          <option value='3ft.9in-115cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.9in-115cm") echo "selected" ?>>3ft.9in-115cm
                                          </option>
                                          <option value='3ft.10in-117cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.10in-117cm") echo "selected" ?>>3ft.10in-117cm
                                          </option>
                                          <option value='3ft.11in-120cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "3ft.11in-120cm") echo "selected" ?>>3ft.11in-120cm
                                          </option>
                                          <option value='4ft-122cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft-122cm") echo "selected" ?>>4ft-122cm</option>
                                          <option value='4ft.1in-125cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.1in-125cm") echo "selected" ?>>4ft.1in-125cm
                                          </option>
                                          <option value='4ft.2in-127cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.2in-127cm") echo "selected" ?>>4ft.2in-127cm
                                          </option>
                                          <option value='4ft.3in-130cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.3in-130cm") echo "selected" ?>>4ft.3in-130cm
                                          </option>
                                          <option value='4ft.4in-132cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.4in-132cm") echo "selected" ?>>4ft.4in-132cm
                                          </option>
                                          <option value='4ft.5in-135cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.5in-135cm") echo "selected" ?>>4ft.5in-135cm
                                          </option>
                                          <option value='4ft.6in-137cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.6in-137cm") echo "selected" ?>>4ft.6in-137cm
                                          </option>
                                          <option value='4ft.7in-140cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.7in-140cm") echo "selected" ?>>4ft.7in-140cm
                                          </option>
                                          <option value='4ft.8in-142cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.8in-142cm") echo "selected" ?>>4ft.8in-142cm
                                          </option>
                                          <option value='4ft.9in-145cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.9in-145cm") echo "selected" ?>>4ft.9in-145cm
                                          </option>
                                          <option value='4ft.10in-147cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.10in-147cm") echo "selected" ?>>4ft.10in-147cm
                                          </option>
                                          <option value='4ft.11in-150cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "4ft.11in-150cm") echo "selected" ?>>4ft.11in-150cm
                                          </option>
                                          <option value='5ft-152cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft-152cm") echo "selected" ?>>5ft-152cm
                                          </option>
                                          <option value='5ft.1in-155cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.1in-155cm") echo "selected" ?>>5ft.1in-155cm
                                          </option>
                                          <option value='5ft.2in-157cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.2in-157cm") echo "selected" ?>>5ft.2in-157cm
                                          </option>
                                          <option value='5ft.3in-160cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.3in-160cm") echo "selected" ?>>5ft.3in-160cm
                                          </option>
                                          <option value='5ft.4in-162cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.4in-162cm") echo "selected" ?>>5ft.4in-162cm
                                          </option>
                                          <option value='5ft.5in-165cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.5in-165cm") echo "selected" ?>>5ft.5in-165cm
                                          </option>
                                          <option value='5ft.6in-167cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.6in-167cm") echo "selected" ?>>5ft.6in-167cm
                                          </option>
                                          <option value='5ft.7in-170cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.7in-170cm") echo "selected" ?>>5ft.7in-170cm
                                          </option>
                                          <option value='5ft.8in-172cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.8in-172cm") echo "selected" ?>>5ft.8in-172cm
                                          </option>
                                          <option value='5ft.9in-175cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.9in-175cm") echo "selected" ?>>5ft.9in-175cm
                                          </option>
                                          <option value='5ft.10in-177cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.10in-177cm") echo "selected" ?>>5ft.10in-177cm
                                          </option>
                                          <option value='5ft.11in-180cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "5ft.11in-180cm") echo "selected" ?>>5ft.11in-180cm
                                          </option>
                                          <option value='6ft-182cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft-182cm") echo "selected" ?>>6ft-182cm
                                          </option>
                                          <option value='6ft.1in-185cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.1in-185cm") echo "selected" ?>>6ft.1in-185cm
                                          </option>
                                          <option value='6ft.2in-187cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.2in-187cm") echo "selected" ?>>6ft.2in-187cm
                                          </option>
                                          <option value='6ft.3in-190cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.3in-190cm") echo "selected" ?>>6ft.3in-190cm
                                          </option>
                                          <option value='6ft.4in-192cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.4in-192cm") echo "selected" ?>>6ft.4in-192cm
                                          </option>
                                          <option value='6ft.5in-195cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.5in-195cm") echo "selected" ?>>6ft.5in-195cm
                                          </option>
                                          <option value='6ft.6in-197cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.6in-197cm") echo "selected" ?>>6ft.6in-197cm
                                          </option>
                                          <option value='6ft.7in-200cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.7in-200cm") echo "selected" ?>>6ft.7in-200cm
                                          </option>
                                          <option value='6ft.8in-202cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.8in-202cm") echo "selected" ?>>6ft.8in-202cm
                                          </option>
                                          <option value='6ft.9in-205cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.9in-205cm") echo "selected" ?>>6ft.9in-205cm
                                          </option>
                                          <option value='6ft.10in-207cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.10in-207cm") echo "selected" ?>>6ft.10in-207cm
                                          </option>
                                          <option value='6ft.11in-210cm' <?php if (isset($preference[0]->height_to)) if ($preference[0]->height_to == "6ft.11in-210cm") echo "selected" ?>>6ft.11in-210cm
                                          </option>
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
                                            <input type="radio" name="physical_status" value="Normal" <?php if (isset($preference[0]->physical_status)) if ($preference[0]->physical_status == "Normal") echo "checked" ?>> Normal
                                            &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="physical_status" value="Physically challenged" <?php if (isset($preference[0]->physical_status)) if ($preference[0]->physical_status == "Disabled") echo "checked" ?>>
                                            Disabled &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input type="radio" name="physical_status" value="Does not Matter" <?php if (isset($preference[0]->physical_status)) if ($preference[0]->physical_status == "Doesn't Matter") echo "checked" ?>>
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

                                            <select name='mother_tongue' id='mother_t' class='required form-control combo ' style=''>
                                              <option value='0' selected='selected'>--- Select
                                                mothertongue---</option>
                                              <option value='Arabic' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Arabic") echo "selected"; ?>>Arabic</option>
                                              <option value='Assamese' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Assamese") echo "selected"; ?>>Assamese</option>
                                              <option value='Awadhi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Awadhi") echo "selected"; ?>>Awadhi</option>
                                              <option value='Bengali' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Bengali") echo "selected"; ?>>Bengali</option>
                                              <option value='Bhojpuri' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Bhojpuri") echo "selected"; ?>>Bhojpuri</option>
                                              <option value='Bhutia' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Bhutia") echo "selected"; ?>>Bhutia</option>
                                              <option value='Bihari' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Bihari") echo "selected"; ?>>Bihari</option>
                                              <option value='Chattisgarhi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Chattisgarhi") echo "selected"; ?>>Chattisgarhi
                                              </option>
                                              <option value='Chinese' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Chinese") echo "selected"; ?>>Chinese</option>
                                              <option value='Dogri' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Dogri") echo "selected"; ?>>Dogri</option>
                                              <option value='English' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "English") echo "selected"; ?>>English</option>
                                              <option value='French' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "French") echo "selected"; ?>>French</option>
                                              <option value='Garhwali' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Garhwali") echo "selected"; ?>>Garhwali</option>
                                              <option value='Garo' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Garo") echo "selected"; ?>>Garo</option>
                                              <option value='Gujarati' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Gujarati") echo "selected"; ?>>Gujarati</option>
                                              <option value='Haryanvi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Haryanvi") echo "selected"; ?>>Haryanvi</option>
                                              <option value='Hindi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Hindi") echo "selected"; ?>>Hindi
                                              </option>
                                              <option value='Kakbarak' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Kakbarak") echo "selected"; ?>>Kakbarak</option>
                                              <option value='Kanauji' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Kanauji") echo "selected"; ?>>Kanauji</option>
                                              <option value='Kannada' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Kannada") echo "selected"; ?>>Kannada</option>
                                              <option value='Kashmiri' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Kashmiri") echo "selected"; ?>>Kashmiri</option>
                                              <option value='Khandesi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Khandesi") echo "selected"; ?>>Khandesi</option>
                                              <option value='Khasi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Khasi") echo "selected"; ?>>Khasi</option>
                                              <option value='Konkani' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Konkani") echo "selected"; ?>>Konkani</option>
                                              <option value='Koshali' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Koshali") echo "selected"; ?>>Koshali</option>
                                              <option value='Kumoani' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Kumoani") echo "selected"; ?>>Kumoani</option>
                                              <option value='Kutchi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Kutchi") echo "selected"; ?>>Kutchi</option>
                                              <option value='Lepcha' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Lepcha") echo "selected"; ?>>Lepcha</option>
                                              <option value='Magahi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Magahi") echo "selected"; ?>>Magahi</option>
                                              <option value='Maithili' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Maithili") echo "selected"; ?>>Maithili</option>
                                              <option value='Malay' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Malay") echo "selected"; ?>>Malay</option>
                                              <option value='Malayalam' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Malayalam") echo "selected"; ?>>Malayalam</option>
                                              <option value='Manipuri' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Manipuri") echo "selected"; ?>>Manipuri</option>
                                              <option value='Marathi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Marathi") echo "selected"; ?>>Marathi</option>
                                              <option value='Marwari' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Marwari") echo "selected"; ?>>Marwari</option>
                                              <option value='Miji' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Miji") echo "selected"; ?>>Miji</option>
                                              <option value='Mizo' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Mizo") echo "selected"; ?>>Mizo</option>
                                              <option value='Monpa' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Monpa") echo "selected"; ?>>Monpa</option>
                                              <option value='Nepali' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Nepali") echo "selected"; ?>>Nepali</option>
                                              <option value='Oriya' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Oriya") echo "selected"; ?>>Oriya</option>
                                              <option value='Other' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Other") echo "selected"; ?>>Other</option>
                                              <option value='Persian' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Persian") echo "selected"; ?>>Persian</option>
                                              <option value='Punjabi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Punjabi") echo "selected"; ?>>Punjabi</option>
                                              <option value='Rajasthani' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Rajasthani") echo "selected"; ?>>Rajasthani</option>
                                              <option value='Russian' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Russian") echo "selected"; ?>>Russian</option>
                                              <option value='Sanskrit' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Sanskrit") echo "selected"; ?>>Sanskrit</option>
                                              <option value='Santhali' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Santhali") echo "selected"; ?>>Santhali</option>
                                              <option value='Sindhi' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Sindhi") echo "selected"; ?>>Sindhi</option>
                                              <option value='Spanish' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Spanish") echo "selected"; ?>>Spanish</option>
                                              <option value='Swedish' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Swedish") echo "selected"; ?>>Swedish</option>
                                              <option value='Tagalog' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Tagalog") echo "selected"; ?>>Tagalog</option>
                                              <option value='Tamil' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Tamil") echo "selected"; ?>>Tamil</option>
                                              <option value='Telugu' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Telugu") echo "selected"; ?>>Telugu</option>
                                              <option value='Tulu' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Tulu") echo "selected"; ?>>Tulu</option>
                                              <option value='Urdu' <?php if (isset($preference[0]->mother_tongue)) if ($preference[0]->mother_tongue == "Urdu") echo "selected"; ?>>Urdu</option>
                                            </select>
                                            <span class="err_msg" id="errddlmothertongue"></span>
                                          </div>
                                          <div class="col-sm-2 col-md-2 mt-35">
                                            <input name="button1" class="btn-2 btn-default" type="button" id="button1" onClick="addMotherTongue()" value="Add" style="width:100%">
                                            <br>
                                            <input name="button11" class="btn-2 btn-default" type="button" id="button11" onClick="deleteMotherTongue()" value="Remove" style="width:100%">
                                          </div>
                                          <div class="col-sm-5 col-md-5 no-padding">
                                            <select name="mtongue" style="height:81px!important;" multiple="MULTIPLE" id="mother_tongue_dropdown" class="form-control">
                                              <option value="">Any</option>
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
                                          <select required="required" id="religion-dropdown1" name="religion_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                            <option value='0' selected='selected'>Select Religion</option>
                                            <?php foreach ($religion as $list) { ?>
                                              <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                            <?php } ?>

                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button2" type="button" id="button2" onClick="addReligion()" value="Add" class="btn-2 btn-default" style="width:100%">
                                          <br>
                                          <input name="button22" type="button" id="button22" onClick="deleteReligion()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="lstreligion" style="height:81px!important;" multiple="multiple" id="religion_data" class="form-control">
                                            <option value="">Any</option>
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
                                          <select class="form-control form-select form-select-lg mb-3" name="caste_id" aria-label=".form-select-lg example" id="caste-dropdown1">
                                            <option value="">Select Caste</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button3" type="button" id="button3" onClick="addCaste()" value="Add" class="btn-2 btn-default" style="width:100%">
                                          <br>
                                          <input name="button33" type="button" id="button33" onClick="deleteCaste()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="caste" style="height:81px!important;" multiple="multiple" id="caste_data" class="form-control">
                                            <option value="">Any</option>
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
                                            <input type="radio" name="horoscope_match" value="Required" <?php if (isset($preference[0]->horoscope_match)) if ($preference[0]->horoscope_match == "Required") echo "checked" ?>> Required
                                            &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="horoscope_match" type="radio" value="Does not Matter" <?php if (isset($preference[0]->horoscope_match)) if ($preference[0]->horoscope_match == "Does not Matter") echo "checked" ?>>
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
                                            <input name="manglik" type="radio" value="No" <?php if (isset($preference[0]->manglik)) if ($preference[0]->manglik == "No") echo "checked" ?>> No
                                            &nbsp;</label>
                                          <input name="manglik" type="radio" value="Yes" <?php if (isset($preference[0]->manglik)) if ($preference[0]->manglik == "Yes") echo "checked" ?>> Yes &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="manglik" type="radio" value="Anshik" <?php if (isset($preference[0]->manglik)) if ($preference[0]->manglik == "Anshik") echo "checked" ?>>
                                            Anshik &nbsp;</label>
                                          <label style="text-align:left;padding-bottom:20px">
                                            <input name="manglik" type="radio" value="Do not Know" <?php if (isset($preference[0]->manglik)) if ($preference[0]->manglik == "Do not Know") echo "checked" ?>> Any
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
                                          <input name="eating_habit" type="radio" value="Vegetarian" <?php if (isset($preference[0]->eating_habit)) if ($preference[0]->eating_habit == "Vegetarian") echo "checked" ?>> Vegetarian
                                          &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="eating_habit" type="radio" value="Non-Vegetarian" <?php if (isset($preference[0]->eating_habit)) if ($preference[0]->eating_habit == "Non-Vegetarian") echo "checked" ?>>
                                          Non-Vegetarian &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="eating_habit" type="radio" value="Eggetarian" <?php if (isset($preference[0]->eating_habit)) if ($preference[0]->eating_habit == "Eggetarian") echo "checked" ?>> Eggetarian
                                          &nbsp;</label>
                                        <label style="text-align:left;padding-bottom:20px">
                                          <input name="eating_habit" type="radio" value="Does not matter" <?php if (isset($preference[0]->eating_habit)) if ($preference[0]->eating_habit == "Does not matter") echo "checked" ?>> Doesn't
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
                                          <select name='education' onchange='ddchange(this.value);newddchange(this);' id='education-dropdown' class='required form-control combo ' style='0'>
                                            <option value='0' selected='selected'>--- Select
                                              Education ---</option>
                                            <option value='10+2/Senior Secondary School' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "10+2/Senior Secondary School") echo "selected" ?>>
                                              10+2/Senior Secondary School</option>
                                            <option value='B.A.' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.A.") echo "selected" ?>>B.A.</option>
                                            <option value='B.Arch' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.Arch") echo "selected" ?>>B.Arch</option>
                                            <option value='B.Com' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.Com") echo "selected" ?>>B.Com</option>
                                            <option value='B.Ed' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.Ed") echo "selected" ?>>B.Ed</option>
                                            <option value='B.Pharm' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.Pharm") echo "selected" ?>>B.Pharm</option>
                                            <option value='B.Sc' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.Sc") echo "selected" ?>>B.Sc</option>
                                            <option value='B.V.Sc.' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "B.V.Sc.") echo "selected" ?>>B.V.Sc.</option>
                                            <option value='BA LLB' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BA LLB") echo "selected" ?>>BA LLB</option>
                                            <option value='Bachelor' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Bachelor") echo "selected" ?>>Bachelor</option>
                                            <option value='Bachelor of Physiotherapy' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Bachelor of Physiotherapy") echo "selected" ?>>Bachelor
                                              of Physiotherapy</option>
                                            <option value='BAMS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BAMS") echo "selected" ?>>BAMS</option>
                                            <option value='BBA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BBA") echo "selected" ?>>BBA</option>
                                            <option value='BCA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == 'BCA') echo "selected" ?>>BCA</option>
                                            <option value='BDS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BDS") echo "selected" ?>>BDS</option>
                                            <option value='BE B.Tech' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BE B.Tech") echo "selected" ?>>BE B.Tech</option>
                                            <option value='BHM' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BHM") echo "selected" ?>>BHM</option>
                                            <option value='BHMS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "BHMS") echo "selected" ?>>BHMS</option>
                                            <option value='CA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "CA") echo "selected" ?>>CA</option>
                                            <option value='CS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "CS") echo "selected" ?>>CS</option>
                                            <option value='Diploma' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Diploma") echo "selected" ?>>Diploma</option>
                                            <option value='High school' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "High school") echo "selected" ?>>High school</option>
                                            <option value='ICWA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "ICWA") echo "selected" ?>>ICWA</option>
                                            <option value='Integrated PG' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Integrated PG") echo "selected" ?>>Integrated PG</option>
                                            <option value='Intermediate' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Intermediate") echo "selected" ?>>Intermediate</option>
                                            <option value='LLB' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "LLB") echo "selected" ?>>LLB</option>
                                            <option value='M.Arch' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Arch") echo "selected" ?>>M.Arch</option>
                                            <option value='M.Com' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Com") echo "selected" ?>>M.Com</option>
                                            <option value='M.Ed' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Ed") echo "selected" ?>>M.Ed</option>
                                            <option value='M.Pharm' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Pharm") echo "selected" ?>>M.Pharm</option>
                                            <option value='M.Phil' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Phil") echo "selected" ?>>M.Phil</option>
                                            <option value='M.Sc<?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Sc") echo "selected" ?>'>M.Sc</option>
                                            <option value='M.Tech' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.Tech") echo "selected" ?>>M.Tech</option>
                                            <option value='M.V.Sc.' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "M.V.Sc.") echo "selected" ?>>M.V.Sc.</option>
                                            <option value='MA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MA") echo "selected" ?>>MA</option>
                                            <option value='Master of Fine Arts' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Master of Fine Arts") echo "selected" ?>>Master of Fine
                                              Arts</option>
                                            <option value='Master of Physiotherapy' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Master of Physiotherapy") echo "selected" ?>>Master of
                                              Physiotherapy</option>
                                            <option value='Masters' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Masters") echo "selected" ?>>Masters</option>
                                            <option value='MBA PGDM' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MBA PGDM") echo "selected" ?>>MBA PGDM</option>
                                            <option value='MBA PGDM' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MBA") echo "selected" ?>>MBA </option>
                                            <option value='MBA PGDM part time' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MBA PGDM part time") echo "selected" ?>>MBA PGDM part
                                              time</option>
                                            <option value='MBBS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MBBS") echo "selected" ?>>MBBS</option>
                                            <option value='MCA PGDCA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MCA PGDCA") echo "selected" ?>>MCA PGDCA</option>
                                            <option value='MCA PGDCA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MCA") echo "selected" ?>>MCA</option>
                                            <option value='MCA PGDCA part time' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MCA PGDCA part time") echo "selected" ?>>MCA PGDCA part
                                              time</option>
                                            <option value='MD' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MD") echo "selected" ?>>MD</option>
                                            <option value='MD MS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MD MS") echo "selected" ?>>MD MS</option>
                                            <option value='MDS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MDS") echo "selected" ?>>MDS</option>
                                            <option value='ME M.Tech' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "ME M.Tech") echo "selected" ?>>ME M.Tech</option>
                                            <option value='ML LLM' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "ML LLM") echo "selected" ?>>ML LLM</option>
                                            <option value='MS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MS") echo "selected" ?>>MS</option>
                                            <option value='MS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MS") echo "selected" ?>>MS</option>
                                            <option value='Others' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Others") echo "selected" ?>>Others</option>
                                            <option value='PGDBM' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "PGDBM") echo "selected" ?>>PGDBM</option>
                                            <option value='PhD doctorate' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "PhD doctorate") echo "selected" ?>>PhD doctorate</option>
                                            <option value='Post graduation' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Post graduation") echo "selected" ?>>Post graduation
                                            </option>
                                            <option value='Undergraduate' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "Undergraduate") echo "selected" ?>>Undergraduate</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button666" type="button" id="button666" onClick="javascript:addEducation()" value="Add" class="btn-2 btn-default" style="width:100%">
                                          <br>
                                          <input name="button6666" type="button" id="button6666" onClick="javascript:deleteEducation()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="cmbedu" style="height:81px!important;" multiple="" id="education_data" class="form-control" style="width:100%">
                                            <option value="">Any</option>
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
                                          <select name='occupation' onchange='ddchange(this.value);newddchange(this);' id='occupation-dropdown' class='required form-control combo' style='0'>
                                            <option value='0' selected='selected'>--- Select
                                              Occupation ---</option>
                                            <option value='Accounts' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Accounts") echo "selected" ?>>Accounts</option>
                                            <option value='Administrative Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Administrative Professional") echo "selected" ?>>
                                              Administrative Professional</option>
                                            <option value='Advertising' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Advertising") echo "selected" ?>>Advertising</option>
                                            <option value='Agriculture' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Agriculture") echo "selected" ?>>Agriculture</option>
                                            <option value='Air Hostess' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Air Hostess") echo "selected" ?>>Air Hostess</option>
                                            <option value='Airline Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Airline Professional") echo "selected" ?>>Airline
                                              Professional</option>
                                            <option value='Architect' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Architect") echo "selected" ?>>Architect</option>
                                            <option value='Arts & Craftsman' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Arts & Craftsman") echo "selected" ?>>Arts &amp;
                                              Craftsman</option>
                                            <option value='Auditor' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Auditor") echo "selected" ?>>Auditor</option>
                                            <option value='Banking Service Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Banking Service Professional") echo "selected" ?>>Banking
                                              Service Professional</option>
                                            <option value='Beautician' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Beautician") echo "selected" ?>>Beautician</option>
                                            <option value='Business' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Business") echo "selected" ?>>Business</option>
                                            <option value='CEO / President/Director/Chairman' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "CEO / President/Director/Chairman") echo "selected" ?>>
                                              CEO / President/Director/Chairman</option>
                                            <option value='Chartered Accountant' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Chartered Accountant") echo "selected" ?>>Chartered
                                              Accountant</option>
                                            <option value='Clerk' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Clerk") echo "selected" ?>>Clerk</option>
                                            <option value='Company Secretary' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Company Secretary") echo "selected" ?>>Company Secretary
                                            </option>
                                            <option value='Consultant' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Consultant") echo "selected" ?>>Consultant</option>
                                            <option value='Cost Accountant' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Cost Accountant") echo "selected" ?>>Cost Accountant
                                            </option>
                                            <option value='Customer Care Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Customer Care Professional") echo "selected" ?>>Customer
                                              Care Professional</option>
                                            <option value='Doctor' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Doctor") echo "selected" ?>>Doctor</option>
                                            <option value='Education Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Education Professional") echo "selected" ?>>Education
                                              Professional</option>
                                            <option value='Engineer - IT' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Engineer - IT") echo "selected" ?>>Engineer - IT</option>
                                            <option value='Engineer - Non IT' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Engineer - Non IT") echo "selected" ?>>Engineer - Non IT
                                            </option>
                                            <option value='Entertainment Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Entertainment Professional") echo "selected" ?>>
                                              Entertainment Professional</option>
                                            <option value='Executive' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Executive") echo "selected" ?>>Executive</option>
                                            <option value='Farming Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Farming Professional") echo "selected" ?>>Farming
                                              Professional</option>
                                            <option value='Fashion Designer' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Fashion Designer") echo "selected" ?>>Fashion Designer
                                            </option>
                                            <option value='Finance Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Finance Professional") echo "selected" ?>>Finance
                                              Professional</option>
                                            <option value='Hardware Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Hardware Professional") echo "selected" ?>>Hardware
                                              Professional</option>
                                            <option value='Health Care Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Health Care Professional") echo "selected" ?>>Health Care
                                              Professional</option>
                                            <option value='Hotel / Hospitality Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Hotel / Hospitality Professional") echo "selected" ?>>
                                              Hotel / Hospitality Professional</option>
                                            <option value='Interior Designer' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Interior Designer") echo "selected" ?>>Interior Designer
                                            </option>
                                            <option value='Journalist' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Journalist") echo "selected" ?>>Journalist</option>
                                            <option value='Lawyer' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Lawyer") echo "selected" ?>>Lawyer
                                            </option>
                                            <option value='Lecturer' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Lecturer") echo "selected" ?>>Lecturer</option>
                                            <option value='Legal Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Legal Professional") echo "selected" ?>>Legal
                                              Professional</option>
                                            <option value='Manager' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Manager") echo "selected" ?>>Manager</option>
                                            <option value='Mariner / Merchant Navy' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "") echo "selected" ?>>Mariner /
                                              Merchant Navy</option>
                                            <option value='Marketing Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Marketing Professional") echo "selected" ?>>Marketing
                                              Professional</option>
                                            <option value='Media Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Media Professional") echo "selected" ?>>Media
                                              Professional</option>
                                            <option value='Not Working' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Not Working") echo "selected" ?>>Not Working</option>
                                            <option value='Nurse' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Nurse") echo "selected" ?>>Nurse</option>
                                            <option value='Officer' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Officer") echo "selected" ?>>Officer</option>
                                            <option value='Others' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Others") echo "selected" ?>>Others</option>
                                            <option value='Paramedical Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Paramedical Professional") echo "selected" ?>>Paramedical
                                              Professional</option>
                                            <option value='Pilot' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Pilot") echo "selected" ?>>Pilot</option>
                                            <option value='PR Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "PR Professional") echo "selected" ?>>PR Professional
                                            </option>
                                            <option value='Professor' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Professor") echo "selected" ?>>Professor</option>
                                            <option value='Researcher' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Researcher") echo "selected" ?>>Researcher</option>
                                            <option value='Sales Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Sales Professional") echo "selected" ?>>Sales
                                              Professional</option>
                                            <option value='Scientist' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Scientist") echo "selected" ?>>Scientist</option>
                                            <option value='Social Worker' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "") echo "selected" ?>>Social Worker</option>
                                            <option value='Software Professional' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Software Professional") echo "selected" ?>>Software
                                              Professional</option>
                                            <option value='Sportsman' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Sportsman") echo "selected" ?>>Sportsman</option>
                                            <option value='Supervisors' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Supervisors") echo "selected" ?>>Supervisors</option>
                                            <option value='Teaching / Academician' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Teaching / Academician") echo "selected" ?>>Teaching /
                                              Academician</option>
                                            <option value='Technician' <?php if (isset($preference[0]->occupation)) if ($preference[0]->occupation == "Technician") echo "selected" ?>>Technician</option>
                                          </select>
                                        </div>
                                        <div class="col-sm-2 col-md-2 mt-35">
                                          <input name="button6" class="btn-2 btn-default" type="button" id="button6" onClick="javascript:addOccupation()" value="Add" style="width:100%">
                                          <br>
                                          <input name="button66" class="btn-2 btn-default" type="button" id="button66" onClick="javascript:deleteOccupation()" value="Remove" style="width:100%">
                                        </div>
                                        <div class="col-sm-5 col-md-5 no-padding">
                                          <select name="cmboccu" style="height:81px!important;" multiple="multiple" id="occupation_data" class="form-control" style="width:100%">
                                            <option value="">Any</option>
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
                                      <input type="checkbox" name="employed_in" value="Government" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Government") echo "checked" ?> />Government </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Private" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Private") echo "checked" ?> />
                                      Private&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Business" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Business") echo "checked" ?> />
                                      Business&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Defence" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Defence") echo "checked" ?> />
                                      Defence&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Public Sector" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Public Sector") echo "checked" ?> />
                                      Public Sector &nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Not working" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Not Working") echo "checked" ?> />
                                      Not working&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Others" onClick="chemp(this, this.value)" class="t1 chemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Others") echo "checked" ?> />
                                      Others&nbsp; </label>
                                    <label style="text-align:left; padding-bottom:20px;">
                                      <input type="checkbox" name="employed_in" value="Any" onClick="chemp(this, this.value)" class="t1 chemp" id="Anyemp" <?php if (isset($preference[0]->employed_in)) if ($preference[0]->employed_in == "Any") echo "checked" ?> />
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
                                        <select name='annual_income_min' onchange='ddchange(this.value);newddchange(this);' id='incomefrom' class='form-control' style='background-color:#fff;color: #000;
       border-color: rgb(169, 169, 169);'>
                                          <option value='0' selected='selected'>Min</option>
                                          <option value='0' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "0") echo "checked" ?>>0</option>
                                          <option value='25000' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "0") echo "checked" ?>>25000</option>
                                          <option value='50001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "25000") echo "checked" ?>>50001</option>
                                          <option value='50001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "50001") echo "checked" ?>>50001</option>
                                          <option value='75001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "75001") echo "checked" ?>>75001</option>
                                          <option value='100001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "100001") echo "checked" ?>>100001
                                          </option>
                                          <option value='100001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "100001") echo "checked" ?>>100001
                                          </option>
                                          <option value='150001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "150001") echo "checked" ?>>150001
                                          </option>
                                          <option value='200001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "200001") echo "checked" ?>>200001
                                          </option>
                                          <option value='200001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "200001") echo "checked" ?>>200001
                                          </option>
                                          <option value='300001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "300001") echo "checked" ?>>300001
                                          </option>
                                          <option value='400001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "400001") echo "checked" ?>>400001
                                          </option>
                                          <option value='500001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "500001") echo "checked" ?>>500001
                                          </option>
                                          <option value='700001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "700001") echo "checked" ?>>700001
                                          </option>
                                          <option value='1000001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "1000001") echo "checked" ?>>1000001
                                          </option>
                                          <option value='1500001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "1500001") echo "checked" ?>>1500001
                                          </option>
                                          <option value='2000001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "2000001") echo "checked" ?>>2000001
                                          </option>
                                          <option value='3000001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "3000001") echo "checked" ?>>3000001
                                          </option>
                                          <option value='4000001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "4000001") echo "checked" ?>>4000001
                                          </option>
                                          <option value='5000001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "5000001") echo "checked" ?>>5000001
                                          </option>
                                          <option value='7500001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "7500001") echo "checked" ?>>7500001
                                          </option>
                                          <option value='10000001' <?php if (isset($preference[0]->annual_income_min)) if ($preference[0]->annual_income_min == "10000001") echo "checked" ?>>10000001
                                          </option>
                                        </select>
                                      </div>
                                      <div class="col-sm-2 col-md-2" style="text-align:center">
                                        <p> To </p>
                                      </div>

                                      <div class="col-sm-5 col-md-5">
                                        <select name='annual_income_max' onchange='ddchange(this.value);newddchange(this);' id='incomefrom' class='form-control' style='background-color:#fff;color: #000;
       border-color: rgb(169, 169, 169);'>
                                          <option value='0' selected='selected'>Min</option>
                                          <option value='0' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "0") echo "checked" ?>>0</option>
                                          <option value='25000' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "0") echo "checked" ?>>25000</option>
                                          <option value='50001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "25000") echo "checked" ?>>50001</option>
                                          <option value='50001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "50001") echo "checked" ?>>50001</option>
                                          <option value='75001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "75001") echo "checked" ?>>75001</option>
                                          <option value='100001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "100001") echo "checked" ?>>100001
                                          </option>
                                          <option value='100001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "100001") echo "checked" ?>>100001
                                          </option>
                                          <option value='150001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "150001") echo "checked" ?>>150001
                                          </option>
                                          <option value='200001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "200001") echo "checked" ?>>200001
                                          </option>
                                          <option value='200001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "200001") echo "checked" ?>>200001
                                          </option>
                                          <option value='300001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "300001") echo "checked" ?>>300001
                                          </option>
                                          <option value='400001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "400001") echo "checked" ?>>400001
                                          </option>
                                          <option value='500001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "500001") echo "checked" ?>>500001
                                          </option>
                                          <option value='700001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "700001") echo "checked" ?>>700001
                                          </option>
                                          <option value='1000001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "1000001") echo "checked" ?>>1000001
                                          </option>
                                          <option value='1500001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "1500001") echo "checked" ?>>1500001
                                          </option>
                                          <option value='2000001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "2000001") echo "checked" ?>>2000001
                                          </option>
                                          <option value='3000001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "3000001") echo "checked" ?>>3000001
                                          </option>
                                          <option value='4000001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "4000001") echo "checked" ?>>4000001
                                          </option>
                                          <option value='5000001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "5000001") echo "checked" ?>>5000001
                                          </option>
                                          <option value='7500001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "7500001") echo "checked" ?>>7500001
                                          </option>
                                          <option value='10000001' <?php if (isset($preference[0]->annual_income_max)) if ($preference[0]->annual_income_max == "10000001") echo "checked" ?>>10000001
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
                                  <select name='citizenship' id='dd' class='required form-control combo' style=''>
                                    <?php foreach ($country as $list) { ?>
                                      <option value="<?php echo $list->id; ?>" <?php if (isset($preference[0]->citizenship)) if ($preference[0]->citizenship == $list->id) echo "selected" ?>><?php echo $list->name; ?></option>
                                    <?php } ?>
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
                                  <select name='country_living' id='country-dropdown1' class='required form-control combo' style=''>
                                    <?php foreach ($country as $list) { ?>
                                      <option value="<?php echo $list->id; ?>" <?php if (isset($preference[0]->country_living)) if ($preference[0]->country_living == $list->id) echo "selected" ?>><?php echo $list->name; ?></option>
                                    <?php } ?>
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
                                      <select class="form-control form-select form-select-lg mb-3" name="residing_state" aria-label=".form-select-lg example" id="state-dropdown1">
                                        <option value="">Select State</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-2 col-md-2 mt-35">
                                      <input name="button42" type="button" id="button42" onClick="javascript:addRState()" value="Add" class="btn-2 btn-default" style="width:100%"><br>
                                      <input name="button442" type="button" id="button442" onClick="javascript:deleteRState()" value="Remove" class="btn-2 btn-default" style="width:100%">
                                    </div>
                                    <div class="col-sm-5 col-md-5 no-padding">
                                      <select name="lststate" id="state_data" style="height:81px!important;" multiple="multiple" id="select6" class="form-control" style="width:100%">
                                        <option value="">Any</option>
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
                                  <label> <input name="residing_status" type="radio" value="Permanent resident" <?php if (isset($preference[0]->residing_status)) if ($preference[0]->residing_status == "Permanent") echo "checked" ?>> Permanent
                                    resident </label>
                                  <label> <input name="rstatus" type="radio" value="Work Permit" <?php if (isset($preference[0]->residing_status)) if ($preference[0]->residing_status == "Work Permit") echo "checked" ?>> Work Permit </label>
                                  <label> <input name="rstatus" type="radio" value="Student Visa" <?php if (isset($preference[0]->residing_status)) if ($preference[0]->residing_status == "Student Visa") echo "checked" ?>> Student Visa </label>
                                  <label> <input name="rstatus" type="radio" value="Temperory Visa" <?php if (isset($preference[0]->residing_status)) if ($preference[0]->residing_status == "Temporary Visa") echo "checked" ?>> Temporary Visa
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
                              <p class="para1"><b>Birth Time :</b> <span><?php if (isset($astrological[0]->birth_hh)) echo $astrological[0]->birth_hh + ":" + $astrological[0]->birth_mm + " " + $astrological[0]->birth_am;
                                                                          else echo "-----" ?></span></p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Birth Place :</b> <span><?php if (isset($astrological[0]->birth_place)) echo $astrological[0]->birth_place;
                                                                          else echo "-----" ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Gan :</b> <span><?php if (isset($astrological[0]->gan)) echo $astrological[0]->gan;
                                                                  else echo "-----" ?></span> </p>
                            </div>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="row">

                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Raasi / Moon sign :</b> <span><?php if (isset($astrological[0]->rashi)) echo $astrological[0]->rashi;
                                                                                else echo "-----" ?></span>
                              </p>
                            </div>
                            <div class="col-md-6 col-sm-4 col-xs-6">
                              <p class="para1"><b>Nadi :</b> <span><?php if (isset($astrological[0]->nadi)) echo $astrological[0]->nadi;
                                                                    else echo "-----" ?></span></h6>
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
                              <form name="form-editastro" action="UpdateProfile/editAstrologicalDetails" method="POST" enctype="multipart/form-data" class="bookatable-form1" id="form-editastro">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <label class="control-label">Birth
                                        Time</label>
                                    </div>
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <select name="birth_hh" size="1" id="hh" class="required form-control">
                                        <option selected="selected">HH</option>
                                        <option value='00' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "00") echo "selected" ?>>00</option>
                                        <option value='01' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "01") echo "selected" ?>>01</option>
                                        <option value='02' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "02") echo "selected" ?>>02</option>
                                        <option value='03' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "03") echo "selected" ?>>03</option>
                                        <option value='04' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "04") echo "selected" ?>>04</option>
                                        <option value='05' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "05") echo "selected" ?>>05</option>
                                        <option value='06' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "06") echo "selected" ?>>06</option>
                                        <option value='07' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "07") echo "selected" ?>>07</option>
                                        <option value='08' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "08") echo "selected" ?>>08</option>
                                        <option value='09' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "09") echo "selected" ?>>09</option>
                                        <option value='10' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "10") echo "selected" ?>>10</option>
                                        <option value='11' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "11") echo "selected" ?>>11</option>
                                        <option value='12' <?php if (isset($astrological[0]->birth_hh)) if ($astrological[0]->birth_hh == "12") echo "selected" ?>>12</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <select name="birth_mm" size="1" id="mm" class="required form-control">
                                        <option selected="selected">MM</option>
                                        <option value='00' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "00") echo "selected" ?>>00</option>
                                        <option value='01' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "01") echo "selected" ?>>01</option>
                                        <option value='02' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "02") echo "selected" ?>>02</option>
                                        <option value='03' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "03") echo "selected" ?>>03</option>
                                        <option value='04' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "04") echo "selected" ?>>04</option>
                                        <option value='05' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "05") echo "selected" ?>>05</option>
                                        <option value='06' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "06") echo "selected" ?>>06</option>
                                        <option value='07' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "07") echo "selected" ?>>07</option>
                                        <option value='08' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "08") echo "selected" ?>>08</option>
                                        <option value='09' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "09") echo "selected" ?>>09</option>
                                        <option value='10' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "10") echo "selected" ?>>10</option>
                                        <option value='11' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "11") echo "selected" ?>>11</option>
                                        <option value='12' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "12") echo "selected" ?>>12</option>
                                        <option value='13' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "13") echo "selected" ?>>13</option>
                                        <option value='14' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "14") echo "selected" ?>>14</option>
                                        <option value='15' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "15") echo "selected" ?>>15</option>
                                        <option value='16' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "16") echo "selected" ?>>16</option>
                                        <option value='17' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "17") echo "selected" ?>>17</option>
                                        <option value='18' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "18") echo "selected" ?>>18</option>
                                        <option value='19' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "19") echo "selected" ?>>19</option>
                                        <option value='20' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "20") echo "selected" ?>>20</option>
                                        <option value='21' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "21") echo "selected" ?>>21</option>
                                        <option value='22' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "22") echo "selected" ?>>22</option>
                                        <option value='23' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "23") echo "selected" ?>>23</option>
                                        <option value='24' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "24") echo "selected" ?>>24</option>
                                        <option value='25' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "25") echo "selected" ?>>25</option>
                                        <option value='26' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "26") echo "selected" ?>>26</option>
                                        <option value='27' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "27") echo "selected" ?>>27</option>
                                        <option value='28' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "28") echo "selected" ?>>28</option>
                                        <option value='29' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "29") echo "selected" ?>>29</option>
                                        <option value='30' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "30") echo "selected" ?>>30</option>
                                        <option value='31' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "31") echo "selected" ?>>31</option>
                                        <option value='32' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "32") echo "selected" ?>>32</option>
                                        <option value='33' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "33") echo "selected" ?>>33</option>
                                        <option value='34' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "34") echo "selected" ?>>34</option>
                                        <option value='35' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "35") echo "selected" ?>>35</option>
                                        <option value='36' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "36") echo "selected" ?>>36</option>
                                        <option value='37' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "37") echo "selected" ?>>37</option>
                                        <option value='38' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "38") echo "selected" ?>>38</option>
                                        <option value='39' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "39") echo "selected" ?>>39</option>
                                        <option value='40' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "40") echo "selected" ?>>40</option>
                                        <option value='41' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "41") echo "selected" ?>>41</option>
                                        <option value='42' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "42") echo "selected" ?>>42</option>
                                        <option value='43' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "43") echo "selected" ?>>43</option>
                                        <option value='44' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "44") echo "selected" ?>>44</option>
                                        <option value='45' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "45") echo "selected" ?>>45</option>
                                        <option value='46' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "46") echo "selected" ?>>46</option>
                                        <option value='47' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "47") echo "selected" ?>>47</option>
                                        <option value='48' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "48") echo "selected" ?>>48</option>
                                        <option value='49' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "49") echo "selected" ?>>49</option>
                                        <option value='50' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "50") echo "selected" ?>>50</option>
                                        <option value='51' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "51") echo "selected" ?>>51</option>
                                        <option value='52' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "52") echo "selected" ?>>52</option>
                                        <option value='53' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "53") echo "selected" ?>>53</option>
                                        <option value='54' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "54") echo "selected" ?>>54</option>
                                        <option value='55' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "55") echo "selected" ?>>55</option>
                                        <option value='56' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "56") echo "selected" ?>>56</option>
                                        <option value='57' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "57") echo "selected" ?>>57</option>
                                        <option value='58' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "58") echo "selected" ?>>58</option>
                                        <option value='59' <?php if (isset($astrological[0]->birth_mm)) if ($astrological[0]->birth_mm == "59") echo "selected" ?>>59</option>
                                      </select>
                                    </div>
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <select name="birth_am" size="1" id="ampm" class="required combo form-control">
                                        <option value="am" <?php if (isset($astrological[0]->birth_am)) if ($astrological[0]->birth_am == "am") echo "selected" ?>>AM</option>
                                        <option value="pm" <?php if (isset($astrological[0]->birth_am)) if ($astrological[0]->birth_am == "pm") echo "selected" ?>>PM</option>
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
                                      <input name="birth_place" type="text" id="txtbirthplace" class=" form-control description" value="<?php if (isset($astrological[0]->birth_place)) echo $astrological[0]->birth_place;
                                                                                                                                        else echo "-----" ?>" maxlength="130">
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
                                      <input name="gan" type="text" class="form-control description" id="gan" value="<?php if (isset($astrological[0]->gan)) echo $astrological[0]->gan;
                                                                                                                      else echo "-----" ?>" maxlength="120">
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
                                      <input name="nadi" type="text" class="form-control description" value="<?php if (isset($astrological[0]->nadi)) echo $astrological[0]->nadi;
                                                                                                              else echo "-----" ?>" id="nadi" size="15" maxlength="20">
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
                                      <input name="gotra" type="text" class="form-control description" value="<?php if (isset($astrological[0]->gotra)) echo $astrological[0]->gotra;
                                                                                                              else echo "-----" ?>" maxlength="50">
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
                                        <option selected="selected">-
                                          Optional - </option>
                                        <option value="" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "") echo "selected" ?> value="" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "") echo "selected" ?>>Anuradha / Anusham / Anizham
                                        </option>
                                        <option value="Ardra / Thiruvathira" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Ardra / Thiruvathira") echo "selected" ?>>Ardra / Thiruvathira </option>
                                        <option value="Ashlesha / Ayilyam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Ashlesha / Ayilyam") echo "selected" ?>>Ashlesha / Ayilyam </option>
                                        <option value="Ashwini / Ashwathi" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Ashwini / Ashwathi") echo "selected" ?>>Ashwini / Ashwathi </option>
                                        <option value="Bharani" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Bharani") echo "selected" ?>>Bharani </option>
                                        <option value="Chitra / Chitha" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Chitra / Chitha") echo "selected" ?>>Chitra / Chitha </option>
                                        <option value="Dhanista / Avittam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Dhanista / Avittam") echo "selected" ?>>Dhanista / Avittam </option>
                                        <option value="Hastha / Atham" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Hastha / Atham") echo "selected" ?>>Hastha / Atham </option>
                                        <option value="Jyesta / Kettai" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Jyesta / Kettai") echo "selected" ?>>Jyesta / Kettai </option>
                                        <option value="Krithika / Karthika" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Krithika / Karthika") echo "selected" ?>>Krithika / Karthika </option>
                                        <option value="Makha / Magam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Makha / Magam") echo "selected" ?>>Makha / Magam </option>
                                        <option value="Moolam / Moola" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Moolam / Moola") echo "selected" ?>>Moolam / Moola </option>
                                        <option value="Mrigasira / Makayiram" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Mrigasira / Makayiram") echo "selected" ?>>Mrigasira / Makayiram </option>
                                        <option value="Poorvabadrapada / Puratathi" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Poorvabadrapada / Puratathi") echo "selected" ?>>Poorvabadrapada / Puratathi
                                        </option>
                                        <option value="Poorvapalguni / Puram / Pubbhe" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Poorvapalguni / Puram / Pubbhe") echo "selected" ?>>Poorvapalguni / Puram / Pubbhe
                                        </option>
                                        <option value="Poorvashada / Pooradam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Poorvashada / Pooradam") echo "selected" ?>>Poorvashada / Pooradam </option>

                                        <option value="Punarvasu / Punarpusam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Punarvasu / Punarpusam") echo "selected" ?>>Punarvasu / Punarpusam </option>
                                        <option value="Pushya / Poosam / Pooyam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Pushya / Poosam / Pooyam") echo "selected" ?>>Pushya / Poosam / Pooyam
                                        </option>
                                        <option value="Revathi" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Revathi") echo "selected" ?>>Revathi </option>
                                        <option value="Rohini" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Rohini") echo "selected" ?>>Rohini </option>
                                        <option value="Shatataraka / Sadayam / Satabishek" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Shatataraka / Sadayam / Satabishek") echo "selected" ?>>Shatataraka / Sadayam /
                                          Satabishek </option>
                                        <option value="Shravan / Thiruvonam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Shravan / Thiruvonam") echo "selected" ?>>Shravan / Thiruvonam </option>
                                        <option value="Swati / Chothi" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Swati / Chothi") echo "selected" ?>>Swati / Chothi </option>
                                        <option value="Uttarabadrapada / Uthratadhi" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Uttarabadrapada / Uthratadhi") echo "selected" ?>>Uttarabadrapada / Uthratadhi
                                        </option>
                                        <option value="Uttarapalguni / Uthram" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Uttarapalguni / Uthram") echo "selected" ?>>Uttarapalguni / Uthram </option>
                                        <option value="Uttarashada / Uthradam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Uttarashada / Uthradam") echo "selected" ?>>Uttarashada / Uthradam </option>
                                        <option value="Vishaka / Vishakam" <?php if (isset($astrological[0]->star)) if ($astrological[0]->star == "Vishaka / Vishakam") echo "selected" ?>>Vishaka / Vishakam </option>
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
                                      <select name="rashi" id="rasi_dd" class=" form-control">
                                        <option value="">- Optional -</option>
                                        <option value="Dhanu (Sagittarius)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Dhanu (Sagittarius)") echo "selected" ?>>Dhanu (Sagittarius)</option>
                                        <option value="Kanya (Virgo)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Kanya (Virgo)") echo "selected" ?>>Kanya (Virgo)</option>
                                        <option value="Kark (Cancer)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Kark (Cancer)") echo "selected" ?>>Kark (Cancer)</option>
                                        <option value="Kumbh (Aquarius)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Kumbh (Aquarius)") echo "selected" ?>>Kumbh (Aquarius)</option>
                                        <option value="Makar (Capricorn)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Makar (Capricorn)") echo "selected" ?>>Makar (Capricorn)</option>
                                        <option value="Meen (Pisces)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Meen (Pisces)") echo "selected" ?>>Meen (Pisces)</option>
                                        <option value="Mesh (Aries)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Mesh (Aries)") echo "selected" ?>>Mesh (Aries)</option>
                                        <option value="Mithun (Gemini)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Mithun (Gemini)") echo "selected" ?>>Mithun (Gemini)</option>
                                        <option value="Simha (Leo)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Simha (Leo)") echo "selected" ?>>Simha (Leo)</option>
                                        <option value="Tula (Libra)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Tula (Libra)") echo "selected" ?>>Tula (Libra)</option>
                                        <option value="Vrishabh (Taurus)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Vrishabh (Taurus)") echo "selected" ?>>Vrishabh (Taurus)</option>
                                        <option value="Vrishchik (Scorpio)" <?php if (isset($astrological[0]->rashi)) if ($astrological[0]->rashi == "Vrishchik (Scorpio)") echo "selected" ?>>Vrishchik (Scorpio)</option>
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
                                        <input type="radio" class='required' name="horoscope_match" value="Required" <?php if (isset($astrological[0]->horoscope_match)) if ($astrological[0]->horoscope_match == "Required") echo "checked" ?>>
                                        Required
                                        <input type="radio" class='required' name="horoscope_match" value="Does not Matter" <?php if (isset($astrological[0]->horoscope_match)) if ($astrological[0]->horoscope_match == "Does not Matter") echo "checked" ?>>
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
                                      <input type="file" name="horoscope_file" id="horoscope_file" value="<?php if (isset($astrological[0]->horoscope_file)) echo $astrological[0]->horoscope_file;  ?>" class="form-control" />
                                      <p align="left"> ( only pdf or jpg format)
                                      </p>
                                    </div>
                                  </div>
                                </div>

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Check Horoscope file
                                        :</label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">

                                      <a href="<?php if ($astrological[0]->horoscope_file) echo base_url('Documents/horoscopefile/' . $astrological[0]->horoscope_file); ?>" target="_blank">Click here to download</a>
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
                              <form name="form-editastro" action="UpdateProfile/uploadDocument" method="POST" enctype="multipart/form-data" class="bookatable-form1" id="form-editastro">

                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Select Document
                                        Type<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <select name="document_name" id="ddlphototype1" required='true' class="required form-control combo">
                                        <option value="">--- Select Document
                                          Type ---</option>
                                        <option value="cert1">
                                          Certificate 1</option>
                                        <option value="cert2">
                                          Certificate 2</option>
                                        <option value="cert3">
                                          Certificate 3</option>
                                        <option value="id_proof">ID Proof
                                        </option>
                                        <option value="add_proof">Address
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
                                      <input type="file" name="document" id="fileupload1" class="required form-control combo" accept="application/pdf, image/*" required />
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
                          <p style=" text-align: center;"><b><?php if (isset($reference[0]->ref1)) echo $reference[0]->ref1;
                                                              else echo "-----" ?></b></p><br>
                          <p> </p>
                        </div>
                        <div class="col-md-6">
                          <p style=" text-align: center;"><b><?php if (isset($reference[0]->ref2)) echo $reference[0]->ref2;
                                                              else echo "-----" ?></b></p><br>
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
                              <form action="UpdateProfile/editReference" method="post" style="height:auto" name="form-reference" class="bookatable-form1" id="form-reference">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3">
                                      <label class="control-label">Reference
                                        1<span class="text-danger">*</span></label>
                                    </div>
                                    <div class="col-sm-9 col-md-9">
                                      <textarea name="ref1" id="ref1" class="required form-control description"><?php if (isset($reference[0]->ref1)) echo $reference[0]->ref1;
                                                                                                                else echo "-----" ?></textarea>
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
                                      <textarea name="ref2" id="ref2" class=" form-control description"><?php if (isset($reference[0]->ref2)) echo $reference[0]->ref2;
                                                                                                        else echo "-----" ?></textarea>
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


                              <form id="form-changepassword" action="UpdateProfile/changePassword" class="bookatable-form1" method="post" style="height:auto">
                                <div class="form-group">
                                  <div class="row">
                                    <div class="col-sm-3 col-md-3 mb-15">
                                      <label class="control-label">Old Password
                                        <span class="text-danger">*</span>
                                      </label>
                                    </div>
                                    <div class="col-sm-9 col-md-9 mb-15">
                                      <input type="password" name="opassword" id="txtoldpass" maxlength="25" class="required pass form-control password" />
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
                                      <input type="password" name="password" id="txtpass" maxlength="25" class="required password pass space form-control password" />
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
                                      <input type="password" name="repassword" id="txtcpass" maxlength="25" class="required password pass space form-control password" />
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
  <?php
  $msg = $this->session->flashdata('msg');
  if (isset($msg)) { ?>
    <p id="msg" value="<?php echo $msg ?>"> </p>
  <?php } ?>
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

    $('#country-dropdown1').on('change', function() {
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
          $("#state-dropdown1").html(result);
          // $('#city-dropdown').html('<option value="">Select State First</option>'); 
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

    $('#religion-dropdown1').on('change', function() {
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
          $("#caste-dropdown1").html(result);
        }
      });
    });



    function addMotherTongue() {
      var mother_tongue = document.getElementById("mother_t").value;
      // alert(mother_t)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/addMotherTonguePreference",
        type: "POST",
        data: {
          mother_tongue: mother_tongue
        },
        cache: false,
        success: function(result) {
          $("#mother_tongue_dropdown").html(result);
        }
      });
    }

    function addReligion() {
      var religion_id = document.getElementById("religion-dropdown1").value;
      // alert(mother_t)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/addReligionPreference",
        type: "POST",
        data: {
          religion_id: religion_id
        },
        cache: false,
        success: function(result) {
          $("#religion_data").html(result);
        }
      });
    }

    function addCaste() {
      var caste_id = document.getElementById("caste-dropdown1").value;
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/addCastePreference",
        type: "POST",
        data: {
          caste_id: caste_id
        },
        cache: false,
        success: function(result) {
          $("#caste_data").html(result);
        }
      });
    }

    function addEducation() {
      var education = document.getElementById("education-dropdown").value;
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/addEducationPreference",
        type: "POST",
        data: {
          education: education
        },
        cache: false,
        success: function(result) {
          $("#education_data").html(result);
        }
      });

    }

    function addOccupation() {
      var occupation = document.getElementById("occupation-dropdown").value;
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/addOccupationP",
        type: "POST",
        data: {
          occupation: occupation
        },
        cache: false,
        success: function(result) {
          $("#occupation_data").html(result);
        }
      });
    }

    function addRState() {
      var state_id = document.getElementById("state-dropdown1").value;
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/addRState",
        type: "POST",
        data: {
          state_id: state_id
        },
        cache: false,
        success: function(result) {
          $("#state_data").html(result);
        }
      });
    }

    function deleteRState() {
      var state_id = document.getElementById("state_data").value;
      // alert(mother_tongue)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/deleteRState",
        type: "POST",
        data: {
          state_id: state_id
        },
        cache: false,
        success: function(result) {
          $("#state_data").html(result);
        }
      });
    }

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/getRState",
        type: "GET",
        cache: false,
        success: function(result) {
          $("#state_data").html(result);
        }
      });
    });

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/getOccupationP",
        type: "GET",
        cache: false,
        success: function(result) {
          $("#occupation_data").html(result);
        }
      });
    });
    $(document).ready(function() {
      var msg = document.getElementById("msg").value;
      alert("Profile Updated!!")
    });

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/getEducationP",
        type: "GET",
        cache: false,
        success: function(result) {
          $("#education_data").html(result);
        }
      });
    });

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/fetchCastePreference",
        type: "GET",
        cache: false,
        success: function(result) {
          $("#caste_data").html(result);
        }
      });
    });

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/fetchMotherT",
        type: "GET",
        cache: false,
        success: function(result) {
          $("#mother_tongue_dropdown").html(result);
        }
      });
    });

    $(document).ready(function() {
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/fetchReligion",
        type: "GET",
        cache: false,
        success: function(result) {
          $("#religion_data").html(result);
        }
      });
    });


    function deleteMotherTongue() {
      var mother_tongue = document.getElementById("mother_tongue_dropdown").value;
      // alert(mother_tongue)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/deleteMotherTongue",
        type: "POST",
        data: {
          mother_tongue: mother_tongue
        },
        cache: false,
        success: function(result) {
          $("#mother_tongue_dropdown").html(result);
        }
      });
    }

    function deleteOccupation() {
      var occupation = document.getElementById("occupation_data").value;
      // alert(mother_tongue)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/deleteOccupationP",
        type: "POST",
        data: {
          occupation: occupation
        },
        cache: false,
        success: function(result) {
          $("#occupation_data").html(result);
        }
      });
    }

    function deleteEducation() {
      var education = document.getElementById("education_data").value;
      // alert(mother_tongue)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/deleteEducationP",
        type: "POST",
        data: {
          education: education
        },
        cache: false,
        success: function(result) {
          $("#education_data").html(result);
        }
      });
    }


    function deleteReligion() {
      var religion_id = document.getElementById("religion_data").value;
      // alert(mother_tongue)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/deleteReligionPreference",
        type: "POST",
        data: {
          religion_id: religion_id
        },
        cache: false,
        success: function(result) {
          $("#religion_data").html(result);
        }
      });
    }

    function deleteCaste() {
      var caste_id = document.getElementById("caste_data").value;
      // alert(mother_tongue)
      $.ajax({
        url: "<?php echo base_url()  ?>UpdateProfile/deleteCastePreference",
        type: "POST",
        data: {
          caste_id: caste_id
        },
        cache: false,
        success: function(result) {
          $("#caste_data").html(result);
        }
      });
    }

    function protectPicture(id) {
      var ll = confirm("Are you really want to protect your photo?");      
      if (ll) {        
        $.ajax({
          url: "<?php echo base_url()  ?>UpdateProfile/protectPitcture",
          type: "POST",
          data: {
            id: id
          },
          cache: false,
          success: function(result) {
            alert("Your profile is now protected!! and someone can only see your profile after your approval.")
          }
        });
      }
    }
  </script>



  </body>

  </html>