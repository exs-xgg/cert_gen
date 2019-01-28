create database if not exists cert_gen;
  use cert_gen;

-- USER TABLE
CREATE TABLE user(
id int primary key auto_increment,
username varchar(50),
password varchar(32),
fname varchar(50),
lname varchar(50),
is_admin varchar(1),
is_active varchar(1),
date_created timestamp default now()

);

-- facility table
CREATE TABLE facility(
id int primary key auto_increment,
hfhudcode varchar(20),
hfhudname varchar(200),
region_code char(2),
province_code char(4),
muncity_code char(6)
);

create table region(
id int primary key auto_increment,
region_code varchar(2),
region_name varchar(20)
);

create table province(
id int primary key auto_increment,
prov_code varchar(4),
region_code varchar(2),
prov_name varchar(50)
);

create table muncity(
id int primary key auto_increment,
muncity_code varchar(6),
prov_code varchar(4),
muncity_name varchar(50)
);

-- training table

create table training(
id int primary key auto_increment,
training_name varchar(100),
module_type int,
venue varchar(100),
date_started date,
date_ended date
hours int
);

-- training facility

create table training_facility(
id int primary key auto_increment,
fac_id int,
mayor varchar(100),
logo varchar(65536)
);

-- trainees 
create table trainee(
id int primary key auto_increment,
fname varchar(50),
mname varchar(50),
lname varchar(50),
designation int,
fac_id int,
train_id int,
train_status int,
cert_no varchar(100)
);

-- modules
create table module(
id int primary key auto_increment,
module_name varchar(100)
);

-- topics
create table topic(
id int primary key auto_increment,
topic_name varchar(100),
mod_id int
);

-- designation 
create table designation(
id int primary key auto_increment,
name varchar(100)
);

create table status(
id int primary key auto_increment,
status varchar(20)
);