<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>নতুন কার্যনির্বাহী সদস্য যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_executive" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="cNmae" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="executive_council_name" class="required large" id="cNmae" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="cDesignation" class="mws-form-label">পদবী</label>
                            <div class="mws-form-item">
                                <input type="text" name="executive_council_designation" class="required large" id="cDesignation" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="cEmail" class="mws-form-label">ইমেল</label>
                            <div class="mws-form-item">
                                <input type="text" name="executive_council_email" class="required email large" id="cEmail" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="cPhone" class="mws-form-label">ফোন</label>
                            <div class="mws-form-item">
                                <input type="text" name="executive_council_phone" class="required large" id="cPhone" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="cHome" class="mws-form-label">স্থায়ী ঠিকানা</label>
                            <div class="mws-form-item">
                                <input type="text" name="executive_council_home_address" class="required large" id="cHome" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="cCurrent" class="mws-form-label">বর্তমান ঠিকানা</label>
                            <div class="mws-form-item">
                                <input type="text" name="executive_council_current_address" class="required large" id="cCurrent" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="cImaeg" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="executive_council_image" class="required" id="cImaeg" />
                                <label for="picture" class="error" generated="true" style="display:none"></label>
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
        <!---------- Management Executive ------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>কার্যনির্বাহী সদস্য ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>নাম</th>
                            <th>পদবী</th>
                            <th>ফোন</th>
                            <th>ছবি</th>
                            <th>স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_executive_info as $v_excutive) { ?>
                        <tr>
                            <td style="text-align: center;"><?php echo $v_excutive->executive_council_name;?></td>
                            <td style="text-align: center;"><?php echo $v_excutive->executive_council_designation;?></td>
                            <td style="text-align: center;"><?php echo $v_excutive->executive_council_phone;?></td>
                            <td style="text-align: center;">
                                <img src="<?php echo base_url(). $v_excutive->executive_council_image; ?>" style="width: 75px; height: 75px;" class="img-polaroid" />
                            </td>
                            <td style="text-align: center;">
                                <?php if($v_excutive->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_executive/<?php echo $v_excutive->executive_council_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_executive/<?php echo $v_excutive->executive_council_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_executive/<?php echo $v_excutive->executive_council_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
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