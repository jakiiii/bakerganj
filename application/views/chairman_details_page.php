<div class="col-md-7 main-content">
    <h1><?php if($chairman_data == !NULL) { echo $chairman_data->chairman_name; } ?></h1>
    <hr>
    <img src="<?php if($chairman_data == !NULL) { echo base_url() . $chairman_data->chairman_image; } ?>" alt="<?php if($chairman_data == !NULL) { echo $chairman_data->chairman_name; } ?>" class="news-event-details-img pull-right img-responsive img-thumbnail" style="width: 250px; height: 250px;">

    <p class="text-justify"><?php if($chairman_data == !NULL) { echo $chairman_data->chairman_long_description; } ?></p>
</div><!-- /main-content -->