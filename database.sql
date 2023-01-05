/* Create Database and Table */
create database crud_db;
 
use crud_db;
 
CREATE TABLE `users` (
  `id` int(11) NOT NULL auto_increment,
  `nama` varchar(100),
  `jurusan` varchar(100),
  `npm` varchar(15),
  PRIMARY KEY  (`id`)
);