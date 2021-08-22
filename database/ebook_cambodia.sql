-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 22, 2021 at 05:35 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ebook_cambodia`
--

-- --------------------------------------------------------

--
-- Table structure for table `authors`
--

CREATE TABLE `authors` (
  `author_id` int(11) NOT NULL,
  `author_name` varchar(50) NOT NULL,
  `birthday` date NOT NULL,
  `picture` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `authors`
--

INSERT INTO `authors` (`author_id`, `author_name`, `birthday`, `picture`) VALUES
(1, 'Vicheka Lo', '2021-08-05', 'https://www.humanesociety.org/sites/default/files/styles/1240x698/public/2019/03/rabbit-475261_0.jpg?h=c855054e&itok=lfjXk4-x'),
(2, 'Kuthy Senn', '2021-08-05', 'https://api.time.com/wp-content/uploads/2019/03/us-movie-rabbits-meaning.jpg?quality=85&w=1200&h=628&crop=1'),
(4, 'Vun Yin', '2021-08-19', 'https://www.petwebsite.co.uk/media/k2/items/cache/9b2c4b44fb86522964124ed80d03c5e8_L.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(11) NOT NULL,
  `title` varchar(50) NOT NULL,
  `publish` date NOT NULL,
  `price` varchar(200) NOT NULL,
  `isbn` varchar(100) NOT NULL,
  `description` varchar(250) NOT NULL,
  `image` varchar(250) NOT NULL,
  `author_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `title`, `publish`, `price`, `isbn`, `description`, `image`, `author_id`, `category_id`) VALUES
(28, 'The Secret', '2021-08-20', '777', 'B43567000', 'The Message Service that Gives You More Options, More Security and More Flexibility. Covering 200+ Countries and Regions, Prioritize Your Messages, Smart Volume Control. 50+ Free Trial Products. No.3 Global Market Share. 1M+ Paying Customers.', 'the secret.jpg', 1, 1),
(29, 'Good Habbit', '2021-08-28', 'free', 'B43567000', 'The Message Service that Gives You More Options, More Security and More Flexibility. Covering 200+ Countries and Regions, Prioritize Your Messages, Smart Volume Control. 50+ Free Trial Products. No.3 Global Market Share. 1M+ Paying Customers.', 'habit.jpg', 1, 1),
(30, 'Iron Man', '2021-08-27', 'Free', '345BGJ456', 'The Message Service that Gives You More Options, More Security and More Flexibility. Covering 200+ Countries and Regions, Prioritize Your Messages, Smart Volume Control. 50+ Free Trial Products. No.3 Global Market Share. 1M+ Paying Customers.', 'the secret.jpg', 1, 1),
(33, 'The King', '2021-08-28', 'Free', '3457GHJ', 'The Message Service that Gives You More Options, More Security and More Flexibility. Covering 200+ Countries and Regions, Prioritize Your Messages, Smart Volume Control. 50+ Free Trial Products. No.3 Global Market Share. 1M+ Paying Customers.', 'jim.jpg', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`) VALUES
(1, 'Horror'),
(2, 'Education'),
(3, 'Fantasy');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `username`, `password`, `role`) VALUES
(1, 'Vicheka', '01012020', 'admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `authors`
--
ALTER TABLE `authors`
  ADD PRIMARY KEY (`author_id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `author_id` (`author_id`),
  ADD KEY `category_id` (`category_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `authors`
--
ALTER TABLE `authors`
  MODIFY `author_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `books`
--
ALTER TABLE `books`
  ADD CONSTRAINT `books_ibfk_1` FOREIGN KEY (`author_id`) REFERENCES `authors` (`author_id`),
  ADD CONSTRAINT `books_ibfk_2` FOREIGN KEY (`category_id`) REFERENCES `categories` (`category_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
