<?php

defined('BASEPATH') or exit('No direct script access allowed');

class AdminLogin extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('adminlogin_model');
        $this->user_login_check();
    }
    public function index()
    {
       $data=array();
        $data['id']=1;
        $this->load->view('login',$data);
    }
    public function login($s)
    {
        $data=array();
        $data['id']=$s;
        if ($s == 0)
        {
             $data['note']="<h2>Login Required to Submit Sell Side Form</h2> 
             <p>Our platform serves as both a dynamic marketplace and a beacon of excellence, connecting your offerings with a select group of astute investors, operators, and managers who are poised to unlock the true potential of your opportunities. With our cutting-edge tools, extensive network, and commitment to delivering high quality deals, The Force Report offers an unrivaled forum to showcase your deals, foster mutually beneficial connections, and prosperous outcomes. Join us today to illuminate your investments on a stage worthy of their importance. 

We invite the sell side community to leverage our platform and showcase a wide range of investment opportunities. The Force Report takes pride in offering an exclusive and unparalleled level of visibility to Family Offices, Endowments, and Ultra High Net Worth Individuals who are actively seeking undervalued growth opportunities. 
</p>";
        }
        $this->load->view('login',$data);
    }
    public function admin_login_check($s)
    {

        $this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'User Password', 'required');

        if ($this->form_validation->run() == true) {
            $data                  = array();
            $data['user_email']    = $this->input->post('user_email');
            $data['password'] = md5($this->input->post('user_password'));
            $result = $this->adminlogin_model->admin_login_check($data);
			if ($result) {
				if($result->user_status == '0' || $result->user_status == '2')
					{
						 $this->session->set_flashdata('message', 'User is not approved yet.');
						redirect('login');
					}
					else
					   {
						$this->session->set_userdata('user_detail', $result);
						if($s == 0)
						{
						redirect('sell');
						}
						else{
						redirect('dashboard?id='.$s);
						}
					   }
            } else {
                $this->session->set_flashdata('message', 'Your Email Or Password Does Not Match');
                redirect('login');
            }
        } else {
            $this->session->set_flashdata('message', validation_errors());
            redirect('dashboard');
        }
    }

    public function user_login_check()
    {
        $user_detail    = $this->session->userdata('user_detail');
        if ($user_detail == true) {
            	redirect('dashboard?id=3');
        }
		
    }

}
