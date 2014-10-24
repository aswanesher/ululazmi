<?php
    $id = $no;
?>
 
<form name="guestbookForm<?php echo $id ?>" id="guestbookForm<?php echo $id ?>" action="<?php echo admin_url() ?>module/guestbooks/guestbook/save">
 
    <!-- Hidden fields -->
    <input id="no<?php echo $id ?>" name="no" type="hidden" value="<?php echo $id ?>" />    
    
    <!--   -->
    <dl class="small">        
        <dt>
            <label for="name<?php echo $name ?>"><?php echo lang('module_guestbooks_name')?></label>
        </dt>
        <dd>
            <input id="name<?php echo $name ?>" name="name" class="inputtext" type="hidden" value="<?php echo $name ?>" />
        </dd>
        <dd>
            <?php echo $name ?>
        </dd>
   </dl>     
        
    <!--   -->
    <dl class="small">        
        <dt>
            <label for="created<?php echo $created ?>"><?php echo lang('module_guestbooks_created')?></label>
        </dt>
        <dd>
            <input id="created<?php echo $created ?>" name="created" class="inputtext" type="hidden" value="<?php echo $created ?>" />
        </dd>
        <dd>
            <?php echo $created ?>
        </dd>
        
        <dt>
            <label for="address<?php echo $address ?>"><?php echo lang('module_guestbooks_address')?></label>
        </dt>
        <dd>
            <input id="address<?php echo $address ?>" name="address" class="inputtext" type="hidden" value="<?php echo $address ?>" />
        </dd> 
               <dd>
            <?php echo $address ?>
        </dd>      
        
        <dt>
            <label for="email<?php echo $id ?>"><?php echo lang('module_guestbooks_email')?></label>
        </dt>

            <input id="email<?php echo $id ?>" name="email" class="inputtext required" type="hidden" value="<?php echo $email ?>" data-validators="required" />
        </dd>
                <dd>
            <?php echo $email ?>
        </dd>
        </dl>
    
    
    <!-- Статус публикации -->
    <dl class="small">        
        <dt>
            <label><?php echo lang('module_guestbooks_label_status')?></label>
        </dt>
        <dd>
            <input id="status<?php echo $id ?>" name="status" <?php if ($status == 1):?>checked="checked" <?php endif; ?>class="radio" type="radio" value="1" />
            <label for="status<?php echo $id ?>">
                <?php echo lang('module_guestbooks_label_Online')?>
            </label>
             <br />
            <input id="status<?php echo $id ?>" name="status" <?php if ($status == 0):?>checked="checked" <?php endif; ?>class="radio" type="radio" value="0" />
            <label for="status<?php echo $id ?>">
                <?php echo lang('module_guestbooks_label_Offline')?>
            </label>
        </dd>
    </dl>


<label for="comment"><?php echo lang('module_guestbooks_label_guestbook')?></label> 
 <?php echo $comment ?>
 <textarea id="comment<?php echo $id ?>" name="comment" class="textarea hidetext" rel="" type="hidden"><?php echo $comment ?></textarea>
</label>    
 
    
 
</form>
 
<!-- Save / Cancel buttons
   Must be named bSave[windows_id] where 'window_id' is the used ID
   or the window opening through ION.formWindow()
-->
<div class="buttons">
    <button id="bSaveguestbook<?php echo $id ?>" type="button" class="button yes right"><?php echo lang('ionize_button_save_close') ?></button>
    <button id="bCancelguestbook<?php echo $id ?>"  type="button" class="button no right"><?php echo lang('ionize_button_cancel') ?></button>
</div>
 
<script type="text/javascript">
 
    // Tabs init
    new TabSwapper({
        tabsContainer: 'guestbookTab<?php echo $id ?>',
        sectionsContainer: 'guestbookTabContent<?php echo $id ?>',
        selectedClass: 'selected',
        tabs: 'li',
        clickers: 'li a',
        sections: 'div.tabcontent<?php echo $id ?>'
    });
 
    // Autogrow textareas of the given form ID
    ION.initFormAutoGrow('guestbookForm<?php echo $id ?>');
 
</script>
