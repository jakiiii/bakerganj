<div class="col-md-7 main-content contact-area">
    <h1 class="text-center">আমাদের সাথে যোগাযোগ করুন</h1>
    
    <p class="text-center text-success">
        <?php
        $msg = $this->session->userdata('message');
        if($msg)
        {
            echo $msg;
            $this->session->unset_userdata('message');
        }
        ?>
    </p>
    
    <form class="form-horizontal" action="<?php echo base_url(); ?>insert_data/save_contactor_into" method="post">
        <div class="form-group">
            <label class="col-sm-3 control-label" for="name">আপনার নাম</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="name" name="contacter_name" placeholder="আপনার নাম" required>
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">আপনার ইমেইল</label>
            <div class="col-sm-9">
                <input type="email" class="form-control" id="email" name="contacter_email" placeholder="আপনার ইমেইল" required>
            </div>
        </div>
        <div class="form-group">
            <label for="occupation" class="col-sm-3 control-label">আপনার পেশা</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="occupation" name="contacter_profession" placeholder="আপনার পেশা" required>
            </div>
        </div>
<!--        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">আপনার ঠিকানা</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="address" placeholder="আপনার ঠিকানা">
            </div>
        </div>-->
        <div class="form-group">
            <label for="opinion" class="col-sm-3 control-label">আপনার মতামত</label>
            <div class="col-sm-9">
                <textarea name="contacter_opinion" id="opinion" rows="5" class="form-control" required></textarea>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-9 col-sm-offset-3">
                <button type="submit" name="btn" class="btn btn-warning btn-block btn-lg">পাঠিয়ে দিন</button>
            </div>
        </div>
    </form>
</div><!-- /main-content -->