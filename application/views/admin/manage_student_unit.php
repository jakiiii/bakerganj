<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>নতুন ছাত্র পরিষদ সদস্য যুক্ত করুন
                    <span class="pull-right">
                    <?php
                        $msg = $this->session->userdata('message');
                        if($msg)
                        {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                    ?>
                    </span>
                </span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_student" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="suName" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="student_unit_name" class="required large" id="suName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="suDesignation" class="mws-form-label">পদবী</label>
                            <div class="mws-form-item">
                                <input type="text" name="student_unit_designation" class="required large" id="suDesignation" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="suEmail" class="mws-form-label">ইমেল</label>
                            <div class="mws-form-item">
                                <input type="text" name="student_unit_email" class="required email large" id="suEmail" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="suInstitution" class="mws-form-label">শিক্ষা প্রতিষ্ঠানের নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="student_unit_educational_institution" class="required large" id="suInstitution" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="suHome" class="mws-form-label">স্থায়ী ঠিকানা</label>
                            <div class="mws-form-item">
                                <input type="text" name="student_unit_home_address" class="required large" id="suHome" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="suPicture" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="student_unit_image" class="required" id="suPicture" />
                                <label for="student_unit_image" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="suPublicationStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select class="required large" name="publication_status" id="suPublicationStatus">
                                    <option></option>
                                    <option value="1">পাবলিশ</option>
                                    <option value="2">আন-পাবলিশ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <button name="btn" type="submit" class="btn btn-large btn-inverse btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div>
        </div>
        
        <!------------- Management Student Unit ---------------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>ছাত্র পরিষদ সদস্য ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>নাম</th>
                            <th>পদবী</th>
                            <th>ইমেল</th>
                            <th>ছবি</th>
                            <th>স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_student_unit_info as $v_student_info) { ?>
                        <tr>
                            <td><?php echo $v_student_info->student_unit_name; ?></td>
                            <td><?php echo $v_student_info->student_unit_designation; ?></td>
                            <td><?php echo $v_student_info->student_unit_email; ?></td>
                            <td>
                                <img src="<?php echo base_url(). $v_student_info->student_unit_image; ?>" style="width: 75px; height: 75px;" class="img-polaroid" />
                            </td>
                            <td>
                                <?php if($v_student_info->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_student/<?php echo $v_student_info->student_unit_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_student/<?php echo $v_student_info->student_unit_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td>
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_student/<?php echo $v_student_info->student_unit_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Panels End -->
    </div>
    <!-- Inner Container End -->

</div>
<!-- Main Container End -->

<!-- JavaScript Plugins -->
<script src="<?php echo base_url(); ?>asset/backend/js/libs/jquery-1.8.3.min.js"></script>
<!-- Plugin Scripts -->
<script src="<?php echo base_url(); ?>asset/backend/plugins/validate/jquery.validate-min.js"></script>
<!-- Demo Scripts (remove if not needed) -->
<script src="<?php echo base_url(); ?>asset/backend/js/demo/demo.formelements.js"></script>