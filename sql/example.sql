-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 30, 2018 at 03:05 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

--
-- Database: `selection_committee`
--

-- --------------------------------------------------------

--
-- Dumping data for table `candidates`
--

INSERT INTO `candidates` (`candidate_id`, `candidate_firstname`, `candidate_lastname`, `candidate_gender`, `candidate_age`, `candidate_province`, `candidate_rank_inclass`, `candidate_healthy`, `candidate_pn_choic_rank`, `candidate_activity_achivement`, `candidate_resposibility`, `candidate_communicate`, `candidate_alternative1`, `candidate_alternative2`, `candidate_alternative3`, `candidate_rank_alternative1`, `candidate_rank_alternative2`, `candidate_rank_alternative3`, `candidate_pnc_motivation`, `candidate_student_commit`, `candidate_parents_commit`, `candidate_global_grade`, `candidate_investigator_conclusion`, `candidate_ngo_comment`, `candidate_health_comment`, `candidate_image`, `ngo_id`) VALUES
(1, 'dakhen', 'SOK', 'Male', 19, "Preah Vihear", 1, 'Healthy', 1, 'I am an outstanding', '1', '1', NULL, NULL, NULL, NULL, NULL, NULL, '1', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'A', NULL, NULL, '', NULL, 1),
(2, 'Seav', 'AN', 'Male', 22, 10, "Phnom Penh", 'Healthy', 1, 'I am not good student', '18/19', '1/20', 'ITC', 'RUPP', 'PNC', '2', '1', '3', '19/20', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'Failed', NULL, NULL, '', NULL, 3),
(3, 'vuthy', 'POUK', 'Female', 21, 10, "Pursat", 'Healthy', 2, 'I am an outstanding', '19', '13', 'Good ', 'Good ', 'Good ', '2', '2', '2', '19', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'A+', 'She selected to study at pnc ', NULL, 'I never get sick early', NULL, 1),
(4, 'dakhen', 'sok', 'Male', 20, 1, "Battambang", 'Healthy', 1, 'I am an outstanding', '19', '19', 'ITC', 'RUPP', 'PNC', '1', '1', '1', '19', 'I commit to be a goodstudent', 'I commit to push my child to be a good student', 'A+', NULL, NULL, '', NULL, 5);

--
-- Dumping data for table `expense`
--

INSERT INTO `expenses` (`exp_id`, `exp_rice`, `exp_food`, `exp_firewood`, `exp_loan`, `exp_study`, `exp_medical`, `exp_electricities_water`, `exp_agriculture`, `exp_weding`, `exp_other_utilities`, `exp_total`, `candidate_id`) VALUES
(1, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 1000, 1),
(2, 12, 12, 12, 12, 12, 12, 12, 12, 12, 12, 120, 2);

--
-- Dumping data for table `home_asset`
--

INSERT INTO `home_assets` (`h_id`, `h_refrigerator`, `h_air_condictioner`, `h_lcd_tv`, `h_computer_big_100`, `h_furnished_big_300`, `h_smartphone_big_100`, `h_camera_big_100`, `h_sofa_big_300`, `h_motobike_big_500`, `h_farming_machine`, `h_car_truck`, `h_cow`, `h_buffaloe`, `h_pig`, `h_farm_size`, `h_radio`, `h_rice_cooker`, `h_color_tv`, `h_computer_smal_100`, `h_dvd_player`, `h_phone_smal_100`, `h_camera_small_100`, `h_sofa_smal_300`, `h_gascooker`, `h_fruit_blender`, `h_electrical_cooker`, `h_vehicles_comment`, `h_animals_comment`, `h_farm_comment`, `h_total_x5`, `h_total_x3`, `h_glbal_total`, `h_poverty_certificate`, `h_level`, `candidate_id`) VALUES
(1, 100, 100, 100, 1000, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 1000, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, 100, '', '100', '', 1400, 6003, 7403, '1', NULL, 1),
(2, 1, 1, 12, 2, 2, 2, 2, 2, 100, 100, 100, 100, 100, 100, 0, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, 2, '', '', '', 624, 69, 693, '2', NULL, 2),
(3, 112, 1, 1, 2, 1, 1, 1, 1, 12, 12, 12, 2, 2, 3, 111122, 2, 2, 2, 2, 2, 2, 1, 1, 2, 1, 1, 'I have a bit vehicles', 'I have an another animal ', 'I have a bit farm', 820, 57, 877, '2', NULL, 3);

--
-- Dumping data for table `income`
--

INSERT INTO `incomes` (`inc_id`, `f_monthly`, `f_daily`, `f_seasonal`, `f_yearly`, `f_total`, `c_monthly`, `c_daily`, `c_seasonal`, `c_yearly`, `c_total`, `g_monthly`, `g_monthly_individual`, `candidate_id`) VALUES
(1, 100, 100, 100, 100, 3116.6666666666665, 100, 100, 100, 100, 3116.6666666666665, 6233.333333333333, 415.55555555555554, 1),
(2, 100, 100, 100, 100, 3116.6666666666665, 100, 210, 100, 200, 6425, 9541.666666666666, 867.4242424242424, 2),
(3, 12, 12, 12, 12, 374, 12, 12, 12, 12, 374, 748, 74.8, 3),
(4, 100, 100, 100, 100, 3116.6666666666665, 100, 100, 100, 100, 3116.6666666666665, 6233.333333333333, 445.23809523809524, 4);

--
-- Dumping data for table `loan_debt`
--

INSERT INTO `loan_debts` (`ld_id`, `ld_initial_amount`, `ld_instritution`, `ld_interest_tates`, `ld_reason`, `ld_monthly`, `ld_trimester`, `ld_semester`, `ld_capital`, `candidate_id`) VALUES
(1, 100, 100, '100', 'I take for buy motobike', 100, 100, 100, 100, 1),
(2, 100, 100, '100', 'I take for buy motobike', 100, 100, 100, 10, 2),
(3, 12, 12, '12', 'I take for buy motobike', 12, 12, 12, 12, 4);

--
-- Dumping data for table `ngo`
--

INSERT INTO `ngos` (`ngo_id`, `ngo_name`) VALUES
(1, 'PSE'),
(2, 'CETC'),
(3, 'CIFS'),
(4, 'ESK'),
(5, 'PhnomPenh Thmey'),
(6, 'Latas'),
(7, 'Other');

--
-- Dumping data for table `profile`
--

INSERT INTO `families` (`p_id`, `f_age`, `f_occupation`, `f_health`, `f_edu`, `m_age`, `m_occupation`, `m_health`, `m_edu`, `number_sibbling`, `number_maried`, `number_separated`, `number_family_living`, `stu_rank`, `f_occupation_comment`, `m_occupation_comment`, `f_health_comment`, `m_health_comment`, `candidate_id`) VALUES
(1, 30, 'Teacher', 'Healthy', 'University', 29, 'Police Officer', 'Healthy', 'University', 8, NULL, 3, NULL, 10, '', '', '', '', 1),
(2, 30, 'Farmer/Laborer', 'Healthy', '10', 40, 'Farmer/Laborer', 'Healthy', '10', 11, NULL, 8, NULL, 8, '', '', '', '', 2),
(3, 30, 'Farmer/Laborer', 'Healthy', '0', 20, 'Teacher', 'Healthy', '9', 4, NULL, 4, NULL, 7, 'dd', '', '', '', 3),
(4, 45, 'Farmer/Laborer', 'Healthy', '9', 45, 'Farmer/Laborer', 'Healthy', '11', 5, NULL, 3, NULL, 9, 'dd', 'Tailor', 'Good health', 'Good health', 4);

--
-- Dumping data for table `residence`
--

INSERT INTO `residences` (`res_id`, `res_status`, `res_age`, `res_rating_scale`, `candidate_id`) VALUES
(1, 'Inherited', 6, 3, 1),
(2, 'Shared', 4, 2, 2),
(3, 'Inherited', 4, 2, 3);

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `login`, `email`, `password`, `role`, `active`) VALUES
(1, 'Benjamin', 'BALET', 'bbalet', 'benjamin.balet@gmail.com', '$2a$08$LeUbaGFqJjLSAN7to9URsuHB41zcmsMBgBhpZuFp2y2OTxtVcMQ.C', 1, 1),
(2, 'john', 'DOE', 'jdoe', 'jdoe@test.org', '$2a$08$Gk9WE1duEcKhEhxUKFmZteUU0sCZTgZIKkiPxhCe7yi0Jw0pBbDNW', 2, 1),
(3, 'Bob', 'DENARD', 'bdenard', 'bdenard@test.org', '$2a$08$14jdHTPUZe5.zXxQ1NqhhO83xUt2Zkr.csGw10BH75B3VrJiNU8Bq', 2, 1),
(4, 'Admin', 'ADMINISTRATOR', 'admin', 'admin@skeleton.org', '$2a$08$cnX6al6aTkoyh/N/tKZ11e8ec9J/sldA6R4NdP.2qhhDi0OD3ek1G', 1, 1),
(5, 'sopheak', 'RITH', 'srith', 'sopheak.rith@gmail.com', '$2a$08$kfP/6VXsDdIKtsz8wZiBzOJ4Gu.Ca.XQA9vHU2om09z6kEdgiuj.G', 1, 1),
(6, 'dakhen', 'SOK123', 'dakhen', 'dakhen.sok@student.passerellesnumeriques.org', '$2a$08$BeXOQ57xEe2nEfOjMKiriOCEegqoSwsma1vU.JKOzrVlF4WgXZNhC', 1, 1),
(7, 'dakhen', 'SOK', 'dakhen123', 'dakhen.sok@student.passerellesnumeriques.org', '$2a$08$vmAfSyQq2ceXMMoURwa5BucXrPA5A/VYPT8z6UeGCq0n8SKmASxNS', 2, 1);