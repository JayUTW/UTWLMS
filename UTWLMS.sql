Create database UTW_LMSV1 


Create table Admin_tbl (
    emailid varchar(100) primary key not null,
    phoneno varchar(10) unique not null,
    password varchar(100) not null,
    modified datetime default now(),
    Login_status int default 0,
    OTP varchar(6) not null
)

/* Cateogry Table */

create table category (
Category_Id varchar(10) primary key,
Category_Name varchar(50) not null unique,
Category_Code varchar(10) not null unique
)

/* Program Table */

Create table Program (
ProgramId varchar(10) primary key,
Program_Name varchar(100) UNIQUE not null,
Program_Description varchar(100)not null,
Program_Image varchar(500) not null,
CreatedDate datetime DEFAULT now(),
Category_id varchar(10) REFERENCES category(Category_id)
)

/* Topic Table */

Create table topic (
TopicId varchar(10) primary key,
TopicName varchar(200) not null,
TopicDescription varchar(50000) not null,
CreatedDate datetime DEFAULT now(),
ProgramID varchar(10) REFERENCES program(programid)
)

/* for Query Contact*/

Create table customer_query( cq_id int primary key AUTO_INCREMENT,
                            cname varchar(50) not null,email varchar(50) not null,phone varchar(10),
                            message varchar(500) not null, created_date datetime DEFAULT now())