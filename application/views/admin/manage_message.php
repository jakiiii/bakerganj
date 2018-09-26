<div id="mws-container" class="clearfix">
    <!-- Inner Container Start -->
    <div class="container">
        
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-envelope"></i>বার্তা ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th hidden>ক্রমিক নং</th>
                            <th>নাম</th>
                            <th>ইমেল</th>
                            <th>প্রফেশন</th>
                            <th>বার্তা</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_message_info as $v_message) { ?>
                        <tr>
                            <td hidden></td>
                            <td style="width: 125px; text-align: center;"><?php echo $v_message->contacter_name; ?></td>
                            <td style="width: 160px; text-align: center;"><?php echo $v_message->contacter_email; ?></td>
                            <td style="width: 140px; text-align: center;"><?php echo $v_message->contacter_profession; ?></td>
                            <td style="text-align: justify;"><?php echo $v_message->contacter_opinion; ?></td>
                            <td style="width: 60px; text-align: center;">
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_contacter/<?php echo $v_message->contacter_id; ?>" class="btn btn-small" onclick="return checkDelete();"><i class="icon-trash"></i></a>
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