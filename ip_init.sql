use u282914523_bk;
create table visitors(
		id int unsigned not null auto_increment primary key,	
		ip char(50) not null,
		lvisitt bigint not null,
        freq int unsigned not null
		);

