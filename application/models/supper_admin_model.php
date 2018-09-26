<?php

/**
 * Description of supper_admin_model
 *
 * @author Mohin Jaki
 */
class supper_admin_model extends CI_Model{
    
    public function select_all_admin_info()
    {
        $this->db->select('*');
        $this->db->from('tbl_admin');
        $this->db->where('deletion_status',0);
        $query_result = $this->db->get();
        $result = $query_result->result();
        return $result;
    }

    public function select_all_slider()
    {
        $info = "SELECT * FROM tbl_slider ORDER BY slider_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_union()
    {
        $info = "SELECT * FROM tbl_union";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_union_image()
    {
        $info = "SELECT i.*, u.union_id, u.union_name FROM tbl_union_image as i, tbl_union as u WHERE u.union_id = i.union_id";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_chairman_info()
    {
        $info = "SELECT * FROM tbl_chairman";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_right()
    {
        $info = "SELECT * FROM tbl_rights";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_video_onfo()
    {
        $info = "SELECT * FROM tbl_video ORDER BY video_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_event_info()
    {
        $info = "SELECT * FROM tbl_event ORDER BY event_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_news_info()
    {
        $info = "SELECT * FROM tbl_news ORDER BY news_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_jobss_info()
    {
        $info = "SELECT * FROM tbl_jobs ORDER BY job_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_supper_admin_info()
    {
        $info = "SELECT * FROM tbl_background ORDER BY background_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_executive_info()
    {
        $info = "SELECT * FROM tbl_executive_council";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_student_unit_info()
    {
        $info = "SELECT * FROM tbl_student_unit";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_nature_info()
    {
        $info = "SELECT * FROM tbl_nature";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_membership_rule()
    {
        $info = "SELECT * FROM tbl_membership_rules";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_founder_info()
    {
        $info = "SELECT * FROM tbl_founder_members";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_for_life_info()
    {
        $info = "SELECT * FROM tbl_forlife_members";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_adviser_info()
    {
        $info = "SELECT * FROM tbl_adviser_members";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_wishperson_info()
    {
        $info = "SELECT * FROM tbl_wiseperson";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_sons_bd()
    {
        $info = "SELECT * FROM tbl_produdsons_bd";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_sons_int()
    {
        $info = "SELECT * FROM tbl_produdsons_int";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_award_info()
    {
        $info = "SELECT * FROM tbl_award ORDER BY award_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_advertisement_info()
    {
        $info = "SELECT * FROM tbl_advertisement ORDER BY advertisement_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_second_advertisement_info()
    {
        $info = "SELECT * FROM tbl_advertisement2 ORDER BY advertisement_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_third_advertisement_info()
    {
        $info = "SELECT * FROM tbl_advertisement3 ORDER BY advertisement_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_address_info()
    {
        $info = "SELECT * FROM tbl_address";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_ip_info()
    {
        $info = "SELECT * FROM tbl_ideal_principles";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
    public function select_all_gallery_images()
    {
        $info = "SELECT * FROM tbl_gallery ORDER BY gallery_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_message_info()
    {
        $info = "SELECT * FROM tbl_contacter ORDER BY contacter_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }

    public function select_all_publication_info()
    {
        $info = "SELECT * FROM tbl_publications ORDER BY publications_id DESC";
        $query_result = $this->db->query($info);
        $result = $query_result->result();
        return $result;
    }
    
}
