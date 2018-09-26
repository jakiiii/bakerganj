<div class="col-md-7 main-content">
    <h1> <?php if($job_details_info == !NULL) { echo $job_details_info->job_title; } ?> </h1>
    <hr>
    <div class="row">
        <div class="col-md-12">
            <img src="<?php if($job_details_info == !NULL) { echo base_url(). $job_details_info->job_image; } ?>" alt="<?php if($job_details_info == !NULL) { echo $job_details_info->job_title; } ?>" class="img-responsive img-responsive" style="width: 650px; height: 205px;">
            <hr>
        </div>

        <div class="col-md-12">
            <p class="text-justify"><?php if($job_details_info) { echo $job_details_info->job_description; } ?></p>
        </div>
    </div>
</div><!-- /main-content -->