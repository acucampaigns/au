		<style>
		
			#footer .container{
				width: 940px;
			}
			#footer small {
				font-size: 12px;
			}
			#footer hr {
				margin: 20px 0;
				border: 0;
				border-top: 1px solid #eee;
				border-bottom: 1px solid #fff;
			}
			#footer ul {
				float: none;
			}
		</style>
		
		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery_013.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/animations.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery_010.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery_003.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jqueryui.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/tooltip.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/additional2.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/popover_titles.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/popover.js"></script>

		<script type="text/javascript">

			jQuery(document).ready(function(){
				jQuery("#myform").validationEngine();
			});

			jQuery(function() {
				jQuery('.fm').change(function(){
					var txt  	= jQuery(this).val();
					var han = txt.replace(/[ーＡ-Ｚａ-ｚ０-９]/g,function(s){return String.fromCharCode(s.charCodeAt(0)-0xFEE0)});
					jQuery(this).val(han);
				});
			});
		</script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/bootstrap.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/jquery.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/customSelect.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/tooltip_002.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/addform2.js"></script>

		<script type="text/javascript" src="<?= __BASE_URL; ?>/assets/js/main.js"></script>
		<!-- Piwik 
		<script type="text/javascript">
			  var _paq = _paq || [];
			  _paq.push(['trackPageView']);
			  _paq.push(['enableLinkTracking']);
			  (function() {
				var u="https://ryanlion.piwikpro.com/";
				_paq.push(['setTrackerUrl', u+'piwik.php']);
				_paq.push(['setSiteId', 7]);
				var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0];
				g.type='text/javascript'; g.async=true; g.defer=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
			  })();
		</script>
		<noscript>
		<p><img src="https://ryanlion.piwikpro.com/piwik.php?idsite=7" style="border:0;" alt="" /></p>
		</noscript>
		End Piwik Code -->