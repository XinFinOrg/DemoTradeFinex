    <!-- Inside Page Buyers / Suppliers -->
    <div class="sub_page_wraper">

        <section class="tf-inner-banner">
            <div class="container">
                <h3>Buyers / Suppliers</h3>
                <h4>Improve cash flow. Easy Access to Trade Financing.</h4>
            </div>
        </section>

        <!-- Buyers / Suppliers Form -->
        <section id="xdc-protocol-features-benefits" class="section">
            <div class="container">
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
                            <form id="suppliers-form" class="tf-suppliers-form" enctype="multipart/form-data" method="post">
                                <div class="form-group">
                                    <label for="instrument-type">Type of Instrument</label>

                                    <div id="tab" class="tf-form-tabs" data-toggle="buttons">
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="Receivable" value="Receivable" id="Receivable" />Receivable
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="Letter-of-Credit" value="Letter of Credit" id="Letter-of-Credit" />Letter of Credit
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="Bank-Guarantees" value="Bank Guarantees" id="Bank-Guarantees" />Bank Guarantees
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="SBLC" value="SBLC" id="SBLC" />SBLC
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="Warehouse-Receipt" value="Warehouse Receipt" id="Warehouse-Receipt" />Warehouse Receipt
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="Payable" value="Payable" id="Payable" />Payable
                                        </a>
                                        <a href="#select-country" class="btn btn-default" data-toggle="tab">
                                            <input type="radio" class="" name="Other" value="Other" id="Other" />Other
                                        </a>
                                    </div>
                                </div>

                                <div id="select-country" class="form-group">
                                    <label for="country-origination">Country of Origination</label>
                                    <select class="form-control" id="pcountry" name="pcountry">
                                        <option value="" disabled="" selected="">Select Country</option>
                                            <?php
                                                if ($pcountries && !empty($pcountries) && is_array($pcountries) && sizeof($pcountries) <> 0) {

                                                    foreach ($pcountries as $prow) {

                                                        echo '<option value="' . $prow->tfc_id . '" ' . ($prow->tfc_id == $pcountry ? 'selected' : '') . '>' . $prow->tfc_name . '</option>';
                                                        
                                                    }
                                                }
                                                ?>
                                        
                                    </select>
                                </div>

                                <div class="row">
                                    <div class="form-group col-md-6">
                                        <label for="amount">Amount</label>
                                        <input type="text" class="form-control" id="amount" name="amount" placeholder="Amount">
                                    </div>
                                    <div id="currency_supported" class="form-group col-md-6">
                                        <label for="currency_supported">Currency Supported</label>
                                        <select class="form-control" id="currency_supported" name="currency_supported">
                                            <option value="" disabled="" selected="">Select Currency</option>
                                            <option value="USD">USD</option>
                                            <option value="GBP">GBP</option>
                                            <option value="GBP">JPY</option>
                                            <option value="GBP">XDC</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="maturity-date">Instrument Maturity Date</label>
                                    <input type="date" class="form-control" id="maturity_date" name="maturity_date" placeholder="dd/mm/yyyy">
                                </div>

                                <div class="tf-notice">
                                    <div class="tf-notice_content">
                                        <p>Origination and deal distribution fees 0.001% of instrument value.</p>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label for="supporting-document">Upload Supporting Document <span class="text-green">( PDF/ JPG, PNG Only )</span></label>
                                    <div class="input-group">
                                        <span class="input-group-btn">
                                        <span class="btn btn-primary" onClick="$(this).parent().find('input[type=file]').click();">Browse</span>
                                        <input name="uploaded_file" id = "uploaded_file" accept=".jpg,.png,.pdf"  onchange="Filevalidation()"    style="display: none;" type="file">
                                        </span>
                                        <span class="form-control"></span>
                                    </div>
                                    <label for="supporting-document" style="display:none" id="error">Please upload correct file format.</label>
                                    <label for="supporting-document" style="display:none" id="error1">Please file less than 5MB</label>
                                </div>

                                <div class="form-group">
                                    <label for="private-key">Enter Private Key <span><a href="https://howto.xinfin.org/XinFinWallet/features/" target="_blank">How to Create PrivateKey?</a></span></label>
                                    <input type="text" class="form-control" id="private_key" name="private_key" placeholder="Enter Private Key">
                                </div>

                                <div class="form-group">
                                    <button type="submit" class="btn btn-blue text-uppercase">Submit</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- /. Buyers /Suppliers Form -->

    </div>
    <!-- /. Inside Page Buyers / Suppliers Detail -->
    <script src="https://code.jquery.com/jquery-1.9.1.js"></script>
<script> 
    Filevalidation = () => { 
        
        const fi = document.getElementById('uploaded_file');
        var txt = "";
        if ('files' in fi) {
            if (fi.files.length == 0) {
            txt = "Select one or more files.";
            } else {
            for (var i = 0; i < fi.files.length; i++) {
                var file = fi.files[i];
                if ('name' in file) {
                var filename = file.name;
                document.getElementById('uploaded_file').innerHTML = filename;
                filextension=filename.split(".");
			    filext="."+filextension.slice(-1)[0];
                // /console.log(">>>>>>",file.name,filextension,filext);
                valid=[".jpg",".png",".jpeg",".doc",".docx",".pdf"];
                    if (valid.indexOf(filext.toLowerCase())==-1){
                        document.getElementById("error").style.display = "block";
                    } 
                    else{
                        document.getElementById("error").style.display = "none";
                    }
                }
                if ('size' in file) {
                    const fsize = file.size; 
                    if(parseFloat(fsize) > 5097152) {
                        document.getElementById("error1").style.display = "block";
                    }
                    else{
                        document.getElementById("error1").style.display = "block";
                    }
                }
            }
            }
        }         
        
    } 
</script> 
<?php
	
	// $this->load->view('includes/block_create_account');
	//$this->load->view('includes/block_features');	
	$this->load->view('includes/login_modal');
	
?>	


