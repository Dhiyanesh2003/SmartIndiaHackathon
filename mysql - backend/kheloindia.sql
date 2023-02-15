-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 26, 2022 at 02:15 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kheloindia`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(100) NOT NULL,
  `pass` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `pass`) VALUES
(1, 1),
(2, 2);

-- --------------------------------------------------------

--
-- Table structure for table `application_details`
--

CREATE TABLE `application_details` (
  `KID` int(100) NOT NULL,
  `id` int(100) NOT NULL,
  `orgname` varchar(100) NOT NULL,
  `doornum` varchar(10) NOT NULL,
  `streetname` varchar(100) NOT NULL,
  `locality` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL,
  `pincode` varchar(10) NOT NULL,
  `state` varchar(25) NOT NULL,
  `phnum` varchar(20) NOT NULL,
  `faxnum` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `projectname` varchar(100) NOT NULL,
  `deadline` date NOT NULL,
  `air_name` varchar(100) NOT NULL,
  `air_location` varchar(100) NOT NULL,
  `air_distance` varchar(10) NOT NULL,
  `air_dist_km` varchar(10) NOT NULL,
  `rail_name` varchar(100) NOT NULL,
  `rail_location` varchar(100) NOT NULL,
  `rail_distance` varchar(10) NOT NULL,
  `rail_dist_km` varchar(10) NOT NULL,
  `bus_name` varchar(100) NOT NULL,
  `bus_location` varchar(100) NOT NULL,
  `bus_distance` varchar(10) NOT NULL,
  `bus_dist_km` varchar(10) NOT NULL,
  `landowner` varchar(100) NOT NULL,
  `ready` varchar(100) NOT NULL,
  `utilities1` varchar(10) NOT NULL,
  `utilities2` varchar(10) NOT NULL,
  `utilities3` varchar(10) NOT NULL,
  `estimation` varchar(100) NOT NULL,
  `evidence` varchar(100) NOT NULL,
  `quotation` varchar(100) NOT NULL,
  `schematic_plan` varchar(100) NOT NULL,
  `centre_share` varchar(1000) NOT NULL,
  `scope` varchar(1000) NOT NULL,
  `plan` varchar(1000) NOT NULL,
  `methods` varchar(1000) NOT NULL,
  `facility` varchar(1000) NOT NULL,
  `oppurtinity` varchar(1000) NOT NULL,
  `no_of_centre` varchar(10) NOT NULL,
  `availability` varchar(1000) NOT NULL,
  `no_of_players` varchar(100) NOT NULL,
  `user_base` varchar(1000) NOT NULL,
  `need` varchar(1000) NOT NULL,
  `situation_disaster` varchar(1000) NOT NULL,
  `participation` varchar(1000) NOT NULL,
  `boost` varchar(1000) NOT NULL,
  `benefits` varchar(1000) NOT NULL,
  `gender_equality` varchar(1000) NOT NULL,
  `sports_category` varchar(100) NOT NULL,
  `acknowledgement` varchar(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `application_details`
--

INSERT INTO `application_details` (`KID`, `id`, `orgname`, `doornum`, `streetname`, `locality`, `district`, `pincode`, `state`, `phnum`, `faxnum`, `email`, `projectname`, `deadline`, `air_name`, `air_location`, `air_distance`, `air_dist_km`, `rail_name`, `rail_location`, `rail_distance`, `rail_dist_km`, `bus_name`, `bus_location`, `bus_distance`, `bus_dist_km`, `landowner`, `ready`, `utilities1`, `utilities2`, `utilities3`, `estimation`, `evidence`, `quotation`, `schematic_plan`, `centre_share`, `scope`, `plan`, `methods`, `facility`, `oppurtinity`, `no_of_centre`, `availability`, `no_of_players`, `user_base`, `need`, `situation_disaster`, `participation`, `boost`, `benefits`, `gender_equality`, `sports_category`, `acknowledgement`, `status`) VALUES
(1, 100001, 'BbcdAdpnqboz', 'j?/|', '3:;<2C:.:G', 'karapakkam', 'chennai', 'S=]]][{', 'Tamil Nadu', 'f|,, A.>BA>', '5RSTUV', 'Kk-qwksvFmyw', 'r{-::\'', '2022-08-17', '.VWX', '2]:;', 'M#$%', 's:<', '@| A', 'd456', 'V-+=', ' jl', '_HIJ', 's()_', 'i.?/', '@IK', 'q< ;_)', '{jPd', 'D2hv', '<pVj', 'b}6)', '-ijklm', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '>]];niehTWl;jnhmTmbhg;t3333x]iWY', 'VQQS^!70vy$S$x3z8v%4xC!7v9S-<<<<}Q!y1', '^cde', '3H<DE>', '7LBM/6IE>G', ']aShVcRg', '@D|AGJGRW', 'k*(((', '#Za', 'c&^', '!XY', '^de', '@LCCB', ':hXijPiXdc', 'Nv1p5rn6r', 'Cqrrwtvwpkv1', 'q*_;_-{?', ',aYhXYl', 'Athletic', 'FAACzuqtfixCfhpst2qjiljrjsyC6%%%%0Auik', 0),
(1, 100002, '#BQXON', 'E5#E', 'Ajeppiar nagar', 'chitlapakkam', 'chennai', '=ptttpn', 'Tamil Nadu', 'X\'<]}:{>[]', '5RVWSVWSUVV', 'p^&(N-]^=[k*;]', 'r).}', '2022-08-19', '5>|.EE< 4 EK.IE<K FE<C', '! IFKH', 'D@', 'T46', 'G5lktl', 'Ho6li3', 'J$', 'a!#', '$EIHFEGBF', '2\'>\',>:', 'qE', 'c#%', 'Cqypgf', 'E3iw', '7R/L', 'O#s7', 'a{5(', 'a;,<;<][;;<]', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 'wNNKJM', 'i^0@(<-@', 'x>/>:]/:', '7/,|N/C|B/F|B', '|cdfscldicld', 'X72736*273236@', 'R-', 'r\'<', 'G!', '1U', ',mrXWZpaVb', ',W>ZpaVb', '#BEUFAGXTIHJ', '\'UXnYTZfb', 'vD]:GC<;\'?', '4\'.L?</OK ', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 1),
(1, 100003, '{RSe', 'L%^', '5Q5N.I?M\'ED', 'cft', 'chennai', 'pHLLFJGJ', 'Tamil Nadu', 'vJMJJPMJPJJPJPJPJPJ', 'L(^#(#(#^#%^#(^', '(XIcbIbJKqLRFNQ$HTR', '7HD', '2020-02-05', '[PSiTOUaW', '#@UAMIL', 'Y\']:', 'q[:', 'FE1gsr', '@!T LHKI', '[tu', 'w>.', '@!LK', 'nm%[+}', 'A74', '4AC', 'Aowned', 'a{5(', 'R^v0', '$YES', '+hNb', 'I@#099#@909@99#90#9*9*', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 'c/>;', '?dXZgsjZ', '<aeaWVeW', '[ROShRWSVRZSV', 'Aefhuenfkenf', '%KFKGJVFKGFGJP', 'P)', 'd*&', '5Y', 'wJS', '6KP.,/N|> ', '^E%HXIDJ', 'b47+839}-!0@', 'k#^\'&@*=)', '^XIJaWLKMQ', 'b47+839}-!', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 2),
(1, 100004, '>Znm', '<yyx', 't:;s>)})/', 'hji', 'chennai', ';vzzzvt', 'Tamil Nadu', '6ZWTUTSWZVWTb', 'X{}[]:;<\'>\'<[', 'r?_P=;*}:m)\';', 'u[-,', '5202-05-05', 'Ss%!^vux$ytz6253M4', 'xF:;{</', 'P)', '0GI', '[iTOaWZ', 'k\'j@=)', '$a', 'Lvx', '6N|> FB', '6N|> ', '-l', 'q[:', 'U9&8yx', 'N@r6', '4O,I', 'e:9+', 'D2hv', ']spx', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '|3y', '@F BIULB', 'Ox2xts2t', 'l^#&\'^_&)^=&)', '7/|AN/G|D/G|', 'R1v1wz@v1wvwz6', 'zQ', 'Cqp', 'sI', 'f/', '%TYEDGWHCI', 'f8e![@7#', 'f8![@7#;}%$^', ':RUkVQWcY', 'i;%^>:*&(+', 'r)+ =({C|[', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 4),
(1, 100005, 'y>>...>', 'a<]]', 'sB= ', 'hb', 'kancheepuram', ':tutt', 'Tamil Nadu', '1QUSRONRV', 'H@!8@8@8', 'U2(\'17u36Pw97', 'Insu', '2022-08-05', '7O|,GC', '9Q8?I', '7XU', 'S35', '*ZKFLRN', '-JPR', 'pG', 'o{[', 'e}d6', 'o_?^-', '\'w', '5BD', 'c&{^76', ']mSg', '7R/L', '7R/L', '2M\'G', '5VUVSRSa', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 'qHHEDD', 't[_+;C>+', 'p{:{_):_', '9 ?AP EAD HAD', 'Gkln1ktlqktl', '{UPUQTfPUQPQTZ', '5U', '4ED', 'pF', '3S', 'Hz5kjm3nio', 'QsPv@wrx', '(HKaLGMdZONP', 'Z25_617#9', 'L7rs06utvz', '{NQgRMSjfU', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 4),
(1, 100006, '<kVjcR', '>xw', 'K&q9lp', 'uhuf', 'chennai', 'V[}}:}', 'Tamil Nadu', 'h///BB/|', 'qKIEFEME', '>mXleT5ZfTbe]Vhf', '|rcqjY', '2022-08-25', 'h:g9_', 'aZ-2$', 'mD', '8EG', 's=A{)}\'', 'Kpm6qlrxt', '=o', '|ik', 'Y4*5+6(8', 'Mro8snt', '*i', 'Pz2', '*SaRIH', '2M\'G', '2M\'G', 'O#s7', '0UAO', 'F0900', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 'nDEDD', 'Elfho1rh', 't:>:{=>{', '0A/BQAFBEAIBE', '<VWYlVeWbVeW', 'v<}<[;C}<[}[;?', ':tt', '7HG', '.y', '2S', 't|D+-{B}_[', '1:z\'I>],', 'Z25_617=)980', 'g9@]#8$)^', 'F1lm4zonpt', 'Kmp6qlr95t', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 5),
(1, 100007, '/XjXwlk', 'D!@', ']iRQR', 'gotham city', 'chennai', 'e?AA?,A', 'Tamil Nadu', 'wQMNJMQMNM', '#fcgfcdedcgded', 'p^]^B;:N-]^=[k*;]', '3:B:ODC', '2022-08-11', 'g{;09@]#8$)^', '}PjORhSNTZ', '*i', '(PR', '!CSD|EKGJH', 'Chxidjpl', 'B6', '2|A', 'e70}!6@*', '&UIWJb', '+n', '2|A', 'c&{^76', '.tZn', 'O#s7', '1L<F', 'W_1%', '>1wxt1xt', '8335OJFI,/M5|PC/|H?|5Udddda3J/ ', 'bWWY-&#^25)Y*-^_2_0^%Y]////,W&57', '2wwyID C]<GyG;.\'A]H?;iD ]ByOXXXXUwD<>', '|777636', 'Fmgip2si', 'W6062102', 'Mqnr7qvruqyru', 'd89!=8&9$8&9', '/gbgcfrbgcbcfl', 'e/|', 'Bpo', 'A5', '0dZ', 's/C-_=A{)}', 'FhEk1lgm', 'o&)?_^- .=+{', 'Xz3(4y5!7', '5M/|PLA BF', '/ZcsdYevrg', 'Athletic', 'XSSU*#9@x1^Uxz8!@)9214202!&U=>>>>;S#13', -2),
(1, 100008, '{eNd', 'b..??', 'w><', 'h hb', 'Kancheepuram', 'A6555', 'Tamil Nadu', 'zQTS', '>wxx12wtuu', 'Nsq{tznvyIp2z1', '/kbuq*dbk', '2022-09-07', '[PiOaZ', '/Ydegh', 'L^', '+TV', '>YZacde', '!CDEGH', 'K%', '2|A', 'a78$0#!U', 'u[];<', 'wN', 'Bln', 'R6$5vu', 'E3iw', 'C1gu', ':nTh', '+hNb', '0eaZ', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 'oF', 'Qxrt1#4t', '+SWSONWO', 'Rvsw@v1wzv4wz', 'w[];D[?]>[?]', 'z.;.<,G;.<;<,A', '@c', 'o:]', 'K$$', 'g/', '>lqWVYoZUa', 'Z2Y5_617', '{NQgRMSjfUTV', 'Lnq7rmsyu', 'i;%^>:*&(+', 'Wy2*3x4_&6', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', -3),
(1, 100009, '$ZOHO', '3XW', 'y[\':|<{A{EEF', 'chengalpattu', 'chennai', 'a\'<<,.<', 'Tamil Nadu', 'kEFCB|BEAB/', ' 3733', '*khEcYLpKQEMP#GSQ', '6RG G', '2022-08-25', 'Hmk', 'i@@', '(g', 'x,?', 'Kn', '!A', '8V', '+TV', 'Or', 'r_', 'yM', 'Oy1', 't,C>=+', 'c[7_', '\'qWk', '%ZFT', '&bHV', 'f ?\'B', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', '7224NIEH>?L4/OB?/G./4TccccX2I?|', 'U]{-]{-;', 'o-^*{/]*', 'V5951z91', '/bYcrbgcfbjcf', '<VWYlVeWbVeW', 'Clglhkwglhghkq', 'lC', '-WV', '#di', 'Z;', '_ZeKJMcNIO', 'GiFl2mhn', '9/AQB?CTPEDF', '>VYoZUagc', 'Z_67=)980$', 'n^(.)%_|,+', 'Athletic', '7224NIEH>?L4/OB?/G./4TccccX2I?|', -1);

-- --------------------------------------------------------

--
-- Table structure for table `inspector_details`
--

CREATE TABLE `inspector_details` (
  `id` int(100) NOT NULL,
  `pass` varchar(1000) NOT NULL,
  `district` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `inspector_details`
--

INSERT INTO `inspector_details` (`id`, `pass`, `district`) VALUES
(1, '1', 'chennai');

-- --------------------------------------------------------

--
-- Table structure for table `responses`
--

CREATE TABLE `responses` (
  `response` varchar(10000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user_login`
--

CREATE TABLE `user_login` (
  `user_id` int(100) NOT NULL,
  `pass` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_login`
--

INSERT INTO `user_login` (`user_id`, `pass`) VALUES
(1, '1'),
(2, '2');

-- --------------------------------------------------------

--
-- Table structure for table `weightage`
--

CREATE TABLE `weightage` (
  `id` int(100) NOT NULL,
  `weightage` int(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `weightage`
--

INSERT INTO `weightage` (`id`, `weightage`) VALUES
(100004, 90);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application_details`
--
ALTER TABLE `application_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `inspector_details`
--
ALTER TABLE `inspector_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_login`
--
ALTER TABLE `user_login`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `weightage`
--
ALTER TABLE `weightage`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
