/*
MYSQL

database name: DBAerolinea
character set: utf8
collation: utf8_general_ci

 */


CREATE TABLE AEROPUERTO
(	IATA_aeropuertoID varchar(3),
	nombreAeropuerto varchar(50),
	PRIMARY KEY (IATA_aeropuertoID)
);

INSERT INTO AEROPUERTO VALUES ('LIM','Jorge Chavez International Airport');
INSERT INTO AEROPUERTO VALUES ('EZE','Ministro Pistarini International Airport');
INSERT INTO AEROPUERTO VALUES ('MVD','Carrasco International Airport');
INSERT INTO AEROPUERTO VALUES ('GRU','Sao Paulo-Guarulhos International Airport');
INSERT INTO AEROPUERTO VALUES ('BOG','El Dorado International Airport');
INSERT INTO AEROPUERTO VALUES ('LPB','El Alto International Airport');
INSERT INTO AEROPUERTO VALUES ('ACA','General Juan N. Alvarez International Airport');
INSERT INTO AEROPUERTO VALUES ('UIO','Mariscal Sucre International Airport');
INSERT INTO AEROPUERTO VALUES ('YOW','Ottawa Macdonald-Cartier International Airport');
INSERT INTO AEROPUERTO VALUES ('JFK','John F. Kennedy International Airport');
INSERT INTO AEROPUERTO VALUES ('LAX','Los Angeles International Airport');
INSERT INTO AEROPUERTO VALUES ('ORD','O Hare International Airport');
INSERT INTO AEROPUERTO VALUES ('BCN','Barcelona-El Prat Airport');
INSERT INTO AEROPUERTO VALUES ('MAD','Adolfo Suarez Madrid-Barajas Airport');
INSERT INTO AEROPUERTO VALUES ('CDG','Charles de Gaulle Airport');
