<ion:partial view="header" />

<ion:partial view="page_header" />
	
	<!-- content -->
	<div id="content-outer" class="clear"><div id="content-wrap">
	
		<div id="content">
		<ion:page:articles>
			
			<ion:article>

                <div class="post-list">

					<!--
						Display the first media, if it is one video or picture
					-->
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
							<img src="<ion:media:src size='300,200' method='adaptive' />" />
						</ion:media:type>

                    </ion:medias>

                    <h2><a href="<ion:url />"><ion:title class="pagetitle" /></a></h2>

                    <p class="date"><ion:date format="complete" /></p>


                    <!-- This article categories -->
                    <p class="categories">
                        <ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " />
                    </p>

                    <!-- We limit the display to to first paragraph (first <p></p>) -->
                    <ion:content paragraph="1" />

					<!-- Tags -->
					<ion:article:tags:list link="true" separator=", " tag="p" class="categories" prefix="lang('title_tags') : " />
                                        <ion:comments:comments_count/> comments
				</div>

			</ion:article>
		
		</ion:page:articles>


		<!-- Pagination -->
		<ion:page:articles:pagination tag="div" class="pagination" />
		
			<div id="right">
							
				<div class="sidemenu">	
					<h3>Categories</h3>
					<ul>				
						<ion:categories>
				
							<li><a href="<ion:url />"><ion:title /></a></li>
				
						</ion:categories>
					</ul>	
				</div>
							
				<div class="sidemenu">
					<h3>Archive</h3>
					<ul>
				<ion:archives with_month="true">
					<li><a class="<ion:archive:active_class />" href="<ion:archive:url />"><ion:archive:period /></a></li>
				</ion:archives>
						
					</ul>
				</div>		
					
			</div>		
		
		</div>	
			
	<!-- content end -->	
	</div></div>
<ion:partial view="footer" />