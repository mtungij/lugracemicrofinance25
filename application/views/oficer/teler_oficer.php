<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

    <div id="main-content">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("oficer/index"); ?>"><i class="icon-home"></i></a></li>                            
                            <li class="breadcrumb-item active"><?php echo $this->lang->line("report_menu"); ?></li>
                            <li class="breadcrumb-item active"><?php echo $this->lang->line("branchwise_report_menu"); ?></li>
                        </ul>
                    </div>            
                 
                </div>
            </div>
                  <?php if ($das = $this->session->flashdata('massage')): ?> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="alert alert-dismisible alert-success"> <a href="" class="close">&times;</a> 
                                    <?php echo $das;?> </div> 
                            </div> 
                        </div> 
                    <?php endif; ?>
            <div class="row clearfix">
                <div class="col-lg-12">
                    <div class="card">
                         <div class="header">
                            <h2>Teller Officer Transactions </h2> 
                            <!-- <div class="pull-right">
                               <a href="" data-toggle="modal" data-target="#addcontact2" class="btn btn-primary"><i class="icon-calendar">Filter</i></a>  
                            </div> -->   
                             </div>
                          <div class="body">
                            <div class="table-responsive">



                            <table class="table table-hover js-basic-example dataTable table-custom">
                            <thead class="thead-primary">
			  						           <tr>
				  							    <th>Officer Name</th>
				  					
				  							    <th>S/No.</th>
												<th>Customer Name</th>
												<th>Phone Number</th>
												<th>Duration</th>
												<th>Receivable</th>
												<th>Received</th>
												<th>Account</th>
												<th>Withdrawal</th>
												<th>Account</th>
				  						       </tr>
						                  </thead>
			
								    <tbody>
                                          <?php $no = 1; ?>
								<?php foreach ($empl_oficer as $oficer_datas): ?>
									 <tr>
				  					<td>
				  						<b><?php echo $oficer_datas->empl_name; ?></b>	
				  						</td>
				  						<td></td>
				  					<td style="border: none;"> </td>
				  					<td style="border: none;"></td>
				  					<td style="border: none;"></td>
				  					<td style="border: none;"></td>
				  					<td style="border: none;"></td> 
				  					<td style="border: none;"></td>
				  					<td style="border: none;"></td> 
				  					<td style="border: none;"></td> 
				  					<td style="border: none;"></td> 		
                                   </tr>
                                 
                               <?php
                               $empl_loan = $this->queries->get_loan_empl_data($oficer_datas->empl_id);
                            //    echo "<pre>";
                            //    print_r($empl_loan);
                            //          exit();
                                ?>
                                <?php $no = 1; ?>
                                <?php foreach ($empl_loan as $empl_loans): ?>
									 <tr>
				  					
				  					<td></td>
				  					<td class="c"><?php echo $no++; ?>. </td>
				  					<td class="c">
				  					   <?php echo $empl_loans->f_name; ?> <?php echo $empl_loans->m_name; ?> <?php echo $empl_loans->l_name; ?>
				  					</td>
				  					<td>
				  						<?php echo $empl_loans->phone_no; ?>
				  					</td>
				  					<td>
				  						<?php if($empl_loans->day == '1'){ ?>
				  							<?php echo "Daily"; ?>
				  						<?php }elseif ($empl_loans->day == '7'){
				  							echo "Weekly";
				  						 ?>
				  						 <?php }elseif ($empl_loans->day == '30' || $empl_loans->day == '31' || $empl_loans->day == '28' || $empl_loans->day == '29') {
				  						 	echo "Monthly";
				  						  ?>
				  						  <?php } ?>
				  					</td>
				  					<td><?php echo number_format($empl_loans->restration); ?></td> 
				  					<td><?php echo number_format($empl_loans->total_received); ?></td>
				  					<td><?php echo $empl_loans->depost_account; ?></td> 
				  					<td><?php echo number_format($empl_loans->total_withdrawal); ?></td> 
				  					<td><?php echo $empl_loans->with_account; ?></td> 						
                                   </tr>
                                    <?php endforeach; ?>
                                    <?php $total_work_individual = $this->queries->get_total_depost_individual($oficer_datas->empl_id); ?>
                                    <?php foreach ($total_work_individual as $total_work_individuals): ?>
                                    	
                                   
                                    <tr>
                                    <td></td>
				  					<td></td>
				  					<td class="c"><b>TOTAL</b> </td>
				  					<td class="c"></td>
				  					<td></td>
				  						
				  					<td>
				  						<?php //if($empl_loans->day == '1'){ ?>
				  							<?php //echo "Daily"; ?>
				  						<?php //}elseif ($empl_loans->day == '7'){
				  							//echo "Weekly";
				  						 ?>
				  						 <?php //}elseif ($empl_loans->day == '30' || $empl_loans->day == '31' || $empl_loans->day == '28' || $empl_loans->day == '29') {
				  						 	//echo "Monthly";
				  						  ?>
				  						  <?php //} ?>
				  					</td>
				  					<td></td> 
				  					<td><b><?php echo number_format($total_work_individuals->total_depost_individual); ?></b></td>
				  					<td></td> 
				  					<td><b><?php echo number_format($total_work_individuals->total_withdrawal_individual); ?></b></td> 
				  					<td></td>	
                                    </tr>
                                  <?php endforeach; ?>
                                   <tr>
                                    <td></td>
				  					<td></td>
				  					
				  					<td class="c"></td>
				  					<td></td>
				  						
				  					<td>
				  						<?php //if($empl_loans->day == '1'){ ?>
				  							<?php //echo "Daily"; ?>
				  						<?php //}elseif ($empl_loans->day == '7'){
				  							//echo "Weekly";
				  						 ?>
				  						 <?php //}elseif ($empl_loans->day == '30' || $empl_loans->day == '31' || $empl_loans->day == '28' || $empl_loans->day == '29') {
				  						 	//echo "Monthly";
				  						  ?>
				  						  <?php //} ?>
				  					</td>
				  					<td></td> 
				  					<td><b><?php //echo number_format($total_work_individuals->total_depost_individual); ?></b></td>
				  					<td></td> 
				  					<td><b><?php //echo number_format($total_work_individuals->total_withdrawal_individual); ?></b></td> 
				  					<td></td>	
                                    </tr>
                                    <?php $group_empl = $this->queries->get_empl_group_depost($oficer_datas->empl_id);?>
                                 <?php foreach ($group_empl as $group_empls): ?>
                                     <tr>
                                    <td></td>
				  					<td><?php echo $group_empls->group_name; ?></td>
				  					<td class="c"></td>
				  					<td class="c"></td>
                                  
				  					<td></td> 
				  					<td><b><?php //echo number_format($total_work_individuals->total_depost_individual); ?></b></td>
				  					<td></td> 
				  					<td><b><?php //echo number_format($total_work_individuals->total_withdrawal_individual); ?></b></td> 
				  					<td></td>	
				  					<td></td>	
                                    </tr>

                               <?php $member_group = $this->queries->member_group($group_empls->group_id); ?>
                               <?php $nos = 1; ?>
                                     <?php foreach ($member_group as $member_groups): ?>
                                      <tr>
                                    <td></td>
				  					<td><?php //echo $group_empls->group_name; ?></td>
				  					<td class="c"><?php echo $nos++; ?>.</td>
				  					<td class="c"><?php echo $member_groups->f_name; ?> <?php echo $member_groups->m_name; ?> <?php echo $member_groups->l_name; ?></td>
                                  	
				  					<td>
				  						<?php echo $member_groups->phone_no; ?>
				  					</td>
				  					<td><?php if($member_groups->day == '1'){ ?>
				  							<?php echo "Daily"; ?>
				  						<?php }elseif ($member_groups->day == '7'){
				  							echo "Weekly";
				  						 ?>
				  						 <?php }elseif ($member_groups->day == '30' || $member_groups->day == '31' || $member_groups->day == '28' || $member_groups->day == '29') {
				  						 	echo "Monthly";
				  						  ?>
				  						  <?php } ?></td> 
				  					<td><?php echo $member_groups->restration; ?>
				  						  </td>
				  					<td><?php echo number_format($member_groups->total_received); ?></td> 
				  					<td><?php echo $member_groups->depost_account; ?></td> 
				  					<td><?php echo number_format($member_groups->total_withdrawal); ?></td>	
				  					<td><?php echo $member_groups->with_account; ?></td>	
                                    </tr>
                                <?php endforeach; ?>
                                
                                <?php $total_work_group = $this->queries->get_total_group_depost($group_empls->group_id); ?>
                                <?php foreach ($total_work_group as $total_work_groups): ?>
                                <tr>
                                    <td></td>
				  					<td><b>TOTAL</b></td>
				  					<td class="c"></td>
				  					<td class="c"></td>
                                  	
				  					<td></td>
				  					<td><?php //if($member_groups->day == '1'){ ?>
				  							<?php //echo "Daily"; ?>
				  						<?php //}elseif ($member_groups->day == '7'){
				  							//echo "Weekly";
				  						 ?>
				  						 <?php //}elseif ($member_groups->day == '30' || $member_groups->day == '31' || $member_groups->day == '28' || $member_groups->day == '29') {
				  						 	//echo "Monthly";
				  						  ?>
				  						  <?php //} ?></td> 
				  					<td><?php //echo $member_groups->restration; ?>
				  						  </td>
				  					<td><b><?php echo number_format($total_work_groups->total_depost_group); ?></b></td> 
				  					<td><?php //echo $member_groups->depost_account; ?></td> 
				  					<td><b><?php echo number_format($total_work_groups->total_withdrawal_group); ?></b></td>	
				  					<td><?php //echo $member_groups->with_account; ?></td>	
                                    </tr>
                                 <?php endforeach; ?>
                                  <?php endforeach; ?>
                                  <?php $ofice_repayment = $this->queries->get_total_empl_depost_data($oficer_datas->empl_id);
                                //   echo "<pre>";
                                // print_r($ofice_repayment);
                                //          exit();
                                   ?>

                                  <?php foreach ($ofice_repayment as $ofice_repayments): ?>
                                  <tr>
                                  	<td style="color:green;"><b>OFFICER TOTAL REPAYMENT:</b></td>
				  					<td><b></b></td>
				  					<td class="c"></td>
				  					<td class="c"></td>
                                  	
				  					<td></td>
				  					<td></td>
				  					
				  					<td style="color:green;"><b><?php echo number_format($ofice_repayments->total_depost_oficer); ?></b></td> 
				  					<td><?php //echo $member_groups->depost_account; ?></td> 
				  					<td style="color:green;"><b><?php echo number_format($ofice_repayments->total_withdrawal_oficer); ?></b></td>	
				  					<td><?php //echo $member_groups->with_account; ?></td>
                                  </tr>
                               <?php endforeach; ?>
                            <?php endforeach; ?>
                       </tbody>
                   </table>
       
                                        
                            </div>
                        </div>

                    </div>
                </div> 


             
            </div>
        </div>
    </div>
</div>

<?php include('incs/footer.php'); ?>


 <div class="modal fade" id="addcontact2<?php //echo $employees->empl_id; ?>" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h6 class="title" id="defaultModalLabel">Filter Cash Transaction</h6>
            </div>
            <?php echo form_open("oficer/filter_cashTransaction"); ?>
            <div class="modal-body">
                <div class="row clearfix">

                                <div class="col-md-6 col-6 ">
                                    <?php $date = date("Y-m-d"); ?>
                                    <span>*From:</span>
                                    <input type="date" name="from" autocomplete="off" value="<?php echo $date; ?>" class="form-control" required>
                                </div>
                                <div class="col-md-6 col-6 ">
                                    <span>*To:</span>
                                    <input type="date" name="to" autocomplete="off" value="<?php echo $date; ?>" class="form-control" required>
                                </div>
                                <input type="hidden" name="blanch_id" value="<?php echo $empl_data->blanch_id; ?>">
                    
                </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Filter</button>
                <button type="button" class="btn btn-secondary" data-dismiss="modal">CLOSE</button>
            </div>
            <?php echo form_close(); ?>
        </div>
    </div>
</div>


