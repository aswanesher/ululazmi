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
            
        </div><!--/col-md-9-->
        
        

        <div class="col-md-3 sidebar">
            <section>
                <!-- Search Bar -->
                <form method="post" action="<ion:base_url />search" role="search" class="form-search">
                    <i class="icon icon-search"></i>
                    <input name="realm" type="text" placeholder="Cari.." class="form-control">
                </form>
                <!-- /Search Bar -->
            </section>
            
            <!-- Posts -->
			<section>
                <h3>Donasi</h3>
                <table class="table">
                <tbody>
                    <tr class="success">
                        <td>BRI</td>
                        <td>013.701.000.722.302</td>
                    </tr>
                    <tr class="warning">
                        <td>BNI</td>
                        <td>020.572.185.0</td>
                    </tr>
                    <tr class="success">
                        <td>Mandiri</td>
                        <td>703.40.3919.9</td>
                    </tr>
                    <tr class="warning">
                        <td>BJB</td>
                        <td>001.829.309.910.0</td>
                    </tr>
                    <tr class="info">
                        <td colspan="2" align="center"><a href="#"><button style="width: 100%;" class="btn btn-m btn-m-default" type="button"><strong>Panduan Donasi</strong></button></a></td>
                    </tr>
                </tbody>
            </table>
            </section>
            
            <section>
                <!-- Photo Stream -->
                <h3>Sosial media</h3>
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FUlul-Azmi-Foundation%2F186029634776673&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=280" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:280px;" allowtransparency="true"></iframe>
                <iframe width="260" height="215" src="//www.youtube.com/embed/w3uFb9Lgr_o" frameborder="0" allowfullscreen></iframe>
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
