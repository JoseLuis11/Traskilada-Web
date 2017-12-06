create database shortcut;
use shortcut;

CREATE TABLE Employee
(
  availability_E BOOLEAN NOT NULL,
  id_E CHAR(10) NOT NULL,
  name_E VARCHAR(100) NOT NULL,
  lastName_E VARCHAR(100) NOT NULL,
  phoneNumber_E CHAR(10) NOT NULL,
  email_E VARCHAR(50) NOT NULL,
  type_E CHAR(50) NOT NULL,
  commissionPerc_E INT NOT NULL,
  password_E VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_E)
);

CREATE TABLE Owner
(
  id_O CHAR(10) NOT NULL,
  name_O VARCHAR(100) NOT NULL,
  lastName_O VARCHAR(100) NOT NULL,
  email_O VARCHAR(50) NOT NULL,
  phoneNumber_O CHAR(10) NOT NULL,
  password_O VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_O)
);

CREATE TABLE CashOut
(
  id_CO CHAR(10) NOT NULL,
  dateTime datetime NOT NULL,
  amount INT NOT NULL,
  id_O CHAR(10) NOT NULL,
  PRIMARY KEY (id_CO),
  FOREIGN KEY (id_O) REFERENCES Owner(id_O)
);

CREATE TABLE User
(
  id_U CHAR(10) NOT NULL,
  name_U VARCHAR(100) NOT NULL,
  lastName_U VARCHAR(100) NOT NULL,
  phoneNumber_U CHAR(10) NOT NULL,
  email_U VARCHAR(50) NOT NULL,
  password_U VARCHAR(50) NOT NULL,
  PRIMARY KEY (id_U)
);

CREATE TABLE Employee_CashOut
(
  nameA VARCHAR(100) NOT NULL,
  id_E CHAR(10) NOT NULL,
  id_CO CHAR(10) NOT NULL,
  FOREIGN KEY (id_E) REFERENCES Employee(id_E),
  FOREIGN KEY (id_CO) REFERENCES CashOut(id_CO)
);

CREATE TABLE Workplace
(
  id_W CHAR(10) NOT NULL,
  name_W VARCHAR(100) NOT NULL,
  email_w VARCHAR(50) NOT NULL,
  schedule time NOT NULL,
  address_W VARCHAR(100) NOT NULL,
  id_O CHAR(10) NOT NULL,
  PRIMARY KEY (id_W),
  FOREIGN KEY (id_O) REFERENCES Owner(id_O)
);

CREATE TABLE Appointment
(
  id_A CHAR(10) NOT NULL,
  dateTime datetime NOT NULL,
  id_U CHAR(10) NOT NULL,
  id_E CHAR(10) NOT NULL,
  id_W CHAR(10) NOT NULL,
  PRIMARY KEY (id_A),
  FOREIGN KEY (id_U) REFERENCES User(id_U),
  FOREIGN KEY (id_W) REFERENCES Workplace(id_W),
  FOREIGN KEY (id_E) REFERENCES Employee(id_E)
);

CREATE TABLE Employee_Workplace
(
  contractDay date NOT NULL,
  id_E CHAR(10) NOT NULL,
  id_W CHAR(10) NOT NULL,
  FOREIGN KEY (id_E) REFERENCES Employee(id_E),
  FOREIGN KEY (id_W) REFERENCES Workplace(id_W)
);

CREATE TABLE Comment
(
  message VARCHAR(250) NOT NULL,
  id_Co VARCHAR(250) NOT NULL,
  id_E CHAR(10) NOT NULL,
  id_W CHAR(10) NOT NULL,
  id_U CHAR(10) NOT NULL,
  PRIMARY KEY (id_Co),
  FOREIGN KEY (id_E) REFERENCES Employee(id_E),
  FOREIGN KEY (id_W) REFERENCES Workplace(id_W),
  FOREIGN KEY (id_U) REFERENCES User(id_U)
);

CREATE TABLE Service
(
  name_S CHAR(10) NOT NULL,
  id_S CHAR(10) NOT NULL,
  price CHAR(5) NOT NULL,
  PRIMARY KEY (id_S)
);

CREATE TABLE Employee_Service
(
  id_S CHAR(10) NOT NULL,
  id_E CHAR(10) NOT NULL,
  FOREIGN KEY (id_S) REFERENCES Service(id_S),
  FOREIGN KEY (id_E) REFERENCES Employee(id_E)
);

CREATE TABLE Service_Workplace
(
  id_S CHAR(10) NOT NULL,
  id_W CHAR(10) NOT NULL,
  FOREIGN KEY (id_S) REFERENCES Service(id_S),
  FOREIGN KEY (id_W) REFERENCES Workplace(id_W)
);

CREATE TABLE Service_Appointment
(
  id_S CHAR(10) NOT NULL,
  id_A CHAR(10) NOT NULL,
  FOREIGN KEY (id_S) REFERENCES Service(id_S),
  FOREIGN KEY (id_A) REFERENCES Appointment(id_A)
);
#Hacer índices...