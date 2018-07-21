<?php include ("include/makeSession.php"); ?>
<?php include("include/header.php"); ?>
<?php include("include/sidebar.php"); ?>
<?php  if(isset($_REQUEST['did']) && $_REQUEST['did']!=''){

	

	$doid=$_REQUEST['did'];

	

	mysqli_query($con,"delete from customers where id='$doid'");

	echo '<META HTTP-EQUIV="Refresh" Content="0; URL=view-product.php">';

	exit;

}?>
<!-- DataTables -->
<link href="assets/plugins/datatables/jquery.dataTables.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/datatables/dataTables.bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="assets/plugins/switchery/css/switchery.min.css" rel="stylesheet" />

<div class="content">
  <div class="container"> 
    
    <!-- Page-Title -->
    
    <div class="row">
      <div class="col-sm-12">
        <h4 class="page-title">Customers</h4>
        <ol class="breadcrumb">
        </ol>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-12">
        <div class="card-box table-responsive">
          <table id="datatable" class="table table-striped table-bordered">
            <thead>
              <tr>
                <th>No</th>
                <th>Family Name</th>
                <th>Given Names</th>
                <th>Email</th>
                <th>Phone</th>
                <th>View Details</th>
                <th>View Payment</th>
                <th>Delete</th>
              </tr>
            </thead>
            <tbody>
              <?php
                $limit = 100;  
                if (isset($_GET["page"])) { $page  = $_GET["page"]; } else { $page=1; };  
                $start_from = ($page-1) * $limit; 
            if(isset($_GET['status'])){
              $paginatio_url =  "view-product.php?status=".$_GET['status']."&";
              $append_query = "where pay_status = '".$_GET['status']."'";
            }else{
              $paginatio_url =  "view-product.php?";
			  $append_query = "";
            }
            
            $query = mysqli_query($con,"select * from customers ".$append_query." order by id desc  LIMIT $start_from, $limit");
			  $i = 1;

			  while($row= mysqli_fetch_array($query)){

			?>
              <tr <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="background-color:green !important;"'; }  ?>>
                <td <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="color:#fff !important;"'; }  ?>><?php echo $i; ?></td>
                <td <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="color:#fff !important;"'; }  ?>><?php echo $row['lastname1']; ?></td>
                <td <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="color:#fff !important;"'; }  ?>><?php echo $row['firstname']; ?></td>
                <td <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="color:#fff !important;"'; }  ?>><?php  echo $row['email']; ?></td>
                <td <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="color:#fff !important;"'; }  ?>><?php  echo $row['telephone_number']; ?></td>
                <td <?php if($row['query_from']=='evisitor.eta-australia.com'){ echo 'style="color:#fff !important;"'; }  ?>><a id="viewbutton" style="width:80px"   class="btn btn-block btn-info" href="javascript:void(0)" data-toggle="modal" data-target="#myModal<?php  echo $row['id']; ?>"><i  class="glyphicon glyphicon-eye-open"></i></a> 
                  
                  <!-- Modal -->
                  
                  <div id="myModal<?php  echo $row['id']; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog"> 
                      
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">View Details</h4>
                        </div>
                        <div class="modal-body">
                          <h2>Personal Details</h2>
                          <hr>
                          <div class="list-group">
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">ETA type</strong><?php echo $row['visatype']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> the applicant is outside Australia and currently located in </strong><?php echo $row['whichcountry']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Family Name</strong><?php echo $row['lastname1']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Given Names</strong><?php echo $row['firstname']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">DOB</strong><?php echo $row['dobd'].' - '.$row['dobm'].' - '.$row['doby']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">SEX</strong><?php echo $row['gender']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> Nationality of Passport Holder </strong><?php echo $row['citizencountry']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Country of birth</strong><?php echo $row['cob']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> other names </strong><?php echo $row['othername']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Have you ever had a criminal conviction?</strong><?php echo $row['Conviction']; ?></div>
                            </div>
                          </div>
                          <h2>Passport Details</h2>
                          <hr>
                          <div class="list-group">
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Country of Passport </strong><?php echo $row['pic']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> Passport Date of Issue </strong><?php echo $row['pidd'].' - '.$row['pidm'].' - '.$row['pidy']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Passport Expiry Date</strong><?php echo $row['pedd'].' - '.$row['pedm'].' - '.$row['pedy']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Passport Number</strong><?php echo $row['passportnumber']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> Does the applicant hold current passports for any other countries? </strong><?php echo $row['addcitizen']; ?></div>
                            </div>
                            <?php if($row['addcitizen'] == 'Y'){?>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> other countries  1</strong><?php echo $row['onothercountry1']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> other countries 2</strong><?php echo $row['onothercountry2']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">other countries 3</strong><?php echo $row['onothercountry3']; ?></div>
                            </div>
                            <?php }?>
                          </div>
                          <h2>Contact Details</h2>
                          <hr>
                          <div class="list-group">
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Email </strong><?php echo $row['email']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> Alternate Email(optional) </strong><?php echo $row['altemail']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row">
                                <div class="col-md-6"><b>Residential Address </b></div>
                                <div class="col-md-6"><?php echo $row['street1'].', '.$row['city'].',<br> '.$row['district'].' - '.$row['zip'].',<br>'.$row['contactcountry']; ?></div>
                              </div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">Telephone </strong>
                                <div class="col-md-6"><?php echo $row['type_phone'].' '.$row['country_code'].' '.$row['telephone_number']; ?></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div></td>
                <td><a id="viewbutton"  style="width:80px" class="btn btn-block btn-danger" href="javascript:void(0)" data-toggle="modal" data-target="#mypay<?php  echo $row['id']; ?>"><i  class="glyphicon glyphicon-eye-open"></i></a> 
                  <!-- Modal -->
                  
                  <div id="mypay<?php  echo $row['id']; ?>" class="modal fade" role="dialog">
                    <div class="modal-dialog"> 
                      
                      <!-- Modal content-->
                      <div class="modal-content">
                        <div class="modal-header">
                          <button type="button" class="close" data-dismiss="modal">&times;</button>
                          <h4 class="modal-title">View Payment</h4>
                        </div>
                        <div class="modal-body">
                          <div class="list-group">
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6">payment id </strong><?php echo $row['pay_id']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> payment description </strong><?php echo $row['pay_desc']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> payment Code </strong><?php echo $row['pay_code']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row"><strong class="col-md-6"> payment Amount </strong><?php echo $row['pay_amt']; ?></div>
                            </div>
                            <div class="list-group-item">
                              <div class="row">
                                <div class="col-md-6"><b>Billing  Address </b></div>
                                <div class="col-md-6"><?php echo $row['pay_bill_street1'].', '.$row['pay_bill_street2'].', '.$row['pay_bill_city'].',<br> '.$row['pay_bill_state'].' - '.$row['pay_bill_postcode'].',<br>'.$row['pay_bill_country']; ?></div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                        </div>
                      </div>
                    </div>
                  </div></td>
                <td><a id="viewbutton"  style="width:80px" class="btn btn-block btn-danger" href="view-product.php?did=<?php  echo $row['id'];?>"><i  class="glyphicon glyphicon-trash"></i></a></td>
              </tr>
              <?php $i++;}?>
            </tbody>
          </table>
          <!------------------------------------------------------------>
                        <?php  
							$sql = "SELECT COUNT(id) FROM customers ".$append_query;  
							$rs_result = mysqli_query($con,$sql);  
							$row = mysqli_fetch_row($rs_result);  
							$total_records = $row[0];  
							$total_pages = ceil($total_records / $limit);  
							$pagLink = '<div class="dataTables_paginate paging_simple_numbers" id="datatable-checkbox_paginate">
   <ul class="pagination">';  
							for ($i=1; $i<=$total_pages; $i++) {  
										 $pagLink .= '<li class="paginate_button '.($page==$i? 'active' : '' ).'"><a href="'.$paginatio_url.'page='.$i.'">'.$i.'</a></li>';  
							};  
							echo $pagLink . "</div>";  
						?>
          <!------------------------------------------------------------>
        </div>
      </div>
    </div>
  </div>
  
  <!-- container --> 
  
</div>

<!-- content -->

<?php include('include/footer.php');?>
<script src="assets/plugins/datatables/jquery.dataTables.min.js"></script> 
<script src="assets/plugins/datatables/dataTables.bootstrap.js"></script> 
<script type="text/javascript">

    $(document).ready(function () {

       // $('#datatable').dataTable();

    });

  //  TableManageButtons.init();



</script> 
<script src="assets/plugins/switchery/js/switchery.min.js"></script> 
<script src="assets/js/jquery.core.js"></script> 
<script>





function update(vid,hid){

	if($('#switch'+vid).prop("checked") == true){

		var check = 1;

		

	}  else if($('#switch'+vid).prop("checked") == false){

	

		var check = 0;

	

	}

	$.ajax

	

	({

	

		type: "POST",

	

		url: "product-action.php",

	

		data : { 'do':'update-product-status',id : check, vid : hid },

		

		cache: false,

	

		success: function(html)

	

		{

	

			$("#switch<?php echo $i;?>").html(html);

	

		} 

	

	});



}





</script>