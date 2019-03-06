<div class="sub_page_wraper">
	<section class="bond_form_block">
		<div class="container">
				<div class="col-md-5 col-sm-5 col-xs-12 text-center sign_up_box">
					<div class="right_side">
						<h3 class="title"> Create Bonds </h3>
						<?php $attributes = array('id' => 'bond_create-form', 'class' => 'bond_form form-commom', 'method' => 'post', 'role' => 'form');
						echo form_open_multipart(base_url().'publicv/bond_create/', $attributes); ?>
						<div class="form-group focus-group">
							<label class="form-label">
								<input class="input-focus input-focus-notr" id="tokenName" name="tokenName" type="text" autocomplete="" data-required-error="" tabindex="1" aria-required="true" />
								<span class="form-name floating-label">Bond Name<sup>*</sup></span> 
							</label>
						</div>
						<div class="form-group focus-group">
							<label class="form-label">
								<input class="input-focus input-focus-notr" id="tokenSymbol" name="tokenSymbol" type="text" autocomplete="" data-required-error="" tabindex="2" aria-required="true" />
								<span class="form-name floating-label">Bond Symbol<sup>*</sup></span> 
							</label>
						</div>
						<div class="form-group focus-group">
							<label class="form-label">
								<input class="input-focus input-focus-notr" type="text" autocomplete="" data-required-error=""  aria-required="true" value="Zero Coupon" readonly="true"/>
								<span class="form-name floating-label">Type Of Bond<sup>*</sup></span>
								 
							</label>
						</div>
						
						<div class="form-group focus-group">
							<label class="form-label">
								<input class="input-focus input-focus-notr" id="tokenDecimals" name="tokenDecimals" type="text" autocomplete=""  data-required-error=""  aria-required="true" value= 18 readonly="" aria-invalid="false" />
								<span class="form-name floating-label">Decimals<sup>*</sup></span> 
							</label>
						</div>

						<div class="form-group focus-group">
						<label class="form-label">
							<input class="input-focus input-focus-notr" id="tokenSupply" name="tokenSupply" type="text" autocomplete="" data-required-error="" tabindex="3" aria-required="true" />
							<span class="form-name floating-label">Issuance Size(Market Supply)<sup>*</sup></span> 
							</label>
						</div>

						<div class="form-group focus-group">
						 <label class="form-label">
							<input class="input-focus input-focus-notr" id="bonusRate" name="bonusRate" type="text" autocomplete="" data-required-error="" tabindex="4" aria-required="true" />
							<span class="form-name floating-label">Minimum Contribution<sup>*</sup></span> 
						 </label>
						</div>

						<div class="form-group focus-group">
						 <label class="form-label">
							<input class="input-focus input-focus-notr" id="ethRate" name="ethRate" type="text" autocomplete="" data-required-error="" tabindex="5" aria-required="true" />
							<span class="form-name floating-label">Face Value<sup>*</sup></span> 
						 </label>
						</div>

						<div class="form-group focus-group">
						 <label class="form-label">
							<input class="input-focus input-focus-notr" id="coupon" name="coupon" type="text" autocomplete="" data-required-error="" tabindex="6" aria-required="true" />
							<span class="form-name floating-label">Coupon (%) <sup>*</sup></span> 
						 </label>
						</div>

						<div class="form-group focus-group">
						 <label class="form-label">
							<input class="input-focus input-focus-notr" id="tenure" name="tenure" type="text" autocomplete="" data-required-error="" tabindex="7" aria-required="true" />
							<span class="form-name floating-label">Tenure (in Years)<sup>*</sup></span> 
						 </label>
						</div>

						<div class="form-group focus-group" style="border-bottom: 1px solid #eee">
						 <label class="form-label">
							<input class="input-focus input-focus-notr" id="dvalue" name="dvalue" type="text" autocomplete="" data-required-error=""  aria-required="true" />
							<span class="form-name floating-label">Discounted Value <sup>*</sup></span> 
						 </label>
						</div>
						<div class="form-group focus-group">
						 <label class="hidden">
							<input class="input-focus input-focus-notr" id="isPausable" name="isPausable" value="true" />
							<span class="form-name floating-label">isPausable<sup>*</sup></span> 
						 </label>
						</div>
						<div class="form-group focus-group">
						 <label class="hidden">
							<input class="input-focus input-focus-notr" id="isBurnable" name="isBurnable" value="true" />
							<span class="form-name floating-label">isBurnable<sup>*</sup></span> 
						 </label>
						</div>
						<div class="form-group focus-group">
						 <label class="hidden">
							<input class="input-focus input-focus-notr" id="isMintable" name="isMintable" value="true"/>
							<span class="form-name floating-label">isMintable<sup>*</sup></span> 
						 </label>
						</div>
						<div class="form-group focus-group">
						 <label class="hidden">
							<input class="input-focus input-focus-notr" id="isUpgradeable" name="isUpgradeable" value="true"/>
							<span class="form-name floating-label">isUpgradeable<sup>*</sup></span> 
						 </label>
						</div>
						<div class="form-group">
							<div class="form-label">
								<input class="input-focus input-focus-notr" id="defaultReal" name="defaultReal" captchav="" autocomplete="" maxlength="50" required data-required-error="" tabindex="8" aria-required="true" type="text">
								<span class="form-name floating-label">ENTER CAPTCHA<sup>*</sup></span> 
							</div>
							<div class="captcha-error has-error" style="display:none"><div class="help-block col-xs-12 col-sm-reset inline"><font color="red" style="margin-left: -10px;">Enter Letters Shown Above.</font></div></div><!-- Invalid Captcha ! -->
						</div>
						<div class="form-group"><input type="hidden" name="action" value="send_mail" /><input type="hidden" id="captcha_val" /></div>
												
						<div class="form-group">
							<div class="btn-more">
							<button type="submit" id="bond_create" class="btn btn-info" tabindex="9"> Create Bond</button>
							</div>
						</div>
						</form>
					</div>
				</div>
				
			</div>
		
	</section>
</div>
<?php
	//$this->load->view('includes/block_features');
	$this->load->view('includes/login_modal');
?>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>

<div class="modal fade" id="contract" role="dialog" tabindex="-1" >
		<div class="modal-dialog" style="width:1500px; overflow-y: scroll; margin-left  25%;max-height:80%;max-width: 50%">
			<!-- Modal content-->

			<div class="modal-content">

				<div class="modal-body">

						<pre id="contractData"  >

						</pre>
				
					
						
						<div class="btn-more">
							<button id="deploy_contract" type="submit" class="btn btn-info" data-dismiss='modal' data-backdrop="static" data-keyboard="false"> Deploy </button> </div>
						
							                                           
			</div>
		</div>
	 </div>
</div>

<div id="loader" style="display: none;"></div>
<div class="modal fade" id="thankyou" role="dialog" tabindex="-1" >
		<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:80%;max-width: 50%">
			<!-- Modal content-->

			<div class="modal-content">

				<div class="modal-body">

						<p>Your contract has successfully been deployed.</p>
						<p><span><b>Transaction Hash:</b></span> <span id="deployDataTHash"></span></p>
						<p><span><b>Contract Address:</b></span> <span id="deployDataCAddress"></span></p>
						<div class="btn-more">
							<a href="<? base_url();?>" type="submit" class="btn btn-info" data-dismiss='modal' data-backdrop="static" data-keyboard="false"> Ok </a> 
						</div>						
							                                           
				</div>
			</div>
	 	</div>
</div>
  
