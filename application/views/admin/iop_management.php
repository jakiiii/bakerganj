<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>

        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-pencil-2"></i> মূলনীতি | আদর্শ
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
                <form class="mws-form" action="<?php echo base_url(); ?>insert_data/save_ip" method="post">
                    <div class="mws-form-row">
                        <label for="founderAbout" class="mws-form-label">মূলনীতি</label>
                        <div class="mws-form-item">
                            <textarea rows="" cols="" name="iop_ideal_description" class="large autosize"  id="founderAbout"></textarea>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label for="founderAbout" class="mws-form-label">আদর্শ</label>
                        <div class="mws-form-item">
                            <textarea rows="" cols="" name="iop_principles_description" class="large autosize"  id="founderAbout"></textarea>
                        </div>
                    </div>
                    <div class="mws-form-row">
                        <label for="publicationStatus" class="mws-form-label">পাবলিকেশন স্টাটাস</label>
                        <div class="mws-form-item">
                            <select class="required large" name="publication_status" id="publicationStatus">
                                <option></option>
                                <option value="1">পাবলিস</option>
                                <option value="2">আন-পাবলিশ</option>
                            </select>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <button type="submit" name="btn" class="btn btn-large btn-inverse btn-block">Make New Admin</button>
                    </div>
                </form>
            </div>
        </div>

        <!---------- IOP Management ------------>
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-pencil-2"></i> মূলনীতি | আদর্শ </span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>মূলনীতি</th>
                            <th>আদর্শ</th>
                            <th hidden></th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_ip as $v_ip) { ?>
                        <tr>
                            <td style="width: 250px; text-align: justify;"><?php echo $v_ip->iop_ideal_description; ?></td>
                            <td style="text-align: justify;"><?php echo $v_ip->iop_principles_description; ?></td>
                            <td hidden></td>
                            <td hidden></td>
                            <td style="width: 125px; text-align: center;">
                                <?php if($v_ip->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_ip/<?php echo $v_ip->iop_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_ip/<?php echo $v_ip->iop_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="width: 40px; text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_ip/<?php echo $v_ip->iop_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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