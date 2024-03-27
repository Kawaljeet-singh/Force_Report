<?php
// controllers/ResetPassword.php
class Reset_Password extends CI_Controller {
    public function index($token) {
        
         $this->load->model('adminlogin_model');
        $user = $this->adminlogin_model->get_user_by_token($token);

        if ($user && $this->token_not_expired($user->token_expiration)) {
            // Token is valid and hasn't expired
            $data['token'] = $token;
            $this->load->view('newpassword', $data);
        } else {
            // Token is invalid or expired
            $this->load->view('token_expire');
        }
    }

    public function resetpassword() {
    $token = $this->input->post('token');
    $new_password = $this->input->post('new_password');
    $confirm_password = $this->input->post('confirm_password');
    $this->load->model('adminlogin_model');

    $response = array(); // Create an array to hold the response data

    // Validate the password, confirm_password, and token
    if ($new_password === $confirm_password && $this->token_not_expired($this->adminlogin_model->get_user_by_token($token)->token_expiration)) {
        // Hash and salt the new password
        $hashed_password = md5($new_password);

        // Update the password in the 'user_login' table
        $this->adminlogin_model->update_password($token, $hashed_password);
$this->adminlogin_model->expire_reset_token($token);
        $response['status'] = 'success';
        $response['message'] = 'Password reset successfully!';
    } else {
        $response['status'] = 'error';
        $response['message'] = "Passwords don't match or the token is expired.";
    }

    // Return the response as JSON
    header('Content-Type: application/json');
    echo json_encode($response);
}


    private function token_not_expired($token_expiration) {
        // Compare token expiration with the current time
        $current_time = time();
        $token_expiration_time = strtotime($token_expiration);
        return $current_time < $token_expiration_time;
    }
}
