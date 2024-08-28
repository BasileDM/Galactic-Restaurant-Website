CREATE TABLE rest_cook(
   id INT AUTO_INCREMENT,
   firstName VARCHAR(250),
   lastName VARCHAR(100),
   role VARCHAR(100),
   facebook VARCHAR(100),
   twitter VARCHAR(100),
   insta VARCHAR(100),
   PRIMARY KEY(id)
);

CREATE TABLE rest_reservation(
   id_resa INT AUTO_INCREMENT,
   lastName VARCHAR(50),
   mail VARCHAR(100),
   resaDate DATE,
   resaTime TIME,
   numberOfGuests INT,
   isValide BOOLEAN,
   PRIMARY KEY(id_resa)
);

CREATE TABLE rest_admin(
   id_Admin INT AUTO_INCREMENT,
   username VARCHAR(250),
   password VARCHAR(250),
   role VARCHAR(50),
   PRIMARY KEY(id_Admin)
);

CREATE TABLE rest_customer_review(
   id INT AUTO_INCREMENT,
   pictureUrl VARCHAR(250),
   firstName VARCHAR(50),
   lastName VARCHAR(50),
   role VARCHAR(50),
   comments VARCHAR(255),
   PRIMARY KEY(id)
);

CREATE TABLE rest_types_of_dish(
   id_types INT AUTO_INCREMENT,
   name VARCHAR(100),
   PRIMARY KEY(id_types)
);

CREATE TABLE rest_dish(
   id_dish INT AUTO_INCREMENT,
   isRobot BOOLEAN,
   isAvailable BOOLEAN,
   price INT,
   title VARCHAR(100),
   description VARCHAR(250),
   id_types INT NOT NULL,
   PRIMARY KEY(id_dish),
   FOREIGN KEY(id_types) REFERENCES rest_types_of_dish(id_types)
);

CREATE TABLE rest_dish_logs (
   log_id INT AUTO_INCREMENT PRIMARY KEY,
   id_dish INT,
   id_Admin INT,
   modifDate DATETIME,
   FOREIGN KEY (id_dish) REFERENCES rest_dish(id_dish),
   FOREIGN KEY (id_Admin) REFERENCES rest_admin(id_Admin)
);

CREATE TABLE rest_reservation_logs (
   log_id INT AUTO_INCREMENT PRIMARY KEY,
   id_resa INT,
   id_Admin INT,
   modifDate DATETIME NOT NULL,
   FOREIGN KEY (id_resa) REFERENCES rest_reservation(id_resa),
   FOREIGN KEY (id_Admin) REFERENCES rest_admin(id_Admin)
);


INSERT INTO rest_types_of_dish (name) VALUES ('ENTREE');
INSERT INTO rest_types_of_dish (name) VALUES ('PLAT');
INSERT INTO rest_types_of_dish (name) VALUES ('DESSERT');

INSERT INTO rest_admin (username, password, role) VALUES ('admin', '$2y$10$tfBK4jlXBc.HDoBW3cWK2eoH76SJu.rUlTJQa0/JzIaAeE/yfNmLW', 'admin');
INSERT INTO rest_admin (username, password, role) VALUES ('chef', '$2y$10$lTtjAdeOgjv6ei3OsKH2q.vwwVfSaXj/bL5DzpL6q0LnhQV6COfj6', 'chef');

INSERT INTO rest_cook (firstName, lastName, role, facebook, twitter, insta) VALUES ('Jane', 'Doe', 'cook', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com');
INSERT INTO rest_cook (firstName, lastName, role, facebook, twitter, insta) VALUES ('John', 'Doe', 'cook', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com');
INSERT INTO rest_cook (firstName, lastName, role, facebook, twitter, insta) VALUES ('Sam', 'Smith', 'cook', 'https://www.facebook.com', 'https://www.twitter.com', 'https://www.instagram.com');

INSERT INTO rest_customer_review (pictureUrl, firstName, lastName, role, comments) 
VALUES ('assets/imgs/Clients/Client1.png', 'Predator', '', 'Guest', 'Excellent service, recommande fortement!');
INSERT INTO rest_customer_review (pictureUrl, firstName, lastName, role, comments) 
VALUES ('assets/imgs/Clients/Client2.png', 'Stellar', 'Dogg', 'Guest', 'Très satisfait de la qualité!');
INSERT INTO rest_customer_review (pictureUrl, firstName, lastName, role, comments) 
VALUES ('assets/imgs/Clients/Client3.png', 'Alexa', 'Johnson', 'Guest', 'An amazing experience from start to finish.');
INSERT INTO rest_customer_review (pictureUrl, firstName, lastName, role, comments) 
VALUES ('assets/imgs/Clients/Client4.png', 'Michael', 'Brown', 'Guest', 'Would definitely use this service again.');
INSERT INTO rest_customer_review (pictureUrl, firstName, lastName, role, comments) 
VALUES ('assets/imgs/Clients/Client5.png', 'X-22-', '7Z20', 'Guest', 'Professional and reliable service.');

INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types) 
VALUES (0, 1, 100, 'Tartare de Sphères de Neptune', 'Sphères translucides d''algues galactiques marinées, servies avec des éclats de météorites et une vinaigrette aux étoiles filantes.', 1);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types) 
VALUES (0, 1, 120, 'Soupe de Gaz Interstellaire', 'Soupe chaude à base de gaz interstellaire, parfumée aux épices de la nébuleuse et garnie de croûtons d''astéroïdes.', 1);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types) 
VALUES (0, 1, 150, 'Salade De Comètes Et Étoiles', 'Mélange de jeunes pousses de planètes lointaines, tomates d''amas stellaires et éclats de comètes, avec une vinaigrette de nébuleuse.', 1);

INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (0, 1, 100, 'Ragoût de Bételgeuse aux Fragments de Comète', 'Morceaux tendres de viande interstellaire mijotés dans une sauce riche aux fragments de comète, accompagnés de légumes d''astéroïdes et d''une purée de pommes de terre lunaires.', 2);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (0, 1, 120, 'Filet d''Exoplanète aux Éclats de Supernova', 'Filet de poisson d''exoplanète poêlé, servi sur un lit de légumes galactiques et nappé d''une sauce aux éclats de supernova.', 2);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (0, 1, 150, 'Magret de Canard à la Sauce Pulsar', 'Magret de canard rôti, nappé d''une sauce aux épices de pulsar et servi avec des pommes de terre de Titan et des légumes de la ceinture d''astéroïdes.', 2);

INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (0, 1, 100, 'Gelato Nebulaire à la Vanille d''Orion', 'Sphère translucides d''algues galactiques marinées, servies avec des éclats de méorites et une vinaigrette aux étoiles filantes.', 3);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (0, 1, 120, 'Tarte de Pluton aux Framboises Cosmiques', 'Soupe chaude à base de gaz interstellaire, parfumée aux éclats de la brouille, avec une vinaigrette de gaz interstellaire.', 3);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (0, 1, 120, 'Tarte d''Oasis D''Étoiles Filantes au Miel Interstellaire', 'Tarte aux fruits les plus rares de la galaxie, nappée d''un miel extrait des fleurs les plus précieuses des étoiles, accompagnée d''une glace d''étoiles filantes et servie avec des glands d''astéroïdes.', 3);

INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (1, 1, 800, 'Soupape de Refroidissement au Titanite', 'Un bouillon d''alliage Titanite, enrichi d''hydrates de carbone métalliques et de nano-particules de lubrifiant, pour une entrée rafraîchissante et énergisante.', 1);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (1, 1, 900, 'Morceaux de Mécanochrome en Fusion', 'Blocs de Mécanochrome à haute conductivité, grillés à haute température dans un réacteur plasma. Servis avec un accompagnement de roulements à billes et de ressorts cuits à la vapeur.', 2);
INSERT INTO rest_dish (isRobot, isAvailable, price, title, description, id_types)
VALUES (1, 1, 1500, 'Concentré d''Énergie Solaire', 'Gelée d''essence solaire concentrée, enrichie de particules de silicium et de couches de graphène, pour une touche finale électrisante.', 3);