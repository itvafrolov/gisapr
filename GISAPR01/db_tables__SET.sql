CREATE TABLE clients (
id int(11) NOT NULL Primary key,
name VARCHAR(255) NOT NULL,
address VARCHAR(255) NULL,
code VARCHAR(20) NULL,
passport VARCHAR(255) NULL,
contact VARCHAR(100) NULL,
phone VARCHAR(200) NULL,
phone2 VARCHAR(13) NULL,
email VARCHAR(100) NULL,
note VARCHAR(255) NULL,
note2 VARCHAR(255) NULL
)

/*-----------------------------*/

CREATE TABLE employees (
id int(11) NOT NULL Primary key,
fullname VARCHAR(200) NOT NULL,
birthday date, 
address VARCHAR(255) NULL,
startwork date,
endwork date,
typeworking int(11),
position varchar(50),
login varchar(50),
password varchar(20),
idnumber varchar(10),
phone VARCHAR(200)
)

/*-----------------------------*/

CREATE TABLE orders (
id int(11) NOT NULL Primary key,
numcontract int,
startcontract date,
typeorder varchar(10),
ordername varchar(255),
orderaddress varchar(255),
deadline date,
clientid int,
jobload varchar(255),
ordersb int
)

/*-----------------------------*/
CREATE TABLE ordersb (
id int(11) NOT NULL Primary key,
ordersid int,
amount float,
salaryzem float,
salarygeod float,
salaryarch float,
salaryestimator float 
)

/*DROP TABLE ordersb*/

/*-----------------------------*/

CREATE TABLE historyorders (
id int(11) NOT NULL Primary key,
ordersid int,
event varchar(255),
dataevent date
)

/*-----------------------------*/ 
CREATE TABLE historyordersb (
id int(11) NOT NULL Primary key,
ordersid int,
amount float,
dataamount date
)

/*-----------------------------*/ 

CREATE TABLE ordersemlp (
id int(11) NOT NULL Primary key,
ordersid int,
employid int
)

/* DROP TABLE ordersemlp */
