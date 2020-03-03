<div class="col-md-12">
	<ul class="breadcrumb bc-3">
		<li>
			<a href="<?php echo base_url() ?>dashboard"><i class="fa fa-home"></i> Home</a>
		</li>
		<li>
			Projects
		</li>
		<?php if($breadcumb <> ''){ ?>
		<li class="active">
			<strong><?php echo $breadcumb ?></strong>
		</li>
		<?php } ?>

	</ul>
	<hr/>	
	<span class=""><?php echo $this->session->flashdata('op_msg'); ?></span>
            <?php if($sub == 'listing_approve' || $sub == 'listing_reject'){ ?>
                <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                <a href = "#user_details" class="text-align:right" data-toggle="collapse">Project Details</a>	
                            </div>
                            <div id="user_details" class="collapse in panel-body">
                            
                                <div class="row">
                                    <div class="form-group">
                                        <label for="first name" class="col-sm-4 control-label">Project No. :</label>
                                        <div class="col-sm-8">
                                        <?php echo 'TF-'.strtotime($prow->postDate) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="form-group">
                                        <label for="last name" class="col-sm-4 control-label">Project Title :</label>
                                        <div class="col-sm-8">
                                            <?php echo ucfirst($prow->title) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Description :</label>
                                        <div class="col-sm-8">
                                        <?php echo ucfirst($prow->description) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Special Remarks :</label>
                                        <div class="col-sm-8">
                                        <?php echo ucfirst($prow->special_remarks) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Industry :</label>
                                        <div class="col-sm-8">
                                        <?php echo ucfirst($prow->cat_name) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Industry Sector :</label>
                                        <div class="col-sm-8">
                                            <?php $sectorsa = explode(',', $prow->sectors);
                                                                    
                                            for($i=0; $i < sizeof($sectorsa); $i++){
                                                if($i > 0){
                                                    echo ', ';
                                                }
                                                echo ''.ucfirst(str_replace('-', ' ', str_replace('~', ' ', $sectorsa[$i]))).'';
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="form-group">
                                        <label for="contact" class="col-sm-4 control-label">Company :</label>
                                        <div class="col-sm-8">
                                        <?=ucwords($prow->tfcom_name);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="pic" class="col-sm-4 control-label">Profile Pic :</label>
                                        <div class="col-sm-2">
                                            
                                        </div>		
                                    </div>
                                </div>
                            </div>
                        
                        </div>
                    </div>	
            <?php }else{ ?>
                <?php 
                
                    if(!empty($projects) && is_array($projects) && sizeof($projects) <> 0){
                        
                        $i = 0;
                        
                        foreach($projects as $prow){
                            $i++;	
                            $start_date = new DateTime($prow->closingDate);
                            $since_start = $start_date->diff(new DateTime($prow->postDate));
                            $postago = '';
				
                            if(intval($since_start->y) > 0){
                                $postago .= $since_start->y.' '.($since_start->y > 1 ? 'years ' : 'year ');
                                
                                if(intval($since_start->m) > 0){
                                    $postago .= $since_start->m.' '.($since_start->m > 1 ? 'months ' : 'month ');
                                    
                                    if(intval($since_start->d) > 0){
                                        $postago .= $since_start->d.' '.($since_start->d > 1 ? 'days ' : 'day ');
                                    }
                                }
                            }else{
                                if(intval($since_start->m) > 0){
                                    $postago .= $since_start->m.' '.($since_start->m > 1 ? 'months ' : 'month ');
                                    
                                    if(intval($since_start->d) > 0){
                                        $postago .= $since_start->d.' '.($since_start->d > 1 ? 'days ' : 'day ');
                                    }
                                }else{
                                    if(intval($since_start->d) > 0){
                                        $postago .= $since_start->d.' '.($since_start->d > 1 ? 'days ' : 'day ');
                                    }else{
                                        if(intval($since_start->h) > 0){
                                            $postago .= $since_start->h.' '.($since_start->h > 1 ? 'hours ' : 'hour ');
                                            
                                            if(intval($since_start->i) > 0){
                                                $postago .= $since_start->i.' '.($since_start->i > 1 ? 'minutes ' : 'minute ');
                                            }
                                        }else{
                                            if(intval($since_start->i) > 0){
                                                $postago .= $since_start->i.' '.($since_start->i > 1 ? 'minutes ' : 'minute ');
                                                
                                                if(intval($since_start->s) > 0){
                                                    $postago .= $since_start->s.' '.($since_start->s > 1 ? 'seconds ' : 'second ');
                                                }
                                            }else{	
                                                $postago .= $since_start->s.' '.($since_start->s > 1 ? 'seconds ' : 'second ');
                                            }
                                        }
                                    }
                                }
                            }
                ?>
                    
                    <div class="col-md-12">
                        <div class="panel panel-default">
                            <div class="panel-heading" >
                                <a href = "#user_details" class="text-align:right" data-toggle="collapse">Project Details</a>	
                            </div>
                            <div id="user_details" class="collapse in panel-body">
                                <div class="row">
                                    <div class="form-group">
                                        <label for="first name" class="col-sm-4 control-label">Project No. :</label>
                                        <div class="col-sm-8">
                                        <?php echo 'TF-'.strtotime($prow->postDate) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row"> 
                                    <div class="form-group">
                                        <label for="last name" class="col-sm-4 control-label">Project Title :</label>
                                        <div class="col-sm-8">
                                            <?php echo ucfirst($prow->title) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Description :</label>
                                        <div class="col-sm-8">
                                        <?php echo ucfirst($prow->description) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Special Remarks :</label>
                                        <div class="col-sm-8">
                                        <?php echo ucfirst($prow->special_remarks) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">   
                                    <div class="form-group">
                                        <label for="email" class="col-sm-4 control-label">Industry :</label>
                                        <div class="col-sm-8">
                                        <?php echo ucfirst($prow->cat_name) ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="form-group">
                                        <label class="col-sm-4 control-label">Industry Sector :</label>
                                        <div class="col-sm-8">
                                            <?php $sectorsa = explode(',', $prow->sectors);
                                                                    
                                            for($i=0; $i < sizeof($sectorsa); $i++){
                                                if($i > 0){
                                                    echo ', ';
                                                }
                                                echo ''.ucfirst(str_replace('-', ' ', str_replace('~', ' ', $sectorsa[$i]))).'';
                                            } ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">    
                                    <div class="form-group">
                                        <label for="contact" class="col-sm-4 control-label">Company :</label>
                                        <div class="col-sm-8">
                                        <?=ucwords($prow->tfcom_name);?>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="pic" class="col-sm-4 control-label">Country :</label>
                                        <div class="col-sm-2">
                                        <?=ucwords($prow->tfc_name);?>
                                        </div>		
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="pic" class="col-sm-4 control-label">Project Type :</label>
                                        <div class="col-sm-2">
                                        <?=ucfirst($prow->cont_name);?>
                                        </div>		
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="pic" class="col-sm-4 control-label">Posted on :</label>
                                        <div class="col-sm-2">
                                        <?=date('d M Y, h A', strtotime($prow->updatingDate)).'';?>
                                        </div>		
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="pic" class="col-sm-4 control-label">Validity :</label>
                                        <div class="col-sm-2">
                                        <?=$postago?>
                                        </div>		
                                    </div>
                                </div>
                                <?php if($prow->fixedBudget && $prow->fixedBudget <> 0){ ?>
                                <div class="row">
                                    <div class="form-group">
                                        <label for="pic" class="col-sm-4 control-label">Trade Amount :</label>
                                        <div class="col-sm-2">
                                        <?='<font>'.$prow->tfcu_name.'</font> '.((!empty($proposals_subcontractor_info) && sizeof($proposals_subcontractor_info) <> 0) ? number_format($prow->tfss_contract_amount, 0, '', ',') : number_format($prow->fixedBudget, 0, '', ','));?>
                                        </div>		
                                    </div>
                                </div>
                                <?php } if($prow->financing_amount && $prow->financing_amount <> 0){ ?>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="pic" class="col-sm-4 control-label">Finance Amount :</label>
                                            <div class="col-sm-2">
                                            <?='<font>'.$prow->tfcu_name.'</font> '.number_format($prow->financing_amount, 0, '', ',');?>
                                            </div>		
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group">
                                            <label for="pic" class="col-sm-4 control-label">Finance Tenure :</label>
                                            <div class="col-sm-2">
                                            <?='<font>'.$prow->financing_tenure_value.'</font> '.(($prow->financing_tenure_ref == 3) ? 'Months' : '');?>
                                            </div>		
                                        </div>
                                    </div>
                            
                            <?php } ?>
                        </div>
                    </div>
                    
                    
                <?php }
                        } ?>
            
	        <?php } ?>
	<!-- <b>P</b> - Project -->
</div>		
<a id="click_mpopup" data-toggle="modal" data-target="#myModalP_msg">&nbsp;</a>
<div class="modal fade" id="myModalP_msg" role="dialog">
	<div class="modal-dialog">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close close_mpopup" data-dismiss="modal">&times;</button>
				<h3 class="modal-title"><strong>Reasons for rejection</strong></h3>
			</div>
			<div class="modal-body">
				<textarea cols="5" rows="10" id="reason_msg" style="width:100%" placeholder="Type here ..."></textarea>
				<span class="alert emsg" style="color:red;font-size:15px;">Please type something to submit this.</span>
			</div>
			<div class="modal-footer">
				<button class="btn btn-danger close_mpopup" type="button" data-dismiss="modal"><i class="ace-icon fa fa-times bigger-120"></i> Cancel</button>
				<button class="btn btn-primary send_mail" type="button"><i class="ace-icon fa fa-envelope bigger-120"></i> Submit</button>
				<input type="hidden" value="0" id="mrow_id" name="mrow_id" />
			</div>
		</div>
	</div>
</div>