<?php	
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');
	
	get_base_head('home');	
?>
	<style type="text/css">
		.auto-style1 {
			width: 100%;
		}
	</style>
	
<body class="cart-empty">
	
	<?php get_the_header();?>

    <div class="container u-marg--b20">
	
        <div class="m-title">
		
            <div class="m-title--txtliner m-title--t3">
			
                <h2>1. About eTA        </h2>
				
            </div>
			
        </div>
		
        <p>
            An eTA is an electronically stored authority for travel to Australia.  Visa-exempt foreign nationals from certain countries are expected to have an eTA to enter Australia.
        </p>

        <div class="u-tac">
           
			<a class="m-button-primary m-button-primary-color2 btn u-marg--b20" href="<?= __BASE_URL; ?>/apply-for-australia-eta/index.html">Apply Online      </a>
       
		</div>
		
        <div class="m-title">
		
            <div class="m-title--txtliner m-title--t3">
			
                <h2>2. eTA Expiration        </h2>
				
            </div>
			
        </div>
		
        <p>
            Your ETA is valid for 12 months. You can enter and stay in Australia for up to three months at a time. If you want to stay in Australia for longer periods, you can apply for another visa, such as a Visitor visa (subclass 600).
        </p>
		
        <div class="m-title">
		
            <div class="m-title--txtliner m-title--t3">
			
                <h2>3. Countries and territories whose citizens need an eTA to travel to Australia        </h2>
				
            </div>
			
        </div>
		
        <p>
            Foreign nationals from the following countries need an eTA before boarding their flight to Australia   
        </p>
		
        <div class="m-table-duotone table-responsive">
		
            <table class="auto-style1" style="border: 1px solid #B8D3F0">
			
                <tr style="background-color: #f2f9ff; text-align: center; border: 1px solid #B8D3F0">
				
                    <td style="border: 1px solid #B8D3F0">United States Of America</td>
					
                    <td style="border: 1px solid #B8D3F0">Brunei</td>
					
                    <td style="border: 1px solid #B8D3F0">Canada</td>
					
                    <td style="border: 1px solid #B8D3F0">Hong Kong</td>					

                </tr>
				
                <tr style="background-color: #ffffff; text-align: center">
				
                    <td style="border: 1px solid #B8D3F0">Japan</td>
					
                    <td style="border: 1px solid #B8D3F0">Malaysia</td>
					
                    <td style="border: 1px solid #B8D3F0">Singapore</td>
					
                    <td style="border: 1px solid #B8D3F0">South Korea</td>

                </tr>

            </table>
			
        </div>		

        <div class="m-title">
		
            <div class="m-title--txtliner m-title--t3">
			
                <h2>5. eTA Application        </h2>
				
            </div>
			
        </div>
		
        <p>
            To apply for an eTA, you must have your passport, email address and a credit card to complete the online application.
        </p>
		
        <p>
            The details you provide in your online eTA application need to be exactly the same as they appear in your passport and you must use the same passport that is linked to your online eTA application when you travel.   
        </p>
		
        <p>
            In your application you need to provide the biographic information such as your name, date and place of birth, gender, marital status, address, nationality and passport number.    
        </p>
		
        <p>
            To apply for eTA you must fill the eTA Application form <a href="<?= __BASE_URL; ?>/apply-for-australia-eta/index.html">eTA Application form</a>
        </p>
		
        <a href="<?= __BASE_URL; ?>/apply-for-australia-eta/index.html"></a>
		
    </div>
	
	<?php get_the_footer(); ?>