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
                        <form>
                          <div class="form-group">
                            <div class="row">

                              <div class="col-sm-3 col-md-3 p-0 ">
                                <label class="control-label   ">Looking for</label>
                              </div>
                              <div class="col-sm-9 col-md-9 ">
                                <div class="controls_holder">
                                  <label>
                                    <input name="gender" type="radio" id="gender" value="Male" checked="checked" />
                                    Groom &nbsp; </label>
                                  <label>
                                    <input name="gender" type="radio" id="gender" value="Female" />
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
                                    <input name="marital_status" class="langg" type="checkbox" id="marital_status" value="Never Married" >
                                    Never Married &nbsp;</label>
                                  <label>
                                    <input name="marital_status" class="langg" type="checkbox" id="marital_status" value="Widowed">
                                    Widowed &nbsp;</label>
                                  <label>
                                    <input name="marital_status" class="langg" type="checkbox" id="marital_status" value="Divorced">
                                    Divorced &nbsp;</label>
                                  <label>
                                    <input name="marital_status" class="langg" type="checkbox" id="marital_status" value="Separated">
                                    Separated &nbsp;</label>
                                  <label>
                                    <input name="marital_status" class="langg" type="checkbox" id="marital_status" value="Any">
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
                                    <input name="child" id="have_children" type="radio" value="No" disabled="disabled">
                                    No &nbsp;</label>
                                  <label>
                                    <input name="child" id="have_children" type="radio" value="Yes" disabled="disabled">
                                    Yes &nbsp;</label>
                                  <label>
                                    <input name="child" id="have_children" type="radio" value="None" disabled="disabled">
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
                                <select name="age_from" id="age_from" class="form-control">
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
                                  <option value="71">71</option>
                                  <option value="72">72</option>
                                  <option value="73">73</option>
                                  <option value="74">74</option>
                                  <option value="75">75</option>
                                  <option value="76">76</option>
                                  <option value="77">77</option>
                                  <option value="78">78</option>
                                  <option value="79">79</option>
                                  <option value="80">80</option>
                                </select>
                              </div>
                              <div class="col-sm-1 col-md-1 " style="padding-top:10px"> to
                              </div>
                              <div class="col-sm-4 col-md-4">
                                <select class="form-control" name="age_to" id="age_to">
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
                                  <option value="35" selected>35</option>
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
                                  <option value="71">71</option>
                                  <option value="72">72</option>
                                  <option value="73">73</option>
                                  <option value="74">74</option>
                                  <option value="75">75</option>
                                  <option value="76">76</option>
                                  <option value="77">77</option>
                                  <option value="78">78</option>
                                  <option value="79">79</option>
                                  <option value="80">80</option>
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
                                <select id="height_from" name="height_from" class="form-control">
                                  <option value="0">Please Select</option>
                                  <option value='3ft.5in-105cm'>3ft.5in-105cm</option>
                                  <option value='3ft.6in-107cm'>3ft.6in-107cm</option>
                                  <option value='3ft.7in-110cm'>3ft.7in-110cm</option>
                                  <option value='3ft.8in-112cm'>3ft.8in-112cm</option>
                                  <option value='3ft.9in-115cm'>3ft.9in-115cm</option>
                                  <option value='3ft.10in-117cm'>3ft.10in-117cm</option>
                                  <option value='3ft.11in-120cm'>3ft.11in-120cm</option>
                                  <option value='4ft-122cm'>4ft-122cm</option>
                                  <option value='4ft.1in-125cm' selected>4ft.1in-125cm</option>
                                  <option value='4ft.2in-127cm'>4ft.2in-127cm</option>
                                  <option value='4ft.3in-130cm'>4ft.3in-130cm</option>
                                  <option value='4ft.4in-132cm'>4ft.4in-132cm</option>
                                  <option value='4ft.5in-135cm'>4ft.5in-135cm</option>
                                  <option value='4ft.6in-137cm'>4ft.6in-137cm</option>
                                  <option value='4ft.7in-140cm'>4ft.7in-140cm</option>
                                  <option value='4ft.8in-142cm'>4ft.8in-142cm</option>
                                  <option value='4ft.9in-145cm'>4ft.9in-145cm</option>
                                  <option value='4ft.10in-147cm'>4ft.10in-147cm</option>
                                  <option value='4ft.11in-150cm'>4ft.11in-150cm</option>
                                  <option value='5ft-152cm'>5ft-152cm</option>
                                  <option value='5ft.1in-155cm'>5ft.1in-155cm</option>
                                  <option value='5ft.2in-157cm'>5ft.2in-157cm</option>
                                  <option value='5ft.3in-160cm'>5ft.3in-160cm</option>
                                  <option value='5ft.4in-162cm'>5ft.4in-162cm</option>
                                  <option value='5ft.5in-165cm'>5ft.5in-165cm</option>
                                  <option value='5ft.6in-167cm'>5ft.6in-167cm</option>
                                  <option value='5ft.7in-170cm'>5ft.7in-170cm</option>
                                  <option value='5ft.8in-172cm'>5ft.8in-172cm</option>
                                  <option value='5ft.9in-175cm'>5ft.9in-175cm</option>
                                  <option value='5ft.10in-177cm'>5ft.10in-177cm</option>
                                  <option value='5ft.11in-180cm'>5ft.11in-180cm</option>
                                  <option value='6ft-182cm'>6ft-182cm</option>
                                  <option value='6ft.1in-185cm'>6ft.1in-185cm</option>
                                  <option value='6ft.2in-187cm'>6ft.2in-187cm</option>
                                  <option value='6ft.3in-190cm'>6ft.3in-190cm</option>
                                  <option value='6ft.4in-192cm'>6ft.4in-192cm</option>
                                  <option value='6ft.5in-195cm'>6ft.5in-195cm</option>
                                  <option value='6ft.6in-197cm'>6ft.6in-197cm</option>
                                  <option value='6ft.7in-200cm'>6ft.7in-200cm</option>
                                  <option value='6ft.8in-202cm'>6ft.8in-202cm</option>
                                  <option value='6ft.9in-205cm'>6ft.9in-205cm</option>
                                  <option value='6ft.10in-207cm'>6ft.10in-207cm</option>
                                  <option value='6ft.11in-210cm'>6ft.11in-210cm</option>
                                </select>
                              </div>
                              <div class="col-sm-1 col-md-1 " style="padding-top:10px"> to
                              </div>
                              <div class="col-sm-4 col-md-4">
                                <select id="height_to" name="height_to" class="form-control">
                                  <option value="0">Please Select</option>
                                  <option value='3ft.5in-105cm'>3ft.5in-105cm</option>
                                  <option value='3ft.6in-107cm'>3ft.6in-107cm</option>
                                  <option value='3ft.7in-110cm'>3ft.7in-110cm</option>
                                  <option value='3ft.8in-112cm'>3ft.8in-112cm</option>
                                  <option value='3ft.9in-115cm'>3ft.9in-115cm</option>
                                  <option value='3ft.10in-117cm'>3ft.10in-117cm</option>
                                  <option value='3ft.11in-120cm'>3ft.11in-120cm</option>
                                  <option value='4ft-122cm'>4ft-122cm</option>
                                  <option value='4ft.1in-125cm'>4ft.1in-125cm</option>
                                  <option value='4ft.2in-127cm'>4ft.2in-127cm</option>
                                  <option value='4ft.3in-130cm'>4ft.3in-130cm</option>
                                  <option value='4ft.4in-132cm'>4ft.4in-132cm</option>
                                  <option value='4ft.5in-135cm'>4ft.5in-135cm</option>
                                  <option value='4ft.6in-137cm'>4ft.6in-137cm</option>
                                  <option value='4ft.7in-140cm'>4ft.7in-140cm</option>
                                  <option value='4ft.8in-142cm'>4ft.8in-142cm</option>
                                  <option value='4ft.9in-145cm'>4ft.9in-145cm</option>
                                  <option value='4ft.10in-147cm'>4ft.10in-147cm</option>
                                  <option value='4ft.11in-150cm'>4ft.11in-150cm</option>
                                  <option value='5ft-152cm'>5ft-152cm</option>
                                  <option value='5ft.1in-155cm'>5ft.1in-155cm</option>
                                  <option value='5ft.2in-157cm'>5ft.2in-157cm</option>
                                  <option value='5ft.3in-160cm'>5ft.3in-160cm</option>
                                  <option value='5ft.4in-162cm'>5ft.4in-162cm</option>
                                  <option value='5ft.5in-165cm'>5ft.5in-165cm</option>
                                  <option value='5ft.6in-167cm'>5ft.6in-167cm</option>
                                  <option value='5ft.7in-170cm'>5ft.7in-170cm</option>
                                  <option value='5ft.8in-172cm'>5ft.8in-172cm</option>
                                  <option value='5ft.9in-175cm' selected>5ft.9in-175cm</option>
                                  <option value='5ft.10in-177cm'>5ft.10in-177cm</option>
                                  <option value='5ft.11in-180cm'>5ft.11in-180cm</option>
                                  <option value='6ft-182cm'>6ft-182cm</option>
                                  <option value='6ft.1in-185cm'>6ft.1in-185cm</option>
                                  <option value='6ft.2in-187cm'>6ft.2in-187cm</option>
                                  <option value='6ft.3in-190cm'>6ft.3in-190cm</option>
                                  <option value='6ft.4in-192cm'>6ft.4in-192cm</option>
                                  <option value='6ft.5in-195cm'>6ft.5in-195cm</option>
                                  <option value='6ft.6in-197cm'>6ft.6in-197cm</option>
                                  <option value='6ft.7in-200cm'>6ft.7in-200cm</option>
                                  <option value='6ft.8in-202cm'>6ft.8in-202cm</option>
                                  <option value='6ft.9in-205cm'>6ft.9in-205cm</option>
                                  <option value='6ft.10in-207cm'>6ft.10in-207cm</option>
                                  <option value='6ft.11in-210cm'>6ft.11in-210cm</option>
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
                                <select name="complexion" id="ddlcomplexion" class="required form-control combo">
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
                                    <input name="manglik" id="manglik" type="radio" value="No">
                                    No &nbsp;</label>
                                  <label>
                                    <input name="manglik" id="manglik" type="radio" value="Yes">
                                    Yes &nbsp;</label>
                                  <label>
                                    <input name="manglik" id="manglik" type="radio" value="Anshik">
                                    Anshik &nbsp;</label>
                                  <label>
                                    <input name="manglik" id="manglik" type="radio" value="All" checked="checked">
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
                                    <input name="physical_status" id="physical_status" type="radio" value="Normal" checked="checked">
                                    Normal &nbsp;</label>
                                  <label>
                                    <input name="physical_status" id="physical_status" type="radio" value="Physically challenged">
                                    Disable &nbsp;</label>
                                  <label>
                                    <input name="physical_status" id="physical_status" type="radio" value="Doesnt Matter">
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
                                    <input name="eating_habit" id="eating_habit" type="radio" value="Vegetarian ">
                                    Vegetarian &nbsp;</label>
                                  <label>
                                    <input name="eating_habit" id="eating_habit" type="radio" value="Non-Vegetarian">
                                    Non-Vegetarian &nbsp;</label>
                                  <label>
                                    <input name="eating_habit" id="eating_habit" type="radio" value="Eggetarian">
                                    Eggetarian &nbsp;</label>
                                  <label>
                                    <input name="eating_habit" id="eating_habit" type="radio" value="All" checked="checked">
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
                                    <select name="mother_tongue" style="height:100px!important" multiple="multiple" id="mother_tongue" class="form-control" style="height:100px!important">
                                      <option value='0' selected='selected'>Select Mother Tongue </option>
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
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button2" class="btn  btn-primary btn-sm" type="button" onclick="addMotherT()" id="button2" value="Add" style="width:100%">
                                    <input name="button22" class="btn  btn-primary btn-sm" type="button" id="button22" onclick="deleteMotherT()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="mother_box" style="height:100px!important" multiple="multiple" id="mother_box" class="form-control">

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
                                    <select name="religion1" style="height:100px!important" multiple="multiple" id="religion-dropdown1" class="form-control" style="height:100px!important">
                                      <option value='0' selected='selected'>Select Religion</option>
                                      <?php foreach ($religion as $list) { ?>
                                        <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                      <?php } ?>

                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input type="hidden" name="x" id="rest1">
                                    <input name="button2" class="btn  btn-primary btn-sm" type="button" id="button2" onClick="javascript:addReligion()" value="Add" style="width:100%">
                                    <input name="button22" class="btn  btn-primary btn-sm" type="button" id="button22" onClick="javascript:deleteReligion()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="religion_box" style="height:100px!important" multiple="multiple" id="religion_box" class="form-control">

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
                                    <select name="caste1" style="height:100px!important" multiple="multiple" id="caste-dropdown1" class="form-control" style="height:100px!important">
                                      <option value="">Select Caste</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button3" class="btn  btn-primary btn-sm" type="button" onclick="addCaste()" id="button3" value="Add" style="width:100%">
                                    <input name="button33" class="btn  btn-primary btn-sm" type="button" id="button33" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="caste_box" style="height:100px!important" multiple="multiple" id="caste_box" class="form-control">

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
                                    <input id="caste_barrier" type="checkbox" name="caste_barrier" value="1">&nbsp;Caste No Bar
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
                                <input type="text" name="sub_caste" id="sub_caste" class="form-control">
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
                                    <select name="education" style="height:100px!important" multiple="multiple" id="education1" class="form-control" style="height:100px!important">
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
                                      <option value='MBA PGDM part time' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MBA PGDM part time") echo "selected" ?>>MBA PGDM part
                                        time</option>
                                      <option value='MBBS' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MBBS") echo "selected" ?>>MBBS</option>
                                      <option value='MCA PGDCA' <?php if (isset($preference[0]->education_preference)) if ($preference[0]->education_preference == "MCA PGDCA") echo "selected" ?>>MCA PGDCA</option>
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
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button4" class="btn  btn-primary btn-sm" type="button" id="button4" onClick="javascript:addEducation()" value="Add" style="width:100%">
                                    <input name="button44" class="btn  btn-primary btn-sm" type="button" id="button44" onClick="javascript:deleteFromDestListE()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="cmbedu" style="height:100px!important" multiple="multiple" id="education_box" class="form-control">

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
                                    <select name="occupation" style="height:100px!important" multiple="multiple" id="occupation1" class="form-control" style="height:100px!important">
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
                                    </select>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button6" class="btn  btn-primary btn-sm" type="button" id="button6" onClick="javascript:addOccupation()" value="Add" style="width:100%">
                                    <input name="button66" class="btn  btn-primary btn-sm" type="button" id="button66" onClick="javascript:deleteFromDestListO()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="occupation_box" style="height:100px!important" multiple="multiple" id="occupation_box" class="form-control">

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
                                    <input type="checkbox" class="epi" name="employedin" id="employedin" value="Government" />
                                    Government&nbsp;</label>
                                  <label>
                                    <input type="checkbox" class="epi" name="employedin" id="employedin" value="Private" />
                                    Private&nbsp;</label>
                                  <label>
                                    <input type="checkbox" class="epi" name="employedin" id="employedin" value="Business" />
                                    Business&nbsp;</label>
                                  <label>
                                    <input type="checkbox" class="epi" name="employedin" id="employedin" value="Defence" />
                                    Defence&nbsp;</label>
                                  <label>
                                    <input type="checkbox" class="epi" name="employedin" id="employedin" value="Not working" />
                                    Not working&nbsp;</label>
                                  <label>
                                    <input type="checkbox" class="epi" name="employedin" id="employedin" value="Any" checked="checked" />
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
                                <select name='countryliving' id='country-dropdown1' class='form-control' style=''>
                                  <option value='0' selected='selected'>Select Country</option>
                                  <?php foreach ($country as $list) { ?>
                                    <option value="<?php echo $list->id; ?>"><?php echo $list->name; ?></option>
                                  <?php } ?>

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
                                    <select name="location" style="height:100px!important" multiple="multiple" id="state-dropdown1" class="form-control" style="height:100px!important">
                                      <option value="">Select State</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button4" class="btn  btn-primary btn-sm" type="button" id="button4" onClick="javascript:addState()" value="Add" style="width:100%">
                                    <input name="button44" class="btn  btn-primary btn-sm" type="button" id="button44" onClick="javascript:deleteFromDestListS()" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="state_box" style="height:100px!important" multiple="multiple" id="state_box" class="form-control">

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
                                    <select name="city1" style="height:100px!important" multiple="multiple" id="city-dropdown1" class="form-control">
                                      <option value="">Select City</option>
                                    </select>
                                  </div>
                                  <div class="col-sm-2 col-md-2">
                                    <input name="button4" class="btn  btn-primary btn-sm" type="button" onclick="addCity()" id="button4" value="Add" style="width:100%">
                                    <input name="button44" class="btn  btn-primary btn-sm" type="button" id="button44" value="Remove" style="width:100%">
                                  </div>
                                  <div class="col-sm-5 col-md-5 no-padding">
                                    <select name="city_box" style="height:100px!important" multiple="multiple" id="city_box" class="form-control">

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
                                  <option value='India' >India</option>
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
                                    <input name="profile_with" type="checkbox" checked="checked" id="chkphoto" value="Yes">
                                    Photo &nbsp;</label>
                                  <label>
                                    <input name="profile_with" type="checkbox" id="chkhoro" value="Yes">
                                    Horoscope</label>
                                </div>
                              </div>
                            </div>
                          </div>
                          <div class="form-group">
                            <div class="row">
                              <div class="col-md-3">&nbsp;</div>
                              <div class="col-md-4 ">
                                <button type="button" id="signup" class="btn btn-primary btn-block">Search &rarr;</button>
                                <!-- <input type="submit" name="Submit" onclick="submitForSearch()" class="btn btn-primary btn-block" value="Search"> -->
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
                                  <input class="form-check-input" required="" name="gender" type="radio" value="Female" id="privacy">
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


              </div>
            </div>
            <div role="tabpanel" class="tab-pane fade " id="id-search-tab">

              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="mega-box-new">
                  <div class="m-add-box">
                    <p class="text-center">Find profiles faster with id search. e.g : SM100001 </p>
                    <hr class="search-hr">

                    <div class="add-box-2">
                      <form method="post" name="form3" action="Searching/searchById" method="post" id="form3">
                        <div class="row add-b-cstm">
                          <div class="col-md-12 col-sm-4 col-xs-12">
                            <p class="Poppins-Medium f-16 color-31 ad-name">Search By ID <span class="color-d f-16 select2-lbl-span">*</span> :</p>
                          </div>
                          <div class="col-md-12 col-sm-8 col-xs-12">
                            <div class="add-input">
                              <input type="text" class="form-control ni-input" required="" name="id" placeholder="Enter Your Profile ID">
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

<!-- <textarea name="" id="test" cols="30" rows="10"></textarea> -->

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
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.0/jquery.validate.min.js"></script>
<!-- <script type="text/javascript"> -->
<script type="text/javascript">
  var m_data = new Array();
  var r_data = new Array();
  var c_data = new Array();
  var e_data = new Array();
  var o_data = new Array();
  var state_data = new Array();
  var city_data = new Array();


  $(document).ready(function() {
    $("#signup").click(function() {
      var gender = document.getElementById('gender').value;
      var marital_status = [];
      $(".langg").each(function(){
        if($(this).is(":checked")){
          marital_status.push($(this).val())
        }
      })
      
      var employedin = [];
      $(".epi").each(function(){
        if($(this).is(":checked")){
          employedin.push($(this).val())
        }
      })      
      var age_from = document.getElementById('age_from').value
      var age_to = document.getElementById('age_to').value
      var height_from = document.getElementById('height_from').value
      var height_to = document.getElementById('height_to').value
      var manglik = document.getElementById('manglik').value
      var physical_status = document.getElementById('physical_status').value
      var caste_barrier = document.getElementById('caste_barrier').value
      // var employedin = document.getElementById('employedin').value
      var countryliving = document.getElementById('country-dropdown1').value
      var citizenship = document.getElementById('citizenship').value
      var have_children = document.getElementById('have_children').value
      var physical_status = document.getElementById('physical_status').value
      var eating_habit = document.getElementById('eating_habit').value
      // alert(marital_status3);

      $.ajax({
        url: "<?php echo base_url()  ?>Searching/advanceSearch",
        type: "POST",
        data: {
          gender: gender,
          marital_status: marital_status,
          // marital_status2: marital_status2,
          // marital_status3: marital_status3,
          // marital_status4: marital_status4,
          // marital_status5: marital_status5,
          have_children:have_children,
          physical_status:physical_status,
          eating_habit:eating_habit,
          age_from: age_from,
          age_to: age_to,
          height_from: height_from,
          height_to: height_to,
          manglik: manglik,
          physical_status: physical_status,
          caste_barrier: caste_barrier,
          employedin: employedin,
          countryliving: countryliving,
          citizenship: citizenship,
          m_data: m_data,
          r_data: r_data,
          c_data: c_data,
          e_data: e_data,
          o_data: o_data,
          state_data: state_data,
          city_data: city_data
        },
        cache: false,
        success: function(result) {
          // alert("hey")
          window.location = "SearchResult";
        }
      });

    });
  });

  $(document).ready(function() {
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
  });
  $('#state-dropdown1').on('change', function() {
    var state_id = this.value;
    $.ajax({
      url: "<?php echo base_url()  ?>Registration/fetch_city",
      type: "POST",
      data: {
        state_id: state_id
      },
      cache: false,
      success: function(result) {
        $("#city-dropdown1").html(result);
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
        // alert("df")
        $("#caste-dropdown1").html(result);
      }
    });
  });

  function addMotherT() {

    let m_t = document.getElementById('mother_tongue').value;
    m_data.push(m_t);
    let box = document.getElementById('mother_box');
    let li = document.createElement('option');
    li.textContent = m_t;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }

  function addOccupation() {

    let m_t = document.getElementById('occupation1').value;
    o_data.push(m_t);
    let box = document.getElementById('occupation_box');
    let li = document.createElement('option');
    li.textContent = m_t;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }

  function addEducation() {
    let m_t = document.getElementById('education1').value;
    // alert(m_t)
    e_data.push(m_t);
    let box = document.getElementById('education_box');
    let li = document.createElement('option');
    li.textContent = m_t;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }

  function deleteMotherT() {
    var current_tasks = document.querySelector("#mother_box");
    for (var i = 0; i < current_tasks.length; i++) {
      current_tasks[i].onclick = function() {
        this.parentNode.remove();
      }
    }

  }

  function addState() {
    let m_t = document.getElementById('state-dropdown1').value;
    let religion_name = null
    $.ajax({
      type: 'get',
      url: 'Searching/getStateName',
      data: {
        id: m_t,
      },

      async: false,
      success: function(response) {
        religion_name = response;
      }
    });
    state_data.push(m_t);

    let box = document.getElementById('state_box');
    let li = document.createElement('option');
    li.textContent = religion_name;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }

  function addCity() {
    let m_t = document.getElementById('city-dropdown1').value;
    let religion_name = null
    $.ajax({
      type: 'get',
      url: 'Searching/getCityName',
      data: {
        id: m_t,
      },

      async: false,
      success: function(response) {
        religion_name = response;
      }
    });
    city_data.push(m_t);
    let box = document.getElementById('city_box');
    let li = document.createElement('option');
    li.textContent = religion_name;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }

  function addReligion() {
    let m_t = document.getElementById('religion-dropdown1').value;
    let religion_name = null
    $.ajax({
      type: 'get',
      url: 'Searching/getReligionName',
      data: {
        id: m_t,
      },

      async: false,
      success: function(response) {
        religion_name = response;
      }
    });
    r_data.push(m_t);
    let box = document.getElementById('religion_box');
    let li = document.createElement('option');
    li.textContent = religion_name;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }

  function addCaste() {
    let m_t = document.getElementById('caste-dropdown1').value;
    let religion_name = null
    $.ajax({
      type: 'get',
      url: 'Searching/getCasteName',
      data: {
        id: m_t,
      },

      async: false,
      success: function(response) {
        religion_name = response;
      }
    });
    c_data.push(m_t);
    // alert(religion_name)
    let box = document.getElementById('caste_box');
    let li = document.createElement('option');
    li.textContent = religion_name;
    let pos = box.firstElementChild;
    if (pos == null)
      box.append(li)
    else
      box.insertBefore(li, pos)
  }
</script>

</body>

</html>