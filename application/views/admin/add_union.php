<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-map-marker"></i> নতুন ইউনিয়ন যুক্ত করুন
                    <span class="pull-right">
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </span>
                </span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_union" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for='unionName' class="mws-form-label">ইউনিয়নের নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="union_name" class="required large" id="unionName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">ইউনিয়নের পটভূমি</label>
                            <div class="mws-form-item">
                                <textarea name="union_description" id="cleditor" class="large" required="required"></textarea>
                            </div>
                        </div>
                        <!---------- UPDATE ------->
                        <div class="mws-form-row">
                            <label class="mws-form-label">ইউনিয়নের তথ্যবলী</label>
                            <div class="mws-form-item">
                                <textarea name="union_information" id="jodit" cols="30" rows="10"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="unionTradition" class="mws-form-label"> পর্যাটন ও ঐতিহ্য (সর্বচ্চো ৬০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea id="unionTradition" rows="" cols="" name="union_tourism_tradition" class="large autosize" required="required" maxlength="600"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="unionAgreeculture" class="mws-form-label"> কৃষি বিষয়ক (সর্বচ্চো ৬০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea id="unionAgreeculture" rows="" cols="" name="union_agriculture" class="large autosize" required="required" maxlength="600"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="unionEducational" class="mws-form-label"> শিক্ষা বিষয়ক (সর্বচ্চো ৬০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea id="unionEducational" rows="" cols="" name="union_educational" class="large autosize" required="required" maxlength="600"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="unionHealth" class="mws-form-label"> স্বাস্থ বিষয়ক (সর্বচ্চো ৬০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea id="unionHealth" rows="" cols="" name="union_health" class="large autosize" required="required" maxlength="600"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="videoTitle" class="mws-form-label">ম্যাপ লিংক</label>
                            <div class="mws-form-item">
                                <input type="text" name="union_map" class="required large" id="videoTitle" />
                            </div>
                        </div>
                        <!---------- UPDATE ------->
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
                        <button name="btn" type="submit" class="btn btn-large btn-inverse btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div>
        </div>

        <!-------------- Add Image ------------->
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-map-marker"></i>ইউনিয়নের ছবি যুক্ত করুন
                    <span class="pull-right">
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </span>
                </span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_union_img" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="unionId" class="mws-form-label">ইউনিয়নের নাম</label>
                            <div class="mws-form-item">
                                <select class="required large" name="union_id" id="unionId">
                                    <option></option>
                                   <?php foreach ($all_union_info as $v_union) { ?>
                                        <option value="<?php echo $v_union->union_id; ?>"><?php echo $v_union->union_name; ?></option>
                                    <?php } ?>
                                </select>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="imageFile" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="union_image_file" class="required">
                                <label for="picture" class="error" generated="true" style="display:none" id="imageFile"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicationStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select id="publicationStatus" class="required large" name="publication_status">
                                    <option></option>
                                    <option value="1">পাবলিশ</option>
                                    <option value="2">আন-পাবলিশ</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <button type="submit" class="btn btn-large btn-inverse btn-block">সেভ করুন</button>
                        <!--<input type="submit" class="btn btn-danger">-->
                    </div>
                </form>
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