    <!-- Inside Page Buyers / Suppliers -->
    <div class="sub_page_wraper">

        <section class="tf-inner-banner">
            <div class="container">
                <h3>Brokers</h3>
                <h4>Digitize and Automate Document Distribution with financiers.</h4>
            </div>
        </section>

        <!-- Buyers / Suppliers Form -->
        <section id="xdc-protocol-features-benefits" class="section" >
            <div class="container"id="createinstrument"style="display:block;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center pb-30">
                            <h2 class="mb-0">Get Started</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="tf-buyer-supplier_form-block">
                            <form id="suppliers_form" class="tf-suppliers-form" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label for="instrument-type">Type of Instrument</label>

                                    <div id="tab" class="tf-form-tabs" data-toggle="buttons">
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="receivable" id="Receivable" />Receivable
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="loc" id="Letter-of-Credit" />Letter of Credit
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="bg" id="Bank-Guarantees" />Bank Guarantees
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="sblc" id="SBLC" />SBLC
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="warehouse receipt" id="Warehouse-Receipt" />Warehouse Receipt
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="payable" id="Payable" />Payable
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="instrument" value="other" id="Other" />Other
                                        </a>
                                    </div>
                                </div>
                                <div id="broker-name" class="form-group">
                                    <label for="broker-name">Broker Name</label>
                                    <input type="text" class="form-control" id="broker-name" name="broker-name" placeholder="Broker Name">
                                </div>
                                <div id="select-country" class="form-group">
                                    <label for="country-origination">Country of Origination</label>
                                    <select class="form-control" id="pcountry" name="pcountry">
                                        <option value="" disabled="" selected="">Select Country</option>
                                            <?php
                                                if ($pcountries && !empty($pcountries) && is_array($pcountries) && sizeof($pcountries) <> 0) {

                                                    foreach ($pcountries as $prow) {

                                                        echo '<option value="' . $prow->tfc_name . '" ' . ($prow->tfc_id == $pcountry ? 'selected' : '') . '>' . $prow->tfc_name . '</option>';
                                                        
                                                    }
                                                }
                                                ?>
                                        
                                    </select>
                                </div>

                                <div class="row">
                                <div id="currency_supported" class="form-group col-md-6">
                                        <label for="currency_supported">Currency</label>
                                        <select class="form-control" id="currency_supported" name="currency_supported">
                                            <option value="" disabled="" selected="">Select Currency</option>
                                            <option value="usd">USD</option>
                                            <option value="gbp">GBP</option>
                                            <option value="jpy">JPY</option>
                                            <option value="eur">EUR</option>
                                            <option value="xdc">XDC</option>
                                        </select>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="amount">Instrument Value</label>
                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                                    </div>
                                </div>
                               <div class="row">
                                    <div class="form-group col-md-6">
                                        <!--<label for="maturity-date">Instrument Maturity Date</label>
                                        <input type="date" class="form-control" id="maturity_date" name="maturity_date" placeholder="dd/mm/yyyy">-->
										<label for="maturity-date">Instrument Maturity Date</label>
										<div id="date" data-date-format="dd-mm-yyyy">
										<input  type="text" class="form-control" id="maturity_date" name="maturity_date" placeholder="dd-mm-yyyy">
										<div class="input-group-addon" style="display:none"><span class="fa fa-calendar"></span></div>
										</div>
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="Name">Document Ref No.</label>
                                        <input type="text" class="form-control" id="name" name="name" placeholder="Instrument Ref/Name">
                                    </div>
                                </div>

                                <!-- <div class="tf-notice">
                                    <div class="tf-notice_content">
                                        <p>Origination and deal distribution fees 0.001% of instrument value.</p>
                                    </div>
                                </div> -->

                                <div class="form-group">
                                    <label for="supporting-document">Upload All Supporting Documents as one PDF file, Max 10 MB * </label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <span class="btn btn-primary" onClick="$(this).parent().find('input[type=file]').click();">Browse</span>
                                        <input name="uploaded_file" id = "uploaded_file"onChange="$(this).parent().parent().find('.form-control').html($(this).val().split(/[\\|/]/).pop());" accept=".jpg,.png,.pdf" style="display: none;" type="file">
                                        </span>
                                        <span class="form-control"></span>
                                    </div>
                                    <p>* Origination & deal distribution fees 0.001% of instrument value. This document will be encrypted & stored on Blockchain Network. Viewable to funder only after owner's permission.</p>
                                    <label for="supporting-document" style="display:none" id="error">Please upload correct file format.</label>
                                    <label for="supporting-document" style="display:none" id="error1">Please file less than 5MB</label>
                                </div>

                                <div class="form-group">
                                    <label for="private-key">Enter Private Key <span><a href="https://howto.xinfin.org/XinFinWallet/features/" target="_blank">How to Create PrivateKey?</a></span></label>
                                    <input type="text" class="form-control" id="private_key" name="private_key" placeholder="Enter Private Key">
                                </div>

                                <div class="form-group">
                                    <button  id = "suppliers" name = "suppliers" type="submit" class="btn btn-blue text-uppercase">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <div id="loader" style="display: none;"></div>
            <div class="container"id="deploy" style="display:none;">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="section-title text-center pb-30">
                            <h2 class="mb-0">Deploy</h2>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <div class="tf-buyer-supplier_form-block">
                            

                                <div class="form-group">
                                        <label for="contract">Contract</label>
                                        <pre id="contractData" class="language-markup scrollable" disabled>
                                        
									</pre>
                                </div>

                               
                                <div class="form-group">
                                    <button type="submit" class="btn btn-blue text-uppercase"id="deploy_contract">Deploy</button>
                                </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Buyers /Suppliers Form -->

    </div>

   
    <!-- /. Inside Page Buyers / Suppliers Detail -->
    

<?php
	
	// $this->load->view('includes/block_create_account');
	//$this->load->view('includes/block_features');	
	$this->load->view('includes/login_modal');
	
?>	
<div id="loader" style="display: none;"></div>
<div class="modal fade" id="thankyou" role="dialog" tabindex="-1" data-keyboard="false" data-backdrop="static">
		<div class="modal-dialog" style="">
		<!--<div class="modal-dialog" style="width:1500px; ; margin-left  25%;max-height:60%;max-width: 30%">-->
			<div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal"> <span class="hidden-xs">&times;</span> <span class="hidden-md hidden-lg"> <img src="<?php echo base_url() ?>assets/images/icon/log_arrow.png"  alt="icon" /></span> </button>
                </div>
				<div class="modal-body text-center">

                        <p>Contract Deployment Successfully.</p><p><strong>Please save the contract address for further use.<strong></p>
                        <p id="deployedData" style="word-break: break-all;" ></p>
						
						<div class="form-group">
							<button id="DeployBtn" type="submit" class="btn btn-blue text-uppercase"  data-keyboard="false"> Ok </button> 
						</div>						
							                                           
				</div>
			</div>
	 	</div>
</div>
<?php
        $this->load->view('includes/footer_commonn', $data);
		$this->load->view('pages_scripts/finance_doc_scripts', $data);
        $this->load->view('includes/footern');
?>
<!-- Form Skip to next Heading -->
<script type="text/javascript">
    $(function() {
        $('a[href*=#]').on('click', function(e) {
            e.preventDefault();
            $('html, body').animate({
                scrollTop: $($(this).attr('href')).offset().top
            }, 500, 'linear');
        });
    });
</script>
<!-- Form Skip to next Heading -->




