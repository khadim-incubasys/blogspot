CREATE TABLE IF NOT EXISTS `uploads` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `file_id` text NOT NULL,
  `file_name` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;
