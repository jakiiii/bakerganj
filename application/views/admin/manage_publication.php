<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-table"></i>প্রকাশনা ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>শিরনাম</th>
                            <th hidden>প্রকাশনা সম্পর্কে</th>
                            <th>ফাইল</th>
                            <th>ছবি</th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_publication as $v_publication) { ?>
                        <tr>
                            <td style="width: 200px;"><?php echo $v_publication->publications_title; ?></td>
                            <td hidden=""></td>
                            <td style="width: 100px; text-align: center;">
                                <a href="<?php echo base_url(). $v_publication->publications_file;?>" style="color: #03f"><i class="icon-download-2"></i> Download</a>
                            </td>
                            <td style="width: 120px; text-align: center;">
                                <img src="<?php echo base_url(). $v_publication->publications_image; ?>" style="width: 100px; height: 75px" class="img-polaroid" />
                            </td>
                            <td style="width: 125px; text-align: center;">
                                <?php if($v_publication->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_publication/<?php echo $v_publication->publications_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_publication/<?php echo $v_publication->publications_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="width: 80px; text-align: center;">
                                <span class="btn-group">
                                    <a href="#" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_publication/<?php echo $v_publication->publications_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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