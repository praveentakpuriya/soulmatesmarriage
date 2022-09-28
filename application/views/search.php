<style>
  .slider-text h1 {
    font-size: 30px;
    color: #fff;
    line-height: 1.1;
    font-weight: 200;
  }

  .form-group label {
    color: #483a3a !important;
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
          <h1 class="mb-4">Search<span></span> <span></span></h1>
        </div>
      </div>

    </div>
  </div>
</div>


<section class="ftco-section ftco-no-pt ftco-no-pb" style="padding: 50px 0px;background: #faf5f5;">
  <div class="container-fluid">
    <div class="contact-tab">
      <div class="container-fluid new-width">
        <div class="row">
          <div class="col-md-12">

          </div>
        </div>
      </div>
    </div>
    <div class="container-fluid new-width" style="">
      <div class="row">
        <div class="col-lg-3">
          <div class="tab contact-tab-m quick-search-tab" role="tabpanel">
            <!-- Nav tabs -->
            <ul class="nav nav-tabs contact-tab-nav2" role="tablist">
              <li role="presentation" class="f-15 ">
                <a href="#quick-search-tab " class="active" aria-controls="quick-search-tab" role="tab" data-toggle="tab" aria-expanded="false"><span class="icon icon-search"></span>
                  Quick Search</a>
              </li>
              <li role="presentation" class="f-15 ">
                <a href="#advance-search-tab" aria-controls="advance-search-tab" role="tab" data-toggle="tab" aria-expanded="true"><span class="icon icon-search-plus"></span> Advance Search</a>
              </li>
              <li role="presentation" class="f-15 active">
                <a href="#keyword-search-tab" aria-controls="keyword-search-tab" role="tab" data-toggle="tab" aria-expanded="false"><span class="icon icon-keyboard"></span>
                  Keyword Search</a>
              </li>
              <li role="presentation" class="f-15   li-last">
                <a href="#id-search-tab" aria-controls="id-search-tab" role="tab" data-toggle="tab" aria-expanded="false"><span class="icon icon-user-plus"></span> Search By ID</a>
              </li>
            </ul>
            <!-- Tab panes -->
          </div>
        </div>
        <div class="col-lg-9">
          <div class="tab-content tabs tab-content-margin-top">
            <div role="tabpanel" class="tab-pane fade active show" id="quick-search-tab">
              <div class="row mt-4 margin-lr-0">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="mega-box-new">
                    <div class="m-add-box">
                      <p class="text-center">Quick Search is the most popular search based on a few
                        important criteria one would look for in a life partner.</p>
                      <hr class="search-hr">

                      <form class="form-horizontal" action="Searching/quicksearch" method="post" name="quickserch">


                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Looking for</label>
                            </div>
                            <div class="col-sm-9 col-md-9">

                              <div class="controls_holder d-flex">


                                <div class="form-check ml-1 mb-2 mr-3">
                                  <input class="form-check-input" required="" name="gender" type="radio" value="male" id="groom">
                                  <label class="form-check-label" for="groom">
                                    Groom </label>
                                </div>
                                <div class="form-check ml-1 mb-2">
                                  <input class="form-check-input" required="" name="gender" type="radio" value="female" id="bride">
                                  <label class="form-check-label" for="bride">
                                    Bride </label>
                                </div>


                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Age between </label>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              <select name="age_from" id="agefrom" class="form-control">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20" selected="selected">20</option>
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
                            <div class="col-sm-1 col-md-1" style="padding-top:10px;"> to </div>
                            <div class="col-sm-4 col-md-4">
                              <select class="form-control" name="age_to" id="ageto">
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
                                <option value="32" selected="selected">32</option>
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
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Religion</label>
                            </div>
                            <div class="col-sm-9 col-md-9">
                              <select required="required" id="religion-dropdown" name="religion_id" class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
                                <option value='0' selected='selected'>Select Religion</option>
                                <?php foreach ($religion as $list) { ?>
                                  <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                <?php } ?>

                              </select>
                            </div>
                          </div>
                        </div>

                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Mother Tongue</label>
                            </div>
                            <div class="col-sm-9 col-md-9">
                              <select name='mother_tongue' onchange='ddchange(this.value);newddchange(this);' id='mtongue' class='form-control ' style=''>
                                <option value='Any' selected='selected'>Any Mother Tongue
                                </option>
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
                              </select>
                            </div>
                          </div>
                        </div>


                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Profile with </label>
                            </div>
                            <div class="col-sm-9 col-md-9">
                              <div class="controls_holder ">
                                <label>
                                  <input name="profile_with" type="checkbox" checked="checked" id="chkphoto" value="photo">
                                  Photo</label>
                                <label>
                                  <input name="profile_with" type="checkbox" id="chkhoro" value="horoscope">
                                  Horoscope</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label"></label>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              <input type="submit" name="Submit" class="btn btn-primary btn-block" value="Search">
                            </div>
                          </div>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>


                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="mega-box-new">
                    <p class="calibri-Bold-font f-22 color-31 t-transform-ue text-center ab-t1">Search
                      <span class="color-d">Profile id </span>
                    </p>
                    <hr class="search-hr">
                    <div class="row">

                      <div class="col-md-12">



                        <form action="#" method="post" name="form3" id="form3">

                          <br>
                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-12 col-md-12">


                                <input type="text" name="txtLoginId" id="txtLoginId2" tabindex="40" class="form-control" placeholder=" e.g : SM100001" accesskey="13">
                                <p style="text-align:left"> <small> search by: Profile Id
                                  </small> </p>


                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-9 col-md-9">
                                <button class="btn btn-primary btn-block" name="Submit" type="submit" onclick="return checkid()">Search</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade " id="advance-search-tab">
              <div class="row mt-4 margin-lr-0">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="mega-box-new">
                    <div class="m-add-box">
                      <p class="text-center">Advanced Search is the most comprehensive search that
                        searches across all profile information. The results of this search will be
                        closer to your expectations.
                      </p>
                      <hr class="search-hr">

                      <div class="add-box-2" id="add_i_cstm2">
                        <form method="post" name="form2" id="form2">
                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Looking for</label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <div class="controls_holder">
                                  <label>
                                    <input name="sex" type="radio" value="Male" checked="checked" />
                                    Groom &nbsp; </label>
                                  <label>
                                    <input name="sex" type="radio" value="Female" />
                                    Bride </label>
                                </div>

                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Marital Status </label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <div class="controls_holder">
                                  <label>
                                    <input name="mstatus" type="checkbox" id="mstatus" value="Never Married" checked="checked">
                                    Never Married &nbsp;</label>
                                  <label>
                                    <input name="mstatus" type="checkbox" id="mstatus" value="Widowed">
                                    Widowed &nbsp;</label>
                                  <label>
                                    <input name="mstatus" type="checkbox" id="mstatus" value="Divorced">
                                    Divorced &nbsp;</label>
                                  <label>
                                    <input name="mstatus" type="checkbox" id="mstatus" value="Separated">
                                    Separated &nbsp;</label>
                                  <label>
                                    <input name="mstatus" type="checkbox" id="mstatusany" value="Any">
                                    Any</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Have Children</label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <div class="controls_holder pull-left">
                                  <label>
                                    <input name="child" type="radio" value="none" disabled="disabled">
                                    No &nbsp;</label>
                                  <label>
                                    <input name="child" type="radio" value="Yes" disabled="disabled">
                                    Yes &nbsp;</label>
                                  <label>
                                    <input name="child" type="radio" value="Does Not Matter" disabled="disabled">
                                    Doesn't matter</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Age between </label>
                              </div>
                              <div class="col-sm-4 col-md-4 ">
                                <select name="agefrom" id="agefrom" class="form-control">
                                  <option value="18">18</option>
                                  <option value="19">19</option>
                                  <option value="20" selected="selected">20</option>
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
                              <div class="col-sm-1 col-md-1 " style="padding-top:10px"> to
                              </div>
                              <div class="col-sm-4 col-md-4">
                                <select class="form-control" name="ageto" id="ageto">
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
                                  <option value="32" selected="selected">32</option>
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
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Height </label>
                              </div>
                              <div class="col-sm-4 col-md-4">
                                <select id="heightfr" name="heightfr" class="form-control">
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
                              </div>
                              <div class="col-sm-1 col-md-1 " style="padding-top:10px"> to
                              </div>
                              <div class="col-sm-4 col-md-4">
                                <select id="heightto" name="heightto" class="form-control">
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
                                  <option value="44" selected="selected">6ft.11in-211cm
                                  </option>
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label">Complexion<span class="text-danger">*</span></label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <select name="ddlcomplexion" id="ddlcomplexion" class="required form-control combo">
                                  <option value="" selected="selected">All</option>
                                  <option>Very Fair</option>
                                  <option>Fair</option>
                                  <option>Wheatish</option>
                                  <option>Dark</option>
                                </select>
                                <span class="err_msg" id="errddlcomplexion"></span>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Manglik</label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <div class="controls_holder pull-left">
                                  <label>
                                    <input name="manglik" type="radio" value="No">
                                    No &nbsp;</label>
                                  <label>
                                    <input name="manglik" type="radio" value="Yes">
                                    Yes &nbsp;</label>
                                  <label>
                                    <input name="manglik" type="radio" value="Anshik">
                                    Anshik &nbsp;</label>
                                  <label>
                                    <input name="manglik" type="radio" value="All" checked="checked">
                                    All</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Physical status </label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="controls_holder ">
                                  <label>
                                    <input name="physical" type="radio" value="Normal" checked="checked">
                                    Normal &nbsp;</label>
                                  <label>
                                    <input name="physical" type="radio" value="Physically challenged">
                                    Disable &nbsp;</label>
                                  <label>
                                    <input name="physical" type="radio" value="Doesnt Matter">
                                    Doesn't matter</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Eating Habits</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="controls_holder ">
                                  <label>
                                    <input name="foodPref" type="radio" value="Vegetarian ">
                                    Vegetarian &nbsp;</label>
                                  <label>
                                    <input name="foodPref" type="radio" value="Non-Vegetarian">
                                    Non-Vegetarian &nbsp;</label>
                                  <label>
                                    <input name="foodPref" type="radio" value="Eggetarian">
                                    Eggetarian &nbsp;</label>
                                  <label>
                                    <input name="foodPref" type="radio" value="All" checked="checked">
                                    All</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Mother tongue</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="mtongue1" style="height:100px!important" multiple="multiple" id="mtongue1" class="form-control" style="height:100px!important">
                                      <option selected="selected">Any</option>
                                      <option>Arabic</option>
                                      <option>Assamese</option>
                                      <option>Awadhi</option>
                                      <option>Bengali</option>
                                      <option>Bhojpuri</option>
                                      <option>Bhutia</option>
                                      <option>Bihari</option>
                                      <option>Chattisgarhi</option>
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
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button2" class="btn  btn-primary btn-sm" type="button" id="button2" value="Add" style="width:100%">
                                    <input name="button22" class="btn  btn-primary btn-sm" type="button" id="button22" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="mtongue" style="height:100px!important" multiple="multiple" id="select4" class="form-control">
                                      <option>Any</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Religion</label>
                              </div>

                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="lstreligion1" style="height:100px!important" multiple="multiple" id="lstreligion1" class="form-control" style="height:100px!important">
                                      <option selected="selected">Any </option>
                                      <option>Buddhist</option>
                                      <option>Christian</option>
                                      <option>Christian - Catholic</option>
                                      <option>Christian - Orthodox</option>
                                      <option>Christian - Protestant</option>
                                      <option>Hindu</option>
                                      <option>Jain</option>
                                      <option>Jain - Digambar</option>
                                      <option>Jain - Shwetambar</option>
                                      <option>Muslim</option>
                                      <option>Muslim Shiya</option>
                                      <option>Muslim Sunni</option>
                                      <option>Parsi</option>
                                      <option>Sikh</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button2" class="btn  btn-primary btn-sm" type="button" id="button2" onClick="javascript:addSrcToDestListR()" value="Add" style="width:100%">
                                    <input name="button22" class="btn  btn-primary btn-sm" type="button" id="button22" onClick="javascript:deleteFromDestListR()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="lstreligion" style="height:100px!important" multiple="multiple" id="lstreligion" class="form-control">
                                      <option>Any</option>
                                    </select>

                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Caste / Division </label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="caste1" style="height:100px!important" multiple="multiple" id="caste1" class="form-control" style="height:100px!important">
                                      <option selected="selected">Any</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button3" class="btn  btn-primary btn-sm" type="button" id="button3" value="Add" style="width:100%">
                                    <input name="button33" class="btn  btn-primary btn-sm" type="button" id="button33" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="caste" style="height:100px!important" multiple="multiple" id="select4" class="form-control">
                                      <option>Any</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Caste No Bar</label>
                              </div>
                              <div class="col-sm-9 col-md-9 " style="padding: 5px;">
                                <div class="controls_holder ">
                                  <label>
                                    <input id="chkcastenobar" type="checkbox" name="cnb" value="Yes">&nbsp;Caste No Bar
                                  </label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Sub Caste</label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <input type="text" name="subcaste" class="form-control">
                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Education</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="cmbedu1" style="height:100px!important" multiple="multiple" id="cmbedu1" class="form-control" style="height:100px!important">
                                      <option selected="selected">Any </option>
                                      <option>10+2/Senior Secondary School</option>
                                      <option>B.A.</option>
                                      <option>B.Arch</option>
                                      <option>B.Com</option>
                                      <option>B.Ed</option>
                                      <option>B.Pharm</option>
                                      <option>B.Sc</option>
                                      <option>B.V.Sc.</option>
                                      <option>BA LLB</option>
                                      <option>Bachelor</option>
                                      <option>Bachelor of Physiotherapy</option>
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
                                      <option>Master of Fine Arts</option>
                                      <option>Master of Physiotherapy</option>
                                      <option>Masters</option>
                                      <option>MBA PGDM</option>
                                      <option>MBA PGDM part time</option>
                                      <option>MBBS</option>
                                      <option>MCA PGDCA</option>
                                      <option>MCA PGDCA part time</option>
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
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button4" class="btn  btn-primary btn-sm" type="button" id="button4" onClick="javascript:addSrcToDestListE()" value="Add" style="width:100%">
                                    <input name="button44" class="btn  btn-primary btn-sm" type="button" id="button44" onClick="javascript:deleteFromDestListE()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="cmbedu" style="height:100px!important" multiple="multiple" id="cmbedu" class="form-control">
                                      <option>Any</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Occupation</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="cmboccu1" style="height:100px!important" multiple="multiple" id="cmboccu1" class="form-control" style="height:100px!important">
                                      <option selected="selected">Any </option>
                                      <option>Accounts</option>
                                      <option>Administrative Professional</option>
                                      <option>Advertising</option>
                                      <option>Agriculture</option>
                                      <option>Air Hostess</option>
                                      <option>Airline Professional</option>
                                      <option>Architect</option>
                                      <option>Arts & Craftsman</option>
                                      <option>Auditor</option>
                                      <option>Banking Service Professional</option>
                                      <option>Beautician</option>
                                      <option>Business</option>
                                      <option>CEO / President/Director/Chairman
                                      </option>
                                      <option>Chartered Accountant</option>
                                      <option>Clerk</option>
                                      <option>Company Secretary</option>
                                      <option>Consultant</option>
                                      <option>Cost Accountant</option>
                                      <option>Customer Care Professional</option>
                                      <option>Doctor</option>
                                      <option>Education Professional</option>
                                      <option>Engineer - IT</option>
                                      <option>Engineer - Non IT</option>
                                      <option>Entertainment Professional</option>
                                      <option>Executive</option>
                                      <option>Farming Professional</option>
                                      <option>Fashion Designer</option>
                                      <option>Finance Professional</option>
                                      <option>Hardware Professional</option>
                                      <option>Health Care Professional</option>
                                      <option>Hotel / Hospitality Professional
                                      </option>
                                      <option>Interior Designer</option>
                                      <option>Journalist</option>
                                      <option>Lawyer</option>
                                      <option>Lecturer</option>
                                      <option>Legal Professional</option>
                                      <option>Manager</option>
                                      <option>Mariner / Merchant Navy</option>
                                      <option>Marketing Professional</option>
                                      <option>Media Professional</option>
                                      <option>Not Working</option>
                                      <option>Nurse</option>
                                      <option>Officer</option>
                                      <option>Others</option>
                                      <option>Paramedical Professional</option>
                                      <option>Pilot</option>
                                      <option>PR Professional</option>
                                      <option>Professor</option>
                                      <option>Researcher</option>
                                      <option>Sales Professional</option>
                                      <option>Scientist</option>
                                      <option>Social Worker</option>
                                      <option>Software Professional</option>
                                      <option>Sportsman</option>
                                      <option>Supervisors</option>
                                      <option>Teaching / Academician</option>
                                      <option>Technician</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button6" class="btn  btn-primary btn-sm" type="button" id="button6" onClick="javascript:addSrcToDestListO()" value="Add" style="width:100%">
                                    <input name="button66" class="btn  btn-primary btn-sm" type="button" id="button66" onClick="javascript:deleteFromDestListO()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="cmboccu" style="height:100px!important" multiple="multiple" id="cmboccu" class="form-control">
                                      <option>Any</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Employed in</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="controls_holder ">
                                  <label>
                                    <input type="checkbox" name="employedin" value="Government" />
                                    Government&nbsp;</label>
                                  <label>
                                    <input type="checkbox" name="employedin" value="Private" />
                                    Private&nbsp;</label>
                                  <label>
                                    <input type="checkbox" name="employedin" value="Business" />
                                    Business&nbsp;</label>
                                  <label>
                                    <input type="checkbox" name="employedin" value="Defence" />
                                    Defence&nbsp;</label>
                                  <label>
                                    <input type="checkbox" name="employedin" value="Not working" />
                                    Not working&nbsp;</label>
                                  <label>
                                    <input type="checkbox" name="employedin" id="employedinany" value="Any" checked="checked" />
                                    Any</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Country Living in</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <select name='countryliving' id='countryliving' class='form-control' style=''>
                                  <option value='Any' selected='selected'>Any</option>
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
                                  <option value='31'>British Indian Ocean Territory
                                  </option>
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
                                  <option value='50'>Congo The Democratic Republic Of The
                                  </option>
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
                                  <option value='70'>External Territories of Australia
                                  </option>
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
                                  <option value='168'>Palestinian Territory Occupied
                                  </option>
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
                                  <option value='187'>Saint Vincent And The Grenadines
                                  </option>
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
                                  <option value='199'>Smaller Territories of the UK
                                  </option>
                                  <option value='200'>Solomon Islands</option>
                                  <option value='201'>Somalia</option>
                                  <option value='202'>South Africa</option>
                                  <option value='203'>South Georgia</option>
                                  <option value='204'>South Sudan</option>
                                  <option value='205'>Spain</option>
                                  <option value='206'>Sri Lanka</option>
                                  <option value='207'>Sudan</option>
                                  <option value='208'>Suriname</option>
                                  <option value='209'>Svalbard And Jan Mayen Islands
                                  </option>
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
                                  <option value='232'>United States Minor Outlying Islands
                                  </option>
                                  <option value='233'>Uruguay</option>
                                  <option value='231'>USA</option>
                                  <option value='234'>Uzbekistan</option>
                                  <option value='235'>Vanuatu</option>
                                  <option value='236'>Vatican City State (Holy See)
                                  </option>
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
                                </select>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Location</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="lststate1" style="height:100px!important" multiple="multiple" id="lststate1" class="form-control" style="height:100px!important">
                                      <option selected="selected">Any </option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button4" class="btn  btn-primary btn-sm" type="button" id="button4" onClick="javascript:addSrcToDestListS()" value="Add" style="width:100%">
                                    <input name="button44" class="btn  btn-primary btn-sm" type="button" id="button44" onClick="javascript:deleteFromDestListS()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="lststate" style="height:100px!important" multiple="multiple" id="select2" class="form-control">
                                      <option>Any</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">City</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="row">
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="lstcity1" style="height:100px!important" multiple="multiple" id="select3s" class="form-control">
                                      <option selected="selected">Any</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button4" class="btn  btn-primary btn-sm" type="button" id="button4" value="Add" style="width:100%">
                                    <input name="button44" class="btn  btn-primary btn-sm" type="button" id="button44" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="lstcity" style="height:100px!important" multiple="multiple" id="select2s" class="form-control">
                                      <option>Any</option>
                                    </select>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label">Citizenship</label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <select name='citizenship' id='citizenship' class='form-control'>
                                  <option value='Any' selected='selected'>Any</option>
                                  <option value='Afghanistan'>Afghanistan</option>
                                  <option value='Albania'>Albania</option>
                                  <option value='Algeria'>Algeria</option>
                                  <option value='American Samoa'>American Samoa</option>
                                  <option value='Andorra'>Andorra</option>
                                  <option value='Angola'>Angola</option>
                                  <option value='Anguilla'>Anguilla</option>
                                  <option value='Antarctica'>Antarctica</option>
                                  <option value='Antigua And Barbuda'>Antigua And Barbuda
                                  </option>
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
                                  <option value='Bosnia and Herzegovina'>Bosnia and
                                    Herzegovina</option>
                                  <option value='Botswana'>Botswana</option>
                                  <option value='Bouvet Island'>Bouvet Island</option>
                                  <option value='Brazil'>Brazil</option>
                                  <option value='British Indian Ocean Territory'>British
                                    Indian Ocean Territory</option>
                                  <option value='Brunei'>Brunei</option>
                                  <option value='Bulgaria'>Bulgaria</option>
                                  <option value='Burkina Faso'>Burkina Faso</option>
                                  <option value='Burundi'>Burundi</option>
                                  <option value='Cambodia'>Cambodia</option>
                                  <option value='Cameroon'>Cameroon</option>
                                  <option value='Canada'>Canada</option>
                                  <option value='Cape Verde'>Cape Verde</option>
                                  <option value='Cayman Islands'>Cayman Islands</option>
                                  <option value='Central African Republic'>Central African
                                    Republic</option>
                                  <option value='Chad'>Chad</option>
                                  <option value='Chile'>Chile</option>
                                  <option value='China'>China</option>
                                  <option value='Christmas Island'>Christmas Island
                                  </option>
                                  <option value='Cocos (Keeling) Islands'>Cocos (Keeling)
                                    Islands</option>
                                  <option value='Colombia'>Colombia</option>
                                  <option value='Comoros'>Comoros</option>
                                  <option value='Congo'>Congo</option>
                                  <option value='Congo The Democratic Republic Of The'>
                                    Congo The Democratic Republic Of The</option>
                                  <option value='Cook Islands'>Cook Islands</option>
                                  <option value='Costa Rica'>Costa Rica</option>
                                  <option value='Cote DIvoire (Ivory Coast)'>Cote DIvoire
                                    (Ivory Coast)</option>
                                  <option value='Croatia (Hrvatska)'>Croatia (Hrvatska)
                                  </option>
                                  <option value='Cuba'>Cuba</option>
                                  <option value='Cyprus'>Cyprus</option>
                                  <option value='Czech Republic'>Czech Republic</option>
                                  <option value='Denmark'>Denmark</option>
                                  <option value='Djibouti'>Djibouti</option>
                                  <option value='Dominica'>Dominica</option>
                                  <option value='Dominican Republic'>Dominican Republic
                                  </option>
                                  <option value='East Timor'>East Timor</option>
                                  <option value='Ecuador'>Ecuador</option>
                                  <option value='Egypt'>Egypt</option>
                                  <option value='El Salvador'>El Salvador</option>
                                  <option value='Equatorial Guinea'>Equatorial Guinea
                                  </option>
                                  <option value='Eritrea'>Eritrea</option>
                                  <option value='Estonia'>Estonia</option>
                                  <option value='Ethiopia'>Ethiopia</option>
                                  <option value='External Territories of Australia'>
                                    External Territories of Australia</option>
                                  <option value='Falkland Islands'>Falkland Islands
                                  </option>
                                  <option value='Faroe Islands'>Faroe Islands</option>
                                  <option value='Fiji Islands'>Fiji Islands</option>
                                  <option value='Finland'>Finland</option>
                                  <option value='France'>France</option>
                                  <option value='French Guiana'>French Guiana</option>
                                  <option value='French Polynesia'>French Polynesia
                                  </option>
                                  <option value='French Southern Territories'>French
                                    Southern Territories</option>
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
                                  <option value='Guernsey and Alderney'>Guernsey and
                                    Alderney</option>
                                  <option value='Guinea'>Guinea</option>
                                  <option value='Guinea-Bissau'>Guinea-Bissau</option>
                                  <option value='Guyana'>Guyana</option>
                                  <option value='Haiti'>Haiti</option>
                                  <option value='Heard and McDonald Islands'>Heard and
                                    McDonald Islands</option>
                                  <option value='Honduras'>Honduras</option>
                                  <option value='Hong Kong S.A.R.'>Hong Kong S.A.R.
                                  </option>
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
                                  <option value='Marshall Islands'>Marshall Islands
                                  </option>
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
                                  <option value='Netherlands The'>Netherlands The</option>
                                  <option value='New Caledonia'>New Caledonia</option>
                                  <option value='New Zealand'>New Zealand</option>
                                  <option value='Nicaragua'>Nicaragua</option>
                                  <option value='Niger'>Niger</option>
                                  <option value='Nigeria'>Nigeria</option>
                                  <option value='Niue'>Niue</option>
                                  <option value='Norfolk Island'>Norfolk Island</option>
                                  <option value='Northern Mariana Islands'>Northern
                                    Mariana Islands</option>
                                  <option value='Norway'>Norway</option>
                                  <option value='Oman'>Oman</option>
                                  <option value='Pakistan'>Pakistan</option>
                                  <option value='Palau'>Palau</option>
                                  <option value='Palestinian Territory Occupied'>
                                    Palestinian Territory Occupied</option>
                                  <option value='Panama'>Panama</option>
                                  <option value='Papua new Guinea'>Papua new Guinea
                                  </option>
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
                                  <option value='Saint Kitts And Nevis'>Saint Kitts And
                                    Nevis</option>
                                  <option value='Saint Lucia'>Saint Lucia</option>
                                  <option value='Saint Pierre and Miquelon'>Saint Pierre
                                    and Miquelon</option>
                                  <option value='Saint Vincent And The Grenadines'>Saint
                                    Vincent And The Grenadines</option>
                                  <option value='Samoa'>Samoa</option>
                                  <option value='San Marino'>San Marino</option>
                                  <option value='Sao Tome and Principe'>Sao Tome and
                                    Principe</option>
                                  <option value='Saudi Arabia'>Saudi Arabia</option>
                                  <option value='Senegal'>Senegal</option>
                                  <option value='Serbia'>Serbia</option>
                                  <option value='Seychelles'>Seychelles</option>
                                  <option value='Sierra Leone'>Sierra Leone</option>
                                  <option value='Singapore'>Singapore</option>
                                  <option value='Slovakia'>Slovakia</option>
                                  <option value='Slovenia'>Slovenia</option>
                                  <option value='Smaller Territories of the UK'>Smaller
                                    Territories of the UK</option>
                                  <option value='Solomon Islands'>Solomon Islands</option>
                                  <option value='Somalia'>Somalia</option>
                                  <option value='South Africa'>South Africa</option>
                                  <option value='South Georgia'>South Georgia</option>
                                  <option value='South Sudan'>South Sudan</option>
                                  <option value='Spain'>Spain</option>
                                  <option value='Sri Lanka'>Sri Lanka</option>
                                  <option value='Sudan'>Sudan</option>
                                  <option value='Suriname'>Suriname</option>
                                  <option value='Svalbard And Jan Mayen Islands'>Svalbard
                                    And Jan Mayen Islands</option>
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
                                  <option value='Trinidad And Tobago'>Trinidad And Tobago
                                  </option>
                                  <option value='Tunisia'>Tunisia</option>
                                  <option value='Turkey'>Turkey</option>
                                  <option value='Turkmenistan'>Turkmenistan</option>
                                  <option value='Turks And Caicos Islands'>Turks And
                                    Caicos Islands</option>
                                  <option value='Tuvalu'>Tuvalu</option>
                                  <option value='Uganda'>Uganda</option>
                                  <option value='Ukraine'>Ukraine</option>
                                  <option value='United Arab Emirates'>United Arab
                                    Emirates</option>
                                  <option value='United Kingdom'>United Kingdom</option>
                                  <option value='United States Minor Outlying Islands'>
                                    United States Minor Outlying Islands</option>
                                  <option value='Uruguay'>Uruguay</option>
                                  <option value='USA'>USA</option>
                                  <option value='Uzbekistan'>Uzbekistan</option>
                                  <option value='Vanuatu'>Vanuatu</option>
                                  <option value='Vatican City State (Holy See)'>Vatican
                                    City State (Holy See)</option>
                                  <option value='Venezuela'>Venezuela</option>
                                  <option value='Vietnam'>Vietnam</option>
                                  <option value='Virgin Islands (British)'>Virgin Islands
                                    (British)</option>
                                  <option value='Virgin Islands (US)'>Virgin Islands (US)
                                  </option>
                                  <option value='Wallis And Futuna Islands'>Wallis And
                                    Futuna Islands</option>
                                  <option value='Western Sahara'>Western Sahara</option>
                                  <option value='Yemen'>Yemen</option>
                                  <option value='Yugoslavia'>Yugoslavia</option>
                                  <option value='Zambia'>Zambia</option>
                                  <option value='Zimbabwe'>Zimbabwe</option>
                                </select>
                              </div>
                            </div>
                          </div>

                          <div class="form-group">
                            <div class="row">
                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Profile with </label>
                              </div>
                              <div class="col-sm-9 col-md-9">
                                <div class="controls_holder ">
                                  <label>
                                    <input name="chkphoto" type="checkbox" checked="checked" id="chkphoto" value="Yes">
                                    Photo &nbsp;</label>
                                  <label>
                                    <input name="chkhoro" type="checkbox" id="chkhoro" value="Yes">
                                    Horoscope</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-3">&nbsp;</div>
                              <div class="col-md-4 ">
                                <input type="submit" name="Submit" class="btn btn-primary btn-block" value="Search">
                              </div>

                            </div>
                          </div>
                          <div class="col-md-12">&nbsp;</div>
                          <p>&nbsp;</p>



                        </form>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="mega-box-new">
                    <p class="calibri-Bold-font f-22 color-31 t-transform-ue text-center ab-t1">Search
                      <span class="color-d">Profile id </span>
                    </p>
                    <hr class="search-hr">
                    <div class="row">
                      <div class="col-md-12">
                        <form action="#" method="post" name="form3" target="_parent" id="form3">


                          <br>
                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-12 col-md-12">


                                <input type="text" name="txtLoginId" id="txtLoginId2" tabindex="40" class="form-control" accesskey="13">
                                <p style="text-align:left"> <small> search by: Profile Id
                                  </small> </p>


                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-9 col-md-9">
                                <button class="btn btn-primary btn-block" name="Submit" type="submit">Search</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

                </div>


              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade " id="keyword-search-tab">
              <div class="row mt-4 margin-lr-0">
                <div class="col-md-8 col-sm-12 col-xs-12">
                  <div class="mega-box-new">
                    <div class="m-add-box">
                      <p class="text-center">Find profiles based on keywords exp : Hindu, Muslim,
                        Rajput, Bhopal, India, Software Eng, HR Professional, etc...</p>
                      <hr class="search-hr">

                      <form action="Searching/keywordSearch" method="post">
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Looking for</label>
                            </div>
                            <div class="col-sm-9 col-md-9">



                              <div class="controls_holder d-flex">


                                <div class="form-check ml-1 mb-2 mr-3">
                                  <input class="form-check-input" required="" name="gender" type="radio" value="male" id="privacy1">
                                  <label class="form-check-label" for="privacy1">
                                    Groom </label>
                                </div>
                                <div class="form-check ml-1 mb-2">
                                  <input class="form-check-input" required="" name="gender" type="radio" value="female" id="privacy">
                                  <label class="form-check-label" for="privacy">
                                    Bride </label>
                                </div>


                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0 p-0">
                              <label class="control-label mb-0">Age between </label>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              <select name="age_from" id="agefrom" class="form-control">
                                <option value="18">18</option>
                                <option value="19">19</option>
                                <option value="20" selected="selected">20</option>
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
                            <div class="col-sm-1 col-md-1" style="padding-top:10px"> to </div>
                            <div class="col-sm-4 col-md-4">
                              <select class="form-control" name="age_to" id="ageto">
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
                                <option value="32" selected="selected">32</option>
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
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Keyword Search </label>
                            </div>
                            <div class="col-sm-9 col-md-9">
                              <input name="keyword" type="text" id="txtkey" class="form-control description" size="40">
                              <p align="left"><small>keywords eg: brahmin, engineer, delhi,
                                  religious</small></p>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label">Profile with </label>
                            </div>
                            <div class="col-sm-9 col-md-9">
                              <div class="controls_holder ">
                                <label>
                                  <input name="profile_with" type="checkbox" checked="checked" id="phtoto" value="photo">
                                  Photo &nbsp;</label>
                                <label>
                                  <input name="profile_with" type="checkbox" id="chkhoro" value="horoscope">
                                  Horoscope</label>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="form-group">
                          <div class="row">
                            <div class="col-sm-3 col-md-3 p-0">
                              <label class="control-label"></label>
                            </div>
                            <div class="col-sm-4 col-md-4">
                              <button type="submit" name="Submit" class="btn btn-primary btn-block"> Search</button>
                            </div>
                          </div>
                        </div>

                      </form>
                    </div>
                  </div>
                </div>

                <div class="col-md-4 col-sm-12 col-xs-12">
                  <div class="mega-box-new">
                    <p class="calibri-Bold-font f-22 color-31 t-transform-ue text-center ab-t1">Search
                      <span class="color-d">Profile id </span>
                    </p>
                    <hr class="search-hr">
                    <div class="row">
                      <div class="col-md-12">
                        <form action="#" method="post" name="form3" target="_parent" id="form3">


                          <br>
                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-12 col-md-12">


                                <input type="text" name="txtLoginId" id="txtLoginId2" tabindex="40" class="form-control" accesskey="13">
                                <p style="text-align:left"> <small> search by: Profile Id
                                  </small> </p>


                              </div>
                            </div>
                          </div>


                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-9 col-md-9">
                                <button class="btn btn-primary btn-block" name="Submit" type="submit" onclick="return checkid()">Search</button>
                              </div>
                            </div>
                          </div>
                        </form>
                      </div>
                    </div>


                  </div>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>
                  <br>

                </div>
              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade " id="id-search-tab">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="mega-box-new">
                  <div class="m-add-box">
                    <p class="text-center">Find profiles faster with id search. e.g : SM100001 </p>
                    <hr class="search-hr">

                    <div class="add-box-2">
                      <form method="post" name="form3" target="_parent" id="form3">
                        <div class="row add-b-cstm">
                          <div class="col-md-12 col-sm-4 col-xs-12">
                            <p class="Poppins-Medium f-16 color-31 ad-name">Search By ID <span class="color-d f-16 select2-lbl-span">*</span> :</p>
                          </div>
                          <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="add-input">
                              <input type="text" class="form-control ni-input" required="" name="txtLoginId" placeholder="Enter Your Profile ID">
                              <input type="hidden" name="search_page_nm" value="ID Search">
                            </div>
                          </div>
                        </div>
                        <br>
                        <div class="row add-b-cstm ">

                          <div class="col-md-6 col-sm-6 col-xs-12">
                            <div class="add-ad-btn">
                              <button type="submit" class="btn btn-primary btn-block"><i class="fas fa-search"></i> Search</button>
                            </div>
                          </div>
                          <div class="col-md-3 col-sm-3 col-xs-12">
                          </div>
                        </div>
                        <input type="hidden" name="csrf_new_matrimonial" value="69a2f7a6072ced6f3c6a60af4e8d0cb8" id="hash_tocken_id">
                        <input type="hidden" name="save_search" id="id_save_search" value="">
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