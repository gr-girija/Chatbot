-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2020 at 10:16 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bot`
--

-- --------------------------------------------------------

--
-- Table structure for table `chatbot`
--

CREATE TABLE `chatbot` (
  `id` int(11) NOT NULL,
  `queries` varchar(5000) NOT NULL,
  `replies` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chatbot`
--

INSERT INTO `chatbot` (`id`, `queries`, `replies`) VALUES
(1, 'Hi || Hello || Heya || Hey', 'Greetings!'),
(13, 'ABOUT GEU || about geu || About || GEU  ', 'Graphic Era Deemed to be University is the culmination of the vision of its founder, Prof (Dr) Kamal Ghanshala.  In 2008, the Institute was accorded the status of Deemed University under Section 3 of the UGC Act, 1956 vide Notification F.9-48/2007-U.3 (A) dated August 14, 2008 and approved by Ministry of Human Resource Development, Government of India.  In 2015 Graphic Era University was accredited by NAAC with grade ‘A’.'),
(15, 'NIRF || RANKING || NIRF RANKING', 'Graphic Era (Deemed to be University) has been conferred All-India NIRF Rank 89 in NIRF (National Institutional Ranking Framework) Rankings in June 2020. The University has also been awarded All India Rank 97 in the University Category. '),
(16, 'NAAC||Grade || NAAC GRADE', 'In 2015, Graphic Era University was accredited by NAAC with grade ‘A’.'),
(17, '360 TOUR|| 360|| TOUR', 'To view our campus in a 360 degree view , you can go to our official website : www.geu.ac.in'),
(18, 'COURSES OFFERED||COURSES||COURSE||OFFERED||COURSE OFFERED', 'More than 20 Under graduate and Post graduate courses with specializations are offered. To know specifically about some, respond with Under graduate or Post graduate or Doctoral Courses or Certificate courses.'),
(19, 'FEE|| FEES|| FEE PAYMENT', 'For current and new students, the options for fee payment are made available on the ERP portal. To know ore, visit: www.geu.ac.in'),
(20, 'ACADEMICS||ACADEMIC', 'Educational opportunities at Graphic Era (Deemed to be University) have global perspectives that aim at life-altering discoveries, acquisition of knowledge and transformative experiences. Students have the option to choose from innumerable programs. Whether you are looking for an undergraduate program, graduate program or doctoral program we cater to all your academic aspirations. Our graduates leave this campus with skills, knowledge and the enthusiasm to become leaders in their fields and make their mark in the world. For more, visit our website: www.geu.ac.in'),
(21, 'CALENDAR 2020|| CALENDAR|| 2020', 'To download academic calendar for upcoming semesters, visit our website : www.geu.ac.in'),
(22, 'ALUMNI|| ALUMNI CONNECT|| ALUM', 'To register yourself as an Alumni, please visit our official website to know more about the procedure: www.geu.ac.in or visit www.geu.almaconnect.com'),
(23, 'PLACEMENTS|| PLACEMENT|| PACKAGE', 'The Average Package & Highest Package for current year are 5.38 Lacs and 43.95 Lacs respectively. To know more, visit our website: www.geu.ac.in'),
(24, 'DIGITAL LIBRARY|| LIBRARY|| DIGITAL', 'To access Digital library, kindly visit the link: www.geu.new.knimbus.com '),
(25, 'SOCIAL CLUBS|| SOCIAL CLUB|| CLUB|| CLUBS|| SOCIAL', 'To ensure all-round development, students have the liberty to actively become members of following clubs, according to their interests and needs:\r\nNCC\r\nNSS\r\nPapertech\r\nApocalypse\r\nKavyanjali\r\nMotorsports\r\nGeubotics\r\nRhythm Slaves\r\nIncredibles Crew, etc\r\n'),
(26, 'EVENTS & FESTS|| EVENTS|| EVENT|| FEST|| FESTS', 'Many Technical and Non-Technical Events are conducted by the university. Some of them are:\r\nGrafest (Annual Fest)\r\nDiwali Fest or Mini-Grafest \r\nZerone\r\nSPE, etc\r\n'),
(27, 'HOSTEL FACILITIES|| HOSTEL|| HOSTELS || ', 'IN-CAMPUS\r\nGirls: 03\r\nBoys: 02\r\nOFF-CAMPUS\r\nGirls: 01\r\nBoys: 06\r\n'),
(28, 'SCHOLARSHIPS|| SCHOLARSHIP|| FEE CONCESSIONS || CONCESSIONS|| CONCESSION', 'Scholarships or Fee Concessions are offered on the following basis:\r\nGirl Child, Academic Achievements, Uttarakhand Domicile, Defense Personnel Wards. To know more, Contact Fee Cell, GEU or visit our official website: www.geu.ac.in\r\n'),
(29, 'MORE|| MORE INFORMATION ', 'To Know more about Graphic Era Deemed to be University, go to our official website: www.geu.ac.in'),
(30, 'BYE|| SEE YOU LATER|| THANK YOU|| THANKS|| THANK', 'TAKE CARE! STAY SAFE !');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chatbot`
--
ALTER TABLE `chatbot`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chatbot`
--
ALTER TABLE `chatbot`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
