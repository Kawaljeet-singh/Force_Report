<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		$this->user_detail    = $this->session->userdata('user_detail');
    }
	public function index()
	{
	    $data['law_firm']=$this->Front_model->firm_data('c017d6ec-f8ad-11ed-9f7d-3c7c3f5b04d2');
	    $data['account_firm']=$this->Front_model->firm_data('b965c326-f8ad-11ed-9f7d-3c7c3f5b04d2');
	    $data['value_firm']=$this->Front_model->firm_data('b94a0269-f8ad-11ed-9f7d-3c7c3f5b04d2');
	    $data['due_firm']=$this->Front_model->firm_data('b95b0017-f8ad-11ed-9f7d-3c7c3f5b04d2');
	    $data['sfo']=$this->Front_model->table_data('917ddb65-f8ad-11ed-9f7d-3c7c3f5b04d2');
	  	$data['mfo']=$this->Front_model->table_data('a2e13801-f8ad-11ed-9f7d-3c7c3f5b04d2');
	    
		$this->load->view('Home',$data);
	} 
	public function about()
	{
		$this->load->view('about');
	}
	public function login()
	{
		$this->load->view('login');
	}
	
	public function register()
	{
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$data['register_type']=$this->Front_model->system_config(1);
			$data['category']=$this->Front_model->getcategory('Firms');
		$this->load->view('register',$data);
	}
	public function register_submit()
	{
		$email = $this->input->post('email');
		$register_type =$this->input->post('register_type');

		$data                       = array();
        $data['user_type']         = $register_type;
        $data['user_first_name'] = $this->input->post('f_name');
        $data['user_last_name'] = $this->input->post('l_name');
        $data['user_email'] = $this->input->post('email');
        $data['user_phone'] = $this->input->post('phone');
        
        if (isset($_POST['family_office'])) {
            $data['user_family_office'] = $this->input->post('family_office');
        } else {
           $data['user_family_office'] ='';
        }
        if (isset($_POST['sf'])) {
            $data['sf'] = $this->input->post('sf');
          
        } else {
           $data['sf'] = '';
        }

        if (isset($_POST['amount'])) {
           $data['amount'] =$this->input->post('amount');
          
        } else {
          $data['amount'] ='';
        }
        
         if (isset($_POST['sizeby'])) {
            $data['sizeby'] =$this->input->post('sizeby');
          
        } else {
          $data['sizeby'] ='';
        }
        
        
        $data['user_firm_name'] = $this->input->post('firm_name');
        $data['password'] = md5($this->input->post('password'));
        
        $data['country'] =$this->input->post('country');
        $data['state'] =$this->input->post('state');
        $data['city'] =$this->input->post('city');
          
       
 if (isset($_POST['anonymous'])) {
           $data['anonymous'] =$this->input->post('anonymous');
          
        } 
        else
        {
             $data['anonymous'] ='0';
        }
        $invest_sector = $this->input->post('sector_id');
        $invest_stage = $this->input->post('invest_stage');
        $invest_structure = $this->input->post('invest_structure');
		if ($this->Front_model->isEmailExists($email)) {
		  $response = array('error' => true, 'message' => 'Email already exists');
		  // Send the response as JSON
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		else {
			
			if($register_type == "3")
			{
				$result = $this->Front_model->register_user($data);
				$dat                       = array();
				$dat['inv_sec']         = $this->input->post('sector_of_invests');
				$dat['firm_desc'] = $this->input->post('firm_descriptions');
				$dat['str_invest'] = $this->input->post('invest_structures');
				$dat['stage_inv'] =  $this->input->post('invest_stages');
				$dat['category'] =  $this->input->post('category');
				$dat['SP_status'] =  '0';
				$dat['user_uid'] =  $result;
				$this->db->insert('service_provider', $dat);
    			
    			$subject="Thanks for Registration.";
    			$message = 'Hello '.$this->input->post('f_name').',<br><br>Your account has been created but you can login when Admin approve you account.';
                client_email($this->input->post('f_name'), $this->input->post('email'),$message,$subject);
                
                
				 if ($result) {
				$response = array('success' => true, 'message' => 'Your account has been created');
				} else {
					$response = array('success' => false, 'message' => 'Failed to create user');
				}

				// Send the response as JSON
				header('Content-Type: application/json');
				echo json_encode($response);
			}
			else {
				$result = $this->Front_model->register_user($data);
			if(isset($invest_sector)) {
				if (!empty($invest_sector)) {
				// Process the checkbox values and insert into the database or perform any other actions
					foreach ($invest_sector as $value) {
						// Insert $value into the database or perform other actions
						// Example database insertion:
						$data = array(
							'inv_user_sectorId' => $value,
							'inv_user_id' => $result,
							'inv_user_sectype' => '1',
						);
						$this->db->insert('investment_user', $data);
					}
				} 
			}
			if (isset($invest_stage)){
			if (!empty($invest_stage)) {
			// Process the checkbox values and insert into the database or perform any other actions
				foreach ($invest_stage as $value) {
					// Insert $value into the database or perform other actions
					// Example database insertion:
					$data = array(
						'inv_user_sectorId' => $value,
						'inv_user_id' => $result,
						'inv_user_sectype' => '2',
					);
					$this->db->insert('investment_user', $data);
				}
			}
			}
			if(isset($invest_structure)){
			if (!empty($invest_structure)) {
			// Process the checkbox values and insert into the database or perform any other actions
				foreach ($invest_structure as $value) {
					// Insert $value into the database or perform other actions
					// Example database insertion:
					$data = array(
						'inv_user_sectorId' => $value,
						'inv_user_id' => $result,
						'inv_user_sectype' => '3',
					);
					$this->db->insert('investment_user', $data);
				}
				}
			}
			
			 if ($result) {
				$response = array('success' => true, 'message' => 'User Created successfully');
			} else {
				$response = array('success' => false, 'message' => 'Failed to insert data');
			}
			
			$subject="Thanks for Registration.";
			$message = 'Hello '.$this->input->post('f_name').',<br><br>Your account has been created but you can login when Admin approve you account.';
            client_email($this->input->post('f_name'), $this->input->post('email'),$message,$subject);
			
			// Send the response as JSON
			header('Content-Type: application/json');
			echo json_encode($response);
			}
		}
	}

	public function service_provider()
	{
		$data['title'] = "Service provider";
		$data['page'] = "service_provider";
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$data['category']=$this->Front_model->getcategory('Firms');
		$data['register_type']=$this->Front_model->system_config(1);
		$this->load->view('service_provider', $data);
	}		
	public function submit_service()
	{
		$data                       = array();
        $data['firm_name']         = $this->input->post('firm_name');
        $data['inv_sec']         = $this->input->post('sector_of_invest');
        $data['firm_desc'] = $this->input->post('firm_description');
        $data['str_invest'] = $this->input->post('invest_structure');
        $data['country'] = $this->input->post('country');
        $data['state'] = $this->input->post('state');
        $data['city'] = $this->input->post('city');
        $data['amount_of_invest'] = $this->input->post('amount');
        $data['stage_inv'] =  $this->input->post('invest_stage');
        $data['category'] =  $this->input->post('category');
        $data['SP_status'] =  '0';
		$result = $this->Front_model->service_provider($data);
		 if ($result) {
            $response = array('success' => true, 'message' => 'Data inserted successfully');
        } else {
            $response = array('success' => false, 'message' => 'Failed to insert data');
        }

        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
		
	}
		public function firmdata($id)
	{
			$this->db->select('*');
			$this->db->from('data_table');
			$this->db->where('uuid', $id);
			$result = $this->db->get()->row();
			$data['title_one']=$result->page_title;
			$data['title_two']=$result->page_name;
			$dat['data']=$data;
			$dat['sf']=$this->Front_model->firm_data($id);
			$this->load->view('data_page',$dat);
	}
		public function data_page($id)
	{
			$this->db->select('*');
			$this->db->from('data_table');
			$this->db->where('uuid', $id);
			$result = $this->db->get()->row();
			$data['title_one']=$result->page_title;
			$data['title_two']=$result->page_name;
			$dat['data']=$data;
			$dat['sf']=$this->Front_model->table_data($id);
			$this->load->view('data_page',$dat);
	}
	public function size_invest($id)
	{
			$this->db->select('*');
			$this->db->from('data_table');
			$this->db->where('uuid', $id);
			$result = $this->db->get()->row();
			$data['title_one']=$result->page_title;
			$data['title_two']=$result->page_name;
			$dat['data']=$data;
			$dat['sf']=$this->Front_model->table_data($id);
			$this->load->view('size_of_invest',$dat);
	}
		public function no_invest($id)
	{
			$this->db->select('*');
			$this->db->from('data_table');
			$this->db->where('uuid', $id);
			$result = $this->db->get()->row();
			$data['title_one']=$result->page_title;
			$data['title_two']=$result->page_name;
			$dat['data']=$data;
			$dat['sf']=$this->Front_model->table_data($id);
			$this->load->view('number_of_invest',$dat);
	}
	public function get_user()
    {
		$user_detail = $this->session->userdata('user_detail');
    }
		public function contact()
    {
	$this->load->view('contact_us');
    }
    
	 public function submit_contact() {
        $response = array('message' => 'Success');
        echo json_encode($response);
    }
	public function subscribe() {
		
		$email = $this->input->post('email_id');
        if ($this->Front_model->checkEmailExists($email)) {
		   $response = array('error' => true, 'message' => 'Email already exists');
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		else {
			$this->Front_model->saveFormSubmission($email);
			 $response = array('success' => true, 'message' => 'Email subscribe successfully');
			header('Content-Type: application/json');
			echo json_encode($response);
		}
	}

	public function logout()
    {
		$user_detail    = $this->session->unset_userdata('user_detail');
        if ($user_detail == false) {
            redirect('/');
        }
    }
}
