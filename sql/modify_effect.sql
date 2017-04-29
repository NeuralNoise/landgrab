--
-- Dumping data for table `modify_effect`
--

INSERT INTO `modify_effect` (`id`, `name`, `sort_order`, `is_land_upgrade`, `is_embassy`, `population`, `gdp`, `treasury`, `defense`, `military`, `support`, `created`) VALUES
(1, 'unclaimed', 0, 1, 0, 0, 0, 0, 0, 0, 0, '2016-11-08 15:26:05'),
(2, 'village', 1, 1, 0, 1, 1, 0, 0, 0, 0, '2016-11-08 15:26:51'),
(3, 'town', 2, 1, 0, 100, 10, 0, 2, 0, 0, '2016-11-08 15:27:27'),
(4, 'city', 3, 1, 0, 1000, 100, 0, 3, 0, 0, '2016-11-08 15:27:58'),
(5, 'metropolis', 4, 1, 0, 10000, 1000, 0, 4, 0, 0, '2016-11-08 15:28:34'),
(6, 'fortification', 2, 1, 0, 10, 1, -30, 3, 1, 0, '2016-11-24 11:24:53'),
(10, 'capitol', 5, 1, 0, 500, 50, 0, 5, 10, 50, '2016-11-08 15:29:47'),
(11, 'skyscraper', 10, 0, 0, 500, 100, -500, 0, 0, 3, '2016-11-08 15:45:22'),
(12, 'factory', 9, 0, 0, 200, 50, -100, 0, 5, 0, '2016-11-08 15:45:12'),
(14, 'hospital', 7, 0, 0, 500, 0, -50, 0, 0, 2, '2016-11-08 15:33:05'),
(15, 'military_base', 6, 0, 0, 0, 0, -80, 0, 20, 0, '2016-11-08 15:34:10'),
(16, 'school', 8, 0, 0, 100, 25, -30, 0, 0, 1, '2016-11-08 15:35:48'),
(17, 'embassy', 50, 0, 1, 0, 10, 0, 0, 50, 20, '2017-04-29 03:20:18');