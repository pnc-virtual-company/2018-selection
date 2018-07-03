-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 03:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";

--
-- Database: `selection_committee`
--

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(11) NOT NULL AUTO_INCREMENT,
  `candidate_firstname` varchar(45) DEFAULT NULL,
  `candidate_lastname` varchar(45) DEFAULT NULL,
  `candidate_gender` varchar(45) DEFAULT NULL,
  `candidate_age` int(11) DEFAULT NULL,
  `candidate_province` varchar(45) DEFAULT NULL,
  `candidate_rank_inclass` varchar(45) DEFAULT NULL,
  `candidate_healthy` varchar(100) DEFAULT NULL,
  `candidate_pn_choic_rank` int(11) DEFAULT NULL,
  `candidate_activity_achivement` varchar(100) DEFAULT NULL,
  `candidate_resposibility` varchar(45) DEFAULT NULL,
  `candidate_communicate` varchar(45) DEFAULT NULL,
  `candidate_alternative1` varchar(45) DEFAULT NULL,
  `candidate_alternative2` varchar(45) DEFAULT NULL,
  `candidate_alternative3` varchar(45) DEFAULT NULL,
  `candidate_rank_alternative1` int(11)  DEFAULT NULL,
  `candidate_rank_alternative2` int(11) DEFAULT NULL,
  `candidate_rank_alternative3` int(11) DEFAULT NULL,
  `candidate_pnc_motivation` varchar(45) DEFAULT NULL,
  `candidate_student_commit` varchar(255) DEFAULT NULL,
  `candidate_parents_commit` varchar(255) DEFAULT NULL,
  `candidate_global_grade` varchar(45) DEFAULT NULL,
  `candidate_investigator_conclusion` varchar(250) DEFAULT NULL,
  `candidate_ngo_comment` varchar(255) DEFAULT NULL,
  `candidate_health_comment` varchar(255) DEFAULT NULL,
  `candidate_image` varchar(255) DEFAULT NULL,
  `ngo_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`candidate_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `expense`
--

CREATE TABLE `expenses` (
  `exp_id` int(11) NOT NULL AUTO_INCREMENT,
  `exp_rice` int(11) DEFAULT NULL,
  `exp_food` int(11) DEFAULT NULL,
  `exp_firewood` int(11) DEFAULT NULL,
  `exp_loan` int(11) DEFAULT NULL,
  `exp_study` int(11) DEFAULT NULL,
  `exp_medical` int(11) DEFAULT NULL,
  `exp_electricities_water` int(11) DEFAULT NULL,
  `exp_agriculture` int(11) DEFAULT NULL,
  `exp_weding` int(11) DEFAULT NULL,
  `exp_other_utilities` int(11) DEFAULT NULL,
  `exp_total` int(11) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`exp_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `home_asset`
--

CREATE TABLE `home_assets` (
  `h_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `h_computer_smal_100` int(11) DEFAULT NULL,
  `h_dvd_player` int(11) DEFAULT NULL,
  `h_phone_smal_100` int(11) DEFAULT NULL,
  `h_camera_small_100` int(11) DEFAULT NULL,
  `h_sofa_smal_300` int(11) DEFAULT NULL,
  `h_gascooker` int(11) DEFAULT NULL,
  `h_fruit_blender` int(11) DEFAULT NULL,
  `h_electrical_cooker` int(11) DEFAULT NULL,
  `h_vehicles_comment` varchar(255) DEFAULT NULL,
  `h_animals_comment` varchar(255) DEFAULT NULL,
  `h_farm_comment` varchar(255) DEFAULT NULL,
  `h_total_x5` int(11) DEFAULT NULL,
  `h_total_x3` int(11) DEFAULT NULL,
  `h_glbal_total` int(11) DEFAULT NULL,
  `h_poverty_certificate` varchar(45) DEFAULT NULL,
  `h_level` int(11) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`h_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `income`
--

CREATE TABLE `incomes` (
  `inc_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`inc_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `loan_debt`
--

CREATE TABLE `loan_debts` (
  `ld_id` int(11) NOT NULL AUTO_INCREMENT,
  `ld_initial_amount` int(11) DEFAULT NULL,
  `ld_instritution` varchar(45) DEFAULT NULL,
  `ld_interest_rates` float(3) DEFAULT NULL,
  `ld_reason` varchar(255) DEFAULT NULL,
  `ld_monthly` int(11) DEFAULT NULL,
  `ld_trimester` int(11) DEFAULT NULL,
  `ld_semester` int(11) DEFAULT NULL,
  `ld_capital` int(11) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`ld_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `ngo`
--

CREATE TABLE `ngos` (
  `ngo_id` int(11) NOT NULL AUTO_INCREMENT,
  `ngo_name` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`ngo_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `families`
--

CREATE TABLE `families` (
  `p_id` int(11) NOT NULL AUTO_INCREMENT,
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
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`p_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `residence`
--

CREATE TABLE `residences` (
  `res_id` int(11) NOT NULL AUTO_INCREMENT,
  `res_status` varchar(45) DEFAULT NULL,
  `res_age` int(11) DEFAULT NULL,
  `res_rating_scale` int(11) DEFAULT NULL,
  `candidate_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`res_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;


-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'Internal unique identifier',
  `firstname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'User Firstname',
  `lastname` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'User Lastname',
  `login` varchar(32) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Login used for connecting tothe application',
  `email` varchar(255) CHARACTER SET utf8 DEFAULT NULL COMMENT 'Email',
  `password` varchar(512) CHARACTER SET utf8 DEFAULT NULL COMMENT 'SHA1 encoded password',
  `role` int(11) DEFAULT NULL COMMENT 'Binary mask for role',
  `active` tinyint(1) DEFAULT '1' COMMENT 'Is user active',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `login`, `email`, `password`, `role`, `active`) VALUES
(1, 'Admin', 'ADMINISTRATOR', 'admin', 'admin@selection.org', '$2a$08$cnX6al6aTkoyh/N/tKZ11e8ec9J/sldA6R4NdP.2qhhDi0OD3ek1G', 1, 1);

--
-- Foreign keys for dumped tables
--

--
-- Foreign keys for table `candidates`
--
ALTER TABLE `candidates`
  ADD KEY `fk_candidates_ngos1_idx` (`ngo_id`);

--
-- Foreign key for table `expense`
--
ALTER TABLE `expenses`
  ADD KEY `fk_expenses_candidates1_idx` (`candidate_id`);

--
-- Foreign key for table `home_asset`
--
ALTER TABLE `home_assets`
  ADD KEY `fk_home_assets_candidates1_idx` (`candidate_id`);

--
-- Foreign key for table `income`
--
ALTER TABLE `incomes`
  ADD KEY `fk_incomes_candidates1_idx` (`candidate_id`);

--
-- Foreign key for table `loan_debt`
--
ALTER TABLE `loan_debts`
  ADD KEY `fk_loan_debts_candidates1_idx` (`candidate_id`);

--
-- Foreign key for table `profile`
--
ALTER TABLE `families`
  ADD KEY `fk_profiles_candidates1_idx` (`candidate_id`);

--
-- Foreign key for table `residence`
--
ALTER TABLE `residences`
  ADD KEY `fk_residences_candidates1_idx` (`candidate_id`);


--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidates`
--
ALTER TABLE `candidates`
  ADD CONSTRAINT `fk_candidates_ngos1_idx` FOREIGN KEY (`ngo_id`) REFERENCES `ngos` (`ngo_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
--
-- Constraints for table `expense`
--
ALTER TABLE `expenses`
  ADD CONSTRAINT `fk_expenses_candidates1_idx` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `home_asset`
--
ALTER TABLE `home_assets`
  ADD CONSTRAINT `fk_home_assets_candidates1_idx` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `income`
--
ALTER TABLE `incomes`
  ADD CONSTRAINT `fk_incomes_candidates1_idx` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `loan_debt`
--
ALTER TABLE `loan_debts`
  ADD CONSTRAINT `fk_loan_debts_candidates1_idx` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `profile`
--
ALTER TABLE `families`
  ADD CONSTRAINT `fk_families_candidates1_idx` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `residence`
--
ALTER TABLE `residences`
  ADD CONSTRAINT `fk_residences_candidates1_idx` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
