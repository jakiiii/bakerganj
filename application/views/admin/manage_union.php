<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-map-marker"></i>ইউনিয়ন ম্যানেজমেন্ট
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
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden></th>
                            <th>ইউনিয়নের নাম</th>
                            <th>ইউনিয়নের বর্ণনা</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_union_info as $v_union) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="text-align: center"><?php echo $v_union->union_name; ?></td>
                            <td style="width: 450px; text-align: justify;"><?php echo $v_union->union_description; ?></td>
                            <td hidden></td>
                            <td style="width: 125px; text-align: center">
                                <?php if($v_union->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_union/<?php echo $v_union->union_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_union/<?php echo $v_union->union_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="width: 60px; text-align: center">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>edit_data/edit_union/<?php echo $v_union->union_id; ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_union/<?php echo $v_union->union_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!------------ Management Union Picture -------------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-map-marker"></i>ইউনিয়ন ইমেজ ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden></th>
                            <th>ইউনিয়নের নাম</th>
                            <th>ইউনিয়নের ছবি</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_union_image as $u_image) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="text-align: center"><?php echo $u_image->union_name; ?></td>
                            <td style="text-align: center">
                                <img src="<?php echo base_url(). $u_image->union_image_file; ?>" style="width: 100px; height: 75px;" />
                            </td>
                            <td hidden></td>
                            <td style="text-align: center">
                                <?php if($u_image->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_union_image/<?php echo $u_image->union_image_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_union_image/<?php echo $u_image->union_image_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_union_image/<?php echo $u_image->union_image_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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