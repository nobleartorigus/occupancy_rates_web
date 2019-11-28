CREATE DATABASE occupancy_rates;
USE occupancy_rates;

CREATE TABLE referencias(
    id  int(255) auto_increment not null,
    fila    int(255) not null,
    piso    int(50) not null,
    imagen  varchar(255) not null,
    fecha date not null,
    
    CONSTRAINT pk_referencias PRIMARY KEY(id)
)ENGINE = InnoDb; 

CREATE TABLE escritorios(
    id  int(255) auto_increment not null,
    referencia_id int(255) not null,
    fila    int(255) not null,
    piso    int(50) not null,
    imagen  varchar(255),
    estatus varchar(20) not null,
    fecha date not null,
    hora time not null,
    
    CONSTRAINT pk_escritorios PRIMARY KEY(id)
)ENGINE = InnoDb; 

INSERT INTO escritorios VALUES(NULL, 3, 1, 2, NULL, 1, CURDATE(), CURTIME());
