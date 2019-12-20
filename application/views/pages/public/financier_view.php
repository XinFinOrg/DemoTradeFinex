 <!-- Inside Page Financiers -->
 <div class="sub_page_wraper">

<section class="tf-inner-banner">
	<div class="container">
		<h3>Finaciers</h3>
		<h4>Expand your trade finance portfolio.</h4>
	</div>
</section>

<!-- Financiers -->
<section id="Financiers" class="section pb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2 class="mb-20">Instrument Currently Active for Funding</h2>
				</div>
			</div>
		</div>

		<div class="row">
                    <div class="col-md-12">
                        <div class="tf-financier-table tf-element">
                            <div class="overflow-fade left on"></div>
                            <div class="overflow-fade right on"></div>
                            <div class="table">
                                <div class="table-head">
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 16%;"><span>Instrument Type</span></div>
                                    </div>
									<div class="cell-wrapper">
                                        <div class="table-cell" style="width: 16%;"><span>Instrument Ref</span></div>
                                    </div>
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 17%;"><span>Country of Origination</span></div>
                                    </div>
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 15%;"><span>Amount</span></div>
                                    </div>
                                    <div class="cell-wrapper">
                                        <div class="table-cell" style="width: 16%;"><span>Date of Maturity</span></div>
                                    </div>
                                </div>
                                <div>
                                    <?php
                                // if ($instrumnent && !empty($instrumnent) && is_array($instrumnent) && sizeof($instrumnent) <> 0) {
                                    foreach ($instrument as $instru) { ?>
                                    <div class="table-row collapsed">
                                        <div class="cell-wrapper">
                                            <div class="table-cell bold" style="width: 16%;"><span><?php echo $instru->tfi_instrument ?></span></div>
                                        </div>
										<div class="cell-wrapper">
                                            <div class="table-cell bold small" style="width: 16%;"><?php echo $instru->tfi_docRef ?></div>
                                        </div>
                                        <div class="cell-wrapper">
                                            <div class="table-cell" style="width: 17%;"><span><?php echo $instru->tfi_country ?></span></div>
                                        </div>
                                        <div class="cell-wrapper">
                                            <div class="table-cell bold" style="width: 15%;"><span><?php echo $instru->tfi_currency.'&nbsp;'. rtrim(rtrim(sprintf('%.10f',$instru->tfi_amount),'0'),'.') ?></span></div>
                                        </div>
                                        <div class="cell-wrapper">
                                            <div class="table-cell" style="width: 16%;"><span><?php echo $instru->tfi_maturityDate ?></span></div>
                                        </div>
                                        <div class="table-cell" style="width: 16%;">
											<a class="btn btn-blue" href="#" disabled><span>Get Document Access</span></a>
										</div>
                                    </div>
                                    <?php }?>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
	</div>
</section>
<!-- /. Financiers -->

</div>
<!-- /. Inside Page Financiers -->

<?php
	
	// $this->load->view('includes/block_create_account');
	//$this->load->view('includes/block_features');	
	$this->load->view('includes/login_modal');
	
?>	
