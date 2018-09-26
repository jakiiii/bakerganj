<div id="mws-container" class="clearfix">
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-picture"></i> নতুন সিলাডার যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_slider" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="sliderName" class="mws-form-label">সিলাইডার নেম</label>
                            <div class="mws-form-item">
                                <input type="text" name="slider_name" class="required large" id="sliderName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="sliderDescrription" class="mws-form-label">সিলাইডার ডিসক্রিপশন (সর্বচ্চো ২০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" name="slider_descrription" class="large autosize" required="required" maxlength="200" id="sliderDescrription"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="sliderImage" class="mws-form-label">সিলাইডার ইমেজ</label>
                            <div class="mws-form-item">
                                <input id="sliderImage" type="file" name="slider_image" class="required">
                                <label for="picture" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicationStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select class="required large" name="publication_status" id="publicationStatus">
                                    <option></option>
                                    <option value="1">পাবলিস</option>
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
    </div>
</div>

<!-- JavaScript Plugins -->
<script src="<?php echo base_url(); ?>asset/backend/js/libs/jquery-1.8.3.min.js"></script>
<!-- Plugin Scripts -->
<script src="<?php echo base_url(); ?>asset/backend/plugins/validate/jquery.validate-min.js"></script>
<script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.min.js"></script>
<!-- Demo Scripts (remove if not needed) -->
<script src="<?php echo base_url(); ?>asset/backend/js/demo/demo.formelements.js"></script>