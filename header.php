<!DOCTYPE html>
<html lang="en">
<head>
	<meta content="text/html; charset=utf-8" http-equiv="content-type">
	<meta content="width=device-width,initial-scale=1" name="viewport">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/images/favicon.png" rel="shortcut icon">
	<title><?php echo get_bloginfo( 'name' ); ?></title>
	<meta content="<?php echo get_bloginfo( 'description' ); ?>" name="description">
	<meta content="width=device-width,maximum-scale=1,initial-scale=1,user-scalable=0" name="viewport">
    <!-- Hotjar Tracking Code for bschool.howard.edu -->
    <script>
        (function(h,o,t,j,a,r){
            h.hj=h.hj||function(){(h.hj.q=h.hj.q||[]).push(arguments)};
            h._hjSettings={hjid:870860,hjsv:6};
            a=o.getElementsByTagName('head')[0];
            r=o.createElement('script');r.async=1;
            r.src=t+h._hjSettings.hjid+j+h._hjSettings.hjsv;
            a.appendChild(r);
        })(window,document,'https://static.hotjar.com/c/hotjar-','.js?sv=');
    </script>
	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/css/all-stylesheets.css" rel="stylesheet" type="text/css">
	<link href="<?php echo get_bloginfo('template_directory'); ?>/assets/fonts/font-awesome/css/font-awesome.min.css" media="all" rel="stylesheet" type="text/css">
	<?php wp_head();?>
</head>
<body>
	<div id="cover" onmouseover="closeNav()"></div>
	<div class="sidenav" id="mySidenav">
		<div id="sidenav-content"></div>
	</div>
	<div id="main">
		<div class="responsive-tab">
			<a class="hamburger" href="#menu" onclick="openNav('tab_menu_content')" role="button" title="Open Menu"><i aria-label="Open Menu" class="fa fa-fw fa-bars"></i>Menu<span class="icon-fallback"></span></a>
		</div>
		<div class="little-tab">
			<a class="hamburger" href="#menu" onmouseover="openNav('tab_menu_content')" role="button" title="Open Menu"><i aria-label="Open Menu" class="fa fa-fw fa-bars"></i><span class="icon-fallback"></span></a>
		</div>
		<div class="side-tabs">
			<ul aria-describedby="aria-description-tablist" class="main-menu" id="menu" role="tablist">
				<li style="list-style: none; display: inline">
					<p class="hide" id="aria-description-tablist">Tabs in this tab group open the tab panel widget in a dialog. Once a tab is interacted with, press the escape key to exit the dialog and return to the page content.</p>
				</li>
				<li class="tab" onmouseover="openNav('tab_menu_content')" role="presentation">
					<a aria-controls="tabpanel-menu" href="#menu" id="tab-menu" role="tab"><i aria-hidden="true" class="fa fa-fw fa-bars"></i>Menu</a>
				</li>
				<li class="tab" onmouseover="openNav('search_menu_content')" role="presentation">
					<a aria-controls="tabpanel-search" href="#search" id="tab-search" role="tab"><i aria-hidden="true" class="fa fa-fw fa-search"></i>Search</a>
				</li><!---li class="tab" onclick="openNav('tab-news-events')" role="presentation">
            <a aria-controls="tabpanel-news-events" href="#" id="tab-news-events" role="tab"><i aria-hidden="true" class="fa fa-fw fa-calendar"></i>News &amp; Events</a>
        </li===-->
				<li class="tab" role="presentation">
					<a href="https://150.howard.edu" target="_blank"><i aria-hidden="true" class="fa fa-fw fa-gift"></i>Howard at 150</a>
				</li>
			</ul>
			<ul class="actions">
				<li class="parent-level">
					<a class="destination" href="https://www2.howard.edu/admission" target="_blank" title="Apply">Apply</a>
				</li>
				<li class="parent-level">
					<a class="destination" href="/donors/" target="_blank" title="Donate">Donate</a>
				</li>
				<li class="parent-level">
					<a class="destination" href="https://www2.howard.edu/contact/visit" target="_blank" title="Get Involved">Visit</a>
				</li>
			</ul><!-- </div> -->
		</div>