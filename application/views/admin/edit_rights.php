<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-volume-up"></i>আমাদের দাবী যুক্ত করুন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>edit_data/update_rights" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <input type="hidden" value="<?php echo $rights_info->right_id; ?>" name="right_id" />
                        <div class="mws-form-row">
                            <label class="mws-form-label">আমাদের দাবী</label>
                            <div class="mws-form-item">
                                <textarea name="right_description" id="cleditor" class="large" maxlength="200" required="required"><?php echo $rights_info->right_description; ?></textarea>
                            </div>
                        </div>
                        
                    </div>
                    <div class="mws-button-row">
                        <button type="submit" name="btn" class="btn btn-large btn-inverse btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div>    	
        </div
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