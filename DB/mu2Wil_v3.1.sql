-- phpMyAdmin SQL Dump
-- version 4.9.7
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Mar 05, 2022 at 10:40 PM
-- Server version: 10.3.32-MariaDB
-- PHP Version: 7.4.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mu2Wil`
--

-- --------------------------------------------------------

--
-- Table structure for table `ADMINISTRATOR`
--

CREATE TABLE `ADMINISTRATOR` (
  `ID` decimal(10,0) NOT NULL,
  `StaffNumber` varchar(100) DEFAULT NULL,
  `UserID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ADMINISTRATOR`
--

INSERT INTO `ADMINISTRATOR` (`ID`, `StaffNumber`, `UserID`) VALUES
('1', '25735655', '1000000001'),
('2', '24158999', '1000000002'),
('3', '24918007', '1000000003'),
('4', '25063821', '1000000004'),
('5', '28881874', '1000000005'),
('6', '26629357', '1000000006'),
('7', '21006393', '1000000007'),
('8', '20842201', '1000000008'),
('9', '23762877', '1000000009'),
('10', '21333397', '1000000010'),
('11', '22192331', '1000000011'),
('12', '28641575', '1000000012'),
('13', '23014356', '1000000013'),
('14', '21221144', '1000000014'),
('15', '29008283', '1000000015');

-- --------------------------------------------------------

--
-- Table structure for table `APPLICANT`
--

CREATE TABLE `APPLICANT` (
  `ApplicantID` decimal(10,0) NOT NULL,
  `ApplyDate` date NOT NULL,
  `PreferLocation` varchar(100) DEFAULT NULL,
  `ApplyStatus` decimal(1,0) NOT NULL DEFAULT 0,
  `Attachment` text DEFAULT NULL,
  `JobID` decimal(10,0) NOT NULL,
  `UserID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `APPLICANT`
--

INSERT INTO `APPLICANT` (`ApplicantID`, `ApplyDate`, `PreferLocation`, `ApplyStatus`, `Attachment`, `JobID`, `UserID`) VALUES
('1000001', '2022-01-04', '', '2', 'http://dummyimage.com/205x240.jpg/cc0000/ffffff', '1000001', '1000000033'),
('1000002', '2022-02-10', '', '1', 'http://dummyimage.com/192x204.bmp/5fa2dd/ffffff', '1000007', '1000000052'),
('1000003', '2022-02-27', '', '0', 'http://dummyimage.com/159x135.png/5fa2dd/ffffff', '1000013', '1000000060'),
('1000004', '2022-02-24', '', '1', 'http://dummyimage.com/147x246.png/cc0000/ffffff', '1000009', '1000000046'),
('1000005', '2022-02-03', '', '0', 'http://dummyimage.com/189x160.bmp/cc0000/ffffff', '1000023', '1000000044'),
('1000006', '2022-01-18', '', '0', 'http://dummyimage.com/120x207.bmp/cc0000/ffffff', '1000022', '1000000046'),
('1000007', '2022-02-25', '', '2', 'http://dummyimage.com/193x216.png/dddddd/000000', '1000007', '1000000043'),
('1000008', '2022-01-03', '', '2', 'http://dummyimage.com/141x234.bmp/dddddd/000000', '1000017', '1000000034'),
('1000009', '2022-01-24', '', '0', 'http://dummyimage.com/114x179.bmp/ff4444/ffffff', '1000008', '1000000042'),
('1000010', '2022-02-16', '', '1', 'http://dummyimage.com/187x118.bmp/ff4444/ffffff', '1000030', '1000000044'),
('1000011', '2022-01-24', 'Naha, Japan', '0', 'http://dummyimage.com/115x131.jpg/cc0000/ffffff', '1000006', '1000000045'),
('1000012', '2022-01-29', '', '0', 'http://dummyimage.com/216x226.jpg/5fa2dd/ffffff', '1000001', '1000000055'),
('1000013', '2022-01-18', 'Chinatown, Singapore', '1', 'http://dummyimage.com/141x234.bmp/cc0000/ffffff', '1000030', '1000000053'),
('1000014', '2022-02-19', '', '1', 'http://dummyimage.com/103x189.bmp/dddddd/000000', '1000023', '1000000047'),
('1000015', '2022-01-04', 'Raffles Place, Singapore', '0', 'http://dummyimage.com/194x198.bmp/ff4444/ffffff', '1000014', '1000000044'),
('1000016', '2022-02-05', '', '0', 'http://dummyimage.com/150x213.bmp/ff4444/ffffff', '1000016', '1000000049'),
('1000017', '2022-02-27', 'Austin, United States', '1', 'http://dummyimage.com/200x194.png/cc0000/ffffff', '1000003', '1000000036'),
('1000018', '2022-01-27', 'Taiyuan, China', '1', 'http://dummyimage.com/212x191.bmp/cc0000/ffffff', '1000021', '1000000058'),
('1000019', '2022-01-12', '', '0', 'http://dummyimage.com/222x176.jpg/cc0000/ffffff', '1000021', '1000000046'),
('1000020', '2022-01-03', 'Indianapolis, United States', '0', 'http://dummyimage.com/167x132.png/dddddd/000000', '1000023', '1000000053'),
('1000021', '2022-02-27', '', '2', 'http://dummyimage.com/205x159.bmp/5fa2dd/ffffff', '1000028', '1000000032'),
('1000022', '2022-01-20', '', '1', 'http://dummyimage.com/161x159.png/cc0000/ffffff', '1000018', '1000000033'),
('1000023', '2022-01-20', 'Tandag, Philippines', '2', 'http://dummyimage.com/121x205.png/cc0000/ffffff', '1000030', '1000000038'),
('1000024', '2022-01-31', '', '1', 'http://dummyimage.com/237x127.jpg/dddddd/000000', '1000017', '1000000035'),
('1000025', '2022-02-01', '', '0', 'http://dummyimage.com/109x217.jpg/cc0000/ffffff', '1000013', '1000000031'),
('1000026', '2022-01-27', '', '2', 'http://dummyimage.com/210x164.bmp/ff4444/ffffff', '1000018', '1000000034'),
('1000027', '2022-01-07', '', '0', 'http://dummyimage.com/117x165.png/5fa2dd/ffffff', '1000030', '1000000040'),
('1000028', '2022-02-15', '', '0', 'http://dummyimage.com/195x191.png/ff4444/ffffff', '1000025', '1000000035'),
('1000029', '2022-02-24', '', '1', 'http://dummyimage.com/106x227.png/ff4444/ffffff', '1000019', '1000000037'),
('1000030', '2022-01-12', '', '2', 'http://dummyimage.com/192x137.png/dddddd/000000', '1000027', '1000000059'),
('1000031', '2022-02-02', '', '2', 'http://dummyimage.com/170x208.jpg/cc0000/ffffff', '1000003', '1000000060'),
('1000032', '2022-01-10', '', '0', 'http://dummyimage.com/153x210.png/cc0000/ffffff', '1000016', '1000000055'),
('1000033', '2022-02-17', '', '1', 'http://dummyimage.com/236x135.jpg/5fa2dd/ffffff', '1000018', '1000000053'),
('1000034', '2022-02-13', 'Yamagata, Japan', '1', 'http://dummyimage.com/230x165.png/cc0000/ffffff', '1000005', '1000000050'),
('1000035', '2022-01-30', '', '1', 'http://dummyimage.com/202x130.png/5fa2dd/ffffff', '1000019', '1000000038'),
('1000036', '2022-02-05', '', '2', 'http://dummyimage.com/250x201.jpg/cc0000/ffffff', '1000011', '1000000048'),
('1000037', '2022-02-09', 'Surat Thani, Thailand', '2', 'http://dummyimage.com/189x192.bmp/5fa2dd/ffffff', '1000004', '1000000040'),
('1000038', '2022-01-16', '', '2', 'http://dummyimage.com/242x208.jpg/5fa2dd/ffffff', '1000023', '1000000033'),
('1000039', '2022-01-20', '', '2', 'http://dummyimage.com/174x236.png/cc0000/ffffff', '1000023', '1000000041'),
('1000040', '2022-01-30', '', '1', 'http://dummyimage.com/122x173.jpg/5fa2dd/ffffff', '1000015', '1000000044'),
('1000041', '2022-02-23', 'Lagawe, Philippines', '0', 'http://dummyimage.com/143x238.bmp/ff4444/ffffff', '1000003', '1000000054'),
('1000042', '2022-01-12', '', '2', 'http://dummyimage.com/166x227.png/cc0000/ffffff', '1000006', '1000000034'),
('1000043', '2022-02-17', '', '2', 'http://dummyimage.com/131x235.png/cc0000/ffffff', '1000018', '1000000057'),
('1000044', '2022-01-20', 'Tsu, Japan', '1', 'http://dummyimage.com/106x232.jpg/5fa2dd/ffffff', '1000003', '1000000050'),
('1000045', '2022-01-14', '', '0', 'http://dummyimage.com/176x159.jpg/5fa2dd/ffffff', '1000015', '1000000054'),
('1000046', '2022-01-08', '', '1', 'http://dummyimage.com/178x115.png/5fa2dd/ffffff', '1000020', '1000000047'),
('1000047', '2022-02-05', 'Puerto Princesa, Philippines', '0', 'http://dummyimage.com/131x179.bmp/ff4444/ffffff', '1000017', '1000000060'),
('1000048', '2022-02-28', '', '1', 'http://dummyimage.com/102x202.bmp/5fa2dd/ffffff', '1000017', '1000000048'),
('1000049', '2022-02-03', '', '0', 'http://dummyimage.com/217x246.bmp/cc0000/ffffff', '1000012', '1000000054'),
('1000050', '2022-02-13', '', '0', 'http://dummyimage.com/205x183.bmp/5fa2dd/ffffff', '1000020', '1000000036'),
('1000051', '2022-02-03', '', '0', 'http://dummyimage.com/230x192.bmp/cc0000/ffffff', '1000015', '1000000038'),
('1000052', '2022-01-23', '', '2', 'http://dummyimage.com/180x163.png/ff4444/ffffff', '1000029', '1000000035'),
('1000053', '2022-01-11', '', '1', 'http://dummyimage.com/230x225.bmp/ff4444/ffffff', '1000030', '1000000050'),
('1000054', '2022-02-12', '', '2', 'http://dummyimage.com/161x161.png/cc0000/ffffff', '1000028', '1000000060'),
('1000055', '2022-01-17', '', '0', 'http://dummyimage.com/245x113.png/cc0000/ffffff', '1000001', '1000000035'),
('1000056', '2022-02-07', '', '1', 'http://dummyimage.com/205x191.jpg/5fa2dd/ffffff', '1000012', '1000000046'),
('1000057', '2022-01-11', 'Ubon Ratchathani, Thailand', '0', 'http://dummyimage.com/213x200.png/cc0000/ffffff', '1000011', '1000000044'),
('1000058', '2022-01-28', '', '2', 'http://dummyimage.com/217x230.png/5fa2dd/ffffff', '1000013', '1000000050'),
('1000059', '2022-02-20', '', '2', 'http://dummyimage.com/178x120.png/cc0000/ffffff', '1000001', '1000000034'),
('1000060', '2022-01-18', '', '1', 'http://dummyimage.com/229x136.jpg/ff4444/ffffff', '1000017', '1000000046');

-- --------------------------------------------------------

--
-- Table structure for table `CASEQ`
--

CREATE TABLE `CASEQ` (
  `CaseID` decimal(10,0) NOT NULL,
  `CaseTitle` varchar(100) NOT NULL,
  `CaseDescription` text NOT NULL,
  `CasePostDate` date NOT NULL,
  `CaseCloseDate` date NOT NULL DEFAULT '2000-01-01',
  `CaseStatus` decimal(1,0) NOT NULL DEFAULT 1,
  `ResolveFlag` decimal(1,0) NOT NULL DEFAULT 0,
  `SubmittedBy` decimal(10,0) NOT NULL,
  `HandleBy` decimal(10,0) DEFAULT 1000000001
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CASEQ`
--

INSERT INTO `CASEQ` (`CaseID`, `CaseTitle`, `CaseDescription`, `CasePostDate`, `CaseCloseDate`, `CaseStatus`, `ResolveFlag`, `SubmittedBy`, `HandleBy`) VALUES
('1000001', 'Unable to reset password', 'My account is unable to reset account password.', '2022-01-26', '2000-01-01', '1', '0', '1000000035', '1000000001'),
('1000002', 'duis consequat dui nec nisi', 'Fusce consequat. Nulla nisl. Nunc nisl.\n\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', '2022-01-10', '2022-01-15', '3', '1', '1000000020', '1000000001'),
('1000003', 'sociis natoque penatibus', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', '2022-02-01', '2022-02-06', '2', '1', '1000000058', '1000000010'),
('1000004', 'erat vestibulum sed magna at', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', '2022-02-19', '2000-01-01', '1', '0', '1000000016', '1000000001'),
('1000005', 'porta volutpat quam pede lobortis', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '2022-01-07', '2000-01-01', '1', '0', '1000000035', '1000000001'),
('1000006', 'nisl aenean lectus pellentesque eget', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '2022-01-02', '2000-01-01', '3', '0', '1000000029', '1000000013'),
('1000007', 'congue eget semper rutrum nulla', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', '2022-01-13', '2000-01-01', '3', '0', '1000000024', '1000000013'),
('1000008', 'accumsan odio curabitur convallis duis', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '2022-01-14', '2000-01-01', '1', '0', '1000000051', '1000000001'),
('1000009', 'hac habitasse platea', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '2022-01-10', '2022-02-28', '3', '1', '1000000055', '1000000006'),
('1000010', 'sed justo pellentesque', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', '2022-01-08', '2000-01-01', '1', '0', '1000000025', '1000000001'),
('1000011', 'morbi vel lectus in quam', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\n\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.', '2022-01-29', '2022-02-03', '1', '1', '1000000018', '1000000001'),
('1000012', 'ridiculus mus vivamus', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', '2022-02-02', '2000-01-01', '3', '0', '1000000060', '1000000001'),
('1000013', 'justo morbi ut', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', '2022-01-18', '2022-03-15', '3', '1', '1000000049', '1000000004'),
('1000014', 'est et tempus semper', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', '2022-02-13', '2022-03-03', '3', '1', '1000000021', '1000000007'),
('1000015', 'accumsan tellus nisi', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '2022-02-05', '2000-01-01', '1', '0', '1000000029', '1000000001'),
('1000016', 'dolor vel est donec', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', '2022-01-03', '2000-01-01', '2', '0', '1000000060', '1000000002'),
('1000017', 'vitae consectetuer eget', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '2022-01-15', '2022-03-04', '3', '1', '1000000039', '1000000003'),
('1000018', 'sem fusce consequat nulla', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', '2022-01-25', '2022-03-21', '1', '1', '1000000035', '1000000001'),
('1000019', 'orci eget orci', 'In sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', '2022-01-31', '2000-01-01', '1', '0', '1000000056', '1000000001'),
('1000020', 'sapien iaculis congue vivamus metus', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\n\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', '2022-01-02', '2022-03-25', '3', '1', '1000000046', '1000000015');

-- --------------------------------------------------------

--
-- Table structure for table `CATEGORY`
--

CREATE TABLE `CATEGORY` (
  `CategoryID` decimal(4,0) NOT NULL,
  `CategoryName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `CATEGORY`
--

INSERT INTO `CATEGORY` (`CategoryID`, `CategoryName`) VALUES
('1', 'Agriculture; plantations;other rural sectors '),
('2', 'Basic Metal Production '),
('3', 'Chemical industries '),
('4', 'Commerce '),
('5', 'Construction '),
('6', 'Education '),
('7', 'Financial services; professional services '),
('8', 'Food; drink; tobacco '),
('9', 'Forestry; wood; pulp and paper '),
('10', 'Health services '),
('11', 'Hotels; tourism; catering '),
('13', 'Mechanical and electrical engineering '),
('14', 'Media; culture; graphical '),
('12', 'Mining (coal; other mining) '),
('15', 'Oil and gas production; oil refining '),
('16', 'Postal and telecommunications services '),
('17', 'Public service '),
('18', 'Shipping; ports; fisheries; inland waterways '),
('19', 'Textiles; clothing; leather; footwear '),
('20', 'Transport (including civil aviation; railways; road transport) '),
('21', 'Transport equipment manufacturing '),
('22', 'Utilities (water; gas; electricity) ');

-- --------------------------------------------------------

--
-- Table structure for table `EMPLOYER`
--

CREATE TABLE `EMPLOYER` (
  `ID` decimal(10,0) NOT NULL,
  `InCharge` varchar(100) DEFAULT NULL,
  `History` text DEFAULT NULL,
  `Achievements` text DEFAULT NULL,
  `EmployerVision` text DEFAULT NULL,
  `EmployerGoals` text DEFAULT NULL,
  `UserID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `EMPLOYER`
--

INSERT INTO `EMPLOYER` (`ID`, `InCharge`, `History`, `Achievements`, `EmployerVision`, `EmployerGoals`, `UserID`) VALUES
('1', 'SimBoonPin', 'ST Engineering has come a long way with a rich history of delivering innovative engineering solutions since 1967. The illustrious journey over the first 50 years that has brought us to we are today is reflected in the formation, expansion and transformation of the Group. As we look ahead, we will continue to forge ahead and retain our leading-edge standing among our competitors in the world. We will further spark employee passion so that our people build meaningful connections with ST Engineering, a global technology, defence and engineering group.', 'ST Engineering has come a long way with a rich history of delivering innovative engineering solutions since 1967. The illustrious journey over the first 50 years that has brought us to we are today is reflected in the formation, expansion and transformation of the Group. As we look ahead, we will continue to forge ahead and retain our leading-edge standing among our competitors in the world. We will further spark employee passion so that our people build meaningful connections with ST Engineering, a global technology, defence and engineering group.', 'Our Core Values guide every aspect of our business and are embedded in our ST Engineering culture – from the people we hire, to working with each other, to our partners and customers.\r\n\r\nIntegrity - We believe the foundation of our business success rests on unyielding honesty, trustworthiness and responsibility for our actions, striving to do the right thing and to fulfill our promises to one another, our customers, partners and stakeholders.\r\n\r\nValue Creation - We are determined to add value in all that we do - in the best way possible and to the best of our ability. We work together to grow our people, markets and businesses around the world, to consistently create solutions that win in the marketplace and meet, or even exceed, our customers\' expectations', 'Commitment - We are determined and energised to achieve our shared vision, mission and strategic objectives. This dedication to a common purpose stands behind our commitment to customers, partners, other stakeholders and one another, driving us to excellence in our results and in how we achieve them.\r\n\r\nCompassion - Along with our passion to succeed and prosper as individuals, as teams and as a business, we reach out to express our genuine care and responsibility  for one another, our communities and the broader community. We rally around those in difficulty to understand their troubles and actively help them  with our time, energy and money.', '1000000016'),
('2', 'Audrey Ang', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', '1000000017'),
('3', 'Teh Xiang Yuan', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', '1000000018'),
('4', 'Shi Yuanhang', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', '1000000019'),
('5', 'Lee Sin Tian', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\n\nFusce consequat. Nulla nisl. Nunc nisl.', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '1000000020'),
('6', 'Tan Jun Rong', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '1000000021'),
('7', 'Zora Pidler', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '1000000022'),
('8', 'Eileen Creboe', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '1000000023'),
('9', 'Chancey Eggleson', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.\n\nSuspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', '1000000024'),
('10', 'Michale Yegorovnin', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', '1000000025'),
('11', 'Kristina Emes', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '1000000026'),
('12', 'Pepe Champneys', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', '1000000027'),
('13', 'Murdock Divina', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.\n\nSed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', '1000000028'),
('14', 'Sissy Broz', 'In quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\n\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', '1000000029'),
('15', 'Rickey Merry', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'Morbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\n\nFusce consequat. Nulla nisl. Nunc nisl.', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', '1000000030');

-- --------------------------------------------------------

--
-- Table structure for table `JOB`
--

CREATE TABLE `JOB` (
  `JobID` decimal(10,0) NOT NULL,
  `JobTitle` varchar(100) NOT NULL,
  `JobPostDate` date NOT NULL,
  `JobClosingDate` date DEFAULT NULL,
  `JobLocation` varchar(100) DEFAULT NULL,
  `JobSalary` text DEFAULT NULL,
  `JobType` decimal(1,0) NOT NULL DEFAULT 0,
  `JobRolesResponsibilities` text DEFAULT NULL,
  `EligibilityCriteria` text DEFAULT NULL,
  `JobPublishStatus` decimal(1,0) NOT NULL DEFAULT 1,
  `SimulationTitle` text DEFAULT NULL,
  `ProjectTitle` text DEFAULT NULL,
  `InternshipDuration` varchar(100) DEFAULT NULL,
  `ExtraApplicationProcedure` text DEFAULT NULL,
  `CategoryID` decimal(4,0) NOT NULL,
  `JobPublisher` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `JOB`
--

INSERT INTO `JOB` (`JobID`, `JobTitle`, `JobPostDate`, `JobClosingDate`, `JobLocation`, `JobSalary`, `JobType`, `JobRolesResponsibilities`, `EligibilityCriteria`, `JobPublishStatus`, `SimulationTitle`, `ProjectTitle`, `InternshipDuration`, `ExtraApplicationProcedure`, `CategoryID`, `JobPublisher`) VALUES
('1000001', ' IT Support Intern', '2022-04-18', '2022-05-18', 'Sydney NSW, Australia', '$800 - $1,000', '3', 'Installing and configuring computer hardware, software, systems, networks, printers and scanners\nMonitoring and maintaining computer systems and networks\nResponding in a timely manner to service issues and requests\nProviding technical support across the company (this may be in person or over the phone)\nSetting up accounts for new users\nRepairing and replacing equipment as necessary\nTesting new technology\nPossibly training more junior staff members', 'Impeccable Communication Skills - both written and spoken\nSolid education for IT fundamentals i.e. Networking, System design, security principles\nWindows and Linux Operating System experience desirable\nProficient in Windows 7+10 & MS Office 2016/O365\nDemonstrable ability to troubleshoot complex hardware and software issues\nLogical, task oriented and analytical, with a sense of urgency to get things done quickly\nGood knowledge of networking principles and troubleshooting \nAttention to detail\nTakes initiative\nIndependently follows up on tasks\nGood phone manner', '1', '', '', 'Internship', 'Applicant must be over 21 years old', '3', '1000000016'),
('1000002', 'Pharmacist', '2022-05-29', '2022-06-29', 'Chiang Rai, Thailand', 'Monthly Allowance from SGD 600 to 1100', '2', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '1', '', 'ultrices', '', '', '13', '1000000019'),
('1000003', 'Assistant Media Planner', '2021-10-21', '2021-12-27', 'Tallaght, Ireland', 'Monthly Allowance from SGD 4000 to 4500', '3', 'Quisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\n\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', '1', '', '', 'ut at dolor quis', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', '1', '1000000030'),
('1000004', 'Statistician II', '2022-05-26', '2022-06-26', 'Nakhon Pathom, Thailand', 'Monthly Allowance from SGD 2800 to 3300', '3', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', '0', '', '', 'donec posuere metus vitae ipsum aliquam non', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', '5', '1000000021'),
('1000005', 'Software Consultant', '2021-09-26', '2021-12-18', 'Kochi, Japan', 'Monthly Allowance from SGD 3500 to 4000', '3', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', '0', '', '', 'ante ipsum primis in', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', '12', '1000000017'),
('1000006', 'Junior Executive', '2021-01-06', '2022-03-18', 'Carlow, Ireland', 'Monthly Allowance from SGD 3400 to 3900', '2', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', '0', '', 'fermentum justo nec condimentum', '', '', '7', '1000000028'),
('1000007', 'Associate Professor', '2022-01-28', '2022-02-28', 'Yio Chu Kang, Singapore', 'Monthly Allowance from SGD 3600 to 4100', '2', 'Fusce consequat. Nulla nisl. Nunc nisl.\n\nDuis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '1', '', 'et ultrices posuere cubilia', '', '', '21', '1000000024'),
('1000008', 'Environmental Specialist', '2021-07-15', '2021-11-27', 'Hannover, Germany', 'Monthly Allowance from SGD 4600 to 5100', '3', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', '1', '', '', 'cras in purus eu magna vulputate', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.', '16', '1000000024'),
('1000009', 'Safety Technician III', '2021-11-10', '2022-01-29', 'Tallahassee, United States', 'Monthly Allowance from SGD 4500 to 5000', '3', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '0', '', '', 'lacinia sapien quis libero', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '5', '1000000029'),
('1000010', 'Software Consultant', '2021-11-11', '2022-04-06', 'Thomson, Singapore', 'Monthly Allowance from SGD 100 to 600', '3', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '1', '', '', 'bibendum imperdiet nullam orci pede', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '15', '1000000018'),
('1000011', 'Pharmacist', '2022-03-08', '2022-04-08', 'Santa Cruz, Spain', 'Monthly Allowance from SGD 1900 to 2400', '0', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', '0', '', '', '', '', '3', '1000000023'),
('1000012', 'Civil Engineer', '2021-12-28', '2022-04-27', 'Seremban, Malaysia', 'Monthly Allowance from SGD 200 to 700', '3', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'Fusce consequat. Nulla nisl. Nunc nisl.', '1', '', '', 'lobortis est phasellus', 'Quisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '21', '1000000022'),
('1000013', 'Software Test Engineer IV', '2021-02-19', '2021-12-13', 'Thai Nguyen, Vietnam', 'Monthly Allowance from SGD 3500 to 4000', '0', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.', '0', '', '', '', '', '15', '1000000026'),
('1000014', 'Help Desk Technician', '2021-06-11', '2021-09-04', 'Pattani, Thailand', 'Monthly Allowance from SGD 700 to 1200', '1', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '1', 'in porttitor pede', '', '', '', '21', '1000000028'),
('1000015', 'Administrative Assistant IV', '2021-02-28', '2021-08-13', 'Dien Bien Phu, Vietnam', 'Monthly Allowance from SGD 1600 to 2100', '3', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\n\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', 'Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.\n\nEtiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', '0', '', '', 'justo etiam pretium iaculis justo in', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', '1', '1000000017'),
('1000016', 'Occupational Therapist', '2022-01-10', '2022-02-10', 'Naha, Japan', 'Monthly Allowance from SGD 100 to 600', '0', 'Nam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\n\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', '0', '', '', '', '', '5', '1000000016'),
('1000017', 'Office Assistant II', '2021-05-31', '2021-07-26', 'Ennis, Ireland', 'Monthly Allowance from SGD 4600 to 5100', '1', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', '0', 'quis turpis eget elit', '', '', '', '8', '1000000020'),
('1000018', 'VP Quality Control', '2021-10-01', '2022-01-06', 'Dubai, United Arab Emirates', 'Monthly Allowance from SGD 200 to 700', '0', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', '0', '', '', '', '', '20', '1000000026'),
('1000019', 'Cost Accountant', '2021-09-24', '2022-07-13', 'St. Paul, United States', 'Monthly Allowance from SGD 3000 to 3500', '2', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', '1', '', 'ut nunc', '', '', '3', '1000000020'),
('1000020', 'Administrative Assistant II', '2021-03-03', '2022-05-08', 'Ranong, Thailand', 'Monthly Allowance from SGD 1400 to 1900', '2', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', '1', '', 'orci mauris lacinia', '', '', '12', '1000000026'),
('1000021', 'Food Chemist', '2021-09-15', '2021-10-15', 'Lampang, Thailand', 'Monthly Allowance from SGD 2700 to 3200', '1', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.\n\nMorbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'Suspendisse potenti. In eleifend quam a odio. In hac habitasse platea dictumst.\n\nMaecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.', '1', 'at', '', '', '', '19', '1000000027'),
('1000022', 'VP Quality Control', '2022-02-13', '2022-03-13', 'Bangkok, Thailand', 'Monthly Allowance from SGD 2100 to 2600', '1', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', '0', 'id luctus nec', '', '', '', '13', '1000000020'),
('1000023', 'Compensation Analyst', '2022-05-04', '2022-06-23', 'Ros Comain, Ireland', 'Monthly Allowance from SGD 4700 to 5200', '1', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', '1', 'nulla suscipit ligula in', '', '', '', '19', '1000000017'),
('1000024', 'Physical Therapy Assistant', '2022-04-13', '2022-05-13', 'Koronadal, Philippines', 'Monthly Allowance from SGD 2400 to 2900', '1', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.\n\nNullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', '1', 'justo etiam', '', '', '', '8', '1000000023'),
('1000025', 'Database Administrator IV', '2021-06-16', '2022-07-16', 'Isulan, Philippines', 'Monthly Allowance from SGD 4400 to 4900', '2', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.\n\nIn quis justo. Maecenas rhoncus aliquam lacus. Morbi quis tortor id nulla ultrices aliquet.\n\nMaecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', '1', '', 'consequat metus', '', '', '4', '1000000016'),
('1000026', 'Quality Control Specialist', '2021-05-02', '2022-08-01', 'Greymouth, New Zealand', 'Monthly Allowance from SGD 3000 to 3500', '2', 'Mauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.\n\nCum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Vivamus vestibulum sagittis sapien. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.', '0', '', 'in', '', '', '16', '1000000027'),
('1000027', 'Financial Advisor', '2022-01-11', '2022-02-11', 'Nabunturan, Philippines', 'Monthly Allowance from SGD 2200 to 2700', '1', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.\n\nIn sagittis dui vel nisl. Duis ac nibh. Fusce lacus purus, aliquet at, feugiat non, pretium quis, lectus.', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', '0', 'faucibus', '', '', '', '14', '1000000022'),
('1000028', 'Senior Financial Analyst', '2021-06-10', '2021-09-25', 'Masbate, Philippines', 'Monthly Allowance from SGD 1900 to 2400', '0', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.\n\nCras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '0', '', '', '', '', '15', '1000000026'),
('1000029', 'Community Outreach Specialist', '2021-05-16', '2021-09-24', 'Tuas, Singapore', 'Monthly Allowance from SGD 4000 to 4500', '0', 'Praesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '0', '', '', '', '', '10', '1000000025'),
('1000030', 'Speech Pathologist', '2021-01-20', '2022-01-19', 'Chancery, Singapore', 'Monthly Allowance from SGD 3400 to 3900', '3', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Proin risus. Praesent lectus.', '1', '', '', 'vestibulum ante ipsum', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '13', '1000000022');

-- --------------------------------------------------------

--
-- Table structure for table `STUDENT`
--

CREATE TABLE `STUDENT` (
  `ID` decimal(10,0) NOT NULL,
  `StudentNumber` varchar(10) DEFAULT NULL,
  `StudentCourseName` text DEFAULT NULL,
  `StudentResume` text DEFAULT NULL,
  `StudentAchievements` text DEFAULT NULL,
  `StudentSkills` text DEFAULT NULL,
  `StudentWorkExperience` text DEFAULT NULL,
  `StudentPhone` varchar(100) DEFAULT NULL,
  `StudentCompletionDate` date DEFAULT NULL,
  `UserID` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `STUDENT`
--

INSERT INTO `STUDENT` (`ID`, `StudentNumber`, `StudentCourseName`, `StudentResume`, `StudentAchievements`, `StudentSkills`, `StudentWorkExperience`, `StudentPhone`, `StudentCompletionDate`, `UserID`) VALUES
('1', '39781732', 'consequat ut nulla sed accumsan felis ut', 'http://dummyimage.com/167x139.bmp/dddddd/000000', 'http://dummyimage.com/248x163.bmp/ff4444/ffffff', 'Constructive feedback\nProfessionalism\nCritical observation\nFiling and paper management\nEnthusiasm', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', '(297) 1179590', '2019-05-09', '1000000031'),
('2', '34064852', 'Bachelor Degree in Business Information System and Web Development', 'http://dummyimage.com/232x116.png/5fa2dd/ffffff', 'http://dummyimage.com/190x227.png/ff4444/ffffff', 'Analytic skills\r\nSharepoint \r\nDatabase\r\nHTML\r\nC++', 'Web developer Internship - (‘Sony’: May 2021- August 2021)\r\nSoftware Engineer - (‘Gufu Engineering’: September 2021 - January 2022)\r\n  ', '(65) 9622 2374', '2022-04-25', '1000000032'),
('3', '37120676', 'vel sem sed sagittis nam congue risus', 'http://dummyimage.com/233x100.jpg/cc0000/ffffff', 'http://dummyimage.com/166x194.jpg/ff4444/ffffff', 'Attention to detail \nVisual communication\nWritten communication\nBuyer-Responsive selling\nAttention to detail & aesthetics', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '(811) 5937382', '2023-09-14', '1000000033'),
('4', '36514432', 'natoque penatibus et magnis dis parturient montes', 'http://dummyimage.com/124x191.png/dddddd/000000', 'http://dummyimage.com/218x232.bmp/dddddd/000000', 'Interpersonal skills\nStress management\nCreativity \nBusiness Development\nWeb scraping', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '(478) 2571158', '2022-05-26', '1000000034'),
('5', '30042985', 'amet erat nulla tempus', 'http://dummyimage.com/188x243.png/ff4444/ffffff', 'http://dummyimage.com/211x147.png/dddddd/000000', 'Scheduling\nIntrospection\nProblem-solving\nCompassion\nInnovation', 'Proin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.\n\nDuis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.\n\nDonec diam neque, vestibulum eget, vulputate ut, ultrices vel, augue. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Donec pharetra, magna vestibulum aliquet ultrices, erat tortor sollicitudin mi, sit amet lobortis sapien sapien non mi. Integer ac neque.\n\nDuis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', '(447) 2076791', '2021-04-27', '1000000035'),
('6', '37951773', 'pede ullamcorper augue a suscipit nulla elit', 'http://dummyimage.com/162x211.jpg/5fa2dd/ffffff', 'http://dummyimage.com/179x123.bmp/cc0000/ffffff', 'Analysis\nCoordination\nEmpathy\nSTATA\nSurgery preparation', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.', '(510) 4178620', '2019-07-30', '1000000036'),
('7', '32764496', 'in libero ut massa', 'http://dummyimage.com/214x193.png/5fa2dd/ffffff', 'http://dummyimage.com/137x239.jpg/5fa2dd/ffffff', 'Critical thinking\nTeamwork\nEnthusiasm\nGraphic User Interfaces (GUI)\n Powerpoint', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.\n\nAliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', '(883) 2137825', '2019-01-24', '1000000037'),
('8', '33954975', 'neque sapien placerat ante nulla justo aliquam', 'http://dummyimage.com/210x173.jpg/dddddd/000000', 'http://dummyimage.com/247x232.bmp/cc0000/ffffff', 'Accepting criticism\nActive listening \nMediation\nNegotiation \nPatient care and assistance', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.\n\nFusce consequat. Nulla nisl. Nunc nisl.', '(920) 5068460', '2021-12-25', '1000000038'),
('9', '38114914', 'ridiculus mus vivamus vestibulum sagittis sapien', 'http://dummyimage.com/144x162.bmp/dddddd/000000', 'http://dummyimage.com/244x155.bmp/ff4444/ffffff', 'Written communication\nVisual communication\nPositive attitude\nPaperwork/record-keeping abilities\nHTML & CSS', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.\n\nPhasellus in felis. Donec semper sapien a libero. Nam dui.', '(108) 8604044', '2020-06-29', '1000000039'),
('10', '32858010', 'congue eget semper rutrum', 'http://dummyimage.com/121x151.png/ff4444/ffffff', 'http://dummyimage.com/161x152.jpg/5fa2dd/ffffff', 'Quality client service\nPublic speaking\nEmpathy\nSocial media/digital communication\nMathematics', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.\n\nCras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', '(601) 5410388', '2023-04-21', '1000000040'),
('11', '32704010', 'id justo sit amet sapien', 'http://dummyimage.com/115x247.jpg/ff4444/ffffff', 'http://dummyimage.com/156x161.png/dddddd/000000', 'Critical thinking \nAccepting criticism\nNegotiation\n InDesign\nPESTEL', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', '(702) 4132012', '2020-03-02', '1000000041'),
('12', '37240074', 'ut massa volutpat convallis morbi', 'http://dummyimage.com/183x100.png/cc0000/ffffff', 'http://dummyimage.com/138x248.bmp/dddddd/000000', 'Positivity\nDiplomacy\nNegotiation \nSurgery preparation\nConsumer Behavior Drivers', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '(927) 7519617', '2020-12-21', '1000000042'),
('13', '31635305', 'mollis molestie lorem quisque ut erat', 'http://dummyimage.com/128x245.bmp/dddddd/000000', 'http://dummyimage.com/197x210.jpg/cc0000/ffffff', 'Teamwork\nDependability\nAcuity\nMotivation\nPeople management', 'Nulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', '(275) 7166808', '2020-11-21', '1000000043'),
('14', '32298524', 'quis orci eget orci', 'http://dummyimage.com/197x145.bmp/dddddd/000000', 'http://dummyimage.com/137x119.png/5fa2dd/ffffff', 'Questioning\nCritical observation\nHumor\nPaperwork/record-keeping abilities\nMicrosoft Office Pack: Word', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '(530) 4776200', '2024-04-05', '1000000044'),
('15', '30756096', 'vitae nisl aenean lectus pellentesque', 'http://dummyimage.com/180x169.jpg/ff4444/ffffff', 'http://dummyimage.com/154x170.png/cc0000/ffffff', 'Motivation \nMultitasking\nAttention to detail \nCopywriting\nSTATA', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', '(350) 1673866', '2020-10-11', '1000000045'),
('16', '34114670', 'a feugiat et eros vestibulum', 'http://dummyimage.com/240x133.jpg/5fa2dd/ffffff', 'http://dummyimage.com/126x179.jpg/cc0000/ffffff', 'Cultural intelligence\nTenacity\nPatience\nBusiness Process Modeling\nBookkeeping through Excel or TurboTax', 'Duis aliquam convallis nunc. Proin at turpis a pede posuere nonummy. Integer non velit.', '(434) 6509438', '2021-04-20', '1000000046'),
('17', '32007138', 'interdum venenatis turpis enim blandit', 'http://dummyimage.com/164x216.bmp/cc0000/ffffff', 'http://dummyimage.com/176x190.bmp/cc0000/ffffff', 'Analysis\nCritical observation\nIntrospection\nTechnological & digital literacy\nMicrosoft Office Pack: Word', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.\n\nCurabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', '(319) 8458530', '2019-12-03', '1000000047'),
('18', '32820215', 'etiam justo etiam pretium iaculis justo in', 'http://dummyimage.com/169x229.png/cc0000/ffffff', 'http://dummyimage.com/239x156.jpg/dddddd/000000', 'Optimism\nAccepting criticism\nGoal setting\nActive listening\nEnthusiasm', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '(355) 4367377', '2020-04-08', '1000000048'),
('19', '31995436', 'pellentesque volutpat dui maecenas', 'http://dummyimage.com/175x147.bmp/cc0000/ffffff', 'http://dummyimage.com/189x189.png/5fa2dd/ffffff', 'Analysis\nDependability\nDependability\nTelemetry\nInfection control', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', '(364) 7642013', '2019-11-18', '1000000049'),
('20', '35110288', 'nisl aenean lectus pellentesque eget nunc donec', 'http://dummyimage.com/145x230.jpg/cc0000/ffffff', 'http://dummyimage.com/122x135.bmp/dddddd/000000', 'Observation\nOrganization \nCoordination\nContent Management Systems (CMS)\nPeople management', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.\n\nPhasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '(746) 2243448', '2024-05-08', '1000000050'),
('21', '36592650', 'sed interdum venenatis turpis enim blandit mi', 'http://dummyimage.com/121x222.png/5fa2dd/ffffff', 'http://dummyimage.com/240x209.png/cc0000/ffffff', 'Charisma \nCritical thinking \nPatience\nKnow Your Customers (KYC)\nTechnological savviness', 'Aenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.\n\nQuisque id justo sit amet sapien dignissim vestibulum. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla dapibus dolor vel est. Donec odio justo, sollicitudin ut, suscipit a, feugiat et, eros.\n\nVestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', '(721) 7322577', '2023-10-01', '1000000051'),
('22', '30205402', 'id massa id nisl venenatis lacinia', 'http://dummyimage.com/236x218.png/cc0000/ffffff', 'http://dummyimage.com/155x155.png/5fa2dd/ffffff', 'Introspection\nSelf-management\nSelf-management\nEmail marketing\nCloud networking and file sharing', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.\n\nNullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', '(883) 3248947', '2023-01-23', '1000000052'),
('23', '33616878', 'ridiculus mus vivamus vestibulum sagittis sapien', 'http://dummyimage.com/231x145.png/dddddd/000000', 'http://dummyimage.com/194x103.bmp/cc0000/ffffff', 'Persuasion\nNegotiation \nPlanning \nClosing\nPESTEL', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.', '(967) 3381114', '2021-09-03', '1000000053'),
('24', '33812169', 'pede libero quis orci nullam', 'http://dummyimage.com/145x209.jpg/ff4444/ffffff', 'http://dummyimage.com/238x112.jpg/cc0000/ffffff', 'Presentation and public thinking\nStress management\nOpen-mindedness \nWordpress\n Matlab)', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', '(288) 4486889', '2019-06-12', '1000000054'),
('25', '36636563', 'cras mi pede malesuada', 'http://dummyimage.com/108x132.jpg/5fa2dd/ffffff', 'http://dummyimage.com/229x224.bmp/cc0000/ffffff', 'Positive attitude \nStress management \nNetworking\nAttention to detail & aesthetics\nProject/campaign management', 'Proin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', '(547) 4015590', '2022-01-05', '1000000055'),
('26', '31887761', 'fusce posuere felis sed', 'http://dummyimage.com/205x122.png/cc0000/ffffff', 'http://dummyimage.com/144x227.jpg/cc0000/ffffff', 'Assertiveness\nMotivation \nEmpathy\nInteractive media design\nEducational platforms (software like Elearn)', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.\n\nInteger ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.\n\nNam ultrices, libero non mattis pulvinar, nulla pede ullamcorper augue, a suscipit nulla elit ac nulla. Sed vel enim sit amet nunc viverra dapibus. Nulla suscipit ligula in lacus.', '(901) 1260502', '2018-11-14', '1000000056'),
('27', '37738773', 'felis sed interdum venenatis turpis enim', 'http://dummyimage.com/125x190.png/ff4444/ffffff', 'http://dummyimage.com/168x117.jpg/5fa2dd/ffffff', 'Time management \nAcuity\nAssertiveness\nPorter\'s Five Forces\n Powerpoint', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', '(134) 2213023', '2023-11-02', '1000000057'),
('28', '32135803', 'pede malesuada in imperdiet et commodo', 'http://dummyimage.com/159x245.bmp/cc0000/ffffff', 'http://dummyimage.com/163x207.jpg/dddddd/000000', 'Empathy\nInnovation\nObservation\nAdobe Creative Suite: Illustrator\nSales', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.', '(238) 2718105', '2019-05-27', '1000000058'),
('29', '35407768', 'in sapien iaculis congue vivamus metus', 'http://dummyimage.com/212x198.bmp/ff4444/ffffff', 'http://dummyimage.com/240x121.bmp/5fa2dd/ffffff', 'Conflict management and resolution\nEmpathy\nCharisma \n Scala\nBrand management', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.', '(596) 5252615', '2022-03-06', '1000000059'),
('30', '31575881', 'velit donec diam neque vestibulum eget', 'http://dummyimage.com/181x109.jpg/5fa2dd/ffffff', 'http://dummyimage.com/221x197.png/dddddd/000000', 'System analysis\nCritical thinking\nConflict management and resolution\nClear communication\nTargeting and marketing through visual communications', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.\n\nInteger tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', '(618) 1040877', '2019-10-14', '1000000060');

-- --------------------------------------------------------

--
-- Table structure for table `TESTIMONIAL`
--

CREATE TABLE `TESTIMONIAL` (
  `TestimonialID` decimal(10,0) NOT NULL,
  `TestimonialTitle` varchar(100) NOT NULL,
  `TestimonialDescription` text DEFAULT NULL,
  `TestimonialPostDate` date NOT NULL,
  `TestimonialPhoto` text DEFAULT NULL,
  `TestimonialComments` text DEFAULT NULL,
  `SubmittedBy` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TESTIMONIAL`
--

INSERT INTO `TESTIMONIAL` (`TestimonialID`, `TestimonialTitle`, `TestimonialDescription`, `TestimonialPostDate`, `TestimonialPhoto`, `TestimonialComments`, `SubmittedBy`) VALUES
('1000001', 'Outing', 'Enjoying every moment.', '2022-04-17', 'http://dummyimage.com/568x325.png/ff4444/ffffff', 'Tan Jun Rong: Wow!!!\n(2022-05-01 12:34pm)\n\nAudrey Ang: Nice!!!\n(2022-04-05 01:34pm)', '1000000016'),
('1000002', 'Sprited Away', 'Keep sane.', '2022-04-12', 'http://dummyimage.com/1056x769.png/dddddd/000000', 'ST Engineering: Shiok!!!\n(2022-05-01 12:34pm)\n\nAudrey Ang: Nice!!!\n(2022-04-06 01:34pm)\n\nTan Jun Rong: Wow!!!\n(2022-05-01 12:34pm)\n\nAudrey Ang: Nice!!!\n(2022-04-05 01:34pm)', '1000000016'),
('1000003', 'nec dui', 'euismod scelerisque quam turpis adipiscing lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a', '2022-04-28', 'http://dummyimage.com/534x753.bmp/cc0000/ffffff', 'et ultrices posuere cubilia curae duis faucibus', '1000000049'),
('1000004', 'et ultrices', 'pede morbi porttitor', '2022-04-27', 'http://dummyimage.com/502x661.jpg/5fa2dd/ffffff', 'pellentesque ultrices phasellus id sapien in sapien iaculis congue vivamus', '1000000025'),
('1000005', 'commodo placerat', 'sagittis nam congue', '2022-04-07', 'http://dummyimage.com/1009x657.bmp/dddddd/000000', 'nec nisi volutpat eleifend donec', '1000000045'),
('1000006', 'elit proin interdum mauris non', 'tellus nulla ut erat id mauris vulputate elementum nullam varius nulla facilisi cras non velit', '2022-04-29', 'http://dummyimage.com/991x1013.png/cc0000/ffffff', 'fermentum justo nec condimentum neque sapien', '1000000044'),
('1000007', 'massa id lobortis convallis', 'nam dui proin leo odio porttitor id consequat in consequat ut nulla sed', '2022-04-16', 'http://dummyimage.com/818x562.jpg/ff4444/ffffff', 'porttitor lorem id ligula suspendisse ornare consequat', '1000000052'),
('1000008', 'curabitur in libero ut', 'id nisl venenatis lacinia aenean sit amet justo morbi ut odio cras', '2022-04-07', 'http://dummyimage.com/944x673.png/ff4444/ffffff', 'nulla integer pede justo', '1000000018'),
('1000009', 'lacus curabitur', 'aliquet pulvinar sed nisl nunc rhoncus dui vel sem', '2022-04-08', 'http://dummyimage.com/946x757.png/dddddd/000000', 'ligula vehicula consequat morbi a ipsum integer a nibh', '1000000054'),
('1000010', 'neque libero', 'est et tempus semper est quam pharetra magna', '2022-04-18', 'http://dummyimage.com/917x227.bmp/5fa2dd/ffffff', 'vel pede morbi porttitor lorem id ligula suspendisse ornare', '1000000043'),
('1000011', 'quisque arcu libero', 'molestie sed justo pellentesque viverra pede ac diam cras pellentesque volutpat dui maecenas tristique est', '2022-04-03', 'http://dummyimage.com/620x858.png/5fa2dd/ffffff', 'consectetuer eget rutrum at lorem integer tincidunt ante vel ipsum', '1000000028'),
('1000012', 'nisi', 'nunc nisl duis bibendum felis sed interdum venenatis turpis enim blandit mi in', '2022-04-04', 'http://dummyimage.com/936x956.png/dddddd/000000', 'sollicitudin mi sit amet lobortis sapien sapien non mi integer', '1000000051'),
('1000013', 'dictumst aliquam augue quam sollicitudin vitae', 'at turpis donec posuere metus vitae ipsum aliquam non mauris morbi non lectus aliquam sit amet', '2022-04-05', 'http://dummyimage.com/640x695.png/5fa2dd/ffffff', 'vestibulum ante ipsum primis in faucibus orci luctus et ultrices', '1000000040'),
('1000014', 'eget massa tempor convallis nulla', 'risus praesent lectus vestibulum quam sapien varius ut blandit non interdum', '2022-04-10', 'http://dummyimage.com/377x992.jpg/dddddd/000000', 'vulputate nonummy maecenas tincidunt lacus at velit vivamus vel nulla', '1000000028'),
('1000015', 'sem praesent', 'massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur gravida nisi at nibh', '2022-04-06', 'http://dummyimage.com/539x679.jpg/dddddd/000000', 'luctus et ultrices posuere cubilia curae donec pharetra magna', '1000000049'),
('1000016', 'nullam', 'habitasse platea dictumst etiam faucibus', '2022-04-02', 'http://dummyimage.com/917x760.bmp/cc0000/ffffff', 'pellentesque ultrices phasellus id sapien in', '1000000024'),
('1000017', 'nullam molestie nibh in lectus pellentesque', 'curabitur gravida nisi at nibh in hac', '2022-04-13', 'http://dummyimage.com/570x283.jpg/ff4444/ffffff', 'posuere metus vitae ipsum aliquam', '1000000025'),
('1000018', 'turpis', 'augue luctus tincidunt nulla mollis molestie lorem quisque', '2022-04-02', 'http://dummyimage.com/771x951.png/dddddd/000000', 'consequat dui nec nisi volutpat eleifend donec ut dolor morbi', '1000000025'),
('1000019', 'ut erat id mauris vulputate', 'viverra diam vitae quam suspendisse potenti nullam porttitor lacus at turpis donec', '2022-04-07', 'http://dummyimage.com/553x635.png/dddddd/000000', 'donec odio justo sollicitudin ut suscipit a feugiat', '1000000039'),
('1000020', 'in', 'donec semper sapien a libero nam dui proin leo odio porttitor', '2022-04-23', 'http://dummyimage.com/676x824.jpg/dddddd/000000', 'ut volutpat sapien arcu sed augue aliquam erat', '1000000053'),
('1000021', 'id nulla ultrices aliquet maecenas', 'vivamus tortor duis mattis egestas metus aenean fermentum donec', '2022-04-13', 'http://dummyimage.com/603x247.bmp/dddddd/000000', 'pulvinar sed nisl nunc rhoncus dui vel sem', '1000000023'),
('1000022', 'molestie lorem quisque ut', 'id nulla ultrices aliquet maecenas leo odio condimentum id luctus nec molestie sed justo pellentesque', '2022-04-16', 'http://dummyimage.com/629x463.bmp/dddddd/000000', 'platea dictumst aliquam augue quam sollicitudin vitae consectetuer', '1000000057'),
('1000023', 'diam id ornare imperdiet', 'nunc proin at turpis a pede', '2022-04-07', 'http://dummyimage.com/721x978.bmp/dddddd/000000', 'eget congue eget semper rutrum', '1000000049'),
('1000024', 'quam fringilla rhoncus mauris enim leo', 'vehicula consequat morbi a ipsum integer a nibh in quis justo maecenas rhoncus aliquam lacus morbi quis tortor id', '2022-04-29', 'http://dummyimage.com/1062x708.png/cc0000/ffffff', 'ante nulla justo aliquam quis turpis', '1000000020'),
('1000025', 'massa', 'phasellus in felis donec semper sapien a libero nam dui proin leo odio porttitor id consequat in consequat ut', '2022-04-17', 'http://dummyimage.com/363x203.jpg/cc0000/ffffff', 'morbi vel lectus in quam fringilla rhoncus mauris', '1000000048'),
('1000026', 'ante ipsum primis', 'at nulla suspendisse potenti cras in purus eu magna vulputate luctus cum sociis natoque penatibus et magnis dis parturient', '2022-04-24', 'http://dummyimage.com/1022x1006.bmp/dddddd/000000', 'pede justo lacinia eget tincidunt eget tempus vel pede morbi', '1000000046'),
('1000027', 'eget eros', 'id turpis integer aliquet massa id lobortis convallis tortor risus dapibus', '2022-04-10', 'http://dummyimage.com/402x889.jpg/5fa2dd/ffffff', 'in hac habitasse platea', '1000000042'),
('1000028', 'mus', 'ac est lacinia nisi venenatis tristique fusce congue diam id', '2022-04-11', 'http://dummyimage.com/542x220.png/ff4444/ffffff', 'id consequat in consequat', '1000000058'),
('1000029', 'nisl venenatis lacinia aenean sit', 'varius nulla facilisi cras non velit nec nisi vulputate nonummy', '2022-04-02', 'http://dummyimage.com/449x879.bmp/ff4444/ffffff', 'venenatis lacinia aenean sit amet justo morbi ut odio', '1000000035'),
('1000030', 'morbi non lectus', 'habitasse platea dictumst maecenas ut massa quis augue luctus tincidunt nulla mollis molestie lorem quisque ut erat curabitur', '2022-04-19', 'http://dummyimage.com/432x696.jpg/dddddd/000000', 'aliquam quis turpis eget elit sodales', '1000000049'),
('1000031', 'eget tincidunt eget tempus vel pede', 'in faucibus orci luctus et', '2022-04-03', 'http://dummyimage.com/479x1050.png/ff4444/ffffff', 'lorem vitae mattis nibh', '1000000046'),
('1000032', 'justo sit amet sapien dignissim', 'neque vestibulum eget vulputate ut ultrices vel augue vestibulum ante ipsum primis in faucibus', '2022-04-09', 'http://dummyimage.com/328x452.png/dddddd/000000', 'auctor sed tristique in tempus sit amet', '1000000056'),
('1000033', 'quam pede lobortis ligula sit amet', 'ligula vehicula consequat morbi a ipsum integer a nibh in quis', '2022-04-29', 'http://dummyimage.com/720x951.jpg/cc0000/ffffff', 'dictumst aliquam augue quam sollicitudin vitae consectetuer eget rutrum at', '1000000021'),
('1000034', 'purus sit', 'lorem vitae mattis nibh ligula nec sem duis aliquam convallis nunc proin at turpis a pede posuere nonummy integer', '2022-04-03', 'http://dummyimage.com/324x981.jpg/cc0000/ffffff', 'id consequat in consequat ut nulla sed accumsan felis', '1000000047'),
('1000035', 'in purus eu', 'ut dolor morbi vel lectus in quam fringilla rhoncus', '2022-04-08', 'http://dummyimage.com/673x472.jpg/cc0000/ffffff', 'dolor morbi vel lectus in quam fringilla', '1000000052'),
('1000036', 'sem sed sagittis nam congue', 'ultrices libero non mattis pulvinar nulla pede', '2022-04-03', 'http://dummyimage.com/358x605.bmp/ff4444/ffffff', 'vestibulum ante ipsum primis in faucibus orci luctus et', '1000000048'),
('1000037', 'ultrices vel augue vestibulum', 'in quam fringilla rhoncus mauris enim', '2022-04-10', 'http://dummyimage.com/574x958.png/dddddd/000000', 'ipsum primis in faucibus orci luctus et ultrices posuere', '1000000029'),
('1000038', 'mauris vulputate elementum nullam varius', 'venenatis tristique fusce congue diam id ornare imperdiet sapien urna pretium nisl ut', '2022-04-06', 'http://dummyimage.com/879x755.bmp/cc0000/ffffff', 'magnis dis parturient montes nascetur ridiculus mus etiam', '1000000060'),
('1000039', 'neque', 'convallis duis consequat dui nec nisi volutpat eleifend donec ut dolor morbi vel lectus in quam', '2022-04-27', 'http://dummyimage.com/450x598.bmp/ff4444/ffffff', 'ac neque duis bibendum morbi non', '1000000017'),
('1000040', 'Pop up store', 'Great floorplan & IT setup.', '2022-04-28', 'http://dummyimage.com/897x416.jpg/cc0000/ffffff', 'Lee Sin Tian: Nice!!!\n(2022-04-06 01:34pm)\n\nTan Jun Rong: Wow!!!\n(2022-05-01 12:34pm)\n\nAudrey Ang: Nice!!!\n(2022-04-05 01:34pm)', '1000000016'),
('1000041', 'nonummy', 'sit amet justo morbi ut odio cras mi', '2022-04-22', 'http://dummyimage.com/715x389.png/ff4444/ffffff', 'interdum mauris non ligula', '1000000058'),
('1000042', 'ut odio', 'orci vehicula condimentum curabitur in libero', '2022-04-08', 'http://dummyimage.com/935x903.jpg/dddddd/000000', 'vivamus tortor duis mattis egestas metus aenean fermentum donec', '1000000056'),
('1000043', 'ante ipsum primis in', 'in faucibus orci luctus et ultrices posuere cubilia curae duis faucibus accumsan odio curabitur convallis duis consequat', '2022-04-05', 'http://dummyimage.com/591x909.png/5fa2dd/ffffff', 'platea dictumst etiam faucibus cursus urna ut tellus', '1000000044'),
('1000044', 'nulla ultrices aliquet maecenas', 'ante ipsum primis in faucibus orci', '2022-04-16', 'http://dummyimage.com/690x434.bmp/dddddd/000000', 'vel sem sed sagittis nam congue risus semper porta volutpat', '1000000057'),
('1000045', 'amet', 'ligula in lacus curabitur at ipsum ac tellus', '2022-04-07', 'http://dummyimage.com/306x292.jpg/ff4444/ffffff', 'suspendisse accumsan tortor quis turpis sed ante', '1000000035');

-- --------------------------------------------------------

--
-- Table structure for table `WILUSER`
--

CREATE TABLE `WILUSER` (
  `UserID` decimal(10,0) NOT NULL,
  `UserType` decimal(1,0) NOT NULL DEFAULT 4,
  `UserStatus` decimal(1,0) NOT NULL DEFAULT 1,
  `UserEmail` varchar(100) NOT NULL,
  `UserPassword` varchar(50) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `UserProfile` text DEFAULT NULL,
  `UserPhoto` text DEFAULT NULL,
  `CreatedBy` decimal(10,0) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `WILUSER`
--

INSERT INTO `WILUSER` (`UserID`, `UserType`, `UserStatus`, `UserEmail`, `UserPassword`, `UserName`, `UserProfile`, `UserPhoto`, `CreatedBy`) VALUES
('1000000001', '1', '1', 'sbp1@gmail.com', 'mu2Wil', 'Sim Boon Pin', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000002', '2', '1', 'sbp2@gmail.com', 'mu2Wil', 'Sim Boon Pin', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.\n\nPellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000003', '1', '1', 'aa1@gmail.com', 'mu2Wil', 'Audrey Ang', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000004', '2', '1', 'aa2@gmail.com', 'mu2Wil', 'Audrey Ang', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.\n\nDuis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000005', '1', '1', 'txy1@gmail.com', 'mu2Wil', 'Teh Xiang Yuan', 'Maecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000006', '2', '1', 'txy2@gmail.com', 'mu2Wil', 'Teh Xiang Yuan', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000007', '1', '1', 'syh1@gmail.com', 'mu2Wil', 'Shi Yuanhang', 'Vestibulum quam sapien, varius ut, blandit non, interdum in, ante. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Duis faucibus accumsan odio. Curabitur convallis.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000008', '2', '1', 'syh2@gmail.com', 'mu2Wil', 'Shi Yuanhang', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000009', '1', '1', 'lst1@gmail.com', 'mu2Wil', 'Lee Sin Tian', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000010', '2', '1', 'lst2@gmail.com', 'mu2Wil', 'Lee Sin Tian', 'Aenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.\n\nCurabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000011', '1', '1', 'tjr1@gmail.com', 'mu2Wil', 'Tan Jun Rong', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000012', '2', '1', 'tjr2@gmail.com', 'mu2Wil', 'Tan Jun Rong', 'Curabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000013', '2', '1', 'ocotterrillc@walmart.com', 'H6Xv4Afp2h', 'Orin Cotterrill', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000014', '1', '1', 'icadogand@springer.com', 'JdqjwuNTsf', 'Ibrahim Cadogan', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000015', '2', '3', 'bvassiee@acquirethisname.com', '0h65FTBy1y2k', 'Bernardo Vassie', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000016', '3', '3', 'sbp3@gmail.com', 'mu2Wil', 'ST Engineering', 'At ST Engineering, we bring innovation and technology together to create real-world solutions for our customers. Our proven engineering expertise keeps the world\'s commercial aircraft flying safely, equips fighting forces to win on the battlefield and prepares cities for a smarter and more sustainable future. As a global technology, defence, engineering group, we know what it takes to solve real-world problems and help you achieve a competitive edge.', 'https://bpsim.synology.me/mu2Wil/logo/STEngineering.png', '1000000013'),
('1000000017', '3', '2', 'aa3@gmail.com', 'mu2Wil', 'STanislaw Comino', 'Etiam vel augue. Vestibulum rutrum rutrum neque. Aenean auctor gravida sem.\n\nPraesent id massa id nisl venenatis lacinia. Aenean sit amet justo. Morbi ut odio.', 'http://dummyimage.com/152x230.png/cc0000/ffffff', '1000000015'),
('1000000018', '3', '1', 'txy3@gmail.com', 'mu2Wil', 'Kunze-Schuppe', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'http://dummyimage.com/178x196.bmp/ff4444/ffffff', '1000000001'),
('1000000019', '3', '0', 'syh3@gmail.com', 'mu2Wil', 'Tromp, Murray and Gottlieb', 'Phasellus in felis. Donec semper sapien a libero. Nam dui.\n\nProin leo odio, porttitor id, consequat in, consequat ut, nulla. Sed accumsan felis. Ut at dolor quis odio consequat varius.', 'http://dummyimage.com/178x147.png/cc0000/ffffff', '1000000011'),
('1000000020', '3', '1', 'lst3@gmail.com', 'mu2Wil', 'Murphy, Padberg and Oberbrunner', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'http://dummyimage.com/140x158.png/dddddd/000000', '1000000015'),
('1000000021', '3', '0', 'tjr3@gmail.com', 'mu2Wil', 'Ziemann Group', 'Integer ac leo. Pellentesque ultrices mattis odio. Donec vitae nisi.', 'http://dummyimage.com/173x223.bmp/5fa2dd/ffffff', '1000000015'),
('1000000022', '3', '2', 'sgutkowski7@webnode.com', 'XaW1rFX', 'Hettinger-Feeney', 'In hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'http://dummyimage.com/240x187.jpg/cc0000/ffffff', '1000000007'),
('1000000023', '3', '0', 'sgutkowski8@webnode.com', 'sXcnJTKx', 'Leannon-Beer', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'http://dummyimage.com/238x123.png/ff4444/ffffff', '1000000009'),
('1000000024', '3', '1', 'ekerluke8@bloomberg.com', 'kKmnYfzUHFA', 'Effertz, Kerluke and Towne', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'http://dummyimage.com/241x136.bmp/dddddd/000000', '1000000004'),
('1000000025', '3', '2', 'sgutkowski9@webnode.com', 'ulVh0nLo', 'Grady-Bernier', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'http://dummyimage.com/242x137.jpg/cc0000/ffffff', '1000000014'),
('1000000026', '3', '0', 'ncaspera@simplemachines.org', 'A1Z2Sc', 'Nolan, Casper and Walsh', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'http://dummyimage.com/232x228.png/dddddd/000000', '1000000002'),
('1000000027', '3', '1', 'dandb@webeden.co.uk', 'XYiEJLXeIg', 'Durgan and Sons', 'Cras non velit nec nisi vulputate nonummy. Maecenas tincidunt lacus at velit. Vivamus vel nulla eget eros elementum pellentesque.\n\nQuisque porta volutpat erat. Quisque erat eros, viverra eget, congue eget, semper rutrum, nulla. Nunc purus.', 'http://dummyimage.com/245x162.jpg/cc0000/ffffff', '1000000010'),
('1000000028', '3', '2', 'mandc@jigsy.com', 'GsdtkrF', 'Macejkovic and Sons', 'Phasellus sit amet erat. Nulla tempus. Vivamus in felis eu sapien cursus vestibulum.\n\nProin eu mi. Nulla ac enim. In tempor, turpis nec euismod scelerisque, quam turpis adipiscing lorem, vitae mattis nibh ligula nec sem.', 'http://dummyimage.com/228x180.jpg/dddddd/000000', '1000000003'),
('1000000029', '3', '0', 'gcorkeryd@github.com', 'Bs1uKkC5wB', 'Graham, Corkery and Thiel', 'Pellentesque at nulla. Suspendisse potenti. Cras in purus eu magna vulputate luctus.', 'http://dummyimage.com/103x182.jpg/cc0000/ffffff', '1000000002'),
('1000000030', '3', '0', 'bkleine@multiply.com', 'Xpyi268UXcNj', 'Bins, Klein and Halvorson', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.\n\nAenean lectus. Pellentesque eget nunc. Donec quis orci eget orci vehicula condimentum.', 'http://dummyimage.com/131x110.jpg/dddddd/000000', '1000000014'),
('1000000031', '4', '1', 'sbp4@gmail.com', 'mu2Wil', 'Sim Boon Pin', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.\n\nMaecenas tristique, est et tempus semper, est quam pharetra magna, ac consequat metus sapien ut nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Mauris viverra diam vitae quam. Suspendisse potenti.', 'https://fakeface.rest/thumb/view', '1000000002'),
('1000000032', '4', '1', 'aa4@gmail.com', 'mu2Wil', 'Audrey Ang Yu Min', 'Praesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.\n\nMorbi porttitor lorem id ligula. Suspendisse ornare consequat lectus. In est risus, auctor sed, tristique in, tempus sit amet, sem.', 'https://fakeface.rest/thumb/view', '1000000006'),
('1000000033', '4', '1', 'txy4@gmail.com', 'mu2Wil', 'Teh Xiang Yuan', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.\n\nMauris enim leo, rhoncus sed, vestibulum sit amet, cursus id, turpis. Integer aliquet, massa id lobortis convallis, tortor risus dapibus augue, vel accumsan tellus nisi eu orci. Mauris lacinia sapien quis libero.', 'https://fakeface.rest/thumb/view', '1000000014'),
('1000000034', '4', '1', 'syh4@gmail.com', 'mu2Wil', 'Shi Yuanhang', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'https://fakeface.rest/thumb/view', '1000000014'),
('1000000035', '4', '1', 'lst4@gmail.com', 'mu2Wil', 'Lee Sin Tian', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000036', '4', '1', 'tjr4@gmail.com', 'mu2Wil', 'Tan Jun Rong', 'Fusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000037', '4', '1', 'vvittore6@usnews.com', 'haJFjtv', 'Veronique Vittore', 'Duis bibendum. Morbi non quam nec dui luctus rutrum. Nulla tellus.', 'https://fakeface.rest/thumb/view', '1000000015'),
('1000000038', '4', '1', 'tmoneypenny7@xing.com', 'znBxUVf1u', 'Tamarra Moneypenny', 'Morbi non lectus. Aliquam sit amet diam in magna bibendum imperdiet. Nullam orci pede, venenatis non, sodales sed, tincidunt eu, felis.\n\nFusce posuere felis sed lacus. Morbi sem mauris, laoreet ut, rhoncus aliquet, pulvinar sed, nisl. Nunc rhoncus dui vel sem.', 'https://fakeface.rest/thumb/view', '1000000015'),
('1000000039', '4', '1', 'ktanswell8@blog.com', 'FjX8mO2bUmk', 'Katherine Tanswell', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'https://fakeface.rest/thumb/view', '1000000006'),
('1000000040', '4', '1', 'tfennelow9@networkadvertising.org', 'y2d2nPd5Iys', 'Tera Fennelow', 'Duis consequat dui nec nisi volutpat eleifend. Donec ut dolor. Morbi vel lectus in quam fringilla rhoncus.', 'https://fakeface.rest/thumb/view', '1000000014'),
('1000000041', '4', '1', 'lmellhuisha@marriott.com', 'mU2o47QwuDe', 'Lawrence Mellhuish', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'https://fakeface.rest/thumb/view', '1000000008'),
('1000000042', '4', '1', 'grolinsonb@goo.ne.jp', 'mLKK2MQjAT3', 'Garrott Rolinson', 'Cras mi pede, malesuada in, imperdiet et, commodo vulputate, justo. In blandit ultrices enim. Lorem ipsum dolor sit amet, consectetuer adipiscing elit.\n\nProin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'https://fakeface.rest/thumb/view', '1000000008'),
('1000000043', '4', '1', 'cmckeneyc@dmoz.org', '3wFBlbLSuEc', 'Callida McKeney', 'In congue. Etiam justo. Etiam pretium iaculis justo.\n\nIn hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.', 'https://fakeface.rest/thumb/view', '1000000002'),
('1000000044', '4', '1', 'hbonefantd@comsenz.com', 'M0cPdZACdr', 'Harwilll Bonefant', 'In hac habitasse platea dictumst. Etiam faucibus cursus urna. Ut tellus.\n\nNulla ut erat id mauris vulputate elementum. Nullam varius. Nulla facilisi.', 'https://fakeface.rest/thumb/view', '1000000007'),
('1000000045', '4', '1', 'tbladee@acquirethisname.com', 'w0TfpETlpBa', 'Terri-jo Blade', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.', 'https://fakeface.rest/thumb/view', '1000000011'),
('1000000046', '4', '1', 'aabbsf@sbwire.com', '7N87lRc', 'Antonietta Abbs', 'Nullam porttitor lacus at turpis. Donec posuere metus vitae ipsum. Aliquam non mauris.', 'https://fakeface.rest/thumb/view', '1000000012'),
('1000000047', '4', '1', 'wahmadg@salon.com', '5M9gwcz', 'Windy Ahmad', 'Maecenas ut massa quis augue luctus tincidunt. Nulla mollis molestie lorem. Quisque ut erat.\n\nCurabitur gravida nisi at nibh. In hac habitasse platea dictumst. Aliquam augue quam, sollicitudin vitae, consectetuer eget, rutrum at, lorem.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000048', '4', '1', 'sswepstoneh@forbes.com', 'MZiQljZaqy11', 'Sunshine Swepstone', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.\n\nSed ante. Vivamus tortor. Duis mattis egestas metus.', 'https://fakeface.rest/thumb/view', '1000000011'),
('1000000049', '4', '1', 'gpurseri@va.gov', 'CUcHZUbj1N3', 'Giacopo Purser', 'Curabitur in libero ut massa volutpat convallis. Morbi odio odio, elementum eu, interdum eu, tincidunt in, leo. Maecenas pulvinar lobortis est.', 'https://fakeface.rest/thumb/view', '1000000004'),
('1000000050', '4', '1', 'bpallaschj@netscape.com', 'tHUebF', 'Brier Pallasch', 'Aliquam quis turpis eget elit sodales scelerisque. Mauris sit amet eros. Suspendisse accumsan tortor quis turpis.', 'https://fakeface.rest/thumb/view', '1000000008'),
('1000000051', '4', '1', 'aheathwoodk@mapquest.com', 'R4s2VWlVHGil', 'Audrye Heathwood', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.\n\nIn congue. Etiam justo. Etiam pretium iaculis justo.', 'https://fakeface.rest/thumb/view', '1000000011'),
('1000000052', '4', '1', 'cstickfordl@seesaa.net', 'zx8wC2Qy', 'Candi Stickford', 'Sed ante. Vivamus tortor. Duis mattis egestas metus.\n\nAenean fermentum. Donec ut mauris eget massa tempor convallis. Nulla neque libero, convallis eget, eleifend luctus, ultricies eu, nibh.', 'https://fakeface.rest/thumb/view', '1000000008'),
('1000000053', '4', '1', 'bgallandrem@state.tx.us', 'f8YwXNwjw7', 'Bernard Gallandre', 'Maecenas leo odio, condimentum id, luctus nec, molestie sed, justo. Pellentesque viverra pede ac diam. Cras pellentesque volutpat dui.', 'https://fakeface.rest/thumb/view', '1000000012'),
('1000000054', '4', '1', 'agrendonn@51.la', 'kUB4ZSF', 'Annnora Grendon', 'Sed sagittis. Nam congue, risus semper porta volutpat, quam pede lobortis ligula, sit amet eleifend pede libero quis orci. Nullam molestie nibh in lectus.', 'https://fakeface.rest/thumb/view', '1000000011'),
('1000000055', '4', '1', 'lgibsono@indiatimes.com', 'XxXSPBrB', 'Leona Gibson', 'Integer tincidunt ante vel ipsum. Praesent blandit lacinia erat. Vestibulum sed magna at nunc commodo placerat.\n\nPraesent blandit. Nam nulla. Integer pede justo, lacinia eget, tincidunt eget, tempus vel, pede.', 'https://fakeface.rest/thumb/view', '1000000001'),
('1000000056', '4', '1', 'skonertp@oaic.gov.au', 'TLZGurX', 'Samuele Konert', 'Nullam sit amet turpis elementum ligula vehicula consequat. Morbi a ipsum. Integer a nibh.', 'https://fakeface.rest/thumb/view', '1000000006'),
('1000000057', '4', '1', 'tgolsonq@yelp.com', 'lpuvzmPXs', 'Torrance Golson', 'Vestibulum ac est lacinia nisi venenatis tristique. Fusce congue, diam id ornare imperdiet, sapien urna pretium nisl, ut volutpat sapien arcu sed augue. Aliquam erat volutpat.', 'https://fakeface.rest/thumb/view', '1000000003'),
('1000000058', '4', '1', 'bbarensr@elpais.com', '68P6d3EXr', 'Berkley Barens', 'Curabitur at ipsum ac tellus semper interdum. Mauris ullamcorper purus sit amet nulla. Quisque arcu libero, rutrum ac, lobortis vel, dapibus at, diam.', 'https://fakeface.rest/thumb/view', '1000000012'),
('1000000059', '4', '1', 'tbowhays@irs.gov', 'V32LuZwy', 'Tabb Bowhay', 'Duis bibendum, felis sed interdum venenatis, turpis enim blandit mi, in porttitor pede justo eu massa. Donec dapibus. Duis at velit eu est congue elementum.\n\nIn hac habitasse platea dictumst. Morbi vestibulum, velit id pretium iaculis, diam erat fermentum justo, nec condimentum neque sapien placerat ante. Nulla justo.', 'https://fakeface.rest/thumb/view', '1000000014'),
('1000000060', '4', '1', 'scominot@bbb.org', 'LMiMqGrn', 'Stanislaw Comino', 'Proin interdum mauris non ligula pellentesque ultrices. Phasellus id sapien in sapien iaculis congue. Vivamus metus arcu, adipiscing molestie, hendrerit at, vulputate vitae, nisl.', 'https://fakeface.rest/thumb/view', '1000000007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ADMINISTRATOR`
--
ALTER TABLE `ADMINISTRATOR`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserFK2` (`UserID`);

--
-- Indexes for table `APPLICANT`
--
ALTER TABLE `APPLICANT`
  ADD PRIMARY KEY (`ApplicantID`),
  ADD KEY `JobFK` (`JobID`),
  ADD KEY `UserFK5` (`UserID`);

--
-- Indexes for table `CASEQ`
--
ALTER TABLE `CASEQ`
  ADD PRIMARY KEY (`CaseID`),
  ADD KEY `UserFK6` (`SubmittedBy`);

--
-- Indexes for table `CATEGORY`
--
ALTER TABLE `CATEGORY`
  ADD PRIMARY KEY (`CategoryID`),
  ADD UNIQUE KEY `CategoryAK1` (`CategoryName`);

--
-- Indexes for table `EMPLOYER`
--
ALTER TABLE `EMPLOYER`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserFK3` (`UserID`);

--
-- Indexes for table `JOB`
--
ALTER TABLE `JOB`
  ADD PRIMARY KEY (`JobID`),
  ADD KEY `CategoryFK` (`CategoryID`),
  ADD KEY `UserFK8` (`JobPublisher`);

--
-- Indexes for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `UserFK4` (`UserID`);

--
-- Indexes for table `TESTIMONIAL`
--
ALTER TABLE `TESTIMONIAL`
  ADD PRIMARY KEY (`TestimonialID`),
  ADD KEY `UserFK9` (`SubmittedBy`);

--
-- Indexes for table `WILUSER`
--
ALTER TABLE `WILUSER`
  ADD PRIMARY KEY (`UserID`),
  ADD UNIQUE KEY `UserAK1` (`UserEmail`),
  ADD KEY `CreatorFK` (`CreatedBy`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `ADMINISTRATOR`
--
ALTER TABLE `ADMINISTRATOR`
  ADD CONSTRAINT `UserFK2` FOREIGN KEY (`UserID`) REFERENCES `WILUSER` (`UserID`);

--
-- Constraints for table `APPLICANT`
--
ALTER TABLE `APPLICANT`
  ADD CONSTRAINT `JobFK` FOREIGN KEY (`JobID`) REFERENCES `JOB` (`JobID`),
  ADD CONSTRAINT `UserFK5` FOREIGN KEY (`UserID`) REFERENCES `STUDENT` (`UserID`);

--
-- Constraints for table `CASEQ`
--
ALTER TABLE `CASEQ`
  ADD CONSTRAINT `UserFK6` FOREIGN KEY (`SubmittedBy`) REFERENCES `WILUSER` (`UserID`);

--
-- Constraints for table `EMPLOYER`
--
ALTER TABLE `EMPLOYER`
  ADD CONSTRAINT `UserFK3` FOREIGN KEY (`UserID`) REFERENCES `WILUSER` (`UserID`);

--
-- Constraints for table `JOB`
--
ALTER TABLE `JOB`
  ADD CONSTRAINT `CategoryFK` FOREIGN KEY (`CategoryID`) REFERENCES `CATEGORY` (`CategoryID`),
  ADD CONSTRAINT `UserFK8` FOREIGN KEY (`JobPublisher`) REFERENCES `EMPLOYER` (`UserID`);

--
-- Constraints for table `STUDENT`
--
ALTER TABLE `STUDENT`
  ADD CONSTRAINT `UserFK4` FOREIGN KEY (`UserID`) REFERENCES `WILUSER` (`UserID`);

--
-- Constraints for table `TESTIMONIAL`
--
ALTER TABLE `TESTIMONIAL`
  ADD CONSTRAINT `UserFK9` FOREIGN KEY (`SubmittedBy`) REFERENCES `WILUSER` (`UserID`);

--
-- Constraints for table `WILUSER`
--
ALTER TABLE `WILUSER`
  ADD CONSTRAINT `CreatorFK` FOREIGN KEY (`CreatedBy`) REFERENCES `ADMINISTRATOR` (`UserID`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;

