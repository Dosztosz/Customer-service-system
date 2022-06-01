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
(11, 'Rama', '8x4', '80x72', 'Czarny', 2, '', '', '', '7', '', '', '');

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
(8, 'Ramy 80x72', '77x20x97', '16', '0', '0', '0');

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
(29, 'Peter Scheuenstuhl', '362-7323280-2581927 ', ' YYOGIJ5A ', '10.05.2022', 'p115', 'b');

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
