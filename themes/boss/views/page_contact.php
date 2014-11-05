<ion:partial view="header" />

<!-- Google Map -->
<div id="map" class="map margin-bottom-40">
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7922.527613805963!2d107.54658817175357!3d-6.858952696525314!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0000000000000000%3A0xd06f1ef008aca3fc!2sUlul+Azmi!5e0!3m2!1sid!2sid!4v1414535946617" width="100%" height="350" frameborder="0" style="border:0"></iframe>
</div><!---/map-->
<!-- End Google Map -->

<!--=== Content Part ===-->
<div class="container">		
	<div class="row contacts-page">
		<div class="col-md-12">
            <div class="row">
                <div class="col-md-4 col-sm-4">
                    <section><!-- Contacts -->
                        <i class="icon-map-marker"></i>
                        <h5>Ulul Azmi</h5>
                        <ul class="list-unstyled who margin-bottom-20">
                            <li><a href="#">Jalan Cimekar No.14</a></li>
                            <li><a href="#">Cimahi Utara</a></li>
                            <li><a href="#">Cimahi, Jawa Barat 40511</a></li>
                            <li><a href="#">info@ululazmifoundation.org</a></li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-4 col-sm-4">
                    <section><!-- Business Hours -->
                        <i class="icon-time"></i>
                        <h5>Waktu kunjungan</h5>
                        <ul class="list-unstyled">
                            <li>Senin-Jum'at: 08.00-20.00</li>
                            <li>Sabtu: 08.00-17.00</li>
                            <li>Ahad: Libur</li>
                        </ul>
                    </section>
                </div>
                <div class="col-md-4 col-sm-4">
                    <section><!-- Why we are? -->
                        <i class="icon-info"></i>
                        <h5>Why we are?</h5>
                        <p>At vero eos et accusamus et iusto odio dignissimos ducimus qui blanditiis praesentium voluptatum.</p>
                        <ul class="list-unstyled">
                            <li><i class="icon-ok"></i> Odio dignissimos ducimus</li>
                            <li><i class="icon-ok"></i> Blanditiis praesentium volup</li>
                            <li><i class="icon-ok"></i> Eos et accusamus</li>
                        </ul>
                    </section>
                </div>
            </div>
            <hr class="dashed" style="margin-top: 0px;">
            <h1 class="centered">Kirimi kami pesan</h1>
            <p class="p-20 centered">Kirimkan pesan pada kami sebagai bentuk perhatian anda kepada kami. </p>
            
            <!--
			Success message
			Displayed if the form was successfuly validated
		-->
		<ion:form:contact:validation:success is="true">
			<div class="alert-box success">
				<ion:lang key="form_alert_success_title" tag="h4" />
				<ion:lang key="form_alert_success_message" tag="p" />
				<a href="" class="close">&times;</a>
			</div>
		</ion:form:contact:validation:success>

		<!--
			Error message
			Displayed if the form doesn't pass the validation
			the 'form_message_error' key is located in : themes/your_theme/language/xx/tags_lang.php
		-->
		<ion:form:contact:validation:error is="true" >
			<div class="alert-box alert">
				<ion:lang key="form_alert_error_title" tag="h4" />
				<ion:lang key="form_alert_error_message" tag="p" />
				<a href="" class="close">&times;</a>
			</div>
		</ion:form:contact:validation:error>
            
            <form method="post" action="">
            
            <!-- The form name must be set so the tags identify it -->
			<input type="hidden" name="form" value="contact" />
            
                <fieldset>
                    <div class="row">
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <i class="icon-user"></i>
                                <input type="text" name="name" id="name" class="form-control" placeholder="Name"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-6">
                            <div class="form-group">
                                <i class="icon-envelope-alt"></i>
                                <input type="text" class="form-control" placeholder="Email (required)" />
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <i class="icon-terminal"></i>
                        <textarea rows="8" class="form-control" placeholder="Message"></textarea>
                    </div>
                    <div class="form-group">
                        <p><button type="submit" class="btn btn-m btn-m-aqua">Kirim..</button></p>
                    </div>
                </fieldset>
            </form>
        </div><!--/col-md-12-->
    </div><!--/row-->


</div><!--/container-->		
<!--=== End Content Part ===-->

<ion:partial view="footer" />	
