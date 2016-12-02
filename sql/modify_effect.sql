--
-- Dumping data for table `modify_effect`
--

INSERT INTO `modify_effect` (`id`, `name`, `sort_order`, `is_land_upgrade`, `population`, `gdp`, `treasury`, `defense`, `military`, `support`, `created`) VALUES
(1, 'unclaimed', 0, 1, 0, 0, 0, 0, 0, 0, '2016-11-08 10:26:05'),
(2, 'village', 1, 1, 1, 1, 0, 0, 0, 0, '2016-11-08 10:26:51'),
(3, 'town', 2, 1, 100, 10, 0, 2, 0, 0, '2016-11-08 10:27:27'),
(4, 'city', 3, 1, 1000, 100, 0, 3, 0, 0, '2016-11-08 10:27:58'),
(5, 'metropolis', 4, 1, 10000, 1000, 0, 4, 0, 0, '2016-11-08 10:28:34'),
(6, 'fortification', 2, 1, 10, 1, -30, 3, 1, 0, '2016-11-24 06:24:53'),
(10, 'capitol', 5, 1, 500, 50, 0, 5, 0, 25, '2016-11-08 10:29:47'),
(11, 'skyscraper', 10, 0, 500, 10, -15, 0, 0, 1, '2016-11-08 10:45:22'),
(12, 'factory', 9, 0, 100, 8, -10, 0, 1, 0, '2016-11-08 10:45:12'),
(14, 'hospital', 7, 0, 500, 0, -10, 0, 0, 1, '2016-11-08 10:33:05'),
(15, 'military_base', 6, 0, 0, 0, -25, 0, 10, 0, '2016-11-08 10:34:10'),
(16, 'school', 8, 0, 100, 10, -20, 0, 0, 2, '2016-11-08 10:35:48');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
