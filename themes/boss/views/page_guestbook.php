<ion:partial view="header" />

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs">
	<div class="container">
        <h1 class="color-green pull-left">Buku Tamu</h1>
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

<div class="container">	
<div class="row">

<div class="col-md-9 pagebar">
<ion:guestbooks:guestbook_save/> 
<a name="guestbook"></a>

<!--<ol class="commentlist">
<ion:guestbooks:guestbooks>
    <li class="comment">
    <div class="avatarimage"><img alt="Avatar" src="<ion:gravatar default="identicon"/>" height="50" width="50" /></div>
    <div class="comment-body">
    <div class="comment-author">
	<a href="#"><ion:name/></a> <span class="comment-date"><ion:created/></span>
    </div>
    <ion:comment/>
    </div>
    </li>
</ion:guestbooks:guestbooks>
</ol>-->

<ion:guestbooks:guestbooks>
<div class="media">
        <a class="pull-left" href="#">
        <img class="media-object" height="50" width="50" src="<ion:gravatar default="identicon"/>" alt=""/>
        </a>
        <div class="media-body">
            <h4 class="media-heading"><ion:name/></h4><span><ion:created/> <!--<a href="#">Reply</a>--></span>
            <p><ion:comment/></p>
            <!-- Displaying admin panel for the current comment -->
            <hr />
        </div>
</div><!--/media-->
</ion:guestbooks:guestbooks>


<!-- Leave a Comment -->
            <h3 class="lined margin-bottom-20">Kirim Pesan</h3>

		<!-- Display a validation flash message when on post saving success -->
		<ion:guestbooks:success_message tag="div" class="success" id="message">
				Your message has been added
				
				<!-- Some JQuery to autohide the flash message, not mandatory at all -->
				<script language="javascript">
					$('#message').delay(2000).fadeOut('slow');					
				</script>
		</ion:guestbooks:success_message>
		
		<!-- Display an error flash message when something bad happens while saving (form incomplete) -->
		<ion:guestbooks:error_message tag="div" class="error" id="message">
				Please check if you filled all required fields
				
				<!-- Some JQuery to autohide the flash message, not mandatory at all -->
				<script language="javascript">
					$('#message').delay(5000).fadeOut('slow');					
				</script>
		</ion:guestbooks:error_message>
<ion:partial view="form_guestbook"/>
<!-- Partial : Footer -->
</div>

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

</div>
</div>
<ion:partial view="footer" />