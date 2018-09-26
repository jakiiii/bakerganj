<?php

/**
 * Description of edit_data_model
 *
 * @author Mohin Jaki
 */
class Edit_Data_Model extends CI_Model {
    
    public function update_slider_by_slider_info($slider_id)
    {
        $info = "SELECT * FROM tbl_slider WHERE slider_id = '$slider_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_slider_info($data,$slider_id)
    {
        $this->db->where('slider_id',$slider_id);
        $this->db->update('tbl_slider',$data);
    }
    
    public function view_union_info_by_id($union_id)
    {
        $info = "SELECT * FROM tbl_union WHERE union_id = '$union_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_union_info($data,$union_id)
    {
        $this->db->where('union_id',$union_id);
        $this->db->update('tbl_union',$data);
    }
    
    public function update_chairman_by_chairman_id($chairman_id)
    {
        $info = "SELECT * FROM tbl_chairman WHERE chairman_id = '$chairman_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_chairman_info($data,$chairman_id)
    {
        $this->db->where('chairman_id',$chairman_id);
        $this->db->update('tbl_chairman',$data);
    }
    
    public function edit_rights_by_right_id($right_id)
    {
        $info = "SELECT * FROM tbl_rights WHERE right_id = '$right_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_rights_info($data,$right_id)
    {
        $this->db->where('right_id',$right_id);
        $this->db->update('tbl_rights',$data);
    }
    
    public function edit_event_by_event_id($event_id)
    {
        $info = "SELECT * FROM tbl_event WHERE event_id = '$event_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_event_info($data,$event_id)
    {
        $this->db->where('event_id',$event_id);
        $this->db->update('tbl_event',$data);
    }
    
    public function edit_news_by_news_id($news_id)
    {
        $info = "SELECT * FROM tbl_news WHERE news_id = '$news_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_news_info_by_id($data,$news_id)
    {
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news',$data);
    }
    
    public function edit_job_by_news_id($job_id)
    {
        $info = "SELECT * FROM tbl_jobs WHERE job_id = '$job_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_job_info_by_id($data,$job_id)
    {
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_jobs',$data);
    }
    
    public function edit_background_by_id($background_id)
    {
        $info = "SELECT * FROM tbl_background WHERE background_id = '$background_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_background_info_by_id($data,$background_id)
    {
        $this->db->where('background_id',$background_id);
        $this->db->update('tbl_background',$data);
    }

    public function edit_all_membership_rule_by_id($membership_rules_id)
    {
        $info = "SELECT * FROM tbl_membership_rules WHERE membership_rules_id = '$membership_rules_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_membership_info($data,$membership_rules_id)
    {
        $this->db->where('membership_rules_id',$membership_rules_id);
        $this->db->update('tbl_membership_rules',$data);
    }
    
    public function edit_award_info_by_id($award_id)
    {
        $info = "SELECT * FROM tbl_award WHERE award_id = '$award_id'";
        $query_result = $this->db->query($info);
        $result = $query_result->row();
        return $result;
    }
    
    public function update_award_info($data,$award_id)
    {
        $this->db->where('award_id',$award_id);
        $this->db->update('tbl_award',$data);
    }
    
}
