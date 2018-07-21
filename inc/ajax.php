<?php
	
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');
	
if(isset($_POST['action']) && !empty($_POST['action'])){
	require_once(__INCLUDES . $_POST['action'] . '.php');
	die();
	
}else{

	die('No Action!');
}