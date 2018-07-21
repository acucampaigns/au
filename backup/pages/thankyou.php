<!DOCTYPE html>

<html lang="en">
    
    <head>
    
    <meta charset="UTF-8">
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="icon" type="image/png" href="<?= __BASE_URL; ?>/assets/images/icons/favicon.html">
    
    <meta name="msvalidate.01" content="65F1DAE1EE3B0B83EEC18DDCD1C8D38B" />
    
    <script data-cfasync="false" type="text/javascript" data-bablic="59a42ba391104a269eed0fc8" data-bablic-m="[0,'en','en',1,['de'],0,0,0,0,0,0,0,0,[],'cic-gov-eta.online/',[],['_v',2]]" src="//cdn2.bablic.com/<?= __BASE_URL; ?>/assets/js/bablic.3.9.js"></script>
    
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
        #footer {
            margin-top: 25%;
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
                        
                        <div class="span4"> <a href="<?= __BASE_URL; ?>/index.html"> <img class="top-logo" src="<?= __BASE_URL; ?>/assets/images/header/logo.png" alt="Canada eTA"/> </a> </div>
                        
                        <div class="span4 slogan hidden-phone">
                            <p> TOURIST | TRANSIT | BUSINESS </p>
                        </div>
                        
                        <div class="span2 contact-button">                  
                        
                            <p><a href="mailto:contact@eta-australia.com" class="btn btn-default btn-small">&#9993; | Help and Support</a></p>
                        
                        </div>                      
                        
                        <div class="span2 customer-services hidden-phone"> </div>
                    
                    </div>
                    
                </div>
            
            </div>
            
        </div>
        <div class="container">
        
            <h1>Thank you!</h1>
            
            <div id="mainContent"> 
            
                <p class="alert alert-success">Thank You. Your submission for eta has successfully been applied. You will receive a email with your unique eta number typically within 24 hours. Please remember to check your junk folder in case it may arrive there. Enjoy your trip to Australia.
                
                </br>
                
                </br> <b>Please check your "Spam" folder. If you find our email there, select the confirmation message and click "Not Spam/Junk."</b> 
                
                </br> <b>This will help future messages to get through.</b>
                
                </p>
                
            </div>
            
        </div>
        
        <?php get_the_footer(true);?>