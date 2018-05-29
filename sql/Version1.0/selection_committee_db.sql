-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2018 at 03:15 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `selection_committee_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_roles`
--

CREATE TABLE `skeleton_roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) CHARACTER SET utf8 DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skeleton_roles`
--

INSERT INTO `skeleton_roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user'),
(8, 'Super admin');

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_candidates`
--

CREATE TABLE `skeleton_tbl_candidates` (
  `can_id` int(11) NOT NULL,
  `can_firstname` varchar(45) COLLATE big5_bin NOT NULL,
  `can_lastname` varchar(45) COLLATE big5_bin NOT NULL,
  `can_gender` varchar(45) COLLATE big5_bin NOT NULL,
  `can_age` int(11) NOT NULL,
  `can_rank_inclass` int(11) NOT NULL,
  `can_healthy` varchar(100) COLLATE big5_bin NOT NULL,
  `can_pn_choic_rank` int(11) NOT NULL,
  `can_activity_achivement` varchar(100) COLLATE big5_bin DEFAULT NULL,
  `can_resposibility` varchar(45) COLLATE big5_bin NOT NULL,
  `can_communicate` varchar(45) COLLATE big5_bin NOT NULL,
  `can_other_choice_rank` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_pnc_motivation` varchar(45) COLLATE big5_bin NOT NULL,
  `can_other_scholaship` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_student_commit` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_parents_commit` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_global_grade` varchar(45) COLLATE big5_bin NOT NULL,
  `can_investigator_conclusion` varchar(250) COLLATE big5_bin DEFAULT NULL,
  `can_ngo_comment` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_health_comment` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_images` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `pro_id` int(11) NOT NULL,
  `ngo_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin;

--
-- Dumping data for table `skeleton_tbl_candidates`
--

INSERT INTO `skeleton_tbl_candidates` (`can_id`, `can_firstname`, `can_lastname`, `can_gender`, `can_age`, `can_rank_inclass`, `can_healthy`, `can_pn_choic_rank`, `can_activity_achivement`, `can_resposibility`, `can_communicate`, `can_other_choice_rank`, `can_pnc_motivation`, `can_other_scholaship`, `can_student_commit`, `can_parents_commit`, `can_global_grade`, `can_investigator_conclusion`, `can_ngo_comment`, `can_health_comment`, `can_images`, `pro_id`, `ngo_id`) VALUES
(2, 'Sopheak', 'Rith', 'Male', 21, 10, 'Other', 2, 'Good ', '20/25', '20/20', '2', '20/20', 'no', 'Try to student', 'motivation the child to study ', 'B+', 'Good ', 'Good ', 'Good ', NULL, 1, 1),
(3, 'Vuthy', 'Pouk', 'Female', 20, 10, 'Other', 1, '10', '1', '20/25', '1', '20/25', '20/20', '2', 'I will study hard to complete my gold ', 'Failed', 'She will select to study at PNC because of she is very rich test new add', 'A+', 'Healthy', NULL, 10, 1),
(4, 'Chan ', 'chea', 'Male', 22, 10, 'healthy ', 2, 'Try to study hard ', '20/20', '20/20', '3', '20/25', 'No', 'Try to study hard to complete my goal  ', 'Motivation the child to leaning ', 'A+', 'Good ', 'Good ', 'healthy ', NULL, 3, 4),
(5, 'Nuon ', 'Neoung ', 'Female', 20, 9, 'healthy ', 2, 'Good ', '20/25', '20/20', '3', '20/25', 'No ', 'try to study hard ', 'motivation the child to study ', 'B+', 'Good ', 'Good ', 'healthy ', NULL, 6, 6),
(6, 'Dakhen ', 'sok ', 'Male', 20, 9, 'Other', 2, 'Good ', '20/25', '20/20', '3', '20/25', 'No ', 'try to study hard ', 'motivation the child to study ', 'B-', 'Good ', 'Good ', 'healthy ', NULL, 6, 6),
(7, 'Sreylang', 'Seng', 'Female', 20, 15, 'Healthy', 2, 'She has no achievement', '10', '15', '2', '15', 'NO', 'She will try to study hard ', 'I will support my daughter', 'A+', NULL, NULL, '', NULL, 1, 1),
(8, 'Prem', 'Mann', 'Male', 23, 1, 'Healthy', 1, 'no', '5', '13', '1', '15', 'RUPP', 'I will study hard', 'I will support my son', 'A+', NULL, NULL, '', NULL, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_expense`
--

CREATE TABLE `skeleton_tbl_expense` (
  `ex_id` int(11) NOT NULL,
  `ex_rice` int(11) DEFAULT NULL,
  `ex_food` int(11) DEFAULT NULL,
  `ex_firewood` int(11) DEFAULT NULL,
  `ex_loan` int(11) DEFAULT NULL,
  `ex_study` int(11) DEFAULT NULL,
  `ex_medical` int(11) DEFAULT NULL,
  `ex_electricities_water` int(11) DEFAULT NULL,
  `ex_agriculture` int(11) DEFAULT NULL,
  `ex_weding` int(11) DEFAULT NULL,
  `ex_other_utilities` int(11) DEFAULT NULL,
  `ex_total` int(11) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_expense`
--

INSERT INTO `skeleton_tbl_expense` (`ex_id`, `ex_rice`, `ex_food`, `ex_firewood`, `ex_loan`, `ex_study`, `ex_medical`, `ex_electricities_water`, `ex_agriculture`, `ex_weding`, `ex_other_utilities`, `ex_total`, `tbl_candidates_can_id`) VALUES
(1, 10, 20, 10, 20, 30, 10, 10, 30, 30, 10, 200, 2),
(2, 100, 200, 300, 400, 500, 600, 700, 800, 900, 1000, 245, 3),
(3, 5, 10, 15, 20, 25, 30, 35, 40, 45, 50, 55, 4),
(4, 10, 20, 10, 10, 50, 20, 70, 80, 30, 100, 200, 5),
(5, 5, 20, 10, 40, 50, 60, 70, 80, 30, 100, 200, 6),
(6, 20, 20, 20, 20, 20, 20, 20, 20, 20, 20, 200, 0),
(7, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(8, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 10, 0),
(9, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0),
(10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 100, 0),
(11, 22, 22, 22, 22, 22, 22, 22, 22, 22, 22, 220, 0),
(12, 10, 10, 10, 10, 10, 10, 1, 10, 10, 10, 91, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_home_asset`
--

CREATE TABLE `skeleton_tbl_home_asset` (
  `h_id` int(11) NOT NULL,
  `h_refrigerator` int(11) DEFAULT NULL,
  `h_air_condictioner` int(11) DEFAULT NULL,
  `h_lcd_tv` int(11) DEFAULT NULL,
  `h_computer_big_100` int(11) DEFAULT NULL,
  `h_furnished_big_300` int(11) DEFAULT NULL,
  `h_smartphone_big_100` int(11) DEFAULT NULL,
  `h_camera_big_100` int(11) DEFAULT NULL,
  `h_sofa_big_300` int(11) DEFAULT NULL,
  `h_motobike_big_500` int(11) DEFAULT NULL,
  `h_farming_machine` int(11) DEFAULT NULL,
  `h_car_truck` int(11) DEFAULT NULL,
  `h_cow` int(11) DEFAULT NULL,
  `h_buffaloe` int(11) DEFAULT NULL,
  `h_pig` int(11) DEFAULT NULL,
  `h_farm_size` int(11) DEFAULT NULL,
  `h_radio` int(11) DEFAULT NULL,
  `h_rice_cooker` int(11) DEFAULT NULL,
  `h_color_tv` int(11) DEFAULT NULL,
  `h_computer_smal_100` int(11) NOT NULL,
  `h_dvd_player` int(11) NOT NULL,
  `h_phone_smal_100` int(11) DEFAULT NULL,
  `h_camera_small_100` int(11) DEFAULT NULL,
  `h_sofa_smal_300` int(11) DEFAULT NULL,
  `h_gascooker` int(11) DEFAULT NULL,
  `h_fruit_blender` int(11) DEFAULT NULL,
  `h_electrical_cooker` int(11) DEFAULT NULL,
  `h_vehicles_comment` varchar(255) DEFAULT NULL,
  `h_animals_comment` varchar(255) DEFAULT NULL,
  `h_farm_comment` varchar(255) DEFAULT NULL,
  `h_total_x5` int(11) NOT NULL,
  `h_total_x3` int(11) NOT NULL,
  `h_glbal_total` int(11) NOT NULL,
  `h_poverty_certificate` varchar(45) DEFAULT NULL,
  `h_level` int(11) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_home_asset`
--

INSERT INTO `skeleton_tbl_home_asset` (`h_id`, `h_refrigerator`, `h_air_condictioner`, `h_lcd_tv`, `h_computer_big_100`, `h_furnished_big_300`, `h_smartphone_big_100`, `h_camera_big_100`, `h_sofa_big_300`, `h_motobike_big_500`, `h_farming_machine`, `h_car_truck`, `h_cow`, `h_buffaloe`, `h_pig`, `h_farm_size`, `h_radio`, `h_rice_cooker`, `h_color_tv`, `h_computer_smal_100`, `h_dvd_player`, `h_phone_smal_100`, `h_camera_small_100`, `h_sofa_smal_300`, `h_gascooker`, `h_fruit_blender`, `h_electrical_cooker`, `h_vehicles_comment`, `h_animals_comment`, `h_farm_comment`, `h_total_x5`, `h_total_x3`, `h_glbal_total`, `h_poverty_certificate`, `h_level`, `tbl_candidates_can_id`) VALUES
(1, 1, 1, 2, 2, 2, 5, 5, 1, 2, 2, 1, 2, 2, 2, 200, 2, 2, 1, 2, 2, 2, 1, 1, 4, 4, 4, 'I have a small farm, and it is need to decide to my members in my family. ', 'I have a small farm, and it is need to decide to my members in my family. ', 'farming ', 200, 300, 400, 'Good', 6, 2),
(2, 5, 0, 0, 0, 1, 2, 0, 2, 1, 0, 0, 1, 0, 3, 5, 3, 2, 1, 0, 1, 2, 0, 0, 1, 2, 0, 'For farming machine and car or truck for farming they are don\'t have.', 'They have chicken', 'I have a small farm, and it is need to decide to my members in my family. ', 25, 15, 150, 'Yes', 1, 3),
(3, 1, 2, 1, 2, 2, 1, 2, 1, 1, 1, 2, 1, 2, 3, 2, 1, 2, 1, 1, 2, 1, 2, 1, 2, 1, 2, '2', 'I have a few animal for supporting my family.', 'I have a few animal for supporting my family.', 2, 200, 200, '1000', 2, 4),
(4, 1, 2, 1, 2, 2, 1, 2, 1, 1, 1, 2, 1, 2, 3, 2, 1, 2, 1, 1, 2, 1, 2, 1, 2, 1, 2, '2', 'I have a few animal for supporting my family.', 'I have a few animal for supporting my family.', 2, 200, 200, '1000', 2, 5),
(5, 1, 2, 1, 2, 2, 1, 2, 1, 1, 1, 2, 1, 2, 3, 2, 1, 2, 1, 1, 2, 1, 2, 1, 2, 1, 2, '2', 'I have a few animal for supporting my family.', 'I have a few animal for supporting my family.', 2, 200, 200, '1000', 2, 6),
(6, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10000, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, 10, '', '', '', 140, 113, 253, '1', NULL, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_income`
--

CREATE TABLE `skeleton_tbl_income` (
  `in_id` int(11) NOT NULL,
  `f_monthly` int(11) DEFAULT NULL,
  `f_daily` int(11) DEFAULT NULL,
  `f_seasonal` int(11) DEFAULT NULL,
  `f_yearly` int(11) DEFAULT NULL,
  `f_total` int(11) DEFAULT NULL,
  `c_monthly` int(11) DEFAULT NULL,
  `c_daily` int(11) DEFAULT NULL,
  `c_seasonal` int(11) DEFAULT NULL,
  `c_yearly` int(11) DEFAULT NULL,
  `c_total` int(11) DEFAULT NULL,
  `g_monthly` int(11) DEFAULT NULL,
  `g_monthly_individual` int(11) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_income`
--

INSERT INTO `skeleton_tbl_income` (`in_id`, `f_monthly`, `f_daily`, `f_seasonal`, `f_yearly`, `f_total`, `c_monthly`, `c_daily`, `c_seasonal`, `c_yearly`, `c_total`, `g_monthly`, `g_monthly_individual`, `tbl_candidates_can_id`) VALUES
(1, 100000, 10000, 1000, 1000000, 483417, 10000, 10000, 1000, 10000, 310917, 3000, 100, 2),
(2, 100, 100, 200, 100, 3125, 100, 100, 150, 200, 3129, 632917, 36, 3),
(3, 150, 15, 20, 2000, 3000, 100, 10, 20, 200, 4000, 4500, 150, 4),
(4, 100, 10, 20, 1000, 2000, 100, 10, 10, 200, 1000, 3000, 100, 4),
(5, 10000, 10000, 20000, 1000000, 395000, 100000, 10000, 10000, 200000, 417500, 3000, 100, 5),
(6, 100, 10, 20, 1000, 2000, 100, 10, 10, 200, 1000, 3000, 100, 6),
(7, 100, 100, 100, 100, 3117, 100, 100, 100, 100, 3117, 6233, 1, 0),
(8, 10, 10, 10, 10, 312, 1, 10, 10, 10, 303, 614, 1, 0),
(9, 33, 333, 33, 33, 10029, 33, 33, 333, 33, 1054, 11082, 10, 0),
(10, 10, 10, 10, 10, 312, 10, 10, 10, 10, 312, 623, 623, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_loan_debt`
--

CREATE TABLE `skeleton_tbl_loan_debt` (
  `ld_id` int(11) NOT NULL,
  `ld_initial_amount` int(11) DEFAULT NULL,
  `ld_instritution` int(11) DEFAULT NULL,
  `ld_interest_tates` varchar(45) DEFAULT NULL,
  `ld_reason` varchar(255) DEFAULT NULL,
  `ld_monthly` int(11) DEFAULT NULL,
  `ld_trimester` int(11) DEFAULT NULL,
  `ld_semester` int(11) DEFAULT NULL,
  `ld_capital` int(11) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_loan_debt`
--

INSERT INTO `skeleton_tbl_loan_debt` (`ld_id`, `ld_initial_amount`, `ld_instritution`, `ld_interest_tates`, `ld_reason`, `ld_monthly`, `ld_trimester`, `ld_semester`, `ld_capital`, `tbl_candidates_can_id`) VALUES
(1, 10, 20, '20', 'My family want to work as a business. error something', 200, 100, 200, 100, 2),
(2, 100, 200, '200', 'Borrow to buy land to grow the plant', 75, 98, 190, 90, 3),
(3, 10, 20, '20', 'My family want to work as a business. add something', 200, 100, 200, 100, 4),
(4, 10, 20, '20', 'My family want to work as a business. add something', 200, 100, 200, 100, 5),
(5, 10, 20, '20', 'My family want to work as a business. change something', 200, 100, 200, 100, 6),
(6, 10, 10, '10', 'lazy to earn money', 10, 10, 10, 10, 0),
(7, 23, 23, '23', 'Lazy to earn money it is very diffecult', 22, 22, 22, 22, 0),
(8, 0, 0, '', '', 0, 0, 0, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_ngo`
--

CREATE TABLE `skeleton_tbl_ngo` (
  `ngo_id` int(11) NOT NULL,
  `ngo_name` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_ngo`
--

INSERT INTO `skeleton_tbl_ngo` (`ngo_id`, `ngo_name`) VALUES
(1, 'PSE'),
(2, 'KBFC'),
(3, 'CETC'),
(4, 'CIFS'),
(5, 'Other '),
(6, 'Engang ');

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_profile`
--

CREATE TABLE `skeleton_tbl_profile` (
  `p_id` int(11) NOT NULL,
  `f_age` int(11) DEFAULT NULL,
  `f_occupation` varchar(45) DEFAULT NULL,
  `f_health` varchar(45) DEFAULT NULL,
  `f_edu` varchar(11) DEFAULT NULL,
  `m_age` int(11) DEFAULT NULL,
  `m_occupation` varchar(45) DEFAULT NULL,
  `m_health` varchar(45) DEFAULT NULL,
  `m_edu` varchar(11) DEFAULT NULL,
  `number_sibbling` int(11) DEFAULT NULL,
  `number_maried` int(11) DEFAULT NULL,
  `number_separated` int(11) DEFAULT NULL,
  `number_family_living` int(11) DEFAULT NULL,
  `stu_rank` int(11) DEFAULT NULL,
  `f_occupation_comment` varchar(255) DEFAULT NULL,
  `m_occupation_comment` varchar(255) DEFAULT NULL,
  `f_health_comment` varchar(255) DEFAULT NULL,
  `m_health_comment` varchar(255) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_profile`
--

INSERT INTO `skeleton_tbl_profile` (`p_id`, `f_age`, `f_occupation`, `f_health`, `f_edu`, `m_age`, `m_occupation`, `m_health`, `m_edu`, `number_sibbling`, `number_maried`, `number_separated`, `number_family_living`, `stu_rank`, `f_occupation_comment`, `m_occupation_comment`, `f_health_comment`, `m_health_comment`, `tbl_candidates_can_id`) VALUES
(1, 30, 'Teacher ', 'Healthy', '10', 29, 'Police ', 'Healthy ', '10', 4, 1, 1, 3, 2, 'Is a normal family ', 'Is a normal family ', 'Good ', 'Good ', 2),
(2, 60, 'Teacher', 'Healthy', 'University', 56, 'Police Officer', 'Healthy', 'University', 4, 2, 3, 1, 5, '', '', 'Good healthy ', '', 3),
(3, 80, 'Agriculture', 'Healthy', 'University', 74, 'Police Officer', 'Healthy', '12', 12, 10, 2, 9, 9, 'AS a normal family ', 'AS a normal family ', 'Good ', 'Good ', 4),
(4, 0, 'Farmer/Laborer', 'Healthy', '1', 0, 'Farmer/Laborer', 'Healthy', '1', 1, 0, 0, 1, 1, '', '', '', '', 0),
(5, 0, 'Farmer/Laborer', 'Healthy', '1', 0, 'Farmer/Laborer', 'Healthy', '1', 1, 0, 0, 1, 1, '', '', '', '', 0),
(6, 0, 'Farmer/Laborer', 'Healthy', '1', 0, 'Farmer/Laborer', 'Healthy', '1', 1, 0, 0, 1, 1, '', '', '', '', 0),
(7, 0, 'Farmer/Laborer', 'Healthy', '1', 0, 'Farmer/Laborer', 'Healthy', '1', 1, 0, 0, 1, 1, '', '', '', '', 0),
(8, 50, 'Teacher', 'Healthy', '12', 47, 'Teacher', 'Healthy', '12', 1, 0, 0, 1, 1, '', '', '', '', 0),
(9, 70, 'Soldier', 'Healthy', '11', 60, 'Teacher', 'Healthy', 'University', 1, 0, 0, 1, 1, '', '', '', '', 0),
(10, 56, 'Teacher', 'Healthy', '12', 45, 'Teacher', 'Healthy', 'University', 1, 0, 0, 1, 1, '', '', '', '', 0),
(11, 44, 'Farmer/Laborer', 'Healthy', '1', 44, 'Farmer/Laborer', 'Healthy', '1', 1, 0, 0, 1, 1, '', '', '', '', 0),
(12, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0),
(13, 56, 'Farmer/Laborer', 'Healthy', NULL, 65, 'Farmer/Laborer', 'Healthy', '0', 1, 1, 1, 1, 1, '', '', '', '', 0),
(14, 56, 'Police Officer', 'Healthy', NULL, 55, 'Teacher', 'Healthy', 'University', 1, 1, 1, 1, 1, '', '', '', '', 0),
(15, 66, 'Soldier', 'Healthy', NULL, 55, 'Teacher', 'Healthy', '12', 1, 1, 1, 1, 1, '', '', '', '', 0),
(16, 65, 'Teacher', 'Healthy', '12', 55, 'Teacher', 'Healthy', 'University', 1, 1, 1, 1, 1, '', '', '', '', 0),
(17, 66, 'Police Officer', 'Healthy', '11', 55, 'Teacher', 'Healthy', '10', 9, 3, 1, 1, 1, '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_provinces`
--

CREATE TABLE `skeleton_tbl_provinces` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_provinces`
--

INSERT INTO `skeleton_tbl_provinces` (`pro_id`, `pro_name`) VALUES
(1, 'Preah Vihear'),
(2, 'Pursat'),
(3, 'Kompong Thom'),
(4, 'Battam bong '),
(5, 'Phnom Penh'),
(6, 'Banteay Mean chey'),
(7, 'Kompong Cham '),
(8, 'kompong Chhnang '),
(9, 'Kom pot '),
(10, 'kandal');

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_residence`
--

CREATE TABLE `skeleton_tbl_residence` (
  `re_id` int(11) NOT NULL,
  `re_status` varchar(45) NOT NULL,
  `re_age` int(11) NOT NULL,
  `re_rating_scale` int(11) NOT NULL,
  `tbl_candidates_can_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_residence`
--

INSERT INTO `skeleton_tbl_residence` (`re_id`, `re_status`, `re_age`, `re_rating_scale`, `tbl_candidates_can_id`) VALUES
(1, 'Rent', 5, 3, 2),
(2, 'Inherited', 9, 1, 3),
(3, 'Rent ', 6, 2, 4),
(4, 'Purchased', 2, 2, 0),
(5, 'Shared', 7, 3, 0),
(6, 'Inherited', 2, 2, 0),
(7, 'Inherited', 4, 1, 0);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_users`
--

CREATE TABLE `skeleton_users` (
  `id` int(11) NOT NULL COMMENT 'Internal unique identifier',
  `firstname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'User Firstname',
  `lastname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'User Lastname',
  `login` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Login used for connecting tothe application',
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Email',
  `password` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT 'SHA1 encoded password',
  `role` int(11) DEFAULT NULL COMMENT 'Binary mask for role',
  `active` tinyint(1) DEFAULT '1' COMMENT 'Is user active'
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `skeleton_users`
--

INSERT INTO `skeleton_users` (`id`, `firstname`, `lastname`, `login`, `email`, `password`, `role`, `active`) VALUES
(1, 'Benjamin', 'BALET', 'bbalet', 'benjamin.balet@gmail.com', '$2a$08$LeUbaGFqJjLSAN7to9URsuHB41zcmsMBgBhpZuFp2y2OTxtVcMQ.C', 1, 1),
(2, 'john', 'DOE', 'jdoe', 'jdoe@test.org', '$2a$08$Gk9WE1duEcKhEhxUKFmZteUU0sCZTgZIKkiPxhCe7yi0Jw0pBbDNW', 2, 1),
(3, 'Bob', 'DENARD', 'bdenard', 'bdenard@test.org', '$2a$08$14jdHTPUZe5.zXxQ1NqhhO83xUt2Zkr.csGw10BH75B3VrJiNU8Bq', 2, 1),
(5, 'Admin', 'ADMINISTRATOR', 'admin', 'admin@skeleton.org', '$2a$08$cnX6al6aTkoyh/N/tKZ11e8ec9J/sldA6R4NdP.2qhhDi0OD3ek1G', 1, 1),
(8, 'sopheak', 'RITH', 'sopheak', 'sopheak.rith@student.passerellesnumeriques.org', '$2a$08$nQm3BIAM46a4ifvNnNL3Mu0/yyJIJstsca5aMpCv1K73IHD8rXFjS', 1, 1),
(11, 'chan', 'CHEA', 'cchea', 'chan.chea@student.passerellesnumeriques.org', '$2a$08$VnyzyHZ1SADBplAOUOdqJ./iYPPX7pECmeiZs3wEzEpWnPOMabqEO', 1, 1),
(13, 'chan', 'JUMAERY', 'cjumaery', 'chan.chea@student.passerellesnumeriques.org', '$2a$08$sABHLq4AWy6sxF500s6E9.3/N/uKX.fss0lGR8IOEto0.BWvCOoM.', 2, 1),
(15, 'nuon', 'NEOURNG', 'nuon', 'nuon.neourng@student.passerellesnumeriques.org', '$2a$08$1mpsSyUa09NwXHfCIitxOOVh22cdzdko6SucYI0G9M2wHqfzAtTRS', 2, 1),
(17, 'vuthy', 'POUK', 'vuthy', 'vuthy.pouk@student.passerellesnumeriques.org', '$2a$08$PDVtAMhh28yWnmeMiX6WOuT11Q0VEItTHMtoOVrFBuOuSm8thKKAq', 2, 1),
(18, 'visoth', 'RITH', 'visoth', 'sopheak.rith365@gmail.com', '$2a$08$0NkedQVGclz01q0Gj1g6MuP9e.i0QLZwDms0ndudWVSoFkkTHTCe2', 1, 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `skeleton_roles`
--
ALTER TABLE `skeleton_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `skeleton_tbl_candidates`
--
ALTER TABLE `skeleton_tbl_candidates`
  ADD PRIMARY KEY (`can_id`),
  ADD UNIQUE KEY `ca_id_UNIQUE` (`can_id`),
  ADD KEY `fk_tbl_candidates_tbl_provinces1_idx` (`pro_id`),
  ADD KEY `fk_skeleton_tbl_candidates_skeleton_tbl_ngo1_idx` (`ngo_id`);

--
-- Indexes for table `skeleton_tbl_expense`
--
ALTER TABLE `skeleton_tbl_expense`
  ADD PRIMARY KEY (`ex_id`),
  ADD UNIQUE KEY `ex_id_UNIQUE` (`ex_id`),
  ADD KEY `fk_skeleton_tbl_expense_skeleton_tbl_candidates1_idx` (`tbl_candidates_can_id`);

--
-- Indexes for table `skeleton_tbl_home_asset`
--
ALTER TABLE `skeleton_tbl_home_asset`
  ADD PRIMARY KEY (`h_id`),
  ADD UNIQUE KEY `h_id_UNIQUE` (`h_id`),
  ADD KEY `fk_skeleton_tbl_home_asset_skeleton_tbl_candidates1_idx` (`tbl_candidates_can_id`);

--
-- Indexes for table `skeleton_tbl_income`
--
ALTER TABLE `skeleton_tbl_income`
  ADD PRIMARY KEY (`in_id`),
  ADD UNIQUE KEY `in_id_UNIQUE` (`in_id`),
  ADD KEY `fk_skeleton_tbl_income_skeleton_tbl_candidates1_idx` (`tbl_candidates_can_id`);

--
-- Indexes for table `skeleton_tbl_loan_debt`
--
ALTER TABLE `skeleton_tbl_loan_debt`
  ADD PRIMARY KEY (`ld_id`),
  ADD UNIQUE KEY `ld_id_UNIQUE` (`ld_id`),
  ADD KEY `fk_skeleton_tbl_loan_debt_skeleton_tbl_candidates1_idx` (`tbl_candidates_can_id`);

--
-- Indexes for table `skeleton_tbl_ngo`
--
ALTER TABLE `skeleton_tbl_ngo`
  ADD PRIMARY KEY (`ngo_id`),
  ADD UNIQUE KEY `ngo_id_UNIQUE` (`ngo_id`);

--
-- Indexes for table `skeleton_tbl_profile`
--
ALTER TABLE `skeleton_tbl_profile`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `par_id_UNIQUE` (`p_id`),
  ADD KEY `fk_skeleton_tbl_profile_skeleton_tbl_candidates1_idx` (`tbl_candidates_can_id`);

--
-- Indexes for table `skeleton_tbl_provinces`
--
ALTER TABLE `skeleton_tbl_provinces`
  ADD PRIMARY KEY (`pro_id`),
  ADD UNIQUE KEY `pro_id_UNIQUE` (`pro_id`);

--
-- Indexes for table `skeleton_tbl_residence`
--
ALTER TABLE `skeleton_tbl_residence`
  ADD PRIMARY KEY (`re_id`),
  ADD UNIQUE KEY `re_id_UNIQUE` (`re_id`),
  ADD KEY `fk_skeleton_tbl_residence_skeleton_tbl_candidates1_idx` (`tbl_candidates_can_id`);

--
-- Indexes for table `skeleton_users`
--
ALTER TABLE `skeleton_users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `skeleton_tbl_candidates`
--
ALTER TABLE `skeleton_tbl_candidates`
  MODIFY `can_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skeleton_tbl_expense`
--
ALTER TABLE `skeleton_tbl_expense`
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `skeleton_tbl_home_asset`
--
ALTER TABLE `skeleton_tbl_home_asset`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skeleton_tbl_income`
--
ALTER TABLE `skeleton_tbl_income`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skeleton_tbl_loan_debt`
--
ALTER TABLE `skeleton_tbl_loan_debt`
  MODIFY `ld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `skeleton_tbl_ngo`
--
ALTER TABLE `skeleton_tbl_ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `skeleton_tbl_profile`
--
ALTER TABLE `skeleton_tbl_profile`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `skeleton_tbl_provinces`
--
ALTER TABLE `skeleton_tbl_provinces`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skeleton_tbl_residence`
--
ALTER TABLE `skeleton_tbl_residence`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `skeleton_users`
--
ALTER TABLE `skeleton_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Internal unique identifier', AUTO_INCREMENT=19;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `skeleton_tbl_candidates`
--
ALTER TABLE `skeleton_tbl_candidates`
  ADD CONSTRAINT `fk_skeleton_tbl_candidates_skeleton_tbl_ngo1` FOREIGN KEY (`ngo_id`) REFERENCES `skeleton_tbl_ngo` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_tbl_candidates_tbl_provinces1` FOREIGN KEY (`pro_id`) REFERENCES `skeleton_tbl_provinces` (`pro_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skeleton_tbl_expense`
--
ALTER TABLE `skeleton_tbl_expense`
  ADD CONSTRAINT `fk_skeleton_tbl_expense_skeleton_tbl_candidates1` FOREIGN KEY (`tbl_candidates_can_id`) REFERENCES `skeleton_tbl_candidates` (`can_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skeleton_tbl_home_asset`
--
ALTER TABLE `skeleton_tbl_home_asset`
  ADD CONSTRAINT `fk_skeleton_tbl_home_asset_skeleton_tbl_candidates1` FOREIGN KEY (`tbl_candidates_can_id`) REFERENCES `skeleton_tbl_candidates` (`can_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skeleton_tbl_income`
--
ALTER TABLE `skeleton_tbl_income`
  ADD CONSTRAINT `fk_skeleton_tbl_income_skeleton_tbl_candidates1` FOREIGN KEY (`tbl_candidates_can_id`) REFERENCES `skeleton_tbl_candidates` (`can_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skeleton_tbl_loan_debt`
--
ALTER TABLE `skeleton_tbl_loan_debt`
  ADD CONSTRAINT `fk_skeleton_tbl_loan_debt_skeleton_tbl_candidates1` FOREIGN KEY (`tbl_candidates_can_id`) REFERENCES `skeleton_tbl_candidates` (`can_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skeleton_tbl_profile`
--
ALTER TABLE `skeleton_tbl_profile`
  ADD CONSTRAINT `fk_skeleton_tbl_profile_skeleton_tbl_candidates1` FOREIGN KEY (`tbl_candidates_can_id`) REFERENCES `skeleton_tbl_candidates` (`can_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `skeleton_tbl_residence`
--
ALTER TABLE `skeleton_tbl_residence`
  ADD CONSTRAINT `fk_skeleton_tbl_residence_skeleton_tbl_candidates1` FOREIGN KEY (`tbl_candidates_can_id`) REFERENCES `skeleton_tbl_candidates` (`can_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
