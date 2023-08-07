<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service_provider extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		$this->user_detail    = $this->session->userdata('user_detail');
    }
	public function index()
	{
		$data['title'] = "Service provider Registration";
		$data['page'] = "Service_provider";
		$data['service_provider']=$this->Dashboard_model->get_service_provider(3,0);
		$this->load->view('new_service_provider', $data);
	}
	
	public function service_provider_registed()
	{
	$data['title'] = "Service provider";
		$data['page'] = "service_provider_registed";
		$data['register_data']=$this->Dashboard_model->get_service_provider(3,1);
		$this->load->view('register_service_provider', $data);
	}
	public function add_service_provider()
	{
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$data['register_type']=$this->Front_model->system_config(1);
		$data['title'] = "Add New Service Provider";
		$data['page'] = "service_provider_registed";
		$data['category']=$this->Front_model->getcategory('Firms');
		$this->load->view('add_service_provider',$data);
	}
	public function create_service_provider()
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
		$data['user_type'] = '3';
		$data['sf'] = $this->input->post('sf');
		$data['country'] =$this->input->post('country');
        $data['state'] =$this->input->post('state');
        $data['city'] =$this->input->post('city');
        $data['amount'] =$this->input->post('amount');
          $data['anonymous'] = $this->input->post('anonymous');
         	if ($this->Dashboard_model->isEmailExists($email)) {
			  $response = array('error' => true, 'message' => 'Email already exists');
			  // Send the response as JSON
				header('Content-Type: application/json');
				echo json_encode($response);
			}
		else {
				$result = $this->Front_model->register_user($data);
				$dat                       = array();
				$dat['inv_sec']         = $this->input->post('sector_of_invests');
				$dat['firm_desc'] = $this->input->post('firm_descriptions');
				$dat['str_invest'] = $this->input->post('invest_structures');
				$dat['stage_inv'] =  $this->input->post('invest_stages');
				$dat['category'] =  $this->input->post('category');
				$dat['SP_status'] =  '1';
				$dat['user_uid'] =  $result;
				$this->db->insert('service_provider', $dat);
				 if ($result) {
				$response = array('success' => true, 'message' => 'Service Provider Created successfully');
				} else {
					$response = array('success' => false, 'message' => 'Failed to create Service Provider');
				}


                 $subject="Thanks for Registration.";
    			$message="'Hello '.$this->input->post('f_name').',Your account has been created.'";
                client_email($this->input->post('f_name'), $this->input->post('email'),$message,$subject);
                
                

				// Send the response as JSON
				header('Content-Type: application/json');
				echo json_encode($response);
		}
      
	}
	public function view_service_provider($id)
	{
		$data['page'] = "service_provider_registed";
		$data['button'] = "Edit";
		$user=$this->Dashboard_model->get_user_detail($id);
		$data['invest_sector']=$this->Dashboard_model->user_investment($user->user_id,1);
		$data['invest_stage']=$this->Dashboard_model->user_investment($user->user_id,2);
		$data['invest_structure']=$this->Dashboard_model->user_investment($user->user_id,3);
		$data['title'] = $user->user_email;
		$data['user']=$user;
		$data['sp']=$this->Dashboard_model->get_service_provider_detail($user->user_id);;
		$this->load->view('view_service_provider', $data);
	}
	public function edit_service_provider($id)
	{
		$data['title'] = "Edit Service Provider";
		$data['page'] = "edit_service_provider";
		$user=$this->Dashboard_model->get_user_detail($id);
		$data['user']=$user;
		$data['inv_sector']=$this->Dashboard_model->user_investment($user->user_id,1);
		$data['inv_stage']=$this->Dashboard_model->user_investment($user->user_id,2);
		$data['inv_structure']=$this->Dashboard_model->user_investment($user->user_id,3);
			
		$data['category']=$this->Front_model->getcategory('Firms');
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		
		$this->load->view('edit_service_provider', $data);
	}
	public function update_service_user()
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
		$data['user_status'] = '1';
		$data['user_type'] = '3';
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
		$invest_sector = $this->input->post('sector_id');
		  $data['anonymous'] = $this->input->post('anonymous');
       	$this->db->where('user_key', $key);
			$result = $this->db->update('user_login',$data);
		 		$dat                       = array();
				$dat['inv_sec']         = $this->input->post('sector_of_invests');
				$dat['firm_desc'] = $this->input->post('firm_descriptions');
				$dat['str_invest'] = $this->input->post('invest_structures');
				$dat['stage_inv'] =  $this->input->post('invest_stages');
				$dat['category'] =  $this->input->post('category');
				$dat['SP_status'] =  '0';
				$this->db->where('user_uid', $id);
				$this->db->update('service_provider', $dat);
			if ($result) {
				$response = array('success' => true, 'message' => 'User Update successfully');
			}
			else {
				$response = array('success' => false, 'message' => 'User Update Failed');
			}

			// Send the response as JSON
			header('Content-Type: application/json');
			echo json_encode($response);
	}
	public function approve_service($id) {
       $this->Dashboard_model->update_user_status($id,'1');
       
       
         $user=$this->Dashboard_model->get_user_detail($id);
        $subject="User Approved.";
       	$message= 'Hello ' .$user->user_first_name.',Your account has been approved, Now you can login into account.';
      client_email($user->user_first_name, $user->user_email,$message,$subject);
       
       
	   redirect(base_url('Service_provider'));
    }
	public function decline_service($id) {
       $this->Dashboard_model->update_user_status($id,'2');
        $user=$this->Dashboard_model->get_user_detail($id);
        $message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
       	$subject="Update by Force Report.";
       client_email($user->user_first_name, $user->user_email,$message,$subject);
       
	    redirect(base_url('Service_provider'));
    }
	public function delete_service($id) {
       $this->Dashboard_model->update_user_status($id,'2');
       
        $user=$this->Dashboard_model->get_user_detail($id);
        $message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
       	$subject="Update by Force Report.";
       client_email($user->user_first_name, $user->user_email,$message,$subject);
       
	    redirect(base_url('service_provider_registed'));
    }
	public function get_user()
    {
		$user_detail    = $this->session->userdata('user_detail');
        if ($user_detail == false) {
            redirect('login');
        }
    }	
}
	