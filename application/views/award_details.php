<div class="col-md-7 main-content">
    <h1><?php echo $prize_details->award_title; ?></h1>
    <hr>
    <img src="<?php echo base_url(). $prize_details->award_long_image; ?>" alt="<?php echo $prize_details->award_title; ?>" class="prize-details-img pull-left img-thumbnail">

    <p class="text-justify"><?php echo $prize_details->award_long_description; ?></p>
</div><!-- /main-content -->