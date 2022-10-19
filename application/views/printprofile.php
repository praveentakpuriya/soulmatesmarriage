<style>
    body {
        font-family: Arial, Helvetica, sans-serif;
    }

    .mem_img {
        position: relative;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: transparent;
    }

    .mem_img {
        width: 100%;
        height: 220px;
        overflow: hidden;
    }

    .mem_img img {
        width: auto;
        height: 100%;
    }

    .frame {
        color: #ffffff;
        z-index: 100;
        position: absolute;
        pointer-events: none;
        bottom: 0;
        margin-top: -29px;
        width: 100%;
        left: 0;
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
        text-align: center;
    }
</style>
<section class="innerpage_bg wow fadeIn" data-wow-offset="10">
    <table style="width:auto; margin:0 auto; background-color:#ffffff; ">
        <tr>
            <td align="center" valign="top">
                <!--start here-->

                <table width="100%" border="0" style="padding:20px;">
                    <tr>
                        <td colspan="2" align="center">
                            <h5 style="    font-size: 26px;
    text-transform: uppercase;
    color: #801f39;">Soulmates</h5>
                            <!--<img src="images/logo.png" /> -->
                            </h3>
                        </td>

                    </tr>






                    <tr>
                        <td width="35%" align="left" style="    display: flex;
    align-items: center;">
                            <div align="left" style=" float:left;">
                                <div class="mem_img">
                                    <img src="<?php if (isset($data[0]->main_photo)) echo base_url('Documents/document/' . $data[0]->main_photo);
                                                else echo 'assets/img/user.webp'; ?>">

                                    <span class="frame">Soulmates Marraige</span>


                                </div>
                            </div>
                            <div align="left" style="float:left; margin-left:30px;">
                                <p style="font-size:14px; margin:0px;"> Name : <b> <?php if (isset($data[0]->name)) echo $data[0]->name; ?> </b></p>
                                <p style="font-size:14px; margin:3px;"> Login Id : <b> <?php if (isset($data[0]->u_id)) echo $data[0]->u_id; ?> </b></p>

                                <p style="margin:3px;"> Age : <?php if (isset($data[0]->age)) echo $data[0]->age; ?> Yrs <?php if (isset($data[0]->gender)) echo $data[0]->gender; ?></p>
                                <p style='margin:3px; '> NRI : <?php if (isset($data[0]->nri)) echo $data[0]->nri;
                                                                else echo "---" ?></p>

                                <p style="margin:3px;"> City : <?php if (isset($data[0]->city_name)) echo $data[0]->city_name; ?> , <br>State : Maharashtra </p>
                                <p style='margin:3px;'> Country : <?php if (isset($rcitizenship[0]->name)) echo $rcitizenship[0]->name;
                                                                    else echo "----"; ?></p>


                            </div>



                        </td>
                        <!--             <td width="65%" align="left" valign="top">   <strong><p id="pheading2"> About Aishwarya</p></strong>  <p align="justify"> Good </p>    </td>-->
                    </tr>

                    <tr>
                        <td colspan="2">

                            <table width="100%" border="0">


                                <tr>
                                    <td colspan="4" align="justify" style="word-break:break-all;word-wrap:break-word;">
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" id="pheading1" style="
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    color:#ffffff;
    height:41px;
    font-size:15px;
    font-weight:bold;
    padding-left:5px;
    vertical-align: middle;">
                                        <p id="pheading2"> More about Aishwarya </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> Marital Status : </p>
                                    </td>
                                    <td>
                                        <p> <?php if (isset($data[0]->marital_status)) echo $data[0]->marital_status; ?> </p>
                                    </td>
                                    <td>
                                        <p> Have Children : </p>
                                    </td>
                                    <td>
                                        <p> <?php if (isset($data[0]->no_of_children)) echo $data[0]->no_of_children; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> Posted By : </p>
                                    </td>
                                    <td>
                                        <p> Self </p>
                                    </td>
                                    <td>
                                        <p> Eating habits :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->eating_habit)) echo $data[0]->eating_habit;
                                            else echo "----"; ?></p>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <p>Education :</p>
                                    </td>
                                    <td>
                                        <p> <?php if (isset($data[0]->education)) echo $data[0]->education;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Education Detail :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->education_details)) echo $data[0]->education_details;
                                            else echo "----"; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Employed in :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->employed_in)) echo $data[0]->employed_in;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Occupation :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->occupation)) echo $data[0]->occupation;
                                            else echo "----"; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Occupation in detail :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->occupation_details)) echo $data[0]->occupation_details;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Annual Income :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->salary)) echo $data[0]->salary;
                                            else echo "----"; ?></p>
                                    </td>
                                </tr>


                                <tr>
                                    <td>
                                        <p>Date Of Birth :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->dob)) echo $data[0]->dob;
                                            else echo "----"; ?> </p>
                                    </td>

                                    <td>
                                        <p></p>
                                    </td>
                                    <td>
                                        <p></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="4" id="pheading1" style="
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    color:#ffffff;
    height:41px;
    font-size:15px;
    font-weight:bold;
    padding-left:5px;
    vertical-align: middle;">
                                        <p id="pheading2">About Aishwarya Religion and Social info</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> Religion : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->religion_name)) echo $data[0]->religion_name;
                                            else echo "----"; ?> </p>
                                    </td>
                                    <td>
                                        <p> Mother Tongue : </p>
                                    </td>
                                    <td>
                                        <p> <?php if (isset($data[0]->mother_tongue)) echo $data[0]->mother_tongue;
                                            else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> Caste : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->caste_name)) echo $data[0]->caste_name;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p> Manglik : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->manglik)) echo $data[0]->manglik;
                                            else echo "----"; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p> Horoscope Required : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->horoscope_match)) echo $data[0]->horoscope_match;
                                            else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" id="pheading1" style="
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    color:#ffffff;
    height:41px;
    font-size:15px;
    font-weight:bold;
    padding-left:5px;
    vertical-align: middle;">
                                        <p id="pheading2">About Aishwarya Physical Attribute </p>
                                    </td>
                                </tr>
                                <tr>

                                    <td>
                                        <p>Height :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->height)) echo $data[0]->height;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Weight :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->weight)) echo $data[0]->weight;
                                            else echo "----"; ?> Kg.</p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Body Type :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->body_type)) echo $data[0]->body_type;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Physical Status : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->physical_status)) echo $data[0]->physical_status;
                                            else echo "----"; ?></p>
                                    </td>

                                </tr>
                                <tr>
                                    <td>
                                        <p>Complexion :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->complexion)) echo $data[0]->complexion;
                                            else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Blood Group :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->blood_group)) echo $data[0]->blood_group;
                                            else echo "----"; ?></p>
                                    </td>

                                </tr>
                                <tr>
                                    <td colspan="4" id="pheading1" style="
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    color:#ffffff;
    height:41px;
    font-size:15px;
    font-weight:bold;
    padding-left:5px;
    vertical-align: middle;">
                                        <p id="pheading2"> About Aishwarya Astro info</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Date Of Birth :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->dob)) echo $data[0]->dob;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                    <td>
                                        <p>Birth Place :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->birth_place)) echo $data[0]->birth_place;
                                                                        else echo "----"; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Birth Time :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->birth_time_hh)) echo $data[0]->birth_time_hh;echo ":";
                                        if (isset($data[0]->birth_time_mm)) echo $data[0]->birth_time_mm;echo ":";
                                        if (isset($data[0]->birth_time_am)) echo $data[0]->birth_time_am;
                                                                         ?></p>
                                    </td>
                                    <td>
                                        <p>Star :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->star)) echo $data[0]->star;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Gotra : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->gotra)) echo $data[0]->gotra;
                                                                        else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Raasi / Moon sign : </p>
                                    </td>
                                    <td>
                                        <p> <?php if (isset($data[0]->rashi)) echo $data[0]->rashi;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p> Horoscope status : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->horoscope_match)) echo $data[0]->horoscope_match;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" id="pheading1" style="
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    color:#ffffff;
    height:41px;
    font-size:15px;
    font-weight:bold;
    padding-left:5px;
    vertical-align: middle;">
                                        <p id="pheading2"> About Aishwarya Family </p>
                                        </h4>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Family Values :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->family_values)) echo $data[0]->family_values;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                    <td>
                                        <p>Family Status :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->family_status)) echo $data[0]->family_status;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Family Type : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->family_type)) echo $data[0]->family_type;
                                                                        else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Ancestral Origin : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->family_origin)) echo $data[0]->family_origin;
                                                                        else echo "----"; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Father's Occupation :</p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->father_occupation)) echo $data[0]->father_occupation;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                    <td>
                                        <p>Mother's Occupation : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->mother_occupation)) echo $data[0]->mother_occupation;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Brother : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->no_of_brother)) echo $data[0]->no_of_brother;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                    <td>
                                        <p>Brother Married : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->no_of_married_brother)) echo $data[0]->no_of_married_brother;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Sister :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->no_of_sister)) echo $data[0]->no_of_sister;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                    <td>
                                        <p>Sister Married :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->no_of_married_sister)) echo $data[0]->no_of_married_sister;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" style="word-break:break-all;word-wrap:break-word;">
                                        <p> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="4" id="pheading1" style="
        background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    color:#ffffff;
    height:41px;
    font-size:15px;
    font-weight:bold;
    padding-left:5px;
    vertical-align: middle;">
                                        <p id="pheading2"> About Preferred Partner </p>
                                    </td>
                                </tr>
                                
                                <tr>
                                <tr>
                                    <td>
                                        <p>Age between :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->age_from)) echo $data[0]->age_from;
                                  else echo "----"; ?> &nbsp;<small> To&nbsp;</small> <?php if (isset($data[0]->age_to)) echo $data[0]->age_to;
                                                                                      else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Marital Status :</p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->marital_status)) echo $data[0]->marital_status;
                                  else echo "----"; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Height between : </p>
                                    </td>
                                    <td>
                                        <p>
                                  <?php if (isset($data[0]->height_from)) echo $data[0]->height_from;
                                  else echo "----"; ?> &nbsp;&nbsp; <small>To</small>&nbsp;&nbsp;<?php if (isset($data[0]->height_to)) echo $data[0]->height_to;
                                                                                                  else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Manglik : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->manglik)) echo $data[0]->manglik;
                                                                        else echo "----"; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Have Children : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->no_of_children)) echo $data[0]->no_of_children;
                                  else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Physical Status : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($data[0]->physical_status)) echo $data[0]->physical_status;
                                                                        else echo "----"; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Religion : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php foreach ($r_preference as $rr) if (isset($rr->name)) echo $rr->name." "; ?></p>
                                    </td>
                                    <td align="justify">
                                        <p>Caste : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php foreach ($c_preference as $cc) if (isset($cc->name)) echo $cc->name . " "; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td>
                                        <p>Mother tongue :</p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php foreach ($mt_preference as $mt) if (isset($mt->mother_tongue)) echo $mt->mother_tongue . " "; ?></p>
                                    </td>
                                    <td>
                                        <p>Education : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php foreach ($e_preference as $mt) if (isset($mt->education)) echo $mt->education . " "; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Occupation : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php foreach ($o_preference as $mt) if (isset($mt->occupation)) echo $mt->occupation . " "; ?></p>
                                    </td>
                                    <td>
                                        <p>Employed In : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p>----</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Annual Income : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->annual_income_min)) echo $data[0]->annual_income_min;
                                  else echo "----"; ?> &nbsp;&nbsp; <small>To</small>&nbsp;&nbsp;<?php if (isset($data[0]->annual_income_max)) echo $data[0]->annual_income_max;
                                                                                                  else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Eating habits : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->eating_habit)) echo $data[0]->eating_habit;
                                                                        else echo "----"; ?> </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>State :</p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php foreach ($rs_preference as $st) if (isset($st->name)) echo $st->name . " "; ?></p>
                                    </td>
                                    <td>
                                        <p>Citizenship : </p>
                                    </td>
                                    <td>
                                        <p><?php if (isset($citizenship[0]->name)) echo $citizenship[0]->name;
                                                                        else echo "----"; ?></p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <p>Residing Status : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($data[0]->residing_status)) echo $data[0]->residing_status;
                                                                        else echo "----"; ?></p>
                                    </td>
                                    <td>
                                        <p>Country : </p>
                                    </td>
                                    <td style="word-break:break-all;word-wrap:break-word;">
                                        <p><?php if (isset($rcitizenship[0]->name)) echo $rcitizenship[0]->name;
                                                                        else echo "----"; ?></p>
                                    </td>
                                </tr>

                                <tr>
                                    <td colspan="4" style="word-break:break-all;word-wrap:break-word;">
                                        <p> </p>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="5" bgcolor="#CCCCCC">
                            <p style="font-size:10px;"> <strong style="font-weight:bolder;font-size:12px">Important:</strong>Soulmates
                                Centre has taken reasonable care to ensure authenticity of this Bio-data. However, in
                                some cases, it is not possible to verify confides of members.Soulmates Centre
                                can not be held responsible for the Bio-data contents, or for any loss or damage
                                incurred as a result of individuals displaying their Bio-data in this database. We
                                recommend that Members make neccessary enquiries befor taking forward with other
                                Members, or otherwise acting on a Bio-data in any manner what so ever. </p>
                        </td>
                    </tr>
                </table>

            </td>
            <!--End here-->

        </tr>
        <tr>
            <td colspan="4" align="center">
                <form>
                    <input type="button" value="Print Profile" style="    background-image: linear-gradient(-224deg, #971b1f, #692454) !important;
    padding: 6px;
    color: #fff;
    border: 1px;
    border-radius: 5px;" onClick="window.print()">
                </form>
            </td>
        </tr>
    </table>
    <!-- /.container -->
</section>