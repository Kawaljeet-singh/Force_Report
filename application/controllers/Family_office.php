<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Family_office extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		$this->user_detail    = $this->session->userdata('user_detail');
    }
 
	public function index()
	{
		$data['title'] = "Family Office Registration";
		$data['page'] = "family_office_list";
		$data['register_data']=$this->Dashboard_model->get_register_fo(1,0);
		$this->load->view('new_register_fo', $data);
	}
	public function fo_registed()
	{
		$data['title'] = "Family Office Registration";
		$data['page'] = "fo_registed";
		$data['register_data']=$this->Dashboard_model->get_register_fo(1,1);
		$this->load->view('registered_fo', $data);
	}
	public function add_user()
	{
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$data['register_type']=$this->Front_model->system_config(1);
		$data['title'] = "Add New User";
		$data['page'] = "add_user";
		$this->load->view('add_user',$data);
	}
	public function create_user()
	{
		$email = $this->input->post('email');
		$data                       = array();
        $data['user_type']         = $this->input->post('register_type');
        $data['user_first_name'] = $this->input->post('f_name');
        $data['user_last_name'] = $this->input->post('l_name');
        $data['user_email'] = $this->input->post('email');
        $data['user_phone'] = $this->input->post('phone');
        $data['user_family_office'] = $this->input->post('family_office');
        $data['user_firm_name'] = $this->input->post('firm_name');
        $data['password'] = md5($this->input->post('password'));
		$data['user_status'] = '1';
		$data['user_type'] = '1';
		$data['sf'] = $this->input->post('sf');
		$data['country'] =$this->input->post('country');
        $data['state'] =$this->input->post('state');
        $data['city'] =$this->input->post('city');
        $data['amount'] =$this->input->post('amount');
                $data['anonymous'] = $this->input->post('anonymous');

        $invest_sector = $this->input->post('sector_id');
        if ($this->Dashboard_model->isEmailExists($email)) {
		  $response = array('error' => true, 'message' => 'Email already exists');
		  // Send the response as JSON
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		else {
				$result = $this->Front_model->register_user($data);
				if (!empty($invest_sector)) {
				// Process the checkbox values and insert into the database or perform any other actions
					foreach ($invest_sector as $value) {
						// Insert $value into the database or perform other actions
						// Example database insertion:
						$data = array(
							'inv_user_sectorId' => $value,
							'inv_user_id' => $result,
						);
						$this->db->insert('investment_user', $data);
					}
				}
				
				 if ($result) {
				$response = array('success' => true, 'message' => 'New Family Office created');
				} else {
					$response = array('success' => false, 'message' => 'Failed to add New Family Office');
				}
				
				
			    
                $subject="Thanks for Registration.";
    			$message="'Hello '.$this->input->post('f_name').',Your account has been created.'";
                client_email($this->input->post('f_name'), $this->input->post('email'),$message,$subject);
                
                
				// Send the response as JSON
				header('Content-Type: application/json');
				echo json_encode($response);
		}
      
	}
	public function view_user($id)
	{
		$data['page'] = "fo_registed";
		$data['button'] = "Edit";
		$user=$this->Dashboard_model->get_user_detail($id);
		$data['inv_sector']=$this->Dashboard_model->user_investment($user->user_id,1);
		$data['inv_stage']=$this->Dashboard_model->user_investment($user->user_id,2);
		$data['inv_structure']=$this->Dashboard_model->user_investment($user->user_id,3);
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);$data['title'] = $user->user_email;
		$data['user']=$user;
		$this->load->view('view_user', $data);
	}
	public function edit_user($id)
	{
		$data['title'] = "Edit Family Office";
		$data['page'] = "edit_user";
		$user=$this->Dashboard_model->get_user_detail($id);
		$data['user']=$user;
		$data['inv_sector']=$this->Dashboard_model->user_investment($user->user_id,1);
		$data['inv_stage']=$this->Dashboard_model->user_investment($user->user_id,2);
		$data['inv_structure']=$this->Dashboard_model->user_investment($user->user_id,3);
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$this->load->view('edit_user', $data);
	}
	public function update_user()
	{
		$id=$this->input->post('userid');
		$key=$this->input->post('userkey');
		$data                       = array();
        $data['user_type']         = $this->input->post('register_type');
        $data['user_first_name'] = $this->input->post('f_name');
        $data['user_last_name'] = $this->input->post('l_name');
        $data['user_phone'] = $this->input->post('phone');
        $data['user_family_office'] = $this->input->post('family_office');
        $data['user_firm_name'] = $this->input->post('firm_name');
        $data['amount'] = $this->input->post('amount');
        $data['sf'] = $this->input->post('sf');
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $data['user_type'] = '1';
          $data['anonymous'] = $this->input->post('anonymous');
		$invest_sector = $this->input->post('sector_id');
       	$this->db->where('user_key', $key);
			$result = $this->db->update('user_login',$data);
			$existingItemsector = $this->db->get_where('investment_user', array('inv_user_id' => $id,"inv_user_sectype" => '1'))->result();
			$existingItemIdsector = array();
			foreach ($existingItemsector as $item) {
				$existingItemIdsector[] = $item->inv_user_sectorId;
			}
			foreach ($invest_sector as $value) {
				if (in_array($value, $existingItemIdsector)) {
					// If the value exists in the existing items array, remove it from the array
					$key = array_search($value, $existingItemIdsector);
					unset($existingItemIdsector[$key]);
				} else {
					// Insert a new entry for the unchecked item
					$data = array(
						'inv_user_sectorId' => $value,
						'inv_user_id' => $id,
						'inv_user_sectype' => '1',
					);
					$this->db->insert('investment_user', $data);
				}
			}
			foreach ($existingItemIdsector as $itemId) {
				$this->db->delete('investment_user', array('inv_user_sectorId' => $itemId));
			}
			if ($result) {
				$response = array('success' => true, 'message' => 'User Update successfully');
			}
			else {
				$response = array('success' => false, 'message' => 'User Update Failed');
			}
			header('Content-Type: application/json');
			echo json_encode($response);
	}
	public function approve_user($id) {
        $this->Dashboard_model->update_user_status($id,'1');
        $user=$this->Dashboard_model->get_user_detail($id);
        $subject="User Approved.";
       	$message= 'Hello ' .$user->user_first_name.',Your account has been approved, Now you can login into account.';
      client_email($user->user_first_name, $user->user_email,$message,$subject);
	    redirect(base_url('family_office_list'));
    }
	 public function decline_user($id) {
       $this->Dashboard_model->update_user_status($id,'2');
        
        $user=$this->Dashboard_model->get_user_detail($id);
       	$subject="Update by Force Report.";
       	$message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
        client_email($user->user_first_name, $user->user_email,$message,$subject);
	    
	    redirect(base_url('family_office_list'));
    }
	public function delete_user($id) {
       $this->Dashboard_model->update_user_status($id,'2');
          $user=$this->Dashboard_model->get_user_detail($id);
       
       	$message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
       	$subject="Update by Force Report.";
       client_email($user->user_first_name, $user->user_email,$message,$subject);
       
	    redirect(base_url('fo_registed'));
    }
	public function get_user()
    {
		$user_detail    = $this->session->userdata('user_detail');
        if ($user_detail == false) {
            redirect('login');
        }
    }
    
    
    
}
	