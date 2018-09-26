<div class="col-md-7 main-content">
        <h1>কার্যনির্বাহী পরিযদ</h1>
        <hr>
        <table  class="table table-bordered" id="data-table">
            <thead>
                <tr>
                    <td></td>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($all_published_executive as $v_excutive) { ?>
                <tr>
                    <td width="25%">
                        <img class="table-img" src="<?php echo base_url(). $v_excutive->executive_council_image; ?>" alt="<?php echo $v_excutive->executive_council_name; ?>">
                    </td>
                    <td>
                        <h3 class="media-heading"><?php echo $v_excutive->executive_council_name; ?></h3>
                        <p class="orange"><?php echo $v_excutive->executive_council_designation; ?></p>
                        <p>স্থায়ী ঠিকানাঃ <span><?php echo $v_excutive->executive_council_home_address; ?></span></p>
                        <p>বর্তমান ঠিকানাঃ <span><?php echo $v_excutive->executive_council_current_address; ?></span></p>
                        <p>মোবাইলঃ <span><?php echo $v_excutive->executive_council_phone; ?></span></p>
                        <p>ইমেইলঃ <span><?php echo $v_excutive->executive_council_email; ?></span></p>
                    </td>
                </tr>
                <?php } ?>
            </tbody>
        </table>

    </div><!-- /main-content -->