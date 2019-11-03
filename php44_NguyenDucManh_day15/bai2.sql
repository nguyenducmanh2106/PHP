-- tạo cơ sở dữ liệu
-- ------------------
create database if not exists bai2;
use bai2;
-- ------------------
-- tạo các bảng
-- ------------------
-- tạo bảng NHANVIEN
-- ------------------
drop table if exists NHANVIEN;
create table NHANVIEN(
HONV varchar(10) character set utf8 collate utf8_general_ci NOT NULL,
TENLOT varchar(10) character set utf8 collate utf8_general_ci NOT NULL,
TENNV varchar(10) character set utf8 collate utf8_general_ci NOT NULL,
PHAI varchar(10) character set utf8 collate utf8_general_ci NOT NULL,
LUONG int(10) NULL,
MANV int(10) NOT NULL,
NGSINH date NULL,
DIACHI varchar(256) character set utf8 collate utf8_general_ci NULL,
PHG int(2) NULL
)ENGINE = InnoDB;
-- ----------------
-- tạo bảng DEAN
-- ----------------
drop table if exists DEAN;
create table DEAN(
TENDA varchar(20) character set utf8 collate utf8_general_ci NOT NULL,
MADA int(2) NOT NULL,
DDIEM_DA varchar(10) character set utf8 collate utf8_general_ci NULL,
PHG int(2) NULL
)ENGINE = InnoDB;
-- -----------------
-- tạo bảng PHONGBAN
-- -----------------
drop table if exists PHONGBAN;
create table PHONGBAN(
PHG int(2) NOT NULL,
TENPHG varchar(10) character set utf8 collate utf8_general_ci NULL
)ENGINE = InnoDB;
-- -----------------
-- tạo bảng PHANCONG
-- -----------------
drop table if exists PHANCONG;
create table PHANCONG(
MANV int(10) NOT NULL,
MADA int(2) NOT NULL,
SOGIO float(10) NULL
)ENGINE = InnoDB;
-- ----------------------------
-- Nhập dữ liệu cho các bảng
-- ----------------------------
insert into NHANVIEN values('Đinh','Lê','Tiên','Nam',4000,123456789,'1965-09-01','Nguyễn Trãi, Q5',1);
insert into NHANVIEN values('Nguyễn','Thị','Loan','Nữ',2500,3333333222,'1965-09-01','Nguyễn Huệ, Q1',5);
insert into NHANVIEN values('Nguyễn','Lan','Anh','Nữ',4300,343456789,'2001-09-01','Lê Lợi, Q1',5 );
insert into NHANVIEN values('Trần','Thanh','Tâm','Nam',3800,123242789,'1965-09-01','Trần Não, Q2',2);

insert into DEAN values('Sản phẩm X',1,'Quy Nhơn',5);
insert into DEAN values('Sản phẩm Y',2,'Nha Trang',5);
insert into DEAN values('Sản phẩm Z',3,'TP HCM',5);
insert into DEAN values('Tin học hóa',10,'Bình Dương',4);

insert into PHONGBAN values(1,'Nhân sự');
insert into PHONGBAN values(2,'Kế hoạch');
insert into PHONGBAN values(3,'Kinh doanh');
insert into PHONGBAN values(4,'Marketing');
insert into PHONGBAN values(5,'Kế toán');

insert into PHANCONG values(123456789,1,32.0);
insert into PHANCONG values(123456789,2,8.0);
insert into PHANCONG values(343456789,3,40.0);
insert into PHANCONG values(123242789,1,20.0);

-- ---------------------------
-- Truy vấn dữ liệu trong sql
-- ---------------------------
-- 	Hiển thị tất cả thông tin của bảng NHANVIEN
select *
from NHANVIEN;

-- Hiển thị thông tin của những nhân viên ở phòng số 5
select*
from NHANVIEN
where PHG=5;

-- Hiển thị mã nhân viên, họ nhân viên, tên lót và tên nhân viên của những nhân viên ở phòng số 5 và có lương >= 3000
select MANV,HONV,TENLOT,TENNV
from NHANVIEN
where PHG=5 and LUONG>=3000;

-- Hiển thị mã nhân viên, tên nhân viên của những nhân viên có lương từ 2000 đến 8000
select MANV,TENNV
from NHANVIEN
where LUONG between 2000 and 8000;

-- •Hiển thị thông tin của những nhân viên ở địa chỉ có tên đường là Nguyễn
select *
from NHANVIEN
where DIACHI like'Nguyễn%';

-- •Cho biết số lượng nhân viên
select count(MANV) as SOLUONG_NV
from NHANVIEN;

-- 	Cho biết số lượng nhân viên trong từng phòng ban
select PHONGBAN.TENPHG,count(MANV)
from NHANVIEN right join PHONGBAN on NHANVIEN.PHG=PHONGBAN.PHG
group by PHONGBAN.PHG;

-- Hiển thị thông tin về mã nhân viên, tên nhân viên và tên phòng ban ở phòng kế toán
select MANV,TENNV,TENPHG
from NHANVIEN inner join PHONGBAN on NHANVIEN.PHG=PHONGBAN.PHG
where PHONGBAN.TENPHG='Kế toán';
