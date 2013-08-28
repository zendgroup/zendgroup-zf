-- phpMyAdmin SQL Dump
-- version 3.3.3
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 28, 2013 at 10:07 PM
-- Server version: 5.5.23
-- PHP Version: 5.4.0-ZS5.6.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zendgroup_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

DROP TABLE IF EXISTS `albums`;
CREATE TABLE IF NOT EXISTS `albums` (
  `album_id` int(11) NOT NULL,
  `album_title` varchar(255) DEFAULT NULL,
  `album_create_date` int(11) DEFAULT NULL,
  `gallery_id` int(11) NOT NULL,
  PRIMARY KEY (`album_id`),
  KEY `fk_album_gallery_idx` (`gallery_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `albums`
--


-- --------------------------------------------------------

--
-- Table structure for table `album_detail`
--

DROP TABLE IF EXISTS `album_detail`;
CREATE TABLE IF NOT EXISTS `album_detail` (
  `album_detail_id` int(11) NOT NULL,
  `images_name` varchar(255) DEFAULT NULL,
  `images_path` varchar(255) DEFAULT NULL,
  `album_id` int(11) NOT NULL,
  PRIMARY KEY (`album_detail_id`),
  KEY `fk_album_detail_idx` (`album_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `album_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `archives`
--

DROP TABLE IF EXISTS `archives`;
CREATE TABLE IF NOT EXISTS `archives` (
  `archive_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `archive_date` int(11) DEFAULT NULL,
  `archive_downloadable` tinyint(4) DEFAULT NULL,
  `archive_vieweable` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`archive_id`),
  KEY `fk_content_archive_ids` (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `archives`
--


-- --------------------------------------------------------

--
-- Table structure for table `attachment`
--

DROP TABLE IF EXISTS `attachment`;
CREATE TABLE IF NOT EXISTS `attachment` (
  `attachment_id` int(11) NOT NULL AUTO_INCREMENT,
  `file_name` varchar(45) DEFAULT NULL,
  `file_caption` varchar(45) DEFAULT NULL,
  `file_counter` int(11) DEFAULT NULL,
  `file_path` varchar(255) DEFAULT NULL,
  `file_path_md5` varchar(255) DEFAULT NULL,
  `file_size` int(11) DEFAULT NULL,
  `file_info` varchar(255) DEFAULT NULL,
  `file_time` int(11) DEFAULT NULL,
  `file_status` int(11) DEFAULT NULL,
  `content_detail_id` int(11) NOT NULL,
  PRIMARY KEY (`attachment_id`),
  KEY `fk_content_detail_attachment_idx` (`content_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `attachment`
--


-- --------------------------------------------------------

--
-- Table structure for table `blocks`
--

DROP TABLE IF EXISTS `blocks`;
CREATE TABLE IF NOT EXISTS `blocks` (
  `block_id` int(11) NOT NULL AUTO_INCREMENT,
  `block_file` varchar(255) DEFAULT NULL,
  `block_name` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`block_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `blocks`
--


-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

DROP TABLE IF EXISTS `blogs`;
CREATE TABLE IF NOT EXISTS `blogs` (
  `blog_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `blog_title` varchar(255) NOT NULL,
  `blog_description` varchar(255) DEFAULT NULL,
  `blog_slogan` varchar(255) DEFAULT NULL,
  `blog_logo` varchar(255) DEFAULT NULL,
  `blog_meta_keyword` varchar(255) DEFAULT NULL,
  `blog_copyright` varchar(255) DEFAULT NULL,
  `blog_url` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`blog_id`),
  KEY `fk_user_blog_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blogs`
--


-- --------------------------------------------------------

--
-- Table structure for table `blog_entries`
--

DROP TABLE IF EXISTS `blog_entries`;
CREATE TABLE IF NOT EXISTS `blog_entries` (
  `entry_id` int(11) NOT NULL,
  `blog_id` int(11) NOT NULL,
  `entry_title` varchar(255) DEFAULT NULL,
  `entry_summary` varchar(255) DEFAULT NULL,
  `entry_content` longtext,
  PRIMARY KEY (`entry_id`),
  KEY `fk_blog_entry_idx` (`blog_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `blog_entries`
--


-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
CREATE TABLE IF NOT EXISTS `categories` (
  `category_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_visit` int(11) DEFAULT NULL,
  `category_icon` varchar(45) DEFAULT NULL,
  `category_password` varchar(45) DEFAULT NULL,
  `content_count` int(11) DEFAULT NULL,
  `hide_form_menu` tinyint(4) DEFAULT NULL,
  `sort_order` int(11) DEFAULT NULL,
  `general_url` varchar(255) DEFAULT NULL,
  `category_left` int(11) DEFAULT NULL,
  `category_right` int(11) DEFAULT NULL,
  PRIMARY KEY (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `categories`
--


-- --------------------------------------------------------

--
-- Table structure for table `category_associations`
--

DROP TABLE IF EXISTS `category_associations`;
CREATE TABLE IF NOT EXISTS `category_associations` (
  `category_association_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `content_id` int(11) NOT NULL,
  PRIMARY KEY (`category_association_id`),
  KEY `fk_category_content_idx` (`content_id`),
  KEY `fk_category_cat_idx` (`category_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `category_associations`
--


-- --------------------------------------------------------

--
-- Table structure for table `category_detail`
--

DROP TABLE IF EXISTS `category_detail`;
CREATE TABLE IF NOT EXISTS `category_detail` (
  `category_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `category_title` varchar(255) DEFAULT NULL,
  `category_description` varchar(255) DEFAULT NULL,
  `category_meta_title` varchar(255) DEFAULT NULL,
  `category_meta_description` varchar(255) DEFAULT NULL,
  `category_meta_keyword` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`category_detail_id`),
  KEY `fk_category_detail_idx` (`category_id`),
  KEY `fk_category_language_idx` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `category_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
CREATE TABLE IF NOT EXISTS `comments` (
  `comment_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_detail_id` int(11) NOT NULL,
  `comment_text` varchar(255) DEFAULT NULL,
  `comment_date` int(11) DEFAULT NULL,
  `comment_author` varchar(45) DEFAULT NULL,
  `comment_author_email` varchar(125) DEFAULT NULL,
  `comment_author_site` varchar(125) DEFAULT NULL,
  `comment_status` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`comment_id`),
  KEY `fk_content_comment_idx` (`content_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `comments`
--


-- --------------------------------------------------------

--
-- Table structure for table `content`
--

DROP TABLE IF EXISTS `content`;
CREATE TABLE IF NOT EXISTS `content` (
  `content_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `hide_from_menu` tinyint(4) DEFAULT NULL,
  `ordering` int(11) NOT NULL,
  `content_params` text,
  PRIMARY KEY (`content_id`),
  KEY `fk_content_type_idx` (`content_type_id`),
  KEY `fk_content_user_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content`
--


-- --------------------------------------------------------

--
-- Table structure for table `content_detail`
--

DROP TABLE IF EXISTS `content_detail`;
CREATE TABLE IF NOT EXISTS `content_detail` (
  `content_detail_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `language_id` int(11) NOT NULL,
  `title` varchar(125) DEFAULT NULL,
  `alias` varchar(125) DEFAULT NULL,
  `summary` varchar(255) DEFAULT NULL,
  `content` varchar(255) DEFAULT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_keyword` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`content_detail_id`),
  KEY `fk_content_detail_idx` (`content_id`),
  KEY `fk_content_language_idx` (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content_detail`
--


-- --------------------------------------------------------

--
-- Table structure for table `content_schedule`
--

DROP TABLE IF EXISTS `content_schedule`;
CREATE TABLE IF NOT EXISTS `content_schedule` (
  `content_schedule_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_id` int(11) NOT NULL,
  `content_schedule_name` varchar(45) DEFAULT NULL,
  `content_schedule_from` int(11) DEFAULT NULL,
  `content_schedule_to` int(11) DEFAULT NULL,
  `content_schedule_duration` int(11) DEFAULT NULL,
  PRIMARY KEY (`content_schedule_id`),
  KEY `fk_content_schedule_idx` (`content_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content_schedule`
--


-- --------------------------------------------------------

--
-- Table structure for table `content_tags_associations`
--

DROP TABLE IF EXISTS `content_tags_associations`;
CREATE TABLE IF NOT EXISTS `content_tags_associations` (
  `tags_association_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_id` int(11) NOT NULL,
  `content_detail_id` int(11) NOT NULL,
  PRIMARY KEY (`tags_association_id`),
  KEY `fk_content_tag_idx` (`content_detail_id`),
  KEY `fk_detail_tag_idx` (`tag_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content_tags_associations`
--


-- --------------------------------------------------------

--
-- Table structure for table `content_types`
--

DROP TABLE IF EXISTS `content_types`;
CREATE TABLE IF NOT EXISTS `content_types` (
  `content_type_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_type_name` varchar(125) NOT NULL,
  `content_type_description` varchar(255) DEFAULT NULL,
  `enable_expiry` tinyint(4) DEFAULT NULL,
  `enable_vote` tinyint(4) DEFAULT NULL,
  `enable_comment` tinyint(4) DEFAULT NULL,
  `enable_attachment` tinyint(4) DEFAULT NULL,
  `enable_media` tinyint(4) DEFAULT NULL,
  `enable_tag` tinyint(4) DEFAULT NULL,
  `enable_schedule` tinyint(4) DEFAULT NULL,
  PRIMARY KEY (`content_type_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `content_types`
--


-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

DROP TABLE IF EXISTS `gallery`;
CREATE TABLE IF NOT EXISTS `gallery` (
  `gallery_id` int(11) NOT NULL,
  `gallery_name` int(11) DEFAULT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`gallery_id`),
  KEY `fk_user_gallery_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--


-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

DROP TABLE IF EXISTS `groups`;
CREATE TABLE IF NOT EXISTS `groups` (
  `group_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `group_title` varchar(45) NOT NULL,
  `group_description` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  PRIMARY KEY (`group_id`),
  KEY `idx_group_left_right` (`lft`,`rgt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `groups`
--


-- --------------------------------------------------------

--
-- Table structure for table `hooks`
--

DROP TABLE IF EXISTS `hooks`;
CREATE TABLE IF NOT EXISTS `hooks` (
  `hook_id` int(11) NOT NULL AUTO_INCREMENT,
  `hook_name` varchar(45) DEFAULT NULL,
  `hook_code` varchar(255) DEFAULT NULL,
  `hook_position` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`hook_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `hooks`
--


-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

DROP TABLE IF EXISTS `languages`;
CREATE TABLE IF NOT EXISTS `languages` (
  `language_id` int(11) NOT NULL AUTO_INCREMENT,
  `language_name` varchar(125) DEFAULT NULL,
  `language_code` varchar(5) DEFAULT NULL,
  `language_default` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`language_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `languages`
--


-- --------------------------------------------------------

--
-- Table structure for table `media`
--

DROP TABLE IF EXISTS `media`;
CREATE TABLE IF NOT EXISTS `media` (
  `media_id` int(11) NOT NULL AUTO_INCREMENT,
  `content_detail_id` int(11) NOT NULL,
  `media_file_name` varchar(45) DEFAULT NULL,
  `media_caption` varchar(45) DEFAULT NULL,
  `media_counter` int(11) DEFAULT NULL,
  `media_path` varchar(255) DEFAULT NULL,
  `media_path_md5` varchar(255) DEFAULT NULL,
  `media_size` int(11) DEFAULT NULL,
  `media_info` varchar(255) DEFAULT NULL,
  `media_time` int(11) DEFAULT NULL,
  `media_status` int(11) DEFAULT NULL,
  PRIMARY KEY (`media_id`),
  KEY `fk_content_media_idx` (`content_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `media`
--


-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

DROP TABLE IF EXISTS `menus`;
CREATE TABLE IF NOT EXISTS `menus` (
  `menu_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `language_id` int(11) DEFAULT NULL,
  `menu_title` varchar(255) DEFAULT NULL,
  `menu_slug` varchar(255) DEFAULT NULL COMMENT 'The SEF alias of the menu item',
  `menu_path` varchar(1024) DEFAULT NULL COMMENT 'The computed path of the menu item based on the menu_slug field',
  `menu_type` varchar(255) DEFAULT NULL COMMENT 'type = category, content, content_type, archive,  schedule, user, group, ext_url',
  `menu_link` varchar(1024) DEFAULT NULL,
  `menu_target` varchar(255) DEFAULT NULL,
  `note` varchar(45) DEFAULT NULL,
  `published` tinyint(4) DEFAULT NULL,
  `menu_icon` varchar(255) DEFAULT NULL,
  `params` text,
  `home` tinyint(3) DEFAULT '0' COMMENT 'Indicates if this menu item is the home or default page',
  `lft` int(11) DEFAULT NULL COMMENT 'Nested set left.',
  `rgt` int(11) DEFAULT NULL COMMENT 'Nested set right',
  `depth` int(11) DEFAULT NULL,
  PRIMARY KEY (`menu_id`),
  UNIQUE KEY `idx_menu_unique` (`parent_id`,`language_id`,`menu_slug`),
  KEY `idx_menu_left_right` (`lft`,`rgt`),
  KEY `idx_slug` (`menu_slug`),
  KEY `idx_path` (`menu_path`(255)),
  KEY `idx_language` (`language_id`),
  KEY `idx_menutype` (`menu_type`),
  KEY `idx_parent` (`parent_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `menus`
--


-- --------------------------------------------------------

--
-- Table structure for table `permissions`
--

DROP TABLE IF EXISTS `permissions`;
CREATE TABLE IF NOT EXISTS `permissions` (
  `privilege_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `role_id` int(11) NOT NULL,
  `assignment_date` int(11) NOT NULL,
  PRIMARY KEY (`privilege_id`),
  KEY `fk_group_role_idx` (`group_id`),
  KEY `fk_role_group_idx` (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `permissions`
--


-- --------------------------------------------------------

--
-- Table structure for table `privileges`
--

DROP TABLE IF EXISTS `privileges`;
CREATE TABLE IF NOT EXISTS `privileges` (
  `permission_id` int(11) NOT NULL,
  `group_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL COMMENT 'type are category, content, content_type, archive,  schedule, user, group, ext_url',
  `assignment_date` int(11) NOT NULL,
  PRIMARY KEY (`permission_id`),
  KEY `fk_group_user_idx` (`group_id`),
  KEY `fk_user_group_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `privileges`
--


-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

DROP TABLE IF EXISTS `reviews`;
CREATE TABLE IF NOT EXISTS `reviews` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `review_max` int(3) DEFAULT NULL,
  `review_min` int(3) DEFAULT NULL,
  `review_average` int(3) DEFAULT NULL,
  `content_detail_id` int(11) NOT NULL,
  PRIMARY KEY (`review_id`),
  KEY `fk_review_content_idx` (`content_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `reviews`
--


-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

DROP TABLE IF EXISTS `roles`;
CREATE TABLE IF NOT EXISTS `roles` (
  `role_id` int(11) NOT NULL AUTO_INCREMENT,
  `parent_id` int(11) DEFAULT NULL,
  `role_title` varchar(45) NOT NULL,
  `role_description` varchar(255) DEFAULT NULL,
  `lft` int(11) DEFAULT NULL,
  `rgt` int(11) DEFAULT NULL,
  `depth` int(11) DEFAULT NULL,
  PRIMARY KEY (`role_id`),
  KEY `idx_roles_left_right` (`lft`,`rgt`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `roles`
--


-- --------------------------------------------------------

--
-- Table structure for table `tags`
--

DROP TABLE IF EXISTS `tags`;
CREATE TABLE IF NOT EXISTS `tags` (
  `tag_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_group_id` int(11) NOT NULL,
  `tag_text` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`tag_id`),
  KEY `fk_group_tag_idx` (`tag_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tags`
--


-- --------------------------------------------------------

--
-- Table structure for table `tag_group`
--

DROP TABLE IF EXISTS `tag_group`;
CREATE TABLE IF NOT EXISTS `tag_group` (
  `tag_group_id` int(11) NOT NULL AUTO_INCREMENT,
  `tag_group_title` varchar(125) DEFAULT NULL,
  PRIMARY KEY (`tag_group_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `tag_group`
--


-- --------------------------------------------------------

--
-- Table structure for table `template`
--

DROP TABLE IF EXISTS `template`;
CREATE TABLE IF NOT EXISTS `template` (
  `template_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_name` varchar(45) DEFAULT NULL,
  `template_path` varchar(255) DEFAULT NULL,
  `template_default` int(11) DEFAULT NULL,
  `template_author` varchar(45) DEFAULT NULL,
  `template_version` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `template`
--


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(45) NOT NULL,
  `user_password` varchar(45) NOT NULL,
  `password_modify_date` int(11) DEFAULT NULL,
  `user_email` varchar(125) DEFAULT NULL,
  `user_title` varchar(45) DEFAULT NULL,
  `user_last_visit` int(11) DEFAULT NULL,
  `user_activity` tinyint(4) DEFAULT NULL,
  `user_post_count` int(11) DEFAULT NULL,
  `user_ip_address` varchar(45) DEFAULT NULL,
  `user_language_id` int(11) DEFAULT NULL,
  `user_template_id` int(11) DEFAULT NULL,
  `user_skin_id` int(11) DEFAULT NULL,
  `first_name` varchar(45) DEFAULT NULL,
  `last_name` varchar(45) DEFAULT NULL,
  `date_of_birth` int(11) DEFAULT NULL,
  `created` int(11) DEFAULT NULL,
  `modified` int(11) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `gender` enum('male','female','other') DEFAULT NULL,
  `marital_status` enum('yes','no') DEFAULT NULL,
  `telephone` varchar(45) DEFAULT NULL,
  `mobile_phone` varchar(45) DEFAULT NULL,
  `contact_name` varchar(45) DEFAULT NULL,
  `contact_address` varchar(255) DEFAULT NULL,
  `contact_telephone` varchar(45) DEFAULT NULL,
  `contact_phone` varchar(255) DEFAULT NULL,
  `contact_email` varchar(125) DEFAULT NULL,
  `contact_fax` varchar(45) DEFAULT NULL,
  `contact_city` varchar(125) DEFAULT NULL,
  `contact_county` varchar(125) DEFAULT NULL,
  `contact_state` varchar(125) DEFAULT NULL,
  `contact_country` varchar(125) DEFAULT NULL,
  `user_params` text,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `users`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_projects`
--

DROP TABLE IF EXISTS `user_projects`;
CREATE TABLE IF NOT EXISTS `user_projects` (
  `project_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `user_position` varchar(255) DEFAULT NULL COMMENT 'Leader',
  `project_name` varchar(255) DEFAULT NULL COMMENT 'Duc Nhuan',
  `project_code` varchar(255) DEFAULT NULL COMMENT 'MDN290',
  `project_description` varchar(255) DEFAULT NULL COMMENT 'Build an a CMS website for introduction about Duc Nhuan Co.,Ltd. with slide show product.',
  `project_customer` varchar(255) DEFAULT NULL COMMENT 'Mr. Trung',
  `project_start_date` int(11) DEFAULT NULL COMMENT '08/2010 ',
  `project_end_date` int(11) DEFAULT NULL COMMENT '08/2010',
  `team_size` varchar(255) DEFAULT NULL COMMENT 'Total    	: 4 persons\n	PM      	: 1 person		Developer  	: 2 persons\n	Leader  	: 1 person		Tester         	: 0 person\n',
  `project_scope` varchar(255) DEFAULT NULL COMMENT 'Requirement, Analysis & Design, Coding',
  `development_environment` varchar(255) DEFAULT NULL COMMENT '	Zen Studio\n	Adobe Photoshop\n',
  `database` varchar(255) DEFAULT NULL COMMENT 'My SQL 4.0.',
  `programming_language` varchar(255) DEFAULT NULL COMMENT 'PHP 5.2',
  `engineering` varchar(255) DEFAULT NULL COMMENT 'Spiral',
  `tools` varchar(255) DEFAULT NULL COMMENT 'Photoshop, Zend Studio, Zend Server',
  `specific_technologies` varchar(255) DEFAULT NULL COMMENT 'Zend Framework',
  PRIMARY KEY (`project_id`),
  KEY `fk_project_user_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_projects`
--


-- --------------------------------------------------------

--
-- Table structure for table `user_resume`
--

DROP TABLE IF EXISTS `user_resume`;
CREATE TABLE IF NOT EXISTS `user_resume` (
  `resume_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `current_position` varchar(255) DEFAULT NULL,
  `position_expectation` varchar(255) DEFAULT NULL,
  `job_description` varchar(255) DEFAULT NULL,
  `resume_language` varchar(255) DEFAULT NULL COMMENT 'Vietnamese		Native\nEnglish		Good in writing and reading for making project document such as SRS, Detail Design etc. , analyzing customer’s requirement, technology material etc. in English.\n	Have good skills in communication in English\n',
  `education` varchar(255) DEFAULT NULL,
  `certificate` varchar(255) DEFAULT NULL,
  `programming_skill` varchar(255) DEFAULT NULL COMMENT 'Excellent at programming languages (PHP/HMTL, JavaScript, HTML5, CSS3, XML); database skills (MySQL, Oracle..); good at object oriented skills (very good at code re-factoring)',
  `analysis_skill` varchar(255) DEFAULT NULL COMMENT 'Having software architecture skills and knowledge of design patterns and UML concept; ',
  `sdmk` varchar(255) DEFAULT NULL COMMENT 'Software development methodology Knowledge. eg: Good at waterfall/Spiral/RUP/Agile/SCRUM',
  `sdpk` varchar(255) DEFAULT NULL COMMENT 'Software development process Knowledge. eg: Good at process and ISO 9000/CMMI level 3',
  `engineering_skill` varchar(255) DEFAULT NULL COMMENT 'Knowledge on OOP theory\nSoftware programming skill PHP4, PHP5, XHTML/HTML5, XML, JavaScript, Zend Framework,\n',
  `communication_skill` varchar(255) DEFAULT NULL COMMENT 'Exchange information with managers, peers and customers by telephone, IM, email or in person. The exchanged of information is clear and unambiguous.',
  `problem_solving` varchar(255) DEFAULT NULL COMMENT 'Analysing information, evaluating results to select the best solutions and solve problems',
  `teamwork` varchar(255) DEFAULT NULL,
  `practical_experience` varchar(255) DEFAULT NULL COMMENT '5 years of experience in website design and development.\nStrong experience in Multi tier architecture, Web based architecture etcExperience in OOP, AOP.\n',
  `hardware_platforms` varchar(255) DEFAULT NULL COMMENT 'Windows, Linux (Ubuntu, CentOS, RHEL6)',
  `programming_language` varchar(255) DEFAULT NULL COMMENT 'PHP, HTML5/CSS3, XML, JavaScript/Ajax',
  `software_tools` varchar(255) DEFAULT NULL COMMENT 'MS Office, Dreamweaver,  Net Bean, Zend Studio 9, Zend Server, Photoshop CS5, Notepad++',
  `methodlogics` varchar(255) DEFAULT NULL COMMENT 'Object – Oriented Analysis and Design with UML (Concept Draw, Visual Paradigm etc.)Client / Server with 3-tier architecture (MVC , MVP)\n',
  `programming_language_detail` varchar(255) DEFAULT NULL COMMENT 'MySQL, MSSQL		Advanced with MySQL and Oracle\nPHP		OPP with PHP5 and PHP4\n	Family with MVC Framework: Zend\n',
  `reference` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`resume_id`),
  KEY `fk_user_resume_idx` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_resume`
--


-- --------------------------------------------------------

--
-- Table structure for table `votes`
--

DROP TABLE IF EXISTS `votes`;
CREATE TABLE IF NOT EXISTS `votes` (
  `vote_id` int(11) NOT NULL AUTO_INCREMENT,
  `vote_title` varchar(45) DEFAULT NULL,
  `vote_count` int(11) DEFAULT NULL,
  `content_detail_id` int(11) NOT NULL,
  PRIMARY KEY (`vote_id`),
  KEY `fk_vote_content_idx` (`content_detail_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `votes`
--


-- --------------------------------------------------------

--
-- Table structure for table `vote_options`
--

DROP TABLE IF EXISTS `vote_options`;
CREATE TABLE IF NOT EXISTS `vote_options` (
  `vote_option_id` int(11) NOT NULL AUTO_INCREMENT,
  `vote_id` int(11) DEFAULT NULL,
  `vote_option_title` varchar(255) NOT NULL,
  `vote_option_count` int(11) DEFAULT '0',
  `vote_option_percent` int(11) DEFAULT '0',
  PRIMARY KEY (`vote_option_id`),
  KEY `fk_option_vote_idx` (`vote_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `vote_options`
--


-- --------------------------------------------------------

--
-- Table structure for table `widgets`
--

DROP TABLE IF EXISTS `widgets`;
CREATE TABLE IF NOT EXISTS `widgets` (
  `widget_id` int(11) NOT NULL AUTO_INCREMENT,
  `template_id` int(11) NOT NULL,
  `widget_name` varchar(45) DEFAULT NULL,
  `widget_file` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`widget_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `widgets`
--


--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `fk_album_gallery_idx` FOREIGN KEY (`gallery_id`) REFERENCES `gallery` (`gallery_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `album_detail`
--
ALTER TABLE `album_detail`
  ADD CONSTRAINT `fk_album_detail_idx` FOREIGN KEY (`album_id`) REFERENCES `albums` (`album_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `archives`
--
ALTER TABLE `archives`
  ADD CONSTRAINT `fk_content_archive_ids` FOREIGN KEY (`content_id`) REFERENCES `content` (`content_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `attachment`
--
ALTER TABLE `attachment`
  ADD CONSTRAINT `fk_content_detail_attachment_idx` FOREIGN KEY (`content_detail_id`) REFERENCES `content_detail` (`content_detail_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `fk_user_blog_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `blog_entries`
--
ALTER TABLE `blog_entries`
  ADD CONSTRAINT `fk_blog_entry_idx` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`blog_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_associations`
--
ALTER TABLE `category_associations`
  ADD CONSTRAINT `fk_category_cat_idx` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_category_content_idx` FOREIGN KEY (`content_id`) REFERENCES `content` (`content_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `category_detail`
--
ALTER TABLE `category_detail`
  ADD CONSTRAINT `fk_category_detail_idx` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_category_language_idx` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `fk_content_comment_idx` FOREIGN KEY (`content_detail_id`) REFERENCES `content_detail` (`content_detail_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `content`
--
ALTER TABLE `content`
  ADD CONSTRAINT `fk_content_type_idx` FOREIGN KEY (`content_type_id`) REFERENCES `content_types` (`content_type_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_content_user_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `content_detail`
--
ALTER TABLE `content_detail`
  ADD CONSTRAINT `fk_content_detail_idx` FOREIGN KEY (`content_id`) REFERENCES `content` (`content_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_content_language_idx` FOREIGN KEY (`language_id`) REFERENCES `languages` (`language_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `content_schedule`
--
ALTER TABLE `content_schedule`
  ADD CONSTRAINT `fk_content_schedule_idx` FOREIGN KEY (`content_id`) REFERENCES `content` (`content_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `content_tags_associations`
--
ALTER TABLE `content_tags_associations`
  ADD CONSTRAINT `fk_content_tag_idx` FOREIGN KEY (`content_detail_id`) REFERENCES `content_detail` (`content_detail_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_tag_idx` FOREIGN KEY (`tag_id`) REFERENCES `tags` (`tag_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `gallery`
--
ALTER TABLE `gallery`
  ADD CONSTRAINT `fk_user_gallery_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `media`
--
ALTER TABLE `media`
  ADD CONSTRAINT `fk_content_media_idx` FOREIGN KEY (`content_detail_id`) REFERENCES `content_detail` (`content_detail_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `permissions`
--
ALTER TABLE `permissions`
  ADD CONSTRAINT `fk_group_role_idx` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_role_group_idx` FOREIGN KEY (`role_id`) REFERENCES `roles` (`role_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `privileges`
--
ALTER TABLE `privileges`
  ADD CONSTRAINT `fk_group_user_idx` FOREIGN KEY (`group_id`) REFERENCES `groups` (`group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_user_group_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `fk_review_content_idx` FOREIGN KEY (`content_detail_id`) REFERENCES `content_detail` (`content_detail_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `tags`
--
ALTER TABLE `tags`
  ADD CONSTRAINT `fk_group_tag_idx` FOREIGN KEY (`tag_group_id`) REFERENCES `tag_group` (`tag_group_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_projects`
--
ALTER TABLE `user_projects`
  ADD CONSTRAINT `fk_project_user_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `user_resume`
--
ALTER TABLE `user_resume`
  ADD CONSTRAINT `fk_user_resume_idx` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `votes`
--
ALTER TABLE `votes`
  ADD CONSTRAINT `fk_vote_content_idx` FOREIGN KEY (`content_detail_id`) REFERENCES `content_detail` (`content_detail_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `vote_options`
--
ALTER TABLE `vote_options`
  ADD CONSTRAINT `fk_option_vote_idx` FOREIGN KEY (`vote_id`) REFERENCES `votes` (`vote_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
