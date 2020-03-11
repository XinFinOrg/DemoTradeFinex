<!-- Inside Page Financiers -->
<div class="sub_page_wraper">

    <section class="tf-inner-banner">
        <div class="container">
            <h3>Staking & Masternodes Services</h3>
            <h4>Host Masternode in a few clicks</h4>
        </div>
    </section>
	
	
	
	
	<!-- Statistics -->
	<section id="statistics" class="section tf-grey-bg">
		<div class="container">
			<div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="section-title text-center noBorderAfter pb-0">
                        <h2 class="mb-0">&nbsp;</h2>
                    </div>
                </div>
            </div>
			
			<div class="row mb-30 vertical-align flex-row">
						<div class="col-md-4">
							<div class="start-now-block">
								<h2 class="mb-20">Start Now</h2>
								<p class="mb-30">Fast, Reliable and Affordable Masternode Hosting.</p>
								<div class="upload-kyc-btn ukb-desktop">
									<a data-toggle="modal" data-target="#mnKycUploader" class="btn btn-blue text-uppercase"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; UPLOAD KYC</a>
								</div>
							</div>
						</div>
						
						<div class="col-md-8">
						<div class="row flex-row">
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="tf-host-mn bgOffWhiteShadow vertical-align">
							<div class="mn-icon">
								<img src="../assets/images/host-masternode-icons/xdc.png" />
							</div>
							<div class="mn-desc">
								<p>XDC PRICE</p>
								<div class="factTitle">$ 0.001220</div>
							</div>
						</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="tf-host-mn bgOffWhiteShadow vertical-align">
							<div class="mn-icon">
								<img src="../assets/images/host-masternode-icons/tokens.png" />
							</div>
							<div class="mn-desc">
								<p>Tokens to Host Masternode</p>
								<div class="factTitle">10M XDC</div>
							</div>
						</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="tf-host-mn bgOffWhiteShadow vertical-align">
							<div class="mn-icon">
								<img src="../assets/images/host-masternode-icons/dollar.png" />
							</div>
							<div class="mn-desc">
								<p>Price in US Dollar</p>
								<div class="factTitle">$ 0.00039136</div>
							</div>
						</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
						<div class="tf-host-mn bgOffWhiteShadow vertical-align">
							<div class="mn-icon">
								<img src="../assets/images/host-masternode-icons/hosting-charges.png" />
							</div>
							<div class="mn-desc">
								<p>Hosting Charges</p>
								<select class="mb10 form-control" id="tab_selector">
                                    <option value="Indsoft">Indsoft</option>
                                    <option value="Amazon">Amazon</option>
                                    <option value="Google Cloud">Google Cloud</option>
									<option value="Azure">Azure</option>
									<option value="Alibaba">Alibaba</option>
                                </select>
								<div class="factTitle">$ 800</div>
							</div>
						</div>
						</div>
						
						<div class="col-lg-12 col-md-12 col-xs-12 text-center">
							<div class="upload-kyc-btn ukb-mobile">
								<a data-toggle="modal" data-target="#mnKycUploader" class="btn btn-blue text-uppercase"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; UPLOAD KYC</a>
							</div>
						</div>
								
						</div>
						</div>
			</div>
			
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="start-now-desc">
						<ul>
							<li><i class="fa"><img src="../assets/images/host-masternode-icons/wallet.png"/></i> Your coins stay in your wallet</li>
							<li><i class="fa"><img src="../assets/images/host-masternode-icons/address.png"/></i> Service requires wallet address only</li>
							<li><i class="fa"><img src="../assets/images/host-masternode-icons/rightcheck.png"/></i> Same as own VPS price</li>
						</ul>
					</div>
				</div>
			
				<div class="col-lg-6 col-md-6">
					<div class="start-now-desc">
						<ul>
							<li><i class="fa"><img src="../assets/images/host-masternode-icons/time.png"/></i> Maximum uptime of your node</li>
							<li><i class="fa"><img src="../assets/images/host-masternode-icons/setup.png"/></i> One minute fast setup</li>
							<li><i class="fa"><img src="../assets/images/host-masternode-icons/payments.png"/></i> We accept PayPal and XDC</li>
						</ul>
					</div>
			
				</div>
			</div>
		</div>
    </section>	
</div>





<!-- Modal -->
<div class="modal fade" id="mnKycUploader" tabindex="-1" role="dialog" aria-labelledby="mnKycUploaderTitle" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content kyc-upload-modal">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
      </div>
      <div class="modal-body">        
        <h5 class="modal-title" id="exampleModalLongTitle">UPLOAD KYC DOCUMENT</h5>
		<div class="form-group">
                                    <label for="KYC-document"></label>
                                    <div class="tf-bulkUpload-inputBox">
										<input type="file" name="uploaded_file" id="uploaded_file" class="inputfile" onchange = "showName()" data-multiple-caption="{count} files selected" multiple />
										<label for="uploaded_file"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose files</span></label>
									</div>
                                    <p>Upload all supporting documents like Credit Report, KYC, and Business Profile as one PDF file. **Max file size 10 MB.</p>
                                    <label for="supporting-document" style="display:none" class ="error"id="error">Please upload correct file format.</label>
                                    <label for="supporting-document" style="display:none" class="error"id="error1">Please file less than 5MB</label>
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