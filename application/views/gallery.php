<div class="col-md-7 main-content">
    <h1>ছবি ঘর</h1>
    <hr>
    <div class="row gallery">
        <?php foreach ($all_published_gallery as $v_image) { ?>
        <div class="col-sm-4 col-xs-6">
            <a href="#" class="pop">
                <img src="<?php echo base_url(). $v_image->gallery_image;?>" class="img-responsive img-thumbnail" style="height: 200px; width: 200px;" />
            </a>
        </div><!-- /col4 -->
        <?php } ?>
    </div><!-- /row gallery -->

    <!-- modal area -->
    <div class="modal fade" id="imagemodal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">              
                <div class="modal-body">
                    <button type="button" class="close" data-dismiss="modal"><span aria-hidden="true">&times;</span><span class="sr-only">Close</span></button>
                    <img src="" class="imagepreview" style="width: 100%;" >
                </div>
            </div>
        </div>
    </div> <!-- /modal -->
</div><!-- /main-content -->