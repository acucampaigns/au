<?php
	
require( dirname( __FILE__ ) . '/config.php' );	
require( __INCLUDES . '/helper.php' );	

if(isset($_GET['url']) && !empty($_GET['url'])){
	
	$count = count($link = explode("/",$url = $_GET['url']));
	
	if($_GET['url'] == 'ajax' && isset($_GET['action']) && !empty($_GET['action']) ){
		
		if(!defined('DIR_ACCESS'))	
			die('Access Denied!');
		
		$_POST['action'] 	= $_GET['action'];
		$_REQUEST 			= $_GET;
		require_once(__INCLUDES .'ajax.php');
		exit;
	}
	
	$i 		= 1;
	$file 	= '';
	
	foreach($link as $key => $val){
		
		$file 	.= $link[$key];
		
		if($count > 1 && $i != $count){
			$file 	.= '/';
		}
		
		$i++;
	}
	
	$file 	.= '.php';
	
	if(file_exists(__PAGES . $file)){
	
		require_once(__PAGES . $file);
		exit;
		
	}else{
		
		header('Location: ' . _404_);		
		exit;
	}
	
}else{

	require_once(__PAGES . 'home.php');
	exit;
}