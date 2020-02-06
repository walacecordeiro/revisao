--entrar no shell
mysql -u root

--visualizar os bancos existentes

show databases;

--criar banco de dados
create database aula2git;

--selecionar base de dados
use aula2git;

--criar uma tabela no banco de dados
create table usuario(
    idusuario int primary key auto_increment
)