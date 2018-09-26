<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of Insert_Data
 *
 * @author Mohin Jaki
 */
class Insert_Data extends CI_Controller {
    
    public function insert_admin_info()
    {
        $data = array();
        $data['admin_name'] = $this->input->post('admin_name',true);
        $data['admin_email'] = $this->input->post('admin_email',true);
        
        $password = $this->input->post('admin_password',true);
        $data['admin_password'] = md5($password);
        
        $data['access_level'] = $this->input->post('access_level',true);
        $this->insert_data_model->save_admin_info($data);
        $sdata = array();
        $sdata['message'] = 'Admin Information Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/admin_manage');
    }
    
    public function save_slider()
    {
        $data = array();
        $data['slider_name'] = $this->input->post('slider_name',true);
        $data['slider_descrription'] = $this->input->post('slider_descrription',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        /*
         * Start of File Upload
         */
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '1024';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('slider_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_slider');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['slider_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_slider_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Slider Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_slider');
    }
    
    public function save_union()
    {
        $data = array();
        $data['union_name'] = $this->input->post('union_name',true);
        $data['union_description'] = $this->input->post('union_description',true);
        $data['union_information'] = $this->input->post('union_information',true);
        $data['union_tourism_tradition'] = $this->input->post('union_tourism_tradition',true);
        $data['union_agriculture'] = $this->input->post('union_agriculture',true);
        $data['union_educational'] = $this->input->post('union_educational',true);
        $data['union_health'] = $this->input->post('union_health',true);
        $data['union_map'] = $this->input->post('union_map',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        $this->insert_data_model->save_union_info($data);
        $sdata['message'] = 'Union Information Save Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_union');
    }
    
    public function save_union_img()
    {
        $data = array();
        $data['union_id'] = $this->input->post('union_id',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('union_image_file'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_union');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['union_image_file'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_slider_image_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Slider Image Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_union');
    }
    
    public function save_chairman_data()
    {
        $data = array();
        $data['chairman_name'] = $this->input->post('chairman_name',true);
        $data['chairman_short_description'] = $this->input->post('chairman_short_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        $data['chairman_long_description'] = $this->input->post('chairman_long_description',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('chairman_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_chairman');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['chairman_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_chairman_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_chairman');
    }
    
    public function save_rights()
    {
        $data = array();
        $data['right_description'] = $this->input->post('right_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        $this->insert_data_model->save_rights_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_rights');
    }
    
    public function save_video()
    {
        $data = array();
        $data['video_name'] = $this->input->post('video_name',true);
        $data['video_link'] = $this->input->post('video_link',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        $this->insert_data_model->save_video_link($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_video');
    }
    
    public function save_event()
    {
        $data = array();
        $data['event_name'] = $this->input->post('event_name',true);
        $data['author_name'] = $this->input->post('author_name',true);
        $data['event_description'] = $this->input->post('event_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '512';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('event_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_event');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['event_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_event_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_event');
    }
    
    public function save_news()
    {
        $data = array();
        $data['news_title'] = $this->input->post('news_title',true);
        $data['author_name'] = $this->input->post('author_name',true);
        $data['news_description'] = $this->input->post('news_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '512';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('news_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_news');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['news_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_news_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_news');
    }
    
    public function save_jobs()
    {
        $data = array();
        $data['job_title'] = $this->input->post('job_title',true);
        $data['job_description'] = $this->input->post('job_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '512';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('job_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_news');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['job_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_jobs_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_job');
    }
    
    public function save_background_data()
    {
        $data = array();
        $data['background_description'] = $this->input->post('background_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $this->insert_data_model->save_background_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_background');
    }

    public function save_executive()
    {
        $data = array();
        $data['executive_council_name'] =  $this->input->post('executive_council_name',true);
        $data['executive_council_designation'] =  $this->input->post('executive_council_designation',true);
        $data['executive_council_email'] =  $this->input->post('executive_council_email',true);
        $data['executive_council_phone'] =  $this->input->post('executive_council_phone',true);
        $data['executive_council_home_address'] =  $this->input->post('executive_council_home_address',true);
        $data['executive_council_current_address'] =  $this->input->post('executive_council_current_address',true);
        $data['publication_status'] =  $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('executive_council_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_executive');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['executive_council_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_executive_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_executive');
    }
    
    public function save_student()
    {
        $data = array();
        $data['student_unit_name'] = $this->input->post('student_unit_name',true);
        $data['student_unit_designation'] = $this->input->post('student_unit_designation',true);
        $data['student_unit_email'] = $this->input->post('student_unit_email',true);
        $data['student_unit_educational_institution'] = $this->input->post('student_unit_educational_institution',true);
        $data['student_unit_home_address'] = $this->input->post('student_unit_home_address',true);
        $data['student_unit_image'] = $this->input->post('student_unit_image',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('student_unit_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_student_unit');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['student_unit_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_student_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_student_unit');
    }
    
    public function save_nature()
    {
        $data = array();
        $data['nature_description'] = $this->input->post('nature_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_files/';
        $config['allowed_types']      = 'pdf';
        $config['max_size']              = '2048';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('nature_file'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_nature');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['nature_file'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_nature_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_nature');
    }
    
    public function save_membership()
    {
        $data = array();
        $data['membership_rules_description'] = $this->input->post('membership_rules_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_files/';
        $config['allowed_types']      = 'pdf';
        $config['max_size']              = '2048';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('membership_rules_form'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_mambership');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['membership_rules_form'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_membership_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_mambership');
    }
    
    public function save_founder()
    {
        $data = array();
        $data['founder_members_name'] = $this->input->post('founder_members_name',true);
        $data['founder_members_designation'] = $this->input->post('founder_members_designation',true);
        $data['founder_members_email'] = $this->input->post('founder_members_email',true);
        $data['founder_members_phone'] = $this->input->post('founder_members_phone',true);
        $data['founder_members_address'] = $this->input->post('founder_members_address',true);
        $data['founder_members_about'] = $this->input->post('founder_members_about',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('founder_members_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_founder');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['founder_members_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_founder_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_founder');
    }
    
    public function save_lifemember()
    {
        $data = array();
        $data['forlife_members_name'] = $this->input->post('forlife_members_name',true);
        $data['forlife_members_designation'] = $this->input->post('forlife_members_designation',true);
        $data['forlife_members_email'] = $this->input->post('forlife_members_email',true);
        $data['forlife_members_phone'] = $this->input->post('forlife_members_phone',true);
        $data['forlife_members_address'] = $this->input->post('forlife_members_address',true);
        $data['forlife_members_about'] = $this->input->post('forlife_members_about',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('forlife_members_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_forlife_member');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['forlife_members_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_forlife_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_forlife_member');
    }
    
    public function save_adviser()
    {
        $data = array();
        $data['adviser_members_name'] = $this->input->post('adviser_members_name',true);
        $data['adviser_members_designation'] = $this->input->post('adviser_members_designation',true);
        $data['adviser_members_email'] = $this->input->post('adviser_members_email',true);
        $data['adviser_members_phone'] = $this->input->post('adviser_members_phone',true);
        $data['adviser_members_address'] = $this->input->post('adviser_members_address',true);
        $data['adviser_members_about'] = $this->input->post('adviser_members_about',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('adviser_members_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_advider');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['adviser_members_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_avsider_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_advider');
    }
    
    public function save_wiseperson()
    {
        $data = array();
        $data['wiseperson_name'] = $this->input->post('wiseperson_name',true);
        $data['wiseperson_description'] = $this->input->post('wiseperson_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('wiseperson_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_wiseperson');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['wiseperson_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_wiseperson_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_wiseperson');
    }
    
    public function save_bd()
    {
        $data = array();
        $data['produdsons_bd_name'] = $this->input->post('produdsons_bd_name',true);
        $data['produdson_bd_description'] = $this->input->post('produdson_bd_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('produdsons_bd_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_produdsons_bd');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['produdsons_bd_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_bd_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_produdsons_bd');
    }
    
    public function save_int()
    {
        $data = array();
        $data['produdsons_int_name'] = $this->input->post('produdsons_int_name',true);
        $data['produdson_int_description'] = $this->input->post('produdson_int_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('produdsons_int_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/management_produdsons_int');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['produdsons_int_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_int_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_produdsons_int');
    }
    
    public function save_award()
    {
        $data = array();
        $data['award_title'] = $this->input->post('award_title',true);
        $data['award_short_description'] = $this->input->post('award_short_description',true);
        $data['award_long_description'] = $this->input->post('award_long_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '256';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('award_long_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_award');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['award_long_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_award_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_award');
    }
    /*
     * Save Addvertisement One
     */
    public function save_add()
    {
        $data = array();
        $data['advertisement_title'] = $this->input->post('advertisement_title',true);
        $data['advertisement_link'] = $this->input->post('advertisement_link',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '300';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('advertisement_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_advertisement');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['advertisement_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_add_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_advertisement');
    }
    /*
     * Save Addvertisement Two
     */
    public function save_add_second()
    {
        $data = array();
        $data['advertisement_title2'] = $this->input->post('advertisement_title2',true);
        $data['advertisement_link2'] = $this->input->post('advertisement_link2',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '300';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('advertisement_image2'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_advertisement');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['advertisement_image2'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_second_add_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_advertisement');
    }
    /*
     * Save Addvertisement Three
     */
    public function save_third_add()
    {
        $data = array();
        $data['advertisement_title3'] = $this->input->post('advertisement_title3',true);
        $data['advertisement_link3'] = $this->input->post('advertisement_link3',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '300';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('advertisement_image3'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_advertisement');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['advertisement_image3'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_thired_add_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_advertisement');
    }
    
    public function save_publication()
    {
        $data = array();
        $data['publications_title'] = $this->input->post('publications_title',true);
        $data['publications_description'] = $this->input->post('publications_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg|pdf';
        $config['max_size']              = '512';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('publications_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_publication');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['publications_image'] = $config['upload_path'].$fdata['file_name'];
        }
        
        if ( ! $this->upload->do_upload('publications_file'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/new_publication');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['publications_file'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_publication_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/new_publication');
    }

    public function save_address()
    {
        $data = array();
        $data['address_description'] = $this->input->post('address_description',true);
        $data['address_phone'] = $this->input->post('address_phone',true);
        $data['address_email'] = $this->input->post('address_email',true);
        $data['facebook_link'] = $this->input->post('facebook_link',true);
        $data['twitter_link'] = $this->input->post('twitter_link',true);
        $data['googleplus_link'] = $this->input->post('googleplus_link',true);
        $data['youtube_link'] = $this->input->post('youtube_link',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $this->insert_data_model->save_address_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/management_address');
    }
    
    public function save_ip()
    {
        $data = array();
        $data['iop_ideal_description'] = $this->input->post('iop_ideal_description',true);
        $data['iop_principles_description'] = $this->input->post('iop_principles_description',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $this->insert_data_model->save_ip_info($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/iop_management');
    }
    
    public function save_picture()
    {
        $data = array();
        $data['gallery_name'] = $this->input->post('gallery_name',true);
        $data['publication_status'] = $this->input->post('publication_status',true);
        
        $config['upload_path']         = './asset/web_images/';
        $config['allowed_types']      = 'jpg|png|jpeg';
        $config['max_size']              = '300';

        $this->load->library('upload', $config);
        $this->upload->initialize($config);
        $error = array();
        $fdata = array();

        if ( ! $this->upload->do_upload('gallery_image'))
        {
	$error = $this->upload->display_errors();
                  $sdata = array();
                  $sdata['message'] = $error;
                  $this->session->set_userdata($sdata);
                  redirect('supper_admin/gallery_image');
        }
        else
        {
	$fdata = $this->upload->data();
                  $data['gallery_image'] = $config['upload_path'].$fdata['file_name'];
        }
        /*
         * End of File Upload
         */
        $this->insert_data_model->save_gallery_image($data);
        $sdata = array();
        $sdata['message'] = 'Save Information Successfully';
        $this->session->set_userdata($sdata);
        redirect('supper_admin/gallery_image');
    }

    public function save_contactor_into()
    {
        $data = array();
        $data['contacter_name'] = $this->input->post('contacter_name',true);
        $data['contacter_email'] = $this->input->post('contacter_email',true);
        $data['contacter_profession'] = $this->input->post('contacter_profession',true);
        $data['contacter_opinion'] = $this->input->post('contacter_opinion',true);
        
        $this->insert_data_model->insert_contactor_information($data);
        $sdata = array();
        $sdata['message'] = 'আপনার তথ্যটি প্রেরণ করা হয়েছে।';
        $this->session->set_userdata($sdata);
        redirect('welcome/contact');
    }
    
}
