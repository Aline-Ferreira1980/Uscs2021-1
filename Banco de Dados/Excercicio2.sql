use atv1_bd_714686;
INSERT INTO Pais VALUES (10,'BRASIL');
delete from pais where idPais= 10 and nome='Brasil';
desc pais;
INSERT INTO Pais VALUES (NULL,NULL);

INSERT INTO Pais VALUES (NULL,'BRASIL');
delete from pais where idPais= 1 and nome='null';
INSERT INTO Pais (Nome, IdPais) VALUES ('BRASIL',10);

INSERT INTO Pais (idPais, Nome) VALUES (10,'BRASIL'),(NULL, 'EQUADOR');
INSERT INTO Pais (Nome, idPais) VALUES (10,'BRASIL'),(NULL, 'EQUADOR');
INSERT INTO Pais VALUES (NULL,'NULL');
INSERT INTO Pais (Nome, IdPais) VALUES (10,'BRASIL');
select * from pais;
INSERT INTO Pais VALUES (NULL,'BRASIL');