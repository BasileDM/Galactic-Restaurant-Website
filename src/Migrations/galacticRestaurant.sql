CREATE TABLE Rest_Cook(
   id COUNTER,
   firstName VARCHAR(250),
   lastName VARCHAR(100),
   role VARCHAR(100),
   facebook VARCHAR(100),
   twitter VARCHAR(100),
   insta VARCHAR(100),
   PRIMARY KEY(id)
);

CREATE TABLE Rest_Reservation(
   id_resa COUNTER,
   lastName VARCHAR(250),
   mail VARCHAR(100),
   resaDate DATE,
   resaTime TIME,
   numberOfGuests INT,
   isValide LOGICAL,
   PRIMARY KEY(id_resa)
);

CREATE TABLE Rest_Admin(
   id_Admin COUNTER,
   username VARCHAR(250),
   password VARCHAR(250),
   role VARCHAR(50),
   PRIMARY KEY(id_Admin)
);

CREATE TABLE Rest_Customer_Review(
   id COUNTER,
   pictureUrl VARCHAR(250),
   firstName VARCHAR(50),
   lastName VARCHAR(50),
   role VARCHAR(50),
   comments VARCHAR(255),
   PRIMARY KEY(id)
);

CREATE TABLE typesOfDish(
   id_types COUNTER,
   name VARCHAR(100),
   PRIMARY KEY(id_types)
);

CREATE TABLE id_dish(
   id_dish COUNTER,
   isRobot LOGICAL,
   isAvailable LOGICAL,
   price INT,
   title VARCHAR(100),
   description VARCHAR(250),
   id_types INT NOT NULL,
   PRIMARY KEY(id_dish),
   FOREIGN KEY(id_types) REFERENCES typesOfDish(id_types)
);

CREATE TABLE define(
   id_dish INT,
   id_Admin INT,
   modifDate DATETIME,
   PRIMARY KEY(id_dish, id_Admin),
   FOREIGN KEY(id_dish) REFERENCES id_dish(id_dish),
   FOREIGN KEY(id_Admin) REFERENCES Rest_Admin(id_Admin)
);

CREATE TABLE manage(
   id_resa INT,
   id_Admin INT,
   modifDate DATETIME NOT NULL,
   PRIMARY KEY(id_resa, id_Admin),
   FOREIGN KEY(id_resa) REFERENCES Rest_Reservation(id_resa),
   FOREIGN KEY(id_Admin) REFERENCES Rest_Admin(id_Admin)
);
