<div id="mws-container" class="clearfix">
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-picture"></i> নতুন সিলাডার যুক্ত করুন</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>edit_data/update_slider" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <input type="hidden" value="<?php echo $slider_information->slider_id; ?>" name="slider_id" />
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="sliderName" class="mws-form-label">সিলাইডার নেম</label>
                            <div class="mws-form-item">
                                <input type="text" name="slider_name" value="<?php echo $slider_information->slider_name; ?>" class="required large" id="sliderName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="sliderDescrription" class="mws-form-label">সিলাইডার ডিসক্রিপশন (সর্বচ্চো ২০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea rows="" cols="" name="slider_descrription" class="large autosize" required="required" maxlength="200" id="sliderDescrription"><?php echo $slider_information->slider_descrription; ?></textarea>
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