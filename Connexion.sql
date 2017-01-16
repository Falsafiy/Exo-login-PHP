drop database Connexion
create database Connexion
use Connexion


create table users (
	idu int(2) not null auto_increment,
	user varchar(50),
	password varchar(255),
	Primary key (idu)

);
