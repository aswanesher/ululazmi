<!DOCTYPE html>
<head>
	<meta charset="utf-8" />
	<meta http-equiv="content-type" content="text/html; charset=utf-8" />

	<!-- Set the viewport width to device width for mobile -->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<meta http-equiv="imagetoolbar" content="no" />
	<meta name="revisit-after" content="15 days" />
	
	<meta name="description" content="<ion:meta_description />" />
	<meta name="keywords" content="<ion:meta_keywords />" />
	<meta name="language" content="<ion:current_lang />" />

	<title><ion:meta_title /> | <ion:site_title /></title>
  
	<!-- Included CSS Files -->
	<link rel="stylesheet" href="<ion:theme_url />assets/css/normalize.css">
	<link rel="stylesheet" href="<ion:theme_url />assets/css/foundation.min.css">
	<link rel="stylesheet" href="<ion:theme_url />assets/css/app.css">
    

    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/jquery.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/vendor/modernizr.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/foundation.min.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/foundation/foundation.topbar.js"></script>
    <script type="text/javascript" src="<ion:theme_url />javascript/foundation/foundation.orbit.js"></script>

    <!-- jQuery Version 1.11.0 -->
    <!--<script src="<ion:theme_url />javascript/jquery-1.11.0.js"></script>-->

    <!-- Bootstrap Core JavaScript -->
    <script src="<ion:theme_url />javascript/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
    
	<!-- Ionize JS Lang object -->
	<ion:jslang />

	<!-- if JS needs to get the theme URL, we give it to him -->
	<script type="text/javascript">
		var theme_url = '<ion:theme_url />';
	</script>

	<ion:google_analytics />

</head>

<body>

	<!-- container -->
	<div class="container">
    

        <div class="contain-to-grid">

            <!--<div id="searchform">
                <form method="post" action="<ion:base_url />/search">
                    <input type="hidden" name="as_sitesearch" id="as_sitesearch" value="ionizecms.com/user-guide" /><ion:lang key="search_user_guide" />&nbsp;
                    <input type="text" class="input" style="width:200px;" name="realm" id="search-input" size="31" maxlength="255" value="" />&nbsp;
                    <input type="submit" class="submit" name="sa" value="Go" />
                </form>
            </div>-->
			<nav data-topbar="" class="top-bar hide-for-small">
				<ul class="title-area">
					<!--
						Website Logo
					-->
                    <li class="logo"><img src="<ion:home_url />files/logo_yayasan.jpg" width="100" height="50"></li>
					<li class="name"><h1><a href="<ion:home_url />"><ion:site_title /></a></h1></li>
				</ul>

				<section class="top-bar-section">

					<ul class="right">


						<!--
							Navigation Menu
						-->
						<ion:navigation level="0"  active_class="active"  >
							<li class="divider"></li>
							<li>
								<a href="<ion:url />"><ion:title /></a>
							</li>
						</ion:navigation>



						<!--
							Language Selector
						-->
						<ion:languages tag="ul" class="right">
							<li <ion:language:is_active> class="active"</ion:language:is_active>>
								<a class="small button" href="<ion:language:url />">
									<ion:language:code />
								</a>
							</li>
						</ion:languages>
                        
                        

					</ul>

				</section>
			</nav>
		</div>


