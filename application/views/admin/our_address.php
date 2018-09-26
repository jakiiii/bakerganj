<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-hand-right"></i>আমাদের ঠিকানা যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_address" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="ourAddress" class="mws-form-label">আমাদের ঠিকানা</label>
                            <div class="mws-form-item">
                                <input type="text" name="address_description" class="required large" id="ourAddress" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="phone" class="mws-form-label">ফোন নাম্বার</label>
                            <div class="mws-form-item">
                                <input type="text" name="address_phone" class="required large" id="phone" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="email" class="mws-form-label">ইমেল অ্যাডরেস</label>
                            <div class="mws-form-item">
                                <input type="text" name="address_email" class="required email large" id="email" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="facebook" class="mws-form-label">ফেসবুক লিংক</label>
                            <div class="mws-form-item">
                                <input type="text" name="facebook_link" class="required url large" id="facebook" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="twitter" class="mws-form-label">টুটার লিংক</label>
                            <div class="mws-form-item">
                                <input type="text" name="twitter_link" class="required url large" id="twitter">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="googleplus" class="mws-form-label">গুগোল প্লাস লিংক</label>
                            <div class="mws-form-item">
                                <input type="text" name="googleplus_link" class="required url large" id="googleplus" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="uTube" class="mws-form-label">ইউটুব লিংক</label>
                            <div class="mws-form-item">
                                <input type="text" name="youtube_link" class="required url large" id="uTube" />
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
        <!----------- Manage Out Address ---------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-hand-right"></i> আমাদের ঠিকানা ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>আমাদের ঠিকানা</th>
                            <th>ফোন</th>
                            <th>ইমেল</th>
                            <th>ফেসবুক</th>
                            <th>টুটার</th>
                            <th>গুগোল</th>
                            <th>ইউটুব</th>
                            <th>স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_address as $v_address) { ?>
                        <tr>
                            <td><?php echo $v_address->address_description; ?></td>
                            <td><?php echo $v_address->address_phone; ?></td>
                            <td><?php echo $v_address->address_email; ?></td>
                            <td><a href="<?php echo $v_address->facebook_link; ?>" target="_blank" style="text-decoration: none; color: #000; font-size: 2rem;"><i class="icon-facebook-2"></i></a></td>
                            <td><a href="<?php echo $v_address->twitter_link; ?>" target="_blank" style="text-decoration: none; color: #000; font-size: 2rem;"><i class="icon-twitter-2"></i></a></td>
                            <td><a href="<?php echo $v_address->googleplus_link; ?>" target="_blank" style="text-decoration: none; color: #000; font-size: 2rem;"><i class="icon-plus-sign"></i></a></td>
                            <td><a href="<?php echo $v_address->youtube_link; ?>" target="_blank" style="text-decoration: none; color: #000; font-size: 2rem;"><i class="icon-facetime-video"></i></a></td>
                            <td style="width: 120px; text-align: center;">
                                <?php if($v_address->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_address/<?php echo $v_address->address_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_address/<?php echo $v_address->address_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_address/<?php echo $v_address->address_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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
<script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.min.js"></script>
<!-- Demo Scripts (remove if not needed) -->
<script src="<?php echo base_url(); ?>asset/backend/js/demo/demo.formelements.js"></script>