use prosigned;

-- EXERCICE SQL -- 1. Créer une base de données "blog" et une table "articles" avec les champs suivants : 
-- 1. Créer une base de données "blog" : 
    CREATE DATABASE IF NOT EXIST blog; 
-- 2. Créer une table "articles" avec les champs suivants : 
    CREATE TABLE IF NOT EXIST articles (
        id INT NOT NULL AUTO_INCREMENT,
        title VARCHAR(255) NOT NULL,
        content TEXT NOT NULL,
        created_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        updated_at TIMESTAMP NOT NULL DEFAULT CURRENT_TIMESTAMP,
        PRIMARY KEY (id)
    );

-- 3. Créer une table authors avec les champs suivants : 
    CREATE TABLE authors (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    );

-- 4. Créer une table articles_authors avec les champs suivants :
    CREATE TABLE IF NOT EXIST articles_authors (
        id INT NOT NULL AUTO_INCREMENT,
        article_id INT NOT NULL,
        author_id INT NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (article_id) REFERENCES articles(id),
        FOREIGN KEY (author_id) REFERENCES authors(id)
    );

-- 3. Créer une table "comments" avec les champs suivants : 
    CREATE TABLE IF NOT EXIST comments (
        id INT NOT NULL AUTO_INCREMENT,
        content TEXT NOT NULL,
        article_id INT NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (article_id) REFERENCES articles(id) ON DELETE CASCADE -- ON DELETE CASCADE : supprime les commentaires liés à l'article supprimé
    );

-- 4. Créer une table "users" avec les champs suivants :
    CREATE TABLE IF NOT EXIST users (
        id INT NOT NULL AUTO_INCREMENT,
        name VARCHAR(255) NOT NULL,
        email VARCHAR(255) NOT NULL,
        PRIMARY KEY (id)
    );

-- 5. Créer une table "users_articles" avec les champs suivants :
    CREATE TABLE IF NOT EXIST users_articles (
        id INT NOT NULL AUTO_INCREMENT,
        user_id INT NOT NULL,
        article_id INT NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE, -- 
        FOREIGN KEY (article_id) REFERENCES articles(id) ON DELETE CASCADE
    );

-- 6. Créer une table "users_comments" avec les champs suivants :
    CREATE TABLE IF NOT EXIST users_comments (
        id INT NOT NULL AUTO_INCREMENT,
        user_id INT NOT NULL,
        comment_id INT NOT NULL,
        PRIMARY KEY (id),
        FOREIGN KEY (user_id) REFERENCES users(id) ON DELETE CASCADE,
        FOREIGN KEY (comment_id) REFERENCES comments(id) ON DELETE CASCADE
    );

-- 7. ON INSERT LES DONNEES DANS LA TABLE articles AINSI QUE L'AUTEUR DE L'ARTICLE:

    INSERT INTO articles (title, content, author) 

    INSERT INTO users_articles (id, user_id, article_id, comment_id) VALUES (1, 1, 1, 1);
    INSERT INTO users_articles (id, user_id, article_id, comment_id) VALUES (2, 2, 2, 2);
    INSERT INTO users_articles (id, user_id, article_id, comment_id) VALUES (3, 3, 3, 3);
    INSERT INTO users_articles (id, user_id, article_id, comment_id) VALUES (4, 4, 4, 4);


   -- id, title, content, created_at, updated_at
   -- id (int, clé primaire, auto-incrément), title (varchar 255), content (text), created_at (datetime), updated_at (datetime)
-- 2. Insérer 3 articles dans la table "articles"  avec les champs suivants : 
   -- 
-- 1. Créer une table users avec les champs id, name, email
-- 2. Insérer 3 utilisateurs dans la table
-- 3. Afficher tous les utilisateurs
-- 4. Afficher l'utilisateur avec l'id 2
-- 5. Modifier l'utilisateur avec l'id 2
-- 6. Supprimer l'utilisateur avec l'id 3
-- 7. Modifier l'utilisateur avec l'id 3

INSERT INTO users (name, email) VALUES ('John', '');
# 2. Créer une table posts avec les champs id, title, content, user_id
# 3. Créer une table comments avec les champs id, content, post_id, user_id
