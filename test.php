<!DOCTYPE html>
<html lang="en">

<head>
  <title>ShubhMangaljodi.com</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

  <link rel="stylesheet" href="css/open-iconic-bootstrap.min.css">
  <link rel="stylesheet" href="css/animate.css">

  <link rel="stylesheet" href="css/owl.carousel.min.css">
  <link rel="stylesheet" href="css/owl.theme.default.min.css">
  <link rel="stylesheet" href="css/magnific-popup.css">

  <link rel="stylesheet" href="css/aos.css">

  <link rel="stylesheet" href="css/ionicons.min.css">

  <link rel="stylesheet" href="css/bootstrap-datepicker.css">
  <link rel="stylesheet" href="css/jquery.timepicker.css">

  <!--      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">-->


  <link rel="stylesheet" href="css/flaticon.css">
  <link rel="stylesheet" href="css/icomoon.css">
  <link rel="stylesheet" href="css/style.css">
</head>
<style>
  .slider-text h1 {
    font-size: 30px;
    color: #fff;
    line-height: 1.1;
    font-weight: 200;
  }

  .slider-text {
    height: 480px;
  }

  .form-control {
    height: 36px !important;
    border-radius: 0px;
    font-size: 13px;
    color: #666464 !important;
    font-family: inherit;
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

<body>
  <!--    <div style="float: right; position: relative;top: 17px;
    right: 286px;"><a href="" style="color: white;">+91 9999999999 </a>&nbsp&nbsp
    <a href="" style="color: white;">info@shubhmangaljodi.com  </a>

  </div> -->


  <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">

    <div class="container">
      <img src="images/logobig.png" class="img-fluid" style="width: 218px;">
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="oi oi-menu"></span>
      </button>
      <div class="collapse navbar-collapse" id="ftco-nav">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active"><a href="default.php" class="nav-link">Home</a></li>
          <li class="nav-item"><a href="about.php" class="nav-link">About</a></li>

          <li class="nav-item"><a href="search.php" class="nav-link dropdown-toggle" data-toggle="dropdown">Search</a>
            <ul class="dropdown-menu">
              <li><a href="search.php?m=q">Quick Search</a></li>
              <li><a href="search.php?m=a">Advance Search</a></li>
              <li><a href="search.php?m=k">Keyword Search</a></li>
              <li><a href="search.php?m=i">Search by ID</a></li>
            </ul>
          </li>
          <li class="nav-item"><a href="membership.php" class="nav-link">Membership</a></li>
          <li class="nav-item"><a href="contact.php" class="nav-link">Contact</a></li>
        </ul>
      </div>
    </div>
    <div style="position: relative; width: 208px;">
      <a href="registration.php" id="registration" class="button">Register</a>
      <a href="login.php" id="registration" class="button">Login</a>
    </div>
  </nav><!-- Header End -->
  <script type="text/javascript">
    ///////////////////////    
    function getage() {
      if ($("#day").val() != "" && $("#month").val() != "" && $("#year").val() != "") {
        var cdate = new Date(2022, 10, 19);
        var day = cdate.getDate() - ($("#day").val());
        var mon = cdate.getMonth() - ($("#month").val() - 1);
        var year = cdate.getFullYear() - $("#year").val();

        if (day < 0) {
          mon--;
        }
        if (mon <= 0) {
          year--;
        }
        $("#txtage").val(year);
      }
    }

    function checkagenew() {
      if ($("#txtage").val() == "") {
        var cdate = new Date(2022, 10, 19);
        var day = cdate.getDate() - ($("#day").val());
        var mon = cdate.getMonth() - ($("#month").val() - 1);

        var year = cdate.getFullYear() - $("#year").val();
        if (day < 0) {
          mon--;
        }
        if (mon <= 0) {
          year--;
        }
        $("#txtage").val(year);
      } else {
        year = $("#txtage").val();
      }
      if (year < 18) {
        return true;
      } else {
        return false;
      }
    }

    function checkage() {
      var year = 0;
      var cdate = new Date(2022, 10, 19);
      var day = cdate.getDate() - ($("#day").val());
      var mon = cdate.getMonth() - ($("#month").val() - 1);
      var year = cdate.getFullYear() - $("#year").val();
      if (day < 0) {
        mon--;
      }
      if (mon <= 0) {
        year--;
      }

      if (year != 0) {
        if ($("#txtage").val() != year) {
          alert("The age value does not match with the date-of-birth.please enter the correct date-of-birth.");
        }
      }
    }
  </script>
  <script type="text/javascript">
    $(document).ready(function() {

      $('input[name=sex]').on('change', function() {

        if ($('input[name=sex]:checked').val() === 'Male') {
          $("#sexM").attr('checked', true);
          $("#sexF").attr('checked', false);
        } else {
          $("#sexM").attr('checked', false);
          $("#sexF").attr('checked', true);
        }

      });

      //        $('#txtdob').datepicker({
      //            onSelect: function (value, ui) {
      //
      //                var today = new Date().getFullYear()
      //                var totalyear = value.substr(value.length - 4);
      //                var txtage = today - totalyear;
      //
      //                $("#txtage").val(txtage);
      //
      //            },
      //            dateFormat: 'dd-M-yy',
      //            yearRange: '1970:-18',
      //            changeMonth: true,
      //            changeYear: true,
      //            defaultDate: new Date((new Date()).getFullYear() - 18, 01, 01),
      //        });
      //        

      //this function is used for get caste on page load

      //         $("#ddlreligion").change(function () {

      //alert("f");
      $("#loadcaste").show();
      var $religionid = "4";
      $.ajax({
        type: "POST",
        url: "admin/ajax/functions.php?f=getcaste&p=" + $religionid,
        data: "",
        success: function(data1) {
          var $datag = data1.split("!@#$%");
          $("#ddlcaste").empty();
          $("<option value='0'>--- Select Caste ---</option>").appendTo('#ddlcaste');
          var str = "";
          for (var i = 0; i < $datag.length; i++) {
            if ($datag[i] != "") {
              var $datat = $datag[i].split('@@@@!!@@@@');
              str += "<option value='" + $datat[1] + "'>" + $datat[0] + "</option>";
            }
          }
          $(str).appendTo('#ddlcaste');


          //alert("f");
          $("#loadsubcaste").show();
          $.ajax({
            type: "POST",
            url: "admin/ajax/functions.php?f=getsubcaste&p=" + $("#ddlcaste").val(),
            data: "",
            success: function(data1) {
              var $datag = data1.split("!@#$%");
              $("#ddlsubcaste").empty();
              $("<option value='0'>--- Select Sub Caste ---</option>").appendTo('#ddlsubcaste');
              var str = "";
              for (var i = 0; i < $datag.length; i++) {
                if ($datag[i] != "") {
                  var $datat = $datag[i].split('@@@@!!@@@@');
                  str += "<option value='" + $datat[1] + "'>" + $datat[0] + "</option>";
                }
              }
              $(str).appendTo('#ddlsubcaste');
              $("#loadsubcaste").hide();
            }
          });


          $("#loadcaste").hide();
        }
      });




      // ddl sub caste

      //    });




    });
  </script>
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
  <style>
    .error {
      color: red;
      font-size: 12px;
      font-style: italic
    }
  </style>
  <!--===== PAGE TITLE =====-->
  <div class="hero-wrap" style="background-image: url('images/bg_2.jpg');height: 300px;background-size: cover;background-position: bottom;">

    <div class="container">
      <div class="row no-gutters slider-text justify-content-start align-items-center">
        <div class="col-lg-6 col-md-6 ftco-animate d-flex align-items-end">
          <div class="text">
            <h1 class="mb-4">Registration <span></span> <span></span></h1>


          </div>
        </div>

      </div>
    </div>
  </div>

  <!--===== #/PAGE TITLE =====-->


  <!--===== ABOUT US =====-->

  <section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;background: #faf5f5;">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="msgg">
            <h5>JOIN FOR FREE AND
              FIND YOUR LIFE PARTNER</h5>
            <p>You are just two steps away from contacting and messaging 1000's of profiles for FREE!!</p>
          </div>
        </div>
        <div class="col-md-10 offset-md-1">

          <div class="col-regis_box" style="background-color: #fffafb;padding: 40px 15px;box-shadow: 0px 1px 2px 1px #d3d0d0;">
            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">

              <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12 text-center">
                  <h5></h5>
                </div>
              </div>

              <form id="form-registration" name="form-registration" action="https://www.shubhmangaljodi.com/pages/registration.php" method="post">

                <div class="form-group mb-15">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label for="inputEmail3" class="control-label labell">Email<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15 ">

                      <input type="text" name="txtemailid" id="txtemailid" class="required email space placeholder-center form-control" placeholder="Email" maxlength="60" value="" />
                      <span class="err_msg" id="errtxtemailid"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-15">
                  <div class="row">
                    <div class="offset-md-3 col-sm-8 col-md-8 mb-15 mb-15">
                      <div class="controls_holder ">

                        <input type="button" name="check_available" value="Check Availability" onclick="return checkemail();" class="btn btn-primary" />
                        <div class="show_waiting" id="emailcheckwait_wait"><i class="fa fa-spinner fa-pulse fa-fw" style="color: #1F7AB0; margin: 25px 0px 0px 5px;"></i><span class="sr-only">Loading...</span></div>
                        <div class="show_waiting" id="emailcheckwait_ok"><i class="fa fa-check" style="color: #2c9b10; margin: 25px 0px 0px 5px;"></i><span style="font-size: 14px;">Available</span></div>
                        <div class="show_waiting" id="emailcheckwait_cros"><i class="fa fa-close" style="color: #e70000; margin: 25px 0px 0px 5px;"></i><span style="font-size: 14px;">Not Available</span></div>



                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group mb-15">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15 ">
                      <label for="inputPassword3" class="control-label labell">Choose Password<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <input name="txtpass" type="password" id="txtpass" class="bcol required pass placeholder-center password space form-control mrg-side" placeholder="Password" size="28" value="" maxlength="20" />
                      <span class="err_msg" id="errtxtpass"></span>

                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label for="inputPassword3" class="control-label labell">Confirm Password<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <input type="password" name="txtcpass" id="txtcpass" class="required pass space placeholder-center password form-control mrg-side " value="" mamrgxlength="20" />
                      <span class="err_msg" id="errtxtcpass"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label labell">Name of Bride / Groom<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <input type="text" name="txtname" id="txtname" class="required name_valid name placeholder-center form-control" maxlength="50" value="" />
                      <span class="err_msg" id="errtxtname"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 ">
                      <label class="control-label">Gender<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 ">
                      <div class="controls_holder">
                        <label>
                          <input type="radio" name="sex" id="sexM" value="Male" checked="true" />
                          Male &nbsp;</label>
                        &nbsp;&nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" name="sex" id="sexF" value="Female" />
                          Female</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Height<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">

                      <select id="ddlheightno" name="ddlheightno" class="required combo placeholder-center form-control space mrg-side">
                        <option value="0">--- Select Height ---</option>
                        <option value='1'>3ft.5in-105cm</option>
                        <option value='2'>3ft.6in-107cm</option>
                        <option value='3'>3ft.7in-110cm</option>
                        <option value='4'>3ft.8in-112cm</option>
                        <option value='5'>3ft.9in-115cm</option>
                        <option value='6'>3ft.10in-117cm</option>
                        <option value='7'>3ft.11in-120cm</option>
                        <option value='8'>4ft-122cm</option>
                        <option value='9'>4ft.1in-125cm</option>
                        <option value='10'>4ft.2in-127cm</option>
                        <option value='11'>4ft.3in-130cm</option>
                        <option value='12'>4ft.4in-132cm</option>
                        <option value='13'>4ft.5in-135cm</option>
                        <option value='14'>4ft.6in-137cm</option>
                        <option value='15'>4ft.7in-140cm</option>
                        <option value='16'>4ft.8in-142cm</option>
                        <option value='17'>4ft.9in-145cm</option>
                        <option value='18'>4ft.10in-147cm</option>
                        <option value='19'>4ft.11in-150cm</option>
                        <option value='20'>5ft-152cm</option>
                        <option value='21'>5ft.1in-155cm</option>
                        <option value='22'>5ft.2in-157cm</option>
                        <option value='23'>5ft.3in-160cm</option>
                        <option value='24'>5ft.4in-162cm</option>
                        <option value='25'>5ft.5in-165cm</option>
                        <option value='26'>5ft.6in-167cm</option>
                        <option value='27'>5ft.7in-170cm</option>
                        <option value='28'>5ft.8in-172cm</option>
                        <option value='29'>5ft.9in-175cm</option>
                        <option value='30'>5ft.10in-177cm</option>
                        <option value='31'>5ft.11in-180cm</option>
                        <option value='32'>6ft-182cm</option>
                        <option value='33'>6ft.1in-185cm</option>
                        <option value='34'>6ft.2in-187cm</option>
                        <option value='35'>6ft.3in-190cm</option>
                        <option value='36'>6ft.4in-192cm</option>
                        <option value='37'>6ft.5in-195cm</option>
                        <option value='38'>6ft.6in-197cm</option>
                        <option value='39'>6ft.7in-200cm</option>
                        <option value='40'>6ft.8in-202cm</option>
                        <option value='41'>6ft.9in-205cm</option>
                        <option value='42'>6ft.10in-207cm</option>
                        <option value='43'>6ft.11in-210cm</option>
                      </select>
                      <input type="hidden" name="txtheight" id="txtheight" />
                      <span class="err_msg" id="errddlheightno"></span>

                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Mother Tongue<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name='ddlmothertongue' onchange='ddchange(this.value);newddchange(this);' id='ddlmothertongue' class='required placeholder-center form-control combo space mrg-side' style=''>
                        <option value='0' selected='selected'>-- Select Mother Tongue --</option>
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
                        <option value='Hindi' selected='true'>Hindi</option>
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
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Date of Birth<span class="text-danger">*</span></label>
                    </div>

                    <div class="col-sm-6 col-md-6 mb-15">
                      <input type="text" name="dob" id="dob" readonly="true" onKeyPress="return isNumberKey(event);" class="placeholder-center form-control required" />
                      <span class="err_msg" id="errdob"></span>
                    </div>
                    <div class="col-sm-2 col-md-2 mb-15">
                      <input type="text" name="txtage" id="txtage" readonly="true" onKeyPress="return isNumberKey(event);" maxlength="2" onblur="checkage();" class="placeholder-center form-control" style="" />
                      <span class="err_msg" id="errday"></span> <span class="err_msg" id="errmonth"></span> <span class="err_msg" id="erryear"></span>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label for="inputreligion" class="control-label">Religion<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name='ddlreligion' onchange='ddchange(this.value);newddchange(this);' id='ddlreligion' class='required placeholder-center form-control combo space mrg-side' style=''>
                        <option value='' selected='selected'>--- Select Religion ---</option>
                        <option value='14'>Buddhist</option>
                        <option value='5'>Christian</option>
                        <option value='6'>Christian - Catholic</option>
                        <option value='7'>Christian - Orthodox</option>
                        <option value='8'>Christian - Protestant</option>
                        <option value='4'>Hindu</option>
                        <option value='10'>Jain</option>
                        <option value='11'>Jain - Digambar</option>
                        <option value='12'>Jain - Shwetambar</option>
                        <option value='1'>Muslim</option>
                        <option value='2'>Muslim Shiya</option>
                        <option value='3'>Muslim Sunni</option>
                        <option value='13'>Parsi</option>
                        <option value='9'>Sikh</option>
                      </select> <span class="err_msg" id="errddlreligion"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label for="inputCaste" class="control-label">Caste<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name="ddlcaste" id="ddlcaste" onchange='CheckCaste(this.value);' class="required placeholder-center form-control combo space mrg-side">
                        <option value="0">--- Select Caste ---</option>
                      </select>
                      <span class="err_msg" id="errddlcaste"></span> <img src="images/ajax-loader.gif" style="width:16px;height:16px;display:none;" id="loadcaste" />
                      <input type="hidden" name="txtcaste" id="txtcaste" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label for="inputcastenobar" class="control-label">Caste no bar</label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <div class="controls_holder space ">
                        <label>
                          <input type="checkbox" name="castenobar" id="castenobar" value="Yes" />
                          Caste No Bar</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label for="inputPassword3" class="control-label">Sub Caste</label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <input type="text" name="ddlsubcaste" placeholder="Sub Caste(optional)" class="form-control description" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Marital Status<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <div class="controls_holder space">
                        <label>
                          <input type="radio" name="mstatus" value="Never Married" id="chknemar" onClick="chdisable();" checked="checked" />
                          Never Married&nbsp;&nbsp;</label>
                        <label>
                          <input type="radio" name="mstatus" value="Divorced" onClick="chenable();" />
                          Divorced&nbsp;&nbsp;</label>
                        <label>
                          <input type="radio" name="mstatus" value="Widowed" onClick="chenable();" />
                          Widowed&nbsp;&nbsp;</label>
                        <label>
                          <input type="radio" name="mstatus" value="Separated" onClick="chenable();" />
                          Separated</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">No. of Children</label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <div class="controls_holder ">
                        <select name="ddlchild" id="ddlchild" class="form-control space mrg-side">
                          <option value="None" selected="selected">No Children</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="More Than 5">More Than 5</option>
                        </select>
                        <label>
                          <input type="radio" name="childliving" id="rdchliv" value="Living with me" checked="" />
                          Living with me&nbsp;&nbsp;</label>
                        <label>
                          <input type="radio" name="childliving" id="rdchnotliv" value="Not living with me" />
                          Not living with me</label>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Country<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name='ddlcountryliving' onchange='ddchange(this.value);newddchange(this);' id='ddlcountryliving' class='required combo form-control' style=''>
                        <option value='0' selected='selected'>--- Select Country ---</option>
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
                        <option value='27'>Bosnia and Herzegovina</option>
                        <option value='28'>Botswana</option>
                        <option value='29'>Bouvet Island</option>
                        <option value='30'>Brazil</option>
                        <option value='31'>British Indian Ocean Territory</option>
                        <option value='32'>Brunei</option>
                        <option value='33'>Bulgaria</option>
                        <option value='34'>Burkina Faso</option>
                        <option value='35'>Burundi</option>
                        <option value='36'>Cambodia</option>
                        <option value='37'>Cameroon</option>
                        <option value='38'>Canada</option>
                        <option value='39'>Cape Verde</option>
                        <option value='40'>Cayman Islands</option>
                        <option value='41'>Central African Republic</option>
                        <option value='42'>Chad</option>
                        <option value='43'>Chile</option>
                        <option value='44'>China</option>
                        <option value='45'>Christmas Island</option>
                        <option value='46'>Cocos (Keeling) Islands</option>
                        <option value='47'>Colombia</option>
                        <option value='48'>Comoros</option>
                        <option value='49'>Congo</option>
                        <option value='50'>Congo The Democratic Republic Of The</option>
                        <option value='51'>Cook Islands</option>
                        <option value='52'>Costa Rica</option>
                        <option value='53'>Cote DIvoire (Ivory Coast)</option>
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
                        <option value='70'>External Territories of Australia</option>
                        <option value='71'>Falkland Islands</option>
                        <option value='72'>Faroe Islands</option>
                        <option value='73'>Fiji Islands</option>
                        <option value='74'>Finland</option>
                        <option value='75'>France</option>
                        <option value='76'>French Guiana</option>
                        <option value='77'>French Polynesia</option>
                        <option value='78'>French Southern Territories</option>
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
                        <option value='91'>Guernsey and Alderney</option>
                        <option value='92'>Guinea</option>
                        <option value='93'>Guinea-Bissau</option>
                        <option value='94'>Guyana</option>
                        <option value='95'>Haiti</option>
                        <option value='96'>Heard and McDonald Islands</option>
                        <option value='97'>Honduras</option>
                        <option value='98'>Hong Kong S.A.R.</option>
                        <option value='99'>Hungary</option>
                        <option value='100'>Iceland</option>
                        <option value='101' selected='true'>India</option>
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
                        <option value='154'>Netherlands Antilles</option>
                        <option value='155'>Netherlands The</option>
                        <option value='156'>New Caledonia</option>
                        <option value='157'>New Zealand</option>
                        <option value='158'>Nicaragua</option>
                        <option value='159'>Niger</option>
                        <option value='160'>Nigeria</option>
                        <option value='161'>Niue</option>
                        <option value='162'>Norfolk Island</option>
                        <option value='163'>Northern Mariana Islands</option>
                        <option value='164'>Norway</option>
                        <option value='165'>Oman</option>
                        <option value='166'>Pakistan</option>
                        <option value='167'>Palau</option>
                        <option value='168'>Palestinian Territory Occupied</option>
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
                        <option value='184'>Saint Kitts And Nevis</option>
                        <option value='185'>Saint Lucia</option>
                        <option value='186'>Saint Pierre and Miquelon</option>
                        <option value='187'>Saint Vincent And The Grenadines</option>
                        <option value='188'>Samoa</option>
                        <option value='189'>San Marino</option>
                        <option value='190'>Sao Tome and Principe</option>
                        <option value='191'>Saudi Arabia</option>
                        <option value='192'>Senegal</option>
                        <option value='193'>Serbia</option>
                        <option value='194'>Seychelles</option>
                        <option value='195'>Sierra Leone</option>
                        <option value='196'>Singapore</option>
                        <option value='197'>Slovakia</option>
                        <option value='198'>Slovenia</option>
                        <option value='199'>Smaller Territories of the UK</option>
                        <option value='200'>Solomon Islands</option>
                        <option value='201'>Somalia</option>
                        <option value='202'>South Africa</option>
                        <option value='203'>South Georgia</option>
                        <option value='204'>South Sudan</option>
                        <option value='205'>Spain</option>
                        <option value='206'>Sri Lanka</option>
                        <option value='207'>Sudan</option>
                        <option value='208'>Suriname</option>
                        <option value='209'>Svalbard And Jan Mayen Islands</option>
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
                        <option value='225'>Turks And Caicos Islands</option>
                        <option value='226'>Tuvalu</option>
                        <option value='227'>Uganda</option>
                        <option value='228'>Ukraine</option>
                        <option value='229'>United Arab Emirates</option>
                        <option value='230'>United Kingdom</option>
                        <option value='232'>United States Minor Outlying Islands</option>
                        <option value='233'>Uruguay</option>
                        <option value='231'>USA</option>
                        <option value='234'>Uzbekistan</option>
                        <option value='235'>Vanuatu</option>
                        <option value='236'>Vatican City State (Holy See)</option>
                        <option value='237'>Venezuela</option>
                        <option value='238'>Vietnam</option>
                        <option value='239'>Virgin Islands (British)</option>
                        <option value='240'>Virgin Islands (US)</option>
                        <option value='241'>Wallis And Futuna Islands</option>
                        <option value='242'>Western Sahara</option>
                        <option value='243'>Yemen</option>
                        <option value='244'>Yugoslavia</option>
                        <option value='245'>Zambia</option>
                        <option value='246'>Zimbabwe</option>
                      </select> <input type="hidden" name="txtcountry" id="txtcountry" />
                      <span class="err_msg" id="errddlcountryliving"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Select State<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name='ddlstate' onchange='ddchange(this.value);newddchange(this);' id='ddlstate' class='required combo form-control' style=''>
                        <option value='0' selected='selected'>--- Select State ---</option>
                        <option value='1'>Andaman and Nicobar Islands</option>
                        <option value='2'>Andhra Pradesh</option>
                        <option value='3'>Arunachal Pradesh</option>
                        <option value='4'>Assam</option>
                        <option value='5'>Bihar</option>
                        <option value='6'>Chandigarh</option>
                        <option value='7'>Chhattisgarh</option>
                        <option value='8'>Dadra and Nagar Haveli</option>
                        <option value='9'>Daman and Diu</option>
                        <option value='10'>Delhi</option>
                        <option value='11'>Goa</option>
                        <option value='12'>Gujarat</option>
                        <option value='13'>Haryana</option>
                        <option value='14'>Himachal Pradesh</option>
                        <option value='15'>Jammu and Kashmir</option>
                        <option value='16'>Jharkhand</option>
                        <option value='17'>Karnataka</option>
                        <option value='19'>Kerala</option>
                        <option value='20'>Lakshadweep</option>
                        <option value='21'>Madhya Pradesh</option>
                        <option value='22'>Maharashtra</option>
                        <option value='23'>Manipur</option>
                        <option value='24'>Meghalaya</option>
                        <option value='25'>Mizoram</option>
                        <option value='26'>Nagaland</option>
                        <option value='29'>Odisha</option>
                        <option value='31'>Pondicherry</option>
                        <option value='32'>Punjab</option>
                        <option value='33'>Rajasthan</option>
                        <option value='34'>Sikkim</option>
                        <option value='35'>Tamil Nadu</option>
                        <option value='36'>Telangana</option>
                        <option value='37'>Tripura</option>
                        <option value='38'>Uttar Pradesh</option>
                        <option value='39'>Uttarakhand</option>
                        <option value='41'>West Bengal</option>
                      </select> <span class="err_msg" id="errddlstate"></span>
                      <img src="images/ajax-loader.gif" style="width:16px;height:16px;display:none" id="loadstate" />
                      <input type="hidden" name="txtstate" id="txtstate" />
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">City<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name='ddlcity' onchange='ddchange(this.value);newddchange(this);' id='ddlcity' class='required combo form-control' style=''>
                        <option value='0' selected='selected'>--- Select City ---</option>
                      </select> <img src="images/ajax-loader.gif" style="width:16px;height:16px;display:none;" id="loadcity" />
                      <span class="err_msg" id="errddlcity"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Contact Address<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <input type="text" name="txtaddress" id="txtaddress" class="required placeholder-center form-control description" />
                      <span class="err_msg" id="errtxtaddress"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Phone No.</label>
                    </div>

                    <div class="col-sm-2 col-md-2 mb-15">
                      <input type="text" maxlength="4" onKeyPress="return isNumberKey(event);" name="txtccode" id="txtccode" value="91" class="required placeholder-center number form-control space" />
                    </div>
                    <div class="col-sm-2 col-md-2 mb-15">
                      <input maxlength="6" size="5" name="txtareacode" onKeyPress="return isNumberKey(event);" type="text" id="txtareacode" class="placeholder-center form-control space number" />
                    </div>
                    <div class="col-sm-4 col-md-4 mb-15">
                      <input maxlength="15" size="10" onKeyPress="return isNumberKey(event);" name="txtphoneno" type="text" id="txtphoneno" class=" placeholder-center form-control space number" />
                    </div>

                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Mobile<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <input type="text" onKeyPress="return isNumberKey(event);" maxlength="10" name="txtmobile" id="txtmobile" class="number number_valid required mobile placeholder-center form-control space mrg-side" value="" required>
                      <span class="err_msg" id="errtxtmobile"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label">Citizenship<span class="text-danger">*</span></label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <select name='ddlcitizenship' onchange='ddchange(this.value);newddchange(this);' id='ddlcitizenship' class='required placeholder-center form-control combo space mrg-side' style=''>
                        <option value='0' selected='selected'>--- Select Country ---</option>
                        <option value='Afghanistan'>Afghanistan</option>
                        <option value='Albania'>Albania</option>
                        <option value='Algeria'>Algeria</option>
                        <option value='American Samoa'>American Samoa</option>
                        <option value='Andorra'>Andorra</option>
                        <option value='Angola'>Angola</option>
                        <option value='Anguilla'>Anguilla</option>
                        <option value='Antarctica'>Antarctica</option>
                        <option value='Antigua And Barbuda'>Antigua And Barbuda</option>
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
                        <option value='Bosnia and Herzegovina'>Bosnia and Herzegovina</option>
                        <option value='Botswana'>Botswana</option>
                        <option value='Bouvet Island'>Bouvet Island</option>
                        <option value='Brazil'>Brazil</option>
                        <option value='British Indian Ocean Territory'>British Indian Ocean Territory</option>
                        <option value='Brunei'>Brunei</option>
                        <option value='Bulgaria'>Bulgaria</option>
                        <option value='Burkina Faso'>Burkina Faso</option>
                        <option value='Burundi'>Burundi</option>
                        <option value='Cambodia'>Cambodia</option>
                        <option value='Cameroon'>Cameroon</option>
                        <option value='Canada'>Canada</option>
                        <option value='Cape Verde'>Cape Verde</option>
                        <option value='Cayman Islands'>Cayman Islands</option>
                        <option value='Central African Republic'>Central African Republic</option>
                        <option value='Chad'>Chad</option>
                        <option value='Chile'>Chile</option>
                        <option value='China'>China</option>
                        <option value='Christmas Island'>Christmas Island</option>
                        <option value='Cocos (Keeling) Islands'>Cocos (Keeling) Islands</option>
                        <option value='Colombia'>Colombia</option>
                        <option value='Comoros'>Comoros</option>
                        <option value='Congo'>Congo</option>
                        <option value='Congo The Democratic Republic Of The'>Congo The Democratic Republic Of The</option>
                        <option value='Cook Islands'>Cook Islands</option>
                        <option value='Costa Rica'>Costa Rica</option>
                        <option value='Cote DIvoire (Ivory Coast)'>Cote DIvoire (Ivory Coast)</option>
                        <option value='Croatia (Hrvatska)'>Croatia (Hrvatska)</option>
                        <option value='Cuba'>Cuba</option>
                        <option value='Cyprus'>Cyprus</option>
                        <option value='Czech Republic'>Czech Republic</option>
                        <option value='Denmark'>Denmark</option>
                        <option value='Djibouti'>Djibouti</option>
                        <option value='Dominica'>Dominica</option>
                        <option value='Dominican Republic'>Dominican Republic</option>
                        <option value='East Timor'>East Timor</option>
                        <option value='Ecuador'>Ecuador</option>
                        <option value='Egypt'>Egypt</option>
                        <option value='El Salvador'>El Salvador</option>
                        <option value='Equatorial Guinea'>Equatorial Guinea</option>
                        <option value='Eritrea'>Eritrea</option>
                        <option value='Estonia'>Estonia</option>
                        <option value='Ethiopia'>Ethiopia</option>
                        <option value='External Territories of Australia'>External Territories of Australia</option>
                        <option value='Falkland Islands'>Falkland Islands</option>
                        <option value='Faroe Islands'>Faroe Islands</option>
                        <option value='Fiji Islands'>Fiji Islands</option>
                        <option value='Finland'>Finland</option>
                        <option value='France'>France</option>
                        <option value='French Guiana'>French Guiana</option>
                        <option value='French Polynesia'>French Polynesia</option>
                        <option value='French Southern Territories'>French Southern Territories</option>
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
                        <option value='Guernsey and Alderney'>Guernsey and Alderney</option>
                        <option value='Guinea'>Guinea</option>
                        <option value='Guinea-Bissau'>Guinea-Bissau</option>
                        <option value='Guyana'>Guyana</option>
                        <option value='Haiti'>Haiti</option>
                        <option value='Heard and McDonald Islands'>Heard and McDonald Islands</option>
                        <option value='Honduras'>Honduras</option>
                        <option value='Hong Kong S.A.R.'>Hong Kong S.A.R.</option>
                        <option value='Hungary'>Hungary</option>
                        <option value='Iceland'>Iceland</option>
                        <option value='India' selected='true'>India</option>
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
                        <option value='Liechtenstein'>Liechtenstein</option>
                        <option value='Lithuania'>Lithuania</option>
                        <option value='Luxembourg'>Luxembourg</option>
                        <option value='Macau S.A.R.'>Macau S.A.R.</option>
                        <option value='Macedonia'>Macedonia</option>
                        <option value='Madagascar'>Madagascar</option>
                        <option value='Malawi'>Malawi</option>
                        <option value='Malaysia'>Malaysia</option>
                        <option value='Maldives'>Maldives</option>
                        <option value='Mali'>Mali</option>
                        <option value='Malta'>Malta</option>
                        <option value='Man (Isle of)'>Man (Isle of)</option>
                        <option value='Marshall Islands'>Marshall Islands</option>
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
                        <option value='Netherlands Antilles'>Netherlands Antilles</option>
                        <option value='Netherlands The'>Netherlands The</option>
                        <option value='New Caledonia'>New Caledonia</option>
                        <option value='New Zealand'>New Zealand</option>
                        <option value='Nicaragua'>Nicaragua</option>
                        <option value='Niger'>Niger</option>
                        <option value='Nigeria'>Nigeria</option>
                        <option value='Niue'>Niue</option>
                        <option value='Norfolk Island'>Norfolk Island</option>
                        <option value='Northern Mariana Islands'>Northern Mariana Islands</option>
                        <option value='Norway'>Norway</option>
                        <option value='Oman'>Oman</option>
                        <option value='Pakistan'>Pakistan</option>
                        <option value='Palau'>Palau</option>
                        <option value='Palestinian Territory Occupied'>Palestinian Territory Occupied</option>
                        <option value='Panama'>Panama</option>
                        <option value='Papua new Guinea'>Papua new Guinea</option>
                        <option value='Paraguay'>Paraguay</option>
                        <option value='Peru'>Peru</option>
                        <option value='Philippines'>Philippines</option>
                        <option value='Pitcairn Island'>Pitcairn Island</option>
                        <option value='Poland'>Poland</option>
                        <option value='Portugal'>Portugal</option>
                        <option value='Puerto Rico'>Puerto Rico</option>
                        <option value='Qatar'>Qatar</option>
                        <option value='Reunion'>Reunion</option>
                        <option value='Romania'>Romania</option>
                        <option value='Russia'>Russia</option>
                        <option value='Rwanda'>Rwanda</option>
                        <option value='Saint Helena'>Saint Helena</option>
                        <option value='Saint Kitts And Nevis'>Saint Kitts And Nevis</option>
                        <option value='Saint Lucia'>Saint Lucia</option>
                        <option value='Saint Pierre and Miquelon'>Saint Pierre and Miquelon</option>
                        <option value='Saint Vincent And The Grenadines'>Saint Vincent And The Grenadines</option>
                        <option value='Samoa'>Samoa</option>
                        <option value='San Marino'>San Marino</option>
                        <option value='Sao Tome and Principe'>Sao Tome and Principe</option>
                        <option value='Saudi Arabia'>Saudi Arabia</option>
                        <option value='Senegal'>Senegal</option>
                        <option value='Serbia'>Serbia</option>
                        <option value='Seychelles'>Seychelles</option>
                        <option value='Sierra Leone'>Sierra Leone</option>
                        <option value='Singapore'>Singapore</option>
                        <option value='Slovakia'>Slovakia</option>
                        <option value='Slovenia'>Slovenia</option>
                        <option value='Smaller Territories of the UK'>Smaller Territories of the UK</option>
                        <option value='Solomon Islands'>Solomon Islands</option>
                        <option value='Somalia'>Somalia</option>
                        <option value='South Africa'>South Africa</option>
                        <option value='South Georgia'>South Georgia</option>
                        <option value='South Sudan'>South Sudan</option>
                        <option value='Spain'>Spain</option>
                        <option value='Sri Lanka'>Sri Lanka</option>
                        <option value='Sudan'>Sudan</option>
                        <option value='Suriname'>Suriname</option>
                        <option value='Svalbard And Jan Mayen Islands'>Svalbard And Jan Mayen Islands</option>
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
                        <option value='Trinidad And Tobago'>Trinidad And Tobago</option>
                        <option value='Tunisia'>Tunisia</option>
                        <option value='Turkey'>Turkey</option>
                        <option value='Turkmenistan'>Turkmenistan</option>
                        <option value='Turks And Caicos Islands'>Turks And Caicos Islands</option>
                        <option value='Tuvalu'>Tuvalu</option>
                        <option value='Uganda'>Uganda</option>
                        <option value='Ukraine'>Ukraine</option>
                        <option value='United Arab Emirates'>United Arab Emirates</option>
                        <option value='United Kingdom'>United Kingdom</option>
                        <option value='United States Minor Outlying Islands'>United States Minor Outlying Islands</option>
                        <option value='Uruguay'>Uruguay</option>
                        <option value='USA'>USA</option>
                        <option value='Uzbekistan'>Uzbekistan</option>
                        <option value='Vanuatu'>Vanuatu</option>
                        <option value='Vatican City State (Holy See)'>Vatican City State (Holy See)</option>
                        <option value='Venezuela'>Venezuela</option>
                        <option value='Vietnam'>Vietnam</option>
                        <option value='Virgin Islands (British)'>Virgin Islands (British)</option>
                        <option value='Virgin Islands (US)'>Virgin Islands (US)</option>
                        <option value='Wallis And Futuna Islands'>Wallis And Futuna Islands</option>
                        <option value='Western Sahara'>Western Sahara</option>
                        <option value='Yemen'>Yemen</option>
                        <option value='Yugoslavia'>Yugoslavia</option>
                        <option value='Zambia'>Zambia</option>
                        <option value='Zimbabwe'>Zimbabwe</option>
                      </select> <input type="hidden" name="txtciti" id="txtciti" />
                      <span class="err_msg" id="errddlcitizenship"></span>
                    </div>
                  </div>
                </div>
                <div class="form-group">
                  <div class="row">
                    <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
                      <label class="control-label space">NRI</label>
                    </div>
                    <div class="col-sm-8 col-md-8 mb-15">
                      <div class="controls_holder space ">
                        <label>
                          <input type="radio" name="nri" id="nriY" value="Yes" />
                          Yes &nbsp; </label>
                        &nbsp;&nbsp;&nbsp;
                        <label>
                          <input type="radio" name="nri" id="nriN" value="No" checked="true" />
                          Not</label>
                      </div>
                    </div>
                  </div>
                </div>
                <style>
                  .txtOverlay {
                    opacity: 0.9;
                    height: 40px;
                    padding: 5px;
                    width: 100px;
                    font-weight: 700;
                    background: url(images/captchabg.jpg);
                  }

                  .theText {
                    color: #000;
                    font-size: 25px;
                    font-weight: 700;
                  }
                </style>
                <!--                <div class="form-group">
                     <div class="row">
            <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15">
              <label class="control-label"> Enter Captcha Code<span class="text-danger">*</span> </label>
            </div>
            <div class="col-sm-3 col-md-3 mb-15">
             <input type="text" name="ct_captcha" id="ct_captcha" class="required form-control" placeholder="Enter Captcha Code"  maxlength="5" onKeyPress="return isNumberKey(event);"  required="">
                                <span class="err_msg" id="errct_captcha"></span>
                                <input type="hidden" name="secure_chk" id="secure_chk" value="26545"  />
            </div>
            <div class="col-sm-5 col-md-5 mb-15" style="margin-bottom:20px;">
              <div class="txtOverlay">
               <p class="theText">26545</p>
            </div>
          </div>
          </div> </div>-->

                <div class="form-group row">
                  <div class="col-sm-offset-1 col-sm-3 col-md-3 mb-15"></div>
                  <div class="col-sm-6 col-md-6 mb-15">
                    <div class="g-recaptcha" data-sitekey="6Lf_eEkaAAAAAJHzM3Q57MAwdquJi7-2Xbdoude5"></div>
                  </div>

                </div>



                <div class="form-group" align="center">


                  <label>
                    <input name="tcbox" type="checkbox" checked="" id="tcbox" class="required" required="" value="agree">
                    &nbsp;
                    Please tick this box to indicate that you have read and agree to the <a href="terms.php" target="_blank" style="color:#b40002;">Terms &amp; Conditions</a> of Service </label>
                </div>


                <div class="form-group">

                  <div class="offset-md-3 col-sm-8 col-md-8 mb-15">
                    <input type="submit" id="btnsubmit" for="form-registration" onclick="return validateFields_reg();" name="Submit" value="Register Now" class="btn btn-primary" style="margin-top: 19px;">
                  </div>
                </div>
              </form>
            </div>


          </div>



        </div>
      </div>
    </div>
  </section>
  <!--Main Footer-->
  <footer class="ftco-footer ftco-bg-dark ftco-section">
    <div class="container"><br><br>
      <div class="row mb-5">
        <div class="col-md">
          <div class="ftco-footer-widget mb-4" style="margin-top: -76px;">
            <img src="images/logobig.png" class="img-fluid">
            <p style="margin-top: -43px;">Shubhmangaljodi.com is for people who are single, who are married, and anyone who wants to make new friends or help their friends meet new people.</p>
            <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">

              <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>

            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4 ml-md-5">
            <h2 class="ftco-heading-2">Useful Links</h2>
            <ul class="list-unstyled">
              <li><a href="default.php" class="py-2 d-block">Home</a></li>
              <li><a href="search.php" class="py-2 d-block">Search</a></li>
              <li><a href="membership.php" class="py-2 d-block">Membership</a></li>
              <li><a href="pp.php" class="py-2 d-block">Privacy Policy</a></li>

            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Links</h2>
            <ul class="list-unstyled">

              <li><a href="payment.php" class="py-2 d-block">Payment</a></li>
              <li><a href="registration.php" class="py-2 d-block">Registration</a></li>
              <li><a href="contact.php" class="py-2 d-block">Contact Us</a></li>

              <li><a href="term.php" class="py-2 d-block">Terms & Condition</a></li>
            </ul>
          </div>
        </div>
        <div class="col-md">
          <div class="ftco-footer-widget mb-4">
            <h2 class="ftco-heading-2">Address</h2>
            <div class="block-23 mb-3">
              <ul>
                <li><a href="#"><span class="icon icon-map-marker"></span><span class="text">Registered Office: Uttam Nagar, Delhi</span></a></li>
                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+91 9667184780</span></a></li>
                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">mail@shubhmangaljodi.com </span></a></li>

              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 text-center">

          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>
              document.write(new Date().getFullYear());
            </script> All rights reserved
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
          </p>
        </div>
      </div>
    </div>
  </footer>



  <!-- loader -->
  <!--  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>-->

  <script src="js/jquery.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery.waypoints.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/aos.js"></script>
  <script src="js/jquery.animateNumber.min.js"></script>
  <script src="js/bootstrap-datepicker.js"></script>
  <script src="js/jquery.timepicker.min.js"></script>
  <script src="js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="js/google-map.js"></script>
  <script src="js/main.js"></script>


  <!--  --------------progress bar ----------------->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
  <script src="js/progress.js"></script>
  <!--  <script src="https://rawgit.com/kottenator/jquery-circle-progress/1.2.1/dist/circle-progress.js"></script>-->

  <script>
    console.log("JavaScript is amazing!");
    $(document).ready(function($) {
      function animateElements() {
        $('.progressbar').each(function() {
          var elementPos = $(this).offset().top;
          var topOfWindow = $(window).scrollTop();
          var percent = $(this).find('.circle').attr('data-percent');
          var percentage = parseInt(percent, 10) / parseInt(100, 10);
          var animate = $(this).data('animate');
          if (elementPos < topOfWindow + $(window).height() - 30 && !animate) {
            $(this).data('animate', true);
            $(this).find('.circle').circleProgress({
              startAngle: -Math.PI / 2,
              value: percent / 100,
              thickness: 10,
              fill: {
                color: '#ca5b61'
              }
            }).on('circle-animation-progress', function(event, progress, stepValue) {
              $(this).find('div').text((stepValue * 100).toFixed(1) + "%");
            }).stop();
          }
        });
      }

      // Show animated elements
      animateElements();
      $(window).scroll(animateElements);
    });
  </script>
  <script>
    var tabs = document.getElementById('icetab-container').children;
    var tabcontents = document.getElementById('icetab-content').children;

    var myFunction = function() {
      var tabchange = this.mynum;
      for (var int = 0; int < tabcontents.length; int++) {
        tabcontents[int].className = ' tabcontent';
        tabs[int].className = ' icetab';
      }
      tabcontents[tabchange].classList.add('tab-active');
      this.classList.add('current-tab');
    }


    for (var index = 0; index < tabs.length; index++) {
      tabs[index].mynum = index;
      tabs[index].addEventListener('click', myFunction, false);
    }
  </script>

</body>

</html>
<script>
  //-------------name with email start------------
  $('.nameemail').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 95 && event.which != 64 && event.which != 46 && event.which != 32)) {
      event.preventDefault();
    }
  });
  //-------------name with email end------------
  //----------------email start-----------------
  $('.email').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 95 && event.which != 64 && event.which != 46)) {
      event.preventDefault();
    }
  });
  //----------------email End-------------------
  $('.captcha').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122)) {
      event.preventDefault();
    }
  });
  //----------------Password start-----------------
  $('.password').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 95 && event.which != 64 && event.which != 35 && event.which != 36 && event.which != 37 && event.which != 38 && event.which != 42)) {
      event.preventDefault();
    }
  });
  //----------------Password End-------------------
  //---------- -----name start------------------
  $('.name').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 32)) {
      event.preventDefault();
    }
  });
  //----------------name End-------------------
  //------------name number start--------------
  $('.namenumber').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 32 && event.which != 45 && event.which != 95)) {
      event.preventDefault();
    }
  });
  //------------name number End-----------------
  //--------------Number start------------------
  $('.number').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57)) {
      event.preventDefault();
    }
  });
  //----------------email End-------------------
  //------------Description start---------------
  $('.description').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 44 && event.which != 46 && event.which != 32 && event.which != 38 && event.which != 40 && event.which != 41 && event.which != 36 && event.which != 47)) {
      event.preventDefault();
    }
  });

  //------------Description end-----------------
  //------------address start---------------
  $('.address').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 44 && event.which != 46 && event.which != 32 && event.which != 38 && event.which != 45 && event.which != 47 && event.which != 40 && event.which != 41 && event.which != 92)) {
      event.preventDefault();
    }
  });

  //------------address end-----------------
  //------------Description start---------------
  $('.namewith').keypress(function(event) {
    var $this = $(this);
    if ((event.which < 48 || event.which > 57) && (event.which < 65 || event.which > 90) && (event.which < 97 || event.which > 122) && (event.which != 32 && event.which != 39)) {
      event.preventDefault();
    }
  });
  //------------Description end-----------------
</script>
<link rel="stylesheet" href="css/jquery-ui-1.9.2.custom.min.css">
<script type="text/javascript" src="js/jquery-ui-1.9.2.custom.min.js"></script>

<script>
  $(document).ready(function() {
    $("#dob").datepicker({
      changeMonth: true,
      changeYear: true,
      onSelect: function(value, ui) {
        var today = new Date(),
          age = today.getFullYear() - ui.selectedYear;
        //$('#txtage').text(age);
        $("#txtage").val(age);
      },
      defaultDate: '-18yr',
      minDate: '-60yr',
      maxDate: '-18yr'
    });
    $("#dob").datepicker("option", "dateFormat", "dd-mm-yy");



  });
</script>
<script type="text/javascript">
  function checksmob() {
    var sponcer = $("#txtmobile").val();
    //alert(sponcer);  
    $.ajax({
      type: "POST",
      url: "pages/Checkmobile.php?mobi=" + sponcer,
      data: "",
      success: function(data1) {
        //alert(data1);
        if (data1 == 2) {
          alert('Please Enter diffrent Mobile no');

          $("#txtmobile").val("");


        } else if (data1 == '1') {

        }
      }
    });
  }
</script>
<script type="text/javascript">
  $(document).ready(function() {
    $('input[name=sex]').on('change', function() {

      if ($('input[name=sex]:checked').val() === 'Male') {
        $("#sexM").attr('checked', true);
        $("#sexF").attr('checked', false);
      } else {
        $("#sexM").attr('checked', false);
        $("#sexF").attr('checked', true);
      }

    });



  });
</script>

<script src="frontjs/validation.js"></script>
<script src="frontjs/registration.js"></script>