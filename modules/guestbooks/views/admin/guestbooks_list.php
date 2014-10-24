<?php 
if (count($guestbooks))
{}else{echo "No guestbooks";}
?>
<ul class="guestbookPanelList list mb20 mt10">

    <?php foreach ($guestbooks as $guestbook) : ?>

        <?php
        $id = $guestbook['no'];
        ?>

        <li class="guestbook<?=$id ?> pointer" id="guestbook_<?=$id ?>" data-id="<?=$id ?>">
            <a class="icon drag left"></a>
            <a class="icon delete right"></a>
            <a class="left pl5 edit title" data-id="<?php echo $id ?>">
                
                <?=$id ."---"; ?>
                <?=$guestbook['name']."---" ?>
                <?=$guestbook['comment']."---" ?>
                <?=$guestbook['created']."---" ?>
                <?=$guestbook['status']==1 ? "public":"unpublic"; ?>
                
            </a>
        </li>

    <?php endforeach; ?>

</ul>

<script type="text/javascript">

    // Click Event to display the details of one creator
    $$('.guestbookPanelList li').each(function(item, idx)
    {
        var id = item.getProperty('data-id');
        var a = item.getElement('a.title');
        var del = item.getElement('a.delete');

        a.addEvent('click', function(e)
        {
            // see : /themes/admin/javascript/ionize/ionize_window.js
            // ION.formWindow : function(id, form, title, wUrl, wOptions, data)
            ION.formWindow(
                    'guestbook' + id, // ID of the window
                    'guestbookForm' + id, // ID of the comment form
                    'module_guestbooks_title_edit_guestbook', // lang term of the window title
                    'module/guestbooks/guestbook/get/' + id, // URL of the controller
                    {
                        'width': 350,
                        'height': 200
                    }
            );
        });

        ION.initRequestEvent(
                del, // The item to add the event on
                admin_url + 'module/guestbooks/guestbook/delete/' + id, // URL to call
                {}, // Data to send. Here nothing.
                // Confirmation object
                        {
                            'confirm': true,
                            'message': Lang.get('ionize_confirm_element_delete')
                        }
                );
                    

            });

</script>