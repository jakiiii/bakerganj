<div class="col-md-7 main-content">
    <h1>গঠনতন্ত্র</h1>
    <hr>

    <p class="text-justify"><?php if($published_developmemnt_system == !NULL) { echo $published_developmemnt_system->nature_description; } ?></p>

    <a href="<?php if($published_developmemnt_system == !NULL) { echo base_url(). $published_developmemnt_system->nature_file; } ?>" class="btn btn-warning btn-lg" target="_blank">পূর্ণ গঠনতন্ত্র ডাউনলোড করুন</a>
</div><!-- /main-content -->