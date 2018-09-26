<div id="mws-container" class="clearfix">
    <div class="container">
        <div id="mws-dashboard-chart" style="height: 0.1px;"></div>
        <div class="mws-panel grid_8">
            <div class="mws-panel-header">
                <span><i class="icon-user"></i> নতুন অ্যাডমিনের যুক্ত করুন 
                    <span class="pull-right">
                    <?php
                        $msg = $this->session->userdata('message');
                        if($msg)
                        {
                            echo $msg;
                            $this->session->unset_userdata('message');
                        }
                    ?>
                    </span>
                </span>
            </div>
            <div class="mws-panel-body no-padding">
                <form id="mws-validate" class="mws-form" action="<?php echo base_url(); ?>insert_data/insert_admin_info" method="post">
                    <div id="mws-validate-error" class="mws-form-message error" style="display:none;"></div>
                    <div class="mws-form-inline">
                        <div class="mws-form-row">
                            <label for='adminName' class="mws-form-label">অ্যাডমিনের নাম</label>
                            <div class="mws-form-item">
                                <input type="text" name="admin_name" class="required large" id="adminName" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adminEmail" class="mws-form-label">অ্যাডমিনের ইমেল</label>
                            <div class="mws-form-item">
                                <input type="text" name="admin_email" class="required email large" id="adminEmail" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adminPassword" class="mws-form-label">পাসওয়ার্ড</label>
                            <div class="mws-form-item">
                                <input type="password" name="admin_password" class="required large" id="adminPassword" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="adminRepassword" class="mws-form-label">রি-পাসওয়ার্ড</label>
                            <div class="mws-form-item">
                                <input type="password" class="required large" id="adminRepassword" />
                            </div>
                        </div>
                        <div class="mws-form-row">
                            <label for="accessLevel" class="mws-form-label"> অ্যাক্সেস লেভেল</label>
                            <div class="mws-form-item">
                                <select class="required large" name="access_level" id="accessLevel">
                                    <option></option>
                                    <option value="2">অ্যাডমিন</option>
                                    <option value="3">ইডিটর</option>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="mws-button-row">
                        <button type="submit" name="btn" class="btn btn-large btn-inverse btn-block">সেভ করুন</button>
                    </div>
                </form>
            </div> 
        </div>
        
        <!--- ADMIN MANAGEMENT CONTROL POINT -->
        
        <div class="mws-panel grid_8 mws-collapsible">
            <div class="mws-panel-header">
                <span><i class="icon-user"></i>অ্যাডমিন ম্যানেজমেন্ট</span>
            </div>
            <div class="mws-panel-body no-padding">
                <table class="mws-table mws-datatable">
                    <thead>
                        <tr>
                            <th>অ্যাডমিনের নাম</th>
                            <th hidden></th>
                            <th>অ্যাডমিনের ইমেল</th>
                            <th class="hide"></th>
                            <th>অ্যাক্সেস লেভেল</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($all_admin_info as $v_admin ) {?>
                        <?php if($v_admin->access_level != 1) {?>
                        <tr>
                            <td> <?php echo $v_admin->admin_name; ?> </td>
                            <td hidden></td>
                            <td> <?php echo $v_admin->admin_email; ?> </td>
                            <td class="hide"></td>
                            <td>
                                <?php if ($v_admin->access_level == 2) { ?>
                                <a href="<?php echo base_url(); ?>update_data/editor/<?php echo $v_admin->admin_id; ?>" class="btn btn-primary">Admin</a>
                                <?php } else if ($v_admin->access_level == 3) { ?>
                                <a href="<?php echo base_url(); ?>update_data/admin/<?php echo $v_admin->admin_id; ?>" class="btn btn-danger">Editor</a>
                                <?php } ?>
                            </td>
                            <td>
                                <span class="btn-group">
                                    <a href="<?php echo base_url(); ?>update_data/delete_admin/<?php echo $v_admin->admin_id; ?>" onclick="return checkDelete();" class="btn btn-small"><i class="icon-trash"></i></a>
                                </span>
                            </td>
                        </tr>
                        <?php } ?>
                        <?php } ?>
                    </tbody>
                </table>
            </div>
        </div>
        
    </div>
</div>

<!-- JavaScript Plugins -->
<script src="<?php echo base_url(); ?>asset/backend/js/libs/jquery-1.8.3.min.js"></script>
<!-- Plugin Scripts -->
<script src="<?php echo base_url(); ?>asset/backend/plugins/validate/jquery.validate-min.js"></script>
<script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.min.js"></script>
<!-- Demo Scripts (remove if not needed) -->
<script src="<?php echo base_url(); ?>asset/backend/js/demo/demo.formelements.js"></script>