<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Dashboard extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		$this->user_detail    = $this->session->userdata('user_detail');
    }
	public function index()
	{
		$this->load->view('login');
	}
	public function dashboard()
	{
		$data                = array();
        $data['dashboard']=$this;
        $data['page']='Dashboard';
        $data['title']='Subscriber list';
		$data['user_detail']=$this->Dashboard_model->get_user_detail($this->user_detail->user_key);
		$data['subscribers']=$this->Dashboard_model->getEmailSubscribers();
		$data['all_data'] =$this->Dashboard_model->sell_form();
		$data['green_light'] =$this->Dashboard_model->green_light();
		$data['opportunities'] =$this->Dashboard_model->opportunities($this->user_detail->user_id,'1');
		$data['co_investor'] =$this->Dashboard_model->co_investor($this->user_detail->user_id);
		if ($this->user_detail->user_type == 0)
		{
			$this->load->view('super-admin', $data);
		}
		else {
		$this->load->view('dashboard', $data);
		}
	}
	public function sell()
	{
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$this->load->view('sell', $data);
	}
	 public function sell_form()
    {
        $companyName = $this->input->post('company_name');
        $companyDescription = $this->input->post('company_description');
        $companyFinancials = $this->input->post('company_financials');
        $manage_desc = $this->input->post('manage_desc');
        $sizeOfRequestedInvestment = $this->input->post('size_of_req');
        $minimumInvestmentAmount = $this->input->post('min_invt');
        $revenue = $this->input->post('revenue');
        $ebitda = $this->input->post('ebitd');
        $enterpriseValue = $this->input->post('enter_val');
        $totalDebt = $this->input->post('total_debt');
        $totalFundingToDate = $this->input->post('total_fund_date');
        $valuation = $this->input->post('valuation');
        $stageOfInvestment = $this->input->post('stage_of_invest');
        $employees = $this->input->post('employees');
        $existingInvestors = $this->input->post('existing_invest');
        $leadInvestors = $this->input->post('lead_invest');
        $recentAcquisitions = $this->input->post('recent_rq');
        $competitors = $this->input->post('competitiors');
        $investmentSector = $this->input->post('invest_sector');
        $inv_user_id = $this->user_detail->user_key;

        // Create an associative array to hold the data
        $data = array(
            'company_name' => $companyName,
            'company_description' => $companyDescription,
            'company_financials' => $companyFinancials,
            'manage_desc' => $manage_desc,
            'size_of_req' => $sizeOfRequestedInvestment,
            'min_invt' => $minimumInvestmentAmount,
            'revenue' => $revenue,
            'ebitd' => $ebitda,
            'enter_val' => $enterpriseValue,
            'total_debt' => $totalDebt,
            'total_fund_date' => $totalFundingToDate,
            'valuation' => $valuation,
            'stage_of_invest' => $stageOfInvestment,
            'employees' => $employees,
            'existing_invest' => $existingInvestors,
            'lead_invest' => $leadInvestors,
            'recent_aq' => $recentAcquisitions,
            'competitiors' => $competitors,
            'invest_sector' => $investmentSector,
            'inv_user_id' => $inv_user_id
			);
			  $inserted = $this->Dashboard_model->save_sell_form($data);
			 if ($inserted) {
				$response = array('success' => true, 'message' => 'Sell Form successfully');
			} else {
				$response = array('success' => false, 'message' => 'Failed to Enter Data');
			}
			header('Content-Type: application/json');
			echo json_encode($response);
		}
		
	public function contact_user()
	{
			$id=$this->input->post('userId');
			$user=$this->Dashboard_model->get_user_detail($id);
			 
			if ($user) {
				$data = array('cont_sender'=> $this->user_detail->user_key,
				'cont_reciver' => $user->user_key,
				'cont_status' => 1);
				$inserted = $this->db->insert('contact_user', $data);
				 if ($inserted) {
					$response = array('success' => true, 'message' => 'Data inserted successfully');
				} else {
					$response = array('success' => false, 'message' => 'Failed to insert data');
				}
			} else {
				return ''; 
			}
	}
	public function add_invest_sector()
	{
		$data=array();
		$data['inv_sector']=$this->input->post('invest_sector');
		$data['inv_type']=$this->input->post('inv_type');
		$data['inv_status']='1';
		$this->db->set('inv_key', 'UUID()', FALSE);
		$inserted = $this->db->insert('investment_sector', $data);
		 if ($inserted) {
            $response = array('success' => true, 'message' => 'Sector created successfully');
        } else {
            $response = array('success' => false, 'message' => 'Failed to insert data');
        }

        // Send the response as JSON
        header('Content-Type: application/json');
        echo json_encode($response);
	}
	public function update_invest_sector()
	{
		$inv_ID = $this->input->post('inv_ID'); // Assuming the inv_ID value is provided in the POST request
		$data = array(
			'inv_sector' => $this->input->post('invest_sector'),
			'inv_type' => $this->input->post('inv_type'),
			'inv_status' => '1'
		);

		$this->db->where('inv_key', $inv_ID);
		$updated = $this->db->update('investment_sector', $data);

		if ($updated) {
			$response = array('success' => true, 'message' => 'Sector updated successfully');
		} else {
			$response = array('success' => false, 'message' => 'Failed to update data');
		}

		// Send the response as JSON
		header('Content-Type: application/json');
		echo json_encode($response);

	}
	
	
	public function pending_investment()
	{
		$data['title'] = "Pending Investment";
		$data['page'] = "pending_investment";
		$data['investment']=$this->Dashboard_model->get_sell_data(0);
		$this->load->view('investment_data', $data);
	}
	public function approve_investment($id)
	{
		$this->Dashboard_model->update_investment_status($id,'1');
	   redirect(base_url('pending_investment'));
	}
	public function decline_investment($id)
	{
		$this->Dashboard_model->update_investment_status($id,'2');
	   redirect(base_url('pending_investment'));
	}
		public function decline_sector($id,$red)
	{
		$this->Dashboard_model->update_sector_status($id,'2');
	   redirect(base_url($red));
	}
	public function decline_subscribe($id)
	{
		$this->db->set('sub_status','1');
		$this->db->where('sub_id',$id);
		$this->db->update('subscribers');
	   redirect(base_url('dashboard'));
	}
	public function approved_investment()
	{
		$data['title'] = "Approved Investment";
		$data['page'] = "approved_investment";
		$data['investment']=$this->Dashboard_model->get_sell_data(1);
		$this->load->view('investment_data_approved', $data);
	}	
	public function manage_investment_sector()
	{
		$data['title'] = "Manage Investment Sector";
		$data['page'] = "manage_investment_sector";
		$data['button'] = "Add Investment Sector";
		$data['type'] = "1";
		$data['investment']=$this->Dashboard_model->get_investment_sector(1,1);
		$this->load->view('manage_investment_sector', $data);
	}
	public function manage_investment_structure()
	{
		$data['title'] = "Manage Investment Structure";
		$data['page'] = "manage_investment_structure";
		$data['button'] = "Add Investment Structure";
		$data['type'] = "2";
		$data['investment']=$this->Dashboard_model->get_investment_sector(1,2);
		$this->load->view('manage_investment_sector', $data);
	}
	public function manage_investment_stage()
	{
		$data['title'] = "Manage Investment Stage";
		$data['page'] = "manage_investment_stage";
		$data['button'] = "Add Investment Stage";
		$data['type'] = "3";
		$data['investment']=$this->Dashboard_model->get_investment_sector(1,3);
		$this->load->view('manage_investment_sector', $data);
	}
	
	public function view_sell_side($id)
	{
		$data['title'] = "View";
		$data['page'] = "sell_side_registed";
		$data['button'] = "Edit";
		$sp=$this->Dashboard_model->get_sell_side_detail($id);
		$data['title'] = $sp->company_name;
		$data['sp']=$sp;
		$data['user']=getInvestorName($sp->inv_user_id);
		$this->load->view('view_sell_side', $data);
	}
	
	
	public function sendEmails() {
    // Load necessary libraries for sending emails (e.g., Email library)
   
    // Get all subscribers from the database
    $this->load->model('EmailModel');
    $subscribers = $this->Dashboard_model->getAllSubscribers();

    foreach ($subscribers as $subscriber) {
      // Customize your email content and settings
      $subject = 'Your Subject';
      $message = 'Hello ' . $subscriber->name . ',<br><br>Your email content goes here.';
      
      // Set the email parameters
      $this->email->from('your-email@example.com', 'Your Name');
      $this->email->to($subscriber->email);
      $this->email->subject($subject);
      $this->email->message($message);

      // Send the email
      if ($this->email->send()) {
        echo 'Email sent to: ' . $subscriber->email . '<br>';
      } else {
        echo 'Error sending email to: ' . $subscriber->email . '<br>';
        echo 'Error: ' . $this->email->print_debugger() . '<br>';
      }

      // Clear email data for the next iteration
      $this->email->clear();
    }
  }
	
	
	public function settings()
	{
		$data['title'] = "Setting";
		$data['page'] = "settings";
		$data['user_detail']=$this->Dashboard_model->get_user_detail($this->user_detail->user_key);
		$this->load->view('settings', $data);
	}
	public function get_user()
    {
		$user_detail    = $this->session->userdata('user_detail');
        if ($user_detail == false) {
            redirect('login');
        }
    }
	
	 
	
	
	public function update_password() {
    // Validate the request and perform necessary checks
    $password = $this->input->post('password');
    $confirmPassword = $this->input->post('confirmPassword');

    // Check if password and confirm password match
    if ($password !== $confirmPassword || $password != "") {
     $data= array();
		$data['user_first_name']=$this->input->post('f_name');
		$data['user_last_name']=$this->input->post('l_name');
		$data['password']=md5($this->input->post('password'));
		$data['user_phone']=$this->input->post('phone');
		$this->db->where('user_key', $this->user_detail->user_key);
        $this->db->update('user_login',$data);
		$response = 'Updated successfully.';
		echo $response;
    }
	
	else
	{
		$data= array();
		$data['user_first_name']=$this->input->post('f_name');
		$data['user_last_name']=$this->input->post('l_name');
		$data['user_phone']=$this->input->post('phone');
		$this->db->where('user_key', $this->user_detail->user_key);
        $this->db->update('user_login',$data);
		$response = 'Updated successfully.';
		echo $response;
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
