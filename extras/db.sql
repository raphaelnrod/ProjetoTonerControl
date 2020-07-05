USE toner_control;

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
    secretaria VARCHAR(100) NOT NULL
);
CREATE TABLE impressora (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    setor_id INT(6),
    name VARCHAR(100) NOT NULL,
    valor_atual INT(10) NOT NULL,
    FOREIGN KEY (setor_id) REFERENCES setor(id)
);

CREATE TABLE registro (
    id INT(6) AUTO_INCREMENT PRIMARY KEY,
    impressora_id INT(6),
    data_registro DATE NOT NULL,
    rendimento INT(10),
    FOREIGN KEY (impressora_id) REFERENCES impressora(id),
    CONSTRAINT cons_registry UNIQUE (impressora_id, data_registro)
);

CREATE TABLE toner (
    id INT(6) AUTO_INCREMENT PRIMARY KEY, 
    imp_id INT(6),
    modelo VARCHAR(100) NOT NULL,
    recarregado BOOLEAN NOT NULL,
    FOREIGN KEY (imp_id) REFERENCES impressora(id)
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