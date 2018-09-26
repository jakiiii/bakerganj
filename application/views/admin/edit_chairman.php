<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-accessibility-2"></i>সভাপতির বানী যুক্ত করুন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" method="post" action="<?php echo base_url(); ?>edit_data/update_chairman" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <input type="hidden" name="chairman_id" value="<?php echo $chairman_info->chairman_id; ?>"
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="chairmanName" class="mws-form-label">সভাপতির নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="chairman_name" value="<?php echo $chairman_info->chairman_name; ?>" class="required large" id="chairmanName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="chairmanShort" class="mws-form-label">সভাপতির বর্ণনা (সর্বচ্চো ১২০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea name="chairman_short_description" maxlength="120" required rows="" id="chairmanShort" cols="" class="large autosize"><?php echo $chairman_info->chairman_short_description; ?></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">সভাপতির বিস্তারিত বর্ণনা</label>
                            <div class="mws-form-item">
                                <textarea id="cleditor" name="chairman_long_description" class="large" maxlength="200" required="required"><?php echo $chairman_info->chairman_long_description; ?></textarea>
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