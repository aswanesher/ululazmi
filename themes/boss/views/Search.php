<ion:partial view="header" />

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-40">
    <div class="container">
        <h1 class="pull-left">Search Result</h1>
        <ul class="pull-right breadcrumb">
            <li><ion:page:breadcrumb home="true" /></li>
        </ul>
    </div>
    <!--/container-->
</div>
<!--/breadcrumbs--><!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">
    <!-- Search Result -->
    <div class="search-page">
        <div class="row">
            <div class="col-md-12">
                <div class="row sidebar margin-bottom-40">
                    <div class="col-md-4 col-md-offset-4">
                        <h2 class="centered">More search</h2>
                        <!-- Search Bar -->
                        <form method="post" action="<ion:base_url />search" role="search" class="form-search">
                            <i class="icon icon-search"></i>
                            <input name="realm" type="text" placeholder="Search" class="form-control">
                        </form>
                        <!-- /Search Bar -->
                    </div>
                </div>
            </div>
        </div>
        <!-- Search Module enclosing tag -->
        
        <div class="row">
        <ion:search>
        <center><h3><ion:lang key="module_search_results_title" /> "<ion:realm />"</h3></center>
        <!-- No results -->
	               <ion:search:results:count is="0">
	                   <ion:lang key="module_search_message_no_results" /><b>"<ion:search:realm />"</b>
	               </ion:search:results:count>
                   
                   <!-- Results found -->
	               <ion:else>
		              <ion:search:results>
                            <ion:result>
                   
        
            <div class="col-md-6">
            
            <div class="booking-blocks">
                <div class="pull-left booking-img">
                    <ion:medias type="picture,video" limit="1">

								

									<ion:media:type is="picture">
										<img src="<ion:media:src size='720,400' method='adaptive' />" />
									</ion:media:type>

									
                    </ion:medias>
                    <ul class="list-unstyled">
                    </ul>
                </div>
                <div style="overflow:hidden;">
                    <h2><a href="<ion:url />"><ion:title /></a></h2>
                    
		              <div class="post-list">
		                <ion:content words="30" />
                        <a href="<ion:url />"><ion:lang key="module_search_read_complete_article" /></a>
		              </div>
		                  
                </div>
            </div>
            </div>
            </ion:result>
		              </ion:search:results>
	               </ion:else>
        </ion:search>
        </div>
        
        
        <!--<div class="text-center">
            <ul class="pagination pagination-m">
                <li><a href="#">Prev</a></li>
                <li><a href="#">1</a></li>
                <li><a href="#">2</a></li>
                <li class="active"><a href="#">3</a></li>
                <li><a href="#">4</a></li>
                <li><a href="#">5</a></li>
                <li><a href="#">6</a></li>
                <li><a href="#">7</a></li>
                <li><a href="#">8</a></li>
                <li><a href="#">Next</a></li>
            </ul>
        </div>-->
    </div>
    <!--/row--><!-- //End Search Result -->
</div>
<!--/container--><!--=== End Content Part ===-->

<ion:partial view="footer" />
