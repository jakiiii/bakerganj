<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        <!----------------------------------------
        --------------First Advertisement
        ----------------------------------------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>বিঞ্জাপন ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden>ক্রমিক নং</th>
                            <th>শিরনাম</th>
                            <th>ছবি</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_advertisement as $v_add ) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="width: 200px; text-align: justify;"><?php echo $v_add->advertisement_title; ?></td>
                            <td style="width: 400px; text-align: center;">
                                <a href="<?php echo $v_add->advertisement_link; ?>" target="_blank">
                                    <img src="<?php echo base_url(). $v_add->advertisement_image;?>" style="width: 100px; height: 75px" />
                                </a>
                            </td>
                            <td hidden></td>
                            <td style="width: 150px; text-align: center;">
                                <?php if($v_add->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_first_add/<?php echo $v_add->advertisement_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_first_add/<?php echo $v_add->advertisement_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_first_add/<?php echo $v_add->advertisement_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!----------------------------------------
        --------------Second Advertisement
        ----------------------------------------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>বিঞ্জাপন ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden>ক্রমিক নং</th>
                            <th>শিরনাম</th>
                            <th>ছবি</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_second_advertisment as $v_add ) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="width: 200px; text-align: justify;"><?php echo $v_add->advertisement_title2; ?></td>
                            <td style="width: 400px; text-align: center;">
                                <a href="<?php echo $v_add->advertisement_link2; ?>" target="_blank">
                                    <img src="<?php echo base_url(). $v_add->advertisement_image2;?>" style="width: 100px; height: 75px" />
                                </a>
                            </td>
                            <td hidden></td>
                            <td style="width: 150px; text-align: center;">
                                <?php if($v_add->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_second_add/<?php echo $v_add->advertisement_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_second_add/<?php echo $v_add->advertisement_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_second_add/<?php echo $v_add->advertisement_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        <!----------------------------------------
        --------------Three Advertisement
        ----------------------------------------->
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-sign-post"></i>বিঞ্জাপন ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden>ক্রমিক নং</th>
                            <th>শিরনাম</th>
                            <th>ছবি</th>
                            <th hidden></th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_third_advertisment as $v_add ) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="width: 200px; text-align: justify;"><?php echo $v_add->advertisement_title3; ?></td>
                            <td style="width: 400px; text-align: center;">
                                <a href="<?php echo $v_add->advertisement_link3; ?>" target="_blank">
                                    <img src="<?php echo base_url(). $v_add->advertisement_image3;?>" style="width: 100px; height: 75px" />
                                </a>
                            </td>
                            <td hidden></td>
                            <td style="width: 150px; text-align: center;">
                                <?php if($v_add->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_third_add/<?php echo $v_add->advertisement_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_third_add/<?php echo $v_add->advertisement_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_third_add/<?php echo $v_add->advertisement_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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