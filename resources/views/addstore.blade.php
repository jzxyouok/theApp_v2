@extends('layouts.master')

@section('h')
<style>
    #map {
        height: 300px;
    }

</style>

<script type="text/javascript">
    $(document).ready(function() {
        $('.dropdown').dropdown();
        $('.ui.checkbox').checkbox();
    });
</script>
@section('b')

@endsection


<div class="ui container">
  <!--Form Begins -->
  <form class="ui big form">
    <!-- Cards Main Container !-->
    <div class="ui cards">
      
      <!-- Card 1 !-->
      <div class="ui fluid blue card">        
          <div class="extra content" style="background:#ccc">
            <span class="header"><i class="icon shop"></i> Store Details</span>
          </div>
        <div class="content">
          <div class="description">
          <!-- Form Begins -->
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
            <!-- Form Ends -->
          </div>
        </div>
      </div>
    </div>

    <!-- Card 2 !-->
    <div class="ui cards">

      <div class="ui fluid orange card">        
          <div class="extra content" style="background:#ccc">
            <span class="header"><i class="icon map"></i> Store Address</span>
          </div>
        <div class="content">
          <div class="description">
          <!-- Form Content Begins -->
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
                <input type="text" name="country" placeholder="Country">
              </div>
            </div>
          <!-- Form Content Ends -->
          </div>
        </div>
      </div>
    </div>

    <!-- Card 3 !-->
    <div class="ui cards">
      <div class="ui fluid red card">        
          <div class="extra content" style="background:#ccc">
            <span class="header"><i class="icon setting"></i> Store Settings</span>
          </div>
        <div class="content">
          <div class="description">
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
              <input type="hidden" name="round_off">
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
                <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCZlTGim-J1tXxaa6E3F9YfLEtNPBnK9Ng&callback=initMap"></script>
                  <script>
                      var map;
                      function initMap() {
                        map = new google.maps.Map(document.getElementById('map'), {
                          center: {lat: -34.397, lng: 150.644},
                          zoom: 8
                        });
                      }
                  </script>
            </div>

            <div class="inline field">
              <div class="ui toggle checkbox">
                <input type="checkbox" tabindex="0" class="hidden">
                <label>Status</label>
              </div>
            </div>

            <!-- Form Content Ends -->
          </div>
        </div>
      </div>
    </div>

    <!-- Card 4 !-->
    <div class="ui cards">
      <div class="ui fluid green card">        
          <div class="extra content" style="background:#ccc">
            <span class="header"><i class="icon options"></i> Advance Settings</span>
          </div>
        <div class="content">
          <div class="description">
            <div class="field">
              <label>Description</label>
                <div class="sixteen wide field">
                  <textarea type="textarea" name="description" placeholder="Description" rows="3"></textarea>
                </div>
            </div>
          </div>
        </div>
      </div>
    </div>

  <!--Form Ends -->
  </form>


  <div class="ui row grid">
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

@stop