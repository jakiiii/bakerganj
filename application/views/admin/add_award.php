<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>পুরস্কৃত ব্যক্তির নাম যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_award" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="arardTitle" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="award_title" class="required large" id="arardTitle" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="shortDescription" class="mws-form-label">পুরস্কৃত ব্যক্তির সম্পর্কে (সর্বচ্চো ২৫০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" name="award_short_description" class="large autosize" required="required" id="shortDescription"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">পুরস্কৃত ব্যক্তির সম্পর্কে বিস্তারিত</label>
                            <div class="mws-form-item">
                                <textarea id="cleditor" class="large" maxlength="200" name="award_long_description" required="required"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="awardImage" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="award_long_image" class="required" id="awardImage">
                                <label for="award_long_image" class="error" generated="true" style="display:none"></label>
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