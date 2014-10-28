<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */
class Guestbooks extends MY_Module{
    
    	public function __construct()
	{
		parent::__construct();
	}
        
        
        	function index()
	{
		$this->template['title'] = 'guestbooks module title'; // var in views
        $this->output('main_guestbooks'); //views
	}
}
?>
