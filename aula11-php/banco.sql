create database aula11;

create table usuario(
idusuario int auto_increment primary key,
email varchar(40) unique,
nome varchar(50),
senha varchar(120) not null,
perfil varchar(20)
);

show tables;

insert into usuario values(null, 'maria@gmail.com','maria','123','ADM');
insert into usuario values(null, 'romario@gmail.com','romario',md5('123'),'ADM');