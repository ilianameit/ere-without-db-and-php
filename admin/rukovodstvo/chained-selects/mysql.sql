SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;


CREATE TABLE `city` (
  `id` int(5) NOT NULL,
  `region_id` int(5) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `city` (`id`, `region_id`, `name`) VALUES
(1, 1, 'Москва'),
(2, 1, 'Абрамцево'),
(3, 1, 'Алабино'),
(4, 1, 'Апрелевка'),
(5, 1, 'Архангельское'),
(6, 2, 'Санкт-Петербург'),
(7, 2, 'Александровская'),
(8, 3, 'Винница'),
(9, 3, 'Гайсин'),
(10, 4, 'Белгород-Днестровский'),
(11, 4, 'Одесса'),
(12, 5, 'Минск'),
(13, 5, 'Борисов'),
(14, 6, 'Бобруйск'),
(15, 6, 'Могилев');

CREATE TABLE `country` (
  `id` int(5) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `country` (`id`, `name`) VALUES
(1, 'Россия'),
(2, 'Украина'),
(3, 'Беларусь');

CREATE TABLE `region` (
  `id` int(5) NOT NULL,
  `country_id` int(5) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

INSERT INTO `region` (`id`, `country_id`, `name`) VALUES
(1, 1, 'Москва и Московская область'),
(2, 1, 'Санкт-Петербург и область'),
(3, 2, 'Виницкая область'),
(4, 2, 'Одесская область'),
(5, 3, 'Минская область'),
(6, 3, 'Могилевская область');


ALTER TABLE `city`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `country`
  ADD PRIMARY KEY (`id`);

ALTER TABLE `region`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `city`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
ALTER TABLE `country`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
ALTER TABLE `region`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
