<?php

SQLExec('

CREATE TABLE IF NOT EXISTS `sys_date_format` (
  `ID` int(10) UNSIGNED NOT NULL,
  `TITLE` varchar(100) NOT NULL DEFAULT \'\',
  `FORMAT` varchar(255) NOT NULL DEFAULT \'\',
  `LINKED_OBJECT` varchar(100) NOT NULL DEFAULT \'\',
  `LINKED_PROPERTY` varchar(100) NOT NULL DEFAULT \'\'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;');

SQLExec('
INSERT INTO `sys_date_format` (`TITLE`, `FORMAT`, `LINKED_OBJECT`, `LINKED_PROPERTY`) VALUES
(\'Часы\', \'H\', \'Time\', \'timeNowH\'),
(\'Минуты\', \'i\', \'Time\', \'timeNowM\'),
(\'Время\', \'H:i\', \'Time\', \'timeNow\'),
(\'Дата\', \'d1\', \'Time\', \'dateNow\'),
(\'День недели\', \'n1\', \'Time\', \'DayOfWeek\');

');
  
?>
