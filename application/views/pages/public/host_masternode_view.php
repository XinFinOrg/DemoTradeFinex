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
								<h2 class="mb-20">Setup Masternode</h2>
								<!-- <p class="mb-30">Fast, Reliable and Affordable Masternode Hosting.</p> -->
								<p><a href="https://docs.google.com/document/d/1Us9chjXEDYrDOpfuwWITxaQOSEYxYIpJpwWuYK0TyXY" target="_blank"> Format for Individual</a> | <a href="https://docs.google.com/document/d/1eyjFp3DXhrpLscngELocmXFwJ_Y8H9si6n8Z2SLADhg
									"target="_blank">Format for Coorporate</a></p>
								<p>To Become a network member, upload the Know Your Community (KYC) certificate in PDF format.

								<p>This KYC certificate needs to be signed by one of the following personnel:</p>

								<p>Company Secretary, A Notary Public, Chartered Secretary, Consulate, or A lawyer with Seal.</p>
								<div class="upload-kyc-btn ukb-desktop">
									<a data-toggle="modal" data-target="#mnKycUploader" class="btn btn-blue text-uppercase"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; UPLOAD KYC</a>
								</div>
								<div class="col-lg-12 col-md-12 col-xs-12 text-center">
							<div class="upload-kyc-btn ukb-mobile">
								<a data-toggle="modal" data-target="#mnKycUploader" class="btn btn-blue text-uppercase"><i class="fa fa-upload" aria-hidden="true"></i>&nbsp; UPLOAD KYC</a>
							</div>
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
								<div class="factTitle">$ <?php echo rtrim(rtrim(sprintf('%.6f',$xdc_usd),'0'),'.') ?></div>
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
							<p>Total price in US Dollar(10M XDC)</p>
								<div class="factTitle">$ <?php echo rtrim(rtrim(sprintf('%.6f',$total_price),'0'),'.') ?></div>
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
                                    <option value="Amazon" disabled>Amazon (coming soon)</option>
                                    <option value="Google Cloud" disabled>Google Cloud (coming soon)</option>
									<option value="Azure" disabled>Azure (coming soon)</option>
									
                                </select>
								<div class="factTitle">$ 800</div>
							</div>
						</div>
						</div>
						<div class="row center">
							<div class="mn-input col-md-8"> 
								<input class=" form-control" type="number" onchange="docNumber()"id = "nummasternode" name ="nummasternode" placeholder="Number of Masternode">
							</div>
							<div class="form-group col-md-4"> 
								<form action="<?php echo PAYPAL_URL; ?>" method="post">
									<!-- Identify your business so that you can collect the payments. -->
									<input type="hidden" name="business" value="<?php echo PAYPAL_ID; ?>">

									<!-- Specify a Buy Now button. -->
									<input type="hidden" name="cmd" value="_xclick">

									<!-- Specify details about the item that buyers will purchase. -->
									<input type="hidden" name="item_name" value="Masternode">
									<input type="hidden" name="item_number" value="1">
									<input type="hidden" id ="bulkAmount"name="amount" value="<?php echo $amount?>">
									<input type="hidden" id="custom"name="custom" value="0">
									<input type="hidden" name="currency_code" value="USD">

									<!-- Specify URLs -->
									<input type='hidden' name='cancel_return' value='<?php echo PAYPAL_CANCEL_URL; ?>'>
									<input type='hidden' name='return' value='<?php echo PAYPAL_RETURN_URL; ?>'>
									<input type='hidden' name='rm' value='2'>

									
										
									</div>
									
											<input type='hidden' name="action" value="masternode">
											<button id="masternode_payment" type="submit" class="btn btn-blue text-uppercase" data-keyboard="false" disabled>Pay</button>
										
									
								</form>
							</div>		
						</div>
									
							</div>
						</div>
			</div>
			
			<!-- <div class="row">
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
			</div> -->
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
										<input type="file" name="upload_file" id="upload_file" class="inputfile" onchange = "showName()" data-multiple-caption="{count} files selected" multiple />
										<label for="upload_file"><figure><svg xmlns="http://www.w3.org/2000/svg" width="20" height="17" viewBox="0 0 20 17"><path d="M10 0l-5.2 4.9h3.3v5.1h3.8v-5.1h3.3l-5.2-4.9zm9.3 11.5l-3.2-2.1h-2l3.4 2.6h-3.5c-.1 0-.2.1-.2.1l-.8 2.3h-6l-.8-2.2c-.1-.1-.1-.2-.2-.2h-3.6l3.4-2.6h-2l-3.2 2.1c-.4.3-.7 1-.6 1.5l.6 3.1c.1.5.7.9 1.2.9h16.3c.6 0 1.1-.4 1.3-.9l.6-3.1c.1-.5-.2-1.2-.7-1.5z"/></svg></figure> <span>Choose files</span></label>
									</div>
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
	<script> 

function docNumber(){
    var amountt = document.getElementById("nummasternode").value;
    document.getElementById("bulkAmount").value = amountt*<?php echo $amount?>;
    console.log("??1",document.getElementById("bulkAmount").value);
}
$( document ).ready(function() {

    $('#upload_file').change(function(){ 
    
    const fi = document.getElementById('upload_file');
    if ('files' in fi) {
        if (fi.files.length == 0) {
        txt = "Select one or more files.";
        } else {
        for (var i = 0; i < fi.files.length; i++) {
            var file = fi.files[i];
            if ('name' in file) {
            var filename = file.name;
            document.getElementById('upload_file').innerHTML = filename;
            filextension=filename.split(".");
            filext="."+filextension.slice(-1)[0];
            
            valid=[".pdf"];
                if (valid.indexOf(filext.toLowerCase())==-1){
                    document.getElementById("error").style.display = "block";
                    document.getElementById("masternode_payment").disabled = true;
                    
                    if ('size' in file) {
                        const fsize = file.size; 
                        if(parseFloat(fsize) > 10485760) {
                            document.getElementById("error1").style.display = "block";
                        }
                        else{
                            document.getElementById("error1").style.display = "none";
                        }
                    }
                } 
                else{
                    document.getElementById("error").style.display = "none";
                    document.getElementById("masternode_payment").disabled = false;
                    
                    if ('size' in file) {
                        const fsize = file.size; 
                        if(parseFloat(fsize) > 10485760) {
                            document.getElementById("error1").style.display = "block";
                        }
                        else{
                            document.getElementById("error1").style.display = "none";
                        }
                    }
                }
            }
            
        }
        }
    }         
    
});
    
});
</script>