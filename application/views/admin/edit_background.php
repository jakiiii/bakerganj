<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>পটভূমি আপডেট করুন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>edit_data/update_background_data" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <input type="hidden" name="background_id" value="<?php echo $background_info->background_id; ?>" />
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label">পটভূমি বিস্তারিত</label>
                            <div class="mws-form-item">
                                <textarea name="background_description" id="cleditor" class="large" required="required"><?php echo $background_info->background_description; ?></textarea>
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