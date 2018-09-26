<div class="col-md-7 main-content">
    <h1><?php echo $news_details_info->news_title; ?></h1>
    <p>লেখকঃ <a href="#"><?php echo $news_details_info->author_name; ?></a></p>
    <p><?php echo $news_details_info->created_date_time; ?></p>
    <hr>
    <img src="<?php echo base_url(). $news_details_info->news_image; ?>" alt="" class="news-event-details-img pull-right img-thumbnail" style="width: 650px; height: 400px;">
    <div class="clearfix"></div> <br />

    <p class="text-justify"><?php echo $news_details_info->news_description; ?></p>
</div><!-- /main-content -->