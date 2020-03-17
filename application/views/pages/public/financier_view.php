<!-- Inside Page Financiers -->
<div class="sub_page_wraper">

    <section class="tf-inner-banner">
        <div class="container">
            <h3>Financiers</h3>
            <h4>Expand your trade finance portfolio.</h4>
        </div>
    </section>

    <!-- Financiers -->
    <section id="Financiers" class="section pb-40">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="mb-0">Instrument Currently Active for Funding</h2>
                        <h4 class="mb-0" onclick="show_login()">Financier Login</h4>

                    </div>

                </div>
                <?php if($this->session->flashdata('error')){  
                        echo $this->session->flashdata('error'); 
                            } ?>
            </div>

            <!-- <div class="row projectFactsWrapColumns">
                <div class="col-md-12"> -->
            <!--<div class="section-title text-center">
						<h3 class="mb-0">Total Instruments</h3>
					</div>-->
            <!-- <div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap">
            <div class="item single">
                <p id="number1" class="counter"><?php echo $total_count ?></p>
                <span></span>
                <p>Total Instruments For Funding</p>
				<p class="small">(Amount in USD)</p>
            </div>
			<div class="item single">
                <p id="number2" class="counter"><?php echo $count ?></p>
                <span></span>
                <p>Active Instruments For Funding</p>
				<p class="small">(Amount in USD)</p>
            </div>
			<div class="item single">
                <p id="number3" class="counter"><?php echo $tot_sum ?></p>
                <span></span>
                <p>Total Value of Trade Instruments</p>
				<p class="small">(Amount in USD)</p>
            </div>
        </div>
    </div>
    </div>

                </div> -->

            <!-- <div class="col-md-12">
					<div class="section-title text-center">
						<h3 class="mb-0">Trade Instruments Live worth USD</h3>
					</div>					
					<div id="projectFacts" class="sectionClass">
                    <div class="fullWidth eight columns">
                        <div class="projectFactsWrap flex-projectFactsWrap">
                            <div class="item">
                                <p id="number1" class="counter"><?php echo $rec_sum ?></p>
                                <span></span>
                                <p>Receviables</p>
                            </div>
                            <div class="item">
                                <p id="number2" class="counter"><?php echo $loc_sum ?></p>
                                <span></span>
                                <p>Letter of Credit</p>
                            </div>
                            <div class="item">
                                <p id="number3" class="counter"><?php echo $bg_sum ?></p>
                                <span></span>
                                <p>Bank Guarantees</p>
                            </div>
                            <div class="item">
                                <p id="number4" class="counter"><?php echo $sblc_sum ?></p>
                                <span></span>
                                <p>SBLC</p>
                            </div>
                            <div class="item">
                                <p id="number5" class="counter"><?php echo $wr_sum ?></p>
                                <span></span>
                                <p>Warehouse Receipt</p>
                            </div>
                            <div class="item">
                                <p id="number6" class="counter"><?php echo $pay_sum ?></p>
                                <span></span>
                                <p>Payable</p>
                            </div>
                            <div class="item">
                                <p id="number7" class="counter"><?php echo $oth_sum ?></p>
                                <span></span>
                                <p>Other</p>
                            </div>
                        </div>
                    </div>
                </div> -->

            <!-- </div>
        </div>
	 -->

            <div class="row">
                <div class="col-md-12">

                    <div class="tf-assets-table-area">
                        <div class="tf-filters">
                            <div class="tf-ticker-head">
                                <ul class="nav tf-nav-tabs tf-ticker-nav tf-ticker-nav-desktop form-tabs" role="tablist">
                                    <li class="nav-item active">
                                        <a class="nav-link" href="#tab1" role="tab" data-toggle="tab" aria-selected="true">All</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab2" role="tab" data-toggle="tab" aria-selected="true">Receivables</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab3" role="tab" data-toggle="tab" aria-selected="false">Letters of Credit</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab4" role="tab" data-toggle="tab" aria-selected="false">Bank Guarantees</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab5" role="tab" data-toggle="tab" aria-selected="false">SBLC</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab6" role="tab" data-toggle="tab" aria-selected="false">Warehousing Receipt</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab7" role="tab" data-toggle="tab" aria-selected="false">Payable</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" href="#tab8" role="tab" data-toggle="tab" aria-selected="false">Other</a>
                                    </li>
                                </ul>
                                <div class="tf-ticker-nav-mobile">
                                    <select class="form-control" id="tab_selector">
                                        <option value="0">All</option>
                                        <option value="1">Receivables</option>
                                        <option value="2">Letters of Credit</option>
                                        <option value="3">Bank Guarantees</option>
                                        <option value="4">SBLC</option>
                                        <option value="5">Warehousing Receipt</option>
                                        <option value="6">Payable</option>
                                        <option value="7">Other</option>
                                        <option value="8">Country</option>
                                    </select>
                                </div>
                            </div>
                        </div>

                        <div class="country-filter">
                            <form class="form-horizontal">
                                <div class="form-group">
                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
                                        <label class="control-label">Search by Country</label>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
                                        <select class="form-control" id="tab_selector">
                                            <option value="">Please select Country</option>
                                            <option value="Afghanistan" data-class="af">Afghanistan</option>
                                            <option value="Aland Islands" data-class="ax">Aland Islands</option>
                                            <option value="Albania" data-class="al">Albania</option>
                                            <option value="Algeria" data-class="dz">Algeria</option>
                                            <option value="American Samoa" data-class="as">American Samoa</option>
                                            <option value="Andorra" data-class="ad">Andorra</option>
                                            <option value="Angola" data-class="ao">Angola</option>
                                            <option value="Anguilla" data-class="ai">Anguilla</option>
                                            <option value="Antarctica" data-class="aq">Antarctica</option>
                                            <option value="Antigua and Barbuda" data-class="ag">Antigua and Barbuda</option>
                                            <option value="Argentina" data-class="ar">Argentina</option>
                                            <option value="Armenia" data-class="am">Armenia</option>
                                            <option value="Aruba" data-class="aw">Aruba</option>
                                            <option value="Australia" data-class="au">Australia</option>
                                            <option value="Austria" data-class="at">Austria</option>
                                            <option value="Azerbaijian" data-class="az">Azerbaijian</option>
                                            <option value="Bahamas" data-class="bs">Bahamas</option>
                                            <option value="Bahrain" data-class="bh">Bahrain</option>
                                            <option value="Bangladesh" data-class="bd">Bangladesh</option>
                                            <option value="Barbados" data-class="bb">Barbados</option>
                                            <option value="Belarus" data-class="by">Belarus</option>
                                            <option value="Belgium" data-class="be">Belgium</option>
                                            <option value="Belize" data-class="bz">Belize</option>
                                            <option value="Benin" data-class="bj">Benin</option>
                                            <option value="Bermuda" data-class="bm">Bermuda</option>
                                            <option value="Bhutan" data-class="bt">Bhutan</option>
                                            <option value="Bolivia" data-class="bo">Bolivia</option>
                                            <option value="Bonaire" data-class="bq">Bonaire</option>
                                            <option value="Bosnia and Herzegovina" data-class="ba">Bosnia and Herzegovina</option>
                                            <option value="Botswana" data-class="bw">Botswana</option>
                                            <option value="Brazil" data-class="br">Brazil</option>
                                            <option value="British Indian Ocean Territory" data-class="io">British Indian Ocean Territory</option>
                                            <option value="Brunei Darussalam" data-class="bn">Brunei Darussalam</option>
                                            <option value="Bulgaria" data-class="bg">Bulgaria</option>
                                            <option value="Burkina Faso" data-class="bf">Burkina Faso</option>
                                            <option value="Burundi" data-class="bi">Burundi</option>
                                            <option value="Cabo Verde" data-class="cv">Cabo Verde</option>
                                            <option value="Cambodia" data-class="kh">Cambodia</option>
                                            <option value="Cameroon" data-class="cm">Cameroon</option>
                                            <option value="Canada" data-class="ca">Canada</option>
                                            <option value="Cayman Islands" data-class="ky">Cayman Islands</option>
                                            <option value="Central African Republic" data-class="cf">Central African Republic</option>
                                            <option value="Chad" data-class="td">Chad</option>
                                            <option value="Chile" data-class="cl">Chile</option>
                                            <option value="China" data-class="cn">China</option>
                                            <option value="Christmas Island" data-class="cx">Christmas Island</option>
                                            <option value="Cocos (Keeling) Islands" data-class="cc">Cocos (Keeling) Islands</option>
                                            <option value="Colombia" data-class="co">Colombia</option>
                                            <option value="Comoros" data-class="km">Comoros</option>
                                            <option value="Congo" data-class="cg">Congo</option>
                                            <option value="Congo" data-class="cd">Congo</option>
                                            <option value="Cook Islands" data-class="ck">Cook Islands</option>
                                            <option value="Costa Rica" data-class="cr">Costa Rica</option>
                                            <option value="Cote D'ivoire" data-class="ci">Cote D'ivoire</option>
                                            <option value="Croatia" data-class="hr">Croatia</option>
                                            <option value="Cuba" data-class="cu">Cuba</option>
                                            <option value="Curacao" data-class="cw">Curacao</option>
                                            <option value="Cyprus" data-class="cy">Cyprus</option>
                                            <option value="Czechia" data-class="cz">Czechia</option>
                                            <option value="Denmark" data-class="dk">Denmark</option>
                                            <option value="Djibouti" data-class="dj">Djibouti</option>
                                            <option value="Dominica" data-class="dm">Dominica</option>
                                            <option value="Dominican Republic" data-class="do">Dominican Republic</option>
                                            <option value="Ecuador" data-class="ec">Ecuador</option>
                                            <option value="Egypt" data-class="eg">Egypt</option>
                                            <option value="El Salvador" data-class="sv">El Salvador</option>
                                            <option value="Equatorial Guinea" data-class="gq">Equatorial Guinea</option>
                                            <option value="Eritrea" data-class="er">Eritrea</option>
                                            <option value="Estonia" data-class="ee">Estonia</option>
                                            <option value="Ethiopia" data-class="et">Ethiopia</option>
                                            <option value="Falkland Islands (Malvinas)" data-class="fk">Falkland Islands (Malvinas)</option>
                                            <option value="Faroe Islands" data-class="fo">Faroe Islands</option>
                                            <option value="Fiji" data-class="fj">Fiji</option>
                                            <option value="Finland" data-class="fi">Finland</option>
                                            <option value="France" data-class="fr">France</option>
                                            <option value="French Guiana" data-class="gf">French Guiana</option>
                                            <option value="French Polynesia" data-class="pf">French Polynesia</option>
                                            <option value="French Southern Territories" data-class="tf">French Southern Territories</option>
                                            <option value="Gabon" data-class="ga">Gabon</option>
                                            <option value="Gambia" data-class="gm">Gambia</option>
                                            <option value="Georgia" data-class="ge">Georgia</option>
                                            <option value="Germany" data-class="de">Germany</option>
                                            <option value="Ghana" data-class="gh">Ghana</option>
                                            <option value="Gibraltar" data-class="gi">Gibraltar</option>
                                            <option value="Greece" data-class="gr">Greece</option>
                                            <option value="Greenland" data-class="gl">Greenland</option>
                                            <option value="Grenada" data-class="gd">Grenada</option>
                                            <option value="Guadeloupe" data-class="gp">Guadeloupe</option>
                                            <option value="Guam" data-class="gu">Guam</option>
                                            <option value="Guatemala" data-class="gt">Guatemala</option>
                                            <option value="Guernsey" data-class="gg">Guernsey</option>
                                            <option value="Guinea" data-class="gn">Guinea</option>
                                            <option value="Guinea-Bissau" data-class="gw">Guinea-Bissau</option>
                                            <option value="Guyana" data-class="gy">Guyana</option>
                                            <option value="Haiti" data-class="ht">Haiti</option>
                                            <option value="Holy See" data-class="va">Holy See</option>
                                            <option value="Honduras" data-class="hn">Honduras</option>
                                            <option value="Hong Kong" data-class="hk">Hong Kong</option>
                                            <option value="Hungary" data-class="hu">Hungary</option>
                                            <option value="Iceland" data-class="is">Iceland</option>
                                            <option value="India" data-class="in">India</option>
                                            <option value="Indonesia" data-class="id">Indonesia</option>
                                            <option value="Iran" data-class="ir">Iran</option>
                                            <option value="Iraq" data-class="iq">Iraq</option>
                                            <option value="Ireland" data-class="ie">Ireland</option>
                                            <option value="Isle of Man" data-class="im">Isle of Man</option>
                                            <option value="Israel" data-class="il">Israel</option>
                                            <option value="Italy" data-class="it">Italy</option>
                                            <option value="Jamaica" data-class="jm">Jamaica</option>
                                            <option value="Japan" data-class="jp">Japan</option>
                                            <option value="Jersey" data-class="je">Jersey</option>
                                            <option value="Jordan" data-class="jo">Jordan</option>
                                            <option value="Kazakhstan" data-class="kz">Kazakhstan</option>
                                            <option value="Kenya" data-class="ke">Kenya</option>
                                            <option value="Kiribati" data-class="ki">Kiribati</option>
                                            <option value="Korea" data-class="kr">Korea</option>
                                            <option value="Kuwait" data-class="kw">Kuwait</option>
                                            <option value="Kyrgyzstan" data-class="kg">Kyrgyzstan</option>
                                            <option value="Lao" data-class="la">Lao</option>
                                            <option value="Latvia" data-class="lv">Latvia</option>
                                            <option value="Lebanon" data-class="lb">Lebanon</option>
                                            <option value="Lesotho" data-class="ls">Lesotho</option>
                                            <option value="Liberia" data-class="lr">Liberia</option>
                                            <option value="Libya" data-class="ly">Libya</option>
                                            <option value="Liechtenstein" data-class="li">Liechtenstein</option>
                                            <option value="Lithuania" data-class="lt">Lithuania</option>
                                            <option value="Luxembourg" data-class="lu">Luxembourg</option>
                                            <option value="Macao" data-class="mo">Macao</option>
                                            <option value="North Macedonia" data-class="mk">North Macedonia</option>
                                            <option value="Madagascar" data-class="mg">Madagascar</option>
                                            <option value="Malawi" data-class="mw">Malawi</option>
                                            <option value="Malaysia" data-class="my">Malaysia</option>
                                            <option value="Maldives" data-class="mv">Maldives</option>
                                            <option value="Mali" data-class="ml">Mali</option>
                                            <option value="Malta" data-class="mt">Malta</option>
                                            <option value="Marshall Islands" data-class="mh">Marshall Islands</option>
                                            <option value="Martinique" data-class="mq">Martinique</option>
                                            <option value="Mauritania" data-class="mr">Mauritania</option>
                                            <option value="Mauritius" data-class="mu">Mauritius</option>
                                            <option value="Mayotte" data-class="yt">Mayotte</option>
                                            <option value="Mexico" data-class="mx">Mexico</option>
                                            <option value="Micronesia" data-class="fm">Micronesia</option>
                                            <option value="Moldova" data-class="md">Moldova</option>
                                            <option value="Monaco" data-class="mc">Monaco</option>
                                            <option value="Mongolia" data-class="mn">Mongolia</option>
                                            <option value="Montenegro" data-class="me">Montenegro</option>
                                            <option value="Montserrat" data-class="ms">Montserrat</option>
                                            <option value="Morocco" data-class="ma">Morocco</option>
                                            <option value="Mozambique" data-class="mz">Mozambique</option>
                                            <option value="Myanmar" data-class="mm">Myanmar</option>
                                            <option value="Namibia" data-class="na">Namibia</option>
                                            <option value="Nauru" data-class="nr">Nauru</option>
                                            <option value="Nepal" data-class="np">Nepal</option>
                                            <option value="Netherlands" data-class="nl">Netherlands</option>
                                            <option value="New Caledonia" data-class="nc">New Caledonia</option>
                                            <option value="New Zealand" data-class="nz">New Zealand</option>
                                            <option value="Nicaragua" data-class="ni">Nicaragua</option>
                                            <option value="Niger" data-class="ne">Niger</option>
                                            <option value="Nigeria" data-class="ng">Nigeria</option>
                                            <option value="Niue" data-class="nu">Niue</option>
                                            <option value="Norfolk Island" data-class="nf">Norfolk Island</option>
                                            <option value="Northern Mariana Islands" data-class="mp">Northern Mariana Islands</option>
                                            <option value="Norway" data-class="no">Norway</option>
                                            <option value="Oman" data-class="om">Oman</option>
                                            <option value="Pakistan" data-class="pk">Pakistan</option>
                                            <option value="Palau" data-class="pw">Palau</option>
                                            <option value="Palestine, State of" data-class="ps">Palestine, State of</option>
                                            <option value="Panama" data-class="pa">Panama</option>
                                            <option value="Papua New Guinea" data-class="pg">Papua New Guinea</option>
                                            <option value="Paraguay" data-class="py">Paraguay</option>
                                            <option value="Peru" data-class="pe">Peru</option>
                                            <option value="Philippines" data-class="ph">Philippines</option>
                                            <option value="Pitcairn" data-class="pn">Pitcairn</option>
                                            <option value="Poland" data-class="pl">Poland</option>
                                            <option value="Portugal" data-class="pt">Portugal</option>
                                            <option value="Puerto Rico" data-class="pr">Puerto Rico</option>
                                            <option value="Qatar" data-class="qa">Qatar</option>
                                            <option value="Reunion" data-class="re">Reunion</option>
                                            <option value="Romania" data-class="ro">Romania</option>
                                            <option value="Russian Federation" data-class="ru">Russian Federation</option>
                                            <option value="Rwanda" data-class="rw">Rwanda</option>
                                            <option value="Saint Barthelemy" data-class="bl">Saint Barthelemy</option>
                                            <option value="Saint Helena" data-class="sh">Saint Helena</option>
                                            <option value="Saint Kitts and Nevis" data-class="kn">Saint Kitts and Nevis</option>
                                            <option value="Saint Lucia" data-class="lc">Saint Lucia</option>
                                            <option value="Saint Martin (French Part)" data-class="mf">Saint Martin (French Part)</option>
                                            <option value="Saint Pierre and Miquelon" data-class="pm">Saint Pierre and Miquelon</option>
                                            <option value="Saint Vincent & The Grenadines" data-class="vc">Saint Vincent & The Grenadines</option>
                                            <option value="Samoa" data-class="ws">Samoa</option>
                                            <option value="San Marino" data-class="sm">San Marino</option>
                                            <option value="Sao Tome and Principe" data-class="st">Sao Tome and Principe</option>
                                            <option value="Saudi Arabia" data-class="sa">Saudi Arabia</option>
                                            <option value="Senegal" data-class="sn">Senegal</option>
                                            <option value="Serbia" data-class="rs">Serbia</option>
                                            <option value="Seychelles" data-class="sc">Seychelles</option>
                                            <option value="Sierra Leone" data-class="sl">Sierra Leone</option>
                                            <option value="Singapore" data-class="sg">Singapore</option>
                                            <option value="Sint Maarten (Dutch Part)" data-class="sx">Sint Maarten (Dutch Part)</option>
                                            <option value="Slovakia" data-class="sk">Slovakia</option>
                                            <option value="Slovenia" data-class="si">Slovenia</option>
                                            <option value="Solomon Islands" data-class="sb">Solomon Islands</option>
                                            <option value="Somalia" data-class="so">Somalia</option>
                                            <option value="South Africa" data-class="za">South Africa</option>
                                            <option value="South Sudan" data-class="ss">South Sudan</option>
                                            <option value="Spain" data-class="es">Spain</option>
                                            <option value="Sri Lanka" data-class="lk">Sri Lanka</option>
                                            <option value="Sudan" data-class="sd">Sudan</option>
                                            <option value="Suriname" data-class="sr">Suriname</option>
                                            <option value="Svalbard and Jan Mayen" data-class="sj">Svalbard and Jan Mayen</option>
                                            <option value="Eswatini" data-class="sz">Eswatini</option>
                                            <option value="Sweden" data-class="se">Sweden</option>
                                            <option value="Switzerland" data-class="ch">Switzerland</option>
                                            <option value="Syrian Arab Republic" data-class="sy">Syrian Arab Republic</option>
                                            <option value="Taiwan" data-class="tw">Taiwan</option>
                                            <option value="Tajikistan" data-class="tj">Tajikistan</option>
                                            <option value="Tanzania" data-class="tz">Tanzania</option>
                                            <option value="Thailand" data-class="th">Thailand</option>
                                            <option value="Timor-Leste" data-class="tl">Timor-Leste</option>
                                            <option value="Togo" data-class="tg">Togo</option>
                                            <option value="Tokelau" data-class="tk">Tokelau</option>
                                            <option value="Tonga" data-class="to">Tonga</option>
                                            <option value="Trinidad and Tobago" data-class="tt">Trinidad and Tobago</option>
                                            <option value="Tunisia" data-class="tn">Tunisia</option>
                                            <option value="Turkey" data-class="tr">Turkey</option>
                                            <option value="Turkmenistan" data-class="tm">Turkmenistan</option>
                                            <option value="Turks and Caicos Islands" data-class="tc">Turks and Caicos Islands</option>
                                            <option value="Tuvalu" data-class="tv">Tuvalu</option>
                                            <option value="Uganda" data-class="ug">Uganda</option>
                                            <option value="Ukraine" data-class="ua">Ukraine</option>
                                            <option value="United Arab Emirates" data-class="ae">United Arab Emirates</option>
                                            <option value="United Kingdom" data-class="gb">United Kingdom</option>
                                            <option value="United States of America" data-class="us">United States of America</option>
                                            <option value="Uruguay" data-class="uy">Uruguay</option>
                                            <option value="Uzbekistan" data-class="uz">Uzbekistan</option>
                                            <option value="Vanuatu" data-class="vu">Vanuatu</option>
                                            <option value="Venezuela" data-class="ve">Venezuela</option>
                                            <option value="Viet Nam" data-class="vn">Viet Nam</option>
                                            <option value="Virgin Islands (British)" data-class="vg">Virgin Islands (British)</option>
                                            <option value="Virgin Islands (U.S.)" data-class="vi">Virgin Islands (U.S.)</option>
                                            <option value="Wallis and Futuna" data-class="wf">Wallis and Futuna</option>
                                            <option value="Western Sahara" data-class="eh">Western Sahara</option>
                                            <option value="Yemen" data-class="ye">Yemen</option>
                                            <option value="Zambia" data-class="zm">Zambia</option>
                                            <option value="Zimbabwe" data-class="zw">Zimbabwe</option>
                                        </select>
                                    </div>
                                </div>
                            </form>
                        </div>

                        <div class="tf-assets-table-block">
                            <div class="tf-assets-table-block-inner">
                                <div class="tab-content">
                                    <!-- Start All Data -->
                                    <div role="tabpanel" class="tab-pane fade in active" id="tab1">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">
                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                    foreach ($instrument as $instru) { ?>
                                                                        <td class="bold">
                                                                            <?php 
                                                                        if($instru->tfi_instrument == "SBLC")
                                                                        {  echo 'SBLC'; 
                                                                        }
                                                                        else if($instru->tfi_instrument == "REC")
                                                                        {  echo 'Receivable'; 
                                                                        }
                                                                        else if($instru->tfi_instrument == "LC")
                                                                        {  echo 'Letter Of Credit'; 
                                                                        }
                                                                        else if($instru->tfi_instrument == "BG")
                                                                        {  echo 'Bank Guarantees'; 
                                                                        }
                                                                        else if($instru->tfi_instrument == "PAY")
                                                                        {  echo 'Payable'; 
                                                                        }
                                                                        else if($instru->tfi_instrument == "OTH")
                                                                        {  echo 'Other'; 
                                                                        }
                                                                        else if($instru->tfi_instrument == "WR")
                                                                        {  echo 'Warehouse Receipt'; 
                                                                        }

                                                                        ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php } ?>
                                                                    <tr>
                                                                        <?php
                                                                        foreach ($buyersupplier as $bs) { 
                                                                            ?>
                                                                            <td class="bold">
                                                                                <?php 
                                                                        if($bs->tfbs_loanp == "SBLC")
                                                                        {  echo 'SBLC'; 
                                                                        }
                                                                        else if($bs->tfbs_loanp == "REC")
                                                                        {  echo 'Receivable'; 
                                                                        }
                                                                        else if($bs->tfbs_loanp == "LC")
                                                                        {  echo 'Letter Of Credit'; 
                                                                        }
                                                                        else if($bs->tfbs_loanp == "BG")
                                                                        {  echo 'Bank Guarantees'; 
                                                                        }
                                                                        else if($bs->tfbs_loanp == "PAY")
                                                                        {  echo 'Payable'; 
                                                                        }
                                                                        else if($bs->tfbs_loanp == "OTH")
                                                                        {  echo 'Other'; 
                                                                        }
                                                                        else if($bs->tfbs_loanp == "WR")
                                                                        {  echo 'Warehouse Receipt'; 
                                                                        }

                                                                        ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End All Data -->

                                    <!-- Start Receivables Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab2">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                foreach ($instrument as $instru) { 
                                                                    if($instru->tfi_instrument == "REC"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "REC")
                                                                                        {  echo 'Receivable'; 
                                                                                        }?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>
                                                                    <tr>
                                                                        <?php
                                                                        foreach ($buyersupplier as $bs) { 
                                                                            if($bs->tfbs_loanp == "REC"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "REC")
                                                                                        {  echo 'Receivable'; 
                                                                                        }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>

                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Receivables Data -->

                                    <!-- Start Letter of Credit Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab3">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                        foreach ($instrument as $instru) { 
                                                            if($instru->tfi_instrument == "LC"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "LC")
                                                                {  echo 'Letter of Credit'; 
                                                                } ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>
                                                                    <tr>
                                                                        <?php
                                                                foreach ($buyersupplier as $bs) { 
                                                                    if($bs->tfbs_loanp == "LC"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "LC")
                                                                                {  echo 'Letter of Credit'; 
                                                                                }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Letter of Credit Data -->

                                    <!-- Start Bank Gurantees Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab4">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                        foreach ($instrument as $instru) { 
                                                                            if($instru->tfi_instrument == "BG"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "BG")
                                                                                        {  echo 'Bank Gurantee'; 
                                                                                        }?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>
                                                                    <tr>
                                                                        <?php
                                                                        foreach ($buyersupplier as $bs) { 
                                                                            if($bs->tfbs_loanp == "BG"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "BG")
                                                                                        {  echo 'Bank Gurantee'; 
                                                                                        }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Bank Gurantees Data -->

                                    <!-- Start SBLC Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab5">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                        foreach ($instrument as $instru) { 
                                                                            if($instru->tfi_instrument == "SBLC"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "SBLC")
                                                                                        {  echo 'SBLC'; 
                                                                                        }?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>
                                                                    <tr>
                                                                        <?php
                                                                foreach ($buyersupplier as $bs) { 
                                                                    if($bs->tfbs_loanp == "SBLC"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "SBLC")
                                                                                {  echo 'SBLC'; 
                                                                                }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End SBLC Data -->

                                    <!-- Start Warehousing Receipt Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab6">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                        foreach ($instrument as $instru) { 
                                                                            if($instru->tfi_instrument == "WR"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "WR")
                                                                                        {  echo 'Warehouse Receipt'; 
                                                                                        }?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>
                                                                    <tr>
                                                                        <?php
                                                                        foreach ($buyersupplier as $bs) { 
                                                                            if($bs->tfbs_loanp == "WR"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "WR")
                                                                                        {  echo 'Warehouse Receipt'; 
                                                                                        }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Warehousing Receipt Data -->

                                    <!-- Start Payable Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab7">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                        foreach ($instrument as $instru) { 
                                                                            if($instru->tfi_instrument == "PAY"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "PAY")
                                                                                        {  echo 'Payable'; 
                                                                                        }?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>
                                                                    <tr>
                                                                        <?php
                                                                        foreach ($buyersupplier as $bs) { 
                                                                            if($bs->tfbs_loanp == "PAY"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "PAY")
                                                                                        {  echo 'Payable'; 
                                                                                        }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End Payable Data -->

                                    <!-- Start OTHER Data -->
                                    <div role="tabpanel" class="tab-pane fade" id="tab8">
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="tf-financier-table tf-element">

                                                    <div class="table-responsive">
                                                        <table class="table table-hover">
                                                            <thead>
                                                                <tr>
                                                                    <th scope="col">INSTRUMENT TYPE</th>
                                                                    <th scope="col">INSTRUMENT REF</th>
                                                                    <th scope="col">COUNTRY OF ORIGINATION</th>
                                                                    <th scope="col">AMOUNT</th>
                                                                    <th scope="col">DATE OF MATURITY</th>
                                                                    <th scope="col">&nbsp;</th>
                                                                </tr>
                                                            </thead>
                                                            <tbody>
                                                                <tr>
                                                                    <?php
                                                                        foreach ($instrument as $instru) { 
                                                                            if($instru->tfi_instrument == "OTH"){?>
                                                                        <td class="bold">
                                                                            <?php if($instru->tfi_instrument == "OTH")
                                                                                        {  echo 'Other'; 
                                                                                        }?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_docRef ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_country ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?>
                                                                        </td>
                                                                        <td>
                                                                            <?php echo $instru->tfi_maturityDate ?>
                                                                        </td>
                                                                        <td>
                                                                            <button class="btn btn-blue" onclick="passData('<?php echo $instru->tfi_docRef ?>')"><span>Get Access</span></button>
                                                                        </td>
                                                                </tr>
                                                                <?php }}?>

                                                                    <tr>
                                                                        <?php
                                                                        foreach ($buyersupplier as $bs) { 
                                                                            if($bs->tfbs_loanp == "OTH"){?>
                                                                            <td class="bold">
                                                                                <?php if($bs->tfbs_loanp == "OTH")
                                                                                        {  echo 'Other'; 
                                                                                        }?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_docRef?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_country ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$bs->tfbs_amount),'0'),'.') ?>
                                                                            </td>
                                                                            <td>
                                                                                <?php echo $bs->tfbs_maturityDate ?>
                                                                            </td>
                                                                            <td>
                                                                                <button class="btn btn-blue" onclick="passData_bs('<?php echo $bs->tfbs_docRef ?>')"><span>Get Access</span></button>
                                                                            </td>
                                                                    </tr>
                                                                    <?php }}?>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- End OTHER Data -->

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </section>
    <!-- /. Financiers -->
    <!-- /. Login -->
    <section id="login_crad" class="section pb-40" style="display:none;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center">
                        <h2 class="mb-0">Demonstration</h2>
                    </div>
                </div>
            </div>
            <div class="tf-assets-table-area">
                <!-- Login Modal -->
                <div role="tabpanel" class="tab-pane fade in active" id="login">
                    <div class="row">
                        <div class="col-md-6 col-md-offset-4">
                            <h3>Your Keys Await</h3>
                            <p>We connect global Buyer/Supplier or Brokers and Financiers</p>
                            <?php 
                            $attributes = array('id' => 'demo_loginForm', 'class' => 'tf-suppliers-form', 'method' => 'post','role' => 'form');
                            echo form_open_multipart(base_url().'login/demo_login', $attributes); 
                        ?>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="user_email">Email <sup>*</sup></label>
                                        <input type="text" class="form-control" id="user_name" name="user_name" autocomplete="off" placeholder="Email" tabindex="1">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="user_password">Password<sup>*</sup> </label>
                                        <input type="password" class="form-control" id="user_password" name="user_password" autocomplete="off" placeholder="Password" tabindex="2">
                                    </div>
                                </div>
                                <div class="row">
                                    <?php echo $this->session->flashdata('error_logged_in'); ?>

                                </div>
                                <div class="row">
                                    <div class="form-group col-md-6 col-xs-6">
                                        <input type="hidden" name="action" value="login" />
                                        <button type="submit" class="btn btn-blue text-uppercase">Submit</button>
                                    </div>
                                </div>
                                </form>
                        </div>
                    </div>
                </div>
                <!-- End Login Modal -->
            </div>
        </div>
    </section>
    <!-- /. Login -->

</div>
<!-- /. Inside Page Financiers -->
<div id="tf-loader-wrapper" style="display: none;">
    <div id="tf-loader"></div>
</div>
<div class="modal fade" id="privkey" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="">
        <!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
            </div>
            <div class="modal-body text-center">
                <div class="deployedData_modal_block">
                    <p class="left"><strong>*Only trusted masternode entity within the network can access the record. If you are a Masternode holder, enter the private key & access the document.</strong></p>
                    <!--<p id="deployedData" style="word-break: break-all;"></p>-->
                    <p><span><a href="<?php echo base_url()?>publicv/setupMasternode" target="_blank">How to Create PrivateKey & Setup Masternode?</a></span></p>
                    <form id="checkprivatekey_form" class="tf-suppliers-form" enctype="multipart/form-data" method="post">

                        <div class="form-group ">
                            <label for="private-key" class="left">Enter Private Key</label>
                            <input type="text" class="form-control" id="privateKey" name="privateKey" autocomplete="off" placeholder="Enter Private Key">
                        </div>
                        <div class="row">
                            <div class="form-group ">
                                <button id="checkprivkey" name="suppliers" type="submit" class="btn btn-blue text-uppercase">Submit</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tf-loader-wrapper" style="display: none;">
    <div id="tf-loader"></div>
</div>
<div class="modal fade" id="wrngprivkey" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="">
        <!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
            </div>
            <div class="modal-body text-center">
                <div class="deployedData_modal_block">
                    <p>Please become a masternode holder to view the document.</p>
                    <!--<p id="deployedData" style="word-break: break-all;"></p>-->
                    <div class="row">
                        <div class="form-group ">
                            <button id="ok" name="suppliers" type="submit" class="btn btn-blue text-uppercase">OK</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tf-loader-wrapper" style="display: none;">
    <div id="tf-loader"></div>
</div>
<div class="modal fade" id="hash" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="">
        <!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
            </div>
            <div class="modal-body text-center">
                <div class="deployedData_modal_block">
                    <p>Document Hash.</p>
                    <!--<p id="deployedData" style="word-break: break-all;"></p>-->

                    <div id="hashData" style="word-break: break-all;">

                    </div>
                    <div class="form-group">
                        <button id="okBtn" type="submit" class="btn btn-blue text-uppercase" data-keyboard="false">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div id="tf-loader-wrapper" style="display: none;">
    <div id="tf-loader"></div>
</div>
<div class="modal fade" id="contact" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
    <div class="modal-dialog" style="">
        <!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" onclick="location.reload()" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
            </div>
            <div class="modal-body text-center">
                <div class="deployedData_modal_block">
                    <p><strong>Buyer/Supplier Details</strong></p>
                    <!--<p id="deployedData" style="word-break: break-all;"></p>-->

                    <div id="contactData" style="word-break: break-all;">

                    </div>
                    <div class="form-group">
                        <button id="financeBtn" type="submit" class="btn btn-blue text-uppercase" data-keyboard="false">Finance Project</button>
                    </div>
                    <div class="form-group">
                        <button id="doneBtn" type="submit" class="btn btn-blue text-uppercase" data-keyboard="false">OK</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php

	// $this->load->view('includes/block_create_account');
	//$this->load->view('includes/block_features');	
	$this->load->view('includes/login_modal');

?>

    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
    <script type="text/javascript">
        function passData(docRef) {
            var myurl = '<?php echo base_url()?>publicv/getAccess';
            $("#privkey").modal("show");
            $('#privkey').css('opacity', '1');
            $('#checkprivkey').click(function(e) {
                var privkey = document.getElementById("privateKey").value;
                jQuery.validator.addMethod("privateKey", function(value, element) {
                    // allow any non-whitespace characters as the host part
                    return this.optional(element) || /^[0-9a-f]{64}$/.test(value);
                }, 'This field allows only number from 0-9 and alphabets from a-f');
                $('#checkprivatekey_form').validate({
                    rules: {
                        privateKey: {
                            required: true,
                            privateKey: true,
                            normalizer: function(value) {
                                // Update the value of the element
                                this.value = $.trim(value);
                                check = this.value;
                                if (check.startsWith("0x")) {
                                    check = check.slice(2);
                                } else {
                                    check = this.value;
                                }
                                // Use the trimmed value for validation
                                return check;
                            }
                        }
                    },
                    messages: {
                        privateKey: {
                            required: "Please enter a private key",
                            privateKey: "Enter valid private key of 64 characters"
                        }
                    },
                    success: function(elem) {

                    },
                    error: function(elem) {

                    },
                    submitHandler: function(form, e) {
                        // console.log(privkey,docRef);
                        e.preventDefault();
                        $("#privkey").modal("hide");
                        showLoader1();
                        $.ajax({
                            type: "POST",
                            url: myurl,
                            dataType: "json",
                            data: {
                                "action": "getaccess",
                                "docRef": docRef,
                                "privkey": privkey
                            }, // serializes the form's elements.
                            success: (resp => {
                                    // console.log(resp);
                                }) // show response from the php script.
                        }).done(resp => {
                            console.log(resp);
                            if (resp.privatekey == "true") {
                                $.ajax({
                                    type: "POST",
                                    dataType: "json",
                                    url: "https://demoapi.tradefinex.org//api/getDocHash",
                                    data: {
                                        "contractAddr": resp.contractAddr,
                                        "passKey": resp.key,
                                        "contractType": "brokerInstrument"
                                    },
                                    success: resp => {
                                        // console.log("response success: ",resp)
                                    },
                                    error: err => {
                                        console.log("response error: ", err)
                                    }
                                }).done(resp => {
                                    // .then(resp => {
                                    // console.log("response : ",resp);
                                    hideLoader1();
                                    // console.log('formDataObj>>>>>>>', resp);
                                    if (resp.status == true) {
                                        const hashUrl = `https://ipfs-gateway.xinfin.network/${resp.ipfsHash}`;
                                        const tHtml = `
                                                <p>
                                                    <br><a href="${hashUrl}"target="_blank">${resp.ipfsHash}</a>
                                                </p>
                                                `
                                            // hideLoader();
                                        $("#hash").modal("show");
                                        $('#hash').css('opacity', '1');
                                        $('#hashData').html(tHtml);
                                        $('#okBtn').click(function() {
                                            $("#hash").modal("hide");
                                            location.reload();
                                        });
                                    }

                                }).fail(error => {
                                    // hideLoader();
                                    toastr.error('Something went wrong.', {
                                        timeOut: 70000
                                    }).css({
                                        "word-break": "break-all",
                                        "width": "auto"
                                    });
                                    setTimeout(location.reload.bind(location), 6000);
                                })
                            } else {
                                hideLoader1();
                                $("#wrngprivkey").modal("show");
                                $('#wrngprivkey').css('opacity', '1');
                                $('#ok').click(function(e) {
                                    location.reload();
                                })
                            }
                        })
                    }
                })
            });

        }

        function passData_bs(docRef) {
            var myurl = '<?php echo base_url()?>publicv/getAccess';
            $("#privkey").modal("show");
            $('#privkey').css('opacity', '1');
            $('#checkprivkey').click(function(e) {
                var privkey = document.getElementById("privateKey").value;
                jQuery.validator.addMethod("privateKey", function(value, element) {
                    // allow any non-whitespace characters as the host part
                    return this.optional(element) || /^[0-9a-f]{64}$/.test(value);
                }, 'This field allows only number from 0-9 and alphabets from a-f');
                $('#checkprivatekey_form').validate({
                    rules: {
                        privateKey: {
                            required: true,
                            privateKey: true,
                            normalizer: function(value) {
                                // Update the value of the element
                                this.value = $.trim(value);
                                check = this.value;
                                if (check.startsWith("0x")) {
                                    check = check.slice(2);
                                } else {
                                    check = this.value;
                                }
                                // Use the trimmed value for validation
                                return check;
                            }
                        }
                    },
                    messages: {
                        privateKey: {
                            required: "Please enter a private key",
                            privateKey: "Enter valid private key of 64 characters"
                        }
                    },
                    success: function(elem) {

                    },
                    error: function(elem) {

                    },
                    submitHandler: function(form, e) {
                        // console.log(privkey,docRef);
                        e.preventDefault();
                        $("#privkey").modal("hide");
                        showLoader1();
                        $.ajax({
                            type: "POST",
                            url: myurl,
                            dataType: "json",
                            data: {
                                "action": "getdetails",
                                "docRef": docRef,
                                "privkey": privkey
                            }, // serializes the form's elements.
                            success: (resp => {
                                    // console.log(resp);
                                }) // show response from the php script.
                        }).done(resp => {

                            if (resp.privatekey == "true") {
                                // console.log(resp);

                                const tHtml = `
                                    <div class="text-center">
                                        <p>
                                            <br><label><strong>Full Name:</strong>${resp.contact[0].tfbs_fullName}</label>
                                            <br><label><strong>Company Name:</strong>${resp.contact[0].tfbs_companyName}</label>
                                        </p>
                                    </div>
                                        `
                                hideLoader1();

                                $("#contact").modal("show");
                                $('#contact').css('opacity', '1');
                                $('#contactData').html(tHtml);
                                $('#doneBtn').click(function() {
                                    $("#contact").modal("hide");
                                    location.reload();
                                });
                                $('#financeBtn').click(function() {
                                    $("#contact").modal("hide");
                                    $.ajax({
                                        type: "POST",
                                        url: myurl,
                                        dataType: "json",
                                        data: {
                                            "action": "sendmail",
                                            "docRef": docRef,
                                            "privkey": privkey
                                        }, // serializes the form's elements.
                                        success: (resp => {
                                                console.log(resp);
                                            }) // show response from the php script.
                                    }).done(resp => {
                                        toastr.success('Successfully notfied to admin', {
                                            timeOut: 70000
                                        }).css({
                                            "word-break": "break-all",
                                            "width": "auto"
                                        });
                                    })
                                });

                            } else {
                                hideLoader1();
                                $("#wrngprivkey").modal("show");
                                $('#wrngprivkey').css('opacity', '1');
                                $('#ok').click(function(e) {
                                    location.reload();
                                })
                            }

                        }).fail(error => {
                            // hideLoader();
                            toastr.error('Something went wrong.', {
                                timeOut: 70000
                            }).css({
                                "word-break": "break-all",
                                "width": "auto"
                            });
                            setTimeout(location.reload.bind(location), 6000);
                        })

                    }
                })
            });

        }

        function show_login() {
            document.getElementById("login_crad").style.display = "block";
            document.getElementById("Financiers").style.display = "none";
        }
    </script>

    <!--Animated counters script start -->
    <script>
        $(document).ready(function() {
            $('.counter').each(function() {
                $(this).prop('Counter', 0).animate({
                    Counter: $(this).text()
                }, {
                    duration: 4000,
                    easing: 'swing',
                    step: function(now) {
                        //$(this).text(Math.ceil(now));
                        $(this).text(this.Counter.toFixed(0));
                    }
                });
            });
        });
    </script>
    <!--Animated counters script end -->

    <script>
        $('#tab_selector').on('change', function(e) {
            $('.form-tabs li a').eq($(this).val()).tab('show');
        });
    </script>