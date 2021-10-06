DROP TABLE IF EXISTS Upload;
DROP TABLE IF EXISTS Imovel;
DROP TABLE IF EXISTS Utilizador;
DROP TABLE IF EXISTS TipoUtilizador;


CREATE TABLE TipoUtilizador(
    id_TipoUtilizador INT PRIMARY KEY,
    descricao VARCHAR(255)
);

CREATE TABLE Utilizador(
    id_utilizador INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(255) UNIQUE,
    password VARCHAR(255),
    email VARCHAR(255) UNIQUE,
    nome VARCHAR(255),
    id_TipoUtilizador INT,

    FOREIGN KEY (id_TipoUtilizador) REFERENCES TipoUtilizador(id_TipoUtilizador)
);

INSERT INTO TipoUtilizador VALUES(10, 'Administrador');
INSERT INTO TipoUtilizador VALUES(20, 'Utilizador');
INSERT INTO TipoUtilizador VALUES(30, 'Convidado');

INSERT INTO Utilizador VALUES(1,'Admin','pass123','admin@meuemail.pt','Adminstrador',10);
INSERT INTO Utilizador VALUES(2,'user','pass123','user@meuemail.pt','User',20);

CREATE TABLE Imovel(
    id_imovel INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    localizacao VARCHAR(255),
    descricao VARCHAR(255),
    valor VARCHAR(255),
    id_utilizador INT, 

    FOREIGN KEY (id_utilizador) REFERENCES Utilizador(id_utilizador)
);

/*INSERT INTO Imovel VALUES(1,'casa de luxo','matosinhos','1200 metros quadrados com piscina','1.500.000,00€',1);
INSERT INTO Imovel VALUES(2,'apartamento','matosinhos','apartamento luxuoso, praia de matosinhos','950.000,00€',1);
INSERT INTO Imovel VALUES(3,'apartamento','porto','apartamento de alto padrao','750.000,00€',1);
INSERT INTO Imovel VALUES(4,'moradia contemporânea','azurara','moradia de luxo, acesso direto a praia','1.200.000,00€',1);*/

INSERT INTO `imovel` VALUES
(1, 'Vivenda de Luxo', 'Matosinhos', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '1.200.000,00€', 1),
(2, 'Moradia contemporânea', 'Matosinhos', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '1.950.000,00€', 1),
(3, 'Apartamento', 'Porto', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '750.000,00€', 1),
(4, 'Vivenda de Luxo', 'Azurara', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '1.200.000,00€', 1),
(5, 'Apartamento', 'Figueira da Foz', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '750.000,00€', 1),
(9, 'Apartamento', 'Sesimbra', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '500.000,00€', 1),
(11, 'Moradia contemporânea', 'Portimão', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '20.000,00€', 1),
(12, 'Vivenda de Luxo', 'Sesimbra', 'Zona de acessos privados, acesso a ginásio e restaurante gourmet', '1.200.000,00€', 1);

CREATE TABLE Upload(
    id_upload INT PRIMARY KEY AUTO_INCREMENT,
    nome VARCHAR(255),
    id_imovel INT,
    FOREIGN KEY (id_imovel) REFERENCES Imovel(id_imovel)
);