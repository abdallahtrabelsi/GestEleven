-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 07, 2024 at 11:31 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.1.17

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_admin`
--

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id_pl` int(11) NOT NULL,
  `image_pl` varchar(255) DEFAULT NULL,
  `name_pl` varchar(255) DEFAULT NULL,
  `datebirthday` varchar(255) DEFAULT NULL,
  `age` varchar(255) DEFAULT NULL,
  `height` varchar(255) DEFAULT NULL,
  `nationality` varchar(255) DEFAULT NULL,
  `foot` varchar(255) DEFAULT NULL,
  `logo_equipe` varchar(255) DEFAULT NULL,
  `logo_equipe2` text DEFAULT NULL,
  `logo_equipe3` text DEFAULT NULL,
  `video1` text DEFAULT NULL,
  `video2` text DEFAULT NULL,
  `video3` text DEFAULT NULL,
  `currenttime` varchar(255) DEFAULT NULL,
  `transferthistory` varchar(255) DEFAULT NULL,
  `season` varchar(255) DEFAULT NULL,
  `datee` varchar(255) DEFAULT NULL,
  `joinedd` varchar(255) DEFAULT NULL,
  `leftt` varchar(255) DEFAULT NULL,
  `mv` varchar(255) DEFAULT NULL,
  `fee` varchar(255) DEFAULT NULL,
  `seasontwo` varchar(255) DEFAULT NULL,
  `datetwo` varchar(255) DEFAULT NULL,
  `joinedtwo` varchar(255) DEFAULT NULL,
  `lefttwo` varchar(255) DEFAULT NULL,
  `mvtwo` varchar(255) DEFAULT NULL,
  `feetwo` varchar(255) DEFAULT NULL,
  `usernamepl` varchar(255) DEFAULT NULL,
  `about` varchar(255) DEFAULT NULL,
  `startingeleven` varchar(255) DEFAULT NULL,
  `minutess` varchar(255) DEFAULT NULL,
  `goalparticipation` varchar(255) DEFAULT NULL,
  `shotstaken` varchar(255) DEFAULT NULL,
  `image_logo` varchar(255) DEFAULT NULL,
  `position` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id_pl`, `image_pl`, `name_pl`, `datebirthday`, `age`, `height`, `nationality`, `foot`, `logo_equipe`, `logo_equipe2`, `logo_equipe3`, `video1`, `video2`, `video3`, `currenttime`, `transferthistory`, `season`, `datee`, `joinedd`, `leftt`, `mv`, `fee`, `seasontwo`, `datetwo`, `joinedtwo`, `lefttwo`, `mvtwo`, `feetwo`, `usernamepl`, `about`, `startingeleven`, `minutess`, `goalparticipation`, `shotstaken`, `image_logo`, `position`) VALUES
(1, 'ousman.webp', 'Oussmane camara', '06/03/2003', '20', '1.97', 'France', 'Droit', 'sco.png', 'paris.png', 'paris.png', 'video3.mp4', 'video2.mp4', 'video1.mp4', 'Angers SCO', 'In June 2020, Ousmane Camara joined t​he professional squad and in November 2020, he signed his first professional contract.', '22/23', 'jul 31 , 2023', 'Angers SCO', 'Paris FC', '€2.00m', '€2.00m', '21/22', 'jul 1, 2020', '​Paris FC', '​Paris FC B ', '€3.60m', '€6.30m', 'Oussmane', 'Born in the 12th arrondissement of Paris on 6 March 2003, Ousmane Camara joined Paris FC in 2012. Also capable of playing in central defence, the defensive midfielder did all his training at the Porte de Montreuil before joining the Academy. In June 2020,', '88%', '70%', '21%', '45%', 'oussmane-camara2.png', 'Central defender'),
(92, '284555.png', 'Alexis  Guend​ouz', '26/01/1996', '27', '1.91', 'Algerie', 'Gauche', '13365.png', '6772.png', '618.png', 'alexis video.mp4', 'alexis 2.mp4', 'alexis 3.mp4', 'CR Belouizdad ', 'Alexis Guendouz (France) currently plays for Ligue 1 club CR Belouizdad. Alexis Guendouz is 27 years old (26/01/1996) and he is 189 cm tall. Alexis Guendouz jersey number is 1', '22/23', 'Juil  13 , 2021', 'CR Belouizdad', 'USM Alger', '€250k', 'Tr.libre', '20/21', 'Sep  23 , 2020', 'USM Alger', 'Saint-Etienne', '€300k', '€100k', 'Alexis', 'Alexis Guendouz born 26 January 1996 is a professional footballer who plays as a goalkeeper for CR Belouizdad. Born in France, he represents Algeria at international level.', '67%', '67%', '0%', '-', 'Alexis.png', 'GoalKeeper'),
(93, '651913a451f1a4c0fa5c9a81855a0b38.webp', 'Ali Dembele', '05/01/2004', '19', '1.84', 'France', 'Droit', '607.png', '416.png', '416.png', '', '', '', 'Venezia FC', 'Dembélé switched to Venezia on loan in September 2023 from Troyes II, for whom he has made three league appearances in total', '23/24', 'Sep 1 , 2023', 'Venezia', 'Torino', '€200k', 'Pret', '19/20', 'Aout 28 , 2019', 'Torino', 'Torino U19', '€200k', '', 'Dembele', 'Dembélé last played in the competition on November 25 for Venezia against Bari. He found the back of the net in that match for his club in their 3-0 success. He opened his account for the 2023/2024 season with that goal - as well as registering his first ', '0%', '6%', '6%', '', 'ali-dembele.png', 'Right Back'),
(94, '437049.png', 'Bilal Benkhedim', '20/04/2001', '22', '1.75', 'Algerie', 'Droit', '5499.png', '268631.png', 'default.png', 'bilel.mp4', 'bilel2.mp4', 'bilel3.mp4', 'FC Stade-Lausanne-Ouchy II', 'On 13 February 2018, Benkhedim signed his first professional contract with Saint-Etienne.He made his professional debut with Saint-Étienne in a 0–0 Ligue 1 tie with Montpellier on 24 November 2019.On 7 December 2022, Benkhedim signed with Le Puy.', '23/24', 'Aout   31 , 2023', 'Stade-Lausanne', 'Le Puy Foot', '€200k', 'Tr.libre', '22/23', 'dec 7 , 2022', 'Le Puy Foot', 'Sans club', '€400k', '', 'Bilal', 'Bilal Benkhedim (born 20 April 2001) is a French professional footballer who plays as a midfielder.', '', '', '', '', 'BilalBenkhedim.png', 'Attacking Midfielder'),
(95, 'FCLausanneSport_Brighton_Labeau_Transparent.webp', 'Brighton Labeau', '01/01/1996', '27', '1.83', 'Martinique', 'Droit', '527.png', 'FC_Stade_Lausanne_Ouchy-en.png', '3948.png', 'bringhton.mp4', 'bringhton2.mp4', 'bringhton3.mp4', 'FC Laussane-Sport ', 'The Martinican striker was the misfortune of his former club. The former SLO player scored the only goal of the derby on Sunday and allowed LS to claim a sixth match without defeat (1-0).', '22/23', 'Juil  1 , 2022', 'Lausanne-Sport', 'Stade-Lausanne', '€400k', '', '21/22', 'Aout  3, 2021', 'Stade-Lausanne', 'Union SG', '€400k', 'Tr.libre', 'Brighton', 'Brighton Labeau (born 1 January 1996) is a professional football who plays as a forward for Swiss Super League club Lausanne-Sport Born in metropolitan France, he plays for the Martinique national team.', '67%', '64%', '43%', '55%', '09.png', 'Center Forward'),
(96, '2919501.png', 'Dylan Ouedraogo', '22/07/1998', '25', '1.85', 'Borkina Faso', 'Gauche', '5499.png', '2727.png', '429.png', 'dylan.mp4', 'dylan2.mp4', 'dylan3.mp4', 'FC Stade-Lausanne-Ouchy', 'Dylan Ouédraogo (born 22 July 1998) is a professional footballer who plays as a centre back or a left back for Stade Lausanne Ouchy. Born in France, he plays for the Burkina Faso national team .', '23/24', 'Aout 8 , 2023', 'Stade-Lausanne', 'OH Leuven', '€450k', 'Tr.libre ', '19/20', 'Aout 28 , 2019', 'OH Leuven', 'Apol Limassol', '€750k', '€250k', 'Dylan', 'Dylan Ouédraogo (born 22 July 1998) is a professional footballer who plays as a centre back or a left back for Stade Lausanne Ouchy. Born in France, he plays for the Burkina Faso national team.', '18%', '17%', '0%', '22%', 'DylanOuedraogo.png', 'Central defender'),
(97, '0.png', 'Giovani Bamba', '02/07/1999', '24', '1.92', 'Angola', 'Droit', '5499.png', 'default.png', '5507.png', 'Vidosanstitre7.mp4', 'Vidosanstitre9.mp4', 'Vidosanstitre8.mp4', 'FC Stade-Lausanne-Ouchy', 'Bamba was called up to the Angola national team for the 2021 Africa Cup of Nations qualification.', '20/21', 'Sep 25 , 2020', 'Stade-Lausanne', 'Sans Club', '€150k', '', '16/17', 'Juil  1 , 2016', 'Sans Club', 'Stade Nyonnais', '€150k', '', 'Bamba', 'Giovani Bamba (born 2 July 1999) is a footballer who plays as a midfielder for Stade Lausanne Ouchy. Born in Switzerland, he has been called up to represent Angola internationally.', '57%', '49%', '6%', '67%', 'Giovanibamba.png', 'Defensive Midfielder'),
(98, '41A4GX3alNe0ZByGwx58eskHPyiuMCuy (1).png', 'Lys Mousset', '08/02/1996', '27', '1.86', 'France', 'Droit', '801.png', '1160.png', '801.png', 'VidosanstitreRaliseavecClipchamp52.mp4', 'VidosanstitreRaliseavecClipchamp53.mp4', 'VidosanstitreRaliseavecClipchamp54.mp4', 'VfL Bochum', 'On 15 August 2022, Mousset signed a two-year contract with VfL Bochum in Germany. In January 2023, Mousset was suspended from the team.He was loaned out to Nîmes on 31 January.', '22/23', 'Janv  31 , 2023', 'VfL Bochum', 'Nimes Olympique', '€1.00m', 'Fin de pret', '20/21', 'Sep  23 , 2020', 'Nimes Olympique', 'VfL Bochum', '€1.50m', 'Pret', 'Mousset', 'Lys Émilien Mousset (born 8 February 1996) is a French professional footballer who plays as a forward for Bundesliga club VfL Bochum.', '', '', '', '', '41A4GX3alNe0ZByGwx58eskHPyiuMCuy.png', 'Center Forward'),
(99, 'sl8ct7slecbzdb1b7ruo (1).png', 'Monsef Bakrar', '13/01/2001', '22', '1.83', 'Algerie', '', 'New_York_City_FC.svg.png', '9991.png', '5507.png', 'Vidosanstitre5-1.mp4', 'Vidosanstitre6-1.mp4', 'Vidosanstitre7-1.mp4', 'New York City FC', 'On July 20, 2022, Bakrar signed a one-year contract with Istra. On 11 July 2023, Bakrar signed a 3-and-a-half year deal with Major League Soccer side New York City FC', '23/24', 'juil  11 , 2023', 'New York City', 'NK Istra', '€1.00m', '€2.00m', '22/23', 'Juil  26 , 2022', 'NK Istra', 'ES Setif ', '€325k', 'Tr.libre', 'Bakrar', 'Monsef Bakrar (born January 13, 2001 in Sétif) is an Algerian professional footballer who plays as a forward for New York City FC in Major League Soccer.', '91%', '77%', '27%', '72%', 'MONCEFNYFC.png', 'Center Forward'),
(100, '361280.png', 'Patrick Burner', '11/04/1996', '27', '1.70', 'Martinique', 'Droit', '1160.png', '417.png', '417.png', 'Vidosanstitre.mp4', 'Vidosanstitre1.mp4', 'Vidosanstitre2.mp4', 'Nimes Olympique', 'Burner was called up to represent Martinique team at the 2021 CONCACAF Gold Cup. He debuted in a 4–1 Gold Cup loss to Canada on 11 July 2021', '20/21', 'Sep 25 , 2020', 'Nimes Olympique', 'OGC Nice', '€3.20m', '€1.50m', '16/17', 'Juil  1 , 2016', 'OGC Nice', 'OGC Nice B', '', '', 'Patrick', 'Born in Fort-de-France in 1996, Burner started his football career with Nice\'s youth teams.', '71%', '71%', '21%', '62%', 'patrickburner.png', 'Right Back'),
(101, '00213.png', 'Rudy Kohon', '23/05/2004', '19', '1.87', 'France', 'Droit', '10846.png', '10846.png', 'default.png', 'rudy.mp4', 'rudy2.mp4', 'rudy3.mp4', 'ESTAC Troyes B', 'Rudy Kohon (France) currently plays for National 3: Group I club Troyes II. Rudy Kohon is 19 years old (23/05/2004) and he is tall. Rudy Kohon jersey number is 33.', '22/23', 'Juil   1 , 2022', 'Troyes B', '​Troyes U19', '€1.00k', '', '20/21', 'Juil  1 , 2021', 'Troyes U19', '​Troyes U17', '€1.50m', 'Pret', 'Rudy', 'Rudy Kohon is a 19-year-old Football player born on 2004-05-23, in Paris, France. Plays as Defender in Troyes, France. Weights 74 kg and is 187 cm tall.', '38%', '34%', '0%', '', '08.png', 'Central defender'),
(102, 'Capture__p61f4r1 (2).png', 'Rezki  Hamroune', '10/03/1996', '27', '1.77', 'Algerie', 'Gauche', '470581.png', '133661.png', '693931.png', 'VidosanstitreRaliseavecClipchamp39.mp4', 'VidosanstitreRaliseavecClipchamp40.mp4', 'VidosanstitreRaliseavecClipchamp41.mp4', 'Pharco', 'In 2021, he joined Egyptian Premier League side Pharco on a free transfer from JS Kabylie. His contract is set to end in 2024.', '21/22', 'Aout  18 , 2021', 'Pharco FC', 'JS Kabylie', '€600k', 'Tr.libre', '22/23', 'Juil  26 , 2022', 'JS Kabylie', 'St-Apollinaire', '', '', 'Rezki', 'Rezki Hamroune born March 10, 1996 is an Algerian professional footballer who plays as a right winger for Pharco in the Egyptian Premier League.', '29%', '24%', '17%', '', 'RezkiHamroune.png', 'Right Winger'),
(103, 'WADHAHZAIDI1 (1).png', 'Wadhah Zaidi', '29/09/1998', '25', '1.81', 'Tunisie', 'Gauche', '581.png', '30507.png', '250.png', 'Vidosanstitre9-1.mp4', 'Vidosanstitre10-1.mp4', 'Vidosanstitre12-1.mp4', 'CS Sfaxien ', 'At the end of his contract with Ben Guerdane\'s Union Sportive, young striker Wadhah Zaidi has just opted for Club Sportif Sfaxien (CSS). He has just signed a 3-season contract for the flagship club in southern Tunisia.', '23/24', 'Juil  07 , 2023', 'CS Sfaxien', 'US Ben Guerdane', '€550k', 'Tr.libre', '21/22', 'Aout  05 , 2021', 'US Ben Guerdane', 'ES Sahel', '€75k', 'Tr.libre', 'Wadhah', 'Wadhah Zaidi is 25 years old and a footballer from Tunesië who usually plays as a striker. The last match Wadhah played was CS Sfaxien - US Monastirienne on 2024-01-03.', '42%', '39%', '0%', '', 'WADHAHZAIDI2.png', 'Left Winger');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_invit`
--

CREATE TABLE `tbl_invit` (
  `id_invit` int(11) NOT NULL,
  `nameinvit` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobileinvit` varchar(255) DEFAULT NULL,
  `expiration` timestamp NULL DEFAULT NULL,
  `id_pl` int(11) DEFAULT NULL,
  `name_pl` varchar(255) DEFAULT NULL,
  `id_pl2` int(11) DEFAULT NULL,
  `name_pl2` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_invit`
--

INSERT INTO `tbl_invit` (`id_invit`, `nameinvit`, `email`, `password`, `mobileinvit`, `expiration`, `id_pl`, `name_pl`, `id_pl2`, `name_pl2`) VALUES
(128, 'abdallah', 'abdallahtrabelsi121212@gmail.com', 'c8b35fc585169b35db5e959db4b2a25d0e888155', '22155898', '2024-02-17 17:06:00', 1, NULL, 92, NULL),
(154, 'abdallah', 'webcos123@gmail.com', '85ad4ac59080273d767a47f1205ec91095d2c353', '22155898', '2024-03-08 15:44:00', 92, NULL, 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_roles`
--

CREATE TABLE `tbl_roles` (
  `id` int(11) NOT NULL COMMENT 'role_id',
  `role` varchar(255) DEFAULT NULL COMMENT 'role_text'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_roles`
--

INSERT INTO `tbl_roles` (`id`, `role`) VALUES
(1, 'Admin'),
(2, 'Editor'),
(3, 'User');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `mobile` varchar(25) DEFAULT NULL,
  `name_tm` varchar(255) DEFAULT NULL,
  `name_pl` varchar(255) DEFAULT NULL,
  `roleid` tinyint(4) DEFAULT NULL,
  `isActive` tinyint(4) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id`, `name`, `username`, `email`, `password`, `mobile`, `name_tm`, `name_pl`, `roleid`, `isActive`, `created_at`, `updated_at`) VALUES
(1, 'achref', 'achref', 'achref.nefzazoui@gmail.com', '3ea543d29ad3c1c09fcfbdda3f2f0617c50ab138', '54852854', '', 'Oussmane camara,Alexis  Guend​ouz,Ali Dembele,Bilal Benkhedim,Brighton Labeau,Dylan Ouedraogo,Giovani Bamba,Lys Mousset,Monsef Bakrar,Patrick Burner,Rudy Kohon,Rezki  Hamroune,Wadhah Zaidi', 1, 0, '2020-12-19 14:35:56', '2020-12-19 14:35:56'),
(110, 'abdallah', 'abdallah142', 'abdallahtrabelsi44444@gmail.com', '40b2753f0caeb2ce92242e9c9e2e62de41478e1e', '22155898', 'Team', 'Oussmane camara', 3, 0, '2024-01-11 10:16:20', '2024-01-11 10:16:20'),
(111, 'abdou', 'abdou', 'abdallahtrabelsi444444@gmail.com', '2de4665ebf34d195d32fbfff24f76ccd92a52309', '+21622155898', 'Team', 'bringhton', 3, 1, '2024-01-15 13:37:44', '2024-01-15 13:37:44');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id_tm` int(11) NOT NULL,
  `name_tm` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id_tm`, `name_tm`) VALUES
(1, 'team45'),
(2, 'team2'),
(4, 'team3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id_pl`);

--
-- Indexes for table `tbl_invit`
--
ALTER TABLE `tbl_invit`
  ADD PRIMARY KEY (`id_invit`);

--
-- Indexes for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id_tm`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id_pl` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=104;

--
-- AUTO_INCREMENT for table `tbl_invit`
--
ALTER TABLE `tbl_invit`
  MODIFY `id_invit` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=155;

--
-- AUTO_INCREMENT for table `tbl_roles`
--
ALTER TABLE `tbl_roles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT COMMENT 'role_id', AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id_tm` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
