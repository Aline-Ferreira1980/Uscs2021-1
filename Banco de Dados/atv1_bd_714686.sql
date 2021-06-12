create database if not exists atv1_bd_714686;
use atv1_bd_714686;

create table ModoPreparo (idModoPreparo int unsigned primary key ,
						Descricao varchar (45) not null);
show create table ModoPreparo;

create table Bebida ( idBebida int unsigned primary key,
					  Nome varchar(45) not null,
                      Descricao text, 
                      VolumeMin smallint,
                      VoluneMax smallint,
                      ValorVenda decimal(5,2) unsigned not null,
                      idPaisOrigem int,
                      idModoPreparo int unsigned not null,
                      constraint idModoPreparo foreign key (idModoPreparo) references ModoPreparo (idModoPreparo));
show create table Bebida;
drop table pais;
create table Pais (idPais int unsigned auto_increment primary key,
				   Nome varchar(45) not null);
show create table Pais;
create table Ingrediente (idIngrediente int unsigned primary key,
						   Nome varchar (45) not null,
                           ValorCustoMilhar decimal(5,2) unsigned not null);
show create table Ingrediente;

create table Preparo (idBebida int unsigned not null,
					  idIngrediente int unsigned not null,
                      qtdeIngrediente smallint unsigned not null,
                      constraint idBebida foreign key (idBebida) references Bebida (idBebida),
                      constraint idIngrediente foreign key (idIngrediente) references Ingrediente (idIngrediente));
show create table Preparo;

show tables;