<?php class Dashboard_model extends CI_Model
{
	public function __construct()
	{
		parent::__construct();
		$this->user_detail    = $this->session->userdata('user_detail');
	}
	public function sell_form()
	{	
		$this->db->where('sell_status','1');
		return $this->db->get('sell_form')->result();
	}
	public function save_sell_form($data)
	{
			$this->db->set('sell_key', 'UUID()', FALSE);
			$this->db->insert('sell_form', $data);
			return $this->db->insert_id();
	}
	public function get_sell_data($status)
	{
		$this->db->where('sell_status',$status);
		return $this->db->get('sell_form')->result();
	}
	public function get_investment_sector($status,$id)
	{
		$this->db->where(array('inv_type'=>$id, 'inv_status'=>$status));
		return $this->db->get('investment_sector')->result();
	}
	 public function getEmailSubscribers() {
		 $this->db->where('sub_status','0');
		return $this->db->get('subscribers')->result();
	}
	 public function update_user_status($id,$status) {
        $this->db->set('user_status', $status);
        $this->db->where('user_key', $id);
        $this->db->update('user_login');
    }
	public function update_service_status($id,$status) {
        $this->db->set('SP_status', $status);
        $this->db->where('service_key', $id); 
        $this->db->update('service_provider');
    }
    
	public function update_investment_status($id,$status) {
        $this->db->set('sell_status', $status);
        $this->db->where('sell_key', $id);
        $this->db->update('sell_form');
    }
	public function update_sector_status($id,$status) {
        $this->db->set('inv_status', $status);
        $this->db->where('inv_key', $id);
        $this->db->update('investment_sector');
    }
    public function user_investment($id,$type)
	{
		$this->db->where(array('inv_user_id'=> $id, 'inv_user_sectype' => $type));
		return $this->db->get('investment_user')->result();
	}
	public function green_light()
	{
					$this->db->select('*');
					$this->db->from('contact_user');
					$this->db->join('sell_form', 'sell_form.inv_user_id = contact_user.cont_reciver');
					$this->db->where('contact_user.cont_sender',$this->user_detail->user_key );
					$this->db->group_by('sell_form.sell_id');
				return $this->db->get()->result();
	}
	public function get_register_fo($id,$status)
	{
					$this->db->select('*');
					$this->db->from('user_login');
					$this->db->where(array("user_type"=>$id,"user_status"=> $status));
				return $this->db->get()->result();
	}
	public function get_service_provider($id,$status)
	{
					$this->db->select('*');
					$this->db->from('user_login');
					$this->db->join('service_provider', 'service_provider.user_uid = user_login.user_id');
					$this->db->where(array("user_type"=>$id,"user_status"=> $status));
				return $this->db->get()->result();
	}
	public function get_register_sell($id)
	{
					$this->db->select('*');
					$this->db->from('sell_form');
					$this->db->where('sell_status',$id);
				return $this->db->get()->result();
	}
	public function co_investor($id)
	{
					$this->db->where('inv_user_id', $id);
					$invest = $this->db->get('investment_user')->result();
					$list = array(); // Initialize the $list array
			foreach ($invest as $investment) {
				$this->db->where('inv_user_sectorId', $investment->inv_user_sectorId);
				$coinvest = $this->db->get('investment_user')->result();
				foreach ($coinvest as $sellFormEntry) {
						// Check if the sell_id already exists in the $list array
						if (!in_array($sellFormEntry->inv_secId, array_column($list, 'inv_secId'))) {
							$list[] = $sellFormEntry;
						}
					}
				}
			return $list;
	}
	public function opportunities($id,$status)
	{
					$this->db->where('inv_user_id', $id);
					$invest = $this->db->get('investment_user')->result();
					$list = array(); // Initialize the $list array

			foreach ($invest as $investment) {
				if ($investment->inv_user_sectype == '1') {
					$this->db->select('*');
					$this->db->from('sell_form');
					$this->db->join('investment_user', 'sell_form.invest_sector = investment_user.inv_user_sectorId');
					$this->db->where('sell_form.invest_sector', $investment->inv_user_sectorId);
					$this->db->where('sell_form.sell_status', $status);
					$sellFormEntries = $this->db->get()->result();

					// Add the matched entries to the $list array
					foreach ($sellFormEntries as $sellFormEntry) {
						// Check if the sell_id already exists in the $list array
						if (!in_array($sellFormEntry->sell_id, array_column($list, 'sell_id'))) {
							$list[] = $sellFormEntry;
						}
					}
				} else if ($investment->inv_user_sectype == '2') {
					$this->db->select('*');
					$this->db->from('sell_form');
					$this->db->join('investment_user', 'sell_form.stage_of_invest = investment_user.inv_user_sectorId');
					$this->db->where('sell_form.stage_of_invest', $investment->inv_user_sectorId);
					$this->db->where('sell_form.sell_status', $status);
					$sellFormEntries = $this->db->get()->result();

					// Add the matched entries to the $list array
					foreach ($sellFormEntries as $sellFormEntry) {
						// Check if the sell_id already exists in the $list array
						if (!in_array($sellFormEntry->sell_id, array_column($list, 'sell_id'))) {
							$list[] = $sellFormEntry;
						}
					}
				}
			}

		return $list;
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
	public function get_sell_side_detail($id)
	{
					$this->db->select('*');
					$this->db->from('sell_form');
					$this->db->where('sell_key',$id);
				return $this->db->get()->row();
	}
	public function get_user_detail($id)
	{
			$this->db->where('user_key',$id);
			return $this->db->get('user_login')->row();
	}
	public function isEmailExists($email) {
    $this->db->where('user_email', $email);
    $query = $this->db->get('user_login');
    return $query->num_rows() > 0;
  }

	public function get_service_provider_detail($id)
	{
					$this->db->select('*');
					$this->db->from('service_provider');
					$this->db->where('user_uid',$id);
				return $this->db->get()->row();
	}
	 
}
?>