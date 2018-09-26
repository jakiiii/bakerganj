<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-table"></i>পুরস্কৃার ম্যানেজমেন্ট 
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
                            <th>শিরনাম</th>
                            <th hidden>পুরস্কৃত ব্যক্তির সম্পর্কে</th>
                            <th>ছবি</th>
                            <th>পাবলিকেশন স্টাটাস</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_award as $v_award) { ?>
                        <tr>
                            <td hidden=""></td>
                            <td style="width: 400px; text-align: justify;"><?php echo $v_award->award_title; ?></td>
                            <td hidden></td>
                            <td style="width: 200px; text-align: center;">
                                <img src="<?php echo base_url(). $v_award->award_long_image; ?>" style="width: 100px; height: 75px" class="img-polaroid" />
                            </td>
                            <td style="width: 200px; text-align: center;">
                                <?php if($v_award->publication_status == 1) { ?>
                                <a href="<?php echo base_url(); ?>update_data/unpublished_award/<?php echo $v_award->award_id; ?>" style="" class="btn btn-primary">Published</a>
                                <?php } else { ?>
                                <a href="<?php echo base_url(); ?>update_data/published_award/<?php echo $v_award->award_id; ?>" class="btn btn-danger">Un-Published</a>
                                <?php } ?>
                            </td>
                            <td>
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>edit_data/edit_award/<?php echo $v_award->award_id; ?>" class="btn btn-small"><i class="icon-pencil"></i></a>
                                    <a href="<?php echo base_url(); ?>update_data/delete_award/<?php echo $v_award->award_id; ?>" class="btn btn-small"><i class="icon-trash" onclick="return checkDelete();"></i></a>
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