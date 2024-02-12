

--
-- Database: `tourismguidephp`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--
create database tourismguidephp;
use tourismguidephp; 
CREATE TABLE IF NOT EXISTS `admin` (
  `adminname` varchar(30) NOT NULL,
  `password` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`adminname`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`adminname`, `password`) VALUES
('admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE IF NOT EXISTS `category` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cid`, `cname`) VALUES
(1, 'Education'),
(3, 'Temple'),
(4, 'Hospital');

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `cid` int(5) NOT NULL AUTO_INCREMENT,
  `cname` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`cid`, `cname`) VALUES
(1, 'Bhopal'),
(2, 'Gwalior');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `firstname` varchar(30) DEFAULT NULL,
  `lastname` varchar(30) DEFAULT NULL,
  `contactno` varchar(10) DEFAULT NULL,
  `emailid` varchar(30) DEFAULT NULL,
  `subject` varchar(500) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `firstname`, `lastname`, `contactno`, `emailid`, `subject`) VALUES
(2, 'rahul', 'kumar', '9229465035', 'rahul543@gmail.com', 'Hello');

-- --------------------------------------------------------

--
-- Table structure for table `place`
--

CREATE TABLE IF NOT EXISTS `place` (
  `pid` int(5) NOT NULL AUTO_INCREMENT,
  `pname` varchar(50) DEFAULT NULL,
  `pimage` longtext,
  `pdesc` varchar(300) DEFAULT NULL,
  `location` varchar(30) DEFAULT NULL,
  `landmark` varchar(30) DEFAULT NULL,
  `category` varchar(30) DEFAULT NULL,
  `city` varchar(30) DEFAULT NULL,
  `rating` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `place`
--

INSERT INTO `place` (`pid`, `pname`, `pimage`, `pdesc`, `location`, `landmark`, `category`, `city`, `rating`) VALUES
(1, 'db mall', 'uploadimage/java_logo_640.jpg', 'Big Shopping Mall', 'Bhopal', 'Board Office', 'Education', 'Bhopal', '5');


