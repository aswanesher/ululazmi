<ion:partial view="header" />
    
    <header id="myCarousel" class="carousel slide">
        <div class="row">

			<div class="twelve columns">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill">
                <ion:medias type="picture" size="1000" limit="1">
                <center>
                <img src="<ion:media:base_path />slider/gbanner6.jpg" alt="<ion:media:alt />" />
                </center>
                </ion:medias>
                </div>
                <div class="carousel-caption">
                    <?php
				/*
				 * Page's title
				 *
				 * Displayed with the tag "h1"
				 * If no title is set, no empty tag will be rendered
				 *
				 */
				?>
                <?php
				/*
				 * Page's subtitle
				 *
				 * We use the native PHP method "nl2br" to render the newlines
                 * in the subtitle
				 *
				 */
				?>
                </div>
            </div>
            <div class="item">
                <div class="fill">
                <ion:medias type="picture" limit="1">
                <center>
                <img src="<ion:media:base_path />slider/gbanner8.jpg"  alt="<ion:media:alt />" />
                </center>
                </ion:medias>
                </div>
            </div>
            </div></div>
        </div>

        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
    
	<!--<header id="homepage">
        <div class="row">

			<div class="twelve columns">

				<?php
				/*
				 * Page's title
				 *
				 * Displayed with the tag "h1"
				 * If no title is set, no empty tag will be rendered
				 *
				 */
				?>
				<ion:page:title tag="h1"/>

				<?php
				/*
				 * Page's subtitle
				 *
				 * We use the native PHP method "nl2br" to render the newlines
                 * in the subtitle
				 *
				 */
				?>
                <ion:page:subtitle tag="h2" function="nl2br" />

			</div>

        </div>
	</header>-->

	<section id="main-content">


        <!-- Portfolio Section -->
        <div class="row">
            <div class="col-lg-12">
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive img-portfolio img-hover" src="<ion:media:base_path />pict/latest8.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive img-portfolio img-hover" src="<ion:media:base_path />pict/latest2.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </a>
            </div>
            <div class="col-md-4 col-sm-6">
                <a href="portfolio-item.html">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img class="img-responsive img-portfolio img-hover" src="<ion:media:base_path />pict/latest3.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </a>
            </div>
        </div>
        <br /><br<!-- /.row -->

		<div class="row">

			<?php
			/*
			 * Current page article
			 * -> Home page
			 *
			 * We limit to the 4 first, as we want 4 blocks.
			 *
			 */
			?>
			<ion:page:articles limit="4">
				<div class="medium-6 large-3 columns">

					<?php
					/*
					 * Article's title
					 *
					 */
					?>
					<h5><ion:article:title /></h5>

					<?php
					/*
					 * Article's content
					 *
					 */
					?>
					<div class="home-block">
						<ion:article:content />
					</div>

					<?php
					/*
					 * Article's URL
					 * The URL of one article is either its own URL or the URL of the target article.
					 * (See create links in the doc)
					 *
					 */
					?>
					<p>
						<a class="expand button" title="<ion:article:title />" href="<ion:article:url />">Read more</a>
					</p>
				</div>
			</ion:page:articles>
		</div>



		<?php
		/*
		 * Latest post : From "blog" page
		 *
		 */
		?>
		<div class="row">

			<div class="large-6 columns">


				<?php
				/*
				 * Lang key
				 * These translations are globally available.
				 * They are editable from panel Content > Translations
				 *
				 * Once you declare one in one view, you are able to set its translation in this panel.
				 *
				 */
				?>
				<h5 class="title">
					<legend>Artikel</legend>
				</h5>


				<?php
				/*
				 * Articles from another page : Blog
				 *
				 * The "name" of the page is "blog".
				 * We use this name as ID to get the page.
				 *
				 * This name can be found in the page options, when editing it from ionize.
				 *
				 */
				?>
				<ion:page id="artikel">

					<ion:articles limit="2">

						<ion:article>

							<div class="home-last-post row">

								<a href="<ion:url />">

									<?php
									/*
									 * Static Item : Flag
									 * If one Static item called "flag" is linked to the article,
									 * the content of the field called "text" will be displayed.
									 *
									 * As we limit to 1, only the first flag will be used.
									 *
									 */
									?>
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<h5><ion:title /></h5>

									<div class="hide-for-small medium-4 large-4 columns">

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


									</div>

									<div class="medium-8 large-8 columns">
										<?php
										/*
										 * Content, limited to the first paragraph
										 */
										?>
										<ion:content paragraph="1" />

									</div>

								</a>

							</div>
						</ion:article>
					</ion:articles>
				</ion:page>
			</div>
            
            <div class="large-6 columns">


				<?php
				/*
				 * Lang key
				 * These translations are globally available.
				 * They are editable from panel Content > Translations
				 *
				 * Once you declare one in one view, you are able to set its translation in this panel.
				 *
				 */
				?>
				<h5 class="title">
					Berita
				</h5>


				<?php
				/*
				 * Articles from another page : Blog
				 *
				 * The "name" of the page is "blog".
				 * We use this name as ID to get the page.
				 *
				 * This name can be found in the page options, when editing it from ionize.
				 *
				 */
				?>
				<ion:page id="berita">

					<ion:articles limit="2">

						<ion:article>

							<div class="home-last-post row">

								<a href="<ion:url />">

									<?php
									/*
									 * Static Item : Flag
									 * If one Static item called "flag" is linked to the article,
									 * the content of the field called "text" will be displayed.
									 *
									 * As we limit to 1, only the first flag will be used.
									 *
									 */
									?>
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<h5><ion:title /></h5>

									<div class="hide-for-small medium-4 large-4 columns">

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


									</div>

									<div class="medium-8 large-8 columns">
										<?php
										/*
										 * Content, limited to the first paragraph
										 */
										?>
										<ion:content paragraph="1" />

									</div>

								</a>

							</div>
						</ion:article>
					</ion:articles>
				</ion:page>
			</div>
 	 	</div>
        
        <!-- Marketing Icons Section -->
        <div class="row">
            
            <div class="col-md-4">
                <div class="panels panels-default">
                    <div class="panels-heading">
                        <h5><span class="glyphicon glyphicon-heart"></span>&nbsp;Donasi</h5>
                    </div>
                    <div class="panels-body">
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
                </div>
                
                <div class="panels panels-default">
                    <div class="panels-heading">
                        <h5><span class="glyphicon glyphicon-earphone"></span> Konsultasi</h5>
                    </div>
                    <div class="panels-body">
                        <table width="100%">
                        <tr>
                        <td>Telp</td> <td>:</td> <td>022-2001234</td>
                        </tr>
                        <tr>
                        <td>
                        Email
                        </td> 
                        <td>:</td>
                        <td>022-2001234</td>
                        </tr>
                        <tr>
                        <td>SMS</td> <td>:</td> <td>08572221234</td>
                        </tr>
                        </table>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="panels panels-default">
                    <div class="panels-heading">
                        <h5><span class="glyphicon glyphicon-globe"></span> Social Media</h5>
                    </div>
                    <div class="panels-body" align="center">
                        <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FUlul-Azmi-Foundation%2F186029634776673&amp;width=230&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=200" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:230px; height:200px;" allowtransparency="true"></iframe>
                        
                        <iframe width="230" height="215" src="//www.youtube.com/embed/w3uFb9Lgr_o" frameborder="0" allowfullscreen></iframe>
                        
                    </div>
                </div>
            </div>
            
            <div class="col-md-4">
                <div class="panels panels-default">
                    <div class="panels-heading">
                        <h5><span class="glyphicon glyphicon-stats"></span> Statistik Kunjungan</h5>
                    </div>
                    <div class="panels-body">
                        <table width="100%" cellspacing="2">
	<tbody><tr><td width="40%">
	<img src="../images/9.gif">&nbsp; Visitors </td><td>: <b>15539</b>	 visitors</td></tr><tr><td>
	<img src="../images/9.gif">&nbsp; Hits </td><td>: <b>20271</b> hits</td></tr><tr><td>
	<img src="../images/10.gif">&nbsp; Today </td><td>: <b><b>34</b></b> users</td></tr><tr><td>
	<img src="../images/10.gif">&nbsp; Online </td><td>: <b><b>1</b></b> users</td></tr></tbody></table>
                    <br /><legend></legend><center>Sejak 20 April 2011</center>
                    </div>
                </div>
            </div>
            
            
            
            
            
        </div>
        <!-- /.row -->
        
	</section>

<ion:partial view="footer" />

