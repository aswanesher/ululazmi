<ion:partial view="header" />

<!--=== Breadcrumbs ===-->
<div class="breadcrumbs margin-bottom-50">
	<div class="container">
        <h1 class="color-green pull-left">Gallery</h1>
        <ul class="pull-right breadcrumb">
            <li><a href="index.html">Home</a> </li>
            <li><a href="">Pages</a> </li>
            <li class="active">Gallery</li>
        </ul>
    </div><!--/container-->
</div><!--/breadcrumbs-->
<!--=== End Breadcrumbs ===-->

<!--=== Content Part ===-->
<div class="container">				
	<div class="row gallery">
        <div class="thumbnails">
            <ion:medias type="picture" size="250, 250" >
            <div class="col-md-3 col-sm-6">
                <a class="thumbnail fancybox-button zoomer" data-rel="fancybox-button" title="Project #1" href="<ion:media:src />">
                    <div class="overlay-zoom">	
                        <img src="<ion:media:src />">
                        <div class="zoom-icon"></div>					
                    </div>												
                </a>
            </div>
            </ion:medias>
        </div><!--/thumbnails-->
    </div><!--/row-->

    <div class="row">
        <div class="col-md-12">
            <div class="text-center">
                <ul class="pagination pagination-m">
                    <li><a href="#">Prev</a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#">2</a></li>
                    <li class="active"><a>3</a></li>
                    <li><a href="#">4</a></li>
                    <li><a href="#">5</a></li>
                    <li><a href="#">Next</a></li>
                </ul>
            </div>
        </div>
    </div>

</div><!--/container-->		
<!--=== End Content Part ===-->

<ion:partial view="footer" />	
