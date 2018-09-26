<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-list-2"></i>নতুন ইভেন্ট যুক্ত করুন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>edit_data/update_event" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <input type="hidden" name="event_id" value="<?php echo $event_info->event_id; ?>"
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="enentName" class="mws-form-label">ইভেন্ট নাম</label>
                            <div class="mws-form-item">
                                <input type="text" value="<?php echo $event_info->event_name; ?>" name="event_name" class="required large" id="enentName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">ইভেন্ট বর্ণনা</label>
                            <div class="mws-form-item">
                                <textarea name="event_description" id="cleditor" class="large"><?php echo $event_info->event_description; ?></textarea>
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