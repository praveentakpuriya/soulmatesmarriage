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