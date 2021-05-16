-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2021 at 02:39 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecom`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `admin_id` int(100) NOT NULL,
  `admin_name` varchar(255) NOT NULL,
  `admin_email` varchar(255) NOT NULL,
  `admin_pass` varchar(255) NOT NULL,
  `admin_image` text NOT NULL,
  `admin_contact` varchar(255) NOT NULL,
  `admin_country` text NOT NULL,
  `admin_job` varchar(255) NOT NULL,
  `admin_about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admin_id`, `admin_name`, `admin_email`, `admin_pass`, `admin_image`, `admin_contact`, `admin_country`, `admin_job`, `admin_about`) VALUES
(1, 'Saiful Islam', 'saiful2561998@gmail.com', '123', 'admin.jpg', '01758284109', 'Bangladesh', 'CEO', 'This is the CEO of the company');

-- --------------------------------------------------------

--
-- Table structure for table `billing_address`
--

CREATE TABLE `billing_address` (
  `cust_id` int(11) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `billing_add` text DEFAULT NULL,
  `region` text NOT NULL,
  `contact_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `billing_address`
--

INSERT INTO `billing_address` (`cust_id`, `customer_name`, `billing_add`, `region`, `contact_number`) VALUES
(0, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(1, 'saiful', 'lakshmipur, Chittagong', 'Chittagong', '01758284109'),
(9, 'kashem bhai', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(10, 'Md. Saiful Islam Roni', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(11, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(12, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `p_id` int(100) NOT NULL,
  `ip_add` varchar(255) NOT NULL,
  `qty` int(100) NOT NULL,
  `size` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`p_id`, `ip_add`, `qty`, `size`) VALUES
(1, '127.0.0.1', 1, 'Small'),
(1, '::1', 1, 'Small');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `cat_id` int(100) NOT NULL,
  `cat_title` text NOT NULL,
  `cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`cat_id`, `cat_title`, `cat_desc`) VALUES
(1, 'MEN', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(2, 'WOMEN', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(3, 'KIDS', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(4, 'OTHERS', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book');

-- --------------------------------------------------------

--
-- Table structure for table `chatbot_hints`
--

CREATE TABLE `chatbot_hints` (
  `id` int(11) NOT NULL,
  `question` varchar(100) NOT NULL,
  `reply` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `chatbot_hints`
--

INSERT INTO `chatbot_hints` (`id`, `question`, `reply`) VALUES
(1, 'HI||Hello||Hola', 'Hello, how are you.'),
(2, 'How are you', 'Good to see you again!'),
(3, 'what is your name||whats your name', 'My name is Vishal Bot'),
(4, 'what should I call you', 'You can call me Vishal Bot'),
(5, 'Where are your from', 'I m from India'),
(6, 'Bye||See you later||Have a Good Day', 'Sad to see you are going. Have a nice day'),
(7, 'who is the CEO of this shop?', 'Mr. Saiful Islma is the CEO.');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `customer_id` int(100) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `customer_email` varchar(255) NOT NULL,
  `customer_pass` varchar(255) NOT NULL,
  `customer_country` text NOT NULL,
  `customer_city` text NOT NULL,
  `customer_contact` varchar(255) NOT NULL,
  `customer_address` text NOT NULL,
  `customer_image` text NOT NULL,
  `customer_ip` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customer_id`, `customer_name`, `customer_email`, `customer_pass`, `customer_country`, `customer_city`, `customer_contact`, `customer_address`, `customer_image`, `customer_ip`) VALUES
(1, 'Md. Saiful Islam', 'saiful2561998@gmail.com', '123', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka.', 'student-1.jpg', '::1'),
(2, 'Mr. X', 'nai@gmail.com', '56585452', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'constantinos-panagopoulos-bAS_PnTzytc-unsplash.jpg', '::1'),
(5, 'sadia', 'sadia@gmail.com', '123', 'Bangladesh', 'Dhaka', '01665465454', ' Jamalpur', 'student-5.jpg', '::1'),
(7, 'saiful', 's@gmail.com', '123', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'saiful1.jpg', '::1'),
(8, 'Md. Saiful Islam', 'saiful2561998@gmail.com', '56585452', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'saiful1.jpg', '::1'),
(9, 'morshed', 'morshed@gmail.com', '123', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'me 1.1.jpg', '::1'),
(10, 'Ashraful', 'ash@gmail.com', '123', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'as.jpg', '::1'),
(11, 'AKASH', 'AKASH@gmail.com', '123', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'saiful1.jpg', '::1'),
(12, 'AKASH', 'a@gmail.com', '123', 'Bangladesh', 'Dhaka', '01758284109', 'Dhupkhola math , Gendaria , Dhaka., Jagannath University, Dhaka', 'Screenshot (1).png', '::1');

-- --------------------------------------------------------

--
-- Table structure for table `customer_order`
--

CREATE TABLE `customer_order` (
  `order_id` int(10) NOT NULL,
  `customer_id` int(10) NOT NULL,
  `product_id` int(100) NOT NULL,
  `due_amount` int(100) NOT NULL,
  `shipping_address` text NOT NULL,
  `invoice_no` int(100) NOT NULL,
  `qty` int(10) NOT NULL,
  `size` text NOT NULL,
  `order_date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `order_status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_order`
--

INSERT INTO `customer_order` (`order_id`, `customer_id`, `product_id`, `due_amount`, `shipping_address`, `invoice_no`, `qty`, `size`, `order_date`, `order_status`) VALUES
(28, 1, 5, 150000, '', 1990691356, 1, 'Small', '2020-11-01 13:24:18', 'Complete'),
(29, 1, 4, 3500, '', 1226846176, 1, 'Small', '2020-11-07 16:46:33', 'Complete'),
(31, 1, 2, 20000, '', 185769516, 1, 'Small', '2020-11-01 17:35:46', 'Complete'),
(33, 1, 6, 2500, '', 1310614455, 1, 'Small', '2020-11-01 18:03:28', 'pending'),
(34, 1, 6, 2500, '', 557926058, 1, 'Small', '2020-11-01 18:27:40', 'pending'),
(35, 1, 5, 150000, '', 557926058, 1, 'Small', '2020-11-01 18:27:40', 'pending'),
(36, 1, 6, 2500, '', 1561790517, 1, 'Small', '2020-11-01 19:27:31', 'pending'),
(37, 1, 2, 20000, '', 1561790517, 1, 'Small', '2020-11-01 19:27:31', 'pending'),
(38, 1, 4, 3500, '', 1561790517, 1, 'Small', '2020-11-01 19:27:31', 'pending'),
(39, 1, 6, 2500, '', 540329720, 1, 'Small', '2020-11-01 19:33:40', 'pending'),
(40, 1, 4, 3500, '', 1093197418, 1, 'Small', '2020-11-01 19:35:30', 'pending'),
(41, 1, 6, 2500, '', 16943136, 1, 'Small', '2021-05-01 22:31:06', 'pending'),
(42, 1, 5, 150000, '', 16943136, 1, 'Small', '2021-05-01 22:31:06', 'pending'),
(43, 1, 1, 1000, '', 16943136, 1, 'Small', '2021-05-01 22:31:06', 'pending');

-- --------------------------------------------------------

--
-- Table structure for table `customer_rev`
--

CREATE TABLE `customer_rev` (
  `rev_id` int(100) NOT NULL,
  `rating` int(100) NOT NULL,
  `review` text NOT NULL,
  `c_image` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_rev`
--

INSERT INTO `customer_rev` (`rev_id`, `rating`, `review`, `c_image`) VALUES
(1, 5, 'dfsdfsd', 'fsff.jpg'),
(2, 4, '       cz', ''),
(3, 4, '       cz', ''),
(4, 4, '       cz', NULL),
(5, 4, '       cz', NULL),
(6, 4, '       cz', NULL),
(7, 4, '       cz', NULL),
(8, 4, '       cz', NULL),
(9, 1, 'This is the  worse product ever', NULL),
(10, 1, 'This is the  worse product ever', NULL),
(11, 3, '       ', NULL),
(12, 3, '       ', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE `message` (
  `id` int(11) NOT NULL,
  `message` text NOT NULL,
  `added_on` datetime NOT NULL,
  `type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`id`, `message`, `added_on`, `type`) VALUES
(1, 'Hi', '2020-04-22 12:41:04', 'user'),
(2, 'Hello, how are you.', '2020-04-22 12:41:05', 'bot'),
(3, 'what is your name', '2020-04-22 12:41:22', 'user'),
(4, 'My name is Saiful Bot', '2020-04-22 12:41:22', 'bot'),
(5, 'Where are your from', '2020-04-22 12:41:30', 'user'),
(6, 'I m from Bangladesh', '2020-04-22 12:41:30', 'bot'),
(7, 'Go to hell', '2020-04-22 12:41:41', 'user'),
(8, 'Sorry not be able to understand you', '2020-04-22 12:41:41', 'bot'),
(9, 'bye', '2020-04-22 12:41:46', 'user'),
(10, 'Sad to see you are going. Have a nice day', '2020-04-22 12:41:46', 'bot'),
(11, 'hey', '2020-10-26 03:18:27', 'user'),
(12, 'Sorry not be able to understand you', '2020-10-26 03:18:27', 'bot'),
(13, 'hi', '2020-10-26 03:18:32', 'user'),
(14, 'Hello, how are you.', '2020-10-26 03:18:32', 'bot'),
(15, 'hi', '2020-10-26 04:14:24', 'user'),
(16, 'Hello, how are you.', '2020-10-26 04:14:24', 'bot'),
(17, 'who is the CEO of this shop?', '2020-10-26 04:22:10', 'user'),
(18, 'Mr. Saiful Islma is the CEO.', '2020-10-26 04:22:10', 'bot'),
(19, 'hi', '2020-10-31 04:43:40', 'user'),
(20, 'Hello, how are you.', '2020-10-31 04:43:40', 'bot'),
(21, 'who is the CEO of this online shop?', '2020-11-07 10:45:14', 'user'),
(22, 'Sorry not be able to understand you', '2020-11-07 10:45:14', 'bot'),
(23, 'hi', '2020-11-07 10:45:25', 'user'),
(24, 'Hello, how are you.', '2020-11-07 10:45:25', 'bot'),
(25, 'how are you?', '2021-05-02 04:27:33', 'user'),
(26, 'Sorry not be able to understand you', '2021-05-02 04:27:33', 'bot'),
(27, 'who is the ower of this shop?', '2021-05-02 04:27:54', 'user'),
(28, 'Sorry not be able to understand you', '2021-05-02 04:27:54', 'bot'),
(29, 'who is the CEO of this shop?', '2021-05-02 04:28:11', 'user'),
(30, 'Mr. Saiful Islma is the CEO.', '2021-05-02 04:28:11', 'bot');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `payment_id` int(100) NOT NULL,
  `invoice_id` int(100) NOT NULL,
  `amount` int(100) NOT NULL,
  `payment_mode` text NOT NULL,
  `ref_no` int(100) NOT NULL,
  `payment_date` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payment_id`, `invoice_id`, `amount`, `payment_mode`, `ref_no`, `payment_date`) VALUES
(1, 454646, 1000, '', 3121646, '46546'),
(2, 0, 1000, 'Bkash', 3121, '2020-09-27'),
(3, 1116513213, 20000, 'Bank transfer', 55467423, '2020-05-04'),
(4, 1116513213, 20000, 'Bank transfer', 55467423, '2020-09-21'),
(5, 1116513213, 1000, 'Bkash', 3121646, '2020-09-23'),
(6, 0, 20000, 'Bkash', 55467423, '2020-09-23'),
(7, 1116513213, 150000, 'Paypal', 55467423, '2020-08-30'),
(8, 1116513213, 20000, 'Bkash', 55467423, '2020-09-22'),
(9, 1116513213, 20000, 'Bank transfer', 55467423, '2020-09-24'),
(10, 1116513213, 20000, 'Bkash', 55467423, '2020-09-23'),
(11, 1116513213, 1000, 'Paypal', 3121646, '2020-10-17'),
(12, 1116513213, 1000, 'Bank transfer', 3121646, '2020-10-28'),
(13, 1116513213, 150000, 'Bank transfer', 3121646, '2020-10-11'),
(14, 1116513213, 1000, 'Bkash', 3121646, '2020-10-22'),
(15, 1116513213, 150000, 'Bank transfer', 55467423, '2020-10-29'),
(16, 1116513213, 1000, 'Bank transfer', 3121646, '2020-11-24'),
(17, 1116513213, 20000, 'Bank transfer', 3121646, '2020-11-25'),
(18, 1116513213, 20000, 'Bank transfer', 55467423, '2020-11-30'),
(19, 1116513213, 150000, 'Bank transfer', 55467423, '2021-05-26');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `product_id` int(10) NOT NULL,
  `p_cat_id` int(10) NOT NULL,
  `cat_id` int(10) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `product_title` text NOT NULL,
  `product_img1` text NOT NULL,
  `product_img2` text NOT NULL,
  `product_img3` text NOT NULL,
  `product_price` int(10) NOT NULL,
  `product_desc` text NOT NULL,
  `product_keywords` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`product_id`, `p_cat_id`, `cat_id`, `date`, `product_title`, `product_img1`, `product_img2`, `product_img3`, `product_price`, `product_desc`, `product_keywords`) VALUES
(1, 2, 4, '2020-09-24 20:24:58', 'Google Home', 'grant-ritchie-n_wXNttWVGs-unsplash.jpg', 'grant-ritchie-n_wXNttWVGs-unsplash.jpg', 'grant-ritchie-n_wXNttWVGs-unsplash.jpg', 1000, '<p>demo.......................................</p>', 'q3xl2k32sd3323sd'),
(2, 2, 4, '2020-09-24 20:39:52', 'Camera', 'daniel-korpai-GFrn9Wxqfjo-unsplash.jpg', 'jeroen-den-otter-iKmm0okt6Q4-unsplash.jpg', 'leon-seibert-EOw_TbrWW_c-unsplash.jpg', 20000, '<p>It is really a good product for those who want to capture the best picture</p>', 'q3xl-2k32-sd33-23sd'),
(3, 3, 1, '2020-09-28 18:45:55', 'NIKE shoes', 'paul.png', 'paul.png', 'paul.png', 1300, '<p>nice</p>', 'q3xl-2k32-sd33-23sd'),
(4, 1, 1, '2020-09-28 18:49:48', 'Jacket', 'ana-maria-nichita-hp7Uj0EO__g-unsplash.jpg', 'ana-maria-nichita-hp7Uj0EO__g-unsplash.jpg', 'ana-maria-nichita-hp7Uj0EO__g-unsplash.jpg', 3500, '<p>nice</p>', 'q3xl2k32sd3323sd'),
(5, 2, 4, '2020-09-28 18:51:02', 'laptop', 'markus-spiske-s7nlaF3kefg-unsplash.jpg', 'markus-spiske-s7nlaF3kefg-unsplash.jpg', 'markus-spiske-s7nlaF3kefg-unsplash.jpg', 150000, '<p>nice</p>', 'dfsfdf sdfhf sdffkj sdfhj'),
(6, 2, 1, '2020-10-25 09:25:00', 'GUITAR', 'bass-guitar.jpg', 'bass-guitar.jpg', 'bass-guitar.jpg', 2500, 'THIS IS THE BEST GUITAR EVER', 'q3xl-2k32-sd33-23sd');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `p_cat_id` int(10) NOT NULL,
  `p_cat_title` text NOT NULL,
  `p_cat_desc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`p_cat_id`, `p_cat_title`, `p_cat_desc`) VALUES
(1, 'JACKETS', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(2, 'ACCESSORIES', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(3, 'SHOES', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(4, 'COATS', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book'),
(5, 'T-SHIRTS', 'Lorem ipsum, or lipsum as it is sometimes known, is dummy text used in laying out print, graphic or web designs. The passage is attributed to an unknown typesetter in the 15th century who is thought to have scrambled parts of Cicero\'s De Finibus Bonorum et Malorum for use in a type specimen book');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` int(11) NOT NULL,
  `page_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `rating` tinyint(1) NOT NULL,
  `submit_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `page_id`, `name`, `content`, `rating`, `submit_date`) VALUES
(1, 1, 'David Deacon', 'I use this website daily, the amount of content is brilliant.', 5, '2020-01-09 20:43:02'),
(2, 1, 'John Doe', 'Great website, great content, and great support!', 4, '2020-01-09 21:00:41'),
(3, 1, 'Robert Billings', 'Website needs more content, good website but content is lacking.', 3, '2020-01-09 21:10:16'),
(4, 1, 'Daniel Callaghan', 'Great!', 5, '2020-01-09 23:51:05'),
(5, 1, 'Bobby', 'Not much content.', 2, '2020-01-14 21:54:24'),
(6, 1, 'Joshua Kennedy', 'Fantasic website, has everything I need to know.', 5, '2020-01-16 17:34:27'),
(7, 1, 'Johannes Hansen', 'Really like this website, helps me out a lot!', 5, '2020-01-16 17:35:12'),
(8, 1, 'Wit Kwiatkowski', 'Please provide more quality content.', 5, '2020-01-16 17:36:03'),
(9, 1, 'Óli Þórðarson', 'Thanks', 5, '2020-01-16 17:36:34'),
(10, 1, 'Jaroslava Beránková', '', 5, '2020-01-16 17:37:48'),
(11, 1, 'Naomi Holt', 'Appreciate the amount of content you guys do.', 5, '2020-01-16 17:39:17'),
(12, 1, 'Isobel Whitehead', 'Thank you for providing a website that helps us out a lot!', 5, '2020-01-16 17:40:28'),
(13, 1, 'Warren Mills', 'Everything is awesome!', 5, '2020-01-16 19:34:08'),
(14, 1, 'Larry Johnson', 'Brilliant, thank you for providing quality content!', 5, '2020-01-29 18:40:36');

-- --------------------------------------------------------

--
-- Table structure for table `shipping_address`
--

CREATE TABLE `shipping_address` (
  `cust_id` int(11) NOT NULL,
  `customer_name` text NOT NULL,
  `shipping_add` text NOT NULL,
  `region` varchar(255) NOT NULL,
  `contact_number` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shipping_address`
--

INSERT INTO `shipping_address` (`cust_id`, `customer_name`, `shipping_add`, `region`, `contact_number`) VALUES
(0, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(1, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(15, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(17, 'latu bhai', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(18, 'Md. Saiful Islam Roni', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(19, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109'),
(20, 'Md. Saiful Islam', 'Dhupkhola math , Gendaria , Dhaka.\r\nJagannath University, Dhaka', 'Dhaka', '01758284109');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) NOT NULL,
  `slider_name` varchar(255) NOT NULL,
  `slider_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `slider_name`, `slider_image`) VALUES
(1, 'slider number1', 'b1.jpg'),
(2, 'slider number2', 'b2.jpg'),
(3, 'slider number3', 'b3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `billing_address`
--
ALTER TABLE `billing_address`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `customer_order`
--
ALTER TABLE `customer_order`
  ADD PRIMARY KEY (`order_id`);

--
-- Indexes for table `customer_rev`
--
ALTER TABLE `customer_rev`
  ADD PRIMARY KEY (`rev_id`);

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`p_cat_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipping_address`
--
ALTER TABLE `shipping_address`
  ADD PRIMARY KEY (`cust_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `admin_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `cat_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chatbot_hints`
--
ALTER TABLE `chatbot_hints`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `customer_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer_order`
--
ALTER TABLE `customer_order`
  MODIFY `order_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `customer_rev`
--
ALTER TABLE `customer_rev`
  MODIFY `rev_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `payment_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `product_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `p_cat_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
