<?php include('incs/header.php'); ?>
<?php include('incs/nav.php'); ?>
<?php include('incs/side.php'); ?>

    <div id="main-content" class="profilepage_2 blog-page">
        <div class="container-fluid">
            <div class="block-header">
                <div class="row">
                    <div class="col-lg-6 col-md-8 col-sm-12">
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="<?php echo base_url("admin/index"); ?>"><i class="icon-home"></i></a></li>
                            
                            <li class="breadcrumb-item active">Loan</li>
                            <li class="breadcrumb-item active">View Loan Customer Information</li>
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
                     <?php if ($das = $this->session->flashdata('error')): ?> 
                    <div class="row"> 
                        <div class="col-md-12"> 
                            <div class="alert alert-dismisible alert-danger"> <a href="" class="close">&times;</a> 
                                    <?php echo $das;?> </div> 
                            </div> 
                        </div> 
                    <?php endif; ?>

            <div class="row clearfix">
                <div class="col-lg-12 col-md-12">

                    <div class="card">
                        <div class="row profile_state">
                            <div class="col-lg-6 col-6">
                                <div class="body">
                                    <!-- <i class="fa fa-thumbs-up"></i> -->
                                <?php if ($customer->passport == TRUE) {
                                     ?>
                                <div class="profile-image"> <img src="<?php echo base_url().$customer->passport; ?>" class="rounded-circle" alt="customer image" style="width: 130px;height: 130px;">
                                      </div>
                                 <?php }else{ ?>
                                <div class="profile-image"> <img src="<?php echo base_url().'assets/img/male.jpeg'; ?>" class="rounded-circle" alt="customer image" style="width: 130px;height: 130px;">
                                      </div>
                                    <?php } ?>
                                    <small><?php echo $customer->f_name; ?> <?php echo $customer->m_name; ?> <?php echo $customer->l_name; ?></small>
                                </div>
                            </div>
                            <div class="col-lg-6 col-6">
                                <div class="body">
                                   <!--  <i class="fa fa-star"></i> -->
                                   <?php if ($local_oficer->cont_attachment == TRUE) {
                                     ?>
                                <div class="profile-image"> <img src="<?php echo base_url().$local_oficer->cont_attachment; ?>" class="rounded-circle" alt="customer image" style="width: 130px;height: 130px;">
                                      </div>
                                 <?php }else{ ?>
                                <div class="profile-image"> <img src="<?php echo base_url().'assets/img/male.jpeg'; ?>" class="rounded-circle" alt="customer image" style="width: 130px;height: 130px;">
                                      </div>
                                    <?php } ?>
                                    <small>Loan Passport</small>
                                </div>
                            </div>
                           
                            
                        </div>
                    </div>
                </div>

                  
                <div class="col-lg-12">
                    <div class="card">
                          <div class="body">
                            <div class="table-responsive">
                                <table class="table table-hover j-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Employee</th>
                                            <th>Branch</th>
                                            <th>District</th>
                                            <th>Ward</th>
                                            <th>Street</th>
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php //foreach ($loan_category as $loan_categorys): ?>
                                        <tr>
                                            <td><?php echo $customer->f_name; ?> <?php echo $customer->m_name; ?> <?php echo $customer->l_name; ?></td>
                                            <td><?php echo $customer->phone_no; ?></td>
                                            <td><?php echo $customer->empl_name; ?></td>
                                            <td><?php echo $customer->blanch_name; ?></td>
                                            <td><?php echo $customer->district; ?></td>
                                            <td><?php echo $customer->ward; ?></td>
                                            <td><?php echo $customer->street; ?></td>
                                        </tr>
                               <?php //endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                
               
                <div class="col-lg-12">
                    <div class="card">
                          <div class="body">
                            <div class="header">
                              <h2>Guarantors List</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover j-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                                        <tr>
                                            <th>S/N</th>
                                            <th>Full Name</th>
                                            <th>Phone Number</th>
                                            <th>Relationship</th>
                                            <!-- <th>Action</th> -->
                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach($sponser_detail as $sponsers_datas): ?>
                                        <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $sponsers_datas->sp_name; ?> <?php echo $sponsers_datas->sp_mname; ?> <?php echo $sponsers_datas->sp_lname; ?></td>
                                            <td><?php echo $sponsers_datas->sp_phone_no; ?></td>
                                            <td><?php echo $sponsers_datas->sp_relation; ?></td>
                                         <!--    <td><a href="" class="btn btn-sm btn-icon btn-pure btn-primary on-default m-r-5 button-edit"
                                            data-toggle="modal" data-target="#addcontact1<?php //echo $sponsers_datas->sp_id; ?>" data-original-title="Edit"><i class="icon-pencil"></i>
                                        </a>
                                       
                                    </td> -->
                                </tr>
                               <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                <div class="col-lg-12">
                    <div class="card">
                          <div class="body">
                            <div class="header">
                              <h2>Collateral</h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover j-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                                        <tr>
                                            
                                    <th>S/No.</th>
                                    <th>Collateral Name</th>
                                    <th>Collateral Condition</th>
                                    <th>Collateral Current Value</th>

                                        </tr>
                                    </thead>
                                   
                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($collateral as $collaterals): ?>
                                        <tr>
                                            <td><?php echo $no++; ?>.</td>
                                            <td><?php echo $collaterals->description; ?> </td>
                                            <td><?php echo $collaterals->co_condition; ?></td>
                                            <td><?php echo number_format($collaterals->value); ?></td>
                                           
                                          </tr>
                                    <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>
               
                <div class="col-lg-12">
                    <div class="card">
                          <div class="body">
                            <div class="header">
                              <h2>HISTORIA YA MIKOPO </h2>
                            </div>
                            <div class="table-responsive">
                                <table class="table table-hover j-basic-example dataTable table-custom">
                                    <thead class="thead-primary">
                                        <tr>
                                            
                                    <th>S/No.</th>
                                    <th>Loan Product</th>
                                    <th>Principal</th>
                                    <th>Principal + Interest</th>
                                    <th>Duration type</th>
                                    <!-- <th>Penalt Paid</th> -->
                                    <th>Disbured Date</th>
                                    <th>End Date</th>
                                    <th>Last Payment</th>
                                    <th>Credit Score</th>
                                   
                                        </tr>
                                   
                                   
                                    <tbody>
                                    <?php $no = 1; ?>
<?php if (empty($loan_history)): ?>
    <tr>
        <td colspan="5">hana mkopo kwenye system</td>
    </tr>
<?php else: ?>
    <?php foreach ($loan_history as $history): ?>
        <tr>
            <td><?php echo $no++; ?>.</td>
            <td><?php echo strtoupper($history->loan_name); ?></td>
            <td><?php echo number_format($history->loan_aprove); ?></td>
            <td><?php echo number_format($history->loan_int); ?></td>

            <td>
    <?php 
    if ($history->day == 1) {
        echo "Siku ({$history->session})";
    } elseif ($history->day == 7) {
        echo "Wiki ({$history->session})";
    } elseif ($history->day == 30 || $history->day == 31 || $history->day == 29 || $history->day == 28) {
        echo "Miezi ({$history->session})"; 
    }
    ?>
</td>

    <!-- </?php 
    if (empty($history->receve_amount)) {
        echo "<span class='badge badge-danger'>Ilisamehewa</span>"; // Badge with red color for "Not Paid"
    } else {
        echo number_format($history->receve_amount); // Format the amount with commas for readability
    }
    ?> -->




            <td><?php echo $history->loan_stat_date; ?> </td>
           <td><?php echo substr($history->loan_end_date, 0,10); ?></td> 
           <td><?= $history->depost_day ?></td>

           <td>
    <?php 
    $loan_end_date = strtotime(substr($history->loan_end_date, 0, 10)); // Convert to timestamp
    $depost_day = strtotime($history->depost_day); // Convert to timestamp
    $status = "Dabo";
    $badge_class = "light"; // Default gray
    $button_class = "btn-success"; // Default button
    $text_color = "text-black"; // Set font color to black
 
   $url = base_url("admin/view_customer_statemnt/{$history->loan_id}"); 

 // Set URL

    if ($depost_day == $loan_end_date) {
        $status = "Imetimia vizuri"; // Achieved
        $badge_class = "light"; 
        $button_class = "btn-success"; // Green button
    } elseif ($depost_day > $loan_end_date && ($depost_day - $loan_end_date) <= (15 * 86400)) {
        $status = "Inaridhisha kiasi"; // Satisfactory
        $badge_class = "light"; 
        $button_class = "btn-warning"; // Yellow button
    } elseif ($depost_day > $loan_end_date && ($depost_day - $loan_end_date) > (15 * 86400)) {
        $status = "umecheleweshwa"; // Requires Improvement
        $badge_class = "light"; 
        $button_class = "btn-danger"; // Red button
    }

    echo "<a href='$url' class='btn $button_class $text_color'>
            <i class='icon-eye'></i> Loan Score <span class='badge badge-$badge_class $text_color'>$status</span>
          </a>";
    ?>
</td>





       
        </tr>
    <?php endforeach; ?>
<?php endif; ?>



                                    </tbody>
                                </table>
                            </div>
                        </div>

                    </div>
                </div>

                                <div class="col-md-12">
                    <div class="card">
                        <div class="header">
                            <h2>Applied Loan Application Form</h2>
                        </div>
                        <div class="body">
            <?php echo form_open("admin/aprove_loan/{$loan_form->loan_id}"); ?>
                            <div class="row">

    <div class="col-lg-4 form-group-sub">
        <label class="form-control-label"><b>Loan category</b></label>
    <input type="text" name="" placeholder="Loan Amount Applied" autocomplete="off" value="<?php echo $loan_form->loan_name; ?> <?php echo $loan_form->loan_price; ?> - <?php echo $loan_form->loan_perday; ?>" readonly class="form-control input-sm">
    </div>

    <div class="col-lg-4 form-group-sub">
        <label class="form-control-label"><b>Branch</b></label>
         <input type="text" name="" placeholder="Loan Amount Applied" autocomplete="off" value="<?php echo $loan_form->blanch_name; ?>" readonly class="form-control input-sm">
    </div>
    <div class="col-lg-4 form-group-sub">
        <label  class="form-control-label"><b>Loan Amount Applied</b></label>
         <input type="text" name="" placeholder="Loan Amount Applied" autocomplete="off" value="<?php echo number_format($loan_form->how_loan); ?>" readonly class="form-control input-sm">
    </div>

    <div class="col-lg-4 form-group-sub">
    <label  class="form-control-label"><b style="color:green;">Approved Loan</b></label>
     <input type="number" name="how_loan" placeholder="Approved Loan" autocomplete="off" value="<?php echo $loan_form->how_loan; ?>"  class="form-control input-sm" style="color: green;border-color: green;">
</div>

<div class="col-lg-4 form-group-sub">
    <label class="form-control-label"><b style="color:red;">Charge Loan Penalty?</b></label>
    <select type="text" name="penat_status" class="form-control input-sm" required style="color: red; border-color: red;">
        <option value="YES">YES</option>
        <option value="NO">NO</option>
    </select>
</div>




    <div class="col-lg-4 form-group-sub">
        <label  class="form-control-label"><b>Restoration Type</b></label>
       <textarea type="text" readonly class="form-control" style="height: 40px;"><?php if($loan_form->day == 1){
         echo "Daily";
     ?>
<?php }elseif($loan_form->day == 7){
        echo "Weekly";
?>
<?php } elseif($loan_form->day == 30 || $loan_form->day == 31 || $loan_form->day == 28 || $loan_form->day == 29){
   echo "Monthly";
?>
<?php } ?></textarea>
    </div>

    <div class="col-lg-6 form-group-sub">
            <label  class="form-control-label"><b>Restoration Time</b></label>
    <input type="number" name="" placeholder="Restoration sessions" autocomplete="off" value="<?php echo $loan_form->session ?>" readonly class="form-control input-sm" >
        </div>

        <div class="col-lg-6 form-group-sub">
        <label  class="form-control-label"><b>Purpose of Loan</b></label>
<input type="text" name="" readonly autocomplete="off"  class="form-control input-sm" value="<?php echo $loan_form->reason; ?>">
    </div> 

    
    
    
   
    
      </div>
    </div>
    <br>

    <div class="text-center">
    <button type="submit" class="btn btn-primary"><i class="icon-drawer">Approve</i></button>

 
    <a href="<?php echo base_url("admin/reject_loan/{$loan_form->loan_id}"); ?>" class="btn btn-danger">Reject</a>
     <a href="<?php echo base_url("admin/loan_pending"); ?>" class="btn btn-primary">Back</a>
    </div>
                            
                            <?php echo form_close();  ?>
                        </div>
                    </div>
                </div> 

                </div>
            </div>
        </div>
   



<?php include('incs/footer.php'); ?>



<script>
    function getDate(data){
  let now = new Date();
  let bod = (new Date(data));

  let age = now.getFullYear() - bod.getFullYear();
   let _age = document.querySelector("#age");
   _age.value = age;
 //alert(age)
}
</script>


<script>
$(document).ready(function(){
$('#blanch').change(function(){
var blanch_id = $('#blanch').val();
//alert(blanch_id)
if(blanch_id != ''){

$.ajax({
url:"<?php echo base_url(); ?>admin/fetch_employee_blanch",
method:"POST",
data:{blanch_id:blanch_id},
success:function(data)
{
$('#empl').html(data);
//$('#district').html('<option value="">All</option>');
}
});
}
else
{
$('#empl').html('<option value="">Select Employee</option>');
//$('#district').html('<option value="">All</option>');
}
});



// $('#customer').change(function(){
// var customer_id = $('#customer').val();
//  //alert(customer_id)
// if(customer_id != '')
// {
// $.ajax({
// url:"<?php echo base_url(); ?>admin/fetch_data_vipimioData",
// method:"POST",
// data:{customer_id:customer_id},
// success:function(data)
// {
// $('#loan').html(data);
// //$('#malipo_name').html('<option value="">select center</option>');
// }
// });
// }
// else
// {
// $('#loan').html('<option value="">Select Active loan</option>');
// //$('#malipo_name').html('<option value="">chagua vipimio</option>');
// }
// });

// $('#social').change(function(){
//  var district_id = $('#social').val();
//  if(district_id != '')
//  {
//   $.ajax({
//    url:"<?php echo base_url(); ?>user/fetch_data_malipo",
//    method:"POST",
//    data:{district_id:district_id},
//    success:function(data)
//    {
//     $('#malipo_name').html(data);
//     //$('#malipo').html('<option value="">chagua malipo</option>');
//    }
//   });
//  }
//  else
//  {
//   //$('#vipimio').html('<option value="">chagua vipimio</option>');
//   $('#malipo_name').html('<option value="">chagua vipimio</option>');
//  }
// });


});
</script>