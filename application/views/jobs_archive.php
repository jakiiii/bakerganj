<div class="col-md-7 main-content news-event-content">
        <h1>জব আরকাইভ</h1>
        <hr>
        <ul style="list-style-type: none;">
            <?php foreach ($all_published_jobs as $v_job) { ?>
            <li><a href="<?php echo base_url(); ?>welcome/job_details/<?php echo $v_job->job_id; ?>"><?php echo $v_job->job_title; ?></a></li>
            <?php } ?>
        </ul>
    </div><!-- /main-content -->