<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
?>
<div id="moduleGuestbooksList"></div>


<script type="text/javascript">

	// Controller URL to call
	var url = 'guestbooks/guestbook/get_list';

	// Ajax request
	jQuery.ajax(
		url,
		{
			type:'post',
			// Get the result (the view HTML string)
			// and display it in the Authors List container
			success: function(result)
			{
				$('#moduleGuestbooksList').html(result);
			}
		}
	);

</script>