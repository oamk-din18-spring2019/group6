create database Authentication;
CREATE TABLE `users` (
  `username` varchar(20) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `streetAddress` varchar(255),
  `postalCode` varchar(5),
  `email` varchar(45) NOT NULL,
  `contact` varchar(15) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

ALTER TABLE `users`
  ADD PRIMARY KEY (`username`);
