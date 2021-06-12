drop database if exists distribuidora;
create database distribuidora;
use distribuidora;

create table Estado (
idEstado char(2) primary key,
Nome varchar(45)
);

create table Idioma (
idIdioma char(2) primary key,
Descricao varchar(40)
);

create table Editora (
idEditora smallint unsigned primary key auto_increment,
Nome varchar(60) not null,
Logradouro varchar(80),
Numero smallint,
Complemento varchar(60),
Bairro varchar(60),
Cidade varchar(60),
Cep char(8),
UF char(2),
constraint foreign key (UF) references Estado (IdEstado)
);

create table Livro (
idLivro smallint unsigned primary key auto_increment,
Nome varchar(120) not null,
codISBN varchar(13),
numEdicao tinyint unsigned,
NomesAutores varchar(80),
anoEdicao year,
Idioma char(2) not null,
codEditora smallint unsigned,
constraint foreign key (Idioma) references Idioma (idIdioma),
constraint foreign key (codEditora) references Editora (IdEditora));

