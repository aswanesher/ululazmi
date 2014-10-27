<ion:partial view="header" />


<!--=== Slider ===-->
<div id="sequence-theme" class="sequence-inner">
    <div id="sequence">
        <img class="prev" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/bt-prev1.png" alt="Previous" />
        <img class="next" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/bt-next1.png" alt="Next" />
        <ul>
            <li class="animate-in">
                <div class="info">
                    <h2>Built using Sequence.js</h2>
                    <p>The Responsive Slider with Advanced CSS3 Transitions</p>
                </div>
                <img alt="Blue Sky" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/bg-clouds.png" class="sky" style="">
                <img class="balloon" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/balloon.png" alt="Balloon" />
            </li>
            <!--<li class="animate-in">
                <div class="info">
                <ion:medias type="picture" size="1670" limit="1">
                    <center>
                        <img src="<ion:media:base_path />slider/gbanner6.jpg "  alt="<ion:media:alt />" />
                    </center>
                </ion:medias>
                </div>
            </li>-->
            <li>
                <div class="info">
                    <h2>Creative Control</h2>
                    <p>Create unique sliders using CSS3 transitions -- no jQuery knowledge required!</p>
                </div>
                <img alt="Blue Sky" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/bg-clouds.png" class="sky" style="">
                <img class="aeroplane" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/aeroplane.png" alt="Aeroplane" />
            </li>
            <li>
                <div class="info">
                    <h2>Cutting Edge</h2>
                    <p>Supports modern browsers, old browsers (IE8+), touch devices and responsive designs</p>
                </div>
                <img alt="Blue Sky" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/bg-clouds.png" class="sky" style="">
                <img class="kite" src="<ion:theme_url />assets/plugins/horizontal-parallax/images/kite.png" alt="Kite" />
            </li>
        </ul>
    </div>
</div><!--/sequence-theme-->
<!--=== End Slider ===-->

<!--=== featured Block ===-->
<div class="content-featured margin-bottom-40">
    <div class="container">
        <div class="col-md-12">
            <p>
                <ion:page:subtitle/>
                <a href="#">
                    More
                    <i class="icon-chevron-sign-right" style="margin: 0 0 0 7px;"></i>
                </a>
            </p>
        </div>
    </div>
</div>
<!--=== End featured ===-->

<!--=== Content Part ===-->
<div class="container">		
    <div class="row">
        <!-- Left Sidebar(Content Part) -->        
        <div class="col-md-9">
            <!-- Our Services -->
            <div><h3 class="lined">Sekilas tentang kami</h3></div>
            <p></p><br />
            <div class="row">
                <div class="servive-block servive-block-in">
                <ion:page:articles limit="3">
                    <div class="col-md-4 col-sm-4">
                        <div class="servive-block-inner">
                            <h4><a href="<ion:article:url />"><ion:article:title /></a></h4>
                            <ion:article:content />
                            <!--<h4><a href="#">Lorem sequat ipsum de</a></h4>
                            <p><i class="icon-bell"></i></p>
                            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine.</p>-->
                            <p>
      						    <a class="expand button" title="<ion:article:title />" href="<ion:article:url />">Read more</a>
           					</p>
                        </div>
                    </div>
                    <!--<div class="col-md-4 col-sm-4">
                        <div class="servive-block-inner">
                            <h4><a href="#">Lorem sequat ipsum de</a></h4>
                            <p><i class="icon-bullhorn"></i></p>
                            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine.</p>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4">
                        <div class="servive-block-inner">
                            <h4><a href="#">Lorem sequat ipsum de</a></h4>
                            <p><i class=" icon-lightbulb"></i></p>
                            <p>Donec id elit non mi porta gravida at eget metus id elit mi egetine.</p>
                        </div>
                    </div>-->
                    
                </ion:page:articles>
                </div><!--/welcome-block-->
            </div><!--/row-->
        
            

            <!-- Tabs -->
            <div><h3 class="lined">Seputar Ulul Azmi</h3></div>
            <ul class="nav nav-tabs tabs">
                <li class="active"><a href="#artikel" data-toggle="tab">Artikel</a></li>
                <li><a href="#berita" data-toggle="tab">Berita</a></li>
                <li><a href="#infoyayasan" data-toggle="tab">Info Yayasan</a></li>
                <li><a href="#agenda" data-toggle="tab">Agenda</a></li>
            </ul><!--/tabs-->
            
            <div class="tab-content margin-bottom-40">
                <div class="tab-pane active" id="artikel">
                    <!--<img class="pull-left lft-img-margin img-width-200" src="<ion:theme_url />assets/img/work/work1.jpg" alt="" />
                    <h4>Heading Sample 1</h4>
                    <p>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac felis consectetur id.<strong> Donec eget orci metus.</strong></p>--> 
				<ion:page id="artikel">

					<ion:articles limit="5">

						<ion:article>


								
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									

									<div class="pull-left lft-img-margin img-width-120">

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
												<img  src="<ion:media:src size='120,50' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>
                                    
                                    <a href="<ion:url />"><h5><ion:title /></h5></a>
									<div class="medium-8 large-8 columns">
										<ion:content paragraph="1" />
									</div>
						</ion:article>
					</ion:articles>
				</ion:page>
                </div>
                <div class="tab-pane" id="berita">
                    <!--<h4>Heading Sample 2</h4>
                    <p><img class="pull-left lft-img-margin img-width-200" src="<ion:theme_url />assets/img/work/work3.jpg" alt="" /> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, <strong>ac adipiscing nunc.</strong> Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum id. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac <strong>interdum ullamcorper.</strong></p>-->
                    <ion:page id="berita">

					<ion:articles limit="5">

						<ion:article>


								
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<a href="<ion:url />"><h5><ion:title /></h5></a>

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
												<img class="pull-left lft-img-margin img-width-200" src="<ion:media:src size='300,200' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>

									<div class="medium-8 large-8 columns">
										<ion:content paragraph="1" />
									</div>

								
						</ion:article>
					</ion:articles>
				</ion:page>
                </div>
                <div class="tab-pane" id="infoyayasan">
                    <ion:page id="info-yayasan">

					<ion:articles limit="5">

						<ion:article>


								
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<a href="<ion:url />"><h5><ion:title /></h5></a>

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
												<img class="pull-left lft-img-margin img-width-200" src="<ion:media:src size='300,200' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>

									<div class="medium-8 large-8 columns">
										<ion:content paragraph="1" />
									</div>

								
						</ion:article>
					</ion:articles>
				</ion:page>
                </div>
                <div class="tab-pane" id="agenda">
                    <ion:page id="agenda">

					<ion:articles limit="5">

						<ion:article>


								
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<a href="<ion:url />"><h5><ion:title /></h5></a>

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
												<img class="pull-left lft-img-margin img-width-200" src="<ion:media:src size='300,200' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>

									<div class="medium-8 large-8 columns">
										<ion:content paragraph="1" />
									</div>

								
						</ion:article>
					</ion:articles>
				</ion:page>
                </div>
            </div><!--/tab-content-->

            <!-- Example Blocks  -->
            <div class="row">
                <div class="col-md-6">
                    <div><h3 class="lined">Program Panti</h3></div>
                    <!--<p><strong>Vivamus imperdiet condimentum diam, eget placerat felis consectetur id.</strong> Donec eget orci metus, vivamus imperdiet condimentum.</p>
                    <ul class="list-unstyled aqua-icon">
                        <li><i class="icon-ok"></i> Donec id elit non mi porta gravida</li>
                        <li><i class="icon-ok"></i> Responsive Bootstrap Template</li>
                        <li><i class="icon-ok"></i> Corporate and Creative</li>
                        <li><i class="icon-ok"></i> Responsive Bootstrap Template</li>
                        <li><i class="icon-ok"></i> Corporate and Creative</li>
                    </ul><br/>-->
                    <ion:page id="program-yatim">

					<ion:articles limit="5">

						<ion:article>


								
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<a href="<ion:url />"><h5><ion:title /></h5></a>

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
												<img class="pull-left lft-img-margin img-width-120" src="<ion:media:src size='120,50' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>

									<div class="medium-8 large-8 columns">
										<ion:content paragraph="1" />
									</div>

								
						</ion:article>
					</ion:articles>
				</ion:page>
                </div>
                <div class="col-md-6">
                    <div><h3 class="lined">Program Wirausaha</h3></div>
                    <!--<p><img class="pull-left lft-img-margin img-width-200 margin-bottom-40" src="<ion:theme_url />assets/img/work/work4.jpg" alt="" /> Vivamus cond imentum diam, eget placerat felis consectetur id. Donec eget orci metus, Vivamus imperdiet condimentum diam, eget placerat felis consectetur id. Donec eget orci metus, ac adipiscing  ante ac interdum ullamcorper. Donec eget orci metus, ac adipiscing nunc. Pellentesque fermentum, ante ac interdum. <a class="read-more" href="#">Read more..</a></p>-->
                    <ion:page id="program-wirausaha">

					<ion:articles limit="5">

						<ion:article>


								
									<ion:article:static:flag:items limit="1">
										<div class="flag"><span><ion:text:value /></span></div>
									</ion:article:static:flag:items>

									<a href="<ion:url />"><h5><ion:title /></h5></a>

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
												<img class="pull-left lft-img-margin img-width-120" src="<ion:media:src size='120,50' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>


									</div>

									<div class="medium-8 large-8 columns">
										<ion:content paragraph="1" />
									</div>

								
						</ion:article>
					</ion:articles>
				</ion:page>
                </div>
            </div><!--/row-->
            
            <!-- Recent Works -->
            <div><h3 class="lined">Kegiatan</h3></div>
            <div class="row margin-bottom-40">
                <ul id="list" class="bxslider recent-work">
                    <li>
                        <!--<a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/2.jpg" alt="" /></em>
                            <span>
                                <strong>Happy New Year</strong>
                                <i>Anim pariatur cliche reprehenderit</i>
                            </span>
                        </a>-->
                        
                        <ion:page id="kegiatan">

                        <ion:articles>
                        
						<ion:article>                                    
                          <a href="<ion:url />">          
                                    
									<!--<div class="hide-for-small medium-4 large-4 columns">-->
                                        
                                        <em class="overflow-hidden">
										<ion:medias type="picture" limit="1">
											<ion:media:type is="picture">
												<img src="<ion:media:src size='209,180' method='adaptive' />" />
											</ion:media:type>

										</ion:medias>
                                        </em>


									<!--</div>-->
                                    
                                    <span>
									<strong><h5><ion:title /></h5></strong>
                                    </span>

							</a>	
						</ion:article>
                        
					</ion:articles>
				</ion:page>
                        
                    </li>
                    <!--<li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/9.jpg" alt="" /></em>
                            <span>
                                <strong>Award Winning Agency</strong>
                                <i>Responsive Bootstrap Template</i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/4.jpg" alt="" /></em>
                            <span>
                                <strong>Wolf Moon Officia</strong>
                                <i>Pariatur prehe cliche reprehrit</i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/5.jpg" alt="" /></em>
                            <span>
                                <strong>Food Truck Quinoa Nesciunt</strong>
                                <i>Craft labore wes anderson cred</i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/6.jpg" alt="" /></em>
                            <span>
                                <strong>Happy New Year</strong>
                                <i>Anim pariatur cliche reprehenderit</i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/7.jpg" alt="" /></em>
                            <span>
                                <strong>Award Winning Agency</strong>
                                <i>Responsive Bootstrap Template</i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/8.jpg" alt="" /></em>
                            <span>
                                <strong>Wolf Moon Officia</strong>
                                <i>Pariatur prehe cliche reprehrit</i>
                            </span>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <em class="overflow-hidden"><img src="<ion:theme_url />assets/img/carousel/9.jpg" alt="" /></em>
                            <span>
                                <strong>Food Truck Quinoa Nesciunt</strong>
                                <i>Craft labore wes anderson cred</i>
                            </span>
                        </a>
                    </li>
                    -->
                </ul>        
            </div><!--/row-->
            <!-- //End Recent Works -->
            
        </div><!--/col-md-9-->
        
        

        <!-- Right Sidebar -->        
        <div class="col-md-3 sidebar">
            <!-- Posts -->
			<div class="posts margin-bottom-30">
                <div><h3 class="lined">Donasi</h3></div>
                <div class="media-list latest-posts">
                    <ion:medias type="picture" limit="1">
                    <center>
                    <img src="<ion:media:base_path />donasi.jpg"  alt="<ion:media:alt />" />
                    </center>
                    </ion:medias>
                </div>
            </div>
            
            <!-- Why Choose Us -->
            <div class="who margin-bottom-30">
                <div><h3 class="lined">Kontak kami</h3></div>
                <p></p>
                <ul class="list-styled">
                    <li><a href="#"><i class="icon-envelope"></i>admin@ululazmifoundation.org</a></li>
                    <li><a href="#"><i class="icon-phone"></i>022-2001234</a></li>
                    <li><a href="#"><i class="icon-globe"></i>http://ululazmifoundation.org/</a></li>
                    <li><a href="#"><i class="icon-envelope"></i>08572221234</a></li>
                </ul>
            </div>

            <!-- Latest Tweets -->
            <div class="blog-twitter margin-bottom-30">
                <div><h3 class="lined">Sosial Media</h3></div>
                <iframe src="http://www.facebook.com/plugins/likebox.php?href=http%3A%2F%2Fwww.facebook.com%2Fpages%2FUlul-Azmi-Foundation%2F186029634776673&amp;width=260&amp;colorscheme=light&amp;show_faces=true&amp;border_color&amp;stream=false&amp;header=false&amp;height=200" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:260px; height:200px;" allowtransparency="true"></iframe>
                        
                        <iframe width="260" height="215" src="//www.youtube.com/embed/w3uFb9Lgr_o" frameborder="0" allowfullscreen></iframe>
            </div>
            
            <!-- Photo Stream -->
            <div class="margin-bottom-30">
            	<div><h3 class="lined">Galeri Foto</h3></div>
                <ul class="list-unstyled blog-ads row">
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/5.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/6.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/8.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/10.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/11.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/1.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/2.jpg"></a></li>
                    <li class="col-md-3 col-sm-2 col-xs-2"><a href="#"><img class="hover-effect" alt="" src="<ion:theme_url />assets/img/sliders/elastislide/7.jpg"></a></li>
                </ul>
            </div>
        </div><!--/col-md-3-->
    </div><!--/row-->
    <!-- //End Container -->

    <!-- Our Clients -->
    <!--<div id="clients-flexslider" class="flexslider home clients">
        <h3 class="lined margin-bottom-20">Our Clients</h3>
        <ul class="slides">
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/hp_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/hp.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/igneus_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/igneus.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/vadafone_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/vadafone.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/walmart_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/walmart.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/shell_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/natural_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/aztec_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/aztec.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/gamescast_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/cisco_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/cisco.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/everyday_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/cocacola_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/cocacola.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/spinworkx_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/shell_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/shell.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/natural_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/natural.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/gamescast_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/gamescast.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/everyday_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/everyday.png" class="color-img" alt="" />
                </a>
            </li>
            <li>
                <a href="#">
                    <img src="<ion:theme_url />assets/img/clients/spinworkx_grey.png" alt="" /> 
                    <img src="<ion:theme_url />assets/img/clients/spinworkx.png" class="color-img" alt="" />
                </a>
            </li>
        </ul>
    </div><!--/flexslider-->
    <!-- //End Our Clients -->
</div><!--/container-->		
<!--=== End Content Part ===-->

<ion:partial view="footer" />