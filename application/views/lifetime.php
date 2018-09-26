<div class="col-md-7 main-content">
    <h1>আজীবন সদস্য</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_lifetile_member as $v_lifetile_member) { ?>
            <tr>
                <td width="25%">
                    <img class="table-img" src="<?php echo base_url(). $v_lifetile_member->forlife_members_image; ?>" alt="<?php echo $v_lifetile_member->forlife_members_name; ?>">
                </td>
                <td>
                    <h3 class="media-heading"><?php echo $v_lifetile_member->forlife_members_name; ?></h3>
                    <p class="orange"><?php echo $v_lifetile_member->forlife_members_name; ?></p>
                    <p><span>স্থায়ী ঠিকানাঃ <?php echo $v_lifetile_member->forlife_members_address; ?></span></p>
                    <p>মোবাইলঃ <span><?php echo $v_lifetile_member->forlife_members_phone; ?></span></p>
                    <p>ইমেইলঃ <span><?php echo $v_lifetile_member->forlife_members_email; ?></span></p>
                    <p><?php echo $v_lifetile_member->forlife_members_about; ?></p>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->