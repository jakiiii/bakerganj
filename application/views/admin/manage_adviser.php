<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-users"></i>উপদেষ্টা মন্ডলীর নাম যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_adviser" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="adviserName" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="adviser_members_name" class="required large" id="adviserName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adviserDesignation" class="mws-form-label">পদবী</label>
                            <div class="mws-form-item">
                                <input type="text" name="adviser_members_designation" class="required large" id="adviserDesignation" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adviserEmail" class="mws-form-label">ইমেল</label>
                            <div class="mws-form-item">
                                <input type="text" name="adviser_members_email" class="required email large" id="adviserEmail" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adviserPhone" class="mws-form-label">ফোন নাম্বার</label>
                            <div class="mws-form-item">
                                <input type="text" name="adviser_members_phone" class="required large" id="adviserPhone" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addressAddress" class="mws-form-label">স্থায়ী ঠিকানা</label>
                            <div class="mws-form-item">
                                <input type="text" name="adviser_members_address" class="required large" id="addressAddress" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adviserAbout" class="mws-form-label">তার সম্পর্কে (সর্বচ্চো ২৫০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" name="adviser_members_about" id="adviserAbout" class="large autosize" required="required" maxlength="250"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adviserImage" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="adviser_members_image" class="required" id="adviserImage" />
                                <label for="adviser_members_image" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicationStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select class="required large" name="publication_status" id="publicationStatus">
                                    <option></option>
                                    <option value="1">পাবলিশ</option>
                                    <option value="2">আন-পাবলিশ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <button type="submit" name="btn" class="btn btn-large btn-inverse btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div>
        </div>
        <!---------- Management Adviser --------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-users"></i>উপদেষ্টা মন্ডলীর ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>নাম</th>
                            <th>পদবী</th>
                            <td>ইমেল</td>
                            <th>ছবি</th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_advider_info as $v_advider) { ?>
                        <tr>
                            <td><?php echo $v_advider->adviser_members_name; ?></td>
                            <td style="text-align: center;"><?php echo $v_advider->adviser_members_designation; ?></td>
                            <td style="text-align: center;"><?php echo $v_advider->adviser_members_email; ?></td>
                            <td style="text-align: center;">
                                <img src="<?php echo base_url(). $v_advider->adviser_members_image?>" style="width: 75px; height: 75px" class="img-polaroid" />
                            </td>
                            <td style="text-align: center;">
                                <?php if($v_advider->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_adviser/<?php echo $v_advider->adviser_members_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_adviser/<?php echo $v_advider->adviser_members_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_adviser/<?php echo $v_advider->adviser_members_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
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