<?php
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');
	
function get_footer_scripts($extra){
	
	ob_start();	
	
	if(!$extra){
		
		include __TEMPLATE .'footer_base_scripts.php';
	}else{
	
		include __TEMPLATE .'footer_extra_scripts.php';
	}		

	print ob_get_clean();
}
	
function get_the_footer($extra = false){
	
	ob_start();	
	
	include __TEMPLATE .'footer.php';

	print ob_get_clean();
}
		
function get_the_header($menu = false){
	
	ob_start();	
	
	include __TEMPLATE .'header.php';

	print ob_get_clean();
}
	
function get_base_head($page = ''){
	
	ob_start();	
	
	$meta 	= get_header_meta($page);
	include __TEMPLATE .'base_head.php';

	print ob_get_clean();
}

function get_header_meta($page){
	
	$array = include __INCLUDES .'meta.php';

	if(isset($array[$page]))
		return $array[$page];

	return array();
}