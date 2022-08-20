create database templatephp;

use templatephp;

create table articles(
id_article int auto_increment primary key not null,
titre_article varchar(50),
texte_article text
);