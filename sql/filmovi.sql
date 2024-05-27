-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: May 23, 2024 at 03:20 PM
-- Server version: 5.7.39
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `filmovi`
--

-- --------------------------------------------------------

--
-- Table structure for table `filmovi`
--

CREATE TABLE `filmovi` (
  `id` int(11) NOT NULL,
  `naziv` varchar(255) NOT NULL,
  `reziser` varchar(255) NOT NULL,
  `zanr` varchar(100) DEFAULT NULL,
  `godina` int(11) DEFAULT NULL,
  `opis` text,
  `budzet` decimal(15,2) DEFAULT NULL,
  `image_path` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `filmovi`
--

INSERT INTO `filmovi` (`id`, `naziv`, `reziser`, `zanr`, `godina`, `opis`, `budzet`, `image_path`) VALUES
(23, 'The Dark Knight ', 'Kristofer Nolan', ' Akcija, Triler', 2008, 'Betmen, policijski poručnik Džim Gordon i tužilac Harvi Dent formiraju savez kako bi uništili organizovani kriminal u Gotamu. Njihove napore ometa Džoker, anarhistički genije koji testira koliko će daleko Betmen ići da spasi grad od haosa​.', '185000000.00', '../Images/darkknight.building.24x36_20e90057-f673-4cc3-9ce7-7b0d3eeb7d83_500x749.jpg.webp'),
(24, 'Interstellar ', 'Kristofer Nolan', ' Drama, Avantura', 2014, 'U budućnosti u kojoj Zemlja postaje nepogodna za život, grupa astronauta putuje kroz crvotočinu kako bi pronašla novu planetu pogodnu za ljudsku kolonizaciju. Film istražuje teme ljubavi, žrtvovanja i opstanka.', '165000000.00', '../Images/interstellar-139399_500x749.jpg'),
(25, 'Pulp Fiction ', 'Kventin Tarantino', 'Kriminalistički, Drama ', 1994, 'Film prati isprepletane priče gangstera, boksera, i dva sitna kriminalca. Sa svojim nekonvencionalnim narativom i kultnim dijalozima, \"Pulp Fiction\" redefiniše žanr kriminalističkog filma​.', '8500000.00', '../Images/pulpfiction.2436_500x749.jpg.webp'),
(26, 'Goodfellas', 'Martin Skorseze', 'Kriminalistički, Drama', 1990, 'Film prati uspon i pad Henrija Hila i njegovih prijatelja u italijansko-američkoj mafiji. \"Goodfellas\" je priča o životu u kriminalu, lojalnosti i izdaji, zasnovana na stvarnim događajima​.', '25000000.00', '../Images/ef4b93ef8f7157de3f97ae1ff5d21b56_0526bb98-1f4a-4da5-b928-b0025f5e6371_500x749.jpg.webp'),
(27, 'The Hangover', 'Tod Filips', 'Komedija', 2009, 'Trojica prijatelja se probude nakon momačke večeri u Las Vegasu, bez sećanja na prethodnu noć i sa nestalim mladoženjom. Oni pokušavaju da se prisete događaja kako bi pronašli svog prijatelja pre venčanja​.', '35000000.00', '../Images/hangover.24x36_880cc136-5aad-4508-af91-05beb2ea8903_500x749.jpg.webp'),
(28, 'Scarface', 'Brajan De Palma', 'Krimi, drama', 1983, '\"Scarface\" prati priču Tonija Montane (Al Paćino), kubanskog izbeglice koji dolazi u Majami u potrazi za boljim životom. Uzdižući se kroz redove zločinačkog podzemlja, Toni postaje moćan narko-bos, ali njegova brutalnost i pohlepa na kraju dovode do njegovog pada.', '25000000.00', '../Images/scarface.mpw.115473_500x749.jpg.webp'),
(29, 'The Godfather', 'Frensis Ford Kopola', ' Krimi, drama', 1972, '\"The Godfather\" je epska priča o mafijaškoj porodici Korleone. Film prati patriarha Vita Korleonea (Marlon Brando) i njegovog sina Majkla (Al Paćino) koji se nevoljno uključuje u porodični biznis. Radnja se odvija od 1945. do 1955. godine i istražuje transformaciju Majkla iz nevoljnog autsajdera u nemilosrdnog mafijaškog bosa.', '7000000.00', '../Images/b5282f72126e4919911509e034a61f66_6ce2486d-e0da-4b7a-9148-722cdde610b8_500x749.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(11) NOT NULL,
  `data` varchar(255) NOT NULL,
  `file_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `komentari`
--

CREATE TABLE `komentari` (
  `id` int(11) NOT NULL,
  `ime` varchar(255) NOT NULL,
  `komentar` text NOT NULL,
  `film_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `komentari`
--

INSERT INTO `komentari` (`id`, `ime`, `komentar`, `film_id`) VALUES
(3, 'Lazar', 'Odlican film', 24),
(4, 'Lazar Birtasevic', 'Najbolji film', 28),
(5, 'Ognjen', 'Dobar film!', 29),
(12, 'Lazar', 'Top film', 25);

-- --------------------------------------------------------

--
-- Table structure for table `korisnici`
--

CREATE TABLE `korisnici` (
  `id` int(11) NOT NULL,
  `korisnicko_ime` varchar(255) NOT NULL,
  `lozinka` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `verifikovan` tinyint(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `korisnici`
--

INSERT INTO `korisnici` (`id`, `korisnicko_ime`, `lozinka`, `email`, `verifikovan`) VALUES
(1, 'admin', 'admin123', '', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `filmovi`
--
ALTER TABLE `filmovi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `komentari`
--
ALTER TABLE `komentari`
  ADD PRIMARY KEY (`id`),
  ADD KEY `film_id` (`film_id`);

--
-- Indexes for table `korisnici`
--
ALTER TABLE `korisnici`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `filmovi`
--
ALTER TABLE `filmovi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `komentari`
--
ALTER TABLE `komentari`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `korisnici`
--
ALTER TABLE `korisnici`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komentari`
--
ALTER TABLE `komentari`
  ADD CONSTRAINT `komentari_ibfk_1` FOREIGN KEY (`film_id`) REFERENCES `filmovi` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
