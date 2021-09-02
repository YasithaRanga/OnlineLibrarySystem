-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 02, 2021 at 03:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `abditory`
--

-- --------------------------------------------------------

--
-- Table structure for table `abditorypicks`
--

CREATE TABLE `abditorypicks` (
  `slotID` int(6) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `downloadLink` varchar(255) NOT NULL,
  `readLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `abditorypicks`
--

INSERT INTO `abditorypicks` (`slotID`, `bookName`, `category`, `image`, `downloadLink`, `readLink`) VALUES
(1, 'The Story-book of Science by Jean-Henri Fabre', 'Literature', '28.png', 'https://drive.google.com/uc?export=download&id=18WQsH6CBR_iZjaRStMb3EmYbHz5ibKZx', 'https://drive.google.com/file/d/18WQsH6CBR_iZjaRStMb3EmYbHz5ibKZx/view'),
(2, 'Hard Times by Charles Dickens', 'Education', '5.png', 'https://drive.google.com/uc?export=download&id=1nZWG6DoP506tFLdv49PeCVHoDsK4v1gz', 'https://drive.google.com/file/d/1nZWG6DoP506tFLdv49PeCVHoDsK4v1gz/view'),
(3, 'Raktha Dwaraya by Sandaruwan Panakaduwa', 'Sinhala', '23.png', 'https://drive.google.com/uc?export=download&id=1OYT_bgcNcUMKcuoxd9AMvVb6gHlhdCxJ', 'https://drive.google.com/file/d/1OYT_bgcNcUMKcuoxd9AMvVb6gHlhdCxJ/view'),
(4, 'The Art of Living by Robert Grant', 'Education', '15.png', 'https://drive.google.com/uc?export=download&id=1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx', 'https://drive.google.com/file/d/1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx/view'),
(5, 'The Adventures of Sherlock Holmes by Arthur Conan Doyle', 'Adventure', '9.png', 'https://drive.google.com/uc?export=download&id=1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis', 'https://drive.google.com/file/d/1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis/view'),
(6, 'The Story of Greece by Mary Macgregor', 'Literature', '27.png', 'https://drive.google.com/uc?export=download&id=1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW', 'https://drive.google.com/file/d/1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW/view'),
(7, 'The Invisible Man: A Grotesque Romance by H. G. Wells', 'Romance', '10.png', 'https://drive.google.com/uc?export=download&id=1GorDBQJTKrbh-rCevnqwlAyAoTnUGrkt', 'https://drive.google.com/file/d/1GorDBQJTKrbh-rCevnqwlAyAoTnUGrkt/view');

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `ID` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`ID`, `username`, `password`) VALUES
(14, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `bookoftheday`
--

CREATE TABLE `bookoftheday` (
  `slotID` int(6) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `downloadLink` varchar(255) NOT NULL,
  `readLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bookoftheday`
--

INSERT INTO `bookoftheday` (`slotID`, `bookName`, `category`, `image`, `downloadLink`, `readLink`) VALUES
(1, 'The Ladder to Learning by Miss Lovechild', 'Education', '16.png', 'https://drive.google.com/uc?export=download&id=171y0lQ9mzv94M68818SEKVKfK-8-F6Kx', 'https://drive.google.com/file/d/171y0lQ9mzv94M68818SEKVKfK-8-F6Kx/view');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `bookID` int(6) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `downloadLink` varchar(255) NOT NULL,
  `readLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`bookID`, `bookName`, `category`, `image`, `downloadLink`, `readLink`) VALUES
(1, 'Dirty Work for Doughgod by W. C. Tuttle', 'Adventure', '1.png', 'https://drive.google.com/uc?export=download&id=1NSgrSKppcSlOXghs17hKCfcIGXfr1xSs', 'https://drive.google.com/file/d/1NSgrSKppcSlOXghs17hKCfcIGXfr1xSs/view'),
(2, 'Pictorial Beauty on the Screen by Victor Oscar Freeburg', 'Lifestyle', '2.png', 'https://drive.google.com/uc?export=download&id=16ID3kdElngXBgmjbk9MkBISKoKbKE6rt', 'https://drive.google.com/file/d/16ID3kdElngXBgmjbk9MkBISKoKbKE6rt/view'),
(3, 'Cinders by W. C. Tuttle', 'Adventure', '3.png', 'https://drive.google.com/uc?export=download&id=1iEOrtdrXwPpE7CReatiyKopJM4BPyyax', 'https://drive.google.com/file/d/1iEOrtdrXwPpE7CReatiyKopJM4BPyyax/view'),
(4, 'English Poems by Fernando Pessoa', 'Literature', '4.png', 'https://drive.google.com/uc?export=download&id=1OmEF9mercqa2ADNcpbrzS92N89_oehIj', 'https://drive.google.com/file/d/1OmEF9mercqa2ADNcpbrzS92N89_oehIj/view'),
(5, 'Hard Times by Charles Dickens', 'Education', '5.png', 'https://drive.google.com/uc?export=download&id=1nZWG6DoP506tFLdv49PeCVHoDsK4v1gz', 'https://drive.google.com/file/d/1nZWG6DoP506tFLdv49PeCVHoDsK4v1gz/view'),
(6, 'What\'s Wrong with the World by G. K. Chesterton', 'Education', '6.png', 'https://drive.google.com/uc?export=download&id=12HelKvvIoviyv2VaHAA5-DTp8qNJYukP', 'https://drive.google.com/file/d/12HelKvvIoviyv2VaHAA5-DTp8qNJYukP/view'),
(7, 'Educational Toys by Louis Christian Petersen', 'Education', '7.png', 'https://drive.google.com/uc?export=download&id=1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U', 'https://drive.google.com/file/d/1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U/view'),
(8, 'Around The World in Eighty Days by Jules Verne', 'Adventure', '8.png', 'https://drive.google.com/uc?export=download&id=1U5l23toEwDEcYz2kDAeKFfZpY9y-H9sg', 'https://drive.google.com/file/d/1U5l23toEwDEcYz2kDAeKFfZpY9y-H9sg/view'),
(9, 'The Adventures of Sherlock Holmes by Arthur Conan Doyle', 'Adventure', '9.png', 'https://drive.google.com/uc?export=download&id=1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis', 'https://drive.google.com/file/d/1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis/view'),
(10, 'The Invisible Man: A Grotesque Romance by H. G. Wells', 'Romance', '10.png', 'https://drive.google.com/uc?export=download&id=1GorDBQJTKrbh-rCevnqwlAyAoTnUGrkt', 'https://drive.google.com/file/d/1GorDBQJTKrbh-rCevnqwlAyAoTnUGrkt/view'),
(11, 'Only a Girl\'s Love by Charles Garvice', 'Romance', '11.png', 'https://drive.google.com/uc?export=download&id=1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf', 'https://drive.google.com/file/d/1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf/view'),
(12, 'How We Think by John Dewey', 'Education', '12.png', 'https://drive.google.com/uc?export=download&id=1sh9Yd6Fckzy_7O2k-RkcLKXD7RGkqk_p', 'https://drive.google.com/file/d/1sh9Yd6Fckzy_7O2k-RkcLKXD7RGkqk_p/view'),
(13, 'Character Building by Booker T. Washington', 'Education', '13.png', 'https://drive.google.com/uc?export=download&id=1fii5fuFbJ1asPG84ror0Xld2OFL9xMlC', 'https://drive.google.com/file/d/1fii5fuFbJ1asPG84ror0Xld2OFL9xMlC/view'),
(14, 'For Every Music Lover by Aubertine Woodward Moore', 'Education', '14.png', 'https://drive.google.com/uc?export=download&id=14gTZJqJ71YCe3YLYZ7AMfpkm9sgfMHxA', 'https://drive.google.com/file/d/14gTZJqJ71YCe3YLYZ7AMfpkm9sgfMHxA/view'),
(15, 'The Art of Living by Robert Grant', 'Education', '15.png', 'https://drive.google.com/uc?export=download&id=1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx', 'https://drive.google.com/file/d/1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx/view'),
(16, 'The Ladder to Learning by Miss Lovechild', 'Education', '16.png', 'https://drive.google.com/uc?export=download&id=171y0lQ9mzv94M68818SEKVKfK-8-F6Kx', 'https://drive.google.com/file/d/171y0lQ9mzv94M68818SEKVKfK-8-F6Kx/view'),
(17, 'The Young Enchanted  by Hugh Walpole', 'Romance', '17.png', 'https://drive.google.com/uc?export=download&id=1Ryr1u7RQ19_r0gSWeoY3xAGJlZgcOOs3', 'https://drive.google.com/file/d/1Ryr1u7RQ19_r0gSWeoY3xAGJlZgcOOs3/view'),
(18, 'The Blue Lagoon by H. de Vere Stacpoole', 'Romance', '18.png', 'https://drive.google.com/uc?export=download&id=1HD9TyN7U1tZUO7peEQmRPNLOWOa4c2tn', 'https://drive.google.com/file/d/1HD9TyN7U1tZUO7peEQmRPNLOWOa4c2tn/view'),
(19, 'The Mysterious Stranger by Mark Twain', 'Romance', '19.png', 'https://drive.google.com/uc?export=download&id=1SX_RgZzdgCnjqGqV8BO_A2rLjIfH1Mtk', 'https://drive.google.com/file/d/1SX_RgZzdgCnjqGqV8BO_A2rLjIfH1Mtk/view'),
(20, 'Alice’s Adventures in Wonderland by Lewis Carroll', 'Adventure', '20.png', 'https://drive.google.com/uc?export=download&id=1wo0kuLeB9QT4tqk4rseHywz9GuoLzcr0', 'https://drive.google.com/file/d/1wo0kuLeB9QT4tqk4rseHywz9GuoLzcr0/view'),
(21, 'Kalayathrikaya by Charuka Deshan', 'Sinhala', '21.png', 'https://drive.google.com/uc?export=download&id=1U3y-ZGiY1zqhaO-lDE46potsM45_MkiD', 'https://drive.google.com/file/d/1U3y-ZGiY1zqhaO-lDE46potsM45_MkiD/view'),
(22, 'Senasuru Adaviya by Preethi Srikantha', 'Sinhala', '22.png', 'https://drive.google.com/uc?export=download&id=19YrVSSxSuF-2o6BYaYkLjDRmX_Ic7dDq', 'https://drive.google.com/file/d/19YrVSSxSuF-2o6BYaYkLjDRmX_Ic7dDq/view'),
(23, 'Raktha Dwaraya by Sandaruwan Panakaduwa', 'Sinhala', '23.png', 'https://drive.google.com/uc?export=download&id=1OYT_bgcNcUMKcuoxd9AMvVb6gHlhdCxJ', 'https://drive.google.com/file/d/1OYT_bgcNcUMKcuoxd9AMvVb6gHlhdCxJ/view'),
(24, 'The Neighbo by Chamoth Teran ', 'Sinhala', '24.png', 'https://drive.google.com/uc?export=download&id=1b-htIcCv0M0cEyUw7OXyg-xDc91VClU2', 'https://drive.google.com/file/d/1b-htIcCv0M0cEyUw7OXyg-xDc91VClU2/view'),
(25, 'Jathika Thotilla by S Mahinda Himi', 'Sinhala', '25.png', 'https://drive.google.com/uc?export=download&id=1-DX6i78jwS7FffNAMmbqCqVkLWuKOeaB', 'https://drive.google.com/file/d/1-DX6i78jwS7FffNAMmbqCqVkLWuKOeaB/view'),
(26, 'The Secret Garden by Frances Hodgson Burnett', 'Literature', '26.png', 'https://drive.google.com/uc?export=download&id=1Fjl92af26L6QsNFlBTAEPBV_Zd5D1aT2', 'https://drive.google.com/file/d/1Fjl92af26L6QsNFlBTAEPBV_Zd5D1aT2/view'),
(27, 'The Story of Greece by Mary Macgregor', 'Literature', '27.png', 'https://drive.google.com/uc?export=download&id=1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW', 'https://drive.google.com/file/d/1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW/view'),
(28, 'The Story-book of Science by Jean-Henri Fabre', 'Literature', '28.png', 'https://drive.google.com/uc?export=download&id=18WQsH6CBR_iZjaRStMb3EmYbHz5ibKZx', 'https://drive.google.com/file/d/18WQsH6CBR_iZjaRStMb3EmYbHz5ibKZx/view'),
(29, 'Modern Essays by Harry Morgan', 'Literature', '29.png', 'https://drive.google.com/uc?export=download&id=1XM3VAJr7FFIK_W5Lt7M2ximkTR9ScF8G', 'https://drive.google.com/file/d/1XM3VAJr7FFIK_W5Lt7M2ximkTR9ScF8G/view'),
(30, 'Heart of the World by H Rider Haggard', 'Adventure', '30.png', 'https://drive.google.com/uc?export=download&id=1QJoRSikDMf1UbCzIGxCy8WeYzcHKNzkf', 'https://drive.google.com/file/d/1QJoRSikDMf1UbCzIGxCy8WeYzcHKNzkf/view');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `categoryID` int(4) NOT NULL,
  `category` varchar(255) NOT NULL,
  `link` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`categoryID`, `category`, `link`, `image`) VALUES
(1, 'Adventure', 'categories/adventure.php', 'adventure.jpg'),
(2, 'Education', 'categories/education.php', 'education.jpg'),
(3, 'Lifestyle', 'categories/lifestyle.php', 'lifestyle.png'),
(4, 'Literature', 'categories/literature.php', 'literature.png'),
(5, 'Romance', 'categories/romance.php', 'romance.png'),
(6, 'Sinhala', 'categories/sinhala.php', 'sinhala.png');

-- --------------------------------------------------------

--
-- Table structure for table `latest`
--

CREATE TABLE `latest` (
  `slotID` int(6) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `downloadLink` varchar(255) NOT NULL,
  `readLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `latest`
--

INSERT INTO `latest` (`slotID`, `bookName`, `category`, `image`, `downloadLink`, `readLink`) VALUES
(1, 'Dirty Work for Doughgod by W. C. Tuttle', 'Adventure', '1.png', 'https://drive.google.com/uc?export=download&id=1NSgrSKppcSlOXghs17hKCfcIGXfr1xSs', 'https://drive.google.com/file/d/1NSgrSKppcSlOXghs17hKCfcIGXfr1xSs/view'),
(2, 'What\'s Wrong with the World by G. K. Chesterton', 'Education', '6.png', 'https://drive.google.com/uc?export=download&id=12HelKvvIoviyv2VaHAA5-DTp8qNJYukP', 'https://drive.google.com/file/d/12HelKvvIoviyv2VaHAA5-DTp8qNJYukP/view'),
(3, 'Educational Toys by Louis Christian Petersen', 'Education', '7.png', 'https://drive.google.com/uc?export=download&id=1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U', 'https://drive.google.com/file/d/1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U/view'),
(4, 'The Art of Living by Robert Grant', 'Education', '15.png', 'https://drive.google.com/uc?export=download&id=1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx', 'https://drive.google.com/file/d/1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx/view'),
(5, 'The Adventures of Sherlock Holmes by Arthur Conan Doyle', 'Adventure', '9.png', 'https://drive.google.com/uc?export=download&id=1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis', 'https://drive.google.com/file/d/1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis/view'),
(6, 'The Story of Greece by Mary Macgregor', 'Literature', '27.png', 'https://drive.google.com/uc?export=download&id=1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW', 'https://drive.google.com/file/d/1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW/view'),
(7, 'Only a Girl\'s Love by Charles Garvice', 'Romance', '11.png', 'https://drive.google.com/uc?export=download&id=1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf', 'https://drive.google.com/file/d/1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf/view');

-- --------------------------------------------------------

--
-- Table structure for table `mostpopular`
--

CREATE TABLE `mostpopular` (
  `slotID` int(6) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `downloadLink` varchar(255) NOT NULL,
  `readLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mostpopular`
--

INSERT INTO `mostpopular` (`slotID`, `bookName`, `category`, `image`, `downloadLink`, `readLink`) VALUES
(1, 'Senasuru Adaviya by Preethi Srikantha', 'Sinhala', '22.png', 'https://drive.google.com/uc?export=download&id=19YrVSSxSuF-2o6BYaYkLjDRmX_Ic7dDq', 'https://drive.google.com/file/d/19YrVSSxSuF-2o6BYaYkLjDRmX_Ic7dDq/view'),
(2, 'What\'s Wrong with the World by G. K. Chesterton', 'Education', '6.png', 'https://drive.google.com/uc?export=download&id=12HelKvvIoviyv2VaHAA5-DTp8qNJYukP', 'https://drive.google.com/file/d/12HelKvvIoviyv2VaHAA5-DTp8qNJYukP/view'),
(3, 'Educational Toys by Louis Christian Petersen', 'Education', '7.png', 'https://drive.google.com/uc?export=download&id=1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U', 'https://drive.google.com/file/d/1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U/view'),
(4, 'The Art of Living by Robert Grant', 'Education', '15.png', 'https://drive.google.com/uc?export=download&id=1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx', 'https://drive.google.com/file/d/1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx/view'),
(5, 'The Adventures of Sherlock Holmes by Arthur Conan Doyle', 'Adventure', '9.png', 'https://drive.google.com/uc?export=download&id=1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis', 'https://drive.google.com/file/d/1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis/view'),
(6, 'The Story of Greece by Mary Macgregor', 'Literature', '27.png', 'https://drive.google.com/uc?export=download&id=1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW', 'https://drive.google.com/file/d/1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW/view'),
(7, 'Only a Girl\'s Love by Charles Garvice', 'Romance', '11.png', 'https://drive.google.com/uc?export=download&id=1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf', 'https://drive.google.com/file/d/1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf/view');

-- --------------------------------------------------------

--
-- Table structure for table `testbooks`
--

CREATE TABLE `testbooks` (
  `bookID` int(6) NOT NULL,
  `bookName` varchar(255) NOT NULL,
  `category` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `downloadLink` varchar(255) NOT NULL,
  `readLink` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `testbooks`
--

INSERT INTO `testbooks` (`bookID`, `bookName`, `category`, `image`, `downloadLink`, `readLink`) VALUES
(1, 'Dirty Work for Doughgod by W. C. Tuttle', 'Adventure', '1.png', 'https://drive.google.com/uc?export=download&id=1NSgrSKppcSlOXghs17hKCfcIGXfr1xSs', 'https://drive.google.com/file/d/1NSgrSKppcSlOXghs17hKCfcIGXfr1xSs/view'),
(2, 'Pictorial Beauty on the Screen by Victor Oscar Freeburg', 'Lifestyle', '2.png', 'https://drive.google.com/uc?export=download&id=16ID3kdElngXBgmjbk9MkBISKoKbKE6rt', 'https://drive.google.com/file/d/16ID3kdElngXBgmjbk9MkBISKoKbKE6rt/view'),
(3, 'Cinders by W. C. Tuttle', 'Adventure', '3.png', 'https://drive.google.com/uc?export=download&id=1iEOrtdrXwPpE7CReatiyKopJM4BPyyax', 'https://drive.google.com/file/d/1iEOrtdrXwPpE7CReatiyKopJM4BPyyax/view'),
(4, 'English Poems by Fernando Pessoa', 'Literature', '4.png', 'https://drive.google.com/uc?export=download&id=1OmEF9mercqa2ADNcpbrzS92N89_oehIj', 'https://drive.google.com/file/d/1OmEF9mercqa2ADNcpbrzS92N89_oehIj/view'),
(5, 'Hard Times by Charles Dickens', 'Education', '5.png', 'https://drive.google.com/uc?export=download&id=1nZWG6DoP506tFLdv49PeCVHoDsK4v1gz', 'https://drive.google.com/file/d/1nZWG6DoP506tFLdv49PeCVHoDsK4v1gz/view'),
(6, 'What\'s Wrong with the World by G. K. Chesterton', 'Education', '6.png', 'https://drive.google.com/uc?export=download&id=12HelKvvIoviyv2VaHAA5-DTp8qNJYukP', 'https://drive.google.com/file/d/12HelKvvIoviyv2VaHAA5-DTp8qNJYukP/view'),
(7, 'Educational Toys by Louis Christian Petersen', 'Education', '7.png', 'https://drive.google.com/uc?export=download&id=1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U', 'https://drive.google.com/file/d/1AXu_8wrFt90Jvjt3AOXx8f252gRq5i7U/view'),
(8, 'Around The World in Eighty Days by Jules Verne', 'Adventure', '8.png', 'https://drive.google.com/uc?export=download&id=1U5l23toEwDEcYz2kDAeKFfZpY9y-H9sg', 'https://drive.google.com/file/d/1U5l23toEwDEcYz2kDAeKFfZpY9y-H9sg/view'),
(9, 'The Adventures of Sherlock Holmes by Arthur Conan Doyle', 'Adventure', '9.png', 'https://drive.google.com/uc?export=download&id=1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis', 'https://drive.google.com/file/d/1WorGnP5kHQdGga-MBa8-4Md4z5t_ocis/view'),
(10, 'The Invisible Man: A Grotesque Romance by H. G. Wells', 'Romance', '10.png', 'https://drive.google.com/uc?export=download&id=1GorDBQJTKrbh-rCevnqwlAyAoTnUGrkt', 'https://drive.google.com/file/d/1GorDBQJTKrbh-rCevnqwlAyAoTnUGrkt/view'),
(11, 'Only a Girl\'s Love by Charles Garvice', 'Romance', '11.png', 'https://drive.google.com/uc?export=download&id=1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf', 'https://drive.google.com/file/d/1HBMO5OywMMXMLQu2ysW8Li8jG9UQw0Jf/view'),
(12, 'How We Think by John Dewey', 'Education', '12.png', 'https://drive.google.com/uc?export=download&id=1sh9Yd6Fckzy_7O2k-RkcLKXD7RGkqk_p', 'https://drive.google.com/file/d/1sh9Yd6Fckzy_7O2k-RkcLKXD7RGkqk_p/view'),
(13, 'Character Building by Booker T. Washington', 'Education', '13.png', 'https://drive.google.com/uc?export=download&id=1fii5fuFbJ1asPG84ror0Xld2OFL9xMlC', 'https://drive.google.com/file/d/1fii5fuFbJ1asPG84ror0Xld2OFL9xMlC/view'),
(14, 'For Every Music Lover by Aubertine Woodward Moore', 'Education', '14.png', 'https://drive.google.com/uc?export=download&id=14gTZJqJ71YCe3YLYZ7AMfpkm9sgfMHxA', 'https://drive.google.com/file/d/14gTZJqJ71YCe3YLYZ7AMfpkm9sgfMHxA/view'),
(15, 'The Art of Living by Robert Grant', 'Education', '15.png', 'https://drive.google.com/uc?export=download&id=1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx', 'https://drive.google.com/file/d/1Jl_GDxgBvM2452ldteY0lxw8eWqQE1gx/view'),
(16, 'The Ladder to Learning by Miss Lovechild', 'Education', '16.png', 'https://drive.google.com/uc?export=download&id=171y0lQ9mzv94M68818SEKVKfK-8-F6Kx', 'https://drive.google.com/file/d/171y0lQ9mzv94M68818SEKVKfK-8-F6Kx/view'),
(17, 'The Young Enchanted  by Hugh Walpole', 'Romance', '17.png', 'https://drive.google.com/uc?export=download&id=1Ryr1u7RQ19_r0gSWeoY3xAGJlZgcOOs3', 'https://drive.google.com/file/d/1Ryr1u7RQ19_r0gSWeoY3xAGJlZgcOOs3/view'),
(18, 'The Blue Lagoon by H. de Vere Stacpoole', 'Romance', '18.png', 'https://drive.google.com/uc?export=download&id=1HD9TyN7U1tZUO7peEQmRPNLOWOa4c2tn', 'https://drive.google.com/file/d/1HD9TyN7U1tZUO7peEQmRPNLOWOa4c2tn/view'),
(19, 'The Mysterious Stranger by Mark Twain', 'Romance', '19.png', 'https://drive.google.com/uc?export=download&id=1SX_RgZzdgCnjqGqV8BO_A2rLjIfH1Mtk', 'https://drive.google.com/file/d/1SX_RgZzdgCnjqGqV8BO_A2rLjIfH1Mtk/view'),
(20, 'Alice’s Adventures in Wonderland by Lewis Carroll', 'Adventure', '20.png', 'https://drive.google.com/uc?export=download&id=1wo0kuLeB9QT4tqk4rseHywz9GuoLzcr0', 'https://drive.google.com/file/d/1wo0kuLeB9QT4tqk4rseHywz9GuoLzcr0/view'),
(21, 'Kalayathrikaya by Charuka Deshan', 'Sinhala', '21.png', 'https://drive.google.com/uc?export=download&id=1U3y-ZGiY1zqhaO-lDE46potsM45_MkiD', 'https://drive.google.com/file/d/1U3y-ZGiY1zqhaO-lDE46potsM45_MkiD/view'),
(22, 'Senasuru Adaviya by Preethi Srikantha', 'Sinhala', '22.png', 'https://drive.google.com/uc?export=download&id=19YrVSSxSuF-2o6BYaYkLjDRmX_Ic7dDq', 'https://drive.google.com/file/d/19YrVSSxSuF-2o6BYaYkLjDRmX_Ic7dDq/view'),
(23, 'Raktha Dwaraya by Sandaruwan Panakaduwa', 'Sinhala', '23.png', 'https://drive.google.com/uc?export=download&id=1OYT_bgcNcUMKcuoxd9AMvVb6gHlhdCxJ', 'https://drive.google.com/file/d/1OYT_bgcNcUMKcuoxd9AMvVb6gHlhdCxJ/view'),
(24, 'The Neighbo by Chamoth Teran ', 'Sinhala', '24.png', 'https://drive.google.com/uc?export=download&id=1b-htIcCv0M0cEyUw7OXyg-xDc91VClU2', 'https://drive.google.com/file/d/1b-htIcCv0M0cEyUw7OXyg-xDc91VClU2/view'),
(25, 'Jathika Thotilla by S Mahinda Himi', 'Sinhala', '25.png', 'https://drive.google.com/uc?export=download&id=1-DX6i78jwS7FffNAMmbqCqVkLWuKOeaB', 'https://drive.google.com/file/d/1-DX6i78jwS7FffNAMmbqCqVkLWuKOeaB/view'),
(26, 'The Secret Garden by Frances Hodgson Burnett', 'Literature', '26.png', 'https://drive.google.com/uc?export=download&id=1Fjl92af26L6QsNFlBTAEPBV_Zd5D1aT2', 'https://drive.google.com/file/d/1Fjl92af26L6QsNFlBTAEPBV_Zd5D1aT2/view'),
(27, 'The Story of Greece by Mary Macgregor', 'Literature', '27.png', 'https://drive.google.com/uc?export=download&id=1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW', 'https://drive.google.com/file/d/1SYqMBk4LuBTa3IFs30s9-JetJ_zfMrAW/view'),
(28, 'The Story-book of Science by Jean-Henri Fabre', 'Literature', '28.png', 'https://drive.google.com/uc?export=download&id=18WQsH6CBR_iZjaRStMb3EmYbHz5ibKZx', 'https://drive.google.com/file/d/18WQsH6CBR_iZjaRStMb3EmYbHz5ibKZx/view'),
(29, 'Modern Essays by Harry Morgan', 'Literature', '29.png', 'https://drive.google.com/uc?export=download&id=1XM3VAJr7FFIK_W5Lt7M2ximkTR9ScF8G', 'https://drive.google.com/file/d/1XM3VAJr7FFIK_W5Lt7M2ximkTR9ScF8G/view'),
(30, 'Heart of the World bybH Rider Haggard', 'Adventure', '30.png', 'https://drive.google.com/uc?export=download&id=1QJoRSikDMf1UbCzIGxCy8WeYzcHKNzkf', 'https://drive.google.com/file/d/1QJoRSikDMf1UbCzIGxCy8WeYzcHKNzkf/view');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `abditorypicks`
--
ALTER TABLE `abditorypicks`
  ADD PRIMARY KEY (`slotID`);

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `bookoftheday`
--
ALTER TABLE `bookoftheday`
  ADD PRIMARY KEY (`slotID`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`bookID`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`categoryID`);

--
-- Indexes for table `latest`
--
ALTER TABLE `latest`
  ADD PRIMARY KEY (`slotID`);

--
-- Indexes for table `mostpopular`
--
ALTER TABLE `mostpopular`
  ADD PRIMARY KEY (`slotID`);

--
-- Indexes for table `testbooks`
--
ALTER TABLE `testbooks`
  ADD PRIMARY KEY (`bookID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `abditorypicks`
--
ALTER TABLE `abditorypicks`
  MODIFY `slotID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `bookoftheday`
--
ALTER TABLE `bookoftheday`
  MODIFY `slotID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `bookID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `categoryID` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `latest`
--
ALTER TABLE `latest`
  MODIFY `slotID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `mostpopular`
--
ALTER TABLE `mostpopular`
  MODIFY `slotID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `testbooks`
--
ALTER TABLE `testbooks`
  MODIFY `bookID` int(6) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
