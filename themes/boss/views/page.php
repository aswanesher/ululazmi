<ion:partial view="header" />

<ion:page:articles type="">

		<ion:article>

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left"><ion:title /></h1>
        <ul class="pull-right breadcrumb">
            <!--<li><a href="index.html">Home</a> </li>
            <li><a href="">Pages</a> </li>
            <li class="active">Right Column Page</li>
            -->
            <li>
            <ion:page:breadcrumb home="true" />
            </li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row">
        <div class="col-md-9 pagebar">
            <ion:medias type="picture" limit="1">
                <img src="<ion:media:src size='845, 200' method='adaptive'/>" />
            </ion:medias><br /><br />
            
            <!-- Article content -->
            <ion:content />
            
            
            
            <div class="margin-bottom-40">
                <ul class="list-inline socials-content">
                    <li>
                        <a class="rss" href="#"><i class="icon-rss"></i></a>
                    </li>
                    <li>
                        <a class="fb" href="#"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                        <a class="tw" href="#"><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                        <a class="gl" href="#"><i class="icon-google-plus"></i></a>
                    </li>
                    <li>
                        <a class="pt" href="#"><i class="icon-pinterest"></i></a>
                    </li>
                    <li>
                        <a class="lin" href="#"><i class="icon-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div><!--/col-md-9-->
        

        <div class="col-md-3 sidebar">
            <section>
                <!-- Search Bar -->
                <form role="form" class="form-search">
                    <i class="icon icon-search"></i>
                    <input type="text" placeholder="Search" class="form-control">
                </form>
                <!-- /Search Bar -->
            </section>
            
            <!-- Posts -->
			<section>
                <h3>Donasi</h3>
                <div class="media-list latest-posts">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img src="files/donasi.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </div>
            </section>
            
            <section>
                <!-- Photo Stream -->
                <h3>Photo Stream</h3>
                <ul class="list-unstyled blog-ads row">
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="<ion:theme_url />assets/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
                </ul>
                <!-- /Photo Stream -->
            </section>
        </div><!--/col-md-3-->
    </div><!--/row-->

    
    <!-- //End Our Clients -->
</div><!--/container-->		
</ion:article>

	</ion:page:articles>
<!--=== End Content Part ===-->

<ion:partial view="footer" />
