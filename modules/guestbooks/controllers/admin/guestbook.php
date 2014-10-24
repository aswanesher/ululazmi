<?php if( ! defined('BASEPATH')) exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Guestbook extends Module_Admin 
{
        public function construct() 
	{

        // Loads the model as 'comment_model'
        $this->load->model('guestbooks_guestbook_model','guestbook_model',true);
		
    }
    
    public function get_list(){
        $this->template['guestbooks']=  $this->guestbook_model->get_list();
        $this->output('admin/guestbooks_list');
    }
    
    public function get($id) {
        $where = array(
          'no'=>$id  
        );
        $this->template=  $this->guestbook_model->get($where);
        $this->output('admin/guestbook_detail');
    }
    
    public function delete($id) {
        if($this->guestbook_model->delete($id)>0){
            
            $this->update[]=array(
              'element'=>'moduleGuestbooksList',
                'url'=>  admin_url().'module/guestbooks/guestbook/get_list'
            );
            
            //kirim pesan
            $this->success(lang('ionize_message_operation_ok'));
        }else{
            $this->error(lang('ionize_message_operation_nok'));
        }
        
    }
    
        public function save() {

        // The content must be set
        if ($this->input->post('no') != '') {
            $id_comment = $this->guestbook_model->save($this->input->post());

        // Update the comments list
        $this->update[] = array(
            'element' => 'moduleGuestbooksList',
            'url' => admin_url() . 'module/guestbooks/guestbook/get_list'
        );

        // Send the user a message
        $this->success(lang('ionize_message_operation_ok'));
        } else {
            // Send the user a message
            $this->error(lang('ionize_message_operation_nok'));
        }
    }
    
    
}
?>
