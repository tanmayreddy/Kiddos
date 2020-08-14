<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta name="author" content="colorlib.com">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Form</title>

    <!-- Font Icon -->
    <link rel="stylesheet" href="fonts1/Admission Form/fonts/material-design-iconic-font/css/material-design-iconic-font.css">

    <!-- Main css -->
    <link rel="stylesheet" href="css1/Admission Form/css/style.css">
    
    
</head>
<body>
    
    
    
    <div class="main">

        <div class="container">
            <h2>Student Admission Form</h2>
            <form action="form.php" method="POST" id="signup-form" class="signup-form">
                    <h3>
                        <span class="icon"><i class="zmdi zmdi-face"></i></span>
                        <span class="title_text">Personal</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Student's Personal Information: </span>
                            <span class="step-number">Step 1 / 5</span>
                        </legend>
                        
                        <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">First name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Last name</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>

                        <div class="form-row">
                            <div class="form-date">
                                <label for="birth_date" class="form-label required">Date of birth</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="birth_date" name="birth_date"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_month" name="birth_month"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_year" name="birth_year"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
    
                            <div class="form-select">
                                <label for="gender" class="form-label required">Gender</label>
                                <div class="select-list">
                                    <select name="gender" id="gender">
                                        
                                        <option value="">.....</option>
                                        <option value="Male">Male</option>
                                        <option value="Female">Female</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        
                        
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Country</label>
                             
                            <select class="form-control" placeholder="Country">
                                    <option >......</option>
                                   
                                        <option value="AF">Afghanistan</option>
                                        <option value="AX">Åland Islands</option>
                                        <option value="AL">Albania</option>
                                        <option value="DZ">Algeria</option>
                                        <option value="AS">American Samoa</option>
                                        <option value="AD">Andorra</option>
                                        <option value="AO">Angola</option>
                                        <option value="AI">Anguilla</option>
                                        <option value="AQ">Antarctica</option>
                                        <option value="AG">Antigua and Barbuda</option>
                                        <option value="AR">Argentina</option>
                                        <option value="AM">Armenia</option>
                                        <option value="AW">Aruba</option>
                                        <option value="AU">Australia</option>
                                        <option value="AT">Austria</option>
                                        <option value="AZ">Azerbaijan</option>
                                        <option value="BS">Bahamas</option>
                                        <option value="BH">Bahrain</option>
                                        <option value="BD">Bangladesh</option>
                                        <option value="BB">Barbados</option>
                                        <option value="BY">Belarus</option>
                                        <option value="BE">Belgium</option>
                                        <option value="BZ">Belize</option>
                                        <option value="BJ">Benin</option>
                                        <option value="BM">Bermuda</option>
                                        <option value="BT">Bhutan</option>
                                        <option value="BO">Bolivia, Plurinational State of</option>
                                        <option value="BQ">Bonaire, Sint Eustatius and Saba</option>
                                        <option value="BA">Bosnia and Herzegovina</option>
                                        <option value="BW">Botswana</option>
                                        <option value="BV">Bouvet Island</option>
                                        <option value="BR">Brazil</option>
                                        <option value="IO">British Indian Ocean Territory</option>
                                        <option value="BN">Brunei Darussalam</option>
                                        <option value="BG">Bulgaria</option>
                                        <option value="BF">Burkina Faso</option>
                                        <option value="BI">Burundi</option>
                                        <option value="KH">Cambodia</option>
                                        <option value="CM">Cameroon</option>
                                        <option value="CA">Canada</option>
                                        <option value="CV">Cape Verde</option>
                                        <option value="KY">Cayman Islands</option>
                                        <option value="CF">Central African Republic</option>
                                        <option value="TD">Chad</option>
                                        <option value="CL">Chile</option>
                                        <option value="CN">China</option>
                                        <option value="CX">Christmas Island</option>
                                        <option value="CC">Cocos (Keeling) Islands</option>
                                        <option value="CO">Colombia</option>
                                        <option value="KM">Comoros</option>
                                        <option value="CG">Congo</option>
                                        <option value="CD">Congo, the Democratic Republic of the</option>
                                        <option value="CK">Cook Islands</option>
                                        <option value="CR">Costa Rica</option>
                                        <option value="CI">Côte d'Ivoire</option>
                                        <option value="HR">Croatia</option>
                                        <option value="CU">Cuba</option>
                                        <option value="CW">Curaçao</option>
                                        <option value="CY">Cyprus</option>
                                        <option value="CZ">Czech Republic</option>
                                        <option value="DK">Denmark</option>
                                        <option value="DJ">Djibouti</option>
                                        <option value="DM">Dominica</option>
                                        <option value="DO">Dominican Republic</option>
                                        <option value="EC">Ecuador</option>
                                        <option value="EG">Egypt</option>
                                        <option value="SV">El Salvador</option>
                                        <option value="GQ">Equatorial Guinea</option>
                                        <option value="ER">Eritrea</option>
                                        <option value="EE">Estonia</option>
                                        <option value="ET">Ethiopia</option>
                                        <option value="FK">Falkland Islands (Malvinas)</option>
                                        <option value="FO">Faroe Islands</option>
                                        <option value="FJ">Fiji</option>
                                        <option value="FI">Finland</option>
                                        <option value="FR">France</option>
                                        <option value="GF">French Guiana</option>
                                        <option value="PF">French Polynesia</option>
                                        <option value="TF">French Southern Territories</option>
                                        <option value="GA">Gabon</option>
                                        <option value="GM">Gambia</option>
                                        <option value="GE">Georgia</option>
                                        <option value="DE">Germany</option>
                                        <option value="GH">Ghana</option>
                                        <option value="GI">Gibraltar</option>
                                        <option value="GR">Greece</option>
                                        <option value="GL">Greenland</option>
                                        <option value="GD">Grenada</option>
                                        <option value="GP">Guadeloupe</option>
                                        <option value="GU">Guam</option>
                                        <option value="GT">Guatemala</option>
                                        <option value="GG">Guernsey</option>
                                        <option value="GN">Guinea</option>
                                        <option value="GW">Guinea-Bissau</option>
                                        <option value="GY">Guyana</option>
                                        <option value="HT">Haiti</option>
                                        <option value="HM">Heard Island and McDonald Islands</option>
                                        <option value="VA">Holy See (Vatican City State)</option>
                                        <option value="HN">Honduras</option>
                                        <option value="HK">Hong Kong</option>
                                        <option value="HU">Hungary</option>
                                        <option value="IS">Iceland</option>
                                        <option value="IN">India</option>
                                        <option value="ID">Indonesia</option>
                                        <option value="IR">Iran, Islamic Republic of</option>
                                        <option value="IQ">Iraq</option>
                                        <option value="IE">Ireland</option>
                                        <option value="IM">Isle of Man</option>
                                        <option value="IL">Israel</option>
                                        <option value="IT">Italy</option>
                                        <option value="JM">Jamaica</option>
                                        <option value="JP">Japan</option>
                                        <option value="JE">Jersey</option>
                                        <option value="JO">Jordan</option>
                                        <option value="KZ">Kazakhstan</option>
                                        <option value="KE">Kenya</option>
                                        <option value="KI">Kiribati</option>
                                        <option value="KP">Korea, Democratic People's Republic of</option>
                                        <option value="KR">Korea, Republic of</option>
                                        <option value="KW">Kuwait</option>
                                        <option value="KG">Kyrgyzstan</option>
                                        <option value="LA">Lao People's Democratic Republic</option>
                                        <option value="LV">Latvia</option>
                                        <option value="LB">Lebanon</option>
                                        <option value="LS">Lesotho</option>
                                        <option value="LR">Liberia</option>
                                        <option value="LY">Libya</option>
                                        <option value="LI">Liechtenstein</option>
                                        <option value="LT">Lithuania</option>
                                        <option value="LU">Luxembourg</option>
                                        <option value="MO">Macao</option>
                                        <option value="MK">Macedonia, the former Yugoslav Republic of</option>
                                        <option value="MG">Madagascar</option>
                                        <option value="MW">Malawi</option>
                                        <option value="MY">Malaysia</option>
                                        <option value="MV">Maldives</option>
                                        <option value="ML">Mali</option>
                                        <option value="MT">Malta</option>
                                        <option value="MH">Marshall Islands</option>
                                        <option value="MQ">Martinique</option>
                                        <option value="MR">Mauritania</option>
                                        <option value="MU">Mauritius</option>
                                        <option value="YT">Mayotte</option>
                                        <option value="MX">Mexico</option>
                                        <option value="FM">Micronesia, Federated States of</option>
                                        <option value="MD">Moldova, Republic of</option>
                                        <option value="MC">Monaco</option>
                                        <option value="MN">Mongolia</option>
                                        <option value="ME">Montenegro</option>
                                        <option value="MS">Montserrat</option>
                                        <option value="MA">Morocco</option>
                                        <option value="MZ">Mozambique</option>
                                        <option value="MM">Myanmar</option>
                                        <option value="NA">Namibia</option>
                                        <option value="NR">Nauru</option>
                                        <option value="NP">Nepal</option>
                                        <option value="NL">Netherlands</option>
                                        <option value="NC">New Caledonia</option>
                                        <option value="NZ">New Zealand</option>
                                        <option value="NI">Nicaragua</option>
                                        <option value="NE">Niger</option>
                                        <option value="NG">Nigeria</option>
                                        <option value="NU">Niue</option>
                                        <option value="NF">Norfolk Island</option>
                                        <option value="MP">Northern Mariana Islands</option>
                                        <option value="NO">Norway</option>
                                        <option value="OM">Oman</option>
                                        <option value="PK">Pakistan</option>
                                        <option value="PW">Palau</option>
                                        <option value="PS">Palestinian Territory, Occupied</option>
                                        <option value="PA">Panama</option>
                                        <option value="PG">Papua New Guinea</option>
                                        <option value="PY">Paraguay</option>
                                        <option value="PE">Peru</option>
                                        <option value="PH">Philippines</option>
                                        <option value="PN">Pitcairn</option>
                                        <option value="PL">Poland</option>
                                        <option value="PT">Portugal</option>
                                        <option value="PR">Puerto Rico</option>
                                        <option value="QA">Qatar</option>
                                        <option value="RE">Réunion</option>
                                        <option value="RO">Romania</option>
                                        <option value="RU">Russian Federation</option>
                                        <option value="RW">Rwanda</option>
                                        <option value="BL">Saint Barthélemy</option>
                                        <option value="SH">Saint Helena, Ascension and Tristan da Cunha</option>
                                        <option value="KN">Saint Kitts and Nevis</option>
                                        <option value="LC">Saint Lucia</option>
                                        <option value="MF">Saint Martin (French part)</option>
                                        <option value="PM">Saint Pierre and Miquelon</option>
                                        <option value="VC">Saint Vincent and the Grenadines</option>
                                        <option value="WS">Samoa</option>
                                        <option value="SM">San Marino</option>
                                        <option value="ST">Sao Tome and Principe</option>
                                        <option value="SA">Saudi Arabia</option>
                                        <option value="SN">Senegal</option>
                                        <option value="RS">Serbia</option>
                                        <option value="SC">Seychelles</option>
                                        <option value="SL">Sierra Leone</option>
                                        <option value="SG">Singapore</option>
                                        <option value="SX">Sint Maarten (Dutch part)</option>
                                        <option value="SK">Slovakia</option>
                                        <option value="SI">Slovenia</option>
                                        <option value="SB">Solomon Islands</option>
                                        <option value="SO">Somalia</option>
                                        <option value="ZA">South Africa</option>
                                        <option value="GS">South Georgia and the South Sandwich Islands</option>
                                        <option value="SS">South Sudan</option>
                                        <option value="ES">Spain</option>
                                        <option value="LK">Sri Lanka</option>
                                        <option value="SD">Sudan</option>
                                        <option value="SR">Suriname</option>
                                        <option value="SJ">Svalbard and Jan Mayen</option>
                                        <option value="SZ">Swaziland</option>
                                        <option value="SE">Sweden</option>
                                        <option value="CH">Switzerland</option>
                                        <option value="SY">Syrian Arab Republic</option>
                                        <option value="TW">Taiwan, Province of China</option>
                                        <option value="TJ">Tajikistan</option>
                                        <option value="TZ">Tanzania, United Republic of</option>
                                        <option value="TH">Thailand</option>
                                        <option value="TL">Timor-Leste</option>
                                        <option value="TG">Togo</option>
                                        <option value="TK">Tokelau</option>
                                        <option value="TO">Tonga</option>
                                        <option value="TT">Trinidad and Tobago</option>
                                        <option value="TN">Tunisia</option>
                                        <option value="TR">Turkey</option>
                                        <option value="TM">Turkmenistan</option>
                                        <option value="TC">Turks and Caicos Islands</option>
                                        <option value="TV">Tuvalu</option>
                                        <option value="UG">Uganda</option>
                                        <option value="UA">Ukraine</option>
                                        <option value="AE">United Arab Emirates</option>
                                        <option value="GB">United Kingdom</option>
                                        <option value="US">United States</option>
                                        <option value="UM">United States Minor Outlying Islands</option>
                                        <option value="UY">Uruguay</option>
                                        <option value="UZ">Uzbekistan</option>
                                        <option value="VU">Vanuatu</option>
                                        <option value="VE">Venezuela, Bolivarian Republic of</option>
                                        <option value="VN">Viet Nam</option>
                                        <option value="VG">Virgin Islands, British</option>
                                        <option value="VI">Virgin Islands, U.S.</option>
                                        <option value="WF">Wallis and Futuna</option>
                                        <option value="EH">Western Sahara</option>
                                        <option value="YE">Yemen</option>
                                        <option value="ZM">Zambia</option>
                                        <option value="ZW">Zimbabwe</option>
                                </select>
                        </div>
                        
                        
                         <div class="form-group">
                            <label for="Religion" class="form-label required">Religion</label>
                            <select class="form-control" placeholder="Select Religion">
                                <i class="zmdi zmdi-chevron-down"></i>
                                
                                    <option >.....</option>
                                    <option >Hindu</option>
                                    <option >Muslim</option>
                                    <option >Sikh</option>
                                    <option >Christian</option>
                                    <option >Jain</option>
                                 
                                </select>
                        </div>

                        <div class="form-group">
                            <label for="first_name" class="form-label required">Category</label>
                             
                            <select class="form-control" placeholder="Select Religion">
                                    <option >......</option>
                                    <option >General</option>
                                    <option >OBC</option>
                                    <option >SC</option>
                                    <option >ST</option>
                                </select>
                        </div>
                        
                        
                        <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Admission For Class</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Current class</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                        
                        <div class="form-row">
                            
                            <div class="form-date">
                                <label for="text" class="form-label required">Current School</label>
                                <input type="text" name="first_name" id="first_name" />
                                
                            </div>
                            
                            
                            
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Current School Board</label>
                             
                            <select class="form-control" placeholder="Select Religion">
                                   <option >......</option>
                                    <option >CBSE</option>
                                    <option >ICSE</option>
                                    <option >SSC</option>
                                    <option >Other</option>
                                </select>
                        </div>
                        
                        </div>
                       
                         </fieldset>
                
                
                

                    <h3>
                        <span class="icon"><i class="zmdi zmdi-home"></i></span>
                        <span class="title_text"> Address</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Student's Permanent Address: </span>
                            <span class="step-number">Step 2 / 5</span>
                        </legend>
                        <div class="form-group">
                            <label for="address" class="form-label required">Address Line no 1</label>
                            <input type="text" name="address" id="address" />
                        </div>

                        <div class="form-group">
                            <label for="email" class="form-label required">Address Line no 2</label>
                            <input type="text" name="address" id="address" />
                        </div>

                         <div class="form-row">
                        <div class="form-group">
                            <label for="email" class="form-label required">City</label>
                            <input type="text" name="address" id="address" />
                        </div>

                         <div class="form-group">
                            <label for="address" class="form-label required">State</label>
                            <input type="text" name="address" id="address" />
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="address" class="form-label required">ZIP Code</label>
                            <input type="number" name="address" id="address" />
                        </div>
                        
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Residential Status</label>
                             
                            <select class="form-control" placeholder="Select Religion">
                                    <option >......</option>
                                    <option >Rented</option>
                                    <option >Own</option>
                                    <option >Company-Provided</option>
                                    
                                </select>
                        </div>
                        
                       
                    </fieldset>

                    <h3>
                        <span class="icon"><i class="zmdi zmdi-male"></i></span>
                        <span class="title_text">Father</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Parent Information: Father </span>
                            <span class="step-number">Step 3 / 5</span>
                        </legend>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">First name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Last name</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>

                        <div class="form-row">
                            <div class="form-date">
                                <label for="birth_date" class="form-label required">Date of birth</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="birth_date" name="birth_date"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_month" name="birth_month"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_year" name="birth_year"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-select">
                                <label for="gender" class="form-label required">Contact No.</label>
                                <input type="number" name="last_name" id="last_name" />
                            </div>                             
                        </div>
                        
                         <div class="form-group">
                            <label for="last_name" class="form-label required">Email</label>
                            <input type="email" name="last_name" id="last_name" />
                        </div>
                        
                       
                        
                         <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Educational Qualification</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Occupation</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                         <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Company Name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Designation</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                         

                        <div class="form-group">
                            <label for="first_name" class="form-label required">Total Annual Income</label>
                             
                            <select class="form-control" placeholder="Select Religion">
                                    <option >......</option>
                                    <option >below 1,50,000</option>
                                    <option >1,50,000 - 5,00,000</option>
                                    <option >5,00,000 - 10,00,000</option>
                                    <option >more than 10,00,000</option>
                                </select>
                        </div>
                        
                        
                       
                    </fieldset>

                     <h3>
                        <span class="icon"><i class="zmdi zmdi-female"></i></span>
                        <span class="title_text">Mother</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Parent Information: Mother </span>
                            <span class="step-number">Step 4 / 5</span>
                        </legend>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">First name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Last name</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>

                        <div class="form-row">
                            <div class="form-date">
                                <label for="birth_date" class="form-label required">Date of birth</label>
                                <div class="form-date-group">
                                    <div class="form-date-item">
                                        <select id="birth_date" name="birth_date"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_month" name="birth_month"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                    <div class="form-date-item">
                                        <select id="birth_year" name="birth_year"></select>
                                        <span class="select-icon"><i class="zmdi zmdi-chevron-down"></i></span>
                                    </div>
                                </div>
                            </div>
                            
                            <div class="form-select">
                                <label for="gender" class="form-label required">Contact No.</label>
                                <input type="number" name="last_name" id="last_name" />
                            </div>                             
                        </div>
                        
                         <div class="form-group">
                            <label for="last_name" class="form-label required">Email</label>
                            <input type="email" name="last_name" id="last_name" />
                        </div>
                        
                       
                        
                         <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Educational Qualification</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Occupation</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                         <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">Company Name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Designation</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                         

                        <div class="form-group">
                            <label for="first_name" class="form-label required">Total Annual Income</label>
                             
                            <select class="form-control" placeholder="Select Religion">
                                    <option >......</option>
                                    <option >below 1,50,000</option>
                                    <option >1,50,000 - 5,00,000</option>
                                    <option >5,00,000 - 10,00,000</option>
                                    <option >more than 10,00,000</option>
                                </select>
                        </div>
                      </fieldset>
                
                 <h3>
                        <span class="icon"><i class="ti-star"></i></span>
                        <span class="title_text">Emergency</span>
                    </h3>
                    <fieldset>
                        <legend>
                            <span class="step-heading">Emergency Contact </span>
                            <span class="step-number">Step 5 / 5</span>
                        </legend>
                        <div class="form-row">
                        <div class="form-group">
                            <label for="first_name" class="form-label required">First name</label>
                            <input type="text" name="first_name" id="first_name" />
                        </div>

                        <div class="form-group">
                            <label for="last_name" class="form-label required">Last name</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name" class="form-label required">Residential Address</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        
                        <div class="form-row">
                        <div class="form-group">
                            <label for="last_name" class="form-label required">Emergency Contact No.</label>
                            <input type="number" name="last_name" id="last_name" />
                        </div>
                            
                        <div class="form-group">
                            <label for="last_name" class="form-label required">Opting For Transport</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        </div>
                        
                        <div class="form-group">
                            <label for="last_name" class="form-label required">If yes, Please specify the Pick Up Address</label>
                            <input type="text" name="last_name" id="last_name" />
                        </div>
                        
                        
                        
                </fieldset>
                
            </form>
        </div>

    </div>
    <div class="footer">
        
    </div>

    <!-- JS -->
    <script src="vendor/Admission Form/vendor/jquery/jquery.min.js"></script>
    <script src="vendor/Admission Form/vendor/jquery-validation/dist/jquery.validate.min.js"></script>
    <script src="vendor/Admission Form/vendor/jquery-validation/dist/additional-methods.min.js"></script>
    <script src="vendor/Admission Form/vendor/jquery-steps/jquery.steps.min.js"></script>
    <script src="vendor/Admission Form/vendor/minimalist-picker/dobpicker.js"></script>
    <script src="js1/Admission Form/js/main.js"></script>
</body>
</html>