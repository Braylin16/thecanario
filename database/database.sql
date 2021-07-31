CREATE TABLE users(
id_user             int(250) AUTO_INCREMENT PRIMARY KEY,
name                varchar(100) NOT NULL,
surname             varchar(100) NOT NULL,
email               varchar(100) UNIQUE NOT NULL,
password            varchar(250) NOT NULL,
photo_profile       varchar(250),
browser_user        varchar(200),
ip_user             varchar(200),
status_u            varchar(20),
roll                varchar(20),
create_at_user      datetime
)ENGINE=InnoDb;

CREATE TABLE post(
id_post             int(250) AUTO_INCREMENT PRIMARY KEY,
id_post_user        int(250) NOT NULL,
title               varchar(200) NOT NULL,
description_post    varchar(250) NOT NULL,
category            varchar(50) NOT NULL,
miniatura           varchar(250) NOT NULL,
img_description     varchar(250),
entrada             text NOT NULL,
tags                varchar(250) NOT NULL,
`status`            varchar(50),
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
status_c            varchar(20),
create_at_comment   datetime,
CONSTRAINT fk_comment_post FOREIGN KEY(id_comment_post) REFERENCES post(id_post),
CONSTRAINT fk_comment_user FOREIGN KEY(id_comment_user) REFERENCES users(id_user)
)ENGINE=InnoDb;

CREATE TABLE `view`(
id_view             int(250) AUTO_INCREMENT PRIMARY KEY,
id_view_post        int(250) NOT NULL,
view                int(250),
browser_view        varchar(200),
ip_view             varchar(200),
create_at_view      datetime,
CONSTRAINT fk_view_post FOREIGN KEY(id_view_post) REFERENCES post(id_post)
)ENGINE=InnoDb;

CREATE TABLE suscribe(
id_suscribe         int(250) AUTO_INCREMENT PRIMARY KEY,
email               varchar(200) UNIQUE NOT NULL,
browser_suscribe    varchar(200),
ip_suscribe         varchar(200),
create_at_suscribe  datetime
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
name_c              varchar(100) NOT NULL,
assunt_c            varchar(250) NOT NULL,
email_c             varchar(100) NOT NULL,
message_c           text NOT NULL,
browser_c           varchar(200),
ip_c                varchar(200),
create_at_c         datetime
)ENGINE=InnoDb;