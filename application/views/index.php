<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title><?php echo $title; ?></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>asset/fontend/assets/css/dataTables.bootstrap.min.css"/>
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/fontend/assets/bootstrap/css/bootstrap.flatly.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/fontend/assets/font-awesome/css/font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/fontend/assets/css/jquery.mCustomScrollbar.min.css" />
        <link rel="stylesheet" href="<?php echo base_url(); ?>asset/fontend/assets/css/main.css">

        <!--[if lt IE 9]>
            <script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
            <script>window.html5 || document.write('<script src="js/vendor/html5shiv.js"><\/script>')</script>
        <![endif]-->
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
        <div id="fb-root"></div>
        <script>(function (d, s, id) {
                var js, fjs = d.getElementsByTagName(s)[0];
                if (d.getElementById(id))
                    return;
                js = d.createElement(s);
                js.id = id;
                js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.7";
                fjs.parentNode.insertBefore(js, fjs);
            }(document, 'script', 'facebook-jssdk'));</script>

        <div class="container">
            <header>
                <div class="row">
                    <div class="col-sm-4">
                        <a href="<?php echo base_url(); ?>welcome/index.html" class="logo">
                            <img src="<?php echo base_url(); ?>asset/fontend/assets/img/logo.jpg" alt="Bakergonj logo" class="pull-left">
                            <h1>গর্বের বাকেরগঞ্জ</h1>
                        </a>
                    </div>
                    <div class="col-sm-8 top-add" hidden>
                        <div class="alert">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
                            <a href="#"><img src="http://placehold.it/750x90" class="img-responsive"></a>
                        </div>
                    </div>
                </div>

                <nav class="navbar navbar-inverse">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                        </div>

                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav">
                                <li class="active hidden-xs"><a href="<?php echo base_url(); ?>welcome/index.html"><i class="fa fa-home"></i></a></li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">আমাদের সম্পর্কে <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>welcome/background.html">পটভূমি</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/executive_member.html">কার্যনির্বাহী পরিযদ</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/students_unity.html">ছাত্র ইউনিট</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/development_system.html">গঠনতন্ত্র</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/membership_rules.html">সদস্য হওয়ার নিয়মাবলী</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">সদস্য <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>welcome/founder_member.html">প্রতিষ্ঠা সদস্য</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/adviser_member.html">উপদেষ্টা সদস্য</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/lifetime_member.html">আজীবন সদস্য</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">গর্বিত সন্তান <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="<?php echo base_url(); ?>welcome/famous_people.html">গুণীজন</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/famous_people_bd.html">বাংলাদেশ</a></li>
                                        <li><a href="<?php echo base_url(); ?>welcome/famous_people_int.html">আন্তর্জাতিক</a></li>
                                    </ul>
                                </li>
                                <li><a href="<?php echo base_url(); ?>welcome/publication.html">প্রকাশনা</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/prize.html">পুরষ্কার</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/gallery.html">ছবিঘর</a></li>
                                <li><a href="<?php echo base_url(); ?>welcome/contact.html">যোগাযোগ</a></li>
                            </ul>
                        </div><!-- /.navbar-collapse -->
                    </div><!-- /.container-fluid -->
                </nav>
            </header>

            <!-- Slider Area
            ============================================== -->
            <?php
            if($slider)
            {
            ?>
            <div id="main-slider" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                    <li data-target="#main-slider" data-slide-to="1"></li>
                    <li data-target="#main-slider" data-slide-to="2"></li>
                </ol>
                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <?php $i = 1; foreach ($all_published_slider as $v_slider) { ?>
                    <?php if($all_published_slider == !NULL) { ?>
                    <?php $item_class = ($i == 1) ? 'item active' : 'item'; ?>
                    <div class="<?php echo $item_class; ?>">
                        <img src="<?php echo base_url(). $v_slider->slider_image; ?>" alt="...">
                        <div class="carousel-caption">
                            <?php echo $v_slider->slider_descrription; ?>
                        </div>
                    </div>
                    <?php } ?>
                    <?php $i++; } ?>
                </div>
            </div> <!-- /.carousel -->
            <?php
            }
            ?>

            <!-- Content
            ============================================== -->
            <div class="row">
                <div class="col-md-2 sidebar-menu">
                    <ul class="nav nav-sidebar">
                        <?php foreach ($all_published_union as $v_union) { ?>
                        <li><a href="<?php echo base_url(); ?>welcome/union_details/<?php echo $v_union->union_id; ?>"><?php echo $v_union->union_name; ?></a></li>
                        <?php } ?>
                    </ul>

                    <?php if($slider_three) { ?>
                    <div class="panel hidden-xs hidden-sm ">
                        <?php if($first_add == !NULL) { ?>
                        <a href="<?php echo $first_add->advertisement_link; ?>" title="<?php echo $first_add->advertisement_title; ?>" target="_blank"><img src="<?php echo base_url(). $first_add->advertisement_image; ?>" alt="<?php echo $first_add->advertisement_title; ?>" style="width: 160px; height: 300px;"></a>
                        <?php } ?>
                    </div>
                    <div class="panel hidden-xs hidden-sm ">
                        <?php if($thired_add == !NULL) { ?>
                        <a href="<?php echo $thired_add->advertisement_link3; ?>" title="<?php echo $thired_add->advertisement_title3; ?>" target="_blank"><img src="<?php echo base_url(). $thired_add->advertisement_image3; ?>" alt="<?php echo $thired_add->advertisement_title3; ?>" style="width: 160px; height: 300px;"></a>
                        <?php } ?>
                    </div>
                    <?php } ?>
                </div> <!-- /col -->

                <!-- main content -->
                <?php echo $maincontent; ?>
                <!-- end of main content -->
                
                
                <aside>
                    <div class="col-md-3">
                        <div class="panel">
                            <div class="fb-page" data-href="https://www.facebook.com/%E0%A6%97%E0%A6%B0%E0%A7%8D%E0%A6%AC%E0%A7%87%E0%A6%B0-%E0%A6%AC%E0%A6%BE%E0%A6%95%E0%A7%87%E0%A6%B0%E0%A6%97%E0%A6%9E%E0%A7%8D%E0%A6%9C-Gorber-Bakergonj-401450923386584/" data-width="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><blockquote cite="https://www.facebook.com/%E0%A6%97%E0%A6%B0%E0%A7%8D%E0%A6%AC%E0%A7%87%E0%A6%B0-%E0%A6%AC%E0%A6%BE%E0%A6%95%E0%A7%87%E0%A6%B0%E0%A6%97%E0%A6%9E%E0%A7%8D%E0%A6%9C-Gorber-Bakergonj-401450923386584/" class="fb-xfbml-parse-ignore"><a href="https://www.facebook.com/%E0%A6%97%E0%A6%B0%E0%A7%8D%E0%A6%AC%E0%A7%87%E0%A6%B0-%E0%A6%AC%E0%A6%BE%E0%A6%95%E0%A7%87%E0%A6%B0%E0%A6%97%E0%A6%9E%E0%A7%8D%E0%A6%9C-Gorber-Bakergonj-401450923386584/">গর্বের বাকেরগঞ্জ Gorber Bakergonj</a></blockquote></div>
                        </div>

                        <!-- sidebar tab -->
                        <div class="panel panel-warning">
                            <ul class="nav nav-tabs" role="tablist">
                                <li role="presentation" class="active"><a href="#event" aria-controls="event" role="tab" data-toggle="tab">Event</a></li>
                                <li role="presentation"><a href="#news" aria-controls="news" role="tab" data-toggle="tab">News</a></li>
                            </ul>

                            <div class="panel-body">
                                <div class="tab-content">
                                    <div role="tabpanel" class="tab-pane fade in active" id="event">
                                        <ul class="list-unstyled events">
                                            <?php foreach ($all_published_event as $v_event) { ?>
                                            <?php if($all_published_event == !NULL) { ?>
                                            <li><a href="<?php echo base_url(); ?>welcome/event_details/<?php echo $v_event->event_id; ?>" ><?php echo $v_event->event_name; ?></a></li>
                                            <li style="text-align: center;"><a href="<?php echo base_url(); ?>welcome/archive_event">see all event</a></li>
                                            <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                    <div role="tabpanel" class="tab-pane fade" id="news">
                                        <ul class="list-unstyled news">
                                            <?php foreach ($all_published_news as $v_news) { ?>
                                            <?php if ($all_published_news == !NULL) { ?>
                                            <li><a href="<?php echo base_url(); ?>welcome/news_details/<?php echo $v_news->news_id; ?>"><?php echo $v_news->news_title; ?></a></li>
                                            <li style="text-align: center;"><a href="<?php echo base_url(); ?>welcome/archive_news"">see all news</a></li>
                                            <?php } ?>
                                            <?php } ?>
                                        </ul>
                                    </div>
                                </div> <!-- /tabcontent -->
                            </div><!-- /panel-body -->
                        </div> <!-- /sidebar tab -->
                        <?php if($add_second) { ?>
                        <div class="panel">
                            <?php if($second_add == !NULL) { ?>
                            <a href="<?php echo $second_add->advertisement_link2; ?>" title="<?php echo $second_add->advertisement_title2; ?>" target="_blank"><img src="<?php echo base_url(). $second_add->advertisement_image2; ?>" alt="<?php echo $second_add->advertisement_title2; ?>" class="img-responsive" style="width: 300px; height: 300px;"></a>
                            <?php } ?>
                        </div>
                        <?php } ?>
                        <div class="panel panel-warning">
                            <div class="panel-heading">
                                <h3 class="panel-title">চাকরি</h3>
                            </div>
                            <div class="panel-body">
                                <ul class="list-unstyled jobs">
                                    <?php foreach ($all_published_jobs as $v_job) { ?>
                                    <li><a href="<?php echo base_url(); ?>welcome/job_details/<?php echo $v_job->job_id; ?>"><?php echo $v_job->job_title; ?></a></li>
                                    <li style="text-align: center;"><a href="<?php echo base_url(); ?>welcome/archive_jobs"">see all news</a></li>
                                    <?php } ?>
                                </ul>
                            </div>
                        </div><!-- /panel job-->
                    </div> <!-- /col -->
                </aside>
            </div><!-- /row -->

            <!-- Footer Top
            ============================================== -->
            <section class="footer-top">    
                <div class="row">
                    <div class="col-md-4">
                        <h3>আমাদের ঠিকানা</h3>
                        <address>
                            <p><i class="fa fa-home"></i>&nbsp;<?php if ($all_published_address == !NULL) { echo $all_published_address->address_description; } ?></p>
                            <p><i class="fa fa-phone"></i>&nbsp;<?php if($all_published_address == !NULL) { echo $all_published_address->address_phone; } ?></p>
                            <p>
                                <a href="<?php if($all_published_address == !NULL) { echo $all_published_address->address_email; } ?>"><i class="fa fa-envelope"></i>&nbsp;<?php if($all_published_address == !NULL) { echo $all_published_address->address_email; } ?></a>
                            </p>
                        </address>
                    </div><!-- /col -->
                    <div class="col-md-3 col-md-offset-5">
                        <h3>সামাজিক যোগাযোগ মাধ্যম</h3>
                        <ul class="list-unstyled list-inline social-media">
                            <li><a href="<?php if($all_published_address == !NULL) { echo $all_published_address->facebook_link; } ?>" target="_blank"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="<?php if($all_published_address == !NULL) { echo $all_published_address->twitter_link; } ?>" target="_blank"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="<?php if($all_published_address == !NULL) { echo $all_published_address->googleplus_link; } ?>" target="_blank"><i class="fa fa-google-plus"></i></a></li>
                            <li><a href="<?php if($all_published_address == !NULL) { echo $all_published_address->youtube_link; } ?>" target="_blank"><i class="fa fa-youtube"></i></a></li>
                        </ul>
                    </div><!-- /col -->
                </div><!-- /row -->
            </section><!-- /footer-top -->
            <!-- Footer
            ============================================== -->
            <footer class="footer">
                <div class="row">
                    <div class="col-md-12">
                        <p class="text-center">Copyright &copy; 2016 বাকেরগঞ্জ। সর্বসত্ত্ব সংরক্ষিত</p>
                    </div>
                </div>
            </footer>
        </div> <!-- /container -->


        <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>asset/fontend/assets/js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/fontend/assets/js/vendor/datatables.min.js"></script>
        <script type="text/javascript" src="<?php echo base_url(); ?>asset/fontend/assets/js/vendor/dataTables.bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/fontend/assets/bootstrap/js/bootstrap.min.js"></script>
        <script src="<?php echo base_url(); ?>asset/fontend/assets/js/vendor/jquery.mCustomScrollbar.concat.min.js"></script>

        <script src="<?php echo base_url(); ?>asset/fontend/assets/js/main.js"></script>
    </body>
</html>
