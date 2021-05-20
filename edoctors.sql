-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Εξυπηρετητής: 127.0.0.1
-- Χρόνος δημιουργίας: 20 Μάη 2021 στις 09:42:27
-- Έκδοση διακομιστή: 10.4.18-MariaDB
-- Έκδοση PHP: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Βάση δεδομένων: `edoctors`
--

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `appointment`
--

CREATE TABLE `appointment` (
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `contact` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `appointment`
--

INSERT INTO `appointment` (`fname`, `lname`, `email`, `contact`) VALUES
('Thodoris', 'Trai', 'thodoris@email.gr', '6940576855'),
('Kostas', 'Chatz', 'kostas@email.com', '6955698034');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `hospital`
--

CREATE TABLE `hospital` (
  `id` int(100) NOT NULL,
  `hospname` varchar(50) NOT NULL,
  `docname` varchar(50) NOT NULL,
  `type` varchar(50) NOT NULL,
  `disease` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `hospital`
--

INSERT INTO `hospital` (`id`, `hospname`, `docname`, `type`, `disease`) VALUES
(1, 'Ippokratio', 'Dr. Papadopoulos', 'Cardiologist', 'heart'),
(2, 'Ippokratio', 'Dr. Karras', 'Pneumonologist', 'lung'),
(3, 'Ippokratio', 'Dr. Traitsis', 'Dentist', 'tooth'),
(4, 'Diavalkaniko', 'Dr. Chatzispyrou', 'General Practitioner', 'pain'),
(5, 'Diavalkaniko', 'Dr. Georgiou', 'Pediatrician', 'child'),
(6, 'Gennimatas', 'Dr. Avramidou', 'Orthopedic', 'bone'),
(7, 'Gennimatas', 'Dr. Lazaros', 'Cardiologist', 'heart'),
(8, 'Theagenio', 'Dr. Karamarkou', 'Pneumonologist', 'lung'),
(9, 'Theagenio', 'Dr. Ioannidis', 'Cardiologist', 'heart'),
(10, 'Agios Pavlos', 'Dr. Iliadis', 'Pediatrician', 'child'),
(11, 'Agios Pavlos', 'Dr. Karamanlis', 'Orthopedic', 'bone'),
(12, 'Papageorgiou', 'Dr. Pantelidis', 'Cardiologist', 'heart');

-- --------------------------------------------------------

--
-- Δομή πίνακα για τον πίνακα `login`
--

CREATE TABLE `login` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Άδειασμα δεδομένων του πίνακα `login`
--

INSERT INTO `login` (`username`, `password`) VALUES
('user', 'pass');

--
-- Ευρετήρια για άχρηστους πίνακες
--

--
-- Ευρετήρια για πίνακα `hospital`
--
ALTER TABLE `hospital`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
