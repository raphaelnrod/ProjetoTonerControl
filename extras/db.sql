USE TONERCONTROL;

DROP TABLE IF EXISTS secretaria, impressora, toner, users;
CREATE TABLE users (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    password VARCHAR(100) NOT NULL,
    username VARCHAR(30) UNIQUE NOT NULL,
    is_admin BOOLEAN NOT NULL DEFAULT false
);
CREATE TABLE setor (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    name VARCHAR(100) NOT NULL,
    secretaria VARCHAR(100), NOT NULL
);
CREATE TABLE impressora (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    setor_id INT(6),
    name VARCHAR(100) NOT NULL

    FOREIGN KEY (setor_id) REFERENCES setor(id)
);
CREATE TABLE toner (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    impressora_id INT(6),
    name VARCHAR(100) NOT NULL,
    qtde_impress_atual INT(8) NOT NULL,
    qtde_impress_toner INT,
    recarregado BOOLEAN NOT NULL DEFAULT false

    FOREIGN KEY (impressora_id) REFERENCES impressora(id)
    CONSTRAINT cons_qtd_imprimida UNIQUE (impressora_id, qtde_impress_toner)
);

-- Essa senha criptografada corresponde ao valor "a"
INSERT INTO users (id, name, password, username, is_admin)
VALUES (1, 'Raphael', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'raphael', 1);

INSERT INTO users (id, name, password, username, is_admin)
VALUES (2, 'Antonio', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'antonio', 1);

INSERT INTO users (id, name, password, username, is_admin)
VALUES (3, 'Diego', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'diego', 1);

INSERT INTO users (id, name, password, username, is_admin)
VALUES (4, 'UserTest', '$2y$10$/vC1UKrEJQUZLN2iM3U9re/4DQP74sXCOVXlYXe/j9zuv1/MHD4o.', 'usertest', 0);
