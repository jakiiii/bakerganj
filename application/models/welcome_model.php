<?php

/**
 * Description of welcome_model
 *
 * @author Mohin Jaki
 */
class welcome_model extends CI_Model {
    
    public function select_published_union()
    {
        $this->db->select('*');
        $this->db->from('tbl_union');
        $this->db->where('publication_status',1);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_slider()
    {
        $this->db->select('*');
        $this->db->from('tbl_slider');
        $this->db->where('publication_status',1);
        $this->db->order_by('slider_id','desc');
        $this->db->limit(3);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_chairman_data()
    {
        $info = "SELECT * FROM tbl_chairman WHERE publication_status = 1 LIMIT 1";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_published_video()
    {
        $info = "SELECT * FROM tbl_video WHERE publication_status = '1' ORDER BY video_id DESC LIMIT 1";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }

        public function select_published_rights()
    {
        $info = "SELECT * FROM tbl_rights WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_published_ip()
    {
        $info = "SELECT * FROM tbl_ideal_principles WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_second_add()
    {
        $info = "SELECT * FROM tbl_advertisement2 WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_first_add()
    {
        $info = "SELECT * FROM tbl_advertisement WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_thired_add()
    {
        $info = "SELECT * FROM tbl_advertisement3 WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }

    public function select_published_event()
    {
        $info = "SELECT * FROM tbl_event WHERE publication_status = '1' ORDER BY event_id DESC LIMIT 10";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_published_archive_event()
    {
        $info = "SELECT * FROM tbl_event WHERE publication_status = '1' ORDER BY event_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_event_details_info($event_id)
    {
        $info = "SELECT * FROM tbl_event WHERE event_id ='$event_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }

    public function select_all_published_archive_news()
    {
        $info = "SELECT * FROM tbl_news WHERE publication_status = '1' ORDER BY news_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }

    public function select_published_news()
    {
        $info = "SELECT * FROM tbl_news WHERE publication_status = '1' ORDER BY news_id DESC LIMIT 10";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_event_news_info($news_id)
    {
         $info = "SELECT * FROM tbl_news WHERE news_id ='$news_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_all_published_archive_jobs()
    {
        $info = "SELECT * FROM tbl_jobs WHERE publication_status = '1' ORDER BY job_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }

     public function select_job_details_info($job_id)
    {
        $info = "SELECT * FROM tbl_jobs WHERE job_id ='$job_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }

    public function select_published_address()
    {
        $info = "SELECT * FROM tbl_address WHERE publication_status = '1' LIMIT 1";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_published_jobs()
    {
        $info = "SELECT * FROM tbl_jobs WHERE publication_status = '1' ORDER BY job_id DESC LIMIT 10";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_background()
    {
        $info = "SELECT * FROM tbl_background WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }

    public function select_published_executive()
    {
        $info = "SELECT * FROM tbl_executive_council WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_students_unity()
    {
        $info = "SELECT * FROM tbl_student_unit WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_development_system()
    {
        $info = "SELECT * FROM tbl_nature WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_published_new_membership()
    {
        $info = "SELECT * FROM tbl_membership_rules WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function select_all_published_founder_info()
    {
        $info = "SELECT * FROM tbl_founder_members WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_published_adviser_info()
    {
        $info = "SELECT * FROM tbl_adviser_members WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_published_litile_info()
    {
        $info = "SELECT * FROM tbl_forlife_members WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_famous_people()
    {
        $info = "SELECT * FROM tbl_wiseperson WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_famous_people_bd()
    {
        $info = "SELECT * FROM tbl_produdsons_bd WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_famous_people_int()
    {
        $info = "SELECT * FROM tbl_produdsons_int WHERE publication_status = '1'";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_publication()
    {
        $info = "SELECT * FROM tbl_publications WHERE publication_status = '1' ORDER BY publications_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_published_award()
    {
        $info = "SELECT * FROM tbl_award WHERE publication_status = '1' ORDER BY award_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_award_details_by_id($award_id)
    {
        $info = "SELECT * FROM tbl_award WHERE award_id = '$award_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }

    public function select_published_gallery_image()
    {
        $info = "SELECT * FROM tbl_gallery WHERE publication_status = '1' ORDER BY gallery_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_union_info($union_id)
    {
        $info = "SELECT * FROM tbl_union WHERE publication_status = '1' AND union_id = '$union_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
}
