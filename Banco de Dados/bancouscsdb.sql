create database if not exists Xpto;

drop database Xpto;

use Xpto;

create table  Depto (codigo_depto char(3) primary key, 
						nome_depto char(30) not null,
                        numero_gerente smallint unsigned);

create table Aloc (codigo_depto char(3), numero_func smallint unsigned, primary key(codigo_depto, numero_func));
create table Func ( numero_func smallint unsigned primary key, 
					nome_func varchar(40) not null,
                    cpf_func char(14) not null,
                    data_admissao_func date not null,
                    data_saida_func date,
                    situacao_func char(1) not null,
                    codigo_carg char(3) not null,
                    salario_base_func decimal(7,2) not null) ;
                    
create table Carg (codigo_carg char(3) primary key,
					nome_carg char(35) not null,
                    classe_carg char (1) not null,
                    tipo_contrato_carg char(1) not null,
                    salario_piso_carg decimal(7,2) not null,
                    salario_teto_carg decimal(7,2) not null,
                    ind_comissao_carg char(1)not null);
 drop table pgto;                   
create table Pgto (ano_ref_pgto date, 
				mes_ref_pgto date,
                numero_func smallint not null,
                salario_base_func decimal(7,2) not null,
                total_desc_pgto decimal(7,2) not null,
                total_horas_pgto decimal(3,0) not null,
                primary key (ano_ref_pgto, mes_ref_pgto, numero_func));
create table Hist (numero_hist smallint primary key, 
                numero_func smallint not null,
                data_ini_hist timestamp,
                codigo_carg char(3) not null,
                salario_base_func decimal (7,2) not null);
SHOW CREATE TABLE aloc;  
           
           desc func;
alter table func add column sexo_func char(1) not null;
show tables;