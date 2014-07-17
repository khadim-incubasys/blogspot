-- phpMyAdmin SQL Dump
-- version 4.0.6deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jul 17, 2014 at 11:24 AM
-- Server version: 5.5.37-0ubuntu0.13.10.1
-- PHP Version: 5.5.3-1ubuntu2.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blogspot`
--
CREATE DATABASE IF NOT EXISTS `blogspot` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blogspot`;

-- --------------------------------------------------------

--
-- Table structure for table `blogCategory`
--

CREATE TABLE IF NOT EXISTS `blogCategory` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `cname` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data for table `blogCategory`
--

INSERT INTO `blogCategory` (`id`, `cname`) VALUES
(5, 'category'),
(7, 'kkkkk'),
(8, 'gdgdgdg'),
(10, '6666666'),
(11, 'MMMMMMMMMMMMM'),
(12, 'raath'),
(13, ',,,,,,,,,,,,,,,,,,,,,,//////////'),
(14, '6666666');

-- --------------------------------------------------------

--
-- Table structure for table `blogPost`
--

CREATE TABLE IF NOT EXISTS `blogPost` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `blogid` int(11) NOT NULL,
  `post` text CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(100) DEFAULT NULL,
  `author` int(11) DEFAULT NULL,
  `approve` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `blogid` (`blogid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `blogPost`
--

INSERT INTO `blogPost` (`id`, `blogid`, `post`, `title`, `author`, `approve`) VALUES
(10, 1, 'how to set pagination in Ci', 'Pagination', 1, 0),
(11, 1, '$this->load->helper(''text'');\n		$this->load->library(''session'');', 'page not found', 1, 0),
(12, 1, 'A blog (a truncation of the expression web log)[1] is a discussion or informational site published on the World Wide Web and consisting of discrete entries ("posts") typically displayed in reverse chronological order (the most recent post appears first). Until 2009 blogs were usually the work of a single individual[citation needed], occasionally of a small group, and often covered a single subject. More recently "multi-author blogs" (MABs) have developed, with posts written by large numbers of authors and professionally edited. MABs from newspapers, other media outlets, universities, think tanks, advocacy groups and similar institutions account for an increasing quantity of blog traffic. The rise of Twitter and other "microblogging" systems helps integrate MABs and single-author blogs into societal newstreams. Blog can also be used as a verb, meaning to maintain or add content to a blog.\n\nThe emergence and growth of blogs in the late 1990s coincided with the advent of web publishing tools that facilitated the posting of content by non-technical users. (Previously, a knowledge of such technologies as HTML and FTP had been required to publish content on the Web.)\n\nA majority are interactive, allowing visitors to leave comments and even message each other via GUI widgets on the blogs, and it is this interactivity that distinguishes them from other static websites.[2] In that sense, blogging can be seen as a form of social networking service. Indeed, bloggers do not only produce content to post on their blogs, but also build social relations with their readers and other bloggers.[3] There are high-readership blogs which do not allow comments, such as Daring Fireball.\n\nMany blogs provide commentary on a particular subject; others function as more personal online diaries; others function more as online brand advertising of a particular individual or company. A typical blog combines text, images, and links to other blogs, Web pages, and other media related to its topic. The ability of readers to leave comments in an interactive format is an important contribution to the popularity of many blogs. Most blogs are primarily textual, although some focus on art (art blogs), photographs (photoblogs), videos (video blogs or "vlogs"), music (MP3 blogs), and audio (podcasts). Microblogging is another type of blogging, featuring very short posts. In education, blogs can be used as instructional resources. These blogs are referred to as edublogs.\n\nOn 16 February 2011, there were over 156 million public blogs in existence.[4] On 20 February 2014, there were around 172 million Tumblr[5] and 75.8 million WordPress[6] blogs in existence worldwide. According to critics and other bloggers, Blogger is the most popular blogging service used today, however Blogger does not offer public statistics.[7][8] Technorati has 1.3 million blogs as of February 22, 2014[9]', 'zzzzzzzz', 5, 0),
(19, 4, 'Write New Post!\n						lknhdfdsjbhv df mdkbjd\ndgn, dfigds fdfkj\n\\\n\\', 'abc ', 5, 0),
(49, 1, 'Write New Post!', 'this is text', 5, 0),
(50, 1, 'Write New Post!', 'this is text', 5, 0),
(51, 1, 'Write New Post!', 'this is text', 5, 0),
(52, 1, 'Write New Post!', 'this is text', 5, 0),
(53, 1, 'Write New Post!', 'this is text', 5, 0),
(54, 1, 'Write New Post!', 'this is text', 5, 0),
(55, 1, 'Write New Post!', 'fdjkwfdjksdfjsdjfs', 5, 0),
(56, 1, 'Write New Post!', 'fdjkwfdjksdfjsdjfs', 5, 0),
(57, 1, 'Write New Post!', 'fdjkwfdjksdfjsdjfs', 5, 0),
(68, 1, 'One reason people lie is to achieve personal power. Achieving personal power is helpful for someone who pretends to be more confident than he really is. For example, one of my friends threw a party at his house last month. He asked me to come to his party and bring a date. However, I didn’t have a girlfriend. One of my other friends, who had a date to go to the party with, asked me about my date. I didn’t want to be embarrassed, so I claimed that I had a lot of work to do. I said I could easily find a date even better than his if I wanted to. I also told him that his date was ugly. I achieved power to help me feel confident; however, I embarrassed my friend and his date. Although this lie helped me at the time, since then it has made me look down on myself.', '(Why Do People Lie?)', 5, 0),
(69, 1, 'Write New Post!', '', 5, 0),
(70, 1, '(topic sentence) California is the most wonderful place to visit because of its variety of weather and its beautiful nature. (subject development) Visitors to California can find any weather they like. They can find cool temperatures in the summer; also they can find warm weather in the winter. They can find places that are difficult for humans to live in the summer because they are so hot. Or they can find places closed in the winter because of the snow. On the other hand, visitors can find the nature they like. They can find high mountains and low valleys. Visitors can find a huge forest, a dead desert, and a beautiful coast.(summary sentence) So California is the most wonderful place to visit because of its weather and nature.', 'The Best Place to Visit ', 5, 0),
(71, 1, 'Write New Post!', 'nothing', 5, 0),
(72, 1, 'Money causes teenagers to feel stress. It makes them feel bad about themselves and envy other people. My friend, for instance, lives with her family and has to share a room with her sister, who is very cute and intelligent. This girl wishes she could have her own room and have a lot of stuff, but she can’t have these things because her family doesn’t have much money. Her family’s income is pretty low because her father is old and doesn’t go to work. Her sister is the only one who works. Because her family can’t buy her the things she wants, she feels a lot of stress and gets angry sometimes. Once, she wanted a beautiful dress to wear to a sweetheart dance. She asked her sister for some money to buy the dress. She was disappointed because her sister didn’t have money to give her. She sat in silence for a little while and then started yelling out loud. She said her friends got anything they wanted but she didn’t. Then she felt sorry for herself and asked why she was born into a poor family. Not having money has caused this girl to think negatively about herself and her family. It has caused a lot of stress in her life.', '(Describe a Stressful Time in Your Life)', 5, 0),
(73, 1, 'Write New Post!', 'testing testing', NULL, 0),
(74, 1, 'Write New Post!', 'testing testing', 1, 0),
(75, 1, 'Write New Post!', '', 8, 0),
(76, 1, 'Write New Post!', '', 8, 0),
(77, 1, 'Is an extension to the original Sortable from the Interface plugin that allows you to both sort vertically and nest (make one item a child of other item) elements at the same time, using drag-and-drop.', 'Draggable', 8, 0),
(78, 1, 'Grab a free copy of one our latest ebooks! Packed with hints and tips on HTML5''s most powerful new features.', 'Free book:', 8, 0),
(79, 1, 'Very nice trick, but may I suggest serializing the unordered list items into a string like “1,3,2,4″, and save this one into a separate table ?\n\nThis way, you only have to do one query to the mysql server when saving, and one query when retrieving the order, plus you can use the “ORDER BY FIND_IN_SET(recordListingID,’$order’)” where $order will contain “1,3,2,4″.', 'Dynamic Drag’n Drop With jQuery And PHP', 8, 0),
(80, 1, '(topic sentence) Three important Swiss customs for tourists to know deal with religion, greeting, and punctuality. (subject development) The Swiss people are very religious, and Sunday is their holy day. On Sunday, people rarely work in the garden, in the house, or even on the car. Foreign tourists should know that the most drugstores, supermarkets, and banks are closed on Sunday. The Swiss are also a formal people. For example, they seldom call acquaintances by their first names; the German “Herr” and French “Monsieur” are much more frequently used in Switzerland than the English “Mister” is used in the United States. A tourist should therefore say either “Herr” or “Monsieur” when greeting an acquaintance, and only use the person’s first name if he is a close friend. In addition, Switzerland is the land of watches and exactness. It is important to be on time to parties, business, meetings, and churches because Swiss hosts, factory bosses, and ministers all love punctuality. It is especially important for tourists to be on time for trains: Swiss train conductors never wait for late arrivers. (summary sentence) In summary, Swiss customs are very easy to follow and very important to remember!', 'Important Swiss Customs for Foreigners ', 8, 0),
(81, 1, 'jhsajfkjsdfkjsad', 'testing testing', 8, 0),
(82, 1, 'Write New Post!', '', 8, 0),
(83, 1, 'Write New Post!\n						fdhfdhhhfdh', 'fgbhfdhgdf', 8, 0),
(84, 1, 'Write New Post!', '', 8, 0),
(85, 3, 'kkkkkkkkkk rrrrrrrrrrrrrrrrrrrrr', 'khadim raath', 8, 0),
(86, 4, 'THis is a sample content', 'test post ', 8, 0);

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `commentid` int(11) NOT NULL AUTO_INCREMENT,
  `postid` int(11) NOT NULL,
  `comment` varchar(200) NOT NULL,
  `author` int(11) NOT NULL,
  PRIMARY KEY (`commentid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=56 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`commentid`, `postid`, `comment`, `author`) VALUES
(1, 1, 'Hey... say something!\nAasd asda s12312', 0),
(2, 1, 'asdas das dasd c', 0),
(3, 1, 'asdas das dasd c', 0),
(4, 1, 'asdas das dasd c', 0),
(5, 1, 'wahahahahhaha\n', 0),
(6, 1, 'wahahahahhaha\n', 0),
(7, 1, '1236449665168468  886 4 \n', 0),
(8, 1, 'klvdjk sdxkjvcujsd sdkjcvkj something!\n', 0),
(9, 1, 'Hey... say something!dfsdgsdfsdf\n', 0),
(10, 1, 'Hey... say something!\nbbb', 0),
(11, 1, 'fkjkbj dfkjgksjdflllllllllllllllllllllllllllllll\n', 0),
(12, 1, 'Hey... say something!\n', 0),
(13, 1, 'Hey... say something!\n', 0),
(14, 1, 'Hey... say something!\n', 0),
(15, 1, 'kkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkkk bbbbbbbbbbbbbb\n', 0),
(16, 1, 'aho aho aho!\n', 0),
(17, 1, 'hhhhhhhhhhhhhhhhh\n', 0),
(18, 1, 'gsdgsdgdsgsdv  \n', 0),
(19, 2, 'this is what?\n', 0),
(20, 1, 'nice comment', 0),
(21, 1, 'kkkkkkkkk\n', 0),
(22, 1, 'new comment...:)\n							', 0),
(23, 2, 'new comment is????', 0),
(24, 6, '							Hey... say something!\n							', 0),
(25, 6, '							Hey... say something!\n							hi how ', 0),
(26, 8, '							Hey... say something!\n							', 0),
(27, 6, 'fb integration is done\n							', 0),
(28, 6, '							Hey... say something!vvvvvvvvvvvvvvvvvv\n							', 0),
(29, 10, '							Hey... say something!\n							', 0),
(30, 13, '							Hey... say something!\n							', 0),
(31, 10, '							Hey... say something!\n							', 0),
(32, 10, '							Hey... say something!\n							', 0),
(33, 10, '							Hey... say something!\n							', 0),
(34, 10, '							Hey... say something!\n							', 0),
(35, 10, '							Hey... say something!\n							', 0),
(36, 10, '							Hey... say something!\n							', 0),
(37, 10, '							Hey... say something!\n							', 0),
(38, 10, '							Hey... say something!\n							', 0),
(39, 10, '							Hey... say something!\n							', 0),
(40, 10, '							Hey... say something!\n							', 0),
(41, 10, '							Hey... say something!\n							', 0),
(42, 10, '							Hey... say something!\n							', 0),
(43, 10, '							Hey... say something!\n							', 0),
(44, 10, '							Hey... say something!\n							', 0),
(45, 10, '							Hey... say something!\n							', 0),
(46, 10, '							Hey... say something!\n							', 0),
(47, 10, '							Hey... say something!\n							', 0),
(48, 10, '							Hey... say something!\n							', 0),
(49, 10, '							Hey... say something!\n							', 0),
(50, 10, '							Hey... say something!\n							', 0),
(51, 10, '							Hey... say something!\n							', 0),
(52, 10, '							Hey... say something!\n							', 0),
(53, 72, 'totally boring life...:( :(\n							', 0),
(54, 72, 'no\n							', 0),
(55, 72, 'no\n							', 0);

-- --------------------------------------------------------

--
-- Table structure for table `records`
--

CREATE TABLE IF NOT EXISTS `records` (
  `recordID` int(11) NOT NULL AUTO_INCREMENT,
  `recordText` varchar(255) DEFAULT NULL,
  `recordListingID` int(11) DEFAULT NULL,
  PRIMARY KEY (`recordID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `records`
--

INSERT INTO `records` (`recordID`, `recordText`, `recordListingID`) VALUES
(1, 'Once dropped, an Ajax query is activated', 4),
(2, 'Dragging changes the opacity of the item', 2),
(3, 'Returned array can be found at the right', 1),
(4, 'It is very very easy', 3);

-- --------------------------------------------------------

--
-- Table structure for table `uploads`
--

CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `image_name` text NOT NULL,
  `postid` int(11) NOT NULL,
  `order` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=110 ;

--
-- Dumping data for table `uploads`
--

INSERT INTO `uploads` (`id`, `image_name`, `postid`, `order`) VALUES
(1, 'uploads/downloadx.jpg', 1, 0),
(2, 'uploads/images (2).jpg', 1, 0),
(3, 'uploads/images.jpg', 1, 0),
(4, 'uploads/wallpapers.gif', 1, 0),
(5, 'uploads/downloadx.jpg', 1, 0),
(6, 'uploads/images (3).jpg', 1, 0),
(7, 'uploads/images.jpg', 0, 0),
(8, 'uploads/downloadx.jpg', 0, 0),
(9, 'uploads/download.jpg', 0, 0),
(10, 'uploads/images (4).jpg', 0, 0),
(13, 'uploads/images (4).jpg', 1, 0),
(14, 'uploads/downloadx.jpg', 1, 0),
(15, 'uploads/images (3).jpg', 48, 0),
(16, 'uploads/images (3).jpg', 64, 0),
(17, 'uploads/images.jpg', 66, 0),
(18, 'uploads/images (1).jpg', 66, 0),
(19, 'uploads/downloadx.jpg', 66, 0),
(20, 'uploads/download.jpg', 66, 0),
(21, 'uploads/wallpapers.gif', 67, 0),
(22, 'uploads/images (5).jpg', 67, 0),
(23, 'uploads/images (4).jpg', 67, 0),
(24, 'uploads/wallpapers.gif', 68, 0),
(25, 'uploads/images (5).jpg', 68, 0),
(26, 'uploads/images (4).jpg', 68, 0),
(27, 'uploads/images (4).jpg', 70, 0),
(28, 'uploads/images (3).jpg', 70, 0),
(29, 'uploads/images (1).jpg', 70, 0),
(30, 'uploads/images (4).jpg', 71, 5),
(31, 'uploads/images (2).jpg', 71, 9),
(32, 'uploads/wallpapers.gif', 72, 4),
(33, 'uploads/images (5).jpg', 72, 5),
(34, 'uploads/images (4).jpg', 72, 6),
(35, 'uploads/images (3).jpg', 72, 9),
(36, 'uploads/images (2).jpg', 72, 1),
(37, 'uploads/downloadx.jpg', 74, 6),
(38, 'uploads/images.jpg', 75, 0),
(39, 'uploads/images (4).jpg', 76, 0),
(40, 'uploads/images (3).jpg', 76, 0),
(41, 'uploads/images (3).jpg', 76, 0),
(42, 'uploads/images (1).jpg', 76, 0),
(43, 'uploads/images.jpg', 76, 0),
(44, 'uploads/wallpapers.gif', 77, 0),
(45, 'uploads/images (5).jpg', 77, 0),
(46, 'uploads/images (4).jpg', 77, 0),
(47, 'uploads/images (3).jpg', 77, 0),
(48, 'uploads/images (1).jpg', 77, 0),
(49, 'uploads/downloadx.jpg', 77, 0),
(50, 'uploads/wallpapers.gif', 78, 8),
(51, 'uploads/images.jpg', 78, 6),
(52, 'uploads/ee.jpg', 78, 5),
(53, 'uploads/downloadx.jpg', 78, 4),
(54, 'uploads/download.jpg', 78, 3),
(55, 'uploads/dd.jpg', 78, 7),
(56, 'uploads/cc.jpg', 78, 2),
(57, 'uploads/bb.jpg', 78, 0),
(58, 'uploads/aa.jpg', 78, 1),
(59, 'uploads/wallpapers.gif', 79, 0),
(60, 'uploads/ee.jpg', 79, 1),
(61, 'uploads/downloadx.jpg', 79, 2),
(62, 'uploads/dd.jpg', 79, 4),
(63, 'uploads/bb.jpg', 79, 3),
(64, 'uploads/aa.jpg', 79, 5),
(65, 'uploads/wallpapers.gif', 80, 0),
(66, 'uploads/images.jpg', 80, 3),
(67, 'uploads/ee.jpg', 80, 5),
(68, 'uploads/dd.jpg', 80, 9),
(69, 'uploads/cc.jpg', 80, 6),
(70, 'uploads/bb.jpg', 80, 7),
(71, 'uploads/aa.jpg', 80, 8),
(72, 'uploads/cc.jpg', 80, 1),
(73, 'uploads/download.jpg', 80, 2),
(74, 'uploads/downloadx.jpg', 80, 4),
(75, 'uploads/wallpapers.gif', 81, 24),
(76, 'uploads/images.jpg', 81, 7),
(77, 'uploads/ee.jpg', 81, 1),
(78, 'uploads/downloadx.jpg', 81, 2),
(79, 'uploads/dd.jpg', 81, 0),
(80, 'uploads/downloadx.jpg', 81, 3),
(81, 'uploads/cc.jpg', 81, 4),
(82, 'uploads/bb.jpg', 81, 5),
(83, 'uploads/ee.jpg', 81, 6),
(84, 'uploads/downloadx.jpg', 81, 8),
(85, 'uploads/downloadx.jpg', 81, 9),
(86, 'uploads/downloadx.jpg', 81, 10),
(87, 'uploads/downloadx.jpg', 81, 11),
(88, 'uploads/dd.jpg', 81, 12),
(89, 'uploads/cc.jpg', 81, 13),
(90, 'uploads/wallpapers.gif', 81, 14),
(91, 'uploads/images.jpg', 81, 15),
(92, 'uploads/downloadx.jpg', 81, 16),
(93, 'uploads/dd.jpg', 81, 17),
(94, 'uploads/bb.jpg', 81, 18),
(95, 'uploads/ee.jpg', 81, 19),
(96, 'uploads/downloadx.jpg', 81, 20),
(97, 'uploads/dd.jpg', 81, 21),
(98, 'uploads/downloadx.jpg', 81, 22),
(99, 'uploads/download.jpg', 81, 23),
(100, 'uploads/downloadx.jpg', 82, 3),
(101, 'uploads/downloadx.jpg', 82, 0),
(102, 'uploads/download.jpg', 82, 2),
(103, 'uploads/dd.jpg', 82, 1),
(104, 'uploads/download.jpg', 85, 1),
(105, 'uploads/dd.jpg', 85, 2),
(106, 'uploads/bb.jpg', 85, 0),
(107, 'uploads/wallpapers.gif', 86, 2),
(108, 'uploads/images.jpg', 86, 1),
(109, 'uploads/ee.jpg', 86, 0);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `fname` varchar(50) DEFAULT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `pwd` varchar(50) DEFAULT NULL,
  `pic` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `fname`, `lname`, `email`, `pwd`, `pic`) VALUES
(1, 'khadim', 'Raath', 'khadim.nu@gmail.com', '123456', NULL),
(2, 'Ahmad', 'xyz', 'ahmad@gmail.com', '123456', NULL),
(7, 'shakaib', 'Hassan', 'shakaib@gmail.com', '123456', 'http://localhost/blogspot/uploads/wallpapers.gif'),
(8, 'Khadim', 'Raath', 'khadim.raath@gmail.com', 'dummy', 'https://graph.facebook.com/775829285780656/picture?type=large'),
(12, 'ppppppppp', 'yyyyyyyyy', 'khadim.lk@gmail.com', '3698741', 'http://localhost/blogspot/uploads/wallpapers.gif');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
