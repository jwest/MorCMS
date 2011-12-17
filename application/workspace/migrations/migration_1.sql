--
-- alter table for model: example - modify column: firstname
--
alter table `examples` modify `firstname` VARCHAR(50) NOT NULL ;

--
-- alter table for model: example - modify column: email
--
alter table `examples` modify `email` VARCHAR(50) NOT NULL ;

--
-- alter table for model: example - modify column: publish
--
alter table `examples` modify `publish` ENUM('no', 'yes') NULL ;

--
-- alter table for model: example - modify column: publish
--
alter table `examples` modify `publish` ENUM('yes', 'no') NULL ;

--
-- alter table for model: example - modify column: publish
--
alter table `examples` modify `publish` ENUM('yes', 'no') NOT NULL ;

--
-- create table for model: image
--
CREATE TABLE IF NOT EXISTS `images` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(50) NOT NULL ,
    `description` TEXT  NULL ,
    `date` INT(11) UNSIGNED NULL ,
    primary key(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- alter table for model: image - remove column: image
--
alter table `images` drop column `image` ;

--
-- create table for model: page
--
CREATE TABLE IF NOT EXISTS `pages` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `name` VARCHAR(100) NOT NULL ,
    `name_url` VARCHAR(100) NOT NULL ,
    `date` INT(11) UNSIGNED NULL ,
    `menus`   NULL ,
    `content` TEXT  NULL ,
    `publish` ENUM('yes', 'no') NOT NULL ,
    primary key(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

