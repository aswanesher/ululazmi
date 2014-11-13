<!DOCTYPE html>
<!--[if IE 7]> <html lang="en" class="ie7"> <![endif]-->  
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->  
<head>
    <title><ion:meta_title /> | <ion:site_title /> </title>

    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<ion:meta_description />" />
	<meta name="keywords" content="<ion:meta_keywords />" />
	<meta name="language" content="<ion:current_lang />" />

    <!-- CSS Global Compulsory-->
    <link rel="stylesheet" href="<ion:theme_url />assets/plugins/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="<ion:theme_url />assets/css/style.css">
    <link rel="stylesheet" href="<ion:theme_url />assets/css/headers/header1.css">
    <link rel="shortcut icon" href="<ion:theme_url />assets/plugins/bootstrap/ico/favicon.png">
    <!-- CSS Implementing Plugins -->    
    <link rel="stylesheet" href="<ion:theme_url />assets/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="<ion:theme_url />assets/plugins/flexslider/flexslider.css" type="text/css" media="screen"> 
    <link rel="stylesheet" href="<ion:theme_url />assets/plugins/bxslider/jquery.bxslider.css">             
    <link rel="stylesheet" href="<ion:theme_url />assets/plugins/horizontal-parallax/css/horizontal-parallax.css">
    
    <!-- Ionize JS Lang object -->
	<ion:jslang />

	<!-- if JS needs to get the theme URL, we give it to him -->
	<script type="text/javascript">
		var theme_url = '<ion:theme_url />';
	</script>
    
    <script>
		$(function() {
			var pull 		= $('#pull');
				menu 		= $('nav ul');
				menuHeight	= menu.height();

			$(pull).on('click', function(e) {
				e.preventDefault();
				menu.slideToggle();
			});

			$(window).resize(function(){
        		var w = $(window).width();
        		if(w > 320 && menu.is(':hidden')) {
        			menu.removeAttr('style');
        		}
    		});
		});
	</script>
    
    <ion:google_analytics />
    
</head> 

<body>


<!--=== Top ===-->    
<div class="top">
    <div class="container">
        <div class="row">
            <div class="col-md-5 col-sm-6 contact">
                Call us: <ion:no_telp /> | E-mail: <ion:email />
            </div>
            <div class="col-md-7 col-sm-6 col-xs-12 submenu">
                
                <ul class="list-inline socials">
                    <li>
                        <a href="#"><i class="icon-rss"></i></a>
                    </li>
                    <li>
                        <a href="<ion:facebook />"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="<ion:twitter />"><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="<ion:gplus />"><i class="icon-google-plus"></i></a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</div><!--/top-->
<!--=== End Top ===-->

<!--=== Header ===-->
<div class="header">               
    <div class="container">
                                    
        <!-- Menu -->       
        <div class="navbar">                                
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-responsive-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button><!-- /navbar-collapse -->
                    <!-- Logo -->
                    
                    <a href="<ion:home_url />" class="navbar-brand">
                    <img id="logo-header" src="<ion:home_url />files/logo_yayasan.jpg" style="margin-top: -10px;" width="120" height="50">
                    </a>
                    <!--<img id="logo-header" src="<ion:theme_url />assets/img/logo.png" alt="Logo"></a>
                    <!-- /logo -->
                </div>
                <div class="navbar-collapse collapse navbar-responsive-collapse navbar-left">
                    <!--<ion:tree_navigation active_class="active" tag="ul" id="dropdown-menu" class="nav navbar-nav" />--> 
                    <!--<ul class="nav navbar-nav">
                        <li class="active">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Home
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="index.html">Option1: Landing Page</a></li>
                                <li><a href="page_home.html">Option2: Header Option</a></li>
                                <li><a href="page_home4.html">Option3: Revolution Slider</a></li>
                                <li><a href="page_home5.html">Option4: Amazing Content</a></li>
                                <li><a href="page_home1.html">Option5: Mixed Content</a></li>
                                <li class="active"><a href="page_home2.html">Option6: Content with Sidebar</a></li>
                                <li><a href="page_home3.html">Option7: Aplle Style Slider</a></li>
                                <li><a href="page_home_all.html">Home All In One</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Pages
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="page_about.html">About Us</a></li>
                                <li><a href="page_services.html">Services</a></li>
                                <li><a href="page_pricing.html">Pricing</a></li>
                                <li><a href="page_coming_soon.html">Coming Soon</a></li>
                                <li><a href="page_faq.html">FAQs</a></li>
                                <li><a href="page_search.html">Search Result</a></li>
                                <li><a href="page_gallery.html">Gallery</a></li>
                                <li><a href="page_registration.html">Registration</a></li>
                                <li><a href="page_login.html">Login</a></li>
                                <li><a href="page_404.html">404</a></li>
                                <li><a href="page_clients.html">Clients</a></li>
                                <li><a href="page_privacy.html">Privacy Policy</a></li>
                                <li><a href="page_terms.html">Terms of Service</a></li>
                                <li><a href="page_column_left.html">2 Columns (Left)</a></li>
                                <li><a href="page_column_right.html">2 Columns (Right)</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li>
                            <a href="" class="dropdown-toggle" data-toggle="dropdown">Features
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="feature_grid.html">Grid Layout</a></li>
                                <li><a href="feature_typography.html">Typography</a></li>
                                <li><a href="feature_thumbnail.html">Thumbnails</a></li>
                                <li><a href="feature_component.html">Components</a></li>
                                <li><a href="feature_navigation.html">Navigation</a></li>
                                <li><a href="feature_table.html">Tables</a></li>
                                <li><a href="feature_form.html">Forms</a></li>
                                <li><a href="feature_icons.html">Icons</a></li>
                                <li><a href="feature_button.html">Buttons</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Portfolio
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="portfolio.html">Portfolio</a></li>
                                <li><a href="portfolio_item.html">Portfolio Item</a></li>
                                <li><a href="portfolio_2columns.html">Portfolio 2 Columns</a></li>
                                <li><a href="portfolio_3columns.html">Portfolio 3 Columns</a></li>
                                <li><a href="portfolio_4columns.html">Portfolio 4 Columns</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Blog
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="blog.html">Blog</a></li>
                                <li><a href="blog_item.html">Blog Item</a></li>
                                <li><a href="blog_left_sidebar.html">Blog Left Sidebar</a></li>
                                <li><a href="blog_item_left_sidebar.html">Blog Item Left Sidebar</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                        <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Contact
                                <b class="caret"></b>                            
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="page_contact.html">Contact Default</a></li>
                                <li><a href="page_contact1.html">Contact Boxed Map</a></li>
                            </ul>
                            <b class="caret-out"></b>                        
                        </li>
                    </ul>-->
                    <nav>
		<ul>
                        
			<!--<li><a href="#">Home</a></li>
			<li><a href="#">How-to</a></li>
			<li><a href="#">Icons</a></li>
			<li><a href="#">Design</a></li>
			<li><a href="#">Web 2.0</a></li>
			<li><a href="#">Tools</a></li>-->
            <!--
							Navigation Menu
						-->
			             <!--<ion:navigation level="0"  active_class="active"  >
							<li>
								<a href="<ion:url />"><ion:title /></a>
							</li>
						</ion:navigation>-->
					    <!--<li class="header-title"><img src="<ion:home_url />files/logo_yayasan.jpg" width="100" height="50">
                        &nbsp;&nbsp;<a href="<ion:home_url />"><ion:site_title /></a></li>-->
                        
                        
                        <ion:tree_navigation active_class="active" tag="ul"/>
 


						<!--
							Language Selector
						-->
						<!--<ion:languages tag="ul" class="right">
							<li <ion:language:is_active> class="active"</ion:language:is_active>>
								<a class="small button" href="<ion:language:url />">
									<ion:language:code />
								</a>
							</li>
						</ion:languages>	-->
                        
                        
		</ul>
		<a href="#" id="pull">Menu</a>
	</nav>
                </div><!-- /navbar-collapse -->
                <form method="post" action="<ion:base_url />search" role="search" class="form-search">
                    <i class="icon icon-search"></i>
                    <input name="realm" type="text" placeholder="Cari.." class="form-control">
                </form>
            </div><!-- /navbar-inner -->
        </div><!-- /navbar -->                          
    </div><!-- /container -->               
</div><!--/header -->      
<!--=== End Header ===-->
