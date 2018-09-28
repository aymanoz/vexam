<?php
 // Create connection
 /*
 

CREATE TABLE IF NOT EXISTS `answer` (
  `a_id` int(5) NOT NULL AUTO_INCREMENT,
  `a_a` text NOT NULL,
  `a_qid` int(5) NOT NULL,
  `a_isActive` int(2) NOT NULL DEFAULT '1',
  `a_isCorrect` int(2) NOT NULL DEFAULT '0',
  PRIMARY KEY (`a_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;
 
CREATE TABLE IF NOT EXISTS `book` (
  `b_id` int(5) NOT NULL AUTO_INCREMENT,
  `b_name` varchar(50) NOT NULL,
  PRIMARY KEY (`b_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;
 

INSERT INTO `book` (`b_id`, `b_name`) VALUES
(1, 'CCNA 200-125');
 

CREATE TABLE IF NOT EXISTS `question` (
  `q_id` int(5) NOT NULL AUTO_INCREMENT,
  `q_book` varchar(50) NOT NULL,
  `q_q` text NOT NULL,
  `q_note` text NOT NULL,
  `q_type` int(50) NOT NULL DEFAULT '1',
  `q_active` int(2) NOT NULL DEFAULT '1',
  PRIMARY KEY (`q_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=1 ;
 
 
 CREATE TABLE IF NOT EXISTS `q_type` (
  `t_id` int(5) NOT NULL AUTO_INCREMENT,
  `t_name` varchar(50) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8mb4 AUTO_INCREMENT=5 ;

 
INSERT INTO `q_type` (`t_id`, `t_name`) VALUES
(1, 'Choose one'),
(2, 'Multiple'),
(3, 'True / False '),
(4, 'Order by');

 */
    $conn  = new mysqli("localhost", "root","ultra123", "db_vexam");
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    } 
	
	?>