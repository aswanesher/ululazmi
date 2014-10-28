<?php if (!defined('BASEPATH'))exit('No direct script access allowed');

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

class Guestbooks_guestbook_model extends Base_model{
    
    protected $guestbook_tables='module_guest_book';
    
        public function __construct() {
        $this->set_table($this->guestbook_tables);
        $this->set_pk_name('no');
        
		parent::__construct();
    }
    
    public function save($inputs) {
        
                // Arrays of data which will be saved
        $data = array();

        // Fields of the comment table
        $fields = $this->list_fields();

        // Set the data to the posted value.
        foreach ($fields as $field)
            $data[$field] = $inputs[$field];
         return parent::save($data);
    }
    
        public function delete($id)
    {
        $nb_rows = parent::delete($id, $this->guestbook_tables);
     
        //if ($nb_rows > 0)
        //parent::delete($id, $this->_author_lang_table);
     
        return $nb_rows;
    }
    
        public function get_guestbooks()
	{
        $this->db->where("status = 1"); // TODO - add to adminpanel in config
		$query = $this->db->get( $this->guestbook_tables);
		
		return $query->result_array();
	}
        
        
        
        	public function insertbook()
	{
        
		// Retrieve data 
		$email 		= $this->input->post("email");
		$comment 	= nl2br($this->input->post("comment"));
		$name   	= $this->input->post("name");
                $address        = $this->input->post("address");
                $status_publ    = $this->input->post("status");
		
		// Checking data
		if (empty($email)||empty($name)||empty($comment))
			return false; 
		
		// Defining record
		$data = array( 
                            "comment"       =>	$comment,
                            "name"          =>	$name,
                            "email"         =>	$email,
                            "created"       =>	date('Y-m-d H:i:s'),
                            "address"       =>  $address,
                            "status"        =>  $status_publ
                    );
					
					
		// Saving record
		$this->db->insert( $this->table, $data );
		
		// Returns created id 
		//return $this->db->insert_id();
		return true;
	}
        
        	public function list_by_guestbook()
	{
        $this->db->order_by("created", "DESC");
		$query = $this->db->get( $this->guestbook_tables);
		
		return $query->result_array();
	}
        
}


?>
