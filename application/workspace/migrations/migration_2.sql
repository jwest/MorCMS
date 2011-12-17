--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - remove column: title_url2
--
alter table `menu` drop column `title_url2` ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- create table for model: menu
--
CREATE TABLE IF NOT EXISTS `menu` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(100) NOT NULL ,
    `title_url` VARCHAR(100) NOT NULL ,
    `date` INT(11) UNSIGNED NULL ,
    primary key(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
-- create table for model: menu
--
CREATE TABLE IF NOT EXISTS `menu` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(100) NOT NULL ,
    `title_url` VARCHAR(100) NOT NULL ,
    `date` INT(11) UNSIGNED NULL ,
    primary key(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;


--
-- create table for model: menu
--
CREATE TABLE IF NOT EXISTS `menu` (
    `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
    `title` VARCHAR(100) NOT NULL ,
    `title_url` VARCHAR(100) NOT NULL ,
    `date` INT(11) UNSIGNED NULL ,
    primary key(id)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;



CREATE TABLE IF NOT EXISTS `menu_pages` (
  `menu_id` int(10) unsigned NOT NULL,
  `page_id` int(10) unsigned NOT NULL,
  PRIMARY KEY (`menu_id`,`page_id`),
  KEY `fk_page_id` (`page_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

ALTER TABLE `menu_pages`
  ADD CONSTRAINT `menu_pages_ibfk_1` FOREIGN KEY (`menu_id`) REFERENCES `menu` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `menu_pages_ibfk_2` FOREIGN KEY (`page_id`) REFERENCES `pages` (`id`) ON DELETE CASCADE;
--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menu` drop column `menus` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menu` drop column `menus` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menu` drop column `menus` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menu` drop column `menus` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menu` drop column `menus` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menu` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menu` drop column `menus` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menus` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menus` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menus` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menus` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menus
--
alter table `menus` add column `menus`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - remove column: menus
--
alter table `menus` drop column `menus` ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menus` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menus` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menus` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menus` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menus` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menus` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menus` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menus` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menus` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menus` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menus` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menus` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menus` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menus` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menus` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menus` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menus` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menus` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menus` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menus` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menus` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menus` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menus` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menus` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menus` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menus` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menus` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menus` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menus` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menus` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menus` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menus` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menus` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menus` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menus` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menus` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menus` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - remove column: title
--
alter table `menu` drop column `title` ;

--
-- alter table for model: menu - remove column: title_url
--
alter table `menu` drop column `title_url` ;

--
-- alter table for model: menu - remove column: pages
--
alter table `menu` drop column `pages` ;

--
-- alter table for model: menu - add column: name
--
alter table `menu` add column `name` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: name_url
--
alter table `menu` add column `name_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: menu
--
alter table `menu` add column `menu`   NULL ;

--
-- alter table for model: menu - add column: content
--
alter table `menu` add column `content` TEXT  NULL ;

--
-- alter table for model: menu - add column: publish
--
alter table `menu` add column `publish` ENUM('yes', 'no') NOT NULL ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

--
-- alter table for model: menu - remove column: name
--
alter table `menu` drop column `name` ;

--
-- alter table for model: menu - remove column: name_url
--
alter table `menu` drop column `name_url` ;

--
-- alter table for model: menu - remove column: menu
--
alter table `menu` drop column `menu` ;

--
-- alter table for model: menu - remove column: content
--
alter table `menu` drop column `content` ;

--
-- alter table for model: menu - remove column: publish
--
alter table `menu` drop column `publish` ;

--
-- alter table for model: menu - add column: title
--
alter table `menu` add column `title` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: title_url
--
alter table `menu` add column `title_url` VARCHAR(100) NOT NULL ;

--
-- alter table for model: menu - add column: pages
--
alter table `menu` add column `pages`   NULL ;

