<ion:partial view="header" />

<ion:partial view="page_header" />

<div class="row">
	<div class="large-9 columns">



<!-- Search Module enclosing tag -->
<ion:search>
	  
      
	  <h3><ion:lang key="module_search_results_title" /> "<ion:realm />"</h3>
                <hr />
      
	  <!-- No results -->
	  <ion:search:results:count is="0">
	      <ion:lang key="module_search_message_no_results" /><b>"<ion:search:realm />"</b>
	  </ion:search:results:count>
	  
      
	  <!-- Results found -->
	  <ion:else>
		    <ion:search:results>
		        <ion:result>
                        
		              <div class="post-list">
		                <h4><a href="<ion:url />"><ion:title /></a></h4>
		                <ion:content words="30" />
                        
                        <a href="<ion:url />"><ion:lang key="module_search_read_complete_article" /></a>
		              </div>
		        </ion:result>
		    </ion:search:results>
	  </ion:else>
      
      </ion:search>


	</div>
    <div class="large-3 columns">

		<!--
			Categories :
			Only categories used by articles linked to the current page are displayed
		-->
		<!--<div class="side-block">
		
			<h3><ion:lang key="title_categories" /></h3>

			<ul class="side-nav">
				<ion:page:categories>
					<li>
						<a <ion:category:is_active> class="<ion:category:active_class />" </ion:category:is_active> href="<ion:category:url />"><ion:category:title /> (<ion:category:nb_articles />)</a>
					</li>
				</ion:page:categories>
			</ul>
		
		</div>-->

		<!-- Archives -->
		<!--<div class="side-block">
			
			<h3><ion:lang key="title_archives" /></h3>
			
			<ul class="side-nav">
				<ion:archives with_month="true">
					<li><a class="<ion:archive:active_class />" href="<ion:archive:url />"><ion:archive:period /></a></li>
				</ion:archives>
			</ul>
			
		</div>-->

		<!-- Tags Cloud : Through CSS -->
		<!--<div class="side-block">

			<style type="text/css">

				#tags{
					/*text-align:center;*/
				}
				#tags li{
					list-style:none;
					display:inline-block;
					margin:0 1px 1px 0;
				}
				#tags li a{
					text-decoration:none;
					color:#2BA6CB;
					white-space: nowrap;
					padding: 3px;
					color:#fff;
					background: #2BA6CB;
				}
				#tags li a:hover{
					color:#fff;
					background: #2BA6CB;
					opacity: 1 !important;
				}
				.tag1{font-size:90%;opacity: .65;}
				.tag2{font-size:100%;opacity: .7;}
				.tag3{font-size:110%;opacity: .75;}
				.tag4{font-size:120%;opacity: .8;}
				.tag5{font-size:130%;opacity: .85;}
				.tag6{font-size:140%;opacity: .9;}
				.tag7{font-size:150%;opacity: .95;}

			</style>

			<h3><ion:lang key="title_tags" /></h3>
			<p>CSS tags cloud</p>
			<ul id="tags">
				<ion:page:tags>
					<li ><a class="tag<ion:tag:nb_articles />" href="<ion:tag:url />"><ion:tag:title /></a></li>
				</ion:page:tags>
			</ul>

		</div>-->


		<!-- Tags -->
		<!--<div class="side-block">

			<h3><ion:lang key="title_tags" /></h3>

			<ul class="side-nav">
				<ion:page:tags>
					<li><a class="<ion:tag:active_class />" href="<ion:tag:url />"><ion:tag:title /> (<ion:tag:nb_articles />)</a></li>
				</ion:page:tags>
			</ul>

		</div>-->

        
        <div class="side-block">
           
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

<ion:partial view="footer" />