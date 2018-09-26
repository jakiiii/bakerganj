<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>আমাদের গঠনতন্ত্র যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/save_nature" method="post" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label class="mws-form-label">গঠনতন্ত্র বিস্তারিত</label>
                            <div class="mws-form-item">
                                <textarea name="nature_description" id="cleditor" class="large" required="required"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">ফাইল (PDF)</label>
                            <div class="mws-form-item">
                                <input type="file" name="nature_file">
                                <label for="file" class="error" generated="true" style="display:none"></label>
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
        <!--------- Management Nature ------------>
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-network"></i>গঠনতন্ত্র ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden="">ক্রমিক নং</th>
                            <th>গঠনতন্ত্র</th>
                            <th>ফাইল</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_nature_info as $v_nature) { ?>
                        <tr>
                            <td hidden=""></td>
                            <td style="width: 500px; text-align: justify;"><?php echo $v_nature->nature_description; ?></td>
                            <td style="width: 180px; text-align: center;">
                                <a style="color: #0033ff;" href="<?php echo base_url(). $v_nature->nature_file;?>" target="_blank"><i class="icon-download-2"></i> ডাউনলোড গঠনতন্ত্র</a>
                            </td>
                            <td hidden></td>
                            <td style="width: 125px; text-align: center;">
                                <?php if($v_nature->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_nature/<?php echo $v_nature->nature_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_nature/<?php echo $v_nature->nature_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="width: 80px; text-align: center">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_nature/<?php echo $v_nature->nature_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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