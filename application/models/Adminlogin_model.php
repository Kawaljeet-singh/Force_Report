<?php

class Adminlogin_Model extends CI_Model
{
    public function admin_login_check($data)
    {
        $this->db->select('*');
        $this->db->from('user_login');
        $this->db->where($data);
        $info = $this->db->get();
        return $result = $info->row();
    }
     public function get_user_by_email($email) {
        return $this->db->get_where('user_login', ['user_email' => $email])->row();
    }
public function expire_reset_token($token) {
    $this->db->where('reset_token', $token);
    $this->db->update('users', array('token_expiration' => date('Y-m-d H:i:s'))); // Set expiration to the current date/time
}

    public function set_reset_token($user_id, $email, $token, $expiration) {
    $data = array(
        'reset_token' => $token,
        'token_expiration' => $expiration
    );

    $this->db->where('email', $email);
    $query = $this->db->get('users');

    if ($query->num_rows() > 0) {
        // Email exists, update the record
        $this->db->where('email', $email);
        $this->db->update('users', $data);
    } else {
        // Email does not exist, insert a new record
        $data['email'] = $email;
        $this->db->insert('users', $data);
    }
}

      public function get_user_by_token($token) {
        return $this->db->get_where('users', ['reset_token' => $token])->row();
    }

    public function update_password($token, $hashed_password) {
       $uvalid= $this->db->get_where('users', ['reset_token' => $token])->row();
        if($uvalid)
        {
                 $this->db->where('user_email', $uvalid->email)
                 ->update('user_login', ['password' => $hashed_password]);
        }
        
    }
}
