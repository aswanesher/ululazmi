<ion:partial view="header" />

<ion:partial view="page_header" />

<div class="row">

</div>
<ion:guestbooks:guestbook_save/> 
<a name="guestbook"></a>

<ol class="commentlist">
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
</ol>
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
<ion:partial view="footer" />