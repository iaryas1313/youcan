
CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `phone` bigint(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;


INSERT INTO `customer` (`id`, `fname`, `phone`, `email`, `password`) VALUES
(18, 'Arya', 9442996048, 'sreen@gmail.com', '12345');



ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);


ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;
