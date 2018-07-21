<?php
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');	
?>
<!DOCTYPE html>

<html lang="en">
	
	<head>
	
		<meta charset="UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="icon" type="image/png" href="<?= __BASE_URL; ?>/assets/images/icons/favicon.ico">
		
		<?php
		
			if(isset($meta['title']) && !empty($meta['title'])){
			
				?>
				
					<title><?= $meta['title'];?></title>
					
				<?php
			}
			
			if(isset($meta['keywords']) && !empty($meta['keywords'])){
			
				?>
				
					<meta name="keywords" content="<?= $meta['keywords'];?>">
					
				<?php
			}
			
			if(isset($meta['description']) && !empty($meta['description'])){
			
				?>
				
					<meta name="description" content="<?= $meta['description'];?>">
					
				<?php
			}
			
		?>
		
		<link href="<?= __BASE_URL; ?>/assets/components/minifyx/cache/styles_1e2a103354.css" rel="stylesheet" type="text/css" media="all" />
		
		<script data-cfasync="false" type="text/javascript" data-bablic="59a42ba391104a269eed0fc8" data-bablic-m="[0,'en','en',1,['de'],0,0,0,0,0,0,0,0,[],'cic-gov-eta.online/',[],['_v',2]]" src="//cdn2.bablic.com/js/bablic.3.9.js"></script>
		
	</head>