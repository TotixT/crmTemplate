CREATE DATABASE campus;
CREATE TABLE campers(
    id INT primary key AUTO_INCREMENT,
    NOMBRES VARCHAR (50) NOT NULL,
    DIRECCION VARCHAR (40) NOT NULL,
    LOGROS VARCHAR (60) NOT NULL
);

INSERT INTO `campers` values ('Santiago','Calle 111','Tuve sexo');