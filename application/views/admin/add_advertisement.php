<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <!----------------------------------------
        --------------First Advertisement
        ----------------------------------------->
        <h4 style="text-align: center;">
            <?php
            $msg = $this->session->userdata('message');
            if ($msg)
            {
            echo $msg;
            $this->session->unset_userdata('message');
            }
            ?>
        </h4>
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>নতুন বিঞ্জাপন যুক্ত করুন (160px X 300px)</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_add" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="addTitle" class="mws-form-label">শিরনাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="advertisement_title" class="required large" id="addTitle" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addURL" class="mws-form-label">বিঞ্জাপন লিংক (URL)</label>
                            <div class="mws-form-item">
                                <input type="text" name="advertisement_link" class="required url large" id="addURL" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addImage" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="advertisement_image" class="required" id="addImage">
                                <label for="advertisement_image" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicatiionStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select class="required large" name="publication_status" id="publicatiionStatus">
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
        <!----------------------------------------
        --------------Second Advertisement
        ----------------------------------------->
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>নতুন বিঞ্জাপন যুক্ত করুন (300px X 300px)</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_add_second" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="addTitle" class="mws-form-label">শিরনাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="advertisement_title2" class="required large" id="addTitle" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addURL" class="mws-form-label">বিঞ্জাপন লিংক (URL)</label>
                            <div class="mws-form-item">
                                <input type="text" name="advertisement_link2" class="required url large" id="addURL" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addImage" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="advertisement_image2" class="required" id="addImage">
                                <label for="advertisement_image" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicatiionStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select class="required large" name="publication_status" id="publicatiionStatus">
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
        <!----------------------------------------
        --------------Third Advertisement
        ----------------------------------------->
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>নতুন বিঞ্জাপন যুক্ত করুন (160px X 300px)</span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_third_add" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="addTitle" class="mws-form-label">শিরনাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="advertisement_title3" class="required large" id="addTitle" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addURL" class="mws-form-label">বিঞ্জাপন লিংক (URL)</label>
                            <div class="mws-form-item">
                                <input type="text" name="advertisement_link3" class="required url large" id="addURL" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="addImage" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="advertisement_image3" class="required" id="addImage" />
                                <label for="advertisement_image" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicatiionStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select class="required large" name="publication_status" id="publicatiionStatus">
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