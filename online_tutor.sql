-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Apr 13, 2021 at 09:33 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `online_tutor`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
CREATE TABLE IF NOT EXISTS `admin` (
  `ad_id` int(11) NOT NULL AUTO_INCREMENT,
  `ad_username` varchar(100) NOT NULL,
  `ad_password` varchar(100) NOT NULL,
  PRIMARY KEY (`ad_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ad_id`, `ad_username`, `ad_password`) VALUES
(1, 'admin', '123');

-- --------------------------------------------------------

--
-- Table structure for table `buynow`
--

DROP TABLE IF EXISTS `buynow`;
CREATE TABLE IF NOT EXISTS `buynow` (
  `buynow_id` int(8) NOT NULL AUTO_INCREMENT,
  `us_id` int(8) NOT NULL,
  `sub_id` int(8) NOT NULL,
  `pr_quantity` int(8) NOT NULL DEFAULT '1',
  `tutor_id` int(11) NOT NULL,
  PRIMARY KEY (`buynow_id`)
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buynow`
--

INSERT INTO `buynow` (`buynow_id`, `us_id`, `sub_id`, `pr_quantity`, `tutor_id`) VALUES
(8, 1, 11, 1, 2),
(9, 1, 10, 1, 11);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

DROP TABLE IF EXISTS `category`;
CREATE TABLE IF NOT EXISTS `category` (
  `ca_id` int(11) NOT NULL AUTO_INCREMENT,
  `ca_name` varchar(100) NOT NULL,
  `ca_image` varchar(300) DEFAULT NULL,
  PRIMARY KEY (`ca_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`ca_id`, `ca_name`, `ca_image`) VALUES
(1, 'Distance Learning', 'category/34e157766f31db3d2099831d348a7933.jpg'),
(2, 'Lesson Planning', 'category/f621585df244e9596dc70a39b579efb1.jpg'),
(3, 'Online Tutoring', 'category/e7a561a2f218bf9cc0e697598320ec59.jpg'),
(4, 'Machine Learning', 'category/c92383002f757cddd52df84e68894b5e.jpg'),
(5, 'Digital Marketing', 'category/5043553b7018eb5255510c3b9d2c8c88.jpg'),
(6, 'Languages', 'category/05311655a15b75fab86956663e1819cd.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact_tb`
--

DROP TABLE IF EXISTS `contact_tb`;
CREATE TABLE IF NOT EXISTS `contact_tb` (
  `cust_id` int(11) NOT NULL AUTO_INCREMENT,
  `cust_name` varchar(50) NOT NULL,
  `cust_phno` bigint(20) NOT NULL,
  `cust_email` varchar(100) NOT NULL,
  `cust_message` text NOT NULL,
  PRIMARY KEY (`cust_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `subjects`
--

DROP TABLE IF EXISTS `subjects`;
CREATE TABLE IF NOT EXISTS `subjects` (
  `sub_id` int(11) NOT NULL AUTO_INCREMENT,
  `sub_name` varchar(100) NOT NULL,
  `sub_img` varchar(100) DEFAULT NULL,
  `sub_duration` int(11) NOT NULL,
  `ca_id` int(11) NOT NULL,
  PRIMARY KEY (`sub_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subjects`
--

INSERT INTO `subjects` (`sub_id`, `sub_name`, `sub_img`, `sub_duration`, `ca_id`) VALUES
(1, 'Architecture', NULL, 3, 1),
(2, 'Biology', NULL, 4, 3),
(3, 'Business Study', NULL, 5, 3),
(4, 'Chemistry', NULL, 10, 3),
(5, 'Coding', NULL, 5, 3),
(6, 'Communication', NULL, 4, 1),
(7, 'Computer Science', NULL, 7, 3),
(8, 'Engineering', NULL, 8, 2),
(9, 'English', NULL, 5, 3),
(10, 'Mathematics', NULL, 5, 3),
(11, 'Marketing', NULL, 4, 2),
(12, 'Physics', NULL, 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `tutor_reg`
--

DROP TABLE IF EXISTS `tutor_reg`;
CREATE TABLE IF NOT EXISTS `tutor_reg` (
  `tutor_id` int(11) NOT NULL AUTO_INCREMENT,
  `tutor_name` varchar(100) NOT NULL,
  `tutor_details` text NOT NULL,
  `tutor_subjects` int(11) NOT NULL,
  `tutor_date` date NOT NULL,
  `tutor_img` varchar(100) DEFAULT NULL,
  `tutor_phno` bigint(20) NOT NULL,
  `tutor_qualification` varchar(200) DEFAULT NULL,
  `tutor_email` varchar(200) NOT NULL,
  `tutor_price` int(11) DEFAULT NULL,
  PRIMARY KEY (`tutor_id`)
) ENGINE=MyISAM AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tutor_reg`
--

INSERT INTO `tutor_reg` (`tutor_id`, `tutor_name`, `tutor_details`, `tutor_subjects`, `tutor_date`, `tutor_img`, `tutor_phno`, `tutor_qualification`, `tutor_email`, `tutor_price`) VALUES
(1, 'Joseph Paul', '<p>My goal as a teacher or tutor is to provide access to quality education. Standartized test, for better or worse, are the gatekeepers in our current society to a shrinking middle class. Sapien enhanced by massage therapy box need. But a bow financing products targeted, the gate of the lakes The Beatles and always. Facilisis consectetur adipiscing elit Aenean Aenean non of life, and the fear-free. For any fears that the weekend football need care now.</p>\r\n', 5, '2021-04-13', 'product/9681245890a1ad78e5e47443c996c2ff.png', 9846925698, 'MCA', 'joseph@gmail.com', 100),
(2, 'Towin Mathai', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class.</span></p>\r\n', 11, '2021-04-14', 'product/8eed5cc53c6a42907035c4d8f4a54244.png', 7589632584, 'MTECH', 'towin@gmail.com', 500),
(7, 'Amal Babu', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class</span></p>\r\n', 2, '2021-04-14', 'product/2e2079d63348233d91cad1fa9b1361e9.png', 7845963215, 'BCA', 'amal@gmail.com', 2000),
(8, 'Mayjoy Joseph', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class</span></p>\r\n', 4, '2021-04-14', 'product/5eac43aceba42c8757b54003a58277b5.png', 7895698523, 'MSC Chemistry', 'mayjoy@gmail.com', 1500),
(9, 'Rose Mary Mathew', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class</span></p>\r\n', 8, '2021-04-14', 'product/7078971350bcefbc6ec2779c9b84a9bd.png', 7895698523, 'MCA', 'rosemary@gmail.com', 2500),
(10, 'Teena Babu', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class</span></p>\r\n', 7, '2021-04-14', 'product/bdeeecd97342dada47213d06bbd67c2c.png', 7895698523, 'Msc Computer Science', 'teena@gmail.com', 5000),
(11, 'Sooraj V Rajan', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class</span></p>\r\n', 10, '2021-04-14', 'product/23937b42f9273974570fb5a56a6652ee.png', 7895698523, 'MSC Maths', 'sooraj@gmail.com', 10000),
(12, 'Maria Joseph', '<p><span style=\"color: rgb(145, 149, 154); font-family: &quot;titillium web&quot;, sans-serif; font-size: 15px;\">My goal as a teacher or tutor is to provide access to quality education. Standartized tests, for better or worse, are the current gatekeepers in our society to a shrinking middle class</span></p>\r\n', 3, '2021-04-14', 'product/e48e13207341b6bffb7fb1622282247b.png', 7895698523, 'MBA', 'maria@gmail.com', 8000);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `us_id` int(11) NOT NULL AUTO_INCREMENT,
  `us_name` varchar(100) NOT NULL,
  `us_email` varchar(100) NOT NULL,
  `us_phno` bigint(20) NOT NULL,
  `us_password` varchar(100) NOT NULL,
  `us_image` varchar(100) DEFAULT NULL,
  `us_lname` varchar(100) NOT NULL,
  PRIMARY KEY (`us_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`us_id`, `us_name`, `us_email`, `us_phno`, `us_password`, `us_image`, `us_lname`) VALUES
(1, 'test', 'test@gmail.com', 1234569875, '202cb962ac59075b964b07152d234b70', NULL, 'test');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
