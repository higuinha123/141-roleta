create database roletaBD;
use roletaBD;
drop database roletaBD;

create table usuario (
	id int auto_increment primary key,
    nome varchar(40),
    cpf varchar(11),
    email varchar(30),
    senha varchar(30),
    moedas int default 0
);

CREATE TABLE coleta_moedas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    usuario_id INT NOT NULL,
    ultima_coleta DATETIME NOT NULL DEFAULT NOW(),
    FOREIGN KEY (usuario_id) REFERENCES usuario(id) ON DELETE CASCADE
);


create table opcoes (
	id int auto_increment primary key,
    descricao varchar(100)
);

create table interesses (
    id int auto_increment primary key,
    descricao varchar(100)
);


insert into opcoes (descricao) values ('bebidas');
insert into opcoes (descricao) values ('snacks');
insert into opcoes (descricao) values ('chocolate');
insert into opcoes (descricao) values ('congelados');
insert into opcoes (descricao) values ('temperos');
insert into opcoes (descricao) values ('higiene');
insert into opcoes (descricao) values ('outros');

insert into interesses (descricao) values ('trabalho');
insert into interesses (descricao) values ('videogame');
insert into interesses (descricao) values ('corrida');
insert into interesses (descricao) values ('futebol');
insert into interesses (descricao) values ('estudos');
insert into interesses (descricao) values ('churrasco');
insert into interesses (descricao) values ('outros');

select * from opcoes;

create table usuario_opcoes (
	usuario_id int,
    opcao_id int,
    interesse_id int,
	PRIMARY KEY (usuario_id, opcao_id, interesse_id),
	FOREIGN KEY (usuario_id) REFERENCES usuario(id),
	FOREIGN KEY (opcao_id) REFERENCES opcoes(id),
    FOREIGN KEY (interesse_id) REFERENCES interesses(id)
);

create table roleta_premios (
	id int auto_increment primary key,
    descricao varchar(100)
);

create table usario_premios (
	usuario_id int,
    premio_id int,
    primary key (usario_id, premio_id),
	foreign key (usario_id) references usuario(id),
    foreign key (premio_id) references roleta_premios(id)
);
