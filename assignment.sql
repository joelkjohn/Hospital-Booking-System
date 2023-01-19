DROP DATABASE assignment;
CREATE DATABASE assignment;
USE assignment;


CREATE TABLE PATIENT(
    Userid Int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    patientemail VarChar(128) NOT NULL,
    patientpassword VarChar(128) NOT NULL,
    patientFN VarChar(128) NOT NULL,
    patientLN VarChar(128) NOT NULL,
    patientaddress VarChar(128) NOT NULL,
    patientgender VarChar(128) NOT NULL,
    patientdob VarChar(128) NOT NULL
    
    	
);

CREATE TABLE DOCTOR(
    Drid Int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    DrEmail VarChar(128) NOT NULL,
    DrPassword VarChar(128) NOT NULL,
    DrFirstname VarChar(128) NOT NULL,
    DrLastname VarChar(128) NOT NULL,
    DrAddress VarChar(128) NOT NULL,
    DrGender VarChar(128) NOT NULL,
    DrDOB VarChar(128) NOT NULL,
    DrSpec VarChar(128) NOT NULL
);

CREATE TABLE APPOINTMENT(
    Appid Int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    Userid Int(11) NOT NULL,
    trtid Int(11) NOT NULL,
    Appdate VarChar(128) NOT NULL,
    Appstats VarChar(128) NOT NULL DEFAULT "not complete",
    locationid Int(11) NOT NULL

);

CREATE TABLE PLACE(
    locationid Int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    locationNM VarChar(128) NOT NULL
);

CREATE TABLE TREATMENT(
    trtid Int(11) PRIMARY KEY AUTO_INCREMENT NOT NULL,
    trtname VarChar(128) NOT NULL,
    Drid Int(11) NOT NULL
    
);

ALTER TABLE TREATMENT ADD FOREIGN KEY(Drid) REFERENCES DOCTOR(Drid) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE APPOINTMENT ADD FOREIGN KEY(Userid) REFERENCES PATIENT(Userid) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE APPOINTMENT ADD FOREIGN KEY(trtid) REFERENCES TREATMENT(trtid) ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE APPOINTMENT ADD FOREIGN KEY(locationid) REFERENCES PLACE(locationid) ON DELETE CASCADE ON UPDATE CASCADE;
	


INSERT INTO patient(patientemail,patientpassword,patientFN,patientLN,patientaddress,patientgender,patientdob)
	VALUES('bob@email.com', 'bbb', 'Bob','Dob', 'street', 'Male', '2022-01-04');
		

INSERT INTO doctor(DrEmail,DrPassword,DrFirstname,DrLastname,DrAddress,DrGender,DrDOB,DrSpec)
	VALUES('Joel@email.com', 'jjj', 'Joel', 'John', 'Petaling Jaya', 'Male', '2022-03-01', 'Heart'),
		('James@email.com', 'zzz', 'James', 'Dude', Kuala Lumpur','Male', '2021-02-01', 'Covid-19');
		

INSERT INTO treatment(trtname, Drid)
	VALUES(' Heart surgery', 1),
		('General check-up',1),
		('Covid-19',2);


INSERT INTO place(locationNM)
	VALUES('Jln Profesor Diraja Ungku Aziz, 59100 Kuala Lumpur, Selangor'),
		('No G, 6, Jln Cenuk 1, Bandar Puchong Jaya, 47170 Puchong, Selangor');
