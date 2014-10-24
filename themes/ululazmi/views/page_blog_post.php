<ion:partial view="header" />

<ion:partial view="page_header" />

<div class="row">
	<div class="large-9 columns">
	
		<?php if ('<ion:article:category field="title" />' != '') :?>

			<p id="category_highlight"><em>//</em> <ion:lang key="you_are_browsing_category" /> : <span><ion:article:category field="title" /></span></p>
	
		<?php endif; ?>

        <div class="post">
        
			<ion:page:article>

				<h3><ion:title /></h3>
                             

				<ion:date format="complete" tag="p" class="date"/>

                <!-- This article categories -->
                <p class="categories">
                	<ion:lang key="categories" /> : <ion:categories:list link="true" separator=", " />
				</p>
                <hr />

				<!-- Pictures slider -->
					<div id="slider-container">
						<div id="slider">
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
					</div>

				<!-- content -->
				<ion:content link_key="title" link_title="subtitle" />

            </ion:page:article>
        </div>
		
	</div>

	<div class="large-3 columns">
        
        <div class="side-block">
		
			<h4>Kategori</h4>

			<ul class="side-nav">
				<ion:page:categories>
					<li>
						<a <ion:category:is_active> class="<ion:category:active_class />" </ion:category:is_active> href="<ion:category:url />"><ion:category:title /> (<ion:category:nb_articles />)</a>
					</li>
				</ion:page:categories>
			</ul>
		
		</div>
        
		<!-- Tags -->
		<div class="side-block">
			<h4>Donasi</h4>

				<table width="100%">
                        <tr>
                        <td width="120"><strong>Bank BRI</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Bank BNI</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Bank Mandiri</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Mandiri Syariah</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr>
                        <td><strong>Bank BJB</strong></td>
                        <td>:</td>
                        <td>123123123123</td>
                        </tr>
                        <tr><td colspan="3" align="center"><a href="#" class="btn btn-danger">Lihat panduan donasi >></a></td></tr>
                        </table>

		</div>
        
        <div class="side-block">
        <h4>Sosial Media</h4>

			<iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FUlul-Azmi-Foundation%2F186029634776673&amp;width=230&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=200" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:200px;" allowtransparency="true"></iframe>
        </div>
	</div>
</div>


<!-- Partial : Footer -->
<ion:partial view="footer" />