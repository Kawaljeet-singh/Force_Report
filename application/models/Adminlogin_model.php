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
}
