<!-- START APP WRAPPER -->
   
        <!-- START TOP HEADER WRAPPER -->
        <div class="header-wrapper">
            

            <!-- START HEADER BOTTOM -->
            <div class="header-bottom">
                <div class="container">
                    <!-- START MAIN MENU -->
                    <nav class="main-menu">
                        <ul class="nav metismenu">
                            <li class="sidebar-header mobile-only mobile-nav-heading"><span>&nbsp;</span></li>
                            <li><a class="active" id="createBondHeader" ><i class="icon dripicons-document-edit"></i><span class="hide-menu">1. Create Bond</span></a></li>
                            <li><a  id="deployHeader"><i class="icon dripicons-document-new"></i><span class="hide-menu">2. Deploy</span></a></li>
                            <li><a  id="bondCompleteHeader"><i class="icon dripicons-document-new"></i><span class="hide-menu">3. Bonds</span></a></li>
                            <!-- <li><a href="issue-quote.html"><i class="icon dripicons-export"></i><span class="hide-menu">Issue Quote</span></a></li>
                            <li><a href="create-organization.html"><i class="icon dripicons-user-group"></i><span class="hide-menu">Create Organization</span></a></li>
                            <li><a href="portfolio.html"><i class="icon dripicons-folder-open"></i><span class="hide-menu">Portfolio</span></a></li>
                            <li><a href="syndicate.html"><i class="icon dripicons-meter"></i><span class="hide-menu">Syndicate</span></a></li> -->
                        </ul>
                    </nav>
                    <!-- END MAIN MENU -->
                </div>
            </div>
            <!-- END HEADER BOTTOM -->
        </div>
        <!-- END TOP HEADER WRAPPER -->
        <div class="content-wrapper" id="createBondTab">
            <div class="content container">
                <!--START PAGE HEADER -->
                <header class="page-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h1>Create Bond</h1>
                        </div>
                    </div>
                </header>
                <!--END PAGE HEADER -->

                <!--START PAGE CONTENT -->
                <section class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="">
                                <?php $attributes = array('id' => 'bond_create-form', 'class' => '', 'method' => 'post', 'role' => 'form');
                            echo form_open_multipart(base_url().'publicv/bond_create/', $attributes); ?>
                                    <div class="card-body">

                                        <div class="form-row">
											<div class="form-group col-md-12"><div class=" form-column-headings"> Bond Details</div></div>
                                                
                                            <div class="form-group col-md-4">
                                                <label for="tokenName">Bond Name</label><sup>*</sup>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" id="tokenName" name="tokenName" placeholder="Bond Name">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="tokenSymbol">Ticker</label><sup>*</sup>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" id="tokenSymbol" name="tokenSymbol" placeholder="Ticker">
                                            </div> 
											<div class="form-group col-md-4">
                                                <label for="typeofbond">Type Of Bond</label><sup>*</sup>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" value="Zero Coupon" readonly="true">
                                            </div>
											<div class="form-group col-lg-4 col-md-6">
                                                <label for="decimals">Decimals</label><sup>*</sup>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" id="tokenDecimals" name="tokenDecimals" value="18" readonly="true" />
                                            </div>

											<div class="form-group col-lg-4 col-md-6">
                                                <label for="tokenSupply">Token Supply</label><sup>*</sup>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" id="tokenSupply" name="tokenSupply" placeholder="Token Supply" >
                                            </div>                                     
                                        </div>
                                        
                                        <div class="form-row">
                                            <hr class="thick dashed m-b-30">
                                        </div>
                                        
                                        <div class="form-row">
											<div class="form-group col-md-12"><div class=" form-column-headings"> Coupon Details</div></div>
                                                
                                            <div class="form-group col-md-4">
                                                <label for="MinimumContribution">Minimum Contribution</label><sup>*</sup>
                                                <input type="text" class="form-control  form-controlCustom form-control-lg" id="bonusRate" name="bonusRate" placeholder="Minimum Contribution">
                                            </div>
                                            <div class="form-group col-md-4">
                                                <label for="FaceValue">Face Value</label><sup>*</sup>
                                                <input type="text" class="form-control  form-controlCustom form-control-lg" id="ethRate" name="ethRate" placeholder="Face Value">
                                            </div> 
											<div class="form-group col-lg-4">
                                                <label for="Coupon">Coupon (%)</label>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" id="coupon" name="coupon" placeholder="Coupon">
                                            </div>
											<div class="form-group col-lg-4 col-md-6">
                                                <label for="Tenure">Tenure (in Years)</label><sup>*</sup>
                                                <input type="text" class="form-control form-controlCustom form-control-lg" id="tenure" name="tenure" placeholder = "Tenure (in Years)">
                                            </div>
											<div class="form-group col-lg-4 col-md-6">
                                                <label for="Discounted Value">Discounted Value</label><sup>*</sup>
                                                <input type="text" class="form-control  form-controlCustom form-control-lg" id="dvalue" name="dvalue" placeholder = "Discounted Value">
                                            </div>
											</div> 
                                            <div class="card-footer border-0 text-center">
                                            <div class="form-actions">
                                                <div class="row">
                                                    <div class="col-md-12 footerBtns">
                                                        <button type="submit" id="bond_create" class="btn btn-primary btn-rounded"  > Create Bond</button>
                                                        <button class="btn btn-light btn-rounded btn-outline" id="bondCreateCancel">Cancel</button>
													</div>
													<br>
                                                </div>
                                            </div>
                                        
											<div class="form-group col-md-4">
                                                    <label class="hidden">
                                                        <input class="input-focus input-focus-notr" id="isPausable" name="isPausable" value="true" />
                                                        <span class="form-name floating-label">isPausable<sup>*</sup></span> 
                                                    </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                    <label class="hidden">
                                                        <input class="input-focus input-focus-notr" id="isBurnable" name="isBurnable" value="true" />
                                                        <span class="form-name floating-label">isBurnable<sup>*</sup></span> 
                                                    </label>
                                                    </div>
                                                    <div class="form-group col-md-4">
                                                    <label class="hidden">
                                                        <input class="input-focus input-focus-notr" id="isMintable" name="isMintable" value="true"/>
                                                        <span class="form-name floating-label">isMintable<sup>*</sup></span> 
                                                    </label>
								            </div>
                                            <div class="form-group col-md-4">
                                                <label class="hidden">
                                                    <input class="input-focus input-focus-notr" id="isUpgradeable" name="isUpgradeable" value="true"/>
                                                    <span class="form-name floating-label">isUpgradeable<sup>*</sup></span> 
                                                </label>
                                            </div>                                          
                                        </div>
                                    </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
        <div class="content-wrapper" id="deployTab" style="display: none;">
            <div class="content container">
                <header class="page-header">
                    <div class="d-flex align-items-center">
                        <div class="mr-auto">
                            <h1>Deploy</h1>
                        </div>
                    </div>
                </header>
                <section class="page-content">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card" style="">
                                
                                <div class="card-body">

                                    <div class="form-row" style="padding-top:15px">
                                            <div class="form-group col-lg-4 col-md-12"><div class=" form-column-headings"style="margin-left:7px; width:1070px; height:450px;overflow-y:scroll;box-shadow: 0px 2px 10px #6c757d;"> 
                                                <pre id="contractData"  >

                                                </pre>
                                                </div>
                                            </div>
                                    </div>
                                </div>
                                
                                <div class="card-footer border-0 text-center">
                                    <div class="form-actions">
                                        <div class="row">
                                            <div class="col-md-12 footerBtns">
                                                <button type="submit" id="deploy_contract" class="btn btn-primary btn-rounded"  > Deploy</button>
                                                <!-- <button class="btn btn-light btn-rounded btn-outline" id="bondCreateCancel">Cancel</button> -->
                                            </div>
                                            <br>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>

        

        
    <?php
	//$this->load->view('includes/block_features');
	$this->load->view('includes/login_modal');
	?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>


<div id="loader" style="display: none;"></div>
<div class="modal fade" id="thankyou" role="dialog" tabindex="-1" >
		<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:80%;max-width: 50%">
			
			<div class="modal-content">

				<div class="modal-body">

						<p>Your contract has successfully been deployed.</p>
						<p><span><b>Transaction Hash:</b></span> <span id="deployDataTHash"></span></p>
						<p><span><b>Contract Address:</b></span> <span id="deployDataCAddress"></span></p>
						<div class="btn-more">
							<button id="ok" type="submit" class="btn btn-info"  data-keyboard="false"> Ok </button> 
						</div>						
							                                           
				</div>
			</div>
	 	</div>
</div>
  

    
   
    
   
        

    <!--JS SCRIPTS-->
    <script src="assets/bond-assets/js/modernizr.custom.js"></script>
    <script src="assets/bond-assets/js/jquery.min.js"></script>
    <script src="assets/bond-assets/js/bootstrap.bundle.min.js"></script>
    <script src="assets/bond-assets/js/storage.js"></script>
    <script src="assets/bond-assets/js/menu.js"></script>
    <script src="assets/bond-assets/js/jquery.mCustomScrollbar.js"></script>

    <!--MAIN JS-->
    <script src="assets/bond-assets/js/main.js"></script>
    
