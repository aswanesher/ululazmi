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

						<ion:media:type is="picture">
							<img src="<ion:media:src size='850,200' method='adaptive' />" />
						</ion:media:type>

                </ion:medias><br /><br />
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
                <form role="form" class="form-search">
                        <i class="icon icon-search"></i>
                        <input type="text" placeholder="Search" class="form-control">
                </form>
                <!-- /Search Bar -->
            </section>

            <section>
                <!-- Categories -->
                <h3>Categories</h3>
                <ul class="list-unstyled menu">
                    <li>
                        <a href="#">Tech</a> <span>(25)</span>
                    </li>
                    <li>
                        <a href="#">Science</a> <span>(35)</span>
                    </li>
                    <li>
                        <a href="#">Music</a> <span>(21)</span>
                    </li>
                    <li>
                        <a href="#">Video</a> <span>(6)</span>
                    </li>
                    <li>
                        <a href="#">Archeology</a> <span>(5)</span>
                    </li>
                </ul>
                <!-- /Categories -->
            </section>

            <section>
                <!-- Recent Blog Entries -->
                <h3>Recent Blog Entries</h3>
                <ul class="list-unstyled menu">
                    <li>
                        <a href="#">Anim moon officia Boss</a>
                    </li>
                    <li>
                        <a href="#">Boss is an incredibly beautiful</a>
                    </li>
                    <li>
                        <a href="#">Moon officia Boss is an incredibly</a>
                    </li>
                    <li>
                        <a href="#">Bootstrap Template</a>
                    </li>
                    <li>
                        <a href="#">Bootstrap Anim moon officia Boss Template</a>
                    </li>
                </ul>
                <!-- /Recent Blog Entries -->
            </section>

            <section>
                <!-- Photo Stream -->
                <h3>Photo Stream</h3>
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
            </section>

            <section>
                <!-- Blog Tags -->
                <h3>Blog Tags</h3>
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
            </section>

            <section>
                <!-- Blog Latest Tweets -->
                <div class="blog-twitter">
                    <h3>Latest Tweets</h3>
                    <p><a href="">@some</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span></p>
                    <p><a href="">@boss</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/f58Ddg4</a> <span>8 hours ago</span></p>
                    <p><a href="">@veroeos</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/adVs9f</a> <span>17 hours ago</span></p>
                    <p><a href="">@accusamus </a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/wf5Fs6</a> <span>23 hours ago</span></p>
                    <p><a href="">@veroeoset</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/7EsffP</a> <span>1 day ago</span></p>
                </div>
            </section>
        </div><!--/col-md-3-->
    </div><!--/row-->
</div><!--/container-->		
<!--=== End Content Part ===-->

<ion:partial view="footer" />
