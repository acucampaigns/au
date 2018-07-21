<!DOCTYPE html>

<html lang="en">
	
	<head>    
	
		<meta charset="UTF-8">
		
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
		<link rel="icon" type="image/png" href="<?= __BASE_URL; ?>/assets/images/icons/favicon.ico">
		
		<meta name="msvalidate.01" content="65F1DAE1EE3B0B83EEC18DDCD1C8D38B" />
		
		<script data-cfasync="false" type="text/javascript" data-bablic="59a42ba391104a269eed0fc8" data-bablic-m="[0,'en','en',1,['de'],0,0,0,0,0,0,0,0,[],'cic-gov-eta.online/',[],['_v',2]]" src="//cdn2.bablic.com/js/bablic.3.9.js"></script>
		
		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery-1.11.3.min.js"></script>
		
		<script>
		
            $(document).ready(function(){
               
                $('#changeCountryname').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#lawfullcontainer').css("display", "none");
                       $('#notEligible').css("display", "none");
                       $('#travellingCanada').css("display", "none");
                       $('#landorSee').css("display", "none");
                       $('#completeInfo').css("display", "none");
                       $('#minorChild').css("display", "none");
                       $('#doYouStillWantToApplycon').css("display", "none");
                    } else
                        if ($(this).val() === 'Israel' || $(this).val() === 'British Overseas Citizen' || $(this).val() === 'Hong Kong SAR' ||
                            $(this).val() === 'national overseas' || $(this).val() === 'Andorra' || $(this).val() === 'Australia' ||
                            $(this).val() === 'Antigua' || $(this).val() === 'Bahamas' || $(this).val() === 'Barbados' ||
                            $(this).val() === 'Belgium' || $(this).val() === 'British Citizen' || $(this).val() === 'Brunei Darussalam' ||
                            $(this).val() === 'Chile' || $(this).val() === 'Croatia' || $(this).val() === 'Cyprus' ||
                            $(this).val() === 'Czech Republic' || $(this).val() === 'Denmark' || $(this).val() === 'Estonia' ||
                            $(this).val() === 'Greece' || $(this).val() === 'Germany' || $(this).val() === 'France' || $(this).val() === 'Hungary' ||
                            $(this).val() === 'Iceland' || $(this).val() === 'Ireland' || $(this).val() === 'Italy' ||
                            $(this).val() === 'Japan' || $(this).val() === 'Korea' || $(this).val() === 'Liechtenstein' ||
                            $(this).val() === 'Latvia' || $(this).val() === 'Lithuania' || $(this).val() === 'Luxembourg' ||
                            $(this).val() === 'Malta' || $(this).val() === 'Monaco' || $(this).val() === 'Netherlands' ||
                            $(this).val() === 'New Zealand' || $(this).val() === 'Norway' || $(this).val() === 'Papua New Guinea' ||
                            $(this).val() === 'Poland' || $(this).val() === 'Portugal' || $(this).val() === 'Samoa' ||
                            $(this).val() === 'San Marino' || $(this).val() === 'Singapore' || $(this).val() === 'Spain' ||
                            $(this).val() === 'Sweden' || $(this).val() === 'Switzerland' || $(this).val() === 'Anguilla' ||
                            $(this).val() === 'Bermuda' || $(this).val() === 'Cayman Islands' || $(this).val() === 'Falkland Islands' ||
                            $(this).val() === 'Gibraltar' || $(this).val() === 'Montserrat' || $(this).val() === 'Saint Helena'
               
                ) {        
                         $('#travellingCanada').css("display", "block");
                         $('#lawfullcontainer').css("display", "none");
                    } else {
                         $('#lawfullcontainer').css("display", "block");
                         $('#travellingCanada').css("display", "none");
                    }
                });
               
                $('#changeLawful').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#travellingCanada').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#travellingCanada').css("display", "none");
                        $('#notEligible').css("display", "block");
                    } else {
                        $('#travellingCanada').css("display", "block");
                          $('#notEligible').css("display", "none");
                    }
                });
               
                  $('#travelCanada').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#landorSee').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#landorSee').css("display", "none");
                        $('#notEligible').css("display", "block");
                    } else {
                        $('#landorSee').css("display", "block");
                          $('#notEligible').css("display", "none");
                    }
                });
               
                $('#landSeechange').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#doYouStillWantToApplycon').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#doYouStillWantToApplycon').css("display", "none");
                        $('#isRepresentativecon').css("display", "block");
                       
                    } else {
                        $('#doYouStillWantToApplycon').css("display", "block");
                         $('#isRepresentativecon').css("display", "none");
                    }
                });
               
                $('#isRepresentative').change(function() {
                     if ($(this).val() === 'Select') {
                       $('#completeInfo').css("display", "none");
                        $('#minorChild').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#completeInfo').css("display", "block");
                        $('#representative-information').css("display", "none");
                       
                        $("#representative").prop("required", false);
                        $("#representApplicant").prop("required", false);
                            $("#lastname").prop("required", false);
                            $("#firstname").prop("required", false);
                                $("#mailingAddress").prop("required", false);
                               
                        $('#minorChild').css("display", "none");
                    } else {
                        $('#minorChild').css("display", "block");
                        $('#representative-information').css("display", "block");
                        $('#completeInfo').css("display", "none");
                        $("#representative").prop("required", true);
                        $("#representApplicant").prop("required", true);
                            $("#lastname").prop("required", true);
                            $("#firstname").prop("required", true);
                                $("#mailingAddress").prop("required", true);
                    }
                });
 
                $('#employmentOccupation').change(function() {
                    $('#employmentTitle option[value="Not Selected"]').attr('selected','selected');
                    if ($(this).val() !== "Homemaker" && $(this).val() !== "Retired" && $(this).val() !== "Unemployed") {
                        if ($(this).val() === "Student") {
                            $("#employmentTitleBlock").css("display", "none");
                        } else {
                            $("#employmentTitleBlock").css("display", "block");
                        }
                        $("#employment-details").css("display", "block");
                        $("#employmentTitle").prop("required", "required");
                        $("#employmentName").prop("required", "required");
                        $("#employmentCity").prop("required", "required");
                        $("#employmentCountry").prop("required", "required");
                        $("#employmentStartYear").prop("required", "required");
                        var tmpClass = "";
                        if ($(this).val() === "Art, culture, recreation and sport occupations") {
                            tmpClass = "emp-art";
                        } else if ($(this).val() === "Business, finance and administration occupations") {
                            tmpClass = "emp-business";
                        } else if ($(this).val() === "Education, law and social, community and government services occupations") {
                            tmpClass = "emp-edu";
                        } else if ($(this).val() === "Health occupations") {
                            tmpClass = "emp-heal";
                        } else if ($(this).val() === "Management occupations") {
                            tmpClass = "emp-manag";
                        } else if ($(this).val() === "Manufacturing and utilities occupations") {
                            tmpClass = "emp-manuf";
                        } else if ($(this).val() === "Military/armed forces") {
                            tmpClass = "emp-army";
                        } else if ($(this).val() === "Natural and applied sciences and related occupations") {
                            tmpClass = "emp-tech";
                        } else if ($(this).val() === "Natural resources, agriculture and related production occupations") {
                            tmpClass = "emp-natur";
                        } else if ($(this).val() === "Sales and service occupations") {
                            tmpClass = "emp-sale";
                        } else if ($(this).val() === "Trades, transport and equipment operators and related occupations") {
                            tmpClass = "emp-oper";
                        }
                        $("#employmentTitle option").css("display", "none");
                        $("#employmentTitle option."+tmpClass).css("display", "block");
                    } else {
                        $("#employment-details").css("display", "none");
                        $("#employmentTitle").prop("required", "");
                        $("#employmentName").prop("required", "");
                        $("#employmentCity").prop("required", "");
                        $("#employmentCountry").prop("required", "");
                        $("#employmentStartYear").prop("required", "");
                    }
                });
               
                 $('#doYouStillWantToApply').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#minorChild').css("display", "none");
                    } else if ($(this).val() === 'No') {
                        $('#isRepresentativecon').css("display", "none");
                          $('#notEligible').css("display", "block");
                          $('#minorChild').css("display", "none");
                    } else {
                        $('#isRepresentativecon').css("display", "block");
                         $('#notEligible').css("display", "none");
                    }
                });
               
               
                 $('#minorchildChange').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#completeInfo').css("display", "none");
                    } else if ($(this).val() === 'No') {
                          $('#notEligible').css("display", "none");
                          $('#completeInfo').css("display", "block");
                    } else {
                        $('#completeInfo').css("display", "block");
                         $('#notEligible').css("display", "none");
                    }
                });
               
                $('#hasOtherCitizenship').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#CitizenshipsInfoCon').css("display", "none");
                    } else if ($(this).val() === 'No') {
                          $('#CitizenshipsInfoCon').css("display", "none");
                    } else {
                        $('#CitizenshipsInfoCon').css("display", "block");
                    }
                });
               
                  $('#hasPreviouslyApplied').change(function() {
                     if ($(this).val() === 'Select') {
                      $('#UICnumber').css("display", "none");
                    } else if ($(this).val() === 'No') {
                          $('#UICnumber').css("display", "none");
                    } else {
                        $('#UICnumber').css("display", "block");
                    }
                });
               
               
               
            })
        </script>
		
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
			@media (max-width: 992px) {
				form label {
					border:0;
					padding:0;
				}
			}
		</style>

		<link rel="stylesheet" id="bootstrap-responsive-css" href="<?= __BASE_URL; ?>/assets/css/bootstrap-responsive.css" type="text/css" media="all">
		
		<link rel="stylesheet" href="<?= __BASE_URL; ?>/assets/css/validationEngine.css" type="text/css">

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
							<p><a href="mailto:contact@eta-australia.com.au" class="btn btn-default btn-small">&#9993; | Help and Support</a></p>
						</div>
						<div class="span2 customer-services hidden-phone"> </div>
					</div>
				</div>
			</div>
		</div>
		<div class="container">
			<h1>Australia eTA application</h1>
			<div id="mainContent"> </div>
			<div class="row esta-apply">
				<div class="span11">
					<section id="content">
						<div class="" id="blog">
							<div class="row-fluid">
								<div class="span11">
									<form id="myform" name="myForm" class="form-horizontal" role="form" method="POST" action="<?= __BASE_URL; ?>/apply-for-australia-eta/sendemail" autocomplete="on">
						<div class="row">
						  <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<div class="panel panel-default">
							  <div class="panel-heading">
								<h4 class="panel-title"> <a data-parent="#accordion" href="#collapseOne"><strong> Personal Details</strong>  </a> </h4>
							  </div>
							  <div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Select an ETA type<span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								  <div class="form-group">
									<div class="col-xs-12 col-sm-11 col-md-11 col-lg-11" style="margin-bottom:15px;">
									  <label class="checkbox-inline">
									  <input id="visatypeV" class="validate[required]" name="visatype" value="T" checked="checked" type="radio">
									  Tourist </label>
									  <label class="checkbox-inline">
									  <input id="visatypeV" class="validate[required]" name="visatype" value="B" type="radio">
									  Business Visitor </label>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> I declare that the applicant is outside Australia and currently located in <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<select id="whichcountry" name="whichcountry" style="color:black !Important" class="form-control validate[required]" title="Select country">
									  <option value="" selected="selected">Please Select</option>
									   <option value="Afghanistan">Afghanistan</option>
									  <option value="Albania">Albania</option>
									  <option value="Algeria">Algeria</option>
									  <option value="American Samoa">American Samoa</option>
									  <option value="Andorra">Andorra</option>
									  <option value="Angola">Angola</option>
									  <option value="Anguilla">Anguilla</option>
									  <option value="Antarctica">Antarctica</option>
									  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
									  <option value="Argentina">Argentina</option>
									  <option value="Armenia">Armenia</option>
									  <option value="Aruba">Aruba</option>
									  <option value="Austria">Austria</option>
									  <option value="Azerbaijan">Azerbaijan</option>
									  <option value="Bahamas">Bahamas</option>
									  <option value="Bahrain">Bahrain</option>
									  <option value="Bangladesh">Bangladesh</option>
									  <option value="Barbados">Barbados</option>
									  <option value="Belarus">Belarus</option>
									  <option value="Belgium">Belgium</option>
									  <option value="Belize">Belize</option>
									  <option value="Benin">Benin</option>
									  <option value="Bermuda">Bermuda</option>
									  <option value="Bhutan">Bhutan</option>
									  <option value="Bolivia">Bolivia</option>
									  <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
									  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									  <option value="Botswana">Botswana</option>
									  <option value="Bouvet Island">Bouvet Island</option>
									  <option value="Brazil">Brazil</option>
									  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									  <option value="Brunei">Brunei</option>
									  <option value="Bulgaria">Bulgaria</option>
									  <option value="Burkina Faso">Burkina Faso</option>
									  <option value="Burma">Burma</option>
									  <option value="Burundi">Burundi</option>
									  <option value="Byelorussian-Soviet Socialist Republic">Byelorussian-Soviet Socialist Republic</option>
									  <option value="Cambodia">Cambodia</option>
									  <option value="Cameroon">Cameroon</option>
									  <option value="Canada">Canada</option>
									  <option value="Cape Verde">Cape Verde</option>
									  <option value="Cayman Islands">Cayman Islands</option>
									  <option value="Central African Republic">Central African Republic</option>
									  <option value="Chad">Chad</option>
									  <option value="Chile">Chile</option>
									  <option value="China">China</option>
									  <option value="Christmas Island">Christmas Island</option>
									  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									  <option value="Colombia">Colombia</option>
									  <option value="Comoros">Comoros</option>
									  <option value="Congo">Congo</option>
									  <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
									  <option value="Cook Islands">Cook Islands</option>
									  <option value="Costa Rica">Costa Rica</option>
									  <option value="Cote d'Ivoire">Cote d'Ivoire</option>
									  <option value="Croatia (local name: Hrvatska)">Croatia (local name: Hrvatska)</option>
									  <option value="Cuba">Cuba</option>
									  <option value="Curacao">Curacao</option>
									  <option value="Cyprus">Cyprus</option>
									  <option value="Czech Republic">Czech Republic</option>
									  <option value="Czechoslovakia">Czechoslovakia</option>
									  <option value="Denmark">Denmark</option>
									  <option value="Djibouti">Djibouti</option>
									  <option value="Dominica">Dominica</option>
									  <option value="Dominican Republic">Dominican Republic</option>
									  <option value="East Timor">East Timor</option>
									  <option value="Ecuador">Ecuador</option>
									  <option value="Egypt">Egypt</option>
									  <option value="El Salvador">El Salvador</option>
									  <option value="Equatorial Guinea">Equatorial Guinea</option>
									  <option value="Eritrea">Eritrea</option>
									  <option value="Estonia">Estonia</option>
									  <option value="Ethiopia">Ethiopia</option>
									  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									  <option value="Faroe Islands">Faroe Islands</option>
									  <option value="Fiji">Fiji</option>
									  <option value="Finland">Finland</option>
									  <option value="France">France</option>
									  <option value="France, Metropolitan">France, Metropolitan</option>
									  <option value="French Guiana">French Guiana</option>
									  <option value="French Polynesia">French Polynesia</option>
									  <option value="French Southern Territories">French Southern Territories</option>
									  <option value="Gabon">Gabon</option>
									  <option value="Gambia">Gambia</option>
									  <option value="Georgia">Georgia</option>
									  <option value="Germany">Germany</option>
									  <option value="Ghana">Ghana</option>
									  <option value="Gibraltar">Gibraltar</option>
									  <option value="Greece">Greece</option>
									  <option value="Greenland">Greenland</option>
									  <option value="Grenada">Grenada</option>
									  <option value="Guadeloupe">Guadeloupe</option>
									  <option value="Guam">Guam</option>
									  <option value="Guatemala">Guatemala</option>
									  <option value="Guinea">Guinea</option>
									  <option value="Guinea-Bissau">Guinea-Bissau</option>
									  <option value="Guyana">Guyana</option>
									  <option value="Haiti">Haiti</option>
									  <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
									  <option value="Honduras">Honduras</option>
									  <option value="Hong Kong">Hong Kong</option>
									  <option value="Hungary">Hungary</option>
									  <option value="India">India</option>
									  <option value="Indonesia">Indonesia</option>
									  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
									  <option value="Iraq">Iraq</option>
									  <option value="Ireland">Ireland</option>
									  <option value="Israel">Israel</option>
									  <option value="Italy">Italy</option>
									  <option value="Jamaica">Jamaica</option>
									  <option value="Japan">Japan</option>
									  <option value="Jordan">Jordan</option>
									  <option value="Kazakhstan">Kazakhstan</option>
									  <option value="Kenya">Kenya</option>
									  <option value="Kiribati">Kiribati</option>
									  <option value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>
									  <option value="Kosovo">Kosovo</option>
									  <option value="Kuwait">Kuwait</option>
									  <option value="Kyrgyzstan">Kyrgyzstan</option>
									  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									  <option value="Latvia">Latvia</option>
									  <option value="Lebanon">Lebanon</option>
									  <option value="Lesotho">Lesotho</option>
									  <option value="Liberia">Liberia</option>
									  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									  <option value="Liechtenstein">Liechtenstein</option>
									  <option value="Lithuania">Lithuania</option>
									  <option value="Luxembourg">Luxembourg</option>
									  <option value="Macau">Macau</option>
									  <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
									  <option value="Madagascar">Madagascar</option>
									  <option value="Malawi">Malawi</option>
									  <option value="Malaysia">Malaysia</option>
									  <option value="Maldives">Maldives</option>
									  <option value="Mali">Mali</option>
									  <option value="Malta">Malta</option>
									  <option value="Marshall Islands">Marshall Islands</option>
									  <option value="Martinique">Martinique</option>
									  <option value="Mauritania">Mauritania</option>
									  <option value="Mauritius">Mauritius</option>
									  <option value="Mayotte">Mayotte</option>
									  <option value="Mexico">Mexico</option>
									  <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
									  <option value="Moldova, Republic of">Moldova, Republic of</option>
									  <option value="Monaco">Monaco</option>
									  <option value="Mongolia">Mongolia</option>
									  <option value="Montenegro">Montenegro</option>
									  <option value="Montserrat">Montserrat</option>
									  <option value="Morocco">Morocco</option>
									  <option value="Mozambique">Mozambique</option>
									  <option value="Myanmar">Myanmar</option>
									  <option value="Namibia">Namibia</option>
									  <option value="Nauru">Nauru</option>
									  <option value="Nepal">Nepal</option>
									  <option value="Netherlands">Netherlands</option>
									  <option value="Netherlands Antilles">Netherlands Antilles</option>
									  <option value="Neutral Zone">Neutral Zone</option>
									  <option value="New Caledonia">New Caledonia</option>
									  <option value="New Zealand">New Zealand</option>
									  <option value="Nicaragua">Nicaragua</option>
									  <option value="Niger">Niger</option>
									  <option value="Nigeria">Nigeria</option>
									  <option value="Niue">Niue</option>
									  <option value="Norfolk Island">Norfolk Island</option>
									  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
									  <option value="Norway">Norway</option>
									  <option value="Oman">Oman</option>
									  <option value="Pakistan">Pakistan</option>
									  <option value="Palau">Palau</option>
									  <option value="Palestine">Palestine</option>
									  <option value="Panama">Panama</option>
									  <option value="Papua New Guinea">Papua New Guinea</option>
									  <option value="Paraguay">Paraguay</option>
									  <option value="Peru">Peru</option>
									  <option value="Philippines">Philippines</option>
									  <option value="Pitcairn">Pitcairn</option>
									  <option value="Poland">Poland</option>
									  <option value="Portugal">Portugal</option>
									  <option value="Puerto Rico">Puerto Rico</option>
									  <option value="Qatar">Qatar</option>
									  <option value="Reunion">Reunion</option>
									  <option value="Romania">Romania</option>
									  <option value="Russian Federation">Russian Federation</option>
									  <option value="Rwanda">Rwanda</option>
									  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									  <option value="Saint Lucia">Saint Lucia</option>
									  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									  <option value="Samoa">Samoa</option>
									  <option value="San Marino">San Marino</option>
									  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
									  <option value="Saudi Arabia">Saudi Arabia</option>
									  <option value="Senegal">Senegal</option>
									  <option value="Serbia">Serbia</option>
									  <option value="Serbia and Montenegro">Serbia and Montenegro</option>
									  <option value="Seychelles">Seychelles</option>
									  <option value="Sierra Leone">Sierra Leone</option>
									  <option value="Singapore">Singapore</option>
									  <option value="Sint Maarten (Dutch Part)">Sint Maarten (Dutch Part)</option>
									  <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
									  <option value="Slovenia">Slovenia</option>
									  <option value="Solomon Islands">Solomon Islands</option>
									  <option value="Somalia">Somalia</option>
									  <option value="South Africa">South Africa</option>
									  <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
									  <option value="South Korea">South Korea</option>
									  <option value="South Sudan">South Sudan</option>
									  <option value="Spain">Spain</option>
									  <option value="Sri Lanka">Sri Lanka</option>
									  <option value="St. Helena">St. Helena</option>
									  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
									  <option value="Sudan">Sudan</option>
									  <option value="Suriname">Suriname</option>
									  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
									  <option value="Swaziland">Swaziland</option>
									  <option value="Sweden">Sweden</option>
									  <option value="Switzerland">Switzerland</option>
									  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
									  <option value="Taiwan">Taiwan</option>
									  <option value="Tajikistan">Tajikistan</option>
									  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									  <option value="Thailand">Thailand</option>
									  <option value="Timor-Leste, Democratic Republic of">Timor-Leste, Democratic Republic of</option>
									  <option value="Togo">Togo</option>
									  <option value="Tokelau">Tokelau</option>
									  <option value="Tonga">Tonga</option>
									  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
									  <option value="Tunisia">Tunisia</option>
									  <option value="Turkey">Turkey</option>
									  <option value="Turkmenistan">Turkmenistan</option>
									  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									  <option value="Tuvalu">Tuvalu</option>
									  <option value="USSR">USSR</option>
									  <option value="Uganda">Uganda</option>
									  <option value="Ukraine">Ukraine</option>
									  <option value="United Arab Emirates">United Arab Emirates</option>
									  <option value="United Kingdom">United Kingdom</option>
									  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									  <option value="United States of America">United States of America</option>
									  <option value="Uruguay">Uruguay</option>
									  <option value="Uzbekistan">Uzbekistan</option>
									  <option value="Vanuatu">Vanuatu</option>
									  <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
									  <option value="Venezuela">Venezuela</option>
									  <option value="Vietnam">Vietnam</option>
									  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
									  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
									  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
									  <option value="Wallis and Futuna Islands Western Sahara">Wallis and Futuna Islands Western Sahara</option>
									  <option value="Yemen">Yemen</option>
									  <option value="Yemen (Democratic Peoples Republic)">Yemen (Democratic Peoples Republic)</option>
									  <option value="Yugoslavia">Yugoslavia</option>
									  <option value="Zaire">Zaire</option>
									  <option value="Zambia">Zambia</option>
									  <option value="Zimbabwe">Zimbabwe</option>
									</select>
								  </div>
								  <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="You must select a location if outside Australia" data-original-title="Your currently located" id="applywcac"><img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Family Name <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<input class="form-control validate[required,maxSize[24],custom[onlyLetterSp]] fm" name="lastname1" id="lastname1" style="color:black !Important" ata-errormessage-value-missing="Surname" placeholder=" Family Name" type="text">
								  </div>
								  <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="Family name is also known as Last name or Surname.Enter ALL name(s) as they appear on your passport." data-original-title="Surname" id="applyfnln"><img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Given Names <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<input class="form-control validate[required,maxSize[24],custom[onlyLetterSp]] fm" name="firstname" i="" "firstname"="" style="color:black !Important" data-errormessage-value-missing="You must enter ALL of the applicants given names EXACTLY as they appear in their passport - not doing so may create delays in providing an ETA and/or may result in considerable delays when boarding a flight and/or on arrival in Australia. If an applicant only has 1 name, it should be entered in the 'Family name' field and a hyphen entered in the 'Given names' field" placeholder="Given Name" type="text">
								  </div>
								  <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="Please provide your first name(s) (also known as given name) exactly as shown on your passport or identity document." data-original-title="Given name" id="applygnfn"> <img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Date of Birth <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
									<select id="text" type="text" name="dobd" onChange="CheckHowold()" style="color:black !Important" class="form-control validate[required,funcCall[checkdob]]" data-prompt-position="inline" title="Birth date">
									  <option value="" selected="selected">Day</option>
									  <option value="1">1</option>
									  <option value="2">2</option>
									  <option value="3">3</option>
									  <option value="4">4</option>
									  <option value="5">5</option>
									  <option value="6">6</option>
									  <option value="7">7</option>
									  <option value="8">8</option>
									  <option value="9">9</option>
									  <option value="10">10</option>
									  <option value="11">11</option>
									  <option value="12">12</option>
									  <option value="13">13</option>
									  <option value="14">14</option>
									  <option value="15">15</option>
									  <option value="16">16</option>
									  <option value="17">17</option>
									  <option value="18">18</option>
									  <option value="19">19</option>
									  <option value="20">20</option>
									  <option value="21">21</option>
									  <option value="22">22</option>
									  <option value="23">23</option>
									  <option value="24">24</option>
									  <option value="25">25</option>
									  <option value="26">26</option>
									  <option value="27">27</option>
									  <option value="28">28</option>
									  <option value="29">29</option>
									  <option value="30">30</option>
									  <option value="31">31</option>
									</select>
								  </div>
								  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
									<select id="text" type="text" name="dobm" onChange="CheckHowold()" style="color:black !Important" class="form-control validate[required,funcCall[checkdob]]" data-prompt-position="inline" title="Birth Month">
									  <option value="" selected="selected">Month</option>
									  <option value="1">1 (Jan)</option>
									  <option value="2">2 (Feb)</option>
									  <option value="3">3 (Mar)</option>
									  <option value="4">4 (Apr)</option>
									  <option value="5">5 (May)</option>
									  <option value="6">6 (Jun)</option>
									  <option value="7">7 (Jul)</option>
									  <option value="8">8 (Aug)</option>
									  <option value="9">9 (Sep)</option>
									  <option value="10">10 (Oct)</option>
									  <option value="11">11 (Nov)</option>
									  <option value="12">12 (Dec)</option>
									</select>
								  </div>
								  <div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
									<select id="text" type="text" name="doby" onChange="CheckHowold()" style="color:black !Important" class="form-control validate[required,funcCall[checkdob]]" data-prompt-position="inline" title="Birth Year">
										<option value="" selected="selected">Year</option>
										<?php 
										
											for($i = 1922; $i <= date('Y'); $i++){
											
												?>
									 
													<option value="<?=$i;?>"><?=$i;?></option>
													
												<?php
											}
										?>
									</select>
								  </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Sex <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<div class="form-group">
									  <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11" style="margin-bottom:15px;">
										<label class="checkbox-inline">
										<input class="validate[required]" id="Male" name="gender" value="Male" type="radio">
										Male </label>
										<label class="checkbox-inline">
										<input class="validate[required]" id="Female" name="gender" value="Female" type="radio">
										Female </label>
										<label class="checkbox-inline">
										<input class="validate[required]" id="Other" name="gender" value="Other" type="radio">
										Unknown </label>
									  </div>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Nationality of Passport Holder <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<select id="citizencountry" name="citizencountry" style="color:black !Important" class="form-control validate[required]" title="Select your country">
									  <option value="" selected="selected">Please select</option>
									  <option value="Brunei">Brunei</option>
									  <option value="Canada">Canada</option>
									  <option value="Hong Kong">Hong Kong</option>
									  <option value="Japan">Japan</option>
									  <option value="Singapore">Singapore</option>
									  <option value="Malaysia">Malaysia</option>
									  <option value="South Korea">South Korea</option>
									  <option value="United States of America">United States of America</option>
									</select>
								  </div>
								  <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="Please select the nationality of the applicant" data-original-title="Nationality" id="applywcac"> <img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Country of birth <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<select id="cob" name="cob" style="color:black !Important" class="form-control validate[required]" title="Country of Birth">
									  <option value="" selected="selected">Select Country</option>
									  <option value="Afghanistan">Afghanistan</option>
									  <option value="Albania">Albania</option>
									  <option value="Algeria">Algeria</option>
									  <option value="American Samoa">American Samoa</option>
									  <option value="Andorra">Andorra</option>
									  <option value="Angola">Angola</option>
									  <option value="Anguilla">Anguilla</option>
									  <option value="Antarctica">Antarctica</option>
									  <option value="Antigua and Barbuda">Antigua and Barbuda</option>
									  <option value="Argentina">Argentina</option>
									  <option value="Armenia">Armenia</option>
									  <option value="Aruba">Aruba</option>
									  <option value="Austria">Austria</option>
									  <option value="Azerbaijan">Azerbaijan</option>
									  <option value="Bahamas">Bahamas</option>
									  <option value="Bahrain">Bahrain</option>
									  <option value="Bangladesh">Bangladesh</option>
									  <option value="Barbados">Barbados</option>
									  <option value="Belarus">Belarus</option>
									  <option value="Belgium">Belgium</option>
									  <option value="Belize">Belize</option>
									  <option value="Benin">Benin</option>
									  <option value="Bermuda">Bermuda</option>
									  <option value="Bhutan">Bhutan</option>
									  <option value="Bolivia">Bolivia</option>
									  <option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
									  <option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									  <option value="Botswana">Botswana</option>
									  <option value="Bouvet Island">Bouvet Island</option>
									  <option value="Brazil">Brazil</option>
									  <option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									  <option value="Brunei">Brunei</option>
									  <option value="Bulgaria">Bulgaria</option>
									  <option value="Burkina Faso">Burkina Faso</option>
									  <option value="Burma">Burma</option>
									  <option value="Burundi">Burundi</option>
									  <option value="Byelorussian-Soviet Socialist Republic">Byelorussian-Soviet Socialist Republic</option>
									  <option value="Cambodia">Cambodia</option>
									  <option value="Cameroon">Cameroon</option>
									  <option value="Canada">Canada</option>
									  <option value="Cape Verde">Cape Verde</option>
									  <option value="Cayman Islands">Cayman Islands</option>
									  <option value="Central African Republic">Central African Republic</option>
									  <option value="Chad">Chad</option>
									  <option value="Chile">Chile</option>
									  <option value="China">China</option>
									  <option value="Christmas Island">Christmas Island</option>
									  <option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									  <option value="Colombia">Colombia</option>
									  <option value="Comoros">Comoros</option>
									  <option value="Congo">Congo</option>
									  <option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
									  <option value="Cook Islands">Cook Islands</option>
									  <option value="Costa Rica">Costa Rica</option>
									  <option value="Cote d'Ivoire">Cote d'Ivoire</option>
									  <option value="Croatia (local name: Hrvatska)">Croatia (local name: Hrvatska)</option>
									  <option value="Cuba">Cuba</option>
									  <option value="Curacao">Curacao</option>
									  <option value="Cyprus">Cyprus</option>
									  <option value="Czech Republic">Czech Republic</option>
									  <option value="Czechoslovakia">Czechoslovakia</option>
									  <option value="Denmark">Denmark</option>
									  <option value="Djibouti">Djibouti</option>
									  <option value="Dominica">Dominica</option>
									  <option value="Dominican Republic">Dominican Republic</option>
									  <option value="East Timor">East Timor</option>
									  <option value="Ecuador">Ecuador</option>
									  <option value="Egypt">Egypt</option>
									  <option value="El Salvador">El Salvador</option>
									  <option value="Equatorial Guinea">Equatorial Guinea</option>
									  <option value="Eritrea">Eritrea</option>
									  <option value="Estonia">Estonia</option>
									  <option value="Ethiopia">Ethiopia</option>
									  <option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									  <option value="Faroe Islands">Faroe Islands</option>
									  <option value="Fiji">Fiji</option>
									  <option value="Finland">Finland</option>
									  <option value="France">France</option>
									  <option value="France, Metropolitan">France, Metropolitan</option>
									  <option value="French Guiana">French Guiana</option>
									  <option value="French Polynesia">French Polynesia</option>
									  <option value="French Southern Territories">French Southern Territories</option>
									  <option value="Gabon">Gabon</option>
									  <option value="Gambia">Gambia</option>
									  <option value="Georgia">Georgia</option>
									  <option value="Germany">Germany</option>
									  <option value="Ghana">Ghana</option>
									  <option value="Gibraltar">Gibraltar</option>
									  <option value="Greece">Greece</option>
									  <option value="Greenland">Greenland</option>
									  <option value="Grenada">Grenada</option>
									  <option value="Guadeloupe">Guadeloupe</option>
									  <option value="Guam">Guam</option>
									  <option value="Guatemala">Guatemala</option>
									  <option value="Guinea">Guinea</option>
									  <option value="Guinea-Bissau">Guinea-Bissau</option>
									  <option value="Guyana">Guyana</option>
									  <option value="Haiti">Haiti</option>
									  <option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
									  <option value="Honduras">Honduras</option>
									  <option value="Hong Kong">Hong Kong</option>
									  <option value="Hungary">Hungary</option>
									  <option value="India">India</option>
									  <option value="Indonesia">Indonesia</option>
									  <option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
									  <option value="Iraq">Iraq</option>
									  <option value="Ireland">Ireland</option>
									  <option value="Israel">Israel</option>
									  <option value="Italy">Italy</option>
									  <option value="Jamaica">Jamaica</option>
									  <option value="Japan">Japan</option>
									  <option value="Jordan">Jordan</option>
									  <option value="Kazakhstan">Kazakhstan</option>
									  <option value="Kenya">Kenya</option>
									  <option value="Kiribati">Kiribati</option>
									  <option value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>
									  <option value="Kosovo">Kosovo</option>
									  <option value="Kuwait">Kuwait</option>
									  <option value="Kyrgyzstan">Kyrgyzstan</option>
									  <option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									  <option value="Latvia">Latvia</option>
									  <option value="Lebanon">Lebanon</option>
									  <option value="Lesotho">Lesotho</option>
									  <option value="Liberia">Liberia</option>
									  <option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									  <option value="Liechtenstein">Liechtenstein</option>
									  <option value="Lithuania">Lithuania</option>
									  <option value="Luxembourg">Luxembourg</option>
									  <option value="Macau">Macau</option>
									  <option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
									  <option value="Madagascar">Madagascar</option>
									  <option value="Malawi">Malawi</option>
									  <option value="Malaysia">Malaysia</option>
									  <option value="Maldives">Maldives</option>
									  <option value="Mali">Mali</option>
									  <option value="Malta">Malta</option>
									  <option value="Marshall Islands">Marshall Islands</option>
									  <option value="Martinique">Martinique</option>
									  <option value="Mauritania">Mauritania</option>
									  <option value="Mauritius">Mauritius</option>
									  <option value="Mayotte">Mayotte</option>
									  <option value="Mexico">Mexico</option>
									  <option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
									  <option value="Moldova, Republic of">Moldova, Republic of</option>
									  <option value="Monaco">Monaco</option>
									  <option value="Mongolia">Mongolia</option>
									  <option value="Montenegro">Montenegro</option>
									  <option value="Montserrat">Montserrat</option>
									  <option value="Morocco">Morocco</option>
									  <option value="Mozambique">Mozambique</option>
									  <option value="Myanmar">Myanmar</option>
									  <option value="Namibia">Namibia</option>
									  <option value="Nauru">Nauru</option>
									  <option value="Nepal">Nepal</option>
									  <option value="Netherlands">Netherlands</option>
									  <option value="Netherlands Antilles">Netherlands Antilles</option>
									  <option value="Neutral Zone">Neutral Zone</option>
									  <option value="New Caledonia">New Caledonia</option>
									  <option value="New Zealand">New Zealand</option>
									  <option value="Nicaragua">Nicaragua</option>
									  <option value="Niger">Niger</option>
									  <option value="Nigeria">Nigeria</option>
									  <option value="Niue">Niue</option>
									  <option value="Norfolk Island">Norfolk Island</option>
									  <option value="Northern Mariana Islands">Northern Mariana Islands</option>
									  <option value="Norway">Norway</option>
									  <option value="Oman">Oman</option>
									  <option value="Pakistan">Pakistan</option>
									  <option value="Palau">Palau</option>
									  <option value="Palestine">Palestine</option>
									  <option value="Panama">Panama</option>
									  <option value="Papua New Guinea">Papua New Guinea</option>
									  <option value="Paraguay">Paraguay</option>
									  <option value="Peru">Peru</option>
									  <option value="Philippines">Philippines</option>
									  <option value="Pitcairn">Pitcairn</option>
									  <option value="Poland">Poland</option>
									  <option value="Portugal">Portugal</option>
									  <option value="Puerto Rico">Puerto Rico</option>
									  <option value="Qatar">Qatar</option>
									  <option value="Reunion">Reunion</option>
									  <option value="Romania">Romania</option>
									  <option value="Russian Federation">Russian Federation</option>
									  <option value="Rwanda">Rwanda</option>
									  <option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									  <option value="Saint Lucia">Saint Lucia</option>
									  <option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									  <option value="Samoa">Samoa</option>
									  <option value="San Marino">San Marino</option>
									  <option value="Sao Tome and Principe">Sao Tome and Principe</option>
									  <option value="Saudi Arabia">Saudi Arabia</option>
									  <option value="Senegal">Senegal</option>
									  <option value="Serbia">Serbia</option>
									  <option value="Serbia and Montenegro">Serbia and Montenegro</option>
									  <option value="Seychelles">Seychelles</option>
									  <option value="Sierra Leone">Sierra Leone</option>
									  <option value="Singapore">Singapore</option>
									  <option value="Sint Maarten (Dutch Part)">Sint Maarten (Dutch Part)</option>
									  <option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
									  <option value="Slovenia">Slovenia</option>
									  <option value="Solomon Islands">Solomon Islands</option>
									  <option value="Somalia">Somalia</option>
									  <option value="South Africa">South Africa</option>
									  <option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
									  <option value="South Korea">South Korea</option>
									  <option value="South Sudan">South Sudan</option>
									  <option value="Spain">Spain</option>
									  <option value="Sri Lanka">Sri Lanka</option>
									  <option value="St. Helena">St. Helena</option>
									  <option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
									  <option value="Sudan">Sudan</option>
									  <option value="Suriname">Suriname</option>
									  <option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
									  <option value="Swaziland">Swaziland</option>
									  <option value="Sweden">Sweden</option>
									  <option value="Switzerland">Switzerland</option>
									  <option value="Syrian Arab Republic">Syrian Arab Republic</option>
									  <option value="Taiwan">Taiwan</option>
									  <option value="Tajikistan">Tajikistan</option>
									  <option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									  <option value="Thailand">Thailand</option>
									  <option value="Timor-Leste, Democratic Republic of">Timor-Leste, Democratic Republic of</option>
									  <option value="Togo">Togo</option>
									  <option value="Tokelau">Tokelau</option>
									  <option value="Tonga">Tonga</option>
									  <option value="Trinidad and Tobago">Trinidad and Tobago</option>
									  <option value="Tunisia">Tunisia</option>
									  <option value="Turkey">Turkey</option>
									  <option value="Turkmenistan">Turkmenistan</option>
									  <option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									  <option value="Tuvalu">Tuvalu</option>
									  <option value="USSR">USSR</option>
									  <option value="Uganda">Uganda</option>
									  <option value="Ukraine">Ukraine</option>
									  <option value="United Arab Emirates">United Arab Emirates</option>
									  <option value="United Kingdom">United Kingdom</option>
									  <option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									  <option value="United States of America">United States of America</option>
									  <option value="Uruguay">Uruguay</option>
									  <option value="Uzbekistan">Uzbekistan</option>
									  <option value="Vanuatu">Vanuatu</option>
									  <option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
									  <option value="Venezuela">Venezuela</option>
									  <option value="Vietnam">Vietnam</option>
									  <option value="Virgin Islands (British)">Virgin Islands (British)</option>
									  <option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
									  <option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
									  <option value="Wallis and Futuna Islands Western Sahara">Wallis and Futuna Islands Western Sahara</option>
									  <option value="Yemen">Yemen</option>
									  <option value="Yemen (Democratic Peoples Republic)">Yemen (Democratic Peoples Republic)</option>
									  <option value="Yugoslavia">Yugoslavia</option>
									  <option value="Zaire">Zaire</option>
									  <option value="Zambia">Zambia</option>
									  <option value="Zimbabwe">Zimbabwe</option>
									</select>
								  </div>
								  <div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="You must enter the country of birth of the applican" data-original-title="Birth of country" id="applycob"><img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Are you currently, or have you ever been, known by any other names (e.g. alias)?<span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<div class="form-group">
									  <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11" style="margin-bottom:15px;">
										<label class="checkbox-inline">
										<input id="othernameyes" class="validate[required]" name="othername" value="Y" type="radio">
										Yes </label>
										<label class="checkbox-inline">
										<input id="othernameno" class="validate[required]" name="othername" value="N" checked="checked" type="radio">
										No </label>
									  </div>
									</div>
								  </div>
								</div>
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Have you ever had a criminal conviction?<span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<div class="form-group">
									  <div class="col-xs-12 col-sm-11 col-md-11 col-lg-11" style="margin-bottom:15px;">
										<label class="checkbox-inline">
										<input id="Convictionyes" class="validate[required]" name="Conviction" value="Y" type="radio">
										Yes </label>
										<label class="checkbox-inline">
										<input id="Convictionno" class="validate[required]" name="Conviction" value="N" checked="checked" type="radio">
										No </label>
									  </div>
									</div>
								  </div>
								</div>
							  </div>
							</div>
							<div class="clearfix"></div>
							<div class="panel panel-default">
							  <div class="panel-heading">
								<h4 class="panel-title"> <a data-parent="#accordion" href="#collapseOne"><strong>Passport Details</strong>  </a> </h4>
							  </div>
							  <div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Country of Passport <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								  <select id="pic" name="pic" style="color:black !Important" class="form-control validate[required]" title="Please select Nationality of Passport Holder">
									<option value="" selected="selected">Please select</option>
									<option value="Brunei">Brunei</option>
									<option value="Canada">Canada</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Japan">Japan</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Singapore">Singapore</option>
									<option value="South Korea">South Korea</option>
									<option value="United States of America">United States of America</option>
								  </select>
								</div>
								<div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="You must enter the nationality of the applicant " data-original-title="Nationality of Passport Holder" id="applywciyp"><img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
							  </div>
							  <div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Passport Date of Issue <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
								  <select id="pidd" name="pidd" style="color:black !Important" class="form-control validate[required]" data-prompt-position="inline" title="Passport Date of Issue">
									<option value="" selected="selected">Day</option>
									<option value="1">1</option>
									<option value="2" >2</option>
									<option value="3">3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								  </select>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
								  <select id="pidm" name="pidm" style="color:black !Important" class="form-control validate[required]" data-prompt-position="inline" title="Passport Date of Issue">
									<option value="" selected="selected">Month</option>
									<option value="1">1 (Jan)</option>
									<option value="2">2 (Feb)</option>
									<option value="3"  >3 (Mar)</option>
									<option value="4">4 (Apr)</option>
									<option value="5">5 (May)</option>
									<option value="6">6 (Jun)</option>
									<option value="7">7 (Jul)</option>
									<option value="8">8 (Aug)</option>
									<option value="9">9 (Sep)</option>
									<option value="10">10 (Oct)</option>
									<option value="11">11 (Nov)</option>
									<option value="12">12 (Dec)</option>
								  </select>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
								  <select id="pidy" name="pidy" style="color:black !Important" class="form-control validate[required,funcCall[checkpid]]" data-prompt-position="inline" title="Passport Date of Issue">
									<option value="">Year</option>
									<?php 
										
										for($i = date('Y')-10; $i <= date('Y'); $i++){
										
											?>
								 
												<option value="<?=$i;?>"><?=$i;?></option>
												
											<?php
										}
									?>									
								  </select>
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Passport Expiry Date <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
								  <select onChange="return PassportCheck();" id="pedd" name="pedd" style="color:black !Important" data-prompt-position="inline" class="form-control select" title="Passport Expiry Date">
									<option value="" selected="selected">Day</option>
									<option value="1">1</option>
									<option value="2">2</option>
									<option value="3" >3</option>
									<option value="4">4</option>
									<option value="5">5</option>
									<option value="6">6</option>
									<option value="7">7</option>
									<option value="8">8</option>
									<option value="9">9</option>
									<option value="10">10</option>
									<option value="11">11</option>
									<option value="12">12</option>
									<option value="13">13</option>
									<option value="14">14</option>
									<option value="15">15</option>
									<option value="16">16</option>
									<option value="17">17</option>
									<option value="18">18</option>
									<option value="19">19</option>
									<option value="20">20</option>
									<option value="21">21</option>
									<option value="22">22</option>
									<option value="23">23</option>
									<option value="24">24</option>
									<option value="25">25</option>
									<option value="26">26</option>
									<option value="27">27</option>
									<option value="28">28</option>
									<option value="29">29</option>
									<option value="30">30</option>
									<option value="31">31</option>
								  </select>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
								  <select id="pedm" name="pedm" style="color:black !Important" data-prompt-position="inline" class="form-control validate[required]" title="Passport Expiry Date">
									<option value="" selected="selected">Month</option>
									<option value="1">1 (Jan)</option>
									<option value="2">2 (Feb)</option>
									<option value="3" >3 (Mar)</option>
									<option value="4">4 (Apr)</option>
									<option value="5">5 (May)</option>
									<option value="6">6 (Jun)</option>
									<option value="7">7 (Jul)</option>
									<option value="8">8 (Aug)</option>
									<option value="9">9 (Sep)</option>
									<option value="10">10 (Oct)</option>
									<option value="11">11 (Nov)</option>
									<option value="12">12 (Dec)</option>
								  </select>
								</div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
									<select id="pedy" name="pedy" style="color:black !Important" data-prompt-position="inline" class="form-control validate[required,funcCall[checkped],funcCall[pchk]]" title="Passport Expiry Date">
									<option value="" selected="selected">Year</option>
										<?php 
											
											for($i = date('Y'); $i <= date('Y')+10; $i++){
											
												?>
									 
													<option value="<?=$i;?>"><?=$i;?></option>
													
												<?php
											}
										?>								
									</select>
								</div>
							  </div>
							  <div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Passport Number <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								  <input class="form-control validate[required,minSize[7],custom[onlyLetterNumber]] fm" name="passportnumber" id="passportnumber" style="color:black !Important" placeholder="Please input Passport Number" type="text">
								</div>
								<div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="You must enter the passport number from the applicant's passport, and it must be a valid passport number for the given country of passport" data-original-title="Passport Number" id="applywiypn"> <img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
							  </div>
							  <!--<div class="form-group">
								<div class="col-xs-12 col-sm-3 col-md-3 col-lg-4"> Issuing Authority <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-2 col-md-2 col-lg-2">
								  <button type="button" onClick="issuing_authority.value='unknown';" class="btn btn-primary">UNKNOWN</button>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								  <input class="form-control validate[required,custom[onlyLetterSp]] fm" name="issuing_authority" id="issuing_authority" style="color:black !Important" placeholder="Issuing Authority" value="" type="text">
								</div>
								<div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="You must enter the issuing authority of the applicant's passport" data-original-title="Issuing Authority" id="applyissue"> <img src="/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
							  </div>-->
							  <div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Does the applicant hold current passports for any other countries? <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								  <div class="form-group">
									<div class="col-xs-12 col-sm-11 col-md-11 col-lg-11" style="margin-bottom:15px;">
									  <label class="checkbox-inline">
									  <input id="addcitizenyes" class="validate[required]" onClick="jQuery('#addcitizendiv').show();" name="addcitizen" value="Y" type="radio">
									  Yes </label>
									  <label class="checkbox-inline">
									  <input id="addcitizenno" class="validate[required]" onClick="jQuery('#addcitizendiv').hide();" name="addcitizen" value="N" checked="checked" type="radio">
									  No </label>
									</div>
								  </div>
								</div>
							  </div>
							  <div id="addcitizendiv" style="display:none;">
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Please select passports for any other countries </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<select id="onotherountry1" name="onothercountry1" style="color:black !Important" class="form-control validate[required]" title="Select your country">
									  <option value="" selected="selected">Passport 1</option>
									  <option value="AFG">Afghanistan</option>
									  <option value="ALB">Albania</option>
									  <option value="DZA">Algeria</option>
									  <option value="ASM">American Samoa</option>
									  <option value="AND">Andorra</option>
									  <option value="AGO">Angola</option>
									  <option value="AIA">Anguilla</option>
									  <option value="ATA">Antarctica</option>
									  <option value="ATG">Antigua and Barbuda</option>
									  <option value="ARG">Argentina</option>
									  <option value="ARM">Armenia</option>
									  <option value="ABW">Aruba</option>
									  <option value="AUS">Australia</option>
									  <option value="AUT">Austria</option>
									  <option value="AZE">Azerbaijan</option>
									  <option value="GBN">BRITISH -NATIONAL (OVERSEAS)</option>
									  <option value="GBO">BRITISH -OVERSEAS CITIZEN</option>
									  <option value="GBP">BRITISH -PROTECTED PERSON</option>
									  <option value="GBS">BRITISH -SUBJECT</option>
									  <option value="GBD">BRITISH DEPENDENT TERRITORIES CITIZEN</option>
									  <option value="BHS">Bahamas</option>
									  <option value="BHR">Bahrain</option>
									  <option value="BGD">Bangladesh</option>
									  <option value="BRB">Barbados</option>
									  <option value="BLR">Belarus</option>
									  <option value="BEL">Belgium</option>
									  <option value="BLZ">Belize</option>
									  <option value="BEN">Benin</option>
									  <option value="BMU">Bermuda</option>
									  <option value="BTN">Bhutan</option>
									  <option value="BOL">Bolivia</option>
									  <option value="BES">Bonaire, Saint Eustatius and Saba</option>
									  <option value="BIH">Bosnia and Herzegovina</option>
									  <option value="BWA">Botswana</option>
									  <option value="BVT">Bouvet Island</option>
									  <option value="BRA">Brazil</option>
									  <option value="IOT">British Indian Ocean Territory </option>
									  <option value="BRN">Brunei</option>
									  <option value="BGR">Bulgaria</option>
									  <option value="BFA">Burkina Faso</option>
									  <option value="BDI">Burundi</option>
									  <option value="KHM">Cambodia</option>
									  <option value="KHM">Cambodia</option>
									  <option value="CMR">Cameroon</option>
									  <option value="CAN">Canada</option>
									  <option value="CPV">Cape Verde</option>
									  <option value="CYM">Cayman Islands</option>
									  <option value="CAF">Central African Republic</option>
									  <option value="TCD">Chad</option>
									  <option value="CHL">Chile</option>
									  <option value="CHN">China</option>
									  <option value="CXR">Christmas Island</option>
									  <option value="CCK">Cocos (Keeling) Islands</option>
									  <option value="COL">Colombia</option>
									  <option value="COM">Comoros</option>
									  <option value="COG">Congo</option>
									  <option value="COD">Congo, Democratic Republic of the</option>
									  <option value="COK">Cook Islands</option>
									  <option value="CRI">Costa Rica</option>
									  <option value="CIV">Cote d'Ivoire</option>
									  <option value="HRV">Croatia (local name: Hrvatska)</option>
									  <option value="CUB">Cuba</option>
									  <option value="CUW">Curacao</option>
									  <option value="CYP">Cyprus</option>
									  <option value="CZE">Czech Republic</option>
									  <option value="CSK">Czechoslovakia</option>
									  <option value="DNK">Denmark</option>
									  <option value="DJI">Djibouti</option>
									  <option value="DMA">Dominica</option>
									  <option value="DOM">Dominican Republic</option>
									  <option value="TMP">East Timor</option>
									  <option value="ECU">Ecuador</option>
									  <option value="EGY">Egypt</option>
									  <option value="SLV">El Salvador</option>
									  <option value="GNQ">Equatorial Guinea</option>
									  <option value="ERI">Eritrea</option>
									  <option value="EST">Estonia</option>
									  <option value="ETH">Ethiopia</option>
									  <option value="FLK">Falkland Islands (Malvinas)</option>
									  <option value="FRO">Faroe Islands</option>
									  <option value="FJI">Fiji </option>
									  <option value="FIN">Finland</option>
									  <option value="FRA">France</option>
									  <option value="FXX">France, Metropolitan</option>
									  <option value="GUF">French Guiana</option>
									  <option value="PYF">French Polynesia</option>
									  <option value="ATF">French Southern Territories</option>
									  <option value="GAB">Gabon</option>
									  <option value="GMB">Gambia</option>
									  <option value="GEO">Georgia</option>
									  <option value="D">Germany</option>
									  <option value="GHA">Ghana</option>
									  <option value="GIB">Gibraltar</option>
									  <option value="GRC">Greece</option>
									  <option value="GRL">Greenland</option>
									  <option value="GRD">Grenada</option>
									  <option value="GLP">Guadeloupe</option>
									  <option value="GUM">Guam</option>
									  <option value="GTM">Guatemala</option>
									  <option value="GIN">Guinea</option>
									  <option value="GNB">Guinea-Bissau</option>
									  <option value="GUY">Guyana</option>
									  <option value="HTI">Haiti</option>
									  <option value="HMD">Heard and McDonald Islands</option>
									  <option value="HND">Honduras</option>
									  <option value="HKG">Hong Kong</option>
									  <option value="HUN">Hungary</option>
									  <option value="ISL">Iceland</option>
									  <option value="IND">India</option>
									  <option value="IDN">Indonesia</option>
									  <option value="IRN">Iran (Islamic Republic of)</option>
									  <option value="IRQ">Iraq</option>
									  <option value="IRL">Ireland</option>
									  <option value="ISR">Israel</option>
									  <option value="ITA">Italy</option>
									  <option value="JAM">Jamaica</option>
									  <option value="JPN">Japan</option>
									  <option value="JOR">Jordan</option>
									  <option value="KAZ">Kazakhstan</option>
									  <option value="KEN">Kenya</option>
									  <option value="KIR">Kiribati</option>
									  <option value="PRK">Korea, Democratic Peoples Republic of</option>
									  <option value="RKS">Kosovo</option>
									  <option value="KWT">Kuwait</option>
									  <option value="KGZ">Kyrgyzstan</option>
									  <option value="LAO">Lao People's Democratic Republic</option>
									  <option value="LVA">Latvia</option>
									  <option value="LBN">Lebanon</option>
									  <option value="LSO">Lesotho</option>
									  <option value="LBR">Liberia</option>
									  <option value="LBY">Libyan Arab Jamahiriya</option>
									  <option value="LIE">Liechtenstein</option>
									  <option value="LTU">Lithuania</option>
									  <option value="LUX">Luxembourg</option>
									  <option value="MAC">Macau</option>
									  <option value="MKD">Macedonia, Former Yugoslav Republic of</option>
									  <option value="MDG">Madagascar</option>
									  <option value="MWI">Malawi</option>
									  <option value="MYS">Malaysia</option>
									  <option value="MDV">Maldives</option>
									  <option value="MLI">Mali</option>
									  <option value="MLT">Malta</option>
									  <option value="MHL">Marshall Islands</option>
									  <option value="MTQ">Martinique</option>
									  <option value="MRT">Mauritania</option>
									  <option value="MUS">Mauritius</option>
									  <option value="MYT">Mayotte</option>
									  <option value="MEX">Mexico</option>
									  <option value="FSM">Micronesia, Federated States Of </option>
									  <option value="MDA">Moldova, Republic of</option>
									  <option value="MCO">Monaco</option>
									  <option value="MNG">Mongolia</option>
									  <option value="MNE">Montenegro</option>
									  <option value="MSR">Montserrat</option>
									  <option value="MAR">Morocco</option>
									  <option value="MOZ">Mozambique</option>
									  <option value="MMR">Myanmar</option>
									  <option value="NAM">Namibia</option>
									  <option value="NRU">Nauru</option>
									  <option value="NPL">Nepal</option>
									  <option value="NLD">Netherlands</option>
									  <option value="ANT">Netherlands Antilles</option>
									  <option value="NTZ">Neutral Zone</option>
									  <option value="NCL">New Caledonia</option>
									  <option value="NZL">New Zealand</option>
									  <option value="NIC">Nicaragua</option>
									  <option value="NER">Niger</option>
									  <option value="NGA">Nigeria</option>
									  <option value="NIU">Niue</option>
									  <option value="NFK">Norfolk Island</option>
									  <option value="MNP">Northern Mariana Islands</option>
									  <option value="NOR">Norway</option>
									  <option value="OMN">Oman</option>
									  <option value="PAK">Pakistan</option>
									  <option value="PLW">Palau</option>
									  <option value="PSE">Palestine</option>
									  <option value="PAN">Panama</option>
									  <option value="PNG">Papua New Guinea</option>
									  <option value="PRY">Paraguay</option>
									  <option value="PER">Peru</option>
									  <option value="PHL">Philippines</option>
									  <option value="PCN">Pitcairn</option>
									  <option value="POL">Poland</option>
									  <option value="PRT">Portugal</option>
									  <option value="PRI">Puerto Rico</option>
									  <option value="QAT">Qatar</option>
									  <option value="ROM">ROMANIA PRE 1/2/2002</option>
									  <option value="REU">Reunion</option>
									  <option value="ROU">Romania</option>
									  <option value="RUS">Russian Federation</option>
									  <option value="RWA">Rwanda</option>
									  <option value="KNA">Saint Kitts and Nevis</option>
									  <option value="LCA">Saint Lucia</option>
									  <option value="VCT">Saint Vincent and the Grenadines</option>
									  <option value="WSM">Samoa</option>
									  <option value="SMR">San Marino</option>
									  <option value="STP">Sao Tome and Principe</option>
									  <option value="SAU">Saudi Arabia</option>
									  <option value="SEN">Senegal</option>
									  <option value="SRB">Serbia</option>
									  <option value="SCG">Serbia and Montenegro</option>
									  <option value="SYC">Seychelles</option>
									  <option value="SLE">Sierra Leone</option>
									  <option value="SGP">Singapore</option>
									  <option value="SXM">Sint Maarten (Dutch Part)</option>
									  <option value="SVK">Slovakia (Slovak Republic)</option>
									  <option value="SVN">Slovenia</option>
									  <option value="SLB">Solomon Islands</option>
									  <option value="SOM">Somalia</option>
									  <option value="ZAF">South Africa</option>
									  <option value="SGS">South Georgia and South Sandwich Islands</option>
									  <option value="KOR">South Korea</option>
									  <option value="SSD">South Sudan</option>
									  <option value="ESP">Spain</option>
									  <option value="LKA">Sri Lanka</option>
									  <option value="SHN">St. Helena</option>
									  <option value="SPM">St. Pierre and Miquelon</option>
									  <option value="SDN">Sudan</option>
									  <option value="SUR">Suriname</option>
									  <option value="SJM">Svalbard and Jan Mayen Islands</option>
									  <option value="SWZ">Swaziland</option>
									  <option value="SWE">Sweden</option>
									  <option value="CHE">Switzerland</option>
									  <option value="SYR">Syrian Arab Republic</option>
									  <option value="TWN">Taiwan</option>
									  <option value="TJK">Tajikistan</option>
									  <option value="TZA">Tanzania, United Republic of</option>
									  <option value="THA">Thailand</option>
									  <option value="TLS">Timor-Leste, Democratic Republic of</option>
									  <option value="TGO">Togo</option>
									  <option value="TKL">Tokelau</option>
									  <option value="TON">Tonga</option>
									  <option value="TTO">Trinidad and Tobago</option>
									  <option value="TUN">Tunisia</option>
									  <option value="TUR">Turkey</option>
									  <option value="TKM">Turkmenistan</option>
									  <option value="TCA">Turks and Caicos Islands</option>
									  <option value="TUV">Tuvalu</option>
									  <option value="UGA">Uganda</option>
									  <option value="UKR">Ukraine</option>
									  <option value="ARE">United Arab Emirates</option>
									  <option value="GBR">United Kingdom</option>
									  <option value="UMI">United States Minor Outlying Islands</option>
									  <option value="USA">United States of America</option>
									  <option value="URY">Uruguay</option>
									  <option value="UZB">Uzbekistan</option>
									  <option value="VUT">Vanuatu</option>
									  <option value="VAT">Vatican City State (Holy See)</option>
									  <option value="VEN">Venezuela</option>
									  <option value="VNM">Vietnam</option>
									  <option value="VGB">Virgin Islands (British)</option>
									  <option value="VIR">Virgin Islands (U.S.)</option>
									  <option value="WLF">Wallis and Futuna Islands</option>
									  <option value="ESH">Western Sahara</option>
									  <option value="YEM">Yemen</option>
									  <option value="YUG">Yugoslavia</option>
									  <option value="ZAR">Zaire</option>
									  <option value="ZMB">Zambia</option>
									  <option value="ZWE">Zimbabwe</option>
									</select>
								  </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Please select passports for any other countries </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<select id="onotherountry2" name="onothercountry2" style="color:black !Important" class="form-control validate[required]" title="Select your country">
									  <option value="" selected="selected">Passport 2</option>
									  <option value="AFG">Afghanistan</option>
									  <option value="ALB">Albania</option>
									  <option value="DZA">Algeria</option>
									  <option value="ASM">American Samoa</option>
									  <option value="AND">Andorra</option>
									  <option value="AGO">Angola</option>
									  <option value="AIA">Anguilla</option>
									  <option value="ATA">Antarctica</option>
									  <option value="ATG">Antigua and Barbuda</option>
									  <option value="ARG">Argentina</option>
									  <option value="ARM">Armenia</option>
									  <option value="ABW">Aruba</option>
									  <option value="AUS">Australia</option>
									  <option value="AUT">Austria</option>
									  <option value="AZE">Azerbaijan</option>
									  <option value="GBN">BRITISH -NATIONAL (OVERSEAS)</option>
									  <option value="GBO">BRITISH -OVERSEAS CITIZEN</option>
									  <option value="GBP">BRITISH -PROTECTED PERSON</option>
									  <option value="GBS">BRITISH -SUBJECT</option>
									  <option value="GBD">BRITISH DEPENDENT TERRITORIES CITIZEN</option>
									  <option value="BHS">Bahamas</option>
									  <option value="BHR">Bahrain</option>
									  <option value="BGD">Bangladesh</option>
									  <option value="BRB">Barbados</option>
									  <option value="BLR">Belarus</option>
									  <option value="BEL">Belgium</option>
									  <option value="BLZ">Belize</option>
									  <option value="BEN">Benin</option>
									  <option value="BMU">Bermuda</option>
									  <option value="BTN">Bhutan</option>
									  <option value="BOL">Bolivia</option>
									  <option value="BES">Bonaire, Saint Eustatius and Saba</option>
									  <option value="BIH">Bosnia and Herzegovina</option>
									  <option value="BWA">Botswana</option>
									  <option value="BVT">Bouvet Island</option>
									  <option value="BRA">Brazil</option>
									  <option value="IOT">British Indian Ocean Territory </option>
									  <option value="BRN">Brunei</option>
									  <option value="BGR">Bulgaria</option>
									  <option value="BFA">Burkina Faso</option>
									  <option value="BDI">Burundi</option>
									  <option value="KHM">Cambodia</option>
									  <option value="KHM">Cambodia</option>
									  <option value="CMR">Cameroon</option>
									  <option value="CAN">Canada</option>
									  <option value="CPV">Cape Verde</option>
									  <option value="CYM">Cayman Islands</option>
									  <option value="CAF">Central African Republic</option>
									  <option value="TCD">Chad</option>
									  <option value="CHL">Chile</option>
									  <option value="CHN">China</option>
									  <option value="CXR">Christmas Island</option>
									  <option value="CCK">Cocos (Keeling) Islands</option>
									  <option value="COL">Colombia</option>
									  <option value="COM">Comoros</option>
									  <option value="COG">Congo</option>
									  <option value="COD">Congo, Democratic Republic of the</option>
									  <option value="COK">Cook Islands</option>
									  <option value="CRI">Costa Rica</option>
									  <option value="CIV">Cote d'Ivoire</option>
									  <option value="HRV">Croatia (local name: Hrvatska)</option>
									  <option value="CUB">Cuba</option>
									  <option value="CUW">Curacao</option>
									  <option value="CYP">Cyprus</option>
									  <option value="CZE">Czech Republic</option>
									  <option value="CSK">Czechoslovakia</option>
									  <option value="DNK">Denmark</option>
									  <option value="DJI">Djibouti</option>
									  <option value="DMA">Dominica</option>
									  <option value="DOM">Dominican Republic</option>
									  <option value="TMP">East Timor</option>
									  <option value="ECU">Ecuador</option>
									  <option value="EGY">Egypt</option>
									  <option value="SLV">El Salvador</option>
									  <option value="GNQ">Equatorial Guinea</option>
									  <option value="ERI">Eritrea</option>
									  <option value="EST">Estonia</option>
									  <option value="ETH">Ethiopia</option>
									  <option value="FLK">Falkland Islands (Malvinas)</option>
									  <option value="FRO">Faroe Islands</option>
									  <option value="FJI">Fiji </option>
									  <option value="FIN">Finland</option>
									  <option value="FRA">France</option>
									  <option value="FXX">France, Metropolitan</option>
									  <option value="GUF">French Guiana</option>
									  <option value="PYF">French Polynesia</option>
									  <option value="ATF">French Southern Territories</option>
									  <option value="GAB">Gabon</option>
									  <option value="GMB">Gambia</option>
									  <option value="GEO">Georgia</option>
									  <option value="D">Germany</option>
									  <option value="GHA">Ghana</option>
									  <option value="GIB">Gibraltar</option>
									  <option value="GRC">Greece</option>
									  <option value="GRL">Greenland</option>
									  <option value="GRD">Grenada</option>
									  <option value="GLP">Guadeloupe</option>
									  <option value="GUM">Guam</option>
									  <option value="GTM">Guatemala</option>
									  <option value="GIN">Guinea</option>
									  <option value="GNB">Guinea-Bissau</option>
									  <option value="GUY">Guyana</option>
									  <option value="HTI">Haiti</option>
									  <option value="HMD">Heard and McDonald Islands</option>
									  <option value="HND">Honduras</option>
									  <option value="HKG">Hong Kong</option>
									  <option value="HUN">Hungary</option>
									  <option value="ISL">Iceland</option>
									  <option value="IND">India</option>
									  <option value="IDN">Indonesia</option>
									  <option value="IRN">Iran (Islamic Republic of)</option>
									  <option value="IRQ">Iraq</option>
									  <option value="IRL">Ireland</option>
									  <option value="ISR">Israel</option>
									  <option value="ITA">Italy</option>
									  <option value="JAM">Jamaica</option>
									  <option value="JPN">Japan</option>
									  <option value="JOR">Jordan</option>
									  <option value="KAZ">Kazakhstan</option>
									  <option value="KEN">Kenya</option>
									  <option value="KIR">Kiribati</option>
									  <option value="PRK">Korea, Democratic Peoples Republic of</option>
									  <option value="RKS">Kosovo</option>
									  <option value="KWT">Kuwait</option>
									  <option value="KGZ">Kyrgyzstan</option>
									  <option value="LAO">Lao People's Democratic Republic</option>
									  <option value="LVA">Latvia</option>
									  <option value="LBN">Lebanon</option>
									  <option value="LSO">Lesotho</option>
									  <option value="LBR">Liberia</option>
									  <option value="LBY">Libyan Arab Jamahiriya</option>
									  <option value="LIE">Liechtenstein</option>
									  <option value="LTU">Lithuania</option>
									  <option value="LUX">Luxembourg</option>
									  <option value="MAC">Macau</option>
									  <option value="MKD">Macedonia, Former Yugoslav Republic of</option>
									  <option value="MDG">Madagascar</option>
									  <option value="MWI">Malawi</option>
									  <option value="MYS">Malaysia</option>
									  <option value="MDV">Maldives</option>
									  <option value="MLI">Mali</option>
									  <option value="MLT">Malta</option>
									  <option value="MHL">Marshall Islands</option>
									  <option value="MTQ">Martinique</option>
									  <option value="MRT">Mauritania</option>
									  <option value="MUS">Mauritius</option>
									  <option value="MYT">Mayotte</option>
									  <option value="MEX">Mexico</option>
									  <option value="FSM">Micronesia, Federated States Of </option>
									  <option value="MDA">Moldova, Republic of</option>
									  <option value="MCO">Monaco</option>
									  <option value="MNG">Mongolia</option>
									  <option value="MNE">Montenegro</option>
									  <option value="MSR">Montserrat</option>
									  <option value="MAR">Morocco</option>
									  <option value="MOZ">Mozambique</option>
									  <option value="MMR">Myanmar</option>
									  <option value="NAM">Namibia</option>
									  <option value="NRU">Nauru</option>
									  <option value="NPL">Nepal</option>
									  <option value="NLD">Netherlands</option>
									  <option value="ANT">Netherlands Antilles</option>
									  <option value="NTZ">Neutral Zone</option>
									  <option value="NCL">New Caledonia</option>
									  <option value="NZL">New Zealand</option>
									  <option value="NIC">Nicaragua</option>
									  <option value="NER">Niger</option>
									  <option value="NGA">Nigeria</option>
									  <option value="NIU">Niue</option>
									  <option value="NFK">Norfolk Island</option>
									  <option value="MNP">Northern Mariana Islands</option>
									  <option value="NOR">Norway</option>
									  <option value="OMN">Oman</option>
									  <option value="PAK">Pakistan</option>
									  <option value="PLW">Palau</option>
									  <option value="PSE">Palestine</option>
									  <option value="PAN">Panama</option>
									  <option value="PNG">Papua New Guinea</option>
									  <option value="PRY">Paraguay</option>
									  <option value="PER">Peru</option>
									  <option value="PHL">Philippines</option>
									  <option value="PCN">Pitcairn</option>
									  <option value="POL">Poland</option>
									  <option value="PRT">Portugal</option>
									  <option value="PRI">Puerto Rico</option>
									  <option value="QAT">Qatar</option>
									  <option value="ROM">ROMANIA PRE 1/2/2002</option>
									  <option value="REU">Reunion</option>
									  <option value="ROU">Romania</option>
									  <option value="RUS">Russian Federation</option>
									  <option value="RWA">Rwanda</option>
									  <option value="KNA">Saint Kitts and Nevis</option>
									  <option value="LCA">Saint Lucia</option>
									  <option value="VCT">Saint Vincent and the Grenadines</option>
									  <option value="WSM">Samoa</option>
									  <option value="SMR">San Marino</option>
									  <option value="STP">Sao Tome and Principe</option>
									  <option value="SAU">Saudi Arabia</option>
									  <option value="SEN">Senegal</option>
									  <option value="SRB">Serbia</option>
									  <option value="SCG">Serbia and Montenegro</option>
									  <option value="SYC">Seychelles</option>
									  <option value="SLE">Sierra Leone</option>
									  <option value="SGP">Singapore</option>
									  <option value="SXM">Sint Maarten (Dutch Part)</option>
									  <option value="SVK">Slovakia (Slovak Republic)</option>
									  <option value="SVN">Slovenia</option>
									  <option value="SLB">Solomon Islands</option>
									  <option value="SOM">Somalia</option>
									  <option value="ZAF">South Africa</option>
									  <option value="SGS">South Georgia and South Sandwich Islands</option>
									  <option value="KOR">South Korea</option>
									  <option value="SSD">South Sudan</option>
									  <option value="ESP">Spain</option>
									  <option value="LKA">Sri Lanka</option>
									  <option value="SHN">St. Helena</option>
									  <option value="SPM">St. Pierre and Miquelon</option>
									  <option value="SDN">Sudan</option>
									  <option value="SUR">Suriname</option>
									  <option value="SJM">Svalbard and Jan Mayen Islands</option>
									  <option value="SWZ">Swaziland</option>
									  <option value="SWE">Sweden</option>
									  <option value="CHE">Switzerland</option>
									  <option value="SYR">Syrian Arab Republic</option>
									  <option value="TWN">Taiwan</option>
									  <option value="TJK">Tajikistan</option>
									  <option value="TZA">Tanzania, United Republic of</option>
									  <option value="THA">Thailand</option>
									  <option value="TLS">Timor-Leste, Democratic Republic of</option>
									  <option value="TGO">Togo</option>
									  <option value="TKL">Tokelau</option>
									  <option value="TON">Tonga</option>
									  <option value="TTO">Trinidad and Tobago</option>
									  <option value="TUN">Tunisia</option>
									  <option value="TUR">Turkey</option>
									  <option value="TKM">Turkmenistan</option>
									  <option value="TCA">Turks and Caicos Islands</option>
									  <option value="TUV">Tuvalu</option>
									  <option value="UGA">Uganda</option>
									  <option value="UKR">Ukraine</option>
									  <option value="ARE">United Arab Emirates</option>
									  <option value="GBR">United Kingdom</option>
									  <option value="UMI">United States Minor Outlying Islands</option>
									  <option value="USA">United States of America</option>
									  <option value="URY">Uruguay</option>
									  <option value="UZB">Uzbekistan</option>
									  <option value="VUT">Vanuatu</option>
									  <option value="VAT">Vatican City State (Holy See)</option>
									  <option value="VEN">Venezuela</option>
									  <option value="VNM">Vietnam</option>
									  <option value="VGB">Virgin Islands (British)</option>
									  <option value="VIR">Virgin Islands (U.S.)</option>
									  <option value="WLF">Wallis and Futuna Islands</option>
									  <option value="ESH">Western Sahara</option>
									  <option value="YEM">Yemen</option>
									  <option value="YUG">Yugoslavia</option>
									  <option value="ZAR">Zaire</option>
									  <option value="ZMB">Zambia</option>
									  <option value="ZWE">Zimbabwe</option>
									</select>
								  </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Please select passports for any other countries </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<select id="onotherountry3" name="onothercountry3" style="color:black !Important" class="form-control validate[required]" title="Select your country">
									  <option value="" selected="selected">Passport 3</option>
									  <option value="AFG">Afghanistan</option>
									  <option value="ALB">Albania</option>
									  <option value="DZA">Algeria</option>
									  <option value="ASM">American Samoa</option>
									  <option value="AND">Andorra</option>
									  <option value="AGO">Angola</option>
									  <option value="AIA">Anguilla</option>
									  <option value="ATA">Antarctica</option>
									  <option value="ATG">Antigua and Barbuda</option>
									  <option value="ARG">Argentina</option>
									  <option value="ARM">Armenia</option>
									  <option value="ABW">Aruba</option>
									  <option value="AUS">Australia</option>
									  <option value="AUT">Austria</option>
									  <option value="AZE">Azerbaijan</option>
									  <option value="GBN">BRITISH -NATIONAL (OVERSEAS)</option>
									  <option value="GBO">BRITISH -OVERSEAS CITIZEN</option>
									  <option value="GBP">BRITISH -PROTECTED PERSON</option>
									  <option value="GBS">BRITISH -SUBJECT</option>
									  <option value="GBD">BRITISH DEPENDENT TERRITORIES CITIZEN</option>
									  <option value="BHS">Bahamas</option>
									  <option value="BHR">Bahrain</option>
									  <option value="BGD">Bangladesh</option>
									  <option value="BRB">Barbados</option>
									  <option value="BLR">Belarus</option>
									  <option value="BEL">Belgium</option>
									  <option value="BLZ">Belize</option>
									  <option value="BEN">Benin</option>
									  <option value="BMU">Bermuda</option>
									  <option value="BTN">Bhutan</option>
									  <option value="BOL">Bolivia</option>
									  <option value="BES">Bonaire, Saint Eustatius and Saba</option>
									  <option value="BIH">Bosnia and Herzegovina</option>
									  <option value="BWA">Botswana</option>
									  <option value="BVT">Bouvet Island</option>
									  <option value="BRA">Brazil</option>
									  <option value="IOT">British Indian Ocean Territory </option>
									  <option value="BRN">Brunei</option>
									  <option value="BGR">Bulgaria</option>
									  <option value="BFA">Burkina Faso</option>
									  <option value="BDI">Burundi</option>
									  <option value="KHM">Cambodia</option>
									  <option value="KHM">Cambodia</option>
									  <option value="CMR">Cameroon</option>
									  <option value="CAN">Canada</option>
									  <option value="CPV">Cape Verde</option>
									  <option value="CYM">Cayman Islands</option>
									  <option value="CAF">Central African Republic</option>
									  <option value="TCD">Chad</option>
									  <option value="CHL">Chile</option>
									  <option value="CHN">China</option>
									  <option value="CXR">Christmas Island</option>
									  <option value="CCK">Cocos (Keeling) Islands</option>
									  <option value="COL">Colombia</option>
									  <option value="COM">Comoros</option>
									  <option value="COG">Congo</option>
									  <option value="COD">Congo, Democratic Republic of the</option>
									  <option value="COK">Cook Islands</option>
									  <option value="CRI">Costa Rica</option>
									  <option value="CIV">Cote d'Ivoire</option>
									  <option value="HRV">Croatia (local name: Hrvatska)</option>
									  <option value="CUB">Cuba</option>
									  <option value="CUW">Curacao</option>
									  <option value="CYP">Cyprus</option>
									  <option value="CZE">Czech Republic</option>
									  <option value="CSK">Czechoslovakia</option>
									  <option value="DNK">Denmark</option>
									  <option value="DJI">Djibouti</option>
									  <option value="DMA">Dominica</option>
									  <option value="DOM">Dominican Republic</option>
									  <option value="TMP">East Timor</option>
									  <option value="ECU">Ecuador</option>
									  <option value="EGY">Egypt</option>
									  <option value="SLV">El Salvador</option>
									  <option value="GNQ">Equatorial Guinea</option>
									  <option value="ERI">Eritrea</option>
									  <option value="EST">Estonia</option>
									  <option value="ETH">Ethiopia</option>
									  <option value="FLK">Falkland Islands (Malvinas)</option>
									  <option value="FRO">Faroe Islands</option>
									  <option value="FJI">Fiji </option>
									  <option value="FIN">Finland</option>
									  <option value="FRA">France</option>
									  <option value="FXX">France, Metropolitan</option>
									  <option value="GUF">French Guiana</option>
									  <option value="PYF">French Polynesia</option>
									  <option value="ATF">French Southern Territories</option>
									  <option value="GAB">Gabon</option>
									  <option value="GMB">Gambia</option>
									  <option value="GEO">Georgia</option>
									  <option value="D">Germany</option>
									  <option value="GHA">Ghana</option>
									  <option value="GIB">Gibraltar</option>
									  <option value="GRC">Greece</option>
									  <option value="GRL">Greenland</option>
									  <option value="GRD">Grenada</option>
									  <option value="GLP">Guadeloupe</option>
									  <option value="GUM">Guam</option>
									  <option value="GTM">Guatemala</option>
									  <option value="GIN">Guinea</option>
									  <option value="GNB">Guinea-Bissau</option>
									  <option value="GUY">Guyana</option>
									  <option value="HTI">Haiti</option>
									  <option value="HMD">Heard and McDonald Islands</option>
									  <option value="HND">Honduras</option>
									  <option value="HKG">Hong Kong</option>
									  <option value="HUN">Hungary</option>
									  <option value="ISL">Iceland</option>
									  <option value="IND">India</option>
									  <option value="IDN">Indonesia</option>
									  <option value="IRN">Iran (Islamic Republic of)</option>
									  <option value="IRQ">Iraq</option>
									  <option value="IRL">Ireland</option>
									  <option value="ISR">Israel</option>
									  <option value="ITA">Italy</option>
									  <option value="JAM">Jamaica</option>
									  <option value="JPN">Japan</option>
									  <option value="JOR">Jordan</option>
									  <option value="KAZ">Kazakhstan</option>
									  <option value="KEN">Kenya</option>
									  <option value="KIR">Kiribati</option>
									  <option value="PRK">Korea, Democratic Peoples Republic of</option>
									  <option value="RKS">Kosovo</option>
									  <option value="KWT">Kuwait</option>
									  <option value="KGZ">Kyrgyzstan</option>
									  <option value="LAO">Lao People's Democratic Republic</option>
									  <option value="LVA">Latvia</option>
									  <option value="LBN">Lebanon</option>
									  <option value="LSO">Lesotho</option>
									  <option value="LBR">Liberia</option>
									  <option value="LBY">Libyan Arab Jamahiriya</option>
									  <option value="LIE">Liechtenstein</option>
									  <option value="LTU">Lithuania</option>
									  <option value="LUX">Luxembourg</option>
									  <option value="MAC">Macau</option>
									  <option value="MKD">Macedonia, Former Yugoslav Republic of</option>
									  <option value="MDG">Madagascar</option>
									  <option value="MWI">Malawi</option>
									  <option value="MYS">Malaysia</option>
									  <option value="MDV">Maldives</option>
									  <option value="MLI">Mali</option>
									  <option value="MLT">Malta</option>
									  <option value="MHL">Marshall Islands</option>
									  <option value="MTQ">Martinique</option>
									  <option value="MRT">Mauritania</option>
									  <option value="MUS">Mauritius</option>
									  <option value="MYT">Mayotte</option>
									  <option value="MEX">Mexico</option>
									  <option value="FSM">Micronesia, Federated States Of </option>
									  <option value="MDA">Moldova, Republic of</option>
									  <option value="MCO">Monaco</option>
									  <option value="MNG">Mongolia</option>
									  <option value="MNE">Montenegro</option>
									  <option value="MSR">Montserrat</option>
									  <option value="MAR">Morocco</option>
									  <option value="MOZ">Mozambique</option>
									  <option value="MMR">Myanmar</option>
									  <option value="NAM">Namibia</option>
									  <option value="NRU">Nauru</option>
									  <option value="NPL">Nepal</option>
									  <option value="NLD">Netherlands</option>
									  <option value="ANT">Netherlands Antilles</option>
									  <option value="NTZ">Neutral Zone</option>
									  <option value="NCL">New Caledonia</option>
									  <option value="NZL">New Zealand</option>
									  <option value="NIC">Nicaragua</option>
									  <option value="NER">Niger</option>
									  <option value="NGA">Nigeria</option>
									  <option value="NIU">Niue</option>
									  <option value="NFK">Norfolk Island</option>
									  <option value="MNP">Northern Mariana Islands</option>
									  <option value="NOR">Norway</option>
									  <option value="OMN">Oman</option>
									  <option value="PAK">Pakistan</option>
									  <option value="PLW">Palau</option>
									  <option value="PSE">Palestine</option>
									  <option value="PAN">Panama</option>
									  <option value="PNG">Papua New Guinea</option>
									  <option value="PRY">Paraguay</option>
									  <option value="PER">Peru</option>
									  <option value="PHL">Philippines</option>
									  <option value="PCN">Pitcairn</option>
									  <option value="POL">Poland</option>
									  <option value="PRT">Portugal</option>
									  <option value="PRI">Puerto Rico</option>
									  <option value="QAT">Qatar</option>
									  <option value="ROM">ROMANIA PRE 1/2/2002</option>
									  <option value="REU">Reunion</option>
									  <option value="ROU">Romania</option>
									  <option value="RUS">Russian Federation</option>
									  <option value="RWA">Rwanda</option>
									  <option value="KNA">Saint Kitts and Nevis</option>
									  <option value="LCA">Saint Lucia</option>
									  <option value="VCT">Saint Vincent and the Grenadines</option>
									  <option value="WSM">Samoa</option>
									  <option value="SMR">San Marino</option>
									  <option value="STP">Sao Tome and Principe</option>
									  <option value="SAU">Saudi Arabia</option>
									  <option value="SEN">Senegal</option>
									  <option value="SRB">Serbia</option>
									  <option value="SCG">Serbia and Montenegro</option>
									  <option value="SYC">Seychelles</option>
									  <option value="SLE">Sierra Leone</option>
									  <option value="SGP">Singapore</option>
									  <option value="SXM">Sint Maarten (Dutch Part)</option>
									  <option value="SVK">Slovakia (Slovak Republic)</option>
									  <option value="SVN">Slovenia</option>
									  <option value="SLB">Solomon Islands</option>
									  <option value="SOM">Somalia</option>
									  <option value="ZAF">South Africa</option>
									  <option value="SGS">South Georgia and South Sandwich Islands</option>
									  <option value="KOR">South Korea</option>
									  <option value="SSD">South Sudan</option>
									  <option value="ESP">Spain</option>
									  <option value="LKA">Sri Lanka</option>
									  <option value="SHN">St. Helena</option>
									  <option value="SPM">St. Pierre and Miquelon</option>
									  <option value="SDN">Sudan</option>
									  <option value="SUR">Suriname</option>
									  <option value="SJM">Svalbard and Jan Mayen Islands</option>
									  <option value="SWZ">Swaziland</option>
									  <option value="SWE">Sweden</option>
									  <option value="CHE">Switzerland</option>
									  <option value="SYR">Syrian Arab Republic</option>
									  <option value="TWN">Taiwan</option>
									  <option value="TJK">Tajikistan</option>
									  <option value="TZA">Tanzania, United Republic of</option>
									  <option value="THA">Thailand</option>
									  <option value="TLS">Timor-Leste, Democratic Republic of</option>
									  <option value="TGO">Togo</option>
									  <option value="TKL">Tokelau</option>
									  <option value="TON">Tonga</option>
									  <option value="TTO">Trinidad and Tobago</option>
									  <option value="TUN">Tunisia</option>
									  <option value="TUR">Turkey</option>
									  <option value="TKM">Turkmenistan</option>
									  <option value="TCA">Turks and Caicos Islands</option>
									  <option value="TUV">Tuvalu</option>
									  <option value="UGA">Uganda</option>
									  <option value="UKR">Ukraine</option>
									  <option value="ARE">United Arab Emirates</option>
									  <option value="GBR">United Kingdom</option>
									  <option value="UMI">United States Minor Outlying Islands</option>
									  <option value="USA">United States of America</option>
									  <option value="URY">Uruguay</option>
									  <option value="UZB">Uzbekistan</option>
									  <option value="VUT">Vanuatu</option>
									  <option value="VAT">Vatican City State (Holy See)</option>
									  <option value="VEN">Venezuela</option>
									  <option value="VNM">Vietnam</option>
									  <option value="VGB">Virgin Islands (British)</option>
									  <option value="VIR">Virgin Islands (U.S.)</option>
									  <option value="WLF">Wallis and Futuna Islands</option>
									  <option value="ESH">Western Sahara</option>
									  <option value="YEM">Yemen</option>
									  <option value="YUG">Yugoslavia</option>
									  <option value="ZAR">Zaire</option>
									  <option value="ZMB">Zambia</option>
									  <option value="ZWE">Zimbabwe</option>
									</select>
								  </div>
								</div>
							  </div>
							  <div id="niddiv" style="display:none;">
								<div class="form-group">
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> National Identity Number <span class="error-msg">*</span> </div>
								  <div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
									<input class="form-control validate[maxSize[50],custom[onlyLetterNumberSp] fm" name="nid" id="nid" style="color:black !Important" placeholder="National Identity Number" type="text">
								  </div>
								<div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="Please enter a valid
									The National Identification Number, if issued to you, is required to complete the application. If you do not have a National Identification Number, enter UNKNOWN." data-original-title="National Identity Number " id="applyea"> <img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
							</div>
							
						</div>
						
					</div>
							
					<div class="panel panel-default">
					
						<div class="panel-heading">
						
							<h4 class="panel-title"> <a data-parent="#accordion" href="#collapseOne"> <strong>Contact Details</strong>  </a> </h4>
						
						</div>
						
						<div class="form-group">
						
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Email Address <span class="error-msg">*</span> </div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								
								<input class="form-control validate[required,custom[email]] fm" name="email" id="email" style="color:black !Important" placeholder="Email Address" type="text">
							
							</div>
							
							<div class="col-sm-1 col-md-1 col-lg-1 hidden-xs" id="helppic"> <a rel="popover" data-content="Please enter a valid email address. It will be used to contact you about your application." data-original-title="Email address" id="applyea"> <img src="<?= __BASE_URL; ?>/assets/images/question.png" alt="" class="img-responsiv"></a> </div>
						
						</div>
						
						<div class="form-group">
						
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Alternate Email(optional) </div>
								
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								
								<input class="form-control validate[custom[email]] fm" id="altemail" name="altemail" rel="txtTooltip" title="Enter&nbsp;your&nbsp;valid&nbsp;email&nbsp;address" data-toggle="tooltip" data-placement="right" placeholder="Alternate Email(optional)" type="text">
							
							</div>
							
						</div>
						
						<div class="form-group">
						
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> Residential Address <span class="error-msg">*</span> </div>
								
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								
								<select id="contactcountry" name="contactcountry" style="color:black !Important" class="form-control validate[required]" title="Select your country">
									<option value="" selected="selected">Select Country</option>
									<option value="Afghanistan">Afghanistan</option>
									<option value="Albania">Albania</option>
									<option value="Algeria">Algeria</option>
									<option value="American Samoa">American Samoa</option>
									<option value="Andorra">Andorra</option>
									<option value="Angola">Angola</option>
									<option value="Anguilla">Anguilla</option>
									<option value="Antarctica">Antarctica</option>
									<option value="Antigua and Barbuda">Antigua and Barbuda</option>
									<option value="Argentina">Argentina</option>
									<option value="Armenia">Armenia</option>
									<option value="Aruba">Aruba</option>
									<option value="Austria">Austria</option>
									<option value="Azerbaijan">Azerbaijan</option>
									<option value="Bahamas">Bahamas</option>
									<option value="Bahrain">Bahrain</option>
									<option value="Bangladesh">Bangladesh</option>
									<option value="Barbados">Barbados</option>
									<option value="Belarus">Belarus</option>
									<option value="Belgium">Belgium</option>
									<option value="Belize">Belize</option>
									<option value="Benin">Benin</option>
									<option value="Bermuda">Bermuda</option>
									<option value="Bhutan">Bhutan</option>
									<option value="Bolivia">Bolivia</option>
									<option value="Bonaire, Saint Eustatius and Saba">Bonaire, Saint Eustatius and Saba</option>
									<option value="Bosnia and Herzegovina">Bosnia and Herzegovina</option>
									<option value="Botswana">Botswana</option>
									<option value="Bouvet Island">Bouvet Island</option>
									<option value="Brazil">Brazil</option>
									<option value="British Indian Ocean Territory">British Indian Ocean Territory</option>
									<option value="Brunei">Brunei</option>
									<option value="Bulgaria">Bulgaria</option>
									<option value="Burkina Faso">Burkina Faso</option>
									<option value="Burma">Burma</option>
									<option value="Burundi">Burundi</option>
									<option value="Byelorussian-Soviet Socialist Republic">Byelorussian-Soviet Socialist Republic</option>
									<option value="Cambodia">Cambodia</option>
									<option value="Cameroon">Cameroon</option>
									<option value="Canada">Canada</option>
									<option value="Cape Verde">Cape Verde</option>
									<option value="Cayman Islands">Cayman Islands</option>
									<option value="Central African Republic">Central African Republic</option>
									<option value="Chad">Chad</option>
									<option value="Chile">Chile</option>
									<option value="China">China</option>
									<option value="Christmas Island">Christmas Island</option>
									<option value="Cocos (Keeling) Islands">Cocos (Keeling) Islands</option>
									<option value="Colombia">Colombia</option>
									<option value="Comoros">Comoros</option>
									<option value="Congo">Congo</option>
									<option value="Congo, Democratic Republic of the">Congo, Democratic Republic of the</option>
									<option value="Cook Islands">Cook Islands</option>
									<option value="Costa Rica">Costa Rica</option>
									<option value="Cote d'Ivoire">Cote d'Ivoire</option>
									<option value="Croatia (local name: Hrvatska)">Croatia (local name: Hrvatska)</option>
									<option value="Cuba">Cuba</option>
									<option value="Curacao">Curacao</option>
									<option value="Cyprus">Cyprus</option>
									<option value="Czech Republic">Czech Republic</option>
									<option value="Czechoslovakia">Czechoslovakia</option>
									<option value="Denmark">Denmark</option>
									<option value="Djibouti">Djibouti</option>
									<option value="Dominica">Dominica</option>
									<option value="Dominican Republic">Dominican Republic</option>
									<option value="East Timor">East Timor</option>
									<option value="Ecuador">Ecuador</option>
									<option value="Egypt">Egypt</option>
									<option value="El Salvador">El Salvador</option>
									<option value="Equatorial Guinea">Equatorial Guinea</option>
									<option value="Eritrea">Eritrea</option>
									<option value="Estonia">Estonia</option>
									<option value="Ethiopia">Ethiopia</option>
									<option value="Falkland Islands (Malvinas)">Falkland Islands (Malvinas)</option>
									<option value="Faroe Islands">Faroe Islands</option>
									<option value="Fiji">Fiji</option>
									<option value="Finland">Finland</option>
									<option value="France">France</option>
									<option value="France, Metropolitan">France, Metropolitan</option>
									<option value="French Guiana">French Guiana</option>
									<option value="French Polynesia">French Polynesia</option>
									<option value="French Southern Territories">French Southern Territories</option>
									<option value="Gabon">Gabon</option>
									<option value="Gambia">Gambia</option>
									<option value="Georgia">Georgia</option>
									<option value="Germany">Germany</option>
									<option value="Ghana">Ghana</option>
									<option value="Gibraltar">Gibraltar</option>
									<option value="Greece">Greece</option>
									<option value="Greenland">Greenland</option>
									<option value="Grenada">Grenada</option>
									<option value="Guadeloupe">Guadeloupe</option>
									<option value="Guam">Guam</option>
									<option value="Guatemala">Guatemala</option>
									<option value="Guinea">Guinea</option>
									<option value="Guinea-Bissau">Guinea-Bissau</option>
									<option value="Guyana">Guyana</option>
									<option value="Haiti">Haiti</option>
									<option value="Heard and McDonald Islands">Heard and McDonald Islands</option>
									<option value="Honduras">Honduras</option>
									<option value="Hong Kong">Hong Kong</option>
									<option value="Hungary">Hungary</option>
									<option value="India">India</option>
									<option value="Indonesia">Indonesia</option>
									<option value="Iran (Islamic Republic of)">Iran (Islamic Republic of)</option>
									<option value="Iraq">Iraq</option>
									<option value="Ireland">Ireland</option>
									<option value="Israel">Israel</option>
									<option value="Italy">Italy</option>
									<option value="Jamaica">Jamaica</option>
									<option value="Japan">Japan</option>
									<option value="Jordan">Jordan</option>
									<option value="Kazakhstan">Kazakhstan</option>
									<option value="Kenya">Kenya</option>
									<option value="Kiribati">Kiribati</option>
									<option value="Korea, Democratic Peoples Republic of">Korea, Democratic Peoples Republic of</option>
									<option value="Kosovo">Kosovo</option>
									<option value="Kuwait">Kuwait</option>
									<option value="Kyrgyzstan">Kyrgyzstan</option>
									<option value="Lao People's Democratic Republic">Lao People's Democratic Republic</option>
									<option value="Latvia">Latvia</option>
									<option value="Lebanon">Lebanon</option>
									<option value="Lesotho">Lesotho</option>
									<option value="Liberia">Liberia</option>
									<option value="Libyan Arab Jamahiriya">Libyan Arab Jamahiriya</option>
									<option value="Liechtenstein">Liechtenstein</option>
									<option value="Lithuania">Lithuania</option>
									<option value="Luxembourg">Luxembourg</option>
									<option value="Macau">Macau</option>
									<option value="Macedonia, Former Yugoslav Republic of">Macedonia, Former Yugoslav Republic of</option>
									<option value="Madagascar">Madagascar</option>
									<option value="Malawi">Malawi</option>
									<option value="Malaysia">Malaysia</option>
									<option value="Maldives">Maldives</option>
									<option value="Mali">Mali</option>
									<option value="Malta">Malta</option>
									<option value="Marshall Islands">Marshall Islands</option>
									<option value="Martinique">Martinique</option>
									<option value="Mauritania">Mauritania</option>
									<option value="Mauritius">Mauritius</option>
									<option value="Mayotte">Mayotte</option>
									<option value="Mexico">Mexico</option>
									<option value="Micronesia, Federated States Of">Micronesia, Federated States Of</option>
									<option value="Moldova, Republic of">Moldova, Republic of</option>
									<option value="Monaco">Monaco</option>
									<option value="Mongolia">Mongolia</option>
									<option value="Montenegro">Montenegro</option>
									<option value="Montserrat">Montserrat</option>
									<option value="Morocco">Morocco</option>
									<option value="Mozambique">Mozambique</option>
									<option value="Myanmar">Myanmar</option>
									<option value="Namibia">Namibia</option>
									<option value="Nauru">Nauru</option>
									<option value="Nepal">Nepal</option>
									<option value="Netherlands">Netherlands</option>
									<option value="Netherlands Antilles">Netherlands Antilles</option>
									<option value="Neutral Zone">Neutral Zone</option>
									<option value="New Caledonia">New Caledonia</option>
									<option value="New Zealand">New Zealand</option>
									<option value="Nicaragua">Nicaragua</option>
									<option value="Niger">Niger</option>
									<option value="Nigeria">Nigeria</option>
									<option value="Niue">Niue</option>
									<option value="Norfolk Island">Norfolk Island</option>
									<option value="Northern Mariana Islands">Northern Mariana Islands</option>
									<option value="Norway">Norway</option>
									<option value="Oman">Oman</option>
									<option value="Pakistan">Pakistan</option>
									<option value="Palau">Palau</option>
									<option value="Palestine">Palestine</option>
									<option value="Panama">Panama</option>
									<option value="Papua New Guinea">Papua New Guinea</option>
									<option value="Paraguay">Paraguay</option>
									<option value="Peru">Peru</option>
									<option value="Philippines">Philippines</option>
									<option value="Pitcairn">Pitcairn</option>
									<option value="Poland">Poland</option>
									<option value="Portugal">Portugal</option>
									<option value="Puerto Rico">Puerto Rico</option>
									<option value="Qatar">Qatar</option>
									<option value="Reunion">Reunion</option>
									<option value="Romania">Romania</option>
									<option value="Russian Federation">Russian Federation</option>
									<option value="Rwanda">Rwanda</option>
									<option value="Saint Kitts and Nevis">Saint Kitts and Nevis</option>
									<option value="Saint Lucia">Saint Lucia</option>
									<option value="Saint Vincent and the Grenadines">Saint Vincent and the Grenadines</option>
									<option value="Samoa">Samoa</option>
									<option value="San Marino">San Marino</option>
									<option value="Sao Tome and Principe">Sao Tome and Principe</option>
									<option value="Saudi Arabia">Saudi Arabia</option>
									<option value="Senegal">Senegal</option>
									<option value="Serbia">Serbia</option>
									<option value="Serbia and Montenegro">Serbia and Montenegro</option>
									<option value="Seychelles">Seychelles</option>
									<option value="Sierra Leone">Sierra Leone</option>
									<option value="Singapore">Singapore</option>
									<option value="Sint Maarten (Dutch Part)">Sint Maarten (Dutch Part)</option>
									<option value="Slovakia (Slovak Republic)">Slovakia (Slovak Republic)</option>
									<option value="Slovenia">Slovenia</option>
									<option value="Solomon Islands">Solomon Islands</option>
									<option value="Somalia">Somalia</option>
									<option value="South Africa">South Africa</option>
									<option value="South Georgia and South Sandwich Islands">South Georgia and South Sandwich Islands</option>
									<option value="South Korea">South Korea</option>
									<option value="South Sudan">South Sudan</option>
									<option value="Spain">Spain</option>
									<option value="Sri Lanka">Sri Lanka</option>
									<option value="St. Helena">St. Helena</option>
									<option value="St. Pierre and Miquelon">St. Pierre and Miquelon</option>
									<option value="Sudan">Sudan</option>
									<option value="Suriname">Suriname</option>
									<option value="Svalbard and Jan Mayen Islands">Svalbard and Jan Mayen Islands</option>
									<option value="Swaziland">Swaziland</option>
									<option value="Sweden">Sweden</option>
									<option value="Switzerland">Switzerland</option>
									<option value="Syrian Arab Republic">Syrian Arab Republic</option>
									<option value="Taiwan">Taiwan</option>
									<option value="Tajikistan">Tajikistan</option>
									<option value="Tanzania, United Republic of">Tanzania, United Republic of</option>
									<option value="Thailand">Thailand</option>
									<option value="Timor-Leste, Democratic Republic of">Timor-Leste, Democratic Republic of</option>
									<option value="Togo">Togo</option>
									<option value="Tokelau">Tokelau</option>
									<option value="Tonga">Tonga</option>
									<option value="Trinidad and Tobago">Trinidad and Tobago</option>
									<option value="Tunisia">Tunisia</option>
									<option value="Turkey">Turkey</option>
									<option value="Turkmenistan">Turkmenistan</option>
									<option value="Turks and Caicos Islands">Turks and Caicos Islands</option>
									<option value="Tuvalu">Tuvalu</option>
									<option value="USSR">USSR</option>
									<option value="Uganda">Uganda</option>
									<option value="Ukraine">Ukraine</option>
									<option value="United Arab Emirates">United Arab Emirates</option>
									<option value="United Kingdom">United Kingdom</option>
									<option value="United States Minor Outlying Islands">United States Minor Outlying Islands</option>
									<option value="United States of America">United States of America</option>
									<option value="Uruguay">Uruguay</option>
									<option value="Uzbekistan">Uzbekistan</option>
									<option value="Vanuatu">Vanuatu</option>
									<option value="Vatican City State (Holy See)">Vatican City State (Holy See)</option>
									<option value="Venezuela">Venezuela</option>
									<option value="Vietnam">Vietnam</option>
									<option value="Virgin Islands (British)">Virgin Islands (British)</option>
									<option value="Virgin Islands (U.S.)">Virgin Islands (U.S.)</option>
									<option value="Wallis and Futuna Islands">Wallis and Futuna Islands</option>
									<option value="Wallis and Futuna Islands Western Sahara">Wallis and Futuna Islands Western Sahara</option>
									<option value="Yemen">Yemen</option>
									<option value="Yemen (Democratic Peoples Republic)">Yemen (Democratic Peoples Republic)</option>
									<option value="Yugoslavia">Yugoslavia</option>
									<option value="Zaire">Zaire</option>
									<option value="Zambia">Zambia</option>
									<option value="Zimbabwe">Zimbabwe</option>
								</select>
								
							</div>
								
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> &nbsp;&nbsp;&nbsp; </div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
							  
							  <input class="form-control validate[required,maxSize[50],custom[onlyLetterNumberSp] fm" name="street1" id="street1" style="color:black !Important" placeholder="*Home Street Address" type="text">
							
							</div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> &nbsp;&nbsp;&nbsp; </div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
							 
								<input class="form-control validate[required,maxSize[30],custom[onlyLetterNumberSp] fm" name="city" id="city" style="color:black !Important" placeholder="*City/Town  " type="text">
							
							</div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> &nbsp;&nbsp;&nbsp; </div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
							 
								<input class="form-control validate[required,maxSize[20],custom[onlyLetterNumberSp]] fm" name="district" id="district" style="color:black !Important" placeholder="*State/Province/Prefecture/District・regeion" type="text">
							
							</div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> &nbsp;&nbsp;&nbsp; </div>
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-5">
								
								<input class="form-control validate[maxSize[12],custom[onlyLetterNumberSp]] fm" name="zip" id="zip" style="color:black !Important" placeholder="*Zip/Postcode" type="text">
							
							</div>								
							
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-6"> &nbsp;&nbsp;&nbsp; </div>
								
						</div>
						
						<div class="form-group">
						
							<div class="col-xs-12 col-sm-2 col-md-2 col-lg-3"> Telephone <span class="error-msg">*</span> </div>
								
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
								 
								<select name="type_phone" id="type_phone" style="color:black !Important" class="form-control">
									
									<option value="Home">Home</option>
									
									<option value="Work">Business</option>
								
									<option value="Mobile" selected="selected">Mobile</option>
									
									<option value="Other">Other</option>
									
								</select>
								  
							</div>
								
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-2">
							
								<select name="country_code" id="country_code" style="color:black !Important" class="form-control">
								
									<option value="93">Afghanistan (+93)</option>
									<option value="355">Albania (+355)</option>
									<option value="213">Algeria (+213)</option>
									<option value="1684">American Samoa (+1684)</option>
									<option value="376">Andorra (+376)</option>
									<option value="244">Angola (+244)</option>
									<option value="1264">Anguilla (+1264)</option>
									<option value="672">Antarctica (+672)</option>
									<option value="1268">Antigua (+1268)</option>
									<option value="54">Argentina (+54)</option>
									<option value="374">Armenia (+374)</option>
									<option value="297">Aruba (+297)</option>
									<option value="247">Ascension (+247)</option>
									<option value="61">Australia (+61)</option>
									<option value="672">Australian External Territories (+672)</option>
									<option value="43">Austria (+43)</option>
									<option value="994">Azerbaijan (+994)</option>
									<option value="1242">Bahamas (+1242)</option>
									<option value="973" selected="selected">Bahrain (+973)</option>
									<option value="880">Bangladesh (+880)</option>
									<option value="1246">Barbados (+1246)</option>
									<option value="1268">Barbuda (+1268)</option>
									<option value="375">Belarus (+375)</option>
									<option value="32">Belgium (+32)</option>
									<option value="501">Belize (+501)</option>
									<option value="229">Benin (+229)</option>
									<option value="1441">Bermuda (+1441)</option>
									<option value="975">Bhutan (+975)</option>
									<option value="591">Bolivia (+591)</option>
									<option value="387">Bosnia &amp; Herzegovina (+387)</option>
									<option value="267">Botswana (+267)</option>
									<option value="55">Brazil (+55)</option>
									<option value="673">Brunei Darussalam (+673)</option>
									<option value="359">Bulgaria (+359)</option>
									<option value="226">Burkina Faso (+226)</option>
									<option value="257">Burundi (+257)</option>
									<option value="855">Cambodia (+855)</option>
									<option value="237">Cameroon (+237)</option>
									<option value="1">Canada (+1)</option>
									<option value="238">Cape Verde Islands (+238)</option>
									<option value="1345">Cayman Islands (+1345)</option>
									<option value="236">Central African Republic (+236)</option>
									<option value="235">Chad (+235)</option>
									<option value="64">Chatham Island (+64)</option>
									<option value="56">Chile (+56)</option>
									<option value="86">China (PRC) (+86)</option>
									<option value="53">Christmas Island (+53)</option>
									<option value="57">Colombia (+57)</option>
									<option value="269">Comoros (+269)</option>
									<option value="242">Congo (+242)</option>
									<option value="243">Congo, Dem. Rep. of (former Zaire) (+243)</option>
									<option value="682">Cook Islands (+682)</option>
									<option value="506">Costa Rica (+506)</option>
									<option value="225">Cote d'Ivoire (+225)</option>
									<option value="385">Croatia (+385)</option>
									<option value="53">Cuba (+53)</option>
									<option value="599">Curacao (+599)</option>
									<option value="357">Cyprus (+357)</option>
									<option value="420">Czech Republic (+420)</option>
									<option value="45">Denmark (+45)</option>
									<option value="246">Diego Garcia (+246)</option>
									<option value="253">Djibouti (+253)</option>
									<option value="1767">Dominica (+1767)</option>
									<option value="1809">Dominican Republic (+1809)</option>
									<option value="1829">Dominican Republic (+1829)</option>
									<option value="670">East Timor (+670)</option>
									<option value="56">Easter Island (+56)</option>
									<option value="593">Ecuador (+593)</option>
									<option value="20">Egypt (+20)</option>
									<option value="503">El Salvador (+503)</option>
									<option value="240">Equatorial Guinea (+240)</option>
									<option value="291">Eritrea (+291)</option>
									<option value="372">Estonia (+372)</option>
									<option value="251">Ethiopia (+251)</option>
									<option value="500">Falkland Islands (Malvinas) (+500)</option>
									<option value="298">Faroe Islands (+298)</option>
									<option value="679">Fiji Islands (+679)</option>
									<option value="358">Finland (+358)</option>
									<option value="33">France (+33)</option>
									<option value="596">French Antilles (+596)</option>
									<option value="594">French Guiana (+594)</option>
									<option value="689">French Polynesia (+689)</option>
									<option value="241">Gabonese Republic (+241)</option>
									<option value="220">Gambia (+220)</option>
									<option value="995">Georgia (+995)</option>
									<option value="49">Germany (+49)</option>
									<option value="233">Ghana (+233)</option>
									<option value="350">Gibraltar (+350)</option>
									<option value="30">Greece (+30)</option>
									<option value="299">Greenland (+299)</option>
									<option value="1473">Grenada (+1473)</option>
									<option value="590">Guadeloupe (+590)</option>
									<option value="1671">Guam (+1671)</option>
									<option value="502">Guatemala (+502)</option>
									<option value="224">Guinea (+224)</option>
									<option value="245">Guinea-Bissau (+245)</option>
									<option value="592">Guyana (+592)</option>
									<option value="509">Haiti (+509)</option>
									<option value="504">Honduras (+504)</option>
									<option value="852">Hong Kong (+852)</option>
									<option value="36">Hungary (+36)</option>
									<option value="354">Iceland (+354)</option>
									<option value="91">India (+91)</option>
									<option value="62">Indonesia (+62)</option>
									<option value="98">Iran (+98)</option>
									<option value="353">Ireland (+353)</option>
									<option value="964">Iraq (+964)</option>
									<option value="972">Israel (+972)</option>
									<option value="39">Italy (+39)</option>
									<option value="1876">Jamaica (+1876)</option>
									<option value="81">Japan (+81)</option>
									<option value="962">Jordan (+962)</option>
									<option value="7">Kazakhstan (+7)</option>
									<option value="254">Kenya (+254)</option>
									<option value="686">Kiribati (+686)</option>
									<option value="850">Korea (North) (+850)</option>
									<option value="82">Korea (South) (+82)</option>
									<option value="965">Kuwait (+965)</option>
									<option value="996">Kyrgyz Republic (+996)</option>
									<option value="856">Laos (+856)</option>
									<option value="371">Latvia (+371)</option>
									<option value="961">Lebanon (+961)</option>
									<option value="266">Lesotho (+266)</option>
									<option value="231">Liberia (+231)</option>
									<option value="218">Libya (+218)</option>
									<option value="423">Liechtenstein (+423)</option>
									<option value="370">Lithuania (+370)</option>
									<option value="352">Luxembourg (+352)</option>
									<option value="853">Macao (+853)</option>
									<option value="389">Macedonia (Former Yugoslav Rep. of) (+389)</option>
									<option value="261">Madagascar (+261)</option>
									<option value="265">Malawi (+265)</option>
									<option value="60">Malaysia (+60)</option>
									<option value="960">Maldives (+960)</option>
									<option value="223">Mali Republic (+223)</option>
									<option value="356">Malta (+356)</option>
									<option value="692">Marshall Islands (+692)</option>
									<option value="596">Martinique (+596)</option>
									<option value="222">Mauritania (+222)</option>
									<option value="230">Mauritius (+230)</option>
									<option value="269">Mayotte Island (+269)</option>
									<option value="52">Mexico (+52)</option>
									<option value="691">Micronesia (Federal States of) (+691)</option>
									<option value="1808">Midway Island (+1808)</option>
									<option value="373">Moldova (+373)</option>
									<option value="377">Monaco (+377)</option>
									<option value="976">Mongolia (+976)</option>
									<option value="382">Montenegro (+382)</option>
									<option value="1664">Montserrat (+1664)</option>
									<option value="212">Morocco (+212)</option>
									<option value="258">Mozambique (+258)</option>
									<option value="95">Myanmar (+95)</option>
									<option value="264">Namibia (+264)</option>
									<option value="674">Nauru (+674)</option>
									<option value="977">Nepal (+977)</option>
									<option value="31">Netherlands (+31)</option>
									<option value="599">Netherlands Antilles (+599)</option>
									<option value="1869">Nevis (+1869)</option>
									<option value="687">New Caledonia (+687)</option>
									<option value="64">New Zealand (+64)</option>
									<option value="505">Nicaragua (+505)</option>
									<option value="227">Niger (+227)</option>
									<option value="234">Nigeria (+234)</option>
									<option value="683">Niue (+683)</option>
									<option value="672">Norfolk Island (+672)</option>
									<option value="670">Northern Marianas Islands (+670)</option>
									<option value="47">Norway (+47)</option>
									<option value="968">Oman (+968)</option>
									<option value="92">Pakistan (+92)</option>
									<option value="680">Palau (+680)</option>
									<option value="680">Palestinian Settlements (+970)</option>
									<option value="507">Panama (+507)</option>
									<option value="675">Papua New Guinea (+675)</option>
									<option value="595">Paraguay (+595)</option>
									<option value="51">Peru (+51)</option>
									<option value="63">Philippines (+63)</option>
									<option value="48">Poland (+48)</option>
									<option value="351">Portugal (+351)</option>
									<option value="1787">Puerto Rico (+1787)</option>
									<option value="1939">Puerto Rico (+1939)</option>
									<option value="974">Qatar (+974)</option>
									<option value="262">Reunion (+262)</option>
									<option value="40">Romania (+40)</option>
									<option value="7">Russia (+7)</option>
									<option value="250">Rwandese Republic (+250)</option>
									<option value="685">Samoa (+685)</option>
									<option value="378">San Marino (+378)</option>
									<option value="239">Sao Tome &amp; Principe (+239)</option>
									<option value="966">Saudi Arabia (+966)</option>
									<option value="221">Senegal (+221)</option>
									<option value="381">Serbia (+381)</option>
									<option value="248">Seychelles Republic (+248)</option>
									<option value="232">Sierra Leone (+232)</option>
									<option value="65">Singapore (+65)</option>
									<option value="421">Slovak Republic (+421)</option>
									<option value="386">Slovenia (+386)</option>
									<option value="677">Solomon Islands (+677)</option>
									<option value="252">Somali Democratic Republic (+252)</option>
									<option value="27">South Africa (+27)</option>
									<option value="34">Spain (+34)</option>
									<option value="94">Sri Lanka (+94)</option>
									<option value="290">St. Helena (+290)</option>
									<option value="1869">St. Kitts (+1869)</option>
									<option value="1758">St. Lucia (+1758)</option>
									<option value="508">St. Pierre &amp; Miquelon (+508)</option>
									<option value="784">St. Vincent &amp; Grenadines (+784)</option>
									<option value="249">Sudan (+249)</option>
									<option value="597">Suriname (+597)</option>
									<option value="268">Swaziland (+268)</option>
									<option value="46">Sweden (+46)</option>
									<option value="41">Switzerland (+41)</option>
									<option value="963">Syria (+963)</option>
									<option value="886">Taiwan (+886)</option>
									<option value="992">Tajikistan (+992)</option>
									<option value="255">Tanzania (+255)</option>
									<option value="66">Thailand (+66)</option>
									<option value="228">Togolese Republic (+228)</option>
									<option value="690">Tokelau (+690)</option>
									<option value="676">Tonga Islands (+676)</option>
									<option value="1868">Trinidad &amp; Tobago (+1868)</option>
									<option value="216">Tunisia (+216)</option>
									<option value="90">Turkey (+90)</option>
									<option value="993">Turkmenistan (+993)</option>
									<option value="1649">Turks &amp; Caicos Islands (+1649)</option>
									<option value="688">Tuvalu (+688)</option>
									<option value="256">Uganda (+256)</option>
									<option value="380">Ukraine (+380)</option>
									<option value="971">United Arab Emirates (+971)</option>
									<option value="44">United Kingdom (+44)</option>
									<option value="1">United States of America (+1)</option>
									<option value="598">Uruguay (+598)</option>
									<option value="998">Uzbekistan (+998)</option>
									<option value="678">Vanuatu (+678)</option>
									<option value="379">Vatican City (+379)</option>
									<option value="58">Venezuela (+58)</option>
									<option value="84">Vietnam (+84)</option>
									<option value="1284">Virgin Islands - British (+1284)</option>
									<option value="1340">Virgin Islands - US (+1340)</option>
									<option value="808">Wake Island (+808)</option>
									<option value="681">Wallis &amp; Futuna (+681)</option>
									<option value="969">Yemen (North) (+969)</option>
									<option value="967">Yemen (South) (+967)</option>
									<option value="381">Yugoslavia (+381)</option>
									<option value="260">Zambia (+260)</option>
									<option value="255">Zanzibar (+255)</option>
									<option value="263">Zimbabwe (+263)</option>
									
								</select>
								  <!--<input type="text" class="form-control" name="country_code" id="country_code" style="color:black !Important" onkeydown="return isNumber(event);" onkeypress="return isNumber(event);" value="" placeholder="Country Code">-->
							</div>
							
							<div class="col-xs-12 col-sm-3 col-md-3 col-lg-4">
							  
							  <input class="form-control validate[required,maxSize[22],custom[onlyLetterNumberSp] fm" name="telephone_number" id="telephone_number" style="color:black !Important" placeholder="Telephone Number" type="text">
							
							</div>
								
						</div>
							  
							  <!--<div class="form-group">
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3"> Name of Credit card's owner <span class="error-msg">*</span> </div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
								  <button type="button" onClick="CreditLast.value=jQuery('#myform [name=lastname1]').val();CreditFirst.value=jQuery('#myform [name=firstname]').val();" class="btn btn-primary">same as the applicant</button>
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
								  <input class="form-control validate[required] fm" name="CreditLast" id="CreditLast" style="color:black !Important" placeholder="Surname" type="text">
								</div>
								<div class="col-xs-12 col-sm-4 col-md-4 col-lg-3">
								  <input class="form-control validate[required] fm" name="CreditFirst" id="CreditFirst" style="color:black !Important" placeholder="Given name" type="text">
								</div>
							  </div>-->
					</div>
					
					<div class="clearfix"></div>
					
					<div class="panel panel-default"> </div>
					
				</div>
				
				<div class="clearfix"></div>
						
			</div>
			<!-- Consent -->
			<div class="panel panel-default">
			
				<div class="panel-heading">

					<h4 class="panel-title"> <strong>Consent and declaration</strong></h4>

				</div>
						  
					<div class="form-group">
						  
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							
							<div class="col-sm-12">
							  
								<textarea rows="5" class="form-control" id="InputTextarea" readonly="readonly">Show
 allHide all
Using this website
By using this website you accept the following conditions:

The Commonwealth of Australia accepts no responsibility for the 
completeness or accuracy of any of the information contained on or 
accessed through this site and makes no representations about its 
suitability for any particular purpose. Users should make their own 
judgements about those matters. To the extent permitted by law, the 
Commonwealth excludes all liability for loss or damage arising from the 
use of, or reliance on, the information contained on or accessed through
 this website whether or not caused by any negligence on the part of the
 Commonwealth or its agents
Information or materials which are offensive, pornographic, unsuitable 
for minors' access or otherwise of a criminal or violent nature may be 
accessible through this site either as a result of hacking or material 
placed on linked websites. The department makes no representations as to
 the suitability of the information accessible for viewing by minors or 
any other person.
You assume all risks associated with use of the website, including:
the risk of your computer, software or data being damaged by any virus 
which might be transmitted or activated via the website or your access 
to it; and
the risk that the content of this website and linked websites does not 
comply with the laws of any country outside Australia.
Your use of this website will be logged for the purpose of security and 
usage monitoring. Unauthorised use of this website could result in 
criminal prosecution.
This website was developed and is operated by SITA (3rd party provider) 
on behalf of the Department of Immigration and Border Protection (DIBP) 
of Australia. Both DIBP and SITA takes seriously its obligation to 
protect your privacy.
Privacy Act
The Privacy Act 1988 is the key law designed to safeguard personal 
information collected by Government agencies. Federal Government 
agencies (including this Department) must comply with the Information 
Privacy Principles in section 14 of the Privacy Act 1988 when 
collecting, using and disclosing your personal information.

About the information you give on this form
The Department is authorised to collect information provided on this 
form under the Migration Act 1958.

The information provided will be used for:

assessing your eligibility to be granted the visa for which you have 
applied; and
other purposes relating to the administration of the Migration Act, for 
example, to assist migrants with settling in Australia, to monitor the 
conduct of migration agents, or for ensuring compliance with the 
Migration Act.
The Department has authority under the Migration Act 1958 to collect a 
range of personal identifiers from non-citizens, including visa 
applicants, in certain circumstances. More detailed information is given
 on the Information form 1243i Your Personal Identifying Information 
(PDF).

The department occasionally undertakes research to improve our services 
and to provide input into Australian government initiatives. Your 
contact information collected in this form may be used to contact you 
for research purposes. This contact may be made by departmental staff or
 research organisations on our behalf. Your participation in client 
research is entirely voluntary and your decision to be involved in 
client research or not will have no impact on your application

Disclosure to other agencies
The information you provide may be disclosed to:

agencies who are authorised to receive information relating to:
adoption;
border control;
business skills;
citizenship;
education;
fair trading;
health assessment;
health insurance;
health services;
industrial relations;
law enforcement;
payment of pensions and benefits;
public safety;
review of decisions;
regulation of migration agents;
superannuation;
taxation;
training; and
workplace safety.
any agency of the Commonwealth of Australia, or of a State or Territory,
 that is responsible for, or otherwise concerned with, the regulation of
 education providers;
the relevant registered education provider(s) who may be told whether or
 not your visa has been granted.
The information you provide, including the results of any tests for 
Human Immunodeficiency Virus (HIV), will be used to assess your health 
for the purpose of determining your eligibility for the grant of an 
Australian visa. A positive HIV or other test results will not 
necessarily lead to the visa for which you have applied being refused, 
but it may mean that your result(s) will be disclosed to other relevant 
Commonwealth and State/Territory Health agencies.
Information form 1442i Privacy notice (228KB PDF) gives details of 
agencies to which your personal information might may also be disclosed,
 and the purposes for which that personal information will be disclosed.

Freedom of Information Act
The Freedom of Information Act 1982 also relates to your personal 
information.
Under this Act you can apply for access to documents containing your 
personal information.
You or someone authorised to access information on your behalf can apply
 to do this at any office of this Department in Australia and pay the 
relevant fee. Regardless of whether you are overseas or in Australia, 
you must also provide the Australian Government office overseas with an 
address in Australia to which copies of personal records can be sent.
More information on how to make a request under the Freedom of 
Information Act is given on Form 424a Request for access to documents or
 information (PDF).
        </textarea>
								
							</div>
							
							<div class="col-sm-12">
								<hr>
								I declare that the information I have given in this application is
								truthful, complete and correct. I understand all the policy and 
								protocols of Australia ETA Application Services and will not form any 
								objection against the service.
								I understand that misrepresentation is an offence under section 
								127 of the Immigration and Refugee Protection Act and may result in a 
								finding of inadmissibility to Australia or removal from Australia.
								I agree that by typing my name and clicking sign, I am 
								electronically signing my application. </div>
							</div>
							
					</div>
					
					<hr>
					
					<div class="form-group">
					
						<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4"></div>
						
						<div class="col-xs-12 col-sm-3 col-md-3 col-lg-3">
						
							<h2>Electronic Signature</h2>
							
							<br>
							
						</div>
						
						<div class="col-xs-12 col-sm-5 col-md-5 col-lg-5"> <strong><span class="text-danger">If you wish to continue applying for ETA and agree all of the declarations above, put your surname in the form.</span></strong><br>
							Please check if you have put the correct surname. The surname must be same as the one in the application form. By putting down the electronic signature, you have agreed to our terms of service. <br>
							
							<input rows="5" class="form-control validate[required,maxSize[24],custom[onlyLetterSp],equals[lastname1]]" name="sign" id="sign" style="color:black !Important" ata-errormessage-value-missing="Please enter Family Name " placeholder="Family Name" type="text">
						
						</div>						
						
					</div>
            
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						
						<input style="margin:26px 0;padding: 12px 31px;background: #009dcd;font-weight: bold;color: #fff;font-size: 17px;" class="custom_btn pull-right" name="continue" id="continue" value="Submit" type="submit">
					
					</div>
						
			</div>
			
		</form>
					</div>
				  </div>
				</div>
			  </section>
				</div>
				<div class="span4">
				  <h3>GETTING STARTED</h3>
				  <ul>
					<li class="clearfix"><span>&#8226; Applications are processed within 15 minutes after submission</span></li>
					<li class="clearfix"><span>&#8226; Each application takes approximately 10 minutes to complete</span></li>
					<li class="clearfix"><span>&#8226; Support team is available 24/7 by email and telephone</span></li>
				  </ul>
				  <h3>FREQUENTLY ASKED QUESTIONS</h3>
				  <ul>
					<li class="clearfix"><span>&#8226; <b>Can I submit multiple applications?</b> Multiple applications can be submitted using a single payment</span></li>
					<li class="clearfix"><span>&#8226; <b>What happens after I submit my application?</b> Applicant data will be verified to ensure accuracy upon submission</span></li>
					<li class="clearfix"><span>&#8226; <b>What happens if my application is denied?</b> Processing fees will be refunded in the event of an eTA refusal</span></li>
					<li class="clearfix"><span>&#8226; <b>What happens after my application is approved?</b> A unique eTA authorization number will be sent directly via e-mail as proof of a successful application</span></li>
				  </ul>
				  <h3>CREDIT/DEBIT CARD PAYMENTS</h3>
				  <ul>
					<li class="image"><img src="<?= __BASE_URL; ?>/assets/images/payment/logos.png"/></li>
					<li> Debit and credit cards are accepted forms of payment. Please note that you will need to make an application for each member of your family/travel group. </li>
				  </ul>
				  <h3>INSTANT ETA PROCESSING</h3>
				  <ul>
					<li> eta-australia.com.au has implemented a Instant Payment Notification (IPN) system, which allows your eTA application to be processed immediately. The cost of each individual application is $100. Your eTA authorization is delivered electronically direct to your e-mail. </li>
				  </ul>
				  <h3>SECURE SSL TRANSACTION</h3>
				  <ul>
					<li> to  eta-australia.com.au operates within full observance of the international regulations of the Standard Payment Card Industry – Data Security Standard (PCI-DSS) laid down by the main credit companies for protecting their clients' personal information. </li>
				  </ul>
				  <h3>HELP AND SUPPORT</h3>
				  <ul>
					<li> Our support team is available 24/7 to answer any questions about your application. If you are unsure about your visa situation or eligibility then please take the assessment questionnaire on the <a href="../index.html">homepage</a>. </li>
				  </ul>
				</div>
			  </div>
			  
			<div class="modal hide fade" id="cqTCFull">
		  
				<div class="modal-header">
				
					<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
					
					<h3> General Conditions for Use of the Service & Waiver of Rights </h3>
					
				</div>
			
				<div class="modal-body">
					
					<p>Please find below the terms and conditions set out by the company official-canada-eta.com, which are governed by the Laws of the United Kingdom. </p>
					
					<p>The company will process an application to the client's requirements and requests, and will not be responsible for any incorrect information provided. The company will make all efforts to obtain the correct visa in the specified period of time. However the company will not be responsible for the following occurring at the embassy; Refusal to issue the visa, Refusal to accept the application, Issuance of incorrect visa, Delay in processing the visa.</p>
					
					<p>Should the company have caused any of the above through error or omission, then the company's liability is strictly limited to the cost of a replacement visa or refund of all fees paid and the company cannot accept any responsibility for consequential loss, such as, but not limited to: lost profits/income, lost airfares.</p>
					
					<h2><strong>Cancellation rights</strong></h2>
					
					<p>Once you have submitted your application with us online or over the phone, it is assumed that you have agreed that we may instantly begin the processing of your application and provide our service, and by agreeing to these terms and conditions, you are therefore providing your express consent for this to happen. As a result you will not have any right to cancel under The Consumer Contracts (Information, Cancellation and Additional Charges) Regulations 2013. This is because, under Regulation 36(1)(a) and 37(1)(a), you lose your right to cancel if you agree that we can start providing the services within the cancellation period.</p>
					
					<h2><strong>Ownership</strong></h2>
					
					<p>This website official-canada-eta.com is owned and operated by Sat Pro Ltd. If you do not agree to be bound by and comply with these terms of use, please do not access or use this site.</p>
					
					<h2><strong>Limits on Use</strong></h2>
					
					<p>You may not use this site or the services offered on or through it for personal gain and you may not sell or provide to any third party, or otherwise profit from, any services or information (nor any modification, adaptation or analysis of them) available on or through this site.</p>
					
					<h2><strong>Security</strong></h2>
					
					<p>We reserve the right from time to time to: (a) alter and/or introduce new and/or additional security measures without notice; (b) temporarily withdraw and/or limit the availability of this site to any individual(s); and (c) do anything else that we believe necessary to preserve the security and integrity of this site and the information held in this site's databases.</p>
					
					<h2><strong>Accuracy and Site Content</strong></h2>
					
					<p>We use reasonable skill and care in compiling the information accessible on and through this site. However, certain information may have been compiled and/or provided to us by a third party who is not a member of our network. official-canada-eta.com does not accept responsibility for the accuracy of any information which is obtained from any such third party. Furthermore, errors and omissions in the information accessible on and through this site may occur because of a number of factors which are inherent in any internet-related system and which are not within our reasonable control. For example, information may be affected by machine, software or operator error, or malfunctions in connection with data transmission. In view of this, the information is provided "as is" and you should always attempt to verify the accuracy of any information obtained from this site before relying upon it.<br />
					This is a dynamic site and as a result, the content and look and feel may change from time to time without prior notice.</p>
					
					<h2><strong>Limited Licence and Ownership</strong></h2>
					
					<p>You are granted a limited licence to download the materials contained on this site to a personal computer, and to print a hard copy of such materials, solely for your personal, non-commercial use, provided that all copyright, trade mark and other proprietary notices are left intact.<br />
					Save as expressly and specifically permitted in these terms of use, all translation, re-transmission, distribution or other use of the materials contained on this site and in its databases on any other internet site or other media is strictly prohibited. You are also prohibited from: (a) framing this site or any part of it on any other site; or (b) mirroring this site on another server; or (c) using automated screen capture or screen scraping technologies to obtain information of any sort from this site.<br />
					The grant of this limited licence is conditional upon your agreement to and compliance with all of these terms of use.<br />
					Software (if any) made available to download from this site is either owned by or licensed to us. You may only use such software in accordance with the end user licence accompanying that software or, where there is no such licence; you are granted a non-exclusive, non-transferable licence to use the said software for using this site in accordance with these terms of use.<br />
					All copyright and all other intellectual property and proprietary rights of any sort relating in any way to this site (including, but not limited to, those relating to its content, branding and the services, software and any other materials made available on and through it) which are not granted to you in accordance with these terms of use are hereby expressly reserved to official-canada-eta.com or, in the case of any other brands, names and logos featured on this site, their respective owners.</p>
					
					<h2><strong>Your Consent</strong></h2>
					
					<p>By using this site you consent to official-canada-eta.com, processing and transferring (both inside and outside the EEA) the User Data as necessary for us to provide you with this service and enable you to use the site and receive your eTA.</p>
					
					<h1><strong>Delivery Policy</strong></h1>
					
					<p>Our Delivery Policy is set out to explain to you, the customer, how we provide the Processing Service offered on our website. </p>
					
					<p>1- official-canada-eta.com is a private, third party eTA applications data processing agency and it is not affiliated in any way with the Government of Canada. <br />
					
					<br />
					2- Services provided:</p>
					
					<ul>
					
						<li><strong>eTA Visa Waiver application</strong> data entry and processing.</li>
						
						<li><strong>Same day</strong> processing and <strong>status update</strong>.</li>
						
						<li><strong>Travel authorization confirmation</strong> delivery by email</li>
						
						<li>Application information updates and status check for<strong> 2 years from eTA authorisation being received</strong>.</li>
						
						<li><strong>24/7 eTA email and telephone customer support.</strong></li>
						
					</ul>
					
					<p>3- official-canada-eta.com does not guarantee that applications will be accepted, we only process the customer's application data and integrate into the Canada eTA system.</p>
					
					<p>4- The customer is responsible for providing valid and accurate application information, official-canada-eta.com is not liable for any rejected applications due to non valid or incorrect information submitted by the customer.</p>
					
					<p>5- Once the application data is submitted, official-canada-eta.com will have 24 hours to process the application and provide a status update to the customer. No service claims are accepted for non delivered travel authorization confirmation documents before 24 hours after information is submitted by the customer. Customer has the right to claim if they have not received a confirmation document or status update after 24 hours.</p>
					
					<p>6-  Applications can be putted on hold by the Canada eTA for multiple reason, in these cases a customer service representative will contact the customer to coordinate a possible solution. Same case if application is rejected.</p>
					
					<p>7- By purchasing our services the customer agree to pay a service fee for data entry and assistance service fee which includes a $14 fee paid by official-canada-eta.com on his/her behalf to the Canadian Government for the eTA system fee.</p>
					
					<p>8- Customer also provide explicit authorization to let official-canada-eta.com manage his/her application data and apply on his/her behalf to the Canada eTA system. According to our privacy policy and the Canadian eTA privacy statement at: http://www.cic.gc.ca/english/visit/eta.asp</p>
					
					<p>9- Customer certifies he/her is entitled and legally authorized to pay with the submitted credit or debit card. official-canada-eta.com will charge the submitted credit card one total fee and shall be not liable for any illegal use of credit information submitted by the customer.</p>
					
					<p>Once our same-day Processing Service is completed, which includes weekends and holidays, we will deliver the product to you by email only.</p>
					
					<p>We strongly recommend you to add our email address orders@official-canada-eta.com to your white list to ensure that our email is not rejected due to an overfilled inbox.</p>
					
					<p>PDF files can be read by utilizing <a href="http://get.adobe.com/reader/" target="_blank">Adobe reader</a> which is free to download</p>
					
					<p>If you have any questions regarding our delivery policy, please contact us by email (support@official-canada-eta.com). We will respond within 24 hours.</p>
					
					<p>Our Processing Service is considered delivered to you when submitted via email. We recommend that you take a printed copy of your travel authorization as some airlines may want to see a copy of it at check-in.</p>
					
					<h1><strong>Privacy Policy</strong></h1>
					
					<p><strong>This privacy policy discloses the privacy practices for official-canada-eta.com </strong></p>
					
					<p>This privacy notice applies solely to information collected by this web site. It will notify you of the following: What personally identifiable information is collected from you through the web site, how it is used and with whom it may be shared. What choices are available to you regarding the use of your data. The security procedures in place to protect the misuse of your information. How you can correct any inaccuracies in the information. </p>
					
					<h2><strong>Information Collection, Use, and Sharing </strong></h2>
					
					<p>We are the sole owners of the information collected on this site. We only have access to/collect information that you voluntarily give us via email or other direct contact from you. We will not sell or rent this information to anyone. We will use your information to respond to you, regarding the reason you contacted us. We will not share your information with any third party outside of our organization, other than as necessary to fulfill your request, e.g. to ship an order. Unless you ask us not to, we may contact you via email in the future to tell you about specials, new products or services, or changes to this privacy policy. </p>
					
					<h2><strong>Your Access to and Control Over Information </strong></h2>
					
					<p>You may opt out of any future contacts from us at any time. You can do the following at any time by contacting us via the email address given on our website: See what data we have about you, if any. Change/correct any data we have about you. Have us delete any data we have about you. Express any concern you have about our use of your data. </p>
					
					<h2><strong>Security </strong></h2>
					
					<p>We take precautions to protect your information. When you submit sensitive information via the website, your information is protected both online and offline. Wherever we collect sensitive information (such as credit card data), that information is encrypted and transmitted to us in a secure way. You can verify this by looking for a closed lock icon at the bottom of your web browser, or looking for “https” at the beginning of the address of the web page. While we use encryption to protect sensitive information transmitted online, we also protect your information offline. Only employees who need the information to perform a specific job (for example, billing or customer service) are granted access to personally identifiable information. The computers/servers in which we store personally identifiable information are kept in a secure environment. </p>
					
					<h2><strong>Registration </strong></h2>
					
					<p>In order to use this website, a user must first complete the registration form. During registration a user is required to give certain information (such as name and email address). This information is used to contact you about the products/services on our site in which you have expressed interest. At your option, you may also provide demographic information (such as gender or age) about yourself, but it is not required. </p>
					
					<h2><strong>Orders </strong></h2>
					
					<p>We request information from you on our order form. To buy from us, you must provide contact information (like name and email address) and financial information (like credit card number, expiration date). This information is used for billing purposes and to fill your orders. If we have trouble processing an order, we’ll use this information to contact you. </p>
					
					<h2><strong>Cookies </strong></h2>
					
					<p>We use “cookies” on this site. A cookie is a piece of data stored on a site visitor’s hard drive to help us improve your access to our site and identify repeat visitors to our site. For instance, when we use a cookie to identify you, you would not have to log in a password more than once, thereby saving time while on our site. Cookies can also enable us to track and target the interests of our users to enhance the experience on our site. Usage of a cookie is in no way linked to any personally identifiable information on our site. Some of our business partners may use cookies on our site (for example, advertisers). However, we have no access to or control over these cookies. We use a credit card processing company to bill users for goods and services. These companies do not retain, share, store or use personally identifiable information for any secondary purposes beyond filling your order. This web site contains links to other sites. Please be aware that we are not responsible for the content or privacy practices of such other sites. We encourage our users to be aware when they leave our site and to read the privacy statements of any other site that collects personally identifiable information. If you feel that we are not abiding by this privacy policy, you should contact us immediately via email: support@official-canada-eta.com</p>
					
					<h2><strong>Links</strong></h2>
					
					<p>Where this site contains links to third party sites you should be aware that we may not control the sites reached through those links. We are not responsible for the content or privacy practices of sites which we do not control. The existence of a link on this site does not imply any endorsement or approval of any goods, services, opinions or other material(s) of any sort made available on or through sites which we do not control, nor do we take any responsibility for the opinions of third parties (if any) expressed on or through this site.</p>
					
					<h2><strong>Disclaimer and Limitation of Liability</strong></h2>
					
					<p>(a) Except as may be set out in these terms of use, this site, its content, and any use you choose to make of it, are provided and permitted without any representations or warranties of any kind, whether express or implied, and we disclaim all such representations and warranties so far as permitted by law. We do not warrant that information contained on or accessed through this site is adequate, complete, accurate or up-to-date, nor do we warrant that the site (or any part of it) will always be accessible, fully functional or free from errors and viruses. Accordingly, you agree that the only remedy available to you for breach of these terms of use shall be for our breach of contract under these terms of use.<br />
					(b) Subject to paragraph (d) below, but otherwise so far as permitted by law, we exclude and are not liable for all loss, damage(s) and liability (whether or not caused by our negligence) for all wasted time, all loss/corruption of data, all loss of profits, opportunities, and goodwill, and all indirect, consequential and punitive loss or damage(s) arising from or in relation to use of this site and/or the information on it or any services provided through it, howsoever arising, whether in contract, tort (including negligence), statute or otherwise, and even if it was reasonably foreseeable or we have been made aware of the possibility of such loss/damage(s)/liability.<br />
					(c) Subject to paragraph (d) below, but otherwise so far as permitted by law, our total aggregate liability hereunder in respect of direct loss and damage and other direct liability, howsoever arising, whether in contract, tort (including negligence), statute or otherwise shall be limited per claim or series of related claims, to ?100.<br />
					(d) Nothing in these terms of use shall limit our liability for: <br />
					(i) loss or damage for death or personal injury caused by our negligence; or <br />
					(ii) for any fraudulent misrepresentation made by us or those under our control.<br />
					(e) If you are using this site as a consumer then nothing in these terms of use shall in any way limit your statutory rights.</p>
					
					<h1><strong>Refund Policy</strong></h1>
					
					<p>Because the website has implemented the Instant Payment Notification (IPN) system, which allows the service to be processed immediately after paying the processing fee, we operate a <strong>NO REFUND policy.</strong> The cost of the eTA application is non-refundable and should a duplicate Canada eTA either exist or is found for the traveller(s), we are not able to issue a refund.</p>
					
					<p>We do take exceptional circumstances into consideration should something happen that is outside of your control and will consider refunds on a case-by-case basis. Please email us at <strong>support@official-canada-eta.com</strong>.</p>
					
					<h2><strong>Severability</strong></h2>
					
					<p>If one or more of the provisions of these terms of use are at any time found to be invalid by a court, tribunal or other forum of competent jurisdiction, or otherwise rendered unenforceable, that decision shall not invalidate or void the remainder of these terms of use. These terms of use shall be deemed amended by modifying or severing such provisions as necessary to render them valid, legal and enforceable while preserving their intent, or if that is not possible, by substituting another provision that is valid, legal and enforceable which materially gives effect to their intent. Any invalid or unenforceable provision or provisions shall be severable from these terms of use so that the validity or enforceability of their remaining provisions, or the validity of the provision(s) in question in any other jurisdiction shall not be affected.</p>
					
					<h2><strong>Entire Agreement</strong></h2>
					
					<p>These terms of use supersede all prior agreements, arrangements and statements (except for those for which liability is not excluded) between us with respect to your use of this site and constitute the entire agreement between us relating to the same.</p>
					
					<h2><strong>Change of Terms of Use</strong></h2>
					
					<p>We may alter, adapt or otherwise change these terms of use from time to time (for security, legal or regulatory reasons, or to reflect updates or changes to the services or functionality of the site) without prior notice. Your continued use of this site will constitute acceptance of those amended terms of use and you should review them before making any further use of this site.</p>
					
					<h2><strong>About Us</strong></h2>
					
					<p>This site is made available to you by Sat Pro Ltd and is ©official-canada-eta.com. All rights reserved.<br />
					Our normal hours of business are 0900 to 1800 weekdays excluding Bank Holidays.<br />
					You can contact us by writing to us at the above address or by using the 'contact us' facility on this site.</p>
					
					<h2><strong>Miscellaneous</strong></h2>
					
					<p>These terms of use shall not constitute or be deemed to constitute a partnership, joint venture or contract of employment between you and us.<br />
					You may not assign, sub-license, sub-contract or otherwise transfer or deal in any of your rights or obligations under these terms of use without our prior written consent.<br />
					Headings in these terms of use are for convenience only and are not to be taken into account when construing these terms of use.</p>
					
					<h2><strong>Termination</strong></h2>
					
					<p>We reserve the right to block your access to this site immediately and without notice if, in good faith, we believe that you have failed to comply with any of these terms of use.</p>
					
					<h2><strong>Rights of Third Parties</strong></h2>
					
					<p>No one other than you and us will have any right under the Contracts (Rights of Third Parties) Act 1999 to enforce any term of these terms of use, regardless of whether such person or entity has been identified by name, as a member of a class or as answering a particular description. For the avoidance of doubt, nothing in this clause shall affect the rights of any permitted assignee or transferee.</p>
					
					<h2><strong>Governing Law</strong></h2>
					
					<p>Use of this site and the Service is governed by English law, and you irrevocably agree to submit any claim or dispute arising in relation to, out of, or in connection with this site (and any use you make of it or the Service and/or opportunities offered through it) to the non-exclusive jurisdiction of the English courts.</p>
					
					<h2><strong>Passport and Visa</strong></h2>
					
					<p>You must consult the relevant Embassy or Consulate for this information. Requirements may change and you should check fro up-to-date position in good time before departure. We regret we can accept no liability if you are refused entry onto the flight or into any country due to failure on your part to carry the correct passport, visa or other documents required by any airline, authority or country. Health: Recommendations inoculations for travel may change at any time and you should consult your doctor on current recommendations before you depart. Health Requirements for your holiday destination are outlined in the department of health leaflet entitled "The Traveller's Guide to Health" (T4). It is your responsibility to ensure that you obtain all recommended medication and follow all medical advice in relation to your trip.<br />
					The User's use of the Website and or the Offered Service is on the strict understanding that the Website and or the Offered Service is not engaged in rendering advice and should not be relied upon when making any related travel or other decision. The information contained within the Website and or the Offered Service is provided without warranties expressed or implied relating to the accuracy, fitness for purpose, compatibility or security of any components of the Website and or the Offered Service. The Company does not guarantee uninterrupted availability of the Website and or the Offered Service nor, that any representation or statement contained on the Website will be error free.</p>
				
				</div>
			
				<div class="modal-footer"> <a href="#" class="btn" data-dismiss="modal"> Close </a> </div>
			
			</div>
		  
		</div>
			
		<?php get_the_footer(true);?>