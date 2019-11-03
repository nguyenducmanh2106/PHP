-- a.	Lấy thông tin tất cả các khách hàng từ bảng customers
select *
from customers;

-- b.	Lấy thông tin tất cả các khách hàng từ bảng customers có customerName chứa chuỗi ký tự ‘model’
select *
from customers
where customerName like'%model%';
-- c.	Lấy thông tin tất cả các khách hàng từ bảng customers có country là USA và có creditLimit lớn hơn 10000
select *
from customers
where country='USA' and creditLimit>10000;
-- d.	Lấy thông tin 10 khách hàng đầu tiên từ bảng customers mà có state không rỗng
select *
from customers
where state<>'NULL'
limit 10;
-- e.	Lấy thông tin tất cả các khách hàng từ bảng customers có phone chứa chuỗi “40”, sắp xếp theo chiều giảm dần của trường customerNumber
select *
from customers
where phone like'%40%'
order by customerNumber DESC;
-- f.	Tạo mới bảng users, gồm các thông tin về các field/column như sau:
drop table if exists users;
create table users(
id int(10) NOT NULL AUTO_INCREMENT PRIMARY KEY,
username varchar(255) NOT NULL,
password varchar(255) NOT NULL,
gender tinyint(3) NULL,
description text character set utf8 collate utf8_general_ci NULL,
birthday datetime NULL,
date_created timestamp default current_timestamp
)ENGINE = InnoDB;
-- g.	Thực hiện thêm dữ liệu mới cho bảng users vừa tạo ở ý f, các dữ liệu mới đc mô tả như sau:
insert into users(username,password,gender,description,birthday) values('nvmanh1','123456',1,'Đây là user nvmanh1','1990-01-05'),
('nvmanh2','654321',0,'Đây là user nvmanh2','1998-02-23'),
('nvmanh3','1234567890',2,'Đây là user nvmanh3','1994-06-05'),
('nvmanh4','111111',2,'Đây là user nvmanh4','2022-02-22');
-- h.	Từ bảng users vừa tạo, hãy sửa username của user mà có id = 2, username sau khi sửa có giá trị mới = user_edited
update users set username='user_edited' where id=2;
-- i.	Từ bảng users vừa tạo, hãy xóa user có username là nvmanh4
delete from users where username='nvmanh4';
