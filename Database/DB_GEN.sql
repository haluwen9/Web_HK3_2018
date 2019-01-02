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

insert into users(id, pw, email ,firstname,lastname ,country,county,province,street_address,postcode,tel,facebook,twitter,google) value ('admin', '21232f297a57a5a743894a0e4a801fc3', 'admin@example.com', 'admin', 'admin', '', '', '', '', '', '', '', '', '');

use db_bongxustore;

insert into product_categories
values 
(1,'Thú bông nhỏ'),
(2,'Thú bông lớn'),
(3,'Thú bông POKEMON');

INSERT INTO products
VALUES

(1,'Gấu nâu nhỏ',1,
160000,
0.22,'files/img/small/img1.jpg','Gấu bông',
1),

(2,'Khỉ nhỏ',1,
160000,
0.22,'files/img/small/img2.jpg','Gấu bông',
1),

(3,'Khỉ nâu nhỏ',1,
160000,
0.22,'files/img/small/img3.jpg','Gấu bông',
1),

(4,'Cặp gấu trắng nhỏ',1,
160000,
0.22,'files/img/small/img4.jpg','Gấu bông',
1),

(5,'Bộ gấu ngố',1,
160000,
0.22,'files/img/small/img5.jpg','Gấu bông',
1),

(6,'Gấu bông nhỏ loại 1',1,
160000,
0.22,'files/img/small/img6.jpg','Gấu bông',
1),

(7,'Gấu hồng',1,
160000,
0.22,'files/img/small/img7.jpg','Gấu bông',
1),

(8,'Gấu áo đỏ',1,
160000,
0.22,'files/img/small/img8.jpg','Gấu bông',
1),

(9,'White & Brown',1,
160000,
0.22,'files/img/small/img9.jpg','Gấu bông',
1),

(10,'Violet & Pink',1,
160000,
0.22,'files/img/small/img10.jpg','Gấu bông',
1),

(11,'Gấu nâu lớn 1',2,
160000,
0.22,'files/img/large/img11.jpg','Gấu bông',
1),

(12,'Gấu nâu lớn 2',2,
160000,
0.22,'files/img/large/img12.jpg','Gấu bông',
1),

(13,'Gấu nâu lớn 3',2,
160000,
0.22,'files/img/large/img13.jpg','Gấu bông',
1),

(14,'Gấu nâu lớn 4',2,
160000,
0.22,'files/img/large/img14.jpg','Gấu bông',
1),

(15,'Bộ Totoro',2,
160000,
0.22,'files/img/large/img15.jpg','Gấu bông',
1),

(16,'Pink & Gray lớn',2,
160000,
0.22,'files/img/large/img16.jpg','Gấu bông',
1),

(17,'Gấu bông to loại 1',2,
160000,
0.22,'files/img/large/img17.jpg','Gấu bông',
1),

(18,'Orange & White',2,
160000,
0.22,'files/img/large/img18.jpg','Gấu bông',
1),

(19,'Cá sấu lớn',2,
160000,
0.22,'files/img/large/img19.jpg','Gấu bông',
1),

(20,'Gấu bông to VIOLET',2,
160000,
0.22,'files/img/large/img20.jpg','Gấu bông',
1),

(21,'Bộ Stitch',2,
160000,
0.22,'files/img/large/img21.jpg','Gấu bông',
1),

(22,'Bộ chó Husky Nga',2,
160000,
0.22,'files/img/large/img22.jpg','Gấu bông',
1),

(23,'Pikaca',3,
160000,
0.22,'files/img/pokemon/img31.jpg','Gấu bông',
1),

(24,'Squirtl',3,
160000,
0.22,'files/img/pokemon/img32.jpg','Gấu bông',
1),

(25,'Lapra',3,
160000,
0.22,'files/img/pokemon/img33.jpg','Gấu bông',
1),

(26,'Charmande',3,
160000,
0.22,'files/img/pokemon/img34.jpg','Gấu bông',
1),

(27,'Eeva',3,
160000,
0.22,'files/img/pokemon/img35.jpg','Gấu bông',
1),

(28,'Glaceo',3,
160000,
0.22,'files/img/pokemon/img36.jpg','Gấu bông',
1),

(29,'Snorla',3,
160000,
0.22,'files/img/pokemon/img37.jpg','Gấu bông',
1),

(30,'Manaph',3,
160000,
0.22,'files/img/pokemon/img38.jpg','Gấu bông',
1),

(31,'Suicua',3,
160000,
0.22,'files/img/pokemon/img39.jpg','Gấu bông',
1),

(32,'Ponyt',3,
160000,
0.22,'files/img/pokemon/img40.jpg','Gấu bông',
1),

(33,'Pikachu đặc biệt',3,
160000,
0.22,'files/img/pokemon/img41.jpg','Gấu bông',
1),

(34,'Raich',3,
160000,
0.22,'files/img/pokemon/img42.jpg','Gấu bông',
1),

(35,'Jigglypua',3,
160000,
0.22,'files/img/pokemon/img43.jpg','Gấu bông',
1),

(36,'Cleff',3,
160000,
0.22,'files/img/pokemon/img44.jpg','Gấu bông',
1),

(37,'Genga',3,
160000,
0.22,'files/img/pokemon/img45.jpg','Gấu bông',
1),

(38,'Togep',3,
160000,
0.22,'files/img/pokemon/img46.jpg','Gấu bông',
1),

(39,'Ma',3,
160000,
0.22,'files/img/pokemon/img47.jpg','Gấu bông',
1),

(40,'Mega Gardevoi',3,
160000,
0.22,'files/img/pokemon/img48.jpg','Gấu bông',
1),

(41,'Oshawot',3,
160000,
0.22,'files/img/pokemon/img49.jpg','Gấu bông',
1),

(42,'Plusle và Minu',3,
160000,
0.22,'files/img/pokemon/img50.jpg','Gấu bông',
1),

(43,'Bulbasaa',3,
160000,
0.22,'files/img/pokemon/img51.jpg','Gấu bông',
1),

(44,'Pich',3,
160000,
0.22,'files/img/pokemon/img51.png','Gấu bông',
1),

(45,'Froaki',3,
160000,
0.22,'files/img/pokemon/img52.jpg','Gấu bông',
1),

(46,'Lucari',3,
160000,
0.22,'files/img/pokemon/img53.jpg','Gấu bông',
1),

(47,'Rentora',3,
160000,
0.22,'files/img/pokemon/img54.jpg','Gấu bông',
1),

(48,'Sylveo',3,
160000,
0.22,'files/img/pokemon/img55.jpg','Gấu bông',
1),

(49,'Sniv',3,
160000,
0.22,'files/img/pokemon/img56.jpg','Gấu bông',
1),

(50,'Blastois',3,
160000,
0.22,'files/img/pokemon/img57.jpg','Gấu bông',
1),

(51,'Mega Charizard X',3,
160000,
0.22,'files/img/pokemon/img58.jpg','Gấu bông',
1),

(52,'Meowt',3,
160000,
0.22,'files/img/pokemon/img59.jpg','Gấu bông',
1),

(53,'Dragonit',3,
160000,
0.22,'files/img/pokemon/img60.jpg','Gấu bông',
1),

(54,'Pokemon starter Sinnoh',3,
160000,
0.22,'files/img/pokemon/img61.jpg','Gấu bông',
1),

(55,'Eevee và các hệ tiến hóa',3,
160000,
0.22,'files/img/pokemon/img62.jpg','Gấu bông',
1),

(56,'Bộ Pikachu đặc biệt',3,
160000,
0.22,'files/img/pokemon/img63.jpg','Gấu bông',
1),

(57,'Bộ Pokemon 1',3,
160000,
0.22,'files/img/pokemon/img64.jpg','Gấu bông',
1),

(58,'Bộ Pokemon 2',3,
160000,
0.22,'files/img/pokemon/img65.jpg','Gấu bông',
1),

(59,'Bộ Pokemon 3',3,
160000,
0.22,'files/img/pokemon/img66.jpg','Gấu bông',
1),

(60,'Aceus',3,
160000,
0.22,'files/img/pokemon/img67.jpg','Gấu bông',
1);

INSERT INTO storage(product_id, amount)
SELECT id, 10000 FROM products