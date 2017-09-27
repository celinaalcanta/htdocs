drop database if exists biblioteca;
create database biblioteca;
use biblioteca;

create table users (
 id int unsigned auto_increment,
 name varchar(12) not null,
 firstname varchar(50) not null,
 lastname varchar(50) not null,
 email varchar(200)not null,
 password varchar(200)not null,
 primary key (id),
 unique idu_name (name),
 unique idu_email (email)

) engine =innoDB charset=utf8;

-- DML-> Data Manipulation language
insert into users (name,firstname,lastname,email,password) values
('Celina','Kenia','Alcantar','celinaalcantar7@gmail.com',sha('1234'));