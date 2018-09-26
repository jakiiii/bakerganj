<div class="col-md-7 main-content">
    <div class="row">
        <div class="col-md-12">
            <img src="<?php echo base_url(). $event_details_info->event_image; ?>" alt="" class="img-responsive" style="height: 240px; width: 650px;">
        </div>
    </div>
    <h1><?php echo $event_details_info->event_name; ?></h1>
    <p>লেখকঃ <a href="#"><?php echo $event_details_info->author_name; ?></a></p>
    <p><?php echo $event_details_info->created_date_time; ?></p>
    <hr>
    <p class="text-justify"><?php echo $event_details_info->event_description; ?></p>
</div><!-- /main-content -->