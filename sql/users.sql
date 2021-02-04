-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Hôte : localhost:3306
-- Généré le : mer. 03 fév. 2021 à 22:55
-- Version du serveur :  5.7.24
-- Version de PHP : 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données : `sayna`
--

-- --------------------------------------------------------

--
-- Structure de la table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name_u` text NOT NULL,
  `email_u` varchar(128) NOT NULL,
  `adress_u` text NOT NULL,
  `phone_u` varchar(24) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Déchargement des données de la table `users`
--

INSERT INTO `users` (`id`, `name_u`, `email_u`, `adress_u`, `phone_u`, `created_at`) VALUES
(100, 'Mariya McCleod', 'mmccleod2r@deliciousdays.com', 'Account Representative II', '9927023089', '0000-00-00 00:00:00'),
(101, 'Wash Randlesome', 'wrandlesome2s@cargocollective.com', 'Quality Engineer', '5346271726', '0000-00-00 00:00:00'),
(102, 'Ernestine Ambrozik', 'eambrozik2t@surveymonkey.com', 'Statistician III', '4632745416', '0000-00-00 00:00:00'),
(103, 'Thacher Fransson', 'tfransson2u@hubpages.com', 'Research Nurse', '8586870356', '0000-00-00 00:00:00'),
(104, 'Randolf Port', 'rport2v@blogspot.com', 'Librarian', '3026826853', '0000-00-00 00:00:00'),
(105, 'Merissa Salvadori', 'msalvadori2w@drupal.org', 'General Manager', '8849361850', '0000-00-00 00:00:00'),
(106, 'Lin Udey', 'ludey2x@privacy.gov.au', 'Senior Editor', '5366788639', '0000-00-00 00:00:00'),
(107, 'Fayina Owtram', 'fowtram2y@dropbox.com', 'Human Resources Assistant IV', '3835651023', '0000-00-00 00:00:00'),
(108, 'Corinne Surmeyers', 'csurmeyers2z@mail.ru', 'Senior Editor', '2783344491', '0000-00-00 00:00:00'),
(109, 'Oralle Newcome', 'onewcome30@ca.gov', 'Chemical Engineer', '1405972228', '0000-00-00 00:00:00'),
(110, 'Roze Oxbe', 'roxbe31@miibeian.gov.cn', 'Clinical Specialist', '7251328674', '0000-00-00 00:00:00'),
(111, 'Gill Rohlfs', 'grohlfs32@china.com.cn', 'Information Systems Manager', '8329910693', '0000-00-00 00:00:00'),
(112, 'Roman Dachey', 'rdachey33@patch.com', 'Account Coordinator', '8714487096', '0000-00-00 00:00:00'),
(113, 'Karie Furby', 'kfurby34@howstuffworks.com', 'Environmental Tech', '3229842257', '0000-00-00 00:00:00'),
(114, 'Gussie Catt', 'gcatt35@mlb.com', 'Structural Engineer', '8157671093', '0000-00-00 00:00:00'),
(115, 'Lauri Rowaszkiewicz', 'lrowaszkiewicz36@dot.gov', 'Technical Writer', '6799606312', '0000-00-00 00:00:00'),
(116, 'Yvon Barbey', 'ybarbey37@tripadvisor.com', 'Web Developer III', '5976603016', '0000-00-00 00:00:00'),
(117, 'Rafaela Killerby', 'rkillerby38@who.int', 'Research Associate', '2272482757', '0000-00-00 00:00:00'),
(118, 'Marrilee Spaven', 'mspaven39@google.ca', 'Research Nurse', '3116195620', '0000-00-00 00:00:00'),
(119, 'Arlena Bein', 'abein3a@google.fr', 'Data Coordiator', '9104981345', '0000-00-00 00:00:00'),
(120, 'Hedda Kidde', 'hkidde3b@marriott.com', 'Assistant Media Planner', '3161095763', '0000-00-00 00:00:00'),
(121, 'Katinka Andrieux', 'kandrieux3c@ted.com', 'Project Manager', '8581994912', '0000-00-00 00:00:00'),
(122, 'Jasen Davidavidovics', 'jdavidavidovics3d@reddit.com', 'Programmer I', '1576543218', '0000-00-00 00:00:00'),
(123, 'Darius Lippo', 'dlippo3e@dagondesign.com', 'Technical Writer', '5228202686', '0000-00-00 00:00:00'),
(124, 'Gabie Pidgley', 'gpidgley3f@storify.com', 'Financial Analyst', '3235458464', '0000-00-00 00:00:00'),
(125, 'Carny Mille', 'cmille3g@ucla.edu', 'Quality Engineer', '9288313464', '0000-00-00 00:00:00'),
(126, 'Skippy Standbrooke', 'sstandbrooke3h@chron.com', 'Geological Engineer', '9739441245', '0000-00-00 00:00:00'),
(127, 'Marja Goering', 'mgoering3i@xinhuanet.com', 'Director of Sales', '2206862888', '0000-00-00 00:00:00'),
(128, 'Hamid Enriques', 'henriques3j@answers.com', 'Director of Sales', '5051160479', '0000-00-00 00:00:00'),
(129, 'Darb Cornborough', 'dcornborough3k@msn.com', 'VP Accounting', '4074112426', '0000-00-00 00:00:00'),
(130, 'Mack Harkin', 'mharkin3l@sina.com.cn', 'Accountant IV', '5625727421', '0000-00-00 00:00:00'),
(131, 'Jeffie Colloff', 'jcolloff3m@hp.com', 'Compensation Analyst', '1981859571', '0000-00-00 00:00:00'),
(132, 'Hugibert Goare', 'hgoare3n@biglobe.ne.jp', 'Marketing Manager', '6072462819', '0000-00-00 00:00:00'),
(133, 'Viviana Hymus', 'vhymus3o@about.com', 'Civil Engineer', '8262301894', '0000-00-00 00:00:00'),
(134, 'Elinore Swalwell', 'eswalwell3p@aol.com', 'Technical Writer', '5743661268', '0000-00-00 00:00:00'),
(135, 'Heddi Jiggen', 'hjiggen3q@altervista.org', 'Computer Systems Analyst IV', '1519792703', '0000-00-00 00:00:00'),
(136, 'Noell Neylan', 'nneylan3r@wisc.edu', 'Computer Systems Analyst III', '2551352208', '0000-00-00 00:00:00'),
(137, 'Garik Beacon', 'gbeacon3s@java.com', 'Assistant Manager', '9144686999', '0000-00-00 00:00:00'),
(138, 'Betta De Witt', 'bde3t@amazon.com', 'Biostatistician II', '0000000000', '0000-00-00 00:00:00'),
(139, 'Bambie Riddler', 'briddler3u@wunderground.com', 'Software Consultant', '2231071572', '0000-00-00 00:00:00'),
(140, 'Rossy Mosson', 'rmosson3v@wp.com', 'Developer IV', '9874408048', '0000-00-00 00:00:00'),
(141, 'Nat Jacop', 'njacop3w@360.cn', 'Clinical Specialist', '5509913687', '0000-00-00 00:00:00'),
(142, 'Consolata Cohane', 'ccohane3x@amazonaws.com', 'Assistant Manager', '6499298638', '0000-00-00 00:00:00'),
(143, 'May Olligan', 'molligan3y@com.com', 'Chemical Engineer', '7205273562', '0000-00-00 00:00:00'),
(144, 'Gianina Gibben', 'ggibben3z@studiopress.com', 'Sales Associate', '8603373095', '0000-00-00 00:00:00'),
(145, 'Rosetta Haily', 'rhaily40@gravatar.com', 'Programmer Analyst III', '4419532573', '0000-00-00 00:00:00'),
(146, 'Larissa Delhanty', 'ldelhanty41@blogspot.com', 'Accounting Assistant I', '7403771930', '0000-00-00 00:00:00'),
(147, 'Rheba Colombier', 'rcolombier42@feedburner.com', 'Budget/Accounting Analyst I', '6165869796', '0000-00-00 00:00:00'),
(148, 'Garrick Gelsthorpe', 'ggelsthorpe43@nps.gov', 'Community Outreach Specialist', '3985966659', '0000-00-00 00:00:00'),
(149, 'Claribel Artin', 'cartin44@google.com.hk', 'Research Associate', '1879962255', '0000-00-00 00:00:00'),
(150, 'Candace Yarmouth', 'cyarmouth45@cyberchimps.com', 'Administrative Assistant IV', '8538303512', '0000-00-00 00:00:00'),
(151, 'Had Winspear', 'hwinspear46@sourceforge.net', 'Cost Accountant', '5196701846', '0000-00-00 00:00:00'),
(152, 'Storm Lewsley', 'slewsley47@tinypic.com', 'Actuary', '9647714323', '0000-00-00 00:00:00'),
(153, 'Zena Jeandeau', 'zjeandeau48@intel.com', 'Media Manager III', '8342205499', '0000-00-00 00:00:00'),
(154, 'Omar Cuttler', 'ocuttler49@amazon.co.uk', 'Nurse', '9823722116', '0000-00-00 00:00:00'),
(155, 'Giustino Blampey', 'gblampey4a@theglobeandmail.com', 'GIS Technical Architect', '8117552036', '0000-00-00 00:00:00'),
(156, 'Lewiss Dragoe', 'ldragoe4b@amazon.co.jp', 'Senior Editor', '6562064492', '0000-00-00 00:00:00'),
(157, 'Adore Sans', 'asans4c@dagondesign.com', 'Speech Pathologist', '1424370714', '0000-00-00 00:00:00'),
(158, 'Libbie Kynton', 'lkynton4d@tamu.edu', 'Human Resources Manager', '2925677295', '0000-00-00 00:00:00'),
(159, 'Tobiah Trembey', 'ttrembey4e@mac.com', 'Desktop Support Technician', '9778848185', '0000-00-00 00:00:00'),
(160, 'Carlita Hadye', 'chadye4f@webmd.com', 'Biostatistician II', '5893992979', '0000-00-00 00:00:00'),
(161, 'Oralie Vedeniktov', 'ovedeniktov4g@sina.com.cn', 'Physical Therapy Assistant', '1085216916', '0000-00-00 00:00:00'),
(162, 'Faydra Ebbin', 'febbin4h@etsy.com', 'Product Engineer', '5401676060', '0000-00-00 00:00:00'),
(163, 'Tracy Pont', 'tpont4i@seattletimes.com', 'Associate Professor', '7408365255', '0000-00-00 00:00:00'),
(164, 'Lenci Bricham', 'lbricham4j@wunderground.com', 'Pharmacist', '9876884474', '0000-00-00 00:00:00'),
(165, 'Katinka McFadden', 'kmcfadden4k@boston.com', 'Analog Circuit Design manager', '9742024516', '0000-00-00 00:00:00'),
(166, 'Belia Frosch', 'bfrosch4l@ustream.tv', 'Environmental Specialist', '3017117902', '0000-00-00 00:00:00'),
(167, 'Lev Hamilton', 'lhamilton4m@blinklist.com', 'Assistant Manager', '1469795765', '0000-00-00 00:00:00'),
(168, 'Vasily Echalie', 'vechalie4n@oakley.com', 'Registered Nurse', '6375355399', '0000-00-00 00:00:00'),
(169, 'Patrizio Simeonov', 'psimeonov4o@gmpg.org', 'Web Developer III', '6008086900', '0000-00-00 00:00:00'),
(170, 'Miner Ben', 'mben4p@wiley.com', 'VP Accounting', '6027213008', '0000-00-00 00:00:00'),
(171, 'Uta McAnalley', 'umcanalley4q@linkedin.com', 'Help Desk Operator', '7193054894', '0000-00-00 00:00:00'),
(172, 'Urbano Lenoir', 'ulenoir4r@posterous.com', 'Structural Analysis Engineer', '9629109080', '0000-00-00 00:00:00'),
(174, 'Teodoro Critcher', 'tcritcher4t@hostgator.com', 'Software Consultant', '9019097313', '0000-00-00 00:00:00'),
(175, 'Nara Yitzhakof', 'nyitzhakof4u@topsy.com', 'Sales Associate', '9975595356', '0000-00-00 00:00:00'),
(176, 'Marlee Ferraro', 'mferraro4v@admin.ch', 'Human Resources Assistant I', '7871669039', '0000-00-00 00:00:00'),
(177, 'Franciskus New', 'fnew4w@goodreads.com', 'Administrative Officer', '2899632759', '0000-00-00 00:00:00'),
(178, 'Nolan Aleksankov', 'naleksankov4x@sun.com', 'Executive Secretary', '6606783236', '0000-00-00 00:00:00'),
(179, 'Rolando Beazer', 'rbeazer4y@google.ca', 'Research Assistant III', '7682987836', '0000-00-00 00:00:00'),
(180, 'Rickert Glenny', 'rglenny4z@mashable.com', 'Professor', '9511592471', '0000-00-00 00:00:00'),
(181, 'Morris Matiewe', 'mmatiewe50@tripod.com', 'Software Consultant', '3187533295', '0000-00-00 00:00:00'),
(182, 'Cristabel Goulstone', 'cgoulstone51@liveinternet.ru', 'Product Engineer', '7223836408', '0000-00-00 00:00:00'),
(183, 'Almeta Michelle', 'amichelle52@dailymotion.com', 'Operator', '5906275270', '0000-00-00 00:00:00'),
(184, 'Orton Greedier', 'ogreedier53@csmonitor.com', 'Structural Engineer', '6498591802', '0000-00-00 00:00:00'),
(185, 'Ario Jowling', 'ajowling54@theglobeandmail.com', 'Social Worker', '6072146096', '0000-00-00 00:00:00'),
(186, 'Artus Hughes', 'ahughes55@wikipedia.org', 'Software Engineer III', '4084790442', '0000-00-00 00:00:00'),
(187, 'Craggie McFarland', 'cmcfarland56@cnn.com', 'Database Administrator II', '4376998036', '0000-00-00 00:00:00'),
(188, 'Delaney Stubbeley', 'dstubbeley57@economist.com', 'VP Sales', '2699446886', '0000-00-00 00:00:00'),
(189, 'Templeton Stoves', 'tstoves58@lycos.com', 'Recruiter', '5896801194', '0000-00-00 00:00:00'),
(190, 'Jerrine Folk', 'jfolk59@newsvine.com', 'Information Systems Manager', '1978424756', '0000-00-00 00:00:00'),
(191, 'Didi Sarginson', 'dsarginson5a@amazon.de', 'Developer III', '3036228837', '0000-00-00 00:00:00'),
(192, 'Drucie Riddich', 'driddich5b@mediafire.com', 'Software Test Engineer II', '2145670460', '0000-00-00 00:00:00'),
(193, 'Darrel Hammon', 'dhammon5c@dell.com', 'Registered Nurse', '2541400012', '0000-00-00 00:00:00'),
(194, 'Martie Hammerman', 'mhammerman5d@surveymonkey.com', 'Human Resources Assistant III', '4584313318', '0000-00-00 00:00:00'),
(195, 'Wilton Bartens', 'wbartens5e@mozilla.com', 'Executive Secretary', '5022404186', '0000-00-00 00:00:00'),
(196, 'Rodina Ellin', 'rellin5f@exblog.jp', 'Health Coach I', '8164594604', '0000-00-00 00:00:00'),
(197, 'Ula Pilmore', 'upilmore5g@exblog.jp', 'Accountant IV', '3757821351', '0000-00-00 00:00:00'),
(198, 'Willyt Wilman', 'wwilman5h@netlog.com', 'Dental Hygienist', '7638887208', '0000-00-00 00:00:00'),
(199, 'Arlyne Pittham', 'apittham5i@csmonitor.com', 'Actuary', '7945012914', '0000-00-00 00:00:00');

--
-- Index pour les tables déchargées
--

--
-- Index pour la table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_u` (`email_u`);

--
-- AUTO_INCREMENT pour les tables déchargées
--

--
-- AUTO_INCREMENT pour la table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1001;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
