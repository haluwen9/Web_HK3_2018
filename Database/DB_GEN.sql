create database db_bongxustore character set utf8mb4 collate utf8mb4_unicode_ci;

use db_bongxustore;

create table products (
	id bigint(10) not null auto_increment,
	name varchar(50) not null unique,
	category bigint(10) not null,
	price int not null,
	sale float not null,
	image_link varchar(50) not null,
	tags varchar(30),
	sell_state bit not null,
	primary key (id)
);

create table product_categories (
	id bigint(10) not null auto_increment,
	name varchar(50) not null unique,
	primary key (id)
);

create table storage (
	product_id bigint(10) not null,
	amount int not null,
	primary key (product_id)
);

create table reviews (
	user_id varchar(15) not null,
	product_id bigint(10) not null,
	content text not null,
	posted_time datetime not null,
	rating float not null,
	primary key (user_id,product_id)
);

create table orders (
	id bigint(10) not null auto_increment,
	user_id varchar(15) not null,
	diffshipaddr bit not null,
	total_price int not null,
	success_state bit not null,
	primary key (id)
);

create table order_content (
	order_id bigint(10) not null,
	product_id bigint(10) not null,
	amount int not null,
	primary key (order_id,product_id)
);

create table users (
	id varchar(15) not null unique,
	pw varchar(255) not null,
	email varchar(30) not null unique,
	firstname varchar(30) not null,
	lastname varchar(30) not null,
	country varchar(30) not null,
	county varchar(30) not null,
	province varchar(30) not null,
	street_address varchar(100) not null,
	postcode varchar(15) not null,
	tel varchar(20) not null,
	facebook varchar(100),
	twitter varchar(100),
	google varchar(100),
	primary key (id)
);

create table shipping_info (
	order_id bigint(10) not null,
	firstname varchar(30) not null,
	lastname varchar(30) not null,
	country varchar(30) not null,
	county varchar(30) not null,
	province varchar(30) not null,
	street_address varchar(100) not null,
	postcode varchar(15) not null,
	tel varchar(20) not null,
	notes text,
	primary key (order_id)
);

alter table products add constraint products_fk0 foreign key (category) references product_categories(id);

alter table storage add constraint storage_fk0 foreign key (product_id) references products(id);

alter table reviews add constraint reviews_fk0 foreign key (user_id) references users(id);

alter table reviews add constraint reviews_fk1 foreign key (product_id) references products(id);

alter table orders add constraint orders_fk0 foreign key (user_id) references users(id);

alter table order_content add constraint order_content_fk0 foreign key (order_id) references orders(id);

alter table order_content add constraint order_content_fk1 foreign key (product_id) references products(id);

alter table shipping_info add constraint shipping_info_fk0 foreign key (order_id) references orders(id);

insert into users(id, pw, email ,firstname,lastname ,country,county,province,street_address,postcode,tel,facebook,twitter,google) value ('admin', 'admin', 'admin@example.com', 'admin', 'admin', '', '', '', '', '', '', '', '', '')