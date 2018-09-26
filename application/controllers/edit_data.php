<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Edit_Data
 *
 * @author Mohin Jaki
 */
class Edit_Data extends CI_Controller {
    
    public function edit_slider($slider_id)
    {
        $data = array();
        $data['title'] = 'Update Slider Information';
        $data['slider_information'] = $this->edit_data_model->update_slider_by_slider_info($slider_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_slider',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_slider()
    {
        $data = array();
        $slider_id = $this->input->post('slider_id',true);
        $data['slider_name'] = $this->input->post('slider_name',true);
        $data['slider_descrription'] = $this->input->post('slider_descrription',true);
        
        $this->edit_data_model->update_slider_info($data,$slider_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_slider/'.$slider_id);
    }
    
    public function edit_union($union_id)
    {
        $data = array();
        $data['title'] = 'Update Union Information';
        $data['union_info'] = $this->edit_data_model->view_union_info_by_id($union_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_union',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function undate_union()
    {
        $data = array();
        $union_id = $this->input->post('union_id',true);
        $data['union_name'] = $this->input->post('union_name',true);
        $data['union_description'] = $this->input->post('union_description',true);
        $data['union_information'] = $this->input->post('union_information',true);
        $data['union_tourism_tradition'] = $this->input->post('union_tourism_tradition',true);
        $data['union_agriculture'] = $this->input->post('union_agriculture',true);
        $data['union_educational'] = $this->input->post('union_educational',true);
        $data['union_health'] = $this->input->post('union_health',true);
        $data['union_map'] = $this->input->post('union_map',true);
        
        $this->edit_data_model->update_union_info($data,$union_id);
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_union/'. $union_id);
    }
    
    public function edit_chairman($chairman_id)
    {
        $data = array();
        $data['title'] = 'Update Chairman Info';
        $data['chairman_info'] = $this->edit_data_model->update_chairman_by_chairman_id($chairman_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_chairman',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_chairman()
    {
        $data = array();
        $chairman_id = $this->input->post('chairman_id',true);
        $data['chairman_name'] = $this->input->post('chairman_name',true);
        $data['chairman_short_description'] = $this->input->post('chairman_short_description',true);
        $data['chairman_long_description'] = $this->input->post('chairman_long_description',true);
        
        $this->edit_data_model->update_chairman_info($data,$chairman_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_chairman/'.$chairman_id);
    }
    
    public function edit_rights($right_id)
    {
        $data = array();
        $data['title'] = 'Update Rights';
        $data['rights_info'] = $this->edit_data_model->edit_rights_by_right_id($right_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_rights',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_rights()
    {
        $data = array();
        $right_id = $this->input->post('right_id',true);
        $data['right_description'] = $this->input->post('right_description',true);
        $this->edit_data_model->update_rights_info($data,$right_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_rights/'.$right_id);
    }
    
    public function edit_event($event_id)
    {
        $data = array();
        $data['title'] = 'Update Event Information';
        $data['event_info'] = $this->edit_data_model->edit_event_by_event_id($event_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_event',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_event()
    {
        $data = array();
        $event_id = $this->input->post('event_id',true);
        $data['event_name'] = $this->input->post('event_name',true);
        $data['event_description'] = $this->input->post('event_description',true);
        
        $this->edit_data_model->update_event_info($data,$event_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_event/'. $event_id);
    }
    
    public function edit_news($news_id)
    {
        $data = array();
        $data['title'] = 'Update News Information';
        $data['news_info'] = $this->edit_data_model->edit_news_by_news_id($news_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_news',$data,true);
        $this->load->view('admin/admin_master',$data);
    }

    public function update_news()
    {
        $data = array();
        $news_id = $this->input->post('news_id',true);
        $data['news_title'] = $this->input->post('news_title',true);
        $data['news_description'] = $this->input->post('news_description',true);
        
        $this->edit_data_model->update_news_info_by_id($data,$news_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_news/'. $news_id);
    }
    
    public function edit_jobs($job_id)
    {
        $data = array();
        $data['title'] = 'Update Job Information';
        $data['jobs_info'] = $this->edit_data_model->edit_job_by_news_id($job_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_job',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_jobs()
    {
        $data = array();
        $job_id = $this->input->post('job_id',true);
        $data['job_title'] = $this->input->post('job_title',true);
        $data['job_description'] = $this->input->post('job_description',true);
        
        $this->edit_data_model->update_job_info_by_id($data,$job_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_job/'. $job_id);
    }
    
    public function edit_background($background_id)
    {
        $data = array();
        $data['title'] = 'Update Background Information';
        $data['background_info'] = $this->edit_data_model->edit_background_by_id($background_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_background',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_background_data()
    {
        $data = array();
        $background_id = $this->input->post('background_id',true);
        $data['background_description'] = $this->input->post('background_description',true);
        
        $this->edit_data_model->update_background_info_by_id($data,$background_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_background/'. $background_id);
        
    }

    public function edit_membership($membership_rules_id)
    {
        $data = array();
        $data['title'] = 'Update Mmbership Rules';
        $data['membership_info'] = $this->edit_data_model->edit_all_membership_rule_by_id($membership_rules_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_membership',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_membership()
    {
        $data = array();
        $membership_rules_id = $this->input->post('membership_rules_id',true);
        $data['membership_rules_description'] = $this->input->post('membership_rules_description',true);
        
        $this->edit_data_model->update_membership_info($data,$membership_rules_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_mambership/'.$membership_rules_id);
    }
    
    public function edit_award($award_id)
    {
        $data = array();
        $data['title'] = 'Update Award Information';
        $data['award_info'] = $this->edit_data_model->edit_award_info_by_id($award_id);
        $data['admin_maincontent'] = $this->load->view('admin/edit_award',$data,true);
        $this->load->view('admin/admin_master',$data);
    }
    
    public function update_award()
    {
        $data = array();
        $award_id = $this->input->post('award_id',true);
        $data['award_short_description'] = $this->input->post('award_short_description',true);
        $data['award_long_description'] = $this->input->post('award_long_description',true);
        
        $this->edit_data_model->update_award_info($data,$award_id);
        $sdata = array();
        $sdata['message'] = 'Update Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_award/'. $award_id);
    }
    
}
