<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Guestbooks extends Module_Admin {


    public function construct() {
        
    }
    
    public function index(){
        $this->output('admin/guestbooks');
    }

}
?>
