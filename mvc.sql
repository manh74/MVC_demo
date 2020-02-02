drop database if exists MVC;
create database MVC;
use MVC;

create table Users(
	id int auto_increment primary key,
    fullname varchar(255),
    username varchar(255),
    password varchar(255)
);

insert into Users values
	(1,"Nguyen Manh","manh","12345"),
    (2,"Nguyen Van Hoang","hoang","678910");
  
  select * from Users;