<?php
session_start();

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Admin
 *
 * @author Mohin Jaki
 */
class Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id != NULL)
        {
            redirect('supper_admin','refresh');
        }
    }
    
    public function index()
    {
        $this->load->view('admin/login');
    }
    
    public function admin_login_check()
    {
        $admin_email = $this->input->post('admin_email',true);
        $admin_password = $this->input->post('admin_password',true);
        $this->load->model('admin_model');
        $result = $this->admin_model->check_admin_login_info($admin_email, $admin_password);
        $sdata = array();
        if($result)
        {
            $sdata['admin_id'] = $result->admin_id;
            $sdata['admin_name'] = $result->admin_name;
            $sdata['access_level'] = $result->access_level;
            $this->session->set_userdata($sdata);
            redirect('supper_admin');
        }
        else
        {
            $sdata['message'] = "<span style='color: #f00'>User Id Or Password Invalied !</span>";
            $this->session->set_userdata($sdata);
            redirect('admin/index');
        }
    }
    
}
