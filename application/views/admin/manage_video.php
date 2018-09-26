<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-facetime-video"></i>ভিডিও ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden="">ক্রমিক নং</th>
                            <th>ভিডিও নাম</th>
                            <th>ভিডিও</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <?php foreach ($all_video_info as $v_video) { ?>
                            <td hidden=""></td>
                            <td style="width: 200px;"><?php echo $v_video->video_name; ?></td>
                            <td style="width: 350px; text-align: center;"><iframe width="350" height="200" src="<?php echo $v_video->video_link; ?>" frameborder="0" allowfullscreen></iframe></td>
                            <td hidden></td>
                            <td style="width: 125px; text-align: center;">
                                <?php if($v_video->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_video/<?php echo $v_video->video_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_video/<?php echo $v_video->video_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="width: 80px; text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_video/<?php echo $v_video->video_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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