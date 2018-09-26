<?php

if (!defined('BASEPATH'))
    exit('No direct script access allowed');

/**
 * Description of update_data
 *
 * @author Mohin Jaki
 */
class Update_Data extends CI_Controller {
    
    public function editor($admin_id)
    {
        $this->update_data_model->update_admin_by_admin_id($admin_id);
        redirect('supper_admin/admin_manage');
    }
    
    public function admin($admin_id)
    {
        $this->update_data_model->update_editor_by_admin_id($admin_id);
        redirect('supper_admin/admin_manage');
    }
    
    public function delete_admin($admin_id)
    {
        $this->update_data_model->delete_admin_by_admin_id($admin_id);
        redirect('supper_admin/admin_manage');
    }
    
    public function unpublished_slider($slider_id)
    {
        $this->update_data_model->published_slider_by_slider_id($slider_id);
        redirect('supper_admin/management_slider');
    }
    
    public function published_slider($slider_id)
    {
        $this->update_data_model->unpublished_slider_by_slider_id($slider_id);
        redirect('supper_admin/management_slider');
    }
    
    public function delete_slider($slider_id)
    {
        $this->update_data_model->delete_slider_by_slider_id($slider_id);
        redirect('supper_admin/management_slider');
    }
    
    public function unpublished_chairman($chairman_id)
    {
        $this->update_data_model->published_chairman_by_chairman_id($chairman_id);
        redirect('supper_admin/management_chairman');
    }
    
    public function published_chairman($chairman_id)
    {
        $this->update_data_model->unpublished_chairman_by_chairman_id($chairman_id);
        redirect('supper_admin/management_chairman');
    }
    
    public function delete_chairman($chairman_id)
    {
        $this->update_data_model->delete_chairman_by_id($chairman_id);
        redirect('supper_admin/management_chairman');
    }
    
    public function unpublished_rights($right_id)
    {
        $this->update_data_model->published_right_by_right_id($right_id);
        redirect('supper_admin/management_rights');
    }
    
    public function published_rights($right_id)
    {
        $this->update_data_model->unpublished_right_by_right_id($right_id);
        redirect('supper_admin/management_rights');
    }
    
    public function delete_rights($right_id)
    {
        $this->update_data_model->delete_right_by_right_id($right_id);
        redirect('supper_admin/management_rights');
    }
    
    public function unpublished_event($event_id)
    {
        $this->update_data_model->published_event_by_event_id($event_id);
        redirect('supper_admin/management_event');
    }
    
    public function published_event($event_id)
    {
        $this->update_data_model->unpublished_event_by_event_id($event_id);
        redirect('supper_admin/management_event');
    }
    
    public function delete_event($event_id)
    {
        $this->update_data_model->delete_event_by_event_id($event_id);
        redirect('supper_admin/management_event');
    }
    
    public function unpublication_news($news_id)
    {
        $this->update_data_model->published_news_by_news_id($news_id);
        redirect('supper_admin/management_news');
    }
    
    public function publication_news($news_id)
    {
        $this->update_data_model->unpublished_news_by_news_id($news_id);
        redirect('supper_admin/management_news');
    }
    
    public function delete_news($news_id)
    {
        $this->update_data_model->delete_news_by_news_id($news_id);
        redirect('supper_admin/management_news');
    }
    
    public function unpublication_jobs($job_id)
    {
        $this->update_data_model->published_job_by_job_id($job_id);
        redirect('supper_admin/management_job');
    }
    
    public function publication_jobs($job_id)
    {
        $this->update_data_model->unpublished_job_by_job_id($job_id);
        redirect('supper_admin/management_job');
    }
    
    public function delete_jobs($job_id)
    {
        $this->update_data_model->delete_job_by_job_id($job_id);
        redirect('supper_admin/management_job');
    }

        public function unpublished_ip($iop_id)
    {
        $this->update_data_model->published_iop_by_iop_by_id($iop_id);
        redirect('supper_admin/iop_management');
    }
    
    public function published_ip($iop_id)
    {
        $this->update_data_model->unpublished_iop_by_iop_by_id($iop_id);
        redirect('supper_admin/iop_management');
    }
    
    public function delete_ip($iop_id)
    {
        $this->update_data_model->delete_iop_by_iop_by_id($iop_id);
        redirect('supper_admin/iop_management');
    }
    
    public function unpublished_background($background_id)
    {
        $this->update_data_model->published_background_by_id($background_id);
        redirect('supper_admin/management_background');
    }
    
    public function published_background($background_id)
    {
        $this->update_data_model->unpublished_background_by_id($background_id);
        redirect('supper_admin/management_background');
    }
    
    public function delete_background($background_id)
    {
        $this->update_data_model->delete_background_by_id($background_id);
        redirect('supper_admin/management_background');
    }

        public function unpublished_executive($executive_council_id)
    {
        $this->update_data_model->published_executive_by_executive_id($executive_council_id);
        redirect('supper_admin/management_executive');
    }
    
    public function published_executive($executive_council_id)
    {
        $this->update_data_model->unpublished_executive_by_executive_id($executive_council_id);
        redirect('supper_admin/management_executive');
    }
    
    public function delete_executive($executive_council_id)
    {
        $this->update_data_model->delete_executive_by_executive_id($executive_council_id);
        redirect('supper_admin/management_executive');
    }
    
    public function unpublished_student($student_unit_id)
    {
        $this->update_data_model->published_student_unit_by_unit_id($student_unit_id);
        redirect('supper_admin/management_student_unit');
    }
    
    public function published_student($student_unit_id)
    {
        $this->update_data_model->unpublished_student_unit_by_unit_id($student_unit_id);
        redirect('supper_admin/management_student_unit');
    }
    
    public function delete_student($student_unit_id)
    {
        $this->update_data_model->delete_student_unit_by_unit_id($student_unit_id);
        redirect('supper_admin/management_student_unit');
    }
    
    public function unpublished_nature($nature_id)
    {
        $this->update_data_model->published_nature_by_nature_id($nature_id);
        redirect('supper_admin/management_nature');
    }
    
    public function published_nature($nature_id)
    {
        $this->update_data_model->unpublished_nature_by_nature_id($nature_id);
        redirect('supper_admin/management_nature');
    }
    
    public function delete_nature($nature_id)
    {
        $this->update_data_model->delete_nature_by_nature_id($nature_id);
        redirect('supper_admin/management_nature');
    }
    
    public function unpublished_membership($membership_rules_id)
    {
        $this->update_data_model->published_membership_by_membership_id($membership_rules_id);
        redirect('supper_admin/management_mambership');
    }
    
    public function published_membership($membership_rules_id)
    {
        $this->update_data_model->unpublished_membership_by_membership_id($membership_rules_id);
        redirect('supper_admin/management_mambership');
    }
    
    public function delete_membership($membership_rules_id)
    {
        $this->update_data_model->delete_membership_by_membership_id($membership_rules_id);
        redirect('supper_admin/management_mambership');
    }
    
    public function unpublished_founder($founder_members_id)
    {
        $this->update_data_model->published_founder_by_founder_id($founder_members_id);
        redirect('supper_admin/management_founder');
    }
    
    public function published_founder($founder_members_id)
    {
        $this->update_data_model->unpublished_founder_by_founder_id($founder_members_id);
        redirect('supper_admin/management_founder');
    }
    
    public function delete_founder($founder_members_id)
    {
        $this->update_data_model->delete_founder_by_founder_id($founder_members_id);
        redirect('supper_admin/management_founder');
    }
    
    public function unpublished_forlife($forlife_members_id)
    {
        $this->update_data_model->published_forlife_by_founder_id($forlife_members_id);
        redirect('supper_admin/management_forlife_member');
    }
    
    public function published_forlife($forlife_members_id)
    {
        $this->update_data_model->unpublished_forlife_by_founder_id($forlife_members_id);
        redirect('supper_admin/management_forlife_member');
    }
    
    public function delete_forlife($forlife_members_id)
    {
        $this->update_data_model->delete_forlife_by_founder_id($forlife_members_id);
        redirect('supper_admin/management_forlife_member');
    }
    
    public function unpublished_adviser($adviser_members_id)
    {
        $this->update_data_model->published_adviser_by_adviser_id($adviser_members_id);
        redirect('supper_admin/management_advider');
    }
    
    public function published_adviser($adviser_members_id)
    {
        $this->update_data_model->unpublished_adviser_by_adviser_id($adviser_members_id);
        redirect('supper_admin/management_advider');
    }
    
    public function delete_adviser($adviser_members_id)
    {
        $this->update_data_model->delete_adviser_by_adviser_id($adviser_members_id);
        redirect('supper_admin/management_advider');
    }
    
    public function unpublished_union($union_id)
    {
        $this->update_data_model->published_union_by_union_id($union_id);
        redirect('supper_admin/management_union');
    }
    
    public function published_union($union_id)
    {
        $this->update_data_model->unpublished_union_by_union_id($union_id);
        redirect('supper_admin/management_union');
    }
    
    public function delete_union($union_id)
    {
        $this->update_data_model->delete_union_by_union_id($union_id);
        redirect('supper_admin/management_union');
    }
    
    public function unpublished_union_image($union_image_id)
    {
        $this->update_data_model->published_union_image_by_union_id($union_image_id);
        redirect('supper_admin/management_union');
    }
    
    public function published_union_image($union_image_id)
    {
        $this->update_data_model->unpublished_union_image_by_union_id($union_image_id);
        redirect('supper_admin/management_union');
    }
    
    public function delete_union_image($union_image_id)
    {
        $this->update_data_model->delete_union_image_by_union_id($union_image_id);
        redirect('supper_admin/management_union');
    }
    
    public function unpublished_wishperson($wiseperson_id)
    {
        $this->update_data_model->public_wishperson_by_id($wiseperson_id);
        redirect('supper_admin/management_wiseperson');
    }
    
    public function published_wishperson($wiseperson_id)
    {
        $this->update_data_model->unpublish_wishperson_by_id($wiseperson_id);
        redirect('supper_admin/management_wiseperson');
    }
    
    public function delete_wishperson($wiseperson_id)
    {
        $this->update_data_model->delete_wishperson_by_id($wiseperson_id);
        redirect('supper_admin/management_wiseperson');
    }
    
    public function unpublished_sons_bd($produdson_bd_id)
    {
        $this->update_data_model->published_son_bd_by_sons_id($produdson_bd_id);
        redirect('supper_admin/management_produdsons_bd');
    }
    
    public function published_sons_bd($produdson_bd_id)
    {
        $this->update_data_model->unpublished_son_bd_by_sons_id($produdson_bd_id);
        redirect('supper_admin/management_produdsons_bd');
    }
    
    public function delete_sons_bd($produdson_bd_id)
    {
        $this->update_data_model->delete_son_bd_by_sons_id($produdson_bd_id);
        redirect('supper_admin/management_produdsons_bd');
    }
    
    public function unpublished_son_int($produdson_int_id)
    {
        $this->update_data_model->published_son_by_sons_int_id($produdson_int_id);
        redirect('supper_admin/management_produdsons_int');
    }
    
    public function published_son_int($produdson_int_id)
    {
        $this->update_data_model->unpublished_son_by_sons_int_id($produdson_int_id);
        redirect('supper_admin/management_produdsons_int');
    }
    
    public function delete_son_int($produdson_int_id)
    {
        $this->update_data_model->delete_son_by_sons_int_id($produdson_int_id);
        redirect('supper_admin/management_produdsons_int');
    }
    
    public function unpublished_publication($publications_id)
    {
        $this->update_data_model->published_publication_by_id($publications_id);
        redirect('supper_admin/management_publication');
    }
    
    public function published_publication($publications_id)
    {
        $this->update_data_model->unpublished_publication_by_id($publications_id);
        redirect('supper_admin/management_publication');
    }
    
    public function delete_publication($publications_id)
    {
        $this->update_data_model->delete_publication_by_id($publications_id);
        redirect('supper_admin/management_publication');
    }
    
    public function unpublished_award($award_id)
    {
        $this->update_data_model->published_award_by_award_id($award_id);
        redirect('supper_admin/management_award');
    }
    
    public function published_award($award_id)
    {
        $this->update_data_model->unpublished_award_by_award_id($award_id);
        redirect('supper_admin/management_award');
    }
    
    public function delete_award($award_id)
    {
        $this->update_data_model->delete_award_by_award_id($award_id);
        redirect('supper_admin/management_award');
    }
    
    public function unpublished_address($address_id)
    {
        $this->update_data_model->published_address_by_id($address_id);
        redirect('supper_admin/management_address');
    }
    
    public function published_address($address_id)
    {
        $this->update_data_model->unpublished_address_by_id($address_id);
        redirect('supper_admin/management_address');
    }
    
    public function unpublished_first_add($advertisement_id)
    {
        $this->update_data_model->published_first_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function published_first_add($advertisement_id)
    {
        $this->update_data_model->unpublished_first_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function delete_first_add($advertisement_id)
    {
        $this->update_data_model->delete_first_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function unpublished_second_add($advertisement_id)
    {
        $this->update_data_model->published_second_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function published_second_add($advertisement_id)
    {
        $this->update_data_model->unpublished_second_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function delete_second_add($advertisement_id)
    {
        $this->update_data_model->delete_second_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function unpublished_third_add($advertisement_id)
    {
        $this->update_data_model->unpublished_third_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function published_third_add($advertisement_id)
    {
        $this->update_data_model->published_third_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function delete_third_add($advertisement_id)
    {
        $this->update_data_model->delete_third_add($advertisement_id);
        redirect('supper_admin/management_advertisement');
    }
    
    public function unpublished_image($gallery_id)
    {
        $this->update_data_model->published_gallery_by_id($gallery_id);
        redirect('supper_admin/gallery_image');
    }
    
    public function published_image($gallery_id)
    {
        $this->update_data_model->unpublished_gallery_by_id($gallery_id);
        redirect('supper_admin/gallery_image');
    }
    
    public function delete_image($gallery_id)
    {
        $this->update_data_model->delete_gallery_by_id($gallery_id);
        redirect('supper_admin/gallery_image');
    }

    public function delete_address($address_id)
    {
        $this->update_data_model->delete_address_by_id($address_id);
        redirect('supper_admin/management_address');
    }
    
    public function delete_contacter($contacter_id)
    {
        $this->update_data_model->delete_contacter_all_by_id($contacter_id);
        redirect('supper_admin/management_message');
    }
    
    public function unpublished_video($video_id)
    {
        $this->update_data_model->published_video_by_video_id($video_id);
        redirect('supper_admin/management_video');
    }
    
    public function published_video($video_id)
    {
        $this->update_data_model->unpublished_video_by_video_id($video_id);
        redirect('supper_admin/management_video');
    }
    
    public function delete_video($video_id)
    {
        $this->update_data_model->delete_video_by_video_id($video_id);
        redirect('supper_admin/management_video');
    }
    
    
}
