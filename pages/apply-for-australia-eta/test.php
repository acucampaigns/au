<?php
	
	if(isset($_GET) && $_GET['resourcePath'] != ''){
	print_r($_GET);
	
	}
	
	exit;
error_reporting(-1);
// session_start();
$apiurl = "https://test.oppwa.com";

// if(isset($_POST) && isset($_POST['firstname']) && $_POST['firstname'] != ''){
 //echo '<pre>'; print_r($_REQUEST); exit;   
$firstname = 'firstname';	
$lastname1 = 'lastname1';	
$dob = '01/08/1985';	
$gender = 'male';	
$citizencountry = 'uk';

// $visatype = $_REQUEST['visatype'];
// if($visatype == 'B'){
// $visatype = 'Business Visitor ';
// }elseif($visatype =='T'){$visatype = ' Tourist';}
// $whichcountry = $_REQUEST['whichcountry'];

// $cob = $_REQUEST['cob'];	
// $othername = $_REQUEST['othername'];

// $conviction = $_REQUEST['Conviction'];	

// $pic = $_REQUEST['pic'];
// $pid = $_REQUEST['pidd'].' / '.$_REQUEST['pidm'].' / '.$_REQUEST['pidy'];	
// $ped = $_REQUEST['pedd'].' / '.$_REQUEST['pedm'].' / '.$_REQUEST['pedy'];	
// $passportnumber = $_REQUEST['passportnumber'];
//$issuing_authority = $_REQUEST['issuing_authority'];

// $addcitizen = $_REQUEST['addcitizen'];
// if($addcitizen == 'N'){
// $addcitizen = '';
// }else{
// $addcitizen =   '<tr>
    // <th scope="row"  align="left">the applicant hold current passports for any other countries  </th>
    // <td> '.$_REQUEST['onothercountry1'].','.$_REQUEST['onothercountry2'].','.$_REQUEST['onothercountry3'].'</td>
  // </tr>
// ';
// }

$email = "7072946@gmail.com";
$name = $firstname.' '.$lastname1;
// $_SESSION['email'] = $email;
// $altemail = $_REQUEST["altemail"];

// $address = $_REQUEST['street1'].', '.$_REQUEST['city'].', '.$_REQUEST['district'].', '.$_REQUEST['district'].' -'.$_REQUEST['zip'].', '.$_REQUEST['contactcountry'];

// $_SESSION['address'] = $address;

// $type_phone = $_REQUEST['type_phone'].' +'. $_REQUEST['country_code'].' '.$_REQUEST['telephone_number'];
// //$cname = $_REQUEST['CreditLast'].' '.$_REQUEST['CreditFirst'];
// $sign = $_REQUEST['sign'];

$vendemail = '<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th scope="row"  colspan="2"><h2>Personal Details</h2></th>
  </tr>
    <td  colspan="2" style="padding-right:80px;" align="right"><strong>Sign</strong>
  qqqqqq
      </td>
  </tr>
</table>';


// $to = 'jweinstock121@gmail.com,contact@eta-australia.com.au';			
$to = 'bovoom@gmail.com';	
$subject = 'Application Form, From:'.$email;
$headers = "MIME-Version: 1.0" . "\r\n";
$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

// Additional headers
$headers .= 'From:eta-australia.com.au<info@eta-australia.com.au>' . "\r\n";
// $headers .= 'Cc: welcome@eta-australia.com.au' . "\r\n";
// $headers .= 'Bcc: welcome2@eta-australia.com.au' . "\r\n";
// if(mail($to, $subject, $vendemail, $headers)){ 
   // mail($_SESSION['email'], $subject, $vendemail, $headers);
	$url = $apiurl."/v1/checkouts";
	$data = "authentication.userId=8acda4c85fddfdb0015fdf66ccff1408" .
		"&authentication.password=qj4adyHzt6" .
		"&authentication.entityId=8acda4c85fddfdb0015fdf8e5f5f1602" .
		"&testMode=EXTERNAL" .
		"&amount=100.00" .
		"&currency=USD" .
		"&paymentType=DB".
        "&customer.email=".$email.
        "&customer.givenName=".$name.
        "&customer.surname=Test";

	// print 'qq';
	// print $apiurl."/v1/checkouts". $data;
	// exit;
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
	
	// print_r( $responseData);
// }

?>
	<!DOCTYPE html>
	<html lang="en">
	<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="icon" type="image/png" href="assets/images/icons/favicon.html">
	<meta name="msvalidate.01" content="65F1DAE1EE3B0B83EEC18DDCD1C8D38B" />
	<script data-cfasync="false" type="text/javascript" data-bablic="59a42ba391104a269eed0fc8" data-bablic-m="[0,'en','en',1,['de'],0,0,0,0,0,0,0,0,[],'cic-gov-eta.online/',[],['_v',2]]" src="//cdn2.bablic.com/js/bablic.3.9.js"></script>
	<script type="text/javascript" src="jquery-1.11.3.min.js"></script>
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
	<link rel="stylesheet" href="../assets/components/minifyx/cache/styles_1e2a103354.css" type="text/css" />
	<link rel="stylesheet" href="bootstrap.css" type="text/css" />
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

	<link rel="stylesheet" id="bootstrap-responsive-css" href="bootstrap-responsive.css" type="text/css" media="all">
	<link rel="stylesheet" href="validationEngine.css" type="text/css">

	</head>
	<body class="cart-empty">
	<div id="header">
	  <div class="container">
		<div class="row">
		  <div class="logo clearfix"><!--canada-eta.png-->
			<div class="span4"> <a href="../index.html"> <img class="top-logo" src="../assets/images/header/logo.png" alt="Canada eTA"/> </a> </div>
			<div class="span4 slogan hidden-phone">
			  <p>&nbsp;  </p>
			</div>
			<div class="span4 contact-button">
			  
			</div>
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
						<small>eta-australia.com.au +16468447580 <br>
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
	<script src="https://test.oppwa.com/v1/paymentWidgets.js?checkoutId=<?php echo $responseData->id; ?>"></script>
	<form action="<?= __BASE_URL; ?>/apply-for-canada-eta/test" class="paymentWidgets" data-brands="VISA MASTER"></form>
	<!--footer Start here-->
	<div id="footer">
	  <div class="container">
		<div class="row">
		  <div class="span12 text-center">
			<div class="text-center">
			  <ul>
				<li class="first here"><a href="index.html" title="" >Home</a></li>
				<li><a href="../index.html" title="" >eTA Application</a></li>
				<li><a href="../canada-eta-requirements/index.html" title="" >eTA Requirements</a></li>
			   <!-- <li><a href="../what-is-canada-eta/index.html" title="" >eTA FAQs</a></li>-->
				<li><a href="../canada-eta-service/index.html" title="" >eTA Services</a></li>
				<li><a href="costs/index.html" title="" >Costs</a></li>
				<li><a href="contacts/index.html" title="" >Contacts</a></li>
			  </ul>
			</div>
			<div class="text-align">
			  <ul>
				<li><a href="../information/terms-and-conditions/index.html">Terms and Conditions</a></li>
				<li><a href="../information/privacy-policy/index.html">Privacy Policy</a></li>
				<li><a href="../information/disclaimer/index.html">Disclaimer</a></li>
				<li><a href="../information/refund-policy/index.html">Refund Policy</a></li>
			  </ul>
			  <br/>
			  <hr>
			  <p> <small>eta-australia.com.au is a private company and is not affiliated with any government agency. We assist foreign travellers needing proper documentation to enter Australia . Our service fees are $100 US Dollars and include the Australian Government fee of AUS$20. You may choose to engage our services or visit cic Internet sites and make your request to travel to Australia for a lesser fee. The Government site can be accessed at https://www.eta.immi.gov.au/ETAS3/etas</small> </p>
			  <br/>
			  <br/>
			  <p>
							&copy;  2017-
								   
							<span class="lowercase">eta-australia.com.au</span>.</br>
									 All rights reserved.</br>Global Processing Solutions LTD (EIK) 204803240 Sofia, Lachezar Stanchev Str. 5 Blvd., Sopharma Business Towers Building B
							   
						</p>
			</div>
		  </div>
		</div>
	  </div>
	</div>
	<script type="text/javascript" src="js/jquery_013.js"></script>
	<script type="text/javascript" src="js/animations.js"></script>
	<script type="text/javascript" src="js/jquery_010.js"></script>
	<script type="text/javascript" src="js/jquery_003.js"></script>
	<script type="text/javascript" src="js/jqueryui.js"></script>
	<script type="text/javascript" src="js/tooltip.js"></script>
	 <script type="text/javascript" src="js/additional2.js"></script>
	<script type="text/javascript" src="js/popover_titles.js"></script>
	<script type="text/javascript" src="js/popover.js"></script>
	<script type="text/javascript">
		jQuery(document).ready(function(){
		   jQuery("#myform").validationEngine();
		});

	jQuery(function() {
	  jQuery('.fm').change(function(){
		var txt  = jQuery(this).val();
		var han = txt.replace(/[?A-Za-z0-9]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
		jQuery(this).val(han);
	  });
	});
		</script>
		<script type="text/javascript" src="js/bootstrap.js"></script>
	<script type="text/javascript" src="js/jquery.js"></script>
	<script type="text/javascript" src="js/customSelect.js"></script>
	<script type="text/javascript" src="js/tooltip_002.js"></script>
	<script type="text/javascript" src="js/addform2.js"></script>
	<script type="text/javascript" src="js/main.js"></script>
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
// } else{ echo 'Something want to wrong '; }				
// }
if(isset($_GET) && $_GET['resourcePath'] != ''){
	print_r($_GET);
	// $url = $apiurl.$_GET['resourcePath'];
	// $url .= "?authentication.userId=8acda4c85fddfdb0015fdf66ccff1408";
	// $url .= "&authentication.password=qj4adyHzt6";
	// $url .= "&authentication.entityId=8acda4c85fddfdb0015fdf8e5f5f1602";

	// $ch = curl_init();
	// curl_setopt($ch, CURLOPT_URL, $url);
	// curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
	// curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);// this should be set to true in production
	// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	// $responseData = curl_exec($ch);
	// if(curl_errno($ch)) {
		// return curl_error($ch);
	// }
	// curl_close($ch);
	// $responseData = json_decode($responseData);
// echo '<pre>'; print_r($responseData); exit;
	

	// $to = 'jweinstock121@gmail.com,contact@eta-australia.com.au';			
	//$to = 'savanisagar99@gmail.com';	
	$subject = 'Application Form: Payment success, From '.$email.' PayID: '.$responseData->id;
	$headers = "MIME-Version: 1.0" . "\r\n";
	$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
	
	// Additional headers
	$headers .= 'From:eta-australia.com.au<info@eta-australia.com.au>' . "\r\n";
	// // $headers .= 'Cc: welcome@eta-australia.com.au' . "\r\n";
	// $headers .= 'Bcc: welcome2@eta-australia.com.au' . "\r\n";
	// mail($email, $subject, $vendemail, $headers);
	// if(mail($to, $subject, $vendemail, $headers)){ 
// header('location:thankyou.html');
// }else{ echo 'Something want to wrong '; }
	//header('location:index.html');	
}
// exit;	
?>