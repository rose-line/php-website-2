drop database blog;
create database blog;
use blog;
create table Post (
  id int(11) auto_increment primary key,
  title varchar(64),
  author varchar(64),
  content text
);
create table User (
  id int(11) auto_increment primary key,
  login varchar(64),
  pass blob
);
INSERT INTO User (login, pass)
VALUES ("admin", "");