/*OBS .:. Este script contem a criacao da tabela, o banco deve ser criado primeiro. Vc pode usar o CREATE DATABASE nome_do_banco; depois usar o comando USE nome_do_banco;*/
#USE aact_bd;

CREATE TABLE enquete(
	id INT(11) NOT NULL AUTO_INCREMENT,
    opt SET('Mercedes','Redbull','Ferrari'),
    data_registro TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    PRIMARY KEY (id));
    
    describe enquete;
    select * from enquete;

    