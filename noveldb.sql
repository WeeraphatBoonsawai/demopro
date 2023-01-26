-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 26, 2023 at 08:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `noveldb`
--

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `category_id` int(3) UNSIGNED ZEROFILL NOT NULL,
  `category_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`category_id`, `category_name`) VALUES
(001, 'โรแมนติก'),
(002, 'สืบสวน / นักสืบ'),
(003, 'แฟนตาซี'),
(004, 'สงคราม'),
(005, 'ชีวิตประจำวัน'),
(006, 'ตลก');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL,
  `pro_name` varchar(30) NOT NULL,
  `volume` int(3) NOT NULL,
  `detail` text NOT NULL,
  `category_id` int(3) NOT NULL,
  `Writer` varchar(30) NOT NULL,
  `price` float NOT NULL,
  `amount` int(11) NOT NULL,
  `image` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`pro_id`, `pro_name`, `volume`, `detail`, `category_id`, `Writer`, `price`, `amount`, `image`) VALUES
(000001, 'นักสืบตายแล้ว', 1, 'เมื่อ 4 ปีก่อน ณ ระดับความสูงหนึ่งหมื่นเมตรเหนือพื้นดิน คิมิสึกะ คิมิฮิโกะ ถูกเลือกให้เป็นผู้ช่วยของนักสืบผู้งามประหนึ่งเทพธิดานามเซียสต้า  บนเครื่องบินที่กำลังถูกจี้ นับจากวันนั้น ทั้งสองหัวก็จมท้ายผจญภัยกันสารพันแบบ ตามสืบปริศนา ไขคดีต่างๆทั่วโลก จนกระทั่งความตายได้พรากทั้งสองจากกัน  คิมิฮิโกะ ซึ่งถูกทิ้งให้เหลืออยู่เพียงลำพังจึงกลับเข้าสู่ความเรื่อยเฉื่อยที่เรียกว่ากิจวัตรประจำวัน กับชีวิตนักเรียนมัธยมปลายธรรมดาเฉกเช่นคนทั่วไป  แต่ทว่าก็ได้มีผู้ว่าจ้างคนหนึ่งมาขอให้ คิมิฮิโกะ ช่วยไขคดีให้ และนั่นคือจุดเริ่มต้นของเรื่องราวที่เกี่ยวพันทั้งอดีต ปัจจุบัน และอนาคต', 2, 'Manabu Kurihara', 295, 22, 'p_63d2a87a086e7.jpg'),
(000002, 'Unnamed Memory', 1, '“ความปรารถนาของฉันคือให้เธอมาเป็นชายาและมีลูกกับฉัน” “เรื่องแบบนั้นใครจะไปยอมกันคะ!”  แม่มด—พวกเธอคือตัวตนนอกรีตซึ่งมีชีวิตยืนยาว และชักนำหายนะมาด้วยพลังมหาศาล ออสการ์ องค์ชายแห่งมหาอาณาจักรฟาลซัสอันรุ่งเรือง เคยถูกสาปในวัยเด็กให้ ‘ไม่สามารถมีทายาทได้’ เขาจึงเดินทางไปพบทีนาชา แม่มดผู้แข็งแกร่งที่สุดในโลก ซึ่งสามารถบันดาลความปรารถนาให้เป็นจริงได้ ออสการ์ข้ามผ่านบททดสอบของ ‘หอคอยแม่มด’ จนกระทั่งได้ทำพันธสัญญากับเธอ ทว่าสิ่งที่เขาปรารถนาคือการรับทีนาชามาเป็นชายาของตน...', 3, 'Kuji', 345, 56, 'p_63d2a869744b1.jpg'),
(000003, '86-eighty-six', 1, 'สาธารณรัฐซันแมกโนเลียถูก ‘จักรวรรดิ’ ซึ่งเป็นดินแดนข้างเคียงส่งจักรกลรบไร้พลขับ ‘ลีเจี้ยน’ เข้ามารุกรานไม่เว้นแต่ละวัน สาธารณรัฐจึงคิดค้นอาวุธรูปแบบเดียวกันขึ้นเพื่อการตอบโต้ และในที่สุดก็สามารถขับไล่ภัยคุกคามสิ้นไปโดยไม่มีผู้ใดต้องสละชีพใช่?เพียงเปลือกนอก ความจริงแล้วหาใช่ปราศจากการหลั่งเลือดเนื้อ ‘เขต86ไร้ซึ่งตัวตน’ ตั้งอยู่นอก85เขตของสาธารณรัฐ ทุกวันคืน เหล่าหนุ่มสาวอันถูกตีตรา ‘เอทตี้ซิกซ์’ ได้เข้าต่อสู้ในฐานะ ‘จักรกลมีพลขับ’ ตลอดมา?เด็กหนุ่มนามว่าชิน ผู้นำเหล่าหนุ่มสาวเข้าสู่ดินแดนแห่งความตาย และเด็กสาวนามเรน่า ผู้เป็นแฮนด์เลอร์ - ผู้บังคับบัญชาการ ออกคำสั่งพวกเขาผ่านการสื่อสารพิเศษจากแนวหลังอันห่างไกล เรื่องราวของทั้งสอง...การต่อสู้ซึ่งเป็นโศกนาฏกรรมแสนทารุณและจากลานับนิรันดร์เริ่มต้นขึ้นแล้ว?! ผลงานชิ้นเอก เจ้าของรางวัลเกียรติยศ ‘รางวัลชนะเลิศ’ การประกวดเด็งเกคิโนเวลไพร์ซครั้งที่ 23 เดินหน้าเข้าประจัญบานอย่างสมศักดิ์ศรี!', 4, 'Asato', 300, 56, 'p_63d2a88c54cf4.jpg'),
(000004, '86-eighty-six', 2, 'สาธารณรัฐซันแมกโนเลียถูกจักรวรรดิเกียเดประเทศข้างเคียงส่งจักรกลไร้พลขับ', 4, 'Asato Asato', 300, 51, 'p_63d2b6b79e8c0.jpg'),
(000005, 'Unnamed Memory', 2, 'พวกเธอคือตัวตนนอกรีตซึ่งมีชีวิตยืนยาวและชักนำหายนะมาด้วยพลังมหาศาล ', 3, 'Asato Asato', 365, 99, 'p_63d2b7751622b.jpg'),
(000006, 'OVERLORD', 1, 'สาธารณรัฐซันแดนไร้ตัวตน’ นอก 85 เขตของสาธารณ', 3, 'Asato Asato', 275, 99, 'p_63d2bf1cab869.jpg'),
(000007, 'Shin no Nakama', 4, 'เรดรับมือการจู่โจมของนักปราชญ์อาเรสได้สำเร็จ   และใช้ชีวิตปกติอย่างมีความสุขกับรูตี้ น้องสาวสุดที่รัก รวมทั้งทีเซ่ เพื่อนสนิทของเธอ   เขาตัดสินใจจะมอบสุดยอดอัญมณีให้ริตซึ่งสาบานว่าจะรักกันชั่วชีวิตหลังจบการต่อสู้ ', 4, 'Zappon', 295, 99, 'p_63d2c08c65fc3.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `username`, `email`, `password`) VALUES
(1, 'Johnwick', 'sujj22@gmail.com', '29f648ca8f81e9a609777d679a6a627c'),
(2, 'JohnCena', 'Johncena@gmail.com', '29f648ca8f81e9a609777d679a6a627c'),
(3, 'โหน่งชะชะช่า', 'Nong@gmail.com', '29f648ca8f81e9a609777d679a6a627c'),
(4, 'เท่งเถิดเทิง', 'theg@gmail.com', '29f648ca8f81e9a609777d679a6a627c'),
(5, 'หม่ํา​จ๊กมก', 'mum@gmail.com', '29f648ca8f81e9a609777d679a6a627c');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `category_id` int(3) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `pro_id` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
