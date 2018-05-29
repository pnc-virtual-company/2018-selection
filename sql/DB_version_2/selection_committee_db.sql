-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2018 at 02:41 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

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
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_candidates`
--

CREATE TABLE `skeleton_tbl_candidates` (
  `can_id` int(11) NOT NULL,
  `can_firstname` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_lastname` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_gender` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_age` int(11) DEFAULT NULL,
  `can_rank_inclass` int(11) DEFAULT NULL,
  `can_healthy` varchar(100) COLLATE big5_bin DEFAULT NULL,
  `can_pn_choic_rank` int(11) DEFAULT NULL,
  `can_activity_achivement` varchar(100) COLLATE big5_bin DEFAULT NULL,
  `can_resposibility` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_communicate` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_other_choice_rank` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_pnc_motivation` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_other_scholaship` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_student_commit` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_parents_commit` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_global_grade` varchar(45) COLLATE big5_bin DEFAULT NULL,
  `can_investigator_conclusion` varchar(250) COLLATE big5_bin DEFAULT NULL,
  `can_ngo_comment` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_health_comment` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `can_images` varchar(255) COLLATE big5_bin DEFAULT NULL,
  `pro_id` int(11) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=big5 COLLATE=big5_bin;

--
-- Dumping data for table `skeleton_tbl_candidates`
--

INSERT INTO `skeleton_tbl_candidates` (`can_id`, `can_firstname`, `can_lastname`, `can_gender`, `can_age`, `can_rank_inclass`, `can_healthy`, `can_pn_choic_rank`, `can_activity_achivement`, `can_resposibility`, `can_communicate`, `can_other_choice_rank`, `can_pnc_motivation`, `can_other_scholaship`, `can_student_commit`, `can_parents_commit`, `can_global_grade`, `can_investigator_conclusion`, `can_ngo_comment`, `can_health_comment`, `can_images`, `pro_id`, `ngo_id`) VALUES
(1, 'dakhen', 'SOK', 'Male', 0, 1, 'Healthy', 1, 'I am an outstanding', '1', '1', '1', '1', 'RUPP', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'A', NULL, NULL, '', NULL, 0, 1),
(5, 'Dakhen', 'SOK', 'Male', 20, 1, 'Healthy', 2, 'I am an outstanding', '19', '19', '1', '19', 'ITC', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'A+', 'He such a good candidate', NULL, 'I never get sick early', NULL, 1, 1),
(7, 'Selena ', 'GOMEZ', 'Female', 23, 1, 'Healthy', 1, 'I am an outstanding', '19', '19', '1', '19', 'ITC', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'A', 'I like her', NULL, 'I never get sick early', NULL, 1, 1);

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
  `tbl_candidates_can_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_expense`
--

INSERT INTO `skeleton_tbl_expense` (`ex_id`, `ex_rice`, `ex_food`, `ex_firewood`, `ex_loan`, `ex_study`, `ex_medical`, `ex_electricities_water`, `ex_agriculture`, `ex_weding`, `ex_other_utilities`, `ex_total`, `tbl_candidates_can_id`) VALUES
(2, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 1000, 7);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_home_asset`
--

CREATE TABLE `skeleton_tbl_home_asset` (
  `h_id` int(11) NOT NULL,
  `h_refrigerator` int(11) DEFAULT NULL,
  `h_air_condictioner` int(11) DEFAULT NULL,
  `h_lcd_tv` int(11) DEFAULT NULL,
  `h_computer_big_100` double DEFAULT NULL,
  `h_furnished_big_300` double DEFAULT NULL,
  `h_smartphone_big_100` double DEFAULT NULL,
  `h_camera_big_100` double DEFAULT NULL,
  `h_sofa_big_300` double DEFAULT NULL,
  `h_motobike_big_500` int(11) DEFAULT NULL,
  `h_farming_machine` double DEFAULT NULL,
  `h_car_truck` int(11) DEFAULT NULL,
  `h_cow` int(11) DEFAULT NULL,
  `h_buffaloe` int(11) DEFAULT NULL,
  `h_pig` int(11) DEFAULT NULL,
  `h_farm_size` double DEFAULT NULL,
  `h_radio` int(11) DEFAULT NULL,
  `h_rice_cooker` int(11) DEFAULT NULL,
  `h_color_tv` int(11) DEFAULT NULL,
  `h_computer_smal_100` double NOT NULL,
  `h_dvd_player` int(11) NOT NULL,
  `h_phone_smal_100` double DEFAULT NULL,
  `h_camera_small_100` double DEFAULT NULL,
  `h_sofa_smal_300` double DEFAULT NULL,
  `h_gascooker` int(11) DEFAULT NULL,
  `h_fruit_blender` int(11) DEFAULT NULL,
  `h_electrical_cooker` int(11) DEFAULT NULL,
  `h_vehicles_comment` varchar(255) DEFAULT NULL,
  `h_animals_comment` varchar(255) DEFAULT NULL,
  `h_farm_comment` varchar(255) DEFAULT NULL,
  `h_total_x5` double NOT NULL,
  `h_total_x3` double NOT NULL,
  `h_glbal_total` double NOT NULL,
  `h_poverty_certificate` varchar(45) DEFAULT NULL,
  `h_level` int(11) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_home_asset`
--

INSERT INTO `skeleton_tbl_home_asset` (`h_id`, `h_refrigerator`, `h_air_condictioner`, `h_lcd_tv`, `h_computer_big_100`, `h_furnished_big_300`, `h_smartphone_big_100`, `h_camera_big_100`, `h_sofa_big_300`, `h_motobike_big_500`, `h_farming_machine`, `h_car_truck`, `h_cow`, `h_buffaloe`, `h_pig`, `h_farm_size`, `h_radio`, `h_rice_cooker`, `h_color_tv`, `h_computer_smal_100`, `h_dvd_player`, `h_phone_smal_100`, `h_camera_small_100`, `h_sofa_smal_300`, `h_gascooker`, `h_fruit_blender`, `h_electrical_cooker`, `h_vehicles_comment`, `h_animals_comment`, `h_farm_comment`, `h_total_x5`, `h_total_x3`, `h_glbal_total`, `h_poverty_certificate`, `h_level`, `tbl_candidates_can_id`) VALUES
(1, 100, 100, 100, 1000, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 1000, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '', '100', '', 1400, 6003, 7403, '1', NULL, 5),
(2, 1, 1, 12, 2, 2, 2, 2, 2, 100, 100, 100, 100, 100, 100, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '', '', '', 624, 69, 693, '2', NULL, 7);

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_income`
--

CREATE TABLE `skeleton_tbl_income` (
  `in_id` int(11) NOT NULL,
  `f_monthly` double DEFAULT NULL,
  `f_daily` double DEFAULT NULL,
  `f_seasonal` double DEFAULT NULL,
  `f_yearly` double DEFAULT NULL,
  `f_total` double DEFAULT NULL,
  `c_monthly` double DEFAULT NULL,
  `c_daily` double DEFAULT NULL,
  `c_seasonal` double DEFAULT NULL,
  `c_yearly` double DEFAULT NULL,
  `c_total` double DEFAULT NULL,
  `g_monthly` double DEFAULT NULL,
  `g_monthly_individual` double DEFAULT NULL,
  `tbl_candidates_can_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_income`
--

INSERT INTO `skeleton_tbl_income` (`in_id`, `f_monthly`, `f_daily`, `f_seasonal`, `f_yearly`, `f_total`, `c_monthly`, `c_daily`, `c_seasonal`, `c_yearly`, `c_total`, `g_monthly`, `g_monthly_individual`, `tbl_candidates_can_id`) VALUES
(1, 100, 100, 100, 100, 3116.6666666666665, 100, 100, 100, 100, 3116.6666666666665, 6233.333333333333, 415.55555555555554, 5),
(2, 100, 100, 100, 100, 3116.6666666666665, 100, 210, 100, 200, 6425, 9541.666666666666, 867.4242424242424, 7);

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
  `tbl_candidates_can_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_loan_debt`
--

INSERT INTO `skeleton_tbl_loan_debt` (`ld_id`, `ld_initial_amount`, `ld_instritution`, `ld_interest_tates`, `ld_reason`, `ld_monthly`, `ld_trimester`, `ld_semester`, `ld_capital`, `tbl_candidates_can_id`) VALUES
(1, 100, 100, '100', 'I take for buy motobike', 100, 100, 100, 100, 5),
(2, 100, 100, '100', 'I take for buy motobike', 100, 100, 100, 10, 7);

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
(3, 'CETC'),
(4, 'CIFS'),
(7, 'ESK'),
(8, 'PhnomPenh Thmey'),
(9, 'Latas'),
(10, 'Other');

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
  `tbl_candidates_can_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_profile`
--

INSERT INTO `skeleton_tbl_profile` (`p_id`, `f_age`, `f_occupation`, `f_health`, `f_edu`, `m_age`, `m_occupation`, `m_health`, `m_edu`, `number_sibbling`, `number_maried`, `number_separated`, `number_family_living`, `stu_rank`, `f_occupation_comment`, `m_occupation_comment`, `f_health_comment`, `m_health_comment`, `tbl_candidates_can_id`) VALUES
(1, 30, 'Teacher', 'Healthy', 'University', 29, 'Police Officer', 'Healthy', 'University', 8, NULL, 3, NULL, 10, '', '', '', '', 5),
(2, 30, 'Farmer/Laborer', 'Healthy', '10', 40, 'Farmer/Laborer', 'Healthy', '10', 11, NULL, 8, NULL, 8, '', '', '', '', 7);

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
(1, 'Banteay Meanchey');

-- --------------------------------------------------------

--
-- Table structure for table `skeleton_tbl_residence`
--

CREATE TABLE `skeleton_tbl_residence` (
  `re_id` int(11) NOT NULL,
  `re_status` varchar(45) DEFAULT NULL,
  `re_age` int(11) DEFAULT NULL,
  `re_rating_scale` int(11) DEFAULT NULL,
  `tbl_candidates_can_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skeleton_tbl_residence`
--

INSERT INTO `skeleton_tbl_residence` (`re_id`, `re_status`, `re_age`, `re_rating_scale`, `tbl_candidates_can_id`) VALUES
(1, 'Inherited', 6, 3, 5),
(2, 'Shared', 4, 2, 7);

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
(6, 'sopheak', 'RITH', 'srith', 'sopheak.rith@gmail.com', '$2a$08$kfP/6VXsDdIKtsz8wZiBzOJ4Gu.Ca.XQA9vHU2om09z6kEdgiuj.G', 1, 1),
(7, 'dakhen', 'SOK', 'dakhen', 'dakhen.sok@student.passerellesnumeriques.org', '$2a$08$BeXOQ57xEe2nEfOjMKiriOCEegqoSwsma1vU.JKOzrVlF4WgXZNhC', 1, 1),
(8, 'dakhen', 'SOK', 'dakhen.sok', 'dakhen.sok@student.passerellesnumeriques.org', '$2a$08$LYgUEw5Ik.HM/3i60yX9mO8lpFrCD5Gy0qcAuXrx9h81dsora.Ozq', 2, 1);

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
  MODIFY `ex_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skeleton_tbl_home_asset`
--
ALTER TABLE `skeleton_tbl_home_asset`
  MODIFY `h_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skeleton_tbl_income`
--
ALTER TABLE `skeleton_tbl_income`
  MODIFY `in_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skeleton_tbl_loan_debt`
--
ALTER TABLE `skeleton_tbl_loan_debt`
  MODIFY `ld_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skeleton_tbl_ngo`
--
ALTER TABLE `skeleton_tbl_ngo`
  MODIFY `ngo_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `skeleton_tbl_profile`
--
ALTER TABLE `skeleton_tbl_profile`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skeleton_tbl_provinces`
--
ALTER TABLE `skeleton_tbl_provinces`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `skeleton_tbl_residence`
--
ALTER TABLE `skeleton_tbl_residence`
  MODIFY `re_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `skeleton_users`
--
ALTER TABLE `skeleton_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Internal unique identifier', AUTO_INCREMENT=9;

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
