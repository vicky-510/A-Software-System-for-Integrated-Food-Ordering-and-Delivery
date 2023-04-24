-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2023 at 02:45 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `foodies`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_home`
--

CREATE TABLE `admin_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin_home`
--

INSERT INTO `admin_home` (`id`, `full_name`, `username`, `pwd`) VALUES
(2, 'vicky', 'vicky510', '24bb329e3f4253b5788baea1ff097cb5'),
(3, 'Balagi p', 'balagi', '52e8d51dfc775b1b3dfc838871e8bb0d'),
(4, 'Vishnu', 'vishnuhero', '0be3a3607111ddedcc6fb518ea9b5e49');

-- --------------------------------------------------------

--
-- Table structure for table `admin_rest`
--

CREATE TABLE `admin_rest` (
  `id` int(10) UNSIGNED NOT NULL,
  `full_name` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `admin_rest`
--

INSERT INTO `admin_rest` (`id`, `full_name`, `username`, `pwd`) VALUES
(35, 'VigneshWaran M', 'Vicky_5100', '0d0b3b487d310e0fd048dcdfc7bc7b69'),
(36, 'Vishnu chidambaram', 'vishnu-hero', '9baea88a52d949f8f2680b0c1c922552'),
(43, 'Vicky', 'vicky510', '24bb329e3f4253b5788baea1ff097cb5'),
(46, 'balagi p', 'radi', '52e8d51dfc775b1b3dfc838871e8bb0d');

-- --------------------------------------------------------

--
-- Table structure for table `basket_home`
--

CREATE TABLE `basket_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `home_name` varchar(200) NOT NULL,
  `home_address` varchar(200) NOT NULL,
  `home_district` varchar(200) NOT NULL,
  `home_number` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `cust_name` varchar(150) NOT NULL,
  `cust_contact` varchar(20) NOT NULL,
  `cust_email` varchar(150) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `is_pet` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_taken` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `basket_home`
--

INSERT INTO `basket_home` (`id`, `food`, `home_name`, `home_address`, `home_district`, `home_number`, `price`, `qty`, `total`, `order_date`, `status`, `cust_name`, `cust_contact`, `cust_email`, `cust_address`, `is_pet`, `user_id`, `order_taken`) VALUES
(13, 'Spicy pasta ', 'Sundari K', '20/7, srinagar street,', ' koripalayam , Madurai-20', '8632147020', '200.00', 6, '1200.00', '2023-04-18 04:15:28', 'Cancelled', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 2, ''),
(14, 'Kiwi Juice', 'Eswari M', '8/3, vinayagar kovil street,', 'k.pudur,Madurai-7', '9876542130', '50.00', 5, '250.00', '2023-04-18 04:16:13', 'Delivered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 2, 'Rajesh(8765432100)'),
(15, 'Chicken cutlet (6Pcs)', 'Kiruthika', '10/13, viveka nanada street,', 'Near anna bus stand, Thiruchendoor', '8596743214', '299.00', 3, '897.00', '2023-04-18 04:16:33', 'Ordered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 2, ''),
(16, 'Cup cake (5 Pcs)', 'Krishnapriya K', '60/3, Achariya Nagar, ', 'Tnagar , chennai', '8594671302', '50.00', 8, '400.00', '2023-04-18 04:17:47', 'Ordered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 2, ''),
(17, 'Chapathi (4 Pcs)', 'Ramya gouda S', '10/5, valluvar street,', 'near dravid bus stop , Coimbatore-2', '6352419874', '60.00', 2, '120.00', '2023-04-18 04:18:21', 'On Delivery', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 2, 'Balagi(9876543213)'),
(18, 'Chicken cutlet (6Pcs)', 'Kiruthika', '10/13, viveka nanada street,', 'Near anna bus stand, Thiruchendoor', '8596743214', '299.00', 8, '2392.00', '2023-04-18 04:19:53', 'On Delivery', 'Balagi p', '9876543210', 'balagi23@gmail.com', 'Alanganallur, Madurai-9', 'No', 1, 'Rajesh(8765432100)'),
(19, 'Kiwi Juice', 'Eswari M', '8/3, vinayagar kovil street,', 'k.pudur,Madurai-7', '9876542130', '50.00', 10, '500.00', '2023-04-18 04:20:23', 'Ordered', 'Balagi p', '9876543210', 'balagi23@gmail.com', 'Alanganallur, Madurai-9', 'No', 1, ''),
(20, 'Chicken wings (5 Pcs)', 'Divya R', '20/6, viveka nanada street,', 'kelpaakam , chennai', '9685327415', '300.00', 8, '2400.00', '2023-04-19 08:21:01', 'Delivered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 2, 'Balagi(9876543213)');

-- --------------------------------------------------------

--
-- Table structure for table `basket_rest`
--

CREATE TABLE `basket_rest` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(200) NOT NULL,
  `rest_name` varchar(255) NOT NULL,
  `rest_address` varchar(255) NOT NULL,
  `rest_district` varchar(255) NOT NULL,
  `rest_number` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(20) NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `cust_contact` varchar(20) NOT NULL,
  `cust_email` varchar(200) NOT NULL,
  `cust_address` varchar(200) NOT NULL,
  `is_pet` varchar(20) NOT NULL,
  `user_id` int(11) NOT NULL,
  `order_taken` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `basket_rest`
--

INSERT INTO `basket_rest` (`id`, `food`, `rest_name`, `rest_address`, `rest_district`, `rest_number`, `price`, `qty`, `total`, `order_date`, `status`, `cust_name`, `cust_contact`, `cust_email`, `cust_address`, `is_pet`, `user_id`, `order_taken`) VALUES
(12, 'Briyani', 'DINDIGUL THALAPAAKATTY', '3/11 dindigul junction', 'Dindigul', '9516341789', '299.00', 9, '2691.00', '2023-04-17 08:50:19', 'Delivered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, 'Ramesh(9876543212)'),
(18, 'Venilla Ice Cream', 'ARUN ICE CREAM', 'South veli street,', 'Madurai', '7539518523', '30.00', 6, '120.00', '2023-04-18 06:37:39', 'Ordered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, ''),
(19, 'Shell Soup', 'ASIAN SEA FOODS', '3/40, Vivekananda street,', 'Rameeswaram', '7365412089', '399.00', 3, '1197.00', '2023-04-18 06:58:55', 'Ordered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, ''),
(20, 'Waffle with fruits', 'THAI STREET FOOD', '60, kodambakkam main road,', 'Chennai', '9638527410', '49.00', 4, '196.00', '2023-04-18 06:59:13', 'Ordered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, ''),
(21, 'Lemon soda', 'PALAMUTHIR SOLAI', '3/11 dindigul junction', 'Dindigul', '8520741963', '30.00', 9, '270.00', '2023-04-18 06:59:30', 'Delivered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, 'vicky(9876543211)'),
(22, 'Jumbo Burger', 'KFC', '345/1, Paris corner', 'Chennai', '9638520147', '299.00', 9, '2691.00', '2023-04-18 06:59:52', 'On Delivery', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, 'vicky(9876543211)'),
(23, 'Veg Briyani', 'AMMA MESS', '43/2, Near Thiruchendoor bus stand,', 'Thiruchendoor', '8529630258', '150.00', 2, '300.00', '2023-04-18 07:01:40', 'Delivered', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, 'vicky(9876543211)'),
(24, 'Briyani', 'DINDIGUL THALAPAAKATTY', '3/11 dindigul junction', 'Dindigul', '9516341789', '299.00', 6, '1794.00', '2023-04-18 07:13:05', 'Ordered', 'Balagi p', '9876543210', 'balagi23@gmail.com', 'Alanganallur, Madurai-9', 'No', 3, ''),
(25, 'Strawberry Juice', 'PALAMUTHIR SOLAI', '4/18, South veli street,', 'Madurai', '8520963074', '80.00', 20, '1600.00', '2023-04-18 07:13:38', 'Cancelled', 'Balagi p', '9876543210', 'balagi23@gmail.com', 'Alanganallur, Madurai-9', 'No', 3, ''),
(26, 'Donut with chocolate ', 'ANANDHA BAHAVAN', '9/12, sidco , Near Race course', 'Thiruchendoor', '8369741258', '99.00', 6, '594.00', '2023-04-19 08:17:05', 'On Delivery', 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 2, 'vicky(9876543211)');

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `pdf_name` varchar(250) NOT NULL,
  `posted_by` varchar(200) NOT NULL,
  `posted_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `title`, `pdf_name`, `posted_by`, `posted_on`) VALUES
(1, 'Top100 Indian Cooker book', 'Indian Slow Cooker Cookbook_ Top 100 Indian Slow Cooker Recipes from Restaurant Classics to Innovative Modern Indian Recipes All Easily Made At Home in a Slow Cooker ( PDFDrive ).pdf', 'M Gupta', '2023-04-16 02:27:13'),
(2, 'Top 25 South Indian Recipe', 'Top 25 south india food and snacks Recipies.pdf', 'Tamilan', '2023-04-16 02:49:46'),
(3, 'Tasty and Safe', 'instapdf.in-tasty-recipe-book-325.pdf', 'Tenesse state university', '2023-04-16 02:58:46'),
(4, 'Curry Recipie', '101908173.pdf', 'Knor', '2023-04-16 03:00:02'),
(5, 'Indian Street food and snacks', 'Super Indian Snack and Street food recipes ( PDFDrive ).pdf', 'Anitha patel', '2023-04-16 03:01:46'),
(6, 'Traditional Indian Thali', 'Traditional Indian Thali_ Maharashtiyan, Gujarati, Rajashthani, Punjabi, South Indian Thali [Vegetarian] ( PDFDrive ).pdf', 'Vishali Tripathi', '2023-04-16 03:09:30'),
(7, 'Plant Based Diet', 'Plant-Based Diet_ The Plant-Based Diet for Beginners_ What Is a Plant-Based Diet_ Plant-Based Diet vs. Vegan, Plant-Based Diet Benefits, and 50 Plant-Based Diet Recipes ( PDFDrive ).pdf', 'Olivia Banks', '2023-04-16 03:11:47'),
(8, 'Healthy South Indian Cooking', 'Healthy South Indian Cooking ( PDFDrive ).pdf', 'Alamelu vairavan, Patricia Marquardt', '2023-04-16 03:16:36');

-- --------------------------------------------------------

--
-- Table structure for table `category_home`
--

CREATE TABLE `category_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_home`
--

INSERT INTO `category_home` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(1, 'Veg food', 'Food_Category_85346.jpg', 'Yes', 'Yes'),
(2, 'Snacks', 'Food_Category_45657.jpg', 'Yes', 'Yes'),
(4, 'Juice', 'Food_Category_54795.jpg', 'Yes', 'Yes'),
(5, 'Fast food', 'Food_Category_95083.jpg', 'Yes', 'Yes'),
(6, 'Ice cream', 'Food_Category_27987.jpg', 'Yes', 'Yes'),
(7, 'Non veg food', 'Food_Category_63406.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `category_rest`
--

CREATE TABLE `category_rest` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `featured` varchar(10) NOT NULL,
  `active` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category_rest`
--

INSERT INTO `category_rest` (`id`, `title`, `image_name`, `featured`, `active`) VALUES
(27, 'Juice', 'Food_Category_60773.jpg', 'Yes', 'Yes'),
(28, 'Snacks', 'Food_Category_52604.jpg', 'Yes', 'Yes'),
(29, 'Veg food', 'Food_Category_48280.jpg', 'Yes', 'Yes'),
(30, 'Non veg food', 'Food_Category_81433.jpg', 'Yes', 'Yes'),
(31, 'Ice cream', 'Food_Category_27481.jpg', 'Yes', 'Yes'),
(32, 'Fast food', 'Food_Category_43280.jpg', 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `chef_hire`
--

CREATE TABLE `chef_hire` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(200) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `name` varchar(200) NOT NULL,
  `age` int(100) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `salary_work` varchar(255) NOT NULL,
  `salary_function` varchar(255) NOT NULL,
  `skills` varchar(255) NOT NULL,
  `experience` varchar(200) NOT NULL,
  `register_date` datetime NOT NULL,
  `contact` varchar(20) NOT NULL,
  `email` varchar(200) NOT NULL,
  `address` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `chef_hire`
--

INSERT INTO `chef_hire` (`id`, `username`, `pwd`, `name`, `age`, `image_name`, `salary_work`, `salary_function`, `skills`, `experience`, `register_date`, `contact`, `email`, `address`) VALUES
(7, 'damu123', '01f2c411c16164f4ac76c65a9d37c17e', 'Mr.damu', 60, 'Food_Category_89439.jpg', '60000', '8000', 'chinese, italian and many more', '15', '2023-04-13 02:39:13', '9635874165', 'vignesh510waran@gmail.com', 'shenoy nagar, chennai-20'),
(8, 'venkat123', '540893ccaaacbea53e865c309edf8e76', 'venkat bhat', 40, 'Food_Category_53304.jpg', '55000', '10000', 'Indian , French and many more', '10', '2023-04-13 08:12:53', '9630258741', 'balaji@gmail.com', 'Triplicane, chennai-8');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_home`
--

CREATE TABLE `delivery_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_boy_name` varchar(200) NOT NULL,
  `delivery_boy_number` varchar(20) NOT NULL,
  `delivery_boy_address` varchar(255) NOT NULL,
  `delivery_boy_district` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `delivery_home`
--

INSERT INTO `delivery_home` (`id`, `delivery_boy_name`, `delivery_boy_number`, `delivery_boy_address`, `delivery_boy_district`, `username`, `pwd`) VALUES
(1, 'balagi', '9876543213', '20 thiruvalluvar street, Tnagar, chennai-13', 'Chennai-13', 'balagi510', 'fc2ed646a17b1c2756509b79056586a8'),
(2, 'Rajesh', '8765432100', '20 thiruvalluvar street, Tnagar, chennai', 'Chennai-13', 'rajesh510', '47c9d09d2824a6103f731df27d2bf53c');

-- --------------------------------------------------------

--
-- Table structure for table `delivery_rest`
--

CREATE TABLE `delivery_rest` (
  `id` int(10) UNSIGNED NOT NULL,
  `delivery_boy_name` varchar(200) NOT NULL,
  `delivery_boy_number` varchar(20) NOT NULL,
  `delivery_boy_address` varchar(255) NOT NULL,
  `delivery_boy_district` varchar(255) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `delivery_rest`
--

INSERT INTO `delivery_rest` (`id`, `delivery_boy_name`, `delivery_boy_number`, `delivery_boy_address`, `delivery_boy_district`, `username`, `pwd`) VALUES
(1, 'vicky', '9876543211', '20 thiruvalluvar street, Thillai nagar, madurai', 'Madurai', 'vicky510', '24bb329e3f4253b5788baea1ff097cb5'),
(3, 'Ramesh', '9876543212', ' Tnagar, chennai', 'Chennai-13', 'ramesh510', 'bf09b051da696d6e7e8557cb05107ff5');

-- --------------------------------------------------------

--
-- Table structure for table `food_home`
--

CREATE TABLE `food_home` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `home_name` varchar(100) NOT NULL,
  `home_address` varchar(255) NOT NULL,
  `home_district` varchar(100) NOT NULL,
  `home_number` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(20) NOT NULL,
  `active` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food_home`
--

INSERT INTO `food_home` (`id`, `title`, `description`, `home_name`, `home_address`, `home_district`, `home_number`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(2, 'Kiwi Juice', 'Healthy and tasty juice made with fresh kiwi fruit.', 'Eswari M', '8/3, vinayagar kovil street,', 'k.pudur,Madurai-7', '9876542130', '50.00', 'Food-Name-64517.jpg', 4, 'Yes', 'Yes'),
(3, 'Chicken cutlet (6Pcs)', 'Cutlet made with fresh chicken meat and spicy masala.', 'Kiruthika', '10/13, viveka nanada street,', 'Near anna bus stand, Thiruchendoor', '8596743214', '299.00', 'Food-Name-23542.jpg', 7, 'Yes', 'Yes'),
(4, 'Spicy pasta ', 'Pasta mase with flour and masala, fresh vegtables and aroma ghee.', 'Sundari K', '20/7, srinagar street,', ' koripalayam , Madurai-20', '8632147020', '200.00', 'Food-Name-40277.jpg', 1, 'Yes', 'Yes'),
(5, 'Chapathi (4 Pcs)', 'Chapathi with kurumbu is a delicious combo and healthy.', 'Ramya gouda S', '10/5, valluvar street,', 'near dravid bus stop , Coimbatore-2', '6352419874', '60.00', 'Food-Name-71577.jpg', 1, 'Yes', 'Yes'),
(6, 'Curd rice with poriyal', 'curd rice is made from healthy curd.', 'Saranya R', '60/3, Achariya street, ', ' Koyambedu , chennai', '6258741025', '30.00', 'Food-Name-7501.jpg', 1, 'Yes', 'Yes'),
(7, 'Cup cake (5 Pcs)', 'Cup cake made with flour, sweet and strawberry.', 'Krishnapriya K', '60/3, Achariya Nagar, ', 'Tnagar , chennai', '8594671302', '50.00', 'Food-Name-83814.jpg', 2, 'Yes', 'Yes'),
(8, 'Ice cream cookie(3 Pcs)', 'Made with fresh ice cream and cookies.', 'Sundari R', '3/12, Shenoy nagar,', ' chennai-8', '7964523104', '36.00', 'Food-Name-5783.jpg', 6, 'Yes', 'Yes'),
(9, 'Fingerchips', 'Made with fresh potato', 'Anitha Z', '20/3, Anna salai, ', ' Tambaram, chennai', '6349852170', '199.00', 'Food-Name-46006.jpg', 5, 'Yes', 'Yes'),
(10, 'Chicken wings (5 Pcs)', 'Made with fresh meat', 'Divya R', '20/6, viveka nanada street,', 'kelpaakam , chennai', '9685327415', '300.00', 'Food-Name-37005.jpg', 7, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `food_rest`
--

CREATE TABLE `food_rest` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rest_name` varchar(100) NOT NULL,
  `rest_address` varchar(255) NOT NULL,
  `rest_district` varchar(100) NOT NULL,
  `rest_number` varchar(10) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `category_id` int(10) UNSIGNED NOT NULL,
  `featured` varchar(20) NOT NULL,
  `active` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `food_rest`
--

INSERT INTO `food_rest` (`id`, `title`, `description`, `rest_name`, `rest_address`, `rest_district`, `rest_number`, `price`, `image_name`, `category_id`, `featured`, `active`) VALUES
(15, 'Mutton Curry', 'Mutton curry is a spicy South Asian dish made with tender mutton cooked in an aromatic curry sauce.', 'MUNIYAANDI VILLAS', '20/1, Kalaiyaar kovil,', 'Sivagangai', '8765432190', '149.00', 'Food_Category_13441.jpg', 30, 'Yes', 'Yes'),
(16, 'Shell Soup', 'Shell soup is a soup made with shellfish such as clams, mussels, or shrimp.', 'ASIAN SEA FOODS', '3/40, Vivekananda street,', 'Rameeswaram', '7365412089', '399.00', 'Food-Name-61240.jpg', 30, 'Yes', 'Yes'),
(17, 'Waffle with fruits', 'A waffle is a breakfast pastry cooked in a waffle iron that gives that grid shape.', 'THAI STREET FOOD', '60, kodambakkam main road,', 'Chennai', '9638527410', '49.00', 'Food-Name-55310.jpg', 28, 'Yes', 'Yes'),
(19, 'Popcorn', 'Popcorn is a type of snack made from dried corn kernels.', 'KORA STREET FOOD', 'Shenoy Nagar', 'Chennai', '8754219865', '10.00', 'Food_Category_43223.jpg', 28, 'Yes', 'Yes'),
(22, 'Venilla Ice Cream', 'Venilla Ice cream with delicious chocolate syrup and fruits.', 'ARUN ICE CREAM', 'South veli street,', 'Madurai', '7539518523', '30.00', 'Food_Category_67882.jpg', 31, 'Yes', 'Yes'),
(23, 'Briyani', 'Most famous dindigul thalapaakatty briyani. very tasty food', 'DINDIGUL THALAPAAKATTY', '3/11 dindigul junction', 'Dindigul', '9516341789', '299.00', 'Food-Name-73474.jpg', 30, 'Yes', 'Yes'),
(24, 'Strawberry Juice', 'Healthy and delicious juice. It refresh your whole day.', 'PALAMUTHIR SOLAI', '4/18, South veli street,', 'Madurai', '8520963074', '80.00', 'Food-Name-97983.jpg', 27, 'Yes', 'Yes'),
(25, 'Lemon soda', 'It refresh your body and solve digestive problem.', 'PALAMUTHIR SOLAI', '3/11 dindigul junction', 'Dindigul', '8520741963', '30.00', 'Food-Name-49069.jpg', 27, 'Yes', 'Yes'),
(26, 'Panner masala', 'Healthy paneer made from milk. Healthy and tasty', 'AMMA MESS', '3/12, sidco , Near Race course', 'Madurai', '8520963741', '199.00', 'Food-Name-80152.jpg', 29, 'Yes', 'Yes'),
(27, 'Jumbo Burger', 'Burger made with bread and tamarind sauce and very tasty to eat at any age.', 'KFC', '345/1, Paris corner', 'Chennai', '9638520147', '299.00', 'Food-Name-10096.jpg', 32, 'Yes', 'Yes'),
(28, 'Sambar Rice ', 'Very tasty south-indian food made with cereal, rice, vegetables.', 'SRI SABARISH', '43/2, Near  coimbatore bus stand,', 'Coimbatore', '6384956251', '120.00', 'Food-Name-99757.jpg', 29, 'Yes', 'Yes'),
(29, 'Chicken Briyani', 'Spicy chicken briyani and it is in must try food list, while visiting south india', 'ANANDHA BAHAVAN', '10/2, Near  coimbatore bus stand,', 'Coimbatore', '8596321478', '250.00', 'Food-Name-6233.jpg', 30, 'Yes', 'Yes'),
(30, 'Pizza with extra cheese', 'Extra cheese pizza made with flour, vegetable and oil.', 'KFC', '345/1, Paris corner', 'Chennai', '8317496426', '199.00', 'Food-Name-35165.jpg', 32, 'Yes', 'Yes'),
(31, 'Donut with chocolate ', 'Donut made with fresh chocolate and sugar and flour', 'ANANDHA BAHAVAN', '9/12, sidco , Near Race course', 'Thiruchendoor', '8369741258', '99.00', 'Food-Name-38259.jpg', 28, 'Yes', 'Yes'),
(32, 'Veg Briyani', 'Made with vegetable, spicy masala with aroma ghee.', 'AMMA MESS', '43/2, Near Thiruchendoor bus stand,', 'Thiruchendoor', '8529630258', '150.00', 'Food-Name-81524.jpg', 29, 'Yes', 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `hire_details`
--

CREATE TABLE `hire_details` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hire_type` varchar(200) NOT NULL,
  `salary_work` varchar(200) NOT NULL,
  `salary_function` varchar(200) NOT NULL,
  `function_date` varchar(100) NOT NULL,
  `no_of_days_function` int(100) NOT NULL,
  `rest_name` varchar(200) NOT NULL,
  `chef_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `hire_details`
--

INSERT INTO `hire_details` (`id`, `name`, `email`, `phone`, `address`, `hire_type`, `salary_work`, `salary_function`, `function_date`, `no_of_days_function`, `rest_name`, `chef_id`) VALUES
(1, 'vicky', 'vignesh510510@gmail.com', '96857463', 'vinayagar kovil street, T nagar, chennai', 'function', 'NA', '9000', '28/4/2023', 1, 'NA', 7),
(2, 'saranya', 'kora234@gmail.com', '9683749852', 'vinayagar kovil street, T nagar, chennai', 'work', '30000', 'NA', 'NA', 0, 'Kora street food', 7),
(3, 'vishnu', 'vishnuhero2001@gmail.com', '8632574152', 'Triplicane, chennai-8', 'function', 'NA', '14000', '29/4/2023', 2, 'NA', 8),
(4, 'Anil kumble', 'Anil123@gmail.com', '9468753240', 'maangadu, chennai', 'work', '40000', 'NA', 'NA', 0, 'Anil Daaba', 8);

-- --------------------------------------------------------

--
-- Table structure for table `order_rest`
--

CREATE TABLE `order_rest` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(150) NOT NULL,
  `rest_name` varchar(200) NOT NULL,
  `rest_address` varchar(200) NOT NULL,
  `rest_district` varchar(200) NOT NULL,
  `rest_number` varchar(20) NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `order_date` datetime NOT NULL,
  `status` varchar(50) NOT NULL,
  `cust_name` varchar(150) NOT NULL,
  `cust_contact` varchar(20) NOT NULL,
  `cust_email` varchar(150) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `is_pet` varchar(50) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `order_rest`
--

INSERT INTO `order_rest` (`id`, `food`, `rest_name`, `rest_address`, `rest_district`, `rest_number`, `price`, `qty`, `total`, `order_date`, `status`, `cust_name`, `cust_contact`, `cust_email`, `cust_address`, `is_pet`, `user_id`) VALUES
(43, 'Briyani', 'DINDIGUL THALAPAAKATTY', '3/11 dindigul junction', 'Dindigul', '9516341789', '299.00', 5, '1495.00', '2023-04-07 04:22:42', 'Delivered', 'vignesh', '9632147850', 'jiwy@mailinator.com', '9/11 thiruvalluvar street, thirunelveli-8', 'Yes', 0),
(44, 'Venilla Ice Cream', 'ARUN ICE CREAM', 'South veli street,', 'Madurai', '7539518523', '30.00', 7, '210.00', '2023-04-07 04:27:03', 'On Delivery', 'Balagi', '9632147570', 'radi123@gmail.com', '23/1, ms dhoni street,\r\nAlanganallur-3', 'No', 0),
(45, 'Lemon soda', 'PALAMUTHIR SOLAI', '3/11 dindigul junction', 'Dindigul', '8520741963', '30.00', 4, '60.00', '2023-04-07 04:32:44', 'Cancelled', 'vishnu chidambaram', '6352849602', 'vishnuhero@gmail.com', '5/18, vivekananda street, pudhukottai-2', 'Yes', 0),
(46, 'Sambar Rice ', 'SRI SABARISH', '43/2, Near  coimbatore bus stand,', 'Coimbatore', '6384956251', '120.00', 5, '600.00', '2023-04-08 06:26:39', 'On Delivery', 'Gopinath', '8529637410', 'gopi250@gmail.com', '20/3, near coimbatore bus stand, coimbatore-5 ', 'No', 0),
(47, 'Pizza with extra cheese', 'KFC', '345/1, Paris corner', 'Chennai', '8317496426', '199.00', 3, '597.00', '2023-04-08 08:30:28', 'Delivered', 'Vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/qq gqnqpqthy servqi street, k.pudur, Madurai-7', 'Yes', 0),
(48, 'Briyani', 'DINDIGUL THALAPAAKATTY', '3/11 dindigul junction', 'Dindigul', '9516341789', '299.00', 20, '5980.00', '2023-04-09 03:40:09', 'Ordered', 'Maddy', '8529637412', 'Maddy@gmail.com', '30/12, thiruvalluvar street, Mandhaveli, chennai', 'No', 0),
(49, 'Waffle with fruits', 'THAI STREET FOOD', '60, kodambakkam main road,', 'Chennai', '9638527410', '49.00', 1, '49.00', '2023-04-11 07:33:59', 'Ordered', 'vicky', '8596853201', 'vicky@gmail.com', 'vivekananda street, kodambakkam.', 'no', 0),
(51, 'Mutton Curry', 'MUNIYAANDI VILLAS', '20/1, Kalaiyaar kovil,', 'Sivagangai', '8765432190', '149.00', 3, '447.00', '2023-04-17 08:33:00', 'Ordered', '<br />\r\n<b>Warning</b>:  Undefined variable $order_name in <b>C:xampphtdocsfoodiesFront-endfood-typesRestaurant\rest-cart.php</b> on line <b>216</b><br', '<br />\r\n<b>Warning</', '<br />\r\n<b>Warning</b>:  Undefined variable $order_email in <b>C:xampphtdocsfoodiesFront-endfood-typesRestaurant\rest-cart.php</b> on line <b>218</b><b', '<br />\r\n<b>Warning</b>:  Undefined variable $order_address in <b>C:xampphtdocsfoodiesFront-endfood-typesRestaurant\rest-cart.php</b> on line <b>219</b><br />\r\n', '<br />\r\n<b>Warning</b>:  Undefined variable $order', 0);

-- --------------------------------------------------------

--
-- Table structure for table `podcast`
--

CREATE TABLE `podcast` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `new_file_name` varchar(255) NOT NULL,
  `posted_by` varchar(200) NOT NULL,
  `posted_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `podcast`
--

INSERT INTO `podcast` (`id`, `title`, `new_file_name`, `posted_by`, `posted_on`) VALUES
(1, 'Paruppu Payasam', 'Paruppu_payasam.mp3', 'Madras Samayal', '2023-04-16 07:41:20'),
(2, 'Veg Fried Rice', 'venkatesh-veg fried rice .mp3', 'Venkatesh Bhat', '2023-04-16 09:10:55'),
(3, 'Amla Juice', 'Amla juice Nelikaijuice.mp3', 'Kavitha samayal', '2023-04-16 09:17:12'),
(4, 'Burger', 'Gordon Ramsay -Burger .mp3', 'Gordon Ramsay', '2023-04-16 09:17:50'),
(5, 'Mutton Briyani', 'Muton Biryani  Jabbar Bhai.mp3', 'Jabbar Bhai', '2023-04-16 09:18:27'),
(6, 'Lemon Mint Juice', 'Lemon mint juice summer special refreshing cool drink.mp3', 'Kavitha samayal', '2023-04-16 09:19:22'),
(7, 'white sauce pasta', 'White Sauce Pasta  Kanaks Kitchen.mp3', 'Kanaks Kitchen', '2023-04-16 09:23:22');

-- --------------------------------------------------------

--
-- Table structure for table `recipies_eng`
--

CREATE TABLE `recipies_eng` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rem_description` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `timing` varchar(200) NOT NULL,
  `serving` varchar(200) NOT NULL,
  `ingredients` varchar(255) NOT NULL,
  `posted_by` varchar(200) NOT NULL,
  `posted_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `recipies_eng`
--

INSERT INTO `recipies_eng` (`id`, `title`, `description`, `rem_description`, `image_name`, `type`, `timing`, `serving`, `ingredients`, `posted_by`, `posted_on`) VALUES
(4, 'Briyani', 'Biryani is a popular South Asian dish that involves layering spiced meat and rice in a pot and cooking it on low heat. To make biryani, marinate meat in yogurt, spices, and lemon juice. ', 'Parboil rice and sauté onions and whole spices. Add the marinated meat and chopped tomatoes, and cook until the meat is browned. Layer the rice on top and pour saffron milk over it.', 'Food-Blog-440.jpg', 'Tasty', '40 Mins', '2-3', 'Bone-in meat, basmati rice, yogurt, spices, lemon juice, onions, tomatoes, saffron, milk, fried onions, cashews, raisins, oil, green chilies, salt.', 'Suresh', '2023-04-15 08:38:54'),
(5, 'Prawn gravy', '                        To make prawn gravy, sauté finely chopped onions and garlic in oil. Add chopped tomatoes and cook until they are soft. Add spices such as cumin, coriander, and turmeric, and sauté for a minute. Add prawns and cook until they turn p', '                        Add water or coconut milk, and simmer until the gravy thickens to your desired consistency. Garnish with coriander leaves and serve hot with rice or roti.                    ', 'Food-Blog-5494.jpg', 'Healthy', '30 Mins', '2', 'Prawn, onion, ginger, garlic, tomato, green chili, spices, oil, water or coconut milk, coriander leaves.', 'Athulya', '2023-04-15 08:46:07'),
(6, 'Channa masala', '                        To prepare channa masala, soak chickpeas overnight and pressure cook until tender. In a pan, sauté onions, ginger, and garlic. Add tomato puree and spices like cumin, coriander, and garam masala. \r\n                    ', '                        Cook until the oil separates. Add the cooked chickpeas and simmer for a few minutes. Garnish with coriander leaves and serve hot with naan or rice.                    ', 'Food-Blog-2680.jpg', 'Healthy & Tasty', '20 Mins', '4-6', 'Chickpeas, tomatoes, onions, garlic, ginger, green chilies, spices, oil, lemon juice.', 'Ranjitha', '2023-04-15 09:05:06'),
(7, 'Fried rice', 'To make fried rice, cook rice and let it cool. In a pan, sauté garlic, onion, and vegetables. Push the veggies aside and scramble eggs. Add cooked rice to the pan, along with soy sauce and any desired seasonings.', '                       Stir-fry until heated through and serve hot.\r\n                    ', 'Food-Blog-9396.jpg', 'Tasty', '20 Mins', '2', 'The ingredients for fried rice are rice, eggs, vegetables (carrots, peas, corn), onions, garlic, soy sauce, oil, and salt.', 'Surendar', '2023-04-15 04:32:52'),
(8, 'Chicken noodles', 'Cook noodles as per package instructions, drain and set aside. In a wok, heat oil and sauté garlic and ginger until fragrant. Add diced chicken and stir-fry until browned. Add sliced vegetables such as bell peppers, carrots, and mushroom', 'and stir-fry until cooked. Season with soy sauce, oyster sauce, and chili flakes (optional).Add the cooked noodles and toss until well combined with the sauce. Garnish with sliced spring onions and serve hot.', 'Food-Blog-9352.jpg', 'Tasty', '15 Mins', '2-3', 'chicken breasts, egg noodles, vegetables like bell peppers and onions, garlic, soy sauce, and chicken broth.', 'Sowmiya', '2023-04-15 04:39:43'),
(9, 'Fig with berry salad', ' Cut fresh figs in halves and mix with berries in a bowl. Sprinkle with sugar, drizzle honey and balsamic vinegar, add salt and black pepper. \r\n                    ', '                        Toss gently and garnish with chopped mint and almonds. Serve chilled.                    ', 'Food-Blog-1705.jpeg', 'Healthy & Tasty', '15 Mins', '4-6', 'Fresh figs, mixed berries, sugar, honey, balsamic vinegar, salt, black pepper, almonds,  mint.', 'Laxmi', '2023-04-15 04:45:52');

-- --------------------------------------------------------

--
-- Table structure for table `recipies_tamil`
--

CREATE TABLE `recipies_tamil` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(200) NOT NULL,
  `description` varchar(255) NOT NULL,
  `rem_description` varchar(255) NOT NULL,
  `image_name` varchar(255) NOT NULL,
  `type` varchar(200) NOT NULL,
  `timing` varchar(200) NOT NULL,
  `serving` varchar(200) NOT NULL,
  `ingredients` varchar(200) NOT NULL,
  `posted_by` varchar(200) NOT NULL,
  `posted_on` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `recipies_tamil`
--

INSERT INTO `recipies_tamil` (`id`, `title`, `description`, `rem_description`, `image_name`, `type`, `timing`, `serving`, `ingredients`, `posted_by`, `posted_on`) VALUES
(1, 'தயிர் சாதம்', 'தயிர் சாதம் செய்ய, 1 கப் அரிசியை சமைத்து ஆறவிடவும். 1 கப் தயிர் உப்பு சேர்த்து கலக்கவும். எண்ணெயைச் சூடாக்கி, கடுகு, உளுத்தம்பருப்பு, சனா பருப்பு, கறிவேப்பிலை மற்றும் பச்சை மிளகாய் சேர்க்கவும்.\r\n                    ', ' தயிருடன் கலவையைச் சேர்க்கவும். அரிசி, கொத்தமல்லி இலைகள் மற்றும் காய்கறிகளை சேர்க்கவும். குளிர்ந்த அல்லது அறை வெப்பநிலையில் பரிமாறவும்.', 'Food-Blog-2006.jpg', 'ஆரோக்கியமான', '15 நிமிடம்', '2', 'தயிர், சமைத்த சாதம், தேவையான அளவு உப்பு.', 'விக்னேஷ்வரன்', '2023-04-15 08:43:44'),
(2, 'தோசை', '2 கப் அரிசி மற்றும் 1 கப் உளுத்தம் பருப்பை 6 மணி நேரம் ஊற வைக்கவும். தனித்தனியாக நைசாக அரைக்கவும். இரண்டையும் கலந்து, உப்பு சேர்த்து இரவு முழுவதும் புளிக்க வைக்கவும்.நான்-ஸ்டிக் பாத்திரத்தை சூடாக்கி, \r\n                     \r\n      ', 'மெல்லிய அடுக்கை உருவாக்க வட்ட இயக்கத்தில் மாவை பரப்பவும். எண்ணெய் அல்லது நெய் சேர்த்து, விளிம்புகள் பழுப்பு நிறமாக மாறும் வரை சமைக்கவும். புரட்டி சமைக்கவும். சட்னி அல்லது சாம்பாருடன் சூடாக பரிமாறவும்.                    ', 'Food-Blog-9819.jpg', 'ஆரோக்கியமான & சுவையான', '20  நிமிடம்', '4', 'அரிசி, உளுத்தம் பருப்பு, உப்பு, தண்ணீர், எண்ணெய் அல்லது நெய்.', ' பாலாஜி', '2023-04-15 09:13:43'),
(3, 'இட்லி', 'இட்லி தயார் செய்ய, 2 கப் இட்லி அரிசி மற்றும் 1 கப் உளுத்தம் பருப்பை தனித்தனியாக 6 மணி நேரம் ஊற வைக்கவும். உளுத்தம் பருப்பை மென்மையான மாவாக அரைத்து, பின்னர் அரிசியை கரகரப்பாக அரைக்கவும். அவற்றை உப்பு சேர்த்து கலந்து 8-10 மணி நேரம்      ', 'புளிக்க விடவும். இட்லி தட்டுகளில் எண்ணெய் தடவி மாவை ஊற்றவும். 10-12 நிமிடங்கள் அல்லது இட்லி சமைக்கும் வரை ஆவியில் வேக வைக்கவும். தேங்காய் சட்னி மற்றும் சாம்பாருடன் சூடாக பரிமாறவும்.\r\n                    ', 'Food-Blog-1651.jpg', 'சுவையான', '10  நிமிடம்', '4', ' இட்லி அரிசி, உளுத்தம் பருப்பு, உப்பு மற்றும் தண்ணீர்.', 'விஷ்ணு சிதம்பரம்', '2023-04-16 05:30:40'),
(4, 'முடக்கத்தான் கீரை தோசை', 'முடக்கத்தான் கீரை தோசை தயார் செய்ய, ஊறவைத்த அரிசி, உளுத்தம் பருப்பு மற்றும் முடக்கத்தான் கீரையை ஒரு வடைக்கு அரைக்கவும். உப்பு சேர்த்து இரவு முழுவதும் புளிக்க விடவும்.கடாயை சூடாக்கி, ஒரு கரண்டி மாவை ஊற்றி, பரப்பி, எண்ணெய் ஊற்றவும். ', 'இருபுறமும் பொன்னிறமாகும் வரை சமைக்கவும். சட்னி அல்லது சாம்பாருடன் சூடாக பரிமாறவும். முடக்கத்தான் கீரை அதன் அழற்சி எதிர்ப்பு பண்புகளுக்கு பயன்படுத்தப்படும் ஒரு மருத்துவ மூலிகையாகும்.               \r\n                    ', 'Food-Blog-4861.jpg', 'ஆரோக்கியமான & சுவையான', '10  நிமிடம்', '6', 'அரிசி, உளுத்தம் பருப்பு, முடக்கத்தான் கீரை, உப்பு, எண்ணெய் மற்றும் தண்ணீர். கூடுதல் சுவைக்காக இஞ்சி, பச்சை மிளகாய் மற்றும் சீரகம் ஆகியவை விருப்பப் பொருட்களில் அடங்கும்.', 'மு.ஈஸ்வரி ', '2023-04-16 05:43:42'),
(5, 'தினை பாயசம்', 'இது ஃபாக்ஸ்டெயில் தினையிலிருந்து தயாரிக்கப்படும் இனிப்பு. பண்டிகை காலங்களில் இது பிரபலமான உணவாகும். நெய், முந்திரி, பாதாம், திராட்சை ஆகியவை செய்முறையில் முக்கிய பொருட்கள் என்பதால், இது ஒரு அற்புதமான சுவை கொண்டது. ஒரு சிறந்த சர்க்கரையை     ', 'கட்டுப்படுத்தும் ஃபாக்ஸ்டெயில் தினையின் ஆரோக்கிய நன்மைகளைப் பார்த்தோம். ஃபாக்ஸ்டெயில் தினையை பால் மற்றும் வெல்லத்துடன் வறுத்து சமைக்கவும். பிறகு வறுத்த பருப்புகளைச் சேர்க்கவும்.. இது ஆரோக்கியமான இனிப்பு மற்றும் சுவையான சுவை கொண்டது.', 'Food-Blog-4851.jpg', 'ஆரோக்கியமான & சுவையான', '20  நிமிடம்', '2', 'ஃபாக்ஸ்டெயில் தினை (திண்ணை), வெல்லம், தேங்காய் பால், ஏலக்காய் தூள், நெய் மற்றும் நறுக்கிய பருப்புகள் (விரும்பினால்).', 'கிருத்திகா', '2023-04-16 05:51:31'),
(6, 'குதிரைவாலி அடை', 'குதிரைவாலி அடையைத் தயாரிக்க, 1 கப் தினையை 2 மணி நேரம் ஊற வைக்கவும். சிவப்பு மிளகாய், இஞ்சி, சீரகம் மற்றும் உப்பு சேர்த்து கரடுமுரடான மாவுடன் அரைக்கவும். நறுக்கிய வெங்காயம், கொத்தமல்லி தழை, தேங்காய் துருவல் சேர்க்கவும். \r\n                    ', 'ஒரு தவாவை சூடாக்கி, மாவை ஊற்றி சமமாக பரப்பவும். எண்ணெயை ஊற்றி இருபுறமும் பொன்னிறமாகும் வரை சமைக்கவும்.தேங்காய் சட்னி அல்லது தக்காளி சட்னியுடன் சூடாக பரிமாறவும். இந்த சுவையான மற்றும் ஆரோக்கியமான அடை காலை அல்லது இரவு உணவிற்கு ஏற்றது .      ', 'Food-Blog-9105.jpg', 'ஆரோக்கியமான', '20  நிமிடம்', '6', 'குதிரைவாலி (பார்னியார்ட் தினை), அரிசி, உளுத்தம் பருப்பு, சனா தால், சிவப்பு மிளகாய், இஞ்சி மற்றும் உப்பு.', 'மகா லக்ஷ்மி', '2023-04-16 06:00:04'),
(7, 'பானகம்', 'இது தமிழகத்தின் குளிர்பானம். இது ஒரு தெய்வீக சுவை கொண்டது, மேலும் இது ஒரு சரியான தாகத்தைத் தணிக்கும். இது மிகவும் ஆரோக்கியமானது மற்றும் அதிக இரும்புச்சத்து உள்ளது. இது உங்களுக்கு உடனடி ஆற்றலை அளிக்கிறது.            ', 'வெல்லம், எலுமிச்சை, ஏலக்காய்த் தூள் மற்றும் உலர் இஞ்சித் தூள் ஆகியவை பானகம் தயாரிப்பதற்கான பொருட்கள். பண்டிகை நாட்களில், கோவில்களில் பானகம் வழங்குகின்றனர்.   ', 'Food-Blog-8344.jpg', 'ஆரோக்கியமான', '10  நிமிடம்', '6', 'வெல்லம், எலுமிச்சை, ஏலக்காய்த் தூள் மற்றும் உலர் இஞ்சித் தூள் ', 'மு.ஈஸ்வரி ', '2023-04-16 06:05:27'),
(8, 'கம்பு கூழ்', 'இது முத்து தினையிலிருந்து (பஜ்ரா) செய்யப்பட்ட கஞ்சி. பஜ்ராவில் புற்றுநோயைப் பாதுகாக்கும் பண்புகள் உள்ளன. இது ஒரு டயட் உணவும் கூட. தமிழ்நாட்டின் கிராமங்களைச் சேர்ந்தவர்கள் விவசாய நிலங்களுக்குச் செல்வதற்கு முன், காலை உணவாகக் கம்புகூழ்       ', 'உண்டு. வயல்களில் கடினமாக உழைக்கும் ஆற்றலைத் தருகிறது. தினை மாவு, சின்ன வெங்காயம், பச்சை மிளகாய் மற்றும் கறிவேப்பிலை ஆகியவை பொருட்கள். மக்கள் அதை பச்சை மாம்பழங்களுடன் பரிமாறுகிறார்கள்.                \r\n                    ', 'Food-Blog-1164.jpg', 'ஆரோக்கியமான & சுவையான', '20  நிமிடம்', '4', 'தினை மாவு, சின்ன வெங்காயம், பச்சை மிளகாய் மற்றும் கறிவேப்பிலை ', 'யாழினி', '2023-04-16 06:10:49'),
(9, 'செட்டிநாடு குழி பணியாரம்', '                        இது காலை உணவு மற்றும் இரவு உணவு இரண்டிற்கும் ஏற்ற உணவாகும். அரிசி மற்றும் உளுத்தம் பருப்பு ஒரு கெட்டியான மாவுக்கு அரைக்கப்படுகிறது. பொடியாக நறுக்கிய வெங்காயம், கொத்தமல்லி தழை, கடுகு, கறிவேப்பிலை தாளித்து, குழை பணியாரம் தவாவில் \r\n  ', '                        ஊற்றி சிறிது நேரம் வதக்கவும். குழி பணியாரம் உருண்டைகள் அழகான அமைப்பு மற்றும் சொர்க்க சுவை கொண்டவை. குழி பணியாரம் பூண்டு மற்றும் ரெட் சில்லி சட்னியுடன் சரியான சுவையைத் தரும்.                    ', 'Food-Blog-7080.jpg', 'ஆரோக்கியமான', '40  நிமிடம்', '4', 'அரிசி மற்றும் உளுத்தம் பருப்பு, வெங்காயம், கொத்தமல்லி தழை, கடுகு, கறிவேப்பிலை.', 'சஞ்சய் குமார்', '2023-04-16 06:18:35');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(100) NOT NULL,
  `rest_name` varchar(100) NOT NULL,
  `table_count` int(11) NOT NULL,
  `time_date` text NOT NULL,
  `person_count` int(11) NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_number` varchar(10) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `title`, `rest_name`, `table_count`, `time_date`, `person_count`, `cust_name`, `cust_email`, `cust_number`, `status`) VALUES
(1, 'chicken briyani', 'DINDIGUL THALAPAAKATTY', 2, '2023-04-20T10:30', 6, 'Vigneshwaran M', 'vignesh510510@gmail.com', '8189950272', 'Rejected'),
(2, 'Mutton briyani', 'KFC', 4, '2023-04-20T14:37', 12, 'Gopinath', 'gopi250@gmail.com', '9517538520', 'Accepted'),
(3, 'Kebab', 'KORA STREET FOOD', 5, '2023-04-25T12:36', 20, 'Maddy', 'Maddy@gmail.com', '7418529630', 'Accepted'),
(4, 'Strawberry, chocolate ice-cream ', 'ARUN ICE CREAM', 2, '2023-04-20T15:40', 8, 'balagi ', 'balagi@gmail.com', '8769543285', 'Accepted');

-- --------------------------------------------------------

--
-- Table structure for table `train_service`
--

CREATE TABLE `train_service` (
  `id` int(10) UNSIGNED NOT NULL,
  `food` varchar(200) NOT NULL,
  `qty` varchar(100) NOT NULL,
  `train_name` varchar(200) NOT NULL,
  `train_url` varchar(255) NOT NULL,
  `rest_name` varchar(200) NOT NULL,
  `rest_url` varchar(255) NOT NULL,
  `order_date` datetime NOT NULL,
  `cust_name` varchar(100) NOT NULL,
  `cust_email` varchar(200) NOT NULL,
  `cust_number` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL,
  `order_taken` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `train_service`
--

INSERT INTO `train_service` (`id`, `food`, `qty`, `train_name`, `train_url`, `rest_name`, `rest_url`, `order_date`, `cust_name`, `cust_email`, `cust_number`, `status`, `order_taken`) VALUES
(3, 'fish briyani', '5', 'Tejas', 'https://goo.gl/maps/5YPeFePjGFMvbR1F6', 'Madurai Patti Kadai', '    https://goo.gl/maps/rjBr3D1s8jWWXVvY7', '2023-04-11 08:32:00', 'vigneshwaran M', 'vignesh510510@gmail.com', '8189950272', 'Delivered', 'vicky(9876543211)'),
(4, 'Tandoori chicken, mutton briyani(each)', '4', 'Tejas Express', 'https://goo.gl/maps/5YPeFePjGFMvbR1F6', 'AMMAN HOTEL', 'https://goo.gl/maps/1GRTmKFnqfh6bjdJ8', '2023-04-11 08:35:51', 'Vishnu', 'vishnuhero2001@gmail.com', '9188950652', 'Cancelled', ''),
(5, 'Prawn shawarma', '10', 'Kollam Express', 'https://goo.gl/maps/BmpuiAD2nrsiq3i59', 'Hotel Anugraka', 'https://goo.gl/maps/1mciG5EmGkmoKHku6', '2023-04-11 09:48:48', 'Balagi P', 'Balagiradi@gmail.com', '96748530', 'On Delivery', 'Ramesh(9876543212)'),
(6, 'Ragi Malt, Orange Juice(each)', '3', 'Tejas', 'https://goo.gl/maps/JkmffEayRLXPseBc7', 'Cine suvai Restaurant', 'https://goo.gl/maps/24GCCx9SbyauFY2R9', '2023-04-19 04:34:56', 'vishnu', 'vishnu23@gmail.com', '8976543210', 'On Delivery', 'Ramesh(9876543212)');

-- --------------------------------------------------------

--
-- Table structure for table `user_home`
--

CREATE TABLE `user_home` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `cust_contact` varchar(20) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `is_pet` varchar(20) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_home`
--

INSERT INTO `user_home` (`user_id`, `cust_name`, `cust_contact`, `cust_email`, `cust_address`, `is_pet`, `username`, `pwd`) VALUES
(1, 'Balagi p', '9876543210', 'balagi23@gmail.com', 'Alanganallur, Madurai-9', 'No', 'balagi510', 'fc2ed646a17b1c2756509b79056586a8'),
(2, 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11 ganapathy servai street, k.pudur, madurai-7', 'Yes', 'vicky510', '24bb329e3f4253b5788baea1ff097cb5');

-- --------------------------------------------------------

--
-- Table structure for table `user_rest`
--

CREATE TABLE `user_rest` (
  `user_id` int(10) UNSIGNED NOT NULL,
  `cust_name` varchar(200) NOT NULL,
  `cust_contact` varchar(255) NOT NULL,
  `cust_email` varchar(255) NOT NULL,
  `cust_address` varchar(255) NOT NULL,
  `is_pet` varchar(200) NOT NULL,
  `username` varchar(200) NOT NULL,
  `pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user_rest`
--

INSERT INTO `user_rest` (`user_id`, `cust_name`, `cust_contact`, `cust_email`, `cust_address`, `is_pet`, `username`, `pwd`) VALUES
(2, 'vigneshwaran M', '8189950272', 'vignesh510510@gmail.com', '4/11, ganapathy servai street, k.pudur, Madurai-7', 'Yes', 'vicky510', '24bb329e3f4253b5788baea1ff097cb5'),
(3, 'Balagi p', '9876543210', 'balagi23@gmail.com', 'Alanganallur, Madurai-9', 'No', 'balagi510', 'fc2ed646a17b1c2756509b79056586a8');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_home`
--
ALTER TABLE `admin_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin_rest`
--
ALTER TABLE `admin_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket_home`
--
ALTER TABLE `basket_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `basket_rest`
--
ALTER TABLE `basket_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_home`
--
ALTER TABLE `category_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category_rest`
--
ALTER TABLE `category_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chef_hire`
--
ALTER TABLE `chef_hire`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_home`
--
ALTER TABLE `delivery_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `delivery_rest`
--
ALTER TABLE `delivery_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_home`
--
ALTER TABLE `food_home`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `food_rest`
--
ALTER TABLE `food_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `hire_details`
--
ALTER TABLE `hire_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_rest`
--
ALTER TABLE `order_rest`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `podcast`
--
ALTER TABLE `podcast`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipies_eng`
--
ALTER TABLE `recipies_eng`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recipies_tamil`
--
ALTER TABLE `recipies_tamil`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `train_service`
--
ALTER TABLE `train_service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_home`
--
ALTER TABLE `user_home`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `user_rest`
--
ALTER TABLE `user_rest`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_home`
--
ALTER TABLE `admin_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `admin_rest`
--
ALTER TABLE `admin_rest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=47;

--
-- AUTO_INCREMENT for table `basket_home`
--
ALTER TABLE `basket_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `basket_rest`
--
ALTER TABLE `basket_rest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `category_home`
--
ALTER TABLE `category_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `category_rest`
--
ALTER TABLE `category_rest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `chef_hire`
--
ALTER TABLE `chef_hire`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `delivery_home`
--
ALTER TABLE `delivery_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `delivery_rest`
--
ALTER TABLE `delivery_rest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `food_home`
--
ALTER TABLE `food_home`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `food_rest`
--
ALTER TABLE `food_rest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `hire_details`
--
ALTER TABLE `hire_details`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `order_rest`
--
ALTER TABLE `order_rest`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `podcast`
--
ALTER TABLE `podcast`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `recipies_eng`
--
ALTER TABLE `recipies_eng`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `recipies_tamil`
--
ALTER TABLE `recipies_tamil`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `reservation`
--
ALTER TABLE `reservation`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `train_service`
--
ALTER TABLE `train_service`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_home`
--
ALTER TABLE `user_home`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_rest`
--
ALTER TABLE `user_rest`
  MODIFY `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/* Database complete state */;

