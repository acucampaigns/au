<?php
	require_once('include/config.inc.php');

	session_start();	

	if(isset($_SESSION['ecomusername']) && isset($_SESSION['ecomid'])){
	
		header("Location:dashbord.php");
		exit();
	}
	
	$stitle = mysqli_query($con,"select * from setting where Setting_Key = 'SITE_TITLE'");
	$stitlerow= mysqli_fetch_array($stitle);
	   
	$logo = mysqli_query($con,"select * from setting where Setting_Key = 'LOGO_IMAGE'");
	$logoval= mysqli_fetch_array($logo);
	
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="description" content="A fully featured admin theme which can be used to build CRM, CMS, etc.">
<meta name="author" content="Coderthemes">
<link rel="shortcut icon" href="assets/images/favicon_1.ico">
<link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
<link href="assets/css/core.css" rel="stylesheet" type="text/css" />
<link href="assets/css/components.css" rel="stylesheet" type="text/css" />
<link href="assets/css/icons.css" rel="stylesheet" type="text/css" />
<link href="assets/css/pages.css" rel="stylesheet" type="text/css" />
<link href="assets/css/responsive.css" rel="stylesheet" type="text/css" />

<script src="assets/js/modernizr.min.js"></script>
</head>
<style>
.btn-login {
	background-color: #447e96;
	border: 1px solid #447e96;
	color: #000;
	font-size: 19px;
	font-weight: 900;
}

</style>
<body>
<div class="account-pages"></div>
<div class="clearfix"></div>
<div class="row">
  <div class="col-sm-12 text-center"> </div>
</div>
<div class="wrapper-page">
  <div class=" card-box">
    <div class="panel-heading"> <img src="../../assets/images/header/logo.png" style="width: 195px; margin-left: 66px;"> </div>
    <div class="panel-body">
      <form class="form-horizontal m-t-20" method="post" action="login_check.php">
        <div class="form-group ">
          <div class="col-xs-12">
            <input class="form-control" type="text" required="" name="email" placeholder="Username">
          </div>
        </div>
        <div class="form-group">
          <div class="col-xs-12">
            <input class="form-control" type="password" name="password" required="" placeholder="Password">
          </div>
        </div>
        <div class="form-group text-center m-t-40">
          <div class="col-xs-12">
            <button class="btn btn-login btn-block text-uppercase waves-effect waves-light"  type="submit">Log In </button>
          </div>
        </div>
        <div class="form-group m-t-30 m-b-0">
          <div id="errmsg" style="color:#FF0000">
            <?php if(!empty($_SESSION['errmessage'])){ echo $_SESSION['errmessage']; unset($_SESSION['errmessage']); }?>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
<script>
  var resizefunc = [];
</script>
<!-- jQuery  -->
<script src="assets/js/jquery.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/js/detect.js"></script>
<script src="assets/js/fastclick.js"></script>
<script src="assets/js/jquery.slimscroll.js"></script>
<script src="assets/js/jquery.blockUI.js"></script>
<script src="assets/js/waves.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/jquery.nicescroll.js"></script>
<script src="assets/js/jquery.scrollTo.min.js"></script>
<script src="assets/js/jquery.core.js"></script>
<script src="assets/js/jquery.app.js"></script>
</body>
</html>