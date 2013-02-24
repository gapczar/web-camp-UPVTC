-- phpMyAdmin SQL Dump
-- version 3.5.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 24, 2013 at 01:49 AM
-- Server version: 5.5.25
-- PHP Version: 5.4.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `up`
--

-- --------------------------------------------------------

--
-- Table structure for table `app`
--

CREATE TABLE `app` (
  `app_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(250) NOT NULL,
  `icon` varchar(250) NOT NULL,
  PRIMARY KEY (`app_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  PRIMARY KEY (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user_vote`
--

CREATE TABLE `user_vote` (
  `app_id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  PRIMARY KEY (`app_id`,`username`),
  KEY `username` (`username`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `user_vote`
--
ALTER TABLE `user_vote`
  ADD CONSTRAINT `user_vote_ibfk_2` FOREIGN KEY (`username`) REFERENCES `user` (`username`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `user_vote_ibfk_1` FOREIGN KEY (`app_id`) REFERENCES `app` (`app_id`) ON DELETE CASCADE ON UPDATE CASCADE;