<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-pictures"></i>সিলাডার ম্যানেজমেন্ট
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
                            <th>সিলাইডার নাম</th>
                            <th>সিলাইডার ইমেজ</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_slider_info as $v_slider) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="text-align: justify;"><?php echo $v_slider->slider_name; ?></td>
                            <td style="text-align: center;">
                                <img src="<?php echo base_url(). $v_slider->slider_image; ?>" style="width: 100px; height: 75px;" />
                            </td>
                            <td hidden=""></td>
                            <td style="text-align: center;">
                                <?php if($v_slider->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_slider/<?php echo $v_slider->slider_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_slider/<?php echo $v_slider->slider_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>edit_data/edit_slider/<?php echo $v_slider->slider_id; ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_slider/<?php echo $v_slider->slider_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
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