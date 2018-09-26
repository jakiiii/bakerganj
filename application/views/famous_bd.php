<div class="col-md-7 main-content">
    <h1>গর্বিত সন্তান | বাংলাদেশ</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_famous_bd as $v_famous_bd) { ?>
            <tr>
                <td width="25%">
                    <img class="table-img img-responsive img-thumbnail" src="<?php echo base_url(). $v_famous_bd->produdsons_bd_image; ?>" alt="<?php echo $v_famous_bd->produdsons_bd_name; ?>" style="height: 140px;" />
                </td>
                <td>
                    <h3 class="media-heading"><?php echo $v_famous_bd->produdsons_bd_name; ?></h3>
                    <p><?php echo $v_famous_bd->produdson_bd_description; ?></p>
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->