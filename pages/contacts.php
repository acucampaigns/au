<?php	
if(!defined('DIR_ACCESS'))	
	die('Access Denied!');
	
	get_base_head('home');	
?>

	<style>
		.contact-input {
			height: 34px !important;
			width: 100%;
		}
		textarea {
			width: 100%;
		}
	</style>

<body class="cart-empty">
	
	<?php get_the_header();?>

    <div class="container">
	
        <div class="container u-marg--b20">
		
            <div class="m-title">
			
                <div class="m-title--txtliner m-title--t3">
				
                    <h2>Contact Us</h2>
					
                </div>
				
            </div>
			
            <p>If you have any further questions, please contact our service department by one of the following options or by filling in the contact form at the bottom of the page.</p>
            
			<p>Please feel free to contact us regarding any of the following:<br>
                
				<ul>
					<li>Common questions regarding eTA applications, travel to Australia and tourist visa information;</li>
					
					<li>Any questions about our services;</li>
					
					<li>If you have already submitted an application, please include your full name, email address</li>
					
				</ul>
				
				Please be as specific as possible in your request.
            </p>
			
            <p>TELEPHONE +1 6468447580</p>
			
            <p>EMAIL contact@eta-australia.com</p>
			
            <h2>Company Details</h2>
			
            <p>Global Processing Solutions LTD (EIK) 204803240 Sofia, Lachezar Stanchev Str. 5 Blvd., Sopharma Business Towers Building B</p> 
            
			<div class="m-title">
			
				<div class="m-title--txtliner m-title--t3">
                
                    <h2>Contact form</h2>
					
                </div>
				
            </div>
			
            <div class="container" style="width: 600px;">
			
                <form role="form" id="contact-form">
				
                    <fieldset>
					
                        <label for="name">Name:</label>
						
                        <input class="form-control contact-input" placeholder="Your name" name="name" id="name" type="text">
						
                        <label for="email">Email:</label>
						
                        <input class="form-control contact-input" placeholder="Email" name="email" id="email" type="text">
						
                        <label for="subject">Subject:</label>
                       
						<input class="form-control contact-input" placeholder="Subject" name="subject" id="subject" type="text">
                       
						<label class="form-margin-side" for="message">Message:</label>
                       
						<textarea class="form-control" name="message" id="message" placeholder="Add your message here..."></textarea>
                        
						<input type="button" class="btn btn-success btn-block contact-input" id="send-form" value="Send">
                    
					</fieldset>
					
                </form>
				
                Company - Global Processing Solutions LTD  (EIK) 204803240
				
            </div>			
			
        </div>
		
    </div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.0/jquery.min.js"></script>
	
    <script>
	
        jQuery("#send-form").click(function() { // login button handler
            var data = jQuery("#contact-form").serialize();
            // call login script via ajax
			console.log('data');
			console.log(data);
            $.ajax({
                type: "GET",
                url: "<?= __BASE_URL; ?>/ajax/?action=send",
                data: data,  
                success: function (resp) {
                    console.log('resp');
                    console.log(resp);
                    if (resp) {
                        alert("Your message was sent successfully!");
                    } else {
                        alert("Something come wrong, try again");
                    }
                },
                error: function (resp, textStatus, errorThrown) {
                    console.log(textStatus, errorThrown, resp);
                    alert("Error");
                },
                dataType: 'json'
            });
        })
		
    </script>
	
	<?php get_the_footer(); ?>