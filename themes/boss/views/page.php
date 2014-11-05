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
