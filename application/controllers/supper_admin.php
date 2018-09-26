<?php
session_start();

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Supper_Admin
 *
 * @author Mohin Jaki
 */
class Supper_Admin extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        
        $admin_id = $this->session->userdata('admin_id');
        if($admin_id == NULL)
        {
            redirect('admin','refresh');
        }
    }
    
    public function index()
    {
        $data = array();
        $data['title'] = 'ড্যাশবোর্ড';
        $data['admin_maincontent'] = $this->load->view('admin/dashboard','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function admin_manage()
    {
        $data = array();
        $data['title'] = 'অ্যাডমিন ম্যানেজমেন্ট';
        $data['all_admin_info'] = $this->supper_admin_model->select_all_admin_info();
        $data['admin_maincontent'] = $this->load->view('admin/admin_management',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_slider()
    {
        $data = array();
        $data['title'] = 'নিউ সিলাইডার';
        $data['admin_maincontent'] = $this->load->view('admin/add_slider','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_slider()
    {
        $data = array();
        $data['title'] = 'ম্যানেজ সিলাইডার';
        $data['all_slider_info'] = $this->supper_admin_model->select_all_slider();
        $data['admin_maincontent'] = $this->load->view('admin/manage_slider',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_union()
    {
        $data = array();
        $data['title'] = 'নতুন ইউনিয়ন';
        $data['all_union_info'] = $this->supper_admin_model->select_all_union();
        $data['admin_maincontent'] = $this->load->view('admin/add_union',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_union()
    {
        $data = array();
        $data['title'] = 'ম্যানেজমেন্ট ইউনিয়ন';
        $data['all_union_info'] = $this->supper_admin_model->select_all_union();
        $data['all_union_image'] = $this->supper_admin_model->select_all_union_image();
        $data['admin_maincontent'] = $this->load->view('admin/manage_union',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_chairman()
    {
        $data = array();
        $data['title'] = 'চেয়ারম্যেন ম্যানেজমেন্ট';
        $data['all_chairman_info'] = $this->supper_admin_model->select_all_chairman_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_chairman',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_rights()
    {
        $data = array();
        $data['title'] = 'আমাদের দাবী ম্যানেজমেন্ট';
        $data['all_rights_info'] = $this->supper_admin_model->select_all_right();
        $data['admin_maincontent'] = $this->load->view('admin/manage_rights',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_video()
    {
        $data = array();
        $data['title'] = 'নতুন ভিডিও';
        $data['admin_maincontent'] = $this->load->view('admin/add_video','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_video()
    {
        $data = array();
        $data['title'] = 'ভিডিও ম্যানেজমেন্ট';
        $data['all_video_info'] = $this->supper_admin_model->select_all_video_onfo();
        $data['admin_maincontent'] = $this->load->view('admin/manage_video',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_event()
    {
        $data = array();
        $data['title'] = 'নতুন ম্যানেজমেন্ট';
        $data['admin_maincontent'] = $this->load->view('admin/add_event','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_event()
    {
        $data = array();
        $data['title'] = 'ইভেন্ট ম্যানেজমেন্ট';
        $data['all_event_info'] = $this->supper_admin_model->select_all_event_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_event',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_news()
    {
        $data = array();
        $data['title'] = 'নতুন নিউজ';
        $data['admin_maincontent'] = $this->load->view('admin/add_news','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_news()
    {
        $data = array();
        $data['title'] = 'নিউজ ম্যানেজমেন্ট';
        $data['all_news_info'] = $this->supper_admin_model->select_all_news_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_news',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_job()
    {
        $data = array();
        $data['title'] = 'নতুন নিউজ';
        $data['admin_maincontent'] = $this->load->view('admin/add_job','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_job()
    {
        $data = array();
        $data['title'] = 'নিউজ ম্যানেজমেন্ট';
        $data['all_jobs_info'] = $this->supper_admin_model->select_all_jobss_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_job',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function iop_management()
    {
        $data = array();
        $data['title'] = 'মূলনীতি - উদ্দেশ্য - আদর্শ' ;
        $data['all_ip'] = $this->supper_admin_model->select_all_ip_info();
        $data['admin_maincontent'] = $this->load->view('admin/iop_management',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_background()
    {
        $data = array();
        $data['title'] = 'পটভূমি ম্যানেজমেন্ট';
        $data['all_background_info'] = $this->supper_admin_model->select_all_supper_admin_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_background',$data,true);
        $this->load->view('admin/admin_master',$data);
    }

        public function management_executive()
    {
        $data = array();
        $data['title'] = 'কার্যনির্বাহী পরিষদ ম্যানেজমেন্ট';
        $data['all_executive_info'] = $this->supper_admin_model->select_all_executive_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_executive',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_student_unit()
    {
        $data = array();
        $data['title'] = 'ছাত্র ইউনিট ম্যানেজমেন্ট';
        $data['all_student_unit_info'] = $this->supper_admin_model->select_student_unit_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_student_unit',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_nature()
    {
        $data = array();
        $data['title'] = 'গঠনতন্ত্র ম্যানেজমেন্ট';
        $data['all_nature_info'] = $this->supper_admin_model->select_all_nature_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_nature',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_mambership()
    {
        $data = array();
        $data['title'] = 'নতুন সদস্য ম্যানেজমেন্ট';
        $data['all_membership_rule'] = $this->supper_admin_model->select_all_membership_rule();
        $data['admin_maincontent'] = $this->load->view('admin/manage_membership',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_founder()
    {
        $data = array();
        $data['title'] = 'প্রতিষ্ঠাতা সদস্য ম্যানেজমেন্ট';
        $data['all_founder_info'] = $this->supper_admin_model->select_all_founder_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_founder',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_forlife_member()
    {
        $data = array();
        $data['title'] = 'আজীবন সদস্য ম্যানেজমেন্ট';
        $data['forlife_info'] = $this->supper_admin_model->select_for_life_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_forlife_member',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_advider()
    {
        $data = array();
        $data['title'] = 'উপদেষ্টা মন্ডলী ম্যানেজমেন্ট';
        $data['all_advider_info'] = $this->supper_admin_model->select_adviser_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_adviser',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_wiseperson()
    {
        $data = array();
        $data['title'] = 'গুণীজন ম্যানেজমেন্ট';
        $data['all_wishperson'] = $this->supper_admin_model->select_wishperson_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_wiseperson',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_produdsons_bd()
    {
        $data = array();
        $data['title'] = 'বাংলাদেশী সদস্য ম্যানেজমেন্ট';
        $data['sons_bd'] = $this->supper_admin_model->select_all_sons_bd();
        $data['admin_maincontent'] = $this->load->view('admin/manage_produdsons_bd',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_produdsons_int()
    {
        $data = array();
        $data['title'] = 'প্রবাসী সদস্য ম্যানেজমেন্ট';
        $data['sons_int'] = $this->supper_admin_model->select_all_sons_int();
        $data['admin_maincontent'] = $this->load->view('admin/manage_produdsons_int',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_publication()
    {
        $data = array();
        $data['title'] = 'নতুন প্রকাশনা';
        $data['admin_maincontent'] = $this->load->view('admin/add_publication','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_publication()
    {
        $data = array();
        $data['title'] = 'প্রকাশনা ম্যানেজমেন্ট';
        $data['all_publication'] = $this->supper_admin_model->select_all_publication_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_publication',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_award()
    {
        $data = array();
        $data['title'] = 'নতুন পুরস্কার';
        $data['admin_maincontent'] = $this->load->view('admin/add_award','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_award()
    {
        $data = array();
        $data['title'] = 'পুরস্কার ম্যানেজমেন্ট';
        $data['all_award'] = $this->supper_admin_model->select_all_award_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_award',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function new_advertisement()
    {
        $data = array();
        $data['title'] = 'নতুন বিজ্ঞাপন';
        $data['admin_maincontent'] = $this->load->view('admin/add_advertisement','',true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_advertisement()
    {
        $data = array();
        $data['title'] = 'বিজ্ঞাপন ম্যানেজমেন্ট';
        $data['all_advertisement'] = $this->supper_admin_model->select_all_advertisement_info();
        $data['all_second_advertisment'] = $this->supper_admin_model->select_all_second_advertisement_info();
        $data['all_third_advertisment'] = $this->supper_admin_model->select_all_third_advertisement_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_advertisement',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function management_message()
    {
        $data = array();
        $data['title'] = 'বার্তা ম্যানেজমেন্ট';
        $data['all_message_info'] = $this->supper_admin_model->select_all_message_info();
        $data['admin_maincontent'] = $this->load->view('admin/manage_message',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function gallery_image()
    {
        $data = array();
        $data['title'] = 'ছবি ঘর';
        $data['all_gallery_image'] = $this->supper_admin_model->select_all_gallery_images();
        $data['admin_maincontent'] = $this->load->view('admin/management_gallery',$data,true);
        $this->load->view('admin/admin_master',$data);
    }

    public function management_address()
    {
        $data = array();
        $data['title'] = 'আমাদের ঠিকানা';
        $data['all_address'] = $this->supper_admin_model->select_all_address_info();
        $data['admin_maincontent'] = $this->load->view('admin/our_address',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function logout()
    {
        $this->session->unset_userdata('admin_id');
        $this->session->unset_userdata('admin_name');
        $sdata['message'] = "<span style='color: #3f0'>You Are Successfully Logout</span>";
        $this->session->set_userdata($sdata);
        redirect('admin/index');
    }
    
}
