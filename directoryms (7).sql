-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2023 at 01:59 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `directoryms`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity_log_tbl`
--

CREATE TABLE `activity_log_tbl` (
  `activitylog_id` int(100) NOT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `admin_tbl`
--

CREATE TABLE `admin_tbl` (
  `admin_id` int(11) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `admin_type` int(20) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `phoneNum` varchar(50) DEFAULT NULL,
  `admin_school_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_tbl`
--

INSERT INTO `admin_tbl` (`admin_id`, `username`, `password`, `admin_type`, `email`, `phoneNum`, `admin_school_id`) VALUES
(2, 'admin', 'test', 1, 'admin@gamil.com', '09661337494', '2018-13611');

-- --------------------------------------------------------

--
-- Table structure for table `announcement_tbl`
--

CREATE TABLE `announcement_tbl` (
  `announcement_id` int(100) NOT NULL,
  `announcement` longtext DEFAULT NULL,
  `date_announce` datetime DEFAULT NULL,
  `staff_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `borrowed_tbl`
--

CREATE TABLE `borrowed_tbl` (
  `borrowed_id` int(100) NOT NULL,
  `record_id` int(100) DEFAULT NULL,
  `return_date` date DEFAULT NULL,
  `schoolId` varchar(100) DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `smsStatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrowed_tbl`
--

INSERT INTO `borrowed_tbl` (`borrowed_id`, `record_id`, `return_date`, `schoolId`, `date_today`, `status`, `smsStatus`) VALUES
(89, 326, '2023-05-15', '2022-1334', '2023-05-12', 'Active', '0');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_tbl`
--

CREATE TABLE `borrow_tbl` (
  `br_id` int(11) NOT NULL,
  `purpose` varchar(100) DEFAULT NULL,
  `schoolId` varchar(100) DEFAULT NULL,
  `visit_date` date DEFAULT NULL,
  `borrow_status` varchar(100) DEFAULT NULL,
  `record_id` int(100) DEFAULT NULL,
  `isCancel` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `borrow_tbl`
--

INSERT INTO `borrow_tbl` (`br_id`, `purpose`, `schoolId`, `visit_date`, `borrow_status`, `record_id`, `isCancel`) VALUES
(50, 'study refference', '2023-13611', '2023-05-07', 'Granted', 324, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `course_tbl`
--

CREATE TABLE `course_tbl` (
  `course_id` int(50) NOT NULL,
  `cs_name` varchar(100) DEFAULT NULL,
  `student_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `record_tbl`
--

CREATE TABLE `record_tbl` (
  `record_id` int(11) NOT NULL,
  `date` varchar(100) DEFAULT NULL,
  `status` varchar(100) DEFAULT 'Available',
  `type` varchar(100) DEFAULT NULL,
  `department_name` varchar(200) DEFAULT NULL,
  `fileName` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `record_tbl`
--

INSERT INTO `record_tbl` (`record_id`, `date`, `status`, `type`, `department_name`, `fileName`) VALUES
(324, '2022-10-29', 'Available', 'Thesis', 'BEED', 'ACADEMIC PERFORMANCE OF INDIGENOUS PUPILS IN MARANGAN ELEMENTARY SCHOOL.pdf'),
(325, '2022-10-29', 'Available', 'Thesis', 'BEED', 'CARE FOR NON-READERS PROGRAM ITS IMPACT TO THE READING PERFORMANCE OF PUPILS IN DUMINGAG CENTRAL ELEMENTARY SCHOOL.pdf'),
(326, '2022-10-29', 'Not Available', 'Thesis', 'BEED', 'COMMUNICATION SKILLS OF BSIT IV STUDENTS IN J.H. CERILLES STATE COLLEGE-DUMINGAG CAMPUS.pdf'),
(327, '2022-10-29', 'Available', 'Thesis', 'BEED', 'EFFECTS OF MOBILE PHONES ON THE STUDY HABITS OF GRADES IV-VI PUPILS IN DUMINGAG SPED CENTER.pdf'),
(328, '2022-10-29', 'Available', 'Thesis', 'BEED', 'INFLUENCE OF TELEVISION ON THE STUDY HABITS OF PUPILS IN BUCAYAN ELEMENTARY SCHOOL.pdf'),
(329, '2022-10-29', 'Available', 'Thesis', 'BEED', 'PERCEPTIONS OF GRADE II PUPILS ON THE USE OF VISUAL ILLUSTRATION.pdf'),
(330, '2022-10-29', 'Available', 'Thesis', 'BEED', 'PERCEPTIONS ON THE CLASSROOM MANAGEMENT SKILLS OF TEACHERS IN DUMINGAG CENTRAL ELEMENTARY SCHOOL.pdf'),
(331, '2022-10-29', 'Available', 'Thesis', 'BEED', 'READING COMPREHENSION AND ACADEMIC PERFORMANCE IN ENGLISH OF GRADE V PUPILS IN DUMINGAG CENTRAL ELEMENTARY SCHOOL.pdf'),
(332, '2022-10-29', 'Available', 'Thesis', 'BEED', 'READING DEFICIENCIES OF GRADE IV PUPILS IN GUITRAN CENTRAL ELEMENTARY SCHOOL.pdf'),
(333, '2022-10-29', 'Available', 'Thesis', 'BEED', 'READING SKILLS OF GRADE V PUPILS IN DUMINGAG CENTRAL ELEMENTARY SCHOOL.pdf'),
(334, '2022-10-29', 'Available', 'Thesis', 'BEED', 'SOCIAL PERSONALITY TRAITS AND ACADEMIC PERFORMANCE OF GRADE VI PUPILS IN GUITRAN CENTRAL ELEMENTARY SCHOOL.pdf'),
(335, '2022-10-29', 'Available', 'Thesis', 'BEED', 'TEACHING PERFORMANCE OF STUDENTS TEACHERS IN J.H. CERILLES STATE COLLEGE.pdf'),
(336, '2022-10-29', 'Available', 'Thesis', 'BEED', 'THE INFLUENCE OF ONLINE COMPUTER GAMES ON THE STUDY HABITS AND ACADEMIC PERFORMANCE OF THE GRADE VI PUPILS IN DUMINGAG CENTRAL ELEMENTARY SCHOOL.pdf'),
(337, '2022-10-29', 'Available', 'Thesis', 'BEED', 'TIME MANAGEMENT AND ACADEMIC PERFORMANCE OF PARENT-COLLEGE STUDENTS OF J.H. CERILLES STATE COLLEGE-DUMINGAG CAMPUS.pdf'),
(338, '2022-10-30', 'Available', 'Thesis', 'BSC', 'AWARENESS AND PERCEPTIONS OF THE STAKEHOLDERS ON RA 9262 ANTI-VAWC ACT OF 2004.pdf'),
(339, '2022-10-30', 'Available', 'Thesis', 'BSC', 'BULLYING AMONG STUDENTS ITS CAUSES AND EFFECTS.pdf'),
(340, '2022-10-30', 'Available', 'Thesis', 'BSC', 'EFFECTIVENESS OF POLICE OPERATION IN GAINING PUBLIC TRUST AND CONFIDENCE.pdf'),
(341, '2022-10-30', 'Available', 'Thesis', 'BSC', 'EFFECTS OF GAMBLING IN THE ECONOMIC CONDITION OF THE RESIDENTS OF ZAMBOANGA DEL NORTE.pdf'),
(342, '2022-10-30', 'Available', 'Thesis', 'BSC', 'IMPLEMENTATION OF NO-SMOKING ORDINANCE IN DUMINGAG, ZAMBOANGA DEL SUR.pdf'),
(343, '2022-10-30', 'Available', 'Thesis', 'BSC', 'LEVEL OF AWARENESS ON CLIMATE CHANGE AMONG COLLEGE STUDENTS.pdf'),
(344, '2022-10-30', 'Available', 'Thesis', 'BSC', 'PERCEPTIONS AND SELF-ESTEEM LEVEL OF COLLEGE STUDENTS ON HAZING.pdf'),
(345, '2022-10-30', 'Available', 'Thesis', 'BSC', 'PERCEPTIONS OF DUMINGAG DRIVERS ON THE IMPLEMENTATION OF ANTI-MUFFLER MODIFICATION ORDINANCE.pdf'),
(346, '2022-10-30', 'Available', 'Thesis', 'BSC', 'PREFERENCES ON MATE SELECTION AMONG 4TH YEAR STUDENTS IN JHCSC-DUMINGAG CAMPUS.pdf'),
(347, '2022-10-30', 'Available', 'Thesis', 'BSC', 'PROGRAM IMPLEMENTATION OF COMMUNITY-ORIENTED POLICING IN DUMINGAG ITS EFFECTIVENESS IN CRIME REDUCTION.pdf'),
(348, '2022-10-30', 'Available', 'Thesis', 'BSC', 'SOCIETAL IMPACT OF GAMBLING PROHIBITION IN A TOWN.pdf'),
(349, '2022-10-30', 'Available', 'Thesis', 'BSC', 'THE IMPACT OF CYBERCRIME AWARENESS AMONG HIGH SCHOOL STUDENTS IN DUMINGAG, ZAMBOANGA DEL SUR.pdf'),
(350, '2022-10-30', 'Available', 'Thesis', 'BSC', 'THE IMPLEMENTATION OF SPEED LIMIT (30 KPH) ITS EFFECTS IN VEHICULAR ACCIDENTS REDUCTION IN DUMINGAG.pdf'),
(351, '2022-10-30', 'Available', 'Thesis', 'BSC', 'WASTE DISPOSAL PRACTICES IN DUMINGAG.pdf'),
(352, '2022-10-30', 'Available', 'Thesis', 'BSC', 'WASTE DISPOSAL USING MATERIAL RECOVERY FACILITY IN A MUNICIPALITY.pdf'),
(353, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'Arduino-Based Wireless Water Tank Level Monitoring and Control System with Alarm.pdf'),
(354, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'Automated Plastic Bottle Vending Machine Using Arduino.pdf'),
(355, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'Automatic Plant Watering System Using Arduino.pdf'),
(356, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'CLASSROOM ATTENDANCE USING BIOMETRIC WITH SMS NOTIFICATION FOR JHCSC-DUMINGAG CAMPUS.pdf'),
(357, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'CRIME ANALYST A FINGERPRINT VERIFIER SYSTEM THROUGH IMAGE PROCESSING USING DEEP NEURAL NETWORK.pdf'),
(358, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'EMPLOYEES ATTENDANCE MONITORING WITH PAYROLL SYSTEM USING FINGERPRINT SCANNER.pdf'),
(359, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'FRONTLINER AN INFORMATION KIOSK OF J.H. CERILLES STATE COLLEGE-DUMINGAG CAMPUS.pdf'),
(360, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'Gas Leakage Detection System with SMS Alert and Sound Alarm.pdf'),
(361, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'LIVESTOCK AND POULTRY INFORMATION MANAGEMENT SYSTEM OF DUMINGAG, ZAMBOANGA DEL SUR.pdf'),
(362, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'MAPPING AND INFORMATION SYSTEM FOR DUMINGAG PUBLIC CEMETERY.pdf'),
(363, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'Milled Rice Vending System Using Arduino Microcontroller.pdf'),
(364, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'RESEARCH ARCHIVING MANAGEMENT SYSTEM FOR JHCSC.pdf'),
(365, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'Temperature Monitoring System of Chicken Eggs  Incubator using Arduino.pdf'),
(366, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'WeLearn A Web Based Distance Learning Application.pdf'),
(367, '2022-10-29', 'Available', 'Capstone', 'BSIT', 'ZAMBOANGA DEL SUR AGRICULTURAL COLLEGE MULTI-PURPOSE COOPERATIVE (ZSACICO) CABLE TV BILLING SYSTEM.pdf'),
(368, '2022-10-30', 'Available', 'Thesis', 'BSED', 'ALCOHOLIC BEVERAGES CRAVING ITS EFFECTS TO STUDENTS-DRINKERS ACADEMIC PERFORMANCE.pdf'),
(369, '2022-10-30', 'Available', 'Thesis', 'BSED', 'ATTITUDES AND PERCEPTIONS OF THE STUDENTS TOWARDS HIP HOP DANCE.pdf'),
(370, '2022-10-30', 'Available', 'Thesis', 'BSED', 'BENEFITS OF MENTAL SPORTS AND ITS INFLUENCE TO THE ACADEMIC PERFORMANCE OF THE STUDENTS.pdf'),
(371, '2022-10-30', 'Available', 'Thesis', 'BSED', 'CAN MUSIC BE CONSIDERED AS THERAPY FOR STRESS.pdf'),
(372, '2022-10-30', 'Available', 'Thesis', 'BSED', 'COMPREHENDING IDIOMATIC EXPRESSIONS.pdf'),
(373, '2022-10-30', 'Available', 'Thesis', 'BSED', 'EFFECTIVENESS OF COLLABORATIVE LEARNING APPROACH ON THE DEVELOPMENT OF STUDENTS LEARNING PERFORMANCE.pdf'),
(374, '2022-10-30', 'Available', 'Thesis', 'BSED', 'FACEBOOK USE ITS EFFECTS ON THE STUDY HABITS AND GRAMMAR COMPETENCE OF STUDENTS.pdf'),
(375, '2022-10-30', 'Available', 'Thesis', 'BSED', 'KOREAN DRAMA FANDOM ITS INFLUENCE AMONG SENIOR HIGH SCHOOL STUDENTS.pdf'),
(376, '2022-10-30', 'Available', 'Thesis', 'BSED', 'LEVEL OF INVOLVEMENT OF SUBANEN STUDENTS TOWARD EXTRACURRICULAR ACTIVITIES ITS EFFECTS TO THEIR ACADEMIC PERFORMANCE.pdf'),
(377, '2022-10-30', 'Available', 'Thesis', 'BSED', 'LITERARY CRITICISM IN SELECTED SHORT STORIES.pdf'),
(378, '2022-10-30', 'Available', 'Thesis', 'BSED', 'MATHEMATICS IMPEDIMENTS, COPING STRATEGIES AND THE ACADEMIC PERFORMANCE OF GRADE 8 STUDENTS.pdf'),
(379, '2022-10-30', 'Available', 'Thesis', 'BSED', 'MUSIC INTEGRATION IN TEACHING PHYSICAL EDUCATION.pdf'),
(380, '2022-10-30', 'Available', 'Thesis', 'BSED', 'PERCEPTIONS OF DUMINGAGNONS ON THE DENGUE PREVENTIVE PRACTICES AND CONTROL EMPLOYED IN THE MUNICIPALITY.pdf'),
(381, '2022-10-30', 'Available', 'Thesis', 'BSED', 'PERFORMANCE LEVEL IN SPORTS OF JUNIOR HIGH SCHOOL ATHLETES STATE 1996 2001.pdf'),
(382, '2022-10-30', 'Available', 'Thesis', 'BSED', 'PORTFOLIO ASSESSMENT ITS EFFECTS ON THE WRITING PROFICIENCY OF STUDENTS.pdf'),
(383, '2022-10-30', 'Available', 'Thesis', 'BSED', 'SPEECH ANXIETY LEVEL ITS EFFECT ON THE ORAL PERFORMANCE OF BEED-1 STUDENTS.pdf'),
(384, '2022-10-30', 'Available', 'Thesis', 'BSED', 'TEACHING ALGEBRA WITH GEOGEBRA.pdf'),
(385, '2022-10-30', 'Available', 'Thesis', 'BSED', 'TEACHING MATHEMATICS USING MOBILE LEARNING APPLICATION.pdf'),
(386, '2022-10-30', 'Available', 'Thesis', 'BSED', 'TRACER STUDY OF J.H. CERILLES STATE COLLEGE-DUMINGAG CAMPUS GRADUATES IN BACHELOR OF SECONDARY EDUCATION MAJOR IN MAPEH.pdf'),
(387, '2022-10-30', 'Available', 'Thesis', 'BSED', 'TRACER STUDY OF J.H. CERILLES STATE COLLEGE-DUMINGAG CAMPUS GRADUATES IN BACHELOR OF SECONDARY EDUCATION MAJOR IN MATHEMATICS (1).pdf'),
(388, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'BLOOM AND WILD BOOKING FLOWER SHOP.pdf'),
(389, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'DOUBLE DELIGHTS POLVORON.pdf'),
(390, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'FRUIT MAGIC.pdf'),
(391, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'GIVE LOVE SHOP GIVEAWAYS.pdf'),
(392, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'HAPPY BEE RECEPTION HALL.pdf'),
(393, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'JD RUSH PUB.pdf'),
(394, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'NATURE LUXURY BAMBOO FURNITURE.pdf'),
(395, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'ORGANIC CANTEEN.pdf'),
(396, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'PICK N SIP SNACK BAR.pdf'),
(397, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'SHAMAE SPA MASSAGE.pdf'),
(398, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'SWEET STICKY RICE HOUSE.pdf'),
(399, '2022-10-30', 'Available', 'Thesis', 'BSHRM', 'ZSLUSHIE FRESH FRUIT.pdf'),
(400, '2022-10-30', 'Available', 'Thesis', 'MAED', 'CAREER PREFERENCES OF JUNIOR HIGH SCHOOL STUDENTS IN THE SELECTED SECONDARY SCHOOLS OF ZAMBOANGA DEL SUR.pdf'),
(401, '2022-10-30', 'Available', 'Thesis', 'MAED', 'CHALLENGES MET BY TEACHERS IN USING THE LEARNER INFORMATION SYSTEM (LIS) IN MAHAYAG SOUTH DISTRICT.pdf'),
(402, '2022-10-30', 'Available', 'Thesis', 'MAED', 'CONTINUING PROFESSIONAL DEVELOPMENT AND TEACHERS PERFORMANCE IN MOLAVE DISTRICTS.pdf'),
(403, '2022-10-30', 'Available', 'Thesis', 'MAED', 'DISASTER PREPAREDNESS OF SECONDARY SCHOOLS IN SINDANGAN.pdf'),
(404, '2022-10-30', 'Available', 'Thesis', 'MAED', 'EFFECTIVENESS OF AUTHENTIC INTELLECTUAL WORK AND E-LEARNING METHODS IN TEACHING ARALING PANLIPUNAN.pdf'),
(405, '2022-10-30', 'Available', 'Thesis', 'MAED', 'GRADUATE STUDENTS SATISFACTION TOWARDS THE SERVICE QUALITY OF J.H. CERILLES STATE COLLEGE.pdf'),
(406, '2022-10-30', 'Available', 'Thesis', 'MAED', 'INTEGRATING CALCULATORS IN THE SECONDARY MATHEMATICS INSTRUCTION.pdf'),
(407, '2022-10-30', 'Available', 'Thesis', 'MAED', 'KINDERGARTEN EDUCATION UNDER THE K TO 12 CURRICULUM IN DUMINGAG.pdf'),
(408, '2022-10-30', 'Available', 'Thesis', 'MAED', 'PERFORMANCE APPRAISAL OF MAED GRADUATES.pdf'),
(409, '2022-10-30', 'Available', 'Thesis', 'MAED', 'PERFORMANCE LEVEL OF GRADE VI PUPILS IN SIAYAN DISTRICT.pdf'),
(410, '2022-10-30', 'Available', 'Thesis', 'MAED', 'PERFORMANCE OF GRADE III PUPILS UNDER THE K TO 12 CURRICULUM OF DUMINGAG.pdf'),
(411, '2022-10-30', 'Available', 'Thesis', 'MAED', 'PROBLEM SOLVING SKILLS OF JUNIOR HIGH SCHOOL STUDENTS IN SINDANGAN.pdf'),
(412, '2022-10-30', 'Available', 'Thesis', 'MAED', 'PROFESSIONAL QUALITIES AND NEEDS OF TEACHERS IN SPECIAL SCIENCE ELEMENTARY SCHOOLS.pdf'),
(413, '2022-10-30', 'Available', 'Thesis', 'MAED', 'TEACHING EFFICACY LEVEL OF GRADE VI TEACHERS IN DUMINGAG DISTRICTS.pdf'),
(414, '2022-10-30', 'Available', 'Thesis', 'MAED', 'TEACHING PERFORMANCE OF MULTIGRADE TEACHERS IN THE SECOND CONGRESSIONAL DISTRICT OF ZAMBOANGA DEL NORTE.pdf'),
(415, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'ASSESSMENT OF BRONTISPA LONGISSIMA CONTROL MEASURES IN ZAMBOANGA DEL SUR.pdf'),
(416, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'ASSESSMENT OF ORGANIC PRODUCTS IN DUMINGAG, ZAMBOANGA DEL SUR.pdf'),
(417, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'ASSESSMENT ON GULAYAN SA PAARALAN PROGRAM (GSSP) IN PUBLIC SCHOOLS, 1st DISTRICT OF ZAMBOANGA DEL SUR.pdf'),
(418, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'ASSESSMENT ON PROGRAMANG GULAYAN NG MASA (PGMA) AS COMPONENT OF HUNGER MITIGATION PROGRAM ON THE MUNICIPALITY OF IMELDA, ZAMBOANGA SIBUGAY.pdf'),
(419, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'ASSESSMENT ON THE ADOPTION OF PALAYCHECK SYSTEM IN THE PROVINCE OF ZAMBOANGA DEL SUR.pdf'),
(420, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'EFFICACY OF FARM-TO-MARKET ROAD ON THE FARMERS PRODUCTIVITY IN SELECTED BARANGAYS OF RAMON MAGSAYSAY, ZAMBOANGA DEL SUR.pdf'),
(421, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'EVALUATION OF INTEGRATED RICE-DUCK FARMING IN THE FIRST CONGRESSIONAL DISTRICT OF ZAMBOANGA DEL SUR.pdf'),
(422, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'FARMING SYSTEM OF SUBANEN IN THE PROVINCE OF ZAMBOANGA DEL SUR.pdf'),
(423, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'IMPACT OF EXTENSION SERVICES AND CAPABILITY BUILDING PROGRAM IN DUMINGAG, ZAMBOANGA DEL SUR.pdf'),
(424, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'INFLUENCE OF COOPERATIVES TO AGRICULTURAL PRODUCTIVITY IN 1ST DISTRICT, ZAMBOANGA DEL SUR.pdf'),
(425, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'PERFORMANCE EVALUATION OF SWINE ARTIFICIAL INSEMINATION IN THE MUNICIPALITY OF SIAY, ZAMBOANGA SIBUGAY PROVINCE.pdf'),
(426, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'PROBLEMS AND PROSPECTS OF SMALLHOLD NAÏVE CHICKEN PRODUCION IN BARANGAY SUMADAT, DUMALINAO, ZAMBOANGA DEL SUR.pdf'),
(427, '2022-10-30', 'Available', 'Thesis', 'MAGDEV', 'SOCIO-ECONOMIC IMPACT ON THE ADOPTION OF TRICHOGRAMMA EVANESCENS AGAINST ASIAN CORN BORER.pdf'),
(432, '2022-10-30', 'Available', 'Thesis', 'BEED', 'A PERCEPTIONS OF INTERMEDIATE PUPILS ON THEIR EXPOSURE TO MEDIA TECHNOLOGY IN DUMINGAG SPED CENTER.pdf'),
(439, '2022-11-12', 'Available', 'Thesis', 'BSHRM', 'PERFECT MOMENTS CATERING SERVICES.pdf'),
(440, '2022-11-12', 'Available', 'Thesis', 'BSHRM', 'PIZZA HOTSPOT.pdf'),
(441, '2022-11-12', 'Available', 'Thesis', 'MAGDEV', 'CONSTRAINTS ON THE PRODUCTIVITY OF RICE FARMERS IN ZAMBOANGA SIBUGAY A SPECIAL PROBLEM.pdf'),
(442, '2022-11-12', 'Available', 'Thesis', 'MAGDEV', 'SEWING ITS IMPACT TO DRESSMAKERS IN THE FIRST CONGRESSIONAL DISTRICT IN ZAMBOANGA DEL SUR A SPECIAL PROBLEM.pdf'),
(443, '2022-11-12', 'Available', 'Thesis', 'BSHRM', 'EPIC LOOKS SALON.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `respondent_tbl`
--

CREATE TABLE `respondent_tbl` (
  `res_id` varchar(100) NOT NULL,
  `contact_number` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `record_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `return_tbl`
--

CREATE TABLE `return_tbl` (
  `record_id` int(100) DEFAULT NULL,
  `schoolId` varchar(100) DEFAULT NULL,
  `date_today` date DEFAULT NULL,
  `penalty` int(200) DEFAULT NULL,
  `date_borrowed` date DEFAULT NULL,
  `status` varchar(100) DEFAULT NULL,
  `bookStatus` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `return_tbl`
--

INSERT INTO `return_tbl` (`record_id`, `schoolId`, `date_today`, `penalty`, `date_borrowed`, `status`, `bookStatus`) VALUES
(325, '2023-13611', '2023-04-30', 150, '2023-04-24', 'inStock', NULL),
(324, '2023-13611', '2023-04-30', 150, '2023-04-24', 'inStock', NULL),
(325, '2023-13611', '0000-00-00', 0, '2023-05-08', 'inStock', NULL),
(326, '2023-13611', '0000-00-00', 0, '2023-05-07', 'inStock', NULL),
(326, '2023-13611', '2023-05-07', 150, '2023-05-01', 'inStock', NULL),
(325, '2022-1334', '2023-05-15', 0, '2023-05-15', NULL, 'lack book pages');

-- --------------------------------------------------------

--
-- Table structure for table `session_tbl`
--

CREATE TABLE `session_tbl` (
  `session_id` int(30) NOT NULL,
  `isActive` int(10) NOT NULL,
  `staff_id` int(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `staff_tbl`
--

CREATE TABLE `staff_tbl` (
  `staff_id` int(100) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `admin_type` int(30) DEFAULT NULL,
  `phoneNum` varchar(30) DEFAULT NULL,
  `profile` varchar(100) DEFAULT NULL,
  `staff_school_id` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `staff_tbl`
--

INSERT INTO `staff_tbl` (`staff_id`, `username`, `password`, `email`, `admin_type`, `phoneNum`, `profile`, `staff_school_id`) VALUES
(12, 'test', 'test', 'test@gmail.com', 2, '09661337494', 'girl-shows-okay-sign-winks-good-job-approve-hand-symbol-simple-illustration_348404-39.webp', '2023-13612');

-- --------------------------------------------------------

--
-- Table structure for table `student_tbl`
--

CREATE TABLE `student_tbl` (
  `student_id` int(100) NOT NULL,
  `fname` varchar(100) DEFAULT NULL,
  `lname` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `number` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  `course` varchar(50) DEFAULT NULL,
  `schoolId` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_tbl`
--

INSERT INTO `student_tbl` (`student_id`, `fname`, `lname`, `email`, `number`, `password`, `course`, `schoolId`) VALUES
(2022, 'hannie', 'arcnoco', 'roneil.bansas@nmsc.edu.ph', '09166435496', 'student', 'BSIT', '2022-1334');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity_log_tbl`
--
ALTER TABLE `activity_log_tbl`
  ADD PRIMARY KEY (`activitylog_id`);

--
-- Indexes for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD PRIMARY KEY (`announcement_id`),
  ADD KEY `FK_announcement_tbl` (`staff_id`);

--
-- Indexes for table `borrowed_tbl`
--
ALTER TABLE `borrowed_tbl`
  ADD PRIMARY KEY (`borrowed_id`),
  ADD KEY `FK_borrowed_record_tbl` (`record_id`);

--
-- Indexes for table `borrow_tbl`
--
ALTER TABLE `borrow_tbl`
  ADD PRIMARY KEY (`br_id`),
  ADD KEY `FK_borrower_tbl` (`record_id`),
  ADD KEY `FK_borrow_tbl` (`schoolId`);

--
-- Indexes for table `course_tbl`
--
ALTER TABLE `course_tbl`
  ADD PRIMARY KEY (`course_id`),
  ADD KEY `FK_course_tbl` (`student_id`);

--
-- Indexes for table `record_tbl`
--
ALTER TABLE `record_tbl`
  ADD PRIMARY KEY (`record_id`);

--
-- Indexes for table `respondent_tbl`
--
ALTER TABLE `respondent_tbl`
  ADD PRIMARY KEY (`res_id`),
  ADD KEY `FK_respondent_tbl` (`record_id`);

--
-- Indexes for table `return_tbl`
--
ALTER TABLE `return_tbl`
  ADD KEY `FK_return_tbl` (`record_id`),
  ADD KEY `FK_return_tbls` (`schoolId`);

--
-- Indexes for table `session_tbl`
--
ALTER TABLE `session_tbl`
  ADD PRIMARY KEY (`session_id`),
  ADD KEY `FK_session_tbl` (`staff_id`);

--
-- Indexes for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  ADD PRIMARY KEY (`staff_id`);

--
-- Indexes for table `student_tbl`
--
ALTER TABLE `student_tbl`
  ADD PRIMARY KEY (`student_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `activity_log_tbl`
--
ALTER TABLE `activity_log_tbl`
  MODIFY `activitylog_id` int(100) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin_tbl`
--
ALTER TABLE `admin_tbl`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  MODIFY `announcement_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `borrowed_tbl`
--
ALTER TABLE `borrowed_tbl`
  MODIFY `borrowed_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=90;

--
-- AUTO_INCREMENT for table `borrow_tbl`
--
ALTER TABLE `borrow_tbl`
  MODIFY `br_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `course_tbl`
--
ALTER TABLE `course_tbl`
  MODIFY `course_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `record_tbl`
--
ALTER TABLE `record_tbl`
  MODIFY `record_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=444;

--
-- AUTO_INCREMENT for table `session_tbl`
--
ALTER TABLE `session_tbl`
  MODIFY `session_id` int(30) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `staff_tbl`
--
ALTER TABLE `staff_tbl`
  MODIFY `staff_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student_tbl`
--
ALTER TABLE `student_tbl`
  MODIFY `student_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2024;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `announcement_tbl`
--
ALTER TABLE `announcement_tbl`
  ADD CONSTRAINT `FK_announcement_tbl` FOREIGN KEY (`staff_id`) REFERENCES `staff_tbl` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrowed_tbl`
--
ALTER TABLE `borrowed_tbl`
  ADD CONSTRAINT `FK_borrowed_record_tbl` FOREIGN KEY (`record_id`) REFERENCES `record_tbl` (`record_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `borrow_tbl`
--
ALTER TABLE `borrow_tbl`
  ADD CONSTRAINT `FK_borrower_tbl` FOREIGN KEY (`record_id`) REFERENCES `record_tbl` (`record_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `respondent_tbl`
--
ALTER TABLE `respondent_tbl`
  ADD CONSTRAINT `FK_respondent_tbl` FOREIGN KEY (`record_id`) REFERENCES `record_tbl` (`record_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `return_tbl`
--
ALTER TABLE `return_tbl`
  ADD CONSTRAINT `FK_return_tbl` FOREIGN KEY (`record_id`) REFERENCES `record_tbl` (`record_id`);

--
-- Constraints for table `session_tbl`
--
ALTER TABLE `session_tbl`
  ADD CONSTRAINT `FK_session_tbl` FOREIGN KEY (`staff_id`) REFERENCES `staff_tbl` (`staff_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
