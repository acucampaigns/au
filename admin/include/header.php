<?php $stitle = mysqli_query($con,"select * from setting where Setting_Key = 'SITE_TITLE'");
	   $stitlerow= mysqli_fetch_array($stitle);?>

<!DOCTYPE html>



<html>



<head>



<meta charset="utf-8">



<meta name="viewport" content="width=device-width, initial-scale=1.0">



<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">



<meta name="author" content="Coderthemes">



<link rel="shortcut icon" href="assets/images/favicon_1.ico">



<title><?php //echo base64_decode($stitlerow['Setting_value']);?>  Admin</title>



<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />



<link href="assets/css/core.css" rel="stylesheet" type="text/css" />



<link href="assets/css/components.css" rel="stylesheet" type="text/css" />



<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />



<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />



<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

<link rel="stylesheet" href="../css/font-icons.css" type="text/css">

<!-- HTML5 Shiv and Respond.js IE8 support of HTML5 elements and media queries -->



<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->



<!--[if lt IE 9]>



        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>



        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>



        <![endif]-->



<script src="assets/js/modernizr.min.js"></script>



</head>



<body class="fixed-left">



<!-- Begin page -->



<div id="wrapper">



<!-- Top Bar Start -->



<div class="topbar">



  <!-- LOGO -->



  <div class="topbar-left">



 <style>

 

  @media (min-width:150px) and  (max-width:990px){

  	.logo3-img{

		display:block;	

		width: 67px;

	}

	.logo-img {

		display:none;

		}

  }

  @media (min-width:991px) and  (max-width:1400px){

 	 .logo3-img{

		display:none;	

		

	}

	.logo-img {

		display:block;

		 width: 136px;

		   margin-left: 44px;

	}

	.enlarged .logo3-img{

		 display:block!important;

		  width: 73px !important;	

	 }

	 .enlarged .logo-img {

	 	display:none!important;	

	 }

 } 
 .logo-img {
    height: 62px!important;
}</style>
<?php $logo = mysqli_query($con,"select * from setting where Setting_Key = 'LOGO_IMAGE'");
	   $logoval= mysqli_fetch_array($logo);?>
    <div class="text-center"> <a href="#" class="logo"><img src="../../assets/images/header/logo.png" class="logo-img"></a>



      <!-- Image Logo here -->



      <!--<a href="index.html" class="logo">-->



      <!--<i class="icon-c-logo"> <img src="assets/images/logo_sm.png" height="42"/> </i>-->



      <!--<span><img src="assets/images/logo_light.png" height="20"/></span>-->



      <!--</a>-->



    </div>



  </div>



  <!-- Button mobile view to collapse sidebar menu -->



  <div class="navbar navbar-default" role="navigation">



    <div class="container">



      <div class="">



        <div class="pull-left">



          <button class="button-menu-mobile open-left waves-effect waves-light"> <i class="md md-menu"></i> </button>



          <span class="clearfix"></span> </div>



        <ul class="nav navbar-nav navbar-right pull-right">



          <li><?php //basename($_SERVER["SCRIPT_NAME"]);?><a href="logout.php"><i class="ti-power-off m-r-10 text-danger"></i> Logout</a></li>



        </ul>



      </div>



      <!--/.nav-collapse -->



    </div>



  </div>



</div>



<!-- Top Bar End -->



