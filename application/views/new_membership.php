<div class="col-md-7 main-content">
    <h1>সদস্য হওয়ার নিয়মাবলী</h1>
    <hr>

    <p>
        <?php if($published_new_membership_lows == !NULL) { echo $published_new_membership_lows->membership_rules_description; } ?>
    </p>

    <a href="<?php if($published_new_membership_lows == !NULL) { echo base_url(). $published_new_membership_lows->membership_rules_form; } ?>" class="btn btn-warning btn-lg" target="_blank">সদস্য ফর্ম ডাউনলোড করুন</a>
</div><!-- /main-content -->