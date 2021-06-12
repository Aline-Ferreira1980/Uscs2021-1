create database if not exists distribuidora;
use distribuidora;

create table Estado (idEstado char(2) primary key, Nome varchar(45));
show create table estado;
desc estado;

create table Idioma (idIdioma char(2) primary key, Descricao varchar(40));
show create table Idioma;
desc idioma;

create table Editora (idEditora smallint unsigned primary key auto_increment,
					   Nome varchar(60) not null,
					   Logradouro varchar(80),
                       Numero smallint unsigned,
                       Complemento varchar(60),
                       Bairro varchar(60),
                       Cidade varchar (60),
                       Cep char(8),
                       UF char(2), constraint fkEstado foreign key (UF) references Estado (idEstado));
show create table Editora;
desc Editora;

drop table livro;
create table Livro (idLivro smallint unsigned primary key,
					   Nome varchar(120) not null,
					   codISBN varchar(13),
                       numEdicao tinyint unsigned,
                       nomeAutores varchar(80),
                       anoEdicao year,
                       Idioma char(2) not null, 
                       codEditora smallint(2) unsigned, 
                       constraint fkIdioma foreign key (Idioma) references Idioma (idIdioma),
                       constraint fkEditora foreign key (codEditora) references Editora (idEditora));
show create table Livro;
desc Livro;

insert into Estado values ('SP', 'São Paulo');
insert into Estado values ('RJ','Rio de Janeiro');
insert into Estado values ('MG','Minas Gerais');
insert into Estado values ('ES','Espirito Santo');
select * from Estado;
insert into Editora  (Nome) values ('Globo');
insert into Editora  (Nome,UF) values ('LTC','RJ');
insert into Editora  (Nome,UF) values ('Atlas','RJ');
insert into Editora  (Nome,UF) values ('Companhia das Letras','MG');

select * from Editora;

