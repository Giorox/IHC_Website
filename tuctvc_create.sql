-- Created by Vertabelo (http://vertabelo.com)
-- Last modification date: 2018-10-13 22:41:51.181

-- tables
-- Table: articles
CREATE TABLE articles (
    id SERIAL NOT NULL,
    title varchar(255) NOT NULL,
    summary text NOT NULL,
    content text NOT NULL,
    imageextension varchar(255) NOT NULL,
    tagstring varchar(255) NOT NULL,
    CONSTRAINT articles_pk PRIMARY KEY (id)
);

-- Table: news
CREATE TABLE news (
    newsid SERIAL NOT NULL,
    imageextension_news varchar(255) NOT NULL,
    content varchar(500) NULL,
    title varchar(255) NULL,
	subtitle varchar(255) NULL,
    CONSTRAINT news_pk PRIMARY KEY (newsid)
);

-- Table: User messages
CREATE TABLE usermessages (
    messageid SERIAL NOT NULL,
    name varchar(255) NULL,
	email varchar(255) NULL,
	subject varchar(255) NULL,
	message varchar(500) NULL,
    CONSTRAINT usermessages_pk PRIMARY KEY (messageid)
);

-- End of file.

