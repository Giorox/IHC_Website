-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-10-13 22:41:51.181

-- tables
-- Table: articles
CREATE TABLE articles (
    id smallint unsigned NOT NULL AUTO_INCREMENT,
    publicationDate date NOT NULL,
    title varchar(255) NOT NULL,
    summary text NOT NULL,
    content mediumtext NOT NULL,
    imageExtension varchar(255) NOT NULL,
    tagString varchar(255) NOT NULL,
    CONSTRAINT articles_pk PRIMARY KEY (id)
) COMMENT 'Table that references all articles maintained and their specific info.';

-- Table: news
CREATE TABLE news (
    newsID smallint unsigned NOT NULL AUTO_INCREMENT,
    imageExtension_news varchar(255) NOT NULL,
    content varchar(500) NULL,
    title varchar(255) NULL,
	subtitle varchar(255) NULL,
    CONSTRAINT news_pk PRIMARY KEY (newsID)
) COMMENT 'Table that keeps new entries for the entry-card news carrousel';

-- Table: User messages
CREATE TABLE usermessages (
    messageID smallint unsigned NOT NULL AUTO_INCREMENT,
    name varchar(255) NULL,
	email varchar(255) NULL,
	subject varchar(255) NULL,
	message varchar(500) NULL,
    CONSTRAINT usermessages_pk PRIMARY KEY (messageID)
) COMMENT 'Table that keeps all user messages received through the user form';

-- End of file.

