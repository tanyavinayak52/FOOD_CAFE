-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 16, 2020 at 09:00 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food_cafe`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `email` varchar(100) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`email`, `password`, `name`, `type`) VALUES
('demo@gmail.com', '123456789', 'rose', 'Sub Admin'),
('raj@gmail.com', '7897', 'raz', 'Admin'),
('sheenam@gmail.com', '34567', '', ''),
('tany78@gmail.com', '1234', 'tan', 'Admin'),
('tanyavinayak52@gmail.com', '123', 'tanya', 'Admin'),
('xyz@gmail.com', '789789', 'vishakha', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `categoryname` varchar(100) NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`categoryname`, `description`) VALUES
('dsmfbsdm', 'b%21%40%23%24%25%5E%26%2A%28%29'),
('Punjabi+cuisine', 'Punjabi+Cuisine+is+one+of+the+most+distinct+and+popular+Indian+cuisines+and+comes+from+the+region+of+Punjab+situated+partially+in+India+and+Pakistan.+It+offers+a+vast+variety+of+delectable+and+exotic+vegetarian+and+non-vegetarian+dishes+that+are+prepared+with+varied+traditional+culinary+styles%2C+particularly+the+tandoori+style.+The+exotic+and+appetizing+tandoor+items+and+various+other+mouth-watering+and+finger+licking+dishes+having+rich%2C+spicy+and+buttery+flavour+savoured+with+Punjabi+Basmati+rice+of+varied+forms+and+special+Punjabi+breads+like+Tandoori+Roti+and+Naan+have+not+only+made+the+gastronomists+crave+for+more+but+has+also+garnered+the+cuisine+much+fame+outside+the+Punjab+region+taking+it+to+places+around+the+globe+like+Canada+and+the+UK.dhfgfggeyr'),
('south+indian+food', 'South Indian food has earned much fame across the globe, particularly for scrumptious dishes like Dosa, Vada, Idli, Uttapam and Sambar. South Indian meals comprise cuisines of five South Indian states namely Tamil Nadu, Karnataka, Kerala, Andhra Pradesh and Telangana, along with several local cuisines within these states. The region offers a wide variety of vegetarian and non-vegetarian dishes with each state holding its own uniqueness and food habits. Some authentic and popular South Indian dishes that are sure to delight taste buds include Chakra Pongal, Sambar and Vadai from Tamil Nadu; Rava Idli from Karnataka; Kadala Curry and Appam from Kerala; and Kebabs and Biryanis from Andhra Pradesh. ');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`categoryname`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
