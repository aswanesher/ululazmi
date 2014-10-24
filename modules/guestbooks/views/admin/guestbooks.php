<div id="maincolumn">
 
    <h2 class="main demo"><?php echo lang('module_guestbooks_title'); ?></h2>
 
    <div class="subtitle">
 
        <!-- About this module -->
        <p class="lite">
            <?php echo lang('module_guestbooks_about'); ?>
        </p>
 
    </div>
 
<hr />  
	
	
    <div id="moduleGuestbooksList"></div>
 
</div>
 
<script type="text/javascript">
 
    // инициализация панели toolbox является обязательным
    ION.initModuleToolbox('guestbooks','guestbooks_toolbox');
 
    // Обновление списка комментов
    ION.HTML(
            'module/guestbooks/guestbook/get_list',      // URL to the controller 
            {},                                 // Data send by POST. Nothing
            {'update':'moduleGuestbooksList'}  // JS request options
    );
 
</script>
