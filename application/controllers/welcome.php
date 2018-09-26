<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

class Welcome extends CI_Controller {

    /**
     * Index Page for this controller.
     *
     * Maps to the following URL
     * 		http://example.com/index.php/welcome
     * 	- or -  
     * 		http://example.com/index.php/welcome/index
     * 	- or -
     * Since this controller is set as the default controller in 
     * config/routes.php, it's displayed at http://example.com/
     *
     * So any other public methods not prefixed with an underscore will
     * map to /index.php/welcome/<method_name>
     * @see http://codeigniter.com/user_guide/general/urls.html
     */
    public function index() 
    {
        $data = array();
        $data['title'] = 'গর্বের বাকেরগঞ্জ';
        $data['slider'] = true;
        $data['add_second'] = true;
        $data['slider_three'] = true;
        $data['chairman_data'] = $this->welcome_model->select_published_chairman_data();
        $data['published_video'] = $this->welcome_model->select_published_video();
        $data['published_rights'] = $this->welcome_model->select_published_rights();
        $data['published_ip'] = $this->welcome_model->select_published_ip();
        $data['first_add'] = $this->welcome_model->select_first_add();
        $data['second_add'] = $this->welcome_model->select_second_add();
        $data['thired_add'] = $this->welcome_model->select_thired_add();
        $data['maincontent'] = $this->load->view('home_content',$data,true);
        $data['all_published_slider'] = $this->welcome_model->select_published_slider();
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function chairman_details($chairman_id)
    {
        $data = array();
        $data['title'] = 'চেয়ারম্যান ডিটেইলস';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['chairman_data'] = $this->welcome_model->select_published_chairman_data();
        $data['maincontent'] = $this->load->view('chairman_details_page',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }

     public function background()
    {
        $data = array();
        $data['title'] = 'পটভূমি';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_background'] = $this->welcome_model->select_published_background();
        $data['maincontent'] = $this->load->view('background',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function executive_member()
    {
        $data = array();
        $data['title'] = 'কার্যনির্বাহী পরিযদ';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_executive'] = $this->welcome_model->select_published_executive();
        $data['maincontent'] = $this->load->view('executive',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function students_unity()
    {
        $data = array();
        $data['title'] = 'ছাত্র ইউনিট';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_students_unity'] = $this->welcome_model->select_published_students_unity();
        $data['maincontent'] = $this->load->view('student_unit',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function development_system()
    {
        $data = array();
        $data['title'] = 'গঠনতন্ত্র';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['published_developmemnt_system'] = $this->welcome_model->select_published_development_system();
        $data['maincontent'] = $this->load->view('nature',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function membership_rules()
    {
        $data = array();
        $data['title'] = 'সদস্য হওয়ার নিয়মাবলী';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['published_new_membership_lows'] = $this->welcome_model->select_published_new_membership();
        $data['maincontent'] = $this->load->view('new_membership',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function founder_member()
    {
        $data = array();
        $data['title'] = 'প্রতিষ্ঠা সদস্য';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_founder'] = $this->welcome_model->select_all_published_founder_info();
        $data['maincontent'] = $this->load->view('founder',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function adviser_member()
    {
        $data = array();
        $data['title'] = 'উপদেষ্টা সদস্য';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_adviser'] = $this->welcome_model->select_all_published_adviser_info();
        $data['maincontent'] = $this->load->view('adviser',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function lifetime_member()
    {
        $data = array();
        $data['title'] = 'আজীবন সদস্য';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_lifetile_member'] = $this->welcome_model->select_all_published_litile_info();
        $data['maincontent'] = $this->load->view('lifetime',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function famous_people()
    {
        $data = array();
        $data['title'] = 'গুণীজন';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_famous'] = $this->welcome_model->select_published_famous_people();
        $data['maincontent'] = $this->load->view('famous',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function famous_people_bd()
    {
        $data = array();
        $data['title'] = 'বাংলাদেশ';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_famous_bd'] = $this->welcome_model->select_published_famous_people_bd();
        $data['maincontent'] = $this->load->view('famous_bd',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function famous_people_int()
    {
        $data = array();
        $data['title'] = 'আন্তর্জাতিক';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_famous_int'] = $this->welcome_model->select_published_famous_people_int();
        $data['maincontent'] = $this->load->view('famous_int',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function publication()
    {
        $data = array();
        $data['title'] = 'প্রকাশনা';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_publication'] = $this->welcome_model->select_published_publication();
        $data['maincontent'] = $this->load->view('publication',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function prize()
    {
        $data = array();
        $data['title'] = 'পুরষ্কার';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_award'] = $this->welcome_model->select_published_award();
        $data['maincontent'] = $this->load->view('prize',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function view_details_award($award_id)
    {
        $data = array();
        $data['title'] = 'পুরষ্কার';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['prize_details'] = $this->welcome_model->select_award_details_by_id($award_id);
        $data['maincontent'] = $this->load->view('award_details',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }

        public function gallery()
    {
        $data = array();
        $data['title'] = 'ছবিঘর';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_gallery'] = $this->welcome_model->select_published_gallery_image();
        $data['maincontent'] = $this->load->view('gallery',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function contact()
    {
        $data = array();
        $data['title'] = 'যোগাযোগ';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['maincontent'] = $this->load->view('contact','',true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function archive_event()
    {
        $data = array();
        $data['title'] = 'ইভেন্ট আরকাইভ';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_archive_event'] = $this->welcome_model->select_all_published_archive_event();
        $data['maincontent'] = $this->load->view('events_archive',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function event_details($event_id)
    {
        $data = array();
        $data['title'] = 'ইভেন্ট ডিটেইলস';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['event_details_info'] = $this->welcome_model->select_event_details_info($event_id);
        $data['maincontent'] = $this->load->view('event_details',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }

    public function archive_news()
    {
        $data = array();
        $data['title'] = 'নিউজ আরকাইভ';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_archive_news'] = $this->welcome_model->select_all_published_archive_news();
        $data['maincontent'] = $this->load->view('news_archive',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function news_details($news_id)
    {
        $data = array();
        $data['title'] = 'নিউজ ডিটেইলস';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['news_details_info'] = $this->welcome_model->select_event_news_info($news_id);
        $data['maincontent'] = $this->load->view('news_details',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function archive_jobs()
    {
        $data = array();
        $data['title'] = 'জব আরকাইভ';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_published_jobs'] = $this->welcome_model->select_all_published_archive_jobs();
        $data['maincontent'] = $this->load->view('jobs_archive',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }


    public function job_details($job_id)
    {
        $data = array();
        $data['title'] = 'জব ডিটেইলস';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['job_details_info'] = $this->welcome_model->select_job_details_info($job_id);
        $data['maincontent'] = $this->load->view('job_details',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }
    
    public function union_details($union_id)
    {
        $data = array();
        $data['title'] = 'ইউনিয়ন ডিটেইলস';
        $data['slider'] = false;
        $data['add_second'] = false;
        $data['slider_three'] = false;
        $data['all_union_info'] = $this->welcome_model->select_all_union_info($union_id);
        $data['maincontent'] = $this->load->view('union_details_page',$data,true);
        $data['all_published_union'] = $this->welcome_model->select_published_union();
        $data['all_published_event'] = $this->welcome_model->select_published_event();
        $data['all_published_news'] = $this->welcome_model->select_published_news();
        $data['all_published_jobs'] = $this->welcome_model->select_published_jobs();
        $data['all_published_address'] = $this->welcome_model->select_published_address();
        $this->load->view('index',$data);
    }

}

/* End of file welcome.php */
/* Location: ./application/controllers/welcome.php */