<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
            
            <div class="mws-panel-header">
                <span><i class="icon-users"></i>প্রতিষ্ঠাতা সদস্যের নাম যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_founder" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="founderName" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="founder_members_name" class="required large" id="founderName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="founderDesignation" class="mws-form-label">পদবী</label>
                            <div class="mws-form-item">
                                <input type="text" name="founder_members_designation" class="required large" id="founderDesignation" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="founderEmail" class="mws-form-label">ইমেল</label>
                            <div class="mws-form-item">
                                <input type="text" name="founder_members_email" class="required email large" id="founderEmail" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="founderPhone" class="mws-form-label">ফোন নাম্বার</label>
                            <div class="mws-form-item">
                                <input type="text" name="founder_members_phone" class="required large" id="founderPhone" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="homeAddress" class="mws-form-label">স্থায়ী ঠিকানা</label>
                            <div class="mws-form-item">
                                <input type="text" name="founder_members_address" class="required large" id="homeAddress" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="founderAbout" class="mws-form-label">তার সম্পর্কে (সর্বচ্চো ২৫০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" name="founder_members_about" class="large autosize" maxlength="250" id="founderAbout"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="founderImage" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="founder_members_image" class="required" id="founderImage" />
                                <label for="founder_members_image" class="error" generated="true" style="display:none"></label>
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
        <!--------- Management Founder --------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-users"></i>প্রতিষ্ঠাতা সদস্যে ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden="">ক্রমিক নং</th>
                            <th>নাম</th>
                            <th>পদবী</th>
                            <th>ছবি</th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_founder_info as $v_founder) { ?>
                        <tr>
                            <td hidden=""></td>
                            <td><?php echo $v_founder->founder_members_name; ?></td>
                            <td style="text-align: center;"><?php echo $v_founder->founder_members_designation; ?></td>
                            <td style="text-align: center;">
                                <img src="<?php echo base_url(). $v_founder->founder_members_image; ?>" style="width: 75px; height: 75px" class="img-polaroid" />
                            </td>
                            <td style="text-align: center;">
                                <?php if($v_founder->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_founder/<?php echo $v_founder->founder_members_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_founder/<?php echo $v_founder->founder_members_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_founder/<?php echo $v_founder->founder_members_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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