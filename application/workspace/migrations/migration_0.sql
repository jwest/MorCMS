--
-- create table for model: example
--
CREATE TABLE IF NOT EXISTS `examples` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `firstname` VARCHAR(100) NULL ,
    `lastname` TEXT  NOT NULL ,
    `email` VARCHAR(120) NOT NULL ,
    `date` INT(11) UNSIGNED NULL ,
    `publish` ENUM('yes', 'no') NULL ,
    primary key(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

