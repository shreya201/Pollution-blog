-- phpMyAdmin SQL Dump
-- version 2.9.1.1
-- http://www.phpmyadmin.net
-- 
-- Host: localhost
-- Generation Time: Feb 24, 2016 at 10:50 AM
-- Server version: 5.0.27
-- PHP Version: 5.2.0
-- 
-- Database: `blog`
-- 

-- --------------------------------------------------------

-- 
-- Table structure for table `comments`
-- 

CREATE TABLE `comments` (
  `commentID` int(20) NOT NULL auto_increment,
  `postID` int(20) NOT NULL,
  `content` varchar(500) collate latin1_general_ci NOT NULL,
  `writterID` int(10) NOT NULL,
  `date` date NOT NULL,
  PRIMARY KEY  (`commentID`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=1 ;

-- 
-- Dumping data for table `comments`
-- 


-- --------------------------------------------------------

-- 
-- Table structure for table `entry`
-- 

CREATE TABLE `entry` (
  `postID` int(10) NOT NULL auto_increment,
  `userID` int(10) NOT NULL,
  `date` date NOT NULL,
  `title` varchar(100) collate latin1_general_ci NOT NULL,
  `content` varchar(500) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`postID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=2 ;

-- 
-- Dumping data for table `entry`
-- 

INSERT INTO `entry` VALUES (1, 1, '2016-02-24', 'First Post', 'The post is to test');

-- --------------------------------------------------------

-- 
-- Table structure for table `users`
-- 

CREATE TABLE `users` (
  `UserID` int(10) NOT NULL auto_increment,
  `UserName` varchar(20) collate latin1_general_ci NOT NULL,
  `Password` varchar(30) collate latin1_general_ci NOT NULL,
  `FullName` varchar(30) collate latin1_general_ci NOT NULL,
  `email` varchar(30) collate latin1_general_ci NOT NULL,
  PRIMARY KEY  (`UserID`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 COLLATE=latin1_general_ci AUTO_INCREMENT=3 ;

-- 
-- Dumping data for table `users`
-- 

INSERT INTO `users` VALUES (1, 'Orii', '123456', '', '');
INSERT INTO `users` VALUES (2, 'Rana', '123456', '', '');
