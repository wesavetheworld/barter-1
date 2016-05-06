-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 29, 2016 at 08:35 AM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goody`
--

-- --------------------------------------------------------

--
-- Table structure for table `admi`
--

CREATE TABLE `admi` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_pas` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`admin_id`, `admin_name`, `admin_pas`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(11) NOT NULL,
  `title` varchar(250) NOT NULL,
  `name` varchar(500) NOT NULL,
  `phone` decimal(33,0) NOT NULL,
  `state` varchar(500) NOT NULL,
  `zip` int(11) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `category` varchar(45) NOT NULL,
  `description` varchar(10000) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ads`
--

INSERT INTO `ads` (`id`, `title`, `name`, `phone`, `state`, `zip`, `address`, `category`, `description`, `path`) VALUES
(1, 'Interchange my samsung s galaxy 7', 'Samsung Glaxy s7', '3457286380', 'Punjab', 60000, 'city Multan, 6 no chongi , A1 boys hostel', 'mobiles', 'I want to change my samsung mobile. ', 'dp/GalaxyS7b.gif'),
(2, 'Change Huawei P9', 'Huawei P9', '345789855', 'California', 6000, 'Yew york, State band , york bar', 'mobiles', 'ook more premium and its hybrid card slot allows users to choose from either of external memory card or a second SIM slot. In terms of memory, the P9 smartphone comes with, 32GB; and for connectivity, the phone holds NFC module, Bluetooth radio and fully featured Wi-Fi module.', 'dp/P9b.gif'),
(3, 'Lenovo Vibe P1', 'Lenovo Vibe P1', '64578945', 'California', 98000, 'los angeles, Stock bar , street no 3', 'mobiles', 'Lenovo has come up with Vibe P1, Chinese technology embedded into a 189g, only 9.9mm thick smartphone with all the new features a handheld device can offer. Lenovo Vibe P1 runs Android 5.1 Lollipop out of the box and its top notch capabilities are further enhanced by a much faster Quad-Core processor clocked at 1.0 GHz and 2GB RAM. Lenovoâ€™s Vibe P1 smartphone is considered as a semi-phablet as it has 5.5 inch screen size with 1080 x 1920 Pixel resolution resulting in an outclass display based on 401 PPI. Lenovo Vibe P1â€™s battery capacity is talk of the town currently as it holds 5000 mAh of charge that is 1600 mAh more than the worldâ€™s first 4k phone by Sony. With a mighty 44 hour talktime,', 'dp/VibeP1b.gif'),
(4, 'Digital Cameras  With a new Digital Camera,', 'Digital Cameras', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'As the worldâ€™s most compact and lightweight full-featured DSLR*, the new EOS Rebel SL1 is small in size but enormous in performance. With a newly-designed Canon 18.0 Megapixel ', 'dp/8575B003.jpg'),
(5, 'canon Digital Cameras  With a new Digital Camera,', 'Digital Cameras', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'As the worldâ€™s most compact and lightweight full-featured DSLR*, the new EOS Rebel SL1 is small in size but enormous in performance. With a newly-designed Canon 18.0 Megapixel ', 'dp/canoncameraa.jpg'),
(6, 'Interchange Digital Cameras  With a new Digital Camera,', 'Digital Cameras', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'As the worldâ€™s most compact and lightweight full-featured DSLR*, the new EOS Rebel SL1 is small in size but enormous in performance. With a newly-designed Canon 18.0 Megapixel ', 'dp/cmeracano.jpg'),
(7, 'Interchange Digital Cameras  With a new Digital Camera,', 'Digital Cameras', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'As the worldâ€™s most compact and lightweight full-featured DSLR*, the new EOS Rebel SL1 is small in size but enormous in performance. With a newly-designed Canon 18.0 Megapixel ', 'dp/cameracanon.jpg'),
(8, 'Samsung 19" Black LED 720P HDTV - UN19F4000AFXZA', 'Tv', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'Experience sharp picture quality, even when you are watching fast-moving images like sports or action movies. Clear Motion Rate was developed to accurately measure how well an LCD or LED TV can depict fast-moving images.', 'dp/462x347_f4000_clear_motion_rate.jpg.w960.jpg'),
(9, 'Samsung 19" Black LED 720P HDTV - UN19F4000AFXZA', 'Tv', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'Experience sharp picture quality, even when you are watching fast-moving images like sports or action movies. Clear Motion Rate was developed to accurately measure how well an LCD or LED TV can depict fast-moving images.', 'dp/big_UN24H4000.jpg'),
(10, 'Samsung 19" Black LED 720P HDTV - UN19F4000AFXZA', 'Tv', '644879955', 'Virgin', 92555, 'street no 4 etc', 'electronics', 'Experience sharp picture quality, even when you are watching fast-moving images like sports or action movies. Clear Motion Rate was developed to accurately measure how well an LCD or LED TV can depict fast-moving images.', 'dp/Westonledtv.jpg'),
(11, 'INDESIT IWC71452 ECO Washing Machine - White', 'Washing matchine', '3654875555', 'california', 4111, 'bar nowstock over', 'electronics', 'We deliver 7am to 7pm, 7 days a week, even at weekends. Your options include:\r\n\r\nFREE next day delivery when you order online before 9pm.\r\nFREE delivery on another day of your choice.\r\nDelivery in your preferred 4 hour time slot (next day or on the day of your choice) for Â£19.99.\r\n\r\nIf you tell us your mobile number when you order weâ€™ll text you on delivery day or the night before to let you know what time weâ€™ll be at your address. Or you can use our Knowhow Track It service.\r\n\r\nWeekend and next day delivery is available in most areas, subject to availability.', 'dp/wahsingmatchinnn.jpg'),
(12, 'New Designer Sofa and sofa cum bed L shaped with storge.cards accepted', 'Furniture', '9875555555', 'Philpine', 60555, 'Canbre', 'furniture', 'new designer sofas and sofa cum bed , branded upholstry and color and designs options available. with gu a ra ntee . Credit cards payments are accepted .', 'dp/sofaabig.jpg'),
(13, 'Pigeon', 'pigeon', '458885555', 'multan', 6000, 'multan, book center', 'pets', 'Batery 35Waly Pathia Pathy For Sale 2500 py par', 'dp/peagion.jpg'),
(14, 'One adad jeeb good condition', 'jeep', '455555', 'punjab', 50000, 'multan , banbosan road', 'kids', 'Jeep one adad good position', 'dp/119313461_1_1000x700_one-adad-jeeb-good-condition-jamrud_rev001.jpg'),
(15, 'Portion For Rent G-14/4 in only Rs18000.. 3BdRms,1TvLg,2bathRm', 'house', '1225555', 'Fort Pilo', 520, 'Olycid , fort  polito', 'houses', '1st Floor Portion New & Nice (25x50) For Rent in G-14/4 in Rs18000. Gas, Elec, Water boring available. 3 BeddRooms, 1TvLounge, 2 bathRooms, 1kitchen, 3 sides balconey, Car Parking Out Side with lot of space, Security Guard in Street to look after cars and house. House is New, Bright and sunny with Marble flooring, Washrooms with both Indian and English Seats. \r\nWalking distance to shops and to Kashmir Highway.\r\nCALL AFTER 5PM working days, Call ANYTIME WEEKEND(Sat & Sun), can leave message', 'dp/houseekkd.jpg'),
(16, 'lamborginy for sale', 'car', '666666488889', 'california', 44444, 'uae', 'car', 'lamborginy for exchange with new', 'dp/lamborginy.jpg'),
(17, 'c7 Bike for exchange', 'Bike', '55449877874', 'Canbra', 5000, 'Australia', 'bike', 'Bike for exchange', 'dp/bikeforsale.jpg'),
(18, 'C under graphic by yashwant', 'book', '546464', 'india', 66665, '', 'mobiles', '', 'dp/'),
(19, 'C under graphic by yashwant', 'book', '546464', 'india', 66665, 'Bhopal', 'books', 'i need to exchange my books', 'dp/cundergrpahid.jpg'),
(21, 'Bedsheets-beautiful', 'bedsheet', '65689898998989', 'kratchi', 665655, 'kratchi', 'fashion', 'free delivery all over pakistan\r\nGive look beautifull in yur bedroom', 'dp/bedsheetsss.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `b_id` int(11) NOT NULL,
  `email_b` varchar(500) NOT NULL,
  `name_b` varchar(500) NOT NULL,
  `address1` varchar(500) NOT NULL,
  `address2` varchar(500) NOT NULL,
  `cityb` varchar(500) NOT NULL,
  `stateb` varchar(500) NOT NULL,
  `countryb` varchar(500) NOT NULL,
  `zipcodeb` decimal(10,0) NOT NULL,
  `phone_no` decimal(10,0) NOT NULL,
  `shipping_address_line1` varchar(1000) NOT NULL,
  `shipping_address_line2` varchar(1000) NOT NULL,
  `shipping_city` varchar(1000) NOT NULL,
  `shipping_country` varchar(1000) NOT NULL,
  `shipping_zipcode` decimal(10,0) NOT NULL,
  `productwannaby` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`b_id`, `email_b`, `name_b`, `address1`, `address2`, `cityb`, `stateb`, `countryb`, `zipcodeb`, `phone_no`, `shipping_address_line1`, `shipping_address_line2`, `shipping_city`, `shipping_country`, `shipping_zipcode`, `productwannaby`) VALUES
(2, 'suof@.gmail.com', 'YUnife', 'fort abbas', 'fort abbas', 'fort abbas', 'punjab', 'Pakistan', '6464', '6464646464', 'Haronaabad', 'Haronaabad2', 'Haronaabad', 'PAK', '5', 'New Designer Sofa and sofa cum bed L shaped with storge.cards accepted');

-- --------------------------------------------------------

--
-- Table structure for table `signup`
--

CREATE TABLE `signup` (
  `id` int(10) UNSIGNED NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(20) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `signup`
--

INSERT INTO `signup` (`id`, `email`, `password`, `first_name`, `last_name`, `phone`) VALUES
(2, 'apple@gmail.com', '12345', 'apple', 'apple', 0),
(3, 'ao@gma.cok', 'skdjf', 'kjk', 'kjk', 0),
(4, 'aksd@dsfkj.com', 'kfjks', 'kjks1', 'kjkfj', 0),
(6, 'email@ksjd.erjkwejr', 'kfjk', 'jkdjfk', 'kjkds', 0),
(7, 'sdkfdsjk@kjskj.ksdfj', 'ksfjk', 'kjfsdkj', 'kjskj', 0),
(8, 'fjsdkjfkj@sdfjs.djf', 'kdkfj', 'kjsdkfj', 'kjksdjf', 34534),
(9, 'ap@gmail.com', 'dskfj', 'kjksjf', 'kskjfas446', 511),
(10, 'is@fgma.dks', 'ksk', 'kskfk', 'kksj', 54654),
(11, 'irjawais@gmail.com', '12345', 'Awais', 'Saleem', 2147483647),
(12, 'majid@gmail.com', '12345', 'Majid', 'Fayyaz', 2147483647),
(13, 'skjfkds@kfjdsfkj.kdfjsdk', 'lkwrjfd', 'flksdj', 'klsdfjkj', 12355),
(14, 'apdk@kljfdsks.sff', '12121223', 'kasdjk', 'kjk', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admi`
--
ALTER TABLE `admi`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`admin_id`);

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `signup`
--
ALTER TABLE `signup`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admi`
--
ALTER TABLE `admi`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `signup`
--
ALTER TABLE `signup`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
