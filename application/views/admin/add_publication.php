<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>প্রকাশনার নাম যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_publication" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="title" class="mws-form-label">শিরনাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="publications_title" class="required large" id="title" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="description" class="mws-form-label">প্রকাশনা সম্পর্কে (সর্বচ্চো ৪০০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea id="description" rows="" cols="" name="publications_description" class="large autosize" required="required" maxlength="400"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="image" class="mws-form-label">ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="publications_image" class="required" id="image" />
                                <label for="publications_image" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="pdf" class="mws-form-label">ফাইল (PDF)</label>
                            <div class="mws-form-item">
                                <input type="file" name="publications_file" class="required" id="pdf" />
                                <label for="publications_file" class="error" generated="true" style="display:none"></label>
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
<!-- Demo Scripts (remove if not needed) -->
<script src="<?php echo base_url(); ?>asset/backend/js/demo/demo.formelements.js"></script>