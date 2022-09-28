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
            <div class="col-md-3">
                <form action="" method="post">
                    <input type="hidden" name='sex' value="">
                    <div class="form-group col-sm-12" style="    box-shadow: 5px 6px 15px 4px #bbbbbbbd;background-color: #fff;border: 1px solid #fff;border-radius: 5px; padding: 15px;">
                        <div class="search_box1">

                            <h2 style="color: #b42f32;font-size: 19px;text-align: center;font-weight: 500;">

                                <i class="icon icon-stream"> </i> Filter Profile By

                            </h2>
                            <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingOne">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                            <h4 class="panel-title">


                                                Age <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseOne" class="panel-collapse collapse show" role="tabpanel" aria-labelledby="headingOne">
                                        <div class="panel-body">
                                            <label> Age between </label>
                                            <select name="agefrom" id="agefrom" class="form-control">
                                                <option value="">Age From</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>

                                            </select>
                                            <select class="form-control" name="ageto" id="ageto">
                                                <option value="">Age To</option>
                                                <option value="18">18</option>
                                                <option value="19">19</option>
                                                <option value="20">20</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingTwo">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                            <h4 class="panel-title">


                                                Marital Status <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Never Married<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>Widowed<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>Divorced<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Separated<br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingThree">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                                            <h4 class="panel-title">


                                                Religion <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseThree" class="panel-collapse collapse " role="tabpanel" aria-labelledby="headingThree">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Hindu<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>Muslim<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>Sikh<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Jain<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Christan<br>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfour">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                                            <h4 class="panel-title">


                                                Caste <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapsefour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfour">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Agarwal<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>Baniya <br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>Khandelwal<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Soni<br>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingfive">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsefive" aria-expanded="false" aria-controls="collapsefive">
                                            <h4 class="panel-title">


                                                Mother Tongue <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapsefive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingfive">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Hindi<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>English<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>Marathi<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Punjabi<br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingsix">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsesix" aria-expanded="false" aria-controls="collapsesix">
                                            <h4 class="panel-title">


                                                State <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapsesix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingsix">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Andhra Pradesh<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>Uttar Pradesh <br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>Madhya Pradesh<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Delhi<br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingseven">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseseven" aria-expanded="false" aria-controls="collapseseven">
                                            <h4 class="panel-title">


                                                City <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseseven" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingseven">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Bhopal<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>Noida<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>Gurgaon<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Jhansi<br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingeight">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseeight" aria-expanded="false" aria-controls="collapseeight">
                                            <h4 class="panel-title">


                                                Education <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseeight" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingeight">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>BSc <br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>Msc<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>BTech<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>BA<br>

                                        </div>
                                    </div>
                                </div>

                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingnine">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapsenine" aria-expanded="false" aria-controls="collapsenine">
                                            <h4 class="panel-title">


                                                Occupation <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapsenine" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingnine">
                                        <div class="panel-body">

                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Never Married">
                                            </span>Accounts<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Widowed">
                                            </span>PR Professional<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Divorced">
                                            </span>HR Professional<br>
                                            <span class="custom-checkbox ">
                                                <input class="js-cluster" false="" type="checkbox" name="marital_status[]" value="Separated">
                                            </span>Software Professional<br>

                                        </div>
                                    </div>
                                </div>
                                <div class="panel panel-default">
                                    <div class="panel-heading" role="tab" id="headingten">
                                        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseten" aria-expanded="false" aria-controls="collapseten">
                                            <h4 class="panel-title">


                                                Income Between <span style="float: right;"><i class="fa fa-chevron-down"></i></span>

                                            </h4>
                                        </a>
                                    </div>
                                    <div id="collapseten" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingten">
                                        <div class="panel-body">
                                            <input type="text" name="minincome" id="minincome" class="form-control" value="" placeholder="Income From" /><br>
                                            <input type="text" name="maxincome" id="maxincome" class="form-control" value="" placeholder="Income To" />


                                        </div>
                                    </div>
                                </div> <br>
                                <button type="submit" name="Submit" class="btn btn-primary btn-block">
                                    Search</button>
                            </div>
                        </div>
                    </div>





            </div>
            <div class="col-md-9">
                <div class="col-md-12" align="center"> </div>

                <div class="m-b">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">

                            <a href="#">
                                <img src="assets/img/user.webp" class="img-responsive placeholder-img">
                            </a>

                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="p-search OpenSans-Bold" style="margin-bottom:0px;">
                                        Shubham </p>
                                    <span class="p-search2"><i class="icon icon-user"></i>&nbsp;<a href="profile.php?id=SH421210" target="_blank">SH421210</a> &nbsp; |
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
                                            30 Years </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Religion:
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr2 Roboto-Bold">
                                            Hindu </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Caste:
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr2 Roboto-Bold">
                                            Prajapati </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Mother Tongue:
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr2 Roboto-Bold">
                                            Hindi </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Education: BE B.Tech
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Occupation: Researcher
                                        </p>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Location: New Delhi Delhi
                                        </p>
                                    </div>



                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12">

                                    <p>&nbsp;</p>
                                    <hr>
                                    <p class="sr4 OpenSans-Light ">
                                        <span id="shorted_or_not_LLY1329">Shortlist</span> or <span>
                                            Like/Unlike </span> profile
                                    </p>

                                    <div class="">
                                        <div class="row">

                                            <div class="main-short row">
                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                    <div class="tooltip" style="display:block">
                                                        <a href="#" target="_blank"><i class="sr-i1 sr-icon fa fa-user" aria-hidden="true"></i></i>
                                                            <span class="tooltiptext">View Profile</span>
                                                        </a>
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

                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="m-b">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">

                            <a href="#">
                                <img src="assets/img/user.webp" class="img-responsive placeholder-img">
                            </a>

                        </div>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <p class="p-search OpenSans-Bold" style="margin-bottom:0px;">
                                        Shubham </p>
                                    <span class="p-search2"><i class="icon icon-user"></i>&nbsp;<a href="profile.php?id=SH421210" target="_blank">SH421210</a> &nbsp; |
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
                                            30 Years </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Religion:
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr2 Roboto-Bold">
                                            Hindu </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Caste:
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr2 Roboto-Bold">
                                            Prajapati </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Mother Tongue:
                                        </p>
                                    </div>
                                    <div class="col-md-6 col-sm-6 col-xs-12">
                                        <p class="sr2 Roboto-Bold">
                                            Hindi </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Education: BE B.Tech
                                        </p>
                                    </div>
                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Occupation: Researcher
                                        </p>
                                    </div>

                                    <div class="col-md-12 col-sm-12 col-xs-12">
                                        <p class="sr1 Roboto-Bold Roboto-Bold">
                                            Location: New Delhi Delhi
                                        </p>
                                    </div>



                                </div>

                                <div class="col-md-4 col-sm-12 col-xs-12">

                                    <p>&nbsp;</p>
                                    <hr>
                                    <p class="sr4 OpenSans-Light ">
                                        <span id="shorted_or_not_LLY1329">Shortlist</span> or <span>
                                            Like/Unlike </span> profile
                                    </p>

                                    <div class="">
                                        <div class="row">

                                            <div class="main-short row">
                                                <div class="col-md-4 col-xs-4 col-sm-4">
                                                    <div class="tooltip" style="display:block">
                                                        <a href="#" target="_blank"><i class="sr-i1 sr-icon fa fa-user" aria-hidden="true"></i></i>
                                                            <span class="tooltiptext">View Profile</span>
                                                        </a>
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

                                    </div>
                                    <hr>

                                </div>
                            </div>
                        </div>
                    </div>
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

</body>

</html>