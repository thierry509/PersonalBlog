CREATE DATABASE IF NOT EXISTS blog;

CREATE TABLE IF NOT EXISTS post(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    title VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL
);

CREATE TABLE IF NOT EXISTS comment(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    post_id VARCHAR(255) NOT NULL,
    author VARCHAR(255) NOT NULL,
    content TEXT NOT NULL,
    created_at DATETIME NOT NULL,
    FOREIGN KEY (post_id)
    REFERENCES post(id)
    ON DELETE CASCADE 
);

CREATE table IF NOT EXISTS fragment(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    post_id VARCHAR(255) NOT NULL,
    title VARCHAR(255) NOT NULL, 
    content VARCHAR(255) NOT NULL,
    ind INTEGER NOT NULL UNIQUE,
    FOREIGN KEY (post_id)
    REFERENCES post(id)
    ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS image(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    fragment_id VARCHAR(255) NULL,
    FOREIGN KEY (fragment_id)
    REFERENCES fragment(id)
    ON DELETE CASCADE
);

CREATE TABLE IF NOT EXISTS category(
    id VARCHAR(255) NOT NULL PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description VARCHAR(255)
);

CREATE TABLE IF NOT EXISTS post_category(
    category_id VARCHAR(255) NOT NULL,
    post_id VARCHAR(255) NOT NULL,
    FOREIGN KEY (category_id)
    REFERENCES category(id)
    ON DELETE CASCADE,
    FOREIGN KEY (post_id)
    REFERENCES post(id)
    ON DELETE CASCADE,
    PRIMARY KEY(category_id, post_id)
);
-- Insert random data for the test

INSERT INTO post(
    id,title,created_at
)VALUES(
    'eeyru12217',
    'Koman ou ka kreye yon sit entenet san ou pa ekri yon liy kod',
    NOW()
);

INSERT INTO post(
    id,title,created_at
)VALUES(
    'dksd8211',
    'Avantaj lew genyen yon sit entenet pou antrepriz ou',
    NOW()
);

INSERT INTO post(
    id,title,created_at
)VALUES(
    'ksks221',
    'JavaScript yon revolisyon, posiblite pou kapab kreye tout kalite logisyel avek yon sel langaj',
    NOW()
);

INSERT INTO post(
    id,title,created_at
)VALUES(
    'ksks22ee1',
    'JavaScript yon revolisyon, posiblite pou kapab kreye tout kalite logisyel avek yon sel langaj',
    NOW()
);


INSERT INTO fragment(
    id, post_id, title, content, ind
)VALUES(
    'fjfjfj1313412',
    'eeyru12217',
    'Avant de partir tête baissé dans l’énumération des 10 avantages d’utiliser WordPress pour créer un site internet',
    'Avant de partir tête baissé dans l’énumération des 10 avantages d’utiliser WordPress pour créer un site internet, rappelons-nous ce que qu’est WordPress ! WordPress est un logiciel open source, c’est à dire libre et gratuit, pour créer des sites internet et blogs. Dans le monde, aujourd’hui 35% des sites web sont des sites WordPress. Ces sites peuvent être des blogs personnels comme des sites d’actualités ou encore des sites d’entreprises multinationales. WordPress est aussi appelé un CMS pour Content Management System. En français, c’est un logiciel de gestion de contenus. ',
1
);

INSERT INTO fragment(
    id, post_id, title, content, ind
)VALUES(
    'ffkk232113',
    'eeyru12217',
    'Avant de partir tête baissé dans l’énumération des 10 avantages d’utiliser WordPress pour créer un site internet',
    'Avant de partir tête baissé dans l’énumération des 10 avantages d’utiliser WordPress pour créer un site internet, rappelons-nous ce que qu’est WordPress ! WordPress est un logiciel open source, c’est à dire libre et gratuit, pour créer des sites internet et blogs. Dans le monde, aujourd’hui 35% des sites web sont des sites WordPress. Ces sites peuvent être des blogs personnels comme des sites d’actualités ou encore des sites d’entreprises multinationales. WordPress est aussi appelé un CMS pour Content Management System. En français, c’est un logiciel de gestion de contenus. ',
2
);

INSERT INTO category(
    id, name, description
)VALUES(
    'krejr131',
    'programasyon',
    'qqjfjffjfjfjfjf'
);

INSERT INTO category(
    id, name, description
)VALUES(
    'ddfjkj2232',
    'Biznis',
    'qqjfjffjfjfjfjf'
);
INSERT INTO category(
    id, name, description
)VALUES(
    'ffhjf291313',
    'Enfomatik',
    'qqjfjffjfjfjfjf'
);

INSERT INTO post_category(
    category_id,
    post_id
)VALUES(
    'ffhjf291313',
    'dksd8211'
);

SELECT p.id, p.title, p.created_at, c.id category_id, c.name AS categoy
 from post p
JOIN post_category pc ON p.id = pc.post_id
JOIN category c ON c.id = pc.category_id;
