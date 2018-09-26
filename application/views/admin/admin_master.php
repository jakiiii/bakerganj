<!DOCTYPE html>
<!--[if lt IE 7]> <html class="lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--><html lang="en"><!--<![endif]-->
    <head>
        <meta charset="utf-8">

        <!-- Viewport Metatag -->
        <meta name="viewport" content="width=device-width,initial-scale=1.0">
        
        <title><?php echo $title; ?></title>

        <!-- Plugin Stylesheets first to ease overrides -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/plugins/colorpicker/colorpicker.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/custom-plugins/wizard/wizard.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/custom-plugins/picklist/picklist.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/plugins/select2/select2.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/plugins/ibutton/jquery.ibutton.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.css" media="screen">

        <!-- Required Stylesheets -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/bootstrap/css/bootstrap.min.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/fonts/ptsans/stylesheet.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/fonts/icomoon/style.css" media="screen">

        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/mws-style.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/icons/icol16.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/icons/icol32.css" media="screen">

        <!-- Demo Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/demo.css" media="screen">

        <!-- jQuery-UI Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/jui/css/jquery.ui.all.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/jui/jquery-ui.custom.css" media="screen">

        <!-- Theme Stylesheet -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/mws-theme.css" media="screen">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/backend/css/themer.css" media="screen">
        
        <!-- Jodit -->
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/backend/jodit/jodit.min.css">
        
        <style type="text/css">
            body {
                padding-bottom: 40px;
            }
            .sidebar-nav {
                padding: 9px 0;
            }
        </style>
        
        <script type="text/javascript">
            function checkDelete()
            {
                var chk = confirm('Are You Sure To Delete This !');
                if (chk)
                {
                    return true;
                } else
                {
                    return false;
                }
            }
        </script>

    </head>

    <body>
        <!-- Header -->
        <div id="mws-header" class="clearfix">

            <!-- Logo Container -->
            <div id="mws-logo-container">

                <!-- Logo Wrapper, images put within this wrapper will always be vertically centered -->
                <div id="mws-logo-wrap">
                    <img src="<?php echo base_url(); ?>asset/backend/images/mws-logo.png" alt="mws admin">
                </div>
            </div>

            <!-- User Tools (notifications, logout, profile, change password) -->
            <div id="mws-user-tools" class="clearfix">
                <!-- User Information and functions section -->
                <div id="mws-user-info" class="mws-inset">
                    
                    <!-- User Photo -->
                    <div id="mws-user-photo">
                        <img src="<?php echo base_url(); ?>asset/backend/example/profile.jpg" alt="User Photo">
                    </div>

                    <!-- Username and Functions -->
                    <div id="mws-user-functions">
                        <div id="mws-username" style="font-weight: bold;">
                            <?php echo $this->session->userdata('admin_name'); ?>
                        </div>
                        <ul>
<!--                            <li><a href="#">Profile</a></li>
                            <li><a href="#">Change Password</a></li>-->
                            <li><a href="<?php echo base_url(); ?>supper_admin/logout">Logout</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- Start Main Wrapper -->
        <div id="mws-wrapper">

            <!-- Necessary markup, do not remove -->
            <div id="mws-sidebar-stitch"></div>
            <div id="mws-sidebar-bg"></div>

            <!-- Sidebar Wrapper -->
            <div id="mws-sidebar">

                <!-- Hidden Nav Collapse Button -->
                <div id="mws-nav-collapse">
                    <span></span>
                    <span></span>
                    <span></span>
                </div>

                <!-- Main Navigation -->
                <div id="mws-navigation">
                    <ul>
                        <li class="active"><a href="<?php echo base_url(); ?>supper_admin"><i class="icon-home"></i> ড্যাশবোর্ড</a></li>
                        <?php if ($this->session->userdata('access_level') != 3 ) { ?>
                        <li><a href="<?php echo base_url(); ?>supper_admin/admin_manage"><i class="icon-user"></i> অ্যাডমিন</a></li>
                        <?php } ?>
                        <li>
                            <a href="#"><i class="icon-picture"></i> সিলাইডার</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_slider">নতুন সিলাইডার</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_slider">ম্যানেজমেন্ট সিলাইডার</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-map-marker"></i> ইউনিয়ন</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_union">নতুন ইউনিয়ন</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_union">ম্যানেজমেন্ট ইউনিয়ন</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>supper_admin/management_chairman"><i class="icon-accessibility-2"></i> সভাপতির বানী</a></li>
                        <li><a href="<?php echo base_url(); ?>supper_admin/management_rights"><i class="icon-volume-up"></i> আমাদের দাবী</a></li>
                        <li>
                            <a href="#"><i class="icon-facetime-video"></i> ভিডিও</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_video">নতুন ভিডিও</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_video">ম্যানেজমেন্ট ভিডিও</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-list-2"></i> ইভেন্ট</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_event">নতুন ইভেন্ট</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_event">ম্যানেজমেন্ট ইভেন্ট</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-calendar"></i> নিউজ</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_news">নতুন নিউজ</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_news">ম্যানেজমেন্ট নিউজ</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-calendar"></i> জব</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_job">নতুন জব</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_job">ম্যানেজমেন্ট জব</a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>supper_admin/iop_management"><i class="icon-hand-right"></i> মূলনীতি - আদর্শ - উদ্দেশ্য</a></li>
                        <li>
                            <a href="#"><i class="icon-network"></i> আমাদের সম্পর্কে</a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_background">পটভূমি</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_executive">কার্যনির্বাহী পরিষদ</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_student_unit">ছাত্র ইউনিট</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_nature">গঠনতন্ত্র</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_mambership">সদস্য হওয়ার নিয়ম</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-users"></i> সদস্য </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_founder"> প্রতিষ্ঠাতা সদস্য</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_forlife_member"> আজীবন সদস্য</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_advider"> উপদ্বেষ্টা মণ্ডলী</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-official"></i> গর্ভিত সন্তান </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_wiseperson"> গুণীজন </a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_produdsons_bd"> বাংলাদেশ </a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_produdsons_int"> আন্তর্জাতিক </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-sign-post"></i> প্রকাশনা </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_publication"> নতুন প্রকাশনা</a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_publication"> ম্যানেজমেন্ট প্রকাশনা</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>supper_admin/"><i class="icon-sign-post"></i> পুরস্কার </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_award"> নতুন পুরস্কার </a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_award"> ম্যানেজমেন্ট পুরস্কার </a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#"><i class="icon-sign-post"></i> বিজ্ঞাপন </a>
                            <ul>
                                <li><a href="<?php echo base_url(); ?>supper_admin/new_advertisement"> নতুন বিজ্ঞাপন </a></li>
                                <li><a href="<?php echo base_url(); ?>supper_admin/management_advertisement"> ম্যানেজমেন্ট বিজ্ঞাপন </a></li>
                            </ul>
                        </li>
                        <li><a href="<?php echo base_url(); ?>supper_admin/gallery_image"><i class="icon-picassa"></i> ছবি ঘর</a></li>
                        <?php if ($this->session->userdata('access_level') == 1 || $this->session->userdata('access_level') == 2 ) { ?>
                        <li>
                            <a href="<?php echo base_url(); ?>supper_admin/management_message">
                                <i class="icon-envelope"></i> 
                                বার্তা <span class="mws-nav-tooltip">1</span>
                            </a>
                        </li>
                        <li><a href="<?php echo base_url(); ?>supper_admin/management_address"><i class="icon-hand-right"></i> আমাদের ঠিকানা </a></li>
                        <?php } ?>
                    </ul>
                </div>
            </div>

            <!-- Main Container Start -->
            <?php echo $admin_maincontent; ?>
            <!-- Main Container End -->

        </div>

        <!-- JavaScript Plugins -->
        <script src="<?php echo base_url(); ?>asset/backend/js/libs/jquery-1.8.3.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/js/libs/jquery.mousewheel.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/js/libs/jquery.placeholder.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/custom-plugins/fileinput.js"></script>

        <!-- jQuery-UI Dependent Scripts -->
        <script src="<?php echo base_url(); ?>asset/backend/jui/js/jquery-ui-1.9.2.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/jui/jquery-ui.custom.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/jui/js/jquery.ui.touch-punch.js"></script>
        
        <script src="<?php echo base_url(); ?>asset/backend/jui/js/globalize/globalize.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/jui/js/globalize/cultures/globalize.culture.en-US.js"></script>

        <!-- Plugin Scripts -->
        <script src="<?php echo base_url(); ?>asset/backend/plugins/datatables/jquery.dataTables.min.js"></script>
        <!--[if lt IE 9]>
        <script src="js/libs/excanvas.min.js"></script>
        <![endif]-->
        <script src="<?php echo base_url(); ?>asset/backend/plugins/flot/jquery.flot.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/flot/plugins/jquery.flot.tooltip.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/flot/plugins/jquery.flot.pie.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/flot/plugins/jquery.flot.stack.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/flot/plugins/jquery.flot.resize.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/colorpicker/colorpicker-min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/validate/jquery.validate-min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/custom-plugins/wizard/wizard.min.js"></script>
        
        <script src="<?php echo base_url(); ?>asset/backend/custom-plugins/picklist/picklist.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/autosize/jquery.autosize.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/select2/select2.min.js"></script>
        
        <script src="<?php echo base_url(); ?>asset/backend/plugins/validate/jquery.validate-min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/ibutton/jquery.ibutton.min.js"></script>
        
        <!--<script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.min.js"></script>-->
        <script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.table.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.xhtml.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/plugins/cleditor/jquery.cleditor.icon.min.js"></script>

        <!-- Core Script -->
        <script src="<?php echo base_url(); ?>asset/backend/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/backend/js/core/mws.js"></script>

        <!-- Themer Script (Remove if not needed) -->
        <script src="<?php echo base_url(); ?>asset/backend/js/core/themer.js"></script>

        <!-- Demo Scripts (remove if not needed) -->
        <script src="<?php echo base_url(); ?>asset/backend/js/demo/demo.dashboard.js"></script>
        
         <!--Jodit--> 
        <script src="<?php echo base_url(); ?>asset/backend/jodit/jodit.min.js"></script>

        <script>
            new Jodit('#jodit', {
                uploader: {
                    url: 'jodit-connectors/index.php?action=upload'
                },
                filebrowser: {
                    ajax: {
                        url: 'jodit-connectors/index.php'
                    },
                }
            });
        </script>

    </body>
</html>