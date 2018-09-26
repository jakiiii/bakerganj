<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-calendar"></i> নিউজ ম্যানেজমেন্ট
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
                            <th hidden="">ক্রমিক নং</th>
                            <th>নিউজ নাম</th>
                            <th hidden="">নিউজ বর্ণনা</th>
                            <th>ছবি</th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_news_info as $v_news) { ?>
                        <tr>
                            <td hidden=""></td>
                            <td style="width: 350px;"><?php echo $v_news->news_title; ?></td>
                            <td style="width: 550px;" hidden><?php // echo $v_news->news_description; ?></td>
                            <td>
                                <img src="<?php echo base_url(). $v_news->news_image; ?>" style="width: 100px; height: 75px" class="img-polaroid" />
                            </td>
                            <td style="text-align: center;">
                                <?php if($v_news->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublication_news/<?php echo $v_news->news_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/publication_news/<?php echo $v_news->news_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td style="text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>edit_data/edit_news/<?php echo $v_news->news_id; ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_news/<?php echo $v_news->news_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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