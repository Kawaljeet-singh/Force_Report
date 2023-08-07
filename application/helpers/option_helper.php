<?php 
if (!function_exists('getInvestSectorName')) {
    function getInvestSectorName($id)
    {
        $CI =& get_instance();
        $CI->db->select('inv_sector');
        $CI->db->from('investment_sector');
        $CI->db->where('inv_key', $id);
        $result = $CI->db->get()->row();

        if ($result) {
            return $result->inv_sector;
        } else {
            return ''; // or any default value if no matching record found
        }
    }
}
if (!function_exists('getInvestorName')) {
    function getInvestorName($id)
    {
        $CI =& get_instance();
        $CI->db->where('user_id', $id);
        $result = $CI->db->get('user_login')->row_array();
        if ($result) {
            return $result;
        } else {
            return null; // or any default value if no matching record found
        }
    }
}


if (!function_exists('getcategory')) {
    function getcategory($id)
    {
        $CI =& get_instance();
        $CI->db->where('uuid', $id);
         $CI->db->from('data_table');
		 $result = $CI->db->get()->row();
        if ($result) {
            return $result->page_name;
        } else {
            return null; // or any default value if no matching record found
        }
    }
}
if (!function_exists('checkcontact')) {
    function checkcontact($userid,$id)
    {
        $CI =& get_instance();
        $CI->db->where(array('cont_sender' => $userid, 
					'cont_reciver' => $id));
         $CI->db->from('contact_user');
		 $result = $CI->db->get()->row();
		 return $CI->db->affected_rows() > 0;
       
    }
}
if (!function_exists('checkInvestment')) {
    function checkInvestment($userid,$id)
    {
        $CI =& get_instance();
        $CI->db->where(array('inv_user_id' => $userid, 
					'inv_user_sectorId' => $id));
         $CI->db->from('investment_user');
		 $result = $CI->db->get()->row();
		 return $CI->db->affected_rows() > 0;
       
    }
}if (!function_exists('client_email')) {
	function client_email($name,$email,$message,$subject)
	{
	     
	      $config = array(
                        'protocol' => 'smtp',
                        'smtp_host' => 'mail.designbysunman.com ',
                        'smtp_port' => 465,
                        'smtp_user' => 'force-report@designbysunman.com',
                        'smtp_pass' => 'force@7251',
                        'smtp_timeout' => 30,
                       
                        );
        $CI = &get_instance();
        $CI->load->library('email',$config);
        $CI->email->set_newline("\r\n");
        $CI->email->from('force-report@designbysunman.com','Force report');
        $CI->email->to($email);
        $CI->email->subject($subject);
        $CI->email->message($message);

        if($CI->email->send())
        {
            return true;
        }
        else
        {
            return false;
        }
	    
	}
}
?>