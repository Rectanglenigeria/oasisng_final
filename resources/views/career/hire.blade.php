@extends('layouts.landing-page2')

@section('content')
       
       <!--=========body========-->






                <div class="neer-inner-header-section " style="background-image:url({{asset('wp-content/uploads/2017/09/welcome-section-bg2.jpg')}});">
                            <div class="container">
                    <div class="neer_section_header neer_section_header_lite neer_header_with_header_top">
                                                 
                                                <div class="neer_section_data">
                                                                                                <h2>Work with OASIS</h2>
                                                                                                                </div>

                        <div class="neer-breadcrumbs">
                            <a href="http://wp.pixiefy.com/neer-demo">Home</a>  Career                  </div>
                    </div>
                </div>
                    </div>
    

    
    <div class="neer-single-page-wrap clearfix">
        <div class="container neer-all-sections">
            <div class="neer-single-page-wrapper clearfix">
                <p> <style type="text/css">
    .neer-background-overlay-5ac60b2685ebb{
        position: relative;
        background-position: right top !important;
    }
        
    </style>


<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60b2685ebb vc_custom_1505223687567 vc_default" style="text-align: left;">

    <div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-4">


    <div class="vc_column-inner vc_custom_1507968143011">

        <div class="wpb_wrapper"> 

        <br><br><br>       

  <div class="neer_info_lists clearfix">
            <ul>
                                    <li>
                                                    <div class="neer_info_list_icon">
                                <i class="fa fa-user"></i>
                            </div>
                                                <div class="neer_info_list_data">

                            <h6>Submit job application</h6>
                            <p>Discover the impact you could make with a career at Oasis.</p>
                        </div>
                        
                    </li>
                            </ul>
        </div>
    
        
        </div>


    </div>

</div>

<div class="wpb_column vc_column_container vc_col-sm-6 vc_col-md-8 vc_col-has-fill">
    <div class="vc_column-inner vc_custom_1507968163816">

    <div class="wpb_wrapper"> 
    <br> 

     @if(Session::has('notification'))
                             <br>
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif


      <div class="neer_heading_title neer_heading_title_5ac60b2686aa8">
                            
            <h2 style="font-size: 22px;color: #333333;">Get started here</h2>
        </div>
                <style>
            .neer_heading_title_5ac60b2686aa8 h2:after{
                content: "";
                height: 1px;
                width: 84px;
                display: block;
                margin-top: 10px;
            }
        </style>
    
                        




<!--from contact-->

<!--from contact-->




                        <div class="neer_main_contact_form">
                <div role="form" class="wpcf7" id="wpcf7-f1938-p2599-o1" lang="en-US" dir="ltr">


                @if(Session::has('notification'))
                             
          <p class="alert alert-success alert-sm alert-dismissable">{{Session::get('notification')}}</p>
        @endif




<form action="{{route('career.create.submit')}}" method="post" class="wpcf7-form" novalidate="novalidate" enctype="multipart/form-data">

    {{ csrf_field() }}


<div class="neer-banner-contact-form">


<div class="neer-single-banner-form{{ $errors->has('firstname') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap text-793">
        <input type="text" name="firstname" value="{{old('firstname')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your firstname" />
    </span>

    @if ($errors->has('firstname'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('firstname') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('othername') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap email-711">
        <input type="text"  name="othername" value="{{old('firstname')}}"  size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Your othernames" />
    </span>

     @if ($errors->has('othername'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('othername') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('phone') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap text-793">
        <input type="number" name="phone" value="{{old('phone')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your phone number" />
    </span>

     @if ($errors->has('phone'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('phone') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('email') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap email-711">
        <input type="email" name="email" value="{{old('email')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required wpcf7-validates-as-email" aria-required="true" aria-invalid="false" placeholder="Email.." />
    </span>

    @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
</div>



<div class="neer-single-banner-form{{ $errors->has('age') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap text-793">
        <input type="number" name="age" value="{{old('age')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your age" />
    </span>

     @if ($errors->has('age'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('age') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('sex') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap email-711">

        <select name="sex" size="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your sex">
            <option selected="selected" disabled="disabled">Sex</option>
            <option value="male">Male</option>
            <option value="female">Female</option>
        </select>

    </span>

    @if ($errors->has('sex'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('sex') }}</strong>
                                    </span>
                                @endif
</div>



<div class="neer-single-banner-form{{ $errors->has('address') ? ' has-error' : '' }}">
    <label style="text-align: left;">Address</label>
    <span class="wpcf7-form-control-wrap text-793">
        <textarea name="address" size="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your address">
            {{old('address')}}
        </textarea>
    </span>

     @if ($errors->has('address'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('address') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('country') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap email-711">

        <select name="country" size="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required" aria-required="true" aria-invalid="false">
            <option selected="selected" disabled="disabled">Select your country</option>
            <option value="United States">United States</option> 
    <option value="United Kingdom">United Kingdom</option> 
    <option value="Afghanistan">Afghanistan</option> 
    <option value="Albania">Albania</option> 
    <option value="Algeria">Algeria</option> 
    <option value="American Samoa">American Samoa</option> 
    <option value="Andorra">Andorra</option> 
    <option value="Angola">Angola</option> 
    <option value="Anguilla">Anguilla</option> 
    <option value="Antarctica">Antarctica</option> 
    <option value="Antigua and Barbuda">Antigua and Barbuda</option> 
    <option value="Argentina">Argentina</option> 
    <option value="Armenia">Armenia</option> 
    <option value="Aruba">Aruba</option> 
    <option value="Australia">Australia</option> 
    <option value="Austria">Austria</option> 
    <option value="Azerbaijan">Azerbaijan</option> 
    <option value="Bahamas">Bahamas</option> 
    <option value="Bahrain">Bahrain</option> 
    <option value="Bangladesh">Bangladesh</option> 
    <option value="Barbados">Barbados</option> 
    <option value="Belarus">Belarus</option> 
    <option value="Belgium">Belgium</option> 
    <option value="Belize">Belize</option> 
    <option value="Benin">Benin</option> 
    <option value="Bermuda">Bermuda</option> 
    <option value="Bhutan">Bhutan</option> 
    <option value="Bolivia">Bolivia</option> 
    <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option> 
    <option value="Botswana">Botswana</option> 
    <option value="Bouvet Island">Bouvet Island</option> 
    <option value="Brazil">Brazil</option> 
    <option value="British Indian Ocean Territory">British Indian Ocean Territory</option> 
    <option value="Brunei Darussalam">Brunei Darussalam</option> 
    <option value="Bulgaria">Bulgaria</option> 
    <option value="Burkina Faso">Burkina Faso</option> 
    <option value="Burundi">Burundi</option> 
    <option value="Cambodia">Cambodia</option> 
    <option value="Cameroon">Cameroon</option> 
    <option value="Canada">Canada</option> 
    <option value="Cape Verde">Cape Verde</option> 
    <option value="Cayman Islands">Cayman Islands</option> 
    <option value="Central African Republic">Central African Republic</option> 
    <option value="Chad">Chad</option> 
    <option value="Chile">Chile</option> 
    <option value="China">China</option> 
    <option value="Christmas Island">Christmas Island</option> 
    <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option> 
    <option value="Colombia">Colombia</option> 
    <option value="Comoros">Comoros</option> 
    <option value="Congo">Congo</option> 
    <option value="Congo, The Democratic Republic of The">Congo, The Democratic Republic of The</option> 
    <option value="Cook Islands">Cook Islands</option> 
    <option value="Costa Rica">Costa Rica</option> 
    <option value="Cote D'ivoire">Cote D'ivoire</option> 
    <option value="Croatia">Croatia</option> 
    <option value="Cuba">Cuba</option> 
    <option value="Cyprus">Cyprus</option> 
    <option value="Czech Republic">Czech Republic</option> 
    <option value="Denmark">Denmark</option> 
    <option value="Djibouti">Djibouti</option> 
    <option value="Dominica">Dominica</option> 
    <option value="Dominican Republic">Dominican Republic</option> 
    <option value="Ecuador">Ecuador</option> 
    <option value="Egypt">Egypt</option> 
    <option value="El Salvador">El Salvador</option> 
    <option value="Equatorial Guinea">Equatorial Guinea</option> 
    <option value="Eritrea">Eritrea</option> 
    <option value="Estonia">Estonia</option> 
    <option value="Ethiopia">Ethiopia</option> 
    <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option> 
    <option value="Faroe Islands">Faroe Islands</option> 
    <option value="Fiji">Fiji</option> 
    <option value="Finland">Finland</option> 
    <option value="France">France</option> 
    <option value="French Guiana">French Guiana</option> 
    <option value="French Polynesia">French Polynesia</option> 
    <option value="French Southern Territories">French Southern Territories</option> 
    <option value="Gabon">Gabon</option> 
    <option value="Gambia">Gambia</option> 
    <option value="Georgia">Georgia</option> 
    <option value="Germany">Germany</option> 
    <option value="Ghana">Ghana</option> 
    <option value="Gibraltar">Gibraltar</option> 
    <option value="Greece">Greece</option> 
    <option value="Greenland">Greenland</option> 
    <option value="Grenada">Grenada</option> 
    <option value="Guadeloupe">Guadeloupe</option> 
    <option value="Guam">Guam</option> 
    <option value="Guatemala">Guatemala</option> 
    <option value="Guinea">Guinea</option> 
    <option value="Guinea-bissau">Guinea-bissau</option> 
    <option value="Guyana">Guyana</option> 
    <option value="Haiti">Haiti</option> 
    <option value="Heard Island and Mcdonald Islands">Heard Island and Mcdonald Islands</option> 
    <option value="Holy See (Vatican City State)">Holy See (Vatican City State)</option> 
    <option value="Honduras">Honduras</option> 
    <option value="Hong Kong">Hong Kong</option> 
    <option value="Hungary">Hungary</option> 
    <option value="Iceland">Iceland</option> 
    <option value="India">India</option> 
    <option value="Indonesia">Indonesia</option> 
    <option value="Iran, Islamic Republic of">Iran, Islamic Republic of</option> 
    <option value="Iraq">Iraq</option> 
    <option value="Ireland">Ireland</option> 
    <option value="Israel">Israel</option> 
    <option value="Italy">Italy</option> 
    <option value="Jamaica">Jamaica</option> 
    <option value="Japan">Japan</option> 
    <option value="Jordan">Jordan</option> 
    <option value="Kazakhstan">Kazakhstan</option> 
    <option value="Kenya">Kenya</option> 
    <option value="Kiribati">Kiribati</option> 
    <option value="Korea, Democratic People's Republic of">Korea, Democratic People's Republic of</option> 
    <option value="Korea, Republic of">Korea, Republic of</option> 
    <option value="Kuwait">Kuwait</option> 
    <option value="Kyrgyzstan">Kyrgyzstan</option> 
    <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option> 
    <option value="Latvia">Latvia</option> 
    <option value="Lebanon">Lebanon</option> 
    <option value="Lesotho">Lesotho</option> 
    <option value="Liberia">Liberia</option> 
    <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option> 
    <option value="Liechtenstein">Liechtenstein</option> 
    <option value="Lithuania">Lithuania</option> 
    <option value="Luxembourg">Luxembourg</option> 
    <option value="Macao">Macao</option> 
    <option value="Macedonia, The Former Yugoslav Republic of">Macedonia, The Former Yugoslav Republic of</option> 
    <option value="Madagascar">Madagascar</option> 
    <option value="Malawi">Malawi</option> 
    <option value="Malaysia">Malaysia</option> 
    <option value="Maldives">Maldives</option> 
    <option value="Mali">Mali</option> 
    <option value="Malta">Malta</option> 
    <option value="Marshall Islands">Marshall Islands</option> 
    <option value="Martinique">Martinique</option> 
    <option value="Mauritania">Mauritania</option> 
    <option value="Mauritius">Mauritius</option> 
    <option value="Mayotte">Mayotte</option> 
    <option value="Mexico">Mexico</option> 
    <option value="Micronesia, Federated States of">Micronesia, Federated States of</option> 
    <option value="Moldova, Republic of">Moldova, Republic of</option> 
    <option value="Monaco">Monaco</option> 
    <option value="Mongolia">Mongolia</option> 
    <option value="Montserrat">Montserrat</option> 
    <option value="Morocco">Morocco</option> 
    <option value="Mozambique">Mozambique</option> 
    <option value="Myanmar">Myanmar</option> 
    <option value="Namibia">Namibia</option> 
    <option value="Nauru">Nauru</option> 
    <option value="Nepal">Nepal</option> 
    <option value="Netherlands">Netherlands</option> 
    <option value="Netherlands Antilles">Netherlands Antilles</option> 
    <option value="New Caledonia">New Caledonia</option> 
    <option value="New Zealand">New Zealand</option> 
    <option value="Nicaragua">Nicaragua</option> 
    <option value="Niger">Niger</option> 
    <option value="Nigeria">Nigeria</option> 
    <option value="Niue">Niue</option> 
    <option value="Norfolk Island">Norfolk Island</option> 
    <option value="Northern Mariana Islands">Northern Mariana Islands</option> 
    <option value="Norway">Norway</option> 
    <option value="Oman">Oman</option> 
    <option value="Pakistan">Pakistan</option> 
    <option value="Palau">Palau</option> 
    <option value="Palestinian Territory, Occupied">Palestinian Territory, Occupied</option> 
    <option value="Panama">Panama</option> 
    <option value="Papua New Guinea">Papua New Guinea</option> 
    <option value="Paraguay">Paraguay</option> 
    <option value="Peru">Peru</option> 
    <option value="Philippines">Philippines</option> 
    <option value="Pitcairn">Pitcairn</option> 
    <option value="Poland">Poland</option> 
    <option value="Portugal">Portugal</option> 
    <option value="Puerto Rico">Puerto Rico</option> 
    <option value="Qatar">Qatar</option> 
    <option value="Reunion">Reunion</option> 
    <option value="Romania">Romania</option> 
    <option value="Russian Federation">Russian Federation</option> 
    <option value="Rwanda">Rwanda</option> 
    <option value="Saint Helena">Saint Helena</option> 
    <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option> 
    <option value="Saint Lucia">Saint Lucia</option> 
    <option value="Saint Pierre and Miquelon">Saint Pierre and Miquelon</option> 
    <option value="Saint Vincent and The Grenadines">Saint Vincent and The Grenadines</option> 
    <option value="Samoa">Samoa</option> 
    <option value="San Marino">San Marino</option> 
    <option value="Sao Tome and Principe">Sao Tome and Principe</option> 
    <option value="Saudi Arabia">Saudi Arabia</option> 
    <option value="Senegal">Senegal</option> 
    <option value="Serbia and Montenegro">Serbia and Montenegro</option> 
    <option value="Seychelles">Seychelles</option> 
    <option value="Sierra Leone">Sierra Leone</option> 
    <option value="Singapore">Singapore</option> 
    <option value="Slovakia">Slovakia</option> 
    <option value="Slovenia">Slovenia</option> 
    <option value="Solomon Islands">Solomon Islands</option> 
    <option value="Somalia">Somalia</option> 
    <option value="South Africa">South Africa</option> 
    <option value="South Georgia and The South Sandwich Islands">South Georgia and The South Sandwich Islands</option> 
    <option value="Spain">Spain</option> 
    <option value="Sri Lanka">Sri Lanka</option> 
    <option value="Sudan">Sudan</option> 
    <option value="Suriname">Suriname</option> 
    <option value="Svalbard and Jan Mayen">Svalbard and Jan Mayen</option> 
    <option value="Swaziland">Swaziland</option> 
    <option value="Sweden">Sweden</option> 
    <option value="Switzerland">Switzerland</option> 
    <option value="Syrian Arab Republic">Syrian Arab Republic</option> 
    <option value="Taiwan, Province of China">Taiwan, Province of China</option> 
    <option value="Tajikistan">Tajikistan</option> 
    <option value="Tanzania, United Republic of">Tanzania, United Republic of</option> 
    <option value="Thailand">Thailand</option> 
    <option value="Timor-leste">Timor-leste</option> 
    <option value="Togo">Togo</option> 
    <option value="Tokelau">Tokelau</option> 
    <option value="Tonga">Tonga</option> 
    <option value="Trinidad and Tobago">Trinidad and Tobago</option> 
    <option value="Tunisia">Tunisia</option> 
    <option value="Turkey">Turkey</option> 
    <option value="Turkmenistan">Turkmenistan</option> 
    <option value="Turks and Caicos Islands">Turks and Caicos Islands</option> 
    <option value="Tuvalu">Tuvalu</option> 
    <option value="Uganda">Uganda</option> 
    <option value="Ukraine">Ukraine</option> 
    <option value="United Arab Emirates">United Arab Emirates</option> 
    <option value="United Kingdom">United Kingdom</option> 
    <option value="United States">United States</option> 
    <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option> 
    <option value="Uruguay">Uruguay</option> 
    <option value="Uzbekistan">Uzbekistan</option> 
    <option value="Vanuatu">Vanuatu</option> 
    <option value="Venezuela">Venezuela</option> 
    <option value="Viet Nam">Viet Nam</option> 
    <option value="Virgin Islands, British">Virgin Islands, British</option> 
    <option value="Virgin Islands, U.S.">Virgin Islands, U.S.</option> 
    <option value="Wallis and Futuna">Wallis and Futuna</option> 
    <option value="Western Sahara">Western Sahara</option> 
    <option value="Yemen">Yemen</option> 
    <option value="Zambia">Zambia</option> 
    <option value="Zimbabwe">Zimbabwe</option>
        </select>

    </span>

    @if ($errors->has('country'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('country')}}</strong>
                                    </span>
                                @endif
</div>



<div class="neer-single-banner-form{{ $errors->has('role') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap email-711">

        <select name="role" size="" class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-required" aria-required="true" aria-invalid="false">

            <option selected="selected" disabled="disabled">Select position</option>

             @foreach($Roles as $Role)

                                    <option value="{{$Role->id}}">{{$Role->name}}</option>

                                    @endforeach
           
        </select>

    </span>

    @if ($errors->has('role'))
                                    <span class="help-block">
                                        <strong>{{$errors->first('role')}}</strong>
                                    </span>
                                @endif
</div>



<div class="neer-single-banner-form{{ $errors->has('reason') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap text-793">
        <label style="text-align: left;">Why do you want the position?</label>
        <textarea name="reason" size="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Your address">
            {{old('reason')}} reason
        </textarea>
    </span>

     @if ($errors->has('reason'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('reason') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('about') ? ' has-error' : '' }}">
    <label style="text-align: left;">Describe yourself in five(5) lines</label>
    <span class="wpcf7-form-control-wrap text-793">
        <textarea name="about" size="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="">
            {{old('about')}} about
        </textarea>
    </span>

     @if ($errors->has('about'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('about') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('interview') ? ' has-error' : '' }}">
    <label>If we want to interview you, what are the best days/time for you?</label>
    <span class="wpcf7-form-control-wrap text-793">
        <textarea name="interview" size="5" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="">
            {{old('interview')}}
        </textarea>
    </span>

     @if ($errors->has('interview'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('interview') }}</strong>
                                    </span>
                                @endif
</div>


<div class="neer-single-banner-form{{ $errors->has('file') ? ' has-error' : '' }}">
    <span class="wpcf7-form-control-wrap text-793">
         <input type="file" name="file" value="{{old('file')}}" size="40" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" aria-required="true" aria-invalid="false" placeholder="Upload your resume" />
    </span>

     @if ($errors->has('file'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('file') }}</strong>
                                    </span>
                                @endif
</div>






<div class="neer-single-banner-form">
    <input type="submit" value="Send Message" class="wpcf7-form-control wpcf7-submit" />
</div>






</div>
<div class="wpcf7-response-output wpcf7-display-none">
    
</div>

</form>
























<!--form here-->
</div>          
</div>
</div>
</div>
</div>
</div>  

<style type="text/css">
    .neer-background-overlay-5ac60b2687ca7{
        position: relative;
        background-position: right top !important;
    }
        
    </style>
<div class="vc_row wpb_row vc_row-fluid neer-background-overlay-5ac60b2687ca7 vc_default" style="text-align: left;">
    <div class="wpb_column vc_column_container vc_col-sm-12">
        <div class="vc_column-inner ">
            <div class="wpb_wrapper">
                <div class="vc_empty_space"   style="height: 100px" >
                    <span class="vc_empty_space_inner">
                        
                    </span>
                </div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>






@endsection