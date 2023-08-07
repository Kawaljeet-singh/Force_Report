<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sell_user extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		$this->user_detail    = $this->session->userdata('user_detail');
    }
	public function index()
	{
		$data['title'] = "Sell Side Registration";
		$data['page'] = "Sell_user_list";
		$data['register_data']=$this->Dashboard_model->get_register_fo(2,0);
		$this->load->view('new_sell_side', $data);
	}
	public function sell_side_registed()
	{
		$data['title'] = "Sell Side";
		$data['page'] = "sell_side_registed";
	    $data['register_data']=$this->Dashboard_model->get_register_fo(2,1);
		$this->load->view('register_sell_side', $data);
	}
	public function add_sell_user()
	{
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$data['register_type']=$this->Front_model->system_config(1);
		$data['title'] = "Add Sell User";
		$data['page'] = "sell_side_registed";
		$this->load->view('add_sell_side',$data);
	}
	public function create_sell_user()
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
		$data['user_type'] = '2';
		$data['sf'] = $this->input->post('sf');
		$data['country'] =$this->input->post('country');
        $data['state'] =$this->input->post('state');
        $data['city'] =$this->input->post('city');
        $data['amount'] =$this->input->post('amount');
        $invest_sector = $this->input->post('sector_id');
        $data['anonymous'] = $this->input->post('anonymous');
        
        if ($this->Dashboard_model->isEmailExists($email)) {
		  $response = array('error' => true, 'message' => 'Email already exists');
		  // Send the response as JSON
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		else {
				$result = $this->Front_model->register_user($data);
				
				 if ($result) {
				$response = array('success' => true, 'message' => 'New Sell Side created');
				} else {
					$response = array('success' => false, 'message' => 'Failed to add Sell Side');
				}

				// Send the response as JSON
				header('Content-Type: application/json');
				echo json_encode($response);
		}
      
	}
	public function view_sell($id)
	{
		$data['button'] = "Edit";
		$data['page'] = "sell_side_registed";
		$user=$this->Dashboard_model->get_user_detail($id);
		$data['invest_sector']=$this->Dashboard_model->user_investment($user->user_id,1);
		$data['invest_stage']=$this->Dashboard_model->user_investment($user->user_id,2);
		$data['invest_structure']=$this->Dashboard_model->user_investment($user->user_id,3);
			$data['title'] = $user->user_email;
		$data['user']=$user;

		$this->load->view('view_sell_side', $data);
	}
	public function edit_sellside($id)
	{
		$data['title'] = "Edit Family Office";
		$data['page'] = "edit_user";
		$user=$this->Dashboard_model->get_user_detail($id);
		$data['user']=$user;
		$this->load->view('edit_sell_side', $data);
	}
	public function update_sell_user()
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
		 $data['user_type'] = '2';
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
          $data['anonymous'] = $this->input->post('anonymous');
		$invest_sector = $this->input->post('sector_id');
			$this->db->where('user_key', $key);
			$result = $this->db->update('user_login',$data);
		 
 
			if ($result) {
				$response = array('success' => true, 'message' => 'User Update successfully');
			}
			else {
				$response = array('success' => false, 'message' => 'User Update Failed');
			}

                $subject="Thanks for Registration.";
    			$message="'Hello '.$this->input->post('f_name').',Your account has been created.'";
                client_email($this->input->post('f_name'), $this->input->post('email'),$message,$subject);
                
                

			// Send the response as JSON
			header('Content-Type: application/json');
			echo json_encode($response);
			
	}
	public function approve_sell($id) {
       $this->Dashboard_model->update_user_status($id,'1');
       
        
        $user=$this->Dashboard_model->get_user_detail($id);
       	$subject="Update by Force Report.";
       	$message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
        client_email($user->user_first_name, $user->user_email,$message,$subject);
       
	   redirect(base_url('Sell_user_list'));
    }
	public function decline_sell($id) {
       $this->Dashboard_model->update_user_status($id,'2');
        $user=$this->Dashboard_model->get_user_detail($id);
       $message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
       	$subject="Update by Force Report.";
       client_email($user->user_first_name, $user->user_email,$message,$subject);
       
	    redirect(base_url('Sell_user_list'));
    }
	public function delete_sell($id) {
       $this->Dashboard_model->update_user_status($id,'2');
        $user=$this->Dashboard_model->get_user_detail($id);
       $message= 'Hello ' .$user->user_first_name.',Your account has been rejected by Force Admin';
       	$subject="Update by Force Report.";
       client_email($user->user_first_name, $user->user_email,$message,$subject);
       
	    redirect(base_url('sell_side_registed'));
    }
	public function get_user()
    {
		$user_detail    = $this->session->userdata('user_detail');
        if ($user_detail == false) {
            redirect('login');
        }
    }
 }
	