<div class="col-md-7 main-content">
    <h1>পুরস্কার</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_award as $v_award) { ?>
            <tr>
                <td width="25%">
                    <img class="table-img img-responsive img-thumbnail" src="<?php echo base_url(). $v_award->award_long_image; ?>" alt="<?php echo $v_award->award_title; ?>" style="width: 140px; height: 140px;">
                </td>
                <td>
                    <h3 class="media-heading"><?php echo $v_award->award_title; ?></h3>
                    <p style="text-align: justify;"><?php echo $v_award->award_short_description; ?></p>
                    <a href="<?php echo base_url(); ?>welcome/view_details_award/<?php echo $v_award->award_id; ?>">পুরোটা পড়ুন</a>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->