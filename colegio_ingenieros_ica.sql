create database Colegio_Ingenieros_Ica;
use Colegio_Ingenieros_Ica;
drop database colegio_ingenieros_ica;


create table General_Page(
id_ge_page int not null auto_increment,
id_inicio int,
id_Institucional int,
id_serv_cip int,
id_cap_gener int,
id_admin int,
PRIMARY KEY(id_ge_page)
);

create table Inicio(
id_inicio int not null auto_increment,
id_Eventos int(15),
id_Eventos_Recomendados int(15),
id_Noticia int(15),
id_Convenio int(15),
id_Contenido int(15),
id_directivos int(15),
PRIMARY KEY(id_inicio)
);
create table DB_Eventos_Cip(
id_Eventos int not null auto_increment,
Titulo_Evento varchar(300) not null,
Descripcion_Evento varchar(350),
Imagen_Evento longblob,
FOREIGN KEY(id_Eventos) References Inicio(id_Eventos),
PRIMARY KEY(id_Eventos)
);
create table DB_Eventos_Recomendados(
id_Eventos_Recomendados int not null auto_increment,
Titulo_Evento varchar(300) not null,
Lugar_Evento varchar(350),
Fecha_Evento datetime,
Hora_Evento datetime,
Contenido_Evento longblob,
FOREIGN KEY(id_Eventos_Recomendados) References Inicio(id_Eventos_Recomendados),
PRIMARY KEY(id_Eventos_Recomendados)
);

create table DB_Noticia(
id_Noticia int not null auto_increment,
Titulo_Noticia varchar(300) not null,
Descripcion_Noticia varchar(350),
Fecha_Noticia datetime,
Imagen_Noticia longblob,
Video_Noticia longblob,
FOREIGN KEY(id_Noticia) References Inicio(id_Noticia),               
PRIMARY KEY(id_Noticia)
);

create table DB_Convenios(
id_Convenio int not null auto_increment,
id_Contenido int not null,
Imagen_Convenio longblob,
FOREIGN KEY(id_Convenio) References Inicio(id_Convenio),
PRIMARY KEY(id_Convenio)
);

create table DB_Contenido_Convenio(
id_Contenido int not null auto_increment,
id_Convenio int,
Archivos_Convenio longblob,
FOREIGN KEY(id_Convenio) References DB_Convenios(id_Convenio),
FOREIGN KEY(id_Contenido) References Inicio(id_Contenido),
PRIMARY KEY(id_Contenido)
);

create table Directivos(
id_directivos int not null auto_increment,
nombre_directivo varchar(300),
cargo_directivo varchar(300),
foto longblob,
FOREIGN KEY(id_directivos) References Inicio(id_directivos),
primary key(id_directivos)
);


--------------------------------------------
create table Institucional(
id_Institucional int not null auto_increment,
id_mi_vi_ob int(15),
id_consejo_dir int(15),
id_asamb_depa int(15),
id_iepi int(15),
id_ins_bie int(15),
id_com_re int(15),
primary key(id_Institucional)
);

create table Mision_Vision_Objetivo(
id_mi_vi_ob int not null auto_increment,
titulo varchar(300),
subtitulo varchar(100),
presubtitulo varchar(100),
contenido varchar(500),
FOREIGN KEY(id_mi_vi_ob) References Institucional(id_mi_vi_ob),
primary key(id_mi_vi_ob)
);

create table Consejo_directivo(
id_consejo_dir int not null auto_increment,
nombre_ing varchar(300),
cargo_ing varchar(300),
foto_ing longblob,
FOREIGN KEY(id_consejo_dir) References Institucional(id_consejo_dir),
primary key(id_consejo_dir)
);

create table Asamblea_departamental(
id_asamb_depa int not null auto_increment,
cod_ing int(15),
nombre_cap varchar(300),
nom_ap_ing varchar(300),
FOREIGN KEY(id_asamb_depa) References Institucional(id_asamb_depa),
primary key(id_asamb_depa)
);

create table IEPI(
id_iepi int not null auto_increment,
titulo varchar(300),
img_resolucion longblob,
img_ing longblob,
FOREIGN KEY(id_iepi) References Institucional(id_iepi),
primary key(id_iepi)
);

create table Instituto_bienestar(
id_ins_bie int not null auto_increment,
titulo varchar(300),
img_resolucion longblob,
FOREIGN KEY(id_ins_bie) References Institucional(id_ins_bie),
primary key(id_ins_bie)
);
create table Comunicados_resoluciones(
id_com_re int not null auto_increment,
titulo_com_re varchar(300),
img_re longblob,
FOREIGN KEY(id_com_re) References Institucional(id_com_re),
primary key(id_com_re)
);
-------------------------------------------
create table Servicios_cip(
id_serv_cip int not null auto_increment,
id_colegiacion int(15),
id_pag_hab int(15),
id_cer_hab int(15),
id_ins_serv_soc int(15),
id_dup_car_di_sede int(15),
id_alq_local int(15),
primary key(id_serv_cip)
);

create table Colegiacion(
id_colegiacion int not null auto_increment,
titulo_col varchar(300),
desc_col varchar(400),
requisitos varchar(500),
FOREIGN KEY(id_colegiacion) References Servicios_cip(id_colegiacion),  
primary key(id_colegiacion)
);

create table Pago_Habilidad(
id_pag_hab int not null auto_increment,
titulo_pag varchar(300),
contenido_pag varchar(500),
FOREIGN KEY(id_pag_hab) References Servicios_cip(id_pag_hab),  
primary key(id_pag_hab)
);

create table Cer_Habilidad(
id_cer_hab int not null auto_increment,
titulo_cer varchar(300),
contenido_pag varchar(500),
FOREIGN KEY(id_cer_hab) References Servicios_cip(id_cer_hab),  
primary key(id_cer_hab)
);

create table Alquier_Local(
id_alq_local int not null auto_increment,
titulo_alq varchar(300),
contenido_alq varchar(500),
FOREIGN KEY(id_alq_local) References Servicios_cip(id_alq_local),  
primary key(id_alq_local)
);


-------------------------------------------
create table Capitulos_Generales(

id_cap_gener int not null auto_increment,
id_cap_sistemas int(15),
id_cap_agronomia int(15),
id_cap_ambiental int(15),
id_cap_civil int(15),
id_cap_minas int(15),
id_cap_quimica int(15),
id_cap_pesquera int(15),
primary key(id_cap_gener)
);

create table Capitulo_Sitemas(
id_cap_sistemas int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_sistemas) References Capitulos_Generales(id_cap_sistemas),  
primary key(id_cap_sistemas)
);

create table Capitulo_Agronomia(
id_cap_agronomia int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_agronomia) References Capitulos_Generales(id_cap_agronomia),  
primary key(id_cap_agronomia)
);

create table Capitulo_Ambiental(
id_cap_ambiental int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_ambiental) References Capitulos_Generales(id_cap_ambiental),  
primary key(id_cap_ambiental)
);
create table Capitulo_Civil(
id_cap_civil int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_civil) References Capitulos_Generales(id_cap_civil),  
primary key(id_cap_civil)
);
create table Capitulo_Minas(
id_cap_minas int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_minas) References Capitulos_Generales(id_cap_minas),  
primary key(id_cap_minas)
);
create table Capitulo_Quimica(
id_cap_quimica int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_quimica) References Capitulos_Generales(id_cap_quimica),  
primary key(id_cap_quimica)
);
create table Capitulo_Pesquera(
id_cap_pesquera int not null auto_increment,
titulo varchar(300),
contenido varchar(300),
FOREIGN KEY(id_cap_pesquera) References Capitulos_Generales(id_cap_pesquera),  
primary key(id_cap_pesquera)
);

------------------------------------------

create table Admin1(
id_admin int not null auto_increment,
user varchar(50) not null,
password varchar(100) not null,
email varchar(250) ,
pasadmin varchar(250),
foto longblob,
rol int(3),
primary key(id_admin)
);




