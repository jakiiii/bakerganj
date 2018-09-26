<?php

/**
 * Description of Insert_Data_Model
 *
 * @author Mohin Jaki
 */
class Insert_Data_Model extends CI_Model {
    
    public function save_admin_info($data)
    {
        $this->db->insert('tbl_admin',$data);
    }
    
    public function save_slider_info($data)
    {
        $this->db->insert('tbl_slider',$data);
    }
    
    public function save_union_info($data)
    {
        $this->db->insert('tbl_union',$data);
    }
    
    public function save_slider_image_info($data)
    {
        $this->db->insert('tbl_union_image',$data);
    }
    
    public function save_chairman_info($data)
    {
        $this->db->insert('tbl_chairman',$data);
    }
    
    public function save_rights_info($data)
    {
        $this->db->insert('tbl_rights',$data);
    }
    
    public function save_video_link($data)
    {
        $this->db->insert('tbl_video',$data);
    }
    
    public function save_event_info($data)
    {
        $this->db->insert('tbl_event',$data);
    }
    
    public function save_news_info($data)
    {
        $this->db->insert('tbl_news',$data);
    }
    
    public function save_jobs_info($data)
    {
        $this->db->insert('tbl_jobs',$data);
    }
    
    public function save_background_info($data)
    {
        $this->db->insert('tbl_background',$data);
    }

    public function save_executive_info($data)
    {
        $this->db->insert('tbl_executive_council',$data);
    }
    
    public function save_student_info($data)
    {
        $this->db->insert('tbl_student_unit',$data);
    }
    
    public function save_nature_info($data)
    {
        $this->db->insert('tbl_nature',$data);
    }
    
    public function save_membership_info($data)
    {
        $this->db->insert('tbl_membership_rules',$data);
    }
    
    public function save_founder_info($data)
    {
        $this->db->insert('tbl_founder_members',$data);
    }
    
    public function save_forlife_info($data)
    {
        $this->db->insert('tbl_forlife_members',$data);
    }
    
    public function save_avsider_info($data)
    {
        $this->db->insert('tbl_adviser_members',$data);
    }
    
    public function save_wiseperson_info($data)
    {
        $this->db->insert('tbl_wiseperson',$data);
    }
    
    public function save_bd_info($data)
    {
        $this->db->insert('tbl_produdsons_bd',$data);
    }
    
    public function save_int_info($data)
    {
        $this->db->insert('tbl_produdsons_int',$data);
    }
    
    public function save_award_info($data)
    {
        $this->db->insert('tbl_award',$data);
    }
    
    public function save_add_info($data)
    {
        $this->db->insert('tbl_advertisement',$data);
    }
    
    public function save_second_add_info($data)
    {
        $this->db->insert('tbl_advertisement2',$data);
    }
    
    public function save_thired_add_info($data)
    {
        $this->db->insert('tbl_advertisement3',$data);
    }

    public function save_address_info($data)
    {
        $this->db->insert('tbl_address',$data);
    }
    
    public function save_ip_info($data)
    {
        $this->db->insert('tbl_ideal_principles',$data);
    }
    
    public function save_publication_info($data)
    {
        $this->db->insert('tbl_publications',$data);
    }
    
    public function save_gallery_image($data)
    {
        $this->db->insert('tbl_gallery',$data);
    }

    public function insert_contactor_information($data)
    {
        $this->db->insert('tbl_contacter',$data);
    }
    
    
}
