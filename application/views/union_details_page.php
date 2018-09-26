<div class="col-md-7 main-content">
    <h1>এক নজরে <?php if($all_union_info !== NULL) { echo $all_union_info->union_name; } ?></h1>
    <hr>
    <div class="row">
        <div class="col-md-6">
            <iframe src="<?php if($all_union_info !== NULL) { echo $all_union_info->union_map; } ?>" width="100%" height="350" frameborder="0" style="border:1px solid #ddd" allowfullscreen></iframe>
        </div>
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">পটভূমি</h3>
                </div>
                <div class="panel-body background">
                    <?php if($all_union_info !== NULL) { echo $all_union_info->union_description; } ?>
                </div>
            </div>
        </div><!-- /col6 -->

        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">সাধারণ তথ্য</h3>
                </div>
                <div class="panel-body background">
                    <?php if($all_union_info !== NULL) { echo $all_union_info->union_information; } ?>
                </div>
            </div>
        </div> <!-- /col12 -->

        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">পর্যটন ও ঐতিহ্য</h3>
                </div>
                <div class="panel-body background">
                    <?php if($all_union_info !== NULL) { echo $all_union_info->union_tourism_tradition; } ?>
                </div>
            </div>
        </div>

        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">কৃষি বিষয়ক</h3>
                </div>
                <div class="panel-body background">
                    <?php if($all_union_info !== NULL) { echo $all_union_info->union_agriculture; } ?>
                </div>
            </div>
        </div><!-- /col6 -->
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">শিক্ষা বিষয়ক</h3>
                </div>
                <div class="panel-body background">
                    <?php if($all_union_info !== NULL) { echo $all_union_info->union_educational; } ?>
                </div>
            </div>
        </div><!-- /col6 -->
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">স্বাস্থ্য বিষয়ক</h3>
                </div>
                <div class="panel-body background">
                    <?php if($all_union_info !== NULL) { echo $all_union_info->union_health; } ?>
                </div>
            </div>
        </div><!-- /col6 -->
    </div><!-- /row -->
</div><!-- /main-content -->