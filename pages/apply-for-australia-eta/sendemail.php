<?php
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');

session_start();
$apiurl 					= "https://oppwa.com";
$con						= mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
// $con						= mysqli_connect("91.230.121.196","visaetac_dhsgov","5Idnba_UIm_=","visaetac_eta_au_canada");

if(isset($_POST) && isset($_POST['firstname']) && $_POST['firstname'] != ''){

	$result 				= mysqli_query($con,"insert into customers set visatype='".$_POST['visatype']."', whichcountry='".$_POST['whichcountry']."', lastname1='".$_POST['lastname1']."', firstname='".$_POST['firstname']."', dobd='".$_POST['dobd']."', dobm='".$_POST['dobm']."', `doby`='".$_POST['doby']."', `gender`='".$_POST['gender']."', `citizencountry`='".$_POST['citizencountry']."', `cob`='".$_POST['cob']."', `othername`='".$_POST['othername']."', `Conviction`='".$_POST['Conviction']."', `pic`='".$_POST['pic']."', `pidd`='".$_POST['pidd']."', `pidm`='".$_POST['pidm']."', `pidy`='".$_POST['pidy']."', `pedd`='".$_POST['pedd']."', `pedm`='".$_POST['pedm']."', `pedy`='".$_POST['pedy']."', `passportnumber`='".$_POST['passportnumber']."', `addcitizen`='".$_POST['addcitizen']."', `onothercountry1`='".$_POST['onothercountry1']."', `onothercountry2`='".$_POST['onothercountry2']."', `onothercountry3`='".$_POST['onothercountry3']."', `email`='".$_POST['email']."', `altemail`='".$_POST['altemail']."', `contactcountry`='".$_POST['contactcountry']."', `street1`='".$_POST['street1']."', `city`='".$_POST['city']."', `district`='".$_POST['district']."', `zip`='".$_POST['zip']."', `type_phone`='".$_POST['type_phone']."', `country_code`='".$_POST['country_code']."', `telephone_number`='".$_POST['telephone_number']."', `sign`='".$_POST['sign']."' ");
	$id 					= mysqli_insert_id($con);
	$_SESSION['cid'] 		= $id;
	$firstname 				= $_REQUEST['firstname'];	
	$lastname1 				= $_REQUEST['lastname1'];	
	$dob 					= $_REQUEST['dobd'].' / '.$_REQUEST['dobm'].' / '.$_REQUEST['doby'];	
	$gender 				= $_REQUEST['gender'];	
	$citizencountry 		= $_REQUEST['citizencountry'];
	$visatype 				= $_REQUEST['visatype'];
	
	if($visatype == 'B'){
	
		$visatype 			= 'Business Visitor ';
	}elseif($visatype =='T'){
	
		$visatype 			= ' Tourist';
	}
	
	$whichcountry 			= $_REQUEST['whichcountry'];
	$cob 					= $_REQUEST['cob'];	
	$othername 				= $_REQUEST['othername'];
	$conviction 			= $_REQUEST['Conviction'];
	$pic 					= $_REQUEST['pic'];
	$pid 					= $_REQUEST['pidd'].' / '.$_REQUEST['pidm'].' / '.$_REQUEST['pidy'];	
	$ped 					= $_REQUEST['pedd'].' / '.$_REQUEST['pedm'].' / '.$_REQUEST['pedy'];	
	$passportnumber 		= $_REQUEST['passportnumber'];
	$addcitizen 			= $_REQUEST['addcitizen'];
	
	if($addcitizen == 'N'){
	
		$addcitizen 		= '';
	}else{
	
		$addcitizen 		= '<tr>
		<th scope="row"  align="left">the applicant hold current passports for any other countries  </th>
		<td> '.$_REQUEST['onothercountry1'].','.$_REQUEST['onothercountry2'].','.$_REQUEST['onothercountry3'].'</td>
		</tr>';
	}

	$email 						= $_REQUEST["email"];
	$_SESSION['name'] 			= $firstname.' '.$lastname1;
	$_SESSION['firstname1'] 	= $firstname;
	$_SESSION['lastname1'] 		= $lastname1;
	$_SESSION['email'] 			= $email;
	$altemail 					= $_REQUEST["altemail"];
	$address 					= $_REQUEST['street1'].', '.$_REQUEST['city'].', '.$_REQUEST['district'].', '.$_REQUEST['district'].' -'.$_REQUEST['zip'].', '.$_REQUEST['contactcountry'];
	$_SESSION['address'] 		= $address;
	$type_phone 				= $_REQUEST['type_phone'].' +'. $_REQUEST['country_code'].' '.$_REQUEST['telephone_number'];
	$sign 						= $_REQUEST['sign'];
	$vendemail 					= '<table border="1" cellpadding="10" cellspacing="0">
		  <tr>
			<th scope="row"  colspan="2"><h2>Personal Details</h2></th>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >ETA type</th>
			<td width="200">'.$visatype.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">applicant is outside Australia and currently located in </th>
			<td>'.$whichcountry.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Name</th>
			<td> '.$firstname.' '.$lastname1.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">DOB</th>
			<td> '.$dob.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">gender</th>
			<td>'.$gender.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Nationality of Passport Holder</th>
			<td>'.$citizencountry.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Country of birth</th>
			<td>'.$cob.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Are you currently, or have you ever been, known by any other names</th>
			<td>'.$othername.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Have you ever had a criminal conviction?</th>
			<td>'.$conviction.'</td>
		  </tr>
		  <tr>
			<th scope="row"  colspan="2"><h2>Passport Details</h2></th>
		  </tr>
		  <tr>
			<th scope="row"  align="left" > Country of Passport</th>
			<td width="200">'.$pic.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Passport Date of Issue </th>
			<td>'.$pid.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Passport Expiry Date </th>
			<td>'.$ped.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Passport Number </th>
			<td>'.$passportnumber.'</td>
		  </tr>'.$addcitizen.'<tr>
			<th scope="row"  colspan="2"><h2>Contact  Details</h2></th>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Email Address </th>
			<td width="200">'.$email.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Alternate Email </th>
			<td>'.$altemail.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Residential Addres </th>
			<td>'.$address.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left">Telephone </th>
			<td>'.$type_phone.'</td>
		  </tr>		  
		  <tr>
			<td  colspan="2" style="padding-right:80px;" align="right"><strong>Sign</strong> :- '.$sign.'
			  </th>
		  </tr>
	</table>';

	$to 				= 'jweinstock121@gmail.com,contact@eta-australia.com';			
	// $to 				= 'bovoom@gmail.com';			
	$subject 			= 'Application Form, From:'.$email;
	$headers 			= "MIME-Version: 1.0" . "\r\n";
	$headers 		   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers 		   .= 'From:eta-australia.com<info@eta-australia.com>' . "\r\n";
	
	if(mail($to, $subject, $vendemail, $headers)){ 
	
		$url 				= $apiurl."/v1/checkouts";
		$data 				= "authentication.userId=8acda4c85fddfdb0015fdf66ccff1408" .
			"&authentication.password=qj4adyHzt6" .
			"&authentication.entityId=8acda4c85fddfdb0015fdf8e5f5f1602" .
			"&amount=100.00" .
			"&currency=USD" .
			"&paymentType=DB".
			"&customer.email=".$_REQUEST["email"]. 
			"&customer.givenName=".$_SESSION['firstname1'] .
			"&customer.surname=".$_SESSION['lastname1'];
		
			
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		$responseData = curl_exec($ch);
		if(curl_errno($ch)) {
			return curl_error($ch);
		}
		curl_close($ch);	
		$responseData = json_decode($responseData);
	
		?>
		
		<!DOCTYPE html>
		
		<html lang="en">
		
			<head>
				
				<meta charset="UTF-8">
				
				<meta name="viewport" content="width=device-width, initial-scale=1.0">
				
				<link rel="icon" type="image/png" href="<?= __BASE_URL; ?>/assets/images/icons/favicon.ico">
				
				<meta name="msvalidate.01" content="65F1DAE1EE3B0B83EEC18DDCD1C8D38B" />
				
				<script data-cfasync="false" type="text/javascript" data-bablic="59a42ba391104a269eed0fc8" data-bablic-m="[0,'en','en',1,['de'],0,0,0,0,0,0,0,0,[],'cic-gov-eta.online/',[],['_v',2]]" src="//cdn2.bablic.com/js/bablic.3.9.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery-1.11.3.min.js"></script>
				
				<style>
					#notEligible {
						display: none;
					}
					#lawfullcontainer {
						display: none;
					}
					#travellingCanada {
						display: none;
					}
					#landorSee {
						display: none;
					}
					#completeInfo {
						display: none;
					}
					#minorChild {
						display: none;
					}
					#doYouStillWantToApplycon {
						display:none;
					}
					#isRepresentativecon {
						display:none;
					}
					#CitizenshipsInfoCon {
						display: none;
					}
					#UICnumber {
						display: none;
					}

				</style>
				
				<link rel="stylesheet" href="<?= __BASE_URL; ?>/assets/components/minifyx/cache/styles_1e2a103354.css" type="text/css" />
				
				<link rel="stylesheet" href="<?= __BASE_URL; ?>/assets/css/bootstrap.css" type="text/css" />
				
				<style>
				
					#content {
						padding-bottom: 60px;
						/*padding-top: 60px;*/
					}
					.form-control {
						border-radius: 0 !important;
						margin-bottom: 12px;
						text-align: left;
					}
					#content .form-control {
						background-color: #ffffff !important;
						background-image: none !important;
						border: 1px solid #cccccc !important;
						border-radius: 4px !important;
						box-shadow: 0 1px 1px rgba(0, 0, 0, 0.075) inset !important;
						color: #555555 !important;
						display: block !important;
						font-size: 14px !important;
						height: 34px ;
						line-height: 1.42857 !important;
						padding: 6px 12px !important;
						transition: border-color 0.15s ease-in-out 0s, box-shadow 0.15s ease-in-out 0s !important;
						width: 100% !important;
							margin-top: 10px !important;
					}
					#content textarea.form-control {
						height: auto !important;
					}
					.form-horizontal .form-group {
						margin-left: 0px!important;
						margin-right: 0px!important;
					}
					.form-group {
						margin-top: 15px;
					}
					.red-btn {
						background: none repeat scroll 0 0 #ce0007;
						color: #fff;
						font-size: 20px;
						margin-top: 30px;
						padding: 10px 60px;
					}.btn-red {
						background: none repeat scroll 0 0 #ff0000;
						color: #fff;
						font-weight: bold;
						margin-top: 20px;
						padding: 8px 14px;
					}
					@media (max-width: 992px) {
						form label {
							border:0;
							padding:0;
						}
					}
					
				</style>

				<link rel="stylesheet" id="bootstrap-responsive-css" href="<?= __BASE_URL; ?>/assets/css/bootstrap-responsive.css" type="text/css" media="all">
				
				<link rel="stylesheet" href="<?= __BASE_URL; ?>/assets/css/validationEngine.css" type="text/css">

			</head>
			
			<body class="cart-empty">
			
				<div id="header">
				
					<div class="container">
					
						<div class="row">
						
							<div class="logo clearfix"><!--canada-eta.png-->
								
								<div class="span4"> <a href="<?= __BASE_URL; ?>"> <img class="top-logo" src="<?= __BASE_URL; ?>/assets/images/header/logo.png" alt="Australia eTA"/> </a> </div>
								
								<div class="span4 slogan hidden-phone">
									<p>&nbsp;  </p>
								</div>
								
								<div class="span4 contact-button"></div>
								
								<div class="span2 customer-services hidden-phone"> </div>
								
							</div>						
			  
							<div class="row">
							
								<div class="table-responsive">
								
									<table class="table">
									
										<tr style="background: #ccc">
										
											<th>Product</th>
											
											<th>Price</th>
											
											<th>Quantity</th>
											
											<th>Total</th>
											
										</tr>									
										
										<tr>
										
											<td><strong>Australia Travel ETA Visa</strong></td>
											
											<td><strong>$100</strong></td>
											
											<td><strong>1</strong></td>
											
											<td><strong>$100</strong></td>
											
										</tr>
										
										<tr>
										
											<td colspan="4">
												<small>eta-australia.com +16468447580 <br>
												Global Processing Solutions LTD Sofia, <br>
												Lachezar Stanchev Str. 5 Blvd., Sopharma Business Towers BG</small>
											</td>
											
										</tr>
										
									</table>
									
								</div>
								
							</div>
							
						</div>
						
					</div>
					
				</div>
				
				<script>
				
					var wpwlOptions = {
						billingAddress: {},
						mandatoryBillingFields:{
							country: true,
							state: true,
							city: true,
							postcode: true,
							street1: true,
							street2: false
						}
					}
					
				</script>
				
				<script src="https://oppwa.com/v1/paymentWidgets.js?checkoutId=<?php echo $responseData->id; ?>"></script>
				
				<form action="<?= __BASE_URL; ?>/apply-for-australia-eta/sendemail" class="paymentWidgets" data-brands="VISA MASTER"></form>
				
				<!--footer Start here-->
				<div id="footer">
					
					<div class="container">
					
						<div class="row">
						
							<div class="span12 text-center">
							
								<div class="text-center">
								
									<ul>
										
										<li class="first here"><a href="index.html" title="">Home</a></li>
									   
										<li><a href="<?= __BASE_URL; ?>/apply-for-australia-eta/index.html" title="">eTA Application</a></li>
										
										<li><a href="<?= __BASE_URL; ?>/australia-eta-requirements/index.html" title="">eTA Requirements</a></li>
										
										<li><a href="<?= __BASE_URL; ?>/australia-eta-service/index.html" title="">eTA Services</a></li>
									   
										<li><a href="<?= __BASE_URL; ?>/costs/index.html" title="">Costs</a></li>
										
										<li><a href="<?= __BASE_URL; ?>/contacts/index.html" title="">Contacts</a></li>
								   
									</ul>
									
								</div>
								
								<div class="text-align">
								
									<ul>
										
										<li><a href="<?= __BASE_URL; ?>/information/terms-and-conditions/index.html">Terms and Conditions</a></li>
										
										<li><a href="<?= __BASE_URL; ?>/information/privacy-policy/index.html">Privacy Policy</a></li>
										
										<li><a href="<?= __BASE_URL; ?>/information/refund-policy/index.html">Refund Policy</a></li>
								  
									</ul>
									
									<br />
									
									<hr>
									
									<p>
										<small>
											eta-australia.com is a private company and is not affiliated with any government agency. 
											We assist foreign travellers needing proper documentation to enter Aaustralia . 
											Our service fees are $100 US Dollars and include the Australian Government fee of AUS$20.
											You may choose to engage our services or visit AUS Goverment Internet sites and make your request to travel to Australia for a lesser fee. 
											The Government site can be accessed at https://www.eta.immi.gov.au/ETAS3/etas 
										</small>
									</p>
									
									<br />
									
									<br />					
									
									<p>
										&copy;  <?= date('Y');?>- <span class="lowercase">eta-australia.com</span>.</br>
										All rights reserved.</br>Global Processing Solutions LTD (EIK) 204803240 Sofia, Lachezar Stanchev Str. 5 Blvd., 
										Sopharma Business Towers Building B
										
									</p>
									
								</div>

							</div>
							
						</div>
						
					</div>
					
				</div>
				<!--footer Stop here-->
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery_013.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/animations.js"></script>			
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery_010.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery_003.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jqueryui.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/tooltip.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/additional2.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/popover_titles.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/popover.js"></script>			
				
				<script type="text/javascript">
				
					jQuery(document).ready(function(){
					
					   jQuery("#myform").validationEngine();
					   
					});

					jQuery(function() {
					
						jQuery('.fm').change(function(){
						
							var txt  = jQuery(this).val();
							var han = txt.replace(/[ーＡ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
							jQuery(this).val(han);
						});
					  
					});
					
				</script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/bootstrap.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/customSelect.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/tooltip_002.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/addform2.js"></script>
				
				<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/main.js"></script>
				
				<!-- Piwik -->
				<script type="text/javascript">
					var _paq = _paq || [];
					  _paq.push(['trackPageView']);
					  _paq.push(['enableLinkTracking']);
					  (function() {
						var u="https://ryanlion.piwikpro.com/";
						_paq.push(['setTrackerUrl', u+'piwik.php']);
						_paq.push(['setSiteId', 7]);
						var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
						g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
					})();
				</script>
				
				<noscript>
					<p><img src="https://ryanlion.piwikpro.com/piwik.php?idsite=7" style="border:0;" alt="" /></p>
				</noscript>
				<!-- End Piwik Code -->
				
			</body>
			
		</html>

		<?php
	
	}else{ 
	
		echo 'Something want to wrong '; 

	}				
}

if(isset($_GET)  && $_GET['resourcePath'] != ''){
	
	$url 		= $apiurl.$_GET['resourcePath'];
	$url 	   .= "?authentication.userId=8acda4c85fddfdb0015fdf66ccff1408";
	$url 	   .= "&authentication.password=qj4adyHzt6";
	$url 	   .= "&authentication.entityId=8acda4c85fddfdb0015fdf8e5f5f1602";

	$ch = curl_init();
	curl_setopt($ch, CURLOPT_URL, $url);
	curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	
	$responseData = curl_exec($ch);
	
	if(curl_errno($ch)) {
		return curl_error($ch);
	}
	curl_close($ch);
	
	$responseData 			= json_decode($responseData);
	
	$status 				= 0;
	$sucsessmsg 			= '';
	$sucsessmsgsubject 		='';
	$paymentsucsess 		= array('000.000.000','000.000.100','000.100.110','000.100.111','000.100.112','000.300.000','000.300.100','000.300.101','000.300.102','000.600.000','000.400.000','000.400.010','000.400.020','000.400.030','000.400.040','000.400.050','000.400.060','000.400.070','000.400.080','000.400.090','000.400.100');
	
	if(in_array($responseData->result->code,$paymentsucsess)){
	
		$status 			= 1;
		$sucsessmsg 		= '<p style="font-weight: bold;color: green;">Thank you for your recent ETA application. Your ETA is now being prepared and you will receive it to this email address when ready.</p>';
		$sucsessmsgsubject 	= 'Payment success';
	}else{
	
		$status 			= 0;
		$sucsessmsg 		= '<p style="font-weight: bold;color: red;">Payment declined and try to use alternative card</p>';	
		$sucsessmsgsubject 	= 'Payment Declined';
	}

	mysqli_query($con,"update customers set pay_id='".$responseData->id."', pay_desc='".mysqli_real_escape_string($con, $responseData->result->description)."', pay_code='".$responseData->result->code."', pay_amt='".$responseData->amount."', pay_bill_street1='".mysqli_real_escape_string($con, $responseData->billing->street1)."', pay_bill_street2='".mysqli_real_escape_string($con, $responseData->billing->street2)."', `pay_bill_city`='".mysqli_real_escape_string($con, $responseData->billing->city)."', `pay_bill_state`='".mysqli_real_escape_string($con, $responseData->billing->state)."', `pay_bill_postcode`='".mysqli_real_escape_string($con, $responseData->billing->postcode)."', `pay_bill_country`='".mysqli_real_escape_string($con, $responseData->billing->country)."',`pay_status`='".$status."' where id = ".(int)$_SESSION['cid']);

	$vendemailcustomr = '<div>'.$sucsessmsg.'</div><table border="1" cellpadding="10" cellspacing="0">
		  <tr>
			<th scope="row"  colspan="2"><h2>Payment Details</h2></th>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Name</th>
			<td width="200">'.$_SESSION['name'].'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Address</th>
			<td width="200">'.$_SESSION['address'].'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Code</th>
			<td width="200">'.$responseData->result->code.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Card Holder Name</th>
			<td width="200">'.$responseData->card->holder.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Card Holder Billing Address</th>
			<td width="200">'.$responseData->billing->street1.', '.$responseData->billing->street2.', '.$responseData->billing->city.', '.$responseData->billing->state.', '.$responseData->billing->country.', '.$responseData->billing->postcode.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">Status</th>
			<td>'.$responseData->result->description.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">PaymentID</th>
			<td> '.$responseData->id.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">RegistrationId</th>
			<td> '.$responseData->registrationId.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">Amount</th>
			<td>'.$responseData->amount.'</td>
		  </tr>  
	</table>'; 
				
	$vendemail = '<table border="1" cellpadding="10" cellspacing="0">
		  <tr>
			<th scope="row"  colspan="2"><h2>Payment Details</h2></th>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Name</th>
			<td width="200">'.$_SESSION['name'].'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Address</th>
			<td width="200">'.$_SESSION['address'].'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Code</th>
			<td width="200">'.$responseData->result->code.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Card Holder Name</th>
			<td width="200">'.$responseData->card->holder.'</td>
		  </tr>
		  <tr>
			<th scope="row"  align="left" >Card Holder Billing Address</th>
			<td width="200">'.$responseData->billing->street1.', '.$responseData->billing->street2.', '.$responseData->billing->city.', '.$responseData->billing->state.', '.$responseData->billing->country.', '.$responseData->billing->postcode.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">Status</th>
			<td>'.$responseData->result->description.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">PaymentID</th>
			<td> '.$responseData->id.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">RegistrationId</th>
			<td> '.$responseData->registrationId.'</td>
		  </tr>
		  <tr>
			<th scope="row" align="left">Amount</th>
			<td>'.$responseData->amount.'</td>
		  </tr>  
	</table>';
	
	$to 			= 'jweinstock121@gmail.com,contact@eta-australia.com';			
	// $to 			= 'bovoom@gmail.com';			
	$subject 		= 'Application Form: '.$sucsessmsgsubject.', From '.$_SESSION['email'].' PayID: '.$responseData->id;
	$headers 		= "MIME-Version: 1.0" . "\r\n";
	$headers 	   .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	$headers 	   .= 'From:eta-australia.com<info@eta-australia.com>' . "\r\n";
	mail($_SESSION['email'], $subject, $vendemailcustomr, $headers);
	
	if(mail($to, $subject, $vendemail, $headers)){
	
		header('location: '. __BASE_URL . '/thankyou');
	}else{ 
	
		echo 'Something want to wrong ';
	}
}
exit;	
?>