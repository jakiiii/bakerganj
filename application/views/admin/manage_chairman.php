<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-accessibility-2"></i>সভাপতির বানী যুক্ত করুন
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
                <form id="mws-validate" class="mws-form" method="post" action="<?php echo base_url(); ?>insert_data/save_chairman_data" enctype="multipart/form-data">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for="chairmanName" class="mws-form-label">সভাপতির নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="chairman_name" class="required large" id="chairmanName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="chairmanShort" class="mws-form-label">সভাপতির বর্ণনা (সর্বচ্চো ১২০ শব্দ)</label>
                            <div class="mws-form-item">
                                <textarea name="chairman_short_description" maxlength="120" required rows="" id="chairmanShort" cols="" class="large autosize"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label class="mws-form-label">সভাপতির বিস্তারিত বর্ণনা</label>
                            <div class="mws-form-item">
                                <textarea id="cleditor" name="chairman_long_description" class="large" maxlength="200" required="required"></textarea>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="chairmanImage" class="mws-form-label">সভাপতির ছবি</label>
                            <div class="mws-form-item">
                                <input  type="file" name="chairman_image" class="required" id="chairmanImage" />
                                <label for="picture" class="error" generated="true" style="display:none"></label>
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="publicationStatus" class="mws-form-label">পাবলিকাশন স্টাটাস</label>
                            <div class="mws-form-item">
                                <select id="publicationStatus" class="required large" name="publication_status">
                                    <option></option>
                                    <option value="1">পাবলিস</option>
                                    <option value="2">আনপাবলিশ</option>
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
        
        <!----------------------------- Manage Chairman ------------------>
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-accessibility-2"></i>সভাপতির বানী ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden="">ক্রমিক নং</th>
                            <th>সভাপতির নাম</th>
                            <th>সভাপতির বর্ণনা</th>
                            <th>সভাপতির ছবি</th>
                            <th>স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_chairman_info as $v_chairman) {?>
                        <tr>
                            <td hidden=""></td>
                            <td style="width: 200px;"><?php echo $v_chairman->chairman_name; ?></td>
                            <td style="width: 400px; text-align: justify;"><?php echo $v_chairman->chairman_long_description; ?></td>
                            <td style="width: 120px; text-align: center;">
                                <img class="img-polaroid" src="<?php echo base_url(). $v_chairman->chairman_image; ?>" style="width: 100px; height: 75px;" />
                            </td>
                            <td style="width: 140px; text-align: center;">
                                <?php if($v_chairman->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_chairman/<?php echo $v_chairman->chairman_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_chairman/<?php echo $v_chairman->chairman_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>edit_data/edit_chairman/<?php echo $v_chairman->chairman_id; ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_chairman/<?php echo $v_chairman->chairman_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
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