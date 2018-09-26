<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-official"></i>বাকেরগঞ্জের গুনীজনের নাম যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_wiseperson" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="name" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="wiseperson_name" class="required large" id="name" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="lifeAbout" class="mws-form-label">তার সম্পর্কে (সর্বচ্চো ৪০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea id="lifeAbout" rows="" cols="" name="wiseperson_description" class="large autosize" required="required" maxlength="400"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="image" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="wiseperson_image" class="required" id="image">
                                <label for="wiseperson_image" class="error" generated="true" style="display:none"></label>
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
        <!----------- Management Wish Person -------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-official"></i> বাকেরগঞ্জের গুনীজন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>নাম</th>
                            <th>তার সম্পর্কে</th>
                            <th>ছবি</th>
                            <th hidden></th>
                            <th>স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_wishperson as $v_wishperson) { ?>
                        <tr>
                            <td style="width: 160px;"><?php echo $v_wishperson->wiseperson_name;?></td>
                            <td style="width: 400px; text-align: justify;"><?php echo $v_wishperson->wiseperson_description;?></td>
                            <td style="width: 100px; text-align: center;">
                                <img src="<?php echo base_url(). $v_wishperson->wiseperson_image;?>" style="width: 75px; height: 75px" class="img-polaroid" />
                            </td>
                            <td hidden></td>
                            <td style="width: 125px; text-align: center;">
                                <?php if($v_wishperson->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_wishperson/<?php echo $v_wishperson->wiseperson_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_wishperson/<?php echo $v_wishperson->wiseperson_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="width: 80px; text-align: center;">
                                <span class="btn-group">
                                    <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_wishperson/<?php echo $v_wishperson->wiseperson_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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