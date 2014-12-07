<!doctype html>
<!-- paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/ -->
<!--[if lt IE 7]> <html class="no-js ie6 oldie" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js ie7 oldie" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js ie8 oldie" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  
  <!-- DNS prefetch -->
  <link rel=dns-prefetch href="//fonts.googleapis.com">

  <!-- Use the .htaccess and remove these lines to avoid edge case issues.
       More info: h5bp.com/b/378 -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

  <title>Dashboard :: NEHA - Professional &amp; Flexible Admin Template</title>
  <meta name="description" content="">
  <meta name="author" content="">

  <!-- Mobile viewport optimized: j.mp/bplateviewport -->
  <meta name="viewport" content="width=device-width,initial-scale=1">

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory: mathiasbynens.be/notes/touch-icons -->

  <!-- CSS: implied media=all -->
  <!-- CSS concatenated and minified via ant build script-->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/style.css"> <!-- Generic style (Boilerplate) -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/960.fluid.css"> <!-- 960.gs Grid System -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/main.css"> <!-- Complete Layout and main styles -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/buttons.css"> <!-- Buttons, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/lists.css"> <!-- Lists, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/icons.css"> <!-- Icons, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/notifications.css"> <!-- Notifications, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/typography.css"> <!-- Typography -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/forms_.css"> <!-- Forms, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/tables.css"> <!-- Tables, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/charts.css"> <!-- Charts, optional -->
  <link rel="stylesheet" href="<?php echo ADMININCLUDE ?>css/jquery-ui-1.8.15.custom.css"> <!-- jQuery UI, optional -->
  <link rel="stylesheet" href="<?php echo INCLUDE_FILE;  ?>css/neha.css" />
  <!-- end CSS-->
  
  <!-- Fonts -->
<!--  <link href="//fonts.googleapis.com/css?family=PT+Sans" rel="stylesheet" type="text/css">-->
  <!-- end Fonts-->

  <!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

  <!-- All JavaScript at the bottom, except for Modernizr / Respond.
       Modernizr enables HTML5 elements & feature detects; Respond is a polyfill for min/max-width CSS3 Media Queries
       For optimal performance, use a custom Modernizr build: www.NEHA.com/download/ -->
  <script src="<?php echo INCLUDE_FILE;  ?>js/libs/modernizr-2.0.6.min.js"></script>
  <script src="<?php echo INCLUDE_FILE;  ?>js/validation.js"></script>
  <script src="<?php echo INCLUDE_FILE;  ?>js/ajaxvalidation.js"></script>
   <script src="<?php echo ADMININCLUDE;  ?>js/admin.js"></script>
   <script type="text/javascript">
   ADMIN_PATH='<?php echo ADMIN ?>';
   </script>
</head>

<body id="top">

  <!-- Begin of #container -->
  <div id="container">
  	<!-- Begin of #header -->
    <div id="header-surround"><header id="header">
    	
    	<!-- Place your logo here -->
		<img src="<?php echo ADMININCLUDE ?>img/logo.png" alt="Grape" class="logo">
		
		<!-- Divider between info-button and the toolbar-icons -->
		<div class="divider-header divider-vertical"></div>
		
		<!-- Info-Button -->
		<a href="javascript:void(0);" onclick="$('#info-dialog').dialog({ modal: true });"><span class="btn-info"></span></a>
		
			<!-- Modal Box Content -->
			<div id="info-dialog" title="About" style="display: none;">
				<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
				<p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
			</div> <!--! end of #info-dialog -->
		
		<!-- Begin from Toolbox -->
		
		
		<!-- Begin of #user-info -->
		<div id="user-info">
			<p>
				<span class="messages">Welcome, <a href="javascript:void(0);">Admin</span>
				 <a href="<?php echo ADMIN ?>logout" class="button red">Logout</a>
			</p>
		</div> <!--! end of #user-info -->
		
    </header></div> <!--! end of #header -->
    
    <div class="fix-shadow-bottom-height"></div>
	
	<!-- Begin of Sidebar -->
    <aside id="sidebar">
    	
    	
    	
    	<!-- Begin of Navigation -->
    	<nav id="nav">
	    	<ul class="menu collapsible shadow-bottom">
	    		
	    		<li><a href="<?php  echo ADMIN?>"><img src="<?php echo ADMININCLUDE ?>img/icons/packs/fugue/16x16/clipboard-list.png">Title photos</a></li>	    		
	    		<li><a href="<?php  echo ADMIN?>about/"><img src="<?php echo ADMININCLUDE ?>img/icons/packs/fugue/16x16/ui-tab-content.png">About</a></li>	    		
                        <li><a href="<?php  echo ADMIN?>couple/"><img src="<?php echo ADMININCLUDE ?>img/icons/packs/fugue/16x16/application--exclamation.png">couple Deatils</a></li>
                        <li><a href="<?php  echo ADMIN?>image3d/"><img src="<?php echo ADMININCLUDE ?>img/icons/packs/fugue/16x16/application--exclamation.png">360 IMage</a></li>
                        <li><a href="<?php  echo ADMIN?>gallery/"><img src="<?php echo ADMININCLUDE ?>img/icons/packs/fugue/16x16/application--exclamation.png">Gallery</a></li>
                        <li><a href="<?php  echo ADMIN?>video/"><img src="<?php echo ADMININCLUDE ?>img/icons/packs/fugue/16x16/application--exclamation.png">Video</a></li>
	    		
	    		
	    	</ul>
    	</nav> <!--! end of #nav -->
    	
    </aside> <!--! end of #sidebar -->
    
    <!-- Begin of #main -->
    <div id="main" role="main">
    	
    	<!-- Begin of titlebar/breadcrumbs -->
		<div id="title-bar">
			</div> <!--! end of #title-bar -->
		
		<div class="shadow-bottom shadow-titlebar"></div>
		
		<!-- Begin of #main-content -->
		<div id="main-content">
			<div class="container_12">
			
                            <?php if(isset($this->data['data'])) echo $this->data['data']; ?>

			
			<div class="clear height-fix"></div>

		</div></div> <!--! end of #main-content -->
  </div> <!--! end of #main -->

    
    <footer id="footer"><div class="container_12">
		<div class="grid_12">
    		<div class="footer-icon align-center"><a class="top" href="#top"></a></div>
		</div>
    </div></footer>
  </div> <!--! end of #container -->


  <!-- JavaScript at the bottom for fast page loading -->

  <!-- Grab Google CDN's jQuery, with a protocol relative URL; fall back to local if offline -->
  <script src="//ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/libs/jquery-1.6.2.min.js"><\/script>')</script>


  <!-- scripts concatenated and minified via ant build script-->
   <!-- Generic scripts -->
  
  <script type="text/javascript">
	$().ready(function() {
		
		/*
		 * Form Validation
		 */
		$.validator.setDefaults({
			submitHandler: function(e) {
				$.jGrowl("Form was successfully submitted.", { theme: 'success' });
				$(e).parent().parent().fadeOut();
				v.resetForm();
				v2.resetForm();
				v3.resetForm();
			}
		});
		var v = $("#create-user-form").validate();
		jQuery("#reset").click(function() { v.resetForm(); $.jGrowl("User was not created!", { theme: 'error' }); });
		
		var v2 = $("#write-message-form").validate();
		jQuery("#reset2").click(function() { v2.resetForm(); $.jGrowl("Message was not sent.", { theme: 'error' }); });
		
		var v3 = $("#create-folder-form").validate();
		jQuery("#reset3").click(function() { v3.resetForm(); $.jGrowl("Folder was not created!", { theme: 'error' }); });
		
		var validateform = $("#validate-form").validate();
		$("#reset-validate-form").click(function() {
			validateform.resetForm();
			$.jGrowl("Blogpost was not created.", { theme: 'error' });
		});
	});
  </script>
  <!-- end scripts-->

  <!-- Prompt IE 6 users to install Chrome Frame. Remove this if you want to support IE 6.
       chromium.org/developers/how-tos/chrome-frame-getting-started -->
  <!--[if lt IE 7 ]>
    <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
    <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
  <![endif]-->
  
</body>
</html>