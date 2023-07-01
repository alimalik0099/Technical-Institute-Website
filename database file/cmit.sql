-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 01, 2023 at 07:15 AM
-- Server version: 10.3.38-MariaDB
-- PHP Version: 8.1.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alitech_cmit`
--

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `id` int(11) NOT NULL,
  `class_id` varchar(250) NOT NULL,
  `student_id` varchar(250) NOT NULL,
  `student_reg_no` varchar(100) NOT NULL,
  `date` date NOT NULL,
  `status` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`id`, `class_id`, `student_id`, `student_reg_no`, `date`, `status`) VALUES
(1, '3', '5', '5443', '2021-10-21', 'Present'),
(2, '2', '2', '7903', '2021-10-21', 'Present'),
(3, '1', '8', '9964', '2022-02-02', 'Present'),
(4, '42', '11', '8843', '2022-02-08', 'Present'),
(5, '42', '30', '3984', '2023-03-04', 'Present');

-- --------------------------------------------------------

--
-- Table structure for table `certificates`
--

CREATE TABLE `certificates` (
  `id` int(11) NOT NULL,
  `student_name` varchar(200) NOT NULL,
  `father_name` varchar(200) NOT NULL,
  `roll_no` varchar(200) NOT NULL,
  `ref_no` varchar(200) NOT NULL,
  `reg_no` varchar(200) NOT NULL,
  `course_name` varchar(200) NOT NULL,
  `from_session` varchar(200) NOT NULL,
  `to_session` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `certificates`
--

INSERT INTO `certificates` (`id`, `student_name`, `father_name`, `roll_no`, `ref_no`, `reg_no`, `course_name`, `from_session`, `to_session`) VALUES
(4, 'Ali Malik', 'xyz', '1290', '1200', '1200', 'Web Design + Freelancing', '2022-02', '2022-01'),
(5, 'Hifsa Saeed', 'Amjad Ahmed', '00504419', '123', '123', 'C-IT', '2022-01', '2022-06'),
(6, 'Muhammad Awais', 'Muhammad Yaqoob', '0004', '0004', '0004', 'Photography', '2014-06', '2014-12'),
(7, 'xyz', 'xyz', '111', '111', '111', 'web', '2022-05', '2022-12'),
(8, 'Hamza Shahid', 'Shahid Islam', '00056', '00056', '056', 'C-IT', '2019-07', '2019-12'),
(9, 'Kamil Ali', 'Allah Ditta', '00063', '00063', '063', 'Spoken English', '2022-10', '2022-12'),
(10, 'Kamil Ali', 'Allah Ditta', '00062', '00062', '062', 'C-IT', '2022-07', '2022-12'),
(11, 'saif', 'xyz', '000', '000', '000', 'web', '2023-06', '2023-11'),
(12, 'Haris Ammar ', 'Muhammad Nazir', '00059', '00059', '00059', 'Spoken English ', '2023-01', '2023-03'),
(13, 'Muhammad Rizwan ', 'Muhammad Yousaf ', '00068', '00068', '068', 'CCTV TACHNICIAN ', '2019-01', '2019-12');

-- --------------------------------------------------------

--
-- Table structure for table `class_details`
--

CREATE TABLE `class_details` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `shift` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `class_details`
--

INSERT INTO `class_details` (`id`, `name`, `shift`, `status`) VALUES
(1, 'MS Office ', 'Morning', 'Available'),
(2, 'MS Office ', 'Afternoon', 'Available'),
(3, 'MS Office ', 'Evening', 'Available'),
(4, 'Typing ', 'Morning', 'Available'),
(5, 'Typing ', 'Afternoon', 'Available'),
(6, 'Typing ', 'Evening', 'Available'),
(7, 'Graphics Designing ', 'Morning', 'Available'),
(8, 'Graphics Designing ', 'Afternoon', 'Available'),
(9, 'Graphics Designing ', 'Evening', 'Available'),
(10, 'Auto-CAD ', 'Morning', 'Available'),
(11, 'Auto-CAD ', 'Afternoon', 'Available'),
(12, 'Auto-CAD ', 'Evening', 'Available'),
(13, 'C-IT ', 'Morning', 'Available'),
(14, 'C-IT ', 'Afternoon', 'Available'),
(15, 'C-IT ', 'Evening', 'Available'),
(16, 'Office Automation ', 'Morning', 'Available'),
(17, 'Office Automation ', 'Afternoon', 'Available'),
(18, 'Office Automation ', 'Evening', 'Available'),
(19, 'Composing ', 'Morning', 'Available'),
(20, 'Composing ', 'Afternoon', 'Available'),
(21, 'Composing ', 'Evening', 'Available'),
(22, '3Ds Max ', 'Morning', 'Available'),
(23, '3Ds Max ', 'Evening', 'Available'),
(24, 'Programing ', 'Morning', 'Available'),
(25, 'Programing ', 'Evening', 'Available'),
(26, 'Spoken English ', 'Morning', 'Available'),
(27, 'Spoken English ', 'Evening', 'Available'),
(28, 'Shorthand ', 'Evening', 'Available'),
(29, 'Freelancing ', 'Morning', 'Available'),
(30, 'Freelancing ', 'Evening', 'Available'),
(31, 'Video Editing ', 'Morning', 'Available'),
(32, 'Video Editing ', 'Evening', 'Available'),
(33, 'Digital Marketing ', 'Evening', 'Available'),
(34, 'E-Commerce ', 'Evening', 'Available'),
(35, 'D-IT(01 Year)', 'Morning', 'Available'),
(36, 'D-IT(01 Year)', 'Evening', 'Available'),
(37, 'Freelancing ', 'Evening', 'Available'),
(38, 'Fiverr', 'Evening', 'Available'),
(39, 'Digital Marketing ', 'Evening', 'Available'),
(40, 'SEO', 'Evening', 'Available'),
(41, 'Wordpress', 'Evening', 'Available'),
(42, 'Web Designing & Development ', 'Morning', 'Available'),
(43, 'Web Designing & Development ', 'Afternoon', 'Available'),
(44, 'Web Designing & Development ', 'Evening', 'Available');

-- --------------------------------------------------------

--
-- Table structure for table `fee`
--

CREATE TABLE `fee` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(250) NOT NULL,
  `student_name` varchar(250) NOT NULL,
  `pay_via` varchar(250) NOT NULL,
  `pay_date` date NOT NULL,
  `pay_details` varchar(250) NOT NULL,
  `amount` varchar(250) NOT NULL,
  `entry_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `fee_type` varchar(200) NOT NULL,
  `fee_desc` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `fee`
--

INSERT INTO `fee` (`id`, `reg_no`, `student_name`, `pay_via`, `pay_date`, `pay_details`, `amount`, `entry_time`, `fee_type`, `fee_desc`) VALUES
(1, '610', '1', 'Cash', '2021-10-15', 'Educational Purpose ', '2000', '0000-00-00 00:00:00', 'Registration + Diploma Fee', 'Registration + Diploma Fee'),
(2, '7903', '2', 'Cash', '2021-10-15', 'Educational Purpose ', '1500', '0000-00-00 00:00:00', 'Monthly Fee', 'Monthly October fee 2021'),
(3, '104', '7', 'Cash', '2021-09-15', 'Educational Purpose ', '1600', '0000-00-00 00:00:00', 'Registration + Diploma Fee', 'Registration + Diploma Fee'),
(4, '104', '7', 'Cash', '2021-09-15', 'Educational Purpose ', '500', '0000-00-00 00:00:00', 'Admission Fee', 'Admission fee '),
(5, '104', '7', 'Cash', '2021-10-01', 'Educational Purpose ', '1500', '0000-00-00 00:00:00', 'Monthly Fee', 'Monthly October fee 2021'),
(6, '850', '10', 'Cash', '2022-02-02', 'education ', '1500', '0000-00-00 00:00:00', 'Monthly Fee', 'Monthly February fee 2022'),
(7, '3389', '18', 'Cash', '2022-02-03', 'Education ', '2500', '0000-00-00 00:00:00', 'Admission Fee', 'Admission fee '),
(8, '8843', '11', 'Cash', '2022-02-09', '', '5000', '0000-00-00 00:00:00', 'Monthly Fee', 'Monthly February fee 2022');

-- --------------------------------------------------------

--
-- Table structure for table `logins`
--

CREATE TABLE `logins` (
  `id` int(11) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logins`
--

INSERT INTO `logins` (`id`, `email`, `password`) VALUES
(23, 'sa.yousaf786@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `pending_requests`
--

CREATE TABLE `pending_requests` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(260) NOT NULL,
  `student_name` varchar(260) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `cnic` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `duration` varchar(500) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `refer` varchar(250) NOT NULL,
  `someone_refernce` varchar(1000) NOT NULL,
  `entry_time` varchar(250) NOT NULL,
  `image` varchar(1000) NOT NULL,
  `class_status` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `student_details`
--

CREATE TABLE `student_details` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(260) NOT NULL,
  `student_name` varchar(260) NOT NULL,
  `father_name` varchar(250) NOT NULL,
  `cnic` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(250) NOT NULL,
  `dob` date NOT NULL,
  `certificate` varchar(250) NOT NULL,
  `registration_date` date DEFAULT NULL,
  `duration` varchar(500) NOT NULL,
  `class_name` varchar(250) NOT NULL,
  `refer` varchar(250) NOT NULL,
  `someone_refernce` varchar(1000) NOT NULL,
  `entry_time` varchar(250) NOT NULL,
  `decline` varchar(100) NOT NULL,
  `status` varchar(50) NOT NULL,
  `class_status` varchar(250) NOT NULL,
  `image` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_details`
--

INSERT INTO `student_details` (`id`, `reg_no`, `student_name`, `father_name`, `cnic`, `address`, `email`, `phone`, `dob`, `certificate`, `registration_date`, `duration`, `class_name`, `refer`, `someone_refernce`, `entry_time`, `decline`, `status`, `class_status`, `image`) VALUES
(1, '610', 'Muhammad Atif Shahzad ', 'Haq Nawaz ', '3720317962219', 'Vill & P.O Dhurnal Teh Lawa Distt Chakwal ', 'sa.yousaf786@gmail.com', '03095154679', '2000-11-10', 'Non Issue', '2021-10-14', '06 Month', '1', 'Website', '', '10:56:55 am 10/14/2021', 'No', 'Active', 'Physical', '610_Muhammad Atif Shahzad _images.png'),
(2, '7903', 'Muhammad Abdullah Shafique ', 'Muhammad Shafique ', '3720310523149', 'Moh. Gharab Near High No. 2 Teh. Talagang ', 'Abdullahawan12e@gmail.com', '03115591494', '2003-10-09', 'Non Issue', '2021-10-15', '06 Month', '2', 'Office Visitor', '', '12:09:29 pm 10/15/2021', 'No', 'Active', 'Physical', '7903_Muhammad Abdullah Shafique _Muhammad Abdullah.png'),
(3, '5885', 'Iqra', 'Ghulam Mohayyodin', '35202-4847266', 'F/484 Kashmiri Bazar near sunehri masjid lahore', 'iqrahayat1998@gmail.com', '03055753713', '2000-12-25', 'Non Issue', '2021-10-15', '03 Month', '1', 'Office Visitor', '', '10:02:08 pm 10/14/2021', 'No', 'Active', 'Physical', '5885_Iqra_IMG-20210902-WA0001_1.jpeg'),
(4, '7022', 'Faisal Rehman ', 'Shafique Rehman ', '3720325769303', 'Mohla Shahnwaz PO box Jhatla Teh Talagang Disc Chakwal', 'fazi88721@gmail.com', '03121565452', '2002-02-21', 'Non Issue', '2021-09-15', '03 Month', '5', 'Facebook', '', '11:27:04 am 10/18/2021', 'No', 'Active', 'Physical', '7022_Faisal Rehman _InShot_20210615_092033574.jpg'),
(5, '5443', 'Muhammad Bilal Bashir', 'Muhammad Bashir', '3720302241421', 'Mohala Farooq Abad Near Masjid Hanfia Talagang', 'baalimalik701@gmail.com', '03049355908', '2005-03-14', 'Non Issue', '2021-10-01', '03 Month', '3', 'Office Visitor', '', '01:57:20 pm 10/17/2021', 'No', 'Active', 'Physical', '5443_Muhammad Bilal Bashir_IMG-20190915-WA0000.jpg'),
(6, '6312', 'Muhammad waqar raheem', 'Abdur raheem', '3720360044745', 'vpo.mustafaabad tehsil.talagang.district chakwal', 'mwaqarraheem1211@gmail.com', '03472762545', '2003-12-20', 'Non Issue', '2021-07-21', '06 Month', '11', 'Facebook', '', '08:10:30 pm 10/20/2021', 'No', 'Active', 'Online', '6312_Muhammad waqar raheem_Snapchat-480169263.jpg'),
(7, '104', 'Umm e salma', 'Ameer Hussain', '372036704089', 'Mohallah Baloach VPO Tamman Teh Talagang District Chakwal', 'sajeelaameer306@gmail.com', '03150871052', '2002-02-10', 'Non Issue', '2021-03-22', '06 Month', '1', 'Google Search', '', '11:25:14 pm 10/21/2021', 'No', 'Active', 'Online', '104_Umm e salma_B612_20211021_232101_735.jpg'),
(8, '9964', 'Muhammad Talha', 'Malik Noor alam', '3720320287747', 'chowk farooq azam jhatla', 'maliktalhamalik593@gmail.com', '03168849593', '2000-06-07', 'Non Issue', '2021-09-12', '03 Month', '1', 'Refer by someone', 'Sir Shafeeq Sahb Jhatla', '12:42:35 pm 10/22/2021', 'No', 'Active', 'Physical', '9964_Muhammad Talha_Snapchat-1066369821.jpg'),
(9, '6955', 'Malik Ali Raza', 'Malik Zahoor Hussain', '3720373085799', 'Near Masjid Haider ,madina Town tehsil Talagang , Distt. Chakwal', 'Ali00malik@gmail.com', '03059990914', '1999-04-14', 'Non Issue', '2021-10-23', '01 Year', '36', 'Office Visitor', '', '10:34:56 pm 10/22/2021', 'No', 'Active', 'Online', '3742_Malik Ali Raza_WhatsApp Image 2021-10-22 at 10.29.34 PM.jpeg'),
(10, '850', 'Muhammad Mudassir', 'Akhter Din', '3720334190109', 'V.P.O Tehi Mohallah Sabal Tehsil Talgang District Chakwal', 'mudassir52229@gmail.com', '03125942163', '2002-12-14', 'Non Issue', '2021-12-21', '03 Month', '16', 'Facebook', '', '04:22:13 pm 12/20/2021', 'No', 'Active', 'Online', '850_Muhammad Mudassir_Snapchat-188326606.jpg'),
(11, '8843', 'Qarba Nasir ', 'Nasir Abbas ', '3720337516436', 'Ward 8, House No. 286, Moh. Bangla Noor Shah Talagang Chakwal ', 'qarbanasir@gmail.com', '03045364107', '1999-06-27', 'Non Issue', '2022-01-01', '03 Month', '42', 'Office Visitor', '', '12:40:29 pm 01/18/2022', 'No', 'Active', 'Physical', '8843_Qarba Nasir _qarba.jpg'),
(12, '4735', 'Maria Nazir ', 'Muhammad Nazir ', '4220153790974', 'Opposite of City Marriage Hall Talagang, Per.(VPO Phulari Darot Talagang Chakwal)', 'marianazir160062000@gmail.com', '03115873373', '2000-06-16', 'Non Issue', '2022-01-01', '03 Month', '42', 'Office Visitor', '', '01:09:43 pm 01/18/2022', 'No', 'Active', 'Physical', '4735_Maria Nazir _sania.jpg'),
(13, '7912', 'Sania Nazeer ', 'Muhammad Nazeer ', '4220136848966', 'Opposite of City Marriage Hall Talagang, Per.(VPO Phulari Darot Talagang Chakwal)', 'saniatlggg@gmail.com', '03115581362', '1998-01-27', 'Non Issue', '2022-01-01', '03 Month', '42', 'Office Visitor', '', '12:59:57 pm 01/18/2022', 'No', 'Active', 'Physical', '7912_Sania Nazeer _sania.jpg'),
(14, '7499', 'Aneeta Bushra ', 'Ghulam Muhi UD Din', '3720385316996', 'Ward 7, Moh. Sharq Talagang Chakwal ', 'aneetabushra17@gmail.com', '03028915775', '1997-12-06', 'Non Issue', '2022-01-01', '03 Month', '42', 'Office Visitor', '', '12:50:14 pm 01/18/2022', 'No', 'Active', 'Physical', '7499_Aneeta Bushra _aneeta.jpg'),
(15, '3999', 'Tehmina batool', 'Zulfiqar ali', '4220199679398', 'Moh peer bukhari h# 105', 'meenamalik.2345.malik@gmail.com', '03175321098', '2000-09-24', 'Non Issue', '2022-02-01', '03 Month', '14', 'Newspaper', '', '11:03:20 am 02/01/2022', 'No', 'Active', 'Online', '3999_Tehmina batool_16436954447106787114993954741433.jpg'),
(16, '8175', 'Ali malik', 'Muhammad Ayub Khan', '3223232', '4671', 'superadmin@gmail.com', '9012387824', '2022-03-02', 'Issue', '2022-02-01', '01 Month', '14', 'Instagram', '', '02:01:12 pm 02/01/2022', 'Yes', 'Inactive', 'Online', '8175_Ali malik_ali malik talagang.jpg'),
(17, '1302', 'Muhammad Ali', 'M Khan ', '9457394547985', 'GPO Talagang ', 'abc@gmail.com', '349563495793', '2002-07-12', 'Non Issue', '2022-02-02', '06 Month', '13', 'Office Visitor', '', '09:44:39 am 02/02/2022', 'Yes', 'Inactive', 'Physical', '1302_Muhammad Ali_Untitled.png'),
(18, '3389', 'Muhammad Sheraz', 'Ghulam Rasool', '3720362939601', 'Dhok Rosnaal, GPO Khas, Ali Haider Poor, Tehsil Talagang, District Chakwal', 'sherazrushnal@gmail.com', '03023501621', '2001-12-22', 'Non Issue', '2022-02-03', '03 Month', '7', 'Office Visitor', '', '11:51:27 am 02/03/2022', 'No', 'Active', 'Physical', '3389_Muhammad Sheraz_Muhammad Sheraz.jpg'),
(19, '212', 'Muneeb Ahmed ', 'Noor Ahmed ', '3720309911319', 'Rizwan Abad Malikwal Sargodha Road Talagang ', 'ma4098792@gmail.com', '03200447783', '2001-06-20', 'Non Issue', '2022-02-28', '03 Month', '43', 'Office Visitor', '', '01:02:09 pm 02/08/2022', 'No', 'Active', 'Physical', '212_Muneeb Ahmed _cmit page dp png.jpg'),
(20, '1355', 'Muhammad Arslan', 'Zafar Javed', '3460312491213', 'Near By Masjid Farooq-E-Azam Sultan Road, Mohallah Sayyed Pura Talagang, District Chakwal', 'ali1797682@gamil.com', '03075625237', '2001-12-29', 'Issue', '2022-02-28', '03 Month', '2', 'Office Visitor', '', '01:04:38 pm 02/02/2022', 'No', 'Active', 'Physical', '1355_Muhammad Arslan_Untitled.png'),
(21, '1852', 'Muhammad Talha', 'Sher Muhammad', '3720329687327', 'Jhatla', 'sufitali1122@gmail.com', '03135924853', '2004-03-20', 'Non Issue', '2022-05-17', '03 Month', '43', 'Website', '', '08:52:25 am 04/12/2022', 'No', 'Active', 'Physical', '1852_Muhammad Talha_FB_IMG_1649290015680.jpg'),
(22, '6258', 'HamZa Mushtaq ', 'Mushtaq Hussain ', '3720396292151', 'Jhatla', 'hamzamalix5583@gmail.com', '03175583996', '2004-03-01', 'Non Issue', '2022-05-17', '03 Month', '42', 'Website', '', '08:46:11 am 04/12/2022', 'No', 'Active', 'Physical', '4583_HamZa Mushtaq _PicsArt_03-30-04.48.41.jpg'),
(23, '4737', 'Muhammad Ali', 'Muhammad Javed', '3720325948725', 'House # 127, Mohalla Hawa Pura, Talagang, District Chakwal ', 'muhammadali13314@gmail.com', '03170842578', '1996-12-01', 'Non Issue', '2022-05-17', '01 Month', '42', 'Facebook', '', '11:01:27 am 04/07/2022', 'No', 'Active', 'Online', '9124_Muhammad Ali_PassportSize.jpg'),
(24, '9190', 'Muhammad Mohsin Zaheer ', 'Zaheer Ahmed ', '37203-7206574', 'Vpo Pachnand Tehsil Lawa District Chakwal ', 'mohsinzaheer5310@gmail.com', '03115568582', '2004-12-20', 'Non Issue', '2022-06-17', '01 Month', '29', 'Facebook', '', '10:15:17 pm 03/18/2022', 'Yes', 'Inactive', 'Online', '9190_Muhammad Mohsin Zaheer _IMG_1643798982147.jpg'),
(25, '3286', 'Ali', 'Hassan', '3100007854123', '53A/77 Kreiger Knolls Suite 915', 'alihusssan123@gmail.com', '03124123459', '2002-08-13', 'Non Issue', '2022-08-02', '03 Month', '40', 'Facebook', '', '08:08:05 pm 08/02/2022', 'Yes', 'Inactive', 'Physical', '3286_Ali_joseph-gonzalez-iFgRcqHznqg-unsplash.jpg'),
(26, '7251', 'Maria Kanwal ', 'Sahib Shah ', '3720302751588', 'Multan khurad Tehsil Talagng District Chakwal ', 'kanwalmaria155@gmail.com', '03025415547', '2001-09-01', 'Non Issue', '2022-08-05', '03 Month', '1', 'Facebook', '', '01:35:50 pm 06/22/2022', 'Yes', 'Inactive', 'Online', '7251_Maria Kanwal _IMG-20220621-WA0002.jpg'),
(27, '5394', 'Hamza', 'Hamza', '438534758934', 'jhtla', 'hamza@gmail.com', '78979879', '2022-09-12', 'Issue', '2022-08-07', '03 Month', '2', 'Facebook', '', '10:27:52 am 06/20/2022', 'Yes', 'Inactive', 'Physical', '5394_Hamza_275891443_674823513789283_1631631110005569663_n.jpg'),
(28, '8940', 'Abdul Rehman', 'Javid Iqbal', '3840388304723', 'Talagang ', '5923154ji@gmail.com', '03175732049', '2005-05-04', 'Non Issue', '2022-10-04', '06 Month', '42', 'Refer by someone', 'Rehman ', '03:59:55 pm 09/10/2022', 'No', 'Active', 'Physical', '8940_Abdul _1661320905942.jpg'),
(29, '9187', 'Danish zaheer', 'Muhammad zaheer', '3720387665163', 'Tehsil Talagang District chakwal', 'danishzahir0786@gmail.com', '03155935335', '2002-02-25', 'Non Issue', '2022-10-04', '06 Month', '42', 'Office Visitor', '', '11:38:13 am 09/10/2022', 'No', 'Active', 'Physical', '9187_Danish zaheer_Snapchat-1430689642.jpg'),
(30, '3984', 'Muhammad Awais', 'Abdul Ghaffar', '3720380729329', 'Mohalla Awan Abad Mianwali Road Dist Talagang', 'awais445awd@gmail.com', '03250331382', '2004-11-01', 'Issue', '2023-03-04', '06 Month', '42', 'Facebook', '', '11:04:56 am 03/04/2023', 'No', 'Active', 'Physical', '3984_Muhammad Awais_haha.JPG'),
(31, '4726', 'Muhammad Faizan Ali ', 'Muhammad Imran Ali ', '3720394870175', 'District Talagang VPO  Moorat', 'financialsovereignty1@gmail.com', '03010053608', '2005-08-25', 'Non Issue', '2023-03-17', '06 Month', '24', 'Facebook', '', '10:55:57 am 02/22/2023', 'No', 'Active', 'Physical', '4726_Muhammad Faizan Ali _16770453289361909927405382304467.jpg'),
(32, '8974', 'Muhammad umer', 'Abdul qudoos', '3720361895655', 'VPO jhatla district talagang', 'muhammadumer123786@gmail.com', '03135552123', '2003-12-08', 'Non Issue', '2023-03-17', '06 Month', '42', 'Website', '', '10:41:20 am 10/17/2022', 'No', 'Active', 'Physical', '8974_Muhammad umer_16659852191305211208365110598657.jpg'),
(33, '159', 'Muhammad Waqas', 'Muhammad Altaf', '3720375345901', 'Dr A.Q Khan Street Usman Town Talagang', 'wqsmalik777@gmail.com', '0333-5788550', '1991-07-05', 'Non Issue', '2023-03-17', '06 Month', '42', 'Facebook', '', '09:10:10 am 10/13/2022', 'No', 'Active', 'Physical', '159_Muhammad Waqas_DSC_0010.JPG'),
(34, '7779', 'Saif ullah', 'Muhammad Shafi', '3720302388973', 'Madni chowk near madni mosque', 'saifullahst99@gmail.com', '03465320059', '2004-10-28', 'Non Issue', '2023-06-21', '03 Month', '42', 'Office Visitor', '', '07:43:30 am 04/06/2023', 'No', 'Active', 'Physical', '7779_Saif ullah_IMG_20221211_160642_027-removebg-preview.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `student_educations`
--

CREATE TABLE `student_educations` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(300) NOT NULL,
  `digree` varchar(300) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `year` varchar(200) NOT NULL,
  `marks` varchar(200) NOT NULL,
  `institutuion` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_educations`
--

INSERT INTO `student_educations` (`id`, `reg_no`, `digree`, `subject`, `year`, `marks`, `institutuion`) VALUES
(1, '610', 'Matric ', 'Science ', '2017', '971/1100', 'BISE RWP '),
(2, '610', 'Inter ', 'Science ', '2020', '568/1100 ', 'BISE RWP '),
(3, '5885', 'Foundation', 'Ms office', '2019', '100', 'CMIT Talagang district chakwal'),
(4, '7903', 'Matric ', 'Science ', '2021', 'Awaiting ', 'BISE RWP '),
(5, '5443', 'SSC', 'Computer Science', '2021', '927', 'GHS NO.1 TALAGANG'),
(6, '7022', 'Typing ', 'Computer ', '2021', '871', 'CMIT Talagang '),
(7, '6312', 'Ics', 'Computer', '2021', '399', 'Govt.associate college talagang'),
(8, '104', 'FSc', 'ICS', '2020', '686', 'Fauji Foundation Inter College Talagang'),
(9, '9964', 'Matric', 'Biology', '2017', '699', 'Barani science college'),
(10, '9964', 'Fsc', 'ics', '2019', '656', 'Punjab college'),
(11, '6955', 'BS Public Administration', 'Public Administration', '2021', 'A', 'Virtual University Of Pakistan'),
(13, '850', 'Matric', 'Science', '2019', '681/B', 'School'),
(14, '8843', 'Metric ', 'Science ', '2015', '799', 'BISE RWP'),
(15, '8843', 'F.Sc.', 'ICS', '2017', '835', 'BISE RWP'),
(16, '8843', 'B.Sc.', 'Comp, Double Mathh', '2019', '502', 'PU'),
(17, '8843', 'MIT', 'IT', '2021', '442', 'PU'),
(18, '7499', 'Metric ', 'Science ', '2015', '786', 'BISE RWP'),
(19, '7499', 'ICS', 'Comp Sc', '2017', '766', 'BISE RWP'),
(20, '7499', 'B.Sc.', 'Comp, Double Math', '2019', '215', 'PU'),
(21, '7499', 'M.Sc.', 'IT', '2021', '419', 'PU'),
(22, '7912', 'Metric ', 'Science ', '2014', '719', 'BISE RWP'),
(23, '7912', 'F.Sc.', 'Science ', '2016', '630', 'BISE RWP'),
(24, '7912', 'B.Sc.', 'Comp Sc', '2019', '488', 'PU'),
(26, '4735', 'F.Sc.', 'Science ', '2017', '733', 'BISE RWP'),
(28, '4735', 'MIT', 'IT', '2021', '420', 'PU'),
(29, '3999', 'Inter', 'Arts', '2019', '666/B', 'Govt college women talagang'),
(30, '8175', 'fasdf', 'sdf', '4334', '4334', '4334'),
(31, '2499', 'fasdf', 'sdf', '2121', '1212', '4334'),
(33, '1302', 'Matric ', 'Science ', '2016', '655', 'BISE RWP'),
(34, '1302', 'Inter ', 'Science ', '2018', '766', 'BISE RWP'),
(35, '1355', 'Intermediate', 'FA', '2021', '495/D', 'BISE RWP'),
(36, '3389', 'Matric ', 'Computer Science', '2019', '747 / B ', 'BISE RWP'),
(37, '3389', 'Intermediate', 'ICS', '2021', '624 / C', 'BISE RWP'),
(38, '212', 'Metric ', 'Science ', '2017', '0000', 'BISE RWP'),
(39, '212', 'F.Sc.', 'ICS ', '2020', '0000', 'BISE RWP'),
(40, '9190', 'Matric', 'Science ', '2021', '989/1100', 'Bise Rawalpindi '),
(41, '4737', 'Matric', 'Science', '2013', '935', 'P.O.L Model Sec School for Boys'),
(42, '4737', 'F.Sc', 'Science', '2015', '848', 'P.O.L Intermediate College for Boys, Khaur (Attock)'),
(43, '4737', 'B.Com', 'Accounting', '2018', '1071', 'Govt. Institute of Commerce Talagang, Distt Chakwal'),
(44, '4737', 'M.I.T', 'Computer', '2020', '3.84 gpa', 'Virtual University of Pakistan'),
(45, '6258', 'None', 'English ', '2nd year', '800', 'Widom college '),
(46, '1852', '2nd year', 'Chemistry', '2019', '900/A', 'Wisdom international college talagang'),
(47, '5394', 'fsc', 'science', '2011', 'A+', 'jhtla'),
(48, '3286', 'INTER', 'Sciences', '2008', 'B+', 'GCUF'),
(49, '9187', 'ICS', 'Computer science', '2020', '694', 'Superior college talagang'),
(50, '8940', 'Fsc', 'Pre engenering ', '2021', '769', 'Wisdom international science college'),
(51, '159', 'BS-(IT)', 'Computer', '2019', '3.20/4.00', 'Arid Agriculture University Rawalpindi '),
(52, '8974', 'Intermediate', 'Ics', '2021', '836/1100', 'Makkah science college Talagang'),
(53, '4726', 'Matric', 'Computer Science ', '2022', '740/1100', 'Fauji Foundation College Talagang '),
(54, '3984', 'ICS', 'Computer Science', '2022', 'A', 'Superior Group Of College'),
(55, '3984', 'CIT', 'MS Office', '2019', 'A', 'CMIT College'),
(56, '7779', 'Intermediate', 'Pre- Engineering', '2022', '951', 'Punjab College Talagang');

-- --------------------------------------------------------

--
-- Table structure for table `student_logins`
--

CREATE TABLE `student_logins` (
  `id` int(11) NOT NULL,
  `reg_no` varchar(250) NOT NULL,
  `password` varchar(400) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `student_logins`
--

INSERT INTO `student_logins` (`id`, `reg_no`, `password`) VALUES
(1, '610', 'Cmittalagang'),
(3, '5885', 'Cmittalagang'),
(4, '7903', 'Cmittalagang'),
(5, '5443', 'Cmittalagang'),
(6, '7022', 'Cmittalagang'),
(7, '6312', 'Cmittalagang'),
(8, '104', 'Cmittalagang'),
(9, '9964', 'Cmittalagang'),
(10, '9964', 'Cmittalagang'),
(11, '6955', 'Cmittalagang'),
(13, '850', 'Cmittalagang'),
(14, '8843', 'Cmittalagang'),
(15, '8843', 'Cmittalagang'),
(16, '8843', 'Cmittalagang'),
(17, '8843', 'Cmittalagang'),
(18, '7499', 'Cmittalagang'),
(19, '7499', 'Cmittalagang'),
(20, '7499', 'Cmittalagang'),
(21, '7499', 'Cmittalagang'),
(22, '7912', 'Cmittalagang'),
(23, '7912', 'Cmittalagang'),
(24, '7912', 'Cmittalagang'),
(25, '4735', 'Cmittalagang'),
(28, '4735', 'Cmittalagang'),
(29, '3999', 'Cmittalagang'),
(30, '8175', 'Cmittalagang'),
(31, '2499', 'Cmittalagang'),
(33, '1302', 'Cmittalagang'),
(34, '1302', 'Cmittalagang'),
(35, '1355', 'Cmittalagang'),
(36, '3389', 'Cmittalagang'),
(37, '212', 'Cmittalagang'),
(38, '212', 'Cmittalagang'),
(39, '9190', 'Cmittalagang'),
(40, '4737', 'Cmittalagang'),
(41, '4737', 'Cmittalagang'),
(42, '4737', 'Cmittalagang'),
(43, '4737', 'Cmittalagang'),
(44, '6258', 'Cmittalagang'),
(45, '1852', 'Cmittalagang'),
(46, '5394', 'Cmittalagang'),
(47, '3286', 'Cmittalagang'),
(48, '9187', 'Cmittalagang'),
(49, '8940', 'Cmittalagang'),
(50, '159', 'Cmittalagang'),
(51, '8974', 'Cmittalagang'),
(52, '4726', 'Cmittalagang'),
(53, '3984', 'Cmittalagang'),
(54, '3984', 'Cmittalagang'),
(55, '7779', 'Cmittalagang');

-- --------------------------------------------------------

--
-- Table structure for table `web_contact`
--

CREATE TABLE `web_contact` (
  `id` int(11) NOT NULL,
  `name` varchar(150) NOT NULL,
  `email` varchar(200) NOT NULL,
  `subject` varchar(300) NOT NULL,
  `phone` varchar(300) NOT NULL,
  `message` varchar(1000) NOT NULL,
  `time` varchar(150) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `web_contact`
--

INSERT INTO `web_contact` (`id`, `name`, `email`, `subject`, `phone`, `message`, `time`) VALUES
(238, 'Faizi', 'financialsovereignty1@gmail.com', 'Front End Back End Development ', '03010053608', '.........', '09:16:01 pm 02/21/2023'),
(239, 'Ume Ayman ', 'hafizeurrehman@gmail.com', 'Computer science ', '03120221404', 'I want to get admissions ', '11:27:33 pm 06/27/2023');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `certificates`
--
ALTER TABLE `certificates`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `class_details`
--
ALTER TABLE `class_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `fee`
--
ALTER TABLE `fee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logins`
--
ALTER TABLE `logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pending_requests`
--
ALTER TABLE `pending_requests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_details`
--
ALTER TABLE `student_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_educations`
--
ALTER TABLE `student_educations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_logins`
--
ALTER TABLE `student_logins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `web_contact`
--
ALTER TABLE `web_contact`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `attendance`
--
ALTER TABLE `attendance`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `certificates`
--
ALTER TABLE `certificates`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `class_details`
--
ALTER TABLE `class_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

--
-- AUTO_INCREMENT for table `fee`
--
ALTER TABLE `fee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `logins`
--
ALTER TABLE `logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `pending_requests`
--
ALTER TABLE `pending_requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `student_details`
--
ALTER TABLE `student_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `student_educations`
--
ALTER TABLE `student_educations`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `student_logins`
--
ALTER TABLE `student_logins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `web_contact`
--
ALTER TABLE `web_contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=240;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
