<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Guestbooks extends TagManager{
    
        public static $tag_definitions = array
        (
        "guestbooks:guestbooks"                         => "tag_guestbooks", // Guestbooks loop
        "guestbooks:guestbook"                          => "tag_guestbook", // Guestbook
        "guestbooks:guestbook_form"                     => "tag_guestbook_form", // Display "guestbook" form
        "guestbooks:guestbook_save"                     => "tag_guestbook_save", // Save new guestbook
        "guestbooks:guestbooks_count"                   => "tag_guestbooks_count", // Return number of guestbooks for an article
        "guestbooks:comment"                          => "tag_comment", // Return guestbook content
        "guestbooks:name"                           => "tag_name", // Return guestbook author
        "guestbooks:email"                            => "tag_email", // Return guestbook email
        "guestbooks:address"                             => "tag_address", // Display guestbook date
        "guestbooks:id"                               => "tag_id", // Display guestbook id
        "guestbooks:gravatar"                         => "tag_gravatar", // Display avatar, using gravatar site
        "guestbooks:guestbooks_allowed"                 => "tag_guestbooks_allowed", // Display nested content if guestbooks allowed
        "guestbooks:guestbooks_admin"                   => "tag_guestbooks_admin", // Display admin options & save change
        "guestbooks:message"                          => "tag_message", 
        "guestbooks:success_message"                  => "tag_success_message", // Display success flash message
        "guestbooks:error_message"                    => "tag_error_message", // Display error flash message
        "guestbooks:guestbooks_allowed"                 => "tag_guestbooks_allowed",  // Display error flash message 
        "guestbooks:created"                      => 'tag_created'
    );
        
            public static function index(FTL_Binding $tag) {
        $str = $tag->expand();
        return $str;
    }
    
        public static function tag_guestbooks_main(FTL_Binding $tag) {
        $view = self::$ci->load->view('index', '', TRUE);

        return $view;
    }
    
        public static function tag_guestbook_save(FTL_Binding $tag) {
        // get CodeIgniter instance
        $CI = & get_instance();

        // Comment was posted, saving it
        if ($content = $CI->input->post('comment')) {
            // Loads the comments module model
            if (!isset($CI->guestbook_model))
                $CI->load->model('guestbooks_guestbook_model', 'guestbook_model', true);

            // Save comment 
            if ($CI->guestbook_model->insert())   
                $CI->locals->showSuccessFlashMessage = true;
            else
                $CI->locals->showErrorFlashMessage = true;
        }


        return;
    }
    
        public static function tag_guestbooks(FTL_Binding $tag) {

        $CI = & get_instance();
        // Loads the comments module model
        if (!isset($CI->guestbook_model))
            $CI->load->model('guestbooks_guestbook_model', 'guestbook_model', true);

        // Load comments
        $guestbooks = $CI->guestbook_model->get_guestbooks();


        // Make comment count available to child tags
        if (isset($guestbooks))
            $tag->locals->guestbook_count = sizeof($guestbooks);
        else
            $tag->locals->guestbook_count = 0;

        $output = ""; // Var used to store the built display
        // Loop through comments
        foreach ($guestbooks as $guestbook) {
            // Make comment available to child tags
            //$tag->locals->comment = $comment;
            $tag->set('guestbook', $guestbook);

            // Get "comments" tag content & execute child tags
            $output .= $tag->expand();
        }

        // Return output, for display
        return $output;

    }
    
        public static function tag_comment(FTL_Binding $tag) {
        //return $tag->locals->comment["content"];
        return self::output_value($tag, $tag->locals->guestbook["comment"]);
    }
    
        public static function tag_name(FTL_Binding $tag) {
        return $tag->locals->guestbook["name"];
    }
        public static function tag_address(FTL_Binding $tag) {
        return $tag->locals->guestbook["address"];
    }
        public static function tag_email(FTL_Binding $tag) {
        return $tag->locals->guestbook["email"];
    }
        public static function tag_created(FTL_Binding $tag) {
        return $tag->locals->guestbook["created"];
    }
        public static function tag_id(FTL_Binding $tag) {
        return $tag->locals->guestbook["no"];
    }
    
        public static function tag_gravatar(FTL_Binding $tag) {
        // Using "identicon" if no other default avatar is specified 
        $default_avatar = isset($tag->attr['default']) ? $tag->attr['default'] : 'identicon';

        $grav_url = "http://www.gravatar.com/avatar/" . md5(strtolower(trim($tag->locals->guesbook["email"]))) . "?s=80&d=" . $default_avatar;
        return $grav_url;
    }
    
    
        public static function tag_guestbooks_admin(FTL_Binding $tag) {

        $CI = & get_instance();
        $allowed = Authority::can('access', 'admin');

// Display tag content & apply modifications if needed (only if the user is member of "admins+" group)
        if ($allowed) {

            // Loading comments model if needed
            if (!isset($CI->guestbook_model))
                $CI->load->model('guestbooks_guestbook_model', 'guestbook_model', true);

            if ($CI->input->post("guestbook_delete") == "1") {
                $CI->guestbook_model->delete($CI->input->post("no"));
                $tag->locals->showFlashMessage = true;
            }

            return $tag->expand();
        }
    }
    
        public static function tag_message(FTL_Binding $tag) {

        if ($tag->locals->showFlashMessage == true) {
            $class = isset($tag->attr['class']) ? ' class="' . $tag->attr['class'] . '"' : '';
            $id = isset($tag->attr['id']) ? ' id="' . $tag->attr['id'] . '"' : '';
            $tag_open = isset($tag->attr['tag']) ? "<" . $tag->attr['tag'] . $id . $class . ">" : '';
            $tag_close = isset($tag->attr['tag']) ? "</" . $tag->attr['tag'] . ">" : '';

            return $tag_open . $tag->expand() . $tag_close;
        }
    }
    
        public static function tag_success_message(FTL_Binding $tag) {
        $CI = & get_instance();

        // Build flash message "success"
        if (isset($CI->locals->showSuccessFlashMessage) && $CI->locals->showSuccessFlashMessage == true) {
            $class = isset($tag->attr['class']) ? ' class="' . $tag->attr['class'] . '"' : '';
            $id = isset($tag->attr['id']) ? ' id="' . $tag->attr['id'] . '"' : '';
            $tag_open = isset($tag->attr['tag']) ? "<" . $tag->attr['tag'] . $id . $class . ">" : '';
            $tag_close = isset($tag->attr['tag']) ? "</" . $tag->attr['tag'] . ">" : '';

            return $tag_open . $tag->expand() . $tag_close;
        }
    }
    
        public static function tag_error_message(FTL_Binding $tag) {
        $CI = & get_instance();

        // Build flash message "success"
        if (isset($CI->locals->showErrorFlashMessage) && $CI->locals->showErrorFlashMessage == true) {
            $class = isset($tag->attr['class']) ? ' class="' . $tag->attr['class'] . '"' : '';
            $id = isset($tag->attr['id']) ? ' id="' . $tag->attr['id'] . '"' : '';
            $tag_open = isset($tag->attr['tag']) ? "<" . $tag->attr['tag'] . $id . $class . ">" : '';
            $tag_close = isset($tag->attr['tag']) ? "</" . $tag->attr['tag'] . ">" : '';

            return $tag_open . $tag->expand() . $tag_close;
        }
    }
    
        public static function tag_guestbooks_allowed(FTL_Binding $tag) {
        return $tag->locals->guestbook['guestbook_allow'];
        
        }
}
?>
