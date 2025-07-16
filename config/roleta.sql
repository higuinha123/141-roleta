create database roleta;
use roleta;

create table usuario (
	id int auto_increment primary key,
    nome varchar(40),
    cpf varchar(11),
    email varchar(30),
    senha varchar(30)
);

create table opcoes (
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
insert into opcoes (descricao) values ('trabalho');
insert into opcoes (descricao) values ('videogame');
insert into opcoes (descricao) values ('corrida');
insert into opcoes (descricao) values ('futebol');
insert into opcoes (descricao) values ('estudos');
insert into opcoes (descricao) values ('churrasco');

select * from opcoes;

create table usuario_opcoes (
	usuario_id int,
    opcao_id int,
	PRIMARY KEY (usuario_id, opcao_id),
	FOREIGN KEY (usuario_id) REFERENCES usuario(id),
	FOREIGN KEY (opcao_id) REFERENCES opcoes(id)
);



create table roleta_premios (
	id int auto_increment primary key,
    descricao varchar(100)
);
