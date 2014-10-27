
<!--=== Footer ===-->
<div class="footer">
    <div class="container widgets">
        <div class="row">
            <div class="col-md-3 col-sm-6">
                <!-- Contact Us -->
                <div><h3>Services</h3></div>
                <ul class="list-unstyled list-services">
                    <li><a href="#">SEO and PPC</a></li>
                    <li><a href="#">Responsive Design</a></li>
                    <li><a href="#">Social Media Marketing</a></li>
                    <li><a href="#">Landing Page Optimization</a></li>
                    <li><a href="#">WordPress Themes Development</a></li>
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Blog Latest Tweets -->
                <div class="blog-twitter">
                    <div><h3>Latest Tweets</h3></div>
                    <p><a href="">@some</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/sBav7dm</a> <span>5 hours ago</span></p>
                    <p><a href="">@boss</a> At vero eos et accusamus et iusto odio dignissimos. <a href="#">http://t.co/f58Ddg4</a> <span>8 hours ago</span></p>
                 </div>
            </div>
            <div class="clearfix visible-sm"></div>
            <div class="col-md-3 col-sm-6">
                <!-- Blog Tags -->
                <div><h3>Blog Tags</h3></div>
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
                </ul>
            </div>
            <div class="col-md-3 col-sm-6">
                <!-- Monthly Newsletter -->
                <div><h3>Contact form</h3></div>
                <form>
                    <fieldset>
                        <div class="form-group">
                            <i class="icon-user"></i>
                            <input type="text" id="Name" class="form-control" placeholder="Name (required)" />
                        </div>
                        <div class="form-group">
                            <i class="icon-envelope-alt"></i>
                            <input type="text" class="form-control" placeholder="Email (required)" />
                        </div>
                        <div class="form-group">
                            <i class="icon-terminal"></i>
                            <textarea rows="8" class="form-control" placeholder="Subject"></textarea>
                        </div>
                        <div class="form-group">
                            <p><button type="submit" class="btn btn-m btn-m-aqua">Send</button></p>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div><!--/row-->
    </div><!--/container-->
</div><!--/footer-->
<!--=== End Footer ===-->

<!--=== Copyright ===-->
<div class="copyright">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <p>2014 &copy; <a href="<ion:home_url />"><ion:site_title /></a>. ALL Rights Reserved. | Powered By OWN IT</p>
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <ul class="list-inline socials">
                    <li>
                        Follow Us:
                    </li>
                    <li>
                        <a href="#"><i class="icon-rss"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-facebook"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-twitter"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-google-plus"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-pinterest"></i></a>
                    </li>
                    <li>
                        <a href="#"><i class="icon-linkedin"></i></a>
                    </li>
                </ul>
            </div>
        </div><!--/row-->
    </div><!--/container-->
</div><!--/copyright-->
<!--=== End Copyright ===-->

<!-- JS Global Compulsory -->           
<script type="text/javascript" src="<ion:theme_url />assets/js/jquery-1.8.2.min.js"></script>
<script type="text/javascript" src="<ion:theme_url />assets/js/modernizr.custom.js"></script>        
<script type="text/javascript" src="<ion:theme_url />assets/plugins/bootstrap/js/bootstrap.min.js"></script> 
<!-- JS Implementing Plugins -->           
<script type="text/javascript" src="<ion:theme_url />assets/plugins/flexslider/jquery.flexslider-min.js"></script>
<script type="text/javascript" src="<ion:theme_url />assets/plugins/horizontal-parallax/js/sequence.jquery-min.js"></script>
<script type="text/javascript" src="<ion:theme_url />assets/plugins/horizontal-parallax/js/horizontal-parallax.js"></script>
<script type="text/javascript" src="<ion:theme_url />assets/plugins/bxslider/jquery.bxslider.js"></script>
<script type="text/javascript" src="<ion:theme_url />assets/plugins/back-to-top.js"></script>
<script type="text/javascript" src="<ion:theme_url />assets/plugins/jquery.sticky.js"></script>
<!-- JS Page Level -->           
<script type="text/javascript" src="<ion:theme_url />assets/js/app.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function() {
        App.init();
        App.initSliders();
        App.initBxSlider();
		// make main menu sticky
		var ieversion = 0;
		if (/MSIE (\d+\.\d+);/.test(navigator.userAgent)){ //test for MSIE x.x;
			ieversion=new Number(RegExp.$1); // capture x.x portion and store as a number
		}
		if (( ! /Android|webOS|iPhone|iPad|iPod|BlackBerry/i.test(navigator.userAgent) ) && ((ieversion >= 10) || (ieversion == 0))) {
			$(".header").sticky({topSpacing: 0});
		} else {}		
    });
</script>
<!--[if lt IE 9]>
	<script src="assets/js/respond.js"></script>
<![endif]-->		

</body>
</html>	