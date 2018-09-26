<?php

/**
 * Description of update_data_model
 *
 * @author Mohin Jaki
 */
class update_data_model extends CI_Model {
    
    public function update_admin_by_admin_id($admin_id)
    {
        $this->db->set('access_level',3);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function update_editor_by_admin_id($admin_id)
    {
        $this->db->set('access_level',2);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function delete_admin_by_admin_id($admin_id)
    {
        $this->db->set('deletion_status',1);
        $this->db->where('admin_id',$admin_id);
        $this->db->update('tbl_admin');
    }
    
    public function published_slider_by_slider_id($slider_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('slider_id',$slider_id);
        $this->db->update('tbl_slider');
    }
    
    public function unpublished_slider_by_slider_id($slider_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('slider_id',$slider_id);
        $this->db->update('tbl_slider');
    }
    
    public function delete_slider_by_slider_id($slider_id)
    {
        $this->db->where('slider_id',$slider_id);
        $this->db->delete('tbl_slider');
    }
    
    public function published_chairman_by_chairman_id($chairman_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('chairman_id',$chairman_id);
        $this->db->update('tbl_chairman');
    }
    
    public function unpublished_chairman_by_chairman_id($chairman_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('chairman_id',$chairman_id);
        $this->db->update('tbl_chairman');
    }
    
    public function delete_chairman_by_id($chairman_id)
    {
        $this->db->where('chairman_id',$chairman_id);
        $this->db->delete('tbl_chairman');
    }
    
    public function published_right_by_right_id($right_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('right_id',$right_id);
        $this->db->update('tbl_rights');
    }
    
    public function unpublished_right_by_right_id($right_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('right_id',$right_id);
        $this->db->update('tbl_rights');
    }
    
    public function delete_right_by_right_id($right_id)
    {
        $this->db->where('right_id',$right_id);
        $this->db->delete('tbl_rights');
    }
    
    public function published_video_by_video_id($video_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('video_id',$video_id);
        $this->db->update('tbl_video');
    }
    
    public function unpublished_video_by_video_id($video_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('video_id',$video_id);
        $this->db->update('tbl_video');
    }
    
    public function delete_video_by_video_id($video_id)
    {
        $this->db->where('video_id',$video_id);
        $this->db->delete('tbl_video');
    }
    
    public function published_event_by_event_id($event_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('event_id',$event_id);
        $this->db->update('tbl_event');
    }
    
    public function unpublished_event_by_event_id($event_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('event_id',$event_id);
        $this->db->update('tbl_event');
    }
    
    public function delete_event_by_event_id($event_id)
    {
        $this->db->where('event_id',$event_id);
        $this->db->delete('tbl_event');
    }
    
    public function published_news_by_news_id($news_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news');
    }
    
    public function unpublished_news_by_news_id($news_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('news_id',$news_id);
        $this->db->update('tbl_news');
    }
    
    public function delete_news_by_news_id($news_id)
    {
        $this->db->where('news_id',$news_id);
        $this->db->delete('tbl_news');
    }
    
    public function published_job_by_job_id($job_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_jobs');
    }
    
    public function unpublished_job_by_job_id($job_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('job_id',$job_id);
        $this->db->update('tbl_jobs');
    }
    
    public function delete_job_by_job_id($job_id)
    {
        $this->db->where('job_id',$job_id);
        $this->db->delete('tbl_jobs');
    }

        public function published_iop_by_iop_by_id($iop_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('iop_id',$iop_id);
        $this->db->update('tbl_ideal_principles');
    }
    
    public function unpublished_iop_by_iop_by_id($iop_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('iop_id',$iop_id);
        $this->db->update('tbl_ideal_principles');
    }
    
    public function delete_iop_by_iop_by_id($iop_id)
    {
        $this->db->where('iop_id',$iop_id);
        $this->db->delete('tbl_ideal_principles');
    }
    
    public function published_background_by_id($background_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('background_id',$background_id);
        $this->db->update('tbl_background');
    }
    
    public function unpublished_background_by_id($background_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('background_id',$background_id);
        $this->db->update('tbl_background');
    }
    
    public function delete_background_by_id($background_id)
    {
        $this->db->where('background_id',$background_id);
        $this->db->delete('tbl_background');
    }

    public function published_executive_by_executive_id($executive_council_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('executive_council_id',$executive_council_id);
        $this->db->update('tbl_executive_council');
    }
    
    public function unpublished_executive_by_executive_id($executive_council_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('executive_council_id',$executive_council_id);
        $this->db->update('tbl_executive_council');
    }
    
    public function delete_executive_by_executive_id($executive_council_id)
    {
        $this->db->where('executive_council_id',$executive_council_id);
        $this->db->delete('tbl_executive_council');
    }
    
    public function published_student_unit_by_unit_id($student_unit_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('student_unit_id',$student_unit_id);
        $this->db->update('tbl_student_unit');
    }
    
    public function unpublished_student_unit_by_unit_id($student_unit_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('student_unit_id',$student_unit_id);
        $this->db->update('tbl_student_unit');
    }
    
    public function delete_student_unit_by_unit_id($student_unit_id)
    {
        $this->db->where('student_unit_id',$student_unit_id);
        $this->db->delete('tbl_student_unit');
    }
    
    public function published_nature_by_nature_id($nature_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('nature_id',$nature_id);
        $this->db->update('tbl_nature');
    }
    
    public function unpublished_nature_by_nature_id($nature_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('nature_id',$nature_id);
        $this->db->update('tbl_nature');
    }
    
    public function delete_nature_by_nature_id($nature_id)
    {
        $this->db->where('nature_id',$nature_id);
        $this->db->delete('tbl_nature');
    }
    
    public function published_membership_by_membership_id($membership_rules_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('membership_rules_id',$membership_rules_id);
        $this->db->update('tbl_membership_rules');
    }
    
    public function unpublished_membership_by_membership_id($membership_rules_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('membership_rules_id',$membership_rules_id);
        $this->db->update('tbl_membership_rules');
    }
    
    public function delete_membership_by_membership_id($membership_rules_id)
    {
        $this->db->where('membership_rules_id',$membership_rules_id);
        $this->db->delete('tbl_membership_rules');
    }
    
    public function published_founder_by_founder_id($founder_members_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('founder_members_id',$founder_members_id);
        $this->db->update('tbl_founder_members');
    }
    
    public function unpublished_founder_by_founder_id($founder_members_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('founder_members_id',$founder_members_id);
        $this->db->update('tbl_founder_members');
    }
    
    public function delete_founder_by_founder_id($founder_members_id)
    {
        $this->db->where('founder_members_id',$founder_members_id);
        $this->db->delete('tbl_founder_members');
    }
    
    public function published_forlife_by_founder_id($forlife_members_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('forlife_members_id',$forlife_members_id);
        $this->db->update('tbl_forlife_members');
    }
    
    public function unpublished_forlife_by_founder_id($forlife_members_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('forlife_members_id',$forlife_members_id);
        $this->db->update('tbl_forlife_members');
    }
    
    public function delete_forlife_by_founder_id($forlife_members_id)
    {
        $this->db->where('forlife_members_id',$forlife_members_id);
        $this->db->delete('tbl_forlife_members');
    }
    
    public function published_adviser_by_adviser_id($adviser_members_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('adviser_members_id',$adviser_members_id);
        $this->db->update('tbl_adviser_members');
    }
    
    public function unpublished_adviser_by_adviser_id($adviser_members_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('adviser_members_id',$adviser_members_id);
        $this->db->update('tbl_adviser_members');
    }
    
    public function delete_adviser_by_adviser_id($adviser_members_id)
    {
        $this->db->where('adviser_members_id',$adviser_members_id);
        $this->db->delete('tbl_adviser_members');
    }
    
    public function published_union_by_union_id($union_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('union_id',$union_id);
        $this->db->update('tbl_union');
    }
    
    public function unpublished_union_by_union_id($union_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('union_id',$union_id);
        $this->db->update('tbl_union');
    }
    
    public function delete_union_by_union_id($union_id)
    {
        $this->db->where('union_id',$union_id);
        $this->db->delete('tbl_union');
    }
    
    public function published_union_image_by_union_id($union_image_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('union_image_id',$union_image_id);
        $this->db->update('tbl_union_image');
    }
    
    public function unpublished_union_image_by_union_id($union_image_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('union_image_id',$union_image_id);
        $this->db->update('tbl_union_image');
    }
    
    public function delete_union_image_by_union_id($union_image_id)
    {
        $this->db->where('union_image_id',$union_image_id);
        $this->db->delete('tbl_union_image');
    }
    
    public function public_wishperson_by_id($wiseperson_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('wiseperson_id',$wiseperson_id);
        $this->db->update('tbl_wiseperson');
    }
    
    public function unpublish_wishperson_by_id($wiseperson_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('wiseperson_id',$wiseperson_id);
        $this->db->update('tbl_wiseperson');
    }
    
    public function delete_wishperson_by_id($wiseperson_id)
    {
        $this->db->where('wiseperson_id',$wiseperson_id);
        $this->db->delete('tbl_wiseperson');
    }
    
    public function published_son_bd_by_sons_id($produdson_bd_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('produdson_bd_id',$produdson_bd_id);
        $this->db->update('tbl_produdsons_bd');
    }
    
    public function unpublished_son_bd_by_sons_id($produdson_bd_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('produdson_bd_id',$produdson_bd_id);
        $this->db->update('tbl_produdsons_bd');
    }
    
    public function delete_son_bd_by_sons_id($produdson_bd_id)
    {
        $this->db->where('produdson_bd_id',$produdson_bd_id);
        $this->db->delete('tbl_produdsons_bd');
    }
    
    public function published_son_by_sons_int_id($produdson_int_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('produdson_int_id',$produdson_int_id);
        $this->db->update('tbl_produdsons_int');
    }
    
    public function unpublished_son_by_sons_int_id($produdson_int_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('produdson_int_id',$produdson_int_id);
        $this->db->update('tbl_produdsons_int');
    }
    
    public function delete_son_by_sons_int_id($produdson_int_id)
    {
        $this->db->where('produdson_int_id',$produdson_int_id);
        $this->db->delete('tbl_produdsons_int');
    }
    
    public function published_publication_by_id($publications_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('publications_id',$publications_id);
        $this->db->update('tbl_publications');
    }
    
    public function unpublished_publication_by_id($publications_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('publications_id',$publications_id);
        $this->db->update('tbl_publications');
    }
    
    public function delete_publication_by_id($publications_id)
    {
        $this->db->where('publications_id',$publications_id);
        $this->db->delete('tbl_publications');
    }
    
    public function published_first_add($advertisement_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->update('tbl_advertisement');
    }
    
    public function unpublished_first_add($advertisement_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->update('tbl_advertisement');
    }
    
    public function delete_first_add($advertisement_id)
    {
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->delete('tbl_advertisement');
    }
    
    public function published_second_add($advertisement_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->update('tbl_advertisement2');
    }
    
    public function unpublished_second_add($advertisement_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->update('tbl_advertisement2');
    }
    
    public function delete_second_add($advertisement_id)
    {
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->delete('tbl_advertisement2');
    }
    
    public function unpublished_third_add($advertisement_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->update('tbl_advertisement3');
    }
    
    public function published_third_add($advertisement_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->update('tbl_advertisement3');
    }
    
    public function delete_third_add($advertisement_id)
    {
        $this->db->where('advertisement_id',$advertisement_id);
        $this->db->delete('tbl_advertisement3');
    }

    public function published_award_by_award_id($award_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('award_id',$award_id);
        $this->db->update('tbl_award');
    }
    
    public function unpublished_award_by_award_id($award_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('award_id',$award_id);
        $this->db->update('tbl_award');
    }
    
    public function delete_award_by_award_id($award_id)
    {
        $this->db->where('award_id',$award_id);
        $this->db->delete('tbl_award');
    }
    
    public function published_gallery_by_id($gallery_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('gallery_id',$gallery_id);
        $this->db->update('tbl_gallery');
    }
    
    public function unpublished_gallery_by_id($gallery_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('gallery_id',$gallery_id);
        $this->db->update('tbl_gallery');
    }
    
    public function delete_gallery_by_id($gallery_id)
    {
        $this->db->where('gallery_id',$gallery_id);
        $this->db->delete('tbl_gallery');
    }
    
    public function published_address_by_id($address_id)
    {
        $this->db->set('publication_status',2);
        $this->db->where('address_id',$address_id);
        $this->db->update('tbl_address');
    }
    
    public function unpublished_address_by_id($address_id)
    {
        $this->db->set('publication_status',1);
        $this->db->where('address_id',$address_id);
        $this->db->update('tbl_address');
    }

    public function delete_address_by_id($address_id)
    {
        $this->db->where('address_id',$address_id);
        $this->db->delete('tbl_address');
    }
    
    public function delete_contacter_all_by_id($contacter_id)
    {
        $this->db->where('contacter_id',$contacter_id);
        $this->db->delete('tbl_contacter');
    }
    
}
