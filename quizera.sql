use quizera;
alter table pergunta_estudo ADD enunciado VARCHAR(100) after Num_questao_est;
 CREATE TABLE materia (
  Cod_materia int NOT NULL primary KEY,
  Nome_materia varchar(45) NOT NULL);
  
  CREATE TABLE perguntas_diversao (
  Cod_resposta_diver int NOT NULL PRIMARY KEY,
  Num_questao_diver int NOT NULL);
  
  CREATE TABLE perguntas_estudo (
  Num_questao_est int NOT NULL primary key,
  Cod_resposta_est int NOT NULL,
  Cod_materia int NOT NULL);
  
  CREATE TABLE respostas_diversao (
 Cod_resposta_diver int NOT NULL primary key,
  Num_questao_diver int(11) NOT NULL);
  
  CREATE TABLE respostas_estudo (
  Cod_resposta_est int NOT NULL primary key,
  Num_questao_est int NOT NULL,
  Cod_materia int NOT NULL);
  
  CREATE TABLE conta_premium (
  Id_usuario int NOT NULL primary key,
  Nome varchar(45) NOT NULL,
  Email varchar(45) NOT NULL,
  SenhaP  decimal(8,0) NOT NULL);
  
  CREATE TABLE usuario (
  Cod_Usuario int NOT NULL primary key);
  


 




