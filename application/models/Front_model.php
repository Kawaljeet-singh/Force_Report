<?php class Front_model extends CI_Model

{
	public function __construct()

	{
		parent::__construct();
	}

	public function investment_sector($id)
	{
		$this->db->where(array('inv_type'=> $id, 'inv_status' => '1'));
		return $this->db->get('investment_sector')->result();
	}
	public function isEmailExists($email) {
		$this->db->where(array('user_email' => $email,'user_status'=>'1'));
		$query = $this->db->get('user_login');
		return $query->num_rows() > 0;
	  }
  public function checkEmailExists($email) {
        $this->db->where('email', $email);
        $query = $this->db->get('subscribers');
        return ($query->num_rows() > 0);
    }
    
    public function saveFormSubmission($email) {
        $data = array(
            'email' => $email
        );
        $this->db->insert('subscribers', $data);
        $insertId = $this->db->insert_id();
        return $insertId;
    }
	public function system_config($id)
	{
		$this->db->where('sys_key',$id);
		return $this->db->get('system_config')->result();
	}
	public function register_user($data)
	{
			$this->db->set('user_key', 'UUID()', FALSE);
			$this->db->insert('user_login', $data);
			return $this->db->insert_id();
	}
	public function service_provider($data)
	{
		$this->db->set('service_key', 'UUID()', FALSE);
			 $this->db->insert('service_provider', $data);
			return $this->db->insert_id();
			
	}
 
	public function getcategory($cat)
    {
        $this->db->select('*');
        $this->db->where('page_name',$cat);
        return $this->db->get('data_table')->result();
    }
    public function firm_data($id)
	{
	            	$this->db->select('*');
					$this->db->from('user_login');
					$this->db->join('service_provider', 'service_provider.user_uid = user_login.user_id');
					$this->db->where(array('user_login.user_status'=>'1', 'service_provider.category'=>$id));
				return $this->db->get()->result();
	}
	public function table_data($a)
	{
	            	$this->db->select('*');
					$this->db->from('user_login');
						$this->db->where(array('user_status'=>'1', 'sf'=>$a));
				return $this->db->get()->result();
	    
	 
	}

}
?>