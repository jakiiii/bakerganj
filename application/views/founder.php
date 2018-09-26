<div class="col-md-7 main-content">
    <h1>প্রতিষ্ঠা সদস্য</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_founder as $v_founder) { ?>
            <tr>
                <td width="25%">
                    <img class="table-img" src="<?php echo base_url(). $v_founder->founder_members_image; ?>" alt="">
                </td>
                <td>
                    <h3 class="media-heading"><?php echo $v_founder->founder_members_name; ?></h3>
                    <p class="orange"><?php echo $v_founder->founder_members_designation; ?></p>
                    <p>স্থায়ী ঠিকানাঃ <span><?php echo $v_founder->founder_members_address; ?></span></p>
                    <p>মোবাইলঃ <span><?php echo $v_founder->founder_members_phone; ?></span></p>
                    <p>ইমেইলঃ <span><?php echo $v_founder->founder_members_email; ?></span></p>
                    <p><?php echo $v_founder->founder_members_about; ?></p>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->