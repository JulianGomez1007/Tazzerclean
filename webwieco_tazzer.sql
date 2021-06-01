-- Adminer 4.8.1 MySQL 5.6.47.0 dump

SET NAMES utf8;
SET time_zone = '+00:00';
SET foreign_key_checks = 0;
SET sql_mode = 'NO_AUTO_VALUE_ON_ZERO';

DROP TABLE IF EXISTS `administrators`;
CREATE TABLE `administrators` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `email` varchar(100) NOT NULL,
  `password` varchar(150) NOT NULL,
  `username` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `full_name` varchar(150) NOT NULL,
  `profile_img` varchar(256) NOT NULL,
  `role` tinyint(4) NOT NULL COMMENT '1-admin,2-demo',
  `token` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `admin_access`;
CREATE TABLE `admin_access` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` int(11) NOT NULL,
  `module_id` int(11) NOT NULL,
  `access` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=61 DEFAULT CHARSET=utf8;


SET NAMES utf8mb4;

DROP TABLE IF EXISTS `admin_commission`;
CREATE TABLE `admin_commission` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `admin_id` tinyint(1) NOT NULL,
  `commission` tinyint(5) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `admin_modules`;
CREATE TABLE `admin_modules` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `module_name` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `admin_payment`;
CREATE TABLE `admin_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `account_holder_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_iban` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `sort_code` varchar(255) NOT NULL,
  `routing_number` varchar(255) NOT NULL,
  `account_ifsc` varchar(255) NOT NULL,
  `transaction_id` varchar(255) NOT NULL,
  `booking_id` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `app_language_management`;
CREATE TABLE `app_language_management` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `page_key` varchar(500) DEFAULT NULL,
  `lang_key` text,
  `lang_value` text,
  `placeholder` text,
  `validation1` text,
  `validation2` text,
  `validation3` text,
  `type` varchar(225) DEFAULT NULL,
  `language` text,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=1118 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `bank_account`;
CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `user_name` varchar(50) DEFAULT NULL,
  `acc_no` varchar(50) DEFAULT NULL,
  `bank_name` varchar(100) DEFAULT NULL,
  `bank_addr` varchar(500) DEFAULT NULL,
  `ifsc_code` varchar(25) DEFAULT NULL,
  `pancard_no` varchar(20) DEFAULT NULL,
  `paypal_account` varchar(50) DEFAULT NULL,
  `paypal_email_id` varchar(100) DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `book_service`;
CREATE TABLE `book_service` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` int(11) NOT NULL,
  `provider_id` int(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  `location` varchar(255) NOT NULL,
  `service_date` date NOT NULL,
  `amount` varchar(255) NOT NULL,
  `currency_code` varchar(255) NOT NULL,
  `tokenid` varchar(255) NOT NULL,
  `from_time` time NOT NULL,
  `to_time` time NOT NULL,
  `notes` text NOT NULL,
  `latitude` varchar(255) NOT NULL,
  `longitude` varchar(255) NOT NULL,
  `request_date` date NOT NULL,
  `request_time` time NOT NULL,
  `service_status` int(11) NOT NULL DEFAULT '0' COMMENT '1-accepted,2-rejected',
  `notification_status` int(11) NOT NULL DEFAULT '1',
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1-pending,2-Inprogress,3-completed provider,4- accepted user,5-rejected user,6-completed,7-cancelled',
  `reason` varchar(500) NOT NULL,
  `admin_change_status` int(11) DEFAULT '0' COMMENT '0 =>nnot change,1 =>changed',
  `reject_paid_token` varchar(60) DEFAULT '0',
  `admin_reject_comment` varchar(1000) DEFAULT NULL,
  `payment_details` text NOT NULL,
  `updated_on` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `business_hours`;
CREATE TABLE `business_hours` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `provider_id` varchar(255) NOT NULL,
  `all_days` int(10) DEFAULT '1',
  `availability` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=35 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `categories`;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `category_image` varchar(500) NOT NULL,
  `thumb_image` varchar(225) NOT NULL,
  `category_mobile_icon` varchar(225) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `chat_table`;
CREATE TABLE `chat_table` (
  `chat_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender_token` varchar(200) NOT NULL,
  `receiver_token` varchar(200) NOT NULL,
  `message` varchar(10000) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '1 => active ,0 =>de-active',
  `read_status` int(11) NOT NULL DEFAULT '0' COMMENT '0 =>unread,1 =>read',
  `utc_date_time` varchar(500) DEFAULT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`chat_id`)
) ENGINE=InnoDB AUTO_INCREMENT=104 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `city`;
CREATE TABLE `city` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(30) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `state_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=47577 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `contact_form_details`;
CREATE TABLE `contact_form_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `contact_reply`;
CREATE TABLE `contact_reply` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `contact_id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `reply` text NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `countrycode`;
CREATE TABLE `countrycode` (
  `id` int(11) NOT NULL,
  `CountryCode` char(5) NOT NULL,
  `CountryName` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `country_table`;
CREATE TABLE `country_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `country_code` varchar(3) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int(11) DEFAULT NULL,
  `country_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `tcode` varchar(5) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=247 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `currency`;
CREATE TABLE `currency` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(225) NOT NULL,
  `currency_name` varchar(225) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=156 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `currency_rate`;
CREATE TABLE `currency_rate` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `currency_code` varchar(10) NOT NULL,
  `rate` float NOT NULL,
  `status` int(10) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=55 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `device_details`;
CREATE TABLE `device_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `device_type` varbinary(10) NOT NULL,
  `device_id` tinytext NOT NULL,
  `created` datetime NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-provider,2-user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=369 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `email_templates`;
CREATE TABLE `email_templates` (
  `template_id` int(10) unsigned NOT NULL,
  `template_title` text NOT NULL,
  `template_content` longblob NOT NULL,
  `template_type` tinyint(3) NOT NULL,
  `template_created` datetime NOT NULL,
  `template_status` tinyint(3) NOT NULL COMMENT '0 - Inactive ,1 - Active',
  PRIMARY KEY (`template_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `footer_menu`;
CREATE TABLE `footer_menu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `footer_submenu`;
CREATE TABLE `footer_submenu` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `footer_menu` int(11) NOT NULL,
  `footer_submenu` varchar(50) NOT NULL,
  `page_title` varchar(50) NOT NULL,
  `page_desc` longtext NOT NULL,
  `seo_title` varchar(50) NOT NULL,
  `seo_desc` longtext NOT NULL,
  `seo_keyword` varchar(500) NOT NULL,
  `status` int(11) NOT NULL,
  `menu_status` int(11) NOT NULL DEFAULT '0',
  `created_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `forget_password_det`;
CREATE TABLE `forget_password_det` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `pwdlink` varchar(300) NOT NULL,
  `endtime` int(30) NOT NULL,
  `user_type` varchar(100) NOT NULL,
  `token` varchar(50) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `language`;
CREATE TABLE `language` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `language` varchar(150) NOT NULL,
  `language_value` varchar(25) NOT NULL,
  `tag` varchar(100) NOT NULL,
  `default_language` int(11) NOT NULL COMMENT '1-default',
  `status` tinyint(5) NOT NULL DEFAULT '2' COMMENT '1.active 2.inactive',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `language_management`;
CREATE TABLE `language_management` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `lang_key` text,
  `lang_value` text,
  `language` text,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB AUTO_INCREMENT=214 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `mobile_otp`;
CREATE TABLE `mobile_otp` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `mobile_number` varchar(15) NOT NULL,
  `country_code` varchar(15) DEFAULT NULL,
  `otp` int(4) NOT NULL,
  `endtime` int(30) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `created_at` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=1462 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `notification_table`;
CREATE TABLE `notification_table` (
  `notification_id` int(11) NOT NULL AUTO_INCREMENT,
  `sender` varchar(100) NOT NULL,
  `receiver` varchar(100) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `status` int(11) NOT NULL,
  `utc_date_time` varchar(50) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`notification_id`)
) ENGINE=InnoDB AUTO_INCREMENT=451 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `pages`;
CREATE TABLE `pages` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
  `page_key` varchar(255) NOT NULL,
  `page_title` varchar(255) NOT NULL,
  `status` tinyint(4) NOT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `payments`;
CREATE TABLE `payments` (
  `payment_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `txn_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_gross` float(10,2) NOT NULL,
  `currency_code` varchar(5) COLLATE utf8_unicode_ci NOT NULL,
  `payer_email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`payment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `payment_gateways`;
CREATE TABLE `payment_gateways` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gateway_name` varchar(50) NOT NULL,
  `gateway_type` varchar(20) NOT NULL,
  `api_key` varchar(100) NOT NULL,
  `value` varchar(100) NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '(0 Inactive, 1 Active)',
  `created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `paypal_payment_gateways`;
CREATE TABLE `paypal_payment_gateways` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `braintree_key` varchar(50) NOT NULL,
  `gateway_type` varchar(20) NOT NULL,
  `braintree_merchant` varchar(255) NOT NULL,
  `braintree_publickey` varchar(255) NOT NULL,
  `braintree_privatekey` varchar(255) NOT NULL,
  `paypal_appid` varchar(255) NOT NULL,
  `paypal_appkey` varchar(255) NOT NULL,
  `created_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `paypal_transaction`;
CREATE TABLE `paypal_transaction` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) NOT NULL,
  `transaction_id` varchar(250) NOT NULL,
  `order_id` varchar(250) NOT NULL,
  `amount` varchar(50) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `paytabs_details`;
CREATE TABLE `paytabs_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sandbox_email` varchar(50) NOT NULL,
  `sandbox_secretkey` varchar(500) NOT NULL,
  `email` varchar(50) NOT NULL,
  `secretkey` varchar(500) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price` float(10,2) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;


DROP TABLE IF EXISTS `providers`;
CREATE TABLE `providers` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(225) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(100) NOT NULL,
  `mobileno` varchar(225) NOT NULL,
  `country_code` varchar(255) NOT NULL,
  `currency_code` varchar(50) DEFAULT NULL,
  `share_code` varchar(20) DEFAULT NULL,
  `category` int(11) NOT NULL,
  `subcategory` int(11) NOT NULL,
  `profile_img` varchar(225) NOT NULL,
  `token` varchar(225) NOT NULL,
  `dob` date DEFAULT NULL,
  `otp` varchar(225) NOT NULL,
  `account_holder_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_iban` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `sort_code` varchar(255) NOT NULL,
  `routing_number` varchar(255) NOT NULL,
  `account_ifsc` varchar(255) NOT NULL,
  `id_proof` varchar(255) DEFAULT NULL,
  `qualification_document` varchar(255) DEFAULT NULL,
  `address_proof` varchar(255) DEFAULT NULL,
  `mot_certificate` varchar(255) DEFAULT NULL,
  `driving_license` varchar(255) DEFAULT NULL,
  `car_insurance` varchar(255) DEFAULT NULL,
  `business_insurance` varchar(255) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0' COMMENT '1-active,2-inactive,0-delete',
  `delete_status` varchar(1) NOT NULL DEFAULT '0' COMMENT '1-delete,0-not delete',
  `usertype` varchar(1) NOT NULL COMMENT '1- existing user, 2- new user',
  `type` int(1) NOT NULL DEFAULT '1',
  `last_login` datetime NOT NULL,
  `last_logout` datetime DEFAULT NULL,
  `is_agree` int(10) DEFAULT NULL,
  `is_online` int(10) DEFAULT '2',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `provider_address`;
CREATE TABLE `provider_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `provider_id` int(10) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country_id` int(10) DEFAULT NULL,
  `state_id` int(10) DEFAULT NULL,
  `city_id` int(10) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_review`;
CREATE TABLE `rating_review` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider_id` int(11) NOT NULL,
  `service_id` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `rating` float(2,1) NOT NULL,
  `review` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `status` tinyint(2) NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive',
  `delete_status` int(11) NOT NULL DEFAULT '0' COMMENT '1-delete,0 not delete',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `rating_type`;
CREATE TABLE `rating_type` (
  `id` int(1) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '0' COMMENT '0-active,1- inactive',
  `created` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `razorpay_contact`;
CREATE TABLE `razorpay_contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `rp_contactid` varchar(100) NOT NULL,
  `entity` varchar(100) NOT NULL,
  `name` varchar(255) NOT NULL,
  `contact` varchar(50) NOT NULL,
  `email` varchar(255) NOT NULL,
  `type` varchar(50) NOT NULL,
  `reference_id` varchar(255) NOT NULL,
  `batch_id` varchar(50) DEFAULT NULL,
  `active` varchar(10) NOT NULL,
  `accountnumber` varchar(50) NOT NULL,
  `mode` varchar(50) NOT NULL,
  `purpose` varchar(50) NOT NULL,
  `notes` text,
  `created_at` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `razorpay_fund_account`;
CREATE TABLE `razorpay_fund_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fund_account_id` varchar(100) NOT NULL,
  `entity` varchar(100) NOT NULL,
  `contact_id` varchar(255) NOT NULL,
  `account_type` varchar(50) NOT NULL,
  `ifsc` varchar(200) NOT NULL,
  `bank_name` varchar(200) NOT NULL,
  `name` varchar(200) NOT NULL,
  `account_number` varchar(100) NOT NULL,
  `active` varchar(50) NOT NULL,
  `batch_id` varchar(100) DEFAULT NULL,
  `created_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `razorpay_gateway`;
CREATE TABLE `razorpay_gateway` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `gateway_name` varchar(100) NOT NULL,
  `gateway_type` varchar(50) NOT NULL,
  `api_key` text NOT NULL,
  `api_secret` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0->inactive, 1-active',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `razorpay_payouts`;
CREATE TABLE `razorpay_payouts` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `payout_id` varchar(200) NOT NULL,
  `entity` varchar(50) NOT NULL,
  `fund_account_id` varchar(100) NOT NULL,
  `amount` int(11) NOT NULL,
  `currency` varchar(20) NOT NULL,
  `notes` text,
  `fees` int(11) NOT NULL,
  `tax` int(11) NOT NULL,
  `status` varchar(20) NOT NULL,
  `utr` varchar(100) DEFAULT NULL,
  `mode` varchar(20) NOT NULL,
  `purpose` varchar(20) NOT NULL,
  `reference_id` varchar(50) DEFAULT NULL,
  `narration` varchar(50) DEFAULT NULL,
  `batch_id` varchar(100) DEFAULT NULL,
  `failure_reason` text,
  `created_at` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=12 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `revenue`;
CREATE TABLE `revenue` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `date` date DEFAULT NULL,
  `provider` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `currency_code` varchar(5) NOT NULL,
  `commission` varchar(5) NOT NULL,
  `status` varchar(1) NOT NULL DEFAULT '1',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `services`;
CREATE TABLE `services` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `service_title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `currency_code` varchar(25) DEFAULT NULL,
  `service_sub_title` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci DEFAULT NULL,
  `service_amount` float NOT NULL,
  `category` varchar(500) NOT NULL,
  `subcategory` varchar(500) NOT NULL,
  `about` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `service_offered` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `service_location` varchar(500) DEFAULT NULL,
  `service_latitude` varchar(500) NOT NULL,
  `service_longitude` varchar(500) NOT NULL,
  `service_image` text NOT NULL,
  `service_details_image` text,
  `thumb_image` text NOT NULL,
  `mobile_image` text NOT NULL,
  `status` int(11) NOT NULL DEFAULT '1' COMMENT '0-delete,1-active,2-inactive',
  `total_views` int(11) NOT NULL,
  `rating` varchar(255) NOT NULL,
  `rating_count` varchar(255) NOT NULL,
  `admin_verification` int(10) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=422 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `services_image`;
CREATE TABLE `services_image` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `service_id` varchar(11) NOT NULL,
  `service_image` text NOT NULL,
  `service_details_image` text NOT NULL,
  `thumb_image` text NOT NULL,
  `mobile_image` text NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1',
  `is_url` int(1) DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=434 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `service_offered`;
CREATE TABLE `service_offered` (
  `service_id` int(10) NOT NULL,
  `service_offered` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `state`;
CREATE TABLE `state` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `country_id` int(10) DEFAULT NULL,
  `name` varchar(50) NOT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4121 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `stripe_bank_details`;
CREATE TABLE `stripe_bank_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `account_holder_name` varchar(150) NOT NULL,
  `account_number` varchar(150) NOT NULL,
  `account_iban` varchar(100) NOT NULL,
  `bank_name` varchar(150) NOT NULL,
  `bank_address` varchar(256) NOT NULL,
  `sort_code` varchar(50) NOT NULL,
  `routing_number` varchar(50) NOT NULL,
  `account_ifsc` varchar(25) NOT NULL,
  `paypal_account` varchar(50) DEFAULT NULL,
  `paypal_email_id` varchar(50) DEFAULT NULL,
  `pancard_no` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `stripe_customer_card_details`;
CREATE TABLE `stripe_customer_card_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(500) NOT NULL,
  `stripe_token` varchar(600) NOT NULL,
  `pay_type` varchar(60) NOT NULL,
  `brand` varchar(60) NOT NULL,
  `cvc_check` varchar(60) NOT NULL,
  `cust_id` varchar(60) NOT NULL,
  `card_id` varchar(200) NOT NULL,
  `card_number` int(20) NOT NULL,
  `card_exp_month` varchar(50) NOT NULL,
  `card_exp_year` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `stripe_customer_table`;
CREATE TABLE `stripe_customer_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(200) NOT NULL,
  `cust_id` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `currency` varchar(60) DEFAULT '0',
  `created_at` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `stripe_provider_card_details`;
CREATE TABLE `stripe_provider_card_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(500) NOT NULL,
  `stripe_token` varchar(600) NOT NULL,
  `pay_type` varchar(60) NOT NULL,
  `brand` varchar(60) NOT NULL,
  `cvc_check` varchar(60) NOT NULL,
  `account_id` varchar(60) NOT NULL,
  `card_id` varchar(200) NOT NULL,
  `card_number` int(20) NOT NULL,
  `card_exp_month` varchar(50) NOT NULL,
  `card_exp_year` varchar(5) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `stripe_provider_table`;
CREATE TABLE `stripe_provider_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_token` varchar(200) NOT NULL,
  `account_id` varchar(200) NOT NULL,
  `email` varchar(200) DEFAULT NULL,
  `currency` varchar(50) DEFAULT '0',
  `response` varchar(10000) NOT NULL,
  `created_at` datetime NOT NULL,
  `update_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `subcategories`;
CREATE TABLE `subcategories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` int(11) NOT NULL,
  `subcategory_name` varchar(500) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `subcategory_image` varchar(500) DEFAULT NULL,
  `status` int(11) unsigned NOT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=279 DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;


DROP TABLE IF EXISTS `subscription_details`;
CREATE TABLE `subscription_details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_id` int(11) NOT NULL,
  `subscriber_id` int(11) NOT NULL,
  `subscription_date` datetime NOT NULL,
  `expiry_date_time` datetime NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-provider,2-user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `subscription_details_history`;
CREATE TABLE `subscription_details_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_id` int(11) NOT NULL,
  `subscriber_id` int(11) NOT NULL,
  `subscription_date` datetime NOT NULL,
  `expiry_date_time` datetime NOT NULL,
  `type` int(1) NOT NULL COMMENT '1-provider,2-user',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `subscription_fee`;
CREATE TABLE `subscription_fee` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `subscription_name` varchar(150) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `fee` double(10,2) NOT NULL,
  `currency_code` char(5) NOT NULL,
  `duration` int(11) NOT NULL COMMENT 'Duration in months',
  `fee_description` tinytext NOT NULL,
  `status` int(11) NOT NULL COMMENT '0-inactive,1-active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `subscription_payment`;
CREATE TABLE `subscription_payment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_id` int(11) NOT NULL,
  `subscription_id` int(11) NOT NULL,
  `subscriber_id` int(11) NOT NULL,
  `subscription_date` datetime NOT NULL,
  `tokenid` text NOT NULL,
  `payment_details` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `system_settings`;
CREATE TABLE `system_settings` (
  `id` smallint(6) NOT NULL AUTO_INCREMENT,
  `key` varchar(250) NOT NULL,
  `value` mediumtext NOT NULL,
  `system` tinyint(150) NOT NULL DEFAULT '1',
  `groups` varchar(150) NOT NULL,
  `update_date` date NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT '1',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7819 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `theme_color_change`;
CREATE TABLE `theme_color_change` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `color_name` varchar(25) NOT NULL,
  `status` enum('1','0') NOT NULL DEFAULT '0',
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4;


DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) NOT NULL,
  `mobileno` varchar(255) NOT NULL,
  `country_code` varchar(11) NOT NULL,
  `currency_code` varchar(50) DEFAULT NULL,
  `otp` varchar(255) NOT NULL,
  `share_code` varchar(20) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `profile_img` varchar(255) NOT NULL,
  `dob` date DEFAULT NULL,
  `token` varchar(255) NOT NULL,
  `status` int(1) NOT NULL DEFAULT '1' COMMENT '1-active,2-inactive',
  `usertype` int(1) NOT NULL,
  `type` int(1) NOT NULL DEFAULT '2' COMMENT '1-provider,2-user',
  `account_holder_name` varchar(255) NOT NULL,
  `account_number` varchar(255) NOT NULL,
  `account_iban` varchar(255) NOT NULL,
  `bank_name` varchar(255) NOT NULL,
  `bank_address` varchar(255) NOT NULL,
  `sort_code` varchar(255) NOT NULL,
  `routing_number` varchar(255) NOT NULL,
  `account_ifsc` varchar(255) NOT NULL,
  `last_login` datetime NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `is_agree` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;

INSERT INTO `users` (`id`, `name`, `mobileno`, `country_code`, `currency_code`, `otp`, `share_code`, `email`, `password`, `profile_img`, `dob`, `token`, `status`, `usertype`, `type`, `account_holder_name`, `account_number`, `account_iban`, `bank_name`, `bank_address`, `sort_code`, `routing_number`, `account_ifsc`, `last_login`, `created_at`, `updated_at`, `is_agree`) VALUES
(1,	'Test',	'1234567890',	'1',	'GBP',	'',	'4cgjbd6',	'test@gmail.com',	'27d6857bbbc703be3f16c2135e5d7b8a',	'uploads/profile_img/1620593075.jpg',	NULL,	'1Bvp1nmWXYZdIsJ',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-09 19:48:09',	'2021-05-09 14:18:07',	'0000-00-00 00:00:00',	1),
(2,	'om',	'3217177620',	'92',	'GBP',	'',	'24ky0w6',	'nomail@123.com',	'202cb962ac59075b964b07152d234b70',	'',	NULL,	'2C0yEZVr1bFV6mg',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-11 21:48:57',	'2021-05-11 16:18:55',	'0000-00-00 00:00:00',	1),
(3,	'Tazzer Clean',	'7961242587',	'44',	'GBP',	'',	'12z5qwia',	'test2@gmail.com',	'c2a1bcb1b7022c077029684a65100832',	'uploads/profile_img/1620731051.png',	NULL,	'3lX4ZWTyVxc6ttM',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-11 22:02:29',	'2021-05-11 16:32:28',	'0000-00-00 00:00:00',	1),
(4,	'Mahadi Hasan',	'1921583871',	'880',	'GBP',	'',	'12ayo3xo',	'sabitaldin@gmail.com',	'38638517ffa88cda98cd235ddf682694',	'uploads/profile_img/1620744742.jpg',	NULL,	'42FAjace8d30rta',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-12 01:51:24',	'2021-05-11 20:21:23',	'0000-00-00 00:00:00',	1),
(5,	'Anas Iqbal',	'3146618771',	'92',	'GBP',	'',	'10g70xj8',	'anasiqbal-techub21@gmail.com',	'5b23eae282c93966f67fbb75aa56c2a1',	'',	NULL,	'5ReJcqNEiPW3yUd',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-14 04:35:48',	'2021-05-13 23:05:47',	'0000-00-00 00:00:00',	1),
(6,	'janu',	'9891674775',	'91',	'GBP',	'',	'4iev6ar',	'anju77golu@gmail.com',	'dc647eb65e6711e155375218212b3964',	'',	NULL,	'6TVf5P4Np2d2vVK',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-15 00:33:28',	'2021-05-14 19:03:27',	'0000-00-00 00:00:00',	1),
(7,	'John',	'9898989898',	'299',	'GBP',	'',	'47xdnpa',	'john@gmailc.com',	'527bd5b5d689e2c32ae974c6229ff785',	'',	NULL,	'7aJrf6T6uwTBGsn',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-17 16:01:05',	'2021-05-17 10:31:03',	'0000-00-00 00:00:00',	1),
(8,	'Danil',	'2015551235',	'1',	'GBP',	'',	'57cepss',	'topdeveloper1999@outlook.com',	'f25d724fd7f516fde65379324f319d94',	'uploads/profile_img/1621360979.jpg',	NULL,	'8MPgExSCI8lmzzV',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-19 05:00:30',	'2021-05-18 23:30:29',	'0000-00-00 00:00:00',	1),
(9,	'Part',	'9877654566',	'91',	'GBP',	'',	'4o3qin8',	'xrv63777@eoopy.com',	'86d1ad97bb57fdb46bd903eac7f5177e',	'',	NULL,	'9hUdTRbRu7HnKvR',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-19 17:05:46',	'2021-05-19 11:35:44',	'0000-00-00 00:00:00',	1),
(10,	'Anas Iqbal',	'3146618771',	'92',	'GBP',	'',	'10g70xj8',	'anasiqbal-techub21@gmail.com',	'5b23eae282c93966f67fbb75aa56c2a1',	'',	NULL,	'5ReJcqNEiPW3yUd',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-14 04:35:48',	'2021-05-13 23:05:47',	'0000-00-00 00:00:00',	1),
(11,	'janu',	'9891674775',	'91',	'GBP',	'',	'4iev6ar',	'anju77golu@gmail.com',	'dc647eb65e6711e155375218212b3964',	'',	NULL,	'6TVf5P4Np2d2vVK',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-15 00:33:28',	'2021-05-14 19:03:27',	'0000-00-00 00:00:00',	1),
(12,	'John',	'9898989898',	'299',	'GBP',	'',	'47xdnpa',	'john@gmailc.com',	'527bd5b5d689e2c32ae974c6229ff785',	'',	NULL,	'7aJrf6T6uwTBGsn',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-17 16:01:05',	'2021-05-17 10:31:03',	'0000-00-00 00:00:00',	1),
(13,	'Danil',	'2015551235',	'1',	'GBP',	'',	'57cepss',	'topdeveloper1999@outlook.com',	'f25d724fd7f516fde65379324f319d94',	'uploads/profile_img/1621360979.jpg',	NULL,	'8MPgExSCI8lmzzV',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-19 05:00:30',	'2021-05-18 23:30:29',	'0000-00-00 00:00:00',	1),
(14,	'Part',	'9877654566',	'91',	'GBP',	'',	'4o3qin8',	'xrv63777@eoopy.com',	'86d1ad97bb57fdb46bd903eac7f5177e',	'',	NULL,	'9hUdTRbRu7HnKvR',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-19 17:05:46',	'2021-05-19 11:35:44',	'0000-00-00 00:00:00',	1),
(17,	'test',	'9936596369',	'91',	'GBP',	'',	'41uiuce',	'test1@gmail.com',	'245cf079454dc9a3374a7c076de247cc',	'',	NULL,	'178b58sOaKXoIyii',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-21 17:00:17',	'2021-05-21 11:30:16',	'0000-00-00 00:00:00',	1),
(18,	'9836',	'9999999999',	'91',	'GBP',	'',	'4jl7tta',	'`tw@gmail.com',	'ca092c71d6be4e9dd735fbceb0890093',	'',	NULL,	'18BZmTBDDuZHDvqO',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-23 20:50:19',	'2021-05-23 15:20:18',	'0000-00-00 00:00:00',	1),
(19,	'Bbb',	'675555555',	'237',	'GBP',	'',	'32bkrdm',	'bb@gmail.com',	'e1faffe9c3c801f2f8c3fbe7cb032cb2',	'',	NULL,	'19NoiaKrQtIJJN2C',	1,	0,	2,	'',	'',	'',	'',	'',	'',	'',	'',	'2021-05-24 08:22:41',	'2021-05-24 02:52:40',	'0000-00-00 00:00:00',	1);

DROP TABLE IF EXISTS `user_address`;
CREATE TABLE `user_address` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `country_id` int(10) DEFAULT NULL,
  `state_id` int(10) DEFAULT NULL,
  `city_id` int(10) DEFAULT NULL,
  `pincode` int(10) DEFAULT NULL,
  `created_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime DEFAULT CURRENT_TIMESTAMP,
  `created_by` int(10) DEFAULT NULL,
  `updated_by` int(10) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `views`;
CREATE TABLE `views` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `service_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3650 DEFAULT CHARSET=utf8;


DROP TABLE IF EXISTS `wallet_table`;
CREATE TABLE `wallet_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL,
  `currency_code` varchar(25) DEFAULT NULL,
  `user_provider_id` int(11) NOT NULL,
  `type` int(11) NOT NULL,
  `wallet_amt` float NOT NULL,
  `reason` varchar(1000) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `wallet_transaction_history`;
CREATE TABLE `wallet_transaction_history` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `token` varchar(60) NOT NULL COMMENT 'user or provider token',
  `currency_code` varchar(25) DEFAULT NULL,
  `user_provider_id` int(11) NOT NULL COMMENT 'user or provider ids',
  `type` int(11) NOT NULL COMMENT 'provider 1,user 2',
  `tokenid` varchar(500) NOT NULL,
  `payment_detail` varchar(10000) NOT NULL,
  `charge_id` varchar(200) DEFAULT '1',
  `transaction_id` float NOT NULL,
  `exchange_rate` float DEFAULT '0',
  `paid_status` varchar(100) NOT NULL,
  `cust_id` varchar(200) NOT NULL,
  `card_id` varchar(200) NOT NULL,
  `total_amt` float NOT NULL,
  `fee_amt` float NOT NULL,
  `net_amt` float NOT NULL,
  `amount_refund` float DEFAULT '0',
  `current_wallet` float NOT NULL,
  `credit_wallet` float DEFAULT '0',
  `debit_wallet` float DEFAULT '0',
  `avail_wallet` float DEFAULT '0',
  `reason` varchar(1000) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `update_on` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=20 DEFAULT CHARSET=latin1;


DROP TABLE IF EXISTS `wallet_withdraw`;
CREATE TABLE `wallet_withdraw` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` tinyint(2) NOT NULL,
  `amount` varchar(25) NOT NULL,
  `currency_code` varchar(10) NOT NULL,
  `request_payment` varchar(25) NOT NULL,
  `transaction_status` tinyint(2) NOT NULL,
  `transaction_date` date NOT NULL,
  `status` tinyint(2) NOT NULL,
  `created_by` tinyint(2) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4;


-- 2021-05-24 13:31:00
