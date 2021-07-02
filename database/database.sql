CREATE DATABASE thecanario;
USE thecanario;

CREATE TABLE users(
id_user             int(250) AUTO_INCREMENT PRIMARY KEY,
name                varchar(100) NOT NULL,
surname             varchar(100) NOT NULL,
email               varchar(100) UNIQUE NOT NULL,
password            varchar(250) NOT NULL,
photo_profile       varchar(250),
browser_user        varchar(200),
ip_user             varchar(200),
create_at_user      datetime
)ENGINE=InnoDb;

CREATE TABLE post(
id_post             int(250) AUTO_INCREMENT PRIMARY KEY,
id_post_user        int(250) NOT NULL,
title               varchar(200) NOT NULL,
description_post    varchar(250) NOT NULL,
category            varchar(50) NOT NULL,
miniatura           varchar(250) NOT NULL,
entrada             text NOT NULL,
tags                varchar(250) NOT NULL,
browser_post        varchar(200),
ip_post             varchar(200),
create_at_post      datetime,
CONSTRAINT fk_post_user FOREIGN KEY(id_post_user) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE comments(
id_comment          int(250) AUTO_INCREMENT PRIMARY KEY,
id_comment_post     int(250) NOT NULL,
id_comment_user     int(250) NOT NULL,
comment             text NOT NULL,
browser_comment     varchar(200),
ip_comment          varchar(200),
create_at_comment   datetime,
CONSTRAINT fk_comment_post FOREIGN KEY(id_comment_post) REFERENCES post(id_post),
CONSTRAINT fk_comment_user FOREIGN KEY(id_comment_user) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE like_post(
id_like             int(250) AUTO_INCREMENT PRIMARY KEY,
id_like_post        int(250) NOT NULL,
id_like_user        int(250) NOT NULL,
like_post           int(250) NOT NULL,
browser_like_pot    varchar(200),
ip_like_post        varchar(200),
create_at_like_post datetime,
CONSTRAINT fk_like_post_post FOREIGN KEY(id_like_post) REFERENCES post(id_post),
CONSTRAINT fk_like_post_user FOREIGN KEY(id_like_user) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE like_comment(
id_like_c           int(250) AUTO_INCREMENT PRIMARY KEY,
id_like_c_post      int(250) NOT NULL,
id_like_c_user      int(250) NOT NULL,
id_like_c_comment   int(250) NOT NULL,
like_comment        int(250) NOT NULL,
browser_like_c      varchar(200),
ip_like_c           varchar(200),
create_at_like_c    datetime,
CONSTRAINT fk_like_c_post FOREIGN KEY(id_like_c_post) REFERENCES post(id_post),
CONSTRAINT fk_like_c_user FOREIGN KEY(id_like_c_user) REFERENCES users(id_user),
CONSTRAINT fk_like_c_comment FOREIGN KEY(id_like_c_comment) REFERENCES comments(id_comment)
)ENGINE=InnoDb;

CREATE TABLE `view`(
id_view             int(250) AUTO_INCREMENT PRIMARY KEY,
id_view_post        int(250) NOT NULL,
id_view_user        int(250),
view                int(250),
browser_view        varchar(200),
ip_view             varchar(200),
create_at_view      datetime,
CONSTRAINT fk_view_post FOREIGN KEY(id_view_post) REFERENCES post(id_post),
CONSTRAINT fk_view_user FOREIGN KEY(id_view_user) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE search(
id_search           int(250) AUTO_INCREMENT PRIMARY KEY,
search              varchar(250),
browser_search      varchar(200),
ip_search           varchar(200),
create_at_search    datetime
)ENGINE=InnoDb;

CREATE TABLE contact(
id_contact          int(250) AUTO_INCREMENT PRIMARY KEY,
id_contact_user     int(250),
name_c              varchar(100) NOT NULL,
surname_c           varchar(100) NOT NULL,
email_c             varchar(100) NOT NULL,
message_c           text NOT NULL,
browser_contact     varchar(200),
ip_contact          varchar(200),
crate_at_contact    datetime,
CONSTRAINT fk_contact_user FOREIGN KEY(id_contact_user) REFERENCES users(id_user)
)ENGINE=InnoDb;