<div class="col-md-7 main-content news-event-content">
        <h1>ইভেন্টস</h1>
        <hr>
        <table  class="table table-bordered" id="data-table-25">
            <thead>
                <tr>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($all_published_archive_event as $v_event) { ?>
                    <td><a href="<?php echo base_url(); ?>welcome/event_details/<?php echo $v_event->event_id; ?>" ><?php echo $v_event->event_name; ?></a></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>

    </div><!-- /main-content -->