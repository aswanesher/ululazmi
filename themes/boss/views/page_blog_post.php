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
                    <ion:article:authors />
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
            
            <h3 class="lined margin-bottom-20">Comments</h3>
            
             <!-- display comments count only when comments are activated on article -->
                <ion:comments:comments_allowed>
                      <span class="postcommentsicon">
                            <a href="#reply" title="<ion:lang key='module_comments_fr_title_comments' />">
                            <ion:comments_count/>&nbsp;<ion:lang key="module_comments_fr_title_comments" /> | </a>
                      </span>
                </ion:comments:comments_allowed>

        <ion:comments:comments_allowed>
            <a class="more-link" href="#reply">Reply to this post</a>
        </ion:comments:comments_allowed>

        <!-- //*-------------------------------------------------------------------------------*//      -->

        <? // The "ion:comment_save" tag must be before "ion:comments" tag to have a correct display on new entry page refresh ?>
        <ion:comments:comment_save />

        <?
        /*         * ********
         * Displaying article admin options for comments, only displayed when the user is logged in and belongs to admin group
         * ******** */
        ?>
        <ion:comments:comments_admin>
            <a name="admin"></a>
            <h4>Admin</h4>

            <!-- Display a validation flash message when admin params saving happens -->
            <ion:message tag="div" class="success" id="message">
                Action succeded
                <!-- Some JQuery to autohide the flash message, not mandatory at all -->
                <script language="javascript">
                    $('#message').delay(2000).fadeOut('slow');
                </script>
            </ion:message>

            <!-- Displaying admin panel for the current article -->
            <form method="post" action="">

                <input type="hidden" name="comments_article_update" value="1"/>
                <input type="checkbox" name="comments_allow" value="1" <ion:comments_allowed>checked</ion:comments_allowed> />

                <label for="comments_allow"><span>Allow comments</span></label></p>	

                <button class="button" type="submit">Save</button>
            </form>

        </ion:comments:comments_admin>
            
        <!------------------------------------------------ 
                Displaying comments, when the articles allows them 
        -->

        <ion:comments:comments_allowed>
            <a name="comments"></a>

            <div class="divider"></div>
            
            <ion:comments>
            <div class="media">
                    <a class="pull-left" href="#">
                        <img class="media-object" src="<ion:gravatar default="identicon" />" alt=""/> </a>
                    <div class="media-body">
                        <h4 class="media-heading"><ion:author /><span><ion:date /> <!--<a href="#">Reply</a>--></span></h4>
                        <p><ion:content /></p>
                        <!-- Displaying admin panel for the current comment -->
                        <ion:comments_admin>
                            <form method="post" action="<ion:url/>#admin">
                                <input class="form-control" type="hidden" name="id_article_comment" value="<ion:id/>"/>
                                <input type="checkbox" name="comment_delete" value="1" />
                                <label for="comments_allow"><span>Delete comment</span></label>	
                                <button class="button" type="submit">Go</button>
                            </form>
                        </ion:comments_admin>
                        <hr />
                    </div>
            </div><!--/media-->
            </ion:comments>

            <a name="reply"></a>

            
            <!-- Leave a Comment -->
            <h3 class="lined margin-bottom-20">Leave a Comment</h3>

            <!-- Display a validation flash message when on post saving success -->
            <ion:success_message tag="div" class="success" id="message">
                Your message has been added

                <!-- Some JQuery to autohide the flash message, not mandatory at all -->
                <script language="javascript">
                    $('#message').delay(3000).fadeOut('slow');
                </script>
            </ion:success_message>

            <!-- Display an error flash message when something bad happens while saving (form incomplete) -->
            <ion:error_message tag="div" class="error" id="message">
                Please check if you filled all required fields

                <!-- Some JQuery to autohide the flash message, not mandatory at all -->
                <script language="javascript">
                    $('#message').delay(3000).fadeOut('slow');
                </script>
            </ion:error_message>


            <ion:partial view="form_blog_comment" /> 

        </ion:comments:comments_allowed>
            
            </ion:page:article>
            
            
            
            
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
