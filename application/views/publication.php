<div class="col-md-7 main-content">
    <h1>প্রকাশনা</h1>
    <hr>
    <table  class="table table-bordered" id="data-table">
        <thead>
            <tr>
                <td></td>
                <td></td>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($all_published_publication as $v_publication) { ?>
            <tr>
                <td>
                    <h3><?php echo $v_publication->publications_title; ?></h3>
                    <p style="text-align: justify;"><?php echo $v_publication->publications_description; ?></p>
                    <a href="<?php echo base_url(). $v_publication->publications_file; ?>" target="_blank" class="btn btn-warning btn-md">ডাউনলোড করুন</a>
                </td>
                <td width="25%">
                    <img class="table-img img-responsive img-polaroid" src="<?php echo base_url(). $v_publication->publications_image; ?>" alt="<?php echo $v_publication->publications_title; ?>">
                </td>
            </tr>
            <?php } ?>
        </tbody>
    </table>

</div><!-- /main-content -->