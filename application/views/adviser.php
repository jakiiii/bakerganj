<div class="col-md-7 main-content">
    <h1>উপদেষ্টা সদস্য</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_adviser as $v_adviser) { ?>
            <tr>
                <td width="25%">
                    <img class="table-img" src="<?php echo base_url(). $v_adviser->adviser_members_image; ?>" alt="<?php echo $v_adviser->adviser_members_name; ?>">
                </td>
                <td>
                    <h3 class="media-heading"><?php echo $v_adviser->adviser_members_name; ?></h3>
                    <p class="orange"><?php echo $v_adviser->adviser_members_designation; ?></p>
                    <p>স্থায়ী ঠিকানাঃ <span><?php echo $v_adviser->adviser_members_address; ?></span></p>
                    <p>মোবাইলঃ <span><?php echo $v_adviser->adviser_members_phone; ?></span></p>
                    <p>ইমেইলঃ <span><?php echo $v_adviser->adviser_members_email; ?></span></p>
                    <p><?php echo $v_adviser->adviser_members_about; ?></p>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->