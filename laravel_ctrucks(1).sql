-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Feb 13, 2017 at 08:43 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel_ctrucks`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointmentschedule`
--

CREATE TABLE `appointmentschedule` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_number` varchar(20) NOT NULL,
  `day_time` varchar(200) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `appointmentschedule`
--

INSERT INTO `appointmentschedule` (`id`, `name`, `email`, `phone_number`, `day_time`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '3', '4', '5', '2017-01-31 20:04:58', '2017-02-01 03:04:58', '2017-02-01 03:04:58'),
(2, '2', '3', '4', '5', '2017-01-31 20:04:58', '2017-02-01 03:04:58', '2017-02-01 03:04:58'),
(3, '1', '2', '3', '4', '2017-01-31 20:04:58', '2017-02-01 03:04:58', '2017-02-01 03:04:58'),
(4, 'demo', 'de@g.com', '8956235689', '2017-02-01 03:05', '2017-02-01 16:38:23', NULL, NULL),
(5, '1', '2', '3', '2017-02-04 03:10', '2017-02-03 17:15:55', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contactsetting`
--

CREATE TABLE `contactsetting` (
  `id` int(10) UNSIGNED NOT NULL,
  `showroom_1_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_2_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_1_tell` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_1_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_1_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_2_tell` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_2_fax` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `showroom_2_email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_iframe` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `map_address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `contactsetting`
--

INSERT INTO `contactsetting` (`id`, `showroom_1_address`, `showroom_2_address`, `showroom_1_tell`, `showroom_1_fax`, `showroom_1_email`, `showroom_2_tell`, `showroom_2_fax`, `showroom_2_email`, `map_iframe`, `map_address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '  5500 Highway 20 SE Cartersville, GA 30120', 'Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum', '(470) 315-4174', '(470) 315-4174', 'info1@cartervilletrucks.com', 'Lorem ipsum Lorem', 'Lorem ipsum Lorem ipsum', 'info2@cartervilletrucks.com', 'https://www.google.com/maps/embed/v1/place?q=dehradun&key=AIzaSyAN0om9mFmy1QN6Wf54tXAowK4eT0ZUPrU', '5500 Highway 20 SE Cartersville, GA 30120', '2016-12-17 21:16:56', '2017-02-02 10:06:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `content`
--

CREATE TABLE `content` (
  `id` int(10) UNSIGNED NOT NULL,
  `Title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `content`
--

INSERT INTO `content` (`id`, `Title`, `content`, `image`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test content', '<div class="col-md-8 wow slideInRight" style="visibility: visible; animation-name: slideInRight;">\r\n<ul>\r\n	<li>Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</li>\r\n	<li>Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</li>\r\n	<li>sed ut perspiciatis unde omnis iste</li>\r\n	<li>nature error sit voluptatem accusantium</li>\r\n	<li>eaque ipsa quae ab illo inventore</li>\r\n</ul>\r\n</div>\r\n\r\n<div class="col-md-4 pull-right wow slideInLeft" style="visibility: visible; animation-name: slideInLeft;"><img class="pull-right" src="http://111.118.212.248/cartersvilla/frontend/assets/images/feature1.png" /> <img class="pull-right" src="http://111.118.212.248/cartersvilla/frontend/assets/images/feature1.png" /></div>\r\n', NULL, '2016-12-15 13:46:16', '2016-12-19 21:16:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `creditapplication`
--

CREATE TABLE `creditapplication` (
  `id` int(10) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `appinfo_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_ssn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_curraddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_own_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_monthly_payment_or_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_how_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_own_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_monthly_payment_or_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `appinfo_previous_how_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_current_employer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_employer_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_how_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_hourly_salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_annual_income` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_first_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_middle_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_last_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_dob` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_ssn` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_curraddress` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_own_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_monthly_payment_or_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_how_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_own_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_monthly_payment_or_rent` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coappinfo_previous_how_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_current_employer` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_employer_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_how_long` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_e_mail` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_fax` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_zipcode` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_position` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_hourly_salary` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_annual_income` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ref_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ref_address` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `ref_phone` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cosigner_status` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `cosigner_status_co_app` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `emp_hourly_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `coemp_hourly_value` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `creditapplication`
--

INSERT INTO `creditapplication` (`id`, `created_at`, `updated_at`, `deleted_at`, `appinfo_first_name`, `appinfo_middle_name`, `appinfo_last_name`, `appinfo_dob`, `appinfo_ssn`, `appinfo_phone`, `appinfo_curraddress`, `appinfo_city`, `appinfo_state`, `appinfo_zipcode`, `appinfo_own_rent`, `appinfo_monthly_payment_or_rent`, `appinfo_how_long`, `appinfo_previous_address`, `appinfo_previous_city`, `appinfo_previous_state`, `appinfo_previous_zipcode`, `appinfo_previous_own_rent`, `appinfo_previous_monthly_payment_or_rent`, `appinfo_previous_how_long`, `emp_current_employer`, `emp_employer_address`, `emp_how_long`, `emp_phone`, `emp_e_mail`, `emp_fax`, `emp_city`, `emp_state`, `emp_zipcode`, `emp_position`, `emp_hourly_salary`, `emp_annual_income`, `coappinfo_first_name`, `coappinfo_middle_name`, `coappinfo_last_name`, `coappinfo_dob`, `coappinfo_ssn`, `coappinfo_phone`, `coappinfo_curraddress`, `coappinfo_city`, `coappinfo_state`, `coappinfo_zipcode`, `coappinfo_own_rent`, `coappinfo_monthly_payment_or_rent`, `coappinfo_how_long`, `coappinfo_previous_address`, `coappinfo_previous_city`, `coappinfo_previous_state`, `coappinfo_previous_zipcode`, `coappinfo_previous_own_rent`, `coappinfo_previous_monthly_payment_or_rent`, `coappinfo_previous_how_long`, `coemp_current_employer`, `coemp_employer_address`, `coemp_how_long`, `coemp_phone`, `coemp_e_mail`, `coemp_fax`, `coemp_city`, `coemp_state`, `coemp_zipcode`, `coemp_position`, `coemp_hourly_salary`, `coemp_annual_income`, `ref_name`, `ref_address`, `ref_phone`, `cosigner_status`, `cosigner_status_co_app`, `emp_hourly_value`, `coemp_hourly_value`) VALUES
(1, '2017-01-24 03:04:11', '2017-02-02 22:16:20', '2017-02-02 22:16:20', '1', '2', '3', '4', '5', '6', '7', '8', '9', '10', '11', '12', '13', '14', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', '25', '26', '27', '28', '29', '30', '31', '32', '33', '34', '35', '36', '37', '38', '39', '40', '41', '42', '43', '44', '45', '46', '47', '48', '49', '50', '51', '52', '53', '54', '55', '56', '57', '58', '59', '60', '61', '62', '63', '64', '65', '66', '67', '', '', '', ''),
(5, '2017-01-25 08:53:06', '2017-02-01 15:58:21', '2017-02-01 15:58:21', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(6, '2017-02-01 21:45:20', '2017-02-02 22:16:20', '2017-02-02 22:16:20', '1', '2', '3', '1899-12-07', '5', '6', '8', '9', '10', '11', 'Own', '12', '13', '14', '15', '16', '17', 'Rent', '18', '19', '15', '16', '17', '18', '19', '20', '21', '22', '23', '24', 'Hourly', '25', '27', '28', '29', '2017-02-02 03:12', '30', '31', '32', '33', '34', '35', 'Rent', '37', '38', '39', '40', '41', '42', 'Own', '43', '44', '50', '51', '55', '56', '57', '58', '59', '60', '61', '626', 'Hourly', '20000', 'demoname', 'addres', '2356986532', '', '', '', ''),
(7, '2017-02-02 15:05:55', '2017-02-02 22:16:20', '2017-02-02 22:16:20', '1', '2', '3', '4', '5', '7', '8', '5', '8', '5', 'Rent', '4', '5', '4', '5', '4', '5', 'Rent', '5', '4', '2', '5', '5', '5', '5', '5', '5', '5', '5', '5', 'Salary', '25', '2', '325', '5', '5665', '56', '56', '56', '5665', '56', '65', 'Rent', '65', '65', '65', '5656', '56', '565', 'Rent', '565', '56', '23', '56', '55', '656', '65', '5656', '56', '56', '65', '65', 'Salary', '56', '2356', '58', '989', '', '', '', ''),
(8, '2017-02-02 15:16:08', NULL, NULL, 'fname', 'mname', 'lname', '2017-02-02', 'ssn', '233565658', 'address', 'cityu', 'state', '235689', 'Own', 'paumentrent', '2 year', 'previous address', 'city', 'statecode', '326589', 'Own', '235698', '2year', 'cuurenntn empoyer', 'address', '2 year', '325689899', 'test@gmail,com', '236598', 'city', 'state', 'zipcode', '268925', 'Salary', '5000', 'fnameco', 'mco', 'lnco', '2017-02-02', '2356ssn', '23568956', 'addres cuussk j', 'city ', 'state', '21568', 'Rent', '3268923235', '2 year', 'previous address hai thi ', 'city hai', 'stateha', '236589', 'Own', '256200', '2 year', 'ccurrent emply', 'address', '2 year', '23658925', 'test@gmail.com', '32568956', 'city', 'state', '326589', '32636', 'Salary', '250', 'nameref', 'refaddress', '2365893565', '', '', '', ''),
(9, '2017-02-07 13:50:57', NULL, NULL, '1', '2', '3', '2017-02-07', '4', '5', '6', '7', '8', '9', 'Own', '1000', '10', '11', '12', '13', '14', 'Rent', '16', '18', '20', '21', '22', '23', '24', '25', '26', '27', '12', '25', 'Salary', '120', '1', '2', '5', '2017-02-11', '25', '23520', '124', '1244', '1215', '2335', 'Rent', '2011', '20', 'adedress', 'ct', 'st', '265', 'Rent', '21665', '3256', '', '', '', '', '', '', '', '', '', '', 'Salary', '', '1124', '121', '454', '', '', '', ''),
(10, '2017-02-07 14:10:17', NULL, NULL, '1', '2', '3', '4', '5', '7', '8', '9', '5', '2', 'Rent', '124', '5', '2', '5', '1', '26', 'Own', '22', '10', '2365', '6', '5', '5', '326', '1', '1212', '25', '454', '522', 'Hourly', '236', '25', '4', '12', '12', '1', '2', '41', '25', '4', '5', '', '2', '1', '21', '25', '2', '23', 'Own', '1', '2', '', '', '', '', '', '', '', '', '', '', 'Hourly', '', '25', '4', '2', '', '', '', ''),
(11, '2017-02-07 16:24:18', NULL, NULL, '1', '2', '3', '4', '5', '6', '7', '8', 'Iowa', '25', 'Own', '2', '6-12 Months', '2', '25', 'Iowa', '26', 'Own', '20', '0-6 months', '25', '6', '0-6 months', '1', '2', '25', '24', 'Alaska', '203', '25', 'Hourly', '100', '1', '2', '4', '4', '5', '2', '1', '1', 'Alaska', '12', 'Own', '545', '0-6 months', 'sssss', '25', 'Alaska', '552', 'Own', '120', '12-18 Months', '', '', '', '', '', '', '', '', '', '', '', '', '122', '12121', '221232', '', '', '', ''),
(12, '2017-02-07 16:28:53', NULL, NULL, '1', '2', '3', '4', '5', '6', '7', '8', 'Alaska', '2', 'Own', '20', '0-6 months', '2545', '21', 'Alabama', '25', 'Own', '121', '0-6 months', '125', '4121', '0-6 months', '1', '2', '12', '1', 'Indiana', '100', '120', 'Hourly', '125', '1', '2', '4', '2', '5', '4', '1', '2', 'Kentucky', '4', 'Own', '12445', '0-6 months', '25', '1254', 'Alaska', '25', 'Own', '212', '6-12 Months', '', '', '', '', '', '', '', '', '', '', '', '', '1', '24', '4', '', '', '', ''),
(13, '2017-02-07 17:21:28', NULL, NULL, '1', '2', '4', '5', '6', '4', '7', '7', 'Arizona', '99', 'Own', '2365', '0-6 months', '2365', '6', 'Illinois', '2365', 'Own', '2365', '6-12 Months', '326', '69', '12-18 Months', '235', '566', '56565', '65656', 'Indiana', '2365', '1254', 'Hourly', '326', '326', '64', '46', '4', '46546', '4546', '46', '12345', 'Indiana', '3264', 'Own', '1264', '0-6 months', '65', '134', 'Alabama', '545', 'Own', '4564', '0-6 months', '', '', '', '', '', '', '', '', '', '', '', '', '2164', '654', '64', 'off', '', '', ''),
(14, '2017-02-08 08:28:07', NULL, NULL, '1', '2', '4654', '546', '5465', '4654', '65', '4654', 'Alabama', '64654', 'Own', '0 - 500', 'More than 24 months', '', '', '', '', 'Own', '', '', '13', '654', '6-12 Months', '654', '654', '646', '546', '', '465', '464', 'Hourly', '654', '54', '789', '79', '46', '446', '546', '5', '546', 'Alaska', '465', 'Own', '501 - 1000', 'More than 24 months', '', '', '', '', 'Own', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '1654', '645', '64', 'off', '', '', ''),
(15, '2017-02-08 08:29:41', NULL, NULL, '1', '2', '3', '5', '6', '788', '98798', '9878', 'Alabama', '46465', 'Own', '501 - 1000', 'More than 24 months', '', '', '', '', 'Own', '', '', '654', '6465', '0-6 months', '546', '21313213', '131', '32132', 'Alabama', '132131', '321', 'Hourly', '113', '23136', '4654', '654', '64', '654', '64', '564', '654', 'California', '45445', 'Own', '0 - 500', 'More than 24 months', '', '', '', '', 'Own', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '14654', '64', '6546', 'off', '', '', ''),
(16, '2017-02-10 13:07:44', NULL, NULL, 'test', 'test', 'test', '2017-02-07', '35636356', '66666666', 'scscs', 'cscs', 'Kansas', '3434242', 'Own', '1001 -1500', 'More than 24 months', '', '', '', '', 'Own', '', '', 'fw', 'wfwfwfw', '', '231332', 'ee@yahoo.com', '87688687', 'fdfg', 'Idaho', '243r23', 'ghvnv', 'Hourly', '67787', '', '', '', '', '', '', '', '', '', '', 'Own', '', '', '', '', '', '', 'Own', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'test', 'test', '777777777', 'off', 'off', '', ''),
(17, '2017-02-10 14:20:30', NULL, NULL, 'Sanjeev', 'N', 'Naidu', '12/30/86', '000000000', '9', '2510 Woodrow Wilson', 'Herndon', 'Virginia', '20171', 'Own', '0 - 500', 'More than 24 months', '', '', '', '', 'Own', '', '', 'xyz corp', 'Blah', '0-6 months', '1', 'xyz@gmail.com', '12434', 'Herndon', 'Virginia', '20197', 'xyz', 'Hourly', '100000', '', '', '', '', '', '', '', '', '', '', 'Own', '', '', '', '', '', '', 'Own', '', '', '', '', '', '', '', '', '', '', '', '', '', '', 'xyz', '123-', '0', 'off', 'off', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `ctbodystyle`
--

CREATE TABLE `ctbodystyle` (
  `id` int(10) UNSIGNED NOT NULL,
  `bodystyle` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctbodystyle`
--

INSERT INTO `ctbodystyle` (`id`, `bodystyle`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Single', '2016-12-13 16:25:37', '2016-12-13 16:25:37', NULL),
(2, 'Dually', '2016-12-13 16:25:43', '2016-12-13 16:25:43', NULL),
(3, 'Flatbed', '2016-12-13 16:25:50', '2016-12-13 16:25:50', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctcarlisting`
--

CREATE TABLE `ctcarlisting` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctcarlisting`
--

INSERT INTO `ctcarlisting` (`id`, `text_field`, `email_field`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'text filed 1', '1@gmail.com', '2016-12-08 08:54:59', '2016-12-08 09:04:31', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctcarlisting2`
--

CREATE TABLE `ctcarlisting2` (
  `id` int(10) UNSIGNED NOT NULL,
  `text_field` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `long_text` text COLLATE utf8_unicode_ci,
  `long_text_ck` text COLLATE utf8_unicode_ci,
  `radio_btn` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `checkbox` tinyint(4) DEFAULT '1',
  `datepicker` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `datetimepicker` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctcarlisting_id` int(11) DEFAULT NULL,
  `file_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo_field` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `money_field` decimal(15,2) DEFAULT NULL,
  `enumfield` enum('1','0') COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctcarlisting2`
--

INSERT INTO `ctcarlisting2` (`id`, `text_field`, `email_field`, `long_text`, `long_text_ck`, `radio_btn`, `checkbox`, `datepicker`, `datetimepicker`, `ctcarlisting_id`, `file_field`, `photo_field`, `money_field`, `enumfield`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1', '2@gmail.com', '3', '<p>4</p>\r\n', '1,2,3', 1, '2016-12-13', '2016-12-13 00:00:00', 0, '1481631120-slide2.jpg', 'C:\\xampp\\tmp\\php869A.tmp', '12.00', '1', '2016-12-13 06:42:00', '2016-12-13 06:42:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctcartlist`
--

CREATE TABLE `ctcartlist` (
  `id` int(10) UNSIGNED NOT NULL,
  `ctcarlisting_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctcartlist`
--

INSERT INTO `ctcartlist` (`id`, `ctcarlisting_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 1, '2016-12-13 07:41:54', '2016-12-13 07:41:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctclientreview`
--

CREATE TABLE `ctclientreview` (
  `id` int(10) UNSIGNED NOT NULL,
  `client_name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctclientreview`
--

INSERT INTO `ctclientreview` (`id`, `client_name`, `image`, `message`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'auro navanth 1', '1481814090-client-feedback1.png', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.  ', 1, '2016-12-15 14:25:33', '2016-12-15 15:01:30', NULL),
(2, 'auro navanth 2', '1481814084-client-feedback1.png', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.  ', 1, '2016-12-15 14:25:51', '2016-12-15 15:01:24', NULL),
(3, 'auro navanth 3', '1481814078-client-feedback1.png', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.  ', 1, '2016-12-15 14:25:59', '2016-12-15 15:01:18', NULL),
(4, 'auro navanth 4', '1481813871-client-feedback1.png', 'Lorem Ipsum Lorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem IpsumLorem Ipsum.  ', 1, '2016-12-15 14:26:15', '2016-12-15 14:57:51', NULL),
(5, 'Sanjeev', '1481818764-1481814078-client-feedback1.png', 'Cartersvilla gives a wondorful services. I am very satisfied with their services. They tested everything before it is delivered to their any of the client . Thanks so much . ', 1, '2016-12-15 16:19:24', '2016-12-15 16:19:24', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctcolor`
--

CREATE TABLE `ctcolor` (
  `id` int(10) UNSIGNED NOT NULL,
  `color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctcolor`
--

INSERT INTO `ctcolor` (`id`, `color`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Beige', '2016-12-13 16:30:07', '2016-12-13 16:30:07', NULL),
(2, 'Black', '2017-02-11 11:00:09', '2017-02-11 11:00:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctcondition`
--

CREATE TABLE `ctcondition` (
  `id` int(10) UNSIGNED NOT NULL,
  `condition` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctcondition`
--

INSERT INTO `ctcondition` (`id`, `condition`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'New', '2016-12-13 16:14:25', '2016-12-13 16:14:25', NULL),
(2, 'Used', '2016-12-13 16:14:30', '2016-12-13 16:14:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctexteriorcolor`
--

CREATE TABLE `ctexteriorcolor` (
  `id` int(10) UNSIGNED NOT NULL,
  `exterior_color` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctexteriorcolor`
--

INSERT INTO `ctexteriorcolor` (`id`, `exterior_color`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Black', '2017-02-11 11:00:18', '2017-02-11 11:00:18', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctfeatures`
--

CREATE TABLE `ctfeatures` (
  `id` int(10) UNSIGNED NOT NULL,
  `feature` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctfeatures`
--

INSERT INTO `ctfeatures` (`id`, `feature`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Air conditioning', '2016-12-13 16:14:52', '2016-12-13 16:14:52', NULL),
(2, 'Alloy wheels', '2016-12-13 16:14:58', '2016-12-13 16:14:58', NULL),
(3, 'Bluetooth', '2016-12-13 16:15:03', '2016-12-13 16:15:03', NULL),
(4, 'Remote central locking', '2016-12-13 16:15:09', '2016-12-13 16:15:09', NULL),
(5, 'Cruise control', '2016-12-13 16:15:14', '2016-12-13 16:15:14', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctfueltype`
--

CREATE TABLE `ctfueltype` (
  `id` int(10) UNSIGNED NOT NULL,
  `fuel_type` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctfueltype`
--

INSERT INTO `ctfueltype` (`id`, `fuel_type`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Petrol', '2016-12-13 16:26:13', '2016-12-13 16:26:13', NULL),
(2, 'Diesal', '2016-12-13 16:26:19', '2016-12-13 16:26:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctmake`
--

CREATE TABLE `ctmake` (
  `id` int(10) UNSIGNED NOT NULL,
  `make` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctmake`
--

INSERT INTO `ctmake` (`id`, `make`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Abarth', '2016-12-13 16:24:05', '2016-12-19 15:34:13', '2016-12-19 15:34:13'),
(2, 'Alfa Romeo', '2016-12-13 16:24:12', '2016-12-19 15:34:17', '2016-12-19 15:34:17'),
(3, 'FORD', '2016-12-13 16:24:33', '2017-02-10 21:30:45', NULL),
(4, 'GMC', '2016-12-13 16:24:40', '2016-12-13 16:24:40', NULL),
(5, 'RAM', '2016-12-13 16:24:46', '2017-02-10 21:30:27', '2017-02-10 21:30:27'),
(6, 'DODGE/RAM', '2016-12-13 16:24:52', '2017-02-10 19:56:34', NULL),
(7, 'CHEVROLET', '2016-12-13 16:24:58', '2017-02-10 21:30:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctmodels`
--

CREATE TABLE `ctmodels` (
  `id` int(10) UNSIGNED NOT NULL,
  `ctmake_id` int(11) NOT NULL,
  `model` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctmodels`
--

INSERT INTO `ctmodels` (`id`, `ctmake_id`, `model`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 3, '124', '2016-12-13 16:26:57', '2016-12-20 17:25:02', NULL),
(2, 3, '500', '2016-12-13 16:28:07', '2016-12-20 17:25:07', NULL),
(3, 6, '2500 Cummins 5.9L SLT', '2017-02-11 10:56:29', '2017-02-11 10:56:29', NULL),
(4, 3, 'xyz', '2017-02-12 02:44:24', NULL, NULL),
(5, 3, 'xyz', '2017-02-12 02:51:13', '2017-02-12 02:51:13', NULL),
(6, 3, 'xyz', '2017-02-12 02:51:41', '2017-02-12 02:51:41', NULL),
(7, 3, 'xyz', '2017-02-12 02:52:14', '2017-02-12 02:52:14', NULL),
(8, 3, 'xyz', '2017-02-12 02:53:02', '2017-02-12 02:53:02', NULL),
(9, 3, 'xyz', '2017-02-12 02:53:14', '2017-02-12 02:53:14', NULL),
(10, 3, 'modelother1', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(11, 7, 'modelother2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(12, 7, '123', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(13, 7, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ctregistered`
--

CREATE TABLE `ctregistered` (
  `id` int(10) UNSIGNED NOT NULL,
  `year` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ctregistered`
--

INSERT INTO `ctregistered` (`id`, `year`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1999', '2016-12-13 16:23:35', '2016-12-13 16:23:35', NULL),
(2, '2000', '2016-12-13 16:23:42', '2016-12-13 16:23:42', NULL),
(3, '2001', '2016-12-13 16:23:47', '2016-12-13 16:23:47', NULL),
(4, '2002', '2016-12-13 16:23:53', '2016-12-13 16:23:53', NULL),
(5, '2003', '2016-12-13 16:24:00', '2016-12-13 16:24:00', NULL),
(6, '2004', '2017-02-11 10:57:57', '2017-02-11 10:57:57', NULL),
(7, '2005', '2017-02-11 10:58:05', '2017-02-11 10:58:05', NULL),
(8, '2006', '2017-02-11 10:58:11', '2017-02-11 10:58:11', NULL),
(9, '2007', '2017-02-11 10:58:18', '2017-02-11 10:58:18', NULL),
(10, '2008', '2017-02-11 10:58:24', '2017-02-11 10:58:24', NULL),
(11, '2009', '2017-02-11 10:58:33', '2017-02-11 10:58:33', NULL),
(12, '2010', '2017-02-11 10:58:41', '2017-02-11 10:58:41', NULL),
(13, '2011', '2017-02-11 10:58:47', '2017-02-11 10:58:47', NULL),
(14, '2012', '2017-02-11 10:58:55', '2017-02-11 10:58:55', NULL),
(15, '2014', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(16, '2017', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(17, '2019', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(18, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cttransmission`
--

CREATE TABLE `cttransmission` (
  `id` int(10) UNSIGNED NOT NULL,
  `transmission` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cttransmission`
--

INSERT INTO `cttransmission` (`id`, `transmission`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Automatic', '2017-02-11 10:59:35', '2017-02-11 10:59:35', NULL),
(2, 'Manual', '2017-02-11 10:59:42', '2017-02-11 10:59:42', NULL),
(3, 'transother01', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(4, 'transother2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(5, 'asdf', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(6, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cttrucklisting`
--

CREATE TABLE `cttrucklisting` (
  `id` int(10) UNSIGNED NOT NULL,
  `ctcondition_id` int(11) NOT NULL,
  `features` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctmake_id` int(11) NOT NULL,
  `ctmodels_id` int(11) NOT NULL,
  `variant` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctregistered_id` int(11) DEFAULT NULL,
  `registration` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `previous_owners` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `fuel_consumption` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_band` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `tax_cost` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `ctcolor_id` int(11) DEFAULT NULL,
  `ctexteriorcolor_id` int(11) DEFAULT NULL,
  `doors` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctfueltype_id` int(11) DEFAULT NULL,
  `ctbodystyle_id` int(11) DEFAULT NULL,
  `mileage` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `engine_size_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cttransmission_id` int(11) DEFAULT NULL,
  `seating_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `video` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `featured` int(11) NOT NULL,
  `show_gallery` int(11) NOT NULL,
  `vin` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `stock_auto` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `drive_train` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `price_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_4` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `price_5` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `features_2` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `features_3` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gas_mileage_city` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `gas_mileage_highway` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `seo_url` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `horsepower_id` int(11) NOT NULL DEFAULT '0',
  `torque_id` int(11) NOT NULL DEFAULT '0',
  `drivetrain_id` int(11) NOT NULL DEFAULT '0',
  `weight` int(11) NOT NULL DEFAULT '0',
  `max_towing_capacity` varchar(11) COLLATE utf8_unicode_ci DEFAULT NULL,
  `v_id` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `cttrucklisting`
--

INSERT INTO `cttrucklisting` (`id`, `ctcondition_id`, `features`, `ctmake_id`, `ctmodels_id`, `variant`, `ctregistered_id`, `registration`, `previous_owners`, `fuel_consumption`, `tax_band`, `tax_cost`, `price`, `ctcolor_id`, `ctexteriorcolor_id`, `doors`, `ctfueltype_id`, `ctbodystyle_id`, `mileage`, `engine_size_id`, `cttransmission_id`, `seating_id`, `image`, `video`, `location`, `description`, `featured`, `show_gallery`, `vin`, `stock_auto`, `drive_train`, `price_2`, `price_3`, `price_4`, `price_5`, `features_2`, `features_3`, `gas_mileage_city`, `gas_mileage_highway`, `seo_url`, `horsepower_id`, `torque_id`, `drivetrain_id`, `weight`, `max_towing_capacity`, `v_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 0, '1', 1, 1, '2', 0, '3', '4', '5', '6', '7', 8, NULL, NULL, '9', 0, 0, '12', '13', 0, '14', '1481640106-slide1.jpg', '15', '16', '<p>dad</p>\r\n', 0, 0, '', '', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-13 09:11:03', '2016-12-13 15:20:21', '2016-12-13 15:20:21'),
(2, 1, 'Tier 1 features 1,Tier 1 features 2,Tier 1 features 3,Tier 1 features 4,Tier 1 features 5,Tier 1 features 6,Tier 1 features 7,Tier 1 features 8', 3, 1, 'variant', 1, 'Registration', 'Previous Owners 2', 'Fuel Consumption 500', '221', '32', 5000, 1, 0, '4', 1, 2, '400', '500 engine', 0, '4', '1483609186-1482251635-truck_1.png', '', '', '<p>description</p>\r\n', 1, 0, 'vin001', 'stock001', 'drivetranin', '4000', '3000', '2000', '1000', 'Tier 2 features 1,Tier 2 features 2', 'Tier 3 features 1,Tier 3 features 2,Tier 3 features 3', 'Gas Mileage City 1', 'Gas mileage Highway 2', 'abarth-1', 0, 0, 0, 0, '0', NULL, '2016-12-13 11:16:18', '2017-01-05 09:39:47', NULL),
(3, 1, '120', 7, 0, NULL, 1, NULL, '110', NULL, NULL, NULL, 60, 1, 0, NULL, NULL, 1, '30', '40', 0, NULL, '1483609173-1482251848-truck_2.png', '', NULL, '', 1, 1, 'vin002', '20', '50', '70', '80', '90', '100', '130', '140', '150', '160', '', 0, 0, 0, 0, '0', NULL, '2016-12-14 08:15:47', '2017-02-11 11:19:01', NULL),
(4, 1, '121', 3, 2, NULL, 1, NULL, '2', NULL, NULL, NULL, 10, 1, 0, NULL, NULL, 1, '100', '250', 0, NULL, '1483609135-1482253057-truck_3.png', '', NULL, '', 1, 1, 'vin003', '', '25', '100', '20', '30', '40', '25', '25', '88', '15', '', 0, 0, 0, 0, '0', NULL, '2016-12-15 07:55:36', '2017-01-05 09:38:56', NULL),
(5, 2, 'Leather Seats,Alloy Wheels,Traction Control,Front Seat Heaters,Rear Spoiler,Cruise Control', 4, 2, NULL, 2, NULL, '', NULL, NULL, NULL, 19500, 0, 0, NULL, NULL, 2, '100', '', 0, NULL, '1483609102-1482253343-truck_1.png', '', NULL, '', 0, 0, 'vin004', '922227', '', '', '', '', '', '2WD,Cruise Control,Preferred Package,Manual Transmission', 'Power Mirrors,Traction Control,CD Audio,Side Airbags', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-15 08:00:57', '2017-01-05 09:38:23', NULL),
(6, 2, '', 3, 2, NULL, 3, NULL, '', NULL, NULL, NULL, 10, 1, 0, NULL, NULL, 1, '100', '250', 0, NULL, '1483609077-1482253387-truck_2.png', 'https://www.youtube.com/watch?v=Eq46G9VxKAE', NULL, '<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>\r\n', 0, 0, 'vin005', '459476', '25', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-15 08:02:26', '2017-01-05 09:37:58', NULL),
(7, 0, '', 1, 0, NULL, 0, NULL, '', NULL, NULL, NULL, 0, 0, 0, NULL, NULL, NULL, '', '', 0, NULL, NULL, NULL, NULL, NULL, 0, 0, '', '603582', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-17 16:11:13', '2016-12-17 16:11:27', '2016-12-17 16:11:27'),
(8, 1, '', 3, 1, NULL, 2, NULL, '', NULL, NULL, NULL, 1002, 1, 0, NULL, NULL, 0, '', '', 0, NULL, '1483609044-1482253502-truck_3.png', '', NULL, '', 1, 1, 'vin006', '608325', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 09:37:17', '2017-01-05 09:37:25', NULL),
(9, 1, '', 3, 1, NULL, 0, NULL, '', NULL, NULL, NULL, 2530, 0, 0, NULL, NULL, 1, '', '', 0, NULL, '1483609023-1482254772-truck_4.png', '', NULL, '', 0, 1, 'vin007', '763589', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 17:26:13', '2017-01-05 09:37:03', NULL),
(10, 1, '', 3, 1, NULL, 2, NULL, '', NULL, NULL, NULL, 5690, 1, 0, NULL, NULL, 2, '', '', 0, NULL, '1483609002-1482255584-truck_5.png', 'https://www.youtube.com/watch?v=Eq46G9VxKAE', NULL, '<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>\r\n', 0, 1, 'vin008', '957542', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 17:37:21', '2017-01-05 10:02:58', NULL),
(11, 2, '', 3, 1, NULL, 1, NULL, '', NULL, NULL, NULL, 6963, 1, 0, NULL, NULL, 1, '', '', 0, NULL, '1483608985-1482255774-truck_6.png', 'https://www.youtube.com/watch?v=Eq46G9VxKAE', NULL, '<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>\r\n', 0, 1, 'vin009', '325140', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 17:40:48', '2017-01-05 09:36:25', NULL),
(12, 2, '', 3, 2, NULL, 1, NULL, '', NULL, NULL, NULL, 6963, 1, 0, NULL, NULL, 1, '', '', 0, NULL, '1483608955-1482256180-truck_7.png', '', NULL, '', 1, 1, 'vin010', '660679', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 17:46:15', '2017-01-05 10:02:19', NULL),
(13, 2, '', 3, 1, NULL, 1, NULL, '', NULL, NULL, NULL, 5696, 0, 0, NULL, NULL, 2, '', '', 0, NULL, '1483608924-1482258846-slide2.jpg', '', NULL, '', 0, 0, 'vin011', '139684', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 18:32:39', '2017-01-05 09:35:24', NULL),
(14, 2, '', 3, 2, NULL, 1, NULL, '', NULL, NULL, NULL, 4563, 1, 0, NULL, NULL, 2, '', '', 0, NULL, '1483608904-1482348496-carousal13.jpg', '', NULL, '', 0, 0, 'vin012', '598894', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-20 18:33:21', '2017-01-05 09:35:05', NULL),
(15, 2, '', 3, 1, NULL, 1, NULL, '', NULL, NULL, NULL, 4587, 0, 0, NULL, NULL, 1, '', '', 0, NULL, '1483608885-1482348358-carousal1.png', '', NULL, '', 0, 0, 'vin013', '993778', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-21 19:25:58', '2017-01-05 09:34:45', NULL),
(16, 2, '', 3, 2, NULL, 3, NULL, '', NULL, NULL, NULL, 9658, 0, 0, NULL, NULL, 2, '', '', 0, NULL, '1483608866-1482348402-carousal3.png', '', NULL, '', 0, 0, 'vin014', '992490', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-21 19:26:42', '2017-01-05 09:34:26', NULL),
(17, 2, '', 3, 2, NULL, 3, NULL, '', NULL, NULL, NULL, 4587, 1, 0, NULL, NULL, 3, '123', '', 0, NULL, '1483608838-1482348478-truck.jpg', 'https://www.youtube.com/watch?v=Eq46G9VxKAE', NULL, '<p>Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum Lorem ipsum.</p>\r\n', 0, 0, 'vin015', '821755', '', '', '', '', '', '', '', '', '', '', 0, 0, 0, 0, '0', NULL, '2016-12-21 19:27:59', '2017-01-05 09:33:59', NULL),
(18, 1, 'new car, best engine , automatic', 6, 3, NULL, 10, NULL, 'abcd', NULL, NULL, NULL, 4900, 1, 1, NULL, NULL, 3, '15', 'abcd', 1, NULL, '1486786320-46b1f50e502522aefba63cad3406a9ddx.jpg', '', NULL, '', 0, 0, '', '644692', 'abcd', '5000', '5000', '1000', '1000', 'new car, best engine , automatic', 'new car, best engine , automatic', 'doon', 'doon', 'bestcar', 0, 0, 0, 0, '0', NULL, '2017-02-11 11:12:00', '2017-02-11 11:12:00', NULL),
(19, 1, '121542', 3, 1, NULL, 1, NULL, '12', NULL, NULL, NULL, 1000, 1, 1, NULL, NULL, 1, '12356', '1', 1, NULL, NULL, '', NULL, '<p>sss</p>\r\n', 0, 0, '123456', '699185', '1254', '200', '3300', '400', '120', '12', '1212', '21', '121', 'test', 0, 0, 0, 0, '0', NULL, '2017-02-12 13:52:33', '2017-02-12 05:06:43', NULL),
(20, 1, '9', 3, 1, NULL, 1, NULL, '6', NULL, NULL, NULL, 1000, 1, 1, NULL, NULL, 1, '12000', '1', 1, '1', '1486901162-1482616196-feature4.png', 'vvv', NULL, '<p>desc</p>\r\n', 0, 0, 'CT_F199_1.7', '847757', NULL, '1', '2', '3', '45', '8', '1', '12', '11', 'rwwstest', 1, 1, 1, 100055555, '25001544', NULL, '2017-02-12 06:36:03', '2017-02-12 06:36:03', NULL),
(21, 1, '11', 3, 1, NULL, 1, NULL, '10', NULL, NULL, NULL, 4, 1, 1, NULL, NULL, 1, '3', '1', 1, '1', '1486915729-1482616152-carousal3.png', 'youtube.com', NULL, '<p>hi this is description</p>\r\n', 1, 0, '', '598354', NULL, '5', '6', '8', '9', '12', '13', '14', '15', 'testurl', 1, 1, 1, 1, '2', 'CT_F199_1.7', '2017-02-12 10:38:51', '2017-02-12 10:38:51', NULL),
(22, 2, '4', 3, 10, NULL, 15, NULL, '545', NULL, NULL, NULL, 12121, 1, 1, NULL, NULL, 1, 'asdf', '3', 3, '3', '1486916892-1482616292-carousal1.png', '', NULL, '<p>sss</p>\r\n', 0, 0, '12154dd', '420963', NULL, '15', '54', '254', '454', '11', '132', '13', '12312', 'ttest', 2, 1, 2, 1, '2asfasd', 'CT_Fm14_2', '2017-02-12 10:58:13', '2017-02-12 16:03:50', NULL),
(23, 2, '', 7, 13, NULL, 18, NULL, '', NULL, NULL, NULL, 23155, 0, 0, NULL, NULL, 0, '212', '5', 6, '6', NULL, '', NULL, '', 0, 0, '1', '307971', NULL, '', '', '', '', '', '', '', '', '', 6, 6, 5, 231, '', 'CT_Ceit_001', '2017-02-12 16:06:07', '2017-02-12 16:09:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `drivetrain`
--

CREATE TABLE `drivetrain` (
  `id` int(10) UNSIGNED NOT NULL,
  `drivetrain` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `drivetrain`
--

INSERT INTO `drivetrain` (`id`, `drivetrain`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Drivetrain 1', '2017-02-12 05:47:39', '2017-02-12 05:47:39', NULL),
(2, 'drivohter01', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(3, 'drive_otherother2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(4, '2365', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(5, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `enginesize`
--

CREATE TABLE `enginesize` (
  `id` int(10) UNSIGNED NOT NULL,
  `engine_size` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `enginesize`
--

INSERT INTO `enginesize` (`id`, `engine_size`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1.7 lt', '2017-02-12 05:03:26', '2017-02-12 05:03:26', NULL),
(2, 'Engine2.7', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(3, 'engineother2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(4, '2.6 lt', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(5, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footersetting`
--

CREATE TABLE `footersetting` (
  `id` int(10) UNSIGNED NOT NULL,
  `footer_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `copyright` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `footer_left_con_title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `footer_left_con` longtext COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `footersetting`
--

INSERT INTO `footersetting` (`id`, `footer_logo`, `copyright`, `footer_left_con_title`, `footer_left_con`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1481833576-footerapp.png', 'Copyright © CartersvillaTruck', 'ABOUT US', '<p><img alt="" src="http://cartersvilletrucks.com/beta/public/uploads/1483115643-1483114494-logo1.png" style="height:120px" /></p>\r\n\r\n<p>&nbsp;</p>\r\n', '2016-12-15 20:26:16', '2017-02-02 10:10:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `headersetting`
--

CREATE TABLE `headersetting` (
  `id` int(10) UNSIGNED NOT NULL,
  `header_logo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `opening_hour` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `call_now` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gmail` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `facebook` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `twitter` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `youtube` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `headersetting`
--

INSERT INTO `headersetting` (`id`, `header_logo`, `opening_hour`, `call_now`, `gmail`, `facebook`, `twitter`, `youtube`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '1483115643-1483114494-logo1.png', '9-6pm Mon – Sat', '(470) 315-4174', 'cartersvilletrucks', 'cartersvilletrucks', 'cartersvilletrucks', 'cartersvilletrucks', '2016-12-15 20:24:59', '2017-02-08 00:36:19', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `homesetting`
--

CREATE TABLE `homesetting` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `imageone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `imagetwo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `homesetting`
--

INSERT INTO `homesetting` (`id`, `title`, `content`, `imageone`, `imagetwo`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'why choose <span class="carterviltruck-color">cartersvilletruck</span> ?', '<ul>\r\n	<li>Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</li>\r\n	<li>Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsum</li>\r\n	<li>sed ut perspiciatis unde omnis iste</li>\r\n	<li>nature error sit voluptatem accusantium</li>\r\n	<li>eaque ipsa quae ab illo inventore</li>\r\n</ul>\r\n', '1482182218-feature1.png', '1482182298-feature1.png', '2016-12-19 21:15:52', '2016-12-19 21:26:09', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `horsepower`
--

CREATE TABLE `horsepower` (
  `id` int(10) UNSIGNED NOT NULL,
  `horsepower` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `horsepower`
--

INSERT INTO `horsepower` (`id`, `horsepower`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'hp1', '2017-02-12 05:47:29', '2017-02-12 05:47:29', NULL),
(2, 'hpother1', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(3, '', '2017-02-12 03:32:50', '2017-02-12 03:32:50', NULL),
(4, 'horseother2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(5, 'htp 001', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(6, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `maxseating`
--

CREATE TABLE `maxseating` (
  `id` int(10) UNSIGNED NOT NULL,
  `seating` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `maxseating`
--

INSERT INTO `maxseating` (`id`, `seating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '2', '2017-02-12 06:21:48', '2017-02-12 06:21:48', NULL),
(2, '3', '2017-02-12 06:21:55', '2017-02-12 06:21:55', NULL),
(3, 'othermax', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(4, 'maxseating_other2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(5, 'adf', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(6, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(10) UNSIGNED NOT NULL,
  `position` int(11) DEFAULT NULL,
  `menu_type` int(11) NOT NULL DEFAULT '1',
  `icon` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `position`, `menu_type`, `icon`, `name`, `title`, `parent_id`, `created_at`, `updated_at`) VALUES
(1, NULL, 0, NULL, 'User', 'User', NULL, NULL, NULL),
(2, NULL, 0, NULL, 'Role', 'Role', NULL, NULL, NULL),
(6, 1, 2, 'fa-database', 'CarSetting', 'Car Setting', NULL, '2016-12-11 05:53:41', '2016-12-17 20:45:08'),
(7, 0, 1, 'fa-database', 'CtMake', 'Make', 11, '2016-12-11 05:54:29', '2016-12-13 07:50:13'),
(9, 0, 1, 'fa-database', 'CtModels', 'Models', 11, '2016-12-11 08:23:31', '2016-12-13 07:53:42'),
(11, 2, 2, 'icon-grid', 'TruckSetting', 'Truck Setting', NULL, '2016-12-13 07:44:43', '2016-12-17 20:45:08'),
(12, 0, 1, 'fa-database', 'Ctcondition', 'Condition', 11, '2016-12-13 07:46:18', '2016-12-13 07:46:18'),
(13, 0, 1, 'fa-database', 'Ctfeatures', 'Features', 11, '2016-12-13 07:48:41', '2016-12-13 07:48:41'),
(14, 0, 1, 'fa-database', 'Ctregistered', 'Registered Year', 11, '2016-12-13 07:55:50', '2016-12-13 07:55:50'),
(15, 0, 1, 'fa-database', 'Ctcolor', 'Color', 11, '2016-12-13 07:56:28', '2016-12-13 07:56:28'),
(16, 0, 1, 'fa-database', 'Ctexteriorcolor', 'Exterior Color', 11, '2016-12-13 07:57:52', '2016-12-13 07:57:52'),
(17, 0, 1, 'fa-database', 'Ctfueltype', 'Fuel Type', 11, '2016-12-13 07:58:34', '2016-12-13 07:58:34'),
(18, 0, 1, 'fa-database', 'Ctbodystyle', 'Body Style', 11, '2016-12-13 07:59:13', '2016-12-13 07:59:13'),
(19, 0, 1, 'fa-database', 'Cttransmission', 'Transmission', 11, '2016-12-13 07:59:55', '2016-12-13 07:59:55'),
(20, 3, 1, 'icon-grid', 'CtTrucklisting', 'Truck Listing', NULL, '2016-12-13 08:51:54', '2016-12-17 20:45:08'),
(21, 10, 2, 'icon-settings', 'Setting', 'Setting', NULL, '2016-12-15 05:19:22', '2017-02-12 04:33:21'),
(23, 0, 1, 'fa-database', 'Content', 'Content Setting', 21, '2016-12-15 13:45:13', '2016-12-15 20:19:19'),
(24, 5, 1, 'icon-user', 'CtClientReview', 'Client Review', NULL, '2016-12-15 14:24:10', '2016-12-17 20:45:08'),
(25, 0, 1, 'fa-database', 'Headersetting', 'Header Setting', 21, '2016-12-15 20:23:05', '2016-12-15 20:23:05'),
(26, 0, 1, 'fa-database', 'FooterSetting', 'Footer Setting', 21, '2016-12-15 20:24:27', '2016-12-15 20:24:27'),
(27, 0, 1, 'fa-database', 'Pagesetting', 'Page Setting', 21, '2016-12-15 20:34:55', '2016-12-15 20:34:55'),
(28, 4, 1, ' icon-user', 'Ourteam', 'Our Team', NULL, '2016-12-17 20:44:15', '2016-12-17 20:45:08'),
(29, 0, 1, 'icon-call', 'Contactsetting', 'Contact Setting', 21, '2016-12-17 21:15:05', '2016-12-17 21:15:54'),
(30, 8, 1, 'icon-envelope', 'Usercontact', 'User Contact', NULL, '2016-12-17 22:28:03', '2017-02-02 05:45:04'),
(31, 0, 1, 'fa-database', 'Homesetting', 'Homepage Setting', 21, '2016-12-19 21:14:47', '2016-12-19 21:14:47'),
(32, 6, 1, 'fa-database', 'CreditApplication', 'Credit Application', NULL, '2017-01-24 08:33:18', '2017-02-02 05:45:04'),
(33, 7, 1, 'fa-database', 'AppointmentSchedule', 'Appointment Schedule', NULL, '2017-01-31 12:07:56', '2017-02-02 05:45:03'),
(34, 11, 1, 'fa-database', 'Suffix', 'Suffix', 21, '2017-02-02 05:46:00', '2017-02-12 04:33:31'),
(35, 9, 1, 'fa-database', 'TestDrive', 'Test Drive', NULL, '2017-02-02 08:39:11', '2017-02-12 04:33:21'),
(36, 0, 1, 'fa-database', 'EngineSize', 'Engine Size', 11, '2017-02-12 04:21:00', '2017-02-12 04:21:00'),
(38, NULL, 1, 'fa-database', 'Horsepower', 'Horse Power', 11, '2017-02-12 05:27:57', '2017-02-12 05:27:57'),
(39, NULL, 1, 'fa-database', 'Torque', 'Torque', 11, '2017-02-12 05:28:57', '2017-02-12 05:28:57'),
(40, NULL, 1, 'fa-database', 'Drivetrain', 'Drivetrain', 11, '2017-02-11 18:30:00', '2017-02-11 18:30:00'),
(41, NULL, 1, 'fa-database', 'MaxSeating', 'Max Seating', 11, '2017-02-11 18:30:00', '2017-02-11 18:30:00');

-- --------------------------------------------------------

--
-- Table structure for table `menu_role`
--

CREATE TABLE `menu_role` (
  `menu_id` int(10) UNSIGNED NOT NULL,
  `role_id` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu_role`
--

INSERT INTO `menu_role` (`menu_id`, `role_id`) VALUES
(7, 1),
(9, 1),
(11, 1),
(12, 1),
(13, 1),
(14, 1),
(15, 1),
(16, 1),
(17, 1),
(18, 1),
(19, 1),
(20, 1),
(21, 1),
(23, 1),
(24, 1),
(25, 1),
(26, 1),
(27, 1),
(28, 1),
(29, 1),
(30, 1),
(31, 1),
(32, 1),
(33, 1),
(33, 2),
(34, 1),
(34, 2),
(35, 1),
(35, 2),
(36, 1),
(36, 2),
(38, 1),
(38, 2),
(39, 1),
(39, 2),
(40, 1),
(40, 2),
(41, 1),
(41, 2);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2015_10_10_000000_create_menus_table', 1),
(4, '2015_10_10_000000_create_roles_table', 1),
(5, '2015_10_10_000000_update_users_table', 1),
(6, '2015_12_11_000000_create_users_logs_table', 1),
(7, '2016_03_14_000000_update_menus_table', 1),
(8, '2016_12_08_141238_create_ct_carlisting_table', 2),
(9, '2016_12_08_142003_create_ct_carlisting2_table', 3),
(10, '2016_12_08_143147_create_testtbl_table', 4),
(11, '2016_12_11_112429_create_ct_make_table', 5),
(12, '2016_12_11_112631_create_ct_model_table', 6),
(13, '2016_12_11_135331_create_ct_models_table', 7),
(14, '2016_12_13_131134_create_ct_cartlist_table', 8),
(15, '2016_12_13_131619_create_ctcondition_table', 9),
(16, '2016_12_13_131843_create_ctfeatures_table', 10),
(17, '2016_12_13_132550_create_ctregistered_table', 11),
(18, '2016_12_13_132628_create_ctcolor_table', 12),
(19, '2016_12_13_132752_create_ctexteriorcolor_table', 13),
(20, '2016_12_13_132834_create_ctfueltype_table', 14),
(21, '2016_12_13_132913_create_ctbodystyle_table', 15),
(22, '2016_12_13_132955_create_cttransmission_table', 16),
(23, '2016_12_13_142154_create_ct_trucklisting_table', 17),
(24, '2016_12_15_105309_create_page_settting_table', 18),
(25, '2016_12_15_134513_create_content_table', 19),
(26, '2016_12_15_142410_create_ct_client_review_table', 20),
(27, '2016_12_15_202305_create_headersetting_table', 21),
(28, '2016_12_15_202427_create_footer_setting_table', 22),
(29, '2016_12_15_203455_create_pagesetting_table', 23),
(30, '2016_12_17_204415_create_ourteam_table', 24),
(31, '2016_12_17_211505_create_contactsetting_table', 25),
(32, '2016_12_17_222803_create_usercontact_table', 26),
(33, '2016_12_19_211447_create_homesetting_table', 27);

-- --------------------------------------------------------

--
-- Table structure for table `ourteam`
--

CREATE TABLE `ourteam` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8_unicode_ci,
  `status` tinyint(4) DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `ourteam`
--

INSERT INTO `ourteam` (`id`, `name`, `image`, `designation`, `description`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'MUHHIBBUR RASHID', '1482007569-meet-tam.png', 'Engine Specialist', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem.', 1, '2016-12-17 20:45:34', '2016-12-17 20:46:09', NULL),
(2, 'MUHHIBBUR RASHID 2', '1482007730-meet-tam.png', 'Engine Specialist', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem.', 1, '2016-12-17 20:48:50', '2016-12-17 20:48:50', NULL),
(3, 'MUHHIBBUR RASHID 3', '1482007749-meet-tam.png', 'Engine Specialist', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem.', 1, '2016-12-17 20:49:09', '2016-12-17 20:49:09', NULL),
(4, 'MUHHIBBUR RASHID 6', '1482007771-meet-tam.png', 'Engine Specialist', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem.', 1, '2016-12-17 20:49:31', '2016-12-17 20:50:55', NULL),
(5, 'MUHHIBBUR RASHID 5', '1482007811-meet-tam.png', 'Engine Specialist..', 'Lorem ipsum Lorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem ipsumLorem.', 0, '2016-12-17 20:50:11', '2016-12-17 21:04:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagesetting`
--

CREATE TABLE `pagesetting` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `seo_url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pagesetting`
--

INSERT INTO `pagesetting` (`id`, `title`, `image`, `content`, `seo_url`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'ABOUT US', '1481834188-background-black-car.png', '\r\n    <div class="col-md-6">\r\n         <img src="http://111.118.212.248/cartersvilla/frontend/assets/images/about-us.png">\r\n    </div>\r\n    <div class="col-md-6">\r\n        <h3 class="heading">welcome to cartervilletrucks</h3>\r\n        <p class="about-us-information">Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum rgb(149, 149, 149)rgb(149, 149, 149)rgb(149, 149, 149) </p>\r\n        <p class="about-information">\r\n            Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum Lorum Ipsum.\r\n        </p>\r\n    </div>\r\n    <div class="col-md-6">\r\n        <h3 class="heading">why choose us</h3>\r\n        \r\n        <p class="about-information">\r\n            Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum  Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum Lorum Ipsum  Lorum.\r\n        </p>\r\n        <ul class="about-list">\r\n            <span>✔</span><li>Loreum ipsum Loreum ipsum  Loreum ipsum Loreum ipsum</li>\r\n            <span>✔</span><li> Loreum ipsum Loreum ipsum  Loreum ipsum Loreum ipsum</li>\r\n            <span>✔</span><li> Loreum ipsum Loreum ipsum  Loreum ipsum Loreum ipsum Loreum ipsum Loreum ipsum  Loreum ipsum Loreum ipsum</li>\r\n            <span>✔</span><li> Loreum ipsum Loreum ipsum  Loreum ipsum Loreum ipsum</li>\r\n        </ul>\r\n    </div>\r\n    <div class="col-md-6">\r\n         <img src="http://111.118.212.248/cartersvilla/frontend/assets/images/about-us.png">\r\n    </div>', 'aboutus', '2016-12-15 20:36:29', '2016-12-15 22:54:33', NULL),
(2, 'FINANCING', NULL, '<div class="text-center"><img alt="" src="public/uploads/1483115643-1483114494-logo1.png" style="height:150px; width:auto" /></div>\r\n\r\n<p>We at Cartersville Trucks make every effort to assist our customers in purchase their diesel truck. Cartersville Trucks also understands and appreciates that financing a vehicle can often be an overwhelming and scary process for some of our customers.</p>\r\n\r\n<p>Although Cartersville Trucks is not a banking or financial institution and we do not offer dealership based financing optionsfor any of our vehicles, we are very much committed to assisting customers in locating financing options through one of the many lenders we have developed strong relationships. Cartersville Trucks network of lenders include credit unions, banks, and auto finance institutions who offer innovative and proven financing options at very competitive interest rates.</p>\r\n\r\n<h3>Financing Your Diesel Truck</h3>\r\n\r\n<p>To better serve all our customers, we ask all customers to complete the <a href="http://cartersvilletrucks.com/beta/credit-application" target="_blank">Cartersville Trucks Financing Application</a>. The Financing Application not only provides our dealership with all the information required for dealerships sell vehicles in Georgia but the application also provides our customers with the opportunity to present their financial position. The information provided by our customers plays a critical part in securing the best financing opportunities.</p>\r\n\r\n<p>Please note, our bookkeeping and accounting procedures require the completion of the <a href="http://cartersvilletrucks.com/beta/credit-application" target="_blank">Cartersville Trucks Financing Application</a> for all cash purchases as well.</p>\r\n\r\n<p>Complete your <a href="http://cartersvilletrucks.com/beta/credit-application" target="_blank">Cartersville Trucks Financing Application</a> now!</p>\r\n\r\n<p>Please explore Cartersville Trucks&rsquo; list of financial institutions which we have established relationships below. You may also locate the credit union closest to you through the National Credit Union Association search engine. Please note, requirements and conditions for credit union membership may vary for each institution.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<div class="logoes">\r\n<div class="row text-center">\r\n<div class="col-md-4">\r\n<div class="thumbnail"><a href="https://www.usaa.com/inet/ent_logon/Logon?redirectjsp=true" target="_blank"><img alt="" src="http://cartersvilletrucks.com/beta/images/usaa.png" style="height:100px; width:auto" /></a></div>\r\n</div>\r\n\r\n<div class="col-md-4">\r\n<div class="thumbnail"><a href="https://www.navyfederal.org" target="_blank"><img alt="" src="http://cartersvilletrucks.com/beta/images/Navy-federal.jpg" style="height:100px; width:auto" /></a></div>\r\n</div>\r\n\r\n<div class="col-md-4">\r\n<div class="thumbnail"><a href="https://www.lendmarkfinancial.com" target="_blank"><img alt="" src="http://cartersvilletrucks.com/beta/images/logo-lendmark-financial-services.png" style="height:100px; width:auto" /></a></div>\r\n</div>\r\n</div>\r\n</div>\r\n\r\n<div class="col-md-12 text-center"><a  href="http://www.culookup.com/" target="_blank"><img alt="" src="http://cartersvilletrucks.com/beta/images/culookup_logo_white.gif" class="thumbnail" style="display:inline; height:100px; width:auto" /></a></div>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h3>Calculate your diesel truck payment</h3>\r\n\r\n<p>&nbsp;</p>\r\n', 'financing', '2016-12-15 20:37:34', '2017-02-08 13:45:06', NULL),
(3, 'SERVICES', '1481834292-background-black-car.png', '<br><br><br><br>\r\n\r\ncomming soon\r\n\r\n<br><br><br><br>', 'services', '2016-12-15 20:38:12', '2016-12-15 22:56:40', NULL),
(4, 'Store Location', NULL, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>comming soon</p>\r\n', 'store-location', '2016-12-19 16:22:30', '2016-12-19 16:22:30', NULL),
(5, 'We Are Different', NULL, '<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>comming soon</p>\r\n', 'we-are-different', '2016-12-19 16:23:04', '2016-12-19 16:23:04', NULL),
(6, 'Test Drive Policy', NULL, '<h3>Customer Test Drive Policy</h3>\r\n\r\n<p>Cartersville Trucks believes our buyers can only truly appreciate the quality of our vehicles and the unique pleasure of owning and driving a diesel truck is by experiencing it first-hand. At Cartersville Trucks, we encourage our buyers to stop by our lot and test drive the truck of your choice as you make the decision to go diesel.</p>\r\n\r\n<p>To better serve our customers and remain in compliance with our insurers and licensing agencies, Cartersville Trucks must adhere to the following policies and procedures for all customer test drives:</p>\r\n\r\n<ol>\r\n	<li>\r\n	<p><strong>Driver License:</strong>The customer must provide a copy valid drivers&rsquo; license which will be copied by Cartersville Trucks and the copy shall be maintained by Cartersville Trucks.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Insurance</strong>: The customer must provide proof of current auto insurance which will be documented by Cartersville Trucks and the documentation shall be maintained by Cartersville Trucks.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Pre-Qual App:</strong>The customer shall complete Cartersville Trucks&rsquo; Buyer Pre-Qualification Application.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Breach</strong>:The customer confirms by signing this agreement that their License is current and they will not be in any breach of any condition of license by test driving a Cartersville Trucks vehicle.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Smoking and Food:</strong>The customer agrees not to smoke, drink, eat, carry any pets or goods while test driving the vehicle. In the event this condition is breached the Customer will be liable for any cleaning costs if necessarily incurred as a result of smoking, drinking, eating, or carrying any pets or goods.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Weapons: </strong>Cartersville Trucks does not allow any customer to carry a weapon of any form (firearm, knife, pepper spray, mace, taser gun, etc..) during a test drive or while on the premises of Cartersville Trucks.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Number of Riders:</strong>The number of riders permitted during the test drive, including the customer test driving the vehicle and the Cartersville Trucks representative, shall include no more than 5 people and all passengers must wear a seat belt.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Children</strong>:Parents will be held 100% responsible for any and all damage caused by their children during the test drive.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Customer Injury:</strong>Cartersville Trucks shall not be held liable or responsible for any injury or harm caused to any customer or person(s) associated with the customer during customer test drive sessions while the customer is test operating the vehicle.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Route</strong>:Cartersville Trucks will provide a predetermined test drive route which must be adhered to by the customer.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>In Case of Accident:</strong>The customer agrees to pay all fees, cost, and expenses not covered by Cartersville Trucks insurance carriers in the event of an accident or should a claim for be submitted as a result of an accident while the customer is test driving the vehicle.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>License to Operate:</strong>I am licensed to operate a motor vehicle in the United States, and my license is currently not under suspension. I have in effect collision and liability insurance which would apply to the vehicle identified below during the time while it is in my possession or under my control. I agree to pay the reasonable value of repairing such damage, along with any expense Cartersville Trucks incurs in obtaining the return of the vehicle.&nbsp;</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Traffic Fines:</strong>I will pay all traffic tickets and hold Cartersville Trucks harmless from any and all expenses and judgments, including costs arising out of any act or pertaining to my operation of the vehicle prior to my returning it to Cartersville Trucks and all expenses, costs and fees it may incur to protect and/or enforce its rights under this Agreement, to the extent permitted by applicable law.</p>\r\n	</li>\r\n	<li>\r\n	<p><strong>Cartersville Trucks maintains the right to deny any customer request for test drives for any reason and is not obligated to disclose or explain their reason for denying the customers&rsquo; request.</strong></p>\r\n	</li>\r\n</ol>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Steps Cartersville Trucks takes to familiarize customers test driving our vehiclesprior to the test drive and review operation steps performed include, but are not limited to, the following:</p>\r\n\r\n<ul>\r\n	<li>\r\n	<p>Seat belt</p>\r\n	</li>\r\n	<li>\r\n	<p>Mirror adjustment</p>\r\n	</li>\r\n	<li>\r\n	<p>Turn signals</p>\r\n	</li>\r\n	<li>\r\n	<p>Seat adjustment</p>\r\n	</li>\r\n	<li>\r\n	<p>Other unique features</p>\r\n	</li>\r\n	<li>\r\n	<p>Review the initial route to be followed &ndash; first turns.</p>\r\n	</li>\r\n</ul>\r\n', 'test-drive-policy', '2017-01-28 20:17:06', '2017-02-10 19:42:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pagesettting`
--

CREATE TABLE `pagesettting` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `image` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `content` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `pagesettting`
--

INSERT INTO `pagesettting` (`id`, `title`, `url`, `image`, `content`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'About', 'about', '', 'content hare\r\n', '2016-12-15 06:58:02', '2016-12-15 06:58:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', '2016-12-08 08:33:44', '2016-12-08 08:33:44'),
(2, 'User', '2016-12-08 08:33:44', '2016-12-08 08:33:44');

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(10) UNSIGNED NOT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `abbr` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `state`, `abbr`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Alabama', 'AL', '2017-02-02 19:38:42', '2017-02-02 19:38:42', NULL),
(2, 'Alaska', 'AK', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(3, 'Arizona', 'AZ', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(4, 'Arkansas', 'AR', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(5, 'California', 'CA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(6, 'Colorado', 'CO', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(7, 'Connecticut', 'CT', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(8, 'Delaware', 'DE', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(9, 'District of Columbia', 'DC', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(10, 'Florida', 'FL', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(11, 'Georgia', 'GA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(12, 'Hawaii', 'HI', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(13, 'Idaho', 'ID', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(14, 'Illinois', 'IL', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(15, 'Indiana', 'IN', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(16, 'Iowa', 'IA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(17, 'Kansas', 'KS', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(18, 'Kentucky', 'KY', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(19, 'Louisiana', 'LA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(20, 'Maine', 'ME', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(21, 'Maryland', 'MD', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(22, 'Massachusetts', 'MA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(23, 'Michigan', 'MI', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(24, 'Minnesota', 'MN', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(25, 'Mississippi', 'MS', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(26, 'Missouri', 'MO', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(27, 'Montana', 'MT', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(28, 'Nebraska', 'NE', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(29, 'Nevada', 'NV', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(30, 'New Hampshire', 'NH', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(31, 'New Jersey', 'NJ', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(32, 'New Mexico', 'NM', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(33, 'New York', 'NY', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(34, 'North Carolina', 'NC', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(35, 'North Dakota', 'ND', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(36, 'Ohio', 'OH', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(37, 'Oklahoma', 'OK', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(38, 'Oregon', 'OR', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(39, 'Pennsylvania', 'PA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(40, 'Rhode Island', 'RI', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(41, 'South Carolina', 'SC', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(42, 'South Dakota', 'SD', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(43, 'Tennessee', 'TN', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(44, 'Texas', 'TX', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(45, 'Utah', 'UT', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(46, 'Vermont', 'VT', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(47, 'Virginia', 'VA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(48, 'Washington', 'WA', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(49, 'West Virginia', 'WV', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(50, 'Wisconsin', 'WI', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL),
(51, 'Wyoming', 'WY', '2017-02-03 02:38:42', '2017-02-03 02:38:42', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `suffix`
--

CREATE TABLE `suffix` (
  `id` int(10) UNSIGNED NOT NULL,
  `suffix` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `suffix`
--

INSERT INTO `suffix` (`id`, `suffix`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Mr.', '2017-02-02 19:04:58', '2017-02-02 19:04:58', NULL),
(2, 'Mrs.', '2017-02-11 02:06:31', '2017-02-11 02:06:31', NULL),
(3, 'Master', '2017-02-11 02:06:39', '2017-02-11 02:06:39', NULL),
(4, 'Miss', '2017-02-11 02:06:47', '2017-02-11 02:06:47', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testdrive`
--

CREATE TABLE `testdrive` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `suffix` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `city` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `state` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `zip` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `employment_status` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `company_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `gross_income` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `driver_license_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `driver_license_expiration_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_carrier` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_id_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_agent_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `insurance_agent_phone_number` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `submit_date` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testdrive`
--

INSERT INTO `testdrive` (`id`, `name`, `suffix`, `phone`, `email`, `address`, `city`, `state`, `zip`, `employment_status`, `company_name`, `gross_income`, `driver_license_number`, `driver_license_expiration_date`, `insurance_carrier`, `insurance_id_number`, `insurance_agent_name`, `insurance_agent_phone_number`, `submit_date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'demouser', 'Mr.', '271215445', 'democon3232@gmail.com', 'address', 'city', 'Alaska', '1124588', 'Full-time', 'dasdf', '2', '1214', '2017-02-02', 'Allstate Fire &Casualty Insurance Company', '1321ad', 'demoagent', '3256988', '2017-02-02 02:46:20', '2017-02-02 09:46:20', NULL, NULL),
(2, '1', 'Mr.', '3', '3', '4', '5', 'Idaho', '7', 'Full-time', '8', '1', '10', '2017-02-05', 'other carrier', '26898989', '', '', '2017-02-03 10:08:09', '2017-02-03 17:08:09', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `testtbl`
--

CREATE TABLE `testtbl` (
  `id` int(10) UNSIGNED NOT NULL,
  `Testfield` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `ctcarlisting_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `testtbl`
--

INSERT INTO `testtbl` (`id`, `Testfield`, `ctcarlisting_id`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Test 1', 1, '2016-12-08 09:02:00', '2016-12-08 09:02:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `torque`
--

CREATE TABLE `torque` (
  `id` int(10) UNSIGNED NOT NULL,
  `torque` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `torque`
--

INSERT INTO `torque` (`id`, `torque`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Torque 1', '2017-02-12 05:47:35', '2017-02-12 05:47:35', NULL),
(2, '', '2017-02-12 03:20:35', '2017-02-12 03:20:35', NULL),
(3, '', '2017-02-12 03:37:49', '2017-02-12 03:37:49', NULL),
(4, 'torqother2', '2017-02-12 03:52:17', '2017-02-12 03:52:17', NULL),
(5, '1235 tor', '2017-02-12 04:06:07', '2017-02-12 04:06:07', NULL),
(6, 'edit001', '2017-02-12 04:09:44', '2017-02-12 04:09:44', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `trucklisting_img`
--

CREATE TABLE `trucklisting_img` (
  `id` int(11) NOT NULL,
  `truckid` int(11) NOT NULL,
  `imgname` varchar(255) NOT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trucklisting_img`
--

INSERT INTO `trucklisting_img` (`id`, `truckid`, `imgname`, `status`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 1, '1482620009-2006-ford-f250-6.0l-power-stroke-diesel-front.jpg', 1, '2016-12-24 22:53:32', NULL, NULL),
(5, 1, '1482620012-2014-ford-raptor-lifted-white-ford-f150-lifted-yukon-gifts-wallpaper.jpg', 1, '2016-12-24 22:53:32', NULL, NULL),
(6, 1, '1482620012-2016-Ford-F-150-Limited-best-truck-e1437614548749.jpg', 1, '2016-12-24 22:53:32', NULL, NULL),
(7, 1, '1482620012-13395013_1023775467676633_1283971635_n.jpg', 1, '2016-12-24 22:53:32', NULL, NULL),
(16, 17, '1483609546-1482251635-truck_1.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(17, 17, '1483609547-1482251848-truck_2.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(18, 17, '1483609547-1482253057-truck_3.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(19, 17, '1483609547-1482253343-truck_1.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(20, 17, '1483609547-1482253387-truck_2.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(21, 17, '1483609547-1482253502-truck_3.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(22, 17, '1483609547-1482254772-truck_4.png', 1, '2017-01-05 09:45:47', NULL, NULL),
(23, 17, '1483609547-1482255584-truck_5.png', 1, '2017-01-05 09:45:47', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `usercontact`
--

CREATE TABLE `usercontact` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `comment` text COLLATE utf8_unicode_ci,
  `date` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `usercontact`
--

INSERT INTO `usercontact` (`id`, `name`, `email`, `address`, `comment`, `date`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'name', 'test@h.co', 'add', 'accc', NULL, NULL, '2016-12-17 22:48:05', '2016-12-17 22:48:05'),
(2, '1', '11', '222', '333', '2016-12-17 22:38:59', '2016-12-17 22:38:59', '2016-12-17 22:48:08', '2016-12-17 22:48:08'),
(3, 'name', 'email@gmail.com', 'address', 'message', '2016-12-17 22:42:28', '2016-12-17 22:42:28', '2016-12-17 22:48:10', '2016-12-17 22:48:10'),
(4, 'web', 'democon3232@gmail.com', 'this is my address for test', 'my message only for testing', '2016-12-17 22:48:58', '2016-12-17 22:48:58', '2016-12-17 22:52:32', '2016-12-17 22:52:32'),
(5, 'web', 'democon3232@gmail.com', 'this is my address for test', 'my message only for testing', '2016-12-17 22:49:49', '2016-12-17 22:49:49', '2016-12-17 22:52:32', '2016-12-17 22:52:32'),
(6, 'web', 'democon3232@gmail.com', 'this is my address for test', 'my message only for testing', '2016-12-17 22:51:32', '2016-12-17 22:51:32', NULL, NULL),
(7, 'Sanjeev', 'sanjeev_viu@gmail.com', '2063 Woodrow Wilson Dr.', 'Hi This is a Test', '2017-01-30 17:25:15', '2017-01-30 17:25:15', NULL, NULL),
(8, 'Sanjeev', 'sanjeev@appmasterscorp.com', '2510 Woodrow Wilson Dr.', 'Hello, Can you contact me. ', '2017-02-02 07:01:35', '2017-02-02 07:01:35', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 1, 'admin', 'admin@gmail.com', '$2y$10$HLKEkWySNIxTgZA1QIGSqunFCvNbNtZPTp313L2mGCARD3kEufb5S', 'i6jMnMydMaIF4jVb2XRg6Y1woQFyBa3VkwfSuj36EhJroOoMmwyg4lya65fb', '2016-12-08 08:33:59', '2017-02-10 19:42:55');

-- --------------------------------------------------------

--
-- Table structure for table `users_logs`
--

CREATE TABLE `users_logs` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `action` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `action_model` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `action_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users_logs`
--

INSERT INTO `users_logs` (`id`, `user_id`, `action`, `action_model`, `action_id`, `created_at`, `updated_at`) VALUES
(1, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:14:12', '2016-12-13 14:14:12'),
(2, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:14:19', '2016-12-13 14:14:19'),
(3, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:15:29', '2016-12-13 14:15:29'),
(4, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:17:55', '2016-12-13 14:17:55'),
(5, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:18:11', '2016-12-13 14:18:11'),
(6, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:27:28', '2016-12-13 14:27:28'),
(7, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:29:45', '2016-12-13 14:29:45'),
(8, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:32:50', '2016-12-13 14:32:50'),
(9, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:32:59', '2016-12-13 14:32:59'),
(10, 1, 'updated', 'cttrucklisting', 2, '2016-12-13 14:33:07', '2016-12-13 14:33:07'),
(11, 1, 'updated', 'cttrucklisting', 2, '2016-12-14 08:02:00', '2016-12-14 08:02:00'),
(12, 1, 'updated', 'cttrucklisting', 2, '2016-12-14 08:13:46', '2016-12-14 08:13:46'),
(13, 1, 'updated', 'cttrucklisting', 2, '2016-12-14 08:14:07', '2016-12-14 08:14:07'),
(14, 1, 'updated', 'cttrucklisting', 2, '2016-12-14 08:14:43', '2016-12-14 08:14:43'),
(15, 1, 'created', 'cttrucklisting', 3, '2016-12-14 08:15:47', '2016-12-14 08:15:47'),
(16, 1, 'updated', 'cttrucklisting', 3, '2016-12-14 17:16:52', '2016-12-14 17:16:52'),
(17, 1, 'updated', 'cttrucklisting', 3, '2016-12-14 17:16:58', '2016-12-14 17:16:58'),
(18, 1, 'updated', 'cttrucklisting', 3, '2016-12-14 17:17:34', '2016-12-14 17:17:34'),
(19, 1, 'updated', 'cttrucklisting', 3, '2016-12-14 17:18:20', '2016-12-14 17:18:20'),
(20, 1, 'updated', 'cttrucklisting', 2, '2016-12-14 17:18:31', '2016-12-14 17:18:31'),
(21, 1, 'updated', 'cttrucklisting', 2, '2016-12-14 17:18:59', '2016-12-14 17:18:59'),
(22, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 02:43:48', '2016-12-15 02:43:48'),
(23, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 02:46:11', '2016-12-15 02:46:11'),
(24, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 02:54:46', '2016-12-15 02:54:46'),
(25, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 02:56:18', '2016-12-15 02:56:18'),
(26, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 02:57:17', '2016-12-15 02:57:17'),
(27, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 03:20:26', '2016-12-15 03:20:26'),
(28, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 03:43:30', '2016-12-15 03:43:30'),
(29, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 03:43:37', '2016-12-15 03:43:37'),
(30, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 03:51:38', '2016-12-15 03:51:38'),
(31, 1, 'updated', 'cttrucklisting', 2, '2016-12-15 03:51:46', '2016-12-15 03:51:46'),
(32, 1, 'created', 'pagesettting', 1, '2016-12-15 06:58:02', '2016-12-15 06:58:02'),
(33, 1, 'created', 'cttrucklisting', 4, '2016-12-15 07:55:36', '2016-12-15 07:55:36'),
(34, 1, 'updated', 'cttrucklisting', 4, '2016-12-15 07:57:20', '2016-12-15 07:57:20'),
(35, 1, 'created', 'cttrucklisting', 5, '2016-12-15 08:00:57', '2016-12-15 08:00:57'),
(36, 1, 'updated', 'cttrucklisting', 5, '2016-12-15 08:01:14', '2016-12-15 08:01:14'),
(37, 1, 'created', 'cttrucklisting', 6, '2016-12-15 08:02:26', '2016-12-15 08:02:26'),
(38, 1, 'created', 'content', 1, '2016-12-15 13:46:16', '2016-12-15 13:46:16'),
(39, 1, 'updated', 'content', 1, '2016-12-15 13:49:35', '2016-12-15 13:49:35'),
(40, 1, 'created', 'ctclientreview', 1, '2016-12-15 14:25:33', '2016-12-15 14:25:33'),
(41, 1, 'created', 'ctclientreview', 2, '2016-12-15 14:25:51', '2016-12-15 14:25:51'),
(42, 1, 'created', 'ctclientreview', 3, '2016-12-15 14:25:59', '2016-12-15 14:25:59'),
(43, 1, 'created', 'ctclientreview', 4, '2016-12-15 14:26:15', '2016-12-15 14:26:15'),
(44, 1, 'updated', 'ctclientreview', 1, '2016-12-15 14:47:22', '2016-12-15 14:47:22'),
(45, 1, 'updated', 'ctclientreview', 2, '2016-12-15 14:47:30', '2016-12-15 14:47:30'),
(46, 1, 'updated', 'ctclientreview', 3, '2016-12-15 14:47:36', '2016-12-15 14:47:36'),
(47, 1, 'updated', 'ctclientreview', 4, '2016-12-15 14:47:41', '2016-12-15 14:47:41'),
(48, 1, 'updated', 'ctclientreview', 4, '2016-12-15 14:57:51', '2016-12-15 14:57:51'),
(49, 1, 'updated', 'ctclientreview', 3, '2016-12-15 15:01:18', '2016-12-15 15:01:18'),
(50, 1, 'updated', 'ctclientreview', 2, '2016-12-15 15:01:24', '2016-12-15 15:01:24'),
(51, 1, 'updated', 'ctclientreview', 1, '2016-12-15 15:01:30', '2016-12-15 15:01:30'),
(52, 1, 'updated', 'users', 1, '2016-12-15 16:01:36', '2016-12-15 16:01:36'),
(53, 1, 'updated', 'users', 1, '2016-12-15 16:02:17', '2016-12-15 16:02:17'),
(54, 1, 'created', 'ctclientreview', 5, '2016-12-15 16:19:24', '2016-12-15 16:19:24'),
(55, 1, 'created', 'headersetting', 1, '2016-12-15 20:24:59', '2016-12-15 20:24:59'),
(56, 1, 'created', 'footersetting', 1, '2016-12-15 20:26:16', '2016-12-15 20:26:16'),
(57, 1, 'updated', 'footersetting', 1, '2016-12-15 20:32:21', '2016-12-15 20:32:21'),
(58, 1, 'created', 'pagesetting', 1, '2016-12-15 20:36:29', '2016-12-15 20:36:29'),
(59, 1, 'created', 'pagesetting', 2, '2016-12-15 20:37:34', '2016-12-15 20:37:34'),
(60, 1, 'created', 'pagesetting', 3, '2016-12-15 20:38:12', '2016-12-15 20:38:12'),
(61, 1, 'updated', 'pagesetting', 1, '2016-12-15 22:25:53', '2016-12-15 22:25:53'),
(62, 1, 'updated', 'pagesetting', 1, '2016-12-15 22:42:10', '2016-12-15 22:42:10'),
(63, 1, 'updated', 'pagesetting', 1, '2016-12-15 22:49:14', '2016-12-15 22:49:14'),
(64, 1, 'updated', 'pagesetting', 1, '2016-12-15 22:49:42', '2016-12-15 22:49:42'),
(65, 1, 'updated', 'pagesetting', 1, '2016-12-15 22:54:33', '2016-12-15 22:54:33'),
(66, 1, 'updated', 'pagesetting', 2, '2016-12-15 22:56:32', '2016-12-15 22:56:32'),
(67, 1, 'updated', 'pagesetting', 2, '2016-12-15 22:56:36', '2016-12-15 22:56:36'),
(68, 1, 'updated', 'pagesetting', 3, '2016-12-15 22:56:40', '2016-12-15 22:56:40'),
(69, 1, 'updated', 'pagesetting', 2, '2016-12-16 02:51:09', '2016-12-16 02:51:09'),
(70, 1, 'updated', 'cttrucklisting', 2, '2016-12-16 11:48:03', '2016-12-16 11:48:03'),
(71, 1, 'updated', 'headersetting', 1, '2016-12-16 15:29:30', '2016-12-16 15:29:30'),
(72, 1, 'updated', 'headersetting', 1, '2016-12-16 15:30:12', '2016-12-16 15:30:12'),
(73, 1, 'updated', 'cttrucklisting', 2, '2016-12-17 09:42:26', '2016-12-17 09:42:26'),
(74, 1, 'updated', 'cttrucklisting', 2, '2016-12-17 10:06:25', '2016-12-17 10:06:25'),
(75, 1, 'updated', 'cttrucklisting', 2, '2016-12-17 15:27:56', '2016-12-17 15:27:56'),
(76, 1, 'updated', 'cttrucklisting', 3, '2016-12-17 15:28:07', '2016-12-17 15:28:07'),
(77, 1, 'updated', 'cttrucklisting', 6, '2016-12-17 15:28:21', '2016-12-17 15:28:21'),
(78, 1, 'updated', 'cttrucklisting', 5, '2016-12-17 15:28:25', '2016-12-17 15:28:25'),
(79, 1, 'updated', 'cttrucklisting', 4, '2016-12-17 15:28:28', '2016-12-17 15:28:28'),
(80, 1, 'created', 'cttrucklisting', 7, '2016-12-17 16:11:13', '2016-12-17 16:11:13'),
(81, 1, 'updated', 'cttrucklisting', 7, '2016-12-17 16:11:22', '2016-12-17 16:11:22'),
(82, 1, 'deleted', 'cttrucklisting', 7, '2016-12-17 16:11:27', '2016-12-17 16:11:27'),
(83, 1, 'updated', 'ctmake', 1, '2016-12-17 16:14:46', '2016-12-17 16:14:46'),
(84, 1, 'updated', 'footersetting', 1, '2016-12-17 20:19:45', '2016-12-17 20:19:45'),
(85, 1, 'updated', 'footersetting', 1, '2016-12-17 20:20:03', '2016-12-17 20:20:03'),
(86, 1, 'created', 'ourteam', 1, '2016-12-17 20:45:34', '2016-12-17 20:45:34'),
(87, 1, 'updated', 'ourteam', 1, '2016-12-17 20:46:09', '2016-12-17 20:46:09'),
(88, 1, 'created', 'ourteam', 2, '2016-12-17 20:48:50', '2016-12-17 20:48:50'),
(89, 1, 'created', 'ourteam', 3, '2016-12-17 20:49:09', '2016-12-17 20:49:09'),
(90, 1, 'created', 'ourteam', 4, '2016-12-17 20:49:31', '2016-12-17 20:49:31'),
(91, 1, 'created', 'ourteam', 5, '2016-12-17 20:50:11', '2016-12-17 20:50:11'),
(92, 1, 'updated', 'ourteam', 5, '2016-12-17 20:50:42', '2016-12-17 20:50:42'),
(93, 1, 'updated', 'ourteam', 4, '2016-12-17 20:50:55', '2016-12-17 20:50:55'),
(94, 1, 'updated', 'ourteam', 5, '2016-12-17 21:04:40', '2016-12-17 21:04:40'),
(95, 1, 'updated', 'ourteam', 5, '2016-12-17 21:04:54', '2016-12-17 21:04:54'),
(96, 1, 'created', 'contactsetting', 1, '2016-12-17 21:16:56', '2016-12-17 21:16:56'),
(97, 1, 'updated', 'contactsetting', 1, '2016-12-17 21:25:58', '2016-12-17 21:25:58'),
(98, 1, 'updated', 'contactsetting', 1, '2016-12-17 21:29:29', '2016-12-17 21:29:29'),
(99, 1, 'updated', 'contactsetting', 1, '2016-12-17 21:44:51', '2016-12-17 21:44:51'),
(100, 1, 'updated', 'contactsetting', 1, '2016-12-17 21:47:31', '2016-12-17 21:47:31'),
(101, 1, 'updated', 'contactsetting', 1, '2016-12-17 21:47:42', '2016-12-17 21:47:42'),
(102, 1, 'deleted', 'usercontact', 1, '2016-12-17 22:48:05', '2016-12-17 22:48:05'),
(103, 1, 'deleted', 'usercontact', 2, '2016-12-17 22:48:08', '2016-12-17 22:48:08'),
(104, 1, 'deleted', 'usercontact', 3, '2016-12-17 22:48:10', '2016-12-17 22:48:10'),
(105, 1, 'deleted', 'usercontact', 4, '2016-12-17 22:52:32', '2016-12-17 22:52:32'),
(106, 1, 'deleted', 'usercontact', 5, '2016-12-17 22:52:32', '2016-12-17 22:52:32'),
(107, 1, 'updated', 'cttrucklisting', 5, '2016-12-18 02:36:36', '2016-12-18 02:36:36'),
(108, 1, 'updated', 'cttrucklisting', 5, '2016-12-18 02:38:57', '2016-12-18 02:38:57'),
(109, 1, 'updated', 'pagesetting', 2, '2016-12-18 21:49:06', '2016-12-18 21:49:06'),
(110, 1, 'updated', 'users', 1, '2016-12-19 10:12:42', '2016-12-19 10:12:42'),
(111, 1, 'deleted', 'ctmake', 1, '2016-12-19 15:34:13', '2016-12-19 15:34:13'),
(112, 1, 'deleted', 'ctmake', 2, '2016-12-19 15:34:17', '2016-12-19 15:34:17'),
(113, 1, 'updated', 'cttrucklisting', 2, '2016-12-19 16:18:12', '2016-12-19 16:18:12'),
(114, 1, 'updated', 'cttrucklisting', 3, '2016-12-19 16:18:31', '2016-12-19 16:18:31'),
(115, 1, 'updated', 'cttrucklisting', 4, '2016-12-19 16:18:37', '2016-12-19 16:18:37'),
(116, 1, 'updated', 'cttrucklisting', 5, '2016-12-19 16:18:43', '2016-12-19 16:18:43'),
(117, 1, 'updated', 'cttrucklisting', 6, '2016-12-19 16:18:48', '2016-12-19 16:18:48'),
(118, 1, 'created', 'pagesetting', 4, '2016-12-19 16:22:30', '2016-12-19 16:22:30'),
(119, 1, 'created', 'pagesetting', 5, '2016-12-19 16:23:04', '2016-12-19 16:23:04'),
(120, 1, 'created', 'homesetting', 1, '2016-12-19 21:15:52', '2016-12-19 21:15:52'),
(121, 1, 'updated', 'content', 1, '2016-12-19 21:16:30', '2016-12-19 21:16:30'),
(122, 1, 'updated', 'homesetting', 1, '2016-12-19 21:16:51', '2016-12-19 21:16:51'),
(123, 1, 'updated', 'homesetting', 1, '2016-12-19 21:16:58', '2016-12-19 21:16:58'),
(124, 1, 'updated', 'homesetting', 1, '2016-12-19 21:17:41', '2016-12-19 21:17:41'),
(125, 1, 'updated', 'homesetting', 1, '2016-12-19 21:18:18', '2016-12-19 21:18:18'),
(126, 1, 'updated', 'homesetting', 1, '2016-12-19 21:26:09', '2016-12-19 21:26:09'),
(127, 1, 'created', 'cttrucklisting', 8, '2016-12-20 09:37:17', '2016-12-20 09:37:17'),
(128, 1, 'updated', 'footersetting', 1, '2016-12-20 10:38:12', '2016-12-20 10:38:12'),
(129, 1, 'updated', 'footersetting', 1, '2016-12-20 10:38:23', '2016-12-20 10:38:23'),
(130, 1, 'updated', 'cttrucklisting', 2, '2016-12-20 15:57:43', '2016-12-20 15:57:43'),
(131, 1, 'updated', 'cttrucklisting', 2, '2016-12-20 16:04:09', '2016-12-20 16:04:09'),
(132, 1, 'updated', 'cttrucklisting', 2, '2016-12-20 16:20:02', '2016-12-20 16:20:02'),
(133, 1, 'updated', 'cttrucklisting', 2, '2016-12-20 16:33:56', '2016-12-20 16:33:56'),
(134, 1, 'updated', 'cttrucklisting', 3, '2016-12-20 16:37:29', '2016-12-20 16:37:29'),
(135, 1, 'updated', 'cttrucklisting', 4, '2016-12-20 16:57:38', '2016-12-20 16:57:38'),
(136, 1, 'updated', 'cttrucklisting', 5, '2016-12-20 17:02:23', '2016-12-20 17:02:23'),
(137, 1, 'updated', 'cttrucklisting', 6, '2016-12-20 17:03:08', '2016-12-20 17:03:08'),
(138, 1, 'updated', 'cttrucklisting', 8, '2016-12-20 17:05:02', '2016-12-20 17:05:02'),
(139, 1, 'updated', 'cttrucklisting', 2, '2016-12-20 17:05:27', '2016-12-20 17:05:27'),
(140, 1, 'updated', 'cttrucklisting', 3, '2016-12-20 17:05:33', '2016-12-20 17:05:33'),
(141, 1, 'updated', 'cttrucklisting', 4, '2016-12-20 17:05:38', '2016-12-20 17:05:38'),
(142, 1, 'updated', 'cttrucklisting', 5, '2016-12-20 17:05:43', '2016-12-20 17:05:43'),
(143, 1, 'updated', 'cttrucklisting', 6, '2016-12-20 17:05:48', '2016-12-20 17:05:48'),
(144, 1, 'updated', 'cttrucklisting', 8, '2016-12-20 17:06:12', '2016-12-20 17:06:12'),
(145, 1, 'updated', 'ctmodels', 1, '2016-12-20 17:25:02', '2016-12-20 17:25:02'),
(146, 1, 'updated', 'ctmodels', 2, '2016-12-20 17:25:07', '2016-12-20 17:25:07'),
(147, 1, 'created', 'cttrucklisting', 9, '2016-12-20 17:26:13', '2016-12-20 17:26:13'),
(148, 1, 'created', 'cttrucklisting', 10, '2016-12-20 17:37:21', '2016-12-20 17:37:21'),
(149, 1, 'updated', 'cttrucklisting', 10, '2016-12-20 17:39:45', '2016-12-20 17:39:45'),
(150, 1, 'updated', 'cttrucklisting', 10, '2016-12-20 17:40:16', '2016-12-20 17:40:16'),
(151, 1, 'created', 'cttrucklisting', 11, '2016-12-20 17:40:48', '2016-12-20 17:40:48'),
(152, 1, 'updated', 'cttrucklisting', 11, '2016-12-20 17:42:54', '2016-12-20 17:42:54'),
(153, 1, 'created', 'cttrucklisting', 12, '2016-12-20 17:46:15', '2016-12-20 17:46:15'),
(154, 1, 'updated', 'cttrucklisting', 12, '2016-12-20 17:49:40', '2016-12-20 17:49:40'),
(155, 1, 'updated', 'cttrucklisting', 2, '2016-12-20 18:25:28', '2016-12-20 18:25:28'),
(156, 1, 'updated', 'cttrucklisting', 5, '2016-12-20 18:25:31', '2016-12-20 18:25:31'),
(157, 1, 'updated', 'cttrucklisting', 6, '2016-12-20 18:25:35', '2016-12-20 18:25:35'),
(158, 1, 'created', 'cttrucklisting', 13, '2016-12-20 18:32:39', '2016-12-20 18:32:39'),
(159, 1, 'updated', 'cttrucklisting', 13, '2016-12-20 18:32:51', '2016-12-20 18:32:51'),
(160, 1, 'created', 'cttrucklisting', 14, '2016-12-20 18:33:21', '2016-12-20 18:33:21'),
(161, 1, 'updated', 'cttrucklisting', 14, '2016-12-20 18:33:54', '2016-12-20 18:33:54'),
(162, 1, 'updated', 'cttrucklisting', 13, '2016-12-20 18:34:06', '2016-12-20 18:34:06'),
(163, 1, 'updated', 'users', 1, '2016-12-21 10:29:22', '2016-12-21 10:29:22'),
(164, 1, 'updated', 'headersetting', 1, '2016-12-21 18:48:33', '2016-12-21 18:48:33'),
(165, 1, 'created', 'cttrucklisting', 15, '2016-12-21 19:25:58', '2016-12-21 19:25:58'),
(166, 1, 'created', 'cttrucklisting', 16, '2016-12-21 19:26:42', '2016-12-21 19:26:42'),
(167, 1, 'created', 'cttrucklisting', 17, '2016-12-21 19:27:59', '2016-12-21 19:27:59'),
(168, 1, 'updated', 'cttrucklisting', 14, '2016-12-21 19:28:16', '2016-12-21 19:28:16'),
(169, 1, 'updated', 'cttrucklisting', 17, '2016-12-21 19:32:04', '2016-12-21 19:32:04'),
(170, 1, 'updated', 'headersetting', 1, '2016-12-22 15:56:10', '2016-12-22 15:56:10'),
(171, 1, 'updated', 'cttrucklisting', 5, '2016-12-24 13:00:09', '2016-12-24 13:00:09'),
(172, 1, 'updated', 'cttrucklisting', 11, '2016-12-24 13:00:29', '2016-12-24 13:00:29'),
(173, 1, 'updated', 'cttrucklisting', 6, '2016-12-24 13:00:57', '2016-12-24 13:00:57'),
(174, 1, 'updated', 'cttrucklisting', 10, '2016-12-24 13:01:05', '2016-12-24 13:01:05'),
(175, 1, 'updated', 'cttrucklisting', 17, '2016-12-24 13:01:50', '2016-12-24 13:01:50'),
(176, 1, 'updated', 'cttrucklisting', 17, '2016-12-24 22:52:55', '2016-12-24 22:52:55'),
(177, 1, 'updated', 'cttrucklisting', 17, '2016-12-24 22:53:32', '2016-12-24 22:53:32'),
(178, 1, 'updated', 'cttrucklisting', 17, '2016-12-25 11:44:39', '2016-12-25 11:44:39'),
(179, 1, 'updated', 'cttrucklisting', 17, '2016-12-25 12:34:13', '2016-12-25 12:34:13'),
(180, 1, 'updated', 'headersetting', 1, '2016-12-30 16:15:03', '2016-12-30 16:15:03'),
(181, 1, 'updated', 'headersetting', 1, '2016-12-30 16:34:05', '2016-12-30 16:34:05'),
(182, 1, 'updated', 'cttrucklisting', 2, '2016-12-31 17:48:23', '2016-12-31 17:48:23'),
(183, 1, 'updated', 'cttrucklisting', 3, '2016-12-31 17:48:30', '2016-12-31 17:48:30'),
(184, 1, 'updated', 'cttrucklisting', 4, '2016-12-31 17:48:35', '2016-12-31 17:48:35'),
(185, 1, 'updated', 'cttrucklisting', 5, '2016-12-31 17:48:41', '2016-12-31 17:48:41'),
(186, 1, 'updated', 'cttrucklisting', 17, '2016-12-31 17:49:09', '2016-12-31 17:49:09'),
(187, 1, 'updated', 'cttrucklisting', 16, '2016-12-31 17:49:15', '2016-12-31 17:49:15'),
(188, 1, 'updated', 'cttrucklisting', 15, '2016-12-31 17:49:23', '2016-12-31 17:49:23'),
(189, 1, 'updated', 'cttrucklisting', 14, '2016-12-31 17:49:29', '2016-12-31 17:49:29'),
(190, 1, 'updated', 'cttrucklisting', 13, '2016-12-31 17:49:34', '2016-12-31 17:49:34'),
(191, 1, 'updated', 'cttrucklisting', 13, '2016-12-31 17:49:40', '2016-12-31 17:49:40'),
(192, 1, 'updated', 'cttrucklisting', 12, '2016-12-31 17:49:45', '2016-12-31 17:49:45'),
(193, 1, 'updated', 'cttrucklisting', 11, '2016-12-31 17:49:55', '2016-12-31 17:49:55'),
(194, 1, 'updated', 'cttrucklisting', 10, '2016-12-31 17:49:59', '2016-12-31 17:49:59'),
(195, 1, 'updated', 'cttrucklisting', 9, '2016-12-31 17:50:04', '2016-12-31 17:50:04'),
(196, 1, 'updated', 'cttrucklisting', 6, '2016-12-31 17:50:17', '2016-12-31 17:50:17'),
(197, 1, 'updated', 'pagesetting', 2, '2017-01-01 07:59:31', '2017-01-01 07:59:31'),
(198, 1, 'updated', 'pagesetting', 2, '2017-01-01 08:00:27', '2017-01-01 08:00:27'),
(199, 1, 'updated', 'pagesetting', 2, '2017-01-01 08:00:53', '2017-01-01 08:00:53'),
(200, 1, 'updated', 'pagesetting', 2, '2017-01-01 08:01:19', '2017-01-01 08:01:19'),
(201, 1, 'updated', 'pagesetting', 2, '2017-01-01 08:01:51', '2017-01-01 08:01:51'),
(202, 1, 'updated', 'pagesetting', 2, '2017-01-01 08:02:50', '2017-01-01 08:02:50'),
(203, 1, 'updated', 'pagesetting', 2, '2017-01-02 15:33:19', '2017-01-02 15:33:19'),
(204, 1, 'updated', 'cttrucklisting', 11, '2017-01-04 13:57:25', '2017-01-04 13:57:25'),
(205, 1, 'updated', 'cttrucklisting', 2, '2017-01-04 14:00:06', '2017-01-04 14:00:06'),
(206, 1, 'updated', 'cttrucklisting', 17, '2017-01-05 09:33:59', '2017-01-05 09:33:59'),
(207, 1, 'updated', 'cttrucklisting', 16, '2017-01-05 09:34:26', '2017-01-05 09:34:26'),
(208, 1, 'updated', 'cttrucklisting', 15, '2017-01-05 09:34:45', '2017-01-05 09:34:45'),
(209, 1, 'updated', 'cttrucklisting', 14, '2017-01-05 09:35:05', '2017-01-05 09:35:05'),
(210, 1, 'updated', 'cttrucklisting', 13, '2017-01-05 09:35:24', '2017-01-05 09:35:24'),
(211, 1, 'updated', 'cttrucklisting', 12, '2017-01-05 09:35:56', '2017-01-05 09:35:56'),
(212, 1, 'updated', 'cttrucklisting', 11, '2017-01-05 09:36:25', '2017-01-05 09:36:25'),
(213, 1, 'updated', 'cttrucklisting', 10, '2017-01-05 09:36:42', '2017-01-05 09:36:42'),
(214, 1, 'updated', 'cttrucklisting', 9, '2017-01-05 09:37:03', '2017-01-05 09:37:03'),
(215, 1, 'updated', 'cttrucklisting', 8, '2017-01-05 09:37:25', '2017-01-05 09:37:25'),
(216, 1, 'updated', 'cttrucklisting', 6, '2017-01-05 09:37:58', '2017-01-05 09:37:58'),
(217, 1, 'updated', 'cttrucklisting', 5, '2017-01-05 09:38:23', '2017-01-05 09:38:23'),
(218, 1, 'updated', 'cttrucklisting', 4, '2017-01-05 09:38:56', '2017-01-05 09:38:56'),
(219, 1, 'updated', 'cttrucklisting', 3, '2017-01-05 09:39:34', '2017-01-05 09:39:34'),
(220, 1, 'updated', 'cttrucklisting', 2, '2017-01-05 09:39:47', '2017-01-05 09:39:47'),
(221, 1, 'updated', 'cttrucklisting', 17, '2017-01-05 09:45:47', '2017-01-05 09:45:47'),
(222, 1, 'updated', 'cttrucklisting', 12, '2017-01-05 10:02:19', '2017-01-05 10:02:19'),
(223, 1, 'updated', 'cttrucklisting', 10, '2017-01-05 10:02:58', '2017-01-05 10:02:58'),
(224, 1, 'updated', 'pagesetting', 2, '2017-01-27 21:54:40', '2017-01-27 21:54:40'),
(225, 1, 'updated', 'pagesetting', 2, '2017-01-27 21:56:48', '2017-01-27 21:56:48'),
(226, 1, 'updated', 'pagesetting', 2, '2017-01-27 21:58:09', '2017-01-27 21:58:09'),
(227, 1, 'updated', 'pagesetting', 2, '2017-01-27 22:02:15', '2017-01-27 22:02:15'),
(228, 1, 'updated', 'pagesetting', 2, '2017-01-27 23:29:34', '2017-01-27 23:29:34'),
(229, 1, 'updated', 'pagesetting', 2, '2017-01-27 23:30:28', '2017-01-27 23:30:28'),
(230, 1, 'updated', 'pagesetting', 2, '2017-01-27 23:34:17', '2017-01-27 23:34:17'),
(231, 1, 'created', 'pagesetting', 6, '2017-01-28 20:17:06', '2017-01-28 20:17:06'),
(232, 1, 'updated', 'pagesetting', 6, '2017-01-28 20:18:18', '2017-01-28 20:18:18'),
(233, 1, 'updated', 'pagesetting', 6, '2017-01-28 20:20:48', '2017-01-28 20:20:48'),
(234, 1, 'updated', 'headersetting', 1, '2017-01-31 18:28:43', '2017-01-31 18:28:43'),
(235, 1, 'updated', 'footersetting', 1, '2017-01-31 18:41:24', '2017-01-31 18:41:24'),
(236, 1, 'updated', 'footersetting', 1, '2017-01-31 18:42:50', '2017-01-31 18:42:50'),
(237, 1, 'updated', 'footersetting', 1, '2017-01-31 18:43:20', '2017-01-31 18:43:20'),
(238, 1, 'updated', 'footersetting', 1, '2017-01-31 18:43:49', '2017-01-31 18:43:49'),
(239, 1, 'updated', 'footersetting', 1, '2017-01-31 18:44:59', '2017-01-31 18:44:59'),
(240, 1, 'updated', 'footersetting', 1, '2017-01-31 18:47:34', '2017-01-31 18:47:34'),
(241, 1, 'updated', 'footersetting', 1, '2017-01-31 18:48:19', '2017-01-31 18:48:19'),
(242, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:11:01', '2017-01-31 19:11:01'),
(243, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:27:03', '2017-01-31 19:27:03'),
(244, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:30:31', '2017-01-31 19:30:31'),
(245, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:33:15', '2017-01-31 19:33:15'),
(246, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:35:54', '2017-01-31 19:35:54'),
(247, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:39:58', '2017-01-31 19:39:58'),
(248, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:40:30', '2017-01-31 19:40:30'),
(249, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:40:59', '2017-01-31 19:40:59'),
(250, 1, 'updated', 'pagesetting', 2, '2017-01-31 19:41:43', '2017-01-31 19:41:43'),
(251, 1, 'created', 'appointmentschedule', 1, '2017-02-01 01:11:58', '2017-02-01 01:11:58'),
(252, 1, 'created', 'appointmentschedule', 2, '2017-02-01 01:20:38', '2017-02-01 01:20:38'),
(253, 1, 'updated', 'pagesetting', 2, '2017-02-01 19:34:59', '2017-02-01 19:34:59'),
(254, 1, 'updated', 'footersetting', 1, '2017-02-01 23:13:31', '2017-02-01 23:13:31'),
(255, 1, 'updated', 'contactsetting', 1, '2017-02-02 10:05:42', '2017-02-02 10:05:42'),
(256, 1, 'updated', 'contactsetting', 1, '2017-02-02 10:06:22', '2017-02-02 10:06:22'),
(257, 1, 'updated', 'footersetting', 1, '2017-02-02 10:09:31', '2017-02-02 10:09:31'),
(258, 1, 'updated', 'footersetting', 1, '2017-02-02 10:10:04', '2017-02-02 10:10:04'),
(259, 1, 'updated', 'footersetting', 1, '2017-02-02 10:10:42', '2017-02-02 10:10:42'),
(260, 1, 'created', 'suffix', 1, '2017-02-02 19:04:58', '2017-02-02 19:04:58'),
(261, 1, 'created', 'state', 1, '2017-02-02 19:38:42', '2017-02-02 19:38:42'),
(262, 1, 'updated', 'state', 2, '2017-02-02 19:43:32', '2017-02-02 19:43:32'),
(263, 1, 'deleted', 'creditapplication', 5, '2017-02-02 21:47:49', '2017-02-02 21:47:49'),
(264, 1, 'deleted', 'creditapplication', 1, '2017-02-02 22:16:20', '2017-02-02 22:16:20'),
(265, 1, 'deleted', 'creditapplication', 6, '2017-02-02 22:16:20', '2017-02-02 22:16:20'),
(266, 1, 'deleted', 'creditapplication', 7, '2017-02-02 22:16:20', '2017-02-02 22:16:20'),
(267, 1, 'updated', 'pagesetting', 2, '2017-02-03 01:14:14', '2017-02-03 01:14:14'),
(268, 1, 'updated', 'headersetting', 1, '2017-02-08 00:36:19', '2017-02-08 00:36:19'),
(269, 1, 'updated', 'pagesetting', 6, '2017-02-08 13:17:59', '2017-02-08 13:17:59'),
(270, 1, 'updated', 'pagesetting', 6, '2017-02-08 13:20:07', '2017-02-08 13:20:07'),
(271, 1, 'updated', 'pagesetting', 6, '2017-02-08 13:20:33', '2017-02-08 13:20:33'),
(272, 1, 'updated', 'pagesetting', 6, '2017-02-08 13:21:33', '2017-02-08 13:21:33'),
(273, 1, 'updated', 'pagesetting', 2, '2017-02-08 13:38:26', '2017-02-08 13:38:26'),
(274, 1, 'updated', 'pagesetting', 2, '2017-02-08 13:39:39', '2017-02-08 13:39:39'),
(275, 1, 'updated', 'pagesetting', 2, '2017-02-08 13:44:09', '2017-02-08 13:44:09'),
(276, 1, 'updated', 'pagesetting', 2, '2017-02-08 13:45:06', '2017-02-08 13:45:06'),
(277, 1, 'updated', 'pagesetting', 6, '2017-02-10 19:42:42', '2017-02-10 19:42:42'),
(278, 1, 'updated', 'users', 1, '2017-02-10 19:42:55', '2017-02-10 19:42:55'),
(279, 1, 'updated', 'ctmake', 6, '2017-02-10 19:56:34', '2017-02-10 19:56:34'),
(280, 1, 'deleted', 'ctmake', 5, '2017-02-10 21:30:27', '2017-02-10 21:30:27'),
(281, 1, 'updated', 'ctmake', 3, '2017-02-10 21:30:45', '2017-02-10 21:30:45'),
(282, 1, 'updated', 'ctmake', 7, '2017-02-10 21:30:58', '2017-02-10 21:30:58'),
(283, 1, 'created', 'suffix', 2, '2017-02-11 02:06:31', '2017-02-11 02:06:31'),
(284, 1, 'created', 'suffix', 3, '2017-02-11 02:06:39', '2017-02-11 02:06:39'),
(285, 1, 'created', 'suffix', 4, '2017-02-11 02:06:47', '2017-02-11 02:06:47'),
(286, 1, 'created', 'ctmodels', 3, '2017-02-11 10:56:29', '2017-02-11 10:56:29'),
(287, 1, 'created', 'ctregistered', 6, '2017-02-11 10:57:57', '2017-02-11 10:57:57'),
(288, 1, 'created', 'ctregistered', 7, '2017-02-11 10:58:05', '2017-02-11 10:58:05'),
(289, 1, 'created', 'ctregistered', 8, '2017-02-11 10:58:11', '2017-02-11 10:58:11'),
(290, 1, 'created', 'ctregistered', 9, '2017-02-11 10:58:18', '2017-02-11 10:58:18'),
(291, 1, 'created', 'ctregistered', 10, '2017-02-11 10:58:24', '2017-02-11 10:58:24'),
(292, 1, 'created', 'ctregistered', 11, '2017-02-11 10:58:33', '2017-02-11 10:58:33'),
(293, 1, 'created', 'ctregistered', 12, '2017-02-11 10:58:41', '2017-02-11 10:58:41'),
(294, 1, 'created', 'ctregistered', 13, '2017-02-11 10:58:47', '2017-02-11 10:58:47'),
(295, 1, 'created', 'ctregistered', 14, '2017-02-11 10:58:55', '2017-02-11 10:58:55'),
(296, 1, 'created', 'cttransmission', 1, '2017-02-11 10:59:35', '2017-02-11 10:59:35'),
(297, 1, 'created', 'cttransmission', 2, '2017-02-11 10:59:42', '2017-02-11 10:59:42'),
(298, 1, 'created', 'ctcolor', 2, '2017-02-11 11:00:09', '2017-02-11 11:00:09'),
(299, 1, 'created', 'ctexteriorcolor', 1, '2017-02-11 11:00:18', '2017-02-11 11:00:18'),
(300, 1, 'created', 'cttrucklisting', 18, '2017-02-11 11:12:00', '2017-02-11 11:12:00'),
(301, 1, 'updated', 'cttrucklisting', 3, '2017-02-11 11:19:01', '2017-02-11 11:19:01'),
(302, 1, 'updated', 'cttransmission', 1, '2017-02-11 12:21:31', '2017-02-11 12:21:31'),
(303, 1, 'created', 'cttrucklisting', 19, '2017-02-12 13:52:33', '2017-02-12 13:52:33'),
(304, 1, 'created', 'enginesize', 1, '2017-02-12 05:03:26', '2017-02-12 05:03:26'),
(305, 1, 'updated', 'cttrucklisting', 19, '2017-02-12 05:06:43', '2017-02-12 05:06:43'),
(306, 1, 'created', 'horsepower', 1, '2017-02-12 05:47:29', '2017-02-12 05:47:29'),
(307, 1, 'created', 'torque', 1, '2017-02-12 05:47:35', '2017-02-12 05:47:35'),
(308, 1, 'created', 'drivetrain', 1, '2017-02-12 05:47:39', '2017-02-12 05:47:39'),
(309, 1, 'created', 'maxseating', 1, '2017-02-12 06:21:49', '2017-02-12 06:21:49'),
(310, 1, 'created', 'maxseating', 2, '2017-02-12 06:21:55', '2017-02-12 06:21:55'),
(311, 1, 'created', 'cttrucklisting', 20, '2017-02-12 06:36:03', '2017-02-12 06:36:03'),
(312, 1, 'updated', 'cttrucklisting', 20, '2017-02-12 07:19:46', '2017-02-12 07:19:46'),
(313, 1, 'updated', 'cttrucklisting', 20, '2017-02-12 07:26:34', '2017-02-12 07:26:34'),
(314, 1, 'created', 'cttrucklisting', 21, '2017-02-12 10:38:51', '2017-02-12 10:38:51'),
(315, 1, 'created', 'cttrucklisting', 22, '2017-02-12 10:58:13', '2017-02-12 10:58:13'),
(316, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 14:27:55', '2017-02-12 14:27:55'),
(317, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 14:53:14', '2017-02-12 14:53:14'),
(318, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 15:20:36', '2017-02-12 15:20:36'),
(319, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 15:31:05', '2017-02-12 15:31:05'),
(320, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 15:37:49', '2017-02-12 15:37:49'),
(321, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 15:42:07', '2017-02-12 15:42:07'),
(322, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 15:57:14', '2017-02-12 15:57:14'),
(323, 1, 'updated', 'cttrucklisting', 22, '2017-02-12 16:03:50', '2017-02-12 16:03:50'),
(324, 1, 'created', 'cttrucklisting', 23, '2017-02-12 16:06:07', '2017-02-12 16:06:07'),
(325, 1, 'updated', 'cttrucklisting', 23, '2017-02-12 16:09:45', '2017-02-12 16:09:45');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointmentschedule`
--
ALTER TABLE `appointmentschedule`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactsetting`
--
ALTER TABLE `contactsetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `content`
--
ALTER TABLE `content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `creditapplication`
--
ALTER TABLE `creditapplication`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctbodystyle`
--
ALTER TABLE `ctbodystyle`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctcarlisting`
--
ALTER TABLE `ctcarlisting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctcarlisting2`
--
ALTER TABLE `ctcarlisting2`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctcartlist`
--
ALTER TABLE `ctcartlist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctclientreview`
--
ALTER TABLE `ctclientreview`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctcolor`
--
ALTER TABLE `ctcolor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctcondition`
--
ALTER TABLE `ctcondition`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctexteriorcolor`
--
ALTER TABLE `ctexteriorcolor`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctfeatures`
--
ALTER TABLE `ctfeatures`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctfueltype`
--
ALTER TABLE `ctfueltype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctmake`
--
ALTER TABLE `ctmake`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctmodels`
--
ALTER TABLE `ctmodels`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ctregistered`
--
ALTER TABLE `ctregistered`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cttransmission`
--
ALTER TABLE `cttransmission`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cttrucklisting`
--
ALTER TABLE `cttrucklisting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `drivetrain`
--
ALTER TABLE `drivetrain`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enginesize`
--
ALTER TABLE `enginesize`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footersetting`
--
ALTER TABLE `footersetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `headersetting`
--
ALTER TABLE `headersetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homesetting`
--
ALTER TABLE `homesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `horsepower`
--
ALTER TABLE `horsepower`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `maxseating`
--
ALTER TABLE `maxseating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `menus_name_unique` (`name`);

--
-- Indexes for table `menu_role`
--
ALTER TABLE `menu_role`
  ADD UNIQUE KEY `menu_role_menu_id_role_id_unique` (`menu_id`,`role_id`),
  ADD KEY `menu_role_menu_id_index` (`menu_id`),
  ADD KEY `menu_role_role_id_index` (`role_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ourteam`
--
ALTER TABLE `ourteam`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesetting`
--
ALTER TABLE `pagesetting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pagesettting`
--
ALTER TABLE `pagesettting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `suffix`
--
ALTER TABLE `suffix`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testdrive`
--
ALTER TABLE `testdrive`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `testtbl`
--
ALTER TABLE `testtbl`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `torque`
--
ALTER TABLE `torque`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trucklisting_img`
--
ALTER TABLE `trucklisting_img`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usercontact`
--
ALTER TABLE `usercontact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `users_logs`
--
ALTER TABLE `users_logs`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointmentschedule`
--
ALTER TABLE `appointmentschedule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `contactsetting`
--
ALTER TABLE `contactsetting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `content`
--
ALTER TABLE `content`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `creditapplication`
--
ALTER TABLE `creditapplication`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
--
-- AUTO_INCREMENT for table `ctbodystyle`
--
ALTER TABLE `ctbodystyle`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ctcarlisting`
--
ALTER TABLE `ctcarlisting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ctcarlisting2`
--
ALTER TABLE `ctcarlisting2`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ctcartlist`
--
ALTER TABLE `ctcartlist`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ctclientreview`
--
ALTER TABLE `ctclientreview`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ctcolor`
--
ALTER TABLE `ctcolor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ctcondition`
--
ALTER TABLE `ctcondition`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ctexteriorcolor`
--
ALTER TABLE `ctexteriorcolor`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ctfeatures`
--
ALTER TABLE `ctfeatures`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `ctfueltype`
--
ALTER TABLE `ctfueltype`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `ctmake`
--
ALTER TABLE `ctmake`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `ctmodels`
--
ALTER TABLE `ctmodels`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `ctregistered`
--
ALTER TABLE `ctregistered`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `cttransmission`
--
ALTER TABLE `cttransmission`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `cttrucklisting`
--
ALTER TABLE `cttrucklisting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `drivetrain`
--
ALTER TABLE `drivetrain`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `enginesize`
--
ALTER TABLE `enginesize`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `footersetting`
--
ALTER TABLE `footersetting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `headersetting`
--
ALTER TABLE `headersetting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `homesetting`
--
ALTER TABLE `homesetting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `horsepower`
--
ALTER TABLE `horsepower`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `maxseating`
--
ALTER TABLE `maxseating`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `ourteam`
--
ALTER TABLE `ourteam`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pagesetting`
--
ALTER TABLE `pagesetting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `pagesettting`
--
ALTER TABLE `pagesettting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
--
-- AUTO_INCREMENT for table `suffix`
--
ALTER TABLE `suffix`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `testdrive`
--
ALTER TABLE `testdrive`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `testtbl`
--
ALTER TABLE `testtbl`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `torque`
--
ALTER TABLE `torque`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `trucklisting_img`
--
ALTER TABLE `trucklisting_img`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `usercontact`
--
ALTER TABLE `usercontact`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users_logs`
--
ALTER TABLE `users_logs`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=326;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `menu_role`
--
ALTER TABLE `menu_role`
  ADD CONSTRAINT `menu_role_menu_id_foreign` FOREIGN KEY (`menu_id`) REFERENCES `menus` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_role_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
