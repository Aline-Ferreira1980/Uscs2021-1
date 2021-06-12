desc estado;
insert into estado values ('MG',"Minas Gerais"); -- nesse caso funciona pq está na sequencia da criação da tabela.
insert into estado (idEstado, Nome) values ('SP', 'São Paulo');
insert into estado (idEstado, Nome) values ('ES', 'Espírito Santo');
select * from estado;

insert into editora (idEditora, Nome) values (10, 'Atlas');

insert into editora (idEditora, Nome) values (null, 'Globo');
insert into editora (idEditora, Nome) values (0, 'LTC');
insert into editora (Nome) values ('Moderna');

insert into editora (Nome, UF) values ('Paulina', 'RS'); -- falha pq não tem na tabela estado  RS
insert into editora (Nome, UF) values ('Paulina', 'SP');


select * from editora where idEditora in (12,15);


update editora set cidade='Rio de Janeiro', uf='RJ'
where idEditora=13;
delete from Estado where idEstado='0' and Nome="Minas Gerais";
