-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1
-- Время создания: Окт 02 2018 г., 17:15
-- Версия сервера: 5.7.14
-- Версия PHP: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `dbtest`
--

-- --------------------------------------------------------

--
-- Структура таблицы `bikes`
--

CREATE TABLE `bikes` (
  `id` int(11) NOT NULL,
  `name` text CHARACTER SET latin1 NOT NULL,
  `description` text CHARACTER SET utf8,
  `img` text CHARACTER SET latin1 NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Дамп данных таблицы `bikes`
--

INSERT INTO `bikes` (`id`, `name`, `description`, `img`) VALUES
(1, '2016 Harley-Davidson Sportster Forty-Eight', 'The fuel tank serves as the primary design feature and lends the bike its name, sort of. Behold the Peanut Tank. We first saw this tank in 1947 and made its production-bike debut on the 1948 Harley S 125 Hummer, with appearances throughout the XL family history. In a move that was perhaps a little too authentic, the factory trimmed the tank down to a mere 2.1 gallons. Granted, it does have the right look, but I will stick to my 3.3-gallon, peanut-like tank, thank you very much.\r\nDesigners then leaped to the custom culture of the 1970s for the rest of the rolling chassis. Cut-down fenders, lowered suspension and Harleys Dark Custom touches take this ride right back to the Death to Disco era. In fact, the only part of this sled that isnt either black or chrome would be the badged, or flamed, namesake fuel tank with just a splash of color to draw the eye to the bikes showpiece feature.\r\nThe slammed handlebars and forward foot controls put the rider in an aggressive, forward-leaning, windsock position ready to dip head and shoulder into a turn.\r\nThe slammed handlebars and forward foot controls put the rider in an aggressive, forward-leaning, windsock position ready to dip head and shoulder into a turn.\r\n', 'images/moto4.jpg'),
(2, 'Ducati Scrambler', 'Custom Roadster. The Ducati Scrambler is brand new for 2015. This rental motorcycle is all about having fun. The 803 cc engine has plenty of low-down grunt and the handling is nimble. Thanks to the comfortable seat, this bike can be ridden comfortably two-up. Side bags allow for extended trips across France.\r\n\r\nSeat height 79 cm\r\nNo low seat\r\nNo top case\r\nSide bags 28 litres\r\nMotorcycle specs on the Ducati website\r\nIncluded in Motorcycle Rental\r\nUnlimited mileage allowance\r\nEuropean breakdown cover\r\nSecurity lock\r\nDucati panniers\r\nInsurance with a  2,000 excess\r\nReserve this rental motorcycle below. If you are looking to rent this motorcycle for over 7 days, please email us for a personalized quote.The 2015 Ducati Scrambler is powered by 803 cc air-cooled motor from the last-generation Monster 796, which makes 75 horsepower at 8,250 rpm and 50 foot-pounds of torque at 5,750 rpm.\r\n\r\nThe Scrambler uses a twin-spar steel trellis frame and a die-cast aluminum swingarm. Two of the models get 10-spoke alloy wheels, while the other two get spoked aluminum wheels, and all four are 18-inch up front and 17-inch in the back. The Pirelli MT 60 RS tires were designed specifically for the Scrambler and both look awesome and perform admirably, both on pavement and fire roads.\r\n', 'images/moto2.jpg'),
(3, 'Ducati Multistrada 1200 S', 'The Ducati Multistrada combines sport-bike performance with comfort and versatility. It is a great sport touring rental motorcycle to explore the Alps, Provence and Riviera alone or with a passenger.\r\n\r\nStandard seat height 85 cm\r\nNo low seat\r\nTop case 48 litres and side cases58 litres\r\nMotorcycle specs on the Ducati website\r\nIncluded in Motorcycle Rental\r\nUnlimited mileage allowance\r\nEuropean breakdown cover\r\nSecurity lock\r\nDucati top case and side cases\r\nInsurance with a 4,600 excess. Please contact us for a reduced excess\r\nReserve this rental motorcycle below. If you are looking to rent this motorcycle for over 7 days, please email us for a personalized quote.Everything on the Multistrada 1200 has been designed for practicality and effectiveness. The riders seat is narrow at the front, allowing an easier reach to the ground, is also 20mm longer and offers 20mm of height-adjustment.The passenger seat is lower and the passenger grab handles are more ergonomic.\r\nThe windshield height adjustment system is more fluid and can be operated with only one hand.The Multistrada 1200 also has a dry weight of just 209 kg. Together with the bikes optimal chassis set-up, this gives the Multistrada 1200 exceptional handling, crucial in sport riding and when weaving through city traffic or riding over uneven terrain.', 'images/moto3.jpg'),
(4, 'BMW R 1200 Nine T', '<p>The new BMW NineT celebrates BMW Motorrad\'s 90 year anniversary. This custom roadster rental motorcycle features a torquey 1200cc boxer engine, quality suspension and radial brakes. Touring Alpine twisties or cruising through Monaco, this bike gives you a huge smile. Passenger riding comfort is OK.\r\n\r\nSeat height 78.5 cm \r\nNo low seat\r\nNo top or side cases\r\nMotorcycle specs on the BMW Motorrad website\r\nIncluded in Motorcycle Rental\r\nUnlimited mileage allowance\r\nEuropean breakdown cover\r\nSecurity lock\r\nInsurance with a 4,600 excess. Please contact us for a reduced excess\r\nReserve this rental motorcycle below. If you are looking to rent this motorcycle for over 7 days, please email us for a personalized quote.BMW has cleverly embraced the latest retro fashion, drawing on its 90 years of motorcycling experience, innovation and heritage, and the R nineT takes its inspiration from all those BMW road and race bikes of old. But the R nineT is more than just retro looks and fashion. The build quality is superb and the attention to detail impeccable. It goes, stops and handles as well as the best roadsters out there, thanks to its modern chassis, suspension and braking components. But theres a lovely twist with the old-school air-cooled Boxer engine.</p>', 'images/moto1.jpg');

-- --------------------------------------------------------

--
-- Структура таблицы `orders_veiw`
--

CREATE TABLE `orders_veiw` (
  `id` int(11) NOT NULL,
  `moto` varchar(100) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `pickupdate` date DEFAULT NULL,
  `pickuptime` time DEFAULT NULL,
  `pickuplocation` varchar(11) COLLATE ucs2_bin DEFAULT NULL,
  `dropoffdate` date DEFAULT NULL,
  `dropofftime` time DEFAULT NULL,
  `dropofflocation` varchar(11) COLLATE ucs2_bin DEFAULT NULL,
  `helmet` varchar(11) COLLATE ucs2_bin DEFAULT NULL,
  `trunk` varchar(11) COLLATE ucs2_bin DEFAULT NULL,
  `motorcycleclothing` varchar(11) COLLATE ucs2_bin DEFAULT NULL,
  `insurance` varchar(4) COLLATE ucs2_bin DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=ucs2 COLLATE=ucs2_bin;

--
-- Дамп данных таблицы `orders_veiw`
--

INSERT INTO `orders_veiw` (`id`, `moto`, `pickupdate`, `pickuptime`, `pickuplocation`, `dropoffdate`, `dropofftime`, `dropofflocation`, `helmet`, `trunk`, `motorcycleclothing`, `insurance`) VALUES
(106, '1', '2018-01-24', '20:01:00', 'Airport', '2018-01-28', '03:06:00', 'Airport', 'helmet', '', 'cl', 'yes'),
(105, '3', '2018-01-24', '02:58:00', 'University', '2018-01-25', '13:58:00', 'Airport', 'helmet', '', 'cl', 'yes'),
(104, '2', '2018-01-18', '04:58:00', 'Airport', '2018-01-25', '00:01:00', 'Airport', 'helmet', '', 'cl', 'yes'),
(103, '3', '2017-01-14', '11:35:00', 'Airport', '2017-02-14', '12:35:00', 'University', 'helmet', '', 'cl', 'yes'),
(10, '1', '2017-12-06', '21:05:00', 'Airport', '2017-12-13', '20:05:00', 'University', 'helmet', 'trunk', '', 'yes'),
(102, '1', '2017-12-14', '11:33:00', 'University', '2017-12-14', '11:33:00', 'Airport', 'helmet', '', 'cl', 'yes'),
(2, '1', '2017-12-04', '14:10:00', 'University', '2017-12-04', '15:10:00', 'University', 'helmet', '', 'cl', 'yes'),
(3, '1', '2017-12-05', '13:01:00', 'Airport', '2017-12-06', '13:00:00', 'Airport', 'helmet', 'trunk', 'cl', 'yes'),
(101, '3', '2017-12-13', '19:47:00', 'University', '2017-12-15', '19:47:00', 'Airport', 'helmet', '', '', 'yes'),
(7, '2', '2017-12-24', '20:55:00', 'Airport', '2017-11-24', '21:55:00', 'Stadium', 'helmet', 'trunk', '', 'yes'),
(4, '1', '2017-11-28', '19:29:00', 'Airport', '2017-11-28', '19:29:00', 'Airport', '', 'trunk', '', 'yes'),
(5, '1', '2017-11-28', '19:36:00', 'University', '2017-11-28', '19:36:00', 'Stadium', 'helmet', '', 'cl', 'yes'),
(8, '1', '2017-11-24', '20:42:00', 'Airport', '2017-12-24', '21:42:00', 'Airport', 'helmet', '', 'cl', 'yes'),
(1, '1', '2017-11-24', '00:00:00', 'Airport', '2017-11-24', '20:47:00', 'Stadium', 'helmet', 'trunk', 'cl', 'no'),
(6, '2', '2017-12-24', '20:55:00', 'Airport', '2017-11-24', '21:55:00', 'Stadium', 'helmet', 'trunk', '', 'yes'),
(9, '1', '2017-11-09', '19:35:00', 'Airport', '2017-11-09', '16:33:00', 'University', 'helmet', '', 'cl', 'yes');

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `firstname` varchar(15) NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `login` varchar(15) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(15) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`id`, `firstname`, `lastname`, `login`, `email`, `password`) VALUES
(2, 'Nijat', 'Mahmudov', 'nijat21', 'nixon21@bk.tu', '12345'),
(3, 'Rashad', 'Mahmudov', 'rashad_25', 'mkrashad25@gmail.com', '3129'),
(4, 'Unknown', 'Unknown', 'root', 'unknown@gmail.com', 'root'),
(5, 'Nikita', 'Dobin', 'nakazator', 'nakazator23@mail.ru', '5678'),
(6, 'Anatoli', 'Furman', 'tolis_25', 'tolis_25@gmail.com', '123456'),
(7, 'Dasha', 'Yaroshevich', 'wendy_way', 'sdsdsdds@gmail.com', '12345'),
(8, 'Tolga', 'Tumba', 'utt', 'utt45@hotmail.com', '123456'),
(9, 'Enes', 'Colak', 'enco53', 'enescolaak@gmail.com', '12345678'),
(10, '', '', '', 'root', 'root'),
(11, 'stas', 'fortysh', 'xuy', 'xuy@mail.ru', '123456789'),
(12, 'Elisa', 'Tomat', 'mini', 'adsdh@vdvd.com', 'minimini'),
(13, 'Allan', 'Willams', 'bigAllan', 'bigallan@mail.ti', '2345678');

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `bikes`
--
ALTER TABLE `bikes`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `orders_veiw`
--
ALTER TABLE `orders_veiw`
  ADD PRIMARY KEY (`id`);

--
-- Индексы таблицы `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `bikes`
--
ALTER TABLE `bikes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT для таблицы `orders_veiw`
--
ALTER TABLE `orders_veiw`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=107;
--
-- AUTO_INCREMENT для таблицы `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
