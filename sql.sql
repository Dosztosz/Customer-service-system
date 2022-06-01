-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: mariadb106.server723887.nazwa.pl:3306
-- Czas generowania: 01 Cze 2022, 11:41
-- Wersja serwera: 10.6.7-MariaDB-log
-- Wersja PHP: 7.2.24-0ubuntu0.18.04.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Baza danych: `server723887_magneticmagazyn`
--

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `faq`
--

CREATE TABLE `faq` (
  `ID` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `Tresc` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `faq`
--

INSERT INTO `faq` (`ID`, `Nazwa`, `Tresc`) VALUES
(1, 'Zwrot Amazon de', '<ol>\r\n<li>zgłoszony zwrot</li>\r\n<li> pytamy o zdjęcie\r\n<li> oferujemy zniżkę żeby klient nie odsyłał ( zaczynamy od małej kwoty później zwiększamy żeby klienta przekonać ) <br>\r\n<b>Jeżeli produkt bardzo uszkodzony</b> ( np. pęknięty blat ) robimy zwrot bez zwracania towau.<br>\r\n<b>Jeżeli produkt dobry akecptujemy zwrot</b> etykiete załączamy w przypadku jeśli klient da powód zwrotu: Performance or quality not adequate, Incompatible or not useful for intended purpose, Different from what was ordered.<br> Nie załączamy etykietet lub załącamy ale obciązamy klienta kosztem w przypadku: No longer needed/wanted, Bought by mistake.<br>Jeżeli załączamy etykiete śledzimy czy klient odesłał paczke, Jeśli tak oddajemy pieniądze. \r\n<p><b>WAŻNE:</b> zawsze podajemy nasz adres niemiecki do zwrotów</p>							\r\n'),
(2, 'Zwrot Amazon fr/it', '<ol>\r\n<li>zgłoszony zwrot</li>\r\n<li>pytamy o zdjęcie</li>\r\n<li>oferujemy zniżkę żeby klient nie odsyłał ( zaczynamy od małej kwoty p&oacute;źniej zwiększamy żeby klienta przekonać )<br /><strong>Jeżeli produkt bardzo uszkodzony</strong> ( np. pęknięty blat ) robimy zwrot bez zwracania towaru. <br /><strong>Jeżeli produkt dobry akecptujemy zwrot</strong>&nbsp;etykiete załączamy śledzimy czy klient odesłał paczke, Jeśli tak oddajemy pieniądze musimy dać label (UPS)</li>\r\n</ol>'),
(3, 'Zwrot Amazon.com', '<ol>\r\n<li>zgłoszony zwrot</li>\r\n<li>pytamy o zdjęcie</li>\r\n<li>oferujemy zniżkę żeby klient nie odsyłał ( zaczynamy od małej kwoty p&oacute;źniej zwiększamy żeby klienta przekonać ) <br /><strong>Jeżeli klient chce zwr&oacute;cić</strong>&nbsp;szukam czy inny klient nie zam&oacute;wił tego samego produktu <br />jeśli tak to robimy przekieroanie.&nbsp;</li>\r\n<li>akceptujemy zwrot</li>\r\n<li>etykiete załączamy&nbsp; śledzimy czy klient odesłał paczke, Jeśli tak oddajemy pieniądze&nbsp;</li>\r\n</ol>'),
(5, 'Zwrot Ebay', '<ol>\r\n<li>zgłoszony zwrot</li>\r\n<li>pytamy o zdjęcie</li>\r\n<li>oferujemy zniżkę żeby klient nie odsyłał</li>\r\n</ol>'),
(6, 'Zwrot Kaufland', '<ol>\r\n<li>zgłoszony zwrot</li>\r\n<li>pytamy o zdjęcie</li>\r\n<li>oferujemy zniżkę żeby klient nie odsyłał, musimy dać etykiete GLS DE (zawsze)</li>\r\n</ol>'),
(7, 'Zwrot Cdiscount', '<ol>\r\n<li>zgłoszony zwrot</li>\r\n<li>pytamy o zdjęcie</li>\r\n<li>oferujemy zniżkę żeby klient nie odsyłał, Jeżeli klient chce zwr&oacute;cic szukam czy inny klient nie zam&oacute;wił tego samego produktu - <strong>zawsze musimy dawac etykiete bo jestesmy poza francja</strong></li>\r\n</ol>'),
(8, 'Jak stworzyć etykietę GLS DE', '<p>Po włączeniu aukcji na Baselinker zjedź na zakładkę przesyłki oraz naciśnij przycisk GLS DE jak w obrazku poniżej.</p>\r\n<img src=\"http://dosztosz.com/skroty/img/instr/instr1.jpg\" height=\"400px\">\r\n<p>Następnie Podaj wagę paczki oraz nadaj przesyłkę. Aby otworzyć etykietę naciśnij przycisk etykieta w linijce numeru przesyłki</p>\r\n<img src=\"http://dosztosz.com/skroty/img/instr/instr2.jpg\" height=\"400px\">');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `karosek`
--

CREATE TABLE `karosek` (
  `ID` int(11) NOT NULL,
  `Nazwa` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `Profil` varchar(55) NOT NULL,
  `Rozmiar` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `Kolor` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `Ilosc` int(11) NOT NULL,
  `czas_jest` text NOT NULL,
  `ebay` varchar(10) NOT NULL,
  `shopper` varchar(10) NOT NULL,
  `kaufland` varchar(10) NOT NULL,
  `cdiscount` varchar(10) NOT NULL,
  `etsy` varchar(10) NOT NULL,
  `allegro` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `karosek`
--

INSERT INTO `karosek` (`ID`, `Nazwa`, `Profil`, `Rozmiar`, `Kolor`, `Ilosc`, `czas_jest`, `ebay`, `shopper`, `kaufland`, `cdiscount`, `etsy`, `allegro`) VALUES
(1, 'Rama', '8x4', '40x42', 'Stal', 5, '6', '7', '4', '7', '2', '4', '7'),
(2, 'Rama', '8x4', '60x40', 'Stal', 1, '1', '', '', '7', '', '', ''),
(3, 'Rama', '8x4', '60x72', 'Stal', 0, '20', '20', '20', '20', '20', '20', '20'),
(4, 'Rama', '8x4', '70x72', 'Stal', 0, '9', '0', '0', '20', '0', '0', '0'),
(5, 'Rama', '8x4', '80x72', 'Stal', 0, '', '', '', '20', '', '', ''),
(6, 'Rama', '8x4', '90x72', 'Stal', 1, '', '', '', '7', '', '', ''),
(7, 'Rama', '8x4', '40x42', 'Czarny', 12, '', '', '', '7', '', '', ''),
(8, 'Rama', '8x4', '60x40', 'Czarny', 0, '', '', '', '7', '', '', ''),
(9, 'Rama', '8x4', '60x72', 'Czarny', 3, '', '', '', '7', '', '', ''),
(10, 'Rama', '8x4', '70x72', 'Czarny', 5, '', '', '', '7', '', '', ''),
(11, 'Rama', '8x4', '80x72', 'Czarny', 2, '', '', '', '7', '', '', ''),
(6448108, 'Rama', '8x4', '90x72', 'Czarny', 0, '', '', '', '7', '', '', ''),
(6448109, 'Rama', '8x4', '40x42', 'Biały', 4, '', '', '', '7', '', '', ''),
(6448110, 'Rama', '8x4', '60x40', 'Biały', 1, '', '', '', '7', '', '', ''),
(6448111, 'Rama', '8x4', '60x72', 'Biały', 3, '', '', '', '7', '', '', ''),
(6448112, 'Rama', '8x4', '70x72', 'Biały', 6, '', '', '', '7', '', '', ''),
(6448113, 'Rama', '8x4', '80x72', 'Biały', 0, '', '', '', '20', '', '', ''),
(6448114, 'Rama', '8x4', '90x72', 'Biały', 3, '', '', '', '7', '', '', ''),
(6448135, 'Rama', '10x4', '60x72', 'Stal', 1, '', '', '', '7', '', '', ''),
(6448136, 'Rama', '10x4', '70x72', 'Stal', 0, '', '', '', '20', '', '', ''),
(6448137, 'Rama', '10x4', '80x72', 'Stal', 0, '', '', '', '20', '', '', ''),
(6448138, 'Rama', '10x4', '90x72', 'Stal', 0, '', '', '', '20', '', '', ''),
(6448141, 'Rama', '10x4', '60x72', 'Czarny', 1, '', '', '', '7', '', '', ''),
(6448142, 'Rama', '10x4', '70x72', 'Czarny', 1, '', '', '', '7', '', '', ''),
(6448143, 'Rama', '10x4', '80x72', 'Czarny', 3, '', '', '', '20', '', '', ''),
(6448144, 'Rama', '10x4', '90x72', 'Czarny', 2, '', '', '', '7', '', '', ''),
(6448147, 'Rama', '10x4', '60x72', 'Biały', 0, '', '', '', '20', '', '', ''),
(6448148, 'Rama', '10x4', '70x72', 'Biały', 1, '', '', '', '7', '', '', ''),
(6448149, 'Rama', '10x4', '80x72', 'Biały', 2, '', '', '', '7', '', '', ''),
(6448150, 'Rama', '10x4', '90x72', 'Biały', 1, '', '', '', '7', '', '', ''),
(6448163, 'Trapez', '8x4', '', 'Stal', 0, '', '', '', '', '', '', ''),
(6448164, 'Trapez', '8x4', '', 'Czarny', 2, '', '', '', '', '', '', ''),
(6448165, 'Trapez', '8x4', '', 'Biały', 0, '', '', '', '', '', '', ''),
(6448166, 'X', '8x4', '', 'Stal', 0, '', '', '', '20', '', '', ''),
(6448167, 'X', '8x4', '', 'Czarny', 2, '', '', '', '7', '', '', ''),
(6448168, 'X', '8x4', '', 'Biały', 10, '', '', '', '1', '', '', ''),
(6521701, 'Rama', '6x2', '40x42', 'Stal', 7, '', '', '', '1', '', '', '1'),
(6521702, 'Rama', '6x2', '60x40', 'Stal', 0, '', '', '', '20', '', '', '20'),
(6521703, 'Rama', '6x2', '60x72', 'Stal', 10, '', '', '', '1', '', '', '1'),
(6521704, 'Rama', '6x2', '70x72', 'Stal', 0, '', '', '', '20', '', '', '20'),
(6521705, 'Rama', '6x2', '40x42', 'Czarny', 11, '', '', '', '1', '', '', '1'),
(6521706, 'Rama', '6x2', '60x40', 'Czarny', 5, '', '', '', '1', '', '', '1'),
(6521707, 'Rama', '6x2', '60x72', 'Czarny', 3, '', '', '', '20', '', '', '1'),
(6521708, 'Rama', '6x2', '70x72', 'Czarny', 0, '', '', '', '7', '', '', '1'),
(6521709, 'Rama', '6x2', '40x42', 'Biały', 20, '', '', '', '1', '', '', '1'),
(6521710, 'Rama', '6x2', '60x40', 'Biały', 14, '', '', '', '1', '', '', '1'),
(6521711, 'Rama', '6x2', '60x72', 'Biały', 4, '', '', '', '1', '', '', '1'),
(6521712, 'Rama', '6x2', '70x72', 'Biały', 4, '', '', '', '1', '', '', '1'),
(6658100, 'Rama', '6x2', '50x72', 'Czarny', 1, '', '', '', '7', '', '', '1'),
(6671303, 'Rama', '6x2', '50x72', 'Biały', 16, '', '', '', '1', '', '', '1'),
(6671304, 'Rama', '6x2', '50x72', 'Stal', 3, '', '', '', '7', '', '', '7'),
(6729178, 'Rama', '8x4', '40x42', 'Antracyt', 6, '', '', '', '1', '', '', ''),
(6729179, 'Rama', '8x4', '60x40', 'Antracyt', 5, '', '', '', '1', '', '', ''),
(6729180, 'Rama', '8x4', '60x72', 'Antracyt', 14, '', '', '', '1', '', '', ''),
(6729181, 'Rama', '8x4', '70x72', 'Antracyt', 3, '', '', '', '7', '', '', ''),
(6729182, 'Rama', '8x4', '80x72', 'Antracyt', 4, '', '', '', '7', '', '', ''),
(6729183, 'Rama', '8x4', '90x72', 'Antracyt', 1, 'none', '0', '0', '7', '0', '0', '0'),
(6729184, 'Rama', '6x2', '80x72', 'Stal', 13, '', '', '', '1', '', '', '1'),
(6729185, 'Rama', '6x2', '90x72', 'Stal', 6, '', '', '', '1', '', '', '1'),
(6729186, 'Rama', '6x2', '80x72', 'Czarny', 25, '', '', '', '1', '', '', '1'),
(6729187, 'Rama', '6x2', '90x72', 'Czarny', 29, '', '', '', '1', '', '', '1'),
(6729188, 'Rama', '6x2', '80x72', 'Biały', 30, '', '', '', '1', '', '', '1'),
(6729189, 'Rama', '6x2', '90x72', 'Biały', 24, '', '', '', '1', '', '', '1'),
(6738141, 'Dostawka', 'płaskownik', '', 'Czarny', 29, '', '', '', '1', '', '', '1'),
(6738142, 'Dostawka', 'płaskownik', '', 'Stal', 0, '', '', '', '20', '', '', '20'),
(6886406, 'Rama', '8x4', '40x42', 'Złoty', 2, '', '', '', '7', '', '', ''),
(6886407, 'Rama', '8x4', '60x40', 'Złoty', 4, '', '', '', '7', '', '', ''),
(6886408, 'Rama', '8x4', '60x72', 'Złoty', 9, '', '', '', '1', '', '', ''),
(6886409, 'Rama', '8x4', '70x72', 'Złoty', 0, '', '', '', '7', '', '', ''),
(6886410, 'Rama', '8x4', '80x72', 'Złoty', 1, '', '', '', '7', '', '', ''),
(6886411, 'Rama', '8x4', '90x72', 'Złoty', 2, '', '', '', '20', '', '', ''),
(6886878, 'X', '10x4', '', 'Czarny', 10, '', '', '', '1', '', '', ''),
(6886879, 'X', '10x4', '', 'Biały', 6, '', '', '', '1', '', '', ''),
(6886880, 'X', '10x4', '', 'Stal', 0, '', '', '', '20', '', '', ''),
(6886901, 'Pająk', '10x4', 'L', 'Stal', 0, '', '', '', '20', '', '', ''),
(6886902, 'Pająk', '10x4', 'L', 'Biały', 11, '', '', '', '1', '', '', ''),
(6886903, 'Pająk', '10x4', 'L', 'Czarny', 30, '', '', '', '1', '', '', ''),
(6887858, 'Pająk', '10x4', 'L', 'Antracyt', 6, '', '', '', '1', '', '', ''),
(6887859, 'Pająk', '10x4', 'L', 'Złoty', 18, '', '', '', '20', '', '', ''),
(7002555, 'Rama', '6x2', '50x72', 'Antracyt', 24, '', '', '', '1', '', '', '1'),
(8129131, 'Ofix', '8x2', 'Ofix', 'Czarny', 10, '', '', '', '1', '', '', ''),
(8129132, 'Ofix', '8x2', 'Ofix', 'Stal', 3, '', '', '', '7', '', '', ''),
(8129133, 'Ofix', '8x2', 'Ofix', 'Biały', 14, '', '', '', '1', '', '', ''),
(8129134, 'Ofix', '8x2', 'Ofix', 'Antracyt', 25, '', '', '', '1', '', '', ''),
(8129135, 'Ofix', '8x2', 'Ofix', 'Złoty', 3, '', '', '', '1', '', '', ''),
(8308455, 'X', 'Płaskownik', '', 'Stal', 1, '', '', '', '20', '', '', ''),
(8308456, 'X', 'Płaskownik', '', 'Czarny', 9, '', '', '', '20', '', '', ''),
(8308457, 'X', 'Płaskownik', '', 'Biały', 30, '', '', '', '1', '', '', ''),
(8308458, 'X', 'Płaskownik', '', 'Antracyt', 7, '', '', '', '1', '', '', ''),
(8308459, 'X', 'Płaskownik', '', 'Złoty', 6, '', '', '', '1', '', '', ''),
(8333291, 'X', '8x4', '', 'Antracyt', 4, '', '', '', '7', '', '', ''),
(8333292, 'X', '8x4', '', 'Złoty', 4, '', '', '', '1', '', '', ''),
(8456953, 'Pająk', '8x4', 'S', 'Stal', 0, '', '', '', '20', '', '', ''),
(8456954, 'Pająk', '8x4', 'S', 'Biały', 16, '', '', '', '1', '', '', ''),
(8456955, 'Pająk', '8x4', 'S', 'Czarny', 13, '', '', '', '1', '', '', ''),
(8456956, 'Pająk', '8x4', 'S', 'Antracyt', 11, '', '', '', '7', '', '', ''),
(8456957, 'Pająk', '8x4', 'S', 'Złoty', 21, '', '', '', '1', '', '', ''),
(8521268, 'Orion', '8x6', 'S', 'Stal', 0, '20', '0', '0', '20', '0', '0', '0'),
(8521269, 'Orion', '8x6', 'S', 'Czarny', 0, '', '', '', '7', '', '', ''),
(8521270, 'Orion', '8x6', 'S', 'Biały', 8, '', '', '', '1', '', '', ''),
(8521271, 'Orion', '8x6', 'S', 'Antracyt', 14, '', '', '', '1', '', '', ''),
(8521272, 'Orion', '8x6', 'S', 'Złoty', 3, '', '', '', '7', '', '', ''),
(8528983, 'Atal', '8x6', 'S', 'Stal', 0, '20', '0', '0', '20', '0', '0', '0'),
(8528984, 'Atal', '8x6', 'S', 'Czarny', 4, '', '', '', '7', '', '', ''),
(8528985, 'Atal', '8x6', 'S', 'Biały', 12, '', '', '', '1', '', '', ''),
(8528986, 'Atal', '8x6', 'S', 'Antracyt', 4, 'none', '0', '0', '1', '0', '0', '0'),
(8528987, 'Atal', '8x6', 'S', 'Złoty', 1, '', '', '', '1', '', '', ''),
(8529042, 'Atal', '8x6', 'L', 'Stal', 0, '20', '0', '0', '20', '0', '0', '0'),
(8529043, 'Atal', '8x6', 'L', 'Czarny', 3, '', '', '', '7', '', '', ''),
(8529044, 'Atal', '8x6', 'L', 'Biały', 8, '', '', '', '1', '', '', ''),
(8529045, 'Atal', '8x6', 'L', 'Antracyt', 5, '', '', '', '1', '', '', ''),
(8529046, 'Atal', '8x6', 'L', 'Złoty', 3, '', '', '', '1', '', '', ''),
(8553926, 'Orion', '8x6', 'L', 'Czarny', 2, '', '', '', '20', '', '', ''),
(8553927, 'Orion', '8x6', 'L', 'Biały', 13, '', '', '', '7', '', '', ''),
(8553928, 'Orion', '8x6', 'L', 'Stal', 0, '20', '0', '0', '20', '0', '0', '0'),
(8553929, 'Orion', '8x6', 'L', 'Antracyt', 20, '', '', '', '1', '', '', ''),
(8553930, 'Orion', '8x6', 'L', 'Złoty', 3, '', '', '', '20', '', '', ''),
(8572274, 'Trapez', '8x4', '', 'Antracyt', 4, '', '', '', '', '', '', ''),
(8572275, 'Trapez', '8x4', '', 'Złoty', 5, '', '', '', '', '', '', ''),
(8572276, 'X', '10x4', '', 'Złoty', 8, '', '', '', '1', '', '', ''),
(8572277, 'X', '10x4', '', 'Antracyt', 7, '', '', '', '1', '', '', ''),
(8572371, 'X', 'bez-spaw', '', 'Czarny', 3, '', '', '', '', '', '', ''),
(8572372, 'X', 'bez-spaw', '', 'Biały', 2, '', '', '', '', '', '', ''),
(8572373, 'X', 'bez-spaw', '', 'Stal', 0, '', '', '', '', '', '', ''),
(8572374, 'X', 'bez-spaw', '', 'Antracyt', 4, '', '', '', '7', '', '', ''),
(8572375, 'X', 'bez-spaw', '', 'Złoty', 3, '0', '0', '0', '1', '0', '0', '0'),
(8572388, 'Rama', '6x2', '40x42', 'Złoty', 22, '', '', '', '', '', '', '1'),
(8572389, 'Rama', '6x2', '60x40', 'Złoty', 15, '', '', '', '', '', '', '1'),
(8572390, 'Rama', '6x2', '50x72', 'Złoty', 26, 'none', '1', '1', '20', '1', '11', '20'),
(8572391, 'Rama', '6x2', '60x72', 'Złoty', 6, '', '', '', '', '', '', '7'),
(8572392, 'Rama', '6x2', '70x72', 'Złoty', 6, '', '', '', '', '', '', '1'),
(8572393, 'Rama', '6x2', '80x72', 'Złoty', 4, '', '', '', '', '', '', '1'),
(8572394, 'Rama', '6x2', '90x72', 'Złoty', 6, '', '', '', '', '', '', '1'),
(8573066, 'Rama', '10x4', '60x72', 'Złoty', 1, '', '', '', '7', '', '', ''),
(8573067, 'Rama', '10x4', '70x72', 'Złoty', 1, '', '', '', '7', '', '', ''),
(8573068, 'Rama', '10x4', '80x72', 'Złoty', 1, '', '', '', '7', '', '', ''),
(8573069, 'Rama', '10x4', '90x72', 'Złoty', 1, '', '', '', '7', '', '', ''),
(8573072, 'Rama', '10x4', '60x72', 'Antracyt', 1, '', '', '', '7', '', '', ''),
(8573073, 'Rama', '10x4', '70x72', 'Antracyt', 1, '', '', '', '7', '', '', ''),
(8573074, 'Rama', '10x4', '80x72', 'Antracyt', 1, '', '', '', '7', '', '', ''),
(8573075, 'Rama', '10x4', '90x72', 'Antracyt', 2, '', '', '', '7', '', '', ''),
(8866055, 'Rama', '8x2', '40x42', 'Stal', 5, '', '', '', '20', '', '', ''),
(8866056, 'Rama', '8x2', '60x40', 'Stal', 0, '', '', '', '20', '', '', '20'),
(8869586, 'Rama', '8x2', '50x72', 'Stal', 2, '', '', '', '20', '', '', '20'),
(8869587, 'Rama', '8x2', '60x72', 'Stal', 0, '', '', '', '20', '', '', '20'),
(8869588, 'Rama', '8x2', '70x72', 'Stal', 0, '', '', '', '20', '', '', '20'),
(8869589, 'Rama', '8x2', '80x72', 'Stal', 0, '', '', '', '20', '', '', '20'),
(8869590, 'Rama', '8x2', '90x72', 'Stal', 0, '', '', '', '20', '', '', '20'),
(8869591, 'Rama', '8x2', '40x42', 'Czarny', 13, '', '', '', '1', '', '', '1'),
(8869592, 'Rama', '8x2', '60x40', 'Czarny', 22, '', '', '', '1', '', '', '1'),
(8869593, 'Rama', '8x2', '50x72', 'Czarny', 7, '', '', '', '1', '', '', '1'),
(8869594, 'Rama', '8x2', '60x72', 'Czarny', 35, '', '', '', '1', '', '', '1'),
(8869595, 'Rama', '8x2', '70x72', 'Czarny', 7, '', '', '', '1', '', '', '1'),
(8869596, 'Rama', '8x2', '80x72', 'Czarny', 17, '', '', '', '1', '', '', '1'),
(8869597, 'Rama', '8x2', '90x72', 'Czarny', 23, '', '', '', '1', '', '', '1'),
(8869598, 'Rama', '8x2', '40x42', 'Biały', 24, '', '', '', '1', '', '', '1'),
(8869599, 'Rama', '8x2', '60x40', 'Biały', 14, '', '', '', '1', '', '', '1'),
(8869600, 'Rama', '8x2', '50x72', 'Biały', 2, '', '', '', '1', '', '', '1'),
(8869601, 'Rama', '8x2', '60x72', 'Biały', 11, '', '', '', '1', '', '', '1'),
(8869602, 'Rama', '8x2', '70x72', 'Biały', 1, '20', '20', 'none', '20', '20', 'none', '20'),
(8869603, 'Rama', '8x2', '80x72', 'Biały', 3, '', '', '', '20', '', '', '1'),
(8869604, 'Rama', '8x2', '90x72', 'Biały', 18, '', '', '', '1', '', '', '1'),
(8869605, 'Rama', '8x2', '40x42', 'Antracyt', 13, '', '', '', '1', '', '', '1'),
(8869606, 'Rama', '8x2', '60x40', 'Antracyt', 21, '', '', '', '1', '', '', '1'),
(8869607, 'Rama', '8x2', '50x72', 'Antracyt', 36, '', '', '', '1', '', '', '1'),
(8869608, 'Rama', '8x2', '60x72', 'Antracyt', 27, '', '', '', '1', '', '', '1'),
(8869609, 'Rama', '8x2', '70x72', 'Antracyt', 33, '', '', '', '1', '', '', '1'),
(8869610, 'Rama', '8x2', '80x72', 'Antracyt', 56, '', '', '', '1', '', '', '1'),
(8869611, 'Rama', '8x2', '90x72', 'Antracyt', 46, '', '', '', '1', '', '', '1'),
(8869612, 'Rama', '8x2', '40x42', 'Złoty', 16, '', '', '', '1', '', '', '1'),
(8869613, 'Rama', '8x2', '60x40', 'Złoty', 11, '', '', '', '1', '', '', '1'),
(8869614, 'Rama', '8x2', '50x72', 'Złoty', 22, '', '', '', '1', '', '', '1'),
(8869615, 'Rama', '8x2', '60x72', 'Złoty', 12, '', '', '', '20', '', '', ''),
(8869616, 'Rama', '8x2', '70x72', 'Złoty', 18, '', '', '', '1', '', '', '1'),
(8869617, 'Rama', '8x2', '80x72', 'Złoty', 29, '', '', '', '1', '', '', '1'),
(8869618, 'Rama', '8x2', '90x72', 'Złoty', 28, '', '', '', '1', '', '', '1'),
(1100093871, 'Orion', '8x6', 'XL', 'Czarny', 3, '', '', '', '20', '', '', ''),
(1100093872, 'Orion', '8x6', 'XL', 'Biały', 18, '', '', '', '7', '', '', ''),
(1100093873, 'Orion', '8x6', 'XL', 'Stal', 0, '20', '0', '0', '20', '0', '0', '0'),
(1100093874, 'Orion', '8x6', 'XL', 'Antracyt', 15, '', '', '', '1', '', '', ''),
(1100093875, 'Orion', '8x6', 'XL', 'Złoty', 22, '', '', '', '1', '', '', ''),
(1100306617, 'Gięte', '', '40x40', 'Czarny', 1, '', '', '', '20', '', '', ''),
(1100306618, 'Gięte', '', '50x40', 'Czarny', 4, '', '', '', '7', '', '', ''),
(1100306619, 'Gięte', '', '60x40', 'Czarny', 6, '', '', '', '7', '', '', ''),
(1100307089, 'Gięte', '', '40x40', 'Biały', 2, '', '', '', '7', '', '', ''),
(1100307090, 'Gięte', '', '50x40', 'Biały', 5, '', '', '', '7', '', '', ''),
(1100307091, 'Gięte', '', '60x40', 'Biały', 8, '', '', '', '7', '', '', ''),
(1100307095, 'Gięte', '', '40x40', 'Stal', 1, '', '', '', '7', '', '', ''),
(1100307096, 'Gięte', '', '50x40', 'Stal', 1, '', '', '', '7', '', '', ''),
(1100307097, 'Gięte', '', '60x40', 'Stal', 1, '', '', '', '7', '', '', ''),
(1100307101, 'Gięte', '', '40x40', 'Antracyt', 2, '', '', '', '7', '', '', ''),
(1100307102, 'Gięte', '', '50x40', 'Antracyt', 3, '', '', '', '7', '', '', ''),
(1100307103, 'Gięte', '', '60x40', 'Antracyt', 4, '', '', '', '7', '', '', ''),
(1100307107, 'Gięte', '', '40x40', 'Złoty', 13, '', '', '', '7', '', '', ''),
(1100307108, 'Gięte', '', '50x40', 'Złoty', 5, '', '', '', '7', '', '', ''),
(1100307109, 'Gięte', '', '60x40', 'Złoty', 4, '', '', '', '7', '', '', ''),
(1100335578, 'Oparcie', '', '', 'Stal', 0, '', '', '', '1', '', '', ''),
(1100335579, 'Oparcie', '', '', 'Czarny', 38, '', '', '', '1', '', '', ''),
(1100335580, 'Oparcie', '', '', 'Biały', 42, '', '', '', '1', '', '', ''),
(1100335581, 'Oparcie', '', '', 'Antracyt', 68, '', '', '', '1', '', '', ''),
(1100335582, 'Oparcie', '8x2', '', 'Złoty', 49, '', '', '', '1', '', '', ''),
(1100548409, 'Trapez', '8x2', '', 'Stal', 2, '', '', '', '7', '', '', ''),
(1100548410, 'Trapez', '8x2', '', 'Czarny', 8, '', '', '', '1', '', '', ''),
(1100548411, 'Trapez', '8x2', '', 'Biały', 8, '', '', '', '7', '', '', ''),
(1100548412, 'Trapez', '8x2', '', 'Antracyt', 0, '', '', '', '7', '', '', ''),
(1100548413, 'Trapez', '8x2', '', 'Złoty', 3, '', '', '', '7', '', '', ''),
(1100594066, 'Lotus', '6x2', 'Kawowy', 'Czarny', 5, '', '', '', '7', '', '', ''),
(1100594068, 'Lotus', '6x2', 'Kawowy', 'Biały', 3, '', '', '', '7', '', '', ''),
(1100594069, 'Lotus', '6x2', 'Kawowy', 'Szary', 5, '', '', '', '20', '', '', ''),
(1100594070, 'Lotus', '6x2', 'Kawowy', 'Złoty', 4, '', '', '', '7', '', '', ''),
(1100594071, 'Lotus', '6x2', 'Kawowy', 'Stal', 0, '', '', '', '20', '', '', ''),
(1100594072, 'Orion', '8x2', '77x77', 'Czarny', 3, '', '', '', '1', '', '', '7'),
(1100594073, 'Orion', '8x2', '77x77', 'Biały', 3, '', '', '', '7', '', '', '7'),
(1100594074, 'Orion', '8x2', '77x77', 'Szary', 0, '', '', '', '7', '', '', '7'),
(1100594075, 'Orion', '8x2', '77x77', 'Złoty', 0, '', '', '', '20', '', '', ''),
(1100594076, 'Orion', '8x2', '77x77', 'Stal', 0, '', '', '', '20', '', '', '20'),
(1100594077, 'Lotus', '8x2', '115x65 L', 'Czarny', 8, '', '', '', '20', '', '', ''),
(1100594078, 'Lotus', '8x2', '115x65 L', 'Biały', 2, '', '', '', '7', '', '', ''),
(1100594079, 'Lotus', '8x2', '115x65 L', 'Szary', 3, '', '', '', '7', '', '', ''),
(1100594080, 'Lotus', '8x2', '115x65 L', 'Złoty', 1, '', '', '', '20', '', '', ''),
(1100594081, 'Lotus', '8x2', '115x65 L', 'Stal', 0, '', '', '', '20', '', '', ''),
(1100594087, 'Lotus', '8x6', '141x79 XXL', 'Czarny', 14, '', '', '', '1', '', '', '1'),
(1100594088, 'Lotus', '8x6', '141x79 XXL', 'Biały', 7, '', '', '', '1', '', '', '1'),
(1100594089, 'Lotus', '8x6', '141x79 XXL', 'Stal', 0, '', '', '', '20', '', '', '20'),
(1100594090, 'Lotus', '8x6', '141x79 XXL', 'Szary', 20, '', '', '', '1', '', '', '7'),
(1100594091, 'Lotus', '8x6', '141x79 XXL', 'Złoty', 14, '', '', '', '7', '', '', '7'),
(1100594092, 'X', '6x2', '50x72', 'Czarny', 3, '', '', '', '', '', '', ''),
(1100594093, 'X', '6x2', '50x72', 'Biały', 2, '', '', '', '', '', '', ''),
(1100594094, 'X', '6x2', '50x72', 'Stal', 1, '', '', '', '', '', '', ''),
(1100594095, 'X', '6x2', '50x72', 'Szary', 3, '', '', '', '', '', '', ''),
(1100594096, 'X', '6x2', '50x72', 'Złoty', 2, '', '', '', '', '', '', ''),
(1100594097, 'Trapez', '8x2', '50x70', 'czarny', 2, '', '', '', '20', '', '', ''),
(1100594098, 'Trapez', '8x2', '50x70', 'bialy', 1, '', '', '', '20', '', '', ''),
(1100594099, 'Trapez', '8x2', '50x70', 'stal', 0, '', '', '', '20', '', '', ''),
(1100594100, 'Trapez', '8x2', '50x70', 'szary', 3, '', '', '', '20', '', '', ''),
(1100594101, 'Trapez', '8x2', '50x70', 'zloty', 1, '', '', '', '20', '', '', ''),
(1100594102, 'Selen', '8x2', '', 'czarny', 0, '', '', '', '', '', '', ''),
(1100594103, 'Selen', '8x2', '', 'bialy', 0, '', '', '', '', '', '', ''),
(1100594104, 'Selen', '8x2', '', 'stal', 1, '', '', '', '', '', '', ''),
(1100594105, 'Selen', '8x2', '', 'szary', 1, '', '', '', '', '', '', ''),
(1100594106, 'Selen', '8x2', '', 'zloty', 1, '', '', '', '', '', '', ''),
(1100594107, 'Kasten', '4x2', '50', 'czarny', 1, '', '', '', 'brak', '', '', '20'),
(1100594108, 'Kasten', '4x2', '60', 'czarny', 95, '', '', '', '1', '', '', '20'),
(1100594109, 'Kasten', '4x2', '70', 'czarny', 85, '', '', '', '1', '', '', '20'),
(1100594110, 'Kasten', '4x2', '50', 'bialy', 0, '', '', '', 'brak', '', '', '20'),
(1100594111, 'Kasten', '4x2', '60', 'bialy', 21, '', '', '', '1', '', '', '20'),
(1100594112, 'Kasten', '4x2', '70', 'bialy', 25, '', '', '', '1', '', '', '20'),
(1100594113, 'Kasten', '4x2', '50', 'stal', 0, '', '', '', '20', '', '', '20'),
(1100594114, 'Kasten', '4x2', '60', 'stal', 0, '', '', '', '20', '', '', '20'),
(1100594115, 'Kasten', '4x2', '70', 'stal', 0, '', '', '', '20', '', '', '20'),
(1100594116, 'Kasten', '3x3', 'maly', 'czarny', 12, '', '', '', '', '', '', '20'),
(1100594117, 'Kasten', '3x3', 'duzy', 'czarny', 13, '', '', '', '', '', '', '20'),
(1100594118, 'Kasten C', '3x3', 'kasten c', 'czarny', 18, '', '', '', '', '', '', '20'),
(1100594119, 'Kasten mały biały', '3x3', 'maly', 'bialy', 3, '', '', '', '', '', '', '20'),
(1100594120, 'Kasten duży biały', '3x3', 'duzy', 'bialy', 13, '', '', '', '', '', '', '20'),
(1100594121, 'Kasten C biały', '3x3', 'kasten c', 'bialy', 15, '', '', '', '', '', '', '20'),
(1100594122, 'Kasten mały stal', '3x3', 'maly', 'stal', 12, '', '', '', '', '', '', ''),
(1100594123, 'Kasten duży stal', '3x3', 'duzy', 'stal', 0, '', '', '', '', '', '', ''),
(1100594124, 'Kasten C stal', '3x3', 'kasten c', 'stal', 0, '', '', '', '', '', '', ''),
(1100594125, 'Siedzisko dąb', '3x3', '30', 'Dab', 7, '', '', '', '', '', '', ''),
(1100594126, 'Siedzisko orzech', '3x3', '30', 'Orzech', 118, '', '', '', '', '', '', ''),
(1100594127, 'Siedzisko buk', '3x3', '30', 'Buk', 32, '', '', '', '', '', '', ''),
(1100594128, 'Siedzisko Craft Gold', '3x3', '30', 'Craft Gold', 11, '', '', '', '', '', '', ''),
(1100594129, 'Siedzisko Beton Jasny', '3x3', '30', 'Beton Jasny', 8, '', '', '', '', '', '', ''),
(1100594134, 'Orion na szybe Stal', '8x6', 's', 'stal', 0, '', '', '', '20', '', '', ''),
(1100594135, 'Orion na szybe Czarny', '8x6', 's', 'czarny', 9, '', '', '', '7', '', '', ''),
(1100594136, 'Orion na szybe Biały', '8x6', 's', 'bialy', 3, '', '', '', '7', '', '', ''),
(1100594137, 'Orion na szybe Szary', '8x6', 's', 'szary', 1, '', '', '', '7', '', '', ''),
(1100594138, 'Orion na szybe Złoty', '8x6', 's', 'zloty', 2, '', '', '', '20', '', '', ''),
(1100594139, 'Lotus', '8x6', '115x65 XL', 'Czarny', 0, '10', '', '', '20', '', '', ''),
(1100594140, 'Lotus', '8x6', '115x65 XL', 'Biały', 12, '10', '', '', '1', '', '', ''),
(1100594141, 'Lotus', '8x6', '115x65 XL', 'Stal', 0, '10', '', '', '20', '', '', ''),
(1100594142, 'Lotus', '8x6', '115x65 XL', 'Antracyt', 10, '10', '', '', '20', '', '', ''),
(1100594143, 'Lotus', '8x6', '115x65 XL', 'Złoty', 16, '10', '', '', '1', '', '', ''),
(1100594144, 'Porecz', 'porecz', '80 cm', 'Czarny', 32, '10', '', '', '1', '', '', ''),
(1100594145, 'Porecz', 'porecz', '80 cm', 'Biały', 62, '10', '', '', '1', '', '', ''),
(1100594146, 'Porecz', 'porecz', '50 cm', 'Czarny', 159, '10', '', '', '1', '', '', ''),
(1100594147, 'Porecz', 'porecz', '50 cm', 'Biały', 134, '15', '', '', '1', '', '', ''),
(1100594148, 'Porecz', 'porecz', '50 cm', 'antracyt', 129, '0', '', '', '1', '', '', ''),
(1100594149, 'Porecz', 'porecz', '80 cm', 'antracyt', 35, '0', '', '', '1', '', '', ''),
(1100594150, 'Noga', '8x2', '50x100 cm', 'Czarny', 7, '0', '', '', '1', '', '', ''),
(1100594151, 'Noga', '8x2', '50x100 cm', 'Biały', 10, '0', '', '', '7', '', '', ''),
(1100594152, 'Noga', '8x2', '50x100 cm', 'Antracyt', 5, '0', '', '', '7', '', '', ''),
(1100594153, 'Noga', '8x2', '50x100 cm', 'Złoty', 2, '0', '', '', '7', '', '', ''),
(1100594154, 'Noga', '8x2', '50x100 cm', 'Stal', 0, '0', '', '', '7', '', '', ''),
(1100594161, 'porecz 2', 'okragly', 'maly', 'czarny', 11, '0', '0', '0', '20', '0', '0', '0'),
(1100594162, 'porecz 2', 'okragly', 'maly', 'bialy', 6, '0', '0', '0', '20', '0', '0', '0'),
(1100594163, 'porecz 2', 'okragly', 'maly', 'antracyt', 4, '0', '0', '0', '20', '0', '0', '0'),
(1100594167, 'Rama', '4x2', 'stal', 'stal', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594168, 'Rama', '4x2', 'stal', 'czarny', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594169, 'Rama', '4x2', 'stal', 'biały', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594170, 'Rama', '4x2', 'stal', 'antracyt', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594171, 'Rama', '4x2', 'stal', 'złoty', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594172, 'Rama', '4x2', '40x42', 'stal', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594173, 'Rama', '4x2', '40x42', 'czarny', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594174, 'Rama', '4x2', '40x42', 'biały', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594175, 'Rama', '4x2', '40x42', 'antracyt', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594176, 'Rama', '4x2', '40x42', 'złoty', 2, '0', '0', '0', '20', '0', '0', '20'),
(1100594177, 'Rama', '4x2', '60x40', 'stal', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594178, 'Rama', '4x2', '60x40', 'czarny', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594179, 'Rama', '4x2', '60x40', 'biały', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594180, 'Rama', '4x2', '60x40', 'antracyt', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594181, 'Rama', '4x2', '60x40', 'złoty', 0, '0', '0', '0', '20', '0', '0', '20'),
(1100594182, 'Rama', '6x2', '60x72', 'antracyt', 7, '0', '0', '0', '1', '0', '0', '1'),
(1100594183, 'Rama', '6x2', '70x72', 'antracyt', 6, '0', '0', '0', '1', '0', '0', '7'),
(1100594184, 'Rama', '6x2', '80x72', 'antracyt', 10, '0', '0', '0', '1', '0', '0', '1'),
(1100594185, 'Rama', '6x2', '90x72', 'antracyt', 28, '0', '0', '0', '1', '0', '0', '1'),
(1100594186, 'Rama', '6x2', '40x42', 'antracyt', 21, '0', '0', '0', '1', '0', '0', '1'),
(1100594187, 'Rama', '6x2', '60x40', 'antracyt', 18, '0', '0', '0', '1', '0', '0', '1'),
(1100594188, 'Siedzisko', '3x3', '30', 'Ciemny beton', 19, '0', '0', '0', '0', '0', '0', '0'),
(1100594189, 'Siedzisko', '3x3', '30', 'Venge', 24, '0', '0', '0', '0', '0', '0', '0'),
(1100594190, 'cienki da', '4x2', '30x30', 'dab', 0, '0', '0', '0', '0', '0', '0', '0'),
(1100594191, 'cienki orzech', '4x2', '30x30', 'orzech', 0, '0', '0', '0', '0', '0', '0', '0'),
(1100594192, 'Siedzisko', '4x2', 'duze', 'dab', 0, '0', '0', '0', '0', '0', '0', '0'),
(1100594193, 'Lotus', '8x4', 'S (115x65)', 'stal', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594194, 'Lotus', '8x4', 'S (115x65)', 'czarny', 1, '0', '0', '0', '20', '0', '0', '0'),
(1100594195, 'Lotus', '8x4', 'S (115x65)', 'biały', 3, '0', '0', '0', '20', '0', '0', '0'),
(1100594196, 'Lotus', '8x4', 'S (115x65)', 'antracyt', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594197, 'Lotus', '8x4', 'S (115x65)', 'złoty', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594198, 'Lotus', '8x4', '141x79', 'stal', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594199, 'Lotus', '8x4', '141x79', 'czarny', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594200, 'Lotus', '8x4', '141x79', 'biały', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594201, 'Lotus', '8x4', '141x79', 'antracyt', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594202, 'Lotus', '8x4', '141x79', 'złoty', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594203, 'Orion', '8x4', '77x77', 'stal', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594204, 'Orion', '8x4', '77x77', 'czarny', 10, '0', '0', '0', '1', '0', '0', '0'),
(1100594205, 'Orion', '8x4', '77x77', 'biały', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594206, 'Orion', '8x4', '77x77', 'antracyt', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594207, 'Orion', '8x4', '77x77', 'złoty', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594208, 'Orion', '8x4', 'L 113x73', 'stal', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594209, 'Orion', '8x4', 'L 113x73', 'czarny', 4, '0', '0', '0', '20', '0', '0', '0'),
(1100594210, 'Orion', '8x4', 'L 113x73', 'biały', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594211, 'Orion', '8x4', 'L 113x73', 'antracyt', 8, '0', '0', '0', '20', '0', '0', '0'),
(1100594212, 'Orion', '8x4', 'L 113x73', 'złoty', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594213, 'Orion', '8x4', '150x83', 'stal', 0, '0', '0', '0', '20', '0', '0', '0'),
(1100594214, 'Orion', '8x4', '150x83', 'czarny', 9, '0', '0', '0', '20', '0', '0', '0'),
(1100594215, 'Orion', '8x4', '150x83', 'biały', 2, '0', '0', '0', '20', '0', '0', '0'),
(1100594216, 'Orion', '8x4', '150x83', 'antracyt', 9, '0', '0', '0', '20', '0', '0', '0'),
(1100594217, 'Orion', '8x4', '150x83', 'złoty', 0, '0', '0', '0', '20', '0', '0', '0');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `paczki`
--

CREATE TABLE `paczki` (
  `Id` int(11) NOT NULL,
  `kraj` text CHARACTER SET utf8mb3 NOT NULL,
  `2kg` text CHARACTER SET utf8mb3 NOT NULL,
  `5kg` text CHARACTER SET utf8mb3 NOT NULL,
  `10kg` text CHARACTER SET utf8mb3 NOT NULL,
  `15kg` text CHARACTER SET utf8mb3 NOT NULL,
  `25kg` text CHARACTER SET utf8mb3 NOT NULL,
  `30kg` text CHARACTER SET utf8mb3 NOT NULL,
  `40kg` text CHARACTER SET utf8mb3 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `paczki`
--

INSERT INTO `paczki` (`Id`, `kraj`, `2kg`, `5kg`, `10kg`, `15kg`, `25kg`, `30kg`, `40kg`) VALUES
(1, 'Austria', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS'),
(2, 'Belgia', 'GLS', 'DPD', 'DPD', 'DPD', 'DPD', 'DPD', 'GLS'),
(3, 'Francja', 'GLS', 'DPD', 'DPD', 'GLS', 'GLS', 'GLS', 'GLS'),
(4, 'Hiszpania', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS'),
(5, 'Holandia', 'GLS', 'DPD', 'DPD', 'GLS', 'DPD', 'DPD', 'GLS'),
(6, 'Niemcy', 'DPD', 'DPD', 'DPD', 'DPD', 'DPD', 'DPD', 'DPD'),
(7, 'Wielka Brytania', 'UPS', 'UPS', 'UPS', 'UPS', 'UPS', 'UPS', 'UPS'),
(8, 'Włochy', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS', 'GLS');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `skroty`
--

CREATE TABLE `skroty` (
  `id` int(11) NOT NULL,
  `Nazwa` text NOT NULL,
  `niemiecki` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `francuski` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `wloski` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `polski` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL,
  `angielski` text CHARACTER SET utf8mb3 COLLATE utf8mb3_polish_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Zrzut danych tabeli `skroty`
--

INSERT INTO `skroty` (`id`, `Nazwa`, `niemiecki`, `francuski`, `wloski`, `polski`, `angielski`) VALUES
(1, 'Przywitanie', 'Sehr geehrte Damen und Herren,\r\n    \r\nVielen Dank fur Ihre Nachricht.\r\n\r\nVielen Dank, dass Sie sich für eines unserer Produkte interessieren.\r\n\r\nVielen Dank, dass Sie sich für Magnetic Möbel entschieden haben.\r\n        \r\nMit freundlichen Grüßen,\r\nIhr Magnetic Möbel Team', 'Bonjour,\r\n    \r\nMerci pour votre réponse. \r\nMerci pour votre message.\r\n        \r\nmeilleures salutations\r\nMagnetic Mobel Team', 'Buongiorno,   \r\n    \r\nGrazie per il vostro messaggio\r\n        \r\nI migliori saluti\r\nMagnetic Mobel Team', 'Dzień Dobry,\r\n\r\nDziękujemy za wiadomość.\r\n                \r\nPozdrawiam,\r\nZespół Magnetic Mobel', 'Hello,   \r\n    \r\nThank you for your message.\r\n        \r\nBest Regards\r\nMagnetic Mobel Team'),
(2, 'Faktura w załączniku', 'Sehr geehrte Damen und Herren,\r\n\r\nVielen Dank fur Ihre Nachricht. Anbei finden Sie die Rechnung.\r\n\r\n\r\nMit freundlichen Grüßen,\r\nIhr Magnetic Möbel Team', 'Bonjour,\r\n    \r\nLa facture est jointe à ce message\r\n        \r\nmeilleures salutations\r\nMagnetic Mobel Team', 'Buongiorno,   \r\n    \r\nLa fattura è allegata a questo messaggio\r\n        \r\nI migliori saluti\r\nMagnetic Mobel Team', 'Dzień Dobry,\r\n\r\nFaktura znajduje się w załączniku tej wiadomości\r\n                \r\nPozdrawiam,\r\nZespół Magnetic Mobel', 'Hello,   \r\n    \r\nThe invoice has been send to you in attachment of this message\r\n        \r\nBest Regards\r\nMagnetic Mobel Team'),
(3, 'Zwrot pieniędzy (Całość)', 'Sehr geehrte Damen und Herren,\r\n\r\nVielen Dank fur Ihre Nachricht. Wir haben Ihr Geld zurückerstattet.\r\n\r\nMit freundlichen Grüßen,\r\nIhr Magnetic Möbel Team', 'Bonjour,\r\n\r\nNous avons remboursé votre argent.\r\n\r\nmeilleures salutations\r\nMagnetic Mobel Team', 'Buongiorno,   \r\n\r\nAbbiamo rimborsato i tuoi soldi.\r\n\r\nI migliori saluti\r\nMagnetic Mobel Team', 'Witam,\r\n\r\nDziękujemy za kontakt z nami. Państwa pieniądze zostały zwrócone\r\n\r\nPozdrawiam,\r\nZespół Magnetic Mobel', 'Hello,   \r\n\r\nWe have refunded your money.\r\n\r\nBest Regards\r\nMagnetic Mobel Team'),
(6, 'Częściowy zwrot pieniędzy', 'Sehr geehrte Damen und Herren,\r\n\r\nVielen Dank fur Ihre Nachricht. Wir haben Ihnen * Euro erstattet.\r\n\r\nMit freundlichen Grüßen,\r\nIhr Magnetic Möbel Team', 'Bonjour,\r\n\r\nNous vous avons remboursé * euros.\r\n\r\nmeilleures salutations\r\nMagnetic Mobel Team', 'Buongiorno,   \r\n\r\nTi abbiamo rimborsato * euro.\r\n\r\nI migliori saluti\r\nMagnetic Mobel Team', 'Dzień Dobry,\r\n\r\nDziękujemy za skontaktowanie się z nami. Zwróciliśmy Ci * euro.\r\n\r\nPozdrawiam,\r\nZespół Magnetic Mobel', 'Hello,   \r\n\r\nWe have refunded you * euro.\r\n\r\nBest Regards\r\nMagnetic Mobel Team'),
(10, 'Produkt uszkodzony (sztuczna Wysyłka)', 'Sehr geehrte Damen und Herren,\r\n    \r\nVielen Dank fur Ihre Nachricht. Leider wurde das Paket beim Transport beschädigt und wurde daher an uns zurückgeschickt. Wir können Ihnen anbieten, das Produkt erneut zu senden oder Ihr Geld zurückzuerhalten \r\n        \r\nMit freundlichen Grüßen,\r\nIhr Magnetic Möbel Team', 'Bonjour,\r\n    \r\nMerci pour votre réponse. Malheureusement, le colis a été endommagé pendant le transport et nous a donc été renvoyé. Nous pouvons vous proposer de renvoyer le produit ou de vous rembourser. \r\n        \r\nmeilleures salutations\r\nMagnetic Mobel Team', 'Buongiorno,   \r\n    \r\nGrazie per il vostro messaggio. Sfortunatamente, il pacco è stato danneggiato durante il trasporto e di conseguenza ci è stato restituito. Possiamo offrirti una rispedizione del prodotto o rimborsarti i tuoi soldi. \r\n        \r\nI migliori saluti\r\nMagnetic Mobel Team', 'Dzień Dobry,\r\n\r\nDziękujemy za skontaktowanie się z nami. Niestety paczka uległa zniszczeniu w transporcie, w wyniku czego została zwrócona do nas. Możemy państwu zaoferować wysyłkę produktu ponownie lub zwrot pieniędzy\r\n                \r\nPozdrawiam,\r\nZespół Magnetic Mobel', 'Hello,   \r\n    \r\nThank you for your message. Unfortunately, the package was damaged in transit, and as a result it was returned to us. We can offer you a resending the product or refund your money back.\r\n        \r\nBest Regards\r\nMagnetic Mobel Team'),
(12, 'Etykieta Zwrotna', 'Sehr geehrte Damen und Herren,\r\n    \r\nVielen Dank fur Ihre Nachricht. Bitte verwenden Sie das mitgelieferte Rücksendeetikett.\r\n        \r\nMit freundlichen Grüßen,\r\nIhr Magnetic Möbel Team', 'Bonjour,\r\n    \r\nVeuillez utiliser l étiquette de retour fournie.\r\n        \r\nMeilleures Salutations,\r\nMagnetic Mobel Team', 'Buongiorno, \r\n\r\nPrega di utilizzare the etichetta di reso fornita.\r\n\r\nI migliori saluti ,\r\nMagnetic Mobel Team', 'Dzień dobry,\r\n\r\nProsimy o użycie załączonej etykiety zwrotnej.\r\n\r\nPozdrawiam,\r\nZespół Magnetic Mobel', 'Good morning,\r\n\r\nPlease use the provided return label.\r\n\r\nBest regards ,\r\nMagnetic Mobel Team'),
(15, 'Zdjęcia przed zwrotem', 'Sehr geehrte Damen und Herren,\r\n\r\nEs tut uns sehr leid, dass Sie mit unserem Produkt nicht zufrieden sind. Bevor wir mit der Rücksendung fortfahren, senden Sie uns bitte einige Bilder des fehlerhaften Produkts.\r\n        \r\nMit freundlichen Grüßen\r\nMagnetic Mobel Team', 'Mesdames et Messieurs,\r\n\r\nNous sommes vraiment désolés que vous ne soyez pas satisfait de notre produit. Avant de procéder au retour, veuillez nous envoyer quelques photos du produit défectueux.\r\n        \r\nSincères amitiés\r\nL\'équipe de Magnetic Mobel', 'Signore e signori,\r\n\r\nSiamo molto dispiaciuti che tu non sia soddisfatto del nostro prodotto. Prima di procedere con il reso, ti preghiamo di inviarci alcune foto del prodotto difettoso.\r\n        \r\nAmicizie sincere\r\nIl team di Magnetic Mobel', 'Dzień Dobry.\r\n\r\nBardzo nam przykro, że nie jest Państwo zadowolone z naszego produktu. Przed rozpoczęciem zwrotu, prosimy o przesłanie zdjęć uszkodzonego produktu.\r\n        \r\nPozdrawiam,\r\nZespół Magnetic Mobel.', 'Hello,   \r\n    \r\nWe are very sorry you are not satisfied with our product, before we proceed with the return, please send us some images of the faulty product.\r\n        \r\nBest Regards\r\nMagnetic Mobel Team');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `wymiary`
--

CREATE TABLE `wymiary` (
  `Id` int(11) NOT NULL,
  `nazwa` varchar(30) NOT NULL,
  `wymiarcm` varchar(30) NOT NULL,
  `wagakg` varchar(30) NOT NULL,
  `wymiarcale` varchar(30) NOT NULL,
  `wagafunt` varchar(30) NOT NULL,
  `kategoria` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `wymiary`
--

INSERT INTO `wymiary` (`Id`, `nazwa`, `wymiarcm`, `wagakg`, `wymiarcale`, `wagafunt`, `kategoria`) VALUES
(1, 'Nogi Gięte', '44x12x64', '6', '4,5', '5', 'inne'),
(2, 'Dostawka', '31x12x80', '5', '0', '0', 'inne'),
(3, 'Dostawka', '28x10x80', '5', '0', '0', 'inne'),
(4, 'Ramy 40x42', '46x20x49', '12', '0', '0', '0'),
(5, 'Ramy 60x40', '46x20x67', '12', '0', '0', '0'),
(6, 'Ramy 60x72', '67x20x80', '15', '0', '0', '0'),
(7, 'Ramy 70x72', '75x20x80', '15', '0', '0', '0'),
(8, 'Ramy 80x72', '77x20x97', '16', '0', '0', '0'),
(9, 'Pająk S', '75x23x80', '15', '0', '0', '0'),
(10, 'Pająk L', '77x20x97', '18', '0', '0', '0'),
(11, 'Orion S', '75x23x80', '20', '0', '0', '0'),
(12, 'Orion S', '75x23x80', '20', '0', '0', '0'),
(13, 'Orion L', '198x11x22', '27', '0', '0', '0'),
(14, 'OrionXL', '198x11x22 183x11x14', '15', '1', '1', '1'),
(15, 'Ofix', '75x25x79', '15', '0', '0', '0'),
(16, 'X_Plaski', '53x18x79', '15', '0', '0', '0'),
(17, 'Ramy 50x72', '53x18x79', '10', '0', '0', '0'),
(18, 'Giete', '64x45x11', '5', '0', '0', '0'),
(19, 'Kasten_60_pojedynczy', '66x37x37', '5', '0', '0', '0'),
(20, 'Kasten_60_podwojny', '66x37x67', '5', '0', '0', '0'),
(21, 'Kasten_70_podwojny', '79x36x66', '5', '0', '0', '0'),
(22, 'Porecz', 'x', 'x', 'x', 'x', 'x'),
(23, 'Porecz 80', 'x', 'x', '13x5x32  ', '12', 'x');

-- --------------------------------------------------------

--
-- Struktura tabeli dla tabeli `zwroty`
--

CREATE TABLE `zwroty` (
  `ID` int(11) NOT NULL,
  `klient` text NOT NULL,
  `nr_zamowienia` text NOT NULL,
  `nr_sledzenia` text NOT NULL,
  `data_zwrotu` text NOT NULL,
  `notatka` text NOT NULL,
  `kategoria` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin2;

--
-- Zrzut danych tabeli `zwroty`
--

INSERT INTO `zwroty` (`ID`, `klient`, `nr_zamowienia`, `nr_sledzenia`, `data_zwrotu`, `notatka`, `kategoria`) VALUES
(28, 'Mohamed Elabd', '303-1656630-2670717', 'YYOGIJOV', '10.05.2022', 'j155', 'b'),
(29, 'Peter Scheuenstuhl', '302-4373280-2581927 ', ' YYOGIJ5A ', '10.05.2022', 'p115', 'b'),
(30, 'Michael Rieger', '303-7191487-4525165', 'YYOGIJOZ', '10.05.2022', '	j108', 'b'),
(33, 'Thomas Hädrich', 'MQXB453 ', 'YYOGIJXT', '11.05.2022', 'j151 GLS DE', 'b'),
(34, 'Thomas Ries', '17-08518-86508', 'YYOGIK2A', '11.05.2022', 'ebay ', 'b'),
(35, 'Sylviane Ménard Dorin', '405-1264461-6215541', '1Z74V47E9191135841', '08.05.2022', 'amazon', 'b'),
(36, 'Dimitri Simonov', '405140654', 'YYOGIK6I', '12.05.2022', 'j149 - 8 Euro', 'b'),
(43, 'David DeRose Sr', '113-4170440-9263464', '1Z7RB68T0320004811', '13.05.2022', 'Przekierowanie do tom e v wiegand', 'b'),
(45, 'Sandra', '302-5055678-6088317', 'x', '23.05.2022', 'Nowy blat', 'b'),
(46, ' Meryem Kücükoglu ', 'MTU6BB3', 'YYOGINKY', '24.05.2022', 'kaufland dostał już bana bo 2 zamówienie', 'a'),
(47, 'Fair Games GmbH', '305-9972524-4418738', 'YYOGINMK', '24.05.2022', 'YYOGINML YYOGINMJ', 'a'),
(48, 'Karin Schulz', 'MZQS653 ', 'YYOGINTB', '25.05.2022', 'kaufland hoker', 'a'),
(49, 'Benjamin Kratky', ' 304-9784330-0385909 ', 'YYOGINV5', '25.05.2022', 'amz', 'a'),
(50, 'Inh Biagio Russo', '028-6757419-2068308', 'YYOGINV9 YYOGINV7', '25.05.2022', 'amz 4x hoker', 'a'),
(51, 'Fabien Plot', '2205122127QR04C', '1Z74V47E9124551811', '31.05.2022', 'cdiscount pajak', 'a'),
(52, 'Stefan Zeller', '10-08574-21010', 'YYOGIQCW', '31.05.2022', 'ebay ff', 'a');

--
-- Indeksy dla zrzutów tabel
--

--
-- Indeksy dla tabeli `faq`
--
ALTER TABLE `faq`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `karosek`
--
ALTER TABLE `karosek`
  ADD PRIMARY KEY (`ID`);

--
-- Indeksy dla tabeli `paczki`
--
ALTER TABLE `paczki`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `skroty`
--
ALTER TABLE `skroty`
  ADD PRIMARY KEY (`id`);

--
-- Indeksy dla tabeli `wymiary`
--
ALTER TABLE `wymiary`
  ADD PRIMARY KEY (`Id`);

--
-- Indeksy dla tabeli `zwroty`
--
ALTER TABLE `zwroty`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT dla zrzuconych tabel
--

--
-- AUTO_INCREMENT dla tabeli `faq`
--
ALTER TABLE `faq`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT dla tabeli `karosek`
--
ALTER TABLE `karosek`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1100594218;

--
-- AUTO_INCREMENT dla tabeli `paczki`
--
ALTER TABLE `paczki`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT dla tabeli `skroty`
--
ALTER TABLE `skroty`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT dla tabeli `wymiary`
--
ALTER TABLE `wymiary`
  MODIFY `Id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT dla tabeli `zwroty`
--
ALTER TABLE `zwroty`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
