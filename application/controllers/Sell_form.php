<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Sell_form extends CI_Controller {

	public function __construct()
    {
        parent::__construct();
        $this->get_user();
		$this->user_detail    = $this->session->userdata('user_detail');
    }
	
	public function sell()
	{
		$data['invest_sector']=$this->Front_model->investment_sector(1);
		$data['invest_stage']=$this->Front_model->investment_sector(2);
		$data['invest_structure']=$this->Front_model->investment_sector(3);
		$this->load->view('sell', $data);
	}
	
	public function get_user()
    {
		$user_detail    = $this->session->userdata('user_detail');
        if ($user_detail == false) {
            redirect('login/0');
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
