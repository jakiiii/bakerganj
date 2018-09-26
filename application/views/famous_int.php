<div class="col-md-7 main-content">
    <h1>গর্বিত সন্তান | আন্তর্জাতিক</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_famous_int as $v_famous_int) { ?>
            <tr>
                <td width="25%">
                    <img class="table-img img-responsive img-thumbnail" src="<?php echo base_url(). $v_famous_int->produdsons_int_image; ?>" alt="<?php echo $v_famous_int->produdsons_int_name; ?>" style="height: 140px;" />
                </td>
                <td>
                    <h3 class="media-heading"><?php echo $v_famous_int->produdsons_int_name; ?></h3>
                    <p><?php echo $v_famous_int->produdson_int_description; ?></p>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->