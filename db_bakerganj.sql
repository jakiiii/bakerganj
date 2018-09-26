-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 29, 2016 at 06:48 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_bakerganj`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_address`
--

CREATE TABLE `tbl_address` (
  `address_id` int(2) NOT NULL,
  `address_description` varchar(150) NOT NULL,
  `address_phone` varchar(18) NOT NULL,
  `address_email` varchar(32) NOT NULL,
  `facebook_link` varchar(250) NOT NULL,
  `twitter_link` varchar(250) NOT NULL,
  `googleplus_link` varchar(250) NOT NULL,
  `youtube_link` varchar(250) NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_address`
--

INSERT INTO `tbl_address` (`address_id`, `address_description`, `address_phone`, `address_email`, `facebook_link`, `twitter_link`, `googleplus_link`, `youtube_link`, `publication_status`) VALUES
(1, 'Nikunja 2, Road No 15, House No 13', '170 000 000', 'jqurity@gmail.com', 'https://www.facebook.com/mohin.jaki.01', 'https://twitter.com/MohinJaki1', 'https://plus.google.com/+mohinjaki/posts', 'https://www.youtube.com/channel/UCmDHraSZkFKJN3FrKCrzAFw', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `admin_id` int(2) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(32) NOT NULL,
  `admin_password` varchar(255) NOT NULL,
  `access_level` tinyint(1) NOT NULL,
  `deletion_status` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`, `access_level`, `deletion_status`) VALUES
(1, 'Shahed Khan', 'mohin.nr@gmail.com', '80035875581273088c5212993713bd76', 1, 0),
(2, 'Mohin Jaki', 'jqurity@gmail.com', '3b9b743d894770e200f7fb73cdd20f3c', 2, 0),
(25, 'Shuvo Rahman', 'shuvo_rahman@supperadmin.com', '97f0bba8f5c379373ef7e31d9039677d', 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement`
--

CREATE TABLE `tbl_advertisement` (
  `advertisement_id` int(100) NOT NULL,
  `advertisement_title` varchar(100) NOT NULL,
  `advertisement_link` text NOT NULL,
  `advertisement_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advertisement`
--

INSERT INTO `tbl_advertisement` (`advertisement_id`, `advertisement_title`, `advertisement_link`, `advertisement_image`, `publication_status`) VALUES
(1, 'Alienware 13 R2 (2015)', 'https://www.youtube.com/watch?v=9M-_uZLokYU', './asset/web_images/eat_sleep_code_repeat.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement2`
--

CREATE TABLE `tbl_advertisement2` (
  `advertisement_id` int(100) NOT NULL,
  `advertisement_title2` varchar(100) NOT NULL,
  `advertisement_link2` text NOT NULL,
  `advertisement_image2` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advertisement2`
--

INSERT INTO `tbl_advertisement2` (`advertisement_id`, `advertisement_title2`, `advertisement_link2`, `advertisement_image2`, `publication_status`) VALUES
(1, 'Harry Potter and the Deathly Hallows – Part 2', 'https://www.youtube.com/watch?v=I_kDb-pRCds', './asset/web_images/harry_potter_7_part2_400.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_advertisement3`
--

CREATE TABLE `tbl_advertisement3` (
  `advertisement_id` int(100) NOT NULL,
  `advertisement_title3` varchar(100) NOT NULL,
  `advertisement_link3` text NOT NULL,
  `advertisement_image3` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_advertisement3`
--

INSERT INTO `tbl_advertisement3` (`advertisement_id`, `advertisement_title3`, `advertisement_link3`, `advertisement_image3`, `publication_status`) VALUES
(1, 'codeigniter', 'https://www.codeigniter.com/', './asset/web_images/35.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_adviser_members`
--

CREATE TABLE `tbl_adviser_members` (
  `adviser_members_id` int(9) NOT NULL,
  `adviser_members_name` varchar(50) NOT NULL,
  `adviser_members_designation` varchar(50) NOT NULL,
  `adviser_members_email` varchar(32) NOT NULL,
  `adviser_members_phone` varchar(18) NOT NULL,
  `adviser_members_address` varchar(150) NOT NULL,
  `adviser_members_about` varchar(250) NOT NULL,
  `adviser_members_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_award`
--

CREATE TABLE `tbl_award` (
  `award_id` int(100) NOT NULL,
  `award_title` varchar(100) NOT NULL,
  `award_short_description` varchar(250) NOT NULL,
  `award_long_description` text NOT NULL,
  `award_long_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_award`
--

INSERT INTO `tbl_award` (`award_id`, `award_title`, `award_short_description`, `award_long_description`, `award_long_image`, `publication_status`) VALUES
(1, 'মাশরাফি বিন মর্তুজা', 'মাশরাফি বিন মর্তুজা (জন্ম: অক্টোবর ৫, ১৯৮৩; নড়াইল জেলা) বাংলাদেশ ক্রিকেট দলের অন্যতম বোলিং স্তম্ভ ও একদিনের আন্তর্জাতিকে দলের অধিনায়কের দায়িত্ব পালন করছেন। তার ডাক নাম কৌশিক। তিনি একজন ডানহাতি ব্যাটসম্যান। তার বোলিংয়ের ধরন ডানহাতি মিডিয়াম পেস বো', '<div><font face="Arial, Verdana"><span >Mashrafe Bin Mortaza (Bengali: মাশরাফি বিন মুর্তজা) (born 5 October 1983 in Narail District) is a Bangladeshi cricketer and current captain of the One Day and Twenty20 international for Bangladesh national cricket team. He broke into the national side in late 2001 against Zimbabwe and represented Bangladesh before having played a single first-class match. Mortaza captained his country in one Test and seven One Day Internationals (ODIs) between 2009 and 2010, however injury meant he was in and out of the side and Shakib Al Hasan was appointed captain in Mortaza''s absence.</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >Mortaza is considered one of the fastest bowlers produced by Bangladesh, usually bowling in the mid-135s km/h,[3] and regularly opens the bowling. He is a useful lower-middle order batsman, with a first-class century and three Test half centuries to his name. Mortaza''s career has been hampered by injuries and he has undergone a total of ten operations on his knees and ankles.</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >He was bought by Kolkata Knight Riders for the 2009 Indian Premier League; although KKR paid US$600,000 for Mortaza, he played just one match for them, in which he went for 58 runs in 4 overs. Due to his international commitments, Mortaza has infrequently played for Khulna Division in Bangladesh''s domestic cricket competitions. While he has represented Bangladesh 36 times in Tests and in 124 ODIs between 2001 and 2012 he played only 11 first-class and 9 list A matches for Khulna Division in the same period.[4][5] In 2012 he joined the Dhaka Gladiators and 2015 from Comilla Victorians in the newly formed Bangladesh Premier League twenty20 competition and captained them to the tournament title and led Comilla Victorians clinched the title of the third 3rd Bangladesh Premier League (BPL).</span></font></div>', './asset/web_images/masrafee1.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_background`
--

CREATE TABLE `tbl_background` (
  `background_id` int(3) NOT NULL,
  `background_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_background`
--

INSERT INTO `tbl_background` (`background_id`, `background_description`, `publication_status`) VALUES
(3, '<div><font face="Arial, Verdana"><span >Barisal (Bengali: বরিশাল Bariśāl; historically Bakla-Chandradwip; also Gird-e-Bandar) is a major city that lies on the bank of Kirtankhola river in south-central Bangladesh. It is the largest city and the administrative headquarter of both Barisal district and Barisal Division. It is one of the oldest municipalities and river ports of the country. Barisal municipality was established in the year 1876 during the British Raj and upgraded to City Corporation on 25 July 2002.[4] The city consists of 30 wards and 50 mahallas with a population of 328,278 according to the 2011 national census. The area of the city is 58 km².</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >History</span></font></div><div><font face="Arial, Verdana"><span >Barisal was a semi-independent area in the Mughal period because of heavy fighting between them and Hindu chiefs. In course of time, it fell under the Bengal Nawabs, the last being Raja Nakuleswar Bose and then colonial British India, later passed to East Pakistan at independence and finally Bangladesh.</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >The central city of this region is the city of Barisal. It is one of the biggest river ports in Bangladesh. It is a city with nearly 0.38 million people and a divisional headquarters, medical college, cadet college, some pharmaceutical industries, textile industries and the Bangladesh Inland Water Transport Authority''s head office. Barisal is fast growing city of the country stands on the Kirtankhola River. Country''s first short landing and take off airport has been completed in Barisal and a private Airlines named Air Bengal has begun its regular air flight between Dhaka Tejgaon Airport and Barisal.</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >The city is sometimes called the "Venice of the East" or the "Venice of Bengal".</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >Geography</span></font></div><div><font face="Arial, Verdana"><span >arisal city occupies an area of 58 km2.</span></font></div><div><font face="Arial, Verdana"><span ><br></span></font></div><div><font face="Arial, Verdana"><span >Barisal District, with an area of 2790.51 km2, is bounded by Madaripur, Shariatpur, Chandpur and Lakshmipur districts on the north, Patuakhali, Barguna and Jhalokati districts on the south, Bhola and Lakshmipur districts on the east, Jhalokati, Pirojpur and Gopalganj districts on the west. Several rivers flow across Barisal including the Kirtankhola, Arial Khan, Khoyrabad, Kalijira and Sandha.</span></font></div>', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_chairman`
--

CREATE TABLE `tbl_chairman` (
  `chairman_id` int(2) NOT NULL,
  `chairman_name` varchar(50) NOT NULL,
  `chairman_short_description` varchar(120) NOT NULL,
  `chairman_long_description` text NOT NULL,
  `chairman_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_chairman`
--

INSERT INTO `tbl_chairman` (`chairman_id`, `chairman_name`, `chairman_short_description`, `chairman_long_description`, `chairman_image`, `publication_status`) VALUES
(1, 'মাশরাফি বিন মর্তুজা', 'মাশরাফি বিন মর্তুজা বাংলাদেশ ক্রিকেট দলের অন্যতম স্তম্ভ।', '<p>মাশরাফি বিন মর্তুজা (জন্ম: অক্টোবর ৫, ১৯৮৩; নড়াইল জেলা) বাংলাদেশ ক্রিকেট দলের অন্যতম বোলিং স্তম্ভ ও একদিনের আন্তর্জাতিকে দলের অধিনায়কের দায়িত্ব পালন করছেন। তার ডাক নাম কৌশিক। তিনি একজন ডানহাতি ব্যাটসম্যান। তার বোলিংয়ের ধরন ডানহাতি মিডিয়াম পেস বোলার। বাংলাদেশ জাতীয় দল ছাড়াও তিনি এশিয়ান একাদশের একদিনের আন্তর্জাতিক দলে খেলেছেন।</p><p>ক্ষিণ-পশ্চিমের জেলা নড়াইল-এ মাশরাফির জন্ম। ছোটবেলা থেকেই তিনি বাঁধাধরা পড়াশোনার পরিবর্তে ফুটবল আর ব্যাডমিন্টন খেলতেই বেশি পছন্দ করত<span class="text_exposed_show">? ?ন, আর মাঝে মধ্যে চিত্রা নদীতে সাঁতার কাটা। তারুণ্যের শুরুতে ক্রিকেটের প্রতি তার আগ্রহ জন্মে, বিশেষত ব্যাটিংয়ে; যদিও এখন বোলার হিসেবেই তিনি বেশি খ্যাত, যেজন্যে তাকে ''নড়াইল এক্সপ্রেস'' নামেও অভিহিত করা হয়।</span></p><div class="text_exposed_show"><p>প্রিয় মর্তুজাকে সবাই খুব হাসিখুশি আর উদারচেতা মানুষ হিসেবেই জানে। প্রায়শঃই তিনি বাইক নিয়ে স্থানীয় ব্রিজের এপার-ওপার চক্কর মেরে আসেন। নিজের শহরে তিনি প্রচণ্ড রকমের জনপ্রিয়। এখানে তাকে "প্রিন্স অব হার্টস" বলা হয়। এ শহরেরই সরকারি ভিক্টোরিয়া কলেজে পড়ার সময় সুমনা হক সুমির সাথে তার পরিচয় হয়। দু''জনে ২০০৬ সালে বিবাহসূত্রে আবদ্ধ হন।</p></div>', './asset/web_images/masrafee.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_contacter`
--

CREATE TABLE `tbl_contacter` (
  `contacter_id` int(255) NOT NULL,
  `contacter_name` varchar(50) NOT NULL,
  `contacter_email` varchar(32) NOT NULL,
  `contacter_profession` varchar(50) NOT NULL,
  `contacter_opinion` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_event`
--

CREATE TABLE `tbl_event` (
  `event_id` int(100) NOT NULL,
  `event_name` varchar(100) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `event_description` text NOT NULL,
  `event_image` text NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_event`
--

INSERT INTO `tbl_event` (`event_id`, `event_name`, `author_name`, `event_description`, `event_image`, `created_date_time`, `publication_status`) VALUES
(1, 'গর্বের বাকেরগঞ্জ ছাত্র ইউনিট” এর পূর্ণাঙ্গ কমিটি ঘ', 'Shahed Khan', '<div><font face="Arial, Verdana"><span>১২ জুলাই ২০১৬ খ্রিং রোজ মঙ্গলবার “গর্বের বাকেরগঞ্জ” এর সভাপতি এড মোজাম্মেল হোসেন মোহন সংস্থার পরিচালনা পরিষদের সাথে পরামর্শক্রমে সম্পূর্ণ অরাজনৈতিক, স্বেচ্ছাসেবী এবং কল্যাণ মূলক সংস্থা “গর্বের বাকেরগঞ্জ ছাত্র ইউনিট” এর পূর্ণাঙ্গ কমিটির (আংশিক) অনুমোদন দিয়েছেন। অবশিষ্ট ১৪ জন নির্বাহী সদস্যের নাম শীঘ্রই ঘোষণা করা হবে। আগামী ২২ মার্চ “গর্বের বাকেরগঞ্জ ছাত্র ইউনিট” এর অভিষেক অনুষ্ঠিত হবে (“গর্বের বাকেরগঞ্জ” কর্তৃক ঢাকায় আয়োজিত ঈদ পুনর্মিলনী অনুষ্ঠানের সাথে করা হবে)। এখন থেকে বাকেরগঞ্জ উপজেলার শিক্ষার্থীদেরকে সদস্য পদের জন্য “গর্বের বাকেরগঞ্জ ছাত্র ইউনিট” এর সাথে যোগাযোগ করার অনুরোধ করা যাচ্ছে।</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>গর্বের বাকেরগঞ্জ ছাত্র ইউনিট” এর পূর্ণাঙ্গ কমিটির অনুমোদিত হওয়ায় পূর্বের আহ্বায়ক কমিটি অদ্য থেকে বিলুপ্ত হয়ে গেছে। উল্লেখ্য প্রতিবছর জানুয়ারি মাসের প্রথম সপ্তাহে “গর্বের বাকেরগঞ্জ ছাত্র ইউনিট” এর জন্য ০১ বছর মেয়াদী কমিটি গঠন করা হবে।</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span><div>গর্বের বাকেরগঞ্জ এর পক্ষে-</div><div>প্রফেসর এম এ বাশার </div><div>শিক্ষা ও গবেষণা বিষয়ক সম্পাদক</div><div>এবং</div><div>আহ্বায়ক (সদ্য বিলুপ্ত গর্বের বাকেরগঞ্জ ছাত্র ইউনিট)</div></span></font></div>', './asset/web_images/student_unit.jpg', '2016-08-27 20:34:26', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_executive_council`
--

CREATE TABLE `tbl_executive_council` (
  `executive_council_id` int(255) NOT NULL,
  `executive_council_name` varchar(50) NOT NULL,
  `executive_council_designation` varchar(50) NOT NULL,
  `executive_council_phone` varchar(18) NOT NULL,
  `executive_council_email` varchar(32) NOT NULL,
  `executive_council_home_address` varchar(150) NOT NULL,
  `executive_council_current_address` varchar(150) NOT NULL,
  `executive_council_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_forlife_members`
--

CREATE TABLE `tbl_forlife_members` (
  `forlife_members_id` int(10) NOT NULL,
  `forlife_members_name` varchar(50) NOT NULL,
  `forlife_members_designation` varchar(50) NOT NULL,
  `forlife_members_email` varchar(32) NOT NULL,
  `forlife_members_phone` varchar(18) NOT NULL,
  `forlife_members_address` varchar(150) NOT NULL,
  `forlife_members_about` varchar(250) NOT NULL,
  `forlife_members_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_founder_members`
--

CREATE TABLE `tbl_founder_members` (
  `founder_members_id` int(6) NOT NULL,
  `founder_members_name` varchar(50) NOT NULL,
  `founder_members_designation` varchar(50) NOT NULL,
  `founder_members_email` varchar(32) NOT NULL,
  `founder_members_phone` varchar(18) NOT NULL,
  `founder_members_address` varchar(150) NOT NULL,
  `founder_members_about` varchar(250) NOT NULL,
  `founder_members_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `gallery_id` int(100) NOT NULL,
  `gallery_name` varchar(50) NOT NULL,
  `gallery_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`gallery_id`, `gallery_name`, `gallery_image`, `publication_status`) VALUES
(2, 'Julian Assan', './asset/web_images/Wikileaks_founder_Julian_Assan.jpg', 1),
(3, 'Harry Poter', './asset/web_images/harry_potter_7_part26.jpg', 1),
(4, 'Mass', './asset/web_images/masrafee6.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ideal_principles`
--

CREATE TABLE `tbl_ideal_principles` (
  `iop_id` int(100) NOT NULL,
  `iop_ideal_description` text NOT NULL,
  `iop_principles_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_ideal_principles`
--

INSERT INTO `tbl_ideal_principles` (`iop_id`, `iop_ideal_description`, `iop_principles_description`, `publication_status`) VALUES
(1, 'ঐক্য ও অখণ্ডতা রক্ষার মাধ্যমে বাকেরগঞ্জের সুষম উন্নয়ন।', '“গর্বের বাকেরগঞ্জ” একটি বেসরকারি স্বেচ্ছাসেবী সমাজকল্যাণ মূলক অলাভজনক, অরাজনৈতিক এবং মানব হিতৈষী সংগঠন। একতা, শৃংখলা ও সহযোগিতামূলক পরিবেশ সৃষ্টির মাধ্যমে স্বেচ্ছাসেবী কর্ম উদ্যোগের দ্বারা ধর্ম, বর্ণ, গোত্র নির্বিশেষে বাকেরগঞ্জের সর্বস্তরের জনসাধারণের জন্য আর্থ- সামাজিক উন্নয়নমূলক কার্যক্রম পরিচালনা করা।', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jobs`
--

CREATE TABLE `tbl_jobs` (
  `job_id` int(100) NOT NULL,
  `job_title` varchar(50) NOT NULL,
  `job_description` text NOT NULL,
  `job_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_jobs`
--

INSERT INTO `tbl_jobs` (`job_id`, `job_title`, `job_description`, `job_image`, `publication_status`) VALUES
(1, 'One Laravel Developer', '<div class="vac bn"><h1><h><font size="3" >KoderTrust</font></h><div class="vac"><span ><font size="3">No  of Vacancies</font></span></div><div class="vac"><h><p><font size="3" >5</font></p></h></div><div class="job_des"><h><font size="3" >Job Description / Responsibility<ul><li>Engaged in program coding of application development using C# & ASP .NET MVC 4 / 5 with Entity Framework</li><li>Report designing using Crystal Reports</li><li>Database query using MS SQL</li><li>Front end designing using Windows Application Form, HTML5, JavaScript, jQuery, CSS, XML</li><li>VBA Macro development using VB Scrip language</li></ul></font></h></div><div class="job_nat"><h><font size="3" >Job Nature<p>Full-time</p></font></h></div><div class="edu_req"><h><font size="3" >Educational Requirements<ul><li>B Sc or M.Sc in Computer Science from reputed Public/ Private university</li><li>Education may be relaxed for exceptionally experienced candidates</li></ul></font></h></div><div class="edu_req"><h><font size="3" >Experience Requirements<ul><li>At least 2 year(s)</li><li>The applicants should have experience in the following area(s):<br>Programmer Software Engineer, Web Developer/Web Designer</li><li>The applicants should have experience in the following business area(s):<br>Software Company, Group of Companies, Garments, Telecommunication</li></ul></font></h></div><div class="job_req"><h><font size="3" >Additional Job Requirements<ul><li class="age">Age 25 to 35 year(s)</li><li>The applicant must have a serious passion for working with flexibility and adaptability in a continuously changing technological environment</li><li>Dedicated  hardworking, quick learner with minimum supervision & self-starter</li><li>Should be capable of working as an individual or in a team</li><li>Good English writing and speaking skills</li><li>Ability to work under pressure</li></ul></font></h></div><div class="job_loc "><h><font size="3" >Job Location<p>Dhaka</p></font></h></div><div class="salary_range"><h><font size="3" >Salary Range<p>Negotiable</p></font></h></div><div class="oth_ben"><h><font size="3" >Other Benefits<ul><li>2 Festival Bonus</li><li>Contributory Lunch facility</li><li>On the Job Training</li><li>And Others Company Policies</li></ul></font></h></div><div class="job_source  "><h><font size="3" >Job Source<p>Bdjobs.com Online Job Posting</p></font></h></div></h1></div>', './asset/web_images/web_development.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_membership_rules`
--

CREATE TABLE `tbl_membership_rules` (
  `membership_rules_id` int(255) NOT NULL,
  `membership_rules_description` varchar(50) NOT NULL,
  `membership_rules_form` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_membership_rules`
--

INSERT INTO `tbl_membership_rules` (`membership_rules_id`, `membership_rules_description`, `membership_rules_form`, `publication_status`) VALUES
(1, 'People with good heart wants to save sundar.', './asset/web_files/New_Paper_Note1.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nature`
--

CREATE TABLE `tbl_nature` (
  `nature_id` int(3) NOT NULL,
  `nature_description` text NOT NULL,
  `nature_file` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_nature`
--

INSERT INTO `tbl_nature` (`nature_id`, `nature_description`, `nature_file`, `publication_status`) VALUES
(1, '<span >People with good heart wants to save sundarbans.</span>', './asset/web_files/New_Paper_Note.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_news`
--

CREATE TABLE `tbl_news` (
  `news_id` int(100) NOT NULL,
  `news_title` varchar(50) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `news_description` text NOT NULL,
  `news_image` text NOT NULL,
  `created_date_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_news`
--

INSERT INTO `tbl_news` (`news_id`, `news_title`, `author_name`, `news_description`, `news_image`, `created_date_time`, `publication_status`) VALUES
(1, 'সুন্দরকাঠীর জলাবদ্ধতা থেকে মুক্তি চাই', 'Shahed Khan', '<div><font face="Arial, Verdana"><span>শস্যভাণ্ডার, ঐতিহ্যবাহী বাকেরগঞ্জ উপজেলাধীন ৪নং দুধল ইউনিয়নের ৮নং ওয়ার্ডের সুন্দরকাঠীর পশ্চিম অংশে পানিতে নিমজ্জিত প্রায় ২০০ একর চাষাবাদের জমি এবং অসংখ্য মানুষ। জলাবদ্ধতার কারণে কৃষকরা সময়মত চাষাবাদ ও বীজের ব্যাবস্থা করতে পারছে না। যে কারনে জমিতে উৎপন্ন হয়েছে নানা প্রকার জঙ্গল, কৃষকরা এখন চিন্তায় দিশেহারা।</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>স্থানীয় পানি চলাচলের একমাত্র রেকডীয় প্রাকৃতিক বগীর খাল পান্ডব নদীর সাথে বহুকাল থেকেই যুক্ত। কিন্তু বেশ কয়েক বছর পূর্বে ক্ষমতার দাপটে এবং ব্যক্তিগত স্বার্থে যথাযথ কর্তৃপক্ষের অনুমতি ছাড়াই ও পানি চলাচলের বিকল্প ব্যবস্থা না করে বগীর খালটিতে ঘুঁটি কয়েক লোক বাধ নির্মাণ করে ভরাট করে ফেলেছে। ফলশ্রুতিতে এলাকার কৃষি জমিতে মারাত্মক জলাবদ্ধতা সৃষ্টি হয়েছে এবং মানুষের বাড়িঘরে বৃষ্টির পানি ঢুকে পরেছে।</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>রাজনৈতিক, সেচ্ছাসেবী গবেষণা, উন্নয়ন এবং কল্যাণ মূলক সংস্থা “গর্বের বাকেরগঞ্জ” এর পক্ষে থেকে যথাযথ কর্তৃপক্ষের কাছে আহ্বান জানাচ্ছি, জরুরী ভিক্তিতে স্থানীয় কৃষি জমি এবং সাধারণ জনসাধারণকে রক্ষার লক্ষে রেকডীয় প্রাকৃতিক বগীর খালটি খনন করে এখনই প্রযোজনীয় ব্যবস্থা গ্রহণ করুণ।</span></font></div><div><font face="Arial, Verdana"><span><br></span></font></div><div><font face="Arial, Verdana"><span>বাকেরগঞ্জ’র পক্ষে-</span></font></div><div><font face="Arial, Verdana"><span>মশিউর রহমান শাহিন (সাহিত্য ও সাংস্কৃতিক সম্পাদক) এবং</span></font></div><div><font face="Arial, Verdana"><span>মোঃ নুরুজ্জামান মিলন (ক্রীড়া ও গ্রাম উন্নয়ন সম্পাদক)</span></font></div>', './asset/web_images/news.jpg', '2016-08-27 20:47:21', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produdsons_bd`
--

CREATE TABLE `tbl_produdsons_bd` (
  `produdson_bd_id` int(100) NOT NULL,
  `produdsons_bd_name` varchar(50) NOT NULL,
  `produdson_bd_description` varchar(250) NOT NULL,
  `produdsons_bd_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_produdsons_bd`
--

INSERT INTO `tbl_produdsons_bd` (`produdson_bd_id`, `produdsons_bd_name`, `produdson_bd_description`, `produdsons_bd_image`, `publication_status`) VALUES
(1, 'মাশরাফি বিন মর্তুজা', 'মাশরাফি বিন মর্তুজা (জন্ম: অক্টোবর ৫, ১৯৮৩) বাংলাদেশ ক্রিকেট দলের অন্যতম বোলিং স্তম্ভ ও একদিনের আন্তর্জাতিকে দলের অধিনায়কের দায়িত্ব পালন করছেন। তার ডাক নাম কৌশিক। তিনি একজন ডানহাতি ব্যাটসম্যান। তার বোলিংয়ের ধরন ডানহাতি মিডিয়াম পেস বোলার।', './asset/web_images/masrafee4.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_produdsons_int`
--

CREATE TABLE `tbl_produdsons_int` (
  `produdson_int_id` int(11) NOT NULL,
  `produdsons_int_name` varchar(50) NOT NULL,
  `produdson_int_description` varchar(250) NOT NULL,
  `produdsons_int_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_produdsons_int`
--

INSERT INTO `tbl_produdsons_int` (`produdson_int_id`, `produdsons_int_name`, `produdson_int_description`, `produdsons_int_image`, `publication_status`) VALUES
(1, 'মাশরাফি বিন মর্তুজা', 'মাশরাফি বিন মর্তুজা (জন্ম: অক্টোবর ৫, ১৯৮৩) বাংলাদেশ ক্রিকেট দলের অন্যতম বোলিং স্তম্ভ ও একদিনের আন্তর্জাতিকে দলের অধিনায়কের দায়িত্ব পালন করছেন। তার ডাক নাম কৌশিক। তিনি একজন ডানহাতি ব্যাটসম্যান। তার বোলিংয়ের ধরন ডানহাতি মিডিয়াম পেস বোলার।', './asset/web_images/masrafee5.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_publications`
--

CREATE TABLE `tbl_publications` (
  `publications_id` int(9) NOT NULL,
  `publications_title` varchar(50) NOT NULL,
  `publications_description` text NOT NULL,
  `publications_image` text NOT NULL,
  `publications_file` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_publications`
--

INSERT INTO `tbl_publications` (`publications_id`, `publications_title`, `publications_description`, `publications_image`, `publications_file`, `publication_status`) VALUES
(1, 'গর্বের বাকেরগঞ্জ এর আদর্শ', 'গর্বের বাকেরগঞ্জ এর আদর্শ', './asset/web_images/Microsoft.png', './asset/web_images/New_Paper_Note.pdf', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_rights`
--

CREATE TABLE `tbl_rights` (
  `right_id` int(11) NOT NULL,
  `right_description` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_rights`
--

INSERT INTO `tbl_rights` (`right_id`, `right_description`, `publication_status`) VALUES
(3, '<div><font face="Arial, Verdana"><span>১। বাকেরগঞ্জ উপজেলার চড় ও নদী ভাঙ্গন এলাকায় পুনর্বাসন সহ বিশেষ প্রকল্প চালু করতে হবে এবং নদী ভাঙ্গন রোধ কল্পে প্রয়োজনীয় ব্যবস্থা গ্রহণ করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>২। বাকেরগঞ্জ উপজেলা স্বাস্থ্য কেন্দ্র ৫০০ সজ্জায় উন্নীত করতে হবে। হাসপাতালে নৌ এ্যাম্বুলেন্স সহ সকল বিভাগের বর্হীর বিভাগ চালু করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৩। বরিশাল বিশ্ববিদ্যালয়ের একটি আবাসিক হল মহতি আগা বাঁকের খানের নামে নামকরণ করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৪। বরিশাল-বাকেরগঞ্জ-কালাইয়া আঞ্চলিক মহাসড়ক চালু করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৫। বরিশাল-বাকেরগঞ্জ-বরগুনা আঞ্চলিক মহাসড়ক চালু করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৬। বাকেরগঞ্জ উপজেলার সাথে আন্তঃ ইউনিয়ন সড়ক ব্যবস্থা চালু করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৭। শিয়ালগুণীকে আঞ্চলিক নৌ বন্দর হিসাবে উন্নীত করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৮। বাকেরগঞ্জ উপজেলার সকল গুণীজনদের যথাযথ সম্মান প্রদর্শন পূর্বক এলাকার বিভিন্ন স্থাপনার নামকরণ করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>৯। সরকারী বাকেরগঞ্জ কলেজে অনার্স কোর্স চালু সহ মাস্টার্সে উন্নীত করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১০। আবাসিক সুবিধা সহ বাকেরগঞ্জে একটি সরকারী মহিলা কলেজ প্রতিষ্ঠা করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১১। বাকেরগঞ্জে সরকারীভাবে কারিগরিক প্রশিক্ষণ কেন্দ্র, নার্সিং ইন্সটিটিউট সহ একটি সরকারী মহিলা পলিটেকনিক প্রতিষ্ঠা করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১২। বাকেরগঞ্জে বিকেএসপি প্রতিষ্ঠা করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৩। নেয়ামতি ফায়ারস্কোয়াডকে পূর্ণাঙ্গ রূপে চালু করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৪। বাকেরগঞ্জে একটি স্টিডিয়াম এবং একটি শিশু পার্ক প্রতিষ্ঠা করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৫। বাকেরগঞ্জ’র সকল ইউনিয়ন এবং পৌরসভায় সরকারীভাবে পাঠাগার স্থাপন করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৬। বাকেগঞ্জ উপজেলার সকল ঐতিহাসিক স্থাপনা, স্থান, ইতিহাস এবং ঐতিহ্য রক্ষায় কার্যকর ব্যবস্থা গ্রহণ করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৭। বাকেরগঞ্জ উপজেলার থানাকে আধুনিকায়ন করতে হবে এবং নৌ থানার কার্যক্রম সর্বত্র ছড়িয়ে দিতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৮। বাকেরগঞ্জ উপজেলায় সর্বত্র বিদ্যুৎয়ানের ব্যবস্থা করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>১৯। বাকেরগঞ্জে আধুনিক সুবিধা সহ প্রেস ক্লাব নির্মাণের জন্য প্রয়োজনীয় ব্যবস্থা গ্রহণ করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>২০। বাকেরগঞ্জ উপজেলার সকল শিক্ষা প্রতিষ্ঠানে শহীদ মিনার এবং পাঠাগার স্থাপন করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>২১। বাকেরগঞ্জ উপজেলার সকল খেয়াঘাট সমূহ টোল ফ্রি করতে হবে।</span></font></div><div><font face="Arial, Verdana"><span>২২। বাকেরগঞ্জ পৌরসভাকে এ গ্রেডে উন্নীত করণ করতে হবে।</span></font></div>', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_slider`
--

CREATE TABLE `tbl_slider` (
  `slider_id` int(6) NOT NULL,
  `slider_name` varchar(50) NOT NULL,
  `slider_descrription` varchar(200) NOT NULL,
  `slider_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_slider`
--

INSERT INTO `tbl_slider` (`slider_id`, `slider_name`, `slider_descrription`, `slider_image`, `publication_status`) VALUES
(2, 'মাশরাফি বিন মর্তুজা', 'মাশরাফি বিন মর্তুজা (জন্ম: অক্টোবর ৫, ১৯৮৩; নড়াইল জেলা) বাংলাদেশ ক্রিকেট দলের অন্যতম বোলিং স্তম্ভ ও একদিনের আন্তর্জাতিকে দলের অধিনায়কের দায়িত্ব পালন করছেন। তার ডাক নাম কৌশিক।', './asset/web_images/alianware.png', 2),
(3, 'Slider One', 'এখানে ছবির সাথে প্রয়োজনীয় ক্যাপশন', './asset/web_images/slider1.jpg', 1),
(4, 'Slider Two', 'এখানে ছবির সাথে প্রয়োজনীয় ক্যাপশন', './asset/web_images/slider2.jpg', 1),
(5, 'Slider Three', 'এখানে ছবির সাথে প্রয়োজনীয় ক্যাপশন', './asset/web_images/slider3.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_student_unit`
--

CREATE TABLE `tbl_student_unit` (
  `student_unit_id` int(100) NOT NULL,
  `student_unit_name` varchar(50) NOT NULL,
  `student_unit_designation` varchar(30) NOT NULL,
  `student_unit_email` varchar(32) NOT NULL,
  `student_unit_educational_institution` varchar(100) NOT NULL,
  `student_unit_home_address` varchar(150) NOT NULL,
  `student_unit_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_student_unit`
--

INSERT INTO `tbl_student_unit` (`student_unit_id`, `student_unit_name`, `student_unit_designation`, `student_unit_email`, `student_unit_educational_institution`, `student_unit_home_address`, `student_unit_image`, `publication_status`) VALUES
(1, 'Shahed Khan', 'Coder', 'jqurity@gmail.com', 'DIIT', 'Narail, Bangladesh', './asset/web_images/user.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_union`
--

CREATE TABLE `tbl_union` (
  `union_id` int(3) NOT NULL,
  `union_name` varchar(50) NOT NULL,
  `union_description` text NOT NULL,
  `union_information` text NOT NULL,
  `union_tourism_tradition` text NOT NULL,
  `union_agriculture` text NOT NULL,
  `union_educational` text NOT NULL,
  `union_health` text NOT NULL,
  `union_map` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_union`
--

INSERT INTO `tbl_union` (`union_id`, `union_name`, `union_description`, `union_information`, `union_tourism_tradition`, `union_agriculture`, `union_educational`, `union_health`, `union_map`, `publication_status`) VALUES
(1, 'বাকেরগঞ্জ', '<span>তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।</span><br><span><br></span><div><span>ভৌগলিক সীমানাঃ পূর্বে - দাড়িয়াল ইউনিয়ন, পশ্চিম ও উত্তরে সদর থানার চর কাউয়া ইউনিয়ন এবং দক্ষিণে চরাদি ইউনিয়ন।</span></div>', '<p>\r\n  তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।<br>\r\n</p>', 'তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।', 'তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।', 'তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।', 'তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14740.082533791172!2d90.32993313000343!3d22.540899813184012!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30aacbccd57eaa51%3A0xe9b4deb6214ce1d9!2sBakergonj!5e0!3m2!1sen!2sbd!4v1472140757080', 1),
(2, 'চরামদ্দি ইউনিয়ন', '<span>তীরে গড়ে উঠা বাকেরগঞ্জ উপজেলার একটি ঐতিহ্যবাহী অঞ্চল হলো চরামদ্দি ইউনিয়ন। কাল পরিক্রমায় আজ চরামদ্দি ইউনিয়ন শিক্ষা, সংস্কৃতি, ধর্মীয় অনুষ্ঠান, খেলাধুলা সহ বিভিন্ন ক্ষেত্রে তার নিজস্ব স্বকীয়তা আজও সমুজ্জ্বল।</span><div><br><span>ভৌগলিক সীমানাঃ পূর্বে - দাড়িয়াল ইউনিয়ন, পশ্চিম ও উত্তরে সদর থানার চর কাউয়া ইউনিয়ন এবং দক্ষিণে চরাদি ইউনিয়ন।</span></div>', '', '', '', '', '', '', 1),
(3, 'দাড়িয়াল ইউনিয়ন', '', '', '', '', '', '', '', 1),
(4, 'দুধল ইউনিয়ন', '', '', '', '', '', '', '', 1),
(5, 'দুর্গাপাশা ইউনিয়ন', '', '', '', '', '', '', '', 1),
(6, 'ফরিদপুর ইউনিয়ন', '', '', '', '', '', '', '', 1),
(7, 'কবাই ইউনিয়ন', '', '', '', '', '', '', '', 1),
(8, 'নলুয়া ইউনিয়ন', '', '', '', '', '', '', '', 1),
(9, 'কলসকাঠী ইউনিয়ন', '', '', '', '', '', '', '', 1),
(10, 'গারুড়িয়া ইউনিয়ন', '', '', '', '', '', '', '', 1),
(11, 'ভরপাশা ইউনিয়ন', '', '', '', '', '', '', '', 1),
(12, 'রঙ্গশ্রী ইউনিয়ন', '', '', '', '', '', '', '', 1),
(13, 'পাদ্রিশিবপুর ইউনিয়ন', '', '', '', '', '', '', '', 1),
(14, 'নিয়ামতি ইউনিয়ন', '', '', '', '', '', '', '', 1),
(15, 'পৌরসভা', '', '', '', '', '', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_union_image`
--

CREATE TABLE `tbl_union_image` (
  `union_image_id` tinyint(100) NOT NULL,
  `union_id` int(3) NOT NULL,
  `union_image_file` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_union_image`
--

INSERT INTO `tbl_union_image` (`union_image_id`, `union_id`, `union_image_file`, `publication_status`) VALUES
(1, 1, './asset/web_images/bakerganj2.jpg', 1),
(2, 2, './asset/web_images/corol_uddit_union2.jpg', 1),
(3, 2, './asset/web_images/corol_uddit_union_22.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_video`
--

CREATE TABLE `tbl_video` (
  `video_id` int(9) NOT NULL,
  `video_name` varchar(100) NOT NULL,
  `video_link` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_video`
--

INSERT INTO `tbl_video` (`video_id`, `video_name`, `video_link`, `publication_status`) VALUES
(1, 'কেনো আমরা রামপাল তাপবিদ্যুতকেন্দ্র প্রকল্পের বিরোধীতা করি', 'https://www.youtube.com/embed/8d9XF3qhowA', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wiseperson`
--

CREATE TABLE `tbl_wiseperson` (
  `wiseperson_id` int(6) NOT NULL,
  `wiseperson_name` varchar(50) NOT NULL,
  `wiseperson_description` text NOT NULL,
  `wiseperson_image` text NOT NULL,
  `publication_status` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_wiseperson`
--

INSERT INTO `tbl_wiseperson` (`wiseperson_id`, `wiseperson_name`, `wiseperson_description`, `wiseperson_image`, `publication_status`) VALUES
(2, 'মাশরাফি বিন মর্তুজা', 'মাশরাফি বিন মর্তুজা (জন্ম: অক্টোবর ৫, ১৯৮৩; নড়াইল জেলা) বাংলাদেশ ক্রিকেট দলের অন্যতম বোলিং স্তম্ভ ও একদিনের আন্তর্জাতিকে দলের অধিনায়কের দায়িত্ব পালন করছেন। তার ডাক নাম কৌশিক। তিনি একজন ডানহাতি ব্যাটসম্যান। তার বোলিংয়ের ধরন ডানহাতি মিডিয়াম পেস বোলার। বাংলাদেশ জাতীয় দল ছাড়াও তিনি এশিয়ান একাদশের একদিনের আন্তর্জাতিক দলে খেলেছেন।', './asset/web_images/masrafee3.jpg', 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_address`
--
ALTER TABLE `tbl_address`
  ADD PRIMARY KEY (`address_id`);

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  ADD PRIMARY KEY (`advertisement_id`);

--
-- Indexes for table `tbl_advertisement2`
--
ALTER TABLE `tbl_advertisement2`
  ADD PRIMARY KEY (`advertisement_id`);

--
-- Indexes for table `tbl_advertisement3`
--
ALTER TABLE `tbl_advertisement3`
  ADD PRIMARY KEY (`advertisement_id`);

--
-- Indexes for table `tbl_adviser_members`
--
ALTER TABLE `tbl_adviser_members`
  ADD PRIMARY KEY (`adviser_members_id`);

--
-- Indexes for table `tbl_award`
--
ALTER TABLE `tbl_award`
  ADD PRIMARY KEY (`award_id`);

--
-- Indexes for table `tbl_background`
--
ALTER TABLE `tbl_background`
  ADD PRIMARY KEY (`background_id`);

--
-- Indexes for table `tbl_chairman`
--
ALTER TABLE `tbl_chairman`
  ADD PRIMARY KEY (`chairman_id`);

--
-- Indexes for table `tbl_contacter`
--
ALTER TABLE `tbl_contacter`
  ADD PRIMARY KEY (`contacter_id`);

--
-- Indexes for table `tbl_event`
--
ALTER TABLE `tbl_event`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `tbl_executive_council`
--
ALTER TABLE `tbl_executive_council`
  ADD PRIMARY KEY (`executive_council_id`);

--
-- Indexes for table `tbl_forlife_members`
--
ALTER TABLE `tbl_forlife_members`
  ADD PRIMARY KEY (`forlife_members_id`);

--
-- Indexes for table `tbl_founder_members`
--
ALTER TABLE `tbl_founder_members`
  ADD PRIMARY KEY (`founder_members_id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`gallery_id`);

--
-- Indexes for table `tbl_ideal_principles`
--
ALTER TABLE `tbl_ideal_principles`
  ADD PRIMARY KEY (`iop_id`);

--
-- Indexes for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `tbl_membership_rules`
--
ALTER TABLE `tbl_membership_rules`
  ADD PRIMARY KEY (`membership_rules_id`);

--
-- Indexes for table `tbl_nature`
--
ALTER TABLE `tbl_nature`
  ADD PRIMARY KEY (`nature_id`);

--
-- Indexes for table `tbl_news`
--
ALTER TABLE `tbl_news`
  ADD PRIMARY KEY (`news_id`);

--
-- Indexes for table `tbl_produdsons_bd`
--
ALTER TABLE `tbl_produdsons_bd`
  ADD PRIMARY KEY (`produdson_bd_id`);

--
-- Indexes for table `tbl_produdsons_int`
--
ALTER TABLE `tbl_produdsons_int`
  ADD PRIMARY KEY (`produdson_int_id`);

--
-- Indexes for table `tbl_publications`
--
ALTER TABLE `tbl_publications`
  ADD PRIMARY KEY (`publications_id`);

--
-- Indexes for table `tbl_rights`
--
ALTER TABLE `tbl_rights`
  ADD PRIMARY KEY (`right_id`);

--
-- Indexes for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  ADD PRIMARY KEY (`slider_id`);

--
-- Indexes for table `tbl_student_unit`
--
ALTER TABLE `tbl_student_unit`
  ADD PRIMARY KEY (`student_unit_id`);

--
-- Indexes for table `tbl_union`
--
ALTER TABLE `tbl_union`
  ADD PRIMARY KEY (`union_id`);

--
-- Indexes for table `tbl_union_image`
--
ALTER TABLE `tbl_union_image`
  ADD PRIMARY KEY (`union_image_id`);

--
-- Indexes for table `tbl_video`
--
ALTER TABLE `tbl_video`
  ADD PRIMARY KEY (`video_id`);

--
-- Indexes for table `tbl_wiseperson`
--
ALTER TABLE `tbl_wiseperson`
  ADD PRIMARY KEY (`wiseperson_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_address`
--
ALTER TABLE `tbl_address`
  MODIFY `address_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `admin_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
--
-- AUTO_INCREMENT for table `tbl_advertisement`
--
ALTER TABLE `tbl_advertisement`
  MODIFY `advertisement_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_advertisement2`
--
ALTER TABLE `tbl_advertisement2`
  MODIFY `advertisement_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_advertisement3`
--
ALTER TABLE `tbl_advertisement3`
  MODIFY `advertisement_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_adviser_members`
--
ALTER TABLE `tbl_adviser_members`
  MODIFY `adviser_members_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_award`
--
ALTER TABLE `tbl_award`
  MODIFY `award_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_background`
--
ALTER TABLE `tbl_background`
  MODIFY `background_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_chairman`
--
ALTER TABLE `tbl_chairman`
  MODIFY `chairman_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_contacter`
--
ALTER TABLE `tbl_contacter`
  MODIFY `contacter_id` int(255) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbl_event`
--
ALTER TABLE `tbl_event`
  MODIFY `event_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_executive_council`
--
ALTER TABLE `tbl_executive_council`
  MODIFY `executive_council_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_forlife_members`
--
ALTER TABLE `tbl_forlife_members`
  MODIFY `forlife_members_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_founder_members`
--
ALTER TABLE `tbl_founder_members`
  MODIFY `founder_members_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `gallery_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tbl_ideal_principles`
--
ALTER TABLE `tbl_ideal_principles`
  MODIFY `iop_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_jobs`
--
ALTER TABLE `tbl_jobs`
  MODIFY `job_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_membership_rules`
--
ALTER TABLE `tbl_membership_rules`
  MODIFY `membership_rules_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_nature`
--
ALTER TABLE `tbl_nature`
  MODIFY `nature_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_news`
--
ALTER TABLE `tbl_news`
  MODIFY `news_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_produdsons_bd`
--
ALTER TABLE `tbl_produdsons_bd`
  MODIFY `produdson_bd_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_produdsons_int`
--
ALTER TABLE `tbl_produdsons_int`
  MODIFY `produdson_int_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_publications`
--
ALTER TABLE `tbl_publications`
  MODIFY `publications_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_rights`
--
ALTER TABLE `tbl_rights`
  MODIFY `right_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_slider`
--
ALTER TABLE `tbl_slider`
  MODIFY `slider_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `tbl_student_unit`
--
ALTER TABLE `tbl_student_unit`
  MODIFY `student_unit_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_union`
--
ALTER TABLE `tbl_union`
  MODIFY `union_id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `tbl_union_image`
--
ALTER TABLE `tbl_union_image`
  MODIFY `union_image_id` tinyint(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `tbl_video`
--
ALTER TABLE `tbl_video`
  MODIFY `video_id` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `tbl_wiseperson`
--
ALTER TABLE `tbl_wiseperson`
  MODIFY `wiseperson_id` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
