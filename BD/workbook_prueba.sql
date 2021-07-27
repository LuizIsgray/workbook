create database workbook_prueba;
\c workbook_prueba;


create table CLIENTE(ID_cliente serial primary key, nombre varchar(30) not null, ap_paterno varchar(30) not null, ap_materno varchar(30) not null, 
sexo varchar(15) not null, fecha_nacimiento date not null,
codigo_postal int not null, calle varchar(50) not null,numero_ext int not null, numero_int int, 
colonia varchar(50) not null, ciudad varchar(50) not null, estado varchar(30) not null, punto_referencia text not null, fachada text not null,
correo_e varchar(40) unique not null, contrasena varchar(30) not null, celular bigint unique not null);


INSERT INTO CLIENTE(nombre, ap_paterno, ap_materno, sexo, fecha_nacimiento, codigo_postal, calle, numero_ext, numero_int, colonia, ciudad, estado, punto_referencia, fachada, correo_e, contraseña, celular) VALUES ('$nombre', '$ap_paterno', '$ap_materno', '$sexo', '$fecha_nacimiento', $codigo_postal, '$calle', $numero_ext, $numero_int, '$colonia', '$ciudad', '$estado', '$punto_referencia', '$fachada', '$correo_e', '$contraseña', $celular);


------------------------
create table PRESTADOR_DE_SERVICIOS(ID_cliente serial primary key, nombre varchar(30) not null, ap_paterno varchar(30) not null, ap_materno varchar(30) not null, 
sexo varchar(15) not null, fecha_nacimiento date not null,
servicio_ofrecido varchar(30) not null, correo_e varchar(40) unique not null, contrasena varchar(30) not null, celular bigint unique not null);

INSERT INTO PRESTADOR_DE_SERVICIOS(nombre, ap_paterno, ap_materno, sexo, fecha_nacimiento, correo_e, contraseña, celular) 
VALUES ('$nombre', '$ap_paterno', '$ap_materno', '$sexo', '$fecha_nacimiento', '$correo_e', '$contraseña', $celular);