<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-calendar"></i>ছবি ঘর
                    <span class="pull-right">
                        <?php
                        $msg = $this->session->userdata('message');
                        if ($msg) {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                        ?>
                    </span>
                </span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_picture" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="newsTitle" class="mws-form-label">নিউজ নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="gallery_name" class="required large" id="newsTitle">
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for=newsImage class="mws-form-label">নিউজ ছবি</label>
                            <div class="mws-form-item">
                                <input type="file" name="gallery_image" class="required" id="newsImage" />
                                <label for="gallery_image" class="error" generated="true" style="display:none"></label>
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

        <!--------------- Management Gallery ---------------->
        <!-- Statistics Button Container -->
        <!-- Panels Start -->

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-pictures"></i> ছবি ঘর</span>
            </div>
            <div class="mws-panel-body">
                <ul class="thumbnails mws-gallery">
                    <?php foreach ($all_gallery_image as $v_image) { ?>
                    <li>
                        <span class="thumbnail"><img src="<?php echo base_url(). $v_image->gallery_image; ?>" alt="<?php echo $v_image->gallery_name; ?>" style="height: 140px; width: 140px;"></span>
                        <span class="mws-gallery-overlay">
                            <?php if($v_image->publication_status == 1) { ?>
                            <a href="<?php echo base_url(); ?>update_data/unpublished_image/<?php echo $v_image->gallery_id; ?>" class="mws-gallery-btn"><i class="icon-ok"></i></a>
                            <?php } else { ?>
                            <a href="<?php echo base_url(); ?>update_data/published_image/<?php echo $v_image->gallery_id; ?>" class="mws-gallery-btn"><i class="icon-lock"></i></a>
                            <?php } ?>
                            <a href="<?php echo base_url(); ?>update_data/delete_image/<?php echo $v_image->gallery_id; ?>" class="mws-gallery-btn" onclick="return checkDelete();"><i class="icon-trash"></i></a>
                        </span>
                    </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <!-- Panels End -->


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

