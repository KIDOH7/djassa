CREATE TABLE users (
    id INT(11) UNSIGNED NOT NULL AUTOINCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    number_phone INT(11) NOT NULL,
    user_pic TEXT() NOT NULL,
    PRIMARY KEY (id)
)

CREATE TABLE admins (
    id INT(11) UNSIGNED NOT NULL AUTOINCREMENT,
    pseudo VARCHAR(255) NOT NULL,
    email VARCHAR(255) NOT NULL,
    number_phone INT(11) NOT NULL,
    user_pic TEXT() NOT NULL,
    password TEXT() NOT NULL,
    PRIMARY KEY (id)
)





CREATE TABLE man (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    product_pic1 TEXT NOT NULL,
    product_pic2 TEXT NOT NULL,
    product_pic3 TEXT NOT NULL,
    product_pic4 TEXT NOT NULL,
    price INT(11) NOT NULL,
    content TEXT(10255) NOT NULL,
    create_at DATE NOT NULL,
    PRIMARY KEY (id)
)



CREATE TABLE woman (
    id INT(11) UNSIGNED NOT NULL AUTO_INCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    product_pic1 TEXT NOT NULL,
    product_pic2 TEXT NOT NULL,
    product_pic3 TEXT NOT NULL,
    product_pic4 TEXT NOT NULL,
    price INT(11) NOT NULL,
    content TEXT(10255) NOT NULL,
    create_at DATE NOT NULL,
    PRIMARY KEY (id)
)

CREATE TABLE childs (
    id INT(11) UNSIGNED NOT NULL AUTOINCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    product_pic1 TEXT() NOT NULL,
    product_pic2 TEXT() NOT NULL,
    product_pic3 TEXT() NOT NULL,
    product_pic4 TEXT() NOT NULL,
    price INT(11) NOT NULL,
    content TEXT(10255) NOT NULL,
    create_at DATE NOT NULL,
    PRIMARY KEY (id)
)

CREATE TABLE Accessory (
    id INT(11) UNSIGNED NOT NULL AUTOINCREMENT,
    name VARCHAR(255) NOT NULL,
    slug VARCHAR(255) NOT NULL,
    product_pic1 TEXT() NOT NULL,
    product_pic2 TEXT() NOT NULL,
    product_pic3 TEXT() NOT NULL,
    product_pic4 TEXT() NOT NULL,
    price INT(11) NOT NULL,
    content TEXT(10255) NOT NULL,
    create_at DATE NOT NULL,
    PRIMARY KEY (id)
)

CREATE TABLE produits (
    man_id INT UNSIGNED NOT NULL ,
    woman_id INT UNSIGNED NOT NULL ,
    childs_id INT UNSIGNED NOT NULL ,
    accessory_id INT UNSIGNED NOT NULL ,
    PRIMARY KEY (man_id,woman_id,childs_id,accessory_id),
    CONSTRAINT fk_man
            FOREIGN KEY (man_id)
            REFERENCES man(id)
            ON DELETE CASCADE
            ON UPDATE RESTRICT,
    CONSTRAINT fk_woman
            FOREIGN KEY (woman_id)
            REFERENCES woman(id)
            ON DELETE CASCADE
            ON UPDATE RESTRICT,
    CONSTRAINT fk_childs
            FOREIGN KEY (childs_id)
            REFERENCES childs(id)
            ON DELETE CASCADE
            ON UPDATE RESTRICT,
    CONSTRAINT fk_accessory
            FOREIGN KEY (accessory_id)
            REFERENCES accessory(id)
            ON DELETE CASCADE
            ON UPDATE RESTRICT,
)