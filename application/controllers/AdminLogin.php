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
        $this->load->view('login');
    }
    public function admin_login_check()
    {

        $this->form_validation->set_rules('user_email', 'User Email', 'required|valid_email');
        $this->form_validation->set_rules('user_password', 'User Password', 'required');

        if ($this->form_validation->run() == true) {
            $data                  = array();
            $data['user_email']    = $this->input->post('user_email');
            $data['password'] = md5($this->input->post('user_password'));
            $result = $this->adminlogin_model->admin_login_check($data);
			if ($result) {
				if($result->user_status == 0)
					{
						 $this->session->set_flashdata('message', 'User is not approved yet.');
						redirect('login');
					}
					else
					   {
						$this->session->set_userdata('user_detail', $result);
						redirect('dashboard');
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
            redirect('dashboard');
        }
		
    }

}
