<ion:partial view="header" />

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left">Blog</h1>
        <ul class="pull-right breadcrumb">
            <!--<li><a href="index.html">Home</a> </li>
            <li class="active">Blog</li>-->
            <li>
            <ion:page:breadcrumb home="true" />
            </li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row blog-page">
        <!-- Left Sidebar -->
    	<div class="col-md-9 pagebar">
        <ion:page:articles>
			
			<ion:article>
        	<div class="blog clearfix">
            	<h2><a href="<ion:url />"><ion:title class="pagetitle" /></a></h2>
            	<ul class="list-unstyled list-inline blog-info">
                	<li><ion:date format="complete" /></li>
                	<li><ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " /></li>
                	<!--<li><i class="icon-comments"></i> <a href="#">24 Comments</a></li>-->
                </ul>
                <!--<div class="blog-img">
                    <img src="<ion:theme_url />assets/img/posts/1.jpg" alt="" />
                    <div class="link-overlay icon-chevron-right"></div>
                </div>-->
                <ion:medias type="picture,video" limit="1">

						<ion:media:type is="video">
							<div class="media">
								<ion:media:provider  is='youtube'><iframe class="video" width="100%" height="200" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
								<ion:media:provider  is='vimeo'><iframe class="video" width="100%" height="200" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
								<ion:media:provider  is='dailymotion'><iframe class="video" width="100%" height="200" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
								<ion:media:extension is="mp4"><video class="video" width="100%" height="200"controls><source src="<ion:media:src />" type="video/mp4" ></video></ion:media:extension>
								<ion:media:extension is="ogv"><video class="video" width="100%" height="200" controls><source src="<ion:media:src />" type="video/ogg" ></video></ion:media:extension>
							</div>
						</ion:media:type>
                        
                        <div class="blog-img">
						<ion:media:type is="picture">
                            <a href="<ion:url />">
							<img src="<ion:media:src size='850,200' method='adaptive' />" />
                            <div class="link-overlay icon-chevron-right"></div>
                            </a>
						</ion:media:type>
                        </div>

                </ion:medias>
                <ion:content paragraph="1" />
                <p class="more"><a class="btn btn-m btn-m-aqua" href="<ion:url />">Selengkapnya..</a></p>
                
                <!-- Tags -->
                <ion:article:tags:list link="true" separator=", " tag="p" class="categories" prefix="lang('title_tags') : " />
            </div><!--/blog-->
            </ion:article>
		
		</ion:page:articles>
            
            <div class="text-left">
                <!--<ul class="pagination pagination-sm pagination-m">-->
                    <!--<li class="disabled"><a href="#">Page 3 of 8</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a>3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">6</a></li>
                    <li><a href="#">7</a></li>
                    <li><a href="#">8</a></li>-->
                    <!-- Pagination -->
                    <ion:page:articles:pagination tag="div" class="pagination pagination-sm pagination-m" />
                <!--</ul>-->
            </div>
        </div><!--/col-md-9-->

        <!-- Right Sidebar -->
    	<div class="col-md-3 sidebar">
            <section>
                <!-- Search Bar -->
                <form method="post" action="<ion:base_url />search" role="search" class="form-search">
                        <i class="icon icon-search"></i>
                        <input name="realm" type="text" placeholder="Cari.." class="form-control">
                </form>
                <!-- /Search Bar -->
            </section>

            <section>
                <!-- Categories -->
                <h3>Kategori</h3>
                <ion:categories tag="ul" class="list-unstyled menu" active_class="my-active-class">
                    <li>
                        <a <ion:category:is_active> class="<ion:category:active_class />" </ion:category:is_active> href="<ion:category:url />">
                        <ion:category:title /> : <ion:category:nb_articles /> articles
                        </a>
                    </li>
                </ion:categories>
                <!-- /Categories -->
                <!-- /Categories -->
            </section>

            <section>
                <!-- Recent Blog Entries -->
                <h3>Artikel lainnya</h3>
                <ion:page:articles>
                    <ion:article>
                    <ul class="list-unstyled menu">
                        <li><a href="<ion:url />"><ion:title class="pagetitle" /></a></li>
                    </ul>
                    </ion:article>
                </ion:page:articles>
                <!-- /Recent Blog Entries -->
            </section>

            <!--<section>
                <!-- Photo Stream -->
                <!--<h3>Photo Stream</h3>
                <ul class="list-unstyled blog-ads row">
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/5.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/6.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/8.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/10.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/11.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/1.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/2.jpg" alt="" class="hover-effect" /></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img src="assets/img/sliders/elastislide/7.jpg" alt="" class="hover-effect" /></a></li>
                </ul>
                <!-- /Photo Stream -->
            <!--</section>-->

            <!--<section>
                <!-- Blog Tags -->
                <!--<h3>Blog Tags</h3>
                <ul class="list-unstyled list-inline blog-tags">
                    <li><a href="#"><i class="icon-tags"></i> Business</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Music</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Internet</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Money</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Google</a></li>
                    <li><a href="#"><i class="icon-tags"></i> TV Shows</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Education</a></li>
                    <li><a href="#"><i class="icon-tags"></i> People</a></li>
                    <li><a href="#"><i class="icon-tags"></i> People</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Math</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Photos</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Electronics</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Apple</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Canada</a></li>
                </ul>
            </section>-->

            <section>
                <!-- Blog Latest Tweets -->
                <div class="blog-twitter">
                    <h3>Media sosial</h3>
                    <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FUlul-Azmi-Foundation%2F186029634776673&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=280" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:280px;" allowtransparency="true"></iframe>
                    <iframe width="260" height="215" src="//www.youtube.com/embed/w3uFb9Lgr_o" frameborder="0" allowfullscreen></iframe>
                </div>
            </section>
        </div><!--/col-md-3-->
    </div><!--/row-->
</div><!--/container-->		
<!--=== End Content Part ===-->

<ion:partial view="footer" />
