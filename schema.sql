/**
* Lb Admin
* @author adolfojosnmadminkinduser
**/
create database nmadmin;
use nmadmin;



create table kind(
	id int not null auto_increment primary key,
	name varchar(50) not null
);

insert into kind (name) value ("Administrador");
insert into kind (name) value ("Usuario");
insert into kind (name) value ("Adminstrativo");

create table user(
	id int not null auto_increment primary key,
	bio text,
	image varchar(255),
	name varchar(50) not null,
	lastname varchar(50) not null,
	username varchar(50),
	email varchar(255) not null,
	password varchar(60) not null,
	phone varchar(255),
	address varchar(255),
	code varchar(20),
	status boolean not null default 0,
	kind boolean not null default 0,
	created_at datetime not null
);

insert into user(name,email,password,status,kind,created_at) value ("admin","admin","90b9aa7e25f80cf4f64e990b78a9fc5ebd6cecad",1,1,NOW());

create table student(
	id int not null auto_increment primary key,
	firstName varchar(50)not null,
	lastName varchar(50) not null,
	age int not null,
	birthDate datetime,
	address varchar(255),
	phone varchar(12),
	gener varchar(1),
	weight varchar(4),
	status boolean not null default 0,
	created_at datetime not null
);
create table campus(
	id int not null auto_increment primary key,
	image varchar(255),
	code varchar(20),
	name varchar(50) not null,
	zone varchar(50) not null,
	dependence varchar(1),
	birthdate date,
	address varchar(255),
	principal varchar(100) not null
    );