<?php

/**
 * Description of Admin_Model
 *
 * @author Mohin Jaki
 */
class Admin_Model extends CI_Model {
    
    public function check_admin_login_info($admin_email, $admin_password)
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('admin_email',$admin_email);
        $this->db->where('admin_password',  md5($admin_password));
        $query_result = $this->db->get();
        $result = $query_result->row();
        return $result;
    }
    
}
