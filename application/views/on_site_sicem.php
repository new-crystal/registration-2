<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400&display=swap" rel="stylesheet">

<style>
    body {
        font-family: 'Roboto', sans-serif;
    }

    input[type=text] {
        border: 1px solid #ddd;
        padding: 8px 16px;
        height: 2.5rem;
        /* width: 300px; */
    }

    input[type=checkbox] {
        width: 18px;
        height: 18px;
        margin-right: 10px;
        transform: translateY(2.5px);
    }

    input[type=radio] {
        width: 18px;
        height: 18px;
        margin-right: 10px;
        transform: translateY(2.5px);
    }

    span {
        color: #c1121f;
        font-weight: 600;
    }

    label {
        /* font-weight: 600; */
        font-size: 1rem;
        margin-right: 1rem;
    }

    textarea {
        height: 150px;
        background-color: #fff;
    }

    table {
        border-collapse: collapse;
        width: 100%;
    }

    p {
        margin: 0;
    }

    .tbl_type01 {
        border: 1px solid #ccc;
        border-top: 2px solid #ccc;
        /* text-align: center; */
        border-collapse: collapse;
    }

    .tbl_type01 th,
    .tbl_type01 td {
        border: 1px solid #ccc;
        font-size: 1rem;
        /* font-weight: 600; */
    }

    .tbl_type01 th,
    .tbl_type01 td {
        border: 1px solid #ccc;
    }

    th {
        height: 50px;
        border: 1px solid #ccc;
        background-color: #EBF2F9;
        text-align: left;
        padding: 16px;
    }

    td {
        border: 1px solid #ccc;
        padding: 16px;
    }

    .container {
        width: 1300px;
        padding: 0;
        margin: 20px auto;
    }

    .confirm_box {
        width: 100%;
        height: 200px;
        text-align: center;
        border: 1px solid #eee;
    }

    .confirm_box_title {
        text-align: center;
        background-color: rgb(186 230 253);
    }

    .all_checkbox {
        display: flex;
        width: 100%;
        height: 100px;
        align-items: center;
        justify-content: center;
    }

    .personal_checkbox {
        display: flex;
        flex-direction: column;
        margin-bottom: 50px;
    }

    .personal_checkbox>div {
        margin-bottom: 30px;
        display: flex;
        align-items: center;
        justify-content: left;
    }

    .next_btn_box,
    .final_btn_box {
        display: flex;
        justify-content: center;
        align-items: center;
    }

    .next_btn_box>button,
    .final_btn {
        width: 30%;
        height: 50px;
        font-size: 24px;
        border: 1px solid #7d8597;
        margin: 20px;
    }

    .full_input {
        width: 70%;
    }

    .tbl_type01 td {
        padding: 16px;
        text-align: left;
    }

    .wrap_2_2>table {
        border: none;
    }

    .category {
        height: 80px;
    }

    .select_category {
        width: 95%;
        height: 40px;
        border: 1px solid #ddd;
    }

    .member {
        height: 40px;
        display: flex;
        align-items: center;
    }

    .submit_btn {
        width: 150px;
        height: 50px;
        background-color: #e1e1e1;
    }

    .survey th {
        text-align: left;
        padding: 16px;
    }
</style>
<script src="https://cdn.tailwindcss.com"></script>
<form action="/onSite" class="w-3/5 mx-auto">
    <!-- <img src="./mail_header.png" alt="header" class="w-full h-96" /> -->
    <div class="wrap_1">
        <div class="flex justify-center items-center w-8/12 h-12 mx-auto mt-5 text-4xl font-semibold">
            <img src="../../assets/images/subTit_bl.png" />
            <h1 class="italic underline">On-site Registration</h1>
        </div>
        <div class="mt-10">
            <img src="../../assets/images/circle.png" class="inline" />
            <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Personal Information</h1>
            <table class="tbl_type01">
                <colgroup>
                    <col width="20%">
                    <col width="*">
                </colgroup>
                <tr>
                    <th>Country<br> (국가)<span class="hit">*</span></th>
                    <td>
                        <select id="nation_no" name="nation" class="px-2 py-1 w-11/12 h-10 border">
                            <option value="" hidden="" data-nt="82">Contry</option>
                            <option data-nt="82" value="Republic of Korea" selected="">Republic of Korea</option>
                            <option data-nt="93" value="Afghanistan">Afghanistan</option>
                            <option data-nt="355" value="Albania">Albania</option>
                            <option data-nt="213" value="Algeria">Algeria</option>
                            <option data-nt="1684" value="American Samoa">American Samoa</option>
                            <option data-nt="376" value="Andorra">Andorra</option>
                            <option data-nt="244" value="Angola">Angola</option>
                            <option data-nt="1264" value="Anguilla">Anguilla</option>
                            <option data-nt="1268" value="Antigua and Barbuda">Antigua and Barbuda</option>
                            <option data-nt="54" value="Argentina">Argentina</option>
                            <option data-nt="374" value="Armenia">Armenia</option>
                            <option data-nt="297" value="Aruba">Aruba</option>
                            <option data-nt="61" value="Australia">Australia</option>
                            <option data-nt="43" value="Austria">Austria</option>
                            <option data-nt="994" value="Azerbaijan">Azerbaijan</option>
                            <option data-nt="1242" value="Bahamas">Bahamas</option>
                            <option data-nt="973" value="Bahrain">Bahrain</option>
                            <option data-nt="880" value="Bangladesh">Bangladesh</option>
                            <option data-nt="1246" value="Barbados">Barbados</option>
                            <option data-nt="375" value="Belarus">Belarus</option>
                            <option data-nt="32" value="Belgium">Belgium</option>
                            <option data-nt="501" value="Belize">Belize</option>
                            <option data-nt="229" value="Benin">Benin</option>
                            <option data-nt="1441" value="Bermuda">Bermuda</option>
                            <option data-nt="975" value="Bhutan">Bhutan</option>
                            <option data-nt="591" value="Bolivia">Bolivia</option>
                            <option data-nt="387" value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
                            <option data-nt="267" value="Botswana">Botswana</option>
                            <option data-nt="55" value="Brazil">Brazil</option>
                            <option data-nt="673" value="Brunei">Brunei</option>
                            <option data-nt="359" value="Bulgaria">Bulgaria</option>
                            <option data-nt="226" value="Burkina Faso">Burkina Faso</option>
                            <option data-nt="257" value="Burundi">Burundi</option>
                            <option data-nt="855" value="Cambodia">Cambodia</option>
                            <option data-nt="237" value="Cameroon">Cameroon</option>
                            <option data-nt="1" value="Canada">Canada</option>
                            <option data-nt="238" value="Cape Verde">Cape Verde</option>
                            <option data-nt="1345" value="Cayman Islands">Cayman Islands</option>
                            <option data-nt="236" value="Central Africa">Central Africa</option>
                            <option data-nt="235" value="Chad">Chad</option>
                            <option data-nt="56" value="Chile">Chile</option>
                            <option data-nt="86" value="China">China</option>
                            <option data-nt="57" value="Colombia">Colombia</option>
                            <option data-nt="242" value="Congo">Congo</option>
                            <option data-nt="682" value="Cook Islands">Cook Islands</option>
                            <option data-nt="506" value="Costa Rica">Costa Rica</option>
                            <option data-nt="385" value="Croatia">Croatia</option>
                            <option data-nt="53" value="Cuba">Cuba</option>
                            <option data-nt="357" value="Cyprus">Cyprus</option>
                            <option data-nt="420" value="Czech">Czech</option>
                            <option data-nt="45" value="Denmark">Denmark</option>
                            <option data-nt="253" value="Djibouti">Djibouti</option>
                            <option data-nt="1767" value="Dominica">Dominica</option>
                            <option data-nt="1809" value="Dominican R.">Dominican R.</option>
                            <option data-nt="850" value="DPR of Korea">DPR of Korea</option>
                            <option data-nt="243" value="DR Congo">DR Congo</option>
                            <option data-nt="670" value="East Timor">East Timor</option>
                            <option data-nt="593" value="Ecuador">Ecuador</option>
                            <option data-nt="20" value="Egypt">Egypt</option>
                            <option data-nt="503" value="El Salvador">El Salvador</option>
                            <option data-nt="240" value="Equatorial Guinea">Equatorial Guinea</option>
                            <option data-nt="291" value="Eritrea">Eritrea</option>
                            <option data-nt="372" value="Estonia">Estonia</option>
                            <option data-nt="268" value="Eswatini">Eswatini</option>
                            <option data-nt="251" value="Ethiopia">Ethiopia</option>
                            <option data-nt="500" value="Falkland Islands">Falkland Islands</option>
                            <option data-nt="679" value="Fiji">Fiji</option>
                            <option data-nt="358" value="Finland">Finland</option>
                            <option data-nt="33" value="France">France</option>
                            <option data-nt="241" value="Gabon">Gabon</option>
                            <option data-nt="220" value="Gambia">Gambia</option>
                            <option data-nt="995" value="Georgia">Georgia</option>
                            <option data-nt="49" value="Germany">Germany</option>
                            <option data-nt="350" value="Gibraltar">Gibraltar</option>
                            <option data-nt="30" value="Greece">Greece</option>
                            <option data-nt="299" value="Greenland">Greenland</option>
                            <option data-nt="1473" value="Grenada">Grenada</option>
                            <option data-nt="590" value="Guadeloupe">Guadeloupe</option>
                            <option data-nt="1671" value="Guam">Guam</option>
                            <option data-nt="502" value="Guatemala">Guatemala</option>
                            <option data-nt="224" value="Guinea">Guinea</option>
                            <option data-nt="245" value="Guinea-Bissau">Guinea-Bissau</option>
                            <option data-nt="592" value="Guyana">Guyana</option>
                            <option data-nt="509" value="Haiti">Haiti</option>
                            <option data-nt="504" value="Honduras">Honduras</option>
                            <option data-nt="852" value="Hong Kong">Hong Kong</option>
                            <option data-nt="36" value="Hungary">Hungary</option>
                            <option data-nt="354" value="Iceland">Iceland</option>
                            <option data-nt="91" value="India">India</option>
                            <option data-nt="62" value="Indonesia">Indonesia</option>
                            <option data-nt="98" value="Iran">Iran</option>
                            <option data-nt="964" value="Iraq">Iraq</option>
                            <option data-nt="353" value="Ireland">Ireland</option>
                            <option data-nt="972" value="Israel">Israel</option>
                            <option data-nt="39" value="Italy">Italy</option>
                            <option data-nt="225" value="Ivory Coast">Ivory Coast</option>
                            <option data-nt="1876" value="Jamaica">Jamaica</option>
                            <option data-nt="81" value="Japan">Japan</option>
                            <option data-nt="962" value="Jordan">Jordan</option>
                            <option data-nt="7" value="Kazakstan">Kazakstan</option>
                            <option data-nt="254" value="Kenya">Kenya</option>
                            <option data-nt="686" value="Kiribati">Kiribati</option>
                            <option data-nt="965" value="Kuwait">Kuwait</option>
                            <option data-nt="996" value="Kyrgizstan">Kyrgizstan</option>
                            <option data-nt="856" value="Laos">Laos</option>
                            <option data-nt="371" value="Latvia">Latvia</option>
                            <option data-nt="961" value="Lebanon">Lebanon</option>
                            <option data-nt="266" value="Lesotho">Lesotho</option>
                            <option data-nt="231" value="Liberia">Liberia</option>
                            <option data-nt="218" value="Libya">Libya</option>
                            <option data-nt="423" value="Liechtenstein">Liechtenstein</option>
                            <option data-nt="370" value="Lithuania">Lithuania</option>
                            <option data-nt="352" value="Luxembourg">Luxembourg</option>
                            <option data-nt="853" value="Macao">Macao</option>
                            <option data-nt="389" value="Macedonia">Macedonia</option>
                            <option data-nt="261" value="Madagascar">Madagascar</option>
                            <option data-nt="265" value="Malawi">Malawi</option>
                            <option data-nt="60" value="Malaysia">Malaysia</option>
                            <option data-nt="960" value="Maldives">Maldives</option>
                            <option data-nt="373" value="Maldova">Maldova</option>
                            <option data-nt="223" value="Mali">Mali</option>
                            <option data-nt="356" value="Malta">Malta</option>
                            <option data-nt="692" value="Marshall Islands">Marshall Islands</option>
                            <option data-nt="596" value="Martinique">Martinique</option>
                            <option data-nt="222" value="Mauritania">Mauritania</option>
                            <option data-nt="230" value="Mauritius">Mauritius</option>
                            <option data-nt="269" value="Mayotte">Mayotte</option>
                            <option data-nt="52" value="Mexico">Mexico</option>
                            <option data-nt="691" value="Micronesia">Micronesia</option>
                            <option data-nt="377" value="Monaco">Monaco</option>
                            <option data-nt="976" value="Mongolia">Mongolia</option>
                            <option data-nt="382" value="Montenegro">Montenegro</option>
                            <option data-nt="1664" value="Montserrat">Montserrat</option>
                            <option data-nt="212" value="Morocco">Morocco</option>
                            <option data-nt="258" value="Mozambique">Mozambique</option>
                            <option data-nt="95" value="Myanmar">Myanmar</option>
                            <option data-nt="264" value="Namibia">Namibia</option>
                            <option data-nt="674" value="Nauru">Nauru</option>
                            <option data-nt="977" value="Nepal">Nepal</option>
                            <option data-nt="687" value="New Caledonia">New Caledonia</option>
                            <option data-nt="64" value="New Zealand">New Zealand</option>
                            <option data-nt="505" value="Nicaragua">Nicaragua</option>
                            <option data-nt="227" value="Niger">Niger</option>
                            <option data-nt="234" value="Nigeria">Nigeria</option>
                            <option data-nt="683" value="Niue">Niue</option>
                            <option data-nt="47" value="Norway">Norway</option>
                            <option data-nt="968" value="Oman">Oman</option>
                            <option data-nt="92" value="Pakistan">Pakistan</option>
                            <option data-nt="680" value="Palau">Palau</option>
                            <option data-nt="507" value="Panama">Panama</option>
                            <option data-nt="675" value="Papua New Guinea">Papua New Guinea</option>
                            <option data-nt="595" value="Paraguay">Paraguay</option>
                            <option data-nt="51" value="Peru">Peru</option>
                            <option data-nt="48" value="Poland">Poland</option>
                            <option data-nt="351" value="Portugal">Portugal</option>
                            <option data-nt="1787" value="Puerto Rico">Puerto Rico</option>
                            <option data-nt="974" value="Qatar">Qatar</option>
                            <option data-nt="40" value="Romania">Romania</option>
                            <option data-nt="7" value="Russia">Russia</option>
                            <option data-nt="250" value="Rwanda">Rwanda</option>
                            <option data-nt="290" value="Saint Helena">Saint Helena</option>
                            <option data-nt="1758" value="Saint Lucia">Saint Lucia</option>
                            <option data-nt="508" value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option>
                            <option data-nt="685" value="Samoa">Samoa</option>
                            <option data-nt="378" value="San Marino">San Marino</option>
                            <option data-nt="966" value="Saudi Arabia">Saudi Arabia</option>
                            <option data-nt="221" value="Senegal">Senegal</option>
                            <option data-nt="381" value="Serbia">Serbia</option>
                            <option data-nt="248" value="Seychelles">Seychelles</option>
                            <option data-nt="232" value="Sierra Leone">Sierra Leone</option>
                            <option data-nt="65" value="Singapore">Singapore</option>
                            <option data-nt="1721" value="Sint Maarten">Sint Maarten</option>
                            <option data-nt="421" value="Slovakia">Slovakia</option>
                            <option data-nt="386" value="Slovenia">Slovenia</option>
                            <option data-nt="677" value="Solomon Islands">Solomon Islands</option>
                            <option data-nt="252" value="Somalia">Somalia</option>
                            <option data-nt="27" value="South Africa">South Africa</option>
                            <option data-nt="211" value="South Sudan">South Sudan</option>
                            <option data-nt="34" value="Spain">Spain</option>
                            <option data-nt="94" value="Sri Lanka">Sri Lanka</option>
                            <option data-nt="970" value="State of Palestine">State of Palestine</option>
                            <option data-nt="249" value="Sudan">Sudan</option>
                            <option data-nt="597" value="Suriname">Suriname</option>
                            <option data-nt="46" value="Sweden">Sweden</option>
                            <option data-nt="41" value="Switzerland">Switzerland</option>
                            <option data-nt="963" value="Syria">Syria</option>
                            <option data-nt="886" value="Taiwan">Taiwan</option>
                            <option data-nt="992" value="Tajikistan">Tajikistan</option>
                            <option data-nt="255" value="Tanzania">Tanzania</option>
                            <option data-nt="66" value="Thailand">Thailand</option>
                            <option data-nt="269" value="the Comoros">the Comoros</option>
                            <option data-nt="31" value="the Netherlands">the Netherlands</option>
                            <option data-nt="63" value="the Philippines">the Philippines</option>
                            <option data-nt="228" value="Togo">Togo</option>
                            <option data-nt="690" value="Tokelau">Tokelau</option>
                            <option data-nt="676" value="Tonga">Tonga</option>
                            <option data-nt="1868" value="Trinidad and Tobago">Trinidad and Tobago</option>
                            <option data-nt="216" value="Tunisia">Tunisia</option>
                            <option data-nt="90" value="Turkey">Turkey</option>
                            <option data-nt="993" value="Turkmenistan">Turkmenistan</option>
                            <option data-nt="688" value="Tuvalu">Tuvalu</option>
                            <option data-nt="256" value="Uganda">Uganda</option>
                            <option data-nt="380" value="Ukraine">Ukraine</option>
                            <option data-nt="971" value="United Arab Emirates">United Arab Emirates</option>
                            <option data-nt="44" value="United Kingdom">United Kingdom</option>
                            <option data-nt="1" value="United States of America">United States of America</option>
                            <option data-nt="598" value="Uruguay">Uruguay</option>
                            <option data-nt="998" value="Uzbekistan">Uzbekistan</option>
                            <option data-nt="678" value="Vanuatu">Vanuatu</option>
                            <option data-nt="379" value="Vatican">Vatican</option>
                            <option data-nt="58" value="Venezuela">Venezuela</option>
                            <option data-nt="84" value="Vietnam">Vietnam</option>
                            <option data-nt="212" value="Western Sahara">Western Sahara</option>
                            <option data-nt="967" value="Yemen">Yemen</option>
                            <option data-nt="260" value="Zambia">Zambia</option>
                            <option data-nt="263" value="Zimbabwe">Zimbabwe</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <th>Name<br>(이름)<span class="hit">*</span></th>
                    <td>
                        <div class="w-11/12 flex flex-col">
                            <div class="flex w-full justify-between  mb-3">
                                <input type="text" id="firstName" name="firstName" placeholder="First name (only English)" class="w-6/12" />
                                <input type="text" id="lastName" placeholder="Last name (only English)" id="lastName" name="lastName" type="text" class="w-6/12" />
                            </div>
                            <input id="koreanName" name="nick_name" id="koreanName" placeholder="국문 이름 (korean Name)" type="text" class="w-full">
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        Affiliation<br>(소속)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <input type="text" id="affiliation" name="org" class="w-11/12  mb-3" placeholder="Affiliation (only English)" />
                        <input type="text" id="affiliation_kor" name="org" class="w-11/12" placeholder="국문 소속 (korean Affiliation)" />
                    </td>
                </tr>
                <tr>
                    <th>
                        Mobile Phone Number<br>
                        (휴대전화번호)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <div class="flex w-11/12">
                            <input type="text" id="contryNum" name="phone1" class="w-1/6" />
                            <input type="text" id="phoneNumber" name="phone2" class="w-5/6" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        E-mail<br>(이메일)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <div class="flex items-center w-11/12 justify-between">
                            <input type="text" name="email1" id="Email1" maxlength="64" value="" class="w-5/12">
                            <p>@</p>
                            <input type="text" name="email2" id="Email2" maxlength="64" value="" class="w-5/12">
                            <select name="Email3" id="Email3" class="border" style="background-color:#ffffff;width:100px; height:40px;">
                                <option value="" selected="selected">직접입력</option>
                                <option value="naver.com">naver.com</option>
                                <option value="daum.net">daum.net</option>
                                <option value="hotmail.com">hotmail.com</option>
                                <option value="nate.com">nate.com</option>
                                <option value="yahoo.co.kr">yahoo.co.kr</option>
                                <option value="paran.com">paran.com</option>
                                <option value="empas.com">empas.com</option>
                                <option value="dreamwiz.com">dreamwiz.com</option>
                                <option value="freechal.com">freechal.com</option>
                                <option value="lycos.co.kr">lycos.co.kr</option>
                                <option value="korea.com">korea.com</option>
                                <option value="gmail.com">gmail.com</option>
                                <option value="hanmir.com">hanmir.com</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>
                        평점신청 여부<br>(Only Korean)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <div class="h-12">
                            <input type="radio" id="need" />
                            <label for="need">필요</label>
                            <input type="radio" id="non_need" />
                            <label for="non_need">불필요</label>
                        </div>
                        <div class="flex items-center w-12/12 justify-left flex-wrap">
                            <div class="flex items-center">
                                <p class="mx-2">의사면허번호</p>
                                <input name="sn" id="doctor" type="text" class="mx-2" />
                            </div>
                            <div class="flex items-center">
                                <p class="mx-4"> 전문의번호 </p>
                                <input name="sn" id="specialist" type="text" />
                            </div>
                        </div>
                    </td>
                </tr>
            </table>
            <img src="../../assets/images/circle.png" class="inline" />
            <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Survey</h1>
            <table class="survey">
                <colgroup>
                    <col width="50%">
                    <col width="*">
                </colgroup>
                <tr>
                    <th>Is this your first time attending SICEM? (참석 횟수 조사) <span class="hit">*</span></th>
                    <td>
                        <div>
                            <input type="checkbox" id="attend_yes" />
                            <label>Yes</label>
                            <input type="checkbox" id="attend_no" />
                            <label>No</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Where did you get the information about the conference?(가입 경로) <span class="hit">*</span></th>
                    <td>
                        <div>
                            <input type="checkbox" />
                            <label>Email</label>
                            <input type="checkbox" />
                            <label>Telephone text</label>
                            <input type="checkbox" />
                            <label>Letter from Korean</label>
                            <br>
                            <input type="checkbox" />
                            <label>Medical Association</label>
                            <input type="checkbox" />
                            <label>Colleague</label>
                            <input type="checkbox" id="cofer_other" />
                            <label>Other</label>
                            <input type="text" class="w-9/12 mt-3" placeholder="other" id="conference_other" style="display:none" />
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Would you like to apply for an abstract book copy? (초록집 요청) <span class="hit">*</span></th>
                    <td>
                        <div>
                            <input type="checkbox" id="abstract_yes" />
                            <label>Yes(Hard copy)</label>
                            <input type="checkbox" id="abstract_no" />
                            <label>No(PDF file)</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Special meal request <span class="hit">*</span></th>
                    <td>
                        <div>
                            <input type="checkbox" />
                            <label>None</label>
                            <input type="checkbox" />
                            <label>Halal food</label>
                            <input type="checkbox" />
                            <label>Vegetarian food</label>
                        </div>
                    </td>
                </tr>
            </table>

            <img src="../../assets/images/circle.png" class="inline" />
            <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Session Participation</h1>
            <table class="survey">
                <colgroup>
                    <col width="50%">
                    <col width="*">
                </colgroup>
                <tr>
                    <th>Welcome reception – Thursday, October 26</th>
                    <td>
                        <div>
                            <input type="checkbox" id="yes_1" />
                            <label>Yes</label>
                            <input type="checkbox" id="no_1" />
                            <label>No</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Satellite Symposium - Thursday, October 26</th>
                    <td>
                        <div>
                            <input type="checkbox" id="yes_2" />
                            <label>Yes</label>
                            <input type="checkbox" id="no_2" />
                            <label>No</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Satellite Symposium - Friday, October 27</th>
                    <td>
                        <div>
                            <input type="checkbox" id="yes_3" />
                            <label>Yes</label>
                            <input type="checkbox" id="no_3" />
                            <label>No</label>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Breakfast Symposium – Saturday, October 28</th>
                    <td>
                        <div>
                            <input type="checkbox" id="yes_4" />
                            <label>Yes</label>
                            <input type="checkbox" id="no_4" />
                            <label>No</label>
                        </div>
                    </td>
                </tr>
            </table>

            <img src="../../assets/images/circle.png" class="inline" />
            <h1 class="text-sky-900 font-bold text-xl mt-10 mb-5 inline-block">Registration Fees</h1>
            <table class="survey">
                <colgroup>
                    <col width="20%">
                    <col width="*">
                </colgroup>
                <tr>
                    <th>
                        Member<br>(학회 회원 여부)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <input type="radio" id="member" name="type4" />
                        <label for="member">Member(회원)</label>
                        <input type="radio" id="non_member" name="type5" />
                        <label for="non_member">Non-Member(비회원)</label>
                    </td>
                </tr>

                <tr>
                    <th>
                        Type of Participation<br>(참석유형)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <div class="flex w-11/12 justify-between items-center">
                            <select id="Participation_1" style="background-color:#ffffff;" class="px-2 py-1 w-full h-10 border" name="type1">
                                <option value="" selected="selected">선택사항</option>
                                <option value="Speaker">Speaker</option>
                                <option value="Chairperson">Chairperson</option>
                                <option value="Panel">Panel</option>
                                <option value="Organizer">Organizer</option>
                                <option value="Oral Presenter">Oral Presenter</option>
                                <option value="Poster Oral Presenter">Poster Oral Presenter</option>
                                <option value="Participant">Participant</option>
                                <option value="Press">Press</option>
                                <option value="Exhibitior">Exhibitior</option>
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Category<br>(참석자 구분)
                        <span class="hit">*</span>
                    </th>

                    <td>
                        <div class="flex w-11/12 justify-between items-center border">
                            <select id="Category_1" style="background-color:#ffffff;" class="px-2 py-1 w-full h-10" name="type2">
                                <option value="" selected="selected">선택사항</option>
                                <option value="Medical Doctor">Medical Doctor</option>
                                <option value="Professor">Professor</option>
                                <option value="Fellow">Fellow</option>
                                <option value="Public Health Doctor">Public Health Doctor</option>
                                <option value="Military Doctor">Military Doctor</option>
                                <option value="Resident">Resident</option>
                                <option value="Graduate">Graduate</option>
                                <option value="Student"> Student</option>
                                <option value="Nurse">Nurse</option>
                                <option value="Nutritionist">Nutritionist</option>
                                <option value="Pharmacist">Pharmacist</option>
                                <option value="Exercise Specialist">Exercise Specialist</option>
                                <option value="Researcher">Researcher</option>
                                <option value="Corporate">Corporate</option>
                                <input type="text" id="category_others" style="display: none;" />
                            </select>
                        </div>
                    </td>
                </tr>
                <tr>
                    <th>Attendance Date<br>(참석 날짜)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <input type="checkbox" id="full" class="day" />
                        <label for="full">Full registration </label>
                        <input type="checkbox" id="thursday" class="day" />
                        <label for="thursday">Thursday, October 26 </label>
                        <br>
                        <input type="checkbox" id="friday" class="day" />
                        <label for="friday">Friday, October 27</label>
                        <input type="checkbox" id="saturday" class="day" />
                        <label for="saturday">Saturday, October 28</label>
                    </td>
                </tr>
                <tr>
                    <th>Payment Method<br>(지불 방법)
                        <span class="hit">*</span>
                    </th>
                    <td>
                        <input type="checkbox" id="card" />
                        <label for="card">Credit card</label>
                        <input type="checkbox" id="transfer" />
                        <label for="transfer">Bank transfer(Korean only)</label>
                    </td>
                </tr>
                <tr>
                    <th>Total</th>
                    <td id="total" class="font-semibold underline underline-offset-8 text-2xl"></td>
                </tr>
            </table>

            <div class="flex items-center justify-center">
                <button id="Submit" type="button" class="w-60 h-15 bg-sky-900 text-white p-3 my-5 text-lg">Submit</button>
            </div>
        </div>
    </div>

    <!-- ==================================================================== -->
    <div class="wrap_2" style="display: none;">
        <div class="confirm_box mt-10">
            <div class="confirm_box_title h-10 flex items-center justify-center">
                <h1 class="text-xl font-bold">Use of Personal Information (개인정보활용동의)</h1>
            </div>
            <div class="flex flex-col items-center justify-center">
                <h3 class="mt-7 font-bold text-lg">ICOMES 2023 이용 약관</h3>
                <P class="text-base mt-5">
                    본 학술대회의 주관사인 대한비만학회는 학술대회 등록시스템 서비스 제공을 위하여 관계 법령에 따라
                    아래와 같이 <br>개인정보를 수집, 이용하는 내용을 알리오니 자세히 읽으신 후 동의 여부를 결정하여 주십시오.
                </P>
            </div>
        </div>
        <div class="all_checkbox">
            <input id="all_check" type="checkbox" />
            <label for="all_check">개인정보 수집 및 제공 동의에 모두 동의</label>
        </div>
        <div class="personal_checkbox">
            <div>
                <input id="first_check" class="check" type="checkbox" />
                <label for="first_check">개인정보 수집 동의 <span>(필수)</span></label>
            </div>

            <textarea class="border text-base" disabled="" readonly="">개인정보 수집 및 이용 동의
            개인정보 수집 및 이용 동의
            1. 수집항목: 성명, 휴대폰번호, 바코드 입장 정보
            2. 수집/이용 목적
            참가자들의 편의와 참가업체 상호간의 유용한 정보 교류 서비스 제공을 위한 학술대회 출입증 발급 및 전
            자명함시스템 제공에 이용되며, 본 학술대회에서 수집한 개인정보는 차기 학술대회 초대권 발송 및 안내
            를 위한 용도 외의 다른 목적으로 사용되지 않습니다.
            ※ 기타 개인정보 취급에 관한 상세한 사항은 본 학술대회 홈페이지
            (https://icomes.or.kr/main/signup.php)에 공개하고 있는 “개인정보 처리방침”을 참조 하십시오.
            </textarea>
        </div>

        <div class="personal_checkbox">
            <div>
                <input id="second_check" class="check" type="checkbox" />
                <label for="second_check">개인정보 2자 제공 동의<span>(필수)</span></label>
            </div>

            <textarea class="border text-base" disabled="" readonly="">
            개인정보 제3자 제공 동의
            1. 개인정보 취급 업무의 위탁
            본 학술대회는 서비스 향상을 위해서 아래와 같이 개인정보를 위탁하고 있으며, 관계 법령에 따라 위탁계
            약 시 개인정보가 안전하게 관리될 수 있도록 필요한 사항을 규정하고 있습니다.
            수탁 업체 : INTO-ON
            위탁 업무내용 : 등록시스템 운영위탁, 전자명함 시스템 서비스 제공 등
            이용 및 보유기간 : 위탁계약 종료 시까지
            2. 이용, 보유기간
            개인정보 수집 및 이용목적이 달성된 후에는 해당 정보를 지체 없이 파기 합니다.
            (단, 기타 법령에 따로 정하는 경우는 해당 기간까지 보관)
            3. 기타 고지 사항
            개인정보 보호법 제15조 제1항 제3호에 따라 정보주체의 동의 없이 개인정보를 수집‧이용합니다.
            개인정보 처리사유 : 학술대회 인증 자료
            개인정보 항목 : 성명, 소속, 직위, 전화번호(휴대폰 또는 회사전화), 이메일
            수집 근거 : 「전시산업발전법」제22조
            4. 동의거부 권리 및 불이익
            필수항목을 기재하지 않거나 개인정보 수집·이용에 거부하는 경우, 본 학술대회에서 제공하는 서비스를
            이용할 수 없습니다. 또한 학술대회 출입증 발급이 불가하여 재입장 등 입장의 제한이 발생될 수 있습니다.
            </textarea>
        </div>

        <div class="personal_checkbox">
            <div>
                <input id="third_check" class="check" type="checkbox" />
                <label for="third_check"> 차기 학술대회 관련 안내 이메일 수신 동의 <span style="color: #7d8597;">(선택)</span> </label>

            </div>
            <table class="tbl_type01" id="optionalAgreeInfoEmail">
                <colgroup>
                    <col width="40%">
                    <col width="30%">
                    <col width="30%">
                </colgroup>
                <tr>
                    <th>수집 목적</th>
                    <th class="line_th">수집 항목</th>
                    <th class="line_th">보유 기간</th>
                </tr>
                <tr>
                    <td style="text-align: center;">학술대회 관람 설문조사<br /><br />
                        학술대회 안내<br /><br />
                        뉴스레터 발송</td>
                    <td style="text-align: center;" class="line">이메일</td>
                    <td style="text-align: center;" class="line">2년</td>
                </tr>
            </table>
        </div>

        <div class="personal_checkbox">
            <div>
                <input id="fourth_check" class="check" type="checkbox" />
                <label for="fourth_check"> 차기 학술대회 관련 안내 이메일 수신 동의 <span style="color: #7d8597;">(선택)</span>
                </label>

            </div>

            <table class="tbl_type01" id="optionalAgreeInfoMobile" style="width: 100%;">
                <colgroup>
                    <col width="40%">
                    <col width="30%">
                    <col width="30%">
                </colgroup>
                <tr>
                    <th>수집 목적</th>
                    <th class="line_th">수집 항목</th>
                    <th class="line_th">보유 기간</th>
                </tr>
                <tr>
                    <td style="text-align: center;">학술대회 안내 및<br /><br />
                        모바일 초대권 발송</td>
                    <td style="text-align: center;" class="line">휴대폰 번호</td>
                    <td style="text-align: center;" class="line">2년</td>
                </tr>
            </table>
        </div>
        <div class="next_btn_box">
            <button type="button" class="pre_btn w-60 h-15 bg-sky-900 text-white p-3 my-5 text-lg">Previous</button>
            <button type="submit" class="next_btn w-60 h-15 bg-sky-900 text-white p-3 my-5 text-lg">Submit</button>
        </div>
    </div>
</form>
<!-- </body>


</html> -->
<script>
    const wrap_1 = document.querySelector(".wrap_1")
    const wrap_2 = document.querySelector(".wrap_2")

    const firstName = document.querySelector("#firstName");
    const LastName = document.querySelector("#lastName");
    const KoreanName = document.querySelector("#koreanName");



    const contry = document.querySelector("#nation_no");

    const affilation = document.querySelector("#affiliation");
    const koreanAffiliation = document.querySelector("#affiliation_kor")

    const contryNumber = document.querySelector("#contryNum");
    const phone = document.querySelector("#phoneNumber")

    const email_1 = document.querySelector("#Email1")
    const email_2 = document.querySelector("#Email2")
    const email_3 = document.querySelector("#Email3")

    const member = document.querySelector("#member");
    const nonMember = document.querySelector("#non_member")

    // const participation = document.querySelector("#Participation");
    const participationSelect = document.querySelector("#Participation_1")

    // const category = document.querySelector("#Category")
    const categorySelect = document.querySelector("#Category_1")
    const categoryOthers = document.querySelector("#category_others")

    const need = document.querySelector("#need");
    const nonNeed = document.querySelector("#non_need")

    const doctor = document.querySelector("#doctor");
    const specialist = document.querySelector("#specialist")

    const full = document.querySelector("#full");
    const thursday = document.querySelector("#thursday");
    const friday = document.querySelector("#friday");
    const saturday = document.querySelector("#saturday");
    const dayList = document.querySelectorAll(".day")

    const card = document.querySelector("#card");
    const transfer = document.querySelector("#transfer")

    const yes_1 = document.querySelector("#yes_1")
    const no_1 = document.querySelector("#no_1")
    const yes_2 = document.querySelector("#yes_2")
    const no_2 = document.querySelector("#no_2")
    const yes_3 = document.querySelector("#yes_3")
    const no_3 = document.querySelector("#no_3")
    const yes_4 = document.querySelector("#yes_4")
    const no_4 = document.querySelector("#no_4")


    const participationRadios = document.querySelectorAll('.session_radio');
    const checkboxes = document.querySelectorAll('.checkbox');
    const allCheck = document.querySelector("#all_check");
    const checkedbox2 = document.querySelectorAll('.check');
    const firstCheck = document.querySelector("#first_check");
    const secondCheck = document.querySelector("#second_check");
    const thirdCheck = document.querySelector("#third_check");
    const fourthCheck = document.querySelector("#fourth_check");

    const total = document.querySelector("#total")

    const submitButton = document.querySelector("#Submit")
    const finalButton = document.querySelector(".next_btn")
    const preButton = document.querySelector(".pre_btn")
    const conference_other = document.querySelector("#conference_other")
    const cofer_other = document.querySelector("#cofer_other")

    const attend_yes = document.querySelector("#attend_yes");
    const attend_no = document.querySelector("#attend_no")

    const abstract_yes = document.querySelector("#abstract_yes");
    const abstract_no = document.querySelector("#abstract_no")

    let fee;

    /**영어 유효성 검사 */
    firstName.addEventListener("input", (event) => {
        englishInput(event)
    })
    LastName.addEventListener("input", (event) => {
        englishInput(event)
    })

    affilation.addEventListener("input", (event) => {
        englishInput(event)
    })

    function englishInput(event) {
        const inputValue = event.target.value;
        const onlyEnglish = /^[A-Za-z]+$/;

        if (!onlyEnglish.test(inputValue)) {
            event.target.value = inputValue.replace(/[^A-Za-z]/g, '');
        }
    }


    /**한국어 유효성 검사 */
    KoreanName.addEventListener('input', (event) => {
        const inputValue = event.target.value;
        const onlyHangul = /^[ㄱ-ㅎㅏ-ㅣ가-힣]+$/;

        if (!onlyHangul.test(inputValue)) {
            event.target.value = inputValue.replace(/[^\uAC00-\uD7AF\u1100-\u11FF\u3130-\u318F]+/g, '');
        }
    });

    koreanAffiliation.addEventListener("input", (event) => {
        const inputValue = event.target.value;
        const onlyHangul = /^[ㄱ-ㅎㅏ-ㅣ가-힣]+$/;

        if (!onlyHangul.test(inputValue)) {
            event.target.value = inputValue.replace(/[^\uAC00-\uD7AF\u1100-\u11FF\u3130-\u318F]+/g, '');
        }
    })

    /**휴대폰 유효성 검사 */
    phone.addEventListener('input', (event) => {
        const inputValue = event.target.value;
        const onlyNumbers = /^[0-9]+$/;

        if (!onlyNumbers.test(inputValue)) {
            event.target.value = inputValue.replace(/\D/g, '');
        }
    });

    /**국적 -> 한국인만 한국이름 작성 */
    contry.addEventListener("click", () => {
        contryNumber.value = contry.options[contry.selectedIndex].dataset.nt
        if (contry.value !== "Republic of Korea") {
            KoreanName.style.display = "none"
            koreanAffiliation.style.display = "none"
        } else if (contry.value === "Republic of Korea") {
            KoreanName.style.display = "";
            koreanAffiliation.style.display = "";
        }
    })

    /**email selectbox */
    email_3.addEventListener("click", () => {
        email_2.value = email_3.options[email_3.selectedIndex].value
    })

    /**회원 여부 checkbox */
    member.addEventListener("click", () => {
        if (member.checked) {
            nonMember.checked = false;
        } else {
            member.checked = true;
        }
    })


    nonMember.addEventListener("click", () => {
        if (nonMember.checked) {
            member.checked = false;
        } else {
            nonMember.checked = true;
        }
    })


    /**참석 횟수 checkbox */
    attend_yes.addEventListener("click", () => {
        if (attend_yes.checked) {
            attend_no.checked = false;
        }
    })

    attend_no.addEventListener("click", () => {
        if (attend_no.checked) {
            attend_yes.checked = false;
        }
    })


    /** 가입 경로 other input*/
    cofer_other.addEventListener("click", () => {
        if (cofer_other.checked) {
            conference_other.style.display = "";
        } else {
            conference_other.style.display = "none";
        }
    })


    /**참석 날짜 checkbox */
    full.addEventListener("click", () => {
        dayCheck("full")
    })

    thursday.addEventListener("click", () => {
        dayCheck("thursday")
    })

    friday.addEventListener("click", () => {
        dayCheck("friday")
    })

    saturday.addEventListener("click", () => {
        dayCheck("saturday")
    })

    function dayCheck(selected) {
        dayList.forEach((day) => {
            if (day.id !== selected) {
                day.checked = false;
            } else {
                day.checked = true;
            }
        })
    }

    /**지불방법 checkbox */
    card.addEventListener("click", () => {
        transfer.checked = false;
        calRegiFee()
        total.innerText = fee;
    })

    transfer.addEventListener("click", () => {
        card.checked = false;
        calRegiFee()
        total.innerText = fee;
    })

    /**category select */
    categorySelect.addEventListener("click", () => {
        const categoryValue = categorySelect.options[categorySelect.selectedIndex].value;
    })

    /**평점 신청 X -> input disabled */
    nonNeed.addEventListener("click", () => {
        if (nonNeed.checked) {
            need.checked = false;
            doctor.disabled = true;
            specialist.disabled = true;
        } else {
            need.checked = true
            doctor.disabled = false;
            specialist.disabled = false;
        }
    })
    /**평점 신청 O -> input disabled X */
    need.addEventListener("click", () => {
        if (need.checked) {
            nonNeed.checked = false;
            doctor.disabled = false;
            specialist.disabled = false;
        }
    })

    /**participation */
    function participationY(number) {
        if (document.querySelector(`#yes_${number}`).checked) {
            document.querySelector(`#no_${number}`).checked = false;
        }
    }

    function participationN(number) {
        if (document.querySelector(`#no_${number}`).checked) {
            document.querySelector(`#yes_${number}`).checked = false;
        }
    }

    /**Session Participation */
    const yesList = [yes_1, yes_2, yes_3, yes_4];
    const noList = [no_1, no_2, no_3, no_4];

    yesList.map((yes, i) => {
        yes.addEventListener("click", () => {
            participationY(`${i + 1}`)
        })
    })

    noList.map((no, i) => {
        no.addEventListener("click", () => {
            participationN(`${i + 1}`)
        })
    })

    /**abstract book */
    abstract_yes.addEventListener("click", () => {
        if (abstract_yes.checked) {
            abstract_no.checked = false;
        }
    })

    abstract_no.addEventListener("click", () => {
        if (abstract_no.checked) {
            abstract_yes.checked = false;
        }
    })


    // preButton.addEventListener("click", () => {
    //     wrap_2.style.display = "none";
    //     wrap_1.style.display = "";
    // })

    let checkedArr = []

    submitButton.addEventListener("click", (e) => {
        onSubmit(e)
    })

    allCheck.addEventListener("click", () => selectAll());
    /**모두 체크 눌렀을 때 */
    function selectAll() {
        checkedbox2.forEach((checkbox) => {
            checkbox.checked = allCheck.checked
        })
        checkedArr = [firstCheck.checked, secondCheck.checked, thirdCheck.checked, fourthCheck.checked];
    }


    finalButton.addEventListener("click", () => onClickSubmit())

    function onSubmit(e) {
        // e.preventDefault()

        /** 주석 풀 것 유효성 검사 */
        // if (!firstName.value || !LastName.value || !KoreanName.value) {
        //     alert("invaild Name");
        //     firstName.focus()
        //     return;
        // }
        // if (!contry.value) {
        //     alert("invaild contry");
        //     contry.focus()
        //     return;
        // }
        // if (!affilation.value) {
        //     alert("invaild affilation");
        //     affilation.focus()
        //     return;
        // }
        // if (!phone.value) {
        //     alert("invaild phone");
        //     phone.focus()
        //     return;
        // }
        // if (!email_1.value) {
        //     alert("invaild email");
        //     email_1.focus()
        //     return;
        // }
        // if (!member.checked && !nonMember.checked) {
        //     alert("invaild member");
        //     member.focus()
        //     return;
        // }
        // if (!participationSelect.options[participationSelect.selectedIndex].value) {
        //     alert("invaild participation");
        //     participationSelect.focus()
        //     return;
        // }
        // if (!categorySelect.options[categorySelect.selectedIndex].value) {
        //     alert("invaild category");
        //     categorySelect.focus()
        //     return;
        // }
        // if (categorySelect.options[categorySelect.selectedIndex].value === "Others" && !categoryOthers.value) {
        //     alert("invaild category");
        //     categoryOthers.focus()
        //     return;
        // }
        // if (!need.checked && !nonNeed.checked) {
        //     alert("invaild grade");
        //     need.focus()
        //     return;
        // }

        // if (need.checked && !doctor.value && !specialist.value) {
        //     alert("invaild grade");
        //     need.focus()
        //     return;
        // }


        // const isAnyCheckboxChecked = Array.from(checkboxes).some((checkbox) => checkbox.checked);

        // if (!isAnyCheckboxChecked) {
        //     alert("Please select at least one option.");
        //     return;
        // }

        // wrap_1.style.display = "none";
        // wrap_2.style.display = "";
        // allCheck.focus()

        calRegiFee()
        total.innerText = fee;
    }

    function onClickSubmit() {
        if (!firstCheck.checked || !secondCheck.checked) {
            alert("필수항목을 체크해주세요.")
            firstCheck.focus()
            return;
        } else {
            checkedArr = [firstCheck.checked, secondCheck.checked, thirdCheck.checked, fourthCheck.checked];

        }
        const checkArray = []
        checkboxes.forEach((check) => {
            checkArray.push(check.checked)
        })
    }

    /**금액 계산 */
    function calRegiFee() {
        if (member.checked) {
            /**full day & member*/
            if (full.checked) {
                if (categorySelect.value === "Medical Doctor" || categorySelect.value === "Professor") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 250,000"
                    } else {
                        fee = "USD 250"
                    }
                } else if (categorySelect.value === "Resident" || categorySelect.value === "Graduate" || categorySelect
                    .value === "Fellow" || categorySelect
                    .value === "Student") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 125,000"
                    } else {
                        fee = "USD 125"
                    }
                } else if (categorySelect.value === "Corporate") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 200,000"
                    } else {
                        fee = "USD 200"
                    }
                } else {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 200,000"
                    } else {
                        fee = "USD 200"
                    }
                }
            }

            /** one day & member */
            else {
                if (contry.value === "Republic of Korea") {
                    fee = "KRW 200,000"
                } else {
                    fee = "USD 200"
                }
            }
        } else if (!member.checked) {

            /**full day & non-member */
            if (full.checked) {
                if (categorySelect.value === "Medical Doctor" || categorySelect.value === "Professor") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 350,000"
                    } else {
                        fee = "USD 350"
                    }
                } else if (categorySelect.value === "Resident" || categorySelect.value === "Graduate" || categorySelect
                    .value === "Fellow" || categorySelect
                    .value === "Student") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 175,000"
                    } else {
                        fee = "USD 175"
                    }
                } else if (categorySelect.value === "Corporate") {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 250,000"
                    } else {
                        fee = "USD 250"
                    }
                } else {
                    if (contry.value === "Republic of Korea") {
                        fee = "KRW 250,000"
                    } else {
                        fee = "USD 250"
                    }
                }
            }

            /** one day  & non-member */
            else {
                if (contry.value === "Republic of Korea") {
                    fee = "KRW 230,000"
                } else {
                    fee = "USD 230"
                }
            }
        }
    }

    window.onload = () => {
        contry.focus()
    }
</script>