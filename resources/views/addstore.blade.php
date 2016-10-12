@extends('layouts.master')

@section('h')
<style>
    body {
    font-family: "proxima-nova",sans-serif;
    font-style: normal;
    font-weight: 400;
    background-color: #EBEEF0;
}
     .marginlefting {
       margin-left: 60px !important;
     }

     .logo {
       height: 48px !important;
       padding: 10px !important;
     }
     
     .logo img {
       width: 100% !important;
       height: 38px !important;
     }

     .sidebar-item-icon-expanded {
        float: left !important;
        margin: 0 !important; 
        margin-right: 10px !important;
        color: #d2d2d2;
        font-size: 16px !important;
     }

     .sidebar-item-icon-collapsed {
        font-size: 24px !important;
        color: #d2d2d2;
     }

     .sidebar-item-name-expanded {
        display: block !important;
        font-size: 16px !important;
     }

     .sidebar-item-name-collapsed {
        display: none !important;
     }

     .sidebar-item-icon-dropdown-collapsed {
        display: none !important;
     }
     #map {
        margin-top: 180px;
        height: 100%;
     }
     .openbtn {
        height: 56.41px !important;
     }
     .bottom_sticky {
        position: absolute !important; 
        left: 0 !important; 
        bottom: 0 !important;
     }
</style>

<script type="text/javascript">
    $(document).ready(function() { 
        $(".ui.dropdown").dropdown({on: "hover"});
        $('.ui.checkbox').checkbox();
        $(".openbtn").on("click", function() {
            $(".ui.sidebar").toggleClass("very thin icon");
            $(".asd").toggleClass("marginlefting");
            $(".sidebar-item-name").toggleClass("sidebar-item-name-collapsed").toggleClass("sidebar-item-name-expanded");
            $(".sidebar-item-icon").toggleClass("sidebar-item-icon-collapsed").toggleClass("sidebar-item-icon-expanded");
            $(".sidebar-item-icon-dropdown").toggleClass("sidebar-item-icon-dropdown-collapsed");
        });

    });
</script>

@section('bc','bg')

@endsection

@section('c')
<!-- Body Content -->
<div class="ui sidebar vertical left scrolling inverted menu overlay visible" style="-webkit-transition-duration: 0.5s; overflow: visible !important; background-color:#343536;">
  <div class="item center logo openbtn">
      <i class="icon content" style="font-size:24px; padding: 5px; color: #d2d2d2;"></i>
  </div>

    <a class="item">

        <i class="home icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
        <span class="sidebar-item-name sidebar-item-name-expanded">Dashboard</span>

    </a>


    <div class="ui left pointing dropdown item">

        <i class="bar chart icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
        <i class="dropdown icon sidebar-item-icon-dropdown"></i>
        <span class="sidebar-item-name sidebar-item-name-expanded">Reports</span>

        <div class="menu" style="background-color: #eee;">
          <a href="#" class="item">Billing History</a>
          <a href="#" class="item">KOT Void History</a>
          <a href="#" class="item">Register Closures</a>
          <a href="#" class="item">Pending Settlements</a>
          <div class="ui divider"></div>
          <a href="#" class="item">Report By Sales</a>
          <a href="#" class="item">Report By Products</a>
          <a href="#" class="item">Report By Payments</a>
          <a href="#" class="item">Report By StockFlow</a>
          <a href="#" class="item">Report By Taxes</a>
        </div>
    </div>

    <div class="ui left pointing dropdown item">

        <i class="tag icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
        <i class="dropdown icon sidebar-item-icon-dropdown"></i>
        <span class="sidebar-item-name sidebar-item-name-expanded">Products</span>

        <div class="menu" style="background-color: #f2f2f2;">
          <a href="#" class="item">Products</a>
          <a href="#" class="item">Product Modifiers</a>
          <a href="#" class="item">StockControl</a>
          <a href="#" class="item">PriceBooks</a>
          <div class="ui divider"></div>
          <a href="#" class="item">Sections</a>
          <a href="#" class="item">Brands</a>
          <a href="#" class="item">Suppliers</a>
        </div>
    </div>

    <div class="ui left pointing dropdown item">

        <i class="users icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
        <i class="dropdown icon sidebar-item-icon-dropdown"></i>
        <span class="sidebar-item-name sidebar-item-name-expanded">Customers</span>

        <div class="menu" style="background-color: #f2f2f2;">
          <a href="#" class="item">Customers</a>
          <a href="#" class="item">Customer Groups</a>
        </div>
    </div>

    <div class="ui left pointing dropdown item">

        <i class="setting icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
        <i class="dropdown icon sidebar-item-icon-dropdown"></i>
        <span class="sidebar-item-name sidebar-item-name-expanded">Settings</span>

        <div class="menu" style="background-color: #f2f2f2;">
          <a href="#" class="item">Stores &amp; Registers</a>
          <a href="#" class="item">Payments &amp; Taxes</a>
          <a href="#" class="item">Employees &amp; Permissions</a>
          <a href="#" class="item">Register Automation</a>
          <a href="#" class="item">Receipt Templates</a>
          <div class="ui divider"></div>
          <a href="#" class="item">Account</a>
        </div>
    </div>

    <div class="ui dropdown item bottom_sticky">

        <i class="user icon sidebar-item-icon sidebar-item-icon-expanded"></i> 
        <i class="dropdown icon sidebar-item-icon-dropdown"></i>
        <span class="sidebar-item-name sidebar-item-name-expanded">User</span>

        <div class="menu" style="background-color: #f2f2f2;">
          <a href="#" class="item">My Profile</a>
          <a href="#" class="item">Logout</a>
        </div>
    </div>

</div>

<div class="pusher asd" style="margin-left: 208px; -webkit-transition-duration: 0.1s; background-color: #f5f5f5">
  <!-- Top Menu !-->
  <div class="ui menu borderless" style="border-radius: 0!important; border: 0;">
    <!--<a class="item">Messages</a>-->
    <!-- Breadcrumb in Menu -->
    <div class="ui item big breadcrumb">
      <a class="section"><i class="setting grey icon"></i>Settings</a>
      <i class="divider"> /  </i>
      <a class="section">Stores &amp; Registers</a>
      <i class="divider"> /  </i>
      <div class="active section">Add New Store</div>
    </div>
    <!-- End of Breadcrumb -->
    <div class="right menu">
      <div class="item">
        <a class="ui primary button">Save</a>
      </div>
      <div class="item">
        <a class="ui button">Discard</a>
      </div>
    </div>
  </div>
  <!-- End of Top Menu !-->

  <!-- Actual Body Content with Cards !-->
  <div class="ui container" style="padding-left:10px; padding-right:10px;">
  
  <!--Form Begins -->
  <form class="ui form">
    <div class="ui vertical padded segment">
      <h5 class="header"><i class="icon shop"></i> Store Details</h5>
      <div class="ui divider"></div>
     <!-- Segment 1 - Card 1 !-->
      <div class="ui bottom attached">

        <div class="field">
          <label>Full Name</label>
          <div class="field">
            <div class="sixteen wide field">
              <input type="text" name="full_name" placeholder="Full Name">
            </div>
          </div>
        </div>

        <div class="field">
          <label>Description</label>
          <div class="field">
            <div class="sixteen wide field">
              <textarea type="textarea" name="description" placeholder="Description" rows="3"></textarea>
            </div>
          </div>
        </div>

        <div class="field">
          <label>Tax</label>
          <div class="field">
            <div class="sixteen wide field">
              <input type="text" name="tax" placeholder="Tax">
            </div>
          </div>
        </div>

        <div class="two fields">
          <div class="field">
            <label>Mobile Number</label>
            <input type="tel" name="mobile_no" placeholder="Mobile Number">
          </div>
          <div class="field">
            <label>Email Address</label>
            <input type="email" name="email" placeholder="Email Address">
          </div>
        </div>
      <!-- segment ends !-->
      </div>
    </div>
    <div class="ui vertical padded segment">
    <!-- Section 2 !-->
    <h5 class="ui header"><i class="icon map"></i> Store Address</h5>
    <div class="ui divider"></div>
      <!-- Segment 2 - Card 2 -->
      <div class="ui bottom attached">

        <div class="two fields">
          <div class="field">
            <label>Street 1</label>
            <input type="text" name="street_1" placeholder="Street 1">
          </div>
          <div class="field">
            <label>Street 2</label>
            <input type="text" name="street_2" placeholder="Street 2">
          </div>
        </div>

        <div class="field">
          <label>Locality</label>
          <div class="field">
            <div class="sixteen wide field">
              <input type="text" name="locality" placeholder="Locality">
            </div>
          </div>
        </div>

        <div class="two fields">
          <div class="field">
            <label>City</label>
            <input type="text" name="city" placeholder="City">
          </div>
          <div class="field">
            <label>ZIP</label>
            <input type="text" name="zip_code" placeholder="ZIP Code">
          </div>
        </div>

        <div class="two fields">
          <div class="field">
            <label>State</label>
            <input type="text" name="state" placeholder="State">
          </div>
          <div class="field">
          <label>Country</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="country">
              <i class="dropdown icon"></i>
              <div class="default text">Select</div>
                <div class="menu">
                  <div class="item" value="AF">Afghanistan</div>
                  <div class="item" value="AX">Åland Islands</div>
                  <div class="item" value="AL">Albania</div>
                  <div class="item" value="DZ">Algeria</div>
                  <div class="item" value="AS">American Samoa</div>
                  <div class="item" value="AD">Andorra</div>
                  <div class="item" value="AO">Angola</div>
                  <div class="item" value="AI">Anguilla</div>
                  <div class="item" value="AQ">Antarctica</div>
                  <div class="item" value="AG">Antigua and Barbuda</div>
                  <div class="item" value="AR">Argentina</div>
                  <div class="item" value="AM">Armenia</div>
                  <div class="item" value="AW">Aruba</div>
                  <div class="item" value="AU">Australia</div>
                  <div class="item" value="AT">Austria</div>
                  <div class="item" value="AZ">Azerbaijan</div>
                  <div class="item" value="BS">Bahamas</div>
                  <div class="item" value="BH">Bahrain</div>
                  <div class="item" value="BD">Bangladesh</div>
                  <div class="item" value="BB">Barbados</div>
                  <div class="item" value="BY">Belarus</div>
                  <div class="item" value="BE">Belgium</div>
                  <div class="item" value="BZ">Belize</div>
                  <div class="item" value="BJ">Benin</div>
                  <div class="item" value="BM">Bermuda</div>
                  <div class="item" value="BT">Bhutan</div>
                  <div class="item" value="BO">Bolivia, Plurinational State of</div>
                  <div class="item" value="BQ">Bonaire, Sint Eustatius and Saba</div>
                  <div class="item" value="BA">Bosnia and Herzegovina</div>
                  <div class="item" value="BW">Botswana</div>
                  <div class="item" value="BV">Bouvet Island</div>
                  <div class="item" value="BR">Brazil</div>
                  <div class="item" value="IO">British Indian Ocean Territory</div>
                  <div class="item" value="BN">Brunei Darussalam</div>
                  <div class="item" value="BG">Bulgaria</div>
                  <div class="item" value="BF">Burkina Faso</div>
                  <div class="item" value="BI">Burundi</div>
                  <div class="item" value="KH">Cambodia</div>
                  <div class="item" value="CM">Cameroon</div>
                  <div class="item" value="CA">Canada</div>
                  <div class="item" value="CV">Cape Verde</div>
                  <div class="item" value="KY">Cayman Islands</div>
                  <div class="item" value="CF">Central African Republic</div>
                  <div class="item" value="TD">Chad</div>
                  <div class="item" value="CL">Chile</div>
                  <div class="item" value="CN">China</div>
                  <div class="item" value="CX">Christmas Island</div>
                  <div class="item" value="CC">Cocos (Keeling) Islands</div>
                  <div class="item" value="CO">Colombia</div>
                  <div class="item" value="KM">Comoros</div>
                  <div class="item" value="CG">Congo</div>
                  <div class="item" value="CD">Congo, the Democratic Republic of the</div>
                  <div class="item" value="CK">Cook Islands</div>
                  <div class="item" value="CR">Costa Rica</div>
                  <div class="item" value="CI">Côte d'Ivoire</div>
                  <div class="item" value="HR">Croatia</div>
                  <div class="item" value="CU">Cuba</div>
                  <div class="item" value="CW">Curaçao</div>
                  <div class="item" value="CY">Cyprus</div>
                  <div class="item" value="CZ">Czech Republic</div>
                  <div class="item" value="DK">Denmark</div>
                  <div class="item" value="DJ">Djibouti</div>
                  <div class="item" value="DM">Dominica</div>
                  <div class="item" value="DO">Dominican Republic</div>
                  <div class="item" value="EC">Ecuador</div>
                  <div class="item" value="EG">Egypt</div>
                  <div class="item" value="SV">El Salvador</div>
                  <div class="item" value="GQ">Equatorial Guinea</div>
                  <div class="item" value="ER">Eritrea</div>
                  <div class="item" value="EE">Estonia</div>
                  <div class="item" value="ET">Ethiopia</div>
                  <div class="item" value="FK">Falkland Islands (Malvinas)</div>
                  <div class="item" value="FO">Faroe Islands</div>
                  <div class="item" value="FJ">Fiji</div>
                  <div class="item" value="FI">Finland</div>
                  <div class="item" value="FR">France</div>
                  <div class="item" value="GF">French Guiana</div>
                  <div class="item" value="PF">French Polynesia</div>
                  <div class="item" value="TF">French Southern Territories</div>
                  <div class="item" value="GA">Gabon</div>
                  <div class="item" value="GM">Gambia</div>
                  <div class="item" value="GE">Georgia</div>
                  <div class="item" value="DE">Germany</div>
                  <div class="item" value="GH">Ghana</div>
                  <div class="item" value="GI">Gibraltar</div>
                  <div class="item" value="GR">Greece</div>
                  <div class="item" value="GL">Greenland</div>
                  <div class="item" value="GD">Grenada</div>
                  <div class="item" value="GP">Guadeloupe</div>
                  <div class="item" value="GU">Guam</div>
                  <div class="item" value="GT">Guatemala</div>
                  <div class="item" value="GG">Guernsey</div>
                  <div class="item" value="GN">Guinea</div>
                  <div class="item" value="GW">Guinea-Bissau</div>
                  <div class="item" value="GY">Guyana</div>
                  <div class="item" value="HT">Haiti</div>
                  <div class="item" value="HM">Heard Island and McDonald Islands</div>
                  <div class="item" value="VA">Holy See (Vatican City State)</div>
                  <div class="item" value="HN">Honduras</div>
                  <div class="item" value="HK">Hong Kong</div>
                  <div class="item" value="HU">Hungary</div>
                  <div class="item" value="IS">Iceland</div>
                  <div class="item" value="IN">India</div>
                  <div class="item" value="ID">Indonesia</div>
                  <div class="item" value="IR">Iran, Islamic Republic of</div>
                  <div class="item" value="IQ">Iraq</div>
                  <div class="item" value="IE">Ireland</div>
                  <div class="item" value="IM">Isle of Man</div>
                  <div class="item" value="IL">Israel</div>
                  <div class="item" value="IT">Italy</div>
                  <div class="item" value="JM">Jamaica</div>
                  <div class="item" value="JP">Japan</div>
                  <div class="item" value="JE">Jersey</div>
                  <div class="item" value="JO">Jordan</div>
                  <div class="item" value="KZ">Kazakhstan</div>
                  <div class="item" value="KE">Kenya</div>
                  <div class="item" value="KI">Kiribati</div>
                  <div class="item" value="KP">Korea, Democratic People's Republic of</div>
                  <div class="item" value="KR">Korea, Republic of</div>
                  <div class="item" value="KW">Kuwait</div>
                  <div class="item" value="KG">Kyrgyzstan</div>
                  <div class="item" value="LA">Lao People's Democratic Republic</div>
                  <div class="item" value="LV">Latvia</div>
                  <div class="item" value="LB">Lebanon</div>
                  <div class="item" value="LS">Lesotho</div>
                  <div class="item" value="LR">Liberia</div>
                  <div class="item" value="LY">Libya</div>
                  <div class="item" value="LI">Liechtenstein</div>
                  <div class="item" value="LT">Lithuania</div>
                  <div class="item" value="LU">Luxembourg</div>
                  <div class="item" value="MO">Macao</div>
                  <div class="item" value="MK">Macedonia, the former Yugoslav Republic of</div>
                  <div class="item" value="MG">Madagascar</div>
                  <div class="item" value="MW">Malawi</div>
                  <div class="item" value="MY">Malaysia</div>
                  <div class="item" value="MV">Maldives</div>
                  <div class="item" value="ML">Mali</div>
                  <div class="item" value="MT">Malta</div>
                  <div class="item" value="MH">Marshall Islands</div>
                  <div class="item" value="MQ">Martinique</div>
                  <div class="item" value="MR">Mauritania</div>
                  <div class="item" value="MU">Mauritius</div>
                  <div class="item" value="YT">Mayotte</div>
                  <div class="item" value="MX">Mexico</div>
                  <div class="item" value="FM">Micronesia, Federated States of</div>
                  <div class="item" value="MD">Moldova, Republic of</div>
                  <div class="item" value="MC">Monaco</div>
                  <div class="item" value="MN">Mongolia</div>
                  <div class="item" value="ME">Montenegro</div>
                  <div class="item" value="MS">Montserrat</div>
                  <div class="item" value="MA">Morocco</div>
                  <div class="item" value="MZ">Mozambique</div>
                  <div class="item" value="MM">Myanmar</div>
                  <div class="item" value="NA">Namibia</div>
                  <div class="item" value="NR">Nauru</div>
                  <div class="item" value="NP">Nepal</div>
                  <div class="item" value="NL">Netherlands</div>
                  <div class="item" value="NC">New Caledonia</div>
                  <div class="item" value="NZ">New Zealand</div>
                  <div class="item" value="NI">Nicaragua</div>
                  <div class="item" value="NE">Niger</div>
                  <div class="item" value="NG">Nigeria</div>
                  <div class="item" value="NU">Niue</div>
                  <div class="item" value="NF">Norfolk Island</div>
                  <div class="item" value="MP">Northern Mariana Islands</div>
                  <div class="item" value="NO">Norway</div>
                  <div class="item" value="OM">Oman</div>
                  <div class="item" value="PK">Pakistan</div>
                  <div class="item" value="PW">Palau</div>
                  <div class="item" value="PS">Palestinian Territory, Occupied</div>
                  <div class="item" value="PA">Panama</div>
                  <div class="item" value="PG">Papua New Guinea</div>
                  <div class="item" value="PY">Paraguay</div>
                  <div class="item" value="PE">Peru</div>
                  <div class="item" value="PH">Philippines</div>
                  <div class="item" value="PN">Pitcairn</div>
                  <div class="item" value="PL">Poland</div>
                  <div class="item" value="PT">Portugal</div>
                  <div class="item" value="PR">Puerto Rico</div>
                  <div class="item" value="QA">Qatar</div>
                  <div class="item" value="RE">Réunion</div>
                  <div class="item" value="RO">Romania</div>
                  <div class="item" value="RU">Russian Federation</div>
                  <div class="item" value="RW">Rwanda</div>
                  <div class="item" value="BL">Saint Barthélemy</div>
                  <div class="item" value="SH">Saint Helena, Ascension and Tristan da Cunha</div>
                  <div class="item" value="KN">Saint Kitts and Nevis</div>
                  <div class="item" value="LC">Saint Lucia</div>
                  <div class="item" value="MF">Saint Martin (French part)</div>
                  <div class="item" value="PM">Saint Pierre and Miquelon</div>
                  <div class="item" value="VC">Saint Vincent and the Grenadines</div>
                  <div class="item" value="WS">Samoa</div>
                  <div class="item" value="SM">San Marino</div>
                  <div class="item" value="ST">Sao Tome and Principe</div>
                  <div class="item" value="SA">Saudi Arabia</div>
                  <div class="item" value="SN">Senegal</div>
                  <div class="item" value="RS">Serbia</div>
                  <div class="item" value="SC">Seychelles</div>
                  <div class="item" value="SL">Sierra Leone</div>
                  <div class="item" value="SG">Singapore</div>
                  <div class="item" value="SX">Sint Maarten (Dutch part)</div>
                  <div class="item" value="SK">Slovakia</div>
                  <div class="item" value="SI">Slovenia</div>
                  <div class="item" value="SB">Solomon Islands</div>
                  <div class="item" value="SO">Somalia</div>
                  <div class="item" value="ZA">South Africa</div>
                  <div class="item" value="GS">South Georgia and the South Sandwich Islands</div>
                  <div class="item" value="SS">South Sudan</div>
                  <div class="item" value="ES">Spain</div>
                  <div class="item" value="LK">Sri Lanka</div>
                  <div class="item" value="SD">Sudan</div>
                  <div class="item" value="SR">Suriname</div>
                  <div class="item" value="SJ">Svalbard and Jan Mayen</div>
                  <div class="item" value="SZ">Swaziland</div>
                  <div class="item" value="SE">Sweden</div>
                  <div class="item" value="CH">Switzerland</div>
                  <div class="item" value="SY">Syrian Arab Republic</div>
                  <div class="item" value="TW">Taiwan, Province of China</div>
                  <div class="item" value="TJ">Tajikistan</div>
                  <div class="item" value="TZ">Tanzania, United Republic of</div>
                  <div class="item" value="TH">Thailand</div>
                  <div class="item" value="TL">Timor-Leste</div>
                  <div class="item" value="TG">Togo</div>
                  <div class="item" value="TK">Tokelau</div>
                  <div class="item" value="TO">Tonga</div>
                  <div class="item" value="TT">Trinidad and Tobago</div>
                  <div class="item" value="TN">Tunisia</div>
                  <div class="item" value="TR">Turkey</div>
                  <div class="item" value="TM">Turkmenistan</div>
                  <div class="item" value="TC">Turks and Caicos Islands</div>
                  <div class="item" value="TV">Tuvalu</div>
                  <div class="item" value="UG">Uganda</div>
                  <div class="item" value="UA">Ukraine</div>
                  <div class="item" value="AE">United Arab Emirates</div>
                  <div class="item" value="GB">United Kingdom</div>
                  <div class="item" value="US">United States</div>
                  <div class="item" value="UM">United States Minor Outlying Islands</div>
                  <div class="item" value="UY">Uruguay</div>
                  <div class="item" value="UZ">Uzbekistan</div>
                  <div class="item" value="VU">Vanuatu</div>
                  <div class="item" value="VE">Venezuela, Bolivarian Republic of</div>
                  <div class="item" value="VN">Viet Nam</div>
                  <div class="item" value="VG">Virgin Islands, British</div>
                  <div class="item" value="VI">Virgin Islands, U.S.</div>
                  <div class="item" value="WF">Wallis and Futuna</div>
                  <div class="item" value="EH">Western Sahara</div>
                  <div class="item" value="YE">Yemen</div>
                  <div class="item" value="ZM">Zambia</div>
                  <div class="item" value="ZW">Zimbabwe</div>
                </div>
            </div>
          </div>
        </div> 
      </div>
    </div>
    <div class="ui vertical padded segment">
      <h5 class="ui header"><i class="icon setting"></i> Store Settings</h5>
      <div class="ui divider"></div>
     <!-- Segment 3 - Card 3 !-->
      <div class="ui bottom attached">
        <!-- Form Content Starts -->
        <div class="two fields">
          <div class="field">
            <label>Currency</label>
            <input type="text" name="currency" placeholder="Currency">
          </div>
          <div class="field">
            <label>Round Off</label>
            <div class="ui selection dropdown">
              <input type="hidden" name="round_off">
              <i class="dropdown icon"></i>
              <div class="default text">Select</div>
              <div class="menu">
                  <div class="item" data-value="0.05">0.05</div>
                  <div class="item" data-value="0.10">0.10</div>
                  <div class="item" data-value="0.25">0.25</div>
                  <div class="item" data-value="0.50">0.50</div>
                  <div class="item" data-value="1.00">1.00</div>
              </div>
            </div>
         </div>
        </div>

        <div class="field">
          <label>Timezone</label>
          <div class="ui selection dropdown">
          <input type="hidden" name="timezone">
            <i class="dropdown icon"></i>
            <div class="default text">Select</div>
            <div class="menu">
              <div class="item" timeZoneId="1" gmtAdjustment="GMT-12:00" useDaylightTime="0" value="-12">(GMT-12:00) International Date Line West</div>
              <div class="item" timeZoneId="2" gmtAdjustment="GMT-11:00" useDaylightTime="0" value="-11">(GMT-11:00) Midway Island, Samoa</div>
              <div class="item" timeZoneId="3" gmtAdjustment="GMT-10:00" useDaylightTime="0" value="-10">(GMT-10:00) Hawaii</div>
              <div class="item" timeZoneId="4" gmtAdjustment="GMT-09:00" useDaylightTime="1" value="-9">(GMT-09:00) Alaska</div>
              <div class="item" timeZoneId="5" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Pacific Time (US &amp; Canada)</div>
              <div class="item" timeZoneId="6" gmtAdjustment="GMT-08:00" useDaylightTime="1" value="-8">(GMT-08:00) Tijuana, Baja California</div>
              <div class="item" timeZoneId="7" gmtAdjustment="GMT-07:00" useDaylightTime="0" value="-7">(GMT-07:00) Arizona</div>
              <div class="item" timeZoneId="8" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Chihuahua, La Paz, Mazatlan</div>
              <div class="item" timeZoneId="9" gmtAdjustment="GMT-07:00" useDaylightTime="1" value="-7">(GMT-07:00) Mountain Time (US &amp; Canada)</div>
              <div class="item" timeZoneId="10" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Central America</div>
              <div class="item" timeZoneId="11" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Central Time (US &amp; Canada)</div>
              <div class="item" timeZoneId="12" gmtAdjustment="GMT-06:00" useDaylightTime="1" value="-6">(GMT-06:00) Guadalajara, Mexico City, Monterrey</div>
              <div class="item" timeZoneId="13" gmtAdjustment="GMT-06:00" useDaylightTime="0" value="-6">(GMT-06:00) Saskatchewan</div>
              <div class="item" timeZoneId="14" gmtAdjustment="GMT-05:00" useDaylightTime="0" value="-5">(GMT-05:00) Bogota, Lima, Quito, Rio Branco</div>
              <div class="item" timeZoneId="15" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Eastern Time (US &amp; Canada)</div>
              <div class="item" timeZoneId="16" gmtAdjustment="GMT-05:00" useDaylightTime="1" value="-5">(GMT-05:00) Indiana (East)</div>
              <div class="item" timeZoneId="17" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Atlantic Time (Canada)</div>
              <div class="item" timeZoneId="18" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Caracas, La Paz</div>
              <div class="item" timeZoneId="19" gmtAdjustment="GMT-04:00" useDaylightTime="0" value="-4">(GMT-04:00) Manaus</div>
              <div class="item" timeZoneId="20" gmtAdjustment="GMT-04:00" useDaylightTime="1" value="-4">(GMT-04:00) Santiago</div>
              <div class="item" timeZoneId="21" gmtAdjustment="GMT-03:30" useDaylightTime="1" value="-3.5">(GMT-03:30) Newfoundland</div>
              <div class="item" timeZoneId="22" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Brasilia</div>
              <div class="item" timeZoneId="23" gmtAdjustment="GMT-03:00" useDaylightTime="0" value="-3">(GMT-03:00) Buenos Aires, Georgetown</div>
              <div class="item" timeZoneId="24" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Greenland</div>
              <div class="item" timeZoneId="25" gmtAdjustment="GMT-03:00" useDaylightTime="1" value="-3">(GMT-03:00) Montevideo</div>
              <div class="item" timeZoneId="26" gmtAdjustment="GMT-02:00" useDaylightTime="1" value="-2">(GMT-02:00) Mid-Atlantic</div>
              <div class="item" timeZoneId="27" gmtAdjustment="GMT-01:00" useDaylightTime="0" value="-1">(GMT-01:00) Cape Verde Is.</div>
              <div class="item" timeZoneId="28" gmtAdjustment="GMT-01:00" useDaylightTime="1" value="-1">(GMT-01:00) Azores</div>
              <div class="item" timeZoneId="29" gmtAdjustment="GMT+00:00" useDaylightTime="0" value="0">(GMT+00:00) Casablanca, Monrovia, Reykjavik</div>
              <div class="item" timeZoneId="30" gmtAdjustment="GMT+00:00" useDaylightTime="1" value="0">(GMT+00:00) Greenwich Mean Time : Dublin, Edinburgh, Lisbon, London</div>
              <div class="item" timeZoneId="31" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Amsterdam, Berlin, Bern, Rome, Stockholm, Vienna</div>
              <div class="item" timeZoneId="32" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Belgrade, Bratislava, Budapest, Ljubljana, Prague</div>
              <div class="item" timeZoneId="33" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Brussels, Copenhagen, Madrid, Paris</div>
              <div class="item" timeZoneId="34" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) Sarajevo, Skopje, Warsaw, Zagreb</div>
              <div class="item" timeZoneId="35" gmtAdjustment="GMT+01:00" useDaylightTime="1" value="1">(GMT+01:00) West Central Africa</div>
              <div class="item" timeZoneId="36" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Amman</div>
              <div class="item" timeZoneId="37" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Athens, Bucharest, Istanbul</div>
              <div class="item" timeZoneId="38" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Beirut</div>
              <div class="item" timeZoneId="39" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Cairo</div>
              <div class="item" timeZoneId="40" gmtAdjustment="GMT+02:00" useDaylightTime="0" value="2">(GMT+02:00) Harare, Pretoria</div>
              <div class="item" timeZoneId="41" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Helsinki, Kyiv, Riga, Sofia, Tallinn, Vilnius</div>
              <div class="item" timeZoneId="42" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Jerusalem</div>
              <div class="item" timeZoneId="43" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Minsk</div>
              <div class="item" timeZoneId="44" gmtAdjustment="GMT+02:00" useDaylightTime="1" value="2">(GMT+02:00) Windhoek</div>
              <div class="item" timeZoneId="45" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Kuwait, Riyadh, Baghdad</div>
              <div class="item" timeZoneId="46" gmtAdjustment="GMT+03:00" useDaylightTime="1" value="3">(GMT+03:00) Moscow, St. Petersburg, Volgograd</div>
              <div class="item" timeZoneId="47" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Nairobi</div>
              <div class="item" timeZoneId="48" gmtAdjustment="GMT+03:00" useDaylightTime="0" value="3">(GMT+03:00) Tbilisi</div>
              <div class="item" timeZoneId="49" gmtAdjustment="GMT+03:30" useDaylightTime="1" value="3.5">(GMT+03:30) Tehran</div>
              <div class="item" timeZoneId="50" gmtAdjustment="GMT+04:00" useDaylightTime="0" value="4">(GMT+04:00) Abu Dhabi, Muscat</div>
              <div class="item" timeZoneId="51" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Baku</div>
              <div class="item" timeZoneId="52" gmtAdjustment="GMT+04:00" useDaylightTime="1" value="4">(GMT+04:00) Yerevan</div>
              <div class="item" timeZoneId="53" gmtAdjustment="GMT+04:30" useDaylightTime="0" value="4.5">(GMT+04:30) Kabul</div>
              <div class="item" timeZoneId="54" gmtAdjustment="GMT+05:00" useDaylightTime="1" value="5">(GMT+05:00) Yekaterinburg</div>
              <div class="item" timeZoneId="55" gmtAdjustment="GMT+05:00" useDaylightTime="0" value="5">(GMT+05:00) Islamabad, Karachi, Tashkent</div>
              <div class="item" timeZoneId="56" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Sri Jayawardenapura</div>
              <div class="item" timeZoneId="57" gmtAdjustment="GMT+05:30" useDaylightTime="0" value="5.5">(GMT+05:30) Chennai, Kolkata, Mumbai, New Delhi</div>
              <div class="item" timeZoneId="58" gmtAdjustment="GMT+05:45" useDaylightTime="0" value="5.75">(GMT+05:45) Kathmandu</div>
              <div class="item" timeZoneId="59" gmtAdjustment="GMT+06:00" useDaylightTime="1" value="6">(GMT+06:00) Almaty, Novosibirsk</div>
              <div class="item" timeZoneId="60" gmtAdjustment="GMT+06:00" useDaylightTime="0" value="6">(GMT+06:00) Astana, Dhaka</div>
              <div class="item" timeZoneId="61" gmtAdjustment="GMT+06:30" useDaylightTime="0" value="6.5">(GMT+06:30) Yangon (Rangoon)</div>
              <div class="item" timeZoneId="62" gmtAdjustment="GMT+07:00" useDaylightTime="0" value="7">(GMT+07:00) Bangkok, Hanoi, Jakarta</div>
              <div class="item" timeZoneId="63" gmtAdjustment="GMT+07:00" useDaylightTime="1" value="7">(GMT+07:00) Krasnoyarsk</div>
              <div class="item" timeZoneId="64" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Beijing, Chongqing, Hong Kong, Urumqi</div>
              <div class="item" timeZoneId="65" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Kuala Lumpur, Singapore</div>
              <div class="item" timeZoneId="66" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Irkutsk, Ulaan Bataar</div>
              <div class="item" timeZoneId="67" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Perth</div>
              <div class="item" timeZoneId="68" gmtAdjustment="GMT+08:00" useDaylightTime="0" value="8">(GMT+08:00) Taipei</div>
              <div class="item" timeZoneId="69" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Osaka, Sapporo, Tokyo</div>
              <div class="item" timeZoneId="70" gmtAdjustment="GMT+09:00" useDaylightTime="0" value="9">(GMT+09:00) Seoul</div>
              <div class="item" timeZoneId="71" gmtAdjustment="GMT+09:00" useDaylightTime="1" value="9">(GMT+09:00) Yakutsk</div>
              <div class="item" timeZoneId="72" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Adelaide</div>
              <div class="item" timeZoneId="73" gmtAdjustment="GMT+09:30" useDaylightTime="0" value="9.5">(GMT+09:30) Darwin</div>
              <div class="item" timeZoneId="74" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Brisbane</div>
              <div class="item" timeZoneId="75" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Canberra, Melbourne, Sydney</div>
              <div class="item" timeZoneId="76" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Hobart</div>
              <div class="item" timeZoneId="77" gmtAdjustment="GMT+10:00" useDaylightTime="0" value="10">(GMT+10:00) Guam, Port Moresby</div>
              <div class="item" timeZoneId="78" gmtAdjustment="GMT+10:00" useDaylightTime="1" value="10">(GMT+10:00) Vladivostok</div>
              <div class="item" timeZoneId="79" gmtAdjustment="GMT+11:00" useDaylightTime="1" value="11">(GMT+11:00) Magadan, Solomon Is., New Caledonia</div>
              <div class="item" timeZoneId="80" gmtAdjustment="GMT+12:00" useDaylightTime="1" value="12">(GMT+12:00) Auckland, Wellington</div>
              <div class="item" timeZoneId="81" gmtAdjustment="GMT+12:00" useDaylightTime="0" value="12">(GMT+12:00) Fiji, Kamchatka, Marshall Is.</div>
              <div class="item" timeZoneId="82" gmtAdjustment="GMT+13:00" useDaylightTime="0" value="13">(GMT+13:00) Nuku'alofa</div>
            </div>
          </div>
        </div>

        <div class="field">
          <label>Maps</label>
            <div id="map"></div>
        </div>

        <div class="inline field">
          <div class="ui toggle checkbox">
            <input type="checkbox" tabindex="0" class="hidden">
            <label>Status (Enable or Disable the Store)</label>
          </div>
        </div>
      </div>
    </div>
    <div class="ui vertical padded segment">
     <h5 class="ui header"><i class="icon options"></i> Advance Settings</h5>
     <div class="ui divider"></div>
     <div class="ui bottom attached">
        <div class="content">
          <div class="header">Metadata</div>
          <div class="description">
            <div class="field">
              <label>Enter Valid JSON data. (Optional)</label>
                <div class="sixteen wide field">
                  <textarea type="textarea" name="description" placeholder="Description" rows="5"></textarea>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!--Form Ends -->
  </form>


    <div class="ui row stackable grid">
      <div class="right aligned column">
        <button class="ui primary button">
            Save
        </button>
        <button class="ui button">
            Discard
        </button>
      </div>
    </div>
  <!--Container Tag Div !-->
</div>

</div>
<!-- End Body Content -->

@stop