<!-- Inside Page Financiers -->
<div class="sub_page_wraper">

<section class="tf-inner-banner">
	<div class="container">
		<h3>Statistics</h3>
		<h4>Real time, Trade and Finance Funding Data</h4>
	</div>
</section>

<!-- Financiers -->
<section id="Financiers" class="section pb-40">
	<div class="container">
		<div class="row">
			<div class="col-md-8 col-md-offset-2">
				<div class="section-title text-center">
					<h2 class="mb-0">Statistics</h2>
				</div>
			</div>
		</div>		
		
		
		<div class="row projectFactsWrapColumns">
                <div class="col-md-12">
					<!--<div class="section-title text-center">
						<h3 class="mb-0">Total Instruments</h3>
					</div>-->
					<div id="projectFacts" class="sectionClass">
    <div class="fullWidth eight columns">
        <div class="projectFactsWrap">
            <div class="item single">
                <p id="number1" class="counter"><?php echo $total_count ?></p>
                <span></span>
                <p>Total Instruments For Funding</p>
				<!-- <p class="small">(Amount in USD)</p> -->
            </div>
			<div class="item single">
                <p id="number2" class="counter"><?php echo $count ?></p>
                <span></span>
                <p>Active Instruments For Funding</p>
				<!-- <p class="small">(Amount in USD)</p> -->
            </div>
			<div class="item single">
                <p id="number3" class="counter"><?php echo $tot_sum ?></p>
                <span></span>
                <p>Total Value of Trade Instruments</p>
				<!-- <p class="small">(Amount in USD)</p> -->
            </div>
        </div>
    </div>
</div>
					
                </div>
				
                <div class="col-md-12">
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
                </div>
					
					
					
				<!-- </div>
        </div>
	 -->
	
		

		
</section>
<!-- /. Financiers -->

</div>




<?php
	
	// $this->load->view('includes/block_create_account');
	//$this->load->view('includes/block_features');	
	$this->load->view('includes/login_modal');
	
?>	

<script src="https://code.jquery.com/jquery-1.9.1.js"></script>



<!--Animated counters script start -->
<script>
$(document).ready(function() {
	$('.counter').each(function () {
		$(this).prop('Counter',0).animate({
		Counter: $(this).text()
	}, {
	duration: 4000,
	easing: 'swing',
	step: function (now) {
		//$(this).text(Math.ceil(now));
		$(this).text(this.Counter.toFixed(0));
	}
	});
	});
});
</script>
<!--Animated counters script end -->
