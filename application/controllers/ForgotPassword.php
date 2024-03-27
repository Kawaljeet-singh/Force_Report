<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class ForgotPassword extends CI_Controller {
    
    public function index() {
        $this->load->view('forgot_password_form');
    }

    public function send_reset_link() {
    $response = array(); // Create an array to hold the response data

    $email = $this->input->post('email');
    $token = bin2hex(random_bytes(16)); // Generate a random token

    $this->load->model('adminlogin_model');
    $user = $this->adminlogin_model->get_user_by_email($email);

    if ($user) {
        $token_expiration = date('Y-m-d H:i:s', strtotime('+1 hour')); // Token expires in 1 hour
        $this->adminlogin_model->set_reset_token($user->user_id, $user->user_email, $token, $token_expiration);

        // Send the reset link with the token to the user's email
        $reset_link = site_url("Reset_Password/{$token}");
        
            $message="Click the link to reset your password.".$reset_link;
            $subject = "Reset Password";
         client_email($user->user_first_name, $user->user_email,$message,$subject);
        $response['status'] = 'success';
        $response['message'] = 'Kindly check your email for reset password';
    } else {
        $response['status'] = 'error';
        $response['message'] = 'Failed to reset password. Please try again.';
    }

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}

}
