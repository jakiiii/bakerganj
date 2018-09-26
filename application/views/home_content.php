<div class="col-md-7 main-content">
    <div class="row">
        <div class="col-sm-4">
            <div class="panel panel-warning president">
                <div class="panel-body">
                    <img src="<?php if($chairman_data == !NULL) { echo base_url(). $chairman_data->chairman_image; } ?>" alt="<?php if($chairman_data == !NULL) { echo $chairman_data->chairman_name; } ?>" class="img-responsive">
                    <blockquote>
                        <p><?php if($chairman_data == !NULL) { echo $chairman_data->chairman_short_description; } ?></p>
                        <footer><?php if($chairman_data == !NULL) { echo $chairman_data->chairman_name; } ?></footer>
                        <p class="pull-right"><a href="<?php echo base_url(); ?>welcome/chairman_details/<?php if($chairman_data == !NULL) { echo $chairman_data->chairman_id; } ?>">see more</a></p>
                    </blockquote>
                </div>
            </div>
        </div>
        <div class="col-sm-8 video">
            <iframe width="" height="" src="<?php if($published_video == !NULL) { echo $published_video->video_link; } ?>" frameborder="0" allowfullscreen></iframe>
        </div>
    </div><!-- /row -->

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">আমাদের দাবী</h3>
                </div>
                <div class="panel-body">
                    <?php if($published_rights == !NULL) { ?>
                    <p><?php echo $published_rights->right_description; ?></p>
                    <?php } else { ?>
                    <ul class="list-unstyled">
                        <li>১। বাকেরগঞ্জ উপজেলার চড় ও নদী ভাঙ্গন এলাকায় পুনর্বাসন সহ বিশেষ প্রকল্প চালু করতে হবে এবং নদী ভাঙ্গন রোধ কল্পে প্রয়োজনীয় ব্যবস্থা গ্রহণ করতে হবে।</li>

                        <li>২। বাকেরগঞ্জ উপজেলা স্বাস্থ্য কেন্দ্র ৫০০ সজ্জায় উন্নীত করতে হবে। হাসপাতালে নৌ এ্যাম্বুলেন্স সহ সকল বিভাগের বর্হীর বিভাগ চালু করতে হবে।</li>
                        <li>৩। বরিশাল বিশ্ববিদ্যালয়ের একটি আবাসিক হল মহতি আগা বাঁকের খানের নামে নামকরণ করতে হবে। </li>
                        <li>৪। বরিশাল-বাকেরগঞ্জ-কালাইয়া আঞ্চলিক মহাসড়ক চালু করতে হবে। </li>
                        <li>৫। বরিশাল-বাকেরগঞ্জ-বরগুনা আঞ্চলিক মহাসড়ক চালু করতে হবে। </li>
                        <li>৬। বাকেরগঞ্জ উপজেলার সাথে আন্তঃ ইউনিয়ন সড়ক ব্যবস্থা চালু করতে হবে। </li>
                        <li>৭। শিয়ালগুণীকে আঞ্চলিক নৌ বন্দর হিসাবে উন্নীত করতে হবে।</li>
                        <li>৮। বাকেরগঞ্জ উপজেলার সকল গুণীজনদের যথাযথ সম্মান প্রদর্শন পূর্বক এলাকার বিভিন্ন স্থাপনার নামকরণ করতে হবে। </li>
                        <li>৯। সরকারী বাকেরগঞ্জ কলেজে অনার্স কোর্স চালু সহ মাস্টার্সে উন্নীত করতে হবে। </li>
                        <li>১০। আবাসিক সুবিধা সহ বাকেরগঞ্জে একটি সরকারী মহিলা কলেজ প্রতিষ্ঠা করতে হবে। </li>
                        <li>১১। বাকেরগঞ্জে সরকারীভাবে কারিগরিক প্রশিক্ষণ কেন্দ্র, নার্সিং ইন্সটিটিউট সহ একটি সরকারী মহিলা পলিটেকনিক প্রতিষ্ঠা করতে হবে।</li>
                        <li>১২। বাকেরগঞ্জে বিকেএসপি প্রতিষ্ঠা করতে হবে।</li>
                        <li>১৩। নেয়ামতি ফায়ারস্কোয়াডকে পূর্ণাঙ্গ রূপে চালু করতে হবে। </li>
                        <li>১৪। বাকেরগঞ্জে একটি স্টিডিয়াম এবং একটি শিশু পার্ক প্রতিষ্ঠা করতে হবে। </li>
                        <li>১৫। বাকেরগঞ্জ’র সকল ইউনিয়ন এবং পৌরসভায় সরকারীভাবে পাঠাগার স্থাপন করতে হবে।</li>
                        <li>১৬। বাকেগঞ্জ উপজেলার সকল ঐতিহাসিক স্থাপনা, স্থান, ইতিহাস এবং ঐতিহ্য রক্ষায় কার্যকর ব্যবস্থা গ্রহণ করতে হবে। </li>
                        <li>১৭। বাকেরগঞ্জ উপজেলার থানাকে আধুনিকায়ন করতে হবে এবং নৌ থানার কার্যক্রম সর্বত্র ছড়িয়ে দিতে হবে।</li> 
                        <li>১৮। বাকেরগঞ্জ উপজেলায় সর্বত্র বিদ্যুৎয়ানের ব্যবস্থা করতে হবে।</li>
                        <li>১৯। বাকেরগঞ্জে আধুনিক সুবিধা সহ প্রেস ক্লাব নির্মাণের জন্য প্রয়োজনীয় ব্যবস্থা গ্রহণ করতে হবে। </li>
                        <li>২০। বাকেরগঞ্জ উপজেলার সকল শিক্ষা প্রতিষ্ঠানে শহীদ মিনার এবং পাঠাগার স্থাপন করতে হবে।</li>
                        <li>২১। বাকেরগঞ্জ উপজেলার সকল খেয়াঘাট সমূহ টোল ফ্রি করতে হবে।</li>
                        <li>২২। বাকেরগঞ্জ পৌরসভাকে এ গ্রেডে উন্নীত করণ করতে হবে।</li>
                    </ul>
                    <?php } ?>
                </div><!-- /panel-body -->
            </div><!-- /panel -->
        </div><!-- /col -->

        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">মূলনীতি</h3>
                </div>
                <div class="panel-body idol-principle">
                    <?php if ($published_ip == !NULL) { ?>
                    <p><?php echo $published_ip->iop_ideal_description; ?></p>
                    <?php } else { ?>
                    <p>ঐক্য ও অখণ্ডতা রক্ষার মাধ্যমে বাকেরগঞ্জের সুষম উন্নয়ন।</p>
                    <?php } ?>
                </div>
            </div> <!-- /principles -->
        </div><!-- /col -->
        <div class="col-md-6">
            <div class="panel panel-warning">
                <div class="panel-heading">
                    <h3 class="panel-title">আদর্শ</h3>
                </div>
                <div class="panel-body idol-principle">
                    <?php if($published_ip == !NULL) { ?>
                    <p><?php echo $published_ip->iop_principles_description; ?></p>
                    <?php } else { ?>
                    <p>&ldquo;গর্বের বাকেরগঞ্জ&rdquo; একটি বেসরকারি স্বেচ্ছাসেবী সমাজকল্যাণ মূলক অলাভজনক, অরাজনৈতিক এবং মানব হিতৈষী সংগঠন। একতা, শৃংখলা ও সহযোগিতামূলক পরিবেশ সৃষ্টির মাধ্যমে স্বেচ্ছাসেবী কর্ম উদ্যোগের দ্বারা ধর্ম, বর্ণ, গোত্র নির্বিশেষে বাকেরগঞ্জের সর্বস্তরের জনসাধারণের জন্য আর্থ- সামাজিক উন্নয়নমূলক কার্যক্রম পরিচালনা করা।</p>
                    <?php } ?>
                </div>
            </div> <!-- /idols -->
        </div><!-- /col -->

    </div><!-- /row -->

</div><!-- /col -->