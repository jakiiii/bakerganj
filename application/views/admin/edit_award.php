<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>পুরস্কৃত ব্যক্তির নাম যুক্ত করুন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>edit_data/update_award" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <input type="hidden" name="award_id" value="<?php echo $award_info->award_id; ?>" />
                        <div class="mws-form-row">
                            <label for="arardTitle" class="mws-form-label">নাম</label>
                            <div class="mws-form-item">
                                <input type="text" value="<?php echo $award_info->award_title; ?>" name="award_title" class="required large" id="arardTitle" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="shortDescription" class="mws-form-label">পুরস্কৃত ব্যক্তির সম্পর্কে (সর্বচ্চো ২৫০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" name="award_short_description" class="large autosize" required="required" id="shortDescription"><?php echo $award_info->award_short_description; ?></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">পুরস্কৃত ব্যক্তির সম্পর্কে বিস্তারিত</label>
                            <div class="mws-form-item">
                                <textarea id="cleditor" class="large" maxlength="200" name="award_long_description" required="required"><?php echo $award_info->award_long_description; ?></textarea>
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