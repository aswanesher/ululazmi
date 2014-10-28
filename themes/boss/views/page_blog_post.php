<ion:partial view="header" />

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left">Blog</h1>
        <ul class="pull-right breadcrumb">
            <li><ion:page:breadcrumb home="true" /></li>
            <!--<li><a href="blog.html">Blog</a> </li>
            <li class="active">Item</li>-->
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row blog-page blog-item">
        <!-- Left Sidebar -->
    	<div class="col-md-9 pagebar">
            <ion:page:article>
        	<div class="blog clearfix">
                <h2><ion:title /></h2>
                <ul class="list-unstyled list-inline blog-info">
                    <li><ion:date format="complete" tag="p" class="date"/></li>
                    <li>
                    <ion:article:writer who="updater">
                    <ion:firstname /> <ion:lastname />
                    </ion:article:writer>
                    </li>
                    <li><i class="icon-comments"></i> <a href="#">24 Comments</a></li>
                </ul>
                <div class="blog-img">
                    <!--<img src="assets/img/posts/1.jpg" alt="" />
                    <div class="link-overlay icon-chevron-right"></div>-->
                    <ion:medias type="picture,video">

								<div class="slider-panel">

									<ion:media:type is="picture">
										<img src="<ion:media:src size='720,400' method='adaptive' />" />
									</ion:media:type>

									<ion:media:type is="video">
										<ion:media:provider  is='youtube'><iframe class="video" width="100%" height="400" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
										<ion:media:provider  is='vimeo'><iframe class="video" width="100%" height="400" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
										<ion:media:provider  is='dailymotion'><iframe class="video" width="100%" height="400" src="<ion:media:src />" frameborder="0" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe></ion:media:provider>
										<ion:media:extension is="mp4"><video class="video" width="100%" height="400"controls><source src="<ion:media:src />" type="video/mp4" ></video></ion:media:extension>
										<ion:media:extension is="ogv"><video class="video" width="100%" height="400" controls><source src="<ion:media:src />" type="video/ogg" ></video></ion:media:extension>
									</ion:media:type>
								</div>
                    </ion:medias>
                </div>
                <ion:content link_key="title" link_title="subtitle" />
                
                <p class="categories">
                	<ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " />
				</p>
                
                <ul class="list-unstyled list-inline blog-tags">
                    <li class="text">Tags:</li>
                    <li><a href="#"><i class="icon-tags"></i> Business</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Music</a></li>
                    <li><a href="#"><i class="icon-tags"></i> Internet</a></li>
                </ul>
            </div><!--/blog-->
            
            </ion:page:article>
            
            <div class="user-info">
                <div class="user-info-ava">
                    <img alt="" src="assets/img/new/img13.jpg">
                </div>
                <div class="user-info-bio">
                    <div class="user-info-name"> About the Author </div>
                    <p>
                        Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis asdf asdnisl <a href="#">@jhon_doe_lorem</a>.
                    </p>
                </div>
            </div>
            <!-- Comments -->
            <div class="comments">
                <!-- Media -->
                <div class="media">
                    <h3 class="lined margin-bottom-20">Comments</h3>
                    <a class="pull-left" href="#">
                        <img class="media-object" src="assets/img/sliders/elastislide/2.jpg" alt=""/> </a>
                    <div class="media-body">
                        <h4 class="media-heading">ding <span>5 hours ago <a href="#">Reply</a></span></h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                        <hr/>
                        <!-- Nested media object -->
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="assets/img/sliders/elastislide/5.jpg" alt=""/> </a>
                            <div class="media-body">
                                <h4 class="media-heading">dia hea
                                    <span>17 hours ago <a href="#">Reply</a></span>
                                </h4>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                        </div><!--/media-->
                        <hr/>
                        <div class="media">
                            <a class="pull-left" href="#">
                                <img class="media-object" src="assets/img/sliders/elastislide/11.jpg" alt=""/> </a>
                            <div class="media-body">
                                <h4 class="media-heading">Media  <span>2 days ago <a href="#">Reply</a></span>
                                </h4>
                                <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                            </div>
                            <hr/>
                        </div><!--/media-->
                    </div>
                </div><!--/media-->
                <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="assets/img/sliders/elastislide/9.jpg" alt=""/> </a>
                    <div class="media-body">
                        <h4 class="media-heading"> heading <span>July 5,2013 <a href="#">Reply</a></span></h4>
                        <p>Donec id elit non mi porta gravida at eget metus. Fusce dapibus, tellus ac cursus commodo, tortor mauris condimentum nibh, ut fermentum massa justo sit amet risus. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. </p>
                    </div>
                </div><!--/media-->
            </div><!-- /comments -->

            <!-- Leave a Comment -->
            <h3 class="lined margin-bottom-20">Leave a Comment</h3>
            <div class="post-comment margin-bottom-40">
                <form>
                    <fieldset>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <i class="icon-user"></i>
                                    <input type="text" class="form-control" placeholder="Name"/>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4 col-sm-6">
                                <div class="form-group">
                                    <i class="icon-envelope-alt"></i>
                                    <input type="text" class="form-control" placeholder="Email (required)" />
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <i class="icon-terminal"></i>
                            <textarea rows="8" class="form-control" placeholder="Message"></textarea>
                        </div>
                        <div class="form-group">
                            <p><button type="submit" class="btn btn-m btn-m-aqua">Send Message</button></p>
                        </div>
                    </fieldset>
                </form>
            </div><!--/post-comment-->
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
                <h3>Kategori</h3>
                <ion:categories tag="ul" class="list-unstyled menu" active_class="my-active-class">
                    <li>
                        <a <ion:category:is_active> class="<ion:category:active_class />" </ion:category:is_active> href="<ion:category:url />">
                        <ion:category:title /> : <ion:category:nb_articles /> articles
                        </a>
                    </li>
                </ion:categories>
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
