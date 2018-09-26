<div class="col-md-7 main-content news-event-content">
        <h1>নিউজ</h1>
        <hr>
        <table  class="table table-bordered" id="data-table-25">
            <thead>
                <tr>
                    <td></td>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <?php foreach ($all_published_archive_news as $v_news) { ?>
                    <td><a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_news->news_id; ?>"><?php echo $v_news->news_title; ?></a></td>
                    <?php } ?>
                </tr>
            </tbody>
        </table>

    </div><!-- /main-content -->